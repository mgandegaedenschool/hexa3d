@extends('app')

@section('content')
    @include('utils.navigation')

    <div class="container dashboard dashboard--patient">
        <div class="row header">
            <div class="col-12">
                <h1>Olivier <span class="uppercase">Rollex</span></h1>
            </div>
        </div>

        <div class="row body">
            <div class="col-12" id="accordion">
                <div class="card">
                    <div class="card-header">
                        <h2>
                            Mon espace test
                        </h2>
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#first-collapse" aria-expanded="false" aria-controls="first-collapse">
                            <i class="fas fa-chevron-right"></i>
                        </button>
                    </div>

                    <div id="first-collapse" class="collapse multi-collapse">
                        <div class="card-body">
                            <div class="row mt-3">
                                <div class="col-4">
                                    <h2>RCC A/B (standard)</h2>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-4">
                                    <p>Date de passage : 17-08-2028</p>
                                </div>
                                <div class="col-4 d-flex justify-content-center">
                                    <p>En cours</p>
                                </div>
                                <div class="col-4 d-flex justify-content-end">
                                    <button class="btn-main btn-main--white">Voir le test</button>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row mt-3">
                                <div class="col-4">
                                    <h2>RCC A/B (standard)</h2>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-4">
                                    <p>Date de passage : 17-08-2028</p>
                                </div>
                                <div class="col-4 d-flex justify-content-center">
                                    <p>En cours</p>
                                </div>
                                <div class="col-4 d-flex justify-content-end">
                                    <button class="btn-main btn-main--white">Voir le test</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h2>
                            Mon practicien
                        </h2>
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#second-collapse" aria-expanded="false" aria-controls="second-collapse">
                            <i class="fas fa-chevron-right"></i>
                        </button>
                    </div>
                    <div id="second-collapse" class="collapse multi-collapse">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 d-flex justify-content-center flex-column align-items-center text-center">
                                    <p>Pour toute question, <br> n'hésitez pas à contacter votre praticien. </p>
                                    <p>Prénom NOM</p>
                                    <p>Tel : XX XX XX XX XX</p>
                                    <p>Adresse mail</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include("utils.modal.dashboard.patient.patient")
@endsection

@section('script')
    @if (count($errors) > 0)
        <script type="text/javascript">
            $( document ).ready(function() {
                $('#modal-add-test').modal('show');
            });
        </script>
    @endif
@endsection
