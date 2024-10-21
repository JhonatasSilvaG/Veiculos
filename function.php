<?php
function escrita() {
        $arquivo = 'data.txt';
        $arquivoEscrita = fopen($arquivo, 'a+');
        fwrite($arquivoEscrita, "{$_POST['modelo']}, {$_POST['ano']}\n");
        fclose($arquivoEscrita);
    }

function mostrar() {
    $arquivoData = fopen('data.txt', 'r');
    if($arquivoData) {
        while(($line = fgets($arquivoData))) {
            $veiculos[] = explode(',', $line);
        }
        fclose($arquivoData);
        return $veiculos;
    }
}

?>