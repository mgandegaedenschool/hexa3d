@extends('app')

@section('content')
    @include("utils.navigation")

    <div class="container dashboard dashboard--psy-patient">
        <div class="row header">
            <form class="col-12" action="{{ route('patient.store') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-12">
                        <a href="{{ route('dashboard.index') }}" class="btn-back"><i class="fas fa-chevron-left"></i> Mes clients</a>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-6">
                        <div class="row">
                            <div class="form-group mb-4 col-md-6 col-12">
                                <label for="lastname">Nom</label>
                                <input type="text" class="form-control @error('lastname') is-invalid @enderror" id="lastname" name="lastname" placeholder="Lastname" value="{{old("lastname")  }}" required>
                                @error('lastname')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group mb-4 col-md-6 col-12">
                                <label for="firstname">Prénom</label>
                                <input type="text" class="form-control @error('firstname') is-invalid @enderror" id="firstname" name="firstname" placeholder="Firstname" value="{{old("firstname") }}" required>
                                @error('firstname')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <button type="submit" class="float-right"><img src="/img/valid.svg" alt=""></button>
                        <a href="#" class="float-right mr-5 mt-2 btn-main btn-main--cancel">Cancel</a>
                    </div>
                    <div class="from-group mb-4 col-md-6 col-12">
                        <label for="gender">Sexe</label>
                        <input type="text" class="form-control @error('gender') is-invalid @enderror" id="gender" name="gender" placeholder="Sexe" required value="{{old("gender")}}">
                        @error('gender')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group mb-4 col-md-6 col-12">
                        <label for="age">Age</label>
                        <input type="number" class="form-control @error('age') is-invalid @enderror" id="age" name="age" placeholder="Age" required value="{{ old("age") }}">
                        @error('age')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group mb-4 col-md-6 col-12">
                        <label for="formation">Niveau de formation (ou dernière classe fréquentée)</label>
                        <input type="text" class="form-control @error('formation') is-invalid @enderror" id="formation" name="formation" placeholder="Niveau de formation (ou dernière classe fréquentée)" required value="{{ old("formation") }}">
                        @error('formation')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group mb-4 col-md-6 col-12">
                        <label for="job">Emploi actuel ou filière d'études suivie</label>
                        <input type="text" class="form-control @error('job') is-invalid @enderror" id="job" name="job" placeholder="Emploi actuel ou filière d'études suivie" required value="{{old("job") }}">
                        @error('job')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group mb-4 col-md-6 col-12">
                        <label for="context">Contexte</label>
                        <input type="text" class="form-control @error('context') is-invalid @enderror" id="context" name="context" placeholder="Contexte" required value="{{old("context") }}">
                        @error('context')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                </div>
            </form>
        </div>
    </div>
@endsection

@section('script')

    <script>
        $('body').on('click','')
    </script>
@endsection
