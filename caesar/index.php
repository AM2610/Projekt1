<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caesar Verschlüsselung</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <style>

    body{
        margin: 0;
        font-family: "Roboto", sans-serif;
    }    

    body *{
        font-family: "Roboto", sans-serif;
    }  

    .header-container {
        height: 400px;
        background-color: goldenrod;
        background-image: url('background.jpg');
        background-size: cover ;
        background-repeat: no-repeat;
        background-position: center;
        
    }

  
    .card{
        height: calc(100vh - 500px);
        background-color: aliceblue;    
        border-radius: 8px;
        margin-top: -32px;
        margin-left: 16px;
        margin-right: 16px;
        padding: 16px;
      
    }

    form{
        display: flex;
        flex-direction: column;
        margin-bottom: 32px;
        background-color: rgba(0,0,0,0.05);
        padding: 16px;
        border-radius: 8px;
    }

    input{
        height: 48px;
        margin-bottom: 32px;    
        border-radius: 8px;
        border: 1px solid rgba(red, green, blue, alpha);
        background-color:  rgba(0, 0, 0, 0.05);
        
    }

    button{
        height: 48px;
        background-color: green;
        border-radius: 8px;
        color: white;
        border: unset;
        cursor: pointer;
    }

    button:hover{
        background-color: darkgreen;
    }
    </style>
</head>
<body>
    <h1>Caesar Verschlüsselung</h1>
    <div class=" header-container"> </div>

    <!-- Leerzeichen und andere einfach ausgeben -->
    <?php
        $specialChars = [' ', 'ß', 'ä', 'ö', 'ü'];
    ?>

 

    <div class="card">

    <!-- Text verschlüsseln Block -->
        <form>
            <h2>Text verschlüsseln</h2>
        <input name="encrypt" placeholder="Hier Text eingeben...">

        <!-- Verschlüsselungsfunktion -->
        <?php
        if (isset($_GET['encrypt'])){
            $text = strtolower($_GET['encrypt']);
            $array = str_split($text);
            echo '<b>Dein verschlüsseltes Wort lautet: </b> ';
            foreach($array as $char){
                if(in_array($char, $specialChars)){
                    echo $char;
                } else{
            echo toChar(toNum($char) + 1);
            }
        } 
        }
        ?>

        <button type="submit">VERSCHLÜSSELN</button>
        </form>

    <!-- Text entschlüsseln Block -->
        <form>
        <h2>Text entschlüsseln</h2>
        <input name="decrypt" placeholder="Hier Text eingeben...">

    <!-- Entschlüsselungsfunktion -->
        <?php
        if (isset($_GET['decrypt'])){
            $number = strtolower($_GET['decrypt']);
            $array = str_split($number);
            echo '<b>Dein entschlüsseltes Wort lautet: </b> ';
            foreach($array as $char){
                if(in_array($char, $specialChars)){
                    echo $char;
                } else{
            echo toChar(toNum($char) - 1);
            }
        } 
        }
        ?>

        <button type="submit">ENTSCHLÜSSELN</button>
        </form>
    </div>
</body>
</html>

<!-- Der PHP Funktionsteil -->
<?php


// Wort zu Zahl Funktion
function toNum($data) {
    $alphabet = array( 'a', 'b', 'c', 'd', 'e',
                       'f', 'g', 'h', 'i', 'j',
                       'k', 'l', 'm', 'n', 'o',
                       'p', 'q', 'r', 's', 't',
                       'u', 'v', 'w', 'x', 'y',
                       'z'
                       );
    $alpha_flip = array_flip($alphabet);
    $return_value = -1;
    $length = strlen($data);
    for ($i = 0; $i < $length; $i++) {
        $return_value +=
            ($alpha_flip[$data[$i]] + 1) * pow(26, ($length - $i - 1));
    }
    return $return_value;
}

// Zahl zu Wort Funktion
function toChar($number) {

    if($number < 0){
        $number =$number +26;
    }

    if($number > 25){
        $number =$number -26;
    }


    $alphabet = array( 'a', 'b', 'c', 'd', 'e',
                       'f', 'g', 'h', 'i', 'j',
                       'k', 'l', 'm', 'n', 'o',
                       'p', 'q', 'r', 's', 't',
                       'u', 'v', 'w', 'x', 'y',
                       'z'
                       );
  return $alphabet[$number];
}
?>