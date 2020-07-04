<?php
    include '/Applications/MAMP/htdocs/Training/evelon/src/autoloader.php';
?>


<!DOCTYPE html>
<html>
<body>

<?php
    $conversion = new CurrencyConverter;
    $conversion->convert_currency(strtoupper($_POST['nativeCurrency']), strtoupper($_POST['foreginCurrency']), $_POST['amount']);
?>
</body>
</html>



