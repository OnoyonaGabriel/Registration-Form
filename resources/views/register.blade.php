<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registeration Form</title>
    <link rel="stylesheet" href="{{asset('css/register.css')}}">
</head>
<body>
    <div class="container">
    <form method="POST" action="{{ route('register') }}">
            @csrf 
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="password_confirmation">Confirm Password</label>
                <input type="password" name="password_confirmation" required>
            </div>
            <button type="submit"> Register</button>
        </form>
    </div>
    
</body>
</html>
