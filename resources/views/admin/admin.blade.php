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
    <main class="mt-5 pt-4">
  
        <div class="container">

            <div class="container">
                       
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th></th>
                      <th>Nom</th>
                      <th>Prenom</th>
                      <th>Mail</th>
                      <th>Sexe</th>
                      <th>Date</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><input type="checkbox" id="horns" name="horns"></td>
                      <td>John</td>
                      <td>Doe</td>
                      <td>john@example.com</td>
                      <td>masculin</td>
                      <td>0000000</td>
                      <td>show</td>
                    </tr>
                    <tr>
                    <td><input type="checkbox" id="horns" name="horns"></td>
                      <td>Mary</td>
                      <td>Moe</td>
                      <td>mary@example.com</td>
                      <td>feminin</td>
                      <td>0000000</td>
                      <td>show</td>
                    </tr>
                    <tr>
                    <td><input type="checkbox" id="horns" name="horns"></td>
                      <td>July</td>
                      <td>Dooley</td>
                      <td>july@example.com</td>
                      <td>masculin</td>
                      <td>0000000</td>
                      <td>show</td>
                    </tr>
                  </tbody>
                </table>
              </div>
        </div>
    </main>

@endsection