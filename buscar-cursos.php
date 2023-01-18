<?php
require 'vendor/autoload.php';
require 'src/Buscador.php';

use Alura\BuscadorDeCursos\Buscador;
use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

$urlAlura = '/cursos-online-programacao/php';
$client = new Client([
    'verify' => false
]);
$crawler = new Crawler();
$buscador = new Buscador($client, $crawler);
$cursos = $buscador->buscar('https://www.alura.com.br'.$urlAlura);

foreach ($cursos as $curso)
{
    echo $curso.PHP_EOL;
}
