<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- show.blade.php -->
<h1>User Details</h1>
<p>Name: {{ $user->name }}</p>
<p>Email: {{ $user->email }}</p>
<p>Address: {{ $user->address }}</p>
<!-- Add more fields as per your user model -->

</body>
</html>