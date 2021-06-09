<?php

require_once 'classes/Exercicio5/Exercicio5.php';

$exercicio5 = new Exercicio5();

$xmlFile = 'xml/books.xml';
$csvPath = '/csv';
$exercicio5->convertXmlToCsv($xmlFile, $csvPath);
