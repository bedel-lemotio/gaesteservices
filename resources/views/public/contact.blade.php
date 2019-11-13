@extends('public.layouts.app')

@section('headSection')
<meta property="og:title" content="contact-us">
<meta property="og:description" content="gaeste services contact">
<meta property="og:image" content="/images/logo.jpg" class="mx-auto d-block">
<meta property="og:url" content="/services">
<meta name="twitter:card" content="summary">

@endsection


@section('main-content')

<main role="main">



<!-- contact start -->
<section class="contact">
    <div class="contact-in p-2 p-sm-2">
            <h1> Nous joindre </h1>
             <div class="row">
                    <div class="col-md-12 col-sm-12 ">
                        <p>Vous avez des questions? Des commentaires? N’hésitez pas à communiquer avec nous!<a href="qui-nous-sommes#equipe">notre équipe</a> ainsi que sur une expérience unique dans le <a href="qui-nous-sommes#sante">domaine de la santé</a>. Elle se divise en trois domaines d’expertise&nbsp;:</p>
                    </div>
             </div>
            <div class="row">
                <div class="col-md-4 col-sm ">
                    <div class="entreprise mb-4 mb-sm-0">

                        <h2 id="courriel"> Courriel </h2>
                        <h3> Informations générales </h3>
                        <a href="mailto:info@ciao.ca">info@ciao.ca</a>

                        <h3>Entreprise 4.0 </h3>
                        <a href="mailto:entreprise40@ciao.ca">entreprise40@ciao.ca</a>

                        <h3> Accessibilité </h3>
                        <a href="mailto:accessibilite@ciao.ca">accessibilite@ciao.ca</a>

                        <h3> Développement Web </h3>
                        <a href="mailto:developpementweb@ciao.ca">developpementweb@ciao.ca</a>
                    </div>

                </div>

                <div class="col-md-4 col-sm-12 mb-4 mb-sm-0 acces">

                        <h2 id="tel"> Télé­phone </h2>
                        <p><a class="tel" href="tel:+14189488803">+1 418 948.8803</a></p>

                        <h3> Télécopieur </h3>
                        <p>
                            +1 418 948.8804
                        </p>

                </div>
                <div class="col-md-4 col-sm-12 mb-4 mb-sm-0 dev">

                        <h2 id="bureaux"> Nos bureaux </h2>
                        <address>
                            3150 Boulevard Hochelaga<br>
                            Québec QC G1W 2R2
                        </address>

                        <!-- Google map -->
                        <p>
                            <a href="https://www.google.ca/maps/dir//3150+Boulevard+Hochelaga,+Ville+de+Qu%C3%A9bec,+QC+G1W+2R2/@46.7631159,-71.3055145,17z/data=!4m16!1m7!3m6!1s0x4cb891286224525b:0x40e08d5429b12e26!2s3150+Boulevard+Hochelaga,+Ville+de+Qu%C3%A9bec,+QC+G1W+2R2!3b1!8m2!3d46.7631122!4d-71.3033258!4m7!1m0!1m5!1m1!1s0x4cb891286224525b:0x40e08d5429b12e26!2m2!1d-71.3033258!2d46.7631122">
                                Faire un itinéraire avec <span lang="en">Google Maps</span>
                            </a>
                        </p>


                </div>
            </div>
    </div>
</section>
<!-- contact end -->

</main>

@endsection

@section('footerSection')


@endsection
