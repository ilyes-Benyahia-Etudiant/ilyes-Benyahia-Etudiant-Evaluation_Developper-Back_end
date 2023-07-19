<?php

    session_start(); // Démarrage de la session

    $conn = new mysqli ("localhost","root","","contact_db");
    //$conn = mysqli_connect("localhost","u508042746_root", "Root1891","u508042746_Quai_Antique");

    $msg="";

    

    if(isset($_POST['login']))
    {
        $pseudo = $_POST['pseudo'];
        $password = $_POST['password'];
        //$password = sha1($password);
        $userType = $_POST['user_type'];

        

        $sql = "SELECT * FROM utilisateur WHERE pseudo=? AND password=? AND user_type=?";
        $stmt=$conn->prepare($sql);
        $stmt->bind_param("sss",$pseudo,$password,$userType);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_array();

        session_regenerate_id();
        //$_SESSION['pseudo'] = $row['pseudo'];
        $_SESSION['role'] = $row['user_type'];
        session_write_close();


        
         
    

        //if($result->num_rows==1 && $_SESSION['role']=="user"){
            //header('Location:Userpage.php');
            
            
        //}

        if($result->num_rows==1 && $_SESSION['role']=="admin"){
            header('Location: ./admin/index.php');
            
        }

        else{
            $msg = "Username or password is incorrect";
            
            
        }

    }



?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    
    <title>Login multi user</title>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div>
                <h2 class="text-center">Connexion Admin</h2>    
                <form method="POST" action="" class="p-4">

                    <div class="row mb-2">
                        <label for="email" class="col-sm-2 col-form-label">username</label>
                        <input type="pseudo" name="pseudo" class="form-control">
                        
                    </div>


                    <div class="row mb-3">
                        <label for="password" class="col-sm-2 col-form-label">Password</label>
                        <input type="password" name="password" class="form-control">
                    </div>



                    <!--<div class="form-check form-check-inline">

                        <label for="userType">user</label>
                        <input class="custom-radio" type="radio" name="user_type" value="user" >
                        
                    </div>-->

                    <div class="form-check">
                        
                        <label class="form-check-label" for="user_type">admin</label>
                        <input class="form-check-input" type="radio" name="user_type" value="admin" checked="checked">
                    </div>



                    <div class="col-12">
                        <button type="submit" name="login" class="btn btn-primary">login</button>
                    </div>

                    <h5 class="text-danger text-center"><?=$msg; ?></h5>
                </form>

            </div>
        </div>
    </div>
</body>
</html>