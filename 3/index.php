<?php require_once 'vars.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <title>Get - Post</title>
</head>
<body>
    <div class="container">
        <form method="GET" action="thank-you.php">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="name">Email</label>
                <input type="text" name="email" id="name" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <ul>
            <li><a href="profile.php?name=Brandon">Brandon</a></li>
            <li><a href="profile.php?name=Brian">Brian</a></li>
        </ul>
    </div>
</body>
</html>
