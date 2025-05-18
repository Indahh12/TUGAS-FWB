<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Login - WisataEnrekang</title>
    <style>
        /* Biar tampilan sederhana tapi rapi */
        body { font-family: Arial, sans-serif; background: #f4f4f4; }
        .container { max-width: 400px; margin: 80px auto; padding: 20px; background: white; border-radius: 8px; box-shadow: 0 2px 6px rgba(0,0,0,0.1); }
        h2 { text-align: center; margin-bottom: 20px; }
        label { display: block; margin-bottom: 5px; font-weight: bold; }
        input[type="email"], input[type="password"] { width: 100%; padding: 10px; margin-bottom: 15px; border: 1px solid #ddd; border-radius: 4px; }
        button { width: 100%; padding: 10px; background: #007bff; border: none; color: white; font-weight: bold; border-radius: 4px; cursor: pointer; }
        button:hover { background: #0056b3; }
        .error { color: red; margin-bottom: 10px; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Login WisataEnrekang</h2>

        @if($errors->any())
            <div class="error">
                {{ $errors->first() }}
            </div>
        @endif

        <form action="{{ route('login.process') }}" method="POST">
            @csrf

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}" required autofocus />

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required />

            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
