@extends('app')

@section('content')
    @include('pdf.pdf-irmr3-header_inc')
    <div class="irmr-3-pro-results-container pdf-container-medium">

        <section class="pdf-irmr3-section">
            <h3 class="pdf-irmr3-kaki-text">Rapport descriptif</h3>
            <p>
                Issu des recherches sur les intérêts menés par Rothwell-Miller et John Holland, l’Inventaire d’intérêts IRMR3 permet une approche complète et détaillée des intérêts qui trouve son application dans le cadre :
            </p>
            <ul>
                <li>
                    de démarches d'orientation scolaire et professionnelle
                </li>
                <li>
                    de bilans de compétences et bilans professionnels
                </li>
                <li>
                    d’accompagnement à la reconversion et mobilité
                </li>
                <li>
                    de connaissance de soi et développement professionnel
                </li>
            </ul>
            <p>
                Cet inventaire permet d’obtenir deux profils complémentaires des intérêts :
            </p>
            <ul>
                <li>
                    le premier, établi grâce à la typologie de John Holland, présente une image de la personne grâce à six types d'intérêts généraux
                </li>
                <li>
                    le deuxième précise le premier profil, en s’appuyant sur douze intérêts professionnels spécifiques
                </li>
            </ul>
        </section>

        <section class="pdf-irmr3-section">
            <h3 class="pdf-irmr3-kaki-text">Comment lire et interpréter ce rapport ?</h3>
            <p>
                Les résultats que vous trouverez dans ce rapport sont le reflet de vos choix au moment de la passation de l’Inventaire IRMR3. Comme toute démarche procédant d’une auto-évaluation, la fidélité de votre profil dépend de votre sincérité au cours de la passation. Pour autant, les résultats d’un test ou questionnaire (quels qu’ils soient) ne sont pas une vérité en soi. Ils doivent être confrontés à d’autres approches et nécessitent d’être nuancés. Le profil calculé est un support de réflexion qui doit vous inviter à prolonger vos questionnements avec un praticien de l’orientation. Les résultats vous sont restitués sous deux formes :
            </p>
        </section>

        <section class="pdf-irmr3-section">
            <h3 class="pdf-irmr3-kaki-text">Les pôles d'intérêts généraux</h3>
            <p>
                Dans le premier tableau sont présentées les notes que vous avez obtenues pour chaque type de Holland (Réaliste, Investigateur, Artistique, Social, Entreprenant, Conventionnel). Vous trouverez la définition de ces six types, accompagnée d’exemples de métiers, à la fin de ce rapport. Nous vous invitons, dans un premier temps, à les lire attentivement pour mieux comprendre les données chiffrées à votre disposition.
            </p>
            <ul>
                <li>
                    Votre profil intra-individuel correspond au classement par ordre décroissant de vos notes brutes (dans votre cas, R A I). Ce profil rend compte de la hiérarchie personnelle de vos intérêts, sans introduire de comparaison avec d’autres personnes.
                </li>
                <li>
                    Votre profil inter-individuel correspond au classement par ordre décroissant des notes étalonnées, en ce qui vous concerne : R A I (vos notes brutes ont été comparées aux notes d’une population de référence ou étalonnage). Les notes étalonnées obtenues permettent de tracer le profil figurant sur l’Hexagone. Chaque aire de l’Hexagone correspond à un niveau d’intensité des intérêts : plus on se rapproche du centre, plus les intérêts sont faibles ; à l’inverse, plus on s’écarte du centre, plus les intérêts sont marqués. L’échelle d’intensité varie de 1 (intérêts très
                    peu marqués) à 5 (intérêts très marqués).
                </li>
            </ul>
        </section>

        <section class="pdf-irmr3-section">
            <h3 class="pdf-irmr3-kaki-text">Comment lire et interpréter ce rapport ?</h3>
            <p>
                Le profil précédemment obtenu présente une image globale de vos intérêts qui peut être affinée grâce aux douze intérêts professionnels spécifiques. Ainsi, une personne dont le type dominant est Artistique pourra obtenir de plus amples précisions : « Ai-je exprimé des intérêts professionnels de type Musicaux, Esthétiques ou Littéraires ? ». Chaque type de Holland présente une subdivision comprise entre 1 et 3 intérêts professionnels spécifiques figurant dans la colonne « Secteurs » et précédés de la lettre d’appartenance (R pour Réaliste, I pour Investigateur, etc.). La lecture, comme pour les types de Holland, se déroule en deux temps :
            </p>
            <ul>
                <li>
                    Vos notes brutes rendent compte de la hiérarchie personnelle de vos intérêts. Vous pouvez les classer par ordre décroissant et utiliser cette liste pour réfléchir à vos choix mais également à vos rejets.
                </li>
                <li>
                    Vos notes étalonnées sont symbolisées par des barres plus ou moins grandes et indiquées par un chiffre à l’extrémité de ces barres. L’intensité de vos intérêts varie de 1 (intérêts très peu marqués) à 5 (intérêts très marqués).
                </li>
            </ul>
            <p>
                Vous détenez désormais les clés de lecture de votre profil, nous vous invitons à prendre le temps d’y réfléchir et d’y revenir régulièrement. Toutes les informations ne prennent pas du sens immédiatement, le processus de compréhension de soi se construisant dans la durée.
            </p>
        </section>

    </div>



    @include('pdf.pdf-footer_inc')
@endsection
