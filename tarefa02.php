<?php 
    $num1 = 5;
    $num2 = 21;
    if($num1>$num2){
        echo "O maior número é: ".$num1;
    } else {
        echo "O maior número é: ".$num2."<br>"."<br>";
    }
?>

<?php
    $tresOuCinco=mt_rand(1,5);
    if($tresOuCinco == 3 || $tresOuCinco == 5){
        echo "o numero aleatorio é: ".$tresOuCinco."<br>"."<br>";
    } else if($tresOuCinco != 3){
        echo "o numero não é 3 porra!"."<br>"."<br>";
    } else echo $tresOuCinco."<br>"."<br>";

?>

<?php 
    $umACem=mt_rand(1,100);
    if($umACem>50){
        echo "o numero aleatorio é maior que 50"."<br>"."<br>";
    } else echo "o numero aleatorio é menor que 50"."<br>"."<br>";
?>