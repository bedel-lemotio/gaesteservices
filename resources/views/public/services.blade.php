@extends('public.layouts.app')


@section('headSection')
<meta property="og:title" content="services">
<meta property="og:description" content="gaeste services services">
<meta property="og:image" content="/images/logo.jpg" class="mx-auto d-block">
<meta property="og:url" content="/services">
<meta name="twitter:card" content="summary">

@endsection



@section('main-content')






<!-- title start -->

<!-- title end -->

<!-- about start -->
<section class="services">
    <div class="services-in">
        <div class="row">
            <div class="small-12 large-9 max columns">
                <h2>Services-conseils</h2>
                <p>Notre offre de services s’appuie sur la compétence de <a href="qui-nous-sommes#equipe">notre équipe</a> ainsi que sur une expérience unique dans le <a href="qui-nous-sommes#sante">domaine de la santé</a>. Elle se divise en trois domaines d’expertise&nbsp;:</p>
            </div>
        </div>
        <div class="row">
            <div class="large-4 columns cols entreprise">
                <h3><a href="/services/entreprise-4-0">Entreprise <br> 4.0</a></h3>
                <p>Une offre clé en main pour faire progresser votre entreprise vers l'excellence opérationelle.</p>
                <a class="button arrow" href="/services/entreprise-4-0">
                    En savoir plus
                    <span class="visuallyhidden">sur l'entreprise 4.0</span>
                </a>			</div>
            <div class="large-4 columns cols acces">
                <h3><a href="/services/accessibilite" class="">Accessi­bilité <br> Web</a></h3>
                <p>Des spécialistes de renom pour vous accompagner dans l’intégration de vos pratiques d’accessibilité Web</p>
                <a class="button arrow" href="/services/accessibilite">
                    En savoir plus
                    <span class="visuallyhidden">sur l'accessibilité</span>
                </a>			</div>
            <div class="large-4 columns cols dev">
                <h3><a href="/services/centre-de-developpement" class="">Centre de <br> développement</a></h3>
                <p>Une expertise diversifiée pour vous accompagner dans vos projets de développement de solutions</p>
                <a class="button arrow" href="/services/centre-de-developpement">
                    En savoir plus
                    <span class="visuallyhidden">sur le centre de développement</span>
                </a>			</div>
        </div>
    </div>
</section>

<!-- about end -->

<!-- team start -->

<!-- team end -->


@endsection

@section('footerSection')


@endsection
