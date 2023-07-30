$(document).ready(function () {
  let customers = []; // Data customer akan disimpan dalam variabel ini

  // Ambil data customer dari file JSON eksternal saat halaman pertama kali dimuat
  $.ajax({
    type: 'GET',
    url: 'data_customer.json',
    dataType: 'json',
    success: function (data) {
      customers = data;
      displayData(); // Tampilkan data dari file JSON pada tabel
    },
    error: function () {
      alert('Gagal memuat data customer.');
    },
  });

  // Tangkap form ketika dikirimkan
  $('#customerForm').submit(function (event) {
    event.preventDefault();

    // Ambil data dari form
    const nama = $('#nama').val();
    const jenisKelamin = $("input[name='jenis_kelamin']:checked").val();

    // Tambahkan data customer ke dalam array
    customers.push({ nama, jenisKelamin });

    // Simpan data customer ke file JSON eksternal
    saveDataToJson();

    // Tampilkan data pada tabel
    displayData();

    // Kosongkan form setelah data terkirim
    $('#nama').val('');
    $("input[name='jenis_kelamin']").prop('checked', false);
  });

  // Tangkap klik pada tombol "Buat Lagi" untuk mengosongkan form
  $('#resetButton').click(function (event) {
    event.preventDefault();

    // Kosongkan form
    $('#nama').val('');
    $("input[name='jenis_kelamin']").prop('checked', false);
  });

  // Tangkap klik pada tombol "Delete" untuk menghapus data dari tabel dan file JSON
  $(document).on('click', '.deleteButton', function (event) {
    event.preventDefault();

    // Ambil indeks baris yang akan dihapus
    const index = $(this).data('index');

    // Hapus data customer dari array berdasarkan indeks
    customers.splice(index, 1);

    // Simpan data customer ke file JSON eksternal setelah menghapus
    saveDataToJson();

    // Tampilkan data pada tabel setelah menghapus
    displayData();
  });

  function displayData() {
    const customerTable = $('#customerTable');

    // Kosongkan tabel
    customerTable.empty();

    // Tampilkan data customer pada tabel
    customers.forEach((customer, index) => {
      const row = `
                <tr>
                    <td>${customer.nama}</td>
                    <td>${customer.jenisKelamin}</td>
                    <td><button class="btn btn-danger deleteButton" data-index="${index}">Delete</button></td>
                </tr>
            `;
      customerTable.append(row);
    });
  }

  function saveDataToJson() {
    // Kirim data customer ke file JSON eksternal melalui Ajax
    $.ajax({
      type: 'POST',
      url: 'save_data.php', // Buat file PHP dengan nama "save_data.php" untuk menyimpan data ke file JSON
      data: JSON.stringify(customers),
      success: function () {
        // Tampilkan pesan sukses (opsional)
        // alert("Data customer berhasil disimpan.");
      },
      error: function () {
        alert('Gagal menyimpan data customer.');
      },
      contentType: 'application/json',
    });
  }
});
