@extends('app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">

            <form action="{{ route('test.create.step.one.post') }}" method="POST">
                @csrf


                <table class="table table-striped table-bordered">
                    <tr>
                        <th></th><th>Cette activité me déplait</th><th>Cette activiité m'est indifférent</th><th>Cette activité m'interesse</th>
                    </tr>
                    {{-- @foreach ( $activities as $activity )       --}}
                    {{-- <tr>
                        <td><label for="title">{{ $activity->name }}:</label></td>
                        <td><input type="radio" value="{{$activity->initial}}0" class="form-control" id="title" name="{{$activity->name}}" /></td>
                        <td><input type="radio" value="{{$activity->initial}}1" class="form-control" id="title" name="{{$activity->name}}" /></td>
                        <td><input type="radio" value="{{$activity->initial}}2" class="form-control" id="title" name="{{$activity->name}}" /></td> --}}
<tr>
                        <td>Exploitant agricole</td>
                        <td><input type="radio" value="0" class="form-control" id="title" name="exploitant" /></td>
                        <td><input type="radio" value="1" class="form-control" id="title" name="exploitant" /></td>
                        <td><input type="radio" value="2" class="form-control" id="title" name="exploitant" /></td>
                        </tr>
                       <tr>
                        <td>Ingénieur en bâtiment</td>
                        <td><input type="radio" value="0" class="form-control" id="title" name="ingenieur" /></td>
                        <td><input type="radio" value="1" class="form-control" id="title" name="ingenieur" /></td>
                        <td><input type="radio" value="2" class="form-control" id="title" name="ingenieur" /></td>
                        </tr><tr>
                        <td>Assistant de gestion</td>
                        <td><input type="radio" value="0" class="form-control" id="title" name="gestion" /></td>
                        <td><input type="radio" value="1" class="form-control" id="title" name="gestion" /></td>
                        <td><input type="radio" value="2" class="form-control" id="title" name="gestion" /></td>
                        </tr><tr>
                        <td>Chercheur scientifique</td>
                        <td><input type="radio" value="0" class="form-control" id="title" name="chercheur" /></td>
                        <td><input type="radio" value="1" class="form-control" id="title" name="chercheur" /></td>
                        <td><input type="radio" value="2" class="form-control" id="title" name="chercheur" /></td>
                        </tr><tr>
                        <td>Directeur commercial</td>
                        <td><input type="radio" value="0" class="form-control" id="title" name="commercial" /></td>
                        <td><input type="radio" value="1" class="form-control" id="title" name="commercial" /></td>
                        <td><input type="radio" value="2" class="form-control" id="title" name="commercial" /></td>
                        </tr>
                        <tr>
                        <td>Artiste peintre</td>
                        <td><input type="radio" value="0" class="form-control" id="title" name="peintre" /></td>
                        <td><input type="radio" value="1" class="form-control" id="title" name="peintre" /></td>
                        <td><input type="radio" value="2" class="form-control" id="title" name="peintre" /></td>
                        </tr>
                        <tr>
                        <td>Journaliste</td>
                        <td><input type="radio" value="0" class="form-control" id="title" name="journaliste" /></td>
                        <td><input type="radio" value="1" class="form-control" id="title" name="journaliste" /></td>
                        <td><input type="radio" value="2" class="form-control" id="title" name="journaliste" /></td>
                        </tr>
                        <tr>
                        <tr>
                        <td>Pianiste de concert</td>
                        <td><input type="radio" value="0" class="form-control" id="title" name="pianiste" /></td>
                        <td><input type="radio" value="1" class="form-control" id="title" name="pianiste" /></td>
                        <td><input type="radio" value="2" class="form-control" id="title" name="pianiste" /></td>
                        </tr>
                        <tr>
                        <td>Professeur des écoles</td>
                        <td><input type="radio" value="0" class="form-control" id="title" name="professeur" /></td>
                        <td><input type="radio" value="1" class="form-control" id="title" name="professeur" /></td>
                        <td><input type="radio" value="2" class="form-control" id="title" name="professeur" /></td>
                        </tr>
                        <tr>
                        <td>Directeur administratif et financier</td>
                        <td><input type="radio" value="0" class="form-control" id="title" name="daf" /></td>
                        <td><input type="radio" value="1" class="form-control" id="title" name="daf" /></td>
                        <td><input type="radio" value="2" class="form-control" id="title" name="daf" /></td>
                        </tr>
                        <tr>
                        <td>Imprimeur</td>
                        <td><input type="radio" value="0" class="form-control" id="title" name="imprimeur" /></td>
                        <td><input type="radio" value="1" class="form-control" id="title" name="imprimeur" /></td>
                        <td><input type="radio" value="2" class="form-control" id="title" name="imprimeur" /></td>
                        </tr>
                        <tr>
                        <td>Médecin</td>
                        <td><input type="radio" value="0" class="form-control" id="title" name="medecin" /></td>
                        <td><input type="radio" value="1" class="form-control" id="title" name="medecin" /></td>
                        <td><input type="radio" value="2" class="form-control" id="title" name="medecin" /></td>
                        </tr>
                    {{-- @endforeach --}}
                </table>
                <div class="card">

                    <div class="card-body">

                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif

                        {{-- <div class="form-group">
                            <label for="title">Sculpter:</label>
                            <input type="checkbox" value="" class="form-control" id="taskTitle" name="sculpter">
                            <input type="checkbox" value="" class="form-control" id="taskTitle" name="sculpter">
                            <input type="checkbox" value="" class="form-control" id="taskTitle" name="sculpter">
                        </div> --}}
                        {{-- <div class="form-group">
                            <label for="description">Product Amount:</label>
                            <input type="text" value="{{{ $product->amount ?? '' }}}" class="form-control" id="productAmount" name="amount" />
                        </div>

                        <div class="form-group">
                            <label for="description">Product Description:</label>
                            <textarea type="text" class="form-control" id="taskDescription" name="description">{{{ $product->description ?? '' }}}</textarea>
                        </div> --}}

                    </div>

                    <div class="card-footer text-right">
                        <button type="submit" class="btn btn-primary">Next</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
