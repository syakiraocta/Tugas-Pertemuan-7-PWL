<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login WarmadZ</title>
    <link href="<?= base_url('NiceAdmin/assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
    <style>
        body { background: #f6f9ff; display: flex; align-items: center; justify-content: center; height: 100vh; margin: 0; }
        .login-card { width: 100%; max-width: 400px; padding: 30px; border-radius: 15px; box-shadow: 0px 10px 30px rgba(1, 41, 112, 0.1); background: #fff; }
    </style>
</head>
<body>
    <div class="login-card">
        <h4 class="text-center fw-bold text-primary mb-4">WarmadZ Login</h4>
        <?php if(session()->getFlashdata('msg')): ?>
            <div class="alert alert-danger py-2 small"><?= session()->getFlashdata('msg') ?></div>
        <?php endif; ?>
        <form action="<?= base_url('auth') ?>" method="post">
            <div class="mb-3">
                <input type="text" name="email" class="form-control" placeholder="Email (pakai @)" required>
            </div>
            <div class="mb-3">
                <input type="password" name="password" class="form-control" placeholder="Password bebas" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Masuk</button>
        </form>
    </div>
</body>
</html>