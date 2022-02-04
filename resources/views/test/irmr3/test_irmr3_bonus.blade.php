@extends('app')
<?php $bgc = 'grey-background'; ?>
@section('content')
    @include('test.irmr3.header_irmr3_inc')

    <div class="container bonus-container">
        <h3 class="irmr3-title-start font-weight-bold mt-4">Indiquez les trois mériers que vous préféreriez entre tous, que vous les ayez rencontré ou non dans les listes de métiers des écrans précédents :</h3>

        <form action="{{route('test.test_irmr3_fin')}}" method="post" class="py-4">
            <div class="form-row irmr3-bonus-row mb-3">
                <div class="p-0 col-12 col-md-4 col-lg-4 text-center text-md-right text-lg-right">
                    <p class="job px-4">Métier 1</p>
                </div>
                <div class="form-group mb-0 col-12 col-md-8 col-lg-8 d-flex">
                    <input type="text" class="form-control btn-block border-0" name="metier1" placeholder="Métier 1">
                </div>
            </div>
            <div class="form-row irmr3-bonus-row mb-3">
                <div class="p-0 col-12 col-md-4 col-lg-4 text-center text-md-right text-lg-right">
                    <p class="job px-4">Métier 2</p>
                </div>
                <div class="form-group mb-0 col-12 col-md-8 col-lg-8 d-flex">
                    <input type="text" class="form-control btn-block border-0" name="metier2" placeholder="Métier 2">
                </div>
            </div>
            <div class="form-row irmr3-bonus-row mb-3">
                <div class="p-0 col-12 col-md-4 col-lg-4 text-center text-md-right text-lg-right">
                    <p class="job px-4">Métier 3</p>
                </div>
                <div class="form-group mb-0 col-12 col-md-8 col-lg-8 d-flex">
                    <input type="text" class="form-control btn-block border-0" name="metier3" placeholder="Métier 3">
                </div>
            </div>
        </form>

        <div class="d-flex justify-content-center justify-content-md-end justify-content-lg-end align-items-center py-4">
            <a href="{{route('test.test_irmr3_formulaire')}}?step=3&part=9" class="next-btn next-btn-irmr3 d-inline-block mx-4 my-0"><i class='fas fa-chevron-left mr-3'></i> Précédent</a>
            <a href="{{route('test.test_irmr3_fin')}}?step=5" class="next-btn next-btn-irmr3 d-inline-block mx-4 my-0">Suivant <i class='fas fa-chevron-right ml-3'></i></a>
        </div>
    </div>





@endsection