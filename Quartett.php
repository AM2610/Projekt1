<?php

// $hulk = ["Waffenstärke"=>"4", "Körpergröße"=>"201", "Körperstärke"=>"90", "Technologie"=>"90" , "HeldenRating"=>"90"];
$hulk = ["Waffenstärke" => 1, "Körpergröße" => 201, "Körperstärke" => 90, "Technologie" => 1, "Heldenrating" => 72];

$IronMan = ["Waffenstärke"=>"4", "Körpergröße"=>"198", "Körperstärke"=>"50", "Technologie"=>"5" , "HeldenRating"=>"84"];

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Marvel Quartett</title>

                <style>


                    
                    body {
                        margin: 0;
                        Padding: 0;
                        background-color: #ED1D24; 
                    }

                    .box {
                        position: absolute;
                        top: 10%;
                        left: 20%;
                        background-color: white;
                        width: 250px;
                        height: 400px;
                        border: 1px solid #000; border-radius: 10px; padding: 20px;

                    }

                    .box1 {
                        position: absolute;
                        top: -6%;
                        left: 160%;
                        background-color: white;
                        width: 250px;
                        height: 400px;
                        border: 1px solid #000; border-radius: 10px; padding: 20px;
                    }

                    .redbox {
                        position: absolute;
                        top: 3%;
                        left: 4%;
                        background-color: #ED1D24;
                        width: 225px;
                        height: 220px;
                        border: 1px solid #000; border-radius: 10px; padding: 20px;
                    }

                    .statszeile {

                        top: 10%;
                        left: 4%;                      
                        background-color: white;
                        width: 180px;
                        height: 180px;
                        border: 1px solid #000;  padding: 20px;

                        
                        font-style: normal;
                        padding-top: 0px;
                        padding-bottom: 10px;
                        padding-right: 20px;
                        padding-left: 20px;
                        

                    }


                    .statszeile1 {

                        left: 0%;                      
                        background-color: white;
                        width: 180px;
                        height: 180px;
                        border: 1px solid #000;  padding: 20px;
                      
                        
                
                    }

                    .Stats{
                       position: relative;
                       top: 6px;
                       margin-top: 4.5px;
                       

                        border: 1px solid black;
                        background-color:#ED1D24;
                        padding-top: 0px;
                        padding-right: 20px;
                        padding-bottom: 0px;
                        padding-left: 10px;
                        width: 195px;
                        height: 25px;
                        color:white

                   
                     
                    }

                    p {

                        margin-top: 3px;
                        padding: 0px;
                    }

                    .Stats1{
                       position: relative;
                       top: 5px;
                       left: 90px;
                       color: white;
                    }

                    .Stats2{
                       position: relative;
                       top: 5px;
                       left: 70px;
                       color: white;
                    }
                      
                       
                      

                    .vs {
                        position: relative;
                       top: -200px;
                       left: 290px;
                    }

                    .VSclass {
                        position: relative;
                        left: 268px;
                        bottom: 220px;
                        border: 1px solid #000; border-radius: 10px; 
                    }

                    .CardTitle{
                        position: relative;
                        bottom: 200px;
                    }

                    .Marvellogo {
                        position: relative;
                       bottom: 600px;                       
                       left: 155px;
                    }

                    .QuartettTitel {
                        position: relative;
                       bottom: 660px;                       
                       left: 300px;
                       color: white;
                       font-size: 30pt;
                    }

                    .Player1Titel {
                        position: relative;
                       bottom: 218px;                       
                       left: 20px;
                       color: white;
                       font-size: 30pt;
                    }

                    .Player2Titel {
                        position: relative;
                       bottom: 275px;                       
                       left: 460px;
                       color: white;
                       font-size: 30pt;
                    }


                    
                </style>

    </head>


    <body>
     
         <div class="box"> 
             <div class="redbox"> 
                  <img src="IMG/IronMan.jpg" width="225" height="200">
                      <div class="Stats2">
                          <big>Iron Man</big>
                         </div>
        
            
                <?php
                print('<div><p>');
                foreach ($IronMan as $key => $value) {
                    print('<div class="Stats"><p><big>');
                    print("$key:  $value");    
                    print('</big></p></div>');
                }
                print('</p></div>');
                ?>
            
        
                <img class="VSclass" src="IMG/vs.logo.jpg" width="125" height="100">
                <img class="Marvellogo" src="IMG/Marvel_Logo.svg.png" width="150" height="50">


                <div class="QuartettTitel">
                    <big>-Quartett</big>
                   </div>
                
                   <div class="Player1Titel">
                    <big>Player 1</big>
                   </div>

                   <div class="Player2Titel">
                    <big>Player 2</big>
                   </div>
            
     <div class="box1">
        <div class="redbox">
            <img src="IMG/Hulk.webp" width="225" height="200">

             <div class="Stats1">
                <big>Hulk</big>
               </div>

                <?php
                print('<div><p>');
                foreach ($hulk as $key => $value) {
                    print('<div class="Stats"><p><big>');
                    echo("$key: $value");
                    print('</big></p></div>');
                }
                print('</p></div>');

                if ($hulk [$key] >= $IronMan [$key])
                {
                echo "Player 2 gewinnt";
                }

               
                    ?>

                  
      

    </body>
</html>
'<?php'


// Hulk Werte
// $HWaffenstärke = 4;
// $HKörpergröße = 201;
// $HKörperstärke = 90;
// $HTechnologie = 1;
// $HHeldenRating = 72;

// // Iron Man Werte
// $IWaffenstärke = 40;
// $IKörpergröße = 198;
// $IKörperstärke = 50;
// $ITechnologie = 5;
// $IHeldenRating = 84;

// if ($HKörpergröße > $IKörpergröße){
//     echo 'Hulk hat gewonnen!' ;
// }





'?>'