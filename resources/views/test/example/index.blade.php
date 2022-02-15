@extends('app')

@section('content')
    <div class="container-fluid question theme-light">
        <div class="row content">
            @include('test.example.question')
        </div>
    </div>
@endsection

@section('script')
    <script src="/js/app/test/question.js"></script>
    <script src="/js/utils/ajax.js"></script>
@endsection
