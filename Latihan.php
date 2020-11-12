<!DOCTYPE html>
<html>
<head>
    <title>Get</title>
</head>
<body>
    <?php if (isset($_GET["text"])) : ?>
        <h3>Mohon masukan dulu</h3>
    <?php endif; ?>
    <fieldset id="ini">
        <label for = "ini">DATA</label>
        <form method="GET" action="proces.php">
            <p>Nama : <input type="text" name="nama"></p>
            <p>Alamat : <input type="text" name="alamat"></p>
            <p><input type="submit" value="Proses" name="submit"></p>
        </form>
    </fieldset>
</body>
</html>    
