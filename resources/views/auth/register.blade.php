<!-- resources/views/auth/register.blade.php -->
<head>
    <meta http-equiv="Content-Type" content="text/html;" charset="utf-8"></meta>
    <link type="text/css" href="bootstrap.css" rel="stylesheet" />
</head>
<body>

<form method="POST" action="/auth/register">
    {!! csrf_field() !!}
    <div>
        Name
        <input type="text" name="name" value="{{ old('name') }}">
    </div>

    <div>
        Email
        <input type="email" name="email" value="{{ old('email') }}">
    </div>

    <div>
        Password
        <input type="password" name="password">
    </div>

    <div>
        Confirm Password
        <input type="password" name="password_confirmation">
    </div>

    <div>
        <button type="submit">Register</button>
    </div>
</form>
</body>