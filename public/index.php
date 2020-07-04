<?php
    include '/Applications/MAMP/htdocs/Training/evelon/src/autoloader.php';
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="welcome.php" method="post">
    Amount: <input type="text" name="amount"><br>

    <label for="currencies">I have</label>
    <select id="nativeCurrency" name="nativeCurrency">
        <option value="usd">USD</option>
        <option value="eur">EUR</option>
    </select>

    <label for="currencies">I want</label>
    <select id="foreginCurrency" name="foreginCurrency">
        <option value="usd">USD</option>
        <option value="eur">EUR</option>
    </select>
    
    <input type="submit">
    </form>

</body>
</html>