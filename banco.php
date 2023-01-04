<?php

$NOME_AGENTE=$_POST["agente"];
$MOONFORBID=$_POST["dado1"];
$NIKEDYNAMIC=$_POST["dado3"];
$MOON2k19=$_POST["dado2"];

$QUANTIA=$MOONFORBID+$NIKEDYNAMIC+$MOON2k19;

$somatorio=$MOONFORBID*1299+$NIKEDYNAMIC*3000+$MOON2k19*899; $data=date("h:i:s:a");

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tpc4";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$inserir = "INSERT INTO compras (nome_agente,data_hora,quantidade,valor) VALUES ('$NOME_AGENTE', '$data', '$QUANTIA','$somatorio')";

if ($conn->query($inserir)) {

    echo ("Compra concluida com sucesso!");

} else {
    echo ("Error: " . $inserir . "<br>" . $conn->error);
}
echo "<br>";
echo "T Shirt MOON2k19...Quantia: ".$MOON2k19." preço por unidade: 899 MZM  para ".$MOON2k19*899 ."MZM". "<br>";
echo "Sneakers NIKEDYNAMIC ...Quantia: ".$NIKEDYNAMIC." preço por unidade: 3000 MZM  por peça para ".$NIKEDYNAMIC*3000 ."MZM". "<br>";
echo "T Shirt MOON FORBIDDEN...Quantia: ".$MOONFORBID." preço por unidade: 1299 MZM por peça para ".$MOONFORBID*1299 . "MZM"."<br>";
echo "Total a Pagar: ".$somatorio." MZM";
echo "<br>";
echo "Agente: ".$NOME_AGENTE."";
$conn->close();
?>


<br>
<a href="index.html">Voltar ao Menu Principal!</a>