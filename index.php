@@ -0,0 +1,67 @@
<?php

define('usdczk', 23);
define('gbpczk', 30);
define('euroczk', 27);
$euro = filter_input(INPUT_POST, 'euro');

$submit = filter_input(INPUT_POST, 'submit');
$switch = filter_input(INPUT_POST, 'switch');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>B</title>
</head>
<body>
    
    <?php
    if (isset($submit)) {
        

        switch ($switch) {
            case 'czk_euro': ?>
                <?=$euro ?> CZK je <?=$euro / euroczk ?> Eur
                <?php
                break;
            
                case 'euro_czk': ?>
                    <?=$euro ?> Eur je <?=$euro * euroczk ?> KČ
                    <?php break;
                case 'czk_usd': ?>
                    <?=$euro ?> KČ je <?=$euro / usdczk ?>
                   <?php break;
                case 'usd_czk': ?>
                    <?=$euro ?> USD je <?=$euro * usdczk ?>
                   <?php break;
                case 'czk_gbp': ?>
                    <?=$euro ?> kč je <?=$euro / gbpczk ?>
                    <?php break;
                

            default: ?>
            <?=$euro ?> GBP je <?=$euro * gbpczk ?>
               <?php break;
        }
    }
else { ?>
    <form action="index.php" method="post">
    
    Peníze : <input type="text" name="euro" id="euro">
    KČ na Euro: <input type="radio" name="switch" value="czk_euro" id="switch">
    Euro na KČ: <input type="radio" name="switch" value="euro_czk" id="switch">
    KČ na USD <input type="radio" name="switch" value="czk_usd" id="switch">
    USD na KČ <input type="radio" name="switch" value="usd_czk" id="switch">
    KČ na GBP <input type="radio" name="switch" value="czk_gbp" id="switch">
    GBP na KČ <input type="radio" name="switch" value="gbp_czk" id="switch">
        <input type="submit" value="submit" name="submit">
    </form>

    <?php
}  ?>


</body>
</html>