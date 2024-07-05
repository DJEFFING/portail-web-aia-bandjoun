<?php

namespace Database\Seeders;

use App\Models\Publication;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PublicationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // publication de type :Thèses de Doctorat encadrées et soutenues => id = 1
        // annee 2022 => id = 22

        $publication_1_1 = [
            "type_publication_id" => 1,
            "annee_publication_id" => 22,

            "titre" => "Thèse de Doctorat/PhD de: TEGUIA Jean Blaise, Matricule: CM-UDs-15SCI-12378- sujet:
            Contribution à la détection et l'isolation des anomalies dans les machines asynchrones. ",

            "description_1" => "Thèse de Doctorat/PhD préparée à l'UR-MACETS et à l'UR-AIA, Faculté des Sciences,
            Unité de Formation et Recherche de la « Dschang School of Science and Technology »,
            Université de Dschang, soutenue le 5 février 2022.",

            "description_2" => "Thèse de Doctorat/PhD préparée à l'UR-MACETS et à l'UR-AIA, Faculté des Sciences,
            Unité de Formation et Recherche de la « Dschang School of Science and Technology »,
            Université de Dschang, soutenue le 5 février 2022.",
        ];


        $publication_1_2 = [
            "type_publication_id" => 1,
            "annee_publication_id" => 22,

            "titre" => "Contribution à la commande MPPT des systèmes d’énergie
            photovoltaïque par l’utilisation des réseaux de neurones artificiels. ",

            "description_1" => "Thèse de Doctorat/PhD de: TCHOUANI NJOMO Arnaud Flanclair, Matricule: CM-UDS
            13SCI2550- sujet: Contribution à la commande MPPT des systèmes d’énergie
            photovoltaïque par l’utilisation des réseaux de neurones artificiels. Thèse de Doctorat/PhD
            préparée à l’UR-MACETS et à l’UR-AIA, Faculté des Sciences, Unité de Formation et
            Recherche de la « Dschang School of Science and Technology », Université de Dschang,
            soutenue le 22 janvier 2022.
            Directeur de thèse : KENNE Godpromesse, Professeur.",

            "description_2" => "Thèse de Doctorat/PhD de: TCHOUANI NJOMO Arnaud Flanclair, Matricule: CM-UDS
            13SCI2550- sujet: Contribution à la commande MPPT des systèmes d’énergie
            photovoltaïque par l’utilisation des réseaux de neurones artificiels. Thèse de Doctorat/PhD
            préparée à l’UR-MACETS et à l’UR-AIA, Faculté des Sciences, Unité de Formation et
            Recherche de la « Dschang School of Science and Technology », Université de Dschang,
            soutenue le 22 janvier 2022.
            Directeur de thèse : KENNE Godpromesse, Professeur.",
        ];

        $publication_1_3 = [
            "type_publication_id" => 1,
            "annee_publication_id" => 22,

            "titre" => "Thèse de Doctorat/PhD de: FEUDJIO Ervet Roger, Matricule: CM-UDs-12SCI-2655- sujet:
            Design of hyperjerk type oscillators : analysis and applications to generation bits for
            digital encryption. ",

            "description_1" => "Thèse de Doctorat/PhD préparée à l’UR-MACETS et à l’UR-AIA,
            Faculté des Sciences, Unité de Formation et Recherche de la « Dschang School of Science
            and Technology », Université de Dschang, soutenue le 10 juin 2022.
            Directeurs de thèse : FOTSIN Hilaire Bertrand, Professeur, et KAPCHE TAGNE François,
            Maître de Conférences",

            "description_2" => "Thèse de Doctorat/PhD préparée à l’UR-MACETS et à l’UR-AIA,
            Faculté des Sciences, Unité de Formation et Recherche de la « Dschang School of Science
            and Technology », Université de Dschang, soutenue le 10 juin 2022.
            Directeurs de thèse : FOTSIN Hilaire Bertrand, Professeur, et KAPCHE TAGNE François,
            Maître de Conférences",
        ];


        $publication_1_4 = [
            "type_publication_id" => 1,
            "annee_publication_id" => 22,

            "titre" => "Thèse de Doctorat/PhD de: ADAMOU YOUGOUDA Ramadane, Matricule: 13S136EN -
            sujet: Contribution à la modélisation d’un protocole d’anticipation des défaillances dans
            une grille de calcul par le formalisme PDEVS.",

            "description_1" => "Thèse de Doctorat/PhD préparée à l’URIFIA
            et à l’UR-AIA, Faculté des Sciences, Unité de Formation Doctorale Physique Appliquée Et
            Ingénierie, Université de Ngaoundéré, soutenue le 12 janvier 2022.
            Co-Directeur de thèse : NKENLIFACK Marcellin, Maître de Conférences",

            "description_2" => "Thèse de Doctorat/PhD préparée à l’URIFIA
            et à l’UR-AIA, Faculté des Sciences, Unité de Formation Doctorale Physique Appliquée Et
            Ingénierie, Université de Ngaoundéré, soutenue le 12 janvier 2022.
            Co-Directeur de thèse : NKENLIFACK Marcellin, Maître de Conférences",
        ];

        // publication de type :Thèses de Doctorat encadrées et soutenues => id = 1
        // annee 2021 => id = 21
        $publication_1_5 = [
            "type_publication_id" => 1,
            "annee_publication_id" => 21,

            "titre" => "Thèse de Doctorat/PhD de: PESDJOCK Mathieu Jean Pierre, Matricule: CM-UDs14SCI1414- sujet: Contribution à l’amélioration de la qualité de l’énergie électrique au
            Cameroun par réduction des effets d’harmoniques en présence des sources d’énergie
            photovoltaïque",

            "description_1" => "Thèse de Doctorat/PhD préparée à l’UR-MACETS et à l’UR-AIA, Faculté
            des Sciences, Unité de Formation et Recherche de la « Dschang School of Science and
            Technology », Université de Dschang, soutenue le 13 novembre 2021.
            Directeurs de Thèse : KENNE Godpromesse, Professeur, et MBOUPDA PONE Justin Roger,
            Maître de Conférences",

            "description_2" => "Thèse de Doctorat/PhD préparée à l’UR-MACETS et à l’UR-AIA, Faculté
            des Sciences, Unité de Formation et Recherche de la « Dschang School of Science and
            Technology », Université de Dschang, soutenue le 13 novembre 2021.
            Directeurs de Thèse : KENNE Godpromesse, Professeur, et MBOUPDA PONE Justin Roger,
            Maître de Conférences",
        ];

        $publication_1_6 = [
            "type_publication_id" => 1,
            "annee_publication_id" => 21,

            "titre" => "Thèse de Doctorat/PhD de : ATANGANA Romain, Matricule: CM-UDs-16SCI-2677- sujet:
            Contribution à l’utilisation des systèmes intelligents dans l’interprétation de l’EEG et le
            diagnostic automatique de l’épilepsie.",

            "description_1" => "Thèse de Doctorat/PhD préparée à l’UR-MACETS et
            à l’UR-AIA, Faculté des Sciences, Unité de Formation et Recherche de la « Dschang School
            of Science and Technology », Université de Dschang, soutenue le 13 mars 2021.
            Directeurs de Thèse : KENNE Godpromesse, Professeur et TCHIOTSOP Daniel, Professeur.
            ",

            "description_2" => "Thèse de Doctorat/PhD préparée à l’UR-MACETS et
            à l’UR-AIA, Faculté des Sciences, Unité de Formation et Recherche de la « Dschang School
            of Science and Technology », Université de Dschang, soutenue le 13 mars 2021.
            Directeurs de Thèse : KENNE Godpromesse, Professeur et TCHIOTSOP Daniel, Professeur
            ",
        ];

        $publication_1_7 = [
            "type_publication_id" => 1,
            "annee_publication_id" => 21,

            "titre" => "Thèse de Doctorat/PhD de: FOUODJI TSOTSOP Merline, Matricule: CM04-10SCI1771 -
            sujet: Chaos and Hyperchaos from Autonomous Inductor Free Electronic Circuits:
            Dynamical Analysis, Circuit Realization and Synchronization issues with Application to
            Image Encryption",

            "description_1" => "T. Thèse de Doctorat/PhD préparée à l’UR-MACETS et à l’UR-AIA,
            Faculté des Sciences, Unité de Formation et Recherche de la « Dschang School of Science
            and Technology », Université de Dschang, soutenue le 12 février 2021.
            Directeur de thèse : KENNE Godpromesse, Professeur et KENGNE Jacques, Professeur",

            "description_2" => ". Thèse de Doctorat/PhD préparée à l’UR-MACETS et à l’UR-AIA,
            Faculté des Sciences, Unité de Formation et Recherche de la « Dschang School of Science
            and Technology », Université de Dschang, soutenue le 12 février 2021.
            Directeur de thèse : KENNE Godpromesse, Professeur et KENGNE Jacques, Professeur",
        ];

        $publication_1_8 = [
            "type_publication_id" => 1,
            "annee_publication_id" => 21,

            "titre"=> "Thèse de Doctorat/Ph.D de: KEMNANG TSAFACK Alex Stéphane, Matricule: CM04-
            10SCI1464 - sujet: Contribution to the Study of Dynamical Behaviors and Control of
            Chaotic Phenomena in Some Electrical Machines. ",

            "description_1" => "Thèse de Doctorat/PhD préparée à l’URMACETS et à l’UR-AIA, Faculté des Sciences, Unité de Formation et Recherche de la
            « Dschang School of Science and Technology », Université de Dschang, soutenue le 6
            février 2021.
            Directeur de thèse : KENNE Godpromesse, Professeur",

            "description_2" => "Thèse de Doctorat/PhD préparée à l’URMACETS et à l’UR-AIA, Faculté des Sciences, Unité de Formation et Recherche de la
            « Dschang School of Science and Technology », Université de Dschang, soutenue le 6
            février 2021.
            Directeur de thèse : KENNE Godpromesse, Professeur"
        ];

        $publication_1_9 = [
            "type_publication_id" => 1,
            "annee_publication_id" => 21,

            "titre"=> " Thèse de Doctorat/PhD de: KAMGANG BEYALA Vivien Loïck, Matricule: 13S136EN -
            sujet: Contribution to the Hybrid Development of Artificial Neural Networks and PhraseBased Statistical Models for Machine Translation: An Application to Languages and
            Cultures − 𝜆. ",

            "description_1" => " Thèse de Doctorat/PhD préparée à l’URIFIA et à l’UR-AIA, Faculté des
            Sciences, Unité de Formation à la recherche « Dschang School of Science and
            Technbology », Université de Dschang, soutenue le 26 juin 2021.
            Directeur de thèse : NKENLIFACK Marcellin, Maître de Conférences.",

            "description_2" => " Thèse de Doctorat/PhD préparée à l’URIFIA et à l’UR-AIA, Faculté des
            Sciences, Unité de Formation à la recherche « Dschang School of Science and
            Technbology », Université de Dschang, soutenue le 26 juin 2021.
            Directeur de thèse : NKENLIFACK Marcellin, Maître de Conférences."
        ];


        $publication_1_10 = [
            "type_publication_id" => 1,
            "annee_publication_id" => 21,

            "titre"=> " 2020-2021 Thèse de Doctorat/PhD de Monsieur WAFO TAPCHE Rudolphe (Mle CM04-
            07SCI0693) intitulée: « Dynamic analysis of chaos in electronic oscillators with line
            equilibrium: Application to secure communication »",

            "description_1" => "2020-2021 Thèse de Doctorat/PhD de Monsieur WAFO TAPCHE Rudolphe (Mle CM04-
            07SCI0693) intitulée: « Dynamic analysis of chaos in electronic oscillators with line
            equilibrium: Application to secure communication » Thèse en codirection avec le Prof.
            PELAP François Berceau, Professeur, Département de Physique, Faculté de Sciences,
            Université de Dschang",

            "description_2" => "2020-2021 Thèse de Doctorat/PhD de Monsieur WAFO TAPCHE Rudolphe (Mle CM04-
            07SCI0693) intitulée: « Dynamic analysis of chaos in electronic oscillators with line
            equilibrium: Application to secure communication » Thèse en codirection avec le Prof.
            PELAP François Berceau, Professeur, Département de Physique, Faculté de Sciences,
            Université de Dschang"
        ];

        $publication_1_11 = [
            "type_publication_id" => 1,
            "annee_publication_id" => 21,

            "titre"=> " 2020-2021 Thèse de Doctorat/PhD de Monsieur NGUOMKAM NEGOU Alexis (Mle
            CM04-13SCI2546) intitulée : « On the modeling and the nonlinear dynamics of a particular
            class of semiconductor diode-based oscillators : analysis, circuit implementation and
            synchronization issues, with applications » ",

            "description_1" => " 2020-2021 Thèse de Doctorat/PhD de Monsieur NGUOMKAM NEGOU Alexis (Mle
            CM04-13SCI2546) intitulée : « On the modeling and the nonlinear dynamics of a particular
            class of semiconductor diode-based oscillators : analysis, circuit implementation and
            synchronization issues, with applications » Thèse en codirection avec le Prof. TCHIOTSOP
            Daniel, Professeur, Département de Génie Electrique, IUT-FV de Bandjoun, Université de
            Dschang",

            "description_2" => "2020-2021 Thèse de Doctorat/PhD de Monsieur WAFO TAPCHE Rudolphe (Mle CM04-
            07SCI0693) intitulée: « Dynamic analysis of chaos in electronic oscillators with line
            equilibrium: Application to secure communication »Thèse en codirection avec le Prof. TCHIOTSOP
            Daniel, Professeur, Département de Génie Electrique, IUT-FV de Bandjoun, Université de
            Dschang "
        ];

        $publication_1_12 = [
            "type_publication_id" => 1,
            "annee_publication_id" => 21,

            "titre"=> "2020-2021 Thèse de Doctorat/PhD de Monsieur LEUTCHO Gervais Dolvis, (Mle CMUDS-11SCI0090) intitulée : « Multistable dynamics and control of diode and memristor
            based hyperjerk circuit with application to image encryption » Thèse dirigée en solo à
            l’Université de Dschang.",

            "description_1" => "2020-2021 Thèse de Doctorat/PhD de Monsieur LEUTCHO Gervais Dolvis, (Mle CMUDS-11SCI0090) intitulée : « Multistable dynamics and control of diode and memristor
            based hyperjerk circuit with application to image encryption » Thèse dirigée en solo à
            l’Université de Dschang.",

            "description_2" => "2020-2021 Thèse de Doctorat/PhD de Monsieur LEUTCHO Gervais Dolvis, (Mle CMUDS-11SCI0090) intitulée : « Multistable dynamics and control of diode and memristor
            based hyperjerk circuit with application to image encryption » Thèse dirigée en solo à
            l’Université de Dschang."
        ];

        $publication_1_13 = [
            "type_publication_id" => 1,
            "annee_publication_id" => 21,

            "titre"=> "2020-2021 Thèse de Doctorat/PhD de Monsieur FOLIFACK SIGNING Vitrice Ruben
            intitulée : « Contribution to the analysis of nonlinear dynamic systems with different classes
            of attractors: theoretical, experimental study, and application in cryptography »",

            "description_1" => "2020-2021 Thèse de Doctorat/PhD de Monsieur FOLIFACK SIGNING Vitrice Ruben
            intitulée : « Contribution to the analysis of nonlinear dynamic systems with different classes
            of attractors: theoretical, experimental study, and application in cryptography» Thèse dirigée
            en solo à l’Université de Dschang.",

            "description_2" => "2020-2021 Thèse de Doctorat/PhD de Monsieur FOLIFACK SIGNING Vitrice Ruben
            intitulée : « Contribution to the analysis of nonlinear dynamic systems with different classes
            of attractors: theoretical, experimental study, and application in cryptography» Thèse dirigée
            en solo à l’Université de Dschang."
        ];


        $publication_1_14 = [
            "type_publication_id" => 1,
            "annee_publication_id" => 21,

            "titre"=> "2020-2021 Thèse de Doctorat/PhD de Monsieur TSAFACK Nestor intitulée : « Dynamical
            analysis of a particular class of semiconductor diode-based chaotic circuit: application to
            image encryption ».
            ",

            "description_1" => "2020-2021 Thèse de Doctorat/PhD de Monsieur TSAFACK Nestor intitulée : « Dynamical
            analysis of a particular class of semiconductor diode-based chaotic circuit: application to
            image encryption » Thèse dirigée en solo à l’Université de Dschang.
            ",

            "description_2" => "2020-2021 Thèse de Doctorat/PhD de Monsieur TSAFACK Nestor intitulée : « Dynamical
            analysis of a particular class of semiconductor diode-based chaotic circuit: application to
            image encryption » Thèse dirigée en solo à l’Université de Dschang.
            "
        ];

        $publication_1_15 = [
            "type_publication_id" => 1,
            "annee_publication_id" => 21,

            "titre"=> "2020-2021 Thèse de Doctorat/PhD de Madame TAGNE MOGUE Ruth Line intitulée :
            « Contribution to the modelling and analysis of a class of exponential-based chaotic
            oscillators with application in cryptography »",

            "description_1" => "2020-2021 Thèse de Doctorat/PhD de Madame TAGNE MOGUE Ruth Line intitulée :
            « Contribution to the modelling and analysis of a class of exponential-based chaotic
            oscillators with application in cryptography » Thèse dirigée en solo à l’Université de
            Dschang.
            ",

            "description_2" => "2020-2021 Thèse de Doctorat/PhD de Madame TAGNE MOGUE Ruth Line intitulée :
            « Contribution to the modelling and analysis of a class of exponential-based chaotic
            oscillators with application in cryptography » Thèse dirigée en solo à l’Université de
            Dschang.
            "
        ];


        // publication de type :Thèses de Doctorat encadrées et soutenues => id = 1
        // annee 2020 => id = 20
        $publication_1_16 = [
            "type_publication_id" => 1,
            "annee_publication_id" => 20,

            "titre" => "Thèse de Doctorat/Ph.D. de KUATE René Fochié - sujet : Contribution à la commande de
            l’UPFC pour l’amélioration des performances des systèmes de puissance. ",

            "description_1" => "Thèse de
            Doctorat/Ph.D. préparée au UR-MACETS et au Laboratoire associé UR-AIA, Faculté des
            Sciences, Unité de Formation et Recherche de la « Dschang School of Sciences and
            Technology », Université de Dschang, soutenue le 4 juin 2020.
            Directeurs de Thèse : KENNE Godpromesse, Professeur et FOTSIN Hilaire Bertrand,
            Professeur",

            "description_2" => "Thèse de
            Doctorat/Ph.D. préparée au UR-MACETS et au Laboratoire associé UR-AIA, Faculté des
            Sciences, Unité de Formation et Recherche de la « Dschang School of Sciences and
            Technology », Université de Dschang, soutenue le 4 juin 2020.
            Directeurs de Thèse : KENNE Godpromesse, Professeur et FOTSIN Hilaire Bertrand,
            Professeur",
        ];

        $publication_1_17 = [
            "type_publication_id" => 1,
            "annee_publication_id" => 20,

            "titre" => "Thèse de Doctorat/Ph.D. de FOTSO SIMO Armel - sujet : Contribution à l'amélioration des
            systèmes de conversion éolienne pour l'alimentation des zones isolées par des contrôleurs
            robustes.",

            "description_1" => "Thèse de Doctorat/Ph.D. préparée au UR-MACETS et au Laboratoire associé URAIA, Faculté des Sciences, Unité de Formation et Recherche de la « Dschang School of
            Sciences and Technology », Université de Dschang, soutenue le 29 juillet 2020.
            Directeur de Thèse : KENNE Godpromesse, Professeur.",

            "description_2" => "Thèse de Doctorat/Ph.D. préparée au UR-MACETS et au Laboratoire associé URAIA, Faculté des Sciences, Unité de Formation et Recherche de la « Dschang School of
            Sciences and Technology », Université de Dschang, soutenue le 29 juillet 2020.
            Directeur de Thèse : KENNE Godpromesse, Professeur.",
        ];

        // publication de type :Thèses de Doctorat encadrées et soutenues => id = 1
        // annee 2019 => id = 19
        $publication_1_18 = [
            "type_publication_id" => 1,
            "annee_publication_id" => 19,

            "titre" => "Thèse de Doctorat / PhD de M. Njitacke Tabekoueng Zéric - Sujet: On the dynamics and
            synchronization of some jerk systems: theoretical analyses and experimental validation. ",

            "description_1" => "Thèse de Doctorat/Ph.D. préparée au LAMACETS et au Laboratoire associé LAIA, Faculté
            des Sciences, Unité de Formation et Recherche de la « Dschang School of Sciences and
            Technology », Université de Dschang, soutenue le 9 février 2019.",

            "description_2" => "Thèse de Doctorat/Ph.D. préparée au LAMACETS et au Laboratoire associé LAIA, Faculté
            des Sciences, Unité de Formation et Recherche de la « Dschang School of Sciences and
            Technology », Université de Dschang, soutenue le 9 février 2019.",
        ];

        $publication_1_19 = [
            "type_publication_id" => 1,
            "annee_publication_id" => 19,

            "titre" => "Thèse de Doctorat/Ph.D. de TCHAPGA TCHITO Christian - sujet: Intelligent System to
            Remotely Diagnose Cardiovascular Diseases, with the use of E.C.G Signals. Thèse de
            Doctorat/Ph.D.",

            "description_1" => " préparée au LAMACETS et au Laboratoire associé LAIA, Faculté des Sciences,
            Unité de Formation et Recherche de la « Dschang School of Sciences and Technology »,
            Université de Dschang. Thèse soutenue le 1 er mars 2019.",

            "description_2" => " préparée au LAMACETS et au Laboratoire associé LAIA, Faculté des Sciences,
            Unité de Formation et Recherche de la « Dschang School of Sciences and Technology »,
            Université de Dschang. Thèse soutenue le 1 er mars 2019.",
        ];

        // publication de type :Thèses de Doctorat encadrées et soutenues => id = 1
        // annee 2018 => id = 18
        $publication_1_20 = [
            "type_publication_id" => 1,
            "annee_publication_id" => 18,

            "titre" => "",

            "description_1" => "",

            "description_2" => "",
        ];

        // publication de type :Thèses de Doctorat encadrées et soutenues => id = 1
        // annee 2017 => id = 17

        $publication_1_21 = [
            "type_publication_id" => 1,
            "annee_publication_id" => 17,

            "titre" => " Thèse de Doctorat/Ph.D. de SANJONG DAGANG Thierry Clotaire - sujet : Contribution à la
            commande robuste des systèmes de production décentralisée d’énergie électrique à base des
            machines asynchrones à cage entraînée par une turbine éolienne.",

            "description_1" => "Thèse de Doctorat/Ph.D.
            préparée au LAMACETS et au Laboratoire associé LAIA, Faculté des Sciences, Unité de
            Formation et Recherche de la « Dschang School of Sciences and Technology », Université de
            Dschang, soutenue le 12 Août 2017.",

            "description_2" => "Thèse de Doctorat/Ph.D.
            préparée au LAMACETS et au Laboratoire associé LAIA, Faculté des Sciences, Unité de
            Formation et Recherche de la « Dschang School of Sciences and Technology », Université de
            Dschang, soutenue le 12 Août 2017.",
        ];

        $publication_1_22 = [
            "type_publication_id" => 1,
            "annee_publication_id" => 17,

            "titre" => " Thèse de Doctorat/Ph.D. de SAHA TCHINDA Beaudelaire - sujet : Contribution à
            l’Automatisation de l’Examen de Selles: Détection, Extraction, Identification et Classification
            des Parasites dans les Images Microscopiques des Selles.",

            "description_1" => "Thèse de Doctorat/Ph.D. préparée au
            LETS et au LAIA, Unité de Formation et Recherche de la « Dschang School of Sciences and
            Technology », Université de Dschang, soutenue le 19 juillet 2017.",

            "description_2" => "Thèse de Doctorat/Ph.D. préparée au
            LETS et au LAIA, Unité de Formation et Recherche de la « Dschang School of Sciences and
            Technology », Université de Dschang, soutenue le 19 juillet 2017.",
        ];

        $publication_1_23 = [
            "type_publication_id" => 1,
            "annee_publication_id" => 17,

            "titre" => "Thèse de Doctorat/Ph.D. de KENGNOU TELEM Adélaïde Nicole - sujet : Transmission
            sécurisée par cryptage chaotique des signaux physiologiques complexes et des images
            biomédicales en télémédecine",

            "description_1" => "Thèse de Doctorat/Ph.D. préparée au LETS et au LAIA, Unité de
            Formation et Recherche de la « Dschang School of Sciences and Technology », Université de
            Dschang, soutenue le 20 Septembre 2017.
            ",

            "description_2" => "Thèse de Doctorat/Ph.D. préparée au LETS et au LAIA, Unité de
            Formation et Recherche de la « Dschang School of Sciences and Technology », Université de
            Dschang, soutenue le 20 Septembre 2017.
            ",
        ];

        $publication_1_24 = [
            "type_publication_id" => 1,
            "annee_publication_id" => 17,

            "titre" => "Thèse de Doctorat/Ph.D. de FOMBU Andrew Muluh - sujet: Power system transient stability
            enhancement and voltage regulation using nonlinear coordinated prime movers, excitation and
            FACTS controllers.",

            "description_1" => "Thèse de Doctorat/Ph.D. préparée au LETS et au LAIA, Unité de Formation
            et Recherche de la « Dschang School of Sciences and Technology », Université de Dschang,
            soutenue le 1er Février 2017.
            ",

            "description_2" => "Thèse de Doctorat/Ph.D. préparée au LETS et au LAIA, Unité de Formation
            et Recherche de la « Dschang School of Sciences and Technology », Université de Dschang,
            soutenue le 1er Février 2017.
            ",
        ];

        // publication de type :Thèses de Doctorat encadrées et soutenues => id = 1
        // annee 2016 => id = 16

        $publication_1_25 = [
            "type_publication_id" => 1,
            "annee_publication_id" => 16,

            "titre" => "Thèse de Doctorat/Ph.D. de NGUIMFACK NDONGMO Jean de Dieu - sujet : Contribution à la
            commande du SSSC et des génératrices asynchrones à double alimentation pour l'amélioration de
            la stabilité transitoire des systèmes de puissance.",

            "description_1" => "Thèse de Doctorat/Ph.D. préparée au LETS et
            au LAIA, Unité de Formation et Recherche de la « Dschang School of Sciences and
            Technology », Université de Dschang, soutenue le 25 juillet 2016.",

            "description_2" => "Thèse de Doctorat/Ph.D. préparée au LETS et
            au LAIA, Unité de Formation et Recherche de la « Dschang School of Sciences and
            Technology », Université de Dschang, soutenue le 25 juillet 2016.",
        ];

        $publication_1_26 = [
            "type_publication_id" => 1,
            "annee_publication_id" => 16,

            "titre" => " Thèse de Doctorat/Ph.D. de DJIMELI TSAJIO Alain Bernard - sujet : Contribution à l’Analyse
            Automatique des Images Bruitées de Goutte Epaisse.",

            "description_1" => "Thèse de Doctorat/Ph.D. préparée au au
            LETS et au LAIA, Unité de Formation et Recherche de la « Dschang School of Sciences and
            Technology », Université de Dschang, soutenue le jeudi 21 juillet 2016.
            Directeurs de Thèse : TCHINDA René, Professeur et TCHIOTSOP Daniel, Maître de ",

            "description_2" => "Thèse de Doctorat/Ph.D. préparée au au
            LETS et au LAIA, Unité de Formation et Recherche de la « Dschang School of Sciences and
            Technology », Université de Dschang, soutenue le jeudi 21 juillet 2016.
            Directeurs de Thèse : TCHINDA René, Professeur et TCHIOTSOP Daniel, Maître de ",
        ];

        Publication::create($publication_1_1);
        Publication::create($publication_1_2);
        Publication::create($publication_1_3);
        Publication::create($publication_1_4);
        Publication::create($publication_1_5);
        Publication::create($publication_1_6);
        Publication::create($publication_1_7);
        Publication::create($publication_1_8);
        Publication::create($publication_1_9);
        Publication::create($publication_1_10);
        Publication::create($publication_1_11);
        Publication::create($publication_1_12);
        Publication::create($publication_1_13);
        Publication::create($publication_1_14);
        Publication::create($publication_1_15);
        Publication::create($publication_1_16);
        Publication::create($publication_1_17);
        Publication::create($publication_1_18);
        Publication::create($publication_1_19);
        Publication::create($publication_1_20);
        Publication::create($publication_1_21);
        Publication::create($publication_1_22);
        Publication::create($publication_1_23);
        Publication::create($publication_1_24);
        Publication::create($publication_1_25);
        Publication::create($publication_1_26);


        // publication de type :Mémoires de niveau Bac+5 encadrés et soutenus => id = 2
        // annee 2009 => id = 9
        $publication_2_1 = [
            "type_publication_id" => 2,
            "annee_publication_id" => 9,

            "titre" => " Mémoire de Master : SIMO Rostand Sorel - sujet : Méthodes d’identification des états et
            paramètres d’une classe de systèmes non linéaires.",

            "description_1" => " Mémoire de Master : SIMO Rostand Sorel - sujet : Méthodes d’identification des états et
            paramètres d’une classe de systèmes non linéaires.",

            "description_2" => " Mémoire de Master : SIMO Rostand Sorel - sujet : Méthodes d’identification des états et
            paramètres d’une classe de systèmes non linéaires.",

        ];

        // publication de type :Mémoires de niveau Bac+5 encadrés et soutenus => id = 2
        // annee 2010 => id = 10
        $publication_2_2 = [
            "type_publication_id" => 2,
            "annee_publication_id" => 10,

            "titre" => "Mémoire de Master : NGUIMFACK-NDONGMO Jean de Dieu - sujet : Étude des
            dispositifs FACTS : Application à l’amélioration des performances du RIS.
            ",

            "description_1" => "Mémoire de Master : NGUIMFACK-NDONGMO Jean de Dieu - sujet : Étude des
            dispositifs FACTS : Application à l’amélioration des performances du RIS.
            ",

            "description_2" => "Mémoire de Master : NGUIMFACK-NDONGMO Jean de Dieu - sujet : Étude des
            dispositifs FACTS : Application à l’amélioration des performances du RIS.
            ",

        ];

        $publication_2_3 = [
            "type_publication_id" => 2,
            "annee_publication_id" => 10,

            "titre" => "Mémoire de Master : KENMOGNE TCHUENKAM Guy Justin - sujet : Modélisation et
            simulation du fonctionnement en génératrice d’une machine asynchrone.
            ",

            "description_1" => "Mémoire de Master : KENMOGNE TCHUENKAM Guy Justin - sujet : Modélisation et
            simulation du fonctionnement en génératrice d’une machine asynchrone.
            ",

            "description_2" => "Mémoire de Master : KENMOGNE TCHUENKAM Guy Justin - sujet : Modélisation et
            simulation du fonctionnement en génératrice d’une machine asynchrone.
            ",

        ];

        // publication de type :Mémoires de niveau Bac+5 encadrés et soutenus => id = 2
        // annee 2011 => id = 11

        $publication_2_4 = [
            "type_publication_id" => 2,
            "annee_publication_id" => 11,

            "titre" => "Mémoire de Master de : DOUANLA Marc Rostand - sujet : Régulation de vitesse d’une
            machine synchrone à aimants permanents avec adaptation en ligne de l’inductance
            statorique, du flux des aimants et de la charge mécanique.",

            "description_1" => "Mémoire de Master de : DOUANLA Marc Rostand - sujet : Régulation de vitesse d’une
            machine synchrone à aimants permanents avec adaptation en ligne de l’inductance
            statorique, du flux des aimants et de la charge mécanique.",

            "description_2" => "Mémoire de Master de : DOUANLA Marc Rostand - sujet : Régulation de vitesse d’une
            machine synchrone à aimants permanents avec adaptation en ligne de l’inductance
            statorique, du flux des aimants et de la charge mécanique.",

        ];

        $publication_2_5 = [
            "type_publication_id" => 2,
            "annee_publication_id" => 11,

            "titre" => "2010-2011 : Mémoire de Master de : KUATE RENE FOCHIE - sujet : Contrôle des
            puissances réactives et tensions par le STATCOM dans le réseau électrique",

            "description_1" => "2010-2011 : Mémoire de Master de : KUATE RENE FOCHIE - sujet : Contrôle des
            puissances réactives et tensions par le STATCOM dans le réseau électrique",

            "description_2" => "2010-2011 : Mémoire de Master de : KUATE RENE FOCHIE - sujet : Contrôle des
            puissances réactives et tensions par le STATCOM dans le réseau électrique",

        ];

        $publication_2_6 = [
            "type_publication_id" => 2,
            "annee_publication_id" => 11,

            "titre" => "2010-2011 : Mémoire de Master-P : Megaptche Tchonang Sergeline Flore - sujet : Mise
            en œuvre d’un SIG d’aide au diagnostic de l’état des bâtiments d’une zone géographique. ",

            "description_1" => "2010-2011 : Mémoire de Master-P : Megaptche Tchonang Sergeline Flore - sujet : Mise
            en œuvre d’un SIG d’aide au diagnostic de l’état des bâtiments d’une zone géographique. ",

            "description_2" => "2010-2011 : Mémoire de Master-P : Megaptche Tchonang Sergeline Flore - sujet : Mise
            en œuvre d’un SIG d’aide au diagnostic de l’état des bâtiments d’une zone géographique. ",

        ];

        // publication de type :Mémoires de niveau Bac+5 encadrés et soutenus => id = 2
        // annee 2012 => id = 12

        $publication_2_7 = [
            "type_publication_id" => 2,
            "annee_publication_id" => 12,

            "titre" => "Mémoire de Master de : FOTSO SIMO Armel - sujet : Contrôle d’une machine
            asynchrone à cage pour conversion de l’énergie éolienne en énergie électrique avec
            adaptation de la constant de temps rotorique.
            ",

            "description_1" => "Mémoire de Master de : FOTSO SIMO Armel - sujet : Contrôle d’une machine
            asynchrone à cage pour conversion de l’énergie éolienne en énergie électrique avec
            adaptation de la constant de temps rotorique.
            ",

            "description_2" => "Mémoire de Master de : FOTSO SIMO Armel - sujet : Contrôle d’une machine
            asynchrone à cage pour conversion de l’énergie éolienne en énergie électrique avec
            adaptation de la constant de temps rotorique.
            ",

        ];

        // publication de type :Mémoires de niveau Bac+5 encadrés et soutenus => id = 2
        // annee 2013 => id = 13

        $publication_2_8 = [
            "type_publication_id" => 2,
            "annee_publication_id" => 13,

            "titre" => "Mémoire de Master de: FOMBU Andrew Muluh - sujet: A comparison of some robust
            control schemes for transient stability enhancement and voltage regulation of power
            generators.",

            "description_1" => "Mémoire de Master de: FOMBU Andrew Muluh - sujet: A comparison of some robust
            control schemes for transient stability enhancement and voltage regulation of power
            generators.",

            "description_2" => "Mémoire de Master de: FOMBU Andrew Muluh - sujet: A comparison of some robust
            control schemes for transient stability enhancement and voltage regulation of power
            generators.",

        ];

        $publication_2_9 = [
            "type_publication_id" => 2,
            "annee_publication_id" => 13,

            "titre" => "Mémoire de Master de : SANJONG DAGANG Thierry Clotaire - sujet : Comparaison
            des méthodes de commande des génératrices asynchrones pour conversion de l’énergie
            éolienne en énergie électrique",

            "description_1" => "Mémoire de Master de : SANJONG DAGANG Thierry Clotaire - sujet : Comparaison
            des méthodes de commande des génératrices asynchrones pour conversion de l’énergie
            éolienne en énergie électrique",

            "description_2" => "Mémoire de Master de : SANJONG DAGANG Thierry Clotaire - sujet : Comparaison
            des méthodes de commande des génératrices asynchrones pour conversion de l’énergie
            éolienne en énergie électrique",

        ];

        $publication_2_10 = [
            "type_publication_id" => 2,
            "annee_publication_id" => 13,

            "titre" => "Mémoire de Master de : Mboubé-Etouké Serge Le Grand - sujet : Description des
            modèles HAD: implémentation d'un mini analyseur lexical et environnement intelligent
            de méta-graphe HAD. ",

            "description_1" => "Mémoire de Master de : Mboubé-Etouké Serge Le Grand - sujet : Description des
            modèles HAD: implémentation d'un mini analyseur lexical et environnement intelligent
            de méta-graphe HAD.",

            "description_2" => "Mémoire de Master de : Mboubé-Etouké Serge Le Grand - sujet : Description des
            modèles HAD: implémentation d'un mini analyseur lexical et environnement intelligent
            de méta-graphe HAD. ",

        ];

        // publication de type :Mémoires de niveau Bac+5 encadrés et soutenus => id = 2
        // annee 2014 => id = 14

        $publication_2_11 = [
            "type_publication_id" => 2,
            "annee_publication_id" => 14,

            "titre" => "Mémoire de Master de : YOUDOM Bertin - sujet : Modélisation du STATCOM dans les
            systèmes de puissances",

            "description_1" => "Mémoire de Master de : YOUDOM Bertin - sujet : Modélisation du STATCOM dans les
            systèmes de puissances",

            "description_2" => "Mémoire de Master de : YOUDOM Bertin - sujet : Modélisation du STATCOM dans les
            systèmes de puissances",

        ];

        $publication_2_12 = [
            "type_publication_id" => 2,
            "annee_publication_id" => 14,

            "titre" => "Mémoire de Master de : TAPPA NONKAM Maurice - sujet : Modélisation et commande
            des génératrices synchrones à aimants permanents entraînées par les turbines éoliennes :
            Application en zones rurales enclavées.",

            "description_1" => "Mémoire de Master de : TAPPA NONKAM Maurice - sujet : Modélisation et commande
            des génératrices synchrones à aimants permanents entraînées par les turbines éoliennes :
            Application en zones rurales enclavées.",

            "description_2" => "Mémoire de Master de : TAPPA NONKAM Maurice - sujet : Modélisation et commande
            des génératrices synchrones à aimants permanents entraînées par les turbines éoliennes :
            Application en zones rurales enclavées.",

        ];

        $publication_2_13 = [
            "type_publication_id" => 2,
            "annee_publication_id" => 14,

            "titre" => " Mémoire de DIPET2: Djoumessi Tsafack Germaine - sujet: A Platform for
            Modernization of Computer Science Teaching Methods in Secondary Schools in
            Cameroon. ",

            "description_1" => " Mémoire de DIPET2: Djoumessi Tsafack Germaine - sujet: A Platform for
            Modernization of Computer Science Teaching Methods in Secondary Schools in
            Cameroon. ",

            "description_2" => " Mémoire de DIPET2: Djoumessi Tsafack Germaine - sujet: A Platform for
            Modernization of Computer Science Teaching Methods in Secondary Schools in
            Cameroon. ",

        ];

        $publication_2_14 = [
            "type_publication_id" => 2,
            "annee_publication_id" => 14,

            "titre" => "Mémoire de Master de : KOYOCK Aaron Merciel - Sujet: Etude de la dynamique
            régulière et chaotique de deux oscillateurs de van der Pol couplés",

            "description_1" => "Mémoire de Master de : KOYOCK Aaron Merciel - Sujet: Etude de la dynamique
            régulière et chaotique de deux oscillateurs de van der Pol couplés",

            "description_2" => "Mémoire de Master de : KOYOCK Aaron Merciel - Sujet: Etude de la dynamique
            régulière et chaotique de deux oscillateurs de van der Pol couplés",

        ];


        $publication_2_15 = [
            "type_publication_id" => 2,
            "annee_publication_id" => 14,

            "titre" => "Mémoire de Master de : NJITACKE TABEKOUENG Zéric - Sujet: Contribution a
            l’étude de la dynamique et synchronisation de l’oscillateur autonome de Duffing :
            Analyse et application en télécommunication",

            "description_1" => "Mémoire de Master de : NJITACKE TABEKOUENG Zéric - Sujet: Contribution a
            l’étude de la dynamique et synchronisation de l’oscillateur autonome de Duffing :
            Analyse et application en télécommunication",

            "description_2" => "Mémoire de Master de : NJITACKE TABEKOUENG Zéric - Sujet: Contribution a
            l’étude de la dynamique et synchronisation de l’oscillateur autonome de Duffing :
            Analyse et application en télécommunication",

        ];

        // publication de type :Mémoires de niveau Bac+5 encadrés et soutenus => id = 2
        // annee 2015 => id = 15

        $publication_2_16 = [
            "type_publication_id" => 2,
            "annee_publication_id" => 15,

            "titre" => "Mémoire de Master de : SONFACK Lionel Leroy - sujet : Contribution à l'Amélioration
            de la Stabilité Transitoire d'un Système de Puissance avec un SSSC.",

            "description_1" => "Mémoire de Master de : SONFACK Lionel Leroy - sujet : Contribution à l'Amélioration
            de la Stabilité Transitoire d'un Système de Puissance avec un SSSC.",

            "description_2" => "Mémoire de Master de : SONFACK Lionel Leroy - sujet : Contribution à l'Amélioration
            de la Stabilité Transitoire d'un Système de Puissance avec un SSSC.",

        ];

        $publication_2_17 = [
            "type_publication_id" => 2,
            "annee_publication_id" => 15,

            "titre" => "Mémoire de Master de : NGUOMKAM NEGOU Alexis- Sujet: Comportement cohérents
            et incohérents des oscillateurs de type Shinriki : Analyse et application en ingénierie",

            "description_1" => "Mémoire de Master de : NGUOMKAM NEGOU Alexis- Sujet: Comportement cohérents
            et incohérents des oscillateurs de type Shinriki : Analyse et application en ingénierie",

            "description_2" => "Mémoire de Master de : NGUOMKAM NEGOU Alexis- Sujet: Comportement cohérents
            et incohérents des oscillateurs de type Shinriki : Analyse et application en ingénierie",

        ];

        $publication_2_18 = [
            "type_publication_id" => 2,
            "annee_publication_id" => 15,

            "titre" => " Mémoire de Master de : FOUODJI TSOTSOP Merline- Sujet: Dynamique et
            synchronisation d’un générateur hyperchaotique constitué d’un circuit LC résonant
            couplé à un filtre de type Delyannis.
            ",

            "description_1" => " Mémoire de Master de : FOUODJI TSOTSOP Merline- Sujet: Dynamique et
            synchronisation d’un générateur hyperchaotique constitué d’un circuit LC résonant
            couplé à un filtre de type Delyannis.
            ",

            "description_2" => " Mémoire de Master de : FOUODJI TSOTSOP Merline- Sujet: Dynamique et
            synchronisation d’un générateur hyperchaotique constitué d’un circuit LC résonant
            couplé à un filtre de type Delyannis.
            ",

        ];

        // publication de type :Mémoires de niveau Bac+5 encadrés et soutenus => id = 2
        // annee 2016 => id = 16

        $publication_2_19 = [
            "type_publication_id" => 2,
            "annee_publication_id" => 16,

            "titre" => " Mémoire de Master de : TCHOUANI NJOMO Arnaud Flanclair - sujet : Extraction des
            paramètres caractéristiques des signaux ECG par les réseaux de neurones artificiels et
            reconnaissance de certaines anomalies cardiaques.",

            "description_1" => " Mémoire de Master de : TCHOUANI NJOMO Arnaud Flanclair - sujet : Extraction des
            paramètres caractéristiques des signaux ECG par les réseaux de neurones artificiels et
            reconnaissance de certaines anomalies cardiaques.
            Directeur du mémoire de Master : KENNE Godpromesse, Professeur",

            "description_2" => " Mémoire de Master de : TCHOUANI NJOMO Arnaud Flanclair - sujet : Extraction des
            paramètres caractéristiques des signaux ECG par les réseaux de neurones artificiels et
            reconnaissance de certaines anomalies cardiaques.
            Directeur du mémoire de Master : KENNE Godpromesse, Professeur",

        ];

        $publication_2_20 = [
            "type_publication_id" => 2,
            "annee_publication_id" => 16,

            "titre" => "Mémoire de Master de : TSAMENE TANEKOU SOSTHENE - sujet : Méthode
            dynamique d’estimation des paramètres des systèmes non linéaires par les réseaux de
            neurones artificiels: Application à l’estimation des états d’un réseau électrique.
            ",

            "description_1" => "Mémoire de Master de : TSAMENE TANEKOU SOSTHENE - sujet : Méthode
            dynamique d’estimation des paramètres des systèmes non linéaires par les réseaux de
            neurones artificiels: Application à l’estimation des états d’un réseau électrique.
            Directeur du mémoire de Master : KENNE Godpromesse, Professeur",

            "description_2" => "Mémoire de Master de : TSAMENE TANEKOU SOSTHENE - sujet : Méthode
            dynamique d’estimation des paramètres des systèmes non linéaires par les réseaux de
            neurones artificiels: Application à l’estimation des états d’un réseau électrique.
            Directeur du mémoire de Master : KENNE Godpromesse, Professeur",

        ];

        $publication_2_21 = [
            "type_publication_id" => 2,
            "annee_publication_id" => 16,

            "titre" => "Mémoire de Master de: KAMGANG BEYALA Vivien Loïck - sujet : An Abstract Model
            for Localized Languages Analysis and Translation: Application to Open-Office/LibreOffic",

            "description_1" => "Mémoire de Master de: KAMGANG BEYALA Vivien Loïck - sujet : An Abstract Model
            for Localized Languages Analysis and Translation: Application to Open-Office/LibreOffic",

            "description_2" => "Mémoire de Master de: KAMGANG BEYALA Vivien Loïck - sujet : An Abstract Model
            for Localized Languages Analysis and Translation: Application to Open-Office/LibreOffic",

        ];

        $publication_2_22 = [
            "type_publication_id" => 2,
            "annee_publication_id" => 16,

            "titre" => "Mémoire de DIPET2 de: TEGOMO NGOUNE Germain - sujet: Designing of a translator
            of Cameroonian local language: Case of Yemba. ",

            "description_1" => "Mémoire de DIPET2 de: TEGOMO NGOUNE Germain - sujet: Designing of a translator
            of Cameroonian local language: Case of Yemba. ",

            "description_2" => "Mémoire de DIPET2 de: TEGOMO NGOUNE Germain - sujet: Designing of a translator
            of Cameroonian local language: Case of Yemba. ",

        ];

        $publication_2_23 = [
            "type_publication_id" => 2,
            "annee_publication_id" => 16,

            "titre" => "Mémoire de Master-P : Tchadjet Nzia Axelle - sujet : Mise en place d’un Système
            d’Optimisation de la Localisation des Clients d’ENEO (SOLCE): Cas de Bonamoussadi. ",

            "description_1" => "Mémoire de Master-P : Tchadjet Nzia Axelle - sujet : Mise en place d’un Système
            d’Optimisation de la Localisation des Clients d’ENEO (SOLCE): Cas de Bonamoussadi. ",

            "description_2" => "Mémoire de Master-P : Tchadjet Nzia Axelle - sujet : Mise en place d’un Système
            d’Optimisation de la Localisation des Clients d’ENEO (SOLCE): Cas de Bonamoussadi. ",

        ];

        $publication_2_24 = [
            "type_publication_id" => 2,
            "annee_publication_id" => 16,

            "titre" => "Mémoire de master de : TSAFACK Nestor.- Sujet : Dynamique et synchronisation d’un
            oscillateur non linéaire de type Chua- Harley: Etude théorique, simulation analogique, et
            application à la sécurisation de l’information.",

            "description_1" => "Mémoire de master de : TSAFACK Nestor.- Sujet : Dynamique et synchronisation d’un
            oscillateur non linéaire de type Chua- Harley: Etude théorique, simulation analogique, et
            application à la sécurisation de l’information.",

            "description_2" => "Mémoire de master de : TSAFACK Nestor.- Sujet : Dynamique et synchronisation d’un
            oscillateur non linéaire de type Chua- Harley: Etude théorique, simulation analogique, et
            application à la sécurisation de l’information.",

        ];

        $publication_2_25 = [
            "type_publication_id" => 2,
            "annee_publication_id" => 16,

            "titre" => "Mémoire de master de : FOLIFACK SIGNING virtice ruben.- Sujet :-Phénomène de
            bifurcation et multistabilité dans les oscillateurs non-autonomes de type MLC:
            Modélisation mathématique, étude numérique et application en Ingénierie.",

            "description_1" => "Mémoire de master de : FOLIFACK SIGNING virtice ruben.- Sujet :-Phénomène de
            bifurcation et multistabilité dans les oscillateurs non-autonomes de type MLC:
            Modélisation mathématique, étude numérique et application en Ingénierie.",

            "description_2" => "Mémoire de master de : FOLIFACK SIGNING virtice ruben.- Sujet :-Phénomène de
            bifurcation et multistabilité dans les oscillateurs non-autonomes de type MLC:
            Modélisation mathématique, étude numérique et application en Ingénierie.",

        ];

        $publication_2_26 = [
            "type_publication_id" => 2,
            "annee_publication_id" => 16,

            "titre" => "Mémoire de master de : MIENDJIM KANGMAFO WILLY ANDRE.- Sujet :
            Modélisation mathématique, étude numérique et expérimentale d’un oscillateur chaotique
            RC à pont de Wien: Analyse et application en ingénierie.",

            "description_1" => "Mémoire de master de : MIENDJIM KANGMAFO WILLY ANDRE.- Sujet :
            Modélisation mathématique, étude numérique et expérimentale d’un oscillateur chaotique
            RC à pont de Wien: Analyse et application en ingénierie.",

            "description_2" => "Mémoire de master de : MIENDJIM KANGMAFO WILLY ANDRE.- Sujet :
            Modélisation mathématique, étude numérique et expérimentale d’un oscillateur chaotique
            RC à pont de Wien: Analyse et application en ingénierie.",

        ];

        $publication_2_27 = [
            "type_publication_id" => 2,
            "annee_publication_id" => 16,

            "titre" => "Mémoire de Master de : BASSOUNG NONGO Renaud Parfait - sujet : Investigation des
            phénomènes chaotiques dans les convertisseurs DC/DC : techniques, analytique et
            informatiques",

            "description_1" => "Mémoire de Master de : BASSOUNG NONGO Renaud Parfait - sujet : Investigation des
            phénomènes chaotiques dans les convertisseurs DC/DC : techniques, analytique et
            informatiques",

            "description_2" => "Mémoire de Master de : BASSOUNG NONGO Renaud Parfait - sujet : Investigation des
            phénomènes chaotiques dans les convertisseurs DC/DC : techniques, analytique et
            informatiques",

        ];

        $publication_2_28 = [
            "type_publication_id" => 2,
            "annee_publication_id" => 16,

            "titre" => "Mémoire de Master de : NGUEMO KEMDOUM Fritz - sujet : Contribution à l’étude et à
            l’implémentation des systèmes dynamiques par FPGA en utilisant XSG",

            "description_1" => "Mémoire de Master de : NGUEMO KEMDOUM Fritz - sujet : Contribution à l’étude et à
            l’implémentation des systèmes dynamiques par FPGA en utilisant XSG",

            "description_2" => "Mémoire de Master de : NGUEMO KEMDOUM Fritz - sujet : Contribution à l’étude et à
            l’implémentation des systèmes dynamiques par FPGA en utilisant XSG",

        ];

        $publication_2_29 = [
            "type_publication_id" => 2,
            "annee_publication_id" => 16,

            "titre" => " Mémoire de Master de : KEMNANG TSAFACK Alex Stéphane - sujet : Contribution à
            l’étude dynamique et contrôle des phénomènes chaotiques dans les moteurs asynchrones
            triphasés à commande par flux orienté.",

            "description_1" => " Mémoire de Master de : KEMNANG TSAFACK Alex Stéphane - sujet : Contribution à
            l’étude dynamique et contrôle des phénomènes chaotiques dans les moteurs asynchrones
            triphasés à commande par flux orienté. Directeur du mémoire de Master : KENNE Godpromesse, Professeur",

            "description_2" => " Mémoire de Master de : KEMNANG TSAFACK Alex Stéphane - sujet : Contribution à
            l’étude dynamique et contrôle des phénomènes chaotiques dans les moteurs asynchrones
            triphasés à commande par flux orienté. Directeur du mémoire de Master : KENNE Godpromesse, Professeur",

        ];

        $publication_2_30 = [
            "type_publication_id" => 2,
            "annee_publication_id" => 16,

            "titre" => "Mémoire de Master de: DJOUFACK NKENGFACK Laurent Chanel, Thème : Analyse,
            extraction des paramètres et compression des signaux EEG par transformations
            polynomiales.",

            "description_1" => "Mémoire de Master de: DJOUFACK NKENGFACK Laurent Chanel, Thème : Analyse,
            extraction des paramètres et compression des signaux EEG par transformations
            polynomiales.",

            "description_2" => "Mémoire de Master de: DJOUFACK NKENGFACK Laurent Chanel, Thème : Analyse,
            extraction des paramètres et compression des signaux EEG par transformations
            polynomiales.",

        ];

        // publication de type :Mémoires de niveau Bac+5 encadrés et soutenus => id = 2
        // annee 2017 => id = 17

        $publication_2_31 = [
            "type_publication_id" => 2,
            "annee_publication_id" => 17,

            "titre" => " Mémoire de Master de : PESDJOCK Mathieu Jean Pierre - sujet : Étude comparative des
            méthodes de minimisation des harmoniques produits par les convertisseurs.",

            "description_1" => "Mémoire de Master de : PESDJOCK Mathieu Jean Pierre - sujet : Étude comparative des
            méthodes de minimisation des harmoniques produits par les convertisseurs.
            Directeur du mémoire de Master : KENNE Godpromesse, Professeur",

            "description_2" => "Mémoire de Master de : PESDJOCK Mathieu Jean Pierre - sujet : Étude comparative des
            méthodes de minimisation des harmoniques produits par les convertisseurs.
            Directeur du mémoire de Master : KENNE Godpromesse, Professeur",

        ];

        $publication_2_32 = [
            "type_publication_id" => 2,
            "annee_publication_id" => 17,

            "titre" => " Mémoire de Master de : SIMO MOPO Eric Prince Lavoisier - sujet : Outils robuste de
            reconnaissance des caractères par réseaux de neurones: Application à la correction
            automatique des QCM.",

            "description_1" => " Mémoire de Master de : SIMO MOPO Eric Prince Lavoisier - sujet : Outils robuste de
            reconnaissance des caractères par réseaux de neurones: Application à la correction
            automatique des QCM.
            Directeur du mémoire de Master : KENNE Godpromesse, Professeur",

            "description_2" => " Mémoire de Master de : SIMO MOPO Eric Prince Lavoisier - sujet : Outils robuste de
            reconnaissance des caractères par réseaux de neurones: Application à la correction
            automatique des QCM.
            Directeur du mémoire de Master : KENNE Godpromesse, Professeur",

        ];

        $publication_2_33 = [
            "type_publication_id" => 2,
            "annee_publication_id" => 17,

            "titre" => " Mémoire de Master de : MBUBIA TCHOUA ERNEST VLADIMIR - sujet : Étude
            comparative des commandes de convertisseurs DC/DC pour les systèmes photovoltaïques.
            ",

            "description_1" => " Mémoire de Master de : MBUBIA TCHOUA ERNEST VLADIMIR - sujet : Étude
            comparative des commandes de convertisseurs DC/DC pour les systèmes photovoltaïques.
            Directeur du mémoire de Master : KENNE Godpromesse, Professeur",

            "description_2" => " Mémoire de Master de : MBUBIA TCHOUA ERNEST VLADIMIR - sujet : Étude
            comparative des commandes de convertisseurs DC/DC pour les systèmes photovoltaïques.
            Directeur du mémoire de Master : KENNE Godpromesse, Professeur",

        ];

        $publication_2_34 = [
            "type_publication_id" => 2,
            "annee_publication_id" => 17,

            "titre" => "Mémoire de Master de : NJOHO KENNETH TEBONG - sujet : Commande numérique
            par calculateur des systèmes dynamiques : Analyse et optimisation des paramètres de
            commande",

            "description_1" => "Mémoire de Master de : NJOHO KENNETH TEBONG - sujet : Commande numérique
            par calculateur des systèmes dynamiques : Analyse et optimisation des paramètres de
            commande",

            "description_2" => "Mémoire de Master de : NJOHO KENNETH TEBONG - sujet : Commande numérique
            par calculateur des systèmes dynamiques : Analyse et optimisation des paramètres de
            commande",

        ];

        $publication_2_35 = [
            "type_publication_id" => 2,
            "annee_publication_id" => 17,

            "titre" => "Mémoire de Master de : NGUEMKOUA NGUENJOU Léopold Parfait (CM-UDS15SCI2224) Sujet : Contribution à l’étude de la dynamique régulière et chaotique des
            oscillateurs de type Genesio-Tesi : Etude théorique, implémentation électronique et
            quelques applications”.",

            "description_1" => "Mémoire de Master de : NGUEMKOUA NGUENJOU Léopold Parfait (CM-UDS15SCI2224) Sujet : Contribution à l’étude de la dynamique régulière et chaotique des
            oscillateurs de type Genesio-Tesi : Etude théorique, implémentation électronique et
            quelques applications”.",

            "description_2" => "Mémoire de Master de : NGUEMKOUA NGUENJOU Léopold Parfait (CM-UDS15SCI2224) Sujet : Contribution à l’étude de la dynamique régulière et chaotique des
            oscillateurs de type Genesio-Tesi : Etude théorique, implémentation électronique et
            quelques applications”.",

        ];

        $publication_2_36 = [
            "type_publication_id" => 2,
            "annee_publication_id" => 17,

            "titre" => " Mémoire de Master de: TEGOMO NGOUNE Germain - sujet : Modèle de Traduction
            Automatique Multi-Contexte à base de Réseau de Neurones Récurrents LSTM pour les
            Langues Locales Camerounaises: Cas du Français-Yémba. ",

            "description_1" => "Mémoire de Master de: TEGOMO NGOUNE Germain - sujet : Modèle de Traduction
            Automatique Multi-Contexte à base de Réseau de Neurones Récurrents LSTM pour les
            Langues Locales Camerounaises: Cas du Français-Yémba.",

            "description_2" => " Mémoire de Master de: TEGOMO NGOUNE Germain - sujet : Modèle de Traduction
            Automatique Multi-Contexte à base de Réseau de Neurones Récurrents LSTM pour les
            Langues Locales Camerounaises: Cas du Français-Yémba.",

        ];

        $publication_2_37 = [
            "type_publication_id" => 2,
            "annee_publication_id" => 17,

            "titre" => "Mémoire de Master de : TADJO TAKIANPI Yves Constantin - sujet : Vote
            Electronique : Approche Multi Agents d’évaluation de la qualité du service fourni par un
            organisme de contrôle en charge d’une élection.",

            "description_1" => "Mémoire de Master de : TADJO TAKIANPI Yves Constantin - sujet : Vote
            Electronique : Approche Multi Agents d’évaluation de la qualité du service fourni par un
            organisme de contrôle en charge d’une élection.",

            "description_2" => "Mémoire de Master de : TADJO TAKIANPI Yves Constantin - sujet : Vote
            Electronique : Approche Multi Agents d’évaluation de la qualité du service fourni par un
            organisme de contrôle en charge d’une élection.",

        ];

        $publication_2_38 = [
            "type_publication_id" => 2,
            "annee_publication_id" => 17,

            "titre" => " Mémoire de master de : NJIKAM Simon Maxwell. Sujet-Dynamique régulière et
            chaotique d’une classe particulière d’oscillateurs autonomes à non-linéarité tangente
            hyperbolique : Modélisation mathématique, étude numérique et application en
            télécommunication. ",

            "description_1" => " Mémoire de master de : NJIKAM Simon Maxwell. Sujet-Dynamique régulière et
            chaotique d’une classe particulière d’oscillateurs autonomes à non-linéarité tangente
            hyperbolique : Modélisation mathématique, étude numérique et application en
            télécommunication.",

            "description_2" => " Mémoire de master de : NJIKAM Simon Maxwell. Sujet-Dynamique régulière et
            chaotique d’une classe particulière d’oscillateurs autonomes à non-linéarité tangente
            hyperbolique : Modélisation mathématique, étude numérique et application en
            télécommunication. ",

        ];

        $publication_2_39 = [
            "type_publication_id" => 2,
            "annee_publication_id" => 17,

            "titre" => " Mémoire de master de : LEUTCHO Gervais Dolvis : Phénomène de bifurcation et
            multistabilité dans une classe particulière d’oscillateurs de type hyperjerk.",

            "description_1" => " Mémoire de master de : LEUTCHO Gervais Dolvis : Phénomène de bifurcation et
            multistabilité dans une classe particulière d’oscillateurs de type hyperjerk.",

            "description_2" => " Mémoire de master de : LEUTCHO Gervais Dolvis : Phénomène de bifurcation et
            multistabilité dans une classe particulière d’oscillateurs de type hyperjerk.",

        ];

        $publication_2_40 = [
            "type_publication_id" => 2,
            "annee_publication_id" => 17,

            "titre" => "Mémoire de master de : METAGPAB René – sujet : étude d’un circuit chaotique de type
            Jerk : synchronisation et application au masquage de télécommunication",

            "description_1" => "Mémoire de master de : METAGPAB René – sujet : étude d’un circuit chaotique de type
            Jerk : synchronisation et application au masquage de télécommunication",

            "description_2" => "Mémoire de master de : METAGPAB René – sujet : étude d’un circuit chaotique de type
            Jerk : synchronisation et application au masquage de télécommunication",

        ];

        $publication_2_41 = [
            "type_publication_id" => 2,
            "annee_publication_id" => 17,

            "titre" => " Mémoire de master de : TOPY NGONTY TOPY Arnaud- sujet : contribution à l’étude de
            la dynamique d’un système à non linéarité quadratique : analyse et application au
            masquage en télécommunication.",

            "description_1" => " Mémoire de master de : TOPY NGONTY TOPY Arnaud- sujet : contribution à l’étude de
            la dynamique d’un système à non linéarité quadratique : analyse et application au
            masquage en télécommunication.",

            "description_2" => " Mémoire de master de : TOPY NGONTY TOPY Arnaud- sujet : contribution à l’étude de
            la dynamique d’un système à non linéarité quadratique : analyse et application au
            masquage en télécommunication.",

        ];

        $publication_2_42 = [
            "type_publication_id" => 2,
            "annee_publication_id" => 17,

            "titre" => " Mémoire de master de : MAKEM Mimosette, Thème : Transmission d’images
            biomédicales par SMS en télémédecine",

            "description_1" => " Mémoire de master de : MAKEM Mimosette, Thème : Transmission d’images
            biomédicales par SMS en télémédecine",

            "description_2" => " Mémoire de master de : MAKEM Mimosette, Thème : Transmission d’images
            biomédicales par SMS en télémédecine",

        ];

        $publication_2_43 = [
            "type_publication_id" => 2,
            "annee_publication_id" => 17,

            "titre" => "Mémoire de master de : FOTSING KAMGANG Herton Carel, Thème : \"ETUDE ET
            SIMULATION DE LA COMPRESSION DES IMAGES BIOMEDICALES DANS
            L’ENVIRONNEMENT MATLAB\"
            ",

            "description_1" => "Mémoire de master de : FOTSING KAMGANG Herton Carel, Thème : \"ETUDE ET
            SIMULATION DE LA COMPRESSION DES IMAGES BIOMEDICALES DANS
            L’ENVIRONNEMENT MATLAB\"",

            "description_2" => "Mémoire de master de : FOTSING KAMGANG Herton Carel, Thème : \"ETUDE ET
            SIMULATION DE LA COMPRESSION DES IMAGES BIOMEDICALES DANS
            L’ENVIRONNEMENT MATLAB\"",

        ];

        $publication_2_44 = [
            "type_publication_id" => 2,
            "annee_publication_id" => 17,

            "titre" => "Mémoire de master de : WANDJI PIUGIE Yris Brice. Thème : transmission simultanée
            des signaux physiologiques multicanaux par multiplexage DS-CDMA chaotique",

            "description_1" => "Mémoire de master de : WANDJI PIUGIE Yris Brice. Thème : transmission simultanée
            des signaux physiologiques multicanaux par multiplexage DS-CDMA chaotique",

            "description_2" => "Mémoire de master de : WANDJI PIUGIE Yris Brice. Thème : transmission simultanée
            des signaux physiologiques multicanaux par multiplexage DS-CDMA chaotique",

        ];

        $publication_2_45 = [
            "type_publication_id" => 2,
            "annee_publication_id" => 17,

            "titre" => "Mémoire de master de : YANGNI ANATOLE PATRICE. Thème : synchronisation des
            systèmes chaotiques et application dans la transmission sécurisée des signaux
            physiologiques.",

            "description_1" => "Mémoire de master de : YANGNI ANATOLE PATRICE. Thème : synchronisation des
            systèmes chaotiques et application dans la transmission sécurisée des signaux
            physiologiques.",

            "description_2" => "Mémoire de master de : YANGNI ANATOLE PATRICE. Thème : synchronisation des
            systèmes chaotiques et application dans la transmission sécurisée des signaux
            physiologiques.",

        ];

        // publication de type :Mémoires de niveau Bac+5 encadrés et soutenus => id = 2
        // annee 2018 => id = 18

        $publication_2_46 = [
            "type_publication_id" => 2,
            "annee_publication_id" => 18,

            "titre" => " Mémoire de Master de : NDIGUYANOUBA NGARADOUMBAYE Julien - sujet :
            Étude comparative des commandes de convertisseurs DC/DC pour les systèmes
            photovoltaïques avec implémentation à l’aide d’Arduino.",

            "description_1" => " Mémoire de Master de : NDIGUYANOUBA NGARADOUMBAYE Julien - sujet :
            Étude comparative des commandes de convertisseurs DC/DC pour les systèmes
            photovoltaïques avec implémentation à l’aide d’Arduino.
            Directeur du mémoire de Master : KENNE Godpromesse, Professeur",

            "description_2" => " Mémoire de Master de : NDIGUYANOUBA NGARADOUMBAYE Julien - sujet :
            Étude comparative des commandes de convertisseurs DC/DC pour les systèmes
            photovoltaïques avec implémentation à l’aide d’Arduino.
            Directeur du mémoire de Master : KENNE Godpromesse, Professeur",

        ];

        $publication_2_47= [
            "type_publication_id" => 2,
            "annee_publication_id" => 18,

            "titre" => " Mémoire de Master de : NDE KENGNE Hermann Fidèle - sujet : Contribution à la
            conception et réalisation d’une plateforme d’essai expérimental des systèmes de
            conversion d’énergie à onduleur des tensions triphasées.",

            "description_1" => "Mémoire de Master de : NDE KENGNE Hermann Fidèle - sujet : Contribution à la
            conception et réalisation d’une plateforme d’essai expérimental des systèmes de
            conversion d’énergie à onduleur des tensions triphasées.
            Directeur du mémoire de Master : KENNE Godpromesse, Professeur",

            "description_2" => "Mémoire de Master de : NDE KENGNE Hermann Fidèle - sujet : Contribution à la
            conception et réalisation d’une plateforme d’essai expérimental des systèmes de
            conversion d’énergie à onduleur des tensions triphasées.
            Directeur du mémoire de Master : KENNE Godpromesse, Professeur",

        ];

        $publication_2_48 = [
            "type_publication_id" => 2,
            "annee_publication_id" => 18,

            "titre" => "Mémoire de Master de : WOUANTSA TINDO Blaise Castelin (UDS-13SCI-0820) Sujet :
            Analyse de l’image de la rétine pour l’aide au diagnostic de la maladie des yeux:
            application a la détection de la rétinopathie diabétique",

            "description_1" => "Mémoire de Master de : WOUANTSA TINDO Blaise Castelin (UDS-13SCI-0820) Sujet :
            Analyse de l’image de la rétine pour l’aide au diagnostic de la maladie des yeux:
            application a la détection de la rétinopathie diabétique",

            "description_2" => "Mémoire de Master de : WOUANTSA TINDO Blaise Castelin (UDS-13SCI-0820) Sujet :
            Analyse de l’image de la rétine pour l’aide au diagnostic de la maladie des yeux:
            application a la détection de la rétinopathie diabétique",

        ];

        $publication_2_49 = [
            "type_publication_id" => 2,
            "annee_publication_id" => 18,

            "titre" => " Mémoire de master de : SAMI DOUBLA Isaac.- Sujet : Etude de la dynamique et
            synchronisation d’un nouvel oscillateur autonome de type Jerk avec une non linéarité
            cosinus hyperbolique : Analyse et application à la sécurisation de la communication.",

            "description_1" => " Mémoire de master de : SAMI DOUBLA Isaac.- Sujet : Etude de la dynamique et
            synchronisation d’un nouvel oscillateur autonome de type Jerk avec une non linéarité
            cosinus hyperbolique : Analyse et application à la sécurisation de la communication.
            Directeur du mémoire de Master : KENGNE Jacques, Maître de Conférences
            ",

            "description_2" => " Mémoire de master de : SAMI DOUBLA Isaac.- Sujet : Etude de la dynamique et
            synchronisation d’un nouvel oscillateur autonome de type Jerk avec une non linéarité
            cosinus hyperbolique : Analyse et application à la sécurisation de la communication.
            Directeur du mémoire de Master : KENGNE Jacques, Maître de Conférences
            ",

        ];

        $publication_2_50 = [
            "type_publication_id" => 2,
            "annee_publication_id" => 18,

            "titre" => " Mémoire de master de: NZOULEWA Sandrine - Sujet: Dynamics and synchronization of
            an autonomous jerk system with two nonlinearities: Analysis with application.",

            "description_1" => " Mémoire de master de: NZOULEWA Sandrine - Sujet: Dynamics and synchronization of
            an autonomous jerk system with two nonlinearities: Analysis with application.",

            "description_2" => " Mémoire de master de: NZOULEWA Sandrine - Sujet: Dynamics and synchronization of
            an autonomous jerk system with two nonlinearities: Analysis with application.",

        ];

        $publication_2_51 = [
            "type_publication_id" => 2,
            "annee_publication_id" => 18,

            "titre" => " Mémoire de Master de : KENMOGNE Dieudonné Blaise- sujet : Etude dynamique d’un
            oscillateur de type CHUA modifié : Synchronisation et Applications au masquage en
            Télécommunication.
            ",

            "description_1" => " Mémoire de Master de : KENMOGNE Dieudonné Blaise- sujet : Etude dynamique d’un
            oscillateur de type CHUA modifié : Synchronisation et Applications au masquage en
            Télécommunication.
            ",

            "description_2" => " Mémoire de Master de : KENMOGNE Dieudonné Blaise- sujet : Etude dynamique d’un
            oscillateur de type CHUA modifié : Synchronisation et Applications au masquage en
            Télécommunication.
            ",

        ];

        $publication_2_52 = [
            "type_publication_id" => 2,
            "annee_publication_id" => 18,

            "titre" => " Mémoire de Master de: NYAH Desmond Temba, Thème: contribution to developing a
            platform for tele-cardiology: E.C.G. features detection using multiresolution wavelet
            analysis based selective coefficient method.
            ",

            "description_1" => " Mémoire de Master de: NYAH Desmond Temba, Thème: contribution to developing a
            platform for tele-cardiology: E.C.G. features detection using multiresolution wavelet
            analysis based selective coefficient method.
            Directeur du mémoire de Master : TCHIOTSOP Daniel, Maître de Conférences",

            "description_2" => " Mémoire de Master de: NYAH Desmond Temba, Thème: contribution to developing a
            platform for tele-cardiology: E.C.G. features detection using multiresolution wavelet
            analysis based selective coefficient method.
            Directeur du mémoire de Master : TCHIOTSOP Daniel, Maître de Conférences",

        ];

        // publication de type :Mémoires de niveau Bac+5 encadrés et soutenus => id = 2
        // annee 2019 => id = 19

        $publication_2_53 = [
            "type_publication_id" => 2,
            "annee_publication_id" => 19,

            "titre" => "Mémoire de Master de : TCHOUMTCHA Daniel Borice
            - sujet : Compléments de module pour validation expérimentale des contrôleurs PI et
            mode glissant pour un système de conversion d’énergie éolienne basé sur la GSAP
            associée à un redresseur à diode plus un convertisseur boost.",

            "description_1" => "Mémoire de Master de : TCHOUMTCHA Daniel Borice
            - sujet : Compléments de module pour validation expérimentale des contrôleurs PI et
            mode glissant pour un système de conversion d’énergie éolienne basé sur la GSAP
            associée à un redresseur à diode plus un convertisseur boost.
            Directeur du mémoire de Master : KENNE Godpromesse, Professeur",

            "description_2" => "Mémoire de Master de : TCHOUMTCHA Daniel Borice
            - sujet : Compléments de module pour validation expérimentale des contrôleurs PI et
            mode glissant pour un système de conversion d’énergie éolienne basé sur la GSAP
            associée à un redresseur à diode plus un convertisseur boost.
            Directeur du mémoire de Master : KENNE Godpromesse, Professeur",

        ];

        $publication_2_54 = [
            "type_publication_id" => 2,
            "annee_publication_id" => 19,

            "titre" => "Mémoire de Master de : TITI MBENDE Ernest - sujet Etude et conception d’un module
            hybride à énergie solaire, éolienne et hydroélectrique.",

            "description_1" => " Mémoire de Master de : TITI MBENDE Ernest - sujet Etude et conception d’un module
            hybride à énergie solaire, éolienne et hydroélectrique.
            Directeur du mémoire de Master : KENNE Godpromesse, Professeur",

            "description_2" => " Mémoire de Master de : TITI MBENDE Ernest - sujet Etude et conception d’un module
            hybride à énergie solaire, éolienne et hydroélectrique.
            Directeur du mémoire de Master : KENNE Godpromesse, Professeur",

        ];

        $publication_2_55 = [
            "type_publication_id" => 2,
            "annee_publication_id" => 19,

            "titre" => "Mémoire de Master de : NOUBOUODEM André Crispo - Validation expérimentale des
            contrôleurs PI et non linéaires des filtres actifs : Application au réseau électrique",

            "description_1" => "Mémoire de Master de : NOUBOUODEM André Crispo - Validation expérimentale des
            contrôleurs PI et non linéaires des filtres actifs : Application au réseau électrique.
            Directeur du mémoire de Master : KENNE Godpromesse, Professeur.",

            "description_2" => "Mémoire de Master de : NOUBOUODEM André Crispo - Validation expérimentale des
            contrôleurs PI et non linéaires des filtres actifs : Application au réseau électrique.
            Directeur du mémoire de Master : KENNE Godpromesse, Professeur.",

        ];

        $publication_2_56 = [
            "type_publication_id" => 2,
            "annee_publication_id" => 19,

            "titre" => " Mémoire de Master de : MOSSY MOSSYIsaker Narcisse - sujet : Système de
            publication de données sur internet appliqué à l’internet des objets pour la santé au
            Cameroun",

            "description_1" => " Mémoire de Master de : MOSSY MOSSYIsaker Narcisse - sujet : Système de
            publication de données sur internet appliqué à l’internet des objets pour la santé au
            Cameroun.
            Directeur de Thèse : NKENLIFACK Marcellin Julius Antonio, Maître de
            Conférences",

            "description_2" => " Mémoire de Master de : MOSSY MOSSYIsaker Narcisse - sujet : Système de
            publication de données sur internet appliqué à l’internet des objets pour la santé au
            Cameroun.
            Directeur de Thèse : NKENLIFACK Marcellin Julius Antonio, Maître de
            Conférences",

        ];

        $publication_2_57 = [
            "type_publication_id" => 2,
            "annee_publication_id" => 19,

            "titre" => "Mémoire de Master de : ATANGANA OTELE Charlie Gaél - sujet : Application des
            réseaux de neurones dans la cartographie géologique par images Landsat.",

            "description_1" => " Mémoire de Master de : ATANGANA OTELE Charlie Gaél - sujet : Application des
            réseaux de neurones dans la cartographie géologique par images Landsat.
            Directeur de Thèse : NKENLIFACK Marcellin Julius Antonio, Maître de
            Conférences",

            "description_2" => " Mémoire de Master de : ATANGANA OTELE Charlie Gaél - sujet : Application des
            réseaux de neurones dans la cartographie géologique par images Landsat.
            Directeur de Thèse : NKENLIFACK Marcellin Julius Antonio, Maître de
            Conférences",

        ];

        $publication_2_58 = [
            "type_publication_id" => 2,
            "annee_publication_id" => 19,

            "titre" => " Mémoire de Master de : ATEDJIO Fabrice Setephin - sujet : Evaluation et gestion de la
            vulnérabilité et des risques dans le cadre du suivi à domicile de patients au Cameroun via
            un système IoT.",

            "description_1" => " Mémoire de Master de : ATEDJIO Fabrice Setephin - sujet : Evaluation et gestion de la
            vulnérabilité et des risques dans le cadre du suivi à domicile de patients au Cameroun via
            un système IoT.
            Directeur de Thèse : NKENLIFACK Marcellin Julius Antonio, Maître de
            Conférences",

            "description_2" => " Mémoire de Master de : ATEDJIO Fabrice Setephin - sujet : Evaluation et gestion de la
            vulnérabilité et des risques dans le cadre du suivi à domicile de patients au Cameroun via
            un système IoT.
            Directeur de Thèse : NKENLIFACK Marcellin Julius Antonio, Maître de
            Conférences",

        ];

        $publication_2_59 = [
            "type_publication_id" => 2,
            "annee_publication_id" => 19,

            "titre" => "Mémoire de Master de : NDEMAZE William Kery Branston - sujet : Modèle générique et
            multi-niveaux pour les applications d’E-santé base sur la carte médicale.
            ",

            "description_1" => " Mémoire de Master de : NDEMAZE William Kery Branston - sujet : Modèle générique et
            multi-niveaux pour les applications d’E-santé base sur la carte médicale.
            Directeur de Thèse : NKENLIFACK Marcellin Julius Antonio, Maître de
            Conférences",

            "description_2" => " Mémoire de Master de : NDEMAZE William Kery Branston - sujet : Modèle générique et
            multi-niveaux pour les applications d’E-santé base sur la carte médicale.
            Directeur de Thèse : NKENLIFACK Marcellin Julius Antonio, Maître de
            Conférences",

        ];

        $publication_2_60 = [
            "type_publication_id" => 2,
            "annee_publication_id" => 19,

            "titre" => " Mémoire de Master de : KOUAM KAMDEM Igor Godefroy - sujet : Sécurité dans les
            systèmes de santé: cas du Cameroun.",

            "description_1" => " Mémoire de Master de : KOUAM KAMDEM Igor Godefroy - sujet : Sécurité dans les
            systèmes de santé: cas du Cameroun.
            Directeur de Thèse : NKENLIFACK Marcellin Julius Antonio, Maître de
            Conférences",

            "description_2" => " Mémoire de Master de : KOUAM KAMDEM Igor Godefroy - sujet : Sécurité dans les
            systèmes de santé: cas du Cameroun.
            Directeur de Thèse : NKENLIFACK Marcellin Julius Antonio, Maître de
            Conférences",

        ];

        $publication_2_61 = [
            "type_publication_id" => 2,
            "annee_publication_id" => 19,

            "titre" => " Mémoire de Mlle MATZE Laura Carole (Mle CM-UDS-14SCI1305) intitulé : \"Etude de
            la dynamique d’une classe de réseau de neurones de type Hopfield : analyse théorique et
            validation expérimentale\" (2018-2019).",

            "description_1" => "Mémoire de Mlle MATZE Laura Carole (Mle CM-UDS-14SCI1305) intitulé : \"Etude de
            la dynamique d’une classe de réseau de neurones de type Hopfield : analyse théorique et
            validation expérimentale\" (2018-2019). Directeur de Thèse : NKENLIFACK Marcellin Julius Antonio, Maître de
            Conférences",

            "description_2" => "Mémoire de Mlle MATZE Laura Carole (Mle CM-UDS-14SCI1305) intitulé : \"Etude de
            la dynamique d’une classe de réseau de neurones de type Hopfield : analyse théorique et
            validation expérimentale\" (2018-2019). Directeur de Thèse : NKENLIFACK Marcellin Julius Antonio, Maître de
            Conférences",

        ];

        $publication_2_62 = [
            "type_publication_id" => 2,
            "annee_publication_id" => 19,

            "titre" => "émoire de M. TANDOUMGANG DZOGO Hermann Smith (Matricule CM-UDS14SCI 0048) intitulé : \" Multi-stabilité et phénomènes de bifurcation dans un oscillateur
            de type Colpitts : analyse et application technologique \" (2018-2019).",

            "description_1" => "émoire de M. TANDOUMGANG DZOGO Hermann Smith (Matricule CM-UDS14SCI 0048) intitulé : \" Multi-stabilité et phénomènes de bifurcation dans un oscillateur
            de type Colpitts : analyse et application technologique \" (2018-2019).
            Directeur de Thèse : NKENLIFACK Marcellin Julius Antonio, Maître de Conférnces",

            "description_2" => "émoire de M. TANDOUMGANG DZOGO Hermann Smith (Matricule CM-UDS14SCI 0048) intitulé : \" Multi-stabilité et phénomènes de bifurcation dans un oscillateur
            de type Colpitts : analyse et application technologique \" (2018-2019).
            Directeur de Thèse : NKENLIFACK Marcellin Julius Antonio, Maître de Conférnces",

        ];

        // publication de type :Mémoires de niveau Bac+5 encadrés et soutenus => id = 2
        // annee 2020 => id = 20

        $publication_2_63 = [
            "type_publication_id" => 2,
            "annee_publication_id" => 20,

            "titre" => " Mémoire de Master de: KEUMEZE GUIMNANG Friedrich
            - sujet: Validation expérimentale des stratégies de commande d’un convertisseur de
            source de tension connecté au réseau sous cible DSP-TMS320-F2812",

            "description_1" => " Mémoire de Master de: KEUMEZE GUIMNANG Friedrich
            - sujet: Validation expérimentale des stratégies de commande d’un convertisseur de
            source de tension connecté au réseau sous cible DSP-TMS320-F2812.
            Directeur de Thèse : KENNE Godpromesse, Professeur.
            ",

            "description_2" => " Mémoire de Master de: KEUMEZE GUIMNANG Friedrich
            - sujet: Validation expérimentale des stratégies de commande d’un convertisseur de
            source de tension connecté au réseau sous cible DSP-TMS320-F2812.
            Directeur de Thèse : KENNE Godpromesse, Professeur.
            ",

        ];

        $publication_2_64 = [
            "type_publication_id" => 2,
            "annee_publication_id" => 20,

            "titre" => " Mémoire de Master de: NDJALLA ESSOH Ripolin Mondelli
            Page 21 sur 70
            - sujet: Contribution à la mise sur pied d’un outil d’aide à la validation expérimentale de
            l’algorithme incrémentation de la conductance: application aux systèmes photovoltaïques.
            ",

            "description_1" => " Mémoire de Master de: NDJALLA ESSOH Ripolin Mondelli
            Page 21 sur 70
            - sujet: Contribution à la mise sur pied d’un outil d’aide à la validation expérimentale de
            l’algorithme incrémentation de la conductance: application aux systèmes photovoltaïques.
            Directeur de Thèse : KENNE Godpromesse, Professeur.",

            "description_2" => " Mémoire de Master de: NDJALLA ESSOH Ripolin Mondelli
            Page 21 sur 70
            - sujet: Contribution à la mise sur pied d’un outil d’aide à la validation expérimentale de
            l’algorithme incrémentation de la conductance: application aux systèmes photovoltaïques.
            Directeur de Thèse : KENNE Godpromesse, Professeur.",

        ];

        $publication_2_65 = [
            "type_publication_id" => 2,
            "annee_publication_id" => 20,

            "titre" => " Mémoire de Master de: POUOMOGNE Franck Thierry
            - sujet: Contribution à la mise sur pied d’un banc d’essais pour la validation
            expérimentale de la commande extrémale (ESC) appliquée aux systèmes photovoltaïques.
            ",

            "description_1" => " Mémoire de Master de: POUOMOGNE Franck Thierry
            - sujet: Contribution à la mise sur pied d’un banc d’essais pour la validation
            expérimentale de la commande extrémale (ESC) appliquée aux systèmes photovoltaïques.
            Directeur de Thèse : KENNE Godpromesse, Professeur.",

            "description_2" => " Mémoire de Master de: POUOMOGNE Franck Thierry
            - sujet: Contribution à la mise sur pied d’un banc d’essais pour la validation
            expérimentale de la commande extrémale (ESC) appliquée aux systèmes photovoltaïques.
            Directeur de Thèse : KENNE Godpromesse, Professeur.",

        ];

        // publication de type :Mémoires de niveau Bac+5 encadrés et soutenus => id = 2
        // annee 2021 => id = 21

        $publication_2_66 = [
            "type_publication_id" => 2,
            "annee_publication_id" => 21,

            "titre" => "0-2021: Mémoire de Master de: DONGMO NONGNI Cécile Claire, matricule CMUDs-16SCI-0477 - sujet: Validation expérimentale d’un contrôleur non linéaire pour le
            suivi du point de puissance appliqué au système photovoltaïque.
            ",

            "description_1" => "0-2021: Mémoire de Master de: DONGMO NONGNI Cécile Claire, matricule CMUDs-16SCI-0477 - sujet: Validation expérimentale d’un contrôleur non linéaire pour le
suivi du point de puissance appliqué au système photovoltaïque.
Directeur du mémoire de Master : KENNE Godpromesse, Professeur",

            "description_2" => "0-2021: Mémoire de Master de: DONGMO NONGNI Cécile Claire, matricule CMUDs-16SCI-0477 - sujet: Validation expérimentale d’un contrôleur non linéaire pour le
            suivi du point de puissance appliqué au système photovoltaïque.
            Directeur du mémoire de Master : KENNE Godpromesse, Professeur"
        ];

        $publication_2_67 = [
            "type_publication_id" => 2,
            "annee_publication_id" => 21,

            "titre" => "021: Mémoire de Master de: GOMSEU THOUPE Stéphane, matricule CM-UDs16SCI-0227 - sujet: Optimisation de la puissance dans un système photovoltaïque
            connecté au réseau monophasé.",

            "021: Mémoire de Master de: GOMSEU THOUPE Stéphane, matricule CM-UDs16SCI-0227 - sujet: Optimisation de la puissance dans un système photovoltaïque
            connecté au réseau monophasé.
            Directeur du mémoire de Master : KENNE Godpromesse, Professeur.",

            "021: Mémoire de Master de: GOMSEU THOUPE Stéphane, matricule CM-UDs16SCI-0227 - sujet: Optimisation de la puissance dans un système photovoltaïque
            connecté au réseau monophasé.
            Directeur du mémoire de Master : KENNE Godpromesse, Professeur."
        ];

        $publication_2_68 = [
            "type_publication_id" => 2,
            "annee_publication_id" => 21,

            "titre" => "-2021: Mémoire de Master de: FOTSO KUATE Victor Calvin, Matricule : CMUDS-19SCI3072 - sujet: Modèle de détection intelligente par apprentissage : cas d’une
            foire aux questions sur la COVID-19.",

            "description_1" => "-2021: Mémoire de Master de: FOTSO KUATE Victor Calvin, Matricule : CMUDS-19SCI3072 - sujet: Modèle de détection intelligente par apprentissage : cas d’une
            foire aux questions sur la COVID-19.
            Directeur du mémoire de Master : NKENLIFACK Marcellin, Maître de Conférences.",

            "description_2" => "-2021: Mémoire de Master de: FOTSO KUATE Victor Calvin, Matricule : CMUDS-19SCI3072 - sujet: Modèle de détection intelligente par apprentissage : cas d’une
            foire aux questions sur la COVID-19.
            Directeur du mémoire de Master : NKENLIFACK Marcellin, Maître de Conférences."
        ];

        $publication_2_69 = [
            "type_publication_id" => 2,
            "annee_publication_id" => 21,

            "titre" => " 2020-2021: Mémoire de Master de: FOGOU KAMETIA Bellone Forelle, Matricule : -
            sujet: Mise Sur Pied d’une Application Mobile d’aide au Suivi des Patients Dans les
            Établissements Sanitaires au Cameroun : Application Au Système Bahmni.",

            "description_1" => " 2020-2021: Mémoire de Master de: FOGOU KAMETIA Bellone Forelle, Matricule : -
            sujet: Mise Sur Pied d’une Application Mobile d’aide au Suivi des Patients Dans les
            Établissements Sanitaires au Cameroun : Application Au Système Bahmni.
            Directeur du mémoire de Master : NKENLIFACK Marcellin, Maître de Conférences.",

            "description_2" => " 2020-2021: Mémoire de Master de: FOGOU KAMETIA Bellone Forelle, Matricule : -
            sujet: Mise Sur Pied d’une Application Mobile d’aide au Suivi des Patients Dans les
            Établissements Sanitaires au Cameroun : Application Au Système Bahmni.
            Directeur du mémoire de Master : NKENLIFACK Marcellin, Maître de Conférences."
        ];

        $publication_2_70 = [
            "type_publication_id" => 2,
            "annee_publication_id" => 21,

            "titre" => " 2020-2021: Mémoire de Master de: LOYIM LAMBOWO Franck Rovanold, matricule
            CM-UDS-19SCI2866 - sujet: Analyse, extraction des paramètres et différentiation des
            signaux : contribution au diagnostic de la maladie de Parkinson.",

            "description_1" => " 2020-2021: Mémoire de Master de: LOYIM LAMBOWO Franck Rovanold, matricule
            CM-UDS-19SCI2866 - sujet: Analyse, extraction des paramètres et différentiation des
            signaux : contribution au diagnostic de la maladie de Parkinson.
            Directeur du mémoire de Master : FOTSING TALLA Bernard, Chargé des Cours",

            "description_2" => " 2020-2021: Mémoire de Master de: LOYIM LAMBOWO Franck Rovanold, matricule
            CM-UDS-19SCI2866 - sujet: Analyse, extraction des paramètres et différentiation des
            signaux : contribution au diagnostic de la maladie de Parkinson.
            Directeur du mémoire de Master : FOTSING TALLA Bernard, Chargé des Cours"
        ];

        $publication_2_71 = [
            "type_publication_id" => 2,
            "annee_publication_id" => 21,

            "titre" => "020-2021: Mémoire de Master de: MBONE TAKOUMBENG Doris Brinda, matricule
            CM-UDS-16SC11832 - sujet: Poursuite du point de puissance d’un système
            photovoltaïque en utilisant une méthode d’apprentissage automatique.",

            "description_1" => "020-2021: Mémoire de Master de: MBONE TAKOUMBENG Doris Brinda, matricule
            CM-UDS-16SC11832 - sujet: Poursuite du point de puissance d’un système
            photovoltaïque en utilisant une méthode d’apprentissage automatique.
            Directeur du mémoire de Master : DJOUFACK Zacharie Isidore, Chargé de Cours.",

            "description_2" => "020-2021: Mémoire de Master de: MBONE TAKOUMBENG Doris Brinda, matricule
            CM-UDS-16SC11832 - sujet: Poursuite du point de puissance d’un système
            photovoltaïque en utilisant une méthode d’apprentissage automatique.
            Directeur du mémoire de Master : DJOUFACK Zacharie Isidore, Chargé de Cours."
        ];

        $publication_2_72 = [
            "type_publication_id" => 2,
            "annee_publication_id" => 21,

            "titre" => "020-2021: Mémoire de Master de: TALLA TAKAMTE Guy Bertrand, matricule CMUDs-15SC10634- sujet: Caractérisation de certains systèmes dynamiques en utilisant le
            plus petit indice d’alignement, le 0-1 Test et l’entropie.",

            "description_1" => "020-2021: Mémoire de Master de: TALLA TAKAMTE Guy Bertrand, matricule CMUDs-15SC10634- sujet: Caractérisation de certains systèmes dynamiques en utilisant le
            plus petit indice d’alignement, le 0-1 Test et l’entropie.
            Directeur du mémoire de Master : DJOUFACK Zacharie Isidore, Chargé de Cours",

            "description_2" => "020-2021: Mémoire de Master de: TALLA TAKAMTE Guy Bertrand, matricule CMUDs-15SC10634- sujet: Caractérisation de certains systèmes dynamiques en utilisant le
            plus petit indice d’alignement, le 0-1 Test et l’entropie.
            Directeur du mémoire de Master : DJOUFACK Zacharie Isidore, Chargé de Cours"
        ];

        $publication_2_73 = [
            "type_publication_id" => 2,
            "annee_publication_id" => 21,

            "titre" => ") 2020-2021: Mémoire de Master en Ingénierie des Télécommunications (Ecole Nationale
            Supérieure des Postes, des Télécommunications et des Technologies de l’Information et
            de la Communication – SUP’PTIC) de YONKEU Armel - Dimensioning of the ftth
            network of Camtel Ngaoundere and designing the cartography plan of the network.",

            "description_1" => ") 2020-2021: Mémoire de Master en Ingénierie des Télécommunications (Ecole Nationale
            Supérieure des Postes, des Télécommunications et des Technologies de l’Information et
            de la Communication – SUP’PTIC) de YONKEU Armel - Dimensioning of the ftth
            network of Camtel Ngaoundere and designing the cartography plan of the network.
            Directeur du mémoire de Master : TALLA TANKAM Narcisse, Chargé de Cours",

            "description_2" => ") 2020-2021: Mémoire de Master en Ingénierie des Télécommunications (Ecole Nationale
            Supérieure des Postes, des Télécommunications et des Technologies de l’Information et
            de la Communication – SUP’PTIC) de YONKEU Armel - Dimensioning of the ftth
            network of Camtel Ngaoundere and designing the cartography plan of the network.
            Directeur du mémoire de Master : TALLA TANKAM Narcisse, Chargé de Cours"
        ];

        $publication_2_74 = [
            "type_publication_id" => 2,
            "annee_publication_id" => 21,

            "titre" => " 2020-2021: Mémoire de Master en Géomatique, Aménagement du Territoire et Gestion
            des ressources (Université de Ngaoundéré) de : MENGUE MESSINA Odile Michèle,
            Matricule : 20B226LF - Insertion d'une application de cartographie dynamique dans la
            Plateforme web.easis.sie.com du Ministère de l’Environnement pour l’optimisation du
            suivi de la mise en œuvre des Plans de gestion environnementale et sociale
            (PGES)(Cameroun).",

            "description_1" => " 2020-2021: Mémoire de Master en Géomatique, Aménagement du Territoire et Gestion
            des ressources (Université de Ngaoundéré) de : MENGUE MESSINA Odile Michèle,
            Matricule : 20B226LF - Insertion d'une application de cartographie dynamique dans la
            Plateforme web.easis.sie.com du Ministère de l’Environnement pour l’optimisation du
            suivi de la mise en œuvre des Plans de gestion environnementale et sociale
            (PGES)(Cameroun).
            Directeur du mémoire de Master : TALLA TANKAM Narcisse, Chargé de Cours",

            "description_2" => " 2020-2021: Mémoire de Master en Géomatique, Aménagement du Territoire et Gestion
            des ressources (Université de Ngaoundéré) de : MENGUE MESSINA Odile Michèle,
            Matricule : 20B226LF - Insertion d'une application de cartographie dynamique dans la
            Plateforme web.easis.sie.com du Ministère de l’Environnement pour l’optimisation du
            suivi de la mise en œuvre des Plans de gestion environnementale et sociale
            (PGES)(Cameroun).
            Directeur du mémoire de Master : TALLA TANKAM Narcisse, Chargé de Cours"
        ];

        $publication_2_75 = [
            "type_publication_id" => 2,
            "annee_publication_id" => 21,

            "titre" => "2020-2021: Mémoire de Master en Géomatique, Aménagement du Territoire et Gestion
            des ressources (Université de Ngaoundéré) de : DIALLO Abdourahmane Daly,Matricule : 19B916LF - Élaboration d’un Géoportail pour l’amélioration de la diffusion
            de l’information: cas du projet AgriFARM Haute et Moyenne Guinée.",

            "description_1" => " 2020-2021: Mémoire de Master en Géomatique, Aménagement du Territoire et Gestion
            des ressources (Université de Ngaoundéré) de : DIALLO Abdourahmane Daly,Matricule : 19B916LF - Élaboration d’un Géoportail pour l’amélioration de la diffusion
            de l’information: cas du projet AgriFARM Haute et Moyenne Guinée.
            Directeur du mémoire de Master : TALLA TANKAM Narcisse, Chargé de Cours.",

            "description_2" => " 2020-2021: Mémoire de Master en Géomatique, Aménagement du Territoire et Gestion
            des ressources (Université de Ngaoundéré) de : DIALLO Abdourahmane Daly,Matricule : 19B916LF - Élaboration d’un Géoportail pour l’amélioration de la diffusion
            de l’information: cas du projet AgriFARM Haute et Moyenne Guinée.
            Directeur du mémoire de Master : TALLA TANKAM Narcisse, Chargé de Cours."
        ];

        $publication_2_76 = [
            "type_publication_id" => 2,
            "annee_publication_id" => 21,

            "titre" => " 2020-2021: Mémoire de Master en Géomatique, Aménagement du Territoire et Gestion
            des ressources (Université de Ngaoundéré) de : TOURE Ibrahim, Matricule : 19B922LF -
            Analyse des mutations socio-spatiales et environnementales induites par l’exploitation
            minière au Burkina Faso à l’aide des outils de la géomatique : Cas de commune de
            Houndé.",

            "description_1" => " 2020-2021: Mémoire de Master en Géomatique, Aménagement du Territoire et Gestion
            des ressources (Université de Ngaoundéré) de : TOURE Ibrahim, Matricule : 19B922LF -
            Analyse des mutations socio-spatiales et environnementales induites par l’exploitation
            minière au Burkina Faso à l’aide des outils de la géomatique : Cas de commune de
            Houndé.
            Directeur du mémoire de Master : TALLA TANKAM Narcisse, Chargé de Cours.",

            "description_2" => " 2020-2021: Mémoire de Master en Géomatique, Aménagement du Territoire et Gestion
            des ressources (Université de Ngaoundéré) de : TOURE Ibrahim, Matricule : 19B922LF -
            Analyse des mutations socio-spatiales et environnementales induites par l’exploitation
            minière au Burkina Faso à l’aide des outils de la géomatique : Cas de commune de
            Houndé.
            Directeur du mémoire de Master : TALLA TANKAM Narcisse, Chargé de Cours."
        ];

        $publication_2_77 = [
            "type_publication_id" => 2,
            "annee_publication_id" => 21,

            "titre" => "2020-2021: Mémoire de Master en Géomatique, Aménagement du Territoire et Gestion
            des ressources (Université de Ngaoundéré) de : TCHOUTCHUIE CHEKUIE Georges
            Patric, Matricule : 20B236LF – Contribution de la géomatique au suivi de l’effectivité et
            de l’efficacité de la mise en œuvre des plans de gestion environnementale et sociale
            (PGES) dans la Région administrative du Sud (Cameroun).",

            "description_1" => "2020-2021: Mémoire de Master en Géomatique, Aménagement du Territoire et Gestion
            des ressources (Université de Ngaoundéré) de : TCHOUTCHUIE CHEKUIE Georges
            Patric, Matricule : 20B236LF – Contribution de la géomatique au suivi de l’effectivité et
            de l’efficacité de la mise en œuvre des plans de gestion environnementale et sociale
            (PGES) dans la Région administrative du Sud (Cameroun).
            Directeur du mémoire de Master : TALLA TANKAM Narcisse, Chargé de Cours.",

            "description_2" => "2020-2021: Mémoire de Master en Géomatique, Aménagement du Territoire et Gestion
            des ressources (Université de Ngaoundéré) de : TCHOUTCHUIE CHEKUIE Georges
            Patric, Matricule : 20B236LF – Contribution de la géomatique au suivi de l’effectivité et
            de l’efficacité de la mise en œuvre des plans de gestion environnementale et sociale
            (PGES) dans la Région administrative du Sud (Cameroun).
            Directeur du mémoire de Master : TALLA TANKAM Narcisse, Chargé de Cours."
        ];

        $publication_2_78 = [
            "type_publication_id" => 2,
            "annee_publication_id" => 21,

            "titre" => " 2020-2021: Mémoire de Master en Géomatique, Aménagement du Territoire et Gestion
            des ressources (Université de Ngaoundéré) de : TONGO FOUELEFACK Patience,
            Matricule : 20B238LF - Analyse de l’abondance et de la distribution spatiale des
            chimpanzés dans le Parc national de Mpem et Djim.",

            "description_1" => " 2020-2021: Mémoire de Master en Géomatique, Aménagement du Territoire et Gestion
            des ressources (Université de Ngaoundéré) de : TONGO FOUELEFACK Patience,
            Matricule : 20B238LF - Analyse de l’abondance et de la distribution spatiale des
            chimpanzés dans le Parc national de Mpem et Djim.
            Directeur du mémoire de Master : TALLA TANKAM Narcisse, Chargé de Cours",

            "description_2" => " 2020-2021: Mémoire de Master en Géomatique, Aménagement du Territoire et Gestion
            des ressources (Université de Ngaoundéré) de : TONGO FOUELEFACK Patience,
            Matricule : 20B238LF - Analyse de l’abondance et de la distribution spatiale des
            chimpanzés dans le Parc national de Mpem et Djim.
            Directeur du mémoire de Master : TALLA TANKAM Narcisse, Chargé de Cours"
        ];

        $publication_2_79 = [
            "type_publication_id" => 2,
            "annee_publication_id" => 21,

            "titre" => " 2020-2021: Mémoire de Master en Sécurité des Systèmes Numériques (Université de
            Bourgogne en France) de : Ghislain DITA, Authentification des utilisateurs dans un
            dispositif ouvert de télé-enseignement (Moodle) par reconnaissance d'Iris
            ",

            "description_1" => " 2020-2021: Mémoire de Master en Sécurité des Systèmes Numériques (Université de
            Bourgogne en France) de : Ghislain DITA, Authentification des utilisateurs dans un
            dispositif ouvert de télé-enseignement (Moodle) par reconnaissance d'Iris
            ",

            "description_2" => " 2020-2021: Mémoire de Master en Sécurité des Systèmes Numériques (Université de
            Bourgogne en France) de : Ghislain DITA, Authentification des utilisateurs dans un
            dispositif ouvert de télé-enseignement (Moodle) par reconnaissance d'Iris
            "
        ];

        $publication_2_80 = [
            "type_publication_id" => 2,
            "annee_publication_id" => 21,

            "titre" => "2020-2021: Mémoire de Master en Sécurité des Systèmes Numériques (Université de
            Bourgogne en France) de : Jeannette Valérie Herine IPOUK, Authentification des
            utilisateurs dans un dispositif ouvert de télé-enseignement (Moodle) par reconnaissance
            facial.",

            "description_1" => "2020-2021: Mémoire de Master en Sécurité des Systèmes Numériques (Université de
            Bourgogne en France) de : Jeannette Valérie Herine IPOUK, Authentification des
            utilisateurs dans un dispositif ouvert de télé-enseignement (Moodle) par reconnaissance
            facial.
            Directeur du mémoire de Master : TALLA TANKAM Narcisse, Chargé de Cours.",

            "description_2" => "2020-2021: Mémoire de Master en Sécurité des Systèmes Numériques (Université de
            Bourgogne en France) de : Jeannette Valérie Herine IPOUK, Authentification des
            utilisateurs dans un dispositif ouvert de télé-enseignement (Moodle) par reconnaissance
            facial.
            Directeur du mémoire de Master : TALLA TANKAM Narcisse, Chargé de Cours."
        ];

        $publication_2_81 = [
            "type_publication_id" => 2,
            "annee_publication_id" => 21,

            "titre" => " 2020-2021: Mémoire de Master en Sécurité des Systèmes Numériques (Université de
            Bourgogne en France) de : Messu Feguem cyriane - Authentification des utilisateurs dans
            un dispositif ouvert de télé-enseignement (Moodle) par reconnaissance d’empreintes
            digitales.",

            "description_1" => " 2020-2021: Mémoire de Master en Sécurité des Systèmes Numériques (Université de
            Bourgogne en France) de : Messu Feguem cyriane - Authentification des utilisateurs dans
            un dispositif ouvert de télé-enseignement (Moodle) par reconnaissance d’empreintes
            digitales.
            Directeur du mémoire de Master : TALLA TANKAM Narcisse, Chargé de Cours.",

            "description_2" => " 2020-2021: Mémoire de Master en Sécurité des Systèmes Numériques (Université de
            Bourgogne en France) de : Messu Feguem cyriane - Authentification des utilisateurs dans
            un dispositif ouvert de télé-enseignement (Moodle) par reconnaissance d’empreintes
            digitales.
            Directeur du mémoire de Master : TALLA TANKAM Narcisse, Chargé de Cours."
        ];

        $publication_2_82 = [
            "type_publication_id" => 2,
            "annee_publication_id" => 21,

            "titre" => " 2020-2021: Mémoire de Master de: BAMENE LONTSI Borel Dilane, matricule CMUDs-19SCI-2594 - sujet: telemedecine based digital ECG monitoring for heart diseases
            prevention an curing.
            ",

            "description_1" => " 2020-2021: Mémoire de Master de: BAMENE LONTSI Borel Dilane, matricule CMUDs-19SCI-2594 - sujet: telemedecine based digital ECG monitoring for heart diseases
            prevention an curing.
            Directeur du mémoire de Master : MBOUPDA PONE Justin Roger, Maître de
            Conférences.
            ",

            "description_2" => " 2020-2021: Mémoire de Master de: BAMENE LONTSI Borel Dilane, matricule CMUDs-19SCI-2594 - sujet: telemedecine based digital ECG monitoring for heart diseases
            prevention an curing.
            Directeur du mémoire de Master : MBOUPDA PONE Justin Roger, Maître de
            Conférences.
            "
        ];

        $publication_2_83 = [
            "type_publication_id" => 2,
            "annee_publication_id" => 21,

            "titre" => " 2020-2021: Mémoire de Master de: KEMLENACK FEULEFACK Idriss Rochinel,
            matricule CM-UDs-18SCI-2601 - sujet: contribution à la génération des nombres pseudoaléatoires avec un nouvel oscillateur à memristor : vérification par microcontroleur.",

            "description_1" => " 2020-2021: Mémoire de Master de: KEMLENACK FEULEFACK Idriss Rochinel,
            matricule CM-UDs-18SCI-2601 - sujet: contribution à la génération des nombres pseudoaléatoires avec un nouvel oscillateur à memristor : vérification par microcontroleur.
            Directeur du mémoire de Master : MBOUPDA PONE Justin Roger, Maître de
            Conférences",

            "description_2" => " 2020-2021: Mémoire de Master de: KEMLENACK FEULEFACK Idriss Rochinel,
            matricule CM-UDs-18SCI-2601 - sujet: contribution à la génération des nombres pseudoaléatoires avec un nouvel oscillateur à memristor : vérification par microcontroleur.
            Directeur du mémoire de Master : MBOUPDA PONE Justin Roger, Maître de
            Conférences"
        ];

        $publication_2_84 = [
            "type_publication_id" => 2,
            "annee_publication_id" => 21,

            "titre" => " 2020-2021: Mémoire de Master de: AYEMTSA KUETE Gideon Pagnol, matricule CMUDs-16SCI-0398 - sujet: Etude dynamique et expérimentale d’un nouveau oscillateur
            hyperjerk à non-linéarité quintique.s",

            "description_1" => " 2020-2021: Mémoire de Master de: AYEMTSA KUETE Gideon Pagnol, matricule CMUDs-16SCI-0398 - sujet: Etude dynamique et expérimentale d’un nouveau oscillateur
            hyperjerk à non-linéarité quintique.
            Directeur du mémoire de Master : MBOUPDA PONE Justin Roger, Maitre de
            Conférences",

            "description_2" => " 2020-2021: Mémoire de Master de: AYEMTSA KUETE Gideon Pagnol, matricule CMUDs-16SCI-0398 - sujet: Etude dynamique et expérimentale d’un nouveau oscillateur
            hyperjerk à non-linéarité quintique.
            Directeur du mémoire de Master : MBOUPDA PONE Justin Roger, Maitre de
            Conférences"
        ];

        $publication_2_85 = [
            "type_publication_id" => 2,
            "annee_publication_id" => 21,

            "titre" => "2020-2021 : Mémoire de Master de : KOUBEU PAPEMSI Paloma Matricule 20U70020.
            - sujet : Moteurs synchrones à aimants permanents : analyse de la dynamique, contrôle et
            implémentation du circuit électronique, Université de Douala.
            ",

            "description_1" => "2020-2021 : Mémoire de Master de : KOUBEU PAPEMSI Paloma Matricule 20U70020.
            - sujet : Moteurs synchrones à aimants permanents : analyse de la dynamique, contrôle et
            implémentation du circuit électronique, Université de Douala.
            Directeur du mémoire de Master : MBOUPDA PONE Justin Roger, Maitre de
            Conférences.
            ",

            "description_2" => "2020-2021 : Mémoire de Master de : KOUBEU PAPEMSI Paloma Matricule 20U70020.
            - sujet : Moteurs synchrones à aimants permanents : analyse de la dynamique, contrôle et
            implémentation du circuit électronique, Université de Douala.
            Directeur du mémoire de Master : MBOUPDA PONE Justin Roger, Maitre de
            Conférences.
            "
        ];

        $publication_2_86 = [
            "type_publication_id" => 2,
            "annee_publication_id" => 21,

            "titre" => " 2020-2021: Mémoire de Master de: NGOUDJOU ZEUGUE Gérold, matricule CM-UDS16SCI0733 - sujet: Contribution à la dynamique et à l’implémentation d’un système chaotique 4D par microcontrôleur et application du système à la communication
            sécurisée.",

            "description_1" => " 2020-2021: Mémoire de Master de: NGOUDJOU ZEUGUE Gérold, matricule CM-UDS16SCI0733 - sujet: Contribution à la dynamique et à l’implémentation d’un système chaotique 4D par microcontrôleur et application du système à la communication
            sécurisée.
            Directeur du mémoire de Master : KAPCHE TAGNE Francois, Maitre de Conférences",

            "description_2" => " 2020-2021: Mémoire de Master de: NGOUDJOU ZEUGUE Gérold, matricule CM-UDS16SCI0733 - sujet: Contribution à la dynamique et à l’implémentation d’un système chaotique 4D par microcontrôleur et application du système à la communication
            sécurisée.
            Directeur du mémoire de Master : KAPCHE TAGNE Francois, Maitre de ConférencesConférences.
            "
        ];

        $publication_2_87 = [
            "type_publication_id" => 2,
            "annee_publication_id" => 21,

            "titre" => "20-2021: Mémoire de Master de: LEWE YETENDJE Jean Hervé, matricule CM-UDS15SCI0469 - sujet: Dynamique et implémentation d’un réseau de neurones de type
            Hopfield dans un microcontrôleur.",

            "description_1" => "20-2021: Mémoire de Master de: LEWE YETENDJE Jean Hervé, matricule CM-UDS15SCI0469 - sujet: Dynamique et implémentation d’un réseau de neurones de type
            Hopfield dans un microcontrôleur.
            Directeur du mémoire de Master : KAPCHE TAGNE Francois, Maitre de Conférences.",

            "description_2" => "20-2021: Mémoire de Master de: LEWE YETENDJE Jean Hervé, matricule CM-UDS15SCI0469 - sujet: Dynamique et implémentation d’un réseau de neurones de type
            Hopfield dans un microcontrôleur.
            Directeur du mémoire de Master : KAPCHE TAGNE Francois, Maitre de Conférences."
        ];

        $publication_2_88 = [
            "type_publication_id" => 2,
            "annee_publication_id" => 21,

            "titre" => "20-2021: Mémoire de Master de: NKENGNE TCHASSEM Stève, matricule CM-UDs19SCI3016 - sujet: Etude des Systèmes dynamiques dans les machines et validation
            expérimentales : Application au Brusless motors.",

            "description_1" => "20-2021: Mémoire de Master de: NKENGNE TCHASSEM Stève, matricule CM-UDs19SCI3016 - sujet: Etude des Systèmes dynamiques dans les machines et validation
            expérimentales : Application au Brusless motors.
            Directeur du mémoire de Master : CHEUKEM André, Maitre de Conférences.",

            "description_2" => "20-2021: Mémoire de Master de: NKENGNE TCHASSEM Stève, matricule CM-UDs19SCI3016 - sujet: Etude des Systèmes dynamiques dans les machines et validation
            expérimentales : Application au Brusless motors.
            Directeur du mémoire de Master : CHEUKEM André, Maitre de Conférences."
        ];

        $publication_2_89 = [
            "type_publication_id" => 2,
            "annee_publication_id" => 21,

            "titre" => "2020-2021: Mémoire de Master de: NKEANGYI Lawrencia NANGLEFACK, matricule
            CM-UDs-19SCI3125 - sujet: Contribution to Optimal placement of FACTS devices in
            Electrical network: Application to the Southern Interconnecd Grid (SIG).",

            "description_1" => "2020-2021: Mémoire de Master de: NKEANGYI Lawrencia NANGLEFACK, matricule
            CM-UDs-19SCI3125 - sujet: Contribution to Optimal placement of FACTS devices in
            Electrical network: Application to the Southern Interconnecd Grid (SIG).
            Directeur du mémoire de Master : CHEUKEM André, Maitre de Conférences",

            "description_2" => "2020-2021: Mémoire de Master de: NKEANGYI Lawrencia NANGLEFACK, matricule
            CM-UDs-19SCI3125 - sujet: Contribution to Optimal placement of FACTS devices in
            Electrical network: Application to the Southern Interconnecd Grid (SIG).
            Directeur du mémoire de Master : CHEUKEM André, Maitre de Conférences"
        ];

        $publication_2_90 = [
            "type_publication_id" => 2,
            "annee_publication_id" => 21,

            "titre" => " 2020-2021 Mémoire de Master de: SIMO TENKEP Fabrice, matricule CM-UDs19SCI2191 – sujet: Etude et Simulation de l’impact des dispositifs FACTS sur l’indice de
            stabilité des réseaux électriques: Application au RIS.
            ",

            "description_1" => " 2020-2021 Mémoire de Master de: SIMO TENKEP Fabrice, matricule CM-UDs19SCI2191 – sujet: Etude et Simulation de l’impact des dispositifs FACTS sur l’indice de
            stabilité des réseaux électriques: Application au RIS.
            Directeur du mémoire de Master : CHEUKEM André, Maitre de Conférences.
            ",

            "description_2" => " 2020-2021 Mémoire de Master de: SIMO TENKEP Fabrice, matricule CM-UDs19SCI2191 – sujet: Etude et Simulation de l’impact des dispositifs FACTS sur l’indice de
            stabilité des réseaux électriques: Application au RIS.
            Directeur du mémoire de Master : CHEUKEM André, Maitre de Conférences.
            "
        ];


        // publication de type :Mémoires de niveau Bac+5 encadrés et soutenus => id = 2
        // annee 2021 => id = 22

        $publication_2_91 = [
            "type_publication_id" => 2,
            "annee_publication_id" => 22,

            "titre" => "2021-2022: Mémoire de Master de: KUATE POLLA Karel Junior, matricule CM-UDS20SCI0406 - sujet: Commande du régulateur de puissance interface pour l’amélioration
            de la stabilité des réseaux électriques.",

            "description_1" => "2021-2022: Mémoire de Master de: KUATE POLLA Karel Junior, matricule CM-UDS20SCI0406 - sujet: Commande du régulateur de puissance interface pour l’amélioration
            de la stabilité des réseaux électriques.
            Directeur du mémoire de Master : KENNE Godpromesse, Professeur.",

            "description_2" => "2021-2022: Mémoire de Master de: KUATE POLLA Karel Junior, matricule CM-UDS20SCI0406 - sujet: Commande du régulateur de puissance interface pour l’amélioration
            de la stabilité des réseaux électriques.
            Directeur du mémoire de Master : KENNE Godpromesse, Professeur."
        ];

        $publication_2_92 = [
            "type_publication_id" => 2,
            "annee_publication_id" => 22,

            "titre" => "021-2022: Mémoire de Master de: NGOUNOU DJOUKA Honorine, matricule CMUDS-16SCI1974 - sujet: Implémentation sur cible Arduino d’une commande PI :
            Application aux convertisseurs de source de tension.",

            "description_1" => "021-2022: Mémoire de Master de: NGOUNOU DJOUKA Honorine, matricule CMUDS-16SCI1974 - sujet: Implémentation sur cible Arduino d’une commande PI :
            Application aux convertisseurs de source de tension.
            Directeur du mémoire de Master : KENNE Godpromesse, Professeur.",

            "description_2" => "021-2022: Mémoire de Master de: NGOUNOU DJOUKA Honorine, matricule CMUDS-16SCI1974 - sujet: Implémentation sur cible Arduino d’une commande PI :
            Application aux convertisseurs de source de tension.
            Directeur du mémoire de Master : KENNE Godpromesse, Professeur."
        ];

        $publication_2_93 = [
            "type_publication_id" => 2,
            "annee_publication_id" => 22,

            "titre" => "021-2022: Mémoire de Master de: DJIFACK Ulrich Duplex, Matricule : CM-UDS17SCI1846 - sujet: Plateforme d’E-gouvernance : Génération automatique de textes par
            apprentissage en profondeur.",

            "description_1" => "021-2022: Mémoire de Master de: DJIFACK Ulrich Duplex, Matricule : CM-UDS17SCI1846 - sujet: Plateforme d’E-gouvernance : Génération automatique de textes par
            apprentissage en profondeur.
            Directeur du mémoire de Master : NKENLIFACK Marcellin, Maître de Conférences",

            "description_2" => "021-2022: Mémoire de Master de: DJIFACK Ulrich Duplex, Matricule : CM-UDS17SCI1846 - sujet: Plateforme d’E-gouvernance : Génération automatique de textes par
            apprentissage en profondeur.
            Directeur du mémoire de Master : NKENLIFACK Marcellin, Maître de Conférences"
        ];

        $publication_2_94 = [
            "type_publication_id" => 2,
            "annee_publication_id" => 22,

            "titre" => "21-2022: Mémoire de Master de: KAYO TCHAMO Yvan Parfait, Matricule : CMUDS-17SCI0978 - sujet: Une approche basée sur les modèles pour détection d’anomalies
            dans les systèmes informatisés.",

            "description_1" => "21-2022: Mémoire de Master de: KAYO TCHAMO Yvan Parfait, Matricule : CMUDS-17SCI0978 - sujet: Une approche basée sur les modèles pour détection d’anomalies
            dans les systèmes informatisés.
            Directeur du mémoire de Master : NKENLIFACK Marcellin, Maître de Conférences",

            "description_2" => "21-2022: Mémoire de Master de: KAYO TCHAMO Yvan Parfait, Matricule : CMUDS-17SCI0978 - sujet: Une approche basée sur les modèles pour détection d’anomalies
            dans les systèmes informatisés.
            Directeur du mémoire de Master : NKENLIFACK Marcellin, Maître de Conférences"
        ];

        $publication_2_95 = [
            "type_publication_id" => 2,
            "annee_publication_id" => 22,

            "titre" => " 2021-2022: Mémoire de Master de: AJUAMUNGU MUIBOMBE Michael, Matricule :
            CM-UDS-21SCI1803 - sujet: Plateforme d’E-gouvernance : Mécanisme de sécurité des
            échanges multi-niveaux des données sur les infractions routières commises.",

            "description_1" => " 2021-2022: Mémoire de Master de: AJUAMUNGU MUIBOMBE Michael, Matricule :
            CM-UDS-21SCI1803 - sujet: Plateforme d’E-gouvernance : Mécanisme de sécurité des
            échanges multi-niveaux des données sur les infractions routières commises.
            Directeur du mémoire de Master : NKENLIFACK Marcellin, Maître de Conférences",

            "description_2" => " 2021-2022: Mémoire de Master de: AJUAMUNGU MUIBOMBE Michael, Matricule :
            CM-UDS-21SCI1803 - sujet: Plateforme d’E-gouvernance : Mécanisme de sécurité des
            échanges multi-niveaux des données sur les infractions routières commises.
            Directeur du mémoire de Master : NKENLIFACK Marcellin, Maître de Conférences"
        ];

        $publication_2_96 = [
            "type_publication_id" => 2,
            "annee_publication_id" => 22,

            "titre" => "21-2022: Mémoire de Master de : TCHOUTEZO William Faniel, matricule CM-UDS20SCI2048 - sujet: « Contribution au diagnostic assisté par ordinateur de la maladie de
            Parkinson : implémentation des techniques d’analyse et de réduction de dimension des
            signaux de Parkinson ».",

            "description_1" => "21-2022: Mémoire de Master de : TCHOUTEZO William Faniel, matricule CM-UDS20SCI2048 - sujet: « Contribution au diagnostic assisté par ordinateur de la maladie de
            Parkinson : implémentation des techniques d’analyse et de réduction de dimension des
            signaux de Parkinson ».
            Directeur du mémoire de Master : CHIME Alex, Chargé des Cours",

            "description_2" => "21-2022: Mémoire de Master de : TCHOUTEZO William Faniel, matricule CM-UDS20SCI2048 - sujet: « Contribution au diagnostic assisté par ordinateur de la maladie de
            Parkinson : implémentation des techniques d’analyse et de réduction de dimension des
            signaux de Parkinson ».
            Directeur du mémoire de Master : CHIME Alex, Chargé des Cours"
        ];

        $publication_2_97 = [
            "type_publication_id" => 2,
            "annee_publication_id" => 22,

            "titre" => " 2021-2022: Mémoire de Master de: KUAJO Darlin, matricule CM-UDS-19SCI0673 -
            sujet: Une approche hybride de recommandation des produits dans un site de ecommerce.",

            "description_1" => " 2021-2022: Mémoire de Master de: KUAJO Darlin, matricule CM-UDS-19SCI0673 -
            sujet: Une approche hybride de recommandation des produits dans un site de ecommerce.
            Directeur du mémoire de Master : FOTSING TALLA Bernard, Chargé des Cours.",

            "description_2" => " 2021-2022: Mémoire de Master de: KUAJO Darlin, matricule CM-UDS-19SCI0673 -
            sujet: Une approche hybride de recommandation des produits dans un site de ecommerce.
            Directeur du mémoire de Master : FOTSING TALLA Bernard, Chargé des Cours."
        ];

        $publication_2_98 = [
            "type_publication_id" => 2,
            "annee_publication_id" => 22,

            "titre" => " 2021-2022: Mémoire de Master de SONFACK TSAMO Charnelle Kerolle, Matricule:
            CM-UDS-16SCI1236, Sujet: Contribution to the study of the chaotic and hyperchaotic dynamics of the Lu system: Theoretical study, electronic implementation and some
            applications.",

            "description_1" => " 2021-2022: Mémoire de Master de SONFACK TSAMO Charnelle Kerolle, Matricule:
            CM-UDS-16SCI1236, Sujet: Contribution to the study of the chaotic and hyperchaotic dynamics of the Lu system: Theoretical study, electronic implementation and some
            applications.
            Directeur du mémoire de Master : KOM Guillaume Honoré, Maître de Conférences.",

            "description_2" => " 2021-2022: Mémoire de Master de SONFACK TSAMO Charnelle Kerolle, Matricule:
            CM-UDS-16SCI1236, Sujet: Contribution to the study of the chaotic and hyperchaotic dynamics of the Lu system: Theoretical study, electronic implementation and some
            applications.
            Directeur du mémoire de Master : KOM Guillaume Honoré, Maître de Conférences."
        ];

        $publication_2_99 = [
            "type_publication_id" => 2,
            "annee_publication_id" => 22,

            "titre" => " 2021-2022: Master’s thesis of: Nenying Austin Yuah, registration number:
            uba19e3006, subject: implementation of a driver’s drowsiness detection system: a case
            study at Amour Mezam co. Ltd. Bamenda.
            ",

            "description_1" => " 2021-2022: Master’s thesis of: Nenying Austin Yuah, registration number:
            uba19e3006, subject: implementation of a driver’s drowsiness detection system: a case
            study at Amour Mezam co. Ltd. Bamenda.
            Directeur du mémoire de Master : FOKO SINDJOUNG Miguel Landry, Chargé de Cours.
            ",

            "description_2" => " 2021-2022: Master’s thesis of: Nenying Austin Yuah, registration number:
            uba19e3006, subject: implementation of a driver’s drowsiness detection system: a case
            study at Amour Mezam co. Ltd. Bamenda.
            Directeur du mémoire de Master : FOKO SINDJOUNG Miguel Landry, Chargé de Cours.
            "
        ];

        $publication_2_100 = [
            "type_publication_id" => 2,
            "annee_publication_id" => 22,

            "titre" => "2021-2022: Master’s thesis of: Tatiana Nsei Geh, registration number: uba19e3008,
            subject: setting up an information technology infrastructure at ecomnet.
            ",

            "description_1" => "2021-2022: Master’s thesis of: Tatiana Nsei Geh, registration number: uba19e3008,
            subject: setting up an information technology infrastructure at ecomnet.
            Directeur du mémoire de Master : FOKO SINDJOUNG Miguel Landry, Chargé de Cours.
            ",

            "description_2" => "2021-2022: Master’s thesis of: Tatiana Nsei Geh, registration number: uba19e3008,
            subject: setting up an information technology infrastructure at ecomnet.
            Directeur du mémoire de Master : FOKO SINDJOUNG Miguel Landry, Chargé de Cours.
            "
        ];

        $publication_2_101 = [
            "type_publication_id" => 2,
            "annee_publication_id" => 22,

            "titre" => "2021-2022: Mémoire de Master de: KUETE TAKENZO, Geoges Cédric, matricule CMUDS-20SCI0407 - sujet: Contribution à la modélisation et à l'analyse dynamique d'une
            nouvelle version de l'oscillateur chaotique de Colpitts : Application à la sécurisation des
            images.",

            "description_1" => "2021-2022: Mémoire de Master de: KUETE TAKENZO, Geoges Cédric, matricule CMUDS-20SCI0407 - sujet: Contribution à la modélisation et à l'analyse dynamique d'une
            nouvelle version de l'oscillateur chaotique de Colpitts : Application à la sécurisation des
            images.
            Directeur du mémoire de Master : DJOUFACK Zacharie Isidore, Chargé de Cours.",

            "description_2" => "2021-2022: Mémoire de Master de: KUETE TAKENZO, Geoges Cédric, matricule CMUDS-20SCI0407 - sujet: Contribution à la modélisation et à l'analyse dynamique d'une
            nouvelle version de l'oscillateur chaotique de Colpitts : Application à la sécurisation des
            images.
            Directeur du mémoire de Master : DJOUFACK Zacharie Isidore, Chargé de Cours.",
        ];

        $publication_2_102 = [
            "type_publication_id" => 2,
            "annee_publication_id" => 22,

            "titre" => " 2021-2022: Mémoire de Master de: KOAGNE LONGPA TAMO Silas, matricule
            CM-UDS-20SCI2145 - sujet: Specification and implementation of analog artificial neural
            networks.",

            "description_1" => " 2021-2022: Mémoire de Master de: KOAGNE LONGPA TAMO Silas, matricule
            CM-UDS-20SCI2145 - sujet: Specification and implementation of analog artificial neural
            networks.
            Directeur du mémoire de Master : DJIMELI TSAJIO Alain Bernard, Chargé de Cours, Chargé de Cours.",

            "description_2" => " 2021-2022: Mémoire de Master de: KOAGNE LONGPA TAMO Silas, matricule
            CM-UDS-20SCI2145 - sujet: Specification and implementation of analog artificial neural
            networks.
            Directeur du mémoire de Master : DJIMELI TSAJIO Alain Bernard, Chargé de Cours, Chargé de Cours.",
        ];

        $publication_2_103 = [
            "type_publication_id" => 2,
            "annee_publication_id" => 22,

            "titre" => "2021-2022: Mémoire de Master de: TCHUENMEGNE NOUMBISSI Lisette,
            matricule CM-UDS-20SCI1219 - sujet: Contribution à la vidéosurveillance de patients
            perfusés.",

            "description_1" => "2021-2022: Mémoire de Master de: TCHUENMEGNE NOUMBISSI Lisette,
            matricule CM-UDS-20SCI1219 - sujet: Contribution à la vidéosurveillance de patients
            perfusés.
            Directeur du mémoire de Master : DJIMELI TSAJIO Alain Bernard, Chargé de Cours",

            "description_2" => "2021-2022: Mémoire de Master de: TCHUENMEGNE NOUMBISSI Lisette,
            matricule CM-UDS-20SCI1219 - sujet: Contribution à la vidéosurveillance de patients
            perfusés.
            Directeur du mémoire de Master : DJIMELI TSAJIO Alain Bernard, Chargé de Cours",
        ];

        $publication_2_104 = [
            "type_publication_id" => 2,
            "annee_publication_id" => 22,

            "titre" => "021-2022 : Mémoire de Master de: TSAFACK Edouarde Assumpta, matricule CMUDS-20SCI0743-Sujet : Contribution à l’analyse dynamique à l’ordre fractionnaire d’un
            système hyperchaotique de Lü.",

            "description_1" => "021-2022 : Mémoire de Master de: TSAFACK Edouarde Assumpta, matricule CMUDS-20SCI0743-Sujet : Contribution à l’analyse dynamique à l’ordre fractionnaire d’un
            système hyperchaotique de Lü.
            Directeur du mémoire de Master : TALA TEBUE Eric, Chargé de Cours.",

            "description_2" => "021-2022 : Mémoire de Master de: TSAFACK Edouarde Assumpta, matricule CMUDS-20SCI0743-Sujet : Contribution à l’analyse dynamique à l’ordre fractionnaire d’un
            système hyperchaotique de Lü.
            Directeur du mémoire de Master : TALA TEBUE Eric, Chargé de Cours.",
        ];

        $publication_2_105 = [
            "type_publication_id" => 2,
            "annee_publication_id" => 22,

            "titre" => "021-2022: Mémoire de Master de: DJONGALI Frédéric, matricule CM-UDS18SCI2062- sujet: Contribution à l’étude dynamique d’un système Glucose-Insuline à
            l’ordre entier et fractionnaire.",

            "description_1" => "021-2022: Mémoire de Master de: DJONGALI Frédéric, matricule CM-UDS18SCI2062- sujet: Contribution à l’étude dynamique d’un système Glucose-Insuline à
            l’ordre entier et fractionnaire.
            Directeur du mémoire de Master : TALA TEBUE Eric, Chargé de Cours.",

            "description_2" => "021-2022: Mémoire de Master de: DJONGALI Frédéric, matricule CM-UDS18SCI2062- sujet: Contribution à l’étude dynamique d’un système Glucose-Insuline à
            l’ordre entier et fractionnaire.
            Directeur du mémoire de Master : TALA TEBUE Eric, Chargé de Cours.",
        ];

        $publication_2_106 = [
            "type_publication_id" => 2,
            "annee_publication_id" => 22,

            "titre" => "2021-2022 : Mémoire de Master en Ingénierie des Systèmes et Objets Connectés
            (Université de Dschang), SEMIVUMBI Heri Flavien - Caracterisation des capteurs fixes
            pour l'identification des materiels roulants à partir des plaques d'immatriculation.
            ",

            "description_1" => "2021-2022 : Mémoire de Master en Ingénierie des Systèmes et Objets Connectés
            (Université de Dschang), SEMIVUMBI Heri Flavien - Caracterisation des capteurs fixes
            pour l'identification des materiels roulants à partir des plaques d'immatriculation.
            Directeur du mémoire de Master : TALLA TANKAM Narcisse, Chargé de Cours.
            ",

            "description_2" => "2021-2022 : Mémoire de Master en Ingénierie des Systèmes et Objets Connectés
            (Université de Dschang), SEMIVUMBI Heri Flavien - Caracterisation des capteurs fixes
            pour l'identification des materiels roulants à partir des plaques d'immatriculation.
            Directeur du mémoire de Master : TALLA TANKAM Narcisse, Chargé de Cours.
            ",
        ];

        $publication_2_107 = [
            "type_publication_id" => 2,
            "annee_publication_id" => 22,

            "titre" => "2021-2022: Mémoire de Master en Sécurité des Systèmes Numériques (Université de
            Bourgogne en France) de: EBENYE Vanessa- sujet: Authentification des utilisateurs dans
            un dispositif ouvert de télé-enseignement (Moodle) par reconnaissance faciale.",

            "description_1" => "2021-2022: Mémoire de Master en Sécurité des Systèmes Numériques (Université de
            Bourgogne en France) de: EBENYE Vanessa- sujet: Authentification des utilisateurs dans
            un dispositif ouvert de télé-enseignement (Moodle) par reconnaissance faciale.
            Directeur du mémoire de Master : TALLA TANKAM Narcisse, Chargé de Cours.",

            "description_2" => "2021-2022: Mémoire de Master en Sécurité des Systèmes Numériques (Université de
            Bourgogne en France) de: EBENYE Vanessa- sujet: Authentification des utilisateurs dans
            un dispositif ouvert de télé-enseignement (Moodle) par reconnaissance faciale.
            Directeur du mémoire de Master : TALLA TANKAM Narcisse, Chargé de Cours.",
        ];

        $publication_2_108 = [
            "type_publication_id" => 2,
            "annee_publication_id" => 22,

            "titre" => "2021-2022 : Mémoire de Master en Sécurité des Systèmes Numériques (Université de
            Bourgogne en France) de TCHAKOUTIO Ludovic - Authentification des utilisateurs
            dans un dispositif ouvert de télé-enseignement (Moodle) par reconnaissance d’empreintes
            digitales.",

            "description_1" => "2021-2022 : Mémoire de Master en Sécurité des Systèmes Numériques (Université de
            Bourgogne en France) de TCHAKOUTIO Ludovic - Authentification des utilisateurs
            dans un dispositif ouvert de télé-enseignement (Moodle) par reconnaissance d’empreintes
            digitales.
            Directeur du mémoire de Master : TALLA TANKAM Narcisse, Chargé de Cours.",

            "description_2" => "2021-2022 : Mémoire de Master en Sécurité des Systèmes Numériques (Université de
            Bourgogne en France) de TCHAKOUTIO Ludovic - Authentification des utilisateurs
            dans un dispositif ouvert de télé-enseignement (Moodle) par reconnaissance d’empreintes
            digitales.
            Directeur du mémoire de Master : TALLA TANKAM Narcisse, Chargé de Cours.",
        ];

        $publication_2_109 = [
            "type_publication_id" => 2,
            "annee_publication_id" => 22,

            "titre" => "2021-2022: Mémoire de Master en Sécurité des Systèmes Numériques (Université de
            Bourgogne en France) de: IPEM Arlette, Authentification des utilisateurs dans un
            dispositif ouvert de téléenseignement (Moodle) par code OTP.",

            "description_1" => "2021-2022: Mémoire de Master en Sécurité des Systèmes Numériques (Université de
            Bourgogne en France) de: IPEM Arlette, Authentification des utilisateurs dans un
            dispositif ouvert de téléenseignement (Moodle) par code OTP.
            Directeur du mémoire de Master : TALLA TANKAM Narcisse, Chargé de Cours.",

            "description_2" => "2021-2022: Mémoire de Master en Sécurité des Systèmes Numériques (Université de
            Bourgogne en France) de: IPEM Arlette, Authentification des utilisateurs dans un
            dispositif ouvert de téléenseignement (Moodle) par code OTP.
            Directeur du mémoire de Master : TALLA TANKAM Narcisse, Chargé de Cours.",
        ];

        $publication_2_110 = [
            "type_publication_id" => 2,
            "annee_publication_id" => 22,

            "titre" => "2021-2022: Mémoire de Master de: KOINFO Jean Baptiste, matricule CM-UDS19SCI1827- sujet: Bifurcation de Hopf multiple et coexistence d’attracteurs pour un
            système Jerk avec le polynôme de Tchebychev: étude théorique et implémentation
            physique.",

            "description_1" => "2021-2022: Mémoire de Master de: KOINFO Jean Baptiste, matricule CM-UDS19SCI1827- sujet: Bifurcation de Hopf multiple et coexistence d’attracteurs pour un
            système Jerk avec le polynôme de Tchebychev: étude théorique et implémentation
            physique.
            Directeur du mémoire de Master : KENGNE Jacques, Professeur.",

            "description_2" => "2021-2022: Mémoire de Master de: KOINFO Jean Baptiste, matricule CM-UDS19SCI1827- sujet: Bifurcation de Hopf multiple et coexistence d’attracteurs pour un
            système Jerk avec le polynôme de Tchebychev: étude théorique et implémentation
            physique.
            Directeur du mémoire de Master : KENGNE Jacques, Professeur.",
        ];

        $publication_2_111 = [
            "type_publication_id" => 2,
            "annee_publication_id" => 22,

            "titre" => "2021-2022: Mémoire de Master de: BOUI A BOYA Bertrand Frederick, matricule
            CM-UDS-19SCI1521 - sujet: Comportement cohérent et incohérent dans un système
            autonome de type Rössler modifié : étude théorique, contrôle et implémentation physique.",

            "description_1" => "2021-2022: Mémoire de Master de: BOUI A BOYA Bertrand Frederick, matricule
            CM-UDS-19SCI1521 - sujet: Comportement cohérent et incohérent dans un système
            autonome de type Rössler modifié : étude théorique, contrôle et implémentation physique.
            Directeur du mémoire de Master : KENGNE Jacques, Professeur.
            ",

            "description_2" => "2021-2022: Mémoire de Master de: BOUI A BOYA Bertrand Frederick, matricule
            CM-UDS-19SCI1521 - sujet: Comportement cohérent et incohérent dans un système
            autonome de type Rössler modifié : étude théorique, contrôle et implémentation physique.
            Directeur du mémoire de Master : KENGNE Jacques, Professeur.
            ",
        ];

        $publication_2_112 = [
            "type_publication_id" => 2,
            "annee_publication_id" => 22,

            "titre" => " 2021-2022: Mémoire de Master de: TCEPGOUA MBAKOP Marcelle, matricule
            CM-UDS-17SCI2434 - sujet: On the memristor like activation function for deep learning.",

            "description_1" => " 2021-2022: Mémoire de Master de: TCEPGOUA MBAKOP Marcelle, matricule
            CM-UDS-17SCI2434 - sujet: On the memristor like activation function for deep learning.
            Directeur du mémoire de Master : MBOUPDA PONE Justin Roger, Maître de
            Conférences",

            "description_2" => " 2021-2022: Mémoire de Master de: TCEPGOUA MBAKOP Marcelle, matricule
            CM-UDS-17SCI2434 - sujet: On the memristor like activation function for deep learning.
            Directeur du mémoire de Master : MBOUPDA PONE Justin Roger, Maître de
            Conférences",
        ];

        $publication_2_113 = [
            "type_publication_id" => 2,
            "annee_publication_id" => 22,

            "titre" => "2021-2022: Mémoire de Master de: ALLARASSEM Franco, matricule CM-UDS18SCI2632- sujet: Analyse et Simulation des protections du réseau électrique haute
            tension : Application au poste 90 kV de Djunang à Bafoussam.",

            "description_1" => "2021-2022: Mémoire de Master de: ALLARASSEM Franco, matricule CM-UDS18SCI2632- sujet: Analyse et Simulation des protections du réseau électrique haute
            tension : Application au poste 90 kV de Djunang à Bafoussam.
            Directeur du mémoire de Master : CHEUKEM André, Maitre de Conférences.",

            "description_2" => "2021-2022: Mémoire de Master de: ALLARASSEM Franco, matricule CM-UDS18SCI2632- sujet: Analyse et Simulation des protections du réseau électrique haute
            tension : Application au poste 90 kV de Djunang à Bafoussam.
            Directeur du mémoire de Master : CHEUKEM André, Maitre de Conférences.",
        ];

        $publication_2_114 = [
            "type_publication_id" => 2,
            "annee_publication_id" => 22,

            "titre" => "2021-2022: Mémoire de Master de: MAKONGUE ELONG Farel Lechrist, matricule
            CM-UDS-17SCI1118 - sujet: Conception et Simulatin d’une ligne aérienne de transport",

            "description_1" => " 2021-2022: Mémoire de Master de: MAKONGUE ELONG Farel Lechrist, matricule
            CM-UDS-17SCI1118 - sujet: Conception et Simulatin d’une ligne aérienne de transport
            d’énergie électrique : Validation des protections de la ligne BEKOKO – BAFOUSSAM.
            Directeur du mémoire de Master : CHEUKEM André, Maitre de Conférences.",

            "description_2" => " 2021-2022: Mémoire de Master de: MAKONGUE ELONG Farel Lechrist, matricule
            CM-UDS-17SCI1118 - sujet: Conception et Simulatin d’une ligne aérienne de transport
            d’énergie électrique : Validation des protections de la ligne BEKOKO – BAFOUSSAM.
            Directeur du mémoire de Master : CHEUKEM André, Maitre de Conférences.",
        ];

        Publication::create($publication_2_1);
        Publication::create($publication_2_2);
        Publication::create($publication_2_3);
        Publication::create($publication_2_4);
        Publication::create($publication_2_5);
        Publication::create($publication_2_6);
        Publication::create($publication_2_7);
        Publication::create($publication_2_8);
        Publication::create($publication_2_9);
        Publication::create($publication_2_10);

        Publication::create($publication_2_11);
        Publication::create($publication_2_12);
        Publication::create($publication_2_13);
        Publication::create($publication_2_14);
        Publication::create($publication_2_15);
        Publication::create($publication_2_16);
        Publication::create($publication_2_17);
        Publication::create($publication_2_18);
        Publication::create($publication_2_19);
        Publication::create($publication_2_20);

        Publication::create($publication_2_21);
        Publication::create($publication_2_22);
        Publication::create($publication_2_23);
        Publication::create($publication_2_24);
        Publication::create($publication_2_25);
        Publication::create($publication_2_26);
        Publication::create($publication_2_27);
        Publication::create($publication_2_28);
        Publication::create($publication_2_29);
        Publication::create($publication_2_30);

        Publication::create($publication_2_31);
        Publication::create($publication_2_32);
        Publication::create($publication_2_33);
        Publication::create($publication_2_34);
        Publication::create($publication_2_35);
        Publication::create($publication_2_36);
        Publication::create($publication_2_37);
        Publication::create($publication_2_38);
        Publication::create($publication_2_39);
        Publication::create($publication_2_40);

        Publication::create($publication_2_41);
        Publication::create($publication_2_42);
        Publication::create($publication_2_43);
        Publication::create($publication_2_44);
        Publication::create($publication_2_45);
        Publication::create($publication_2_46);
        Publication::create($publication_2_47);
        Publication::create($publication_2_48);
        Publication::create($publication_2_49);
        Publication::create($publication_2_50);

        Publication::create($publication_2_51);
        Publication::create($publication_2_52);
        Publication::create($publication_2_53);
        Publication::create($publication_2_54);
        Publication::create($publication_2_55);
        Publication::create($publication_2_56);
        Publication::create($publication_2_57);
        Publication::create($publication_2_58);
        Publication::create($publication_2_59);
        Publication::create($publication_2_60);

        Publication::create($publication_2_61);
        Publication::create($publication_2_62);
        Publication::create($publication_2_63);
        Publication::create($publication_2_64);
        Publication::create($publication_2_65);
        Publication::create($publication_2_66);
        Publication::create($publication_2_67);
        Publication::create($publication_2_68);
        Publication::create($publication_2_69);
        Publication::create($publication_2_70);

        Publication::create($publication_2_71);
        Publication::create($publication_2_72);
        Publication::create($publication_2_73);
        Publication::create($publication_2_74);
        Publication::create($publication_2_75);
        Publication::create($publication_2_76);
        Publication::create($publication_2_77);
        Publication::create($publication_2_78);
        Publication::create($publication_2_79);
        Publication::create($publication_2_80);

        Publication::create($publication_2_81);
        Publication::create($publication_2_82);
        Publication::create($publication_2_83);
        Publication::create($publication_2_84);
        Publication::create($publication_2_85);
        Publication::create($publication_2_86);
        Publication::create($publication_2_87);
        Publication::create($publication_2_88);
        Publication::create($publication_2_89);
        Publication::create($publication_2_90);

        Publication::create($publication_2_91);
        Publication::create($publication_2_92);
        Publication::create($publication_2_93);
        Publication::create($publication_2_94);
        Publication::create($publication_2_95);
        Publication::create($publication_2_96);
        Publication::create($publication_2_97);
        Publication::create($publication_2_98);
        Publication::create($publication_2_99);
        Publication::create($publication_2_100);

        Publication::create($publication_2_101);
        Publication::create($publication_2_102);
        Publication::create($publication_2_103);
        Publication::create($publication_2_104);
        Publication::create($publication_2_105);
        Publication::create($publication_2_106);
        Publication::create($publication_2_107);
        Publication::create($publication_2_108);
        Publication::create($publication_2_109);
        Publication::create($publication_2_110);

        Publication::create($publication_2_111);
        Publication::create($publication_2_112);
        Publication::create($publication_2_113);
        Publication::create($publication_2_114);
        
//*******************  Brevets  *************************** */
















    }
}
