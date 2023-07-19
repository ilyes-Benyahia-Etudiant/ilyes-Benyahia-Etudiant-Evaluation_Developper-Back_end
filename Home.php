<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>TRT Conseil - Agence de recrutement spécialisée dans l’hôtellerie et la restauration</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

  <!-- Demo styles -->
  <link rel="stylesheet" href="Home.css">

  <!-- Liens Bootsrap-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="./CSS/Home.css">
  <link rel="stylesheet" href="./CSS/Gallerie.css">
  <link rel="stylesheet" href="./CSS/Avis.css">
      
  

</head>

<body>
  
    <!--START  Header-->

    <header >
        <nav class="navbar navbar-expand-lg ">
            <div class="container-fluid">
                
                <a class="navbar-brand" href="#"><img src="https://cdn.pixabay.com/photo/2018/08/11/20/19/jobs-3599406_640.png" alt="Logo" width="250" height="100" class="d-inline-block align-text-top"></a>
                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="#Acceuil">Acceuil</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="#Gallerie">Nos offres pertinentes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#Avis">Avis</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./Contact_Ajax.php">Contact</a>
                        </li>
                        
                        
                        

                        <form class="d-flex" class= "auto mb-2 mb-lg-0" id="reserver">
                            <button class="btn btn-light" type="submit"><a href="Testloging.php">Connexion</a></button>
                        </form>
                    </ul>
                </div>
                
            </div>
            
        </nav>
        
    </header>

    <!--END  Header-->


    <section class="home" id="home"> 
          <!-- Swiper -->
          <h1 class="text-center">Notre Expertise</h1>
          <div class="swiper mySwiper">
            <div class="swiper-wrapper">

              <div class="swiper-slide">
                <div class="content">
                    
                    <h2>Productivité</h2>
                    <p id="swiper">Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati fugit dolores dolorem suscipit voluptatibus</p>
                    
                </div>
                <div class="image">
                    <img src="https://cdn.pixabay.com/photo/2014/08/25/22/53/control-427512_640.png">
                </div>
              </div>

              <div class="swiper-slide">
                <div class="content">
                    
                    <h2>Conseil en recrutement</h2>
                    <p id="swiper">Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati fugit dolores dolorem suscipit voluptatibus</p>
                    
                </div>
                <div class="image">
                    <img src="https://cdn.pixabay.com/photo/2017/04/06/09/16/interview-2207741_640.jpg">
                </div>
              </div>

              <div class="swiper-slide">
                <div class="content">
                    
                    <h2>Evolution carrière</h2>
                    <p id="swiper">Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati fugit dolores dolorem suscipit voluptatibus</p>
                    
                </div>
                <div class="image">
                    <img src="https://cdn.pixabay.com/photo/2017/01/20/19/53/productivity-1995786_640.jpg">
                </div>
              </div>

            </div>


            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
        
        <!-- Swiper JS -->
        <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
        <script src="./JS/Script.js"></script>
        
    </section>  

    <hr class="divider"/>

    
    
    <hr class="divider"/>

    <!--Gallerie-->
    
    <section class="gallery" id="Gallerie">

        <div class="text-center">
            <h5 >Emplois</h5>
            <p>Nos offres selectionnées pour vous</p>
            
        </div>   

        <div class="container">
            <div class="row">
                <div class="gallery-filter">
                    <span class="filter-item active" data-filter="all">All</span>
                    <span class="filter-item" data-filter="hotellerie">Hotellerie</span>
                    <span class="filter-item" data-filter="restauration">Restauration</span>
                    
                </div>
            </div>
    
            <div class="tab-content">
    
                <!-- hotellerie gallery item start -->
    
                <div class="tab-pane fade show active" id="tab2" role="tabpanel">
                    <div class="row">
                        <div class="gallery-item hotellerie">
                            <div class="gallery-item-inner">
                                <div class="col-md-6 col-lg-12">
                                    <div class="img-thumbnail">
                                        <img src="https://media.istockphoto.com/id/1448506100/fr/photo/r%C3%A9ceptionniste-dh%C3%B4tel-assistant-une-cliente.webp?b=1&s=612x612&w=0&k=20&c=-I5U4zJc8CH3aTllmtNcY-LaqI_SOd5-bu3tEyxCyNs=" class="img-fluid" alt="...">
                                        <div class="salaire">1800 €</div>
                                        <div class="caption">
                                            <h4>Concierge</h4>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati fugit dolores dolorem suscipit voluptatibus</p>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <div class="gallery-item hotellerie">
                            <div class="gallery-item-inner">
                                <div class="col-md-6 col-lg-12">
                                    <div class="img-thumbnail">
                                        <img src="https://cdn.pixabay.com/photo/2021/02/03/00/10/receptionists-5975962_1280.jpg" class="img-fluid" alt="...">
                                        <div class="salaire">1300 €</div>
                                        <div class="caption">
                                            <h4>Receptionniste</h4>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati fugit dolores dolorem suscipit voluptatibus</p>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        
    
                        
    
                        <div class="gallery-item hotellerie">
                            <div class="gallery-item-inner">
                                <div class="col-md-6 col-lg-12">
                                    <div class="img-thumbnail">
                                        <img src="https://cdn.pixabay.com/photo/2013/04/14/22/25/bellman-luggage-cart-104031_640.jpg" class="img-fluid" alt="...">
                                        <div class="salaire">1200 €</div>
                                        <div class="caption">
                                            <h4>Bagagiste</h4>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati fugit dolores dolorem suscipit voluptatibus</p>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    
                <!-- hotellerie gallery item end -->
    
    
                <!-- Restauration gallery item Start -->
    
                <div class="tab-pane fade show active" id="tab3" role="tabpanel">
                    <div class="row">
    
                        <div class="gallery-item restauration">
                            <div class="gallery-item-inner">
                                <div class="col-md-6 col-lg-12">
                                    <div class="img-thumbnail">
                                        <img src="images/Chef cuisine.jpg" class="img-fluid" alt="...">
                                        <div class="salaire">1200 €</div>
                                        <div class="caption">
                                            <h4>Chef de cuisine</h4>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati fugit dolores dolorem suscipit voluptatibus</p>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <div class="gallery-item restauration">
                            <div class="gallery-item-inner">
                                <div class="col-md-6 col-lg-12">
                                    <div class="img-thumbnail">
                                        <img src="https://media.istockphoto.com/id/1051263044/fr/photo/majordome-ma%C3%AEtre-dh%C3%B4tel-en-chemise-blanche-et-veste-de-costume-noir-portant-un-plateau.jpg?b=1&s=170667a&w=0&k=20&c=AESDc0Zc6JAL2TKiDWpI5lHY3A2YxBW9kKsbyMo3W04=" class="img-fluid" alt="...">
                                        <div class="salaire">1300 €</div>
                                        <div class="caption">
                                            <h4>Serveur</h4>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati fugit dolores dolorem suscipit voluptatibus</p>
                                            
                                        </div>
                                    </div>
                                </div>
    
                            </div>
                        </div>
    
                        <div class="gallery-item restauration">
                            <div class="gallery-item-inner">
                                <div class="col-md-6 col-lg-12">
                                    <div class="img-thumbnail">
                                        <img src="https://media.istockphoto.com/id/1390903151/fr/photo/p%C3%A8re-et-fils-faisant-la-vaisselle-%C3%A0-la-maison.jpg?b=1&s=170667a&w=0&k=20&c=hKHJ6uy5IgnRWizmt4RhGo3Ns40_ADslEYDRD8PqviE=" class="img-fluid" alt="...">
                                        <div class="salaire">1500 €</div>
                                        <div class="caption">
                                            <h4>Plongeur</h4>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati fugit dolores dolorem suscipit voluptatibus</p>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                       
                    </div>
                </div>
    
            </div>
        </div>
        <script src="./JS/Gallerie.js"></script>

        <div class="d-grid gap-2 col-6 mx-auto">
            <button class="btn btn-outline-success" type="submit"><a href="./Reservation.php">Candidater</a></button>
            <p class="text-center">Nos offres évoluent, inscrivez-vous pour etre mieux informé des offres d'emplois</p>
        </div>
    </section>

    <hr class="divider" />
    <!-- Start Avis clients-->

    <section id="Avis">
        <div class="rev-section">

            <h6 class="title">ils nous font confiance</h6>
            <p class="note">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil laboriosam possimus perferendis non error neque.</p>
            
            <div class="reviews">
            
            <div class="review">
               <div class="head-review">
                  <img src="https://img.freepik.com/icones-gratuites/homme_318-188877.jpg?size=626&ext=jpg" width="250px">
               </div>
               <div class="body-review">
                  <div class="name-review">Nathan D.</div>
                  <div class="place-review">Candidat</div>
                    
                  <div class="desc-review">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati eligendi suscipit illum officia ex eos.</div>
               </div>
            </div>
            <div class="review">
               <div class="head-review">
                  <img src="https://img.freepik.com/icones-gratuites/homme_318-188877.jpg?size=626&ext=jpg" width="250px">
               </div>
               <div class="body-review">
                  <div class="name-review">Mary Will</div>
                  <div class="place-review">RH</div>
                  
                  <div class="desc-review">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati eligendi suscipit illum officia ex eos.</div>
               </div>
            </div>
            <div class="review">
               <div class="head-review">
                  <img src="https://img.freepik.com/icones-gratuites/homme_318-188877.jpg?size=626&ext=jpg" width="250px">
               </div>
               <div class="body-review">
                  <div class="name-review">Kevin Tuck</div>
                  <div class="place-review">Directeur</div>
                  
                  <div class="desc-review">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati eligendi suscipit illum officia ex eos.</div>
               </div>
            </div>
            
        </div>
            
    </div>

    </section>

    <footer class="bg-dark text-white pt-5 pb-4" id="footer">
        <div class="container text-center text-md-left">
            <div class="row text-center text-md-left">

                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h5 class="text-upercase mb-4 font-wheight-bold">Notre Agence</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, aperiam? Expedita perferendis excepturi voluptatem exercitationem, facilis nam in numquam tempore voluptas sapiente neque enim qui dolore alias, cum aspernatur perspiciatis?</p>
                </div>

                <div class="class=col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h5 class="text-upercase mb-4 font-wheight-bold">Horaires d'ouvertures</h5>
                    <p>Tous les jours<br/> 9h-13h <br/>14h-18h</p>
                    
                </div>

                <!--<div class="class=col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h5 class="text-upercase mb-4 font-wheight-bold ">Notre restaurant</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid totam labore et, nisi suscipit aperiam. Quo itaque veniam fuga blanditiis, culpa eos saepe ratione dicta pariatur nisi repellat! Ab, maxime!</p>
                </div>-->

                <div class="class=col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h5 class="text-upercase mb-4 font-wheight-bold">Adresse de notre Agence</h5>
                    <p>
                        <i class="fa fa-home mr-3"></i> 75 rue de paris 75000 Paris
                    </p>
                    <p>
                        <i class="fa fa-envelope mr-3"></i> Tr_conseil.recrutement@gmail.com
                    </p>
                    <p>
                        <i class="fa fa-phone mr-3"></i> 01.02.03.04.5
                    </p>
                   

                </div>
            </div>
            <hr class="mb-4">
            <div class="row align-item-center">
                <div class="col-md-7 col-lg-12">
                    <p>Copyright C | tous droits reservées 2023</p>

                </div>

            </div>
        </div>

    </footer>



</body>

</html>
