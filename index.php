<?php
define('SUCESSO', 1);
define('FRACASSO', 2);

echo "Insira a quantidade de farinha: ";
$quantidadeFarinha = fgets(STDIN);

while ($quantidadeFarinha != 50) {
    enviarMensagem("A quantidade de farinha não está certa. Por favor tente novamente", FRACASSO);
    echo "Insira a quantidade de farinha: ";
    $quantidadeFarinha = fgets(STDIN);
}
enviarMensagem("Você inseriu a quantidade certa de farinha", SUCESSO);

$quantidadeOvos = 0;
while (true) {
    echo "Você quer mais um ovo (s/n)? ";
    $querMaisOvo = trim(strtoupper(fgets(STDIN)));
    if ($querMaisOvo == "S") {
        $quantidadeOvos++;
    } elseif ($querMaisOvo != "N") {
        enviarMensagem("Você deve escrever sim (S) ou não (N)", FRACASSO);
    } else {
        break;
    }
}

if ($quantidadeOvos != 3) {
    enviarMensagem("A quantidade de ovos não está certa.", FRACASSO);
} else {
    enviarMensagem("Você inseriu a quantidade certa de ovos", SUCESSO);
}

function enviarMensagem($mensagem, $status) {    
    if ($status == SUCESSO) {
        echo $mensagem . " :)\n";
    } else {
        echo "!!!! " . $mensagem . " !!!!\n";
    }
}