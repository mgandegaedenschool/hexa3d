@extends('app')

@section('content')
    @include('utils.navigation')

    <div class="container">
        <div class="row ">
            <div class="col-12 back-card">
                <h5>
                    <a href="#">
                        <i class="fas fa-chevron-left"></i>
                        Retour
                    </a>
                </h5>
            </div>
            <div class="col-12  header-card">
                <h1>Test RCC A/B</h1>
                <h4><i class="fas fa-times"></i> 8 / 8</h4>
            </div>
        </div>

        <div class="row body">
            <div class="col-12 card card--question">
                <div class="card-body row">
                    <div class="col-sm-6 col-12 d-flex align-items-center mt-2 mb-2">
                            <i class="fas fa-check"></i>
                            <!--<i class="fas fa-times"></i>-->
                        <p class="ml-5 card-text">Question 1</p>
                    </div>
                    <div class="col-sm-6 col-12 d-flex align-items-center justify-content-end">
                        <a href="#" class="nav-question float-sm-right btn-main btn-fullscreen" data-fullscreen=".content-question-full">
                                Corriger
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 card card--question">
                <div class="card-body row">
                    <div class="col-sm-6 col-12 d-flex align-items-center mt-2 mb-2">
                        <i class="fas fa-check"></i>
                        <!--<i class="fas fa-times"></i>-->
                        <p class="ml-5 card-text">Question 1</p>
                    </div>
                    <div class="col-sm-6 col-12 d-flex align-items-center justify-content-end">
                        <a href="#" class="nav-question float-sm-right btn-main btn-fullscreen" data-fullscreen=".content-question-full">
                            Corriger
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 card card--question">
                <div class="card-body row">
                    <div class="col-sm-6 col-12 d-flex align-items-center mt-2 mb-2">
                        <i class="fas fa-check"></i>
                        <!--<i class="fas fa-times"></i>-->
                        <p class="ml-5 card-text">Question 1</p>
                    </div>
                    <div class="col-sm-6 col-12 d-flex align-items-center justify-content-end">
                        <a href="#" class="nav-question float-sm-right btn-main btn-fullscreen" data-fullscreen=".content-question-full">
                            Corriger
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 card card--question">
                <div class="card-body row">
                    <div class="col-sm-6 col-12 d-flex align-items-center mt-2 mb-2">
                        <i class="fas fa-check"></i>
                        <!--<i class="fas fa-times"></i>-->
                        <p class="ml-5 card-text">Question 1</p>
                    </div>
                    <div class="col-sm-6 col-12 d-flex align-items-center justify-content-end">
                        <a href="#" class="nav-question float-sm-right btn-main btn-fullscreen" data-fullscreen=".content-question-full">
                            Corriger
                        </a>
                    </div>
                </div>
            </div>
    </div>
    @include("utils.modal.correction.correction")
@endsection

@section('script')
    @if (count($errors) > 0)
        <script type="text/javascript">
            $( document ).ready(function() {
                $('#modal-add-patient').modal('show');
            });
        </script>
    @endif
@endsection
