<?php require_once 'vars.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <title>Thank You!</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <a href="index.php" class="btn btn-secondary">Back</a>
            </div>
            <div class="col-md-6">
                <?=$name ? "<h2>Thank you, $name!</h2>" : null?>
                <?=$email ? $email : null?>
            </div>
        </div>
    </div>
</body>
</html>
