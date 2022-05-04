<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Hi, welcome to my Portfolio, were you can see my skills and what I want to do"/>
    <meta name="author" content="Julian" />
    <title>Julian PortFolio</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <!-- FontAwesome Icons -->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,wght@0,600;1,600&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;0,500;0,600;0,700;1,300;1,500;1,600;1,700&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,400;1,400&amp;display=swap" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="<?= base_url('assets/css/styles.css')?>" rel="stylesheet" />
    <link href="<?= base_url('assets/css/base.css')?>" rel="stylesheet" />
</head>
<!-- Portfolio Modal 1-->
<div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" aria-labelledby="portfolioModal1" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
            <div class="modal-body text-center pb-5">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <!-- Portfolio Modal - Title-->
                            <h2 class="portfolio-modal-title text-primary text-uppercase mb-2">ChopeGames Web</h2>
                            <!-- Portfolio Modal - Image-->
                            <img class="img-fluid rounded mb-5" src="<?= base_url('assets/img/CGweb.jpg')?>" alt="Julian Portfolio" />
                            <!-- Portfolio Modal - Text-->
                            <p class="mb-4"><a href="http://localhost/ChopeGames" target="blank">Lien local de ChopeGames</a></p>
                            <p class="mb-4">This application is developed through the CI4 framework and with the Viual Studio Code. Linked to its database and to the Desktop application, For customers, it is possible to identify themselves, place orders, subscribe to a Newsletter. For administrators, it is possible to manage orders, add products, brands, categories...</p>
                            <h6 class="title-mission text-primary">Mission 1 - Right to be forgotten</h6>
                            <img class="img-fluid rounded mb-1" src="<?= base_url('assets/img/droitOublie.jpg')?>" alt="Julian Portfolio" />
                            <p class="text-secondary">Droit à l'oubli</p>
                            <p>In accordance with the general data protection regulations, the customer has the possibility of asserting his right to be forgotten in the "Modifier mon compte" tab.</p>
                            <h6 class="title-mission text-primary">Mission 2 - View games by category</h6>
                            <img class="img-fluid rounded mb-1" src="<?= base_url('assets/img/categorie.jpg')?>" alt="Julian Portfolio" />
                            <p class="text-secondary">Onglet catégories - marques</p>
                            <p>In this second mission, the addition of a drop-down list was necessary for an easier search.</p>
                            <h6 class="title-mission text-primary">Mission 3 - Create Category, brand and Admin Management</h6>
                            <div class="d-flex flex-column">
                                <img class="img-fluid rounded mb-1" src="<?= base_url('assets/img/ajoutCategorie.jpg')?>" alt="Julian Portfolio" />
                                <p class="text-secondary">Ajout catégorie</p>
                                <img class="img-fluid rounded mb-1" src="<?= base_url('assets/img/listeAdmin.jpg')?>" alt="Julian Portfolio" />
                                <p class="text-secondary">Lister administrateur</p>
                                <img class="img-fluid rounded mb-1" src="<?= base_url('assets/img/modifierAdmin.jpg')?>" alt="Julian Portfolio" />
                                <p class="text-secondary">Modifier administrateur</p>
                            </div>
                            <h6 class="title-mission text-primary">Mission 4 - Newsletter</h6>
                            <div class="d-flex flex-row">
                                <div class="d-flex flex-column m-1">
                                    <img class="img-fluid rounded mb-1" src="<?= base_url('assets/img/lettre.jpg')?>" alt="Julian Portfolio" />
                                    <p class="text-secondary">Inscription</p>
                                </div>
                                <div class="d-flex flex-column m-1">
                                    <img class="img-fluid rounded mb-1" src="<?= base_url('assets/img/saisieLettre.jpg')?>" alt="Julian Portfolio" />
                                    <p class="text-secondary">Saisie de la lettre</p>
                                </div>
                            </div>
                            <p>Here, the work to be done was to create the "Lettre d'information" view for input and, in the footer, the field to register</p>
                            <h6 class="title-mission text-primary">Mission 5 - Redesign of the order processing system.</h6>
                            <div class="d-flex flex-row">
                                <div class="d-flex flex-column m-1">
                                    <img class="img-fluid rounded mb-1" src="<?= base_url('assets/img/nonTraite.jpg')?>" alt="Julian Portfolio" />
                                    <p class="text-secondary">Liste des commandes non traitée</p>
                                </div>
                                <div class="d-flex flex-column m-1">
                                    <img class="img-fluid rounded mb-1" src="<?= base_url('assets/img/detailNonTraite.jpg')?>" alt="Julian Portfolio" />
                                    <p class="text-secondary">Détail d'une commande non traitée</p>
                                </div>
                            </div>
                            <p>Here it was necessary to modify the order processing system by displaying the list of unprocessed orders and the details of the order during a click. In addition, by clicking on "Passer la commande a traitée" an order confirmation email is sent.</p>
                            <button class="btn btn-primary" data-bs-dismiss="modal">
                                <i class="fas fa-xmark fa-fw"></i>
                                Close
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Portfolio Modal 2-->
<div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" aria-labelledby="portfolioModal2" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
            <div class="modal-body text-center pb-5">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <!-- Portfolio Modal - Title-->
                            <h2 class="portfolio-modal-title text-primary text-uppercase mb-2">ChopeGames C#</h2>
                            <!-- Portfolio Modal - Image-->
                            <img class="img-fluid rounded mb-5" src="<?= base_url('assets/img/chopeGamesCsharp.jpg')?>" alt="Julian Portfolio" />
                            <!-- Portfolio Modal - Text-->
                            <p class="mb-4">This application is developed through the .NET framework and with the Viual Studio IDE. Linked to its database and to the Web application, this desktop application makes it possible to add, modify and delete products, but also to place orders, search for products or even create customers.</p>
                            <h6 class="title-mission text-primary">Mission 1 - Create a customer, a product</h6>
                            <div class="d-flex flex-row">
                                <div class="d-flex flex-column m-1">
                                    <img class="img-fluid rounded mb-1" src="<?= base_url('assets/img/creeClient.jpg')?>" alt="Julian Portfolio" />
                                    <p class="text-secondary">Crée un client</p>
                                </div>
                                <div class="d-flex flex-column m-1">
                                    <img class="img-fluid rounded mb-1" src="<?= base_url('assets/img/creeProduit.jpg')?>" alt="Julian Portfolio" />
                                    <p class="text-secondary">Crée un produit</p>
                                </div>
                            </div>
                            <p>In this assignment, I had to add database related fields for the "Crée un client" and "Crée un produit" screens considering Mr. Toadec's requirements.</p>
                            <h6 class="title-mission text-primary">Mission 2 - Modify a product</h6>
                            <div class="d-flex flex-column">
                                <img class="img-fluid rounded mb-1" src="<?= base_url('assets/img/modifierProduit.jpg')?>" alt="Julian Portfolio" />
                                <p class="text-secondary">Modifier un produit</p>
                            </div>
                            <p>In this mission, I had to make sure that by selecting a game, all the following fields are filled directly.</p>
                            <h6 class="title-mission text-primary">Mission 3 - List a product</h6>
                            <div class="d-flex flex-column">
                                <img class="img-fluid rounded mb-1" src="<?= base_url('assets/img/listerProduit.jpg')?>" alt="Julian Portfolio" />
                                <p class="text-secondary">Lister les produits</p>
                            </div>
                            <h6 class="title-mission text-primary">Mission 4 - Order details</h6>
                            <div class="d-flex flex-row">
                                <div class="d-flex flex-column m-1">
                                    <img class="img-fluid rounded mb-1" src="<?= base_url('assets/img/listerCommande.jpg')?>" alt="Julian Portfolio" />
                                    <p class="text-secondary">Lister les commandes</p>
                                </div>
                                <div class="d-flex flex-column m-1">
                                    <img class="img-fluid rounded mb-1" src="<?= base_url('assets/img/detailsCommande.jpg')?>" alt="Julian Portfolio" />
                                    <p class="text-secondary">Détails d'une commande</p>
                                </div>
                            </div>
                            <p>In the latter, I had to add the following functionality, during a double click, open a new window which details the whole order.</p>
                            <button class="btn btn-primary" data-bs-dismiss="modal">
                                <i class="fas fa-xmark fa-fw"></i>
                                Close
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Portfolio Modal 4-->
<div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" aria-labelledby="portfolioModal4" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
            <div class="modal-body text-center pb-5">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <!-- Portfolio Modal - Title-->
                            <h2 class="portfolio-modal-title text-primary text-uppercase mb-0">Links to sites that I have modified</h2>
                            <!-- Portfolio Modal - Image-->
                            <img class="img-fluid rounded mb-5" src="<?= base_url('assets/img/omorin.jpg')?>" alt="Julian Portfolio" />
                            <!-- Portfolio Modal - Text-->
                            <p>1 - Creation of the <a href="https://www.abitibi.fr" target="blank">Abitibi </a> home page</p>
                            <p>2 - Modification of the Back-Office to allow the chef of the restaurant <a href="https://www.letisseurdessaveurs.com/restaurant" target="blank"> Le tisseur des saveurs</a> to add/remove the four special menus</p>
                            <p>3 - There too, for the 'Cabinet paramédical de Saint-Savin' site, it was the modification of the Back-Office for the addition of a new caregiver on the <a href="https://www.paramedicalsaintsavin.fr/" target="blank"> home page</a> and the <a href="https://www.paramedicalsaintsavin.fr/contact"> contact page</a></p>
                            <p>4 - For the '<a href="https://www.cm-conseil.net/">CM-CONSEIL</a>' site, adding images, modifying images</p>
                            <button class="btn btn-primary" data-bs-dismiss="modal">
                                <i class="fas fa-xmark fa-fw"></i>
                                Close
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Portfolio Modal 5-->
<div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" aria-labelledby="portfolioModal5" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
            <div class="modal-body text-center pb-5">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <!-- Portfolio Modal - Image-->
                            <img class="img-fluid rounded mb-5" src="<?= base_url('assets/img/open.jpg')?>" alt="Julian Portfolio" />
                            <!-- Portfolio Modal - Text-->
                            <p>When I didn't have projects to do, I took '<a href="https://openclassrooms.com/fr/dashboard/courses">OpenClassrooms</a>' courses and worked on the 'ChopeGames' site.</p>
                            <p>Here are the certificates received after validating the courses 100%</p>
                            <div class="d-flex flex-column">
                                <div class="d-flex flex-row">
                                    <div class="d-flex flex-column m-1">
                                        <a class="img-fluid rounded mb-1" target="blank"  style="text-decoration: none;" href="<?= base_url('assets/img/openClassrooms/adopterUneArchitectureMVCavecPHP.pdf')?>" alt="Julian Portfolio">
                                            <p class="text-secondary">Adopter une architecture MVC en PHP</p>
                                        </a>
                                    </div>
                                    <div class="d-flex flex-column m-1">
                                        <a class="img-fluid rounded mb-1" target="blank" style="text-decoration: none;" href="<?= base_url('assets/img/openClassrooms/concevezVotreSiteWebAvecPHPMySQL.pdf')?>" alt="Julian Portfolio" />
                                            <p class="text-secondary">Concevez votre site Web avec PHP MySQL</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="d-flex flex-row">
                                    <div class="d-flex flex-column m-1">
                                        <a class="img-fluid rounded mb-1" target="blank" style="text-decoration: none;" href="<?= base_url('assets/img/openClassrooms/ecrivezDuJavaScriptPourLeWeb.pdf')?>" alt="Julian Portfolio" />
                                            <p class="text-secondary">Ecrivez du JavaScript pour le Web</p>
                                        </a>
                                    </div>
                                    <div class="d-flex flex-column m-1">
                                        <a class="img-fluid rounded mb-1" target="blank" style="text-decoration: none;" href="<?= base_url('assets/img/openClassrooms/creeDesAnimationsCSSModernes.pdf')?>" alt="Julian Portfolio" />
                                            <p class="text-secondary">Crée des animations CSS modernes</p>
                                        </a>
                                    </div>
                                </div>
                                <a class="img-fluid rounded mb-1" style="text-decoration: none;" target="blank" href="<?= base_url('assets/img/openClassrooms/simplifiezVousLeCSSavecSASS.pdf')?>" alt="Julian Portfolio" />
                                    <p class="text-secondary">Simplifiez-vous le CSS avec SASS</p>
                                </a>
                            </div>
                            <button class="btn btn-primary" data-bs-dismiss="modal">
                                <i class="fas fa-xmark fa-fw"></i>
                                Close
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Portfolio Modal 6-->
<div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" aria-labelledby="portfolioModal6" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
            <div class="modal-body text-center pb-5">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <!-- Portfolio Modal - Title-->
                            <h2 class="portfolio-modal-title text-primary text-uppercase mb-0">Submarine</h2>
                            <!-- Portfolio Modal - Image-->
                            <img class="img-fluid rounded mb-5" src="<?= base_url('assets/img/portfolio/submarine.png')?>" alt="Julian Portfolio" />
                            <!-- Portfolio Modal - Text-->
                            <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                            <button class="btn btn-primary" data-bs-dismiss="modal">
                                <i class="fas fa-xmark fa-fw"></i>
                                Close
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<body id="page-top">
<div class="loader" id="loader">Loading...</div>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm" id="mainNav">
        <div class="container px-5">
            <a class="navbar-brand fw-bold" href="#propos">Julian Portfolio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="bi-list"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto me-4 my-3 my-lg-0">
                    <li class="nav-item"><a class="nav-link me-lg-1" href="#about-me"><i class="bi bi-person-lines-fill m-2"></i></i>About me</a></li>
                    <li class="nav-item"><a class="nav-link me-lg-1" href="#projects"><i class="bi bi-display m-2"></i>Project</a></li>
                    <li class="nav-item"><a class="nav-link me-lg-1" href="#watch"><i class="bi bi-card-checklist m-2"></i>Technological watch</a></li>
                    <li class="nav-item"><a class="nav-link me-lg-1" href="mailto:b.julian.pro@icloud.com"><i class="bi bi-send m-2"></i>Contact</span></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Mashead header-->
    <header class="masthead" id="about-me">
        <div class="container p-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6">
                    <!-- Mashead text and app badges-->
                    <div class="mb-5 mb-lg-0 text-center text-lg-start">
                        <h1 class="display-1 lh-1 mb-3">Hello world !</h1>
                    </div>
                    <div class="d-flex flex-column flex-lg-row align-items-center">
                        <p>
                            👀 I'm interested in Full-Stack development <br>
                            🌱 I'm currently learning Full-Stack development and application programming,<br>
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="<?= base_url('assets/img/macbook-pro.png')?>" height="100%" width="100%">
                </div>
            </div>
        </div>
    </header>
    <!-- App features section-->
    <section>
        <div class="container px-5">
            <h6 class="display-6 lh-6 mb-3 d-flex justify-content-center">During my training</h6>
            <div class="row gx-5 align-items-center">
                <div class="col-lg-12 order-lg-1 mb-5 mb-lg-0">
                    <div class="container-fluid px-5">
                        <div class="row gx-5">
                            <div class="col-md-6 mb-5">
                                <!-- Feature item-->
                                <div class="text-center">
                                    <i class="bi-phone icon-feature text-gradient d-block mb-3"></i>
                                    <h3 class="font-alt">Phone App</h3>
                                    <i class="bi bi-apple"></i>
                                    <i class="bi bi-microsoft"></i>
                                    <p class="text-muted mb-0 mt-2">C# with Xamarin</p>
                                    <p class="text-muted mb-0 mt-2">IDE Visual Studio</p>
                                </div>
                            </div>
                            <div class="col-md-6 mb-5">
                                <!-- Feature item-->
                                <div class="text-center">
                                    <i class="bi-laptop icon-feature text-gradient d-block mb-3"></i>
                                    <h3 class="font-alt">Desktop App</h3>
                                    <i class="bi bi-microsoft"></i>
                                    <p class="text-muted mb-0 mt-2">.NET Framework Console Application in C#</p>
                                    <p class="text-muted mb-0 mt-2">IDE Visual Studio</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <!-- Feature item-->
                                <div class="text-center">
                                    <i class="bi-cpu icon-feature text-gradient d-block mb-3"></i>
                                    <h3 class="font-alt">Algorithm</h3>
                                    <i class="bi bi-filetype-py"></i>
                                    <p class="text-muted mb-0 mt-2">Python algorithm</p>
                                    <p class="text-muted mb-0 mt-2">Python IDLE 3.9</p>
                                    <p class="text-muted mb-0">Visual Studio Code</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <!-- Feature item-->
                                <div class="text-center">
                                    <i class="bi-window icon-feature text-gradient d-block mb-3"></i>
                                    <h3 class="font-alt">Web Dev</h3>
                                    <i class="bi bi-filetype-html"></i>
                                    <i class="bi bi-filetype-scss"></i>
                                    <i class="bi bi-filetype-js"></i>
                                    <i class="bi bi-filetype-php"></i>
                                    <p class="text-muted mb-0 mt-2">HTML & SCSS/CSS</p>
                                    <p class="text-muted mb-0">JavaScript & JSON</p>
                                    <p class="text-muted mb-0">PHP & MVC Model</p>
                                    <p class="text-muted mb-0 mt-2">MySQL / phpMyAdmin</p>
                                    <p class="text-muted mb-0 mt-2">Visual Studio Code</p>
                                    <p class="text-muted mb-0">CodeIgniter4</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio Section-->
    <section class="page-section portfolio" id="projects">
        <!-- Portfolio Grid Items-->
        <div class="container">
            <div class="row justify-content-center">
                <h6 class="display-6 lh-6 mb-5 d-flex justify-content-center">At school</h6>
                <!-- Portfolio Item 1-->
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal1">
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="<?= base_url('assets/img/CGweb.jpg')?>" alt="Julian Portfolio" />
                    </div>
                </div>
                <!-- Portfolio Item 2-->
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal2">
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="<?= base_url('assets/img/chopeGamesCsharp.jpg')?>" alt="Julian Portfolio" />
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <h6 class="display-6 lh-6 mb-5 d-flex justify-content-center">During my internship</h6>
                <!-- Portfolio Item 4-->
                <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
                    <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal4">
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="<?= base_url('assets/img/omorin.jpg')?>" alt="Julian Portfolio" />
                    </div>
                </div>
                <!-- Portfolio Item 5-->
                <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
                    <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal5">
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="<?= base_url('assets/img/open.jpg')?>" alt="Julian Portfolio" />
                </div>
            </div>
        </div>
    </section>
    <!-- Basic features section-->
    <section class="bg-light" id="watch">
        <div class="container px-5">
            <div class="row gx-5 align-items-center justify-content-center justify-content-lg-between">
                <div class="col-12 col-lg-5">
                    <h2 class="display-4 lh-1 mb-4">Technological watch</h2>
                    <p class="lead fw-normal text-muted mb-5 mb-lg-0">Technological watch consists of keeping abreast of the latest technological innovations. I keep myself informed of the news with the tags :</p>
                    <div class="container">
                        <ul>
                            <li>#apple</li>
                            <li>#windows</li>
                            <li>#dev</li>
                            <li>#tech</li>
                            <li>#anssi</li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-8 col-md-6">
                    <div class="px-5 px-sm-0"><img class="img-fluid rounded-circle" src="<?= base_url('assets/img/feedly.png')?>" alt="Julian Portfolio" /></div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="bg-black text-center py-5">
        <div class="container px-5">
            <div class="text-white-50 small">
                <div class="mb-2">&copy; Julian PortFolio 2022. All Rights Reserved.</div>
            </div>
            <a target="blank" href="https://github.com/JuDev22"><i class="bi bi-github i-contact"></i></a>
            <a target="blank" href="https://www.linkedin.com/in/julian-belleguic-b0b848228"><i class="bi bi-linkedin i-contact"></i></a>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="assets/js/scripts.js"></script>
    <script src="<?= base_url('assets/js/loader.js')?>"></script>
</body>

</html>