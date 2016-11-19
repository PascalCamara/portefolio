@extends('layouts.app')

@section('title', 'Page Title')

@section('content')

    <!-- Header -->
    <header id="header">
        <div class="intro">
            <div class="container">
                <div class="row">
                    <div class="intro-text">
                        <h1><span class="name">CAMARA</span> Pascal</h1>
                        <p>Etudiant EEMI  3ème année - Spécialité Développement</p>
                        <a href="#about" class="btn btn-default btn-lg page-scroll">En savoir plus</a> </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Navigation -->
    <div id="nav">
        <nav class="navbar navbar-custom">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse"> <i class="fa fa-bars"></i> </button>
                    <a class="navbar-brand page-scroll" href="#page-top">CAMARA Pascal</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                    <ul class="nav navbar-nav">
                        <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                        <li class="hidden"> <a href="#page-top"></a> </li>
                        <li> <a class="page-scroll" href="#about">A propos de moi</a> </li>
                        <!-- <li> <a class="page-scroll" href="#skills">Compétences</a> </li> -->
                        <li> <a class="page-scroll" href="#portfolio">Portfolio</a> </li>
                        <li> <a class="page-scroll" href="#resume">Expériences</a> </li>
                        <li> <a class="page-scroll" href="#contact">Contact</a> </li>
                        <li><a style="padding: 10px 0px; line-height: 25px; margin-left: 10px;" href="https://github.com/PascalCamara" target="_blank"><i class="fa fa-github"></i></a></li>
                        <li><a style="padding: 10px 0px; line-height: 25px; margin-left: 10px;" href="https://fr.linkedin.com/in/pascal-camara-292897a9" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <!-- About Section -->
    <div id="about">
        <div class="container">
            <div class="section-title text-center center">
                <h2>A propos de moi</h2>
                <hr>
            </div>
            <div class="row">
                <div class="col-md-12 text-center"><img src="assets/images/about.jpg" class="img-responsive"></div>
                <div class="col-md-8 col-md-offset-2">
                    <div class="about-text">
                        <p class="text-center" >Etudiant en 3ème année à l'école Européenne des Métiers de l'Internet en spécialité "développement web".</p>
                        <p class="text-center" >Polyvalent, j'ai choisi cette école pour la transversalité de la formation :</p>
                        <p class="text-center text-uppercase">Web designer - Web Developper - Web Marqueteur</p>
                        <p class="text-center"><a class="btn btn-primary" href="{{ url('CV') }}" target="_blank"><i class="fa fa-download"></i> Télécharger mon CV </a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Skills Section
    <div id="skills" class="text-center">
        <div class="container">
            <div class="section-title center">
                <h2>Compétences</h2>
                <hr>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 skill"> <span class="chart" data-percent="80"> <span class="percent">80</span> </span>
                    <h4>HTML | CSS </h4>
                </div>
                <div class="col-md-4 col-sm-6 skill"> <span class="chart" data-percent="80"> <span class="percent">80</span> </span>
                    <h4>JavaScript | JQuery</h4>
                </div>
                <div class="col-md-4 col-sm-6 skill"> <span class="chart" data-percent="80"> <span class="percent">80</span> </span>
                    <h4>PHP | WordPress </h4>
                </div>
                <div class="col-md-4 col-sm-6 skill"> <span class="chart" data-percent="70"> <span class="percent">70</span> </span>
                    <h4> Codeilgniter | Laravel | AngularJs </h4>
                </div>
                <div class="col-md-4 col-sm-6 skill"> <span class="chart" data-percent="70"> <span class="percent">70</span> </span>
                    <h4>Photoshop | Illustrator</h4>
                </div>
                <div class="col-md-4 col-sm-6 skill"> <span class="chart" data-percent="85"> <span class="percent">85</span> </span>
                    <h4>Word | Excel | Power Point</h4>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Portfolio Section -->
    <div id="portfolio">
        <div class="container">
            <div class="section-title text-center center">
                <h2>Portfolio</h2>
                <hr>
            </div>
            <div class="categories">
                <ul class="cat">
                    <li>
                        <ol class="type">
                            <li><a href="#" data-filter="*" class="active">Tous</a></li>
                            <li><a href="#" data-filter=".projet">Projets EEMI</a></li>
                            <li><a href="#" data-filter=".procedural">PHP procédural</a></li>
                            <li><a href="#" data-filter=".app">AngularsJs</a></li>
                            <li><a href="#" data-filter=".wp">Wordpress</a></li>
                            <li><a href="#" data-filter=".frameworkPHP">Framework PHP</a></li>
                        </ol>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="row">
                <div class="portfolio-items">
                    <div class="col-sm-6 col-md-3 col-lg-3 vignette wp" data-url="https://github.com/PascalCamara/keyprod" >
                        <div class="portfolio-item">
                            <div class="hover-bg"> <a href="assets/images/portfolio/09-large.jpg"   rel="prettyPhoto">
                                    <div class="hover-text">
                                        <h4 class="vignette_project_title">Plugin Wordpress</h4>
                                        <small>Keyprod monitoring sur wordpress<br />
                                            Wordpress | API Trello | VueJs
                                        </small>

                                    </div>
                                    <img src="assets/images/portfolio/09-small.jpg" class="img-responsive" alt="Plugin Wordpress"> </a> </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-3 vignette app" data-url="http://app-bilan-pro.april.fr/app/#!/home/1" >
                        <div class="portfolio-item">
                            <div class="hover-bg"> <a href="assets/images/portfolio/01-large.jpg"   rel="prettyPhoto">
                                <div class="hover-text">
                                    <h4 class="vignette_project_title">Wep Application</h4>
                                    <small>Développement & mise en production <br />
                                        AngularJs
                                    </small>

                                </div>
                                <img src="assets/images/portfolio/01-small.jpg" class="img-responsive" alt="Wep Application"> </a> </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-3 vignette wp" data-url="http://lorafolk.com/">
                        <div class="portfolio-item" >
                            <div class="hover-bg"> <a href="assets/images/portfolio/02-large.jpg" rel="prettyPhoto">
                                    <div class="hover-text">
                                        <h4 class="vignette_project_title">Lorafolk</h4>
                                        <small>Développement & mise en production <br />
                                            Wordpress
                                        </small> </div>
                                    <img src="assets/images/portfolio/02-small.jpg" class="img-responsive" alt="Lorafolk"> </a> </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-3 vignette frameworkPHP" data-url="https://www.simplis.fr/">
                        <div class="portfolio-item">
                            <div class="hover-bg"> <a href="assets/images/portfolio/03-large.jpg" rel="prettyPhoto">
                                    <div class="hover-text">
                                        <h4 class="vignette_project_title">Simplis</h4>
                                        <small>Integration <br />
                                            Correctifs Back-end | Front-end <br />
                                            Framework Codeilgniter
                                        </small> </div>
                                    <img src="assets/images/portfolio/03-small.jpg" class="img-responsive" alt="Simplis"> </a> </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-3 vignette wp"  data-url="http://www.equaliscapital.com/">
                        <div class="portfolio-item">
                            <div class="hover-bg"> <a href="assets/images/portfolio/04-large.jpg" rel="prettyPhoto">
                                    <div class="hover-text">
                                        <h4 class="vignette_project_title">Equalis Capital</h4>
                                        <small>Developpement de shortcode & plugins <br />
                                            Wordpress
                                        </small> </div>
                                    <img src="assets/images/portfolio/04-small.jpg" class="img-responsive" alt="Equalis Capital"> </a> </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-3 vignette projet" data-url="http://colin.etudiant-eemi.com/perso/familysitting/index.php?dossier=site&fichier=home">
                        <div class="portfolio-item">
                            <div class="hover-bg"> <a href="assets/images/portfolio/05-large.jpg" rel="prettyPhoto">
                                    <div class="hover-text">
                                        <h4 class="vignette_project_title">Familysitting</h4>
                                        <small>Développeur <br />
                                            Projet scolaire 2ème année EEMI
                                        PHP Procedural | PHP
                                        </small> </div>
                                    <img src="assets/images/portfolio/05-small.jpg" class="img-responsive" alt="Familysitting"> </a> </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-3 vignette procedural" data-url="http://camara.etudiant-eemi.com/perso/realisations/2ADEV_POO_MVC/">
                        <div class="portfolio-item">
                            <div class="hover-bg"> <a href="assets/images/portfolio/06-large.jpg" rel="prettyPhoto">
                                <div class="hover-text">
                                    <h4 class="vignette_project_title">Blog</h4>
                                    <small>
                                        Mise en pratique des enseignements Développement <br />
                                        PHP procédural | MVC | Ajax
                                    </small> </div>
                                <img src="assets/images/portfolio/06-small.jpg" class="img-responsive" alt="Blog"> </a> </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>


    <!-- Portfolio Section new -->
    <div id="portfolio">
        <div class="container">
            <div class="section-title text-center center">
                <h2>Portfolio new</h2>
                <hr>
            </div>
            <div class="categories">
                <ul class="cat">
                    <li>
                        <ol class="type">
                            <li><a href="#" data-filter="*" class="active">Tous</a></li>
                            <li><a href="#" data-filter=".projet">Projets EEMI</a></li>
                            <li><a href="#" data-filter=".procedural">PHP procédural</a></li>
                            <li><a href="#" data-filter=".app">AngularsJs</a></li>
                            <li><a href="#" data-filter=".wp">Wordpress</a></li>
                            <li><a href="#" data-filter=".frameworkPHP">Framework PHP</a></li>
                        </ol>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="row">
                <div class="portfolio-items">
                    <div class="col-sm-6 col-md-3 col-lg-3 vignette wp" data-url="https://github.com/PascalCamara/keyprod" >
                        <div class="portfolio-item">
                            <div class="hover-bg"> <a href="assets/images/portfolio/09-large.jpg"   rel="prettyPhoto">
                                    <div class="hover-text">
                                        <h4 class="vignette_project_title">Plugin Wordpress</h4>
                                        <small>Keyprod monitoring sur wordpress<br />
                                            Wordpress | API Trello | VueJs
                                        </small>

                                    </div>
                                    <img src="assets/images/portfolio/09-small.jpg" class="img-responsive" alt="Plugin Wordpress"> </a> </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-3 vignette app" data-url="http://app-bilan-pro.april.fr/app/#!/home/1" >
                        <div class="portfolio-item">
                            <div class="hover-bg"> <a href="assets/images/portfolio/01-large.jpg"   rel="prettyPhoto">
                                    <div class="hover-text">
                                        <h4 class="vignette_project_title">Wep Application</h4>
                                        <small>Développement & mise en production <br />
                                            AngularJs
                                        </small>

                                    </div>
                                    <img src="assets/images/portfolio/01-small.jpg" class="img-responsive" alt="Wep Application"> </a> </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-3 vignette wp" data-url="http://lorafolk.com/">
                        <div class="portfolio-item" >
                            <div class="hover-bg"> <a href="assets/images/portfolio/02-large.jpg" rel="prettyPhoto">
                                    <div class="hover-text">
                                        <h4 class="vignette_project_title">Lorafolk</h4>
                                        <small>Développement & mise en production <br />
                                            Wordpress
                                        </small> </div>
                                    <img src="assets/images/portfolio/02-small.jpg" class="img-responsive" alt="Lorafolk"> </a> </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-3 vignette frameworkPHP" data-url="https://www.simplis.fr/">
                        <div class="portfolio-item">
                            <div class="hover-bg"> <a href="assets/images/portfolio/03-large.jpg" rel="prettyPhoto">
                                    <div class="hover-text">
                                        <h4 class="vignette_project_title">Simplis</h4>
                                        <small>Integration <br />
                                            Correctifs Back-end | Front-end <br />
                                            Framework Codeilgniter
                                        </small> </div>
                                    <img src="assets/images/portfolio/03-small.jpg" class="img-responsive" alt="Simplis"> </a> </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-3 vignette wp"  data-url="http://www.equaliscapital.com/">
                        <div class="portfolio-item">
                            <div class="hover-bg"> <a href="assets/images/portfolio/04-large.jpg" rel="prettyPhoto">
                                    <div class="hover-text">
                                        <h4 class="vignette_project_title">Equalis Capital</h4>
                                        <small>Developpement de shortcode & plugins <br />
                                            Wordpress
                                        </small> </div>
                                    <img src="assets/images/portfolio/04-small.jpg" class="img-responsive" alt="Equalis Capital"> </a> </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-3 vignette projet" data-url="http://colin.etudiant-eemi.com/perso/familysitting/index.php?dossier=site&fichier=home">
                        <div class="portfolio-item">
                            <div class="hover-bg"> <a href="assets/images/portfolio/05-large.jpg" rel="prettyPhoto">
                                    <div class="hover-text">
                                        <h4 class="vignette_project_title">Familysitting</h4>
                                        <small>Développeur <br />
                                            Projet scolaire 2ème année EEMI
                                            PHP Procedural | PHP
                                        </small> </div>
                                    <img src="assets/images/portfolio/05-small.jpg" class="img-responsive" alt="Familysitting"> </a> </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-3 vignette procedural" data-url="http://camara.etudiant-eemi.com/perso/realisations/2ADEV_POO_MVC/">
                        <div class="portfolio-item">
                            <div class="hover-bg"> <a href="assets/images/portfolio/06-large.jpg" rel="prettyPhoto">
                                    <div class="hover-text">
                                        <h4 class="vignette_project_title">Blog</h4>
                                        <small>
                                            Mise en pratique des enseignements Développement <br />
                                            PHP procédural | MVC | Ajax
                                        </small> </div>
                                    <img src="assets/images/portfolio/06-small.jpg" class="img-responsive" alt="Blog"> </a> </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
    <!-- Resume Section -->
    <div id="resume" class="text-center">
        <div class="container">
            <div class="section-title center">
                <h2>Expériences professionnel</h2>
                <hr>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="timeline">
                        <li>
                            <div class="timeline-image">
                                <h4>Avril - Septembre<br>
                                    — <br>
                                    2016 </h4>
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>La Bonne Grosse , Paris 18e</h4>
                                    <h4 class="subheading">Stage Developper full-stack</h4>
                                </div>
                                <div class="timeline-body">
                                    <p>Développement d'une Web application en Angularjs</p>
                                    <p>Réalisation de sites en Wordpress</p>
                                    <p>Mise en production des sites</p>
                                    <p>Correctifs sur des sites en PHP (frameworks)</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <h4>Octobre 2013 <br>
                                    — <br>
                                    Juillet 2014</h4>
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Société Ugap, Champs sur Marne</h4>
                                    <h4 class="subheading">CDD Technicien administratif</h4>
                                </div>
                                <div class="timeline-body">
                                    <p>Saisie des factures, traitrement des anomolies (SAP)</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-image">
                                <h4>Novembre 2012 <br>
                                    — <br>
                                    Juillet 2013 </h4>
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Eiffage Energie (BTP)</h4>
                                    <h4 class="subheading">Mission intérim Comptabilité fournisseurs</h4>
                                </div>
                                <div class="timeline-body">
                                    <p>Responsabilité de la comptabilité du pôle Melun</p>
                                    <p>Analyses et contrôles des budgets (Oracle)</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <h4>Juin 2012 <br>
                                    — <br>
                                    Aôut 2012 </h4>
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Skandia (Assurance vie)</h4>
                                    <h4 class="subheading">CDD Aide-comptable</h4>
                                </div>
                                <div class="timeline-body">
                                    <p>Team Meeting avec l'Angleterre</p>
                                    <p>Rapprochement bancaire</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="section-title center">
                <h2>Formations</h2>
                <hr>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="timeline">

                        <!-- Education Section-->

                        <li>
                            <div class="timeline-image">
                                <h4>2017 <br>
                                    — <br>
                                    2014 </h4>
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Ecole Européenne des Métiers de l'internet</h4>
                                    <h4 class="subheading">EEMI - Paris 2e - Spécialité développement</h4>
                                </div>
                                <div class="timeline-body">
                                    <p>Web Marketing - Web Design - Web Développement</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <h4> <br />2012
                                </h4>
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Baccaleuréat professionnel comptabilité</h4>
                                    <h4 class="subheading">Lycée Lino Ventura - Ozoir-la-Ferrière</h4>
                                </div>

                            </div>
                        </li>
                        <li>
                            <div class="timeline-image">
                                <h4> <br />2011 </h4>
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>BEP comptabilité</h4>
                                    <h4 class="subheading">Lycée Lino Ventura - Ozoir-la-Ferrière</h4>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Section -->
    <div id="contact" class="text-center">
        <div class="container">
            <div class="section-title center">
                <h2>Contact</h2>
                <hr>
            </div>
            <div class="col-md-8 col-md-offset-2">
                <div class="col-md-4"> <i class="fa fa-map-marker fa-2x"></i>
                    <p>19 rue du Maréchal Soult,<br>
                        Pontault-Combault , 77340</p>
                </div>
                <div class="col-md-4"> <i class="fa fa-envelope-o fa-2x"></i>
                    <p>pascalmail77@gmail.com</p>
                </div>
                <div class="col-md-4"> <i class="fa fa-phone fa-2x"></i>
                    <p> 06 19 88 28 37</p>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="col-md-8 col-md-offset-2">
                <h3>Envoyer moi un message</h3>
                <form name="sentMessage" id="contactForm"  method="post" action="{{ url('store') }}">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" id="name" name="name" class="form-control" placeholder="Nom" required="required">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="email" name="email" id="email" class="form-control" placeholder="Email" required="required">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <textarea name="message" id="message" class="form-control" rows="4" placeholder="Message" required></textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                    <div id="success"></div>
                    <button type="submit" class="btn btn-default">Envoyer le Message</button>
                    @if (count($errors) > 0)
                        <div class="alert alert-danger" style="position: fixed;top: 0;width: 80%;margin: auto;display: block!important;margin-top: 80px;left: 0;right: 0;z-index: 9999;">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if (session()->has('successMessage'))
                        <div class="alert alert-success" style="position: fixed;top: 0;width: 80%;margin: auto;display: block!important;margin-top: 80px;left: 0;right: 0;z-index: 9999;">
                            <ul>
                                    <li>{{ session()->get('successMessage') }}</li>
                            </ul>
                        </div>
                    @endif
                </form>
                <div class="social">
                    <ul>
                        <li><a href="https://github.com/PascalCamara"><i class="fa fa-github"></i></a></li>
                        <li><a href="https://fr.linkedin.com/in/pascal-camara-292897a9"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

@endsection


@push('scripts')

<script type="text/javascript" src="assets/js/SmoothScroll.js"></script>
<script type="text/javascript" src="assets/js/easypiechart.js"></script>
<script type="text/javascript" src="assets/js/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="assets/js/jquery.isotope.js"></script>
<script type="text/javascript" src="assets/js/jquery.counterup.js"></script>
<script type="text/javascript" src="assets/js/waypoints.js"></script>
<script type="text/javascript" src="assets/js/jqBootstrapValidation.js"></script>
<script type="text/javascript" src="assets/js/main.js"></script>
<script type="text/javascript" src="assets/js/vignettes.js"></script>

@endpush