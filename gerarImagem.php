<?php
$LARGURA= 200;
$ALTURA = 200;

/* Estabelecemos crimaos a imagem */ 
$imagem = imagecreate($LARGURA,$ALTURA);
$bg = imagecolorallocate($imagem,125,233,0);
$foreground = imagecolorallocate($imagem,255,255,255);



/* GERAR TEXTO */
imagestring($imagem,10,85,85,"Test",$foreground);

/* INTERPRETA COMO IMAGEM E NAO COMO TEXTO*/
header("Content-type:image/jpeg");

// GERA A IMAGEM COMO JPG
imagejpeg($imagem);
?>


<!-- 
    Nós poderiamos comentar o comando
    header e botar um comando de <img src="">
    dentro do html para referenciar a imagem
    Ex:
    <img src="gerarImagem.php">
    Porém o conteúdo em binário continuaria
    a aparecer na página

    -->

 