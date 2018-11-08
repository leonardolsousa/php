<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$cidades = array(
    array(
        "nome" => "Guarujá",
        "estado" => "São Paulo",
        "regiao" => "Sudeste",
        "aniversario" => '30/06',
        "fundacao" => '02/09/1893',
        "gentilico" => "Guarujaense",
        "lema" => "Ut nostrum mare (Para o nosso mar)",
        "padroeiro" => "Santo Amaro",
        "prefeito" => "Valter Suman"
    ),

    array(
        "nome" => "Canguatarema",
        "estado" => "Rio Grande do Norte",
        "regiao" => "Nordeste",
        "aniversario" => '16/04',
        "fundacao" => '16/04/1858',
        "gentilico" => "Canguaretamense",
        "lema" => "Teu maior filho é aquele que mais te ama!",
        "padroeiro" => "Nossa Senhora da Conceição",
        "prefeito" => "Maria de Fátima Borges Marinho"

    ),

    array(
        "nome" => "Manaus",
        "estado" => "Amazonas",
        "regiao" => "Norte",
        "aniversario" => '24/10',
        "fundacao" => '24/10/1699',
        "gentilico" => "Manauense/Manauara",
        "lema" => "Nap dlise or armozen (A metrópole da Amazônia)",
        "padroeiro" => "Nossa Senhora da Conceição",
        "prefeito" => "Arthur Virgílio Neto"
        
    ),

    array(
        "nome" => "Joinville",
        "estado" => "Santa Catarina",
        "regiao" => "Sul",
        "aniversario" => '09/03',
        "fundacao" => '09/03/1851',
        "gentilico" => "Joinvilense",
        "lema" => "Mea autem brasiliæ magnitudo (A minha grandeza se identifica com a grandeza do Brasil)",
        "padroeiro" => "Nada consta",
        "prefeito" => "	Udo Döhler"
    ),

    array(
        "nome" => "Dourados",
        "estado" => "Mato Grosso do Sul",
        "regiao" => "Centro-Oeste",
        "aniversario" => '20/12',
        "fundacao" => '15/06/1914',
        "gentilico" => "Douradense",
        "lema" => "Terra de Antônio João",
        "padroeiro" => "Nossa Senhora da Imaculada Conceição",
        "prefeito" => "Délia Razuk"
    )
);

foreach($cidades as $cidade){
    echo "Cidade: ".$cidade["nome"]."<br>";
    echo "Estado: ".$cidade["estado"]."<br>";
    echo "Região: ".$cidade["regiao"]."<br>";
    echo "Aniversário: ".$cidade["aniversario"]."<br>";
    echo "Fundação: ".$cidade["fundacao"]."<br>";
    echo "Gentílico: ".$cidade["gentilico"]."<br>";
    echo "Lema: ".$cidade["lema"]."<br>";
    echo "Padroeiro: ".$cidade["padroeiro"]."<br>";
    echo "Atual Prefeito: ".$cidade["prefeito"]."<br>";
    echo "<hr>";
}

?>