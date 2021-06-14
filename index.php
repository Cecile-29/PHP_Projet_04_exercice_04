<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Projet04 Exercice04</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container-fluid col-7 p-3 m-4 border border-warning rounded justify-content-center">
        <div class="row ">
            <h1 class="col-12 text-secondary text-center">PHP Projet04 Exercice04</h1>
            <h2 class="col-12 text-info text-center">Créez un tableau associatif contenant comme clé des chiffres de 1 à 5 et comme valeurs cinq langage de programmation.
             Ajoutez une clé et assignez lui une valeur. Affichez cette valeur.</h2>
        </div>
        <div class="row border border-primary rounded p-3 m-4 text-secondary justify-content-center">
            <?php
                $languageIT = [1 => 'Javascript', 2 => 'Ruby', 3 => 'Boostrap', 4 => 'Python', 5 => 'C++'];
                // méthode directe en ajoutant n ième entrée au tableau                
                $languageIT[6] = 'Haba';
                // var_dump($languageIT);
                //echo $languageIT[2];
                // ici méthode push pour ajouter toutes les clés autant que de nouvelles entrées.
                array_push($languageIT, 'Go', 'Ava');
                var_dump($languageIT);
            ?>
        </div>
    </div>
</body>
</html>