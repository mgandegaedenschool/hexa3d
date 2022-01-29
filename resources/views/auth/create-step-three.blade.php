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

            <form method="POST" action="{{ route('register.create.step.three.post') }}">
                @csrf 
                    <div class="form-row d-flex justify-content-between">
                        <div class="form-group col-12 col-md-5 col-lg-5">
                            <label for="inputJob">Votre emploi actuel</label>
                            <input type="text" class="form-control" id="inputJob" name="emploi_actuel" placeholder="Votre emploi actuel">
                        </div>
                        <div class="form-group col-12 col-md-5 col-lg-5">
                            <label for="inputWantedJob">Votre emploi envisagé</label>
                            <input type="text" class="form-control" id="inputWantedJob" name="emploi_envisage" placeholder="Votre enploi envisagé">
                        </div>
                    </div>
                    <div class="form-row d-flex justify-content-between">
                        <div class="form-group col-12 col-md-5 col-lg-5">
                            <label for="inputSpe">Votre spécialité</label>
                            <input type="text" class="form-control" id="inputSpe" name="specialite" placeholder="Votre spécialité">
                        </div>             
                        <div class="form-group col-12 col-md-5 col-lg-5">
                            <label for="inputSpe">État</label>
                            <input type="text" class="form-control" id="inputSpe" name="etat" placeholder="Votre spécialité">
                        </div>
                    </div>
                    <input type="submit" class="submit-form btn btn-block purple-btn py-2 mt-4" value="Envoyer">
                </form>
        </div>

    </main>

@endsection