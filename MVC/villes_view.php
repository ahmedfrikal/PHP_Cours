
<html>
<head>
    <title>Tp MVC</title>
</head>
<body>
<h1>Liste des villes </h1>
<table>
    <tr><th>id</th> <th>libelle</th> <th>Action</th></tr>
    <?php
    foreach ($tab as $ligne){
        $id=$ligne["id"];
        $libelle=$ligne["libelle"];
        echo "<tr> <td>$id</td> <td>$libelle</td> </tr>";
    }
    ?>
</table>
</body>
</html>