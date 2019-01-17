<?php if($this->session->userdata('status') !== 'login'): redirect(base_url()); endif; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Input Data Diri</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</head>
<body>
    <nav>
        <a href="<?= base_url('admin') ?>">Dashboard</a>
        <a href="<?= base_url('input_data') ?>">Input Data Diri</a>
        <a href="<?= base_url('logout') ?>">Logout</a>
    </nav>


    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card">
                <div class="card-body">
                    <h1 class='text-center'>Input data Diri</h1>
                    <form action="<?= base_url('inputData') ?>" method="post">
                        <div class="form-group">
                            <label>Nama Lengkap</label>
                            <input type="text" class='form-control' name='nama' value='<?= $data->nama ?>'>
                        </div>
                        <div class="form-group">
                            <label>Tanggal Lahir</label>
                            <input type="date" class='form-control' name='date' value='<?= $data->tanggal_lahir ?>'>
                        </div>
                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <select name="jk" class='form-control'>
                                <?php 
                                if($data->jk === '1'): 
                                    $jk = 'Laki - laki'; 
                                elseif($data->jk === '2'): 
                                    $jk = 'Perempuan'; 
                                else: 
                                    $jk = 'Pilih Jenis Kelamin'; 
                                endif; ?>

                                <option selected disabled value="<?= $data->jk ?>"><?= $jk ?></option>

                                <option value="1">Laki - Laki</option>
                                <option value="2">Perempuan</option>
                            </select>
                        </div>
                        <button type='submit' class='btn btn-success'>Edit Data Diri</button>
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