<?php 

$url = "https://www.canalti.com.br/api/pokemons.json";
$pokemons = json_decode(file_get_contents($url));



?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    <meta charset='utf-8'>
    <title>Pokemon-API</title>
</head>
<body>
    
<div class="container">
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
    
            <?php
                foreach($pokemons->pokemon as $pokemon){
                    if($_GET['cd'] == $pokemon->num){
                        echo '
                        
                        <div class="card" style="width: 24rem;">
                    <div class="row">
                        <div class="col-9">
                            <h1>'.$pokemon->name.'</h1>
                        </div>
                        <div class="col-3">
                            <h2>#'.$pokemon->num.'</h2>
                        </div>
                    </div>
                    <div class="row">
                        ';
                                foreach($pokemon->type as $type){
                                    echo '<div class="col-2">
                                    <div id="tipo"><p id="tp">'.$type.'</p></div></div>';
                                }
                                echo '
                            
                    </div>
                    <center>
                        <img src="'.$pokemon->img.'" style="width: 150px" class="card-img-top" alt="">
                    </center>
                    <div class="card-body"></div>
                    <h4 class="card-title">Sobre</h4>
                    <div class="row">
                        <div class="col-3">
                            <h6>Peso</h6>
                        </div>
                        <div class="col-3">
                            <h7>'.$pokemon->weight.'</h7>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3">
                            <h6>Altura</h6>
                        </div>
                        <div class="col-3">
                            <h7>'.$pokemon->height.'</h7>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3">
                            <h6>Doce</h6>
                        </div>
                        <div class="col-6">
                            <h7>'.$pokemon->candy.'</h7>
                        </div>
                    </div>
                </div>
                        
                        ';
                    }
                }
            ?>
            </div>
        </div>
    </div>

    <!--<div class="container">
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <div class="card" style="width: 24rem;">
                    <div class="row">
                        <div class="col-9">
                            <h1>Bubassaur</h1>
                        </div>
                        <div class="col-3">
                            <h2>#001</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2">
                            <div id="tipo">
                                <p>Grass</p>
                            </div>
                        </div>
                        <div class="col-3">
                            <div id="tipo">
                                <p>Poison</p>
                            </div>
                        </div>
                    </div>
                    <img src="" class="card-img-top" alt="">
                    <div class="card-body"></div>
                    <h4 class="card-title">Sobre</h4>
                    <div class="row">
                        <div class="col-3">
                            <h6>Peso</h6>
                        </div>
                        <div class="col-3">
                            <h7>0.9Kg</h7>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3">
                            <h6>Altura</h6>
                        </div>
                        <div class="col-3">
                            <h7>11m</h7>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3">
                            <h6>Doce</h6>
                        </div>
                        <div class="col-3">
                            <h7>aaaaaa</h7>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>-->

</body>
</html>