<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/admin/style.css');?>">
    <title><?= $title;?></title>
</head>
<body>
    <div class="container">
        <div class="login">
            <h2>Login Admin</h2>
            <form action="<?= base_url().'admin/login/cekLogin';?>" method="post">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" require>
                <label for="password">Password</label>
                <input type="text" name="password" id="password" require>
                <button type="submit">Login</button>
            </form>
        </div>
    </div>
</body>
</html>