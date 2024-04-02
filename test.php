<!DOCTYPE HTML>
<html>  
<body>

<?php
$hulk = ["Waffenstärke" => 4, "Körpergröße" => 201, "Körperstärke" => 90, "Technologie" => 90, "Heldenrating" => 90];
$IronMan = ["Waffenstärke"=>"4", "Körpergröße"=>"198", "Körperstärke"=>"50", "Technologie"=>"5" , "HeldenRating"=>"84"];

// if ($hulk [$key] >= $IronMan [$key])
// {
// echo "Player 2 gewinnt";
// }


// $auswahl = "Körperstärke";


// if ($hulk [ $auswahl ] <= $IronMan [$auswahl]){
//     echo '<br> Hulk verliert <br>';
// }
// else { 
//     echo 'Iron Man gewinnt <br>';
// }



?>


<?php
    if ( isset($_GET['Körperstärke IronMan'])){
        if ($hulk ['Körperstärke'] <= $IronMan ['Körperstärke'])
        {
            echo '<br> Hulk verliert <br>';
        }
        else { 
            echo 'Iron Man gewinnt <br>';
        }
    }
?>

<form method ="GET">
<button type="submit" name =  "Körperstärke IronMan" >Körperstärke IronMan</button> 
    <button type="submit" name ="Körperstärke Hulk" >Körperstärke Hulk</button>
</form>


</body>
</html>
