<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>PhP - Partie 4</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
   <div class="container">
      <div class="row">
         <h1 class="col-12 text-center border border-dark">Part5</h1>
<!-- Créez un lien avec les paramètres "nom" et "prénom" dirigeant sur la page courante et affichez ces paramètres. -->
         <div class="col-12 col-md-4 border border-dark">
            <h2 class="text-center">Exo1</h2>
            <a href="index.php?name=Kasabiti&amp;username=Agnes">Afficher</a>
            
                <p>Salut <?= htmlspecialchars($_GET['name']) .' '. htmlspecialchars($_GET['username'])
                
                ?></p>
        
         </div> 
         </div>
​
      </div>
   </div>
</body>
</html>