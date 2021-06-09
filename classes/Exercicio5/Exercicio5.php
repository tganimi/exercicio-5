<?php

class Exercicio5
{

    public function convertXmlToCsv($xmlFile, $csvPath) {

        $csvOutput = '';

        $xml = simplexml_load_file($xmlFile);
        $path = $xml->xpath($csvPath);

        foreach ($path as $item) {

            foreach ($item as $key => $value) {

                $csvOutput .= '"' . trim($value) . '"' . ',';
            }

            $csvOutput = trim($csvOutput, ',');
            $csvOutput .= "\n";

        }

        return $csvOutput;

    }
}
