@extends('app')
<?php $bgc = 'grey-background'; ?>
@section('content')
    @include('test.header_irmr3_inc')

    <?php if (isset($_GET['step']) && $_GET['step'] == 3){ ?>
    <div class="container">
        <h3 class="part-title font-weight-bold">Ecran <?=$_GET['part']??'' ?>/9</h3>
            <div class="row no-gutters text-center font-weight-bold">
                <div class="col-12 col-md-6 col-lg-6"></div>
                <div class="col-4 col-md-2 col-lg-2">
                    <p class="mb-2">0</p>
                    <p class="irmr3-bareme">Ce métier ne m'attire pas</p>
                </div>
                <div class="col-4 col-md-2 col-lg-2">
                    <p class="mb-2">1</p>
                    <p class="irmr3-bareme">Ce métier m'est indifférent</p>
                </div>
                <div class="col-4 col-md-2 col-lg-2">
                    <p class="mb-2">2</p>
                    <p class="irmr3-bareme">Ce métier fait partie de mes préférés</p>
                </div>
            </div>
    </div>

    <?php if (isset($_GET['part']) && $_GET['part'] == 1){ ?>
        @include('test.test_irmr3_formulaire_part1')
    <?php }elseif (isset($_GET['part']) && $_GET['part'] == 2){ ?>
        @include('test.test_irmr3_formulaire_part2')
    <?php }elseif (isset($_GET['part']) && $_GET['part'] == 3){ ?>
        @include('test.test_irmr3_formulaire_part3')
    <?php }elseif (isset($_GET['part']) && $_GET['part'] == 4){ ?>
        @include('test.test_irmr3_formulaire_part4')
    <?php }elseif (isset($_GET['part']) && $_GET['part'] == 5){ ?>
        @include('test.test_irmr3_formulaire_part5')
    <?php }elseif (isset($_GET['part']) && $_GET['part'] == 6){ ?>
        @include('test.test_irmr3_formulaire_part6')
    <?php }elseif (isset($_GET['part']) && $_GET['part'] == 7){ ?>
        @include('test.test_irmr3_formulaire_part7')
    <?php }elseif (isset($_GET['part']) && $_GET['part'] == 8){ ?>
        @include('test.test_irmr3_formulaire_part8')
    <?php }elseif (isset($_GET['part']) && $_GET['part'] == 9){ ?>
        @include('test.test_irmr3_formulaire_part9')
    <?php } ?>


    <section class="pb-4">
        <div class="irmr3-explain container p-4">
            <ul>
                Pour chaque série de métiers :
                <li>- Donnez la <span class="font-weight-bold">note 2</span> correspond aux quatre <span class="font-weight-bold">métiers que vous préférez</span></li>
                <li>- Donnez la <span class="font-weight-bold">note 0</span> correspond aux quatre <span class="font-weight-bold">métiers que vous rejetez</span></li>
                <li>- Donnez la <span class="font-weight-bold">note 1</span> correspond aux quatre <span class="font-weight-bold">métiers restants</span></li>
            </ul>
        </div>
    </section>

    <?php } ?>

@endsection