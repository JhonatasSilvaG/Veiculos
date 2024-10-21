<?php
function insert($dbName) {
    $arquivo = "{$dbName}.txt";
    $arquivoEscrita = fopen($arquivo, 'a+');
    fwrite($arquivoEscrita, "{$_POST['modelo']}, {$_POST['ano']}\n");
    fclose($arquivoEscrita);
}

function select($dbName) {
    $arquivoData = fopen("{$dbName}.txt", 'r');
    if($arquivoData) {
        while(($line = fgets($arquivoData))) {
            $veiculos[] = explode(',', $line);
        }
        fclose($arquivoData);
        return $veiculos;
    }
}

?>