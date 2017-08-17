<!DOCTYPE html>
<html lang="pt-br" class="no-js">
    <head>
        <meta charset="utf-8"/>
        <title>DS Müller Logistica.</title>
      </head>
      <body>
<?php
ini_set("error_reporting", E_ALL);



$iorigemcnpj = $_POST["origemcnpj"];
$iorigemrazao = $_POST["origemrazao"];
$idestinocnpj = $_POST["destinocnpj"];
$idestinorazao = $_POST["destinorazao"];
$ivolume = $_POST["volume"];
$ipeso = $_POST["peso"];
$ivalornota = $_POST["valornota"];
$ialtura = $_POST["altura"];
$ilargura = $_POST["largura"];
$icomprimento = $_POST["comprimento"];
$inome = $_POST["nome"];
$itelefone = $_POST["telefone"];
$iemail = $_POST["email"];

$assunto="Contação pelo Site";

$msg = "
<font color=#0383CE size=4 face=arial><b>Cotação pelo site</b></font><br><br>

<font color=#999 size=3 face=arial><b>Origem</b></font><br>
<font color=#0383CE size=2 face=arial><b>CNPJ: </b></font><font size=3> <font color=#333333 size=4 face=arial>$iorigemcnpj</font><br>
<font color=#0383CE size=2 face=arial><b>Razão Social: </b></font> <font color=#333333 size=4 face=arial>$iorigemrazao</font><br>
<br>
<font color=#999 size=3 face=arial><b>Destino</b></font><br>
<font color=#0383CE size=2 face=arial><b>CNPJ: </b></font> <font color=#333333 size=4 face=arial>$idestinocnpj</font></font><br>
<font color=#0383CE size=2 face=arial><b>Razão Social: </b></font> <font color=#333333 size=4 face=arial>$idestinorazao</font><br>
<br>
<font color=#999 size=3 face=arial><b>Dados</b></font><br>
<font color=#0383CE size=2 face=arial><b>Volume: </b></font> <font color=#333333 size=4 face=arial>$ivolume</font></font><br>
<font color=#0383CE size=2 face=arial><b>Peso: </b></font> <font color=#333333 size=4 face=arial>$ipeso</font><br>
<font color=#0383CE size=2 face=arial><b>Valor da Nota: </b></font> <font color=#333333 size=4 face=arial>$ivalornota</font><br>
<br>
<font color=#999 size=3 face=arial><b>Dimensões</b></font><br>
<font color=#0383CE size=2 face=arial><b>Altura: </b></font> <font color=#333333 size=4 face=arial>$ialtura</font></font><br>
<font color=#0383CE size=2 face=arial><b>Largura: </b></font> <font color=#333333 size=4 face=arial>$ilargura</font><br>
<font color=#0383CE size=2 face=arial><b>Comprimento: </b></font> <font color=#333333 size=4 face=arial>$icomprimento</font><br>
<br>
<font color=#999 size=3 face=arial><b>Contato</b></font><br>
<font color=#0383CE size=2 face=arial><b>Nome: </b></font> <font color=#333333 size=4 face=arial>$inome</font></font><br>
<font color=#0383CE size=2 face=arial><b>Telefone: </b></font> <font color=#333333 size=4 face=arial>$itelefone</font><br>
<font color=#0383CE size=2 face=arial><b>E-mail: </b></font> <font color=#333333 size=4 face=arial>$iemail</font><br>
<br><br>";





$x = "cloudflaviolages@gmail.com";
$headers = "MIME-Version: 1.1\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
$headers .= "From: meflaviolages@gmail.com\r\n"; // remetente
$headers .= "Return-Path: cloudflaviolages@gmail.com\r\n"; // return-path
$headers .= "Reply-To: cloudflaviolages@gmail.com\r\n"; // return-path





$envio = mail($x, $assunto, $msg, $headers);



if($envio){


echo '<meta http-equiv="refresh" content="10;URL=index.php" />';


echo "
<br>
<br>
<br>
<div align=center>
<font color=#0383CE size=4 face=arial>$inome</font><br><br>
</div>
<div align=center>
<font color=#0383CE size=4 face=arial>Sua mensagem foi enviada com sucesso! Logo entraremos em contato.</font><br><br>
</div>
<BODY onload=startCountdown()>
<SCRIPT language=JavaScript>

var g_iCount = new Number();

// de 30 a 0 //
var g_iCount = 10;

function startCountdown(){
       if((g_iCount - 1) >= 0){
               g_iCount = g_iCount - 1;
               numberCountdown.innerText = '00:00.0' + g_iCount;
               setTimeout('startCountdown()',1000);
       }
}
</SCRIPT>
<FONT face=verdana color=#1e90ff size=2><B>

<DIV id=numberCountdown align=center></DIV></FONT>

";

}else {


  echo "
  <br>
  <br>
  <br>
  <div align=center>
  <font color=#0383CE size=4 face=arial>$inome</font><br><br>
  </div>
  <div align=center>
  <font color=#0383CE size=4 face=arial>A mensagem não pode ser enviada.</font><br><br>
  <font color=#0383CE size=4 face=arial>Entre em contato pelos telefones.</font><br><br>
  </div>
  <BODY onload=startCountdown()>
  <SCRIPT language=JavaScript>

  var g_iCount = new Number();

  // de 30 a 0 //
  var g_iCount = 15;

  function startCountdown(){
         if((g_iCount - 1) >= 0){
                 g_iCount = g_iCount - 1;
                 numberCountdown.innerText = '00:00.0' + g_iCount;
                 setTimeout('startCountdown()',1000);
         }
  }
  </SCRIPT>
  <FONT face=verdana color=#1e90ff size=2><B>

  <DIV id=numberCountdown align=center></DIV></FONT>

  ";
  echo '<meta http-equiv="refresh" content="15;URL=contato.php" />';

}




?>

</body>
</html>
