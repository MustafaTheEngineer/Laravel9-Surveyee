<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Blade</title>
</head>

<body>
    <h1>This is test page</h1>
    <p>
        Blade
    </p>
    <form action="/save" method="post">
        @csrf
        <label for="fname">First name:</label><br>
        <input type="text" id="fname" name="fname"><br>
        <label for="lname">Last name:</label><br>
        <input type="text" id="lname" name="lname">
        <input type="submit">
    </form>
</body>

</html>
