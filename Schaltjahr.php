<!DOCTYPE html>
<html>
    <head>
    </head>


    <body>

    <!-- <input type="text" name="Name" value= ""> -->
        <?php

        if (isset($_GET['seite'])){
            echo "DA!";

        }
        else{
            echo " nicht da";
        }

        echo '<form method = "GET" action = "Schaltjahr.php">
        
                <input type= "text" name = "seite"> <br><br>
                <input type="submit" value="Absenden">
            </form>';

       
        // Hier Zahl eingeben
        $zahl = 2007;

            if ($zahl % 4 == 0){

                if ($zahl % 100 == 0){

                    if ($zahl % 400 == 0){

                     echo $zahl . " ist ein Schaltjahr";
                    }
                        else {
                            echo $zahl . " ist kein Schaltjahr";
                        }
                
                }
                else {
                    echo $zahl . " ist ein Schaltjahr";
                }
            }
            else {
                echo $zahl . " ist kein Schaltjahr";
            }

        ?>

    </body>
</html>