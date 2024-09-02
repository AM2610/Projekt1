<!DOCTYPE html>
<html>
<body>

<?php
   
function playgwent ($name){
    echo "Bock auf eine Runde Gwent, $name?";
}

   
   function addieren ($n){
    if ($n < 1){
        return;
    }
    echo $n;
    addieren($n -1);

   }

   echo addieren (5);

    ?>
</body>
</html>
