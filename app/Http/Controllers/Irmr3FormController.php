<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Irmr3_form;

class Irmr3FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('test.irmr3_forms');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tab = [

            /* PARTIE 1 */

            ['name'=> 'exp-agricole', 'value' => [0,1,2], 'metier'=> 'Exploitant agricole', 'definition' => 'définition du métier au survol', 'domaine' => 'Plein air', 'partie' => 1],
            ['name'=> 'inge-batiment', 'value' => [0,1,2], 'metier'=> 'Ingénieur en bâtiment', 'definition' => 'définition du métier au survol', 'domaine' => 'Techniques', 'partie' => 1],
            ['name'=> 'ass-gestion', 'value' => [0,1,2], 'metier'=> 'Assistant de gestion', 'definition' => 'définition du métier au survol', 'domaine' =>'Calcul', 'partie' => 1],
            ['name'=> 'chercheur-sci', 'value' => [0,1,2], 'metier'=> 'Chercheur scientifique', 'definition' => 'définition du métier au survol', 'domaine' => 'Scientifiques', 'partie' => 1],
            ['name'=> 'dir-commercial', 'value' => [0,1,2], 'metier'=> 'Directeur commercial', 'definition' => 'définition du métier au survol', 'domaine' =>'Contacts personnels', 'partie' => 1],
            ['name'=> 'peintre', 'value' => [0,1,2], 'metier'=> 'Artiste peintre', 'definition' => 'définition du métier au survol', 'domaine' =>'Esthétiques', 'partie' => 1],
            ['name'=> 'journaliste', 'value' => [0,1,2], 'metier'=> 'Journaliste', 'definition' => 'définition du métier au survol', 'domaine' =>'Littéraires', 'partie' => 1],
            ['name'=> 'pianiste', 'value' => [0,1,2], 'metier'=> 'Pianiste de concert', 'definition' => 'définition du métier au survol', 'domaine' =>'Musicaux', 'partie' => 1],
            ['name'=> 'professeur-sco', 'value' => [0,1,2], 'metier'=> 'Professeur des écoles', 'definition' => 'définition du métier au survol', 'domaine' =>'Service social', 'partie' => 1],
            ['name'=> 'dir-administratif', 'value' => [0,1,2], 'metier'=> 'Directeur administratif et financier', 'definition' => 'définition du métier au survol', 'domaine' =>'Travail de bureau', 'partie' => 1],
            ['name'=> 'imprimeur', 'value' => [0,1,2], 'metier'=> 'Imprimeur', 'definition' => 'définition du métier au survol', 'domaine' =>'Pratiques', 'partie' => 1],
            ['name'=> 'medecin', 'value' => [0,1,2], 'metier'=> 'Médecin', 'definition' => 'définition du métier au survol', 'domaine' => 'Médicaux', 'partie' => 1],

            /* PARTIE 2 */

            ['name'=> 'inge-mecanicien', 'value' => [0,1,2], 'metier'=> 'Ingénieur mécanicien', 'definition' => 'définition du métier au survol', 'domaine' =>'Techniques', 'partie' => 2],
            ['name'=> 'statisticien', 'value' => [0,1,2], 'metier'=> 'Statisticien', 'definition' => 'définition du métier au survol', 'domaine' =>'Calcul', 'partie' => 2],
            ['name'=> 'chimiste', 'value' => [0,1,2], 'metier'=> 'Chimiste', 'definition' => 'définition du métier au survol', 'domaine' =>'Scientifiques', 'partie' => 2],
            ['name'=> 'animateur-radio', 'value' => [0,1,2], 'metier'=> 'Animateur radio/télé', 'definition' => 'définition du métier au survol', 'domaine' =>'Contacts personnels', 'partie' => 2],
            ['name'=> 'dess-publicitaire', 'value' => [0,1,2], 'metier'=> 'Dessinateur publicitaire', 'definition' => 'définition du métier au survol', 'domaine' =>'Esthétiques', 'partie' => 2],
            ['name'=> 'romancier', 'value' => [0,1,2], 'metier'=> 'Romancier', 'definition' => 'définition du métier au survol', 'domaine' =>'Littéraires', 'partie' => 2],
            ['name'=> 'ch-orchestre', 'value' => [0,1,2], 'metier'=> 'Chef d\'orchestre', 'definition' => 'définition du métier au survol', 'domaine' =>'Musicaux', 'partie' => 2],
            ['name'=> 'psychologue-sco', 'value' => [0,1,2], 'metier'=> 'Psychologue scolaire', 'definition' => 'définition du métier au survol', 'domaine' =>'Service social', 'partie' => 2],
            ['name'=> 'ass-direction', 'value' => [0,1,2], 'metier'=> 'Assistant de direction', 'definition' => 'définition du métier au survol', 'domaine' =>'Travail de bureau', 'partie' => 2],
            ['name'=> 'menuisier', 'value' => [0,1,2], 'metier'=> 'Menuisier', 'definition' => 'définition du métier au survol', 'domaine' =>'Pratiques', 'partie' => 2],
            ['name'=> 'chirurgien', 'value' => [0,1,2], 'metier'=> 'Chirurgien', 'definition' => 'définition du métier au survol', 'domaine' =>'Médicaux', 'partie' => 2],
            ['name'=> 'pepinieriste-arbo', 'value' => [0,1,2], 'metier'=> 'Pépiniériste - arboriculteur', 'definition' => 'définition du métier au survol', 'domaine' =>'Plein air', 'partie' => 2],

            /* PARTIE 3 */

            ['name'=> 'agent-assur', 'value' => [0,1,2], 'metier'=> 'Agent d\'assurance', 'definition' => 'définition du métier au survol', 'domaine' =>'Calcul', 'partie' => 3],
            ['name'=> 'meterologue', 'value' => [0,1,2], 'metier'=> 'Métérologue', 'definition' => 'définition du métier au survol', 'domaine' =>'Scientifiques', 'partie' => 3],
            ['name'=> 'vendeur', 'value' => [0,1,2], 'metier'=> 'Vendeur', 'definition' => 'définition du métier au survol', 'domaine' =>'Contacts personnels', 'partie' => 3],
            ['name'=> 'dess-bd', 'value' => [0,1,2], 'metier'=> 'Dessinateur de bande dessinées', 'definition' => 'définition du métier au survol', 'domaine' =>'Esthétiques', 'partie' => 3],
            ['name'=> 'auteur-art-drama', 'value' => [0,1,2], 'metier'=> 'Auteur d\'art dramatique', 'definition' => 'définition du métier au survol', 'domaine' =>'Littéraires', 'partie' => 3],
            ['name'=> 'compositeur-mus', 'value' => [0,1,2], 'metier'=> 'Compositeur de musique', 'definition' => 'définition du métier au survol', 'domaine' =>'Musicaux', 'partie' => 3],
            ['name'=> 'professeur-eco-soc-fam', 'value' => [0,1,2], 'metier'=> 'Professeur d\'économie sociale et familiale', 'definition' => 'définition du métier au survol', 'domaine' =>'Service social', 'partie' => 3],
            ['name'=> 'ope-saisie-donnees', 'value' => [0,1,2], 'metier'=> 'Opérateur de saisie de données', 'definition' => 'définition du métier au survol', 'domaine' =>'Travail de bureau', 'partie' => 3],
            ['name'=> 'cordonnier', 'value' => [0,1,2], 'metier'=> 'Cordonnier', 'definition' => 'définition du métier au survol', 'domaine' =>'Pratiques', 'partie' => 3],
            ['name'=> 'pediatre', 'value' => [0,1,2], 'metier'=> 'Pédiatre', 'definition' => 'définition du métier au survol', 'domaine' =>'Médicaux', 'partie' => 3],
            ['name'=> 'jard-paysagiste', 'value' => [0,1,2], 'metier'=> 'Jardinier paysagiste', 'definition' => 'définition du métier au survol', 'domaine' =>'Plein air', 'partie' => 3],
            ['name'=> 'tech-maintenance-info"', 'value' => [0,1,2], 'metier'=> 'Technicien de maintenance en informatique', 'definition' => 'définition du métier au survol', 'domaine' =>'Techniques', 'partie' => 3],

            /* PARTIE 4 */

            ['name'=> 'biologiste', 'value' => [0,1,2], 'metier'=> 'Biologiste', 'definition' => 'définition du métier au survol', 'domaine' =>'Scientifiques', 'partie' => 4],
            ['name'=> 'publicitaire', 'value' => [0,1,2], 'metier'=> 'Publicitaire', 'definition' => 'définition du métier au survol', 'domaine' =>'Contacts personnels', 'partie' => 4],
            ['name'=> 'illustrateur-ouvrage', 'value' => [0,1,2], 'metier'=> 'Illustrateur d\'ouvrages', 'definition' => 'définition du métier au survol', 'domaine' =>'Esthétiques', 'partie' => 4],
            ['name'=> 'historien', 'value' => [0,1,2], 'metier'=> 'Historien', 'definition' => 'définition du métier au survol', 'domaine' =>'Littéraires', 'partie' => 4],
            ['name'=> 'critique-mus', 'value' => [0,1,2], 'metier'=> 'Critique musical', 'definition' => 'définition du métier au survol', 'domaine' =>'Musicaux', 'partie' => 4],
            ['name'=> 'ass-social', 'value' => [0,1,2], 'metier'=> 'Assistant social', 'definition' => 'définition du métier au survol', 'domaine' =>'Service social', 'partie' => 4],
            ['name'=> 'tech-admin-banque', 'value' => [0,1,2], 'metier'=> 'Technicien administratif dans une banque', 'definition' => 'définition du métier au survol', 'domaine' =>'Travail de bureau', 'partie' => 4],
            ['name'=> 'teinturier-blanchisseur', 'value' => [0,1,2], 'metier'=> 'Teinturier / blanchisseur', 'definition' => 'définition du métier au survol', 'domaine' =>'Pratiques', 'partie' => 4],
            ['name'=> 'pharmacien', 'value' => [0,1,2], 'metier'=> 'Pharmacien', 'definition' => 'définition du métier au survol', 'domaine' =>'Médicaux', 'partie' => 4],
            ['name'=> 'inge-eau-foret', 'value' => [0,1,2], 'metier'=> 'Ingénieur des eaux et forêts', 'definition' => 'définition du métier au survol', 'domaine' =>'Plein air', 'partie' => 4],
            ['name'=> 'inge-automatisme', 'value' => [0,1,2], 'metier'=> 'Ingénieur en automatisme', 'definition' => 'définition du métier au survol', 'domaine' =>'Techniques', 'partie' => 4],
            ['name'=> 'exp-comptable', 'value' => [0,1,2], 'metier'=> 'Expert - comptable', 'definition' => 'définition du métier au survol', 'domaine' =>'Calcul', 'partie' => 4],

            /* PARTIE 5 */

            ['name'=> 'enqueteur-etude-marche', 'value' => [0,1,2], 'metier'=> 'Enquêteur étude de marché', 'definition' => 'définition du métier au survol', 'domaine' =>'Contacts personnels', 'partie' => 5],
            ['name'=> 'createur-bijoux', 'value' => [0,1,2], 'metier'=> 'Créateur de bijoux', 'definition' => 'définition du métier au survol', 'domaine' =>'Esthétiques', 'partie' => 5],
            ['name'=> 'traducteur', 'value' => [0,1,2], 'metier'=> 'Traducteur', 'definition' => 'définition du métier au survol', 'domaine' =>'Littéraires', 'partie' => 5],
            ['name'=> 'professeur-mus', 'value' => [0,1,2], 'metier'=> 'Professeur de musique', 'definition' => 'définition du métier au survol', 'domaine' =>'Musicaux', 'partie' => 5],
            ['name'=> 'educateur', 'value' => [0,1,2], 'metier'=> 'Educateur', 'definition' => 'définition du métier au survol', 'domaine' =>'Service social', 'partie' => 5],
            ['name'=> 'admin-db', 'value' => [0,1,2], 'metier'=> 'Administrateur de base de données', 'definition' => 'définition du métier au survol', 'domaine' =>'Travail de bureau', 'partie' => 5],
            ['name'=> 'macon', 'value' => [0,1,2], 'metier'=> 'Maçon', 'definition' => 'définition du métier au survol', 'domaine' =>'Pratiques', 'partie' => 5],
            ['name'=> 'dentiste', 'value' => [0,1,2], 'metier'=> 'Dentiste', 'definition' => 'définition du métier au survol', 'domaine' =>'Médicaux', 'partie' => 5],
            ['name'=> 'garde-forestier', 'value' => [0,1,2], 'metier'=> 'Garde forestier', 'definition' => 'définition du métier au survol', 'domaine' =>'Plein air', 'partie' => 5],
            ['name'=> 'inge-elec', 'value' => [0,1,2], 'metier'=> 'Ingénieur éléctronicien', 'definition' => 'définition du métier au survol', 'domaine' =>'Techniques', 'partie' => 5],
            ['name'=> 'inspecteur-impots"', 'value' => [0,1,2], 'metier'=> 'Inspecteur des impots', 'definition' => 'définition du métier au survol', 'domaine' =>'Calcul', 'partie' => 5],
            ['name'=> 'physicien', 'value' => [0,1,2], 'metier'=> 'Physicien', 'definition' => 'définition du métier au survol', 'domaine' =>'Calcul', 'partie' => 5],

            /* PARTIE 6 */

            ['name'=>'photographe','value'=>[0,1,2],'metier'=>'Photographe','definition'=>'définition du métier au survol','domaine'=>'Esthétiques','partie'=>6],
            ['name'=>'redacteur-periodique','value'=>[0,1,2],'metier'=>'Rédacteur dans un périodique','definition'=>'définition du métier au survol','domaine'=>'Littéraires','partie'=>6],
            ['name'=>'violoniste','value'=>[0,1,2],'metier'=>'Violoniste','definition'=>'définition du métier au survol','domaine'=>'Musicaux','partie'=>6],
            ['name'=>'mediateur-familial','value'=>[0,1,2],'metier'=>'Médiateur familial','definition'=>'définition du métier au survol','domaine'=>'Service social','partie'=>6],
            ['name'=>'tech-gestion-elec-docs','value'=>[0,1,2],'metier'=>'Technicien de gestion électronique de documents','definition'=>'définition du métier au survol','domaine'=>'Travail de bureau','partie'=>6],
            ['name'=>'horloger','value'=>[0,1,2],'metier'=>'Horloger','definition'=>'définition du métier au survol','domaine'=>'Pratiques','partie'=>6],
            ['name'=>'ophtalmologiste','value'=>[0,1,2],'metier'=>'Ophtalmologiste','definition'=>'définition du métier au survol','domaine'=>'Médicaux','partie'=>6],
            ['name'=>'horticulteur','value'=>[0,1,2],'metier'=>'Horticulteur','definition'=>'définition du métier au survol','domaine'=>'Plein air','partie'=>6],
            ['name'=>'tech-telecom','value'=>[0,1,2],'metier'=>'Technicien des télécommunications','definition'=>'définition du métier au survol','domaine'=>'Techniques','partie'=>6],
            ['name'=>'professeur-tech-comptables','value'=>[0,1,2],'metier'=>'Professeur de technique comptables','definition'=>'définition du métier au survol','domaine'=>'Calcul','partie'=>6],
            ['name'=>'oceanologue','value'=>[0,1,2],'metier'=>'Océanologue','definition'=>'définition du métier au survol','domaine'=>'Scientifiques','partie'=>6],
            ['name'=>'rep-commerce','value'=>[0,1,2],'metier'=>'Représentant de commerce','definition'=>'définition du métier au survol','domaine'=>'Contacts personnels','partie'=>6],

            /* PARTIE 7 */

            ['name'=>'critique-litteraire','value'=>[0,1,2],'metier'=>'Critique littéraire','definition'=>'définition du métier au survol','domaine'=>'Littéraires','partie'=>7],
            ['name'=>'chanteur-groupe','value'=>[0,1,2],'metier'=>'Chanteur dans un groupe','definition'=>'définition du métier au survol','domaine'=>'Musicaux','partie'=>7],
            ['name'=>'animateur-centre-loisir','value'=>[0,1,2],'metier'=>'Animateur de centre de loisir','definition'=>'définition du métier au survol','domaine'=>'Service social','partie'=>7],
            ['name'=>'employe-bureau','value'=>[0,1,2],'metier'=>'Employé de bureau','definition'=>'définition du métier au survol','domaine'=>'Travail de bureau','partie'=>7],
            ['name'=>'plombier','value'=>[0,1,2],'metier'=>'Plombier','definition'=>'définition du métier au survol','domaine'=>'Pratiques','partie'=>7],
            ['name'=>'radiologue','value'=>[0,1,2],'metier'=>'Radiologue','definition'=>'définition du métier au survol','domaine'=>'Médicaux','partie'=>7],
            ['name'=>'tech-jardin-vert','value'=>[0,1,2],'metier'=>'Technicien jardins espaces verts','definition'=>'définition du métier au survol','domaine'=>'Plein air','partie'=>7],
            ['name'=>'mecanicien-auto','value'=>[0,1,2],'metier'=>'Mécanicien auto','definition'=>'définition du métier au survol','domaine'=>'Techniques','partie'=>7],
            ['name'=>'dev-info-gestion','value'=>[0,1,2],'metier'=>'Développeur informatique de gestion','definition'=>'définition du métier au survol','domaine'=>'Calcul','partie'=>7],
            ['name'=>'astronome','value'=>[0,1,2],'metier'=>'Astronome','definition'=>'définition du métier au survol','domaine'=>'Scientifiques','partie'=>7],
            ['name'=>'attache-commercial','value'=>[0,1,2],'metier'=>'Attaché commercial','definition'=>'définition du métier au survol','domaine'=>'Contacts personnels','partie'=>7],
            ['name'=>'crea-decors-theatre','value'=>[0,1,2],'metier'=>'Créateur de décors de théâtre','definition'=>'définition du métier au survol','domaine'=>'Esthétiques','partie'=>7],

            /* PARTIE 8 */

            ['name'=>'guitariste','value'=>[0,1,2],'metier'=>'Guitariste','definition'=>'définition du métier au survol','domaine'=>'Musicaux','partie'=>8],
            ['name'=>'conseiller-orientation-psy','value'=>[0,1,2],'metier'=>'Conseiller d\'orientation - Psychologue','definition'=>'définition du métier au survol','domaine'=>'Service social','partie'=>8],
            ['name'=>'attache-admin','value'=>[0,1,2],'metier'=>'Attaché d\'administration','definition'=>'définition du métier au survol','domaine'=>'Travail de bureau','partie'=>8],
            ['name'=>'cuisinier-restaurateur','value'=>[0,1,2],'metier'=>'Cuisinier - restaurateur','definition'=>'définition du métier au survol','domaine'=>'Pratiques','partie'=>8],
            ['name'=>'kinesitherapeute','value'=>[0,1,2],'metier'=>'Kinésithérapeute','definition'=>'définition du métier au survol','domaine'=>'Médicaux','partie'=>8],
            ['name'=>'guide-montagne','value'=>[0,1,2],'metier'=>'Guide de haute montagne','definition'=>'définition du métier au survol','domaine'=>'Plein air','partie'=>8],
            ['name'=>'tech-son-video','value'=>[0,1,2],'metier'=>'Technicien son/vidéo','definition'=>'définition du métier au survol','domaine'=>'Techniques','partie'=>8],
            ['name'=>'controleur-gestion','value'=>[0,1,2],'metier'=>'Contrôleur de gestion','definition'=>'définition du métier au survol','domaine'=>'Calcul','partie'=>8],
            ['name'=>'geologue','value'=>[0,1,2],'metier'=>'Géologue','definition'=>'définition du métier au survol','domaine'=>'Scientifiques','partie'=>8],
            ['name'=>'teleoperateur-market','value'=>[0,1,2],'metier'=>'Téléopérateur marketing','definition'=>'définition du métier au survol','domaine'=>'Contacts personnels','partie'=>8],
            ['name'=>'decorateur-etalagiste','value'=>[0,1,2],'metier'=>'Décorateur étalagiste','definition'=>'définition du métier au survol','domaine'=>'Esthétiques','partie'=>8],
            ['name'=>'scenariste','value'=>[0,1,2],'metier'=>'Scénariste','definition'=>'définition du métier au survol','domaine'=>'Littéraires','partie'=>8],

            /* PARTIE 9 */

            ['name'=>'psychotherapeute','value'=>[0,1,2],'metier'=>'Psychothérapeute','definition'=>'définition du métier au survol','domaine'=>'Service social','partie'=>9],
            ['name'=>'resp-suivi-commande','value'=>[0,1,2],'metier'=>'Responsable du suivi des commandes','definition'=>'définition du métier au survol','domaine'=>'Travail de bureau','partie'=>9],
            ['name'=>'boulanger-patissier','value'=>[0,1,2],'metier'=>'Boulanger - pâtissier','definition'=>'définition du métier au survol','domaine'=>'Pratiques','partie'=>9],
            ['name'=>'infirmier','value'=>[0,1,2],'metier'=>'Infirmier','definition'=>'définition du métier au survol','domaine'=>'Médicaux','partie'=>9],
            ['name'=>'producteur-cultures-bio','value'=>[0,1,2],'metier'=>'Producteur de cultures biologique','definition'=>'définition du métier au survol','domaine'=>'Plein air','partie'=>9],
            ['name'=>'tech-meca-precision','value'=>[0,1,2],'metier'=>'Technicien en mécanique de précision','definition'=>'définition du métier au survol','domaine'=>'Techniques','partie'=>9],
            ['name'=>'charge-clientele','value'=>[0,1,2],'metier'=>'Chargé de clientèle (banque)','definition'=>'définition du métier au survol','domaine'=>'Calcul','partie'=>9],
            ['name'=>'tech-laboratoire','value'=>[0,1,2],'metier'=>'Technicien de laboratoire','definition'=>'définition du métier au survol','domaine'=>'Scientifiques','partie'=>9],
            ['name'=>'chef-rayon','value'=>[0,1,2],'metier'=>'Chef de rayon','definition'=>'définition du métier au survol','domaine'=>'Contacts personnels','partie'=>9],
            ['name'=>'couturier','value'=>[0,1,2],'metier'=>'Couturier (haute couture)','definition'=>'définition du métier au survol','domaine'=>'Esthétiques','partie'=>9],
            ['name'=>'ass-edition','value'=>[0,1,2],'metier'=>'Assistant d\'édition','definition'=>'définition du métier au survol','domaine'=>'Littéraires','partie'=>9],
            ['name'=>'dj','value'=>[0,1,2],'metier'=>'Disc-jokey','definition'=>'définition du métier au survol','domaine'=>'Musicaux','partie'=>9]
        ];

        foreach ($tab as $value){
            Irmr3_form::create($value);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
