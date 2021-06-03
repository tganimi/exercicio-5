<?php

require_once 'includes/autoload.php';

$exercicio5 = new Exercicio5\Exercicio5();

$xmlFile = 'xml/books.xml';
$csvPath = '/csv';
$exercicio5->convertXmlToCsv($xmlFile, $csvPath);
