<?php

    $array = array("firstname" => "", "name" => "", "email" => "", "phone" => "", "message" => "", "fichier" => "", "firstnameError" => "", "nameError" => "", "emailError" => "", "phoneError" => "", "messageError" => "", "fichierError" => "", "isSuccess" => false);
    $emailTo = "ilyes@gmail.com";

    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    { 
        $array["firstname"] = test_input($_POST["firstname"]);
        $array["name"] = test_input($_POST["name"]);
        $array["email"] = test_input($_POST["email"]);
        $array["phone"] = test_input($_POST["phone"]);
        $array["message"] = test_input($_POST["message"]);
        $array["fichier"] = test_input($_POST["fichier"]);
        $array["isSuccess"] = true; 
        $emailText = "";
        
        if (empty($array["firstname"]))
        {
            $array["firstnameError"] = "Saisir votre prénom !";
            $array["isSuccess"] = false; 
        } 
        else
        {
            $emailText .= "Firstname: {$array['firstname']}\n";
        }

        if (empty($array["name"]))
        {
            $array["nameError"] = "Saisir votre nom !";
            $array["isSuccess"] = false; 
        } 
        else
        {
            $emailText .= "Name: {$array['name']}\n";
        }

        if(!isEmail($array["email"])) 
        {
            $array["emailError"] = "email invalide  !";
            $array["isSuccess"] = false; 
        } 
        else
        {
            $emailText .= "Email: {$array['email']}\n";
        }

        if (!isPhone($array["phone"]))
        {
            $array["phoneError"] = "Que des chiffres et des espaces uniquement";
            $array["isSuccess"] = false; 
        }
        else
        {
            $emailText .= "Phone: {$array['phone']}\n";
        }

        if (empty($array["message"]))
        {
            $array["messageError"] = "Votre message ?";
            $array["isSuccess"] = false; 
        }
        else
        {
            $emailText .= "Message: {$array['message']}\n";
        }
        
        
        if($array["isSuccess"]) 
        {
            $headers = "From: {$array['firstname']} {$array['name']} <{$array['email']}>\r\nReply-To: {$array['email']}";
            mail($emailTo, "Un message de votre site", $emailText, $headers);
        }
        
        echo json_encode($array);
        
    }

    function isEmail($email) 
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }
    function isPhone($phone) 
    {
        return preg_match("/^[0-9 ]*$/",$phone);
    }
    function test_input($data) 
    {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
 
?>


<!DOCTYPE html>
<html>
<head>

    <title>Contactez-moi</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>-->
     <!-- Liens Bootsrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    
    
    <link rel="stylesheet" href="./CSS/styleContact.css">

</head>
<body>
        <!--START  Header-->

        <header >
        <nav class="navbar navbar-expand-lg ">
            <div class="container-fluid">
                
                <img src="./images/logo.png" alt="Logo" width="250" height="100" class="d-inline-block align-text-top">
                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="Home.php">Acceuil</a>
                        </li>

                        <form class="d-flex" class= "auto mb-2 mb-lg-0" id="reserver">
                            <button class="btn btn-outline-success" type="submit"><a href="connexion.php">Connexion</a></button>
                        </form>
                    </ul>
                </div>
                
            </div>
            
        </nav>
        
    </header>

    <!--END  Header-->

        <div class="container">
            <div class="divider"></div>
            <div class="container">
                <h2>Envoyer Candidature</h2>
            </div>
            <form id="contact-form" method="post" action="" role="form" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-lg-6">
                        <label for="firstname" class="form-label">Prénom <span class="blue">*</span></label>
                        <input id="firstname" type="text" name="firstname" class="form-control" placeholder="Votre prénom" value="">
                        <p class="comments"></p>
                    </div>
                    <div class="col-lg-6">
                        <label for="name" class="form-label">Nom <span class="blue">*</span></label>
                        <input id="name" type="text" name="name" class="form-control" placeholder="Votre Nom" value="">
                        <p class="comments"></p>
                    </div>
                    <div class="col-lg-6">
                        <label for="email" class="form-label">Email <span class="blue">*</span></label>
                        <input id="email" type="text" name="email" required class="form-control" placeholder="Votre Email">
                        <p class="comments"></p>
                    </div>
                    <div class="col-lg-6">
                        <label for="phone" class="form-label">Téléphone</label>
                        <input id="phone" type="text" name="phone" required class="form-control" placeholder="Votre Téléphone" value="">
                        <p class="comments"></p>
                    </div>
                    <div>
                        <label for="message" class="form-label">Message <span class="blue">*</span></label>
                        <textarea id="message" name="message" class="form-control" placeholder="Votre Message" rows="4"></textarea>
                        <p class="comments"></p>
                    </div>
                    <div>
                        <p class="brown"><strong>* Ces informations sont requises.</strong></p>
                    </div>
                    <div>
                        <label for="" class="form-label">Joindre CV</label>
                        <input type="File" name="" accept=".pdf">
                    </div>
                    <div>
                        <input type="submit" class="button1" value="Envoyer" name="envoyer">
                    </div>    
                </div>
                
                
            </form>
        </div>
</body>
</html>


