<?php

namespace Database\Seeders;

use App\Models\PoleRecherche;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PoleRechercheSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pole_1 = [
            "code_pole" => "CDRI",
            "titre" => "Pôle d'Optimisation des Cultures",
            "description_1" => "Le Pôle d'Optimisation des Cultures se consacre à l'amélioration des rendements et de la qualité des productions agricoles grâce à l'application des technologies de l'intelligence artificielle (IA) et de l'apprentissage automatique. Les chercheurs de ce pôle développent des modèles prédictifs avancés qui permettent d'optimiser les pratiques agricoles, telles que la sélection des variétés de plantes, la gestion des nutriments et des pesticides, ainsi que le calendrier des semis et des récoltes. En intégrant des données provenant de diverses sources, comme les capteurs de terrain, les images satellites et les historiques climatiques, ces modèles offrent des recommandations précises et personnalisées pour chaque parcelle de culture.",
            "description_2" => "L'un des objectifs principaux du pôle est de maximiser la productivité tout en minimisant l'impact environnemental. Pour ce faire, les chercheurs travaillent sur des algorithmes capables de déterminer les besoins spécifiques des cultures en temps réel. Par exemple, des systèmes d'irrigation intelligents peuvent ajuster automatiquement l'apport en eau en fonction des conditions météorologiques actuelles et prévues, de l'humidité du sol et des besoins en eau des plantes à différents stades de leur croissance. De même, des systèmes de gestion des nutriments et des pesticides peuvent réduire l'utilisation de produits chimiques en ciblant précisément les zones qui en ont besoin.<br><br><img alt='' src='http://127.0.0.1:8000/asset_web/assets/img/features-1.jpg'><br><br>&nbsp;En outre, le Pôle d'Optimisation des Cultures explore l'utilisation de techniques d'agriculture de précision pour accroître l'efficacité des ressources et améliorer la résilience des systèmes agricoles. Les technologies telles que les drones, les robots agricoles et les capteurs IoT (Internet des Objets) jouent un rôle crucial dans la collecte de données détaillées et en temps réel sur les cultures et les conditions environnementales. En analysant ces données, les chercheurs peuvent identifier des tendances, prévoir des problèmes potentiels et proposer des solutions innovantes pour améliorer la gestion des exploitations agricoles. Le résultat est une agriculture plus durable, rentable et capable de répondre aux défis globaux croissants liés à la sécurité alimentaire et aux changements climatiques.<br>'",
            "media_url" => "media.png",
            "user_id" => 4,
            "status" => true


        ];

        $pole_2 = [
            "code_pole" => "QSIR",
            "titre" => "Voluptatem dignissimos provident",
            "description_1" => "Blanditiis voluptate odit ex error ea sed officiis deserunt. Cupiditate non consequatur et doloremque consequuntur. Accusantium labore reprehenderit error temporibus saepe perferendis fuga doloribus vero. Qui omnis quo sit. Dolorem architecto eum et quos deleniti officia qui",
            "description_2" => "<p>Est reprehenderit voluptatem necessitatibus asperiores neque sed ea illo. Deleniti quam sequi optio iste veniam repellat odit. Aut pariatur itaque nesciunt fuga.</p>
            <p>Sunt rem odit accusantium omnis perspiciatis officia. Laboriosam aut consequuntur recusandae mollitia doloremque est architecto cupiditate ullam. Quia est ut occaecati fuga. Distinctio ex repellendus eveniet velit sint quia sapiente cumque. Et ipsa perferendis ut nihil. Laboriosam vel voluptates tenetur nostrum. Eaque iusto cupiditate et totam et quia dolorum in. Sunt molestiae ipsum at consequatur vero. Architecto ut pariatur autem ad non cumque nesciunt qui maxime. Sunt eum quia impedit dolore alias explicabo ea.</p>",
            "media_url" => "media.png",
            "user_id" => 3,
            "status" => true
        ];

        $pole_3 = [
            "code_pole" => "LGMP",
            "titre" => "Neque exercitationem debitis",
            "description_1" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
            "description_2" => "<p>Est reprehenderit voluptatem necessitatibus asperiores neque sed ea illo. Deleniti quam sequi optio iste veniam repellat odit. Aut pariatur itaque nesciunt fuga.</p>
            <p>Sunt rem odit accusantium omnis perspiciatis officia. Laboriosam aut consequuntur recusandae mollitia doloremque est architecto cupiditate ullam. Quia est ut occaecati fuga. Distinctio ex repellendus eveniet velit sint quia sapiente cumque. Et ipsa perferendis ut nihil. Laboriosam vel voluptates tenetur nostrum. Eaque iusto cupiditate et totam et quia dolorum in. Sunt molestiae ipsum at consequatur vero. Architecto ut pariatur autem ad non cumque nesciunt qui maxime. Sunt eum quia impedit dolore alias explicabo ea.</p>",
            "media_url" => "media.png",
            "user_id" => 2,
            "status" => true
        ];


        $pole_4 = [
            "code_pole" => "SCDL",
            "titre" => " sciences de l’ingénieur",
            "description_1" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
            "description_2" => "<p>Est reprehenderit voluptatem necessitatibus asperiores neque sed ea illo. Deleniti quam sequi optio iste veniam repellat odit. Aut pariatur itaque nesciunt fuga.</p>
            <p>Sunt rem odit accusantium omnis perspiciatis officia. Laboriosam aut consequuntur recusandae mollitia doloremque est architecto cupiditate ullam. Quia est ut occaecati fuga. Distinctio ex repellendus eveniet velit sint quia sapiente cumque. Et ipsa perferendis ut nihil. Laboriosam vel voluptates tenetur nostrum. Eaque iusto cupiditate et totam et quia dolorum in. Sunt molestiae ipsum at consequatur vero. Architecto ut pariatur autem ad non cumque nesciunt qui maxime. Sunt eum quia impedit dolore alias explicabo ea.</p>",
            "media_url" => "media.png",
            "user_id" => 27,
            "status" => true
        ];




        PoleRecherche::create($pole_4);
        // PoleRecherche::create($pole_1);
        // PoleRecherche::create($pole_2);
        // PoleRecherche::create($pole_3);

    }
}
