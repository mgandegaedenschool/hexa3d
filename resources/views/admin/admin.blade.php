@extends('app')
@section('content')
    <header class="upper-container">
        <div class="container header-contain">
            <div class="row d-flex align-items-center img-text-nav two-img-nav py-3">
                <div class="col-4 upper-image-container">
                    <img src="{{asset('img/hexa3d-logo-v2_300ppp.png')}}" alt="logo hexa3d" class="img-fluid">
                </div>
                <div class="col-4 upper-image-container">
                    <img src="{{asset('img/irmr3-logo-v2_300ppp.png')}}" alt="logo irmr3" class="img-fluid">
                </div>
            </div>
        </div>
    </header>
    <main class="dashboard-layout">
        <div class="top-content p-4 align-items-center">
            <div class="options">
                <a href="#"><i class="fas fa-plus"></i> New</a>
            </div>
            <h1 class="text-center bo-title">Accueil du Back Office</h1>
            <div class="admin-account">
                <a href="#">Bonjour, Admin</a>
            </div>
        </div>
        <aside class="pb-4">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('admin.admin')}}">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('user.index')}}">Membres</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('user.index')}}">Domaine</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{route('question.index')}}">Question</a>
                </li>
               
                <li class="nav-item">
                    <a class="nav-link" href="{{route('type.index')}}">Type</a>
                </li>
            </ul>
        </aside>
        <div class="content-container container-fluid d-flex justify-content-center accueil-bg-img">


        </div>
    </main>
@endsection
