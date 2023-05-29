<?php

// Autoload do Composer
require_once 'dompdf/autoload.inc.php';

use Dompdf\Dompdf;
use Dompdf\Options;

// Instância de Options
$options = new Options();
$options->setChroot(__DIR__);

// Instância de dompdf
$dompdf = new Dompdf($options);

// Carrega o html para dentro da classe
// $dompdf->loadHtml('<b>Olá Mundo</b><br><br><i>Olá Mundo 2</i><br><br>WDEV - canal');

// Carrega um arquivo html
$dompdf->loadHtmlFile(__DIR__.'/arquivo.html');

// Renderizar o arquivo pdf
$dompdf->render();

// Imprime o conteúdo do arquivo pdf na tela
header('Content-type: application/pdf');
echo $dompdf->output();

/* Função Download
$dompdf->stream('documento.pdf'); */