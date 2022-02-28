@extends('app')

@section('content')
    @include('pdf.pdf-irmr3-header_inc')
    <main>
        <div class="pdf-composition-container">
            <p class="text-kaki text-kaki-info">Composition et définitions des échelles</p>
            <p>Les résultats de ce questionnaire vous informent sur vos intérêts à partir de douze échelles spécifiques et de six types plus généraux (modèle dit de John Holland) regroupant chacun une ou plusieurs échelles spécifiques.</p>
        </div>

        <!-- début de la section avec le type en titre -->
        <div class="pdf-interets-generaux">
            <div class="pdf-line-container">
                <div class="pdf-rounded-interests">
                    <div class="pdf-rounded-section-types">
                        <h3 class="pdf-title title-type title-type">Type réaliste</h3>
                    </div>
                    <h3 class="pdf-title-interests pdf-title">Intérêts assez marqués</h3>
                </div>

                <hr>
            </div>

        </div>
        <section class="pdf-container-medium-section">
            <!-- la div qui contient la charte et le texte descriptif -->
            <div class="pdf-chart-n-text">
                <!-- la charte -->
                <canvas class="chart-view" width="440" height="280"></canvas>

                <div class="pdf-chart-desc">
                    <p>
                        Il correspond à des personnes attirées par des activités techniques ou physiques qui supposent la manipulation d’objets, d’outils, de machines, ou le contact avec la nature (animaux, plantes, etc.). Elles sont plutôt pragmatiques, les « pieds sur terre » et préfèrent l’action à la méditation. Ces personnes recherchent peu les contacts sociaux et s’épanouissent dans des métiers à forte composante manuelle et technique.
                    </p>
                    <p class="pdf-chart-desc-bold">
                        Ce type est fortement en relation avec les échelles spécifiques «Plein air», «Pratiques» et «Techniques».
                    </p>
                </div>
            </div>
            <!-- div qui regroupe différents domaines avec leur description et l'intérêt -->
            <div class="pdf-interests-domains">

                <!-- une div avec la description d'un domaine et l'intérêt pour ce domaine-->
                <div class="pdf-interests-text-rate">

                    <!-- le texte avec le titre du domaine -->
                    <div class="pdf-interests-text">
                        <p class="pdf-interests-domain-title">
                            Plein Air :
                        </p>
                        <p>
                            intérêt pour les activités se déroulant à l’extérieur, impliquant des déplacements et une certaine dépense physique, par opposition aux activités sédentaires, régulières, routinières, se déroulant en intérieur. Exemples : Horticulteur, Cascadeur, Sportif, Garde forestier, Jardinier, Géomètre, etc.
                        </p>
                    </div>

                    <!-- l'intérêt -->
                    <p class="pdf-interests-rate">
                        Intérêts très marqués
                    </p>
                </div>
                <div class="pdf-interests-text-rate">
                    <div class="pdf-interests-text">
                        <p class="pdf-interests-domain-title">
                            Pratiques :
                        </p>
                        <p>
                            intérêt pour les travaux de construction, fabrication, réparation, et préférence pour les activités manuelles par rapport aux activités intellectuelles. Exemples : Barman, Boulanger, Cariste, Chef de chantier dans les travaux publics, Menuisier, Maçon, etc.
                        </p>
                    </div>
                    <p class="pdf-interests-rate">
                        Intérêts très marqués
                    </p>
                </div>
                <div class="pdf-interests-text-rate">
                    <div class="pdf-interests-text">
                        <p class="pdf-interests-domain-title">
                            Techniques :
                        </p>
                        <p>
                            intérêt pour les activités impliquant l’utilisation de machines, d’instruments et de dispositifs techniques visant à construire, fabriquer, réparer. Exemples : Electronicien, Mécanicien-garagiste, Dessinateur industriel, Pilote de ligne, Technicien maintenance, etc.
                        </p>
                    </div>
                    <p class="pdf-interests-rate">
                        Intérêts assez marqués
                    </p>
                </div>
            </div>
        </section>
        <div class="pdf-interets-generaux">
            <div class="pdf-line-container">
                <div class="pdf-rounded-interests">
                    <div class="pdf-rounded-section-types">
                        <h3 class="pdf-title title-type">Type investigateur</h3>
                    </div>
                    <h3 class="pdf-title-interests pdf-title title-type">Intérêts moyens</h3>
                </div>

                <hr>
            </div>

        </div>
        <section class="pdf-container-medium-section">
            <div class="pdf-chart-n-text">
                <canvas class="chart-view" width="440" height="280"></canvas>
                <div class="pdf-chart-desc">
                    <p>
                        Il correspond à des personnes qui préfèrent la réflexion à l’action. Elles privilégient les activités d’observation et d’analyse, les problèmes à résoudre, et apprécient les environnements stimulants intellectuellement. Le besoin de compréhension est une forte dominante chez ces personnes qui s’épanouissent dans les métiers liés aux sciences sur des activités de recherche et de conception. Elles se caractérisent par une indépendance d’esprit.
                    </p>
                    <p class="pdf-chart-desc-bold">
                        Ce type est fortement en relation avec les échelles spécifiques «Scientifiques» et «Médicaux».
                    </p>
                </div>
            </div>
            <div class="pdf-interests-domains">
                <div class="pdf-interests-text-rate">
                    <div class="pdf-interests-text">
                        <p class="pdf-interests-domain-title">
                            Scientifiques :
                        </p>
                        <p>
                            intérêt pour les activités d’analyse, d’étude, d’investigation, de recherche, d’expérimentation, impliquant un travail intellectuel. Exemples : Géologue, Ingénieur en nucléaire, Sociologue, Ergonome, Journaliste scientifique, etc.
                        </p>
                    </div>
                    <p class="pdf-interests-rate">
                        Intérêts moyens
                    </p>
                </div>
                <div class="pdf-interests-text-rate">
                    <div class="pdf-interests-text">
                        <p class="pdf-interests-domain-title">
                            Médicaux :
                        </p>
                        <p>
                            intérêt pour le domaine de la santé, pour les activités de soin et de soulagement des malades. Exemples : Médecin, Chirurgien, Pédiatre, Dentiste, Radiologue, etc.
                        </p>
                    </div>
                    <p class="pdf-interests-rate">
                        Intérêts peu marqués
                    </p>
                </div>
            </div>
        </section>

    </main>
    @include('pdf.pdf-footer_inc')
@endsection
