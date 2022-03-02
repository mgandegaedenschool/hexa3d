@extends('app')

@section('content')
    @include('pdf.pdf-irmr3-header_inc')
    <main class="presentation-reponse-main">
        <div class="pdf-interets-generaux">
            <div class="pdf-line-container">
                <div class="pdf-rounded-interests">
                    <div class="pdf-rounded-section-types">
                        <h3 class="pdf-title title-type title-type">Intérêts généraux</h3>
                    </div>
                </div>
                <hr>
            </div>
        </div>

        <div class="pdf-profils-div">
            <p class="text-kaki text-kaki-info">Profil intra-individuel : <span>R A I</span></p>
            <p class="text-kaki text-kaki-info">Profil inter-individuel : <span>R A I</span></p>
        </div>

        <div class="pdf-interets-generaux">

            <div class="pdf-line-container">
                <div class="pdf-rounded-interests">
                    <div class="pdf-rounded-section-types">
                        <h3 class="pdf-title title-type title-type">Force des indifcateurs</h3>
                    </div>
                </div>
                <hr>
            </div>

        </div>

        <section class="pdf-profils-section">
            <div class="pdf-profils-indicators">

                <p class="text-kaki text-kaki-info">Consistance des intérêts</p>
                <p class="profil-indicator-desc">
                    Cet indicateur (qui varie de 1 à 10) rend compte de la proximité des types qui composent le profil. Les profils constitués de types opposés sur l’hexagone (par exemple, le profil Réaliste/Social) sont inconsistants puisqu’ils s’opposent sur un ensemble de caractéristiques. Un profil consistant est un profil constitué de types proches sur l’hexagone (par exemple, Réaliste/ Investigateur). Un profil très peu ou peu consistant doit amener à s’interroger sur les raisons de cette inconsistance.
                </p>

                <div class="profil-indicator-bar segoe-ui-font">

                    <div class="indicator-bar-legend">
                        <p>Profil</p>
                        <p>Valeur de l'indicateur</p>
                        <p>Fréquence cumulée</p>
                        <p>Niveau d'intensité</p>
                    </div>
                    <div class="indicator-bar-content">
                        <p>R A I</p>
                        <p>6</p>
                        <p>43.6%</p>
                        <p>Moyennement consistant</p>
                    </div>

                </div>

            </div>
            <div class="pdf-profils-indicators">

                <p class="text-kaki text-kaki-info">Différenciation des intérêts</p>
                <p class="profil-indicator-desc">
                    Cet indicateur (qui varie de 0.5 à 4) traduit les différences de notes entre les types ordonnés à l’intérieur du profil. Un profil faiblement ou très faiblement différencié ne permet pas d’apporter suffisamment d’informations sur le profil d’une personne : ses intérêts ne sont pas suffisamment hiérarchisés (hexagone régulier). Un profil plutôt ou très différencié est un profil qui comporte des différences de notes étalonnées entre les types suffisamment importantes pour considérer que le sujet hiérarchise ses intérêts (hexagone avec angle saillant).
                </p>

                <div class="profil-indicator-bar segoe-ui-font">

                    <div class="indicator-bar-legend">
                        <p>Profil</p>
                        <p>Valeur de l'indicateur</p>
                        <p>Fréquence cumulée</p>
                        <p>Niveau d'intensité</p>
                    </div>
                    <div class="indicator-bar-content">
                        <p>R A I</p>
                        <p>6</p>
                        <p>43.6%</p>
                        <p>Moyennement consistant</p>
                    </div>

                </div>

            </div>
        </section>
        <div class="pdf-interets-generaux">

            <div class="pdf-line-container">
                <div class="pdf-rounded-interests">
                    <div class="pdf-rounded-section-types">
                        <h3 class="pdf-title title-type title-type">Intérêts spécifiques</h3>
                    </div>
                </div>
                <hr>
            </div>

        </div>
        <section class="pdf-profils-section">
            <div class="pdf-profils-indicators">

                <p class="text-kaki text-kaki-info">Profil intra-individuel</p>

                <div class="pdf-valorise-div segoe-ui-font">

                    <div class="single-sector-div">
                        <p class="valorise-title">Secteurs valorisés</p>
                        <div class="sector-details-div">
                            <p>1 - Plein air</p>
                            <p>2 - Pratiques</p>
                            <p>3 - Esthétiques</p>
                        </div>
                    </div>

                    <div class="single-sector-div">
                        <p class="valorise-title">Secteurs rejetés</p>
                        <div class="sector-details-div">
                            <p>10 - Médicaux</p>
                            <p>11 - Bureautique</p>
                            <p>12 - Calcul</p>
                        </div>
                    </div>

                </div>
            </div>
            <div class="pdf-profils-indicators">

                <p class="text-kaki text-kaki-info">Profil inter-individuel</p>

                <div class="pdf-valorise-div segoe-ui-font">
                    <div class="single-interets-div">
                        <p class="valorise-title">Intérêts valorisés (5 - 4)</p>
                        <div class="interets-details-div">
                            <div class="single-interet-details">
                                <div class="interet-details-number">5</div><p>Plein Air, Pratiques</p>
                            </div>
                            <div class="single-interet-details">
                                <div class="interet-details-number">4</div><p>Techniques</p>
                            </div>
                        </div>
                    </div>

                    <div class="single-interets-div">
                        <p class="valorise-title">Intérêts rejetés (1 - 2)</p>
                        <div class="interets-details-div">
                            <div class="single-interet-details">
                                <div class="interet-details-number">1</div><p>Service social, Calcul</p>
                            </div>
                            <div class="single-interet-details">
                                <div class="interet-details-number">2</div><p>Médicaux, Contact personnels, Bureautique</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main>
    @include('pdf.pdf-footer_inc')
@endsection
