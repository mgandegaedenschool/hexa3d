<header class="upper-container irmr3-header d-flex">
    <div class="container header-contain">
        <div class="row d-flex align-items-center img-text-nav irmr3-nav">
            <div class="col-6 upper-image-container irmr3-upper-img-contain">
                <img src="{{asset('img/irmr3-logo-v2_300ppp.png')}}" alt="spirale grise et blanche" class="img-fluid">
            </div>
        </div>
    </div>
</header>
<div class="irmr3-progress-container p-4">
    <div class="irmr3-progress-div">
        <div class="progress irmr3-header-progress-bar">
            <?php
            if (isset($_GET['part']) && $_GET['step'] == 3){
                $calc = 62.5 + ($_GET['part'] * (25 / 9) - (25/9));
                echo "<div class='progress-bar irmr3-progressing-bar' role='progressbar' style='width: $calc%' aria-valuenow='$calc' aria-valuemin='0' aria-valuemax='100'></div>";
            }elseif(!isset($_GET['step'])){
                echo "<div class='progress-bar irmr3-progressing-bar' role='progressbar' style='width: 12.5%' aria-valuenow='12.5' aria-valuemin='0' aria-valuemax='100'></div>";
            }elseif(isset($_GET['step']) && $_GET['step'] == 2){
                echo "<div class='progress-bar irmr3-progressing-bar' role='progressbar' style='width: 37.5%' aria-valuenow='37.5' aria-valuemin='0' aria-valuemax='100'></div>";
            }elseif(isset($_GET['step']) && $_GET['step'] == 3){
                echo "<div class='progress-bar irmr3-progressing-bar' role='progressbar' style='width: 62.5%' aria-valuenow='62.5' aria-valuemin='0' aria-valuemax='100'></div>";
            }elseif(isset($_GET['step']) && $_GET['step'] == 4){
                echo "<div class='progress-bar irmr3-progressing-bar' role='progressbar' style='width: 87.5%' aria-valuenow='87.5' aria-valuemin='0' aria-valuemax='100'></div>";
            }
            elseif(isset($_GET['step']) && $_GET['step'] == 5){
                echo "<div class='progress-bar irmr3-progressing-bar' role='progressbar' style='width: 100%' aria-valuenow='100' aria-valuemin='0' aria-valuemax='100'></div>";
            }
            ?>
        </div>
        <div class="irmr3-progress-bar-content mt-3">
            <p>Conditions</p>
            <p>Consignes</p>
            <p>Mon test</p>
            <p>Bonus</p>
        </div>
    </div>
</div>