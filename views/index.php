<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>konsumen</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
    <form method='POST' action='<?php echo base_url()?>/index.php/c_praktikum3/createkonsumen'>
    <input name=nama type=text placeholder=Nama><br>
    <input name=submit type=submit value=Create>
    </form>
</body>
</html>