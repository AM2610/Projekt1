<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>

        body {
            font-family: "Open Sans", sans-serif;
            margin: 0;
            Padding: 0;
            background-color: #b7e0f2; 
            
        }


        .footer{
                padding: 30px;
                text-align:center;
                color:white;
                background-color:lightsalmon;
                /* margin-top: 300px; */
            }

        .main{
            display: flex;

        }    

        .menu{
            width: 20%;
            background-color:lightgreen;
            margin-right: 32px;
            padding-top: 150px;
            height: 60vh;

        }

        .menu a {
            display: block;
            text-decoration: none;
            color: white;
            padding: 8px;
            display: flex;
            align-items: center;
           
        }

        .menu img{
            margin-right: 8px;
        }

        .menu a:hover{
            background-color: aqua;
        }

        .content{
            width: 80%;
            margin-top: 130px;
            margin-right: 32px;
            background-color: white;
            border-radius: 8px;
            padding-left: 16px;
            padding: 20px;

        }

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
        }

        .avatar{
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

        .myname{
            display: flex;
            margin-right: 50px;
            align-items: center;
        }

        .card{
            margin-top: 15px;
            background-color: rgba(0, 0, 0, 1));
            padding; 8px;
            padding-left: 48px;
            position: relative;
        }

        .profile{
            width: 36px;
            height: 48px;
            border-radius: 50px;
            border: 2px solid white;
            position: absolute;
            left: 6px;
            top: -6px;
        }

        .phonebutton{
            background-color: lightslategray;
            color: white;
            padding: 4px;
            border-radius: 4px;
            position: absolute;
            left: 200px;
            top:4px;
            
        }

        .phonebutton:hover{
            background-color: lightgrey;
        }
    </style>
</head>
<body>  
      

    <div class="menubar">
        <h1>My Contact Book</h1>

        <div class="myname">
            
            <div class= "avatar">A</div> <p>Alex Muth</p></div>
            </div>
        
        </div>

    </div>
    
     

  
    <div class="main">
        <div class="menu">
            <a href = "PHP1.php?page=start"><img src="IMG-PHP/home1.svg"> Start</a> 
            <a href = "PHP1.php?page=contacts"><img src="IMG-PHP/menu.svg"> Kontakte</a> 
            <a href = "PHP1.php?page=addcontact"><img src="IMG-PHP/plus1.svg"> Kontakt hinzufügen</a>
            <a href = "PHP1.php?page=legal"><img src="IMG-PHP/policy.svg"> Impressum</a> 
        </div>     


        <div class="content">
        <?php
            $headline= 'Herzlich Willkommen';

            $contacts = [];

            if(file_exists('contacts.txt')) {
                $text = file_get_contents('contacts.txt', true);
                $contacts = json_decode($text, true);
            }
        
            /* Variablen abfragen'name'.'phone'*/
            if(isset($_POST['name']) && isset($_POST['phone'])){
                echo 'Kontakt <b>' .$_POST['name'] . '</b> wurde hinzugefügt';
                $newContact = [
                    'name' => $_POST['name'],
                    'phone' => $_POST['phone']               
                ];
                array_push($contacts, $newContact);
                file_put_contents('contacts.txt', json_encode($contacts, JSON_PRETTY_PRINT));
            }
                
            
        
            if($_GET['page'] == 'contacts'){
                $headline = 'Deine Kontakte';
            }

            if($_GET['page'] == 'legal'){
                $headline = 'Dein Impressum';
            }

            if($_GET['page'] == 'addcontact'){
                $headline = 'Deinen Kontakt hinzufügen';
            }

            echo '<h1>' . $headline . '</h1>';

            if ($_GET['page'] == 'contacts'){
                echo 'Du bist auf der Kontakt Seite';

                foreach($contacts as $row){
                    $name = $row['name'];
                    $phone = $row['phone'];

                    echo 
                    "<div class = card>
                        <img class = profile src = 'IMG-PHP/profile.jpg'>

                        <b>$name</b> <br>
                         $phone

                         <a class='phonebutton' href='tel:$phone'>Anrufen</a>
                    </div>";
                    

                }   


            }   elseif ($_GET['page'] == 'legal'){
                echo 'Du bist auf der Impressum Seite';
                }

            elseif ($_GET['page'] == 'addcontact'){
            echo "
            <div>Auf dieser Seite kannst du ein weiteren Kontakt hinzufügen
            </div>
            
            
            <form action='/projekt1/PHP1.php?page=contacts' method='POST'>
                <div>
                    <input placeholder = 'Namen eingben' name='name'>
                </div>

                <div>
                    <input placeholder = 'Telefonnummer eingebn' name='phone'>
                </div>

                <button type='submit'>Absenden</button>
            </form>
            
            ";
            }
            else{
                echo 'Du bist auf der Start Seite';
            }
        ?>
        </div>

    

    </div>

    <div class= "footer">
    
        (C) 2024 Alexander Muth
    </div>
</body>
</html>