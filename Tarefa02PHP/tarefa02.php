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
    echo $tresOuCinco."<br>";
    if($tresOuCinco == 3 || $tresOuCinco == 5){
        echo "o numero aleatorio é: ".$tresOuCinco."<br>"."<br>";
    } else if($tresOuCinco != 3){
        echo "o numero não é 3 porra!"."<br>"."<br>";
    } else echo $tresOuCinco."<br>"."<br>";

?>

<?php 
    $umACem=mt_rand(1,100);
    echo $umACem."<br>";
    if($umACem>50){
        echo "o numero aleatorio é maior que 50"."<br>"."<br>";
    } else echo "o numero aleatorio é menor que 50"."<br>"."<br>";
?>

<?php
    $numeroEx5=mt_rand(0,100);
    echo $numeroEx5."<br>";
    if($numeroEx5>50 && $numeroEx5%2==0){
        echo "O numero cumpre a condição."."<br>"."<br>";
    } else {
        echo "O numero NãO cumpre a condição."."<br>"."<br>";
    }
?>

<?php 
    $idade=30;
    $casado=false;
    $exo="Outro";
    if($idade>18 && $casado==false || $idade>18 && $casado==false && $exo="Outro"){
        echo "Boas vindas"."<br>"."<br>";
    }
?>
