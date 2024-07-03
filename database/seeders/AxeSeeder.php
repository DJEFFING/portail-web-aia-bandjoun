<?php

namespace Database\Seeders;

use App\Models\Axe;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AxeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // équipe 1
        $axe_1 = [

            "titre" => "Automatique des Systèmes Non Linéaires",
            "code_axe" => "ASNL",

            "description_1" => "Nous utilisons la technique des modes glissants, des réseaux de neurones, des algorithmes
            génétiques et logique floue pour étudier la dynamique des systèmes non linéaires et
            développer des méthodes d'identification des états et paramètres ainsi que des algorithmes
            de contrôle adaptatif des systèmes.",

            "description_2" => "Nous utilisons la technique des modes glissants, des réseaux de neurones, des algorithmes
            génétiques et logique floue pour étudier la dynamique des systèmes non linéaires et
            développer des méthodes d'identification des états et paramètres ainsi que des algorithmes
            de contrôle adaptatif des systèmes.
            La plupart des processus comportent des paramètres qui varient au cours de leur
            fonctionnement. Mais les commandes utilisées dans l’industrie actuellement sont des
            commandes linéaires basées sur l’hypothèse des paramètres constants. Il est donc
            impératif d'identifier en ligne les paramètres qui varient beaucoup pendant le
            fonctionnement du système pour deux raisons principales:

            -Améliorer le rendement du processus à travers le rendement de la commande qui
            exploite ce type de paramètre. Par conséquent réaliser des économies de l'énergie
            électrique consommée par le processus.

            -Détecter les anomalies dues à la variation anormale d'un tel paramètre et arrêter le
            processus pour éviter sa détérioration.

            Au terne de l’étude, nous mettons en œuvre des outils d’analyse et d'estimation, de
            diagnostic et détection des anomalies, et des outils de contrôle adaptatif robustes par
            rapport aux variations des paramètres et aux incertitudes de modèle pour des systèmes
            électromécaniques et télécommunications.
            ",

            "media_url" => "media.png",
            "user_id" => 8,
            "equipe_id" => 1,
        ];

        //équipe 1
        $axe_2 = [

            "titre" => "Ingénierie Biomédicale et Instrumentation Industrielle",
            "code_axe" => "IBII",

            "description_1" => "Nos recherches récentes sont axées sur le développement de l’instrumentation
            biomédicale adaptée aux réalités des pays en voie de développement et la conception
            d’outils d’analyse et d’aide automatique au diagnostic des pathologies médicales (e.g.
            cancer du sein)",

            "description_2" => "Nos recherches récentes sont axées sur le développement de l’instrumentation
            biomédicale adaptée aux réalités des pays en voie de développement et la conception
            d’outils d’analyse et d’aide automatique au diagnostic des pathologies médicales (e.g.
            cancer du sein)

            Les instruments dédiés au diagnostic médical sont en général à la base de la réussite du
            traitement de la plus part des maladies dans le monde. Or dans nos pays sous développés
            ou en voie de développement, et à cause du manque de moyens financiers, les hôpitaux
            (en particulier dans les villages et petites villes) sont dépourvus d’appareils
            d’investigation, notamment pour des maladies dont la mesure de l’activité électrique du
            corps humain, peut fournir de précieuses informations médicales. On peut citer les
            maladies du cœur (électrocardiogramme). Etant donné leur coût élevé, ces instruments de
            mesure de l’activité électrique du corps humain sont malheureusement encore un luxe
            pour de nombreux hôpitaux de nos pays.

            L’exploitation efficiente de ces instruments nécessite le développement des outils
            d’analyse et d’aide automatique au diagnostic médical, compte tenu du fait que dans les
            pays en voie de développement, le nombre de spécialiste est très inférieur aux normes
            internationales

            Au terme de l’étude, nous mettons à la disposition des médecins et spécialistes des outils
            et instruments de télémédecine, de traitement d’image et imagerie médicale et des
            systèmes intelligents en diagnostic médical automatique.
            ",

            "media_url" => "media.png",
            "user_id" => 9,
            "equipe_id" => 1,
        ];

        // equipe 1
        $axe_3 = [

            "titre" => " Automatique appliquée au domaine de l’Énergie Électrique",
            "code_axe" => "AADEE",

            "description_1" => "L’offre en énergie électrique est très insuffisante par rapport à la demande en dépit du
            grand potentiel hydroélectrique du Cameroun. Ce déficit énergétique est dû
            essentiellement à l’insuffisance des moyens de production et de transport, la vétusté du
            réseau électrique, l’augmentation rapide de la demande énergétique (en moyenne 6% par
            an) à cause de la croissance démographique et de la reprise progressive de la croissance
            économique, et les changements climatiques.",

            "description_2" => "L’offre en énergie électrique est très insuffisante par rapport à la demande en dépit du
            grand potentiel hydroélectrique du Cameroun. Ce déficit énergétique est dû
            essentiellement à l’insuffisance des moyens de production et de transport, la vétusté du
            réseau électrique, l’augmentation rapide de la demande énergétique (en moyenne 6% par
            an) à cause de la croissance démographique et de la reprise progressive de la croissance
            économique, et les changements climatiques.

            Ce déficit se manifeste au quotidien par des coupures intempestives, des délestages et des
            baisses de tensions.

            L’insuffisance des moyens de transport et la vétusté du réseau électrique ont conduit à la
            dégradation des performances transitoires. Ainsi, on peut noter une fréquence anormale
            des indisponibilités des lignes et des transformateurs.

            Les moyens classiques de contrôle des réseaux (transformateurs à prise réglable,
            transformateurs déphaseurs, …), sont alors devenus insuffisants et lents pour répondre
            efficacement aux perturbations et aux demandes en énergie de plus en plus croissantes.

            Le développement récent des dispositifs d’électronique de puissance appelés FACTS
            ouvre de très bonnes perspectives en ce sens qu’ils permettent d’augmenter la capacité de
            transit des réseaux électriques existants et l’augmentation des marges de stabilité.

            A la fin de nos investigations, nous proposons des solutions pour améliorer les
            performances transitoires, les moyens de transport, et nous proposons l’utilisation de
            nouvelles formes de production d'énergie électrique (éolienne, solaire, biomasse).
            ",

            "media_url" => "media.png",
            "user_id" => 10,
            "equipe_id" => 1,
        ];

        // equipe 1
        $axe_4 = [

            "titre" => "Systèmes dynamiques non linéaires et Applications",
            "code_axe" => "SDNLA",

            "description_1" => "Nos travaux sont axés essentiellement sur la modélisation et la simulation analogique
            et numérique de la dynamique chaotique des systèmes non linéaires et leurs applications
            en ingénierie.",

            "description_2" => "Nos travaux sont axés essentiellement sur la modélisation et la simulation analogique
            et numérique de la dynamique chaotique des systèmes non linéaires et leurs applications
            en ingénierie.

            En effet, les systèmes couplés d’oscillateurs non linéaires servent de modèles dynamiques
            pour un nombre important de systèmes non linéaires, et en particulier plusieurs systèmes
            électromécaniques, biologiques, chimiques, ou électroniques. Malgré le succès
            grandissant des méthodes numériques et du calcul par ordinateur, la simulation numérique
            reste tributaire d’un certain nombre de paramètres liés au matériel (hardware) ou au
            logiciel (software). Parmi ceux-ci, on peut mentionner la limitation de précision pouvant
            être à l’origine des erreurs d’arrondi, la durée parfois relativement longue de la phase
            transitoire de simulation, et l’impossibilité d’une exploration rapide de l’espace
            paramétrique des systèmes sous investigation. Bien qu’également liée à la précision des
            composants et surtout de l’influence du bruit, la simulation analogique reste un outil
            intéressant d’exploration en temps réel du comportement des systèmes non linéaires et
            chaotiques. Nous montrons qu’en combinant la précision des calculateurs numériques et
            la vitesse élevée des calculateurs analogiques, une étude approfondie des systèmes non
            linéaires et chaotiques peut être menée donnant lieu par exemple à la mise en évidence
            des phénomènes frappants et complexes comme la multi-stabilité ou le chaos transitoire.

            S’agissant de la modélisation mathématique des oscillateurs électroniques, nous montrons
            que le modèle mathématique infiniment différentiable (ex. basé sur les caractéristiques
            exponentielles des diodes ou des transistors) peut être exploité pour une meilleure
            description des comportements réels et chaotiques desdits oscillateurs. Cette approche est
            mise en contribution pour faire la lumière sur la dynamique d’un bon nombre
            d’oscillateurs électroniques mettant en évidence des phénomènes intéressants et
            complexes tels que le chaos, l’hyperchaos, les bifurcations, l’hystérésis et la coexistence
            d’attracteurs multiples. Enfin, quelques stratégies de synchronisation sont proposées afin
            de favoriser l’exploitation technologique (ex. cryptage des images, communications
            sécurisées, génération des signaux aléatoires) des modules d’oscillateurs étudiés.

            Mots Clés : Oscillateurs non linéaires, modélisation mathématique, simulations
            numériques, simulation analogique, bifurcation et chaos, multi-stabilité, cryptage
            chaotique ",

            "media_url" => "",
            "user_id" => 11,
            "equipe_id" => 1,
        ];


        // equipe 2

        $axe_5 = [

            "titre" => "Production d’énergie électrique",
            "code_axe" => "PEE",

            "description_1" => "Le déficit énergétique est chronique dans notre pays, ceci depuis la privatisation de
            l’unique société nationale productrice et distributrice d’énergie électrique, la SONEL.
            Cette situation a un impact économique important sur le développement du pays, qui,
            pourtant, est doté d’un potentiel important en hydroélectricité dont une bonne gestion
            pourrait permettre non seulement de résorber le déficit énergétique, mais aussi d’exporter
            le surplus d’énergie produite vers les pays voisins ou lointains.",


            "description_2" => "Le déficit énergétique est chronique dans notre pays, ceci depuis la privatisation de
            l’unique société nationale productrice et distributrice d’énergie électrique, la SONEL.
            Cette situation a un impact économique important sur le développement du pays, qui,
            pourtant, est doté d’un potentiel important en hydroélectricité dont une bonne gestion
            pourrait permettre non seulement de résorber le déficit énergétique, mais aussi d’exporter
            le surplus d’énergie produite vers les pays voisins ou lointains.

            Nos travaux consistent à  trouver et proposer de nouveaux moyens et méthodes de production optimale d’énergie
            électrique, compte tenu des spécificités de notre système de production et de notre
            potentiel hydroélectrique.

            Mots Clés : Énergie électrique, Hydroélectricité, Planification de la Production, Gestion
            optimale, Réseaux Électriques.",

            "media_url" => "media.png",
            "user_id" => 12,
            "equipe_id" => 2,
        ];

        // equipe 2

        $axe_6 = [

            "titre" => "Contrôle du réseau et Stabilité",
            "code_axe" => "CRES",

            "description_1" => "Nos travaux de recherche rentrent dans la gestion du déficit énergétique par
            l’amélioration de la stabilité du réseau électrique et le contrôle du flux de puissance par
            des dispositifs plus flexibles télécommandables.",

            "description_2" => "Nos travaux de recherche rentrent dans la gestion du déficit énergétique par
            l’amélioration de la stabilité du réseau électrique et le contrôle du flux de puissance par
            des dispositifs plus flexibles télécommandables.

            Nous évaluons l’indice de stabilité des
            nœuds d’un réseau électrique afin de détecter les nœuds susceptibles de provoquer
            l’écroulement du réseau. Les dispositifs FACTS série ou shunt seront dimensionnés pour
            améliorer la stabilité de ces nœuds fragiles.",


            "media_url" => "media.pmg",
            "user_id" => 13,
            "equipe_id" => 2,
        ];

        // equipe 2
        $axe_7 = [

            "titre" => " Énergies renouvelables et instrumentation",
            "code_axe" => "EREI",

            "description_1" => "Nos recherches récentes sont axées sur la contribution des énergies renouvelables à
            l’augmentation de taux d’électrification en zones rurales ainsi qu’a leur contribution au
            séchage des produits agricoles.",

            "description_2" => "Nos recherches récentes sont axées sur la contribution des énergies renouvelables à
            l’augmentation de taux d’électrification en zones rurales ainsi qu’a leur contribution au
            séchage des produits agricoles. Le développement des systèmes de mesure automatiques
            est aussi d’un grand intérêt pour la gestion des centrales de production de l’énergie
            électrique et de la chaleur.",
            "media_url" => "",
            "user_id" => 14,
            "equipe_id" => 3,
        ];

        //EQUIPE 3
        $axe_8 = [

            "titre" => " Génie Logiciel",
            "code_axe" => "GL",

            "description_1" => "Thème 1 Génie logiciel & Automatique
            Page 9 sur 70
            Nous procédons à une synthèse de l’apport des techniques objets, du Multi-Agent,
            des méthodes formelles, des langages UML et Java, et des outils du Génie Logiciel en
            général pour l’analyse, le diagnostic et la simulation de Systèmes Dynamiques Hybrides
            en Automatique.",

            "description_2" => "Thème 1 Génie logiciel & Automatique
            Page 9 sur 70
            Nous procédons à une synthèse de l’apport des techniques objets, du Multi-Agent,
            des méthodes formelles, des langages UML et Java, et des outils du Génie Logiciel en
            général pour l’analyse, le diagnostic et la simulation de Systèmes Dynamiques Hybrides
            en Automatique.

            Nous avons mis sur pied le Métamodèle HAD (Hybrid Activity Diagram), dont la
            normalisation du métagraphe et des passerelles permet l’unification des deux domaines,
            Génie Logiciel et Génie Automatique. Puis nous établissons des ponts entre la
            modélisation informatique (par objets, métamodélisation) et la modélisation automatique
            (processus, équations différentielles et fonctions de transfert, espace d’état) par extension
            du Métamodèle UML.

            L’efficacité de ces apports est démontrée à travers l’analyse et la modélisation
            opérationnelle des systèmes complexes à l’instar de la commande des réseaux électriques.

            Mots Clés : UML-MDA, SDH, HAD, Modélisation opérationnelle, Commande, Réseaux
            Electriques, Diagnostic, SMA

            Thème 2 Génie logiciel et SIG
            Nous mettons en œuvre les techniques et outils informatiques à l’effet d’analyser les
            Systèmes d’Information Géographiques. Les applications concernent la modélisation
            spatiale.

            Il s’agit également de mettre en œuvre des SIG d’aide du diagnostic de l’état des
            infrastructures (bâtiments, routes, etc.) applicables à la maîtrise des variables
            d’environnement de nos principales agglomérations.

            Mots Clés : SIG, Cartographie, Géoréférencement, Base de Données",


            "media_url" => "media.png",
            "user_id" => 15,
            "equipe_id" => 3,
        ];

        //EQUIPE 3
        $axe_9 = [

            "titre" => "TIC",
            "code_axe" => "TIC",

            "description_1" => "Thème 1- TIC & Web services
            Nos recherches sont axées de manière générale sur la conception d’architectures
            logicielles à base de composants centrées sur les services (Web), pour le développement
            d’applications collaboratives. Nous nous intéressons particulièrement aux architectures
            logicielles orientées services, aux langages dédiés et programmation orientée langage, et
            aux plateformes de travail collaboratif et documents structurés. ",

            "description_2" => "
            Thème 1- TIC & Web services
            Nos recherches sont axées de manière générale sur la conception d’architectures
            logicielles à base de composants centrées sur les services (Web), pour le développement
            d’applications collaboratives. Nous nous intéressons particulièrement aux architectures
            logicielles orientées services, aux langages dédiés et programmation orientée langage, et
            aux plateformes de travail collaboratif et documents structurés.

            L’objectif est de conduire la même démarche méthodologique au niveau des langages que
            ce qui est classiquement fait au niveau des composants : comment créer de nouveaux
            langages par composition de langages réutilisables existants ?

            Mots Clés : Architectures logicielles, Composants, Langages dédiés, Documents
            structurés, Programmation fonctionnelle.

            Thème 2 TIC & Education
            Nous procédons à la modélisation, la conception, l’intégration, et le déploiement des
            Environnements Informatiques d’Apprentissage en ligne basés sur les TIC, intégrant des
            modules d’acquisition et structuration des connaissances, de restitution et d’évaluation
            d’apprenants, des outils pédagogiques opérationnels, un système de tutorat, une interface
            d’enrichissement des contenus, des outils de gestion.

            Nous voulons moderniser, normaliser, uniformiser et généraliser l’utilisation des
            nouvelles formes d’enseignements numériques, multimédia et interactifs.

            Il s’agit également de mettre en place un ensemble d’outils d’aide à la décision pour améliorer le
            contrôle de qualité et le pilotage du système éducatif, notamment en générant
            automatiquement toutes les informations accessibles aux différents échelons de
            l’éducation (de l’établissement à l’administration centrale) et à leurs partenaires
            (communes, autres services de l'État…)

            Une des applications concrètes ici est la modernisation de l’enseignement des langues et
            cultures nationales grâce aux TIC, afin de promouvoir la diversité culturelle et la
            diffusion des connaissances scientifiques dans les langues locales et de renforcer les
            capacités de la population cible.

            Mots Clés : Plateforme, TICE, Internet, Langues, Outils de pilotage

            Thème 3 TIC & Services Mobiles - Développement durable
            Nous utilisons les technologies mobiles pour faciliter le processus des pépinières
            d'entreprises en zones rurales.

            Les jeunes entrepreneurs qui une fois issus des pépinières se lancent dans les réalités
            concrètes du terrain ont certainement besoin de suivi continu et parfois de continuer à
            profiter des services de la pépinière. Ceci n’est pratiquement pas possible dans les zones
            rurales sans un coût supplémentaire exorbitant.

            A la fin de l’étude, nous présenterons une architecture d’incubation capable de supporter
            ces entrepreneurs hors de la pépinière.

            Mots Clés : TIC, Technologies Mobiles, Pépinière d’entreprises, Zone rurale,
            Entrepreneurship
            ",
            "media_url" => "media.png",
            "user_id" => 16,
            "equipe_id" => 3,
        ];

        //EQUIPE 3
        $axe_10 = [

            "titre" => "Modélisation et Analyse des Signaux",
            "code_axe" => "MAS",

            "description_1" => "Thème 1- Modélisation & Traitement des images
            Le Cameroun est situé dans la zone équatoriale et présente de ce fait une quasi
            permanence des nuages dans son ciel, rendant ainsi difficile, voire impossible l’utilisation
            des images optiques de télédétection qui pourtant dans de meilleures conditions
            climatiques produisent de meilleures précisions sur les détails de terrain.",

            "description_2" => "Thème 1- Modélisation & Traitement des images
            Le Cameroun est situé dans la zone équatoriale et présente de ce fait une quasi
            permanence des nuages dans son ciel, rendant ainsi difficile, voire impossible l’utilisation
            des images optiques de télédétection qui pourtant dans de meilleures conditions
            climatiques produisent de meilleures précisions sur les détails de terrain. Il est dès lors
            impératif de faire recours à l’imagerie radar de télédétection qui ne connaît pas de
            perturbation majeure dans des conditions climatiques les moins bonnes, mais pose un
            sérieux problème d’analyse et d’extraction d’informations thématiques. Nous nous
            proposons d’une part d’optimiser le temps d’analyse d’images par les méthodes existantes
            et d’autre part, de développer de nouvelles techniques d’analyse et d’extractions
            d’informations plus fiables que les méthodes existantes.

            Mots clés : Images Radar, Télédétection, Analyse de Texture, Classification d’images,
            Segmentation d’images

            Thème 2- Stabilisation de l'intensité de faisceau laser par des correcteurs
            Il s’agit de développer un dispositif d’analyse et de stabilisation de l'intensité de
            faisceau laser dans une bande étroite de fréquence. La stabilité, la durée de convergence
            et la réjection du bruit d'intensité d'un faisceau sont analysés à partir d'un schéma
            équivalent à temps continu.

            Mots clés : Faisceau laser, Analyse, Stabilisation, Bande de fréquence",

            "media_url" => "media.png",
            "user_id" => 17,
            "equipe_id" => 3,
        ];

        // //EQUIPE 3
        // $axe_11 = [
        //     "titre" => "",
        //     "code_axe" => "",
        //     "description_1" => "",
        //     "description_2" => "",
        //     "media_url" => "",
        //     "user_id" => 18,
        //     "equipe_id" => 3,
        // ];

        Axe::create($axe_1);
        Axe::create($axe_2);
        Axe::create($axe_3);
        Axe::create($axe_4);
        Axe::create($axe_5);
        Axe::create($axe_6);
        Axe::create($axe_7);
        Axe::create($axe_8);
        Axe::create($axe_9);
        Axe::create($axe_10);
        // Axe::create($axe_11);


    }
}
