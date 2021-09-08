<?php
if(isset($_POST['multiplicateur']))
{
    //   echo htmlentities($_POST['multiplicateur']);
    $multiplicateur = $_POST['multiplicateur'];
    echo $multiplicateur .'</br>';
    
    $nbr = rand(1,10);
    $res = $nbr * $multiplicateur;
    echo $nbr .'</br>';
    echo $res .'</br>';
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <!-- CDN bulma -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
</head>
<body>
<form class="container pt-5" method="post">
    
        <div class="container is-widescreen">
            <div class="columns">
                <div class="column">
                    <div class="card">
                        <div class="card-content">
                            <div class="content">
                                <h3>Veuillez choisir une table de multiplication<br> pour commencer le QUIZZ</h3>
                                <div class="field has-addons">
                                    <div class="control is-expanded">
                                        <div class="select is-fullwidth">
                                        <select name="multiplicateur">
                                            <option value="1"></option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                        </select>
                                        </div>
                                    </div>
                                    <div class="control">
                                        <button type="submit" class="button is-primary">Choisir</button>
                                    </div>
                                </div>
                                <div class="buttons">
                                    <button class="button is-danger" name="reset">Annuler</button>
                                    <!-- <button class="button is-primary" name="validate">Valider</button> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="card">
                        <div class="card-content">
                            <div class="content">

                                <!-- question -->
                                <?php
                                    $nbr = rand(1,10);
                                    
                                    
                                    
                                        
                                    '<p>Donnez le résultat de:'.$nbr. '*'. $multiplicateur.'</p>';
                                ?>

                                <div class="field has-addons has-addons-centered">
                                    <p class="control">
                                        <input class="input" type="text" placeholder="Entrez le résultat">
                                    </p>
                                    <p class="control">
                                        <a class="button is-primary">
                                        Valider
                                        </a>
                                    </p>
                                </div>  
                            </div>
                        </div>
                    </div>
                </div> 
            </div>  
        </div>
</form>
</body>
</html>