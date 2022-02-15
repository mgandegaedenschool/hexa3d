@extends('app')

@section('content')
    @include('utils.navigation')

    <div class="dashboard">

        @if ($psy['count_test'] == 0)
            <div class="container-fluid dashboard--psy alert alert-dismissible fade show col" role="alert">
                <div class="container">
                    <div class="row">
                        <div class="col-12 d-flex justify-content-center">
                            <p>Rechargez vos crédits pour créer de nouveaux clients ou de nouveaux tests !</p>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        @elseif ($psy['count_test'] <= 5)
            <div class="container-fluid dashboard--psy alert alert-dismissible fade show col" role="alert">
                <div class="container">
                    <div class="row">
                        <div class="col-12 d-flex justify-content-center">
                            <p>Votre solde de crédits est bientôt vide : {{ $psy['count_test'] }} tests restants. Pensez à recharger !</p>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        @endif

        <div class="container dashboard--psy">
            <div class="row body">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header mb-3">
                            <h2>
                                Mes clients
                            </h2>
                        </div>
                        <div class="card-body">
                            <div class="row line-head">
                                <div class="col">
                                    <p>N° client</p>
                                </div>
                                <div class="col text-uppercase">
                                    <p>Nom</p>
                                </div>
                                <div class="col">
                                    <p>Prénom</p>
                                </div>
                            </div>
                            @foreach ($patients as $patient)
                                <a href="{{ route('dashboard.index', [$patient->id]) }}" class="row line-patient">
                                    <div class="col">
                                        <p>{{ $patient->id }}</p>
                                    </div>
                                    <div class="col text-uppercase">
                                        <p>{{ $patient->lastname }}</p>
                                    </div>
                                    <div class="col">
                                        <p>{{ $patient->firstname }}</p>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                        <div class="card-footer d-flex justify-content-center mt-4">
                            {{ $patients->links() }}
                        </div>
                        <div class="card-footer d-flex justify-content-center mt-4">
                            @if ($psy['count_test'] == 0)
                                <button class="btn btn-main" disabled>Nouveau client</button>
                            @else
                                <a href="{{ route('patient.create') }}" class="btn btn-main">Nouveau client</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
