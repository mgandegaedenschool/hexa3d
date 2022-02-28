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
                        <h3 class="pdf-title title-type">Type artistique</h3>
                    </div>
                    <h3 class="pdf-title-interests pdf-title title-type">Intérêts moyens</h3>
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
                        Il correspond à des personnes attirées par des activités favorisant l’expression de leur imagination et leur créativité. Elles recherchent volontiers des environnements souples, changeants, qui leur permettent d’évoluer avec indépendance. En revanche, elles se plient difficilement aux règles qui peuvent être perçues comme une entrave à leur créativité. Au niveau professionnel, ces personnes s’épanouissent dans les métiers liés aux arts, métiers de la publicité, de la communication, des relations publiques, des médias.
                    </p>
                    <p class="pdf-chart-desc-bold">
                        Ce type est fortement en relation avec les échelles spécifiques «Esthétiques», «Musicaux» et «Littéraires».
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
                            Esthétique :
                        </p>
                        <p>
                            intérêt pour les activités impliquant une dimension artistique appartenant au domaine pictural, graphique, etc. Exemples : Designer, Photographe de mode, Acteur, Critique d’art, Antiquaire, Décorateur d’intérieur, etc.
                        </p>
                    </div>

                    <!-- l'intérêt -->
                    <p class="pdf-interests-rate">
                        Intérêts moyens
                    </p>
                </div>
                <div class="pdf-interests-text-rate">
                    <div class="pdf-interests-text">
                        <p class="pdf-interests-domain-title">
                            Musicaux :
                        </p>
                        <p>
                            intérêt pour les activités liées au chant et à la musique que ce soit comme compositeur, interprète ou critique. Exemples : Compositeur de musique, Chanteur de variétés, Bruiteur, Technicien du son, Musicothérapeute, etc.
                        </p>
                    </div>
                    <p class="pdf-interests-rate">
                        Intérêts moyens
                    </p>
                </div>
                <div class="pdf-interests-text-rate">
                    <div class="pdf-interests-text">
                        <p class="pdf-interests-domain-title">
                            Littéraires :
                        </p>
                        <p>
                            intérêt pour les livres, pour les activités d’écriture, et de façon générale pour le domaine de la communication écrite. Exemples : Ecrivain, Reporter, Journaliste, Traducteur-interprète, Agent littéraire, etc.
                        </p>
                    </div>
                    <p class="pdf-interests-rate">
                        Intérêts moyens
                    </p>
                </div>
            </div>
        </section>
        <div class="pdf-interets-generaux">
            <div class="pdf-line-container">
                <div class="pdf-rounded-interests">
                    <div class="pdf-rounded-section-types">
                        <h3 class="pdf-title title-type">Type social</h3>
                    </div>
                    <h3 class="pdf-title-interests pdf-title title-type">Intérêts très peu marqués</h3>
                </div>

                <hr>
            </div>

        </div>
        <section class="pdf-container-medium-section">
            <div class="pdf-chart-n-text">
                <canvas class="chart-view" width="440" height="280"></canvas>
                <div class="pdf-chart-desc">
                    <p>
                        Il correspond à des personnes altruistes, sociables, accordant une grande place aux sentiments
                        des autres. Ce sont généralement des personnes à l’aise dans les activités relationnelles. En
                        revanche, cette ouverture vers les autres peut les amener à éprouver un moindre intérêt pour
                        les problèmes techniques et les activités liées à la dépense physique. Au niveau professionnel,
                        elles s’épanouissent dans les métiers d’assistance à autrui, du conseil et de l’enseignement.
                    </p>
                    <p class="pdf-chart-desc-bold">
                        Ce type est fortement en relation avec l'échelle spécifique «Service Social».
                    </p>
                </div>
            </div>
            <div class="pdf-interests-domains">
                <div class="pdf-interests-text-rate">
                    <div class="pdf-interests-text">
                        <p class="pdf-interests-domain-title">
                            Service social :
                        </p>
                        <p>
                            intérêt pour les activités d’enseignement, d’aide, de soutien, d’assistance, en particulier auprès de personnes en difficultés, ayant des problèmes, des soucis, avec le désir de comprendre celles-ci et de les aider. Exemples : Educateur de jeunes enfants, Educateur spécialisé, Animateur socio-culturel, Conseiller pédagogique, Assistante sociale/Travailleur social, etc.
                        </p>
                    </div>
                    <p class="pdf-interests-rate">
                        Intérêts très peu marqués
                    </p>
                </div>
            </div>
        </section>

    </main>
    @include('pdf.pdf-footer_inc')
@endsection
