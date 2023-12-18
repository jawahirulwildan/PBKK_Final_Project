<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/build/css/login.css'); ?>">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #D0B8A8;
            margin-top: 120px;
        }

        .login-container {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background-color: #F8EDE3;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .login-info {
            text-align: right;
            margin-right: 20px;
        }

        .col-md-6 img {
            max-width: 100%;
            height: auto;
            display: block;
            margin-right: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 login-container">
                <div class="col-md-6">
                    <center><img src="<?php echo base_url('assets/images/default.jpg'); ?>" alt=""></center>
                </div>
                <div class="col-md-6 login-info">
                    <h2><b>Silahkan Melakukan Login</b></h2>
                    <?php echo validation_errors(); ?>
                    <?php echo form_open('login/checklogin'); ?>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" placeholder="example@gmail.com">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password" placeholder="xxxxxxxxx">
                        </div>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </form>
                    <p style="margin-top: 10px;"><a href="<?php echo base_url('pages'); ?>">Kembali Ke Beranda</a></p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
