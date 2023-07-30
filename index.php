<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Customer</title>

    <!-- Link eksternal untuk menggunakan Bootstrap dan file CSS kustom -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mt-5">
                    <div class="card-header text-center">
                        <h3>Data Customer</h3>
                    </div>
                    <div class="card-body">
                        <!-- Formulir untuk mengumpulkan data pelanggan -->
                        <form id="customerForm">

                            <div class="form-group">
                                <!-- label dan input untuk nama -->
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" id="nama" required>
                            </div>

                            <div class="form-group">
                                <!-- label dan input untuk kelamin -->
                                <label>Jenis Kelamin</label>
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" id="jenis_kelamin_pria" name="jenis_kelamin" value="Pria" required>
                                    <label class="form-check-label" for="jenis_kelamin_pria">Pria</label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" id="jenis_kelamin_wanita" name="jenis_kelamin" value="Wanita" required>
                                    <label class="form-check-label" for="jenis_kelamin_wanita">Wanita</label>
                                </div>
                            </div>
                            
                            <!-- Tombol untuk mengirim data formulir -->
                            <button type="submit" class="btn btn-primary">Kirim Data</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-6 mt-5">
                <!-- Tabel untuk menampilkan data pelanggan -->
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                        </tr>
                    </thead>
                    <tbody id="customerTable">
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Script eksternal untuk menggunakan jQuery, Bootstrap JS, dan file CS kustom -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="script.js"></script>
</body>
</html>
