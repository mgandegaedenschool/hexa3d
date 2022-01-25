<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>PDF RCC</title>

    <style>
        body{
            margin: 0;
            padding: 0;
            font-size: 16px;
            font-family: "Arial", sans-serif;
        }
        .pdf .pdf-center{
            margin: 0 auto;
            text-align: center;
        }
        .pdf span{
            color: #F24E59;
        }
        .pdf .pdf-head div{
            margin: 15px 0;
        }
        table{
            width: 100%;
            border-spacing: 0;
        }
        .pdf-body td{
            border: black 1px solid;
            margin: 0;
            padding: 10px;
        }
        .pdf-body th{
            border: black 1px solid;
            margin: 0;
            padding: 0;
            border-top: 2px black solid;
        }
        .pdf-body th:first-child{
            border-left: 2px black solid;
        }
        .pdf-body th:last-child{
            border-right: 2px black solid;
        }
        .pdf-body tr:last-child td{
            border-bottom: 2px black solid;
        }
        .pdf-body tr td:first-child{
            border-left: 2px black solid;
        }
        .pdf-body tr td:last-child{
            border-right: 2px black solid;
        }
        .pdf-body{
            margin: 20px 0;
        }
        .pdf-body-border td{
            border-top: 2px solid black;
        }
    </style>
</head>
<body>
    <div class="container pdf">
        <div class="row">

        </div>
        <div class="pdf-head">
            <div class="pdf-center"><img src="{{ public_path('Logo_RCC.png') }}" alt=""></div>
            <div class="pdf-center">FEUILLE DE RESULTATS RCC</div>
            <div>
                Date de passation : {{ $date }}
            </div>
            <div class="pdf-align">
                <table style="width: 100%">
                    <tr>
                        <td><span>Nom :</span> {{ $lastname }}</td>
                        <td><span>Prenom :</span> {{ $firstname }}</td>
                    </tr>
                </table>
            </div>
            <div class="pdf-align">
                <table style="width: 100%">
                    <tr>
                        <td>Sexe : {{ $sexe }}</td>
                        <td>Age : {{ $age }}</td>
                    </tr>
                </table>
            </div>
            <div>
                Contexte : {{ $context }}
            </div>
            <div>
                Niveau de formation (ou dernière classe fréquentée) : {{ $last_classroom }}
            </div>
            <div>
                Emploi actuel (ou filière d'études suivie) : {{ $job }}
            </div>
            <div>
                Version RCC utilisée (RCC A/B ou RCC C) : {{ $test_version }}
            </div>
            <div>
                Etalonnage(s) utilisé(s) : {{ $calibration }}
            </div>
            <div>
                Score planches exemples (nombre de bonnes réponses) = {{ $exemple_resp }}
            </div>
            <div>
                Score brut RCC (nombre de bonnes réponses) = {{ $response }}
            </div>
            <div>
                Score RP (les réponses à 0.5 point) = {{ $rp }}
            </div>
            <div>
                Nombre total de réponses (nombre de réponses données) = {{ $response_verif }}
            </div>
        </div>
        <table class="pdf-body" style="width: 100%">
            <tbody>
            <tr>
                <th colspan="2"></th>
                <th colspan="10" style="text-align: center"><span>Scores étalonnés (décilage)</span></th>
            </tr>
            <tr>
                <td colspan="2"><span>Classes étalonnés</span> (10 classes)</td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
                <td>7</td>
                <td>8</td>
                <td>9</td>
                <td>10</td>
            </tr>
            <tr>
                <td colspan="2">% théoriques</td>
                <td>10%</td>
                <td>10%</td>
                <td>10%</td>
                <td>10%</td>
                <td>10%</td>
                <td>10%</td>
                <td>10%</td>
                <td>10%</td>
                <td>10%</td>
                <td>10%</td>
            </tr>
            <tr>
                <td colspan="2">Interprétation</td>
                <td>très inf.</td>
                <td colspan="2">Score inférieur à la moyenne</td>
                <td colspan="4"><span>Score moyen</span></td>
                <td colspan="2">Score supérieur à la moyenne</td>
                <td>très sup.</td>
            </tr>
            <tr>
                <td colspan="2">Auto estimation score RCC (reporter l'estimation de la personne)</td>
                <td></td>
                <td colspan="2"></td>
                <td colspan="4"></td>
                <td colspan="2"></td>
                <td></td>
            </tr>
            <tr>
                <td><span>Indicateur RCC</span></td>
                <td>Scores bruts</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>Score RCC</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>Score RCC Potentiel</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>Score Vitesse</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>Score Précision</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            </tbody>
        </table>
        <table class="pdf-body">
            <tbody>
                <tr>
                    <th colspan="4" style="border: none"><span>Analyse du profil de réussite</span></th>
                </tr>
                <tr class="pdf-body-border">
                    <td></td>
                    <td>Score Spatial</td>
                    <td>Score Numérique</td>
                    <td>Score Complexe</td>
                </tr>
                <tr>
                    <td>Profil observé</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Profil moyen (pour le même score RCC)</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
        <div style="font-size: 10px">
            1 Uniquement pour la version RCC-C
        </div>
        <div style="text-align: center; font-size: 10px">
            © 2021 TEST RCC - Tous droits réservés
        </div>
    </div>
</body>
</html>

