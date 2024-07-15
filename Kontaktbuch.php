<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- CSS Styles -->
    <style>
        /* Grundlegende Stilsetzung für die gesamte Seite */
        body {
            font-family: "Open Sans", sans-serif;
            margin: 0;
            padding: 0; /* Korrigiert von Padding zu padding */
            background-color: #b7e0f2; 
        }

        /* Stilsetzung für die Fußzeile */
        .footer {
            padding: 30px;
            text-align: center;
            color: white;
            background-color: lightsalmon;
        }

        /* Stilsetzung für den Hauptbereich */
        .main {
            display: flex;
        }    

        /* Stilsetzung für das Menü */
        .menu {
            width: 20%;
            background-color: lightgreen;
            margin-right: 32px;
            padding-top: 150px;
            height: 60vh;
        }

        /* Stilsetzung für die Links im Menü */
        .menu a {
            display: block;
            text-decoration: none;
            color: white;
            padding: 8px;
            display: flex;
            align-items: center;
        }

        .menu img {
            margin-right: 8px;
        }

        .menu a:hover {
            background-color: aqua;
        }

        /* Stilsetzung für den Inhaltsbereich */
        .content {
            width: 80%;
            margin-top: 130px;
            margin-right: 32px;
            background-color: white;
            border-radius: 8px;
            padding: 20px; /* padding-left wurde entfernt, padding: 20px übernimmt es */
        }

        /* Stilsetzung für die Navigationsleiste */
        .menubar {
            background-color: white;
            position: absolute;
            left: 0;
            right: 0;
            top: 0;
            height: 80px;
            box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.1);
            padding-left: 50px;
            display: flex;
            justify-content: space-between;
            align-items: center; /* Stellt sicher, dass die Inhalte zentriert sind */
        }

        /* Stilsetzung für den Avatar in der Navigationsleiste */
        .avatar {
            background-color: greenyellow;
            border-radius: 100%;
            padding: 16px;
            width: 24px;
            height: 24px;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-right: 8px;
        }

        /* Stilsetzung für den Namensbereich in der Navigationsleiste */
        .myname {
            display: flex;
            margin-right: 50px;
            align-items: center;
        }

        /* Stilsetzung für die Kontaktkarten */
        .card {
            margin-top: 15px;
            background-color: #fff; /* Hintergrundfarbe auf weiß gesetzt */
            padding: 8px; /* padding; zu padding: korrigiert */
            padding-left: 48px;
            position: relative;
            color: black; /* Textfarbe auf schwarz gesetzt */
            border-radius: 8px; /* Abrundung der Ecken hinzugefügt */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Schatten hinzugefügt */
        }

        /* Stilsetzung für das Profilbild in den Kontaktkarten */
        .profile {
            width: 36px;
            height: 48px;
            border-radius: 50%;
            border: 2px solid white;
            position: absolute;
            left: 6px;
            top: -6px;
        }

        /* Stilsetzung für die Anrufschaltfläche in den Kontaktkarten */
        .phonebutton {
            background-color: lightslategray;
            color: white;
            padding: 4px;
            border-radius: 4px;
            position: absolute;
            left: 200px;
            top: 4px;
        }

        .phonebutton:hover {
            background-color: lightgrey;
        }
    </style>
</head>
<body>  
    <!-- Navigationsleiste -->
    <div class="menubar">
        <h1>My Contact Book</h1>
        <div class="myname">
            <div class="avatar">A</div> 
            <p>Alex Muth</p>
        </div>
    </div>
    
    <!-- Hauptbereich mit Menü und Inhalt -->
    <div class="main">
        <!-- Seitenmenü -->
        <div class="menu">
            <a href="Kontaktbuch.php?page=start"><img src="IMG-PHP/home1.svg"> Start</a> 
            <a href="Kontaktbuch.php?page=contacts"><img src="IMG-PHP/menu.svg"> Kontakte</a> 
            <a href="Kontaktbuch.php?page=addcontact"><img src="IMG-PHP/plus1.svg"> Kontakt hinzufügen</a>
            <a href="Kontaktbuch.php?page=legal"><img src="IMG-PHP/policy.svg"> Impressum</a> 
        </div>     

        <!-- Inhaltsbereich -->
        <div class="content">
        <?php
            // Standardüberschrift
            $headline = 'Herzlich Willkommen';
            $contacts = [];

            // Kontakte aus einer Datei laden, wenn sie existiert
            if (file_exists('contacts.txt')) {
                $text = file_get_contents('contacts.txt', true);
                $contacts = json_decode($text, true);
            }

            // Neuen Kontakt hinzufügen, wenn Name und Telefonnummer im POST-Request vorhanden sind
            if (isset($_POST['name']) && isset($_POST['phone'])) {
                echo 'Kontakt <b>' . $_POST['name'] . '</b> wurde hinzugefügt';
                $newContact = [
                    'name' => $_POST['name'],
                    'phone' => $_POST['phone']
                ];
                array_push($contacts, $newContact);
                file_put_contents('contacts.txt', json_encode($contacts, JSON_PRETTY_PRINT));
            }

            // Überschrift basierend auf der Seite ändern
            if (isset($_GET['page'])) {
                if ($_GET['page'] == 'contacts') {
                    $headline = 'Deine Kontakte';
                } elseif ($_GET['page'] == 'legal') {
                    $headline = 'Dein Impressum';
                } elseif ($_GET['page'] == 'addcontact') {
                    $headline = 'Deinen Kontakt hinzufügen';
                }
            }

            echo '<h1>' . $headline . '</h1>';

            // Inhalte basierend auf der Seite anzeigen
            if (isset($_GET['page']) && $_GET['page'] == 'contacts') {
                echo 'Du bist auf der Kontakt Seite';

                // Kontakte anzeigen
                foreach ($contacts as $row) {
                    $name = $row['name'];
                    $phone = $row['phone'];

                    echo 
                    "<div class='card'>
                        <img class='profile' src='IMG-PHP/profile.jpg'>
                        <b>$name</b><br>
                        $phone
                        <a class='phonebutton' href='tel:$phone'>Anrufen</a>
                    </div>";
                }
            } elseif (isset($_GET['page']) && $_GET['page'] == 'legal') {
                echo 'Du bist auf der Impressum Seite';
            } elseif (isset($_GET['page']) && $_GET['page'] == 'addcontact') {
                echo "
                <div>Auf dieser Seite kannst du einen weiteren Kontakt hinzufügen</div>
                <form action='/projekt1/Kontaktbuch.php?page=contacts' method='POST'>
                    <div>
                        <input placeholder='Namen eingeben' name='name'>
                    </div>
                    <div>
                        <input placeholder='Telefonnummer eingeben' name='phone'>
                    </div>
                    <button type='submit'>Absenden</button>
                </form>
                ";
            } else {
                echo 'Du bist auf der Start Seite';
            }
        ?>
        </div>
    </div>

    <!-- Fußzeile -->
    <div class="footer">
        (C) 2024 Alexander Muth
    </div>
</body>
</html>
