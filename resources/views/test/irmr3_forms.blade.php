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

            <form method="POST" action="{{ route('irmr3Form') }}">
                @csrf

                <div class="d-flex justify-content-center align-items-center">
                    <button type="submit" class="next-btn d-inline-block mx-auto my-0 pb-4">Insert<i class='fas fa-chevron-right'></i></button>
                </div>
            </form>
        </div>
    </main>

@endsection
