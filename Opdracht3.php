
<?php
    $boodschappen = ["aardappelen", "aardbeien", "3 pakken melk", "yoghurt"];
    $name = $_POST['product'];
    array_push($boodschappen,$name);
        foreach ($boodschappen as $boodschap) {
            echo "<li>$boodschap</li>";

    }
         for ($i = 1; $i <= 4; $i++){
             echo "<img ".$class. "src='img/foto".$i.".jpg'>";
}

?>
