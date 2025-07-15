
<html>
<head>
    <title>celsius para fahrenheit</title>
</head>
<body>
    <form action="" method="post">
        <label for="celsius">celsius:</label>
        <input type="text" id="celsius" name="celsius">
        <input type="submit" value="Convert">
    </form>

    <?php
    if (isset($_POST['celsius'])) {
        $celsius = $_POST['celsius'];
        $fahrenheit = ($celsius *1.8) +32;
        echo "<p>{$celsius}°C é {$fahrenheit}°F</p>";
    }
    ?>
</body>
</html>
