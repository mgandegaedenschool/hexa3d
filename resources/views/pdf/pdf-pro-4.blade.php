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

                    <div class="serie-classement serie-a">
                        <div class="serie-header-block">
                            <h3>Série A</h3><p>Classement</p>
                        </div>
                        <div class="metiers-classement-container">
                            <div class="metier-classement">
                                <p class="serie-metier fav-metier-blue-txt">Exploitant agricole<span>2</span></p>
                                <p class="serie-metier indiff-metier-gray-txt">Exploitant agricole<span>2</span></p>
                                <p class="serie-metier uninsterested-metier-red-txt ">Exploitant agricole<span>2</span></p>
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

                    <div class="serie-classement serie-c">
                        <div class="serie-header-block">
                            <h3>Série C</h3><p>Classement</p>
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

                    <div class="serie-classement serie-e">
                        <div class="serie-header-block">
                            <h3>Série E</h3><p>Classement</p>
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

                <div class="serie-metier-column">
                    <p class="column-header-p">Orange :<span>Métiers classés 0</span></p>

                    <div class="serie-classement serie-b">
                        <div class="serie-header-block">
                            <h3>Série B</h3><p>Classement</p>
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

                    <div class="serie-classement serie-d">
                        <div class="serie-header-block">
                            <h3>Série D</h3><p>Classement</p>
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

                    <div class="serie-classement serie-f">
                        <div class="serie-header-block">
                            <h3>Série F</h3><p>Classement</p>
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
