<!DOCTYPE html>
<html lang="pt-br" class="no-js">
    <head>
        <meta charset="utf-8"/>
        <title>DS Müller Logistica.</title>
      </head>
      <body>
<?php
ini_set("error_reporting", E_ALL);



$inome = $_POST["nome"];
$itelefone= $_POST["telefone"];
$iemail = $_POST["email"];
$imensagem = $_POST["mensagem"];

$assunto="Contato pelo Site";


$msg = "
<font color=#0383CE size=4 face=arial><b>Contato pelo Sit</b></font><br><br>
<font color=#0383CE size=2 face=arial><b>Nome: </b></font><font size=3> <font color=#333333 size=4 face=verdana>$inome</font><br>
<font color=#0383CE size=2 face=arial><b>Email: </b></font> <font color=#333333 size=4 face=verdana>$iemail</font><br>
<font color=#0383CE size=2 face=arial><b>Telefone:</b></font> <font color=#333333 size=4 face=verdana>$itelefone</font></font><br>
<font color=#0383CE size=2 face=arial><b>Mensagem:</b></font> <font color=#333333 size=4 face=verdana>$imensagem</font><br>
<br><br>";





$x = "jessica@dsmuller.com.br";
$headers = "MIME-Version: 1.1\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
$headers .= "From: dsmuller@dsmuller.com.br\r\n"; // remetente
$headers .= "Return-Path: dsmuller@dsmuller.com.br\r\n"; // return-path
$headers .= "Reply-To: dsmuller@dsmuller.com.br\r\n"; // return-path




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
