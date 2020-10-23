<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla periodica</title>

    <link rel="stylesheet" href="Assets\elcss.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="Assets\css\bootstrap.min.css">
    <?php

    $Elements = [
        1 => ['Simbolo'=>'H', 'Grupo'=>'Otros no metales'],
        2 => ['Simbolo'=>'He', 'Grupo'=>'Gases nobles'],
        3 => ['Simbolo'=>'Li', 'Grupo'=>'Alcalinos'],
        4 => ['Simbolo'=>'Be', 'Grupo'=>'alcalinoterreos'],
        5 => ['Simbolo'=>'B','Grupo'=>'Metaloides'],
        6 => ['Simbolo'=>'C','Grupo'=>'Otros no metales'],
        7 => ['Simbolo'=>'N', 'Grupo'=>'Otros no metales'],
        8 => ['Simbolo'=>'O', 'Grupo'=>'Otros no metales'],
        9 => ['Simbolo'=>'F','Grupo'=>'halogenos'],
        10 => ['Simbolo'=>'Ne', 'Grupo'=>'Gases nobles'],
        11 => ['Simbolo'=>'Na','Grupo'=>'Alcalinos'],
        12 => ['Simbolo'=>'Mg','Grupo'=>'alcalinoterreos'],
        13 => ['Simbolo'=>'Al', 'Grupo'=>'Otros metales'],
        14 => ['Simbolo'=>'Si','Grupo'=>'Metaloides'],
        15 => ['Simbolo'=>'P', 'Grupo'=>'Otros no metales'],
        16 => ['Simbolo'=>'S','Grupo'=>'Otros no metales'],
        17 => ['Simbolo'=>'Cl','Grupo'=>'halogenos'],
        18 => ['Simbolo'=>'Ar','Grupo'=>'Gases nobles'],
        19 => ['Simbolo'=>'K','Grupo'=>'Alcalinos'],
        20 => ['Simbolo'=>'Ca','Grupo'=>'alcalinoterreos'],
        21 => ['Simbolo'=>'Sc','Grupo'=>'Metales de transicion'],
        22 => ['Simbolo'=>'Ti', 'Grupo'=>'Metales de transicion'],
        23 => ['Simbolo'=>'V','Grupo'=>'Metales de transicion'],
        24 => ['Simbolo'=>'Cr', 'Grupo'=>'Metales de transicion'],
        25 => ['Simbolo'=>'Mn','Grupo'=>'Metales de transicion'],
        26 => ['Simbolo'=>'Fe', 'Grupo'=>'Metales de transicion'],
        27 => ['Simbolo'=>'Co','Grupo'=>'Metales de transicion'],
        28 => ['Simbolo'=>'Ni','Grupo'=>'Metales de transicion'],
        29 => ['Simbolo'=>'Cu', 'Grupo'=>'Metales de transicion'],
        30 => ['Simbolo'=>'Zn','Grupo'=>'Metales de transicion'],
        31 => ['Simbolo'=>'Ga','Grupo'=>'Otros metales'],
        32 => ['Simbolo'=>'Ge', 'Grupo'=>'Metaloides'],
        33 => ['Simbolo'=>'As','Grupo'=>'Metaloides'],
        34 => ['Simbolo'=>'Se', 'Grupo'=>'Otros no metales'],
        35 => ['Simbolo'=>'Br', 'Grupo'=>'halogenos'],
        36 => ['Simbolo'=>'kr','Grupo'=>'Gases nobles'],
        37 => ['Simbolo'=>'Rb', 'Grupo'=>'Alcalinos'],
        38 => ['Simbolo'=>'Sr','Grupo'=>'alcalinoterreos'],
        39 => ['Simbolo'=>'Y', 'Grupo'=>'Metales de transicion'],
        40 => ['Simbolo'=>'Zr', 'Grupo'=>'Metales de transicion'],
        41 => ['Simbolo'=>'Nb','Grupo'=>'Metales de transicion'],
        42 => ['Simbolo'=>'Mo','Grupo'=>'Metales de transicion'],
        43 => ['Simbolo'=>'Tc','Grupo'=>'Metales de transicion'],
        44 => ['Simbolo'=>'Ru', 'Grupo'=>'Metales de transicion'],
        45 => ['Simbolo'=>'Rh','Grupo'=>'Metales de transicion'],
        46 => ['Simbolo'=>'Pd','Grupo'=>'Metales de transicion'],
        47 => ['Simbolo'=>'Ag','Grupo'=>'Metales de transicion'],
        48 => ['Simbolo'=>'Cd','Grupo'=>'Metales de transicion'],
        49 => ['Simbolo'=>'In', 'Grupo'=>'Otros metales'],
        50 => ['Simbolo'=>'Sn','Grupo'=>'Otros metales'],
        51 => ['Simbolo'=>'Sb', 'Grupo'=>'Metaloides'],
        52 => ['Simbolo'=>'Te', 'Grupo'=>'Metaloides'],
        53 => ['Simbolo'=>'I', 'Grupo'=>'halogenos'],
        54 => ['Simbolo'=>'Xe', 'Grupo'=>'Gases nobles'],
        55 => ['Simbolo'=>'Cs','Grupo'=>'Alcalinos'],
        56 => ['Simbolo'=>'Ba','Grupo'=>'alcalinoterreos'],
        57 => ['Simbolo'=>'Lac', 'Grupo'=>'lantanidos'], #Seccion para los lantanidos
        72 => ['Simbolo'=>'Hf', 'Grupo'=>'Metales de transicion'],
        73 => ['Simbolo'=>'Ta', 'Grupo'=>'Metales de transicion'],
        74 => ['Simbolo'=>'W', 'Grupo'=>'Metales de transicion'],
        75 => ['Simbolo'=>'Re','Grupo'=>'Metales de transicion'],
        76 => ['Simbolo'=>'Os','Grupo'=>'Metales de transicion'],
        77 => ['Simbolo'=>'Ir', 'Grupo'=>'Metales de transicion'],
        78 => ['Simbolo'=>'Pt', 'Grupo'=>'Metales de transicion'],
        79 => ['Simbolo'=>'Au', 'Grupo'=>'Metales de transicion'],
        80 => ['Simbolo'=>'Hg', 'Grupo'=>'Metales de transicion'],
        81 => ['Simbolo'=>'Tl', 'Grupo'=>'Otros metales'],
        82 => ['Simbolo'=>'Pb', 'Grupo'=>'Otros metales'],
        83 => ['Simbolo'=>'Bi', 'Grupo'=>'Otros metales'],
        84 => ['Simbolo'=>'Po', 'Grupo'=>'Metaloides'],
        85 => ['Simbolo'=>'At','Grupo'=>'halogenos'],
        86 => ['Simbolo'=>'Rn', 'Grupo'=>'Gases nobles'],
        87 => ['Simbolo'=>'Fr', 'Grupo'=>'Alcalinos'],
        88 => ['Simbolo'=>'Ra','Grupo'=>'alcalinoterreos'],
        89 => ['Simbolo'=>'Act', 'Grupo'=>'Actinidos'], #Seccion para los Actinidos
        104 => ['Simbolo'=>'Rf', 'Grupo'=>'Metales de transicion'],
        105 => ['Simbolo'=>'Db', 'Grupo'=>'Metales de transicion'],
        106 => ['Simbolo'=>'Sg', 'Grupo'=>'Metales de transicion'],
        107 => ['Simbolo'=>'Bh', 'Grupo'=>'Metales de transicion'],
        108 => ['Simbolo'=>'Hs', 'Grupo'=>'Metales de transicion'],
        109 => ['Simbolo'=>'Mt', 'Grupo'=>'Metales de transicion'],
        110 => ['Simbolo'=>'Ds', 'Grupo'=>'Metales de transicion'],
        111 => ['Simbolo'=>'Rg', 'Grupo'=>'Metales de transicion'],
        112 => ['Simbolo'=>'Cn', 'Grupo'=>'Metales de transicion'],
        113 => ['Simbolo'=>'Nh', 'Grupo'=>'Otros metales'],
        114 => ['Simbolo'=>'Fl', 'Grupo'=>'Otros metales'],
        115 => ['Simbolo'=>'Mc', 'Grupo'=>'Otros metales'],
        116 => ['Simbolo'=>'Lv', 'Grupo'=>'Otros metales'],
        117 => ['Simbolo'=>'Ts', 'Grupo'=>'halogenos'],
        118 => ['Simbolo'=>'Og', 'Grupo'=>'Gases nobles']
    ];

    $elemGrupoF = [
        57 => ['Simbolo'=>'La', 'Grupo'=>'lantanidos'],
        58 => ['Simbolo'=>'Ce', 'Grupo'=>'lantanidos'],
        59 => ['Simbolo'=>'Pr', 'Grupo'=>'lantanidos'],
        60 => ['Simbolo'=>'Nd', 'Grupo'=>'lantanidos'],
        61 => ['Simbolo'=>'Pm','Grupo'=>'lantanidos'],
        62 => ['Simbolo'=>'Sm', 'Grupo'=>'lantanidos'],
        63 => ['Simbolo'=>'Eu', 'Grupo'=>'lantanidos'],
        64 => ['Simbolo'=>'Gd', 'Grupo'=>'lantanidos'],
        65 => ['Simbolo'=>'Tb', 'Grupo'=>'lantanidos'],
        66 => ['Simbolo'=>'Dy', 'Grupo'=>'lantanidos'],
        67 => ['Simbolo'=>'Ho', 'Grupo'=>'lantanidos'],
        68 => ['Simbolo'=>'Er', 'Grupo'=>'lantanidos'],
        69 => ['Simbolo'=>'Tm','Grupo'=>'lantanidos'],
        70 => ['Simbolo'=>'Yb', 'Grupo'=>'lantanidos'],
        71 => ['Simbolo'=>'Lu', 'Grupo'=>'lantanidos'],
        89 => ['Simbolo'=>'Ac', 'Grupo'=>'Actinidos'],
        90 => ['Simbolo'=>'Th', 'Grupo'=>'Actinidos'],
        91 => ['Simbolo'=>'Pa', 'Grupo'=>'Actinidos'],
        92 => ['Simbolo'=>'U', 'Grupo'=>'Actinidos'],
        93 => ['Simbolo'=>'Np', 'Grupo'=>'Actinidos'],
        94 => ['Simbolo'=>'Pu', 'Grupo'=>'Actinidos'],
        95 => ['Simbolo'=>'Am','Grupo'=>'Actinidos'],
        96 => ['Simbolo'=>'Cm', 'Grupo'=>'Actinidos'],
        97 => ['Simbolo'=>'Bk', 'Grupo'=>'Actinidos'],
        98 => ['Simbolo'=>'Cf', 'Grupo'=>'Actinidos'],
        99 => ['Simbolo'=>'Es', 'Grupo'=>'Actinidos'],
        100 => ['Simbolo'=>'Fm', 'Grupo'=>'Actinidos'],
        101 => ['Simbolo'=>'Md', 'Grupo'=>'Actinidos'],
        102 => ['Simbolo'=>'No','Grupo'=>'Actinidos'],
        103 => ['Simbolo'=>'Lr','Grupo'=>'Actinidos'],
    ];

    $Grupos = [
        'Alcalinos' => '#A99ABD',
        'alcalinoterreos' => '#C085D1',
        'Metales de transicion' => '#EDB632',
        'lantanidos' => '#DE7710',
        'Actinidos' => '#E9967A',
        'Otros metales' => '#FAF430',
        'Metaloides' => '#B8C54E',
        'Otros no metales' => '#79B325',
        'halogenos' => '#83C7D0',
        'Gases nobles' => '#20E1FB',
    ];
    ?>

</head>
<style>
body {
    background-image: url(https://wallpaperaccess.com/full/1373773.jpg);

}
</style>

<body>

    <div class="table-responsive">
        <table class="table" style="color:black">
            <div class="center"><img src="Assets\img\tablaimg2.png" class="img-circle" alt="Cinque Terre"
                    width="60" height="100">
            </div>
            <h1 class="text-center text-primary">2017-5306</h1>



            <?    function writeMsg() {
        unset($Elements[1]);   
    }?>
            <?php  foreach ($Elements as $Element): ?>
            <!-- inicio foreach 1  -->

            <?php $color = $Grupos[$Element['Grupo']] ?>

            <button onclick="funcion()" ; <?php echo"style='background-color: {$color};'"?> class="square">

                <?php echo "<span> {$Element["Simbolo"]} </span>"?> </button>


            <?php if ($Element["Simbolo"] === "H")  { ?>

            <div class="blank"></div>

            <?php } ?>

            <?php if ($Element["Simbolo"] === "Be")  { ?>

            <?php } ?>


            <?php if ($Element["Simbolo"] === "He")  { ?>

            <!-- <div class="blank"></div> -->

            <?php } ?>

            <?php if ($Element["Simbolo"] === "Mg")  { ?>

            <!-- <div class="blank2"></div> -->

            <?php } ?>


            <?php endforeach  ?>
            <!-- final del foreach Grupo2  -->

            </br>
            </br>

            <?php  foreach ( $elemGrupoF as $elemGrupoF): ?>
            <!-- inicio foreach 1  -->

            <?php $color = $Grupos[$elemGrupoF['Grupo']] ?>

            <div <?php echo"style='background-color: {$color};'"?> class="square">
                <?php echo "<span> {$elemGrupoF["Simbolo"]} </span>"  ?> </div> <!-- elemtos  -->



            <?php endforeach  ?>




        </table>
    </div>
</body>


</html>