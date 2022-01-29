
@extends('app')
@section('content')
    <header class="upper-container d-flex">
        <div class="container header-contain">
            <div class="row d-flex align-items-center img-text-nav py-3">
                 <div class="col-4 upper-image-container" style="max-width: 140px;">
                    <img src="{{asset('img/spiral_placeholder.png')}}" alt="spirale grise et blanche" class="img-fluid" style="width: 170px; height: 95px;">
                </div> 
                <h6 class="text-uppercase col-8 col-md-2 upper-title my-2">questionnaires d'intérêts professionnels</h6>
            </div>
        </div>
    </header>
    <main>
        <div class="container">
            <h3 class="font-weight-bold text-center">Avant de commencer le test, merci de renseigner les informations suivantes :</h3>
            <div class="pages d-flex align-items-center justify-content-center my-4">
                {{-- change the style when the steps advance --}}
                <p class='step my-0 mx-3 active-step'>Identité</p>
                <i class='fas fa-chevron-right <?php if(isset($_GET['step']) && $_GET['step'] >= 2){
                    echo 'active-chevron';
                } ?>'></i>
                <p class='step my-0 mx-3 <?php if(isset($_GET['step']) && $_GET['step'] >= 2){
                    echo 'active-step';
                } ?>'>Scolarité</p>
                <i class='fas fa-chevron-right <?php if(isset($_GET['step']) && $_GET['step'] >= 3){
                    echo 'active-chevron';
                } ?>'></i>
                <p class='step my-0 mx-3 <?php if(isset($_GET['step']) && $_GET['step'] >= 3){
                    echo 'active-step';
                } ?>'>Professionel</p>
            </div>
        </div>
        <div class="container">
                <form method="POST" action="{{ route('register.create.step.two.post') }}">
                    @csrf 
        
                <div class="form-row">
                    <div class="form-group col-12 col-md-5 col-lg-5 py-3">
                        <label for="InputStudies">Votre niveau d'études</label>
                        <input type="text" class="form-control" id="InputStudies" name="niv_etude" placeholder="Votre niveau d'études">
                    </div>
                </div>
                <div class="form-row d-flex justify-content-between hidden-field p-3 mb-2">
                    <div class="form-group col-12 col-md-5 col-lg-5">
                        <div class="form-check d-flex align-items-center flex-wrap schol">
                            <label for="inlineRadio4" class="mr-3 mb-0">Êtes-vous scholarisé(e) ?</label>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input radioSch" type="radio" name="scolarise" id="inlineRadio3" value="1">
                                <label class="form-check-label" for="inlineRadio3">Oui</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input radioSch" type="radio" name="scolarise" id="inlineRadio4" value="0" checked>
                                <label class="form-check-label" for="inlineRadio4">Non</label>
                            </div>  
                        </div>

                        <label for="InputStudies" class="hidden disabled-element-sch">Votre classe</label>
                        <input type="text" class="form-control disabled-element-sch hidden" id="InputClass" name="classe" placeholder="Votre classe">
                        <label for="InputStudies" class="hidden disabled-element-sch">Votre niveau votre établissement</label>
                        <input type="text" class="form-control disabled-element-sch hidden" id="InputSchool"  name="etablissement" placeholder="Votre établissement">
                        <label for="InputStudies" class="hidden disabled-element-sch">Votre section</label>
                        <input type="text" class="form-control disabled-element-sch hidden" id="InputSection" name="section" placeholder="Votre section">
                    </div>
                    <div class="form-group col-12 col-md-5 col-lg-5">
                        <div class="form-check d-flex align-items-center flex-wrap salary">
                            <label for="inputScholarized" class="mb-0 mr-3">Êtes-vous salarié(e) ?</label>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input radioSal" type="radio" name="salarie" id="inlineRadio1" value="1">
                                <label class="form-check-label" for="inlineRadio1">Oui</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input radioSal" type="radio" name="salarie" id="inlineRadio2" value="0" checked>
                                <label class="form-check-label" for="inlineRadio2">Non</label>
                            </div>
                        </div>

                        <label for="InputStudies" class="hidden disabled-element-sal">Votre état</label>
                        <input type="text" class="form-control disabled-element-sal hidden" id="InputStatus" name="etat" placeholder="Votre état">
                    </div>

                </div>

                <div class="d-flex justify-content-center align-items-center">
                    <button type="submit" class="next-btn d-inline-block mx-auto my-0 pb-4">Suivant <i class='fas fa-chevron-right'></i></button>
                </div>
            </form>     

                
        </div>

    </main>

@endsection