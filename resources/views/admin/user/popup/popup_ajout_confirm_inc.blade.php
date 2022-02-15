{{-- <!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#userModal">
    Ajouter un membre
</button>

<!-- Modal -->
<div class="modal fade" id="userModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ajouter un membre</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                     <form method="POST" action="{{ route('pro.store') }}"> 
                    @csrf 


                        <div class="form-row d-flex justify-content-between">
                            <div class="form-group col-12 col-md-5 col-lg-5">
                                <label for="inputFirstName">Choisir un test</label>
                                <select name="test" id="pet-select">
                                    <option value="irmr3d">IRMR3D</option>
                                    <option value="hexa3d">HEXA3D</option>
                                </select>
                            </div>
                            <div class="form-group col-12 col-md-5 col-lg-5">
                                <label for="inputFirstName">Votre étalonnage</label>
                                <select name="etalonnage" id="pet-select">
                                    <option value="collégien">Collégien </option>
                                    <option value="collégienne">Collégienne</option>
                                    <option value="lycéen">Lycéen</option>
                                    <option value="lycéenne">Lycéenne</option>
                                    <option value="adulte">Adulte</option>
                                </select>
                            </div>
         
                            <div class="form-group col-12 col-md-5 col-lg-5">
                                 <label for="email">Votre email</label>
                                <input type="email" class="form-control" id="email" placeholder="Votre email" name="email">
                            </div>
                        </div>                    

                        <div class="modal-footer mt-4">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                            <input type="submit" class="btn btn-primary" value="Ajouter le membre">
                        </div>   
                    </form>
                </div>
            </div>

        </div>
    </div>
</div> --}}

<!-- Button trigger modal -->
{{-- <button type="button" class="purple-btn espace-pro-purple-btn" data-toggle="modal" data-target="#userModal">
    Nouveau client
</button> --}}
{{-- @if (session('status'))
<div class="modal fade" id="userModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-xl">
        <div class="modal-content">       
            <div class="modal-body">
                <div class="container-fluid">
                    <tbody>                  
                            {{-- <div class="alert alert-success"> --}}
                                {{-- {{ session('status') }} --}}
                            {{-- </div> --}}                      
                    {{-- </tbody>
                </div>
            </div>
        </div>
    </div>
</div>
@endif   --}}

<!-- Modal -->

  <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ajouter un bénéficiaire</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                        <div class="form-row d-flex justify-content-between">
                            {{ session('status') }}
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>