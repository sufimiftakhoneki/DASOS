<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    
    <!-- Memuat Bootstrap dari CDN -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</head>
<body>

    <!-- Container untuk halaman login -->
    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh; background-color: #f8f9fa;">
        
        <!-- Card untuk login -->
        <div class="card shadow-lg" style="max-width: 400px; width: 100%;">
            <div class="card-header bg-primary text-white text-center">
                <h4>Login</h4>
            </div>
            <div class="card-body">
                
                <!-- Informasi kredensial default login -->
                <div class="alert alert-info">
                    <strong>Info:</strong><br> Username: <b>admin</b>,<br> Password: <b>admin123</b>
                </div>

                <!-- Form login -->
                <form id="loginForm" method="post">
                    <div class="form-group">
                        <label for="username">Username:</label>
                        <input type="text" class="form-control" id="username" name="username" required value="admin"> <!-- Default username -->
                    </div>
                    
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" id="password" name="password" required value="admin123"> <!-- Default password -->
                    </div>
                    
                    <button type="submit" class="btn btn-primary btn-block">Login</button>
                </form>
                
                <!-- Tempat untuk menampilkan pesan respons -->
                <div id="loginResponse" class="mt-3"></div>
            </div>
        </div>
        
    </div>

    <!-- Script jQuery dan AJAX untuk login -->
    <script>
        $(document).ready(function(){
            // Ketika form disubmit
            $('#loginForm').on('submit', function(e){
                e.preventDefault(); // Mencegah reload halaman

                // Ambil data form
                var username = $('#username').val();
                var password = $('#password').val();

                // Kirim data login menggunakan AJAX
                $.ajax({
                    url: '<?php echo site_url("login/authenticate"); ?>',  // URL ke controller authenticate
                    type: 'POST',
                    data: { username: username, password: password },
                    dataType: 'json',
                    success: function(response){
                        if(response.status == 'success'){
                            // Tampilkan pesan sukses
                            $('#loginResponse').html('<div class="alert alert-success">' + response.message + '</div>');
                        } else {
                            // Tampilkan pesan error
                            $('#loginResponse').html('<div class="alert alert-danger">' + response.message + '</div>');
                        }
                    },
                    error: function(){
                        $('#loginResponse').html('<div class="alert alert-danger">Terjadi kesalahan. Coba lagi!</div>');
                    }
                });
            });
        });
    </script>

</body>
</html>
