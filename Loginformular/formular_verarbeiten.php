<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Auswertung der Anmeldung</h1>
    <?php
    $eingabeuser = $_POST["Benutzername"];
    $eingabe = $_POST["passwort"];
    


    $nutzer = 'Alexander';
    $passwort = 'Muth';

    if ($eingabeuser == $nutzer && $eingabe == $passwort) {
        echo "richtiges Passwort, Anmeldung Erfolgreich!";
    }
    else{
        echo "Anmeldung ist ungültig";
        $link = "<a href= 'Anmeldung.html'> Zurück zur Anmeldung </a>";
        echo "<br>";
        echo $link;
    }
    ?>
</body>
</html>