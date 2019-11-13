@extends('public.layouts.app')

@section('headSection')

<meta property="og:title" content="home">
<meta property="og:description" content="gaeste services home">
<meta property="og:image" content="/images/logo.jpg" class="mx-auto d-block">
<meta property="og:url" content="/services">
<meta name="twitter:card" content="summary">


@endsection





@section('main-content')


<main role="main">

    <!-- intro start -->
    <section class=" container-fluid intro home">
        <span class="bgBackOne d-block"></span>
        <span class="d-block bgCenter"></span>
        <div class="container textContainerTI">
            <div class="intro-in">
                <div class="row">
                    <div class="col-12 col-lg-9 max pl-2 pr-2">
                        <h1>Les <abbr title="Technologies de l'information">TI</abbr> : notre passion&nbsp;!</h1>
                        <p>Une équipe connectée, sympathique, engagée. <strong>Notre équipe.</strong> Ce qui nous unit&nbsp;? <strong>Notre passion</strong> pour les défis, l'innovation, l'intégration et l’élaboration de solutions qui répondent à <strong>vos besoins</strong>.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- intro end -->

    <!-- services start -->
    <section class="services">
        <div class="services-in">
            <div class="row">
                <div class="col-sm-12 col-9 ">
                    <h2>Services-conseils</h2>
                    <p>Notre offre de services s’appuie sur la compétence de <a href="qui-nous-sommes#equipe">notre équipe</a> ainsi que sur une expérience unique dans le <a href="qui-nous-sommes#sante">domaine de la santé</a>. Elle se divise en trois domaines d’expertise&nbsp;:</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-12 serv  entreprise">
                    <h3><a href="/services/entreprise-4-0" class="service-name mb-2">Entreprise <br> 4.0</a></h3>
                    <p class="mb-5">Une offre clé en main pour faire progresser votre entreprise vers l'excellence opérationelle.</p>
                    <a class="button arrow" href="/services/entreprise-4-0">
                        En savoir plus
<!--                        <span class="visuallyhidden">sur l'entreprise 4.0</span>-->
                    </a>
                </div>
                <div class="col-md-4 col-sm-12 serv acces">
                    <h3><a href="/services/accessibilite" class="service-name mb-2">Accessi­bilité <br> Web</a></h3>
                    <p class="mb-5">Des spécialistes de renom pour vous accompagner dans l’intégration de vos pratiques d’accessibilité Web</p>
                    <a class="button arrow" href="/services/accessibilite">
                        En savoir plus
<!--                        <span class="visuallyhidden">sur l'accessibilité</span>-->
                    </a>
                </div>
                <div class="col-md-4 col-sm-12 serv dev">
                    <h3><a href="/services/centre-de-developpement" class="service-name mb-2">Centre de <br> développement</a></h3>
                    <p  class="mb-5">Une expertise diversifiée pour vous accompagner dans vos projets de développement de solutions</p>
                    <a class="button arrow " href="/services/centre-de-developpement">
                        En savoir plus
<!--                        <span class="visuallyhidden">sur le centre de développement</span>-->
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- services end -->

</main>






@endsection

@section('footerSection')


@endsection
