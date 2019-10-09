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
        echo "o numero aleatorio é: ".$tresOuCinco;
    } else "o nomero aleatorio é diferente de 3 ou 5";

?>