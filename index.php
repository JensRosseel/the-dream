<?php
    $egp = $_GET["egp"];
    $euro = $egp * 0.0540;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>the-dream</title>
</head>
<body>
    <form action="" method="get">
        <label for="egp">EGP</label>
        <input type="text" name="egp" id="egp" value="<?php echo round($egp, 2) ?>">
        <label for="euro">EUR</label>
        <input type="text" name="euro" id="euro" value="<?php echo round($euro, 2) ?>">
        <input type="submit" value="submit">
    </form>
</body>
</html>