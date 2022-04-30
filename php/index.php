<?php
print("Abriendo Archivo<br>");
$archivo_url=fopen("quijote.txt","r");

$texto="";

while ($fragmento=fgets($archivo_url)){
    $texto.=$fragmento;
}

print($texto);
printf("<br><br>Haciendo otra cosa");
?>