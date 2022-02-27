<?php

namespace Database\Seeders;

use App\Models\Type;
use App\Models\Partie;
use App\Models\Test_hi;
use App\Models\Etalonnage;
use App\Models\TypeResultat;
use App\Models\TypeMetierIrmr;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::Factory(30)->create();
        \App\Models\Partie::Factory(4)->create();

        $parties =  Partie::all();
        $domaines =  [
            'activite', 'qualite', 'profession',
        ];
        foreach ($domaines as $domaine) {
            \App\Models\Domaine::create(['libelle_domaine' => $domaine, "id_partie" => $parties[rand(0, 3)]->id_partie]);
        }


        \App\Models\Etat_test::Factory(3)->create();
        $etalonnages = ['Adultes h/f', 'Femmes', 'Hommes', 'Collégiens h/f', 'Collégiens', 'Collégiennes', 'Lycéens h/f', 'Lycéens', 'Lycéennes'];
        foreach ($etalonnages as $etalonnage) {
            \App\Models\Etalonnage::create(['libelle_etalonnage' => $etalonnage]);
        }

        \App\Models\Item_serie_hexa3d_irmr::Factory(10)->create();

        $types = ['Hexa3d', 'IRMR'];
        foreach ($types as $type) {
            \App\Models\Type::create(['libelle_type' => $type]);
        }

        $tests = ['Test 1: Hexa3D', 'Test 1: IRMR3', 'Test 2: Hexa3D', 'Test 2: RMR3', 'Test 3: Hexa3D', 'Test 3: RMR3'];

        $types = Type::all();
        foreach ($tests as $test) {
            \App\Models\Test_hi::create([
                "libelle_test" => $test,
                "id_type" => $types[rand(0, 1)]->id_type,
            ]);
        }


        \App\Models\TypeResultat::Factory(3)->create();
        \App\Models\Participation_hi::Factory(6)->create();
        $typeMetiers = ['Plein air', 'Techniques', "Calcul", "Scientifiques", "Contacts personnels", "Esthétiques", "Littéraires", "Musicaux"];
        foreach ($typeMetiers as $type) {
            \App\Models\TypeMetierIrmr::create(['libelle_type_metier_irmr' => $type]);
        }

        $typeMetierIrmr = TypeMetierIrmr::all();
        $type = Type::all();


        $tab =  [
            /* PARTIE 1 */
            'Exploitant agricole', 'Ingénieur en bâtiment', 'Assistant de gestion', 'Chercheur scientifique', 'Directeur commercial', 'Artiste peintre', 'Journaliste', 'Pianiste de concert', 'Professeur des écoles', 'Directeur administratif et financier', 'Imprimeur', 'Médecin',

            /* PARTIE 2 */
            'Ingénieur mécanicien', 'Statisticien', 'Chimiste', 'Animateur radio/télé', 'Dessinateur publicitaire', 'Romancier', 'Chef d\'orchestre', 'Psychologue scolaire', 'Assistant de direction', 'Menuisier', 'Chirurgien', 'Pépiniériste - arboriculteur',

            /* PARTIE 3 */
            'Agent d\'assurance', 'Métérologue', 'Vendeur', 'Dessinateur de bande dessinées', 'Auteur d\'art dramatique', 'Compositeur de musique', 'Professeur d\'économie sociale et familiale', 'Opérateur de saisie de données', 'Cordonnier', 'Pédiatre', 'Jardinier paysagiste', 'Technicien de maintenance en informatique',

            /* PARTIE 4 */
            'Biologiste', 'Publicitaire', 'Illustrateur d\'ouvrages', 'Historien', 'Critique musical', 'Assistant social', 'Technicien administratif dans une banque', 'Teinturier / blanchisseur', 'Pharmacien', 'Ingénieur des eaux et forêts', 'Ingénieur en automatisme', 'Expert - comptable',

            /* PARTIE 5 */
            'Enquêteur étude de marché', 'Créateur de bijoux', 'Traducteur', 'Professeur de musique', 'Educateur', 'Administrateur de base de données', 'Maçon', 'Dentiste', 'Garde forestier', 'Ingénieur éléctronicien', 'Inspecteur des impots', 'Physicien',

            /* PARTIE 6 */
            'Photographe', 'Rédacteur dans un périodique', 'Violoniste', 'Médiateur familial', 'Technicien de gestion électronique de documents', 'Horloger', 'Ophtalmologiste', 'Horticulteur', 'Technicien des télécommunications', 'Professeur de technique comptables', 'Océanologue', 'Représentant de commerce',

            /* PARTIE 7 */
            'Critique littéraire', 'Chanteur dans un groupe', 'Animateur de centre de loisir', 'Employé de bureau', 'Plombier', 'Radiologue', 'Technicien jardins espaces verts', 'Mécanicien auto', 'Développeur informatique de gestion', 'Astronome', 'Attaché commercial', 'Créateur de décors de théâtre',

            /* PARTIE 8 */
            'Guitariste', 'Conseiller d\'orientation - Psychologue', 'Attaché d\'administration', 'Cuisinier - restaurateur', 'Kinésithérapeute', 'Guide de haute montagne', 'Technicien son/vidéo', 'Contrôleur de gestion', 'Géologue', 'Téléopérateur marketing', 'Décorateur étalagiste', 'Scénariste',

            /* PARTIE 9 */
            'Psychothérapeute', 'Responsable du suivi des commandes', 'Boulanger - pâtissier', 'Infirmier', 'Producteur de cultures biologique', 'Technicien en mécanique de précision', 'Chargé de clientèle (banque)', 'Technicien de laboratoire', 'Chef de rayon', 'Couturier (haute couture)', 'Assistant d\'édition', 'Disc-jokey'

        ];
        foreach ($tab as $val) {
            \App\Models\Metier::create(['libelle_metier' => $val, "id_type_metier_irmr" => $typeMetierIrmr[rand(0, 3)]->id_type_metier_irmr, "id_type" => $type[rand(0, 1)]->id_type]);
        }

        \App\Models\Question_hi::Factory(10)->create();
        \App\Models\Reponse_hi::Factory(10)->create();
        \App\Models\Tableau_score::Factory(10)->create();
        \App\Models\Score_riarsec::Factory(10)->create();
        \App\Models\Table_etalonnage_d::Factory(10)->create();
        \App\Models\Table_etalonnage_d_riarsec::Factory(10)->create();
    }
}
