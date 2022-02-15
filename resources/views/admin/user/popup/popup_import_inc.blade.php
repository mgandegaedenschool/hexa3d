<!-- Modal -->

  {{-- <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="text-align:center"> --}}
    {{-- <div class="modal-dialog modal-dialog-scrollable modal-xl">
        <div class="modal-content">
            <div class="modal-header"> --}}
                {{-- <h5 class="modal-title" id="exampleModalLabel">Ajouter un bénéficiaire</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button> --}}
            {{-- </div> --}}
            {{-- <div class="modal-body">
                <div class="container-fluid">
                        <div class="form-row d-flex justify-content-between">
                            {{ session('import') }}
                        </div>
                </div>
            </div> --}}
            {{-- <div id="drop_file_zone" ondrop="upload_file(event)" ondragover="return false">
                <div id="drag_upload_file">
                    <p>Drop file here</p>
                    <p>or</p>
                    <p><input type="button" value="Select File" onclick="file_explorer();" /></p>
                    {{-- <input type="file" id="selectfile" /> --}}
                {{-- </div>
            </div>
            <div class="img-content"></div>  --}}
        {{-- </div> --}}
    {{-- </div> --}}
{{-- </div> --}}

<link rel="stylesheet" href="style.css" />
 <div id="drop_file_zone" ondrop="upload_file(event)" ondragover="return false">
    <div id="drag_upload_file">
        <p>Drop file here</p>
        <p>or</p>
        <p><input type="button" value="Select File" onclick="file_explorer();" /></p>
        <input type="file" id="selectfile" />
    </div>
</div>
<div class="img-content"></div>
{{-- <script src="custom.js"></script> --}}