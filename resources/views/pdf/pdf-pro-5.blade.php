@extends('app')

@section('content')
    @include('pdf.pdf-irmr3-header_inc')
    <main class="presentation-reponse-main">
        <div class="pdf-interets-generaux">
            <div class="pdf-line-container">
                <div class="pdf-rounded-interests">
                    <div class="pdf-rounded-section-types">
                        <h3 class="pdf-title title-type title-type">Présentation des réponses</h3>
                    </div>
                </div>
                <hr>
            </div>

        </div>

        <section class="pdf-container-medium-section">

            <div class="metier-interest-container">
                <div class="metier-interest-div">
                    <div class="fav-metier-blue interest-metier-block"></div>
                    <p>Ce métier fait partie de mes préférés (2)</p>
                </div>
                <div class="metier-interest-div">
                    <div class="indiff-metier-gray interest-metier-block"></div>
                    <p>Ce métier m'est indifférent (1)</p>
                </div>
                <div class="metier-interest-div">
                    <div class="uninsterested-metier-red interest-metier-block"></div>
                    <p>Ce métier ne m'intéresse pas (0)</p>
                </div>
            </div>

            <div class="series-container">

                <div class="serie-metier-column">
                    <p class="column-header-p">Vert :<span>Métiers classés 2</span></p>

                    <div class="serie-classement serie-g">
                        <div class="serie-header-block">
                            <h3>Série G</h3><p>Classement</p>
                        </div>
                        <div class="metiers-classement-container">
                            <div class="metier-classement">
                                <p class="serie-metier">Exploitant agricole<span>2</span></p>
                                <p class="serie-metier">Exploitant agricole<span>2</span></p>
                                <p class="serie-metier">Exploitant agricole<span>2</span></p>
                                <p class="serie-metier">Exploitant agricole<span>2</span></p>
                                <p class="serie-metier">Exploitant agricole<span>2</span></p>
                                <p class="serie-metier">Exploitant agricole<span>2</span></p>
                                <p class="serie-metier">Exploitant agricole<span>2</span></p>
                                <p class="serie-metier">Exploitant agricole<span>2</span></p>
                                <p class="serie-metier">Exploitant agricole<span>2</span></p>
                                <p class="serie-metier">Exploitant agricole<span>2</span></p>
                                <p class="serie-metier">Exploitant agricole<span>2</span></p>
                                <p class="serie-metier">Exploitant agricole<span>2</span></p>
                            </div>
                        </div>
                    </div>

                    <div class="serie-classement serie-i">
                        <div class="serie-header-block">
                            <h3>Série I</h3><p>Classement</p>
                        </div>
                        <div class="metiers-classement-container">
                            <div class="metier-classement">
                                <p class="serie-metier">Exploitant agricole<span>2</span></p>
                                <p class="serie-metier">Exploitant agricole<span>2</span></p>
                                <p class="serie-metier">Exploitant agricole<span>2</span></p>
                                <p class="serie-metier">Exploitant agricole<span>2</span></p>
                                <p class="serie-metier">Exploitant agricole<span>2</span></p>
                                <p class="serie-metier">Exploitant agricole<span>2</span></p>
                                <p class="serie-metier">Exploitant agricole<span>2</span></p>
                                <p class="serie-metier">Exploitant agricole<span>2</span></p>
                                <p class="serie-metier">Exploitant agricole<span>2</span></p>
                                <p class="serie-metier">Exploitant agricole<span>2</span></p>
                                <p class="serie-metier">Exploitant agricole<span>2</span></p>
                                <p class="serie-metier">Exploitant agricole<span>2</span></p>
                            </div>
                        </div>
                    </div>

                    <div class="serie-classement metiers-preferes-serie">
                        <div class="serie-header-block">
                            <h3>Métiers préférés</h3>
                        </div>
                        <div class="metiers-classement-container">
                            <div class="metier-preferes">
                                <p class="metier-prefere">Exploitant agricole</p>
                                <p class="metier-prefere">Exploitant agricole</p>
                                <p class="metier-prefere">Exploitant agricole</p>

                            </div>
                        </div>
                    </div>

                </div>

                <div class="serie-metier-column">
                    <p class="column-header-p">Orange :<span>Métiers classés 0</span></p>

                    <div class="serie-classement serie-h">
                        <div class="serie-header-block">
                            <h3>Série H</h3><p>Classement</p>
                        </div>
                        <div class="metiers-classement-container">
                            <div class="metier-classement">
                                <p class="serie-metier">Exploitant agricole<span>2</span></p>
                                <p class="serie-metier">Exploitant agricole<span>2</span></p>
                                <p class="serie-metier">Exploitant agricole<span>2</span></p>
                                <p class="serie-metier">Exploitant agricole<span>2</span></p>
                                <p class="serie-metier">Exploitant agricole<span>2</span></p>
                                <p class="serie-metier">Exploitant agricole<span>2</span></p>
                                <p class="serie-metier">Exploitant agricole<span>2</span></p>
                                <p class="serie-metier">Exploitant agricole<span>2</span></p>
                                <p class="serie-metier">Exploitant agricole<span>2</span></p>
                                <p class="serie-metier">Exploitant agricole<span>2</span></p>
                                <p class="serie-metier">Exploitant agricole<span>2</span></p>
                                <p class="serie-metier">Exploitant agricole<span>2</span></p>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </section>


    </main>
    @include('pdf.pdf-footer_inc')
@endsection
