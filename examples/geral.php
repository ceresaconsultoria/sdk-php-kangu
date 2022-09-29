<?php

date_default_timezone_set('America/Sao_Paulo');
error_reporting(E_ALL);
ini_set('display_errors', 1);

require __DIR__ . "/../vendor/autoload.php";

$item = new KN\Cotacao();

$item->setToken('2062580dffd51f1500e31a2684604ca4');

$items = $item->simular([
    "cepOrigem" => "19026460", 
    "cepDestino" => "04707000",
    "produtos" => [
        [
            "peso" => 0.200, //kg
            "altura" => 0, //cm
            "largura" => 0, //cm 
            "comprimento" => 0, //cm
            "valor" => 20, 
            "quantidade" => 1
        ] 
    ], 
    "servicos" => [
        "M", //???
        "E", //Entrega normal
        "X", //Entrega expressa
        "R" //Retira
    ], 
    "ordernar" => "preco" 
]);

\KN\Helper\KNHelper::dump($items);

/*
Array
(
    [0] => stdClass Object
        (
            [vlrFrete] => 10.84
            [prazoEnt] => 9
            [dtPrevEnt] => 2022-10-13 16:15:07
            [tarifas] => Array
                (
                    [0] => stdClass Object
                        (
                            [valor] => 10.84
                            [descricao] => Frete Peso + Seguro
                        )

                )

            [error] => stdClass Object
                (
                    [codigo] => 
                    [mensagem] => 
                )

            [idSimulacao] => 1264336720
            [idTransp] => 9900
            [cnpjTransp] => 99999999000000
            [idTranspResp] => 9900
            [cnpjTranspResp] => 99999999000000
            [alertas] => 
            [nf_obrig] => N
            [url_logo] => https://www.kangu.com.br/site/wp-content/uploads/2022/05/Correios.png
            [transp_nome] => Correios Mini
            [descricao] => Correios Mini Envios via Kangu
            [servico] => M
            [referencia] => kangu_M_99999999000000_1264336720
        )

    [1] => stdClass Object
        (
            [vlrFrete] => 16.81
            [prazoEnt] => 7
            [dtPrevEnt] => 2022-10-10 16:15:07
            [tarifas] => Array
                (
                    [0] => stdClass Object
                        (
                            [valor] => 16.81
                            [descricao] => Frete Peso + Seguro
                        )

                )

            [error] => stdClass Object
                (
                    [codigo] => 
                    [mensagem] => 
                )

            [idSimulacao] => 1264336789
            [idTransp] => 9900
            [cnpjTransp] => 99999999000000
            [idTranspResp] => 9900
            [cnpjTranspResp] => 99999999000000
            [alertas] => 
            [nf_obrig] => N
            [url_logo] => https://www.kangu.com.br/site/wp-content/uploads/2022/05/Correios.png
            [transp_nome] => Correios PAC
            [descricao] => Correios PAC via Kangu
            [servico] => E
            [referencia] => kangu_E_99999999000000_1264336789
        )

    [2] => stdClass Object
        (
            [vlrFrete] => 17.47
            [prazoEnt] => 4
            [dtPrevEnt] => 2022-10-05 16:15:07
            [tarifas] => Array
                (
                    [0] => stdClass Object
                        (
                            [valor] => 17.47
                            [descricao] => Frete Peso + Seguro
                        )

                )

            [error] => stdClass Object
                (
                    [codigo] => 
                    [mensagem] => 
                )

            [idSimulacao] => 1264336858
            [idTransp] => 9900
            [cnpjTransp] => 99999999000000
            [idTranspResp] => 9900
            [cnpjTranspResp] => 99999999000000
            [alertas] => 
            [nf_obrig] => N
            [url_logo] => https://www.kangu.com.br/site/wp-content/uploads/2022/05/Correios.png
            [transp_nome] => Correios Sedex
            [descricao] => Correios Sedex via Kangu
            [servico] => X
            [referencia] => kangu_X_99999999000000_1264336858
        )

)  
 */