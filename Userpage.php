<?php 
    session_start();
    //require_once 'config.php'; // ajout connexion bdd 

    define('HOST', 'localhost');
    define('DB_NAME', 'contact_db');
    define('USER', 'root');
    define('PASS', '');

    //$isSuccess = false;

    try 
    {
        $conn = new PDO ("mysql:host=" . HOST . ";dbname=" . DB_NAME, USER, PASS,);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
    } 


    catch (PDOException $e) 
    {
        echo $e;
    }

   // si la session existe pas ou user est pas connecté on redirige
    if(!isset($_SESSION['user'])){
        header('Location:index.php');
        die();
    }

    // On récupere les données de l'utilisateur
    $req = $conn->prepare('SELECT * FROM utilisateur WHERE pseudo = ?');
    $req->execute(array($_SESSION['user']));
    $data = $req->fetch();
   
?>

<!DOCTYPE html>
<html>
    <head>
        <title>TRT Conseil - Agence de recrutement</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
        
        
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        
        <link rel="stylesheet" href="./CSS/styles.css">
    </head>
    <body>

        <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <img src="https://cdn.pixabay.com/photo/2018/08/11/20/19/jobs-3599406_640.png"" alt="Logo" width="250" height="100" class="d-inline-block align-text-top">
            <a href="deconnexion.php" class="btn btn-danger btn-lg">Déconnexion</a>
            <button class="btn btn-outline-success" type="submit" id="Candidater"><a href="./Contact_Ajax.php">Candidater</a></button>
            
           
        </div>
        </nav>
        
        <div class="container site">

            <div class="text-center" >
                <h2 class="p-5">Bonjour <?php echo $data['pseudo']; ?> !</h2>
                
            </div>
                
            <hr />
            
            
            <?php
				require 'admin/database.php';
			 
                echo '<nav>
                        <ul class="nav nav-pills" role="tablist">';

                $db = Database::connect();
                $statement = $db->query('SELECT * FROM categories');
                $categories = $statement->fetchAll();
                foreach ($categories as $category) {
                    if($category['id'] == '1') {
                        echo '<li class="nav-item" role="presentation"><a class="nav-link active" data-bs-toggle="pill" data-bs-target="#tab'. $category['id'] . '" role="tab">' . $category['name'] . '</a></li>';
                    } else {
                        echo '<li class="nav-item" role="presentation"><a class="nav-link" data-bs-toggle="pill" data-bs-target="#tab'. $category['id'] . '" role="tab">' . $category['name'] . '</a></li>';
                    }
                }

                echo    '</ul>
                      </nav>
                      ';
                        
                echo '<div class="tab-content">';

                foreach ($categories as $category) {
                    if($category['id'] == '1') {
                        echo '<div class="tab-pane active" id="tab' . $category['id'] .'" role="tabpanel">';
                    } else {
                        echo '<div class="tab-pane" id="tab' . $category['id'] .'" role="tabpanel">';
                    }
                    
                    echo '<div class="row">';
                    
                    $statement = $db->prepare('SELECT * FROM items WHERE items.category = ?');
                    $statement->execute(array($category['id']));
                    while ($item = $statement->fetch()) {
                        echo 
                        '
                            <div class="col-md-6 col-lg-4">
                                <form method="post">
                                    <div class="img-thumbnail">
                                        <img src="images/' . $item['image'] . '" class="img-fluid" alt="...">
                                        <div class="price">' . number_format($item['salaire'], 2, '.', ''). ' €</div>
                                        <div class="caption">
                                            <h4>' . $item['name'] . '</h4>
                                            <p>' . $item['description'] . '</p>
                                            
                                            <button class="btn btn-outline-success" type="submit" id="Candidater"><a href="./Contact_Ajax.php">Candidater</a></button>
                                            
                                            
                                            
                                        </div>
                                    </div>
                                </form>
                            </div>
                        ';
                    }
                    
                   echo    '</div>
                        </div>';
                        
                }
                Database::disconnect();
                echo  '</div>';
                
            ?>
            
        
        </div>

        
        

        
        
         
        
        
        

        
    </body>
</html>