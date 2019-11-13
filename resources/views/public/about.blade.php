@extends('public.layouts.app')

@section('headSection')
<meta property="og:title" content="about-us">
<meta property="og:description" content="gaeste services about us">
<meta property="og:image" content="/images/logo.jpg" class="mx-auto d-block">
<meta property="og:url" content="/services">
<meta name="twitter:card" content="summary">

@endsection




@section('main-content')



<section class="about">


    <h1> Qui nous sommes</h1>

    <div>
        <div class="row">
            <div class="col-9 ">
                <h2 id="entreprise"> Notre entreprise </h2>
            </div>
        </div>
        <div class="row">
            <div class="desc col-7 columns">
                <p>Fondée en 2006, <span lang="it">Ciao </span>est une entreprise <strong>dynamique</strong> spécialisée dans les domaines de l’accessibilité du Web, le&nbsp;développement et l'intégration d'application ainsi que de l'excellence opérationnelle.</p>
                <p>Toujours en croissance, nous regroupons aujourd’hui une soixantaine de conseillers qui partagent tous avec fierté les <strong>grandes valeurs</strong> de l’entreprise&nbsp;:</p>
                <p>L'engagement - L'innovation - L'excellence - Le savoir-faire - Le savoir-être</p>
                <h3>Engagés dans votre réussite</h3>
                <p>Chez <span lang="it">Ciao</span>, notre engagement se manifeste d’abord envers nos clients. La <strong>compétence de notre personnel</strong> et notre volonté constante de <strong>surpasser leurs attentes</strong> constituent notre marque de commerce. Un soin particulier est porté au recrutement de nos conseillers, sur lesquels repose notre <strong>réputation d’excellence</strong>, ainsi qu’à l’établissement de relations d’affaires fondées sur la transparence et le respect de nos engagements.</p>
                <p>Notre engagement se traduit également envers nos conseillers. Pour nous, <strong>un conseiller performant est un conseiller heureux</strong>&nbsp;! Nous fournissons donc à nos employés un climat de travail basé sur la confiance, la collaboration et le plaisir. Notre <strong>politique de formation continue</strong> encourage nos conseillers à se perfectionner de jour en jour, ainsi qu’à acquérir de nouvelles connaissances qu’ils pourront mettre en pratique dans leur travail.</p>
                <h3 id="sante" tabindex="-1">Expérience en santé</h3>
                <p>Depuis 2006, nous avons développé une solide expertise dans le réseau de la santé avec <strong>plus de 100 réalisations</strong> couronnées de succès. Confiés par le ministère de la Santé et des Services sociaux (MSSS) et la Régie de l’assurance maladie du Québec (RAMQ), ces mandats représentent plus de 11&nbsp;000 jours réalisés dans le cadre des<strong> principaux systèmes du réseau de la santé</strong>, dont&nbsp;:</p>
                <ul>
                    <li>le Réseau de services intégrés pour les personnes âgées (RSIPA)</li>
                    <li>le Répertoire des ressources en santé et services sociaux (RRSS)</li>
                    <li>le Logiciel de production de rapports de gestion Web (LPRG Web)</li>
                    <li>le Dossier de santé du Québec (DSQ)</li>
                    <li>le Système d'information pour la sécurité des soins et des services (SISSS)</li>
                    <li>le Système d’information sur les ressources intermédiaires et de type familial (SIRTF)</li>
                    <li>le système Actifs+ Réseau</li>
                </ul>
            </div>

            <div class="facts col-4 col-offset-1 columns">
                <h3> Faits saillants </h3>
                <ul>
                    <li>2006&nbsp;: fondation de l’entreprise par Jean Drouin, conseiller sénior</li>
                    <li>2008&nbsp;: certification à la norme ISO 9001:2008</li>
                    <li>2011&nbsp;: positionnement stratégique en accessibilité Web et en interopérabilité</li>
                    <li>2011&nbsp;: entrée en fonction de Jean-François Paquin à titre de Vice-président et associé</li>
                    <li>2012&nbsp;: début des travaux de développement d’Ermetis©</li>
                    <li>2012-2013&nbsp;: organisation de l’événement a11yqc</li>
                    <li>2013&nbsp;: changement du logo et de l’image corporative</li>
                    <li>2015 : création de l'OBNL a11yQC</li>
                    <li>2017 : acquisition d'un immeuble triplant la superficie des bureaux</li>
                    <li>2018 : lancement de la ligne de services Entreprise 4.0</li>
                    <li>2018 : certification à la norme ISO 9001:2015</li>
                </ul>

                <div class="notice">
                    <h3>Pronon­ciation</h3>
                    <p>Le nom « <span lang="it">Ciao </span>», prononcé à l'italienne, signifie «&nbsp;Conseil en interopérabilité et en accessibilité aux organisations&nbsp;».</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 ">
            <div class="row">
                <div class="col-9 ">
                    <h2 id="equipe" tabindex="-1"> Notre équipe </h2>
                    <p>Notre équipe est au cœur de notre expertise et de notre réputation d’excellence. Nous sommes fiers de vous la présenter&nbsp;:</p>
                </div>
            </div>
            <!-- Employees images -->
            <ul>
                <li>
                    <!--<button>-->
                    <img alt="" id="empImg_3" src="/employeesimg/20132409203402912912831516.jpg">
                    <span class="infos">
							<span class="name">Jean Drouin</span>
							<span class="title">Président </span>
						</span>
                    <!--</button>-->
                </li>
                <li>
                    <!--<button>-->
                    <img alt="" id="empImg_11" src="/employeesimg/20132409203552091091985007.jpg">
                    <span class="infos">
							<span class="name">Yanick Hawey</span>
							<span class="title">Directeur - Entreprise 4.0</span>
						</span>
                    <!--</button>-->
                </li>
                <li>
                    <!--<button>-->
                    <img alt="" id="empImg_96" src="/employeesimg/20180901220326488488419391.png">
                    <span class="infos">
							<span class="name">Alexa Bélanger</span>
							<span class="title">Experte en conquête de talents</span>
						</span>
                    <!--</button>-->
                </li>
                <li>
                    <!--<button>-->
                    <img alt="" id="empImg_117" src="/employeesimg/20182507194204836836082093.png">
                    <span class="infos">
							<span class="name">Élise Dupuis</span>
							<span class="title">Instigatrice de talents </span>
						</span>
                    <!--</button>-->
                </li>
                <li>
                    <!--<button>-->
                    <img alt="" id="empImg_8" src="/employeesimg/20132409203512269269246534.jpg">
                    <span class="infos">
							<span class="name">Mélinda Drouin</span>
							<span class="title">Adjointe administrative</span>
						</span>
                    <!--</button>-->
                </li>
                <li>
                    <!--<button>-->
                    <img alt="" id="empImg_69" src="/employeesimg/20172905142659067067327219.png">
                    <span class="infos">
							<span class="name">Céline Gonzalez</span>
							<span class="title">Adjointe administrative</span>
						</span>
                    <!--</button>-->
                </li>
                <li>
                    <!--<button>-->
                    <img alt="" id="empImg_112" src="/employeesimg/20180705133442465465818406.png">
                    <span class="infos">
							<span class="name">Manon Carignan</span>
							<span class="title">Adjointe aux opérations financières</span>
						</span>
                    <!--</button>-->
                </li>
                <li>
                    <!--<button>-->
                    <img alt="" id="empImg_2" src="/employeesimg/20132409203354778778710928.jpg">
                    <span class="infos">
							<span class="name">Cynthia Thibault-Larouche</span>
							<span class="title">Responsable de l'expertise de l'accessibilité Web</span>
						</span>
                    <!--</button>-->
                </li>
                <li>
                    <!--<button>-->
                    <img alt="" id="empImg_155" src="/employeesimg/20192910202622418418476636.jpg">
                    <span class="infos">
							<span class="name">Adriana Ramos</span>
							<span class="title">Analyste fonctionnel</span>
						</span>
                    <!--</button>-->
                </li>
            </ul>
        </div>
    </div>



</section>


@endsection

@section('footerSection')


@endsection
