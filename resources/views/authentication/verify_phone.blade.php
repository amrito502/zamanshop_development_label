<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <h2>Verify OTP</h2>
        @if(session('error')) <p style="color: red;">{{ session('error') }}</p> @endif
        @if(session('success')) <p style="color: green;">{{ session('success') }}</p> @endif
        <form method="POST" action="{{ route('verify.phone.store') }}">
            @csrf
            <input type="text" name="otp" placeholder="Enter OTP" required><br>
            <button type="submit">Verify</button>
        </form>
        <br>
        <form method="POST" action="{{ route('otp.resend') }}">
            @csrf
            <button type="submit">Resend OTP</button>
        </form>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>