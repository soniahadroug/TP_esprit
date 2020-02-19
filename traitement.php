<!doctype html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<?php
if ($_GET["id"] && $_GET["nom"] && $_GET["prenom"] && $_GET["adresse"] && $_GET["domaine"]) {
    ?>
    <table border="1">
        <tr>
            <td>id</td>
            <td>nom</td>
            <td>prenom</td>
            <td>adresse</td>
            <td>domaine</td>
        </tr>
        <tr>
            <td>
                <?php
                if ($_GET["id"]) echo $_GET["id"];
                ?>
            </td>
            <td>
                <?php
                if ($_GET["nom"]) echo $_GET["nom"];
                ?>
            </td>
            <td>
                <?php
                if ($_GET["prenom"]) echo $_GET["prenom"];
                ?>
            </td>
            <td>
                <?php
                if ($_GET["adresse"]) echo $_GET["adresse"];
                ?>
            </td>
            <td>
                <?php
                if ($_GET["domaine"]) echo $_GET["domaine"];
                ?>
            </td>
    </table>
    <?php

} else {
    echo "Champs manquants";
}
?>
</body>
</html>
