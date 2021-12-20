<?php
define('SUCESSO', 1);
define('FRACASS0', 2);

echo "Insira a quantidade de farinha: ";
$quantidadeFarinha = fgets(STDIN);

while ($quantidadeFarinha != 50) {
    enviarMensagem("A quantidade de farinha não está certa. Por favor tente novamente", FRACASS0);
    echo "Insira a quantidade de farinha: ";
    $quantidadeFarinha = fgets(STDIN);
}
enviarMensagem("Você inseriu a quantidade certa de farinha", SUCESSO);

echo "Insira a quantidade de ovos: ";
$quantidadeOvos = fgets(STDIN);

while ($quantidadeOvos != 3) {
    enviarMensagem("A quantidade de ovos não está certa. Por favor tente novamente", FRACASS0);
    echo "Insira a quantidade de ovos: ";
    $quantidadeOvos = fgets(STDIN);
}
enviarMensagem("Você inseriu a quantidade certa de ovos", SUCESSO);


function enviarMensagem($mensagem, $status) {    
    if ($status == SUCESSO) {
        echo $mensagem . " :)\n";
    } else {
        echo "!!!! " . $mensagem . " !!!!\n";
    }
}