<?php
    $currency1 = $_GET["currency1"];
    $currency2 = $_GET["currency2"];
    $value1 = $_GET["value1"];

    switch($currency1){
        case "eur":
            switch($currency2){
                case "eur":
                    $value2 = $value1;
                    break;
                case "egp":
                    $value2 = $value1 * 18.5193;
                    break;
                case "usd":
                    $value2 = $value1 * 1.1809;
                    break;
                case "mxn":
                    $value2 = $value1 * 23.5816;
                    break;
            }
            break;
        case "egp":
            switch($currency2){
                case "eur":
                    $value2 = $value1 * 0.0540;
                    break;
                case "egp":
                    $value2 = $value1;
                    break;
                case "usd":
                    $value2 = $value1 * 0.0638;
                    break;
                case "mxn":
                    $value2 = $value1 * 1.2734;
                    break;
            }
            break;
        case "usd":
            switch($currency2){
                case "eur":
                    $value2 = $value1 * 0.8468;
                    break;
                case "egp":
                    $value2 = $value1 * 15.6822;
                    break;
                case "usd":
                    $value2 = $value1;
                    break;
                case "mxn":
                    $value2 = $value1 * 19.9690;
                    break;
            }
            break;
        case "mxn":
            switch($currency2){
                case "eur":
                    $value2 = $value1 * 0.0424;
                    break;
                case "egp":
                    $value2 = $value1 * 0.7853;
                    break;
                case "usd":
                    $value2 = $value1 * 0.0501;
                    break;
                case "mxn":
                    $value2 = $value1;
                    break;
            }
            break;
    }
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
    <form action="" method="GET">
        <select name="currency1" id="currency1">
            <option value="eur">EUR</option>
            <option value="egp">EGP</option>
            <option value="usd">USD</option>
            <option value="mxn">MXN</option>
        </select>
        <script type="text/javascript">
            document.getElementById("currency1").value = "<?php echo $currency1; ?>";
        </script>
        <input type="text" name="value1" id="value1" value="<?php echo round($value1, 2); ?>">
        <select name="currency2" id="currency2">
            <option value="eur">EUR</option>
            <option value="egp">EGP</option>
            <option value="usd">USD</option>
            <option value="mxn">MXN</option>
        </select>
        <script type="text/javascript">
            document.getElementById("currency2").value = "<?php echo $currency2; ?>";
        </script>
        <input type="text" name="value2" id="value2" value="<?php echo round($value2, 2); ?>" readonly>
        <input type="submit" value="submit">
    </form>
</body>
</html>