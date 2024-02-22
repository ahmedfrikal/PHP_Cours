<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form method="post">
    <input type="text" name="filiere" value="<?php echo isset($_POST['filiere']) ? $_POST['filiere'] : '' ?>"/>
    <button type="submit" name="search">Valider </button>
</form>

<?php $filiere=strtoupper($_POST['filiere']) ?>
<div style="display: <?php echo isset($_POST['search']) ? 'block' : 'none'; ?>">
    <label>Cette filière</label>
    <input type="radio" name="c" <?php echo ($filiere == "DD" || $filiere == "ID") ? 'checked' : ''; ?> />
    <label>Existe</label>

    <input type="radio" name="c" <?php echo ($filiere != "DD" && $filiere != "ID") ? 'checked' : ''; ?> />
    <label>N'existe pas</label>
</div>
</body>
</html>
