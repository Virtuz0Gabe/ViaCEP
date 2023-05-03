<?php 

if (isset($_POST["CEP"]))
{
    $CEP = $_POST['CEP']; 
    $url = "https://viacep.com.br/ws/$CEP/json/";  
    $info = json_decode(file_get_contents($url));

    if ($info){
        echo "Cidade: " . $info->localidade;
        echo " União Federativa: " . $info->uf;
        echo " IBGE: " . $info->ibge;
        echo " DDD: " . $info->ddd;
    }
}

echo readfile("index.html");

header("Location: http://localhost:5000/index.html");
exit;
?>