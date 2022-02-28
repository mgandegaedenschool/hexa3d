@extends('app')

@section('content')
    @include('pdf.pdf-irmr3-header_inc')
    <main>
        <div class="pdf-composition-container">
            <p class="text-kaki text-kaki-info">Composition et définitions des échelles</p>
        </div>

        <!-- début de la section avec le type en titre -->
        <div class="pdf-interets-generaux">
            <div class="pdf-line-container">
                <div class="pdf-rounded-interests">
                    <div class="pdf-rounded-section-types">
                        <h3 class="pdf-title title-type">Type entrepreneur</h3>
                    </div>
                    <h3 class="pdf-title-interests pdf-title title-type">Intérêts peu marqués</h3>
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
                        Il correspond à des personnes qui aiment imposer leurs idées, influencer autrui et cherchent à
                        occuper une place de leadership. Elles éprouvent un fort besoin de réussite et aspirent à un
                        statut social élevé. Comme le type « Social », le type « Entreprenant » apprécie les activités relationnelles, mais pour convaincre les autres de faire quelque chose (par exemple, la vente). Au niveau professionnel, ces personnes s’épanouissent dans les métiers de la vente, de la politique et du management.
                    </p>
                    <p class="pdf-chart-desc-bold">
                        Ce type est fortement en relation avec l'échelle spécifique "Contacts personnels".
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
                            Contacts personnels :
                        </p>
                        <p>
                            intérêt pour les relations sociales, les activités de prise de parole en public, de discussion, d’argumentation, de persuasion, impliquant une certaine assurance et une
                            capacité à influencer et diriger autrui. Cette dimension correspond fréquemment à un goût pour les professions commerciales et le management. Exemples : Chef de produits, Consultant en
                            entreprise, Responsable du recrutement, Acheteur, Représentant de commerce, Diplomate,
                            Négociateur immobilier, etc.
                        </p>
                    </div>

                    <!-- l'intérêt -->
                    <p class="pdf-interests-rate">
                        Intérêts peu marqués
                    </p>
                </div>
            </div>

        </section>
        <div class="pdf-interets-generaux">
            <div class="pdf-line-container">
                <div class="pdf-rounded-interests">
                    <div class="pdf-rounded-section-types">
                        <h3 class="pdf-title title-type">Type conventionnel</h3>
                    </div>
                    <h3 class="pdf-title-interests pdf-title title-type">Intérêts peu marqués</h3>
                </div>

                <hr>
            </div>

        </div>
        <section class="pdf-container-medium-section">
            <div class="pdf-chart-n-text">
                <canvas class="chart-view" width="440" height="280"></canvas>
                <div class="pdf-chart-desc">
                    <p>
                        Il correspond à des personnes plutôt organisées qui recherchent les milieux stables et structurés
                        dans lesquels elles s’adaptent bien. Leurs préférences vont à la manipulation explicite, ordonnée et systématique de données et elles se signalent dans une organisation par une application stricte et rigoureuse des règlements et des procédures. Au niveau professionnel, elles s’épanouissent dans les métiers de la bureautique, de la comptabilité et de la gestion, de la sécurité publique, judiciaires et juridiques.
                    </p>
                    <p class="pdf-chart-desc-bold">
                        Ce type est fortement en relation avec les échelles spécifiques «Calcul» et «Bureautique».
                    </p>
                </div>
            </div>
            <div class="pdf-interests-domains">
                <div class="pdf-interests-text-rate">
                    <div class="pdf-interests-text">
                        <p class="pdf-interests-domain-title">
                            Calcul :
                        </p>
                        <p>
                            intérêt pour les activités impliquant la manipulation et le traitement de données chiffrées.
                            Cette dimension correspond fréquemment à un goût pour la comptabilité, les mathématiques et les statistiques. Exemples : Analyste-financier, Expert-comptable, Contrôleur de gestion, Directeur
                            financier, Professeur de mathématiques, etc.
                        </p>
                    </div>
                    <p class="pdf-interests-rate">
                        Intérêts très peu marqués
                    </p>
                </div>
                <div class="pdf-interests-text-rate">
                    <div class="pdf-interests-text">
                        <p class="pdf-interests-domain-title">
                            Bureautique :
                        </p>
                        <p>
                            intérêt pour les activités impliquant l’utilisation de l’outil informatique dans des activités de gestion, de sécurité, de précision. Exemples : Technicien administratif dans une banque, Administrateur de bases de données, Technicien de gestion électronique de documents, Employé de suivi de commande, Employé qualité, etc.
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
