<?php 

$sessioId = $_POST['sessionId'];
$serviceCode = $_POST['serviceCode'];
$phoneNumber = $_POST['phoneNumber'];
$text = $_POST['text'];

if($text==""){

    $response = "MENU \n";
    $response .= "1. Meu Perfil \n";
    $response .= "2. Minha Conta \n";
    $response .= "Escolha uma opção:";

}else if($text == "1"){

    $response = "Meu Perfil \n";
    $response .= "Nome de cidadao: Hugo Raposo \n";
    $response .= "1. Sair";

}else if($text == "2"){

    $response = "Minha Conta \n";
    $response .= "O seu imposto de: 500mt \n";
    $response .= "1. Sair";

}else if($text == "1*1"){

    $response = "Terminou 1";

}else if($text == "2*1"){

    $response = "Terminou 2";

}
header('Content-type; text/plain');
echo $response;

?>