@extends('app')

@section('content')
    <div class="container-fluid question theme-{{ $participation->theme }}">
        <div class="row content">
            @include('test.question')
            @include("utils.modal.test.timer")
        </div>
    </div>
@endsection

@section('script')
    <script>
        let countdownTime = new Date($('.countdown').data('time'));
        console.log(countdownTime);
    </script>
    <script src="/js/app/test/question.js"></script>
    <script src="/js/utils/ajax.js"></script>
    <script src="/js/utils/countdown.js"></script>
@endsection