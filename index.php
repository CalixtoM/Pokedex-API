<?php 

$url = "https://www.canalti.com.br/api/pokemons.json";
$pokemons = json_decode(file_get_contents($url));



?>

<!DOCTYPE html>
<html>
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
                <h1>Pokemons Encontrados</h1>
            </div>    
        </div>
        <div class="row">
            <?php foreach($pokemons->pokemon as $pokemon){
                echo '
                <div class="card" style="width: 18rem;">
                    <img src="'.$pokemon->img.'" class="card-img-top" alt="'.$pokemon->name.'">
                    <div class="card-body">
                        <h3 class="card-title">'.$pokemon->name.'</h3>        
                        <h6>Tipo: '.$pokemon->type[0].'</h6>
                    </div>
                </div>
                ';
            } ?>
        </div>
    </div>


    <?php 
        if(count($pokemons->pokemon)) {
            $i = 0;
            foreach($pokemons->pokemon as $pokemon){
                $i++;

    ?>

        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <?php echo $pokemon->name; ?>
                </div>
            </div>
        </div>


    <?php
            }
        }
    ?>

</body>
</html>