@extends('app')

@section('content')
    <header class="upper-container">
        <div class="container header-contain">
            <div class="row d-flex align-items-center img-text-nav py-3">
                <div class="col-4 upper-image-container">
                    <img src="http://via.placeholder.com/640x360" alt="spirale grise et blanche" class="img-fluid">
                </div>
                <h6 class="text-uppercase col-8 col-md-2 upper-title my-2">questionnaires d'intérêts professionnels</h6>
            </div>
        </div>
    </header>

    <main class="dashboard-layout">

        <div class="top-content p-4">
            <div class="options">
                <a href="#"><i class="fas fa-plus"></i> New</a>
            </div>
            <div class="admin-account">
                <a href="#">Bonjour, Admin</a>
            </div>
        </div>

        <aside>
            <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action">Add</a>
                <a href="#" class="list-group-item list-group-item-action">Post</a>
                <a href="#" class="list-group-item list-group-item-action">Post</a>
                <a href="#" class="list-group-item list-group-item-action">Post</a>
            </div>
        </aside>

        <div class="content-container p-5">


        </div>
    </main>

@endsection
