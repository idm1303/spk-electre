<!DOCTYPE html>
<html lang="en">
<head>
	<title><?= $title; ?></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?= base_url(); ?>assets/templates/login/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/templates/login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/templates/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/templates/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/templates/login/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/templates/login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/templates/login/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/templates/login/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/templates/login/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/templates/login/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/templates/login/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
                <?= form_open(base_url('registrasi'), 'class="login100-form validate-form" id="myform"'); ?>
                    <span class="login100-form-title p-b-33">
						Daftar Akun
					</span>
                    <?php 
                        // Notifikasi error
                        echo validation_errors('<div class="alert alert-warning">','</div>');

                        // notifikasi gagal login
                        if( $this->session->flashdata('warning') ) {
                            $message = $this->session->flashdata('warning');
                            echo "<script type='text/javascript'>alert('$message');</script>";
                        }

                        // notifikasi logout
                        if( $this->session->flashdata('sukses') ) {
                            $message = $this->session->flashdata('sukses');
                            echo "<script type='text/javascript'>alert('$message');</script>";
                        }
                    ?>

					<div class="wrap-input100 validate-input" data-validate = "Nama lengkap harus diisi">
						<input class="input100" type="text" name="nama" placeholder="Nama lengkap">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
                    </div>
                    
					<div class="wrap-input100 validate-input" data-validate = "Masukkan email yang valid: ex@abc.xyz">
						<input class="input100" type="email" name="email" placeholder="Email">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
                    </div>
                    
					<div class="wrap-input100 validate-input" data-validate = "Username harus diisi">
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>

					<div class="wrap-input100 rs1 validate-input" data-validate="Password harus diisi">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
                    </div>
                    
					<div class="wrap-input100 rs1 validate-input" data-validate="Password harus diisi">
						<input class="input100" type="password" name="re_password" placeholder="Ulang Password">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>

					<div class="container-login100-form-btn m-t-20">
						<button class="login100-form-btn">
							Daftar
						</button>
                    </div>
                    <br>
                    <div class="container-login100-form-btn m-t-20">
						<a href="<?= base_url('login'); ?>">Login disini.</a>
					</div>
                <?= form_close(); ?>
			</div>
		</div>
	</div>
	

	
<!--===============================================================================================-->
	<script src="<?= base_url(); ?>assets/templates/login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= base_url(); ?>assets/templates/login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= base_url(); ?>assets/templates/login/vendor/bootstrap/js/popper.js"></script>
	<script src="<?= base_url(); ?>assets/templates/login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= base_url(); ?>assets/templates/login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= base_url(); ?>assets/templates/login/vendor/daterangepicker/moment.min.js"></script>
	<script src="<?= base_url(); ?>assets/templates/login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="<?= base_url(); ?>assets/templates/login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="<?= base_url(); ?>assets/templates/login/js/main.js"></script>

</body>
</html>