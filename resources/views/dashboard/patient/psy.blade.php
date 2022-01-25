@extends('app')

@section('content')
    @include('utils.navigation')

    <div class="container dashboard dashboard--psy-patient">
        <div class="row header">
            <form class="col-12 {{ !$errors->has('test') && count($errors) > 0 ? "active" : "" }}" action="{{ route('patient.update', ['id_patient' => $patient->id]) }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-12">
                        <a href="{{ route('dashboard.index') }}" class="btn-back"><i class="fas fa-chevron-left"></i> Retour à mes clients</a>
                    </div>
                </div>
                <div class="row mt-5 input">
                    <div class="col-6">
                        <div class="row">
                            <div class="form-group mb-4 col-md-6 col-12">
                                <label for="lastname">Nom</label>
                                <input type="text" class="form-control @error('lastname') is-invalid @enderror" id="lastname" name="lastname" placeholder="Lastname" value="{{old("lastname") ? old('lastname') : $patient->lastname }}" required>
                                @error('lastname')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group mb-4 col-md-6 col-12">
                                <label for="firstname">Prénom</label>
                                <input type="text" class="form-control @error('firstname') is-invalid @enderror" id="firstname" name="firstname" placeholder="Firstname" value="{{old("firstname") ? old('firstname') : $patient->firstname }}" required>
                                @error('firstname')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <button type="submit" class="float-right"><img src="{{ asset('img/valid.svg') }}" alt=""></button>
                        <a href="#" class="float-right mr-5 mt-2 btn-main btn-main--cancel">Cancel</a>
                    </div>
                    <div class="from-group mb-4 col-md-6 col-12">
                        <label for="gender">Sexe</label>
                        <input type="text" class="form-control @error('gender') is-invalid @enderror" id="gender" name="gender" placeholder="Sexe" required value="{{old("gender") ? old('gender') : $patient->gender }}">
                        @error('gender')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group mb-4 col-md-6 col-12">
                        <label for="age">Age</label>
                        <input type="number" class="form-control @error('age') is-invalid @enderror" id="age" name="age" placeholder="Age" required value="{{ old("age") ? old('age') : $patient->age }}">
                        @error('age')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group mb-4 col-md-6 col-12">
                        <label for="formation">Niveau de formation (ou dernière classe fréquentée)</label>
                        <input type="text" class="form-control @error('formation') is-invalid @enderror" id="formation" name="formation" placeholder="Niveau de formation (ou dernière classe fréquentée)" required value="{{ old("formation") ? old('formation') : $patient->formation }}">
                        @error('formation')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group mb-4 col-md-6 col-12">
                        <label for="job">Emploi actuel ou filière d'études suivie</label>
                        <input type="text" class="form-control @error('job') is-invalid @enderror" id="job" name="job" placeholder="Emploi actuel ou filière d'études suivie" required value="{{old("job") ? old('job') : $patient->job }}">
                        @error('job')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group mb-4 col-md-6 col-12">
                        <label for="context">Contexte</label>
                        <input type="text" class="form-control @error('context') is-invalid @enderror" id="context" name="context" placeholder="Contexte" required value="{{old("context") ? old('context') : $patient->context }}">
                        @error('context')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row mt-5 noinput">
                    <div class="col-md-6 mb-4 col-12" id="nametext">
                        <h1>{{ $patient->lastname }} {{ $patient->firstname }}</h1>
                    </div>
                    <div class="col-md-6 mb-4 col-12">
                        <button type="button" class="float-right btn-show-form"><img src="{{ asset('img/pen.svg') }}" class="btn-img-1" alt=""></button>
                    </div>
                    <div class="col-md-6 mb-4 col-12">
                        <p>{{ $patient->gender == "male" ? "Homme" : "Femme" }}</p>
                    </div>
                    <div class="col-md-6 mb-4 col-12">
                        <p>{{ $patient->age }} ans</p>
                    </div>
                    <div class="col-md-6 mb-4 col-12">
                        <p>{{ $patient->formation }}</p>
                    </div>
                    <div class="col-md-6 mb-4 col-12">
                        <p>{{ $patient->job }}</p>
                    </div>
                    <div class="col-md-6 mb-4 col-12">
                        <p>{{ $patient->context }}</p>
                    </div>
                </div>
            </form>
        </div>

        <div class="row body">
            <div class="col-12 body-header mb-5">
                <div class="row">
                    <div class="col-md-8 col-12">
                        <h2>Test RCC réalisé(s) : <span>{{ count($participations) }}</span></h2>
                    </div>
                    <div class="col-md-4 col-12">
                        <button type="button" class="btn-main float-md-right" data-toggle="modal" data-target="#modal-add-test"><i class="fas fa-plus"></i> Ajouter un Test</button>
                    </div>
                </div>
            </div>
            @foreach ($participations as $participation)
                <div class="col-12 mb-3">
                    <div class="card card--test">
                        <div class="card-header mb-4">
                            <h3>RCC {{ $participation->test->name }} ({{ $participation->participationTestType->name == "standard" ? "standard" : ($participation->participationTestType->name == "training" ? "avec entrainement" : "") }})</h3>
                            @if($participation->status->name == "new" || $participation->status->name == "course" || $participation->status->name == "instruction" || $participation->status->name == "accept" || $participation->status->name == "example_start")
                                <h4 class="pt-2">Nouveau</h4>
                            @elseif ($participation->status->name == "example_active" || $participation->status->name == "example_result" || $participation->status->name == "setting" || $participation->status->name == "test_active")
                                <h4 class="pt-2"><i class="fas fa-spinner"></i> En cours</h4>
                            @else
                                <h4 class="text-success pt-2"><i class="fas fa-check pr-2"></i> Terminé</h4>
                            @endif
                        </div>
                        <div class="card-body row">
                            <div class="card-input col-12 mb-4">
                                <label for="age">Lien du test (à copier et à envoyer au bénéficiaire)</label>
                                <div>
                                    <input type="text" class="pt-3 pb-3" id="age" name="age" value="{{ route("participation", [$participation->token]) }}" readonly>
                                    <i class="fas fa-file-pdf copy" data-toggle="copytoggle" data-placement="bottom" title="Copier"></i>
                                    <p class="text-success"><i class="fas fa-check pr-2 pt-2 text-success"></i> Copier</p>
                                </div>
                            </div>
                            <div class="col-6">
                                @if($participation->status->name == "test_active" || $participation->status->name == "test_end" || $participation->status->name == "end")
                                    <p class="card-text">Date de passage : {{ date_format(date_create($participation->date), "d-m-Y") }}</p>
                                @endif
                            </div>
                            <div class="col-6">
                                @if($participation->status->name == "test_end" || $participation->status->name == "end")
                                    <p class="card-text"><i class="fas fa-times"></i> {{ $participation->faults }} faute(s) sur {{ $participation->total }}</p>
                                @endif
                            </div>
                        </div>
                        @if ($participation->status->name == "new" || $participation->status->name == "course" || $participation->status->name == "instruction" || $participation->status->name == "accept" || $participation->status->name == "example_start" || $participation->status->name == "test_end" || $participation->status->name == "end")
                            <hr>
                            <div class="card-body row card-foot">
                                @if($participation->status->name == "test_end" || $participation->status->name == "end")
                                    <div class="col-5">
                                        <p class="card-text"><i class="fas fa-download pr-2"></i> Fiche de résultats bénéficiaire <i class="far fa-question-circle pl-3" data-toggle="tooltip" data-placement="bottom" title="Cette fiche de résultat est vierge. Elle doit être remplie avec le bénéficiaire lors de votre prochaine séance."></i></p>
                                    </div>
                                    <div class="col-7 right-body">
                                        <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-file-pdf pr-3"></i>RÉSULTAT DU TEST</button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <button class="dropdown-item" type="button">Etalonnage total</button>
                                            <button class="dropdown-item" type="button">Etalonnage niveau V à IV</button>
                                            <button class="dropdown-item" type="button">Etalonnages CFG à niveau V</button>
                                            <button class="dropdown-item" type="button">Etalonnages élèves scolarisés en classe de troisième</button>
                                        </div>

                                    </div>
                                @endif
                                <div class="col-12 d-flex justify-content-center foot-body">
                                    @if($participation->status->name == "test_end" || $participation->status->name == "end")
                                        <form action="{{ route('participation.reset', $participation->id) }}" method="POST">
                                            @csrf
                                            <button class="btn-main">Réinitialiser le test</button>
                                        </form>
                                    @endif
                                    @if ($participation->status->name == "new" || $participation->status->name == "course" || $participation->status->name == "instruction" || $participation->status->name == "accept" || $participation->status->name == "example_start")
                                        <form action="{{route('participation.delete', $participation->id)}}" method="post">
                                            @csrf
                                            <button type="submit" class="btn-icon-inv"><i class="fas fa-trash-alt"></i></button>
                                        </form>
                                    @endif
                                </div>
                            </div> 
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    @include("utils.modal.dashboard.patient.psy")
@endsection

@section('script')
    <script src="/js/app/psy/psy.js"></script>

    @if ($errors->has('test'))
        <script type="text/javascript">
            $( document ).ready(function() {
                $('#modal-add-test').modal('show');
            });
            $(function () {
                $('[data-toggle="tooltip"]').tooltip()
            })
        </script>
    @endif
@endsection
