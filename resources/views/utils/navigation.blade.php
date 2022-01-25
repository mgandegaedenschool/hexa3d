<nav class="navigation">
    <div>
        <img src="{{ asset('img/Logo_RCC.png') }}" alt="logo rcc">
        <p>Mon espace test</p>
    </div>
    @if (isset($psy))
        <div class="btn-group">
            <a href="#">
                Mon profil
                <img src="{{ asset('img/user.svg') }}" alt="icon user">
            </a>
        </div>
    @endif
</nav>
