<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Manajemen Blog - Masuk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f8f9fa; display: flex; align-items: center; justify-content: center; height: 100vh; font-family: sans-serif; }
        .login-card { background: white; border-radius: 8px; box-shadow: 0 4px 12px rgba(0,0,0,0.05); width: 100%; max-width: 400px; padding: 35px; border: 1px solid #eef2f5; }
        .login-title { font-size: 20px; font-weight: bold; color: #2c3e50; text-align: center; margin-bottom: 2px; }
        .login-subtitle { font-size: 13px; color: #7f8c8d; text-align: center; margin-bottom: 25px; }
        .form-label { font-size: 13px; color: #555; margin-bottom: 6px; }
        .form-control { background-color: #eef2f7; border: 1px solid #dcdde1; padding: 10px 12px; font-size: 14px; border-radius: 6px; }
        .form-control:focus { background-color: #eef2f7; box-shadow: 0 0 0 3px rgba(13, 110, 253, 0.25); border-color: #0d6efd; }
        .btn-login { background-color: #0d6efd; color: white; width: 100%; padding: 10px; border: none; border-radius: 6px; font-size: 14px; font-weight: bold; margin-top: 15px; }
        .btn-login:hover { background-color: #0b5ed7; }
    </style>
</head>
<body>

    <div class="login-card">
        <div class="login-title">Sistem Manajemen Blog</div>
        <div class="login-subtitle">Silakan masuk ke akun Anda</div>

        @if(session()->has('loginError'))
            <div class="alert alert-danger py-2 px-3 style='font-size:13px;'">{{ session('loginError') }}</div>
        @endif

        <form action="/login" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Username</label>
                <input type="text" name="username" class="form-control" placeholder="budi@man" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control" placeholder="••••••••" required>
            </div>
            <button type="submit" class="btn-login">Masuk</button>
        </form>
    </div>

</body>
</html>