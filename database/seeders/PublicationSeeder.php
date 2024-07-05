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
        //*******************  Thèses de Doctorat encadrées et soutenues  *************************** */

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

            // "lien_externe" => "",

            "status" => true,
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

            // "lien_externe" => "",
            "status" => true,
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

            // "lien_externe" => "",
            "status" => true,
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

            // "lien_externe" => "",
            "status" => true,
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


            // "lien_externe" => "",
            "status" => true,
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


            // "lien_externe" => "",
            "status" => true,
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


            // "lien_externe" => "",
            "status" => true,
        ];

        $publication_1_8 = [
            "type_publication_id" => 1,
            "annee_publication_id" => 21,

            "titre" => "Thèse de Doctorat/Ph.D de: KEMNANG TSAFACK Alex Stéphane, Matricule: CM04-
            10SCI1464 - sujet: Contribution to the Study of Dynamical Behaviors and Control of
            Chaotic Phenomena in Some Electrical Machines. ",

            "description_1" => "Thèse de Doctorat/PhD préparée à l’URMACETS et à l’UR-AIA, Faculté des Sciences, Unité de Formation et Recherche de la
            « Dschang School of Science and Technology », Université de Dschang, soutenue le 6
            février 2021.
            Directeur de thèse : KENNE Godpromesse, Professeur",

            "description_2" => "Thèse de Doctorat/PhD préparée à l’URMACETS et à l’UR-AIA, Faculté des Sciences, Unité de Formation et Recherche de la
            « Dschang School of Science and Technology », Université de Dschang, soutenue le 6
            février 2021.
            Directeur de thèse : KENNE Godpromesse, Professeur",


            // "lien_externe" => "",
            "status" => true,
        ];

        $publication_1_9 = [
            "type_publication_id" => 1,
            "annee_publication_id" => 21,

            "titre" => " Thèse de Doctorat/PhD de: KAMGANG BEYALA Vivien Loïck, Matricule: 13S136EN -
            sujet: Contribution to the Hybrid Development of Artificial Neural Networks and PhraseBased Statistical Models for Machine Translation: An Application to Languages and
            Cultures − 𝜆. ",

            "description_1" => " Thèse de Doctorat/PhD préparée à l’URIFIA et à l’UR-AIA, Faculté des
            Sciences, Unité de Formation à la recherche « Dschang School of Science and
            Technbology », Université de Dschang, soutenue le 26 juin 2021.
            Directeur de thèse : NKENLIFACK Marcellin, Maître de Conférences.",

            "description_2" => " Thèse de Doctorat/PhD préparée à l’URIFIA et à l’UR-AIA, Faculté des
            Sciences, Unité de Formation à la recherche « Dschang School of Science and
            Technbology », Université de Dschang, soutenue le 26 juin 2021.
            Directeur de thèse : NKENLIFACK Marcellin, Maître de Conférences.",


            // "lien_externe" => "",
            "status" => true,
        ];


        $publication_1_10 = [
            "type_publication_id" => 1,
            "annee_publication_id" => 21,

            "titre" => " 2020-2021 Thèse de Doctorat/PhD de Monsieur WAFO TAPCHE Rudolphe (Mle CM04-
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
            Université de Dschang",


            // "lien_externe" => "",
            "status" => true,
        ];

        $publication_1_11 = [
            "type_publication_id" => 1,
            "annee_publication_id" => 21,

            "titre" => " 2020-2021 Thèse de Doctorat/PhD de Monsieur NGUOMKAM NEGOU Alexis (Mle
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
            Dschang ",


            // "lien_externe" => "",
            "status" => true,
        ];

        $publication_1_12 = [
            "type_publication_id" => 1,
            "annee_publication_id" => 21,

            "titre" => "2020-2021 Thèse de Doctorat/PhD de Monsieur LEUTCHO Gervais Dolvis, (Mle CMUDS-11SCI0090) intitulée : « Multistable dynamics and control of diode and memristor
            based hyperjerk circuit with application to image encryption » Thèse dirigée en solo à
            l’Université de Dschang.",

            "description_1" => "2020-2021 Thèse de Doctorat/PhD de Monsieur LEUTCHO Gervais Dolvis, (Mle CMUDS-11SCI0090) intitulée : « Multistable dynamics and control of diode and memristor
            based hyperjerk circuit with application to image encryption » Thèse dirigée en solo à
            l’Université de Dschang.",

            "description_2" => "2020-2021 Thèse de Doctorat/PhD de Monsieur LEUTCHO Gervais Dolvis, (Mle CMUDS-11SCI0090) intitulée : « Multistable dynamics and control of diode and memristor
            based hyperjerk circuit with application to image encryption » Thèse dirigée en solo à
            l’Université de Dschang.",


            // "lien_externe" => "",
            "status" => true,
        ];

        $publication_1_13 = [
            "type_publication_id" => 1,
            "annee_publication_id" => 21,

            "titre" => "2020-2021 Thèse de Doctorat/PhD de Monsieur FOLIFACK SIGNING Vitrice Ruben
            intitulée : « Contribution to the analysis of nonlinear dynamic systems with different classes
            of attractors: theoretical, experimental study, and application in cryptography »",

            "description_1" => "2020-2021 Thèse de Doctorat/PhD de Monsieur FOLIFACK SIGNING Vitrice Ruben
            intitulée : « Contribution to the analysis of nonlinear dynamic systems with different classes
            of attractors: theoretical, experimental study, and application in cryptography» Thèse dirigée
            en solo à l’Université de Dschang.",

            "description_2" => "2020-2021 Thèse de Doctorat/PhD de Monsieur FOLIFACK SIGNING Vitrice Ruben
            intitulée : « Contribution to the analysis of nonlinear dynamic systems with different classes
            of attractors: theoretical, experimental study, and application in cryptography» Thèse dirigée
            en solo à l’Université de Dschang.",


            // "lien_externe" => "",
            "status" => true,
        ];


        $publication_1_14 = [
            "type_publication_id" => 1,
            "annee_publication_id" => 21,

            "titre" => "2020-2021 Thèse de Doctorat/PhD de Monsieur TSAFACK Nestor intitulée : « Dynamical
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
            ",


            // "lien_externe" => "",
            "status" => true,
        ];

        $publication_1_15 = [
            "type_publication_id" => 1,
            "annee_publication_id" => 21,

            "titre" => "2020-2021 Thèse de Doctorat/PhD de Madame TAGNE MOGUE Ruth Line intitulée :
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
            ",


            // "lien_externe" => "",
            "status" => true,
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


            // "lien_externe" => "",
            "status" => true,
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


            // "lien_externe" => "",
            "status" => true,
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


            // "lien_externe" => "",
            "status" => true,
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


            // "lien_externe" => "",
            "status" => true,
        ];

        // publication de type :Thèses de Doctorat encadrées et soutenues => id = 1
        // annee 2018 => id = 18
        $publication_1_20 = [
            "type_publication_id" => 1,
            "annee_publication_id" => 18,

            "titre" => "",

            "description_1" => "",

            "description_2" => "",


            // "lien_externe" => "",
            "status" => true,
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


            // "lien_externe" => "",
            "status" => true,
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


            // "lien_externe" => "",
            "status" => true,
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


            // "lien_externe" => "",
            "status" => true,
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


            // "lien_externe" => "",
            "status" => true,
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


            // "lien_externe" => "",
            "status" => true,
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


            // "lien_externe" => "",
            "status" => true,
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


        //*******************  Mémoires de niveau Bac+5 encadrés et soutenus  *************************** */

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



            // "lien_externe" => "",
            "status" => true,
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



            // "lien_externe" => "",
            "status" => true,
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



            // "lien_externe" => "",
            "status" => true,
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



            // "lien_externe" => "",
            "status" => true,
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



            // "lien_externe" => "",
            "status" => true,
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



            // "lien_externe" => "",
            "status" => true,
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



            // "lien_externe" => "",
            "status" => true,
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



            // "lien_externe" => "",
            "status" => true,
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



            // "lien_externe" => "",
            "status" => true,
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



            // "lien_externe" => "",
            "status" => true,
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



            // "lien_externe" => "",
            "status" => true,
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



            // "lien_externe" => "",
            "status" => true,
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



            // "lien_externe" => "",
            "status" => true,
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



            // "lien_externe" => "",
            "status" => true,
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



            // "lien_externe" => "",
            "status" => true,
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



            // "lien_externe" => "",
            "status" => true,
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



            // "lien_externe" => "",
            "status" => true,
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



            // "lien_externe" => "",
            "status" => true,
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



            // "lien_externe" => "",
            "status" => true,
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



            // "lien_externe" => "",
            "status" => true,
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



            // "lien_externe" => "",
            "status" => true,
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



            // "lien_externe" => "",
            "status" => true,
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



            // "lien_externe" => "",
            "status" => true,
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



            // "lien_externe" => "",
            "status" => true,
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



            // "lien_externe" => "",
            "status" => true,
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



            // "lien_externe" => "",
            "status" => true,
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



            // "lien_externe" => "",
            "status" => true,
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



            // "lien_externe" => "",
            "status" => true,
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



            // "lien_externe" => "",
            "status" => true,
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



            // "lien_externe" => "",
            "status" => true,
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



            // "lien_externe" => "",
            "status" => true,
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



            // "lien_externe" => "",
            "status" => true,
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



            // "lien_externe" => "",
            "status" => true,
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



            // "lien_externe" => "",
            "status" => true,
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



            // "lien_externe" => "",
            "status" => true,
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



            // "lien_externe" => "",
            "status" => true,
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



            // "lien_externe" => "",
            "status" => true,
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



            // "lien_externe" => "",
            "status" => true,
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



            // "lien_externe" => "",
            "status" => true,
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



            // "lien_externe" => "",
            "status" => true,
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



            // "lien_externe" => "",
            "status" => true,
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



            // "lien_externe" => "",
            "status" => true,
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



            // "lien_externe" => "",
            "status" => true,
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



            // "lien_externe" => "",
            "status" => true,
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



            // "lien_externe" => "",
            "status" => true,
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



            // "lien_externe" => "",
            "status" => true,
        ];

        $publication_2_47 = [
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



            // "lien_externe" => "",
            "status" => true,
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



            // "lien_externe" => "",
            "status" => true,
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



            // "lien_externe" => "",
            "status" => true,
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



            // "lien_externe" => "",
            "status" => true,
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



            // "lien_externe" => "",
            "status" => true,
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



            // "lien_externe" => "",
            "status" => true,
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



            // "lien_externe" => "",
            "status" => true,
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



            // "lien_externe" => "",
            "status" => true,
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



            // "lien_externe" => "",
            "status" => true,
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



            // "lien_externe" => "",
            "status" => true,
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



            // "lien_externe" => "",
            "status" => true,
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



            // "lien_externe" => "",
            "status" => true,
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



            // "lien_externe" => "",
            "status" => true,
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



            // "lien_externe" => "",
            "status" => true,
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



            // "lien_externe" => "",
            "status" => true,
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



            // "lien_externe" => "",
            "status" => true,
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



            // "lien_externe" => "",
            "status" => true,
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



            // "lien_externe" => "",
            "status" => true,
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



            // "lien_externe" => "",
            "status" => true,
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
            Directeur du mémoire de Master : KENNE Godpromesse, Professeur",


            // "lien_externe" => "",
            "status" => true,
        ];

        $publication_2_67 = [
            "type_publication_id" => 2,
            "annee_publication_id" => 21,

            "titre" => "2020-2021: Mémoire de Master de: GOMSEU THOUPE Stéphane, matricule CM-UDs16SCI-0227 - sujet: Optimisation de la puissance dans un système photovoltaïque
            connecté au réseau monophasé.",

            "description_1" => "2020-2021: Mémoire de Master de: GOMSEU THOUPE Stéphane, matricule CM-UDs16SCI-0227 - sujet: Optimisation de la puissance dans un système photovoltaïque
            connecté au réseau monophasé.
            Directeur du mémoire de Master : KENNE Godpromesse, Professeur.",

            "description_2" => "2020-2021: Mémoire de Master de: GOMSEU THOUPE Stéphane, matricule CM-UDs16SCI-0227 - sujet: Optimisation de la puissance dans un système photovoltaïque
            connecté au réseau monophasé.
            Directeur du mémoire de Master : KENNE Godpromesse, Professeur."


            // "lien_externe" => "",
            , "status" => true,
        ];

        $publication_2_68 = [
            "type_publication_id" => 2,
            "annee_publication_id" => 21,

            "titre" => "2020-2021:: Mémoire de Master de: FOTSO KUATE Victor Calvin, Matricule : CMUDS-19SCI3072 - sujet: Modèle de détection intelligente par apprentissage : cas d’une
            foire aux questions sur la COVID-19.",

            "description_1" => "2020-2021:: Mémoire de Master de: FOTSO KUATE Victor Calvin, Matricule : CMUDS-19SCI3072 - sujet: Modèle de détection intelligente par apprentissage : cas d’une
            foire aux questions sur la COVID-19.
            Directeur du mémoire de Master : NKENLIFACK Marcellin, Maître de Conférences.",

            "description_2" => "2020-2021:: Mémoire de Master de: FOTSO KUATE Victor Calvin, Matricule : CMUDS-19SCI3072 - sujet: Modèle de détection intelligente par apprentissage : cas d’une
            foire aux questions sur la COVID-19.
            Directeur du mémoire de Master : NKENLIFACK Marcellin, Maître de Conférences."


            // "lien_externe" => "",
            , "status" => true,
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


            // "lien_externe" => "",
            , "status" => true,
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


            // "lien_externe" => "",
            , "status" => true,
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


            // "lien_externe" => "",
            , "status" => true,
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


            // "lien_externe" => "",
            , "status" => true,
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


            // "lien_externe" => "",
            , "status" => true,
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


            // "lien_externe" => "",
            , "status" => true,
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


            // "lien_externe" => "",
            , "status" => true,
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


            // "lien_externe" => "",
            , "status" => true,
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


            // "lien_externe" => "",
            , "status" => true,
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


            // "lien_externe" => "",
            , "status" => true,
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


            // "lien_externe" => "",
            , "status" => true,
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


            // "lien_externe" => "",
            , "status" => true,
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


            // "lien_externe" => "",
            , "status" => true,
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


            // "lien_externe" => "",
            , "status" => true,
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


            // "lien_externe" => "",
            , "status" => true,
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


            // "lien_externe" => "",
            , "status" => true,
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


            // "lien_externe" => "",
            , "status" => true,
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


            // "lien_externe" => "",
            , "status" => true,
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


            // "lien_externe" => "",
            , "status" => true,
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


            // "lien_externe" => "",
            , "status" => true,
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


            // "lien_externe" => "",
            , "status" => true,
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


            // "lien_externe" => "",
            , "status" => true,
        ];


        // publication de type :Mémoires de niveau Bac+5 encadrés et soutenus => id = 2
        // annee 2022 => id = 22

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


            // "lien_externe" => "",
            , "status" => true,
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


            // "lien_externe" => "",
            , "status" => true,
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


            // "lien_externe" => "",
            , "status" => true,
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


            // "lien_externe" => "",
            , "status" => true,
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


            // "lien_externe" => "",
            , "status" => true,
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


            // "lien_externe" => "",
            , "status" => true,
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


            // "lien_externe" => "",
            , "status" => true,
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


            // "lien_externe" => "",
            , "status" => true,
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


            // "lien_externe" => "",
            , "status" => true,
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


            // "lien_externe" => "",
            , "status" => true,
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


            // "lien_externe" => "",
            "status" => true,
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


            // "lien_externe" => "",
            "status" => true,
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


            // "lien_externe" => "",
            "status" => true,
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


            // "lien_externe" => "",
            "status" => true,
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


            // "lien_externe" => "",
            "status" => true,
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


            // "lien_externe" => "",
            "status" => true,
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


            // "lien_externe" => "",
            "status" => true,
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


            // "lien_externe" => "",
            "status" => true,
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


            // "lien_externe" => "",
            "status" => true,
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


            // "lien_externe" => "",
            "status" => true,
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


            // "lien_externe" => "",
            "status" => true,
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


            // "lien_externe" => "",
            "status" => true,
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


            // "lien_externe" => "",
            "status" => true,
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


            // "lien_externe" => "",
            "status" => true,
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
        // publication de type :Brevets => id = 5
        // annee 2017 => id = 17

        $publication_3_1 = [
            "type_publication_id" => 5,
            "annee_publication_id" => 17,

            "titre" => "Deux (02) déclarations de brevets d’inventions obtenues avec Dr. CHIME Alex au terme de sa
            thèse de Doctorat soutenue à l’Université Paris 13. ",

            "description_1" => "Deux (02) déclarations de brevets d’inventions obtenues avec Dr. CHIME Alex au terme de sa
            thèse de Doctorat soutenue à l’Université Paris 13. Il s’agit de:
            (1) Micro organic opto-electronic device configured for high current density» (EP17306292.6),
            2017.
            (2) Micro organic opto-electronic device configured for high current density» (EP17306292.8),
            2017.",

            "description_2" => "Deux (02) déclarations de brevets d’inventions obtenues avec Dr. CHIME Alex au terme de sa
            thèse de Doctorat soutenue à l’Université Paris 13. Il s’agit de:
            (1) Micro organic opto-electronic device configured for high current density» (EP17306292.6),
            2017.
            (2) Micro organic opto-electronic device configured for high current density» (EP17306292.8),
            2017.",


            // "lien_externe" => "",
            "status" => true,
        ];

        Publication::create($publication_3_1);

        //*******************   Livres/Chapitres d’ouvrage  *************************** */
        // publication de type :Livres/Chapitres d’ouvrage  => id = 6
        // annee 2010 => id = 10

        $publication_4_1 = [
            "type_publication_id" => 6,
            "annee_publication_id" => 10,

            "titre" => " Godpromesse Kenné. Méthodes d'identification pour des systèmes non linéaires avec
            paramètres variant dans le temps: Applications aux machines tournantes à induction. Edition
            Universitaire Europeenne (EUE). 2010, ISBN: 978-613-1-55284-7, 136 pages.",

            "description_1" => " Godpromesse Kenné. Méthodes d'identification pour des systèmes non linéaires avec
            paramètres variant dans le temps: Applications aux machines tournantes à induction. Edition
            Universitaire Europeenne (EUE). 2010, ISBN: 978-613-1-55284-7, 136 pages.",

            "description_2" => " Godpromesse Kenné. Méthodes d'identification pour des systèmes non linéaires avec
            paramètres variant dans le temps: Applications aux machines tournantes à induction. Edition
            Universitaire Europeenne (EUE). 2010, ISBN: 978-613-1-55284-7, 136 pages."


            // "lien_externe" => "",
            , "status" => true,
        ];
        // publication de type :Livres/Chapitres d’ouvrage  => id = 6
        // annee 2016 => id = 16
        $publication_4_2 = [
            "type_publication_id" => 6,
            "annee_publication_id" => 16,

            "titre" => "Jean Pierre Lienou Tchawé, Emmanuel Tanyi. SMA pour Analyse, Commande et Diagnostic
            des Réseaux Electriques-Ingénierie des Méthodes, Systèmes Multi Agents et Apprentissage
            dans les Réseaux Elecriques. Edition Universitaire Europeenne (EUE). 2016, ISBN-10:
            3841665799, ISBN-13 : 978-3-8416-6579-9, 284 pages",

            "description_1" => "Jean Pierre Lienou Tchawé, Emmanuel Tanyi. SMA pour Analyse, Commande et Diagnostic
            des Réseaux Electriques-Ingénierie des Méthodes, Systèmes Multi Agents et Apprentissage
            dans les Réseaux Elecriques. Edition Universitaire Europeenne (EUE). 2016, ISBN-10:
            3841665799, ISBN-13 : 978-3-8416-6579-9, 284 pages",

            "description_2" => "Jean Pierre Lienou Tchawé, Emmanuel Tanyi. SMA pour Analyse, Commande et Diagnostic
            des Réseaux Electriques-Ingénierie des Méthodes, Systèmes Multi Agents et Apprentissage
            dans les Réseaux Elecriques. Edition Universitaire Europeenne (EUE). 2016, ISBN-10:
            3841665799, ISBN-13 : 978-3-8416-6579-9, 284 pages"


            // "lien_externe" => "",
            , "status" => true,
        ];

        // publication de type :Livres/Chapitres d’ouvrage  => id = 6
        // annee 2018 => id = 18
        $publication_4_3 = [
            "type_publication_id" => 6,
            "annee_publication_id" => 18,

            "titre" => "Marcellin Nkenlifack, Vivien Beyala Kamgang, Deris Meh, Germain Tegomo and B.
            Demsong (forthcoming), Mechanisms for Translation of Telephone Calls for Inter Language
            Communication and the Development of National Languages and Cultures in Cameroon: The
            Case of Yemba and Fufulde. In \"Translation and Interpretation in Sub-Saharan Africa: New
            Challenges in a Multilingual Space\", Brussels, BE: Lexicology, Terminology, Translation
            Network, 2018.",

            "description_1" => "Marcellin Nkenlifack, Vivien Beyala Kamgang, Deris Meh, Germain Tegomo and B.
            Demsong (forthcoming), Mechanisms for Translation of Telephone Calls for Inter Language
            Communication and the Development of National Languages and Cultures in Cameroon: The
            Case of Yemba and Fufulde. In \"Translation and Interpretation in Sub-Saharan Africa: New
            Challenges in a Multilingual Space\", Brussels, BE: Lexicology, Terminology, Translation
            Network, 2018.",

            "description_2" => "Marcellin Nkenlifack, Vivien Beyala Kamgang, Deris Meh, Germain Tegomo and B.
            Demsong (forthcoming), Mechanisms for Translation of Telephone Calls for Inter Language
            Communication and the Development of National Languages and Cultures in Cameroon: The
            Case of Yemba and Fufulde. In \"Translation and Interpretation in Sub-Saharan Africa: New
            Challenges in a Multilingual Space\", Brussels, BE: Lexicology, Terminology, Translation
            Network, 2018."


            // "lien_externe" => "",
            , "status" => true,
        ];

        $publication_4_4 = [

            "type_publication_id" => 6,
            "annee_publication_id" => 18,

            "titre" => "Guillaume H. KOM et Alain TIEDEU, Algorithmes de détection automatisée des masses sur
            les mammographies, Éditions universitaires européennes (EUE). 2018, ISBN : 978-613-8-
            45065-8",

            "description_1" => "Deris Meh and Marcellin Nkenlifack (forthcoming), Mother Tongue-Ict Instruction in
            Cameroonian Languages: Utopia or Reality? Insights from Translation and Lexical Innovation using the Mmen Language as Case Study. In \"Translation and Interpretation in
            Sub-Saharan Africa: New Challenges in a Multilingual Space\", Brussels, BE: Lexicology,
            Terminology, Translation Network, 2018",

            "description_2" => "Deris Meh and Marcellin Nkenlifack (forthcoming), Mother Tongue-Ict Instruction in
            Cameroonian Languages: Utopia or Reality? Insights from Translation and Lexical Innovation using the Mmen Language as Case Study. In \"Translation and Interpretation in
            Sub-Saharan Africa: New Challenges in a Multilingual Space\", Brussels, BE: Lexicology,
            Terminology, Translation Network, 2018"


            // "lien_externe" => "",
            , "status" => true,
        ];

        $publication_4_5 = [

            "type_publication_id" => 6,
            "annee_publication_id" => 18,

            "titre" => "Guillaume H. KOM et Alain TIEDEU, Algorithmes de détection automatisée des masses sur
            les mammographies, Éditions universitaires européennes (EUE). 2018, ISBN : 978-613-8-
            45065-8.",

            "description_1" => "Guillaume H. KOM et Alain TIEDEU, Algorithmes de détection automatisée des masses sur
            les mammographies, Éditions universitaires européennes (EUE). 2018, ISBN : 978-613-8-
            45065-8",

            "description_2" => "Guillaume H. KOM et Alain TIEDEU, Algorithmes de détection automatisée des masses sur
            les mammographies, Éditions universitaires européennes (EUE). 2018, ISBN : 978-613-8-
            45065-8"


            // "lien_externe" => "",
            , "status" => true,
        ];

        Publication::create($publication_4_1);
        Publication::create($publication_4_2);
        Publication::create($publication_4_3);
        Publication::create($publication_4_4);
        Publication::create($publication_4_5);

        //*******************    Articles publiés dans les revues indexées  *************************** */
        // publication de type :Articles publiés dans les revues indexées => id = 7
        // annee 2006 => id = 6
        $publication_5_1 = [
            "type_publication_id" => 7,
            "annee_publication_id" => 6,

            "titre" => "G. Kenne, T. Ahmed-Ali, F. Lamnabhi-Lagarrigue and H. Nkwawo, “Nonlinear system
            parameters estimation using radial basis function network”, in Control Engineering Practice,
            Elsevier Edition, Vol. 14, Issue 7, pp. 819-832, July 2006,
            doi:10.1016/j.conengprac.2005.04.002.
            ",

            "description_1" => "G. Kenne, T. Ahmed-Ali, F. Lamnabhi-Lagarrigue and H. Nkwawo, “Nonlinear system
            parameters estimation using radial basis function network”, in Control Engineering Practice,
            Elsevier Edition, Vol. 14, Issue 7, pp. 819-832, July 2006,
            doi:10.1016/j.conengprac.2005.04.002.
            ",

            "description_2" => "G. Kenne, T. Ahmed-Ali, F. Lamnabhi-Lagarrigue and H. Nkwawo, “Nonlinear system
            parameters estimation using radial basis function network”, in Control Engineering Practice,
            Elsevier Edition, Vol. 14, Issue 7, pp. 819-832, July 2006,
            doi:10.1016/j.conengprac.2005.04.002.
            "


            // "lien_externe" => "",
            , "status" => true,
        ];

        $publication_5_2 = [
            "type_publication_id" => 7,
            "annee_publication_id" => 6,

            "titre" => "Ntoupka M., Fotsing E., et Boubaoua A., 2006. Etat de la réserve forestière de Laf (Extrême
            Nord Cameroun) et des zones riveraines: orientations d’aménagement et de gestion de
            l’espace. In Le Flambloyant, No 62, Juillet 2006, pp12-17.",

            "description_1" => "Ntoupka M., Fotsing E., et Boubaoua A., 2006. Etat de la réserve forestière de Laf (Extrême
            Nord Cameroun) et des zones riveraines: orientations d’aménagement et de gestion de
            l’espace. In Le Flambloyant, No 62, Juillet 2006, pp12-17.",

            "description_2" => "Ntoupka M., Fotsing E., et Boubaoua A., 2006. Etat de la réserve forestière de Laf (Extrême
            Nord Cameroun) et des zones riveraines: orientations d’aménagement et de gestion de
            l’espace. In Le Flambloyant, No 62, Juillet 2006, pp12-17."


            // "lien_externe" => "",
            , "status" => true,
        ];

        $publication_5_3 = [
            "type_publication_id" => 7,
            "annee_publication_id" => 6,

            "titre" => "N. Talla Tankam, F. Kouamé Koffi, A. Dipanda, A. Akono, M. Bernier, E. Tonyé, K. Affian,
            2006, Caractérisation des discontinuités-images par l’approche de vecteur de texture :
            application à des images RSO d’ERS-2, Journal des Sciences pour Ingénieurs (JSPI), N° 7,
            ISSN 0851-4453.",

            "description_1" => "N. Talla Tankam, F. Kouamé Koffi, A. Dipanda, A. Akono, M. Bernier, E. Tonyé, K. Affian,
            2006, Caractérisation des discontinuités-images par l’approche de vecteur de texture :
            application à des images RSO d’ERS-2, Journal des Sciences pour Ingénieurs (JSPI), N° 7,
            ISSN 0851-4453.",

            "description_2" => "N. Talla Tankam, F. Kouamé Koffi, A. Dipanda, A. Akono, M. Bernier, E. Tonyé, K. Affian,
            2006, Caractérisation des discontinuités-images par l’approche de vecteur de texture :
            application à des images RSO d’ERS-2, Journal des Sciences pour Ingénieurs (JSPI), N° 7,
            ISSN 0851-4453."


            // "lien_externe" => "",
            , "status" => true,
        ];

        $publication_5_4 = [
            "type_publication_id" => 7,
            "annee_publication_id" => 6,

            "titre" => "E. Tanyi, T. Noulamo, M. Nkenlifack and J. Tsochounie, “A Multi-Agent Design and
            Implementation of an Internet Base Plateform for the Remote Monitoring and Control of the
            Cameroon Power Network”, Engineering Letters (ENGL) 13(2):195-203 (2006).
            ",

            "description_1" => "E. Tanyi, T. Noulamo, M. Nkenlifack and J. Tsochounie, “A Multi-Agent Design and
            Implementation of an Internet Base Plateform for the Remote Monitoring and Control of the
            Cameroon Power Network”, Engineering Letters (ENGL) 13(2):195-203 (2006).
            ",

            "description_2" => "E. Tanyi, T. Noulamo, M. Nkenlifack and J. Tsochounie, “A Multi-Agent Design and
            Implementation of an Internet Base Plateform for the Remote Monitoring and Control of the
            Cameroon Power Network”, Engineering Letters (ENGL) 13(2):195-203 (2006).
            "


            // "lien_externe" => "",
            , "status" => true,
        ];

        // publication de type :Articles publiés dans les revues indexées => id = 7
        // annee 2007 => id = 7
        $publication_5_5 = [
            "type_publication_id" => 7,
            "annee_publication_id" => 7,

            "titre" => "E. Tanyi, T. Noulamo, M. Nkenlifack and J. Tsochounie, “A Multi-Agent Design and
            Implementation of an Internet Base Plateform for the Remote Monitoring and Control of the
            Cameroon Power Network”, Engineering Letters (ENGL) 13(2):195-203 (2006).
            ",

            "description_1" => "E. Tanyi, T. Noulamo, M. Nkenlifack and J. Tsochounie, “A Multi-Agent Design and
            Implementation of an Internet Base Plateform for the Remote Monitoring and Control of the
            Cameroon Power Network”, Engineering Letters (ENGL) 13(2):195-203 (2006).
            ",

            "description_2" => "E. Tanyi, T. Noulamo, M. Nkenlifack and J. Tsochounie, “A Multi-Agent Design and
            Implementation of an Internet Base Plateform for the Remote Monitoring and Control of the
            Cameroon Power Network”, Engineering Letters (ENGL) 13(2):195-203 (2006).
            "


            // "lien_externe" => "",
            , "status" => true,
        ];

        $publication_5_6 = [
            "type_publication_id" => 7,
            "annee_publication_id" => 7,

            "titre" => " T. Ahmed-Ali, G. Kenne, and F. Lamnabhi-Lagarrigue, “Nonlinear systems parameters
            estimation using neural network : Application to synchronous machine”, in Journal of
            Mathematical and Computer Modelling of Dynamical Systems, Taylor and Francis Group
            Edition, Vol. 13, Issue 4, pp. 365-382, 2007, doi: 10.1080/13873950600913787.",

            "description_1" => " T. Ahmed-Ali, G. Kenne, and F. Lamnabhi-Lagarrigue, “Nonlinear systems parameters
            estimation using neural network : Application to synchronous machine”, in Journal of
            Mathematical and Computer Modelling of Dynamical Systems, Taylor and Francis Group
            Edition, Vol. 13, Issue 4, pp. 365-382, 2007, doi: 10.1080/13873950600913787.",

            "description_2" => " T. Ahmed-Ali, G. Kenne, and F. Lamnabhi-Lagarrigue, “Nonlinear systems parameters
            estimation using neural network : Application to synchronous machine”, in Journal of
            Mathematical and Computer Modelling of Dynamical Systems, Taylor and Francis Group
            Edition, Vol. 13, Issue 4, pp. 365-382, 2007, doi: 10.1080/13873950600913787."


            // "lien_externe" => "",
            , "status" => true,
        ];

        $publication_5_7 = [
            "type_publication_id" => 7,
            "annee_publication_id" => 7,

            "titre" => " H. G. Kom, A. Tiedeu, M. Kom, Automated detection of masses in mammograms by local
            adaptive thresholding, in Computers in Biology and Medicine (CBM), Vol.37, issue 1, pp.37-
            48, 2007, doi:10.1016/j.compbiomed.2005.12.004.
            ",

            "description_1" => " H. G. Kom, A. Tiedeu, M. Kom, Automated detection of masses in mammograms by local
            adaptive thresholding, in Computers in Biology and Medicine (CBM), Vol.37, issue 1, pp.37-
            48, 2007, doi:10.1016/j.compbiomed.2005.12.004.
            ",

            "description_2" => " H. G. Kom, A. Tiedeu, M. Kom, Automated detection of masses in mammograms by local
            adaptive thresholding, in Computers in Biology and Medicine (CBM), Vol.37, issue 1, pp.37-
            48, 2007, doi:10.1016/j.compbiomed.2005.12.004.
            "


            // "lien_externe" => "",
            , "status" => true,
        ];

        $publication_5_8 = [
            "type_publication_id" => 7,
            "annee_publication_id" => 7,

            "titre" => "J. FOTSING, E. TONYE, J. P. Rudant, N. Talla Tankam, T. F. N. Kanaa, 2007,
            Classification non supervisée d’image RSO en vue de la cartographie des couverts végétaux
            de la mangrove littorale camerounaise, Revue française de photogrammétri",

            "description_1" => "J. FOTSING, E. TONYE, J. P. Rudant, N. Talla Tankam, T. F. N. Kanaa, 2007,
            Classification non supervisée d’image RSO en vue de la cartographie des couverts végétaux
            de la mangrove littorale camerounaise, Revue française de photogrammétri",

            "description_2" => "J. FOTSING, E. TONYE, J. P. Rudant, N. Talla Tankam, T. F. N. Kanaa, 2007,
            Classification non supervisée d’image RSO en vue de la cartographie des couverts végétaux
            de la mangrove littorale camerounaise, Revue française de photogrammétrie"


            // "lien_externe" => "",
            , "status" => true,
        ];


        // publication de type :Articles publiés dans les revues indexées => id = 7
        // annee 2008 => id = 8

        $publication_5_9 = [
            "type_publication_id" => 7,
            "annee_publication_id" => 8,

            "titre" => "G. Kenne, T. Ahmed-Ali, F. Lamnabhi-Lagarrigue, and A. Arzande, “Nonlinear systems
            time-varying parameter estimation: Application to induction motors”, in Electric Power
            Systems Research, Elsevier Edition, Vol. 78, pp. 1881-1888, 2008,
            doi:10.1016/j.epsr.2008.03.014.",

            "description_1" => "G. Kenne, T. Ahmed-Ali, F. Lamnabhi-Lagarrigue, and A. Arzande, “Nonlinear systems
            time-varying parameter estimation: Application to induction motors”, in Electric Power
            Systems Research, Elsevier Edition, Vol. 78, pp. 1881-1888, 2008,
            doi:10.1016/j.epsr.2008.03.014.",

            "description_2" => "G. Kenne, T. Ahmed-Ali, F. Lamnabhi-Lagarrigue, and A. Arzande, “Nonlinear systems
            time-varying parameter estimation: Application to induction motors”, in Electric Power
            Systems Research, Elsevier Edition, Vol. 78, pp. 1881-1888, 2008,
            doi:10.1016/j.epsr.2008.03.014."


            // "lien_externe" => "",
            , "status" => true,
        ];

        $publication_5_10 = [
            "type_publication_id" => 7,
            "annee_publication_id" => 8,

            "titre" => "J. C. Chedjou, K. Kyamakya, I. Moussa, Van Duc Nguyen and J. Kengne, “Performance
            evaluation of analog systems simulation methods for the analysis of nonlinear and chaotic
            modules in communications” ISAST Transactions on Electronics and Signal Processing (2),
            pp. 71-82, 2008",

            "description_1" => "J. C. Chedjou, K. Kyamakya, I. Moussa, Van Duc Nguyen and J. Kengne, “Performance
            evaluation of analog systems simulation methods for the analysis of nonlinear and chaotic
            modules in communications” ISAST Transactions on Electronics and Signal Processing (2),
            pp. 71-82, 2008",

            "description_2" => "J. C. Chedjou, K. Kyamakya, I. Moussa, Van Duc Nguyen and J. Kengne, “Performance
            evaluation of analog systems simulation methods for the analysis of nonlinear and chaotic
            modules in communications” ISAST Transactions on Electronics and Signal Processing (2),
            pp. 71-82, 2008"


            // "lien_externe" => "",
            , "status" => true,
        ];

        $publication_5_11 = [
            "type_publication_id" => 7,
            "annee_publication_id" => 8,

            "titre" => "J. Kengne, J. C. Chedjou, V.A. Fono and K. Kyamakya, “On the analysis of bipolar transistor
            based chaotic circuits: case of a two-stage Colpitts oscillator” Nonlinear Dynamics, (doi:
            10.1007/s11071-011-0066-7).
            ",

            "description_1" => "J. Kengne, J. C. Chedjou, V.A. Fono and K. Kyamakya, “On the analysis of bipolar transistor
            based chaotic circuits: case of a two-stage Colpitts oscillator” Nonlinear Dynamics, (doi:
            10.1007/s11071-011-0066-7).
            ",

            "description_2" => "J. Kengne, J. C. Chedjou, V.A. Fono and K. Kyamakya, “On the analysis of bipolar transistor
            based chaotic circuits: case of a two-stage Colpitts oscillator” Nonlinear Dynamics, (doi:
            10.1007/s11071-011-0066-7).
            "


            // "lien_externe" => "",
            , "status" => true,
        ];

        $publication_5_12 = [
            "type_publication_id" => 7,
            "annee_publication_id" => 8,

            "titre" => "Tom Veldkamp, and Peter H. Verburg.
            2008. Comparing the input, output, and validation maps for several models of land change.
            Annals of Regional Science 42(1): 11-47",

            "description_1" => "Pontius Jr, Robert Gilmore, Wideke Boersma, Jean-Christophe Castella, Keith Clarke, Ton
            de Nijs, Charles Dietzel, Zengqiang Duan, Eric Fotsing, Noah Goldstein, Kasper Kok, Eric
            Koomen, Christopher D. Lippitt, William McConnell, Alias Mohd Sood, Bryan Pijanowski,
            Snehal Pithadia, Sean Sweeney, Tran Ngoc Trung, A. Tom Veldkamp, and Peter H. Verburg.
            2008. Comparing the input, output, and validation maps for several models of land change.
            Annals of Regional Science 42(1): 11-47",

            "description_2" => "Pontius Jr, Robert Gilmore, Wideke Boersma, Jean-Christophe Castella, Keith Clarke, Ton
            de Nijs, Charles Dietzel, Zengqiang Duan, Eric Fotsing, Noah Goldstein, Kasper Kok, Eric
            Koomen, Christopher D. Lippitt, William McConnell, Alias Mohd Sood, Bryan Pijanowski,
            Snehal Pithadia, Sean Sweeney, Tran Ngoc Trung, A. Tom Veldkamp, and Peter H. Verburg.
            2008. Comparing the input, output, and validation maps for several models of land change.
            Annals of Regional Science 42(1): 11-47"


            // "lien_externe" => "",
            , "status" => true,
        ];

        $publication_5_13 = [
            "type_publication_id" => 7,
            "annee_publication_id" => 8,

            "titre" => " Apport de la télédétection dans
            l’étude de l’évolution de la ligne de rivage de la cote littorale camerounaise,
            AfricaGeoscienceReview, Special publication 2008/01&2, pp. 131-136.
            ",

            "description_1" => "kono A., Tonye E., Talla-Tankam N., Dipanda A, 2008, Apport de la télédétection dans
            l’étude de l’évolution de la ligne de rivage de la cote littorale camerounaise,
            AfricaGeoscienceReview, Special publication 2008/01&2, pp. 131-136.
            ",

            "description_2" => "kono A., Tonye E., Talla-Tankam N., Dipanda A, 2008, Apport de la télédétection dans
            l’étude de l’évolution de la ligne de rivage de la cote littorale camerounaise,
            AfricaGeoscienceReview, Special publication 2008/01&2, pp. 131-136.
            "


            // "lien_externe" => "",
            , "status" => true,
        ];

        // publication de type :Articles publiés dans les revues indexées => id = 7
        // annee 2009 => id = 9

        $publication_5_14 = [
            "type_publication_id" => 7,
            "annee_publication_id" => 9,

            "titre" => "Implémentation de SIEL (Système Intégré d’Enseignement en Ligne basé sur Internet),
            Journal Langue et Communication, N° 07 novembre 2009, Revue scientifique internationale
            de recherche multidisciplinaire, pp 337-352, ISSN 1560-3407
            ",

            "description_1" => "Marcellin NKENLIFACK, Raoul NANGUE, Thierry NOULAMO et Alexis KWONCHE,
            Les TICE au service de la Formation Ouverte à Distance à l’Université de Dschang :
            Implémentation de SIEL (Système Intégré d’Enseignement en Ligne basé sur Internet),
            Journal Langue et Communication, N° 07 novembre 2009, Revue scientifique internationale
            de recherche multidisciplinaire, pp 337-352, ISSN 1560-3407",

            "description_2" => ""


            // "lien_externe" => "",
            , "status" => true,
        ];

        $publication_5_15 = [
            "type_publication_id" => 7,
            "annee_publication_id" => 9,

            "titre" => "G. Kenne, T. Ahmed-Ali, F. Lamnabhi-Lagarrigue, and A. Arzande, “Real-time speed and
            flux adaptive control of induction motors using unknown time-varying rotor resistance and
            load torque”, in IEEE Trans. On Energy Conversion, Vol. 24, pp. 375-387, 2009, doi:
            10.1109/TEC.2008.926042.",

            "description_1" => "G. Kenne, T. Ahmed-Ali, F. Lamnabhi-Lagarrigue, and A. Arzande, “Real-time speed and
            flux adaptive control of induction motors using unknown time-varying rotor resistance and
            load torque”, in IEEE Trans. On Energy Conversion, Vol. 24, pp. 375-387, 2009, doi:
            10.1109/TEC.2008.926042.",

            "description_2" => "G. Kenne, T. Ahmed-Ali, F. Lamnabhi-Lagarrigue, and A. Arzande, “Real-time speed and
            flux adaptive control of induction motors using unknown time-varying rotor resistance and
            load torque”, in IEEE Trans. On Energy Conversion, Vol. 24, pp. 375-387, 2009, doi:
            10.1109/TEC.2008.926042."


            // "lien_externe" => "",
            , "status" => true,
        ];

        $publication_5_16 = [
            "type_publication_id" => 7,
            "annee_publication_id" => 9,

            "titre" => "T. Ahmed-Ali, G. Kenne, and F. Lamnabhi-Lagarrigue, “Identification of nonlinear systems
            with time-varying parameters using a sliding-neural network observer”, in Neurocomputing,
            Elsevier Edition, Vol. 72, pp. 1611-1620, 2009, doi:10.1016/j.neucom.2008.09.001.",

            "description_1" => "T. Ahmed-Ali, G. Kenne, and F. Lamnabhi-Lagarrigue, “Identification of nonlinear systems
            with time-varying parameters using a sliding-neural network observer”, in Neurocomputing,
            Elsevier Edition, Vol. 72, pp. 1611-1620, 2009, doi:10.1016/j.neucom.2008.09.001.",

            "description_2" => "T. Ahmed-Ali, G. Kenne, and F. Lamnabhi-Lagarrigue, “Identification of nonlinear systems
            with time-varying parameters using a sliding-neural network observer”, in Neurocomputing,
            Elsevier Edition, Vol. 72, pp. 1611-1620, 2009, doi:10.1016/j.neucom.2008.09.001."


            // "lien_externe" => "",
            , "status" => true,
        ];

        $publication_5_17 = [
            "type_publication_id" => 7,
            "annee_publication_id" => 9,

            "titre" => "D. Tchiotsop, A. Tiedeu, M. Kom. Approches de Compression des Signaux ECG avec les
            Polynômes Orthogonaux, Ingénierie et Recherche BioMédicale (IRBM) 2009, In press,
            disponible en ligne sur le site: doi: 10.1016/j.irbm.2009.08.001 .",

            "description_1" => "D. Tchiotsop, A. Tiedeu, M. Kom. Approches de Compression des Signaux ECG avec les
            Polynômes Orthogonaux, Ingénierie et Recherche BioMédicale (IRBM) 2009, In press,
            disponible en ligne sur le site: doi: 10.1016/j.irbm.2009.08.001 .",

            "description_2" => "D. Tchiotsop, A. Tiedeu, M. Kom. Approches de Compression des Signaux ECG avec les
            Polynômes Orthogonaux, Ingénierie et Recherche BioMédicale (IRBM) 2009, In press,
            disponible en ligne sur le site: doi: 10.1016/j.irbm.2009.08.001 ."


            // "lien_externe" => "",
            , "status" => true,
        ];

        $publication_5_18 = [
            "type_publication_id" => 7,
            "annee_publication_id" => 9,

            "titre" => "J. Fotsing, E. Tonye, N. Talla Tankam, T. F. N. Kanaa, J. P. Rudant, 2009, Classification non
            supervisée d’image RSO a l’aide d’extremums locaux d’histogramme : applications à la
            cartographie de la mangrove littorale camerounaise, Revue française de photogrammétrie.
            2008(1), pp.28-39",

            "description_1" => "J. Fotsing, E. Tonye, N. Talla Tankam, T. F. N. Kanaa, J. P. Rudant, 2009, Classification non
            supervisée d’image RSO a l’aide d’extremums locaux d’histogramme : applications à la
            cartographie de la mangrove littorale camerounaise, Revue française de photogrammétrie.
            2008(1), pp.28-39",

            "description_2" => "J. Fotsing, E. Tonye, N. Talla Tankam, T. F. N. Kanaa, J. P. Rudant, 2009, Classification non
            supervisée d’image RSO a l’aide d’extremums locaux d’histogramme : applications à la
            cartographie de la mangrove littorale camerounaise, Revue française de photogrammétrie.
            2008(1), pp.28-39"


            // "lien_externe" => "",
            , "status" => true,
        ];

        $publication_5_19 = [
            "type_publication_id" => 7,
            "annee_publication_id" => 9,

            "titre" => "Noulamo T., Tanyi E., Nkenlifack M., Lienou J. P., “ Domain specific model and generic
            architectures for control and monitoring of dynamic system”, Journal: ADVANCES IN
            COMPUTER SCIENCE AND ENGINEERING, PUSHPA PUBLISHING HOUSE, ISSN
            0973-6999, INDIA, 2009",

            "description_1" => "Noulamo T., Tanyi E., Nkenlifack M., Lienou J. P., “ Domain specific model and generic
            architectures for control and monitoring of dynamic system”, Journal: ADVANCES IN
            COMPUTER SCIENCE AND ENGINEERING, PUSHPA PUBLISHING HOUSE, ISSN
            0973-6999, INDIA, 2009",

            "description_2" => "Noulamo T., Tanyi E., Nkenlifack M., Lienou J. P., “ Domain specific model and generic
            architectures for control and monitoring of dynamic system”, Journal: ADVANCES IN
            COMPUTER SCIENCE AND ENGINEERING, PUSHPA PUBLISHING HOUSE, ISSN
            0973-6999, INDIA, 2009"


            // "lien_externe" => "",
            , "status" => true,
        ];

        // publication de type :Articles publiés dans les revues indexées => id = 7
        // annee 2010 => id = 10
        $publication_5_20 = [
            "type_publication_id" => 7,
            "annee_publication_id" => 10,

            "titre" => "Emmanuel Tanyi and Marcellin Nkenlifack, Une Adaptation d’UML à la Modélisation des
            Systèmes Hybrides, Revue des Sciences et Technologies de l’Automatique, Vol. 7, N°2 -
            2ème semestre 2010, pp 46-57, ISSN 1954-3522",

            "description_1" => "Emmanuel Tanyi and Marcellin Nkenlifack, Une Adaptation d’UML à la Modélisation des
            Systèmes Hybrides, Revue des Sciences et Technologies de l’Automatique, Vol. 7, N°2 -
            2ème semestre 2010, pp 46-57, ISSN 1954-3522",

            "description_2" => "Emmanuel Tanyi and Marcellin Nkenlifack, Une Adaptation d’UML à la Modélisation des
            Systèmes Hybrides, Revue des Sciences et Technologies de l’Automatique, Vol. 7, N°2 -
            2ème semestre 2010, pp 46-57, ISSN 1954-3522"


            // "lien_externe" => "",
            , "status" => true,
        ];

        $publication_5_21 = [
            "type_publication_id" => 7,
            "annee_publication_id" => 10,

            "titre" => "G. Kenne, R. Goma, H. Nkwawo, F. Lamnabhi-Lagarrigue, A. Arzande, J. C. Vannier,
            “Real-time transient stabilization and voltage regulation of power generators with unknown
            mechanical power input”, in Energy Conversion and Management, Elsevier, Vol. 51, pp. 218-
            224, 2010, doi:10.1016/j.enconman.2009.09.018.",

            "description_1" => "G. Kenne, R. Goma, H. Nkwawo, F. Lamnabhi-Lagarrigue, A. Arzande, J. C. Vannier,
            “Real-time transient stabilization and voltage regulation of power generators with unknown
            mechanical power input”, in Energy Conversion and Management, Elsevier, Vol. 51, pp. 218-
            224, 2010, doi:10.1016/j.enconman.2009.09.018.",

            "description_2" => "G. Kenne, R. Goma, H. Nkwawo, F. Lamnabhi-Lagarrigue, A. Arzande, J. C. Vannier,
            “Real-time transient stabilization and voltage regulation of power generators with unknown
            mechanical power input”, in Energy Conversion and Management, Elsevier, Vol. 51, pp. 218-
            224, 2010, doi:10.1016/j.enconman.2009.09.018."


            // "lien_externe" => "",
            , "status" => true,
        ];

        $publication_5_22 = [
            "type_publication_id" => 7,
            "annee_publication_id" => 10,

            "titre" => "G. Kenne, R. Goma, H. Nkwawo, F. Lamnabhi-Lagarrigue, A. Arzande, J. C. Vannier, “An
            improved direct feedback linearization technique for transient stability enhancement and
            voltage regulation of power generators”, in International Journal of Electrical Power and
            Energy Systems, Elsevier, Vol. 32, pp. 809-816, 2010, doi:10.1016/j.ijepes.2010.01.018.",

            "description_1" => "G. Kenne, R. Goma, H. Nkwawo, F. Lamnabhi-Lagarrigue, A. Arzande, J. C. Vannier, “An
            improved direct feedback linearization technique for transient stability enhancement and
            voltage regulation of power generators”, in International Journal of Electrical Power and
            Energy Systems, Elsevier, Vol. 32, pp. 809-816, 2010, doi:10.1016/j.ijepes.2010.01.018.",

            "description_2" => "G. Kenne, R. Goma, H. Nkwawo, F. Lamnabhi-Lagarrigue, A. Arzande, J. C. Vannier, “An
            improved direct feedback linearization technique for transient stability enhancement and
            voltage regulation of power generators”, in International Journal of Electrical Power and
            Energy Systems, Elsevier, Vol. 32, pp. 809-816, 2010, doi:10.1016/j.ijepes.2010.01.018."


            // "lien_externe" => "",
            , "status" => true,
        ];

        $publication_5_23 = [
            "type_publication_id" => 7,
            "annee_publication_id" => 10,

            "titre" => "G. Kenne, R. S. Simo, F. Lamnabhi-Lagarrigue, A. Arzande, J. C. Vannier, “An online
            simplified rotor resistance estimator for induction motors”, in IEEE Trans. On Control
            Systems Technology, Vol. 18, pp. 1188-1194, 2010, doi: 10.1109/TCST.2009.2033790",

            "description_1" => "G. Kenne, R. S. Simo, F. Lamnabhi-Lagarrigue, A. Arzande, J. C. Vannier, “An online
            simplified rotor resistance estimator for induction motors”, in IEEE Trans. On Control
            Systems Technology, Vol. 18, pp. 1188-1194, 2010, doi: 10.1109/TCST.2009.2033790",

            "description_2" => "G. Kenne, R. S. Simo, F. Lamnabhi-Lagarrigue, A. Arzande, J. C. Vannier, “An online
            simplified rotor resistance estimator for induction motors”, in IEEE Trans. On Control
            Systems Technology, Vol. 18, pp. 1188-1194, 2010, doi: 10.1109/TCST.2009.2033790"


            // "lien_externe" => "",
            , "status" => true,
        ];

        $publication_5_24 = [
            "type_publication_id" => 7,
            "annee_publication_id" => 10,

            "titre" => "E. Mbaka Nfah, J. Mucho Ngundam, G. Kenne, Economic evaluation of small-scale
            photovoltaic hybrid systems for mini-grid applications in far north Cameroon, in Renewable
            Energy, Elsevier, Vol. 35 , pp. 2391-2398, 2010, doi:10.1016/j.renene.2010.03.005.",

            "description_1" => "E. Mbaka Nfah, J. Mucho Ngundam, G. Kenne, Economic evaluation of small-scale
            photovoltaic hybrid systems for mini-grid applications in far north Cameroon, in Renewable
            Energy, Elsevier, Vol. 35 , pp. 2391-2398, 2010, doi:10.1016/j.renene.2010.03.005.",

            "description_2" => "E. Mbaka Nfah, J. Mucho Ngundam, G. Kenne, Economic evaluation of small-scale
            photovoltaic hybrid systems for mini-grid applications in far north Cameroon, in Renewable
            Energy, Elsevier, Vol. 35 , pp. 2391-2398, 2010, doi:10.1016/j.renene.2010.03.005."


            // "lien_externe" => "",
            , "status" => true,
        ];


        $publication_5_25 = [
            "type_publication_id" => 7,
            "annee_publication_id" => 10,

            "titre" => "D. Tchiotsop, S. Ionita. ECG Data Communication Using Chebyshev Polynomial
            compression methods, Telecommunicatii Numere Publicate, AN XVI, n°2 décembre 2010
            AGIR (Asociaţia Generală a Inginerilor din România ), disponible en ligne sur le site :
            http://www.agir.ro/buletine/868.pdf",

            "description_1" => "D. Tchiotsop, S. Ionita. ECG Data Communication Using Chebyshev Polynomial
            compression methods, Telecommunicatii Numere Publicate, AN XVI, n°2 décembre 2010
            AGIR (Asociaţia Generală a Inginerilor din România ), disponible en ligne sur le site :
            http://www.agir.ro/buletine/868.pdf",

            "description_2" => "D. Tchiotsop, S. Ionita. ECG Data Communication Using Chebyshev Polynomial
            compression methods, Telecommunicatii Numere Publicate, AN XVI, n°2 décembre 2010
            AGIR (Asociaţia Generală a Inginerilor din România ), disponible en ligne sur le site :
            http://www.agir.ro/buletine/868.pdf",

            "lien_externe" => "http://www.agir.ro/buletine/868.pdf"


            // "lien_externe" => "",
            , "status" => true,
        ];

        $publication_5_26 = [
            "type_publication_id" => 7,
            "annee_publication_id" => 10,

            "titre" => "J. Fotsing, E. Tonyé, N. Talla Tankam, T.F.N. Kanaa, J.P. Rudant, 2010, Contribution of
            remote sensing in the studiy of the evolution of a shoreline : application to the cameroonian
            littoral coast. Israel Society of Photogrammetry and Remote Sensing (SPRS) Archive Vol.
            XXXVIII, Part 4-8-2-W9.",

            "description_1" => "J. Fotsing, E. Tonyé, N. Talla Tankam, T.F.N. Kanaa, J.P. Rudant, 2010, Contribution of
            remote sensing in the studiy of the evolution of a shoreline : application to the cameroonian
            littoral coast. Israel Society of Photogrammetry and Remote Sensing (SPRS) Archive Vol.
            XXXVIII, Part 4-8-2-W9.",

            "description_2" => "J. Fotsing, E. Tonyé, N. Talla Tankam, T.F.N. Kanaa, J.P. Rudant, 2010, Contribution of
            remote sensing in the studiy of the evolution of a shoreline : application to the cameroonian
            littoral coast. Israel Society of Photogrammetry and Remote Sensing (SPRS) Archive Vol.
            XXXVIII, Part 4-8-2-W9."


            // "lien_externe" => "",
            , "status" => true,
        ];

        $publication_5_27 = [
            "type_publication_id" => 7,
            "annee_publication_id" => 10,

            "titre" => "T. Noulamo, E. Tanyi, M. Nkenlifack and J. P. Lienou, Domain specific model and generic
            architectures for control and monitoring of dynamic systems, Advances in Computer Science
            and Engineering Volume 4, Issue 1, Pages 55 - 75 (February 2010)
            ",

            "description_1" => "T. Noulamo, E. Tanyi, M. Nkenlifack and J. P. Lienou, Domain specific model and generic
            architectures for control and monitoring of dynamic systems, Advances in Computer Science
            and Engineering Volume 4, Issue 1, Pages 55 - 75 (February 2010)
            ",

            "description_2" => "T. Noulamo, E. Tanyi, M. Nkenlifack and J. P. Lienou, Domain specific model and generic
            architectures for control and monitoring of dynamic systems, Advances in Computer Science
            and Engineering Volume 4, Issue 1, Pages 55 - 75 (February 2010)
            "


            // "lien_externe" => "",
            , "status" => true,
        ];

        $publication_5_28 = [
            "type_publication_id" => 7,
            "annee_publication_id" => 10,

            "titre" => "Jean-Pierre Lienou, Marcellin Nkenlifack, Emmanuel Tanyi and Thierry Noulamo A generic
            multi agent-based platform for reliable diagnostic by DGA, Advances in Computer Science
            and Engineering Volume 5, Issue 1, Pages 11 - 23 (August 2010)
            ",

            "description_1" => "Jean-Pierre Lienou, Marcellin Nkenlifack, Emmanuel Tanyi and Thierry Noulamo A generic
            multi agent-based platform for reliable diagnostic by DGA, Advances in Computer Science
            and Engineering Volume 5, Issue 1, Pages 11 - 23 (August 2010)
            ",

            "description_2" => "Jean-Pierre Lienou, Marcellin Nkenlifack, Emmanuel Tanyi and Thierry Noulamo A generic
            multi agent-based platform for reliable diagnostic by DGA, Advances in Computer Science
            and Engineering Volume 5, Issue 1, Pages 11 - 23 (August 2010)
            "


            // "lien_externe" => "",
            , "status" => true,
        ];

        // publication de type :Articles publiés dans les revues indexées => id = 7
        // annee 2011 => id = 11
        $publication_5_29 = [
            "type_publication_id" => 7,
            "annee_publication_id" => 11,

            "titre" => ". Marcellin Nkenlifack, Emmanuel Tanyi and Landry Domche, Interoperability between the
            Improved Metagraph HAD and Grafcet: Case of the Power Network of Cameroon,
            International Journal of Research and Reviews in Applied Sciences (IJRRAS) Vol. 9 Issue 1,
            Oct. 2011, availqable online at http://www.arpapress.com/ijrras/index.aspx, ISSN: 2076-734X,
            EISSN: 2076-7366",

            "description_1" => ". Marcellin Nkenlifack, Emmanuel Tanyi and Landry Domche, Interoperability between the
            Improved Metagraph HAD and Grafcet: Case of the Power Network of Cameroon,
            International Journal of Research and Reviews in Applied Sciences (IJRRAS) Vol. 9 Issue 1,
            Oct. 2011, availqable online at http://www.arpapress.com/ijrras/index.aspx, ISSN: 2076-734X,
            EISSN: 2076-7366",

            "description_2" => ". Marcellin Nkenlifack, Emmanuel Tanyi and Landry Domche, Interoperability between the
            Improved Metagraph HAD and Grafcet: Case of the Power Network of Cameroon,
            International Journal of Research and Reviews in Applied Sciences (IJRRAS) Vol. 9 Issue 1,
            Oct. 2011, availqable online at http://www.arpapress.com/ijrras/index.aspx, ISSN: 2076-734X,
            EISSN: 2076-7366",

            "lien_externe" => "http://www.arpapress.com/ijrras/index.aspx", "status" => true,
        ];

        $publication_5_30 = [
            "type_publication_id" => 7,
            "annee_publication_id" => 11,

            "titre" => "Marcellin Nkenlifack, Emmanuel Tanyi and Janvier Nzeutchap, A Dynamic Construction
            Algorithm and Verification of the Grafcet, International Journal of Scientific & Engineering
            Research (IJSER) Volume 2, Issue 9, September-2011, available online at
            http://www.ijser.org, ISSN 2229-5518
            ",

            "description_1" => "Marcellin Nkenlifack, Emmanuel Tanyi and Janvier Nzeutchap, A Dynamic Construction
            Algorithm and Verification of the Grafcet, International Journal of Scientific & Engineering
            Research (IJSER) Volume 2, Issue 9, September-2011, available online at
            http://www.ijser.org, ISSN 2229-5518
            ",

            "description_2" => "Marcellin Nkenlifack, Emmanuel Tanyi and Janvier Nzeutchap, A Dynamic Construction
            Algorithm and Verification of the Grafcet, International Journal of Scientific & Engineering
            Research (IJSER) Volume 2, Issue 9, September-2011, available online at
            http://www.ijser.org, ISSN 2229-5518
            ",

            "lien_externe" => "http://www.ijser.org",
            "status" => true,
        ];

        $publication_5_31 = [
            "type_publication_id" => 7,
            "annee_publication_id" => 11,

            "titre" => " Marcellin Nkenlifack, Bethin Demsong, A. Teko Domche and Raoul Nangue, An Approach
            for Teaching of National Languages and Cultures through ICT in Cameroon, International
            Journal of Advanced Computer Science and Applications (IJACSA), Volume 2, Issue 7, July
            2011, available online at http://ijacsa.thesai.org/, ISSN 2156-5570",

            "description_1" => "Marcellin Nkenlifack, Bethin Demsong, A. Teko Domche and Raoul Nangue, An Approach
            for Teaching of National Languages and Cultures through ICT in Cameroon, International
            Journal of Advanced Computer Science and Applications (IJACSA), Volume 2, Issue 7, July
            2011, available online at http://ijacsa.thesai.org/, ISSN 2156-5570
            Emmanuel Tanyi and Marcellin Nkenlifack, Modélisation Unifiée Hybride et Simulation des
            Systèmes de Contrôle, Revue des Sciences et Technologies de l’Automatique, Vol. 8, N°1 –
            1er semestre 2011, pp 31-43, ISSN 1954-3522
            ",

            "description_2" => ". Marcellin Nkenlifack, Bethin Demsong, A. Teko Domche and Raoul Nangue, An Approach
            for Teaching of National Languages and Cultures through ICT in Cameroon, International
            Journal of Advanced Computer Science and Applications (IJACSA), Volume 2, Issue 7, July
            2011, available online at http://ijacsa.thesai.org/, ISSN 2156-5570
            Emmanuel Tanyi and Marcellin Nkenlifack, Modélisation Unifiée Hybride et Simulation des
            Systèmes de Contrôle, Revue des Sciences et Technologies de l’Automatique, Vol. 8, N°1 –
            1er semestre 2011, pp 31-43, ISSN 1954-3522
            ",

            "lien_externe" => " http://ijacsa.thesai.org/",
            "status" => true,
        ];

        $publication_5_32 = [
            "type_publication_id" => 7,
            "annee_publication_id" => 11,

            "titre" => " Marcellin Nkenlifack, Raoul Nangue, Bethin Demsong and Victor Kuate Fotso, ICT for
            Education: A Platform for Modernization of computer science teaching methods in
            secondary schools in Cameroon, International Journal of Advanced Computer Science and
            Applications (IJACSA), Volume 2 Issue 4, April 2011, pp 124 - 133, available online at
            http://ijacsa.thesai.org/, ISSN 2156-5570 (Online) - 2158-107X (Print)",

            "description_1" => " Marcellin Nkenlifack, Raoul Nangue, Bethin Demsong and Victor Kuate Fotso, ICT for
            Education: A Platform for Modernization of computer science teaching methods in
            secondary schools in Cameroon, International Journal of Advanced Computer Science and
            Applications (IJACSA), Volume 2 Issue 4, April 2011, pp 124 - 133, available online at
            http://ijacsa.thesai.org/, ISSN 2156-5570 (Online) - 2158-107X (Print)",

            "description_2" => " Marcellin Nkenlifack, Raoul Nangue, Bethin Demsong and Victor Kuate Fotso, ICT for
            Education: A Platform for Modernization of computer science teaching methods in
            secondary schools in Cameroon, International Journal of Advanced Computer Science and
            Applications (IJACSA), Volume 2 Issue 4, April 2011, pp 124 - 133, available online at
            http://ijacsa.thesai.org/, ISSN 2156-5570 (Online) - 2158-107X (Print)",

            "lien_externe" => "http://ijacsa.thesai.org/",
            "status" => true,
        ];

        $publication_5_33 = [
            "type_publication_id" => 7,
            "annee_publication_id" => 11,

            "titre" => "Marcellin Nkenlifack, Bethin Demsong and Raoul Nangue, Identité Numérique et Education :
                Enseignement des Langues Camerounaises grâce aux TIC, International Journal of
                Information Sciences for Decision Making, Volume 41, N° 712, mars 2011, pp 1 - 11,
                available online at http://isdm.univ-tln.fr, ISSN 1265-499X",

            "description_1" => "Marcellin Nkenlifack, Bethin Demsong and Raoul Nangue, Identité Numérique et Education :
                Enseignement des Langues Camerounaises grâce aux TIC, International Journal of
                Information Sciences for Decision Making, Volume 41, N° 712, mars 2011, pp 1 - 11,
                available online at http://isdm.univ-tln.fr, ISSN 1265-499X",

            "description_2" => "Marcellin Nkenlifack, Bethin Demsong and Raoul Nangue, Identité Numérique et Education :
                Enseignement des Langues Camerounaises grâce aux TIC, International Journal of
                Information Sciences for Decision Making, Volume 41, N° 712, mars 2011, pp 1 - 11,
                available online at http://isdm.univ-tln.fr, ISSN 1265-499X",

            "lien_externe" => "http://isdm.univ-tln.fr",
            "status" => true,
        ];

        $publication_5_34 = [
            "type_publication_id" => 7,
            "annee_publication_id" => 11,

            "titre" => "M. NKENLIFACK, E. TANYI and F. FOKOU, Establishing bridges between UML, HAD
            and GRAFCET Metamodels for the Modelling of Dynamic Systems, International Journal of
            Scientific and Engineering Research, Volume 2, Issue 3, March 2011, pp 1 - 12, available
            online at http://www.ijser.org, ISSN 2229-5518",

            "description_1" => "M. NKENLIFACK, E. TANYI and F. FOKOU, Establishing bridges between UML, HAD
            and GRAFCET Metamodels for the Modelling of Dynamic Systems, International Journal of
            Scientific and Engineering Research, Volume 2, Issue 3, March 2011, pp 1 - 12, available
            online at http://www.ijser.org, ISSN 2229-5518",

            "description_2" => "M. NKENLIFACK, E. TANYI and F. FOKOU, Establishing bridges between UML, HAD
            and GRAFCET Metamodels for the Modelling of Dynamic Systems, International Journal of
            Scientific and Engineering Research, Volume 2, Issue 3, March 2011, pp 1 - 12, available
            online at http://www.ijser.org, ISSN 2229-5518",

            "lien_externe" => " http://www.ijser.org",
            "status" => true,
        ];

        $publication_5_35 = [
            "type_publication_id" => 7,
            "annee_publication_id" => 11,

            "titre" => "Marcellin Nkenlifack, Emmanuel Tanyi and Fabrice FOKOU, Amelioration of the HAD
            Metamodel for the Modelling of Complex Hybrid Systems, International Journal of Advances
            Research in Computer Science, Volume 2, No. 1, Jan-Feb 2011, pp 370-380, available online
            at http://www.ijarcs.info, ISSN 0976 - 5697
            ",

            "description_1" => "Marcellin Nkenlifack, Emmanuel Tanyi and Fabrice FOKOU, Amelioration of the HAD
            Metamodel for the Modelling of Complex Hybrid Systems, International Journal of Advances
            Research in Computer Science, Volume 2, No. 1, Jan-Feb 2011, pp 370-380, available online
            at http://www.ijarcs.info, ISSN 0976 - 5697
            ",

            "description_2" => "Marcellin Nkenlifack, Emmanuel Tanyi and Fabrice FOKOU, Amelioration of the HAD
            Metamodel for the Modelling of Complex Hybrid Systems, International Journal of Advances
            Research in Computer Science, Volume 2, No. 1, Jan-Feb 2011, pp 370-380, available online
            at http://www.ijarcs.info, ISSN 0976 - 5697
            ",

            "lien_externe" => "http://www.ijarcs.info",
            "status" => true,
        ];

        $publication_5_36 = [
            "type_publication_id" => 7,
            "annee_publication_id" => 11,

            "titre" => " G. Kenne, T. Ahmed-Ali, F. Lamnabhi-Lagarrigue, A. Arzande, J. C. Vannier, An improved
            rotor resistance estimator for induction motors adaptive control, in Electric Power Systems
            Research, Elsevier, Vol. 81, pp. 930-941, 2011, doi:10.1016/j.epsr.2010.11.020.",

            "description_1" => " G. Kenne, T. Ahmed-Ali, F. Lamnabhi-Lagarrigue, A. Arzande, J. C. Vannier, An improved
            rotor resistance estimator for induction motors adaptive control, in Electric Power Systems
            Research, Elsevier, Vol. 81, pp. 930-941, 2011, doi:10.1016/j.epsr.2010.11.020.",

            "description_2" => "G. Kenne, T. Ahmed-Ali, F. Lamnabhi-Lagarrigue, A. Arzande, J. C. Vannier, An improved
            rotor resistance estimator for induction motors adaptive control, in Electric Power Systems
            Research, Elsevier, Vol. 81, pp. 930-941, 2011, doi:10.1016/j.epsr.2010.11.020.",

            "lien_externe" => "https://linkinghub.elsevier.com/retrieve/pii/S0378779610002920",
            "status" => true,
        ];


        $publication_5_37 = [
            "type_publication_id" => 7,
            "annee_publication_id" => 11,

            "titre" => "H. G. Kom, A. Tiedeu, J. M. Ngundam. Computerized mass detection on mammograms
            using wavelets enhancement and entropy maximization thresholding methods. In Current
            Development in Theory and Applications of Wavelets (CDTAW), Vol.5 N°2-3, pp. 65-92,
            November 2011.",

            "description_1" => "H. G. Kom, A. Tiedeu, J. M. Ngundam. Computerized mass detection on mammograms
            using wavelets enhancement and entropy maximization thresholding methods. In Current
            Development in Theory and Applications of Wavelets (CDTAW), Vol.5 N°2-3, pp. 65-92,
            November 2011.",

            "description_2" => "H. G. Kom, A. Tiedeu, J. M. Ngundam. Computerized mass detection on mammograms
            using wavelets enhancement and entropy maximization thresholding methods. In Current
            Development in Theory and Applications of Wavelets (CDTAW), Vol.5 N°2-3, pp. 65-92,
            November 2011."

            // "lien_externe" => "",
            , "status" => true,
        ];


        $publication_5_38 = [
            "type_publication_id" => 7,
            "annee_publication_id" => 11,

            "titre" => "N. Talla Tankam, A. Dipanda, E. Tonyé, J. Fotsing, 2011, Une approche parallèle
            d’évaluation des paramètres de texture pour l’analyse d’images de grande taille, Revue
            française de photogrammétrie et de télédétection ISSN 1768-9791. 2011, no195, pp. 18-30
            [13 page(s) (article)] (1/2 p.).",

            "description_1" => "N. Talla Tankam, A. Dipanda, E. Tonyé, J. Fotsing, 2011, Une approche parallèle
            d’évaluation des paramètres de texture pour l’analyse d’images de grande taille, Revue
            française de photogrammétrie et de télédétection ISSN 1768-9791. 2011, no195, pp. 18-30
            [13 page(s) (article)] (1/2 p.).",

            "description_2" => "N. Talla Tankam, A. Dipanda, E. Tonyé, J. Fotsing, 2011, Une approche parallèle
            d’évaluation des paramètres de texture pour l’analyse d’images de grande taille, Revue
            française de photogrammétrie et de télédétection ISSN 1768-9791. 2011, no195, pp. 18-30
            [13 page(s) (article)] (1/2 p.).",

            // "lien_externe" => "",
            "status" => true,
        ];

        $publication_5_39 = [
            "type_publication_id" => 7,
            "annee_publication_id" => 11,

            "titre" => "E. Badouel, Bernard Fotsing, and RodrigueTchougong.Attributegrammars as recursion
            schemes over cyclic representations of zippers. Electronic Notes in Theoretical Computer
            ScienceVol. 229 (5) pp. 39–56, 2011.",

            "description_1" => "E. Badouel, Bernard Fotsing, and RodrigueTchougong.Attributegrammars as recursion
            schemes over cyclic representations of zippers. Electronic Notes in Theoretical Computer
            ScienceVol. 229 (5) pp. 39–56, 2011.",

            "description_2" => "E. Badouel, Bernard Fotsing, and RodrigueTchougong.Attributegrammars as recursion
            schemes over cyclic representations of zippers. Electronic Notes in Theoretical Computer
            ScienceVol. 229 (5) pp. 39–56, 2011.",

            // "lien_externe" => "",
            "status" => true,
        ];

        // publication de type :Articles publiés dans les revues indexées => id = 7
        // annee 2012 => id = 12

        $publication_5_40 = [
            "type_publication_id" => 7,
            "annee_publication_id" => 12,

            "titre" => "Fotsing, J. Tonye, E. EssimbiZobo, B. Talla Tankam, N. Kanaa, T.F.N. Rudant, J.P., 2012,
            Contribution of SAR radar images for the cartography: case of mangrove and post eruptive
            regions. \"Cartography\", ISBN 979-953-307-910-2.
            ",

            "description_1" => "Fotsing, J. Tonye, E. EssimbiZobo, B. Talla Tankam, N. Kanaa, T.F.N. Rudant, J.P., 2012,
            Contribution of SAR radar images for the cartography: case of mangrove and post eruptive
            regions. \"Cartography\", ISBN 979-953-307-910-2.",

            "description_1" => "Fotsing, J. Tonye, E. EssimbiZobo, B. Talla Tankam, N. Kanaa, T.F.N. Rudant, J.P., 2012,
            Contribution of SAR radar images for the cartography: case of mangrove and post eruptive
            regions. \"Cartography\", ISBN 979-953-307-910-2.",

            // "lien_externe" => "",
            "status" => true,
        ];

        $publication_5_41 = [
            "type_publication_id" => 7,
            "annee_publication_id" => 12,

            "titre" => " Marcellin Nkenlifack, Raoul Nangue, Bethin Demsong et Maurice Tchokomakoua,
            Approche de modernisation de l’enseignement des langues et cultures nationales du
            Cameroun à l’aide des TIC, Canadian Journal of Learning and Technology (CJLT) / La revue
            canadienne de l’apprentissage et de la technologie (RCAT), Volume 38(2) 2012.
            http://www.cjlt.ca/index.php/cjlt/article/view/620/340",

            "description_1" => " Marcellin Nkenlifack, Raoul Nangue, Bethin Demsong et Maurice Tchokomakoua,
            Approche de modernisation de l’enseignement des langues et cultures nationales du
            Cameroun à l’aide des TIC, Canadian Journal of Learning and Technology (CJLT) / La revue
            canadienne de l’apprentissage et de la technologie (RCAT), Volume 38(2) 2012.
            http://www.cjlt.ca/index.php/cjlt/article/view/620/340",

            "description_1" => " Marcellin Nkenlifack, Raoul Nangue, Bethin Demsong et Maurice Tchokomakoua,
            Approche de modernisation de l’enseignement des langues et cultures nationales du
            Cameroun à l’aide des TIC, Canadian Journal of Learning and Technology (CJLT) / La revue
            canadienne de l’apprentissage et de la technologie (RCAT), Volume 38(2) 2012.
            http://www.cjlt.ca/index.php/cjlt/article/view/620/340",

            "lien_externe" => "http://www.cjlt.ca/index.php/cjlt/article/view/620/340",
            "status" => true,
        ];

        $publication_5_42 = [
            "type_publication_id" => 7,
            "annee_publication_id" => 12,

            "titre" => "R. Mboupda Pone, A. Tiedeu, M. Kom, G. Kenne. Golay coding for penetration depth
            improvement in ultrasonography GCPDIU, in Recent Patents on Biomedical Engineering,
            Bentham Science, Vol. 5, pp. 263–276, 2012, doi: 10.2174/1874764711205030263.",

            "description_1" => "R. Mboupda Pone, A. Tiedeu, M. Kom, G. Kenne. Golay coding for penetration depth
            improvement in ultrasonography GCPDIU, in Recent Patents on Biomedical Engineering,
            Bentham Science, Vol. 5, pp. 263–276, 2012, doi: 10.2174/1874764711205030263.",

            "description_1" => "R. Mboupda Pone, A. Tiedeu, M. Kom, G. Kenne. Golay coding for penetration depth
            improvement in ultrasonography GCPDIU, in Recent Patents on Biomedical Engineering,
            Bentham Science, Vol. 5, pp. 263–276, 2012, doi: 10.2174/1874764711205030263.",

            "lien_externe" => "https://www.eurekaselect.com/article/47243",
            "status" => true,
        ];

        $publication_5_43 = [
            "type_publication_id" => 7,
            "annee_publication_id" => 12,

            "titre" => "J. Kengne, J.C. Chedjou, G. Kenne, K. Kyamakya, G.H. Kom. Analog circuit
            implementation and synchronization of a system consisting of a van der Pol oscillator linearly
            coupled to a Duffing oscillator, in Nonlinear Dynamics, Springer, Vol. 70, pp. 2163–2173,
            2012, doi:10.1007/s11071-012-0607-8.",

            "description_1" => "J. Kengne, J.C. Chedjou, G. Kenne, K. Kyamakya, G.H. Kom. Analog circuit
            implementation and synchronization of a system consisting of a van der Pol oscillator linearly
            coupled to a Duffing oscillator, in Nonlinear Dynamics, Springer, Vol. 70, pp. 2163–2173,
            2012, doi:10.1007/s11071-012-0607-8.",

            "description_1" => "J. Kengne, J.C. Chedjou, G. Kenne, K. Kyamakya, G.H. Kom. Analog circuit
            implementation and synchronization of a system consisting of a van der Pol oscillator linearly
            coupled to a Duffing oscillator, in Nonlinear Dynamics, Springer, Vol. 70, pp. 2163–2173,
            2012, doi:10.1007/s11071-012-0607-8.",

            // "lien_externe" => "",
            "status" => true,
        ];

        $publication_5_44 = [
            "type_publication_id" => 7,
            "annee_publication_id" => 12,

            "titre" => "J. Kengne, J.C. Chedjou, G. Kenne, K. Kyamakya. Dynamics properties and chaos synchronization of improved Colpitts oscillators, in Communications in Nonlinear Science and Numerical Simulation, Elsevier, Vol. 17, pp. 2914–2923, 2012, doi:10.1016/j.cnsns.2011.10.038.",

            "description_1" => "J. Kengne, J.C. Chedjou, G. Kenne, K. Kyamakya. Dynamics properties and chaos synchronization of improved Colpitts oscillators, in Communications in Nonlinear Science and Numerical Simulation, Elsevier, Vol. 17, pp. 2914–2923, 2012, doi:10.1016/j.cnsns.2011.10.038.",

            "description_1" => "J. Kengne, J.C. Chedjou, G. Kenne, K. Kyamakya. Dynamics properties and chaos synchronization of improved Colpitts oscillators, in Communications in Nonlinear Science and Numerical Simulation, Elsevier, Vol. 17, pp. 2914–2923, 2012, doi:10.1016/j.cnsns.2011.10.038.",

            "lien_externe" => "https://linkinghub.elsevier.com/retrieve/pii/S1007570411006204",
            "status" => true,
        ];

        $publication_5_45 = [
            "type_publication_id" => 7,
            "annee_publication_id" => 12,

            "titre" => "H. G. Kom, A. Tiedeu, M. Kom, J. M. Ngundam. A comparative evaluation of two algorithms of detection of masses on mammograms, in Signal & Image Processing: an International Journal (SIPIJ), Vol.3, N°1, pp.19-27, February 2012, doi:10.5121/sipij.2012.3102.",

            "description_1" => "H. G. Kom, A. Tiedeu, M. Kom, J. M. Ngundam. A comparative evaluation of two algorithms of detection of masses on mammograms, in Signal & Image Processing: an International Journal (SIPIJ), Vol.3, N°1, pp.19-27, February 2012, doi:10.5121/sipij.2012.3102.",

            "description_1" => "H. G. Kom, A. Tiedeu, M. Kom, J. M. Ngundam. A comparative evaluation of two algorithms of detection of masses on mammograms, in Signal & Image Processing: an International Journal (SIPIJ), Vol.3, N°1, pp.19-27, February 2012, doi:10.5121/sipij.2012.3102.",

            // "lien_externe" => "",
            "status" => true,
        ];

        $publication_5_46 = [
            "type_publication_id" => 7,
            "annee_publication_id" => 12,

            "titre" => "Kameni E. D., Fotsing E. et de Groot W. T., 2013. Passage d’un modèle acteur à un modèle multi-agent pour la gestion des ressources naturelles : Utilisation du méta-modèle d’acteur Action-in-Context. In URED Journal, Revue Pluridisciplinaire de l’Université Gaston Berger de Saint Louis, Série des sciences exactes, Numéro spécial tiré des Actes du CNRIA’ 2012, Colloque National sur la Recherche en Informatique et ses Applications, Presses Universitaires de Saint Louis, ISSN 08502161. pp  89-96.",

            "description_1" => "Kameni E. D., Fotsing E. et de Groot W. T., 2013. Passage d’un modèle acteur à un modèle multi-agent pour la gestion des ressources naturelles : Utilisation du méta-modèle d’acteur Action-in-Context. In URED Journal, Revue Pluridisciplinaire de l’Université Gaston Berger de Saint Louis, Série des sciences exactes, Numéro spécial tiré des Actes du CNRIA’ 2012, Colloque National sur la Recherche en Informatique et ses Applications, Presses Universitaires de Saint Louis, ISSN 08502161. pp  89-96.",

            "description_1" => "Kameni E. D., Fotsing E. et de Groot W. T., 2013. Passage d’un modèle acteur à un modèle multi-agent pour la gestion des ressources naturelles : Utilisation du méta-modèle d’acteur Action-in-Context. In URED Journal, Revue Pluridisciplinaire de l’Université Gaston Berger de Saint Louis, Série des sciences exactes, Numéro spécial tiré des Actes du CNRIA’ 2012, Colloque National sur la Recherche en Informatique et ses Applications, Presses Universitaires de Saint Louis, ISSN 08502161. pp  89-96.",

            // "lien_externe" => "",
            "status" => true,
        ];

        $publication_5_47 = [
            "type_publication_id" => 7,
            "annee_publication_id" => 12,

            "titre" => "Jean-Pierre Lienou, Maurice Tchuente and Emmanuel Tanyi A multi agent based platform for system analysis in electric power network implemented with fractional numbers, Advances in Computer Science and Engineering Volume 9, Issue 1, Pages 17 - 33 (August 2012)",

            "description_1" => "Jean-Pierre Lienou, Maurice Tchuente and Emmanuel Tanyi A multi agent based platform for system analysis in electric power network implemented with fractional numbers, Advances in Computer Science and Engineering Volume 9, Issue 1, Pages 17 - 33 (August 2012)",

            "description_1" => "Jean-Pierre Lienou, Maurice Tchuente and Emmanuel Tanyi A multi agent based platform for system analysis in electric power network implemented with fractional numbers, Advances in Computer Science and Engineering Volume 9, Issue 1, Pages 17 - 33 (August 2012)",

            // "lien_externe" => "",
            "status" => true,
        ];


        // publication de type :Articles publiés dans les revues indexées => id = 7
        // annee 2013 => id = 13
        $publication_5_48 = [
            "type_publication_id" => 7,
            "annee_publication_id" => 13,

            "titre" => "C. Djiongo, A. Mfopou, S. Moto, H. Tapamo, O. Monga, Evaluation de la biomasse forestière aérienne par analyse de la texture d’image satellite, application aux forêts du bassin du Congo, in Proc. Conf. Int. de la SociétéFrançaise Biologie Théoriquesur « Dynamique des populations, des épidémies et des ressources renouvelables en Afrique » Dakar, Sénégal, Juin 2013",

            "description_1" => "C. Djiongo, A. Mfopou, S. Moto, H. Tapamo, O. Monga, Evaluation de la biomasse forestière aérienne par analyse de la texture d’image satellite, application aux forêts du bassin du Congo, in Proc. Conf. Int. de la SociétéFrançaise Biologie Théoriquesur « Dynamique des populations, des épidémies et des ressources renouvelables en Afrique » Dakar, Sénégal, Juin 2013",

            "description_1" => "C. Djiongo, A. Mfopou, S. Moto, H. Tapamo, O. Monga, Evaluation de la biomasse forestière aérienne par analyse de la texture d’image satellite, application aux forêts du bassin du Congo, in Proc. Conf. Int. de la SociétéFrançaise Biologie Théoriquesur « Dynamique des populations, des épidémies et des ressources renouvelables en Afrique » Dakar, Sénégal, Juin 2013",

            // "lien_externe" => "",
            "status" => true,
        ];

        $publication_5_49 = [
            "type_publication_id" => 7,
            "annee_publication_id" => 13,

            "titre" => "E. Badouel, R. Tchougong, C. Nkuimi-Jugnia, and Bernard Fotsing.Attributegrammars as tree transducers over cyclic representations of infinite trees and their descriptional composition. Electronic Notes in Theoretical Computer Science. Vol. 480, pp. 1–25, April 2013",

            "description_1" => "E. Badouel, R. Tchougong, C. Nkuimi-Jugnia, and Bernard Fotsing.Attributegrammars as tree transducers over cyclic representations of infinite trees and their descriptional composition. Electronic Notes in Theoretical Computer Science. Vol. 480, pp. 1–25, April 2013",

            "description_1" => "E. Badouel, R. Tchougong, C. Nkuimi-Jugnia, and Bernard Fotsing.Attributegrammars as tree transducers over cyclic representations of infinite trees and their descriptional composition. Electronic Notes in Theoretical Computer Science. Vol. 480, pp. 1–25, April 2013",

            // "lien_externe" => "",
            "status" => true,
        ];

        $publication_5_50 = [
            "type_publication_id" => 7,
            "annee_publication_id" => 13,

            "titre" => "A. Djimeli, D. Tchiotsop, R. Tchinda. Analysis of interest points of curvelet coefficients contributions of microscopic images and improvement of edges, Signal and image processing, an international journal (SIPIJ), vol. 4, No. 2, April 2013",

            "description_1" => "A. Djimeli, D. Tchiotsop, R. Tchinda. Analysis of interest points of curvelet coefficients contributions of microscopic images and improvement of edges, Signal and image processing, an international journal (SIPIJ), vol. 4, No. 2, April 2013",

            "description_1" => "A. Djimeli, D. Tchiotsop, R. Tchinda. Analysis of interest points of curvelet coefficients contributions of microscopic images and improvement of edges, Signal and image processing, an international journal (SIPIJ), vol. 4, No. 2, April 2013",

            // "lien_externe" => "",
            "status" => true,
        ];

        $publication_5_51 = [
            "type_publication_id" => 7,
            "annee_publication_id" => 13,

            "titre" => "Eric Fotsing, Peter H. Verburg, Wouter T. De Groot, Jean-Paul Cheylan et Maurice Tchuenté, 2013. Un modèle intégré pour explorer les trajectoires d’utilisation de l’espace. In ARIMA Journal, vol. 16 (2013), pp. 1-28.",

            "description_1" => "Eric Fotsing, Peter H. Verburg, Wouter T. De Groot, Jean-Paul Cheylan et Maurice Tchuenté, 2013. Un modèle intégré pour explorer les trajectoires d’utilisation de l’espace. In ARIMA Journal, vol. 16 (2013), pp. 1-28.",

            "description_1" => "Eric Fotsing, Peter H. Verburg, Wouter T. De Groot, Jean-Paul Cheylan et Maurice Tchuenté, 2013. Un modèle intégré pour explorer les trajectoires d’utilisation de l’espace. In ARIMA Journal, vol. 16 (2013), pp. 1-28.",

            // "lien_externe" => "",
            "status" => true,
        ];

        // publication de type :Articles publiés dans les revues indexées => id = 7
        // annee 2014 => id = 14

        $publication_5_52 = [
            "type_publication_id" => 7,
            "annee_publication_id" => 14,

            "titre" => "J. Waku, C. Djiongo, A. Mfopou, L. Tchuente, S. Moto, O. Monga, Nouvelle approches méthodologiques pour l’évaluation de la biomasse forestière à partir des données satellitaires et de terrain en Afrique Centrale, in Proc. Conférence Internationale « L'observation par satellite en Afrique Centrale et de l'Ouest : de la forêt au carbone, de la recherche aux stratégies nationales REDD+ », GEOSFT’2014, Yaoundé, Cameroun, Octobre 2014",

            "description_1" => "J. Waku, C. Djiongo, A. Mfopou, L. Tchuente, S. Moto, O. Monga, Nouvelle approches méthodologiques pour l’évaluation de la biomasse forestière à partir des données satellitaires et de terrain en Afrique Centrale, in Proc. Conférence Internationale « L'observation par satellite en Afrique Centrale et de l'Ouest : de la forêt au carbone, de la recherche aux stratégies nationales REDD+ », GEOSFT’2014, Yaoundé, Cameroun, Octobre 2014",

            "description_2" => "J. Waku, C. Djiongo, A. Mfopou, L. Tchuente, S. Moto, O. Monga, Nouvelle approches méthodologiques pour l’évaluation de la biomasse forestière à partir des données satellitaires et de terrain en Afrique Centrale, in Proc. Conférence Internationale « L'observation par satellite en Afrique Centrale et de l'Ouest : de la forêt au carbone, de la recherche aux stratégies nationales REDD+ », GEOSFT’2014, Yaoundé, Cameroun, Octobre 2014",

            // "lien_externe" => "",
            "status" => true,
        ];

        $publication_5_53 = [
            "type_publication_id" => 7,
            "annee_publication_id" => 14,

            "titre" => "D. Tchiotsop, B. Saha Tchinda, R. Tchinda, G. Kenne. Edge detection of intestinal parasites in stool microscopic images using multi-scale wavelet transform, In press, Signal, Image and Video Processing, Springer, In Press 2014, doi:10.1007/s11760-014-0716-6.",

            "description_1" => "D. Tchiotsop, B. Saha Tchinda, R. Tchinda, G. Kenne. Edge detection of intestinal parasites in stool microscopic images using multi-scale wavelet transform, In press, Signal, Image and Video Processing, Springer, In Press 2014, doi:10.1007/s11760-014-0716-6.",

            "description_2" => "D. Tchiotsop, B. Saha Tchinda, R. Tchinda, G. Kenne. Edge detection of intestinal parasites in stool microscopic images using multi-scale wavelet transform, In press, Signal, Image and Video Processing, Springer, In Press 2014, doi:10.1007/s11760-014-0716-6.",

            // "lien_externe" => "",
            "status" => true,
        ];

        $publication_5_54 = [
            "type_publication_id" => 7,
            "annee_publication_id" => 14,

            "titre" => "54.	- J. Kengne, J. C. Chedjou, T. Fonzin Fozin, K. Kyamakya, G. Kenne. On the analysis of semiconductor diode-based chaotic and hyperchaotic generators - A case study, in Nonlinear Dynamics, Springer, Vol. 77, Nr. 1-2, pp. 373–386, 2014, doi: 10.1007/s11071-014-1301-9.",

            "description_1" => "54.	- J. Kengne, J. C. Chedjou, T. Fonzin Fozin, K. Kyamakya, G. Kenne. On the analysis of semiconductor diode-based chaotic and hyperchaotic generators - A case study, in Nonlinear Dynamics, Springer, Vol. 77, Nr. 1-2, pp. 373–386, 2014, doi: 10.1007/s11071-014-1301-9.",

            "description_2" => "54.	- J. Kengne, J. C. Chedjou, T. Fonzin Fozin, K. Kyamakya, G. Kenne. On the analysis of semiconductor diode-based chaotic and hyperchaotic generators - A case study, in Nonlinear Dynamics, Springer, Vol. 77, Nr. 1-2, pp. 373–386, 2014, doi: 10.1007/s11071-014-1301-9.",

            // "lien_externe" => "",
            "status" => true,
        ];

        $publication_5_55 = [
            "type_publication_id" => 7,
            "annee_publication_id" => 14,

            "titre" => "J. Kengne, J. C. Chedjou, M. Kom, K. Kyamakya and  V. Kamdoum Tamba: Regular oscillations , chaos and multi-stability in a system of two coupled van der Pol oscillators: Numerical and experimental study. , Nonlinear dynamics, 76(2), 1119, 2014.",

            "description_1" => "J. Kengne, J. C. Chedjou, M. Kom, K. Kyamakya and  V. Kamdoum Tamba: Regular oscillations , chaos and multi-stability in a system of two coupled van der Pol oscillators: Numerical and experimental study. , Nonlinear dynamics, 76(2), 1119, 2014.",

            "description_2" => "J. Kengne, J. C. Chedjou, M. Kom, K. Kyamakya and  V. Kamdoum Tamba: Regular oscillations , chaos and multi-stability in a system of two coupled van der Pol oscillators: Numerical and experimental study. , Nonlinear dynamics, 76(2), 1119, 2014.",

            // "lien_externe" => "",
            "status" => true,
        ];

        $publication_5_56 = [
            "type_publication_id" => 7,
            "annee_publication_id" => 14,

            "titre" => "E. S. Kuetche Mbe, H. B. Fotsin, J. Kengne and P. Woafo: Parameters estimation based adaptive generalized projective synchronization (GPS) of chaotic Chua’s circuit with application to chaos communication, chaos, solitons and fractals, 61:27-37, 2014.",

            "description_1" => "E. S. Kuetche Mbe, H. B. Fotsin, J. Kengne and P. Woafo: Parameters estimation based adaptive generalized projective synchronization (GPS) of chaotic Chua’s circuit with application to chaos communication, chaos, solitons and fractals, 61:27-37, 2014.",

            "description_2" => "E. S. Kuetche Mbe, H. B. Fotsin, J. Kengne and P. Woafo: Parameters estimation based adaptive generalized projective synchronization (GPS) of chaotic Chua’s circuit with application to chaos communication, chaos, solitons and fractals, 61:27-37, 2014.",

            // "lien_externe" => "",
            "status" => true,
        ];

        $publication_5_57 = [
            "type_publication_id" => 7,
            "annee_publication_id" => 14,

            "titre" => "J. Kengne, F. Kenmogne:  On the modeling and nonlinear dynamics of autonomous Silva-Young type chaotic oscillators with flat power spectrum. Chaos: an interdisciplinary journal of nonlinear science 24: 043134, 2014.",

            "description_1" => "J. Kengne, F. Kenmogne:  On the modeling and nonlinear dynamics of autonomous Silva-Young type chaotic oscillators with flat power spectrum. Chaos: an interdisciplinary journal of nonlinear science 24: 043134, 2014.",

            "description_2" => "J. Kengne, F. Kenmogne:  On the modeling and nonlinear dynamics of autonomous Silva-Young type chaotic oscillators with flat power spectrum. Chaos: an interdisciplinary journal of nonlinear science 24: 043134, 2014.",

            // "lien_externe" => "",
            "status" => true,
        ];

        $publication_5_58 = [
            "type_publication_id" => 7,
            "annee_publication_id" => 14,

            "titre" => "J. kengne, F. Kenmogne, and V. Kamdoum Tamba: Experiment on bifurcation and chaos in coupled van der Pol-Duffing oscillators. Journal of Nonlinear Dynamics, http://dx.doi.org/10.1155/2014/815783, 2014.",

            "description_1" => "J. kengne, F. Kenmogne, and V. Kamdoum Tamba: Experiment on bifurcation and chaos in coupled van der Pol-Duffing oscillators. Journal of Nonlinear Dynamics, http://dx.doi.org/10.1155/2014/815783, 2014.",

            "description_2" => "J. kengne, F. Kenmogne, and V. Kamdoum Tamba: Experiment on bifurcation and chaos in coupled van der Pol-Duffing oscillators. Journal of Nonlinear Dynamics, http://dx.doi.org/10.1155/2014/815783, 2014.",

            "lien_externe" => "http://dx.doi.org/10.1155/2014/815783",
            "status" => true,
        ];

        $publication_5_59 = [
            "type_publication_id" => 7,
            "annee_publication_id" => 14,

            "titre" => "59.	 F. Kenmogne, D. Yemélé, J. Kengne, and D. Ndjanfang: Transverse compactlike pulse signals in a two-dimensional nonlinear electrical network. Phys. Rev. E 90, 052921, 2014.",

            "description_1" => "59.	 F. Kenmogne, D. Yemélé, J. Kengne, and D. Ndjanfang: Transverse compactlike pulse signals in a two-dimensional nonlinear electrical network. Phys. Rev. E 90, 052921, 2014.",

            "description_2" => "59.	 F. Kenmogne, D. Yemélé, J. Kengne, and D. Ndjanfang: Transverse compactlike pulse signals in a two-dimensional nonlinear electrical network. Phys. Rev. E 90, 052921, 2014.",

            // "lien_externe" => "",
            "status" => true,
        ];

        $publication_5_60 = [
            "type_publication_id" => 7,
            "annee_publication_id" => 14,

            "titre" => "V. Kamdoum Tamba, H. B. Fotsin, J. Kengne, F. Kapche Tagne, and P. K. Talla: Complex dynamical behavior of a two-stage Colpitts oscillator with magnetically coupled inductors, Journal of chaos, http://dx.doi.org/10.1155/2014/945658, 2014.",

            "description_1" => "V. Kamdoum Tamba, H. B. Fotsin, J. Kengne, F. Kapche Tagne, and P. K. Talla: Complex dynamical behavior of a two-stage Colpitts oscillator with magnetically coupled inductors, Journal of chaos, http://dx.doi.org/10.1155/2014/945658, 2014.",

            "description_2" => "V. Kamdoum Tamba, H. B. Fotsin, J. Kengne, F. Kapche Tagne, and P. K. Talla: Complex dynamical behavior of a two-stage Colpitts oscillator with magnetically coupled inductors, Journal of chaos, http://dx.doi.org/10.1155/2014/945658, 2014.",

            "lien_externe" => "http://dx.doi.org/10.1155/2014/945658",
            "status" => true,
        ];

        $publication_5_61 = [
            "type_publication_id" => 7,
            "annee_publication_id" => 14,

            "titre" => "J. D. Nguimfack-Ndongmo, G. Kenne, R. Kuate-Fochie, A. Cheukem, H. B. Fotsin, F. Lamnabhi-Lagarrigue. A simplified nonlinear controller for transient stability enhancement of multimachine power systems using SSSC device, in International Journal of Electrical Power and Energy Systems, Elsevier, Vol. 54, pp. 650–657, 2014, doi:10.1016/j.ijepes.2013.08.019.",

            "description_1" => "J. D. Nguimfack-Ndongmo, G. Kenne, R. Kuate-Fochie, A. Cheukem, H. B. Fotsin, F. Lamnabhi-Lagarrigue. A simplified nonlinear controller for transient stability enhancement of multimachine power systems using SSSC device, in International Journal of Electrical Power and Energy Systems, Elsevier, Vol. 54, pp. 650–657, 2014, doi:10.1016/j.ijepes.2013.08.019.",

            "description_2" => "J. D. Nguimfack-Ndongmo, G. Kenne, R. Kuate-Fochie, A. Cheukem, H. B. Fotsin, F. Lamnabhi-Lagarrigue. A simplified nonlinear controller for transient stability enhancement of multimachine power systems using SSSC device, in International Journal of Electrical Power and Energy Systems, Elsevier, Vol. 54, pp. 650–657, 2014, doi:10.1016/j.ijepes.2013.08.019.",

            "lien_externe" => "https://dx.doi.org/10.1016/j.ijepes.2013.08.019",
            "status" => true,
        ];

        $publication_5_62 = [
            "type_publication_id" => 7,
            "annee_publication_id" => 14,

            "titre" => "M. Dansoko, H. Nkwawo, B. Diourte, F. Floret, R. Goma, G. Kenne. Robust multivariable sliding mode control design for generator excitation of marine turbine in multimachine configuration, in International Journal of Electrical Power and Energy Systems, Elsevier Edition, Vol. 63, pp. 423–428, 2014, doi:10.1016/j.ijepes.2014.06.019.",

            "description_1" => "M. Dansoko, H. Nkwawo, B. Diourte, F. Floret, R. Goma, G. Kenne. Robust multivariable sliding mode control design for generator excitation of marine turbine in multimachine configuration, in International Journal of Electrical Power and Energy Systems, Elsevier Edition, Vol. 63, pp. 423–428, 2014, doi:10.1016/j.ijepes.2014.06.019.",

            "description_2" => "M. Dansoko, H. Nkwawo, B. Diourte, F. Floret, R. Goma, G. Kenne. Robust multivariable sliding mode control design for generator excitation of marine turbine in multimachine configuration, in International Journal of Electrical Power and Energy Systems, Elsevier Edition, Vol. 63, pp. 423–428, 2014, doi:10.1016/j.ijepes.2014.06.019.",

            // "lien_externe" => "",
            "status" => true,
        ];

        $publication_5_63 = [
            "type_publication_id" => 7,
            "annee_publication_id" => 14,

            "titre" => "63.	 A. N. Kengnou Telem, C. M. Segning, G. Kenne, H. B. Fotsin. A Simple and Robust Gray Image Encryption Scheme Using Chaotic Logistic Map and Artificial Neural Network. In Advances in Multimedia, Hindawi, vol. 2014, Article ID 602921, 13 pages, 2014, http://dx.doi.org/10.1155/2014/602921.",

            "description_1" => "63.	 A. N. Kengnou Telem, C. M. Segning, G. Kenne, H. B. Fotsin. A Simple and Robust Gray Image Encryption Scheme Using Chaotic Logistic Map and Artificial Neural Network. In Advances in Multimedia, Hindawi, vol. 2014, Article ID 602921, 13 pages, 2014, http://dx.doi.org/10.1155/2014/602921.",

            "description_2" => "63.	 A. N. Kengnou Telem, C. M. Segning, G. Kenne, H. B. Fotsin. A Simple and Robust Gray Image Encryption Scheme Using Chaotic Logistic Map and Artificial Neural Network. In Advances in Multimedia, Hindawi, vol. 2014, Article ID 602921, 13 pages, 2014, http://dx.doi.org/10.1155/2014/602921.",

            "lien_externe" => "http://dx.doi.org/10.1155/2014/602921",
            "status" => true,
        ];

        $publication_5_64 = [
            "type_publication_id" => 7,
            "annee_publication_id" => 14,

            "titre" => "A. Djimeli, D. Tchiotsop, P. Nagabhushan, and R. Tchinda. Automatic Counting of Leukocytes in Thick Blood Smears, International Journal of Computer Application, Issue 4, Vol. 5 (Sep - Oct 2014).",

            "description_1" => "A. Djimeli, D. Tchiotsop, P. Nagabhushan, and R. Tchinda. Automatic Counting of Leukocytes in Thick Blood Smears, International Journal of Computer Application, Issue 4, Vol. 5 (Sep - Oct 2014).",

            "description_2" => "A. Djimeli, D. Tchiotsop, P. Nagabhushan, and R. Tchinda. Automatic Counting of Leukocytes in Thick Blood Smears, International Journal of Computer Application, Issue 4, Vol. 5 (Sep - Oct 2014).",

            // "lien_externe" => "",
            "status" => true,
        ];

        // publication de type :Articles publiés dans les revues indexées => id = 7
        // annee 2015 => id = 15

        $publication_5_65 = [
            "type_publication_id" => 7,
            "annee_publication_id" => 15,

            "titre" => "C. Djiongo, S. Moto Mpong, O. Monga, Estimation of aboveground biomass from satellite data using quarternion-based texture analysis of multi chromatic image, in Proc. of the 11th Int. Conf. on Signal Image Technology & Internet Systems-SITIS’2015, Bangkok, Thailand, in press",

            "description_1" => "C. Djiongo, S. Moto Mpong, O. Monga, Estimation of aboveground biomass from satellite data using quarternion-based texture analysis of multi chromatic image, in Proc. of the 11th Int. Conf. on Signal Image Technology & Internet Systems-SITIS’2015, Bangkok, Thailand, in press",

            "description_1" => "C. Djiongo, S. Moto Mpong, O. Monga, Estimation of aboveground biomass from satellite data using quarternion-based texture analysis of multi chromatic image, in Proc. of the 11th Int. Conf. on Signal Image Technology & Internet Systems-SITIS’2015, Bangkok, Thailand, in press",

            // "lien_externe" => "",

            "status" => true,
        ];

        $publication_5_66 = [
            "type_publication_id" => 7,
            "annee_publication_id" => 15,

            "titre" => "Thierry Noulamo, Christine Choppy and Étienne André, FILTER PATTERN FOR CONSISTENT USE OF DATA IN REAL-TIME SYSTEMS, Advances in Computer Science and Engineering, ISSN: 0973-6999, 2015 Pushpa Publishing House, Allahabad, India.",

            "description_1" => "Thierry Noulamo, Christine Choppy and Étienne André, FILTER PATTERN FOR CONSISTENT USE OF DATA IN REAL-TIME SYSTEMS, Advances in Computer Science and Engineering, ISSN: 0973-6999, 2015 Pushpa Publishing House, Allahabad, India.",

            "description_1" => "Thierry Noulamo, Christine Choppy and Étienne André, FILTER PATTERN FOR CONSISTENT USE OF DATA IN REAL-TIME SYSTEMS, Advances in Computer Science and Engineering, ISSN: 0973-6999, 2015 Pushpa Publishing House, Allahabad, India.",

            // "lien_externe" => "",

            "status" => true,
        ];

        $publication_5_67 = [
            "type_publication_id" => 7,
            "annee_publication_id" => 15,

            "titre" => "D. Tchiotsop, B. Saha Tchinda, R. Tchinda, G. Kenne. Automated extraction of intestinal parasite in microscopic images using Active Contours and Hough Transform, in Current Medical Imaging Review, Bentham Science, Vol. 11, pp.233-246, 2015, doi: 10.2174/1573405611666150626173209.",

            "description_1" => "D. Tchiotsop, B. Saha Tchinda, R. Tchinda, G. Kenne. Automated extraction of intestinal parasite in microscopic images using Active Contours and Hough Transform, in Current Medical Imaging Review, Bentham Science, Vol. 11, pp.233-246, 2015, doi: 10.2174/1573405611666150626173209.",

            "description_1" => "D. Tchiotsop, B. Saha Tchinda, R. Tchinda, G. Kenne. Automated extraction of intestinal parasite in microscopic images using Active Contours and Hough Transform, in Current Medical Imaging Review, Bentham Science, Vol. 11, pp.233-246, 2015, doi: 10.2174/1573405611666150626173209.",

            "lien_externe" => "http://dx.doi.org/10.2174/1573405611666150626173209",

            "status" => true,
        ];

        $publication_5_68 = [
            "type_publication_id" => 7,
            "annee_publication_id" => 15,

            "titre" => "G. Kenne, J. D. Nguimfack, R. F. Kuate, H. B. Fotsin. An online simplified nonlinear controller for transient stabilization enhancement of DFIG in multi-machine power systems, in IEEE Transactions on Automatic Control, Vol. 60, pp.2464-2469, 2015, doi:10.1109/TAC.2015.2427591.",

            "description_1" => "G. Kenne, J. D. Nguimfack, R. F. Kuate, H. B. Fotsin. An online simplified nonlinear controller for transient stabilization enhancement of DFIG in multi-machine power systems, in IEEE Transactions on Automatic Control, Vol. 60, pp.2464-2469, 2015, doi:10.1109/TAC.2015.2427591.",

            "description_1" => "G. Kenne, J. D. Nguimfack, R. F. Kuate, H. B. Fotsin. An online simplified nonlinear controller for transient stabilization enhancement of DFIG in multi-machine power systems, in IEEE Transactions on Automatic Control, Vol. 60, pp.2464-2469, 2015, doi:10.1109/TAC.2015.2427591.",

            // "lien_externe" => "",

            "status" => true,
        ];

        $publication_5_69 = [
            "type_publication_id" => 7,
            "annee_publication_id" => 15,

            "titre" => "69.	 J. Kengne: Coexistence of chaos with hyperchaos, period-3 doubling bifurcation, and transient chaos in the hyperchaotic oscillator with gyrators, Int. J. Bifurcation and Chaos 25 (4): 1550052, 2015. ",

            "description_1" => "69.	 J. Kengne: Coexistence of chaos with hyperchaos, period-3 doubling bifurcation, and transient chaos in the hyperchaotic oscillator with gyrators, Int. J. Bifurcation and Chaos 25 (4): 1550052, 2015. ",

            "description_1" => "69.	 J. Kengne: Coexistence of chaos with hyperchaos, period-3 doubling bifurcation, and transient chaos in the hyperchaotic oscillator with gyrators, Int. J. Bifurcation and Chaos 25 (4): 1550052, 2015. ",

            // "lien_externe" => "",

            "status" => true,
        ];

        $publication_5_70 = [
            "type_publication_id" => 7,
            "annee_publication_id" => 15,

            "titre" => "V. kamdoum Tamba, H. B. Fotsin, J. Kengne, F. Kapche Tagne, and P. K. Talla: Coupled inductors-based chaotic Colpitts oscillators: Mathematical modeling and synchronization issues, Eur. Phys. J. Plus 130:137, 2015.",

            "description_1" => "V. kamdoum Tamba, H. B. Fotsin, J. Kengne, F. Kapche Tagne, and P. K. Talla: Coupled inductors-based chaotic Colpitts oscillators: Mathematical modeling and synchronization issues, Eur. Phys. J. Plus 130:137, 2015.",

            "description_1" => "V. kamdoum Tamba, H. B. Fotsin, J. Kengne, F. Kapche Tagne, and P. K. Talla: Coupled inductors-based chaotic Colpitts oscillators: Mathematical modeling and synchronization issues, Eur. Phys. J. Plus 130:137, 2015.",

            // "lien_externe" => "",

            "status" => true,
        ];

        $publication_5_71 = [
            "type_publication_id" => 7,
            "annee_publication_id" => 15,

            "titre" => "J. Kengne, Z. T. Njitacke, V. kamdoum Tamba, A. Nguomkam Negou: Periodicity, chaos and multiple attractors in a memristor-based Shinriki’s circuit. Chaos: an interdisciplinary journal of nonlinear science 25, 103126, 2015.",

            "description_1" => "J. Kengne, Z. T. Njitacke, V. kamdoum Tamba, A. Nguomkam Negou: Periodicity, chaos and multiple attractors in a memristor-based Shinriki’s circuit. Chaos: an interdisciplinary journal of nonlinear science 25, 103126, 2015.",

            "description_1" => "J. Kengne, Z. T. Njitacke, V. kamdoum Tamba, A. Nguomkam Negou: Periodicity, chaos and multiple attractors in a memristor-based Shinriki’s circuit. Chaos: an interdisciplinary journal of nonlinear science 25, 103126, 2015.",

            // "lien_externe" => "",

            "status" => true,
        ];


        $publication_5_72 = [
            "type_publication_id" => 7,
            "annee_publication_id" => 15,

            "titre" => "J. Kengne, M. Fouodji Tsotsop, A. Nguomkam Negou, G. Kenne: On the dynamics of single amplifier biquad based Inductor-free hyperchaotic oscillators: A case study. Int. J. of Dynamics and Control, 2015, doi: 10.1007/s40435-015-0218-6.",

            "description_1" => "J. Kengne, M. Fouodji Tsotsop, A. Nguomkam Negou, G. Kenne: On the dynamics of single amplifier biquad based Inductor-free hyperchaotic oscillators: A case study. Int. J. of Dynamics and Control, 2015, doi: 10.1007/s40435-015-0218-6.",

            "description_1" => "J. Kengne, M. Fouodji Tsotsop, A. Nguomkam Negou, G. Kenne: On the dynamics of single amplifier biquad based Inductor-free hyperchaotic oscillators: A case study. Int. J. of Dynamics and Control, 2015, doi: 10.1007/s40435-015-0218-6.",

            // "lien_externe" => "",

            "status" => true,
        ];



        $publication_5_73 = [
            "type_publication_id" => 7,
            "annee_publication_id" => 15,

            "titre" => "73.	 D. Tchiotsop, T. Kanaa, M. Fogue, L. P. Nguemkoua Nguenjou, M. I. Mongoue Toumtap. ASCII Encoding of Biomedical Signals for SMS Transmission, International Journal of Electronics Communication and Computer Engineering, Vol. 6, Issue 3, May 2015, pp. 409 – 415.",

            "description_1" => "73.	 D. Tchiotsop, T. Kanaa, M. Fogue, L. P. Nguemkoua Nguenjou, M. I. Mongoue Toumtap. ASCII Encoding of Biomedical Signals for SMS Transmission, International Journal of Electronics Communication and Computer Engineering, Vol. 6, Issue 3, May 2015, pp. 409 – 415.",

            "description_1" => "73.	 D. Tchiotsop, T. Kanaa, M. Fogue, L. P. Nguemkoua Nguenjou, M. I. Mongoue Toumtap. ASCII Encoding of Biomedical Signals for SMS Transmission, International Journal of Electronics Communication and Computer Engineering, Vol. 6, Issue 3, May 2015, pp. 409 – 415.",

            // "lien_externe" => "",

            "status" => true,
        ];


        $publication_5_74 = [
            "type_publication_id" => 7,
            "annee_publication_id" => 15,

            "titre" => "A. N. Kengnou Telem, D. Tchiotsop, T. Kanaa, H. B. Fotsin, D. Wolf. A Robust Chaotic And Fast Walsh Transform Encryption For Gray Scale Biomedical Image Transmission, Signal & Image Processing : An International Journal (SIPIJ) Vol.6, No.3, June 2015, pp. 81 -102.",

            "description_1" => "A. N. Kengnou Telem, D. Tchiotsop, T. Kanaa, H. B. Fotsin, D. Wolf. A Robust Chaotic And Fast Walsh Transform Encryption For Gray Scale Biomedical Image Transmission, Signal & Image Processing : An International Journal (SIPIJ) Vol.6, No.3, June 2015, pp. 81 -102.",

            "description_1" => "A. N. Kengnou Telem, D. Tchiotsop, T. Kanaa, H. B. Fotsin, D. Wolf. A Robust Chaotic And Fast Walsh Transform Encryption For Gray Scale Biomedical Image Transmission, Signal & Image Processing : An International Journal (SIPIJ) Vol.6, No.3, June 2015, pp. 81 -102.",

            // "lien_externe" => "",

            "status" => true,
        ];


        $publication_5_75 = [
            "type_publication_id" => 7,
            "annee_publication_id" => 15,

            "titre" => "D. Tchiotsop, V. Louis-Dorr, P. K. Talla, M. Fogue. Compression and Analysis of ECG Features Using Optimal Polynomial Approximations, International Journal of Engineering Research and Management (IJERM), Vol. 2, issue7, July 2015, Eclat Research Publications.",

            "description_1" => "D. Tchiotsop, V. Louis-Dorr, P. K. Talla, M. Fogue. Compression and Analysis of ECG Features Using Optimal Polynomial Approximations, International Journal of Engineering Research and Management (IJERM), Vol. 2, issue7, July 2015, Eclat Research Publications.",

            "description_1" => "D. Tchiotsop, V. Louis-Dorr, P. K. Talla, M. Fogue. Compression and Analysis of ECG Features Using Optimal Polynomial Approximations, International Journal of Engineering Research and Management (IJERM), Vol. 2, issue7, July 2015, Eclat Research Publications.",

            // "lien_externe" => "",

            "status" => true,
        ];


        $publication_5_76 = [
            "type_publication_id" => 7,
            "annee_publication_id" => 15,

            "titre" => "D. Tchiotsop, T. Kanaa, M. Fogue, A. F. Tchouani Njomo, K. Kentsa Zana. Low Cost and Low Power ECG Recorder Suitable for Low Incomes Populations, International Journal of Electronics Communication and Computer Engineering, Vol. 6, Issue 4, September 2015, pp. 558 - 564.",

            "description_1" => "D. Tchiotsop, T. Kanaa, M. Fogue, A. F. Tchouani Njomo, K. Kentsa Zana. Low Cost and Low Power ECG Recorder Suitable for Low Incomes Populations, International Journal of Electronics Communication and Computer Engineering, Vol. 6, Issue 4, September 2015, pp. 558 - 564.",

            "description_1" => "D. Tchiotsop, T. Kanaa, M. Fogue, A. F. Tchouani Njomo, K. Kentsa Zana. Low Cost and Low Power ECG Recorder Suitable for Low Incomes Populations, International Journal of Electronics Communication and Computer Engineering, Vol. 6, Issue 4, September 2015, pp. 558 - 564.",

            // "lien_externe" => "",

            "status" => true,
        ];


        $publication_5_77 = [
            "type_publication_id" => 7,
            "annee_publication_id" => 15,

            "titre" => "B. Saha Tchinda, D. Tchiotsop, R. Tchinda, D. Wolf, M. Noubom. Automatic recognition of human parasite cysts on microscopic stools images using principal component analysis and Probabilistic Neural Network, International Journal of Advanced Research in Artificial Intelligence (IJARAI), Vol. 4, No 9 Sep. 2015, pp. 26 - 33.",

            "description_1" => "B. Saha Tchinda, D. Tchiotsop, R. Tchinda, D. Wolf, M. Noubom. Automatic recognition of human parasite cysts on microscopic stools images using principal component analysis and Probabilistic Neural Network, International Journal of Advanced Research in Artificial Intelligence (IJARAI), Vol. 4, No 9 Sep. 2015, pp. 26 - 33.",

            "description_1" => "B. Saha Tchinda, D. Tchiotsop, R. Tchinda, D. Wolf, M. Noubom. Automatic recognition of human parasite cysts on microscopic stools images using principal component analysis and Probabilistic Neural Network, International Journal of Advanced Research in Artificial Intelligence (IJARAI), Vol. 4, No 9 Sep. 2015, pp. 26 - 33.",

            // "lien_externe" => "",

            "status" => true,
        ];

        // publication de type :Articles publiés dans les revues indexées => id = 7
        // annee 2016 => id = 16

        $publication_5_78 = [
            "type_publication_id" => 7,
            "annee_publication_id" => 16,

            "titre" => "Fernando Jaramillo-Lopez, Godpromesse Kenne and Francoise Lamnabhi-Lagarrigue.  A novel online training neural network-based algorithm for wind speed estimation and adaptive control of PMSG wind turbine system for maximum power extraction, Renewable Energy, Elsevier, Vol. 86, pp.38-48, 2016, doi:10.1016/j.renene.2015.07.071.",

            "description_1" => "Fernando Jaramillo-Lopez, Godpromesse Kenne and Francoise Lamnabhi-Lagarrigue.  A novel online training neural network-based algorithm for wind speed estimation and adaptive control of PMSG wind turbine system for maximum power extraction, Renewable Energy, Elsevier, Vol. 86, pp.38-48, 2016, doi:10.1016/j.renene.2015.07.071.",

            "description_1" => "Fernando Jaramillo-Lopez, Godpromesse Kenne and Francoise Lamnabhi-Lagarrigue.  A novel online training neural network-based algorithm for wind speed estimation and adaptive control of PMSG wind turbine system for maximum power extraction, Renewable Energy, Elsevier, Vol. 86, pp.38-48, 2016, doi:10.1016/j.renene.2015.07.071.",

            "lien_externe" => "https://www.sciencedirect.com/science/article/abs/pii/S096014811530166X?via%3Dihub",

            "status" => true,
        ];

        $publication_5_79 = [
            "type_publication_id" => 7,
            "annee_publication_id" => 16,

            "titre" => "A. M. Fombu, G. Kenne, J. D. Nguimfack, Decentralized nonlinear coordinated excitation and steam valve adaptive control for multi-machine power systems, International Journal of Electrical Power and Energy Systems, Elsevier, Vol. 75, pp.117-126, 2016, doi:10.1016/j.ijepes.2015.08.021.",

            "description_1" => "A. M. Fombu, G. Kenne, J. D. Nguimfack, Decentralized nonlinear coordinated excitation and steam valve adaptive control for multi-machine power systems, International Journal of Electrical Power and Energy Systems, Elsevier, Vol. 75, pp.117-126, 2016, doi:10.1016/j.ijepes.2015.08.021.",

            "description_1" => "A. M. Fombu, G. Kenne, J. D. Nguimfack, Decentralized nonlinear coordinated excitation and steam valve adaptive control for multi-machine power systems, International Journal of Electrical Power and Energy Systems, Elsevier, Vol. 75, pp.117-126, 2016, doi:10.1016/j.ijepes.2015.08.021.",

            "lien_externe" => "https://www.sciencedirect.com/science/article/abs/pii/S0142061515003580?via%3Dihub",

            "status" => true,
        ];

        $publication_5_80 = [
            "type_publication_id" => 7,
            "annee_publication_id" => 16,

            "titre" => "A. M. Fombu, G. Kenne, J. D. Nguimfack, R. F. Kuate. Coordinated excitation and steam valve control for multimachine power system using high order sliding mode technique, Electric Power System Research, Elsevier, Vol. 131, pp.87-95, 2016, doi: 10.1016/j.epsr.2015.10.003.",

            "description_1" => "A. M. Fombu, G. Kenne, J. D. Nguimfack, R. F. Kuate. Coordinated excitation and steam valve control for multimachine power system using high order sliding mode technique, Electric Power System Research, Elsevier, Vol. 131, pp.87-95, 2016, doi: 10.1016/j.epsr.2015.10.003.",

            "description_1" => "A. M. Fombu, G. Kenne, J. D. Nguimfack, R. F. Kuate. Coordinated excitation and steam valve control for multimachine power system using high order sliding mode technique, Electric Power System Research, Elsevier, Vol. 131, pp.87-95, 2016, doi: 10.1016/j.epsr.2015.10.003.",

            // "lien_externe" => "",

            "status" => true,
        ];

        $publication_5_81 = [
            "type_publication_id" => 7,
            "annee_publication_id" => 16,

            "titre" => "J. Kengne, M. Fouodji Tsotsop, E. S. Kuetche Mbe, H. B. Fotsin,· G. Kenne. On coexisting bifurcations and hyperchaos in a class of diode-based oscillators: a case study, International Journal of Dynamic and Control, Springer, Published online: 25 May 2016, doi: 10.1007/s40435-016-0247-9",

            "description_1" => "J. Kengne, M. Fouodji Tsotsop, E. S. Kuetche Mbe, H. B. Fotsin,· G. Kenne. On coexisting bifurcations and hyperchaos in a class of diode-based oscillators: a case study, International Journal of Dynamic and Control, Springer, Published online: 25 May 2016, doi: 10.1007/s40435-016-0247-9",

            "description_1" => "J. Kengne, M. Fouodji Tsotsop, E. S. Kuetche Mbe, H. B. Fotsin,· G. Kenne. On coexisting bifurcations and hyperchaos in a class of diode-based oscillators: a case study, International Journal of Dynamic and Control, Springer, Published online: 25 May 2016, doi: 10.1007/s40435-016-0247-9",

            // "lien_externe" => "",

            "status" => true,
        ];

        $publication_5_82 = [
            "type_publication_id" => 7,
            "annee_publication_id" => 16,

            "titre" => "Marcellin Nkenlifack & Mboubé-Etouké Serge, Une architecture MDA et un framework HAD de modélisation et description des systèmes dynamiques hybrides, Revue Sciences, Technologies et Développement (STD), Edition spéciale, pp157-162, Juillet 2016, ISSN 1029 – 2225 - e-ISSN 2313 – 6278, http://www.univ-douala.com/sdt/.",

            "description_1" => "Marcellin Nkenlifack & Mboubé-Etouké Serge, Une architecture MDA et un framework HAD de modélisation et description des systèmes dynamiques hybrides, Revue Sciences, Technologies et Développement (STD), Edition spéciale, pp157-162, Juillet 2016, ISSN 1029 – 2225 - e-ISSN 2313 – 6278, http://www.univ-douala.com/sdt/.",

            "description_1" => "Marcellin Nkenlifack & Mboubé-Etouké Serge, Une architecture MDA et un framework HAD de modélisation et description des systèmes dynamiques hybrides, Revue Sciences, Technologies et Développement (STD), Edition spéciale, pp157-162, Juillet 2016, ISSN 1029 – 2225 - e-ISSN 2313 – 6278, http://www.univ-douala.com/sdt/.",

            "lien_externe" => "http://www.univ-douala.com/sdt/",

            "status" => true,
        ];

        $publication_5_83 = [
            "type_publication_id" => 7,
            "annee_publication_id" => 16,

            "titre" => "S. Nana Njontchou, M. J. Nkenlifack et V. C. Kamla, Mécanismes de mise en œuvre des modèles décisionnels multiniveaux génériques pour les applications d’e-gouvernance, Revue Sciences, Technologies et Développement (STD), Edition spéciale, pp163-167, Juillet 2016, ISSN 1029 – 2225 - e-ISSN 2313 – 6278, http://www.univ-douala.com/sdt/.",

            "description_1" => "S. Nana Njontchou, M. J. Nkenlifack et V. C. Kamla, Mécanismes de mise en œuvre des modèles décisionnels multiniveaux génériques pour les applications d’e-gouvernance, Revue Sciences, Technologies et Développement (STD), Edition spéciale, pp163-167, Juillet 2016, ISSN 1029 – 2225 - e-ISSN 2313 – 6278, http://www.univ-douala.com/sdt/.",

            "description_1" => "S. Nana Njontchou, M. J. Nkenlifack et V. C. Kamla, Mécanismes de mise en œuvre des modèles décisionnels multiniveaux génériques pour les applications d’e-gouvernance, Revue Sciences, Technologies et Développement (STD), Edition spéciale, pp163-167, Juillet 2016, ISSN 1029 – 2225 - e-ISSN 2313 – 6278, http://www.univ-douala.com/sdt/.",

            "lien_externe" => "http://www.univ-douala.com/sdt/",

            "status" => true,
        ];

        $publication_5_84 = [
            "type_publication_id" => 7,
            "annee_publication_id" => 16,

            "titre" => "Mathurin Soh, Marcellin Nkenlifack & Laure Pauline Fotso, A New Hybrid Process for Software Development and Localisation, International Journal of Scientific & Engineering Research (IJSER), Volume 7, Issue 6, June-2016 , ISSN 2229-5518, ",

            "description_1" => "Mathurin Soh, Marcellin Nkenlifack & Laure Pauline Fotso, A New Hybrid Process for Software Development and Localisation, International Journal of Scientific & Engineering Research (IJSER), Volume 7, Issue 6, June-2016 , ISSN 2229-5518, ",

            "description_1" => "Mathurin Soh, Marcellin Nkenlifack & Laure Pauline Fotso, A New Hybrid Process for Software Development and Localisation, International Journal of Scientific & Engineering Research (IJSER), Volume 7, Issue 6, June-2016 , ISSN 2229-5518, ",

            "lien_externe" => "http://www.ijser.org/researchpaper/A-New-Hybrid-Process-for-Software-Development-and-Localisation.pdf.",

            "status" => true,
        ];

        $publication_5_85 = [
            "type_publication_id" => 7,
            "annee_publication_id" => 16,

            "titre" => "Marcellin Nkenlifack & Bethin Demsong, Les TIC au service du développement : Traduction automatique des appels téléphoniques inter-linguistiques pour l’essor des langues et cultures nationales, Revue Sciences, Technologies et Développement (STD), Edition spéciale, pp151-156, Juillet 2016, ISSN 1029 – 2225 - e-ISSN 2313 – 6278, http://www.univ-douala.com/sdt/.",

            "description_1" => "Marcellin Nkenlifack & Bethin Demsong, Les TIC au service du développement : Traduction automatique des appels téléphoniques inter-linguistiques pour l’essor des langues et cultures nationales, Revue Sciences, Technologies et Développement (STD), Edition spéciale, pp151-156, Juillet 2016, ISSN 1029 – 2225 - e-ISSN 2313 – 6278, http://www.univ-douala.com/sdt/.",

            "description_1" => "Marcellin Nkenlifack & Bethin Demsong, Les TIC au service du développement : Traduction automatique des appels téléphoniques inter-linguistiques pour l’essor des langues et cultures nationales, Revue Sciences, Technologies et Développement (STD), Edition spéciale, pp151-156, Juillet 2016, ISSN 1029 – 2225 - e-ISSN 2313 – 6278, http://www.univ-douala.com/sdt/.",

            "lien_externe" => "http://www.univ-douala.com/sdt/",

            "status" => true,
        ];

        $publication_5_86 = [
            "type_publication_id" => 7,
            "annee_publication_id" => 16,

            "titre" => "Thierry Noulamo , Emmanuel Tanyi, Marcellin Nkenlifack and Jean Pierre Lienou, Model-driven Engineering Applied to the Control and Monitoring of Dynamic Systems, International Journal of Computer Science and Software Engineering (IJCSSE), Volume 5, Issue 8, August 2016 ISSN (Online): 2409-4285 www.IJCSSE.org Page: 183-194.",

            "description_1" => "Thierry Noulamo , Emmanuel Tanyi, Marcellin Nkenlifack and Jean Pierre Lienou, Model-driven Engineering Applied to the Control and Monitoring of Dynamic Systems, International Journal of Computer Science and Software Engineering (IJCSSE), Volume 5, Issue 8, August 2016 ISSN (Online): 2409-4285 www.IJCSSE.org Page: 183-194.",

            "description_1" => "Thierry Noulamo , Emmanuel Tanyi, Marcellin Nkenlifack and Jean Pierre Lienou, Model-driven Engineering Applied to the Control and Monitoring of Dynamic Systems, International Journal of Computer Science and Software Engineering (IJCSSE), Volume 5, Issue 8, August 2016 ISSN (Online): 2409-4285 www.IJCSSE.org Page: 183-194.",

            // "lien_externe" => "",

            "status" => true,
        ];

        $publication_5_87 = [
            "type_publication_id" => 7,
            "annee_publication_id" => 16,

            "titre" => "J. Kengne, Z. T. Njitacke, H. B. Fotsin: Dynamical analysis of a simple autonomous jerk system with multiple attractors, Nonlinear Dynamics, Volume 83(1), 751-765, 2016",

            "description_1" => "J. Kengne, Z. T. Njitacke, H. B. Fotsin: Dynamical analysis of a simple autonomous jerk system with multiple attractors, Nonlinear Dynamics, Volume 83(1), 751-765, 2016",

            "description_1" => "J. Kengne, Z. T. Njitacke, H. B. Fotsin: Dynamical analysis of a simple autonomous jerk system with multiple attractors, Nonlinear Dynamics, Volume 83(1), 751-765, 2016",

            // "lien_externe" => "",

            "status" => true,
        ];

        $publication_5_88 = [
            "type_publication_id" => 7,
            "annee_publication_id" => 16,

            "titre" => "J. Kengne, Z. T. Njitacke, H. B. Fotsin: Coexistence of multiple attractors and crisis route to chaos in autonomous third order Duffing-Holmes type chaotic oscillators, Comm. Nonlinear Sci. and Numer. Simulat. 36, 29–44, 2016",

            "description_1" => "J. Kengne, Z. T. Njitacke, H. B. Fotsin: Coexistence of multiple attractors and crisis route to chaos in autonomous third order Duffing-Holmes type chaotic oscillators, Comm. Nonlinear Sci. and Numer. Simulat. 36, 29–44, 2016",

            "description_1" => "J. Kengne, Z. T. Njitacke, H. B. Fotsin: Coexistence of multiple attractors and crisis route to chaos in autonomous third order Duffing-Holmes type chaotic oscillators, Comm. Nonlinear Sci. and Numer. Simulat. 36, 29–44, 2016",

            // "lien_externe" => "",

            "status" => true,
        ];

        $publication_5_89 = [
            "type_publication_id" => 7,
            "annee_publication_id" => 16,

            "titre" => "89.	J. Kengne, Z. T. Njitacke,  A. Nguomkam Negou, M. Fouodji Tsotsop, H.B. Fotsin: Coexistence of multiple attractors and crisis route to chaos in a novel chaotic Jerk circuit. Int. J. Bifurcation and Chaos, Vol. 26, Number 5, 1650081, 2016",

            "description_1" => "89.	J. Kengne, Z. T. Njitacke,  A. Nguomkam Negou, M. Fouodji Tsotsop, H.B. Fotsin: Coexistence of multiple attractors and crisis route to chaos in a novel chaotic Jerk circuit. Int. J. Bifurcation and Chaos, Vol. 26, Number 5, 1650081, 2016",

            "description_1" => "89.	J. Kengne, Z. T. Njitacke,  A. Nguomkam Negou, M. Fouodji Tsotsop, H.B. Fotsin: Coexistence of multiple attractors and crisis route to chaos in a novel chaotic Jerk circuit. Int. J. Bifurcation and Chaos, Vol. 26, Number 5, 1650081, 2016",

            // "lien_externe" => "",

            "status" => true,
        ];

        $publication_5_90 = [
            "type_publication_id" => 7,
            "annee_publication_id" => 16,

            "titre" => "V. Kamdoum Tamba, H. B. Fotsin, J. Kengne, Megam Ngouonkadi, and P. K. Talla: Emergence of complex dynamical behaviors in Improved Colpitts oscillators: antimonotonicity, coexisting attractors, and metastable chaos.  Int. J. of Dynamics and Control, 2016, DOI: 10.1007/s40435-016-0223-4.",

            "description_1" => "V. Kamdoum Tamba, H. B. Fotsin, J. Kengne, Megam Ngouonkadi, and P. K. Talla: Emergence of complex dynamical behaviors in Improved Colpitts oscillators: antimonotonicity, coexisting attractors, and metastable chaos.  Int. J. of Dynamics and Control, 2016, DOI: 10.1007/s40435-016-0223-4.",

            "description_1" => "V. Kamdoum Tamba, H. B. Fotsin, J. Kengne, Megam Ngouonkadi, and P. K. Talla: Emergence of complex dynamical behaviors in Improved Colpitts oscillators: antimonotonicity, coexisting attractors, and metastable chaos.  Int. J. of Dynamics and Control, 2016, DOI: 10.1007/s40435-016-0223-4.",

            // "lien_externe" => "",

            "status" => true,
        ];

        $publication_5_91 = [
            "type_publication_id" => 7,
            "annee_publication_id" => 16,

            "titre" => "Kengne J., Njitacke Z.T., Fotsin H.B.: Coexistence of multiple attractors and crisis
            route to chaos in autonomous third order Duffing–Holmes type chaotic oscillators.
            Communications in Nonlinear Science and Numerical Simulation, Elsevier Edition, 36,
            29-44 (2016)
            ",

            "description_1" => "Kengne J., Njitacke Z.T., Fotsin H.B.: Coexistence of multiple attractors and crisis
            route to chaos in autonomous third order Duffing–Holmes type chaotic oscillators.
            Communications in Nonlinear Science and Numerical Simulation, Elsevier Edition, 36,
            29-44 (2016)
            ",

            "description_1" => "Kengne J., Njitacke Z.T., Fotsin H.B.: Coexistence of multiple attractors and crisis
            route to chaos in autonomous third order Duffing–Holmes type chaotic oscillators.
            Communications in Nonlinear Science and Numerical Simulation, Elsevier Edition, 36,
            29-44 (2016)
            ",

            // "lien_externe" => "",

            "status" => true,
        ];

        $publication_5_92 = [
            "type_publication_id" => 7,
            "annee_publication_id" => 16,

            "titre" => "",

            "description_1" => "",

            "description_1" => "",

            // "lien_externe" => "",

            "status" => true,
        ];

        $publication_5_93 = [
            "type_publication_id" => 7,
            "annee_publication_id" => 16,

            "titre" => "92.	 Kengne J., Njitacke Z.T., Fotsin H.B: Dynamical analysis of a simple autonomous
            jerk system with multiple attractors. Nonlinear Dynamics, Springer Editor; 83, 751-
            765 (2016)
            ",

            "description_1" => "92.	 Kengne J., Njitacke Z.T., Fotsin H.B: Dynamical analysis of a simple autonomous
            jerk system with multiple attractors. Nonlinear Dynamics, Springer Editor; 83, 751-
            765 (2016)
            ",

            "description_1" => "92.	 Kengne J., Njitacke Z.T., Fotsin H.B: Dynamical analysis of a simple autonomous
            jerk system with multiple attractors. Nonlinear Dynamics, Springer Editor; 83, 751-
            765 (2016)
            ",

            // "lien_externe" => "",

            "status" => true,
        ];

        $publication_5_94 = [
            "type_publication_id" => 7,
            "annee_publication_id" => 16,

            "titre" => "E. TALA TEBUE, Z. I DJOUFACK, E. FENDZI, A. KENFACK-JIOTSA, Exact solutions of the unstable nonlinear Schrödinger equation with the new Jacobi lliptic function rational expansion method and the exponential rational function method, Optk, Vol. 127, pp.11124-11130, 2016.",

            "description_1" => "E. TALA TEBUE, Z. I DJOUFACK, E. FENDZI, A. KENFACK-JIOTSA, Exact solutions of the unstable nonlinear Schrödinger equation with the new Jacobi lliptic function rational expansion method and the exponential rational function method, Optk, Vol. 127, pp.11124-11130, 2016.",

            "description_1" => "E. TALA TEBUE, Z. I DJOUFACK, E. FENDZI, A. KENFACK-JIOTSA, Exact solutions of the unstable nonlinear Schrödinger equation with the new Jacobi lliptic function rational expansion method and the exponential rational function method, Optk, Vol. 127, pp.11124-11130, 2016.",

            // "lien_externe" => "",

            "status" => true,
        ];

        $publication_5_95 = [
            "type_publication_id" => 7,
            "annee_publication_id" => 16,

            "titre" => "Z. I DJOUFACK, E. TALA TEBUE, J P NGUENANG, A. KENFACK-JIOTSA, Quantum soliton in 1 D Heisenberg spin chains with Dzyaloshinsky-Moriya and next-nearest-neighbor interactions, Chaos, An Interdisciplinary journal of Nonlinear Science, Vol. 26, pp.103-110, 2016.",

            "description_1" => "Z. I DJOUFACK, E. TALA TEBUE, J P NGUENANG, A. KENFACK-JIOTSA, Quantum soliton in 1 D Heisenberg spin chains with Dzyaloshinsky-Moriya and next-nearest-neighbor interactions, Chaos, An Interdisciplinary journal of Nonlinear Science, Vol. 26, pp.103-110, 2016.",

            "description_1" => "Z. I DJOUFACK, E. TALA TEBUE, J P NGUENANG, A. KENFACK-JIOTSA, Quantum soliton in 1 D Heisenberg spin chains with Dzyaloshinsky-Moriya and next-nearest-neighbor interactions, Chaos, An Interdisciplinary journal of Nonlinear Science, Vol. 26, pp.103-110, 2016.",

            // "lien_externe" => "",

            "status" => true,
        ];

        $publication_5_96 = [
            "type_publication_id" => 7,
            "annee_publication_id" => 16,

            "titre" => "Mathurin Soh, Marcellin Nkenlifack & Laure Pauline Fotso, Specification Model of an automated System for Software Localization, International Journal of Computer Science and Engineering (IJCSE), Juil 2016.",

            "description_1" => "Mathurin Soh, Marcellin Nkenlifack & Laure Pauline Fotso, Specification Model of an automated System for Software Localization, International Journal of Computer Science and Engineering (IJCSE), Juil 2016.",

            "description_1" => "Mathurin Soh, Marcellin Nkenlifack & Laure Pauline Fotso, Specification Model of an automated System for Software Localization, International Journal of Computer Science and Engineering (IJCSE), Juil 2016.",

            // "lien_externe" => "",

            "status" => true,
        ];

        $publication_5_97 = [
            "type_publication_id" => 7,
            "annee_publication_id" => 16,

            "titre" => "Marcellin Nkenlifack & Bethin Demsong, Les TIC au service du développement : Traduction automatique des appels téléphoniques inter-linguistiques pour l’essor des langues et cultures nationales, Revue Sciences Technologies et Développement, Edition spéciale, Volume 17, Juillet 2016, ISSN 1029 – 2225 - e - ISSN 2313 - 6278, http://www.univ - douala.com/sdt/.",

            "description_1" => "Marcellin Nkenlifack & Bethin Demsong, Les TIC au service du développement : Traduction automatique des appels téléphoniques inter-linguistiques pour l’essor des langues et cultures nationales, Revue Sciences Technologies et Développement, Edition spéciale, Volume 17, Juillet 2016, ISSN 1029 – 2225 - e - ISSN 2313 - 6278, http://www.univ - douala.com/sdt/.",

            "description_1" => "Marcellin Nkenlifack & Bethin Demsong, Les TIC au service du développement : Traduction automatique des appels téléphoniques inter-linguistiques pour l’essor des langues et cultures nationales, Revue Sciences Technologies et Développement, Edition spéciale, Volume 17, Juillet 2016, ISSN 1029 – 2225 - e - ISSN 2313 - 6278, http://www.univ - douala.com/sdt/.",

            "lien_externe" => "http://www.univ",

            "status" => true,
        ];

        $publication_5_98 = [
            "type_publication_id" => 7,
            "annee_publication_id" => 16,

            "titre" => "Nana Njontchou Sambalis, Nkenlifack Marcellin Julius & Kamla Vivient Corneille, Mecanismes de Mise en Œuvre des Modeles Décisionnels Multiniveaux Génériques pour les Applications de E-Gouvernance, Revue Sciences Technologies et Développement, Edition spéciale, Volume 17, Juillet 2016, ISSN 1029 – 2225 - e - ISSN 2313 - 6278, http://www.univ - douala.com/sdt/.",

            "description_1" => "Nana Njontchou Sambalis, Nkenlifack Marcellin Julius & Kamla Vivient Corneille, Mecanismes de Mise en Œuvre des Modeles Décisionnels Multiniveaux Génériques pour les Applications de E-Gouvernance, Revue Sciences Technologies et Développement, Edition spéciale, Volume 17, Juillet 2016, ISSN 1029 – 2225 - e - ISSN 2313 - 6278, http://www.univ - douala.com/sdt/.",

            "description_1" => "Nana Njontchou Sambalis, Nkenlifack Marcellin Julius & Kamla Vivient Corneille, Mecanismes de Mise en Œuvre des Modeles Décisionnels Multiniveaux Génériques pour les Applications de E-Gouvernance, Revue Sciences Technologies et Développement, Edition spéciale, Volume 17, Juillet 2016, ISSN 1029 – 2225 - e - ISSN 2313 - 6278, http://www.univ - douala.com/sdt/.",

            "lien_externe" => "http://www.univ - douala.com/sdt/",

            "status" => true,
        ];

        $publication_5_99 = [
            "type_publication_id" => 7,
            "annee_publication_id" => 16,

            "titre" => "Marcellin Nkenlifack & Mboubé-Etouké Serge, Une Architecture MDA et in Framework HAD de Modélisation et Description des Systèmes Dynamiques Hybrides, Revue Sciences Technologies et Développement, Edition spéciale, Volume 17, Juillet 2016, ISSN 1029 – 2225 - e - ISSN 2313 - 6278, http://www.univ - douala.com/sdt/.",

            "description_1" => "Marcellin Nkenlifack & Mboubé-Etouké Serge, Une Architecture MDA et in Framework HAD de Modélisation et Description des Systèmes Dynamiques Hybrides, Revue Sciences Technologies et Développement, Edition spéciale, Volume 17, Juillet 2016, ISSN 1029 – 2225 - e - ISSN 2313 - 6278, http://www.univ - douala.com/sdt/.",

            "description_1" => "Marcellin Nkenlifack & Mboubé-Etouké Serge, Une Architecture MDA et in Framework HAD de Modélisation et Description des Systèmes Dynamiques Hybrides, Revue Sciences Technologies et Développement, Edition spéciale, Volume 17, Juillet 2016, ISSN 1029 – 2225 - e - ISSN 2313 - 6278, http://www.univ - douala.com/sdt/.",

            "lien_externe" => "http://www.univ - douala.com/sdt/.",

            "status" => true,
        ];

        $publication_5_100 = [
            "type_publication_id" => 7,
            "annee_publication_id" => 16,

            "titre" => "T. Noulamo, E. Tanyi, M. Nkenlifack & J.P. Lienou, Model-driven engineering applied to the control and monitoring of dynamic system, Engineering Letters Journal, IAENG, juil 2016.",

            "description_1" => "T. Noulamo, E. Tanyi, M. Nkenlifack & J.P. Lienou, Model-driven engineering applied to the control and monitoring of dynamic system, Engineering Letters Journal, IAENG, juil 2016.",

            "description_1" => "T. Noulamo, E. Tanyi, M. Nkenlifack & J.P. Lienou, Model-driven engineering applied to the control and monitoring of dynamic system, Engineering Letters Journal, IAENG, juil 2016.",

            // "lien_externe" => "",
            "status" => true,
        ];

        $publication_5_101 = [
            "type_publication_id" => 7,
            "annee_publication_id" => 16,

            "titre" => "Mathurin Soh, Marcellin Nkenlifack & Laure Pauline Fotso, A New Hybrid Process for Software Development and Localisation, International Journal of Scientific & Engineering Research (IJSER), Volume 7, Issue 6, June-2016, ISSN 2229-5518",

            "description_1" => "Mathurin Soh, Marcellin Nkenlifack & Laure Pauline Fotso, A New Hybrid Process for Software Development and Localisation, International Journal of Scientific & Engineering Research (IJSER), Volume 7, Issue 6, June-2016, ISSN 2229-5518",

            "description_1" => "Mathurin Soh, Marcellin Nkenlifack & Laure Pauline Fotso, A New Hybrid Process for Software Development and Localisation, International Journal of Scientific & Engineering Research (IJSER), Volume 7, Issue 6, June-2016, ISSN 2229-5518",

            // "lien_externe" => "",

            "status" => true,
        ];

        $publication_5_102 = [
            "type_publication_id" => 7,
            "annee_publication_id" => 16,

            "titre" => "Njitacke, Z. T, kengne, J, Fotsin, H. B., Nguomkam Negou, A, Tchiotsop, D: Coexistence of multiple attractors and crisis route to chaos in a novel memristive diode bridge-based Jerk circuit. Chaos, Solitons & Fractals, 91,180–197 (2016).",

            "description_1" => "Njitacke, Z. T, kengne, J, Fotsin, H. B., Nguomkam Negou, A, Tchiotsop, D: Coexistence of multiple attractors and crisis route to chaos in a novel memristive diode bridge-based Jerk circuit. Chaos, Solitons & Fractals, 91,180–197 (2016).",

            "description_1" => "Njitacke, Z. T, kengne, J, Fotsin, H. B., Nguomkam Negou, A, Tchiotsop, D: Coexistence of multiple attractors and crisis route to chaos in a novel memristive diode bridge-based Jerk circuit. Chaos, Solitons & Fractals, 91,180–197 (2016).",

            // "lien_externe" => "",

            "status" => true,
        ];

        $publication_5_103 = [
            "type_publication_id" => 7,
            "annee_publication_id" => 16,

            "titre" => "Kengne, J. On the Dynamics of Chua’s oscillator with a smooth cubic nonlinearity: occurrence of multiple attractors, Nonlinear Dynamics, 87(1): 363-375 (2016).",

            "description_1" => "Kengne, J. On the Dynamics of Chua’s oscillator with a smooth cubic nonlinearity: occurrence of multiple attractors, Nonlinear Dynamics, 87(1): 363-375 (2016).",

            "description_1" => "Kengne, J. On the Dynamics of Chua’s oscillator with a smooth cubic nonlinearity: occurrence of multiple attractors, Nonlinear Dynamics, 87(1): 363-375 (2016).",

            // "lien_externe" => "",

            "status" => true,
        ];

        // publication de type :Articles publiés dans les revues indexées => id = 7
        // annee 2017 => id = 17



        Publication::create($publication_5_1);
        Publication::create($publication_5_2);
        Publication::create($publication_5_3);
        Publication::create($publication_5_4);
        Publication::create($publication_5_5);
        Publication::create($publication_5_6);
        Publication::create($publication_5_7);
        Publication::create($publication_5_8);
        Publication::create($publication_5_9);
        Publication::create($publication_5_10);

        Publication::create($publication_5_11);
        Publication::create($publication_5_12);
        Publication::create($publication_5_13);
        Publication::create($publication_5_14);
        Publication::create($publication_5_15);
        Publication::create($publication_5_16);
        Publication::create($publication_5_17);
        Publication::create($publication_5_18);
        Publication::create($publication_5_19);
        Publication::create($publication_5_20);

        Publication::create($publication_5_21);
        Publication::create($publication_5_22);
        Publication::create($publication_5_23);
        Publication::create($publication_5_24);
        Publication::create($publication_5_25);
        Publication::create($publication_5_26);
        Publication::create($publication_5_27);
        Publication::create($publication_5_28);
        Publication::create($publication_5_29);
        Publication::create($publication_5_30);

        Publication::create($publication_5_31);
        Publication::create($publication_5_32);
        Publication::create($publication_5_33);
        Publication::create($publication_5_34);
        Publication::create($publication_5_35);
        Publication::create($publication_5_36);
        Publication::create($publication_5_37);
        Publication::create($publication_5_38);
        Publication::create($publication_5_39);
        Publication::create($publication_5_40);

        Publication::create($publication_5_41);
        Publication::create($publication_5_42);
        Publication::create($publication_5_43);
        Publication::create($publication_5_44);
        Publication::create($publication_5_45);
        Publication::create($publication_5_46);
        Publication::create($publication_5_47);
        Publication::create($publication_5_48);
        Publication::create($publication_5_49);
        Publication::create($publication_5_50);

        Publication::create($publication_5_51);
        Publication::create($publication_5_52);
        Publication::create($publication_5_53);
        Publication::create($publication_5_54);
        Publication::create($publication_5_55);
        Publication::create($publication_5_56);
        Publication::create($publication_5_57);
        Publication::create($publication_5_58);
        Publication::create($publication_5_59);
        Publication::create($publication_5_60);

        Publication::create($publication_5_61);
        Publication::create($publication_5_62);
        Publication::create($publication_5_63);
        Publication::create($publication_5_64);
        Publication::create($publication_5_65);
        Publication::create($publication_5_66);
        Publication::create($publication_5_67);
        Publication::create($publication_5_68);
        Publication::create($publication_5_69);
        Publication::create($publication_5_70);

        Publication::create($publication_5_71);
        Publication::create($publication_5_72);
        Publication::create($publication_5_73);
        Publication::create($publication_5_74);
        Publication::create($publication_5_75);
        Publication::create($publication_5_76);
        Publication::create($publication_5_78);
        Publication::create($publication_5_79);
        Publication::create($publication_5_80);

        Publication::create($publication_5_81);
        Publication::create($publication_5_82);
        Publication::create($publication_5_83);
        Publication::create($publication_5_84);
        Publication::create($publication_5_85);
        Publication::create($publication_5_86);
        Publication::create($publication_5_87);
        Publication::create($publication_5_88);
        Publication::create($publication_5_89);
        Publication::create($publication_5_90);

        Publication::create($publication_5_91);
        Publication::create($publication_5_92);
        Publication::create($publication_5_93);
        Publication::create($publication_5_94);
        Publication::create($publication_5_95);
        Publication::create($publication_5_96);
        Publication::create($publication_5_97);
        Publication::create($publication_5_98);
        Publication::create($publication_5_99);
        Publication::create($publication_5_100);

        Publication::create($publication_5_101);
        Publication::create($publication_5_102);
        Publication::create($publication_5_103);
    }
}
