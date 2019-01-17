<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Daftar</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</head>
<body>
	<div class="row justify-content-center">
		<div class="col-md-5 ">
			<div class="card">
				<div class="card-body">
                    <h1 class='text-center'>Halaman Daftar</h1>
					<form action="<?= base_url('prosesdaftar') ?>" method="post">
                        <div class="form-group">
							<label>Username</label>
							<input type="text" name='username' class='form-control'>
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" name='password' class='form-control'>
						</div>
						<button type='submit' class='btn btn-dark'>Daftar</button>
						<a href="<?= base_url() ?>">Login</a>
					</form>
				</div>
			</div>
		</div>
	</div>







	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
</body>
</html>