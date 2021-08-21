<!DOCTYPE html>
<?php
    include 'func.php';
    $vet = array('Avestruz', 'Águia', 'Burro', 'Borboleta', 'Cachorro','Cabra', 'Carneiro', 'Camelo', 'Cobra', 'Coelho',
    'Cavalo', 'Elefante', 'Galo', 'Gato', 'Jacaré','Leão', 'Macaco', 'Porco', 'Pavão', 'Peru','Touro', 'Tigre', 'Urso', 'Veado', 'Vaca');
    $animais = array(array(1,2,3,4),array(5,6,7,8),array(9,10,11,12),array(13,14,15,16),
                    array(17,18,19,20),array(21,22,23,24),array(25,26,27,28),array(29,30,31,32),
                    array(33,34,35,36),array(37,38,39,40),array(41,42,43,44),array(45,46,47,48),
                    array(49,50,51,52),array(53,54,55,56),array(57,58,59,60),array(61,62,63,64),
                    array(65,66,67,68),array(69,70,71,72),array(73,74,75,76),array(77,78,79,80),
                    array(81,82,83,84),array(85,86,87,88),array(89,90,91,92),array(93,94,95,96),
                    array(97,98,99,00));
    $tipo = isset($_POST['tipo']) ? $_POST['tipo'] : 1;
    $valor = isset($_POST['valor']) ? $_POST['valor'] : 0;
    $numero = isset($_POST['numero']) ? $_POST['numero'] : "";
    $animal = isset($_POST['animal']) ? $_POST['animal'] : "";
    $sorteio1 = sorteios();
    $sorteio2 = inport();
    $imagem1 = "img/$sorteio2[0].jpeg";
    $imagem2 = "img/$sorteio2[1].jpeg";
    $imagem3 = "img/$sorteio2[2].jpeg";
    $imagem4 = "img/$sorteio2[3].jpeg";
    $imagem5 = "img/$sorteio2[4].jpeg";
    $imagemgs = "img2/$animal.jpeg";
    $imagem6 = "<a href='jogo.php' > <img src='$imagemgs' style='width:70px; height:auto;'/> </a>";
    $sort2[0] = str_pad($sorteio2[0], 2 , '0' , STR_PAD_LEFT);
    $sort2[1] = str_pad($sorteio2[1], 2 , '0' , STR_PAD_LEFT);
    $sort2[2] = str_pad($sorteio2[2], 2 , '0' , STR_PAD_LEFT);
    $sort2[3] = str_pad($sorteio2[3], 2 , '0' , STR_PAD_LEFT);
    $sort2[4] = str_pad($sorteio2[4], 2 , '0' , STR_PAD_LEFT);
?>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Jogo do Bicho</title>
    <script src="js/jquery.js"></script>
    <script src="js/script.js"></script>
</head>
<body onload="load_body()">
    <form method="post">
        <fieldset>
            <legend>Aposta</legend>

            <input type="radio" name="tipo" id="tipo" value="1" <?php if ($tipo == 1) echo 'checked'; ?> onclick="load()">Grupo Simples<br>
            <input type="radio" name="tipo" id="tipo" value="2" <?php if ($tipo == 2) echo 'checked'; ?> onclick="load()">Milhar<br><br>

            Valor da aposta em R$<input type="text" name="valor" id="valor" value="<?php echo $valor; ?>">
        </fieldset>
        <div id="milhar">
        <fieldset>
            <legend>Milhar</legend>
            Número<input type="text" name="numero" id="numero" maxlength="4" value="<?php echo $numero; ?>">
        </fieldset>
        </div>
        <div id="gs">
        <fieldset>
            <legend>Grupo Simples</legend>
            Animal <select name="animal" id="animal">
                   <?php
                   for ($x=0; $x<count($vet); $x++){
                       $index = $x + 1;
                       if ($index == $animal)
                            echo "<option value='$index' selected>$vet[$x]</option>";
                       else
                            echo "<option value='$index'>$vet[$x]</option>";
                   }
					?>
                   </select>
        </fieldset>
        </div>

        <input type="submit" value="Apostar">


    </form>
	sorteio<br><br>

    <?php
        if(isset($_POST["valor"])){
            echo "Valor Apostado (em R$): ".$valor."<br>";
        }
        if($tipo == 2){
            echo "Número Apostado: ".$numero."<br><br>";
        }
        if(isset($_POST['animal']) && $tipo == 1){
            echo "Animal Apotado: ".$imagem6."<br><br>";
        }

        echo "<br>"; echo "1° Prêmio: "; echo str_pad($sorteio1[0] , 2 , '0' , STR_PAD_LEFT);echo str_pad($sorteio2[0] , 2 , '0' , STR_PAD_LEFT); if ($sorteio2[0] == $animais[0][0] || $sorteio2[0] == $animais[0][1] ||$sorteio2[0] == $animais[0][2] || $sorteio2[0] == $animais[0][3]){
            echo " <a href='jogo.php' > <img src='$imagem1' style='width:70px; height:auto;'/> </a>";
         }elseif ($sorteio2[0] == $animais[1][0] || $sorteio2[0] == $animais[1][1] ||$sorteio2[0] == $animais[1][2] || $sorteio2[0] == $animais[1][3]){
            echo " <a href='jogo.php' > <img src='$imagem1' style='width:70px; height:auto;'/> </a>";
         }elseif ($sorteio2[0] == $animais[2][0] || $sorteio2[0] == $animais[2][1] ||$sorteio2[0] == $animais[2][2] || $sorteio2[0] == $animais[2][3]){
            echo " <a href='jogo.php' > <img src='$imagem1' style='width:70px; height:auto;'/> </a>";
         }elseif ($sorteio2[0] == $animais[3][0] || $sorteio2[0] == $animais[3][1] ||$sorteio2[0] == $animais[3][2] || $sorteio2[0] == $animais[3][3]){
            echo " <a href='jogo.php' > <img src='$imagem1' style='width:70px; height:auto;'/> </a>";
         }elseif ($sorteio2[0] == $animais[4][0] || $sorteio2[0] == $animais[4][1] ||$sorteio2[0] == $animais[4][2] || $sorteio2[0] == $animais[4][3]){
            echo " <a href='jogo.php' > <img src='$imagem1' style='width:70px; height:auto;'/> </a>";
         }elseif ($sorteio2[0] == $animais[5][0] || $sorteio2[0] == $animais[5][1] ||$sorteio2[0] == $animais[5][2] || $sorteio2[0] == $animais[5][3]){
            echo " <a href='jogo.php' > <img src='$imagem1' style='width:70px; height:auto;'/> </a>";
         }elseif ($sorteio2[0] == $animais[6][0] || $sorteio2[0] == $animais[6][1] ||$sorteio2[0] == $animais[6][2] || $sorteio2[0] == $animais[6][3]){
            echo " <a href='jogo.php' > <img src='$imagem1' style='width:70px; height:auto;'/> </a>";
         }elseif ($sorteio2[0] == $animais[7][0] || $sorteio2[0] == $animais[7][1] ||$sorteio2[0] == $animais[7][2] || $sorteio2[0] == $animais[7][3]){
            echo " <a href='jogo.php' > <img src='$imagem1' style='width:70px; height:auto;'/> </a>";
         }elseif ($sorteio2[0] == $animais[8][0] || $sorteio2[0] == $animais[8][1] ||$sorteio2[0] == $animais[8][2] || $sorteio2[0] == $animais[8][3]){
            echo " <a href='jogo.php' > <img src='$imagem1' style='width:70px; height:auto;'/> </a>";
         }elseif ($sorteio2[0] == $animais[9][0] || $sorteio2[0] == $animais[9][1] ||$sorteio2[0] == $animais[9][2] || $sorteio2[0] == $animais[9][3]){
            echo " <a href='jogo.php' > <img src='$imagem1' style='width:70px; height:auto;'/> </a>";
         }elseif ($sorteio2[0] == $animais[10][0] || $sorteio2[0] == $animais[10][1] ||$sorteio2[0] == $animais[10][2] || $sorteio2[0] == $animais[10][3]){
            echo " <a href='jogo.php' > <img src='$imagem1' style='width:70px; height:auto;'/> </a>";
         }elseif ($sorteio2[0] == $animais[11][0] || $sorteio2[0] == $animais[11][1] ||$sorteio2[0] == $animais[11][2] || $sorteio2[0] == $animais[11][3]){
            echo " <a href='jogo.php' > <img src='$imagem1' style='width:70px; height:auto;'/> </a>";
         }elseif ($sorteio2[0] == $animais[12][0] || $sorteio2[0] == $animais[12][1] ||$sorteio2[0] == $animais[12][2] || $sorteio2[0] == $animais[12][3]){
            echo " <a href='jogo.php' > <img src='$imagem1' style='width:70px; height:auto;'/> </a>";
         }elseif ($sorteio2[0] == $animais[13][0] || $sorteio2[0] == $animais[13][1] ||$sorteio2[0] == $animais[13][2] || $sorteio2[0] == $animais[13][3]){
            echo " <a href='jogo.php' > <img src='$imagem1' style='width:70px; height:auto;'/> </a>";
         }elseif ($sorteio2[0] == $animais[14][0] || $sorteio2[0] == $animais[14][1] ||$sorteio2[0] == $animais[14][2] || $sorteio2[0] == $animais[14][3]){
            echo " <a href='jogo.php' > <img src='$imagem1' style='width:70px; height:auto;'/> </a>";
         }elseif ($sorteio2[0] == $animais[15][0] || $sorteio2[0] == $animais[15][1] ||$sorteio2[0] == $animais[15][2] || $sorteio2[0] == $animais[15][3]){
            echo " <a href='jogo.php' > <img src='$imagem1' style='width:70px; height:auto;'/> </a>";
         }elseif ($sorteio2[0] == $animais[16][0] || $sorteio2[0] == $animais[16][1] ||$sorteio2[0] == $animais[16][2] || $sorteio2[0] == $animais[16][3]){
            echo " <a href='jogo.php' > <img src='$imagem1' style='width:70px; height:auto;'/> </a>";
         }elseif ($sorteio2[0] == $animais[17][0] || $sorteio2[0] == $animais[17][1] ||$sorteio2[0] == $animais[17][2] || $sorteio2[0] == $animais[17][3]){
            echo " <a href='jogo.php' > <img src='$imagem1' style='width:70px; height:auto;'/> </a>";
         }elseif ($sorteio2[0] == $animais[18][0] || $sorteio2[0] == $animais[18][1] ||$sorteio2[0] == $animais[18][2] || $sorteio2[0] == $animais[18][3]){
            echo " <a href='jogo.php' > <img src='$imagem1' style='width:70px; height:auto;'/> </a>";
         }elseif ($sorteio2[0] == $animais[19][0] || $sorteio2[0] == $animais[19][1] ||$sorteio2[0] == $animais[19][2] || $sorteio2[0] == $animais[19][3]){
            echo " <a href='jogo.php' > <img src='$imagem1' style='width:70px; height:auto;'/> </a>";
         }elseif ($sorteio2[0] == $animais[20][0] || $sorteio2[0] == $animais[20][1] ||$sorteio2[0] == $animais[20][2] || $sorteio2[0] == $animais[20][3]){
            echo " <a href='jogo.php' > <img src='$imagem1' style='width:70px; height:auto;'/> </a>";
         }elseif ($sorteio2[0] == $animais[21][0] || $sorteio2[0] == $animais[21][1] ||$sorteio2[0] == $animais[21][2] || $sorteio2[0] == $animais[21][3]){
            echo " <a href='jogo.php' > <img src='$imagem1' style='width:70px; height:auto;'/> </a>";
         }elseif ($sorteio2[0] == $animais[22][0] || $sorteio2[0] == $animais[22][1] ||$sorteio2[0] == $animais[22][2] || $sorteio2[0] == $animais[22][3]){
            echo " <a href='jogo.php' > <img src='$imagem1' style='width:70px; height:auto;'/> </a>";
         }elseif ($sorteio2[0] == $animais[23][0] || $sorteio2[0] == $animais[23][1] ||$sorteio2[0] == $animais[23][2] || $sorteio2[0] == $animais[23][3]){
            echo " <a href='jogo.php' > <img src='$imagem1' style='width:70px; height:auto;'/> </a>";
         }elseif ($sorteio2[0] == $animais[24][0] || $sorteio2[0] == $animais[24][1] ||$sorteio2[0] == $animais[24][2] || $sorteio2[0] == $animais[24][3]){
            echo " <a href='jogo.php' > <img src='$imagem1' style='width:70px; height:auto;'/> </a>";
        }echo "<br>";
        echo "2° Prêmio: "; echo str_pad($sorteio1[1] , 2 , '0' , STR_PAD_LEFT);echo str_pad($sorteio2[1] , 2 , '0' , STR_PAD_LEFT); if ($sorteio2[1] == $animais[0][0] || $sorteio2[1] == $animais[0][1] ||$sorteio2[1] == $animais[0][2] || $sorteio2[1] == $animais[0][3]){
            echo " <a href='jogo.php' > <img src='$imagem2' style='width:70px; height:auto;'/> </a>";
         }elseif ($sorteio2[1] == $animais[1][0] || $sorteio2[1] == $animais[1][1] ||$sorteio2[1] == $animais[1][2] || $sorteio2[1] == $animais[1][3]){
           echo " <a href='jogo.php' > <img src='$imagem2' style='width:70px; height:auto;'/> </a>";
         }elseif ($sorteio2[1] == $animais[2][0] || $sorteio2[1] == $animais[2][1] ||$sorteio2[1] == $animais[2][2] || $sorteio2[1] == $animais[2][3]){
           echo " <a href='jogo.php' > <img src='$imagem2' style='width:70px; height:auto;'/> </a>";
         }elseif ($sorteio2[1] == $animais[3][0] || $sorteio2[1] == $animais[3][1] ||$sorteio2[1] == $animais[3][2] || $sorteio2[1] == $animais[3][3]){
           echo " <a href='jogo.php' > <img src='$imagem2' style='width:70px; height:auto;'/> </a>";
         }elseif ($sorteio2[1] == $animais[4][0] || $sorteio2[1] == $animais[4][1] ||$sorteio2[1] == $animais[4][2] || $sorteio2[1] == $animais[4][3]){
           echo " <a href='jogo.php' > <img src='$imagem2' style='width:70px; height:auto;'/> </a>";
         }elseif ($sorteio2[1] == $animais[5][0] || $sorteio2[1] == $animais[5][1] ||$sorteio2[1] == $animais[5][2] || $sorteio2[1] == $animais[5][3]){
           echo " <a href='jogo.php' > <img src='$imagem2' style='width:70px; height:auto;'/> </a>";
         }elseif ($sorteio2[1] == $animais[6][0] || $sorteio2[1] == $animais[6][1] ||$sorteio2[1] == $animais[6][2] || $sorteio2[1] == $animais[6][3]){
           echo " <a href='jogo.php' > <img src='$imagem2' style='width:70px; height:auto;'/> </a>";
         }elseif ($sorteio2[1] == $animais[7][0] || $sorteio2[1] == $animais[7][1] ||$sorteio2[1] == $animais[7][2] || $sorteio2[1] == $animais[7][3]){
           echo " <a href='jogo.php' > <img src='$imagem2' style='width:70px; height:auto;'/> </a>";
         }elseif ($sorteio2[1] == $animais[8][0] || $sorteio2[1] == $animais[8][1] ||$sorteio2[1] == $animais[8][2] || $sorteio2[1] == $animais[8][3]){
           echo " <a href='jogo.php' > <img src='$imagem2' style='width:70px; height:auto;'/> </a>";
         }elseif ($sorteio2[1] == $animais[9][0] || $sorteio2[1] == $animais[9][1] ||$sorteio2[1] == $animais[9][2] || $sorteio2[1] == $animais[9][3]){
           echo " <a href='jogo.php' > <img src='$imagem2' style='width:70px; height:auto;'/> </a>";
         }elseif ($sorteio2[1] == $animais[10][0] || $sorteio2[1] == $animais[10][1] ||$sorteio2[1] == $animais[10][2] || $sorteio2[1] == $animais[10][3]){
           echo " <a href='jogo.php' > <img src='$imagem2' style='width:70px; height:auto;'/> </a>";
         }elseif ($sorteio2[1] == $animais[11][0] || $sorteio2[1] == $animais[11][1] ||$sorteio2[1] == $animais[11][2] || $sorteio2[1] == $animais[11][3]){
           echo " <a href='jogo.php' > <img src='$imagem2' style='width:70px; height:auto;'/> </a>";
         }elseif ($sorteio2[1] == $animais[12][0] || $sorteio2[1] == $animais[12][1] ||$sorteio2[1] == $animais[12][2] || $sorteio2[1] == $animais[12][3]){
           echo " <a href='jogo.php' > <img src='$imagem2' style='width:70px; height:auto;'/> </a>";
         }elseif ($sorteio2[1] == $animais[13][0] || $sorteio2[1] == $animais[13][1] ||$sorteio2[1] == $animais[13][2] || $sorteio2[1] == $animais[13][3]){
           echo " <a href='jogo.php' > <img src='$imagem2' style='width:70px; height:auto;'/> </a>";
         }elseif ($sorteio2[1] == $animais[14][0] || $sorteio2[1] == $animais[14][1] ||$sorteio2[1] == $animais[14][2] || $sorteio2[1] == $animais[14][3]){
           echo " <a href='jogo.php' > <img src='$imagem2' style='width:70px; height:auto;'/> </a>";
         }elseif ($sorteio2[1] == $animais[15][0] || $sorteio2[1] == $animais[15][1] ||$sorteio2[1] == $animais[15][2] || $sorteio2[1] == $animais[15][3]){
           echo " <a href='jogo.php' > <img src='$imagem2' style='width:70px; height:auto;'/> </a>";
         }elseif ($sorteio2[1] == $animais[16][0] || $sorteio2[1] == $animais[16][1] ||$sorteio2[1] == $animais[16][2] || $sorteio2[1] == $animais[16][3]){
           echo " <a href='jogo.php' > <img src='$imagem2' style='width:70px; height:auto;'/> </a>";
         }elseif ($sorteio2[1] == $animais[17][0] || $sorteio2[1] == $animais[17][1] ||$sorteio2[1] == $animais[17][2] || $sorteio2[1] == $animais[17][3]){
           echo " <a href='jogo.php' > <img src='$imagem2' style='width:70px; height:auto;'/> </a>";
         }elseif ($sorteio2[1] == $animais[18][0] || $sorteio2[1] == $animais[18][1] ||$sorteio2[1] == $animais[18][2] || $sorteio2[1] == $animais[18][3]){
           echo " <a href='jogo.php' > <img src='$imagem2' style='width:70px; height:auto;'/> </a>";
         }elseif ($sorteio2[1] == $animais[19][0] || $sorteio2[1] == $animais[19][1] ||$sorteio2[1] == $animais[19][2] || $sorteio2[1] == $animais[19][3]){
           echo " <a href='jogo.php' > <img src='$imagem2' style='width:70px; height:auto;'/> </a>";
         }elseif ($sorteio2[1] == $animais[20][0] || $sorteio2[1] == $animais[20][1] ||$sorteio2[1] == $animais[20][2] || $sorteio2[1] == $animais[20][3]){
           echo " <a href='jogo.php' > <img src='$imagem2' style='width:70px; height:auto;'/> </a>";
         }elseif ($sorteio2[1] == $animais[21][0] || $sorteio2[1] == $animais[21][1] ||$sorteio2[1] == $animais[21][2] || $sorteio2[1] == $animais[21][3]){
           echo " <a href='jogo.php' > <img src='$imagem2' style='width:70px; height:auto;'/> </a>";
         }elseif ($sorteio2[1] == $animais[22][0] || $sorteio2[1] == $animais[22][1] ||$sorteio2[1] == $animais[22][2] || $sorteio2[1] == $animais[22][3]){
           echo " <a href='jogo.php' > <img src='$imagem2' style='width:70px; height:auto;'/> </a>";
         }elseif ($sorteio2[1] == $animais[23][0] || $sorteio2[1] == $animais[23][1] ||$sorteio2[1] == $animais[23][2] || $sorteio2[1] == $animais[23][3]){
           echo " <a href='jogo.php' > <img src='$imagem2' style='width:70px; height:auto;'/> </a>";
         }elseif ($sorteio2[1] == $animais[24][0] || $sorteio2[1] == $animais[24][1] ||$sorteio2[1] == $animais[24][2] || $sorteio2[1] == $animais[24][3]){
           echo " <a href='jogo.php' > <img src='$imagem2' style='width:70px; height:auto;'/> </a>";
        }echo "<br>";
        echo "3° Prêmio: "; echo str_pad($sorteio1[2] , 2 , '0' , STR_PAD_LEFT);echo str_pad($sorteio2[2] , 2 , '0' , STR_PAD_LEFT); if ($sorteio2[2] == $animais[0][0] || $sorteio2[2] == $animais[0][1] ||$sorteio2[2] == $animais[0][2] || $sorteio2[2] == $animais[0][3]){
            echo " <a href='jogo.php' > <img src='$imagem3' style='width:70px; height:auto;'/> </a>";
         }elseif ($sorteio2[2] == $animais[1][0] || $sorteio2[2] == $animais[1][1] ||$sorteio2[2] == $animais[1][2] || $sorteio2[2] == $animais[1][3]){
           echo " <a href='jogo.php' > <img src='$imagem3' style='width:70px; height:auto;'/> </a>";
         }elseif ($sorteio2[2] == $animais[2][0] || $sorteio2[2] == $animais[2][1] ||$sorteio2[2] == $animais[2][2] || $sorteio2[2] == $animais[2][3]){
           echo " <a href='jogo.php' > <img src='$imagem3' style='width:70px; height:auto;'/> </a>";
         }elseif ($sorteio2[2] == $animais[3][0] || $sorteio2[2] == $animais[3][1] ||$sorteio2[2] == $animais[3][2] || $sorteio2[2] == $animais[3][3]){
           echo " <a href='jogo.php' > <img src='$imagem3' style='width:70px; height:auto;'/> </a>";
         }elseif ($sorteio2[2] == $animais[4][0] || $sorteio2[2] == $animais[4][1] ||$sorteio2[2] == $animais[4][2] || $sorteio2[2] == $animais[4][3]){
           echo " <a href='jogo.php' > <img src='$imagem3' style='width:70px; height:auto;'/> </a>";
         }elseif ($sorteio2[2] == $animais[5][0] || $sorteio2[2] == $animais[5][1] ||$sorteio2[2] == $animais[5][2] || $sorteio2[2] == $animais[5][3]){
           echo " <a href='jogo.php' > <img src='$imagem3' style='width:70px; height:auto;'/> </a>";
         }elseif ($sorteio2[2] == $animais[6][0] || $sorteio2[2] == $animais[6][1] ||$sorteio2[2] == $animais[6][2] || $sorteio2[2] == $animais[6][3]){
           echo " <a href='jogo.php' > <img src='$imagem3' style='width:70px; height:auto;'/> </a>";
         }elseif ($sorteio2[2] == $animais[7][0] || $sorteio2[2] == $animais[7][1] ||$sorteio2[2] == $animais[7][2] || $sorteio2[2] == $animais[7][3]){
           echo " <a href='jogo.php' > <img src='$imagem3' style='width:70px; height:auto;'/> </a>";
         }elseif ($sorteio2[2] == $animais[8][0] || $sorteio2[2] == $animais[8][1] ||$sorteio2[2] == $animais[8][2] || $sorteio2[2] == $animais[8][3]){
           echo " <a href='jogo.php' > <img src='$imagem3' style='width:70px; height:auto;'/> </a>";
         }elseif ($sorteio2[2] == $animais[9][0] || $sorteio2[2] == $animais[9][1] ||$sorteio2[2] == $animais[9][2] || $sorteio2[2] == $animais[9][3]){
           echo " <a href='jogo.php' > <img src='$imagem3' style='width:70px; height:auto;'/> </a>";
         }elseif ($sorteio2[2] == $animais[10][0] || $sorteio2[2] == $animais[10][1] ||$sorteio2[2] == $animais[10][2] || $sorteio2[2] == $animais[10][3]){
           echo " <a href='jogo.php' > <img src='$imagem3' style='width:70px; height:auto;'/> </a>";
         }elseif ($sorteio2[2] == $animais[11][0] || $sorteio2[2] == $animais[11][1] ||$sorteio2[2] == $animais[11][2] || $sorteio2[2] == $animais[11][3]){
           echo " <a href='jogo.php' > <img src='$imagem3' style='width:70px; height:auto;'/> </a>";
         }elseif ($sorteio2[2] == $animais[12][0] || $sorteio2[2] == $animais[12][1] ||$sorteio2[2] == $animais[12][2] || $sorteio2[2] == $animais[12][3]){
           echo " <a href='jogo.php' > <img src='$imagem3' style='width:70px; height:auto;'/> </a>";
         }elseif ($sorteio2[2] == $animais[13][0] || $sorteio2[2] == $animais[13][1] ||$sorteio2[2] == $animais[13][2] || $sorteio2[2] == $animais[13][3]){
           echo " <a href='jogo.php' > <img src='$imagem3' style='width:70px; height:auto;'/> </a>";
         }elseif ($sorteio2[2] == $animais[14][0] || $sorteio2[2] == $animais[14][1] ||$sorteio2[2] == $animais[14][2] || $sorteio2[2] == $animais[14][3]){
           echo " <a href='jogo.php' > <img src='$imagem3' style='width:70px; height:auto;'/> </a>";
         }elseif ($sorteio2[2] == $animais[15][0] || $sorteio2[2] == $animais[15][1] ||$sorteio2[2] == $animais[15][2] || $sorteio2[2] == $animais[15][3]){
           echo " <a href='jogo.php' > <img src='$imagem3' style='width:70px; height:auto;'/> </a>";
         }elseif ($sorteio2[2] == $animais[16][0] || $sorteio2[2] == $animais[16][1] ||$sorteio2[2] == $animais[16][2] || $sorteio2[2] == $animais[16][3]){
           echo " <a href='jogo.php' > <img src='$imagem3' style='width:70px; height:auto;'/> </a>";
         }elseif ($sorteio2[2] == $animais[17][0] || $sorteio2[2] == $animais[17][1] ||$sorteio2[2] == $animais[17][2] || $sorteio2[2] == $animais[17][3]){
           echo " <a href='jogo.php' > <img src='$imagem3' style='width:70px; height:auto;'/> </a>";
         }elseif ($sorteio2[2] == $animais[18][0] || $sorteio2[2] == $animais[18][1] ||$sorteio2[2] == $animais[18][2] || $sorteio2[2] == $animais[18][3]){
           echo " <a href='jogo.php' > <img src='$imagem3' style='width:70px; height:auto;'/> </a>";
         }elseif ($sorteio2[2] == $animais[19][0] || $sorteio2[2] == $animais[19][1] ||$sorteio2[2] == $animais[19][2] || $sorteio2[2] == $animais[19][3]){
           echo " <a href='jogo.php' > <img src='$imagem3' style='width:70px; height:auto;'/> </a>";
         }elseif ($sorteio2[2] == $animais[20][0] || $sorteio2[2] == $animais[20][1] ||$sorteio2[2] == $animais[20][2] || $sorteio2[2] == $animais[20][3]){
           echo " <a href='jogo.php' > <img src='$imagem3' style='width:70px; height:auto;'/> </a>";
         }elseif ($sorteio2[2] == $animais[21][0] || $sorteio2[2] == $animais[21][1] ||$sorteio2[2] == $animais[21][2] || $sorteio2[2] == $animais[21][3]){
           echo " <a href='jogo.php' > <img src='$imagem3' style='width:70px; height:auto;'/> </a>";
         }elseif ($sorteio2[2] == $animais[22][0] || $sorteio2[2] == $animais[22][1] ||$sorteio2[2] == $animais[22][2] || $sorteio2[2] == $animais[22][3]){
           echo " <a href='jogo.php' > <img src='$imagem3' style='width:70px; height:auto;'/> </a>";
         }elseif ($sorteio2[2] == $animais[23][0] || $sorteio2[2] == $animais[23][1] ||$sorteio2[2] == $animais[23][2] || $sorteio2[2] == $animais[23][3]){
           echo " <a href='jogo.php' > <img src='$imagem3' style='width:70px; height:auto;'/> </a>";
         }elseif ($sorteio2[2] == $animais[24][0] || $sorteio2[2] == $animais[24][1] ||$sorteio2[2] == $animais[24][2] || $sorteio2[2] == $animais[24][3]){
           echo " <a href='jogo.php' > <img src='$imagem3' style='width:70px; height:auto;'/> </a>";
        }echo "<br>";
        echo "4° Prêmio: "; echo str_pad($sorteio1[3] , 2 , '0' , STR_PAD_LEFT);echo str_pad($sorteio2[3] , 2 , '0' , STR_PAD_LEFT); if ($sorteio2[3] == $animais[0][0] || $sorteio2[3] == $animais[0][1] ||$sorteio2[3] == $animais[0][2] || $sorteio2[3] == $animais[0][3]){
            echo " <a href='jogo.php' > <img src='$imagem4' style='width:70px; height:auto;'/> </a>";
         }elseif ($sorteio2[3] == $animais[1][0] || $sorteio2[3] == $animais[1][1] ||$sorteio2[3] == $animais[1][2] || $sorteio2[3] == $animais[1][3]){
           echo " <a href='jogo.php' > <img src='$imagem4' style='width:70px; height:auto;'/> </a>";
         }elseif ($sorteio2[3] == $animais[2][0] || $sorteio2[3] == $animais[2][1] ||$sorteio2[3] == $animais[2][2] || $sorteio2[3] == $animais[2][3]){
           echo " <a href='jogo.php' > <img src='$imagem4' style='width:70px; height:auto;'/> </a>";
         }elseif ($sorteio2[3] == $animais[3][0] || $sorteio2[3] == $animais[3][1] ||$sorteio2[3] == $animais[3][2] || $sorteio2[3] == $animais[3][3]){
           echo " <a href='jogo.php' > <img src='$imagem4' style='width:70px; height:auto;'/> </a>";
         }elseif ($sorteio2[3] == $animais[4][0] || $sorteio2[3] == $animais[4][1] ||$sorteio2[3] == $animais[4][2] || $sorteio2[3] == $animais[4][3]){
           echo " <a href='jogo.php' > <img src='$imagem4' style='width:70px; height:auto;'/> </a>";
         }elseif ($sorteio2[3] == $animais[5][0] || $sorteio2[3] == $animais[5][1] ||$sorteio2[3] == $animais[5][2] || $sorteio2[3] == $animais[5][3]){
           echo " <a href='jogo.php' > <img src='$imagem4' style='width:70px; height:auto;'/> </a>";
         }elseif ($sorteio2[3] == $animais[6][0] || $sorteio2[3] == $animais[6][1] ||$sorteio2[3] == $animais[6][2] || $sorteio2[3] == $animais[6][3]){
           echo " <a href='jogo.php' > <img src='$imagem4' style='width:70px; height:auto;'/> </a>";
         }elseif ($sorteio2[3] == $animais[7][0] || $sorteio2[3] == $animais[7][1] ||$sorteio2[3] == $animais[7][2] || $sorteio2[3] == $animais[7][3]){
           echo " <a href='jogo.php' > <img src='$imagem4' style='width:70px; height:auto;'/> </a>";
         }elseif ($sorteio2[3] == $animais[8][0] || $sorteio2[3] == $animais[8][1] ||$sorteio2[3] == $animais[8][2] || $sorteio2[3] == $animais[8][3]){
           echo " <a href='jogo.php' > <img src='$imagem4' style='width:70px; height:auto;'/> </a>";
         }elseif ($sorteio2[3] == $animais[9][0] || $sorteio2[3] == $animais[9][1] ||$sorteio2[3] == $animais[9][2] || $sorteio2[3] == $animais[9][3]){
           echo " <a href='jogo.php' > <img src='$imagem4' style='width:70px; height:auto;'/> </a>";
         }elseif ($sorteio2[3] == $animais[10][0] || $sorteio2[3] == $animais[10][1] ||$sorteio2[3] == $animais[10][2] || $sorteio2[3] == $animais[10][3]){
           echo " <a href='jogo.php' > <img src='$imagem4' style='width:70px; height:auto;'/> </a>";
         }elseif ($sorteio2[3] == $animais[11][0] || $sorteio2[3] == $animais[11][1] ||$sorteio2[3] == $animais[11][2] || $sorteio2[3] == $animais[11][3]){
           echo " <a href='jogo.php' > <img src='$imagem4' style='width:70px; height:auto;'/> </a>";
         }elseif ($sorteio2[3] == $animais[12][0] || $sorteio2[3] == $animais[12][1] ||$sorteio2[3] == $animais[12][2] || $sorteio2[3] == $animais[12][3]){
           echo " <a href='jogo.php' > <img src='$imagem4' style='width:70px; height:auto;'/> </a>";
         }elseif ($sorteio2[3] == $animais[13][0] || $sorteio2[3] == $animais[13][1] ||$sorteio2[3] == $animais[13][2] || $sorteio2[3] == $animais[13][3]){
           echo " <a href='jogo.php' > <img src='$imagem4' style='width:70px; height:auto;'/> </a>";
         }elseif ($sorteio2[3] == $animais[14][0] || $sorteio2[3] == $animais[14][1] ||$sorteio2[3] == $animais[14][2] || $sorteio2[3] == $animais[14][3]){
           echo " <a href='jogo.php' > <img src='$imagem4' style='width:70px; height:auto;'/> </a>";
         }elseif ($sorteio2[3] == $animais[15][0] || $sorteio2[3] == $animais[15][1] ||$sorteio2[3] == $animais[15][2] || $sorteio2[3] == $animais[15][3]){
           echo " <a href='jogo.php' > <img src='$imagem4' style='width:70px; height:auto;'/> </a>";
         }elseif ($sorteio2[3] == $animais[16][0] || $sorteio2[3] == $animais[16][1] ||$sorteio2[3] == $animais[16][2] || $sorteio2[3] == $animais[16][3]){
           echo " <a href='jogo.php' > <img src='$imagem4' style='width:70px; height:auto;'/> </a>";
         }elseif ($sorteio2[3] == $animais[17][0] || $sorteio2[3] == $animais[17][1] ||$sorteio2[3] == $animais[17][2] || $sorteio2[3] == $animais[17][3]){
           echo " <a href='jogo.php' > <img src='$imagem4' style='width:70px; height:auto;'/> </a>";
         }elseif ($sorteio2[3] == $animais[18][0] || $sorteio2[3] == $animais[18][1] ||$sorteio2[3] == $animais[18][2] || $sorteio2[3] == $animais[18][3]){
           echo " <a href='jogo.php' > <img src='$imagem4' style='width:70px; height:auto;'/> </a>";
         }elseif ($sorteio2[3] == $animais[19][0] || $sorteio2[3] == $animais[19][1] ||$sorteio2[3] == $animais[19][2] || $sorteio2[3] == $animais[19][3]){
           echo " <a href='jogo.php' > <img src='$imagem4' style='width:70px; height:auto;'/> </a>";
         }elseif ($sorteio2[3] == $animais[20][0] || $sorteio2[3] == $animais[20][1] ||$sorteio2[3] == $animais[20][2] || $sorteio2[3] == $animais[20][3]){
           echo " <a href='jogo.php' > <img src='$imagem4' style='width:70px; height:auto;'/> </a>";
         }elseif ($sorteio2[3] == $animais[21][0] || $sorteio2[3] == $animais[21][1] ||$sorteio2[3] == $animais[21][2] || $sorteio2[3] == $animais[21][3]){
           echo " <a href='jogo.php' > <img src='$imagem4' style='width:70px; height:auto;'/> </a>";
         }elseif ($sorteio2[3] == $animais[22][0] || $sorteio2[3] == $animais[22][1] ||$sorteio2[3] == $animais[22][2] || $sorteio2[3] == $animais[22][3]){
           echo " <a href='jogo.php' > <img src='$imagem4' style='width:70px; height:auto;'/> </a>";
         }elseif ($sorteio2[3] == $animais[23][0] || $sorteio2[3] == $animais[23][1] ||$sorteio2[3] == $animais[23][2] || $sorteio2[3] == $animais[23][3]){
           echo " <a href='jogo.php' > <img src='$imagem4' style='width:70px; height:auto;'/> </a>";
         }elseif ($sorteio2[3] == $animais[24][0] || $sorteio2[3] == $animais[24][1] ||$sorteio2[3] == $animais[24][2] || $sorteio2[3] == $animais[24][3]){
           echo " <a href='jogo.php' > <img src='$imagem4' style='width:70px; height:auto;'/> </a>";
        }echo "<br>";
        echo "5° Prêmio: "; echo str_pad($sorteio1[4] , 2 , '0' , STR_PAD_LEFT);echo str_pad($sorteio2[4] , 2 , '0' , STR_PAD_LEFT); if ($sorteio2[4] == $animais[0][0] || $sorteio2[4] == $animais[0][1] ||$sorteio2[4] == $animais[0][2] || $sorteio2[4] == $animais[0][3]){
            echo " <a href='jogo.php' > <img src='$imagem5' style='width:70px; height:auto;'/> </a>";
         }elseif ($sorteio2[4] == $animais[1][0] || $sorteio2[4] == $animais[1][1] ||$sorteio2[4] == $animais[1][2] || $sorteio2[4] == $animais[1][3]){
           echo " <a href='jogo.php' > <img src='$imagem5' style='width:70px; height:auto;'/> </a>";
         }elseif ($sorteio2[4] == $animais[2][0] || $sorteio2[4] == $animais[2][1] ||$sorteio2[4] == $animais[2][2] || $sorteio2[4] == $animais[2][3]){
           echo " <a href='jogo.php' > <img src='$imagem5' style='width:70px; height:auto;'/> </a>";
         }elseif ($sorteio2[4] == $animais[3][0] || $sorteio2[4] == $animais[3][1] ||$sorteio2[4] == $animais[3][2] || $sorteio2[4] == $animais[3][3]){
           echo " <a href='jogo.php' > <img src='$imagem5' style='width:70px; height:auto;'/> </a>";
         }elseif ($sorteio2[4] == $animais[4][0] || $sorteio2[4] == $animais[4][1] ||$sorteio2[4] == $animais[4][2] || $sorteio2[4] == $animais[4][3]){
           echo " <a href='jogo.php' > <img src='$imagem5' style='width:70px; height:auto;'/> </a>";
         }elseif ($sorteio2[4] == $animais[5][0] || $sorteio2[4] == $animais[5][1] ||$sorteio2[4] == $animais[5][2] || $sorteio2[4] == $animais[5][3]){
           echo " <a href='jogo.php' > <img src='$imagem5' style='width:70px; height:auto;'/> </a>";
         }elseif ($sorteio2[4] == $animais[6][0] || $sorteio2[4] == $animais[6][1] ||$sorteio2[4] == $animais[6][2] || $sorteio2[4] == $animais[6][3]){
           echo " <a href='jogo.php' > <img src='$imagem5' style='width:70px; height:auto;'/> </a>";
         }elseif ($sorteio2[4] == $animais[7][0] || $sorteio2[4] == $animais[7][1] ||$sorteio2[4] == $animais[7][2] || $sorteio2[4] == $animais[7][3]){
           echo " <a href='jogo.php' > <img src='$imagem5' style='width:70px; height:auto;'/> </a>";
         }elseif ($sorteio2[4] == $animais[8][0] || $sorteio2[4] == $animais[8][1] ||$sorteio2[4] == $animais[8][2] || $sorteio2[4] == $animais[8][3]){
           echo " <a href='jogo.php' > <img src='$imagem5' style='width:70px; height:auto;'/> </a>";
         }elseif ($sorteio2[4] == $animais[9][0] || $sorteio2[4] == $animais[9][1] ||$sorteio2[4] == $animais[9][2] || $sorteio2[4] == $animais[9][3]){
           echo " <a href='jogo.php' > <img src='$imagem5' style='width:70px; height:auto;'/> </a>";
         }elseif ($sorteio2[4] == $animais[10][0] || $sorteio2[4] == $animais[10][1] ||$sorteio2[4] == $animais[10][2] || $sorteio2[4] == $animais[10][3]){
           echo " <a href='jogo.php' > <img src='$imagem5' style='width:70px; height:auto;'/> </a>";
         }elseif ($sorteio2[4] == $animais[11][0] || $sorteio2[4] == $animais[11][1] ||$sorteio2[4] == $animais[11][2] || $sorteio2[4] == $animais[11][3]){
           echo " <a href='jogo.php' > <img src='$imagem5' style='width:70px; height:auto;'/> </a>";
         }elseif ($sorteio2[4] == $animais[12][0] || $sorteio2[4] == $animais[12][1] ||$sorteio2[4] == $animais[12][2] || $sorteio2[4] == $animais[12][3]){
           echo " <a href='jogo.php' > <img src='$imagem5' style='width:70px; height:auto;'/> </a>";
         }elseif ($sorteio2[4] == $animais[13][0] || $sorteio2[4] == $animais[13][1] ||$sorteio2[4] == $animais[13][2] || $sorteio2[4] == $animais[13][3]){
           echo " <a href='jogo.php' > <img src='$imagem5' style='width:70px; height:auto;'/> </a>";
         }elseif ($sorteio2[4] == $animais[14][0] || $sorteio2[4] == $animais[14][1] ||$sorteio2[4] == $animais[14][2] || $sorteio2[4] == $animais[14][3]){
           echo " <a href='jogo.php' > <img src='$imagem5' style='width:70px; height:auto;'/> </a>";
         }elseif ($sorteio2[4] == $animais[15][0] || $sorteio2[4] == $animais[15][1] ||$sorteio2[4] == $animais[15][2] || $sorteio2[4] == $animais[15][3]){
           echo " <a href='jogo.php' > <img src='$imagem5' style='width:70px; height:auto;'/> </a>";
         }elseif ($sorteio2[4] == $animais[16][0] || $sorteio2[4] == $animais[16][1] ||$sorteio2[4] == $animais[16][2] || $sorteio2[4] == $animais[16][3]){
           echo " <a href='jogo.php' > <img src='$imagem5' style='width:70px; height:auto;'/> </a>";
         }elseif ($sorteio2[4] == $animais[17][0] || $sorteio2[4] == $animais[17][1] ||$sorteio2[4] == $animais[17][2] || $sorteio2[4] == $animais[17][3]){
           echo " <a href='jogo.php' > <img src='$imagem5' style='width:70px; height:auto;'/> </a>";
         }elseif ($sorteio2[4] == $animais[18][0] || $sorteio2[4] == $animais[18][1] ||$sorteio2[4] == $animais[18][2] || $sorteio2[4] == $animais[18][3]){
           echo " <a href='jogo.php' > <img src='$imagem5' style='width:70px; height:auto;'/> </a>";
         }elseif ($sorteio2[4] == $animais[19][0] || $sorteio2[4] == $animais[19][1] ||$sorteio2[4] == $animais[19][2] || $sorteio2[4] == $animais[19][3]){
           echo " <a href='jogo.php' > <img src='$imagem5' style='width:70px; height:auto;'/> </a>";
         }elseif ($sorteio2[4] == $animais[20][0] || $sorteio2[4] == $animais[20][1] ||$sorteio2[4] == $animais[20][2] || $sorteio2[4] == $animais[20][3]){
           echo " <a href='jogo.php' > <img src='$imagem5' style='width:70px; height:auto;'/> </a>";
         }elseif ($sorteio2[4] == $animais[21][0] || $sorteio2[4] == $animais[21][1] ||$sorteio2[4] == $animais[21][2] || $sorteio2[4] == $animais[21][3]){
           echo " <a href='jogo.php' > <img src='$imagem5' style='width:70px; height:auto;'/> </a>";
         }elseif ($sorteio2[4] == $animais[22][0] || $sorteio2[4] == $animais[22][1] ||$sorteio2[4] == $animais[22][2] || $sorteio2[4] == $animais[22][3]){
           echo " <a href='jogo.php' > <img src='$imagem5' style='width:70px; height:auto;'/> </a>";
         }elseif ($sorteio2[4] == $animais[23][0] || $sorteio2[4] == $animais[23][1] ||$sorteio2[4] == $animais[23][2] || $sorteio2[4] == $animais[23][3]){
           echo " <a href='jogo.php' > <img src='$imagem5' style='width:70px; height:auto;'/> </a>";
         }elseif ($sorteio2[4] == $animais[24][0] || $sorteio2[4] == $animais[24][1] ||$sorteio2[4] == $animais[24][2] || $sorteio2[4] == $animais[24][3]){
           echo " <a href='jogo.php' > <img src='$imagem5' style='width:70px; height:auto;'/> </a>";
        }echo "<br>";
        if(isset($_POST["valor"]) && $tipo == 1){
                $remuneracao = $valor * 15;
            }
            if(isset($_POST["valor"]) && $tipo == 1){
                $remuneracao2 = $valor * 5;
            }
            if(isset($_POST["valor"]) && $tipo == 1){
                $remuneracao3 = $valor * 4;
            }
            if(isset($_POST["valor"]) && $tipo == 1){
                $remuneracao4 = $valor * 3;
            }
            if(isset($_POST["valor"]) && $tipo == 1){
                $remuneracao5 = $valor * 2;
        }
        if(isset($_POST["valor"]) && $tipo == 2){
            $remu = $valor * 35;
          }
          if(isset($_POST["valor"]) && $tipo == 2){
              $remu2 = $valor * 30;
          }
          if(isset($_POST["valor"]) && $tipo == 2){
              $remu3 = $valor * 25;
          }
          if(isset($_POST["valor"]) && $tipo == 2){
              $remu4 = $valor * 20;
          }
          if(isset($_POST["valor"]) && $tipo == 2){
              $remu5 = $valor * 15;
        }
        if($sorteio2[0] == $animais[0][0] && $animal == 1 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 1° prêmio o valor de R$ $remuneracao.</p>";
         }else if($sorteio2[0] == $animais[0][1] && $animal == 1 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 1° prêmio o valor de R$ $remuneracao.</p>";
         }else if($sorteio2[0] == $animais[0][2] && $animal == 1 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 1° prêmio o valor de R$ $remuneracao.</p>";
         }else if($sorteio2[0] == $animais[0][3] && $animal == 1 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 1° prêmio o valor de R$ $remuneracao.</p>";
         }else if($sorteio2[0] == $animais[1][0] && $animal == 2 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 1° prêmio o valor de R$ $remuneracao.</p>";
         }else if($sorteio2[0] == $animais[1][1] && $animal == 2 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 1° prêmio o valor de R$ $remuneracao.</p>";
         }else if($sorteio2[0] == $animais[1][2] && $animal == 2 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 1° prêmio o valor de R$ $remuneracao.</p>";
         }else if($sorteio2[0] == $animais[1][3] && $animal == 2 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 1° prêmio o valor de R$ $remuneracao.</p>";
         }else if($sorteio2[0] == $animais[2][0] && $animal == 3 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 1° prêmio o valor de R$ $remuneracao.</p>";
         }else if($sorteio2[0] == $animais[2][1] && $animal == 3 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 1° prêmio o valor de R$ $remuneracao.</p>";
         }else if($sorteio2[0] == $animais[2][2] && $animal == 3 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 1° prêmio o valor de R$ $remuneracao.</p>";
         }else if($sorteio2[0] == $animais[2][3] && $animal == 3 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 1° prêmio o valor de R$ $remuneracao.</p>";
         }else if($sorteio2[0] == $animais[3][0] && $animal == 4 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 1° prêmio o valor de R$ $remuneracao.</p>";
         }else if($sorteio2[0] == $animais[3][1] && $animal == 4 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 1° prêmio o valor de R$ $remuneracao.</p>";
         }else if($sorteio2[0] == $animais[3][2] && $animal == 4 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 1° prêmio o valor de R$ $remuneracao.</p>";
         }else if($sorteio2[0] == $animais[3][3] && $animal == 4 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 1° prêmio o valor de R$ $remuneracao.</p>";
         }else if($sorteio2[0] == $animais[4][0] && $animal == 5 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 1° prêmio o valor de R$ $remuneracao.</p>";
         }else if($sorteio2[0] == $animais[4][1] && $animal == 5 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 1° prêmio o valor de R$ $remuneracao.</p>";
         }else if($sorteio2[0] == $animais[4][2] && $animal == 5 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 1° prêmio o valor de R$ $remuneracao.</p>";
         }else if($sorteio2[0] == $animais[4][3] && $animal == 5 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 1° prêmio o valor de R$ $remuneracao.</p>";
         }else if($sorteio2[0] == $animais[5][0] && $animal == 6 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 1° prêmio o valor de R$ $remuneracao.</p>";
         }else if($sorteio2[0] == $animais[5][1] && $animal == 6 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 1° prêmio o valor de R$ $remuneracao.</p>";
         }else if($sorteio2[0] == $animais[5][2] && $animal == 6 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 1° prêmio o valor de R$ $remuneracao.</p>";
         }else if($sorteio2[0] == $animais[5][3] && $animal == 6 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 1° prêmio o valor de R$ $remuneracao.</p>";
         }else if($sorteio2[0] == $animais[6][0] && $animal == 7 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 1° prêmio o valor de R$ $remuneracao.</p>";
         }else if($sorteio2[0] == $animais[6][1] && $animal == 7 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 1° prêmio o valor de R$ $remuneracao.</p>";
         }else if($sorteio2[0] == $animais[6][2] && $animal == 7 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 1° prêmio o valor de R$ $remuneracao.</p>";
         }else if($sorteio2[0] == $animais[6][3] && $animal == 7 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 1° prêmio o valor de R$ $remuneracao.</p>";
         }else if($sorteio2[0] == $animais[7][0] && $animal == 8 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 1° prêmio o valor de R$ $remuneracao.</p>";
         }else if($sorteio2[0] == $animais[7][1] && $animal == 8 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 1° prêmio o valor de R$ $remuneracao.</p>";
         }else if($sorteio2[0] == $animais[7][2] && $animal == 8 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 1° prêmio o valor de R$ $remuneracao.</p>";
         }else if($sorteio2[0] == $animais[7][3] && $animal == 8 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 1° prêmio o valor de R$ $remuneracao.</p>";
         }else if($sorteio2[0] == $animais[8][0] && $animal == 9 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 1° prêmio o valor de R$ $remuneracao.</p>";
         }else if($sorteio2[0] == $animais[8][1] && $animal == 9 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 1° prêmio o valor de R$ $remuneracao.</p>";
         }else if($sorteio2[0] == $animais[8][2] && $animal == 9 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 1° prêmio o valor de R$ $remuneracao.</p>";
         }else if($sorteio2[0] == $animais[8][3] && $animal == 9 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 1° prêmio o valor de R$ $remuneracao.</p>";
         }else if($sorteio2[0] == $animais[9][0] && $animal == 10 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 1° prêmio o valor de R$ $remuneracao.</p>";
         }else if($sorteio2[0] == $animais[9][1] && $animal == 10 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 1° prêmio o valor de R$ $remuneracao.</p>";
         }else if($sorteio2[0] == $animais[9][2] && $animal == 10 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 1° prêmio o valor de R$ $remuneracao.</p>";
         }else if($sorteio2[0] == $animais[9][3] && $animal == 10 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 1° prêmio o valor de R$ $remuneracao.</p>";
         }else if($sorteio2[0] == $animais[10][0] && $animal == 11 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 1° prêmio o valor de R$ $remuneracao.</p>";
         }else if($sorteio2[0] == $animais[10][1] && $animal == 11 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 1° prêmio o valor de R$ $remuneracao.</p>";
         }else if($sorteio2[0] == $animais[10][2] && $animal == 11 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 1° prêmio o valor de R$ $remuneracao.</p>";
         }else if($sorteio2[0] == $animais[10][3] && $animal == 11 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 1° prêmio o valor de R$ $remuneracao.</p>";
         }else if($sorteio2[0] == $animais[11][0] && $animal == 12 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 1° prêmio o valor de R$ $remuneracao.</p>";
         }else if($sorteio2[0] == $animais[11][1] && $animal == 12 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 1° prêmio o valor de R$ $remuneracao.</p>";
         }else if($sorteio2[0] == $animais[11][2] && $animal == 12 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 1° prêmio o valor de R$ $remuneracao.</p>";
         }else if($sorteio2[0] == $animais[11][3] && $animal == 12 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 1° prêmio o valor de R$ $remuneracao.</p>";
         }else if($sorteio2[0] == $animais[12][0] && $animal == 13 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 1° prêmio o valor de R$ $remuneracao.</p>";
         }else if($sorteio2[0] == $animais[12][1] && $animal == 13 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 1° prêmio o valor de R$ $remuneracao.</p>";
         }else if($sorteio2[0] == $animais[12][2] && $animal == 13 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 1° prêmio o valor de R$ $remuneracao.</p>";
         }else if($sorteio2[0] == $animais[12][3] && $animal == 13 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 1° prêmio o valor de R$ $remuneracao.</p>";
         }else if($sorteio2[0] == $animais[13][0] && $animal == 14 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 1° prêmio o valor de R$ $remuneracao.</p>";
         }else if($sorteio2[0] == $animais[13][1] && $animal == 14 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 1° prêmio o valor de R$ $remuneracao.</p>";
         }else if($sorteio2[0] == $animais[13][2] && $animal == 14 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 1° prêmio o valor de R$ $remuneracao.</p>";
         }else if($sorteio2[0] == $animais[13][3] && $animal == 14 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 1° prêmio o valor de R$ $remuneracao.</p>";
         }else if($sorteio2[0] == $animais[14][0] && $animal == 15 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 1° prêmio o valor de R$ $remuneracao.</p>";
         }else if($sorteio2[0] == $animais[14][1] && $animal == 15 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 1° prêmio o valor de R$ $remuneracao.</p>";
         }else if($sorteio2[0] == $animais[14][2] && $animal == 15 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 1° prêmio o valor de R$ $remuneracao.</p>";
         }else if($sorteio2[0] == $animais[14][3] && $animal == 15 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 1° prêmio o valor de R$ $remuneracao.</p>";
         }else if($sorteio2[0] == $animais[15][0] && $animal == 16 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 1° prêmio o valor de R$ $remuneracao.</p>";
         }else if($sorteio2[0] == $animais[15][1] && $animal == 16 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 1° prêmio o valor de R$ $remuneracao.</p>";
         }else if($sorteio2[0] == $animais[15][2] && $animal == 16 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 1° prêmio o valor de R$ $remuneracao.</p>";
         }else if($sorteio2[0] == $animais[15][3] && $animal == 16 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 1° prêmio o valor de R$ $remuneracao.</p>";
         }else if($sorteio2[0] == $animais[16][0] && $animal == 17 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 1° prêmio o valor de R$ $remuneracao.</p>";
         }else if($sorteio2[0] == $animais[16][1] && $animal == 17 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 1° prêmio o valor de R$ $remuneracao.</p>";
         }else if($sorteio2[0] == $animais[16][2] && $animal == 17 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 1° prêmio o valor de R$ $remuneracao.</p>";
         }else if($sorteio2[0] == $animais[16][3] && $animal == 17 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 1° prêmio o valor de R$ $remuneracao.</p>";
         }else if($sorteio2[0] == $animais[17][0] && $animal == 18 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 1° prêmio o valor de R$ $remuneracao.</p>";
         }else if($sorteio2[0] == $animais[17][1] && $animal == 18 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 1° prêmio o valor de R$ $remuneracao.</p>";
         }else if($sorteio2[0] == $animais[17][2] && $animal == 18 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 1° prêmio o valor de R$ $remuneracao.</p>";
         }else if($sorteio2[0] == $animais[17][3] && $animal == 18 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 1° prêmio o valor de R$ $remuneracao.</p>";
         }else if($sorteio2[0] == $animais[18][0] && $animal == 19 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 1° prêmio o valor de R$ $remuneracao.</p>";
         }else if($sorteio2[0] == $animais[18][1] && $animal == 19 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 1° prêmio o valor de R$ $remuneracao.</p>";
         }else if($sorteio2[0] == $animais[18][2] && $animal == 19 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 1° prêmio o valor de R$ $remuneracao.</p>";
         }else if($sorteio2[0] == $animais[18][3] && $animal == 19 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 1° prêmio o valor de R$ $remuneracao.</p>";
         }else if($sorteio2[0] == $animais[19][0] && $animal == 20 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 1° prêmio o valor de R$ $remuneracao.</p>";
         }else if($sorteio2[0] == $animais[19][1] && $animal == 20 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 1° prêmio o valor de R$ $remuneracao.</p>";
         }else if($sorteio2[0] == $animais[19][2] && $animal == 20 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 1° prêmio o valor de R$ $remuneracao.</p>";
         }else if($sorteio2[0] == $animais[19][3] && $animal == 20 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 1° prêmio o valor de R$ $remuneracao.</p>";
         }else if($sorteio2[0] == $animais[20][0] && $animal == 21 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 1° prêmio o valor de R$ $remuneracao.</p>";
         }else if($sorteio2[0] == $animais[20][1] && $animal == 21 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 1° prêmio o valor de R$ $remuneracao.</p>";
         }else if($sorteio2[0] == $animais[20][2] && $animal == 21 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 1° prêmio o valor de R$ $remuneracao.</p>";
         }else if($sorteio2[0] == $animais[20][3] && $animal == 21 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 1° prêmio o valor de R$ $remuneracao.</p>";
         }else if($sorteio2[0] == $animais[21][0] && $animal == 22 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 1° prêmio o valor de R$ $remuneracao.</p>";
         }else if($sorteio2[0] == $animais[21][1] && $animal == 22 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 1° prêmio o valor de R$ $remuneracao.</p>";
         }else if($sorteio2[0] == $animais[21][2] && $animal == 22 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 1° prêmio o valor de R$ $remuneracao.</p>";
         }else if($sorteio2[0] == $animais[21][3] && $animal == 22 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 1° prêmio o valor de R$ $remuneracao.</p>";
         }else if($sorteio2[0] == $animais[22][0] && $animal == 23 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 1° prêmio o valor de R$ $remuneracao.</p>";
         }else if($sorteio2[0] == $animais[22][1] && $animal == 23 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 1° prêmio o valor de R$ $remuneracao.</p>";
         }else if($sorteio2[0] == $animais[22][2] && $animal == 23 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 1° prêmio o valor de R$ $remuneracao.</p>";
         }else if($sorteio2[0] == $animais[22][3] && $animal == 23 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 1° prêmio o valor de R$ $remuneracao.</p>";
         }else if($sorteio2[0] == $animais[23][0] && $animal == 24 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 1° prêmio o valor de R$ $remuneracao.</p>";
         }else if($sorteio2[0] == $animais[23][1] && $animal == 24 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 1° prêmio o valor de R$ $remuneracao.</p>";
         }else if($sorteio2[0] == $animais[23][2] && $animal == 24 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 1° prêmio o valor de R$ $remuneracao.</p>";
         }else if($sorteio2[0] == $animais[23][3] && $animal == 24 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 1° prêmio o valor de R$ $remuneracao.</p>";
         }else if($sorteio2[0] == $animais[24][0] && $animal == 25 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 1° prêmio o valor de R$ $remuneracao.</p>";
         }else if($sorteio2[0] == $animais[24][1] && $animal == 25 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 1° prêmio o valor de R$ $remuneracao.</p>";
         }else if($sorteio2[0] == $animais[24][2] && $animal == 25 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 1° prêmio o valor de R$ $remuneracao.</p>";
         }else if($sorteio2[0] == $animais[24][3] && $animal == 25 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 1° prêmio o valor de R$ $remuneracao.</p>";
         }else if($sorteio2[1] == $animais[0][0] && $animal == 1 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 2° prêmio o valor de R$ $remuneracao2.</p>";
         }else if($sorteio2[1] == $animais[0][1] && $animal == 1 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 2° prêmio o valor de R$ $remuneracao2.</p>";
         }else if($sorteio2[1] == $animais[0][2] && $animal == 1 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 2° prêmio o valor de R$ $remuneracao2.</p>";
         }else if($sorteio2[1] == $animais[0][3] && $animal == 1 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 2° prêmio o valor de R$ $remuneracao2.</p>";
         }else if($sorteio2[1] == $animais[1][0] && $animal == 2 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 2° prêmio o valor de R$ $remuneracao2.</p>";
         }else if($sorteio2[1] == $animais[1][1] && $animal == 2 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 2° prêmio o valor de R$ $remuneracao2.</p>";
         }else if($sorteio2[1] == $animais[1][2] && $animal == 2 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 2° prêmio o valor de R$ $remuneracao2.</p>";
         }else if($sorteio2[1] == $animais[1][3] && $animal == 2 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 2° prêmio o valor de R$ $remuneracao2.</p>";
         }else if($sorteio2[1] == $animais[2][0] && $animal == 3 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 2° prêmio o valor de R$ $remuneracao2.</p>";
         }else if($sorteio2[1] == $animais[2][1] && $animal == 3 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 2° prêmio o valor de R$ $remuneracao2.</p>";
         }else if($sorteio2[1] == $animais[2][2] && $animal == 3 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 2° prêmio o valor de R$ $remuneracao2.</p>";
         }else if($sorteio2[1] == $animais[2][3] && $animal == 3 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 2° prêmio o valor de R$ $remuneracao2.</p>";
         }else if($sorteio2[1] == $animais[3][0] && $animal == 4 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 2° prêmio o valor de R$ $remuneracao2.</p>";
         }else if($sorteio2[1] == $animais[3][1] && $animal == 4 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 2° prêmio o valor de R$ $remuneracao2.</p>";
         }else if($sorteio2[1] == $animais[3][2] && $animal == 4 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 2° prêmio o valor de R$ $remuneracao2.</p>";
         }else if($sorteio2[1] == $animais[3][3] && $animal == 4 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 2° prêmio o valor de R$ $remuneracao2.</p>";
         }else if($sorteio2[1] == $animais[4][0] && $animal == 5 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 2° prêmio o valor de R$ $remuneracao2.</p>";
         }else if($sorteio2[1] == $animais[4][1] && $animal == 5 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 2° prêmio o valor de R$ $remuneracao2.</p>";
         }else if($sorteio2[1] == $animais[4][2] && $animal == 5 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 2° prêmio o valor de R$ $remuneracao2.</p>";
         }else if($sorteio2[1] == $animais[4][3] && $animal == 5 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 2° prêmio o valor de R$ $remuneracao2.</p>";
         }else if($sorteio2[1] == $animais[5][0] && $animal == 6 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 2° prêmio o valor de R$ $remuneracao2.</p>";
         }else if($sorteio2[1] == $animais[5][1] && $animal == 6 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 2° prêmio o valor de R$ $remuneracao2.</p>";
         }else if($sorteio2[1] == $animais[5][2] && $animal == 6 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 2° prêmio o valor de R$ $remuneracao2.</p>";
         }else if($sorteio2[1] == $animais[5][3] && $animal == 6 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 2° prêmio o valor de R$ $remuneracao2.</p>";
         }else if($sorteio2[1] == $animais[6][0] && $animal == 7 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 2° prêmio o valor de R$ $remuneracao2.</p>";
         }else if($sorteio2[1] == $animais[6][1] && $animal == 7 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 2° prêmio o valor de R$ $remuneracao2.</p>";
         }else if($sorteio2[1] == $animais[6][2] && $animal == 7 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 2° prêmio o valor de R$ $remuneracao2.</p>";
         }else if($sorteio2[1] == $animais[6][3] && $animal == 7 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 2° prêmio o valor de R$ $remuneracao2.</p>";
         }else if($sorteio2[1] == $animais[7][0] && $animal == 8 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 2° prêmio o valor de R$ $remuneracao2.</p>";
         }else if($sorteio2[1] == $animais[7][1] && $animal == 8 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 2° prêmio o valor de R$ $remuneracao2.</p>";
         }else if($sorteio2[1] == $animais[7][2] && $animal == 8 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 2° prêmio o valor de R$ $remuneracao2.</p>";
         }else if($sorteio2[1] == $animais[7][3] && $animal == 8 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 2° prêmio o valor de R$ $remuneracao2.</p>";
         }else if($sorteio2[1] == $animais[8][0] && $animal == 9 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 2° prêmio o valor de R$ $remuneracao2.</p>";
         }else if($sorteio2[1] == $animais[8][1] && $animal == 9 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 2° prêmio o valor de R$ $remuneracao2.</p>";
         }else if($sorteio2[1] == $animais[8][2] && $animal == 9 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 2° prêmio o valor de R$ $remuneracao2.</p>";
         }else if($sorteio2[1] == $animais[8][3] && $animal == 9 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 2° prêmio o valor de R$ $remuneracao2.</p>";
         }else if($sorteio2[1] == $animais[9][0] && $animal == 10 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 2° prêmio o valor de R$ $remuneracao2.</p>";
         }else if($sorteio2[1] == $animais[9][1] && $animal == 10 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 2° prêmio o valor de R$ $remuneracao2.</p>";
         }else if($sorteio2[1] == $animais[9][2] && $animal == 10 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 2° prêmio o valor de R$ $remuneracao2.</p>";
         }else if($sorteio2[1] == $animais[9][3] && $animal == 10 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 2° prêmio o valor de R$ $remuneracao2.</p>";
         }else if($sorteio2[1] == $animais[10][0] && $animal == 11 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 2° prêmio o valor de R$ $remuneracao2.</p>";
         }else if($sorteio2[1] == $animais[10][1] && $animal == 11 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 2° prêmio o valor de R$ $remuneracao2.</p>";
         }else if($sorteio2[1] == $animais[10][2] && $animal == 11 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 2° prêmio o valor de R$ $remuneracao2.</p>";
         }else if($sorteio2[1] == $animais[10][3] && $animal == 11 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 2° prêmio o valor de R$ $remuneracao2.</p>";
         }else if($sorteio2[1] == $animais[11][0] && $animal == 12 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 2° prêmio o valor de R$ $remuneracao2.</p>";
         }else if($sorteio2[1] == $animais[11][1] && $animal == 12 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 2° prêmio o valor de R$ $remuneracao2.</p>";
         }else if($sorteio2[1] == $animais[11][2] && $animal == 12 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 2° prêmio o valor de R$ $remuneracao2.</p>";
         }else if($sorteio2[1] == $animais[11][3] && $animal == 12 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 2° prêmio o valor de R$ $remuneracao2.</p>";
         }else if($sorteio2[1] == $animais[12][0] && $animal == 13 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 2° prêmio o valor de R$ $remuneracao2.</p>";
         }else if($sorteio2[1] == $animais[12][1] && $animal == 13 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 2° prêmio o valor de R$ $remuneracao2.</p>";
         }else if($sorteio2[1] == $animais[12][2] && $animal == 13 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 2° prêmio o valor de R$ $remuneracao2.</p>";
         }else if($sorteio2[1] == $animais[12][3] && $animal == 13 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 2° prêmio o valor de R$ $remuneracao2.</p>";
         }else if($sorteio2[1] == $animais[13][0] && $animal == 14 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 2° prêmio o valor de R$ $remuneracao2.</p>";
         }else if($sorteio2[1] == $animais[13][1] && $animal == 14 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 2° prêmio o valor de R$ $remuneracao2.</p>";
         }else if($sorteio2[1] == $animais[13][2] && $animal == 14 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 2° prêmio o valor de R$ $remuneracao2.</p>";
         }else if($sorteio2[1] == $animais[13][3] && $animal == 14 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 2° prêmio o valor de R$ $remuneracao2.</p>";
         }else if($sorteio2[1] == $animais[14][0] && $animal == 15 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 2° prêmio o valor de R$ $remuneracao2.</p>";
         }else if($sorteio2[1] == $animais[14][1] && $animal == 15 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 2° prêmio o valor de R$ $remuneracao2.</p>";
         }else if($sorteio2[1] == $animais[14][2] && $animal == 15 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 2° prêmio o valor de R$ $remuneracao2.</p>";
         }else if($sorteio2[1] == $animais[14][3] && $animal == 15 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 2° prêmio o valor de R$ $remuneracao2.</p>";
         }else if($sorteio2[1] == $animais[15][0] && $animal == 16 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 2° prêmio o valor de R$ $remuneracao2.</p>";
         }else if($sorteio2[1] == $animais[15][1] && $animal == 16 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 2° prêmio o valor de R$ $remuneracao2.</p>";
         }else if($sorteio2[1] == $animais[15][2] && $animal == 16 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 2° prêmio o valor de R$ $remuneracao2.</p>";
         }else if($sorteio2[1] == $animais[15][3] && $animal == 16 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 2° prêmio o valor de R$ $remuneracao2.</p>";
         }else if($sorteio2[1] == $animais[16][0] && $animal == 17 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 2° prêmio o valor de R$ $remuneracao2.</p>";
         }else if($sorteio2[1] == $animais[16][1] && $animal == 17 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 2° prêmio o valor de R$ $remuneracao2.</p>";
         }else if($sorteio2[1] == $animais[16][2] && $animal == 17 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 2° prêmio o valor de R$ $remuneracao2.</p>";
         }else if($sorteio2[1] == $animais[16][3] && $animal == 17 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 2° prêmio o valor de R$ $remuneracao2.</p>";
         }else if($sorteio2[1] == $animais[17][0] && $animal == 18 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 2° prêmio o valor de R$ $remuneracao2.</p>";
         }else if($sorteio2[1] == $animais[17][1] && $animal == 18 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 2° prêmio o valor de R$ $remuneracao2.</p>";
         }else if($sorteio2[1] == $animais[17][2] && $animal == 18 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 2° prêmio o valor de R$ $remuneracao2.</p>";
         }else if($sorteio2[1] == $animais[17][3] && $animal == 18 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 2° prêmio o valor de R$ $remuneracao2.</p>";
         }else if($sorteio2[1] == $animais[18][0] && $animal == 19 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 2° prêmio o valor de R$ $remuneracao2.</p>";
         }else if($sorteio2[1] == $animais[18][1] && $animal == 19 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 2° prêmio o valor de R$ $remuneracao2.</p>";
         }else if($sorteio2[1] == $animais[18][2] && $animal == 19 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 2° prêmio o valor de R$ $remuneracao2.</p>";
         }else if($sorteio2[1] == $animais[18][3] && $animal == 19 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 2° prêmio o valor de R$ $remuneracao2.</p>";
         }else if($sorteio2[1] == $animais[19][0] && $animal == 20 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 2° prêmio o valor de R$ $remuneracao2.</p>";
         }else if($sorteio2[1] == $animais[19][1] && $animal == 20 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 2° prêmio o valor de R$ $remuneracao2.</p>";
         }else if($sorteio2[1] == $animais[19][2] && $animal == 20 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 2° prêmio o valor de R$ $remuneracao2.</p>";
         }else if($sorteio2[1] == $animais[19][3] && $animal == 20 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 2° prêmio o valor de R$ $remuneracao2.</p>";
         }else if($sorteio2[1] == $animais[20][0] && $animal == 21 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 2° prêmio o valor de R$ $remuneracao2.</p>";
         }else if($sorteio2[1] == $animais[20][1] && $animal == 21 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 2° prêmio o valor de R$ $remuneracao2.</p>";
         }else if($sorteio2[1] == $animais[20][2] && $animal == 21 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 2° prêmio o valor de R$ $remuneracao2.</p>";
         }else if($sorteio2[1] == $animais[20][3] && $animal == 21 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 2° prêmio o valor de R$ $remuneracao2.</p>";
         }else if($sorteio2[1] == $animais[21][0] && $animal == 22 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 2° prêmio o valor de R$ $remuneracao2.</p>";
         }else if($sorteio2[1] == $animais[21][1] && $animal == 22 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 2° prêmio o valor de R$ $remuneracao2.</p>";
         }else if($sorteio2[1] == $animais[21][2] && $animal == 22 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 2° prêmio o valor de R$ $remuneracao2.</p>";
         }else if($sorteio2[1] == $animais[21][3] && $animal == 22 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 2° prêmio o valor de R$ $remuneracao2.</p>";
         }else if($sorteio2[1] == $animais[22][0] && $animal == 23 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 2° prêmio o valor de R$ $remuneracao2.</p>";
         }else if($sorteio2[1] == $animais[22][1] && $animal == 23 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 2° prêmio o valor de R$ $remuneracao2.</p>";
         }else if($sorteio2[1] == $animais[22][2] && $animal == 23 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 2° prêmio o valor de R$ $remuneracao2.</p>";
         }else if($sorteio2[1] == $animais[22][3] && $animal == 23 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 2° prêmio o valor de R$ $remuneracao2.</p>";
         }else if($sorteio2[1] == $animais[23][0] && $animal == 24 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 2° prêmio o valor de R$ $remuneracao2.</p>";
         }else if($sorteio2[1] == $animais[23][1] && $animal == 24 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 2° prêmio o valor de R$ $remuneracao2.</p>";
         }else if($sorteio2[1] == $animais[23][2] && $animal == 24 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 2° prêmio o valor de R$ $remuneracao2.</p>";
         }else if($sorteio2[1] == $animais[23][3] && $animal == 24 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 2° prêmio o valor de R$ $remuneracao2.</p>";
         }else if($sorteio2[1] == $animais[24][0] && $animal == 25 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 2° prêmio o valor de R$ $remuneracao2.</p>";
         }else if($sorteio2[1] == $animais[24][1] && $animal == 25 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 2° prêmio o valor de R$ $remuneracao2.</p>";
         }else if($sorteio2[1] == $animais[24][2] && $animal == 25 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 2° prêmio o valor de R$ $remuneracao2.</p>";
         }else if($sorteio2[1] == $animais[24][3] && $animal == 25 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 2° prêmio o valor de R$ $remuneracao2.</p>";
         }else if($sorteio2[2] == $animais[0][0] && $animal == 1 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 3° prêmio o valor de R$ $remuneracao3.</p>";
         }else if($sorteio2[2] == $animais[0][1] && $animal == 1 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 3° prêmio o valor de R$ $remuneracao3.</p>";
         }else if($sorteio2[2] == $animais[0][2] && $animal == 1 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 3° prêmio o valor de R$ $remuneracao3.</p>";
         }else if($sorteio2[2] == $animais[0][3] && $animal == 1 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 3° prêmio o valor de R$ $remuneracao3.</p>";
         }else if($sorteio2[2] == $animais[1][0] && $animal == 2 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 3° prêmio o valor de R$ $remuneracao3.</p>";
         }else if($sorteio2[2] == $animais[1][1] && $animal == 2 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 3° prêmio o valor de R$ $remuneracao3.</p>";
         }else if($sorteio2[2] == $animais[1][2] && $animal == 2 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 3° prêmio o valor de R$ $remuneracao3.</p>";
         }else if($sorteio2[2] == $animais[1][3] && $animal == 2 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 3° prêmio o valor de R$ $remuneracao3.</p>";
         }else if($sorteio2[2] == $animais[2][0] && $animal == 3 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 3° prêmio o valor de R$ $remuneracao3.</p>";
         }else if($sorteio2[2] == $animais[2][1] && $animal == 3 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 3° prêmio o valor de R$ $remuneracao3.</p>";
         }else if($sorteio2[2] == $animais[2][2] && $animal == 3 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 3° prêmio o valor de R$ $remuneracao3.</p>";
         }else if($sorteio2[2] == $animais[2][3] && $animal == 3 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 3° prêmio o valor de R$ $remuneracao3.</p>";
         }else if($sorteio2[2] == $animais[3][0] && $animal == 4 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 3° prêmio o valor de R$ $remuneracao3.</p>";
         }else if($sorteio2[2] == $animais[3][1] && $animal == 4 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 3° prêmio o valor de R$ $remuneracao3.</p>";
         }else if($sorteio2[2] == $animais[3][2] && $animal == 4 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 3° prêmio o valor de R$ $remuneracao3.</p>";
         }else if($sorteio2[2] == $animais[3][3] && $animal == 4 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 3° prêmio o valor de R$ $remuneracao3.</p>";
         }else if($sorteio2[2] == $animais[4][0] && $animal == 5 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 3° prêmio o valor de R$ $remuneracao3.</p>";
         }else if($sorteio2[2] == $animais[4][1] && $animal == 5 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 3° prêmio o valor de R$ $remuneracao3.</p>";
         }else if($sorteio2[2] == $animais[4][2] && $animal == 5 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 3° prêmio o valor de R$ $remuneracao3.</p>";
         }else if($sorteio2[2] == $animais[4][3] && $animal == 5 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 3° prêmio o valor de R$ $remuneracao3.</p>";
         }else if($sorteio2[2] == $animais[5][0] && $animal == 6 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 3° prêmio o valor de R$ $remuneracao3.</p>";
         }else if($sorteio2[2] == $animais[5][1] && $animal == 6 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 3° prêmio o valor de R$ $remuneracao3.</p>";
         }else if($sorteio2[2] == $animais[5][2] && $animal == 6 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 3° prêmio o valor de R$ $remuneracao3.</p>";
         }else if($sorteio2[2] == $animais[5][3] && $animal == 6 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 3° prêmio o valor de R$ $remuneracao3.</p>";
         }else if($sorteio2[2] == $animais[6][0] && $animal == 7 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 3° prêmio o valor de R$ $remuneracao3.</p>";
         }else if($sorteio2[2] == $animais[6][1] && $animal == 7 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 3° prêmio o valor de R$ $remuneracao3.</p>";
         }else if($sorteio2[2] == $animais[6][2] && $animal == 7 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 3° prêmio o valor de R$ $remuneracao3.</p>";
         }else if($sorteio2[2] == $animais[6][3] && $animal == 7 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 3° prêmio o valor de R$ $remuneracao3.</p>";
         }else if($sorteio2[2] == $animais[7][0] && $animal == 8 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 3° prêmio o valor de R$ $remuneracao3.</p>";
         }else if($sorteio2[2] == $animais[7][1] && $animal == 8 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 3° prêmio o valor de R$ $remuneracao3.</p>";
         }else if($sorteio2[2] == $animais[7][2] && $animal == 8 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 3° prêmio o valor de R$ $remuneracao3.</p>";
         }else if($sorteio2[2] == $animais[7][3] && $animal == 8 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 3° prêmio o valor de R$ $remuneracao3.</p>";
         }else if($sorteio2[2] == $animais[8][0] && $animal == 9 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 3° prêmio o valor de R$ $remuneracao3.</p>";
         }else if($sorteio2[2] == $animais[8][1] && $animal == 9 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 3° prêmio o valor de R$ $remuneracao3.</p>";
         }else if($sorteio2[2] == $animais[8][2] && $animal == 9 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 3° prêmio o valor de R$ $remuneracao3.</p>";
         }else if($sorteio2[2] == $animais[8][3] && $animal == 9 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 3° prêmio o valor de R$ $remuneracao3.</p>";
         }else if($sorteio2[2] == $animais[9][0] && $animal == 10 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 3° prêmio o valor de R$ $remuneracao3.</p>";
         }else if($sorteio2[2] == $animais[9][1] && $animal == 10 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 3° prêmio o valor de R$ $remuneracao3.</p>";
         }else if($sorteio2[2] == $animais[9][2] && $animal == 10 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 3° prêmio o valor de R$ $remuneracao3.</p>";
         }else if($sorteio2[2] == $animais[9][3] && $animal == 10 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 3° prêmio o valor de R$ $remuneracao3.</p>";
         }else if($sorteio2[2] == $animais[10][0] && $animal == 11 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 3° prêmio o valor de R$ $remuneracao3.</p>";
         }else if($sorteio2[2] == $animais[10][1] && $animal == 11 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 3° prêmio o valor de R$ $remuneracao3.</p>";
         }else if($sorteio2[2] == $animais[10][2] && $animal == 11 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 3° prêmio o valor de R$ $remuneracao3.</p>";
         }else if($sorteio2[2] == $animais[10][3] && $animal == 11 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 3° prêmio o valor de R$ $remuneracao3.</p>";
         }else if($sorteio2[2] == $animais[11][0] && $animal == 12 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 3° prêmio o valor de R$ $remuneracao3.</p>";
         }else if($sorteio2[2] == $animais[11][1] && $animal == 12 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 3° prêmio o valor de R$ $remuneracao3.</p>";
         }else if($sorteio2[2] == $animais[11][2] && $animal == 12 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 3° prêmio o valor de R$ $remuneracao3.</p>";
         }else if($sorteio2[2] == $animais[11][3] && $animal == 12 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 3° prêmio o valor de R$ $remuneracao3.</p>";
         }else if($sorteio2[2] == $animais[12][0] && $animal == 13 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 3° prêmio o valor de R$ $remuneracao3.</p>";
         }else if($sorteio2[2] == $animais[12][1] && $animal == 13 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 3° prêmio o valor de R$ $remuneracao3.</p>";
         }else if($sorteio2[2] == $animais[12][2] && $animal == 13 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 3° prêmio o valor de R$ $remuneracao3.</p>";
         }else if($sorteio2[2] == $animais[12][3] && $animal == 13 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 3° prêmio o valor de R$ $remuneracao3.</p>";
         }else if($sorteio2[2] == $animais[13][0] && $animal == 14 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 3° prêmio o valor de R$ $remuneracao3.</p>";
         }else if($sorteio2[2] == $animais[13][1] && $animal == 14 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 3° prêmio o valor de R$ $remuneracao3.</p>";
         }else if($sorteio2[2] == $animais[13][2] && $animal == 14 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 3° prêmio o valor de R$ $remuneracao3.</p>";
         }else if($sorteio2[2] == $animais[13][3] && $animal == 14 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 3° prêmio o valor de R$ $remuneracao3.</p>";
         }else if($sorteio2[2] == $animais[14][0] && $animal == 15 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 3° prêmio o valor de R$ $remuneracao3.</p>";
         }else if($sorteio2[2] == $animais[14][1] && $animal == 15 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 3° prêmio o valor de R$ $remuneracao3.</p>";
         }else if($sorteio2[2] == $animais[14][2] && $animal == 15 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 3° prêmio o valor de R$ $remuneracao3.</p>";
         }else if($sorteio2[2] == $animais[14][3] && $animal == 15 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 3° prêmio o valor de R$ $remuneracao3.</p>";
         }else if($sorteio2[2] == $animais[15][0] && $animal == 16 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 3° prêmio o valor de R$ $remuneracao3.</p>";
         }else if($sorteio2[2] == $animais[15][1] && $animal == 16 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 3° prêmio o valor de R$ $remuneracao3.</p>";
         }else if($sorteio2[2] == $animais[15][2] && $animal == 16 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 3° prêmio o valor de R$ $remuneracao3.</p>";
         }else if($sorteio2[2] == $animais[15][3] && $animal == 16 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 3° prêmio o valor de R$ $remuneracao3.</p>";
         }else if($sorteio2[2] == $animais[16][0] && $animal == 17 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 3° prêmio o valor de R$ $remuneracao3.</p>";
         }else if($sorteio2[2] == $animais[16][1] && $animal == 17 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 3° prêmio o valor de R$ $remuneracao3.</p>";
         }else if($sorteio2[2] == $animais[16][2] && $animal == 17 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 3° prêmio o valor de R$ $remuneracao3.</p>";
         }else if($sorteio2[2] == $animais[16][3] && $animal == 17 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 3° prêmio o valor de R$ $remuneracao3.</p>";
         }else if($sorteio2[2] == $animais[17][0] && $animal == 18 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 3° prêmio o valor de R$ $remuneracao3.</p>";
         }else if($sorteio2[2] == $animais[17][1] && $animal == 18 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 3° prêmio o valor de R$ $remuneracao3.</p>";
         }else if($sorteio2[2] == $animais[17][2] && $animal == 18 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 3° prêmio o valor de R$ $remuneracao3.</p>";
         }else if($sorteio2[2] == $animais[17][3] && $animal == 18 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 3° prêmio o valor de R$ $remuneracao3.</p>";
         }else if($sorteio2[2] == $animais[18][0] && $animal == 19 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 3° prêmio o valor de R$ $remuneracao3.</p>";
         }else if($sorteio2[2] == $animais[18][1] && $animal == 19 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 3° prêmio o valor de R$ $remuneracao3.</p>";
         }else if($sorteio2[2] == $animais[18][2] && $animal == 19 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 3° prêmio o valor de R$ $remuneracao3.</p>";
         }else if($sorteio2[2] == $animais[18][3] && $animal == 19 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 3° prêmio o valor de R$ $remuneracao3.</p>";
         }else if($sorteio2[2] == $animais[19][0] && $animal == 20 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 3° prêmio o valor de R$ $remuneracao3.</p>";
         }else if($sorteio2[2] == $animais[19][1] && $animal == 20 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 3° prêmio o valor de R$ $remuneracao3.</p>";
         }else if($sorteio2[2] == $animais[19][2] && $animal == 20 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 3° prêmio o valor de R$ $remuneracao3.</p>";
         }else if($sorteio2[2] == $animais[19][3] && $animal == 20 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 3° prêmio o valor de R$ $remuneracao3.</p>";
         }else if($sorteio2[2] == $animais[20][0] && $animal == 21 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 3° prêmio o valor de R$ $remuneracao3.</p>";
         }else if($sorteio2[2] == $animais[20][1] && $animal == 21 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 3° prêmio o valor de R$ $remuneracao3.</p>";
         }else if($sorteio2[2] == $animais[20][2] && $animal == 21 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 3° prêmio o valor de R$ $remuneracao3.</p>";
         }else if($sorteio2[2] == $animais[20][3] && $animal == 21 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 3° prêmio o valor de R$ $remuneracao3.</p>";
         }else if($sorteio2[2] == $animais[21][0] && $animal == 22 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 3° prêmio o valor de R$ $remuneracao3.</p>";
         }else if($sorteio2[2] == $animais[21][1] && $animal == 22 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 3° prêmio o valor de R$ $remuneracao3.</p>";
         }else if($sorteio2[2] == $animais[21][2] && $animal == 22 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 3° prêmio o valor de R$ $remuneracao3.</p>";
         }else if($sorteio2[2] == $animais[21][3] && $animal == 22 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 3° prêmio o valor de R$ $remuneracao3.</p>";
         }else if($sorteio2[2] == $animais[22][0] && $animal == 23 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 3° prêmio o valor de R$ $remuneracao3.</p>";
         }else if($sorteio2[2] == $animais[22][1] && $animal == 23 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 3° prêmio o valor de R$ $remuneracao3.</p>";
         }else if($sorteio2[2] == $animais[22][2] && $animal == 23 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 3° prêmio o valor de R$ $remuneracao3.</p>";
         }else if($sorteio2[2] == $animais[22][3] && $animal == 23 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 3° prêmio o valor de R$ $remuneracao3.</p>";
         }else if($sorteio2[2] == $animais[23][0] && $animal == 24 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 3° prêmio o valor de R$ $remuneracao3.</p>";
         }else if($sorteio2[2] == $animais[23][1] && $animal == 24 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 3° prêmio o valor de R$ $remuneracao3.</p>";
         }else if($sorteio2[2] == $animais[23][2] && $animal == 24 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 3° prêmio o valor de R$ $remuneracao3.</p>";
         }else if($sorteio2[2] == $animais[23][3] && $animal == 24 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 3° prêmio o valor de R$ $remuneracao3.</p>";
         }else if($sorteio2[2] == $animais[24][0] && $animal == 25 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 3° prêmio o valor de R$ $remuneracao3.</p>";
         }else if($sorteio2[2] == $animais[24][1] && $animal == 25 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 3° prêmio o valor de R$ $remuneracao3.</p>";
         }else if($sorteio2[2] == $animais[24][2] && $animal == 25 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 3° prêmio o valor de R$ $remuneracao3.</p>";
         }else if($sorteio2[2] == $animais[24][3] && $animal == 25 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 3° prêmio o valor de R$ $remuneracao3.</p>";
         }else if($sorteio2[3] == $animais[0][0] && $animal == 1 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 4° prêmio o valor de R$ $remuneracao4.</p>";
         }else if($sorteio2[3] == $animais[0][1] && $animal == 1 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 4° prêmio o valor de R$ $remuneracao4.</p>";
         }else if($sorteio2[3] == $animais[0][2] && $animal == 1 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 4° prêmio o valor de R$ $remuneracao4.</p>";
         }else if($sorteio2[3] == $animais[0][3] && $animal == 1 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 4° prêmio o valor de R$ $remuneracao4.</p>";
         }else if($sorteio2[3] == $animais[1][0] && $animal == 2 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 4° prêmio o valor de R$ $remuneracao4.</p>";
         }else if($sorteio2[3] == $animais[1][1] && $animal == 2 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 4° prêmio o valor de R$ $remuneracao4.</p>";
         }else if($sorteio2[3] == $animais[1][2] && $animal == 2 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 4° prêmio o valor de R$ $remuneracao4.</p>";
         }else if($sorteio2[3] == $animais[1][3] && $animal == 2 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 4° prêmio o valor de R$ $remuneracao4.</p>";
         }else if($sorteio2[3] == $animais[2][0] && $animal == 3 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 4° prêmio o valor de R$ $remuneracao4.</p>";
         }else if($sorteio2[3] == $animais[2][1] && $animal == 3 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 4° prêmio o valor de R$ $remuneracao4.</p>";
         }else if($sorteio2[3] == $animais[2][2] && $animal == 3 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 4° prêmio o valor de R$ $remuneracao4.</p>";
         }else if($sorteio2[3] == $animais[2][3] && $animal == 3 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 4° prêmio o valor de R$ $remuneracao4.</p>";
         }else if($sorteio2[3] == $animais[3][0] && $animal == 4 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 4° prêmio o valor de R$ $remuneracao4.</p>";
         }else if($sorteio2[3] == $animais[3][1] && $animal == 4 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 4° prêmio o valor de R$ $remuneracao4.</p>";
         }else if($sorteio2[3] == $animais[3][2] && $animal == 4 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 4° prêmio o valor de R$ $remuneracao4.</p>";
         }else if($sorteio2[3] == $animais[3][3] && $animal == 4 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 4° prêmio o valor de R$ $remuneracao4.</p>";
         }else if($sorteio2[3] == $animais[4][0] && $animal == 5 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 4° prêmio o valor de R$ $remuneracao4.</p>";
         }else if($sorteio2[3] == $animais[4][1] && $animal == 5 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 4° prêmio o valor de R$ $remuneracao4.</p>";
         }else if($sorteio2[3] == $animais[4][2] && $animal == 5 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 4° prêmio o valor de R$ $remuneracao4.</p>";
         }else if($sorteio2[3] == $animais[4][3] && $animal == 5 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 4° prêmio o valor de R$ $remuneracao4.</p>";
         }else if($sorteio2[3] == $animais[5][0] && $animal == 6 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 4° prêmio o valor de R$ $remuneracao4.</p>";
         }else if($sorteio2[3] == $animais[5][1] && $animal == 6 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 4° prêmio o valor de R$ $remuneracao4.</p>";
         }else if($sorteio2[3] == $animais[5][2] && $animal == 6 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 4° prêmio o valor de R$ $remuneracao4.</p>";
         }else if($sorteio2[3] == $animais[5][3] && $animal == 6 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 4° prêmio o valor de R$ $remuneracao4.</p>";
         }else if($sorteio2[3] == $animais[6][0] && $animal == 7 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 4° prêmio o valor de R$ $remuneracao4.</p>";
         }else if($sorteio2[3] == $animais[6][1] && $animal == 7 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 4° prêmio o valor de R$ $remuneracao4.</p>";
         }else if($sorteio2[3] == $animais[6][2] && $animal == 7 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 4° prêmio o valor de R$ $remuneracao4.</p>";
         }else if($sorteio2[3] == $animais[6][3] && $animal == 7 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 4° prêmio o valor de R$ $remuneracao4.</p>";
         }else if($sorteio2[3] == $animais[7][0] && $animal == 8 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 4° prêmio o valor de R$ $remuneracao4.</p>";
         }else if($sorteio2[3] == $animais[7][1] && $animal == 8 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 4° prêmio o valor de R$ $remuneracao4.</p>";
         }else if($sorteio2[3] == $animais[7][2] && $animal == 8 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 4° prêmio o valor de R$ $remuneracao4.</p>";
         }else if($sorteio2[3] == $animais[7][3] && $animal == 8 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 4° prêmio o valor de R$ $remuneracao4.</p>";
         }else if($sorteio2[3] == $animais[8][0] && $animal == 9 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 4° prêmio o valor de R$ $remuneracao4.</p>";
         }else if($sorteio2[3] == $animais[8][1] && $animal == 9 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 4° prêmio o valor de R$ $remuneracao4.</p>";
         }else if($sorteio2[3] == $animais[8][2] && $animal == 9 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 4° prêmio o valor de R$ $remuneracao4.</p>";
         }else if($sorteio2[3] == $animais[8][3] && $animal == 9 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 4° prêmio o valor de R$ $remuneracao4.</p>";
         }else if($sorteio2[3] == $animais[9][0] && $animal == 10 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 4° prêmio o valor de R$ $remuneracao4.</p>";
         }else if($sorteio2[3] == $animais[9][1] && $animal == 10 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 4° prêmio o valor de R$ $remuneracao4.</p>";
         }else if($sorteio2[3] == $animais[9][2] && $animal == 10 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 4° prêmio o valor de R$ $remuneracao4.</p>";
         }else if($sorteio2[3] == $animais[9][3] && $animal == 10 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 4° prêmio o valor de R$ $remuneracao4.</p>";
         }else if($sorteio2[3] == $animais[10][0] && $animal == 11 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 4° prêmio o valor de R$ $remuneracao4.</p>";
         }else if($sorteio2[3] == $animais[10][1] && $animal == 11 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 4° prêmio o valor de R$ $remuneracao4.</p>";
         }else if($sorteio2[3] == $animais[10][2] && $animal == 11 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 4° prêmio o valor de R$ $remuneracao4.</p>";
         }else if($sorteio2[3] == $animais[10][3] && $animal == 11 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 4° prêmio o valor de R$ $remuneracao4.</p>";
         }else if($sorteio2[3] == $animais[11][0] && $animal == 12 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 4° prêmio o valor de R$ $remuneracao4.</p>";
         }else if($sorteio2[3] == $animais[11][1] && $animal == 12 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 4° prêmio o valor de R$ $remuneracao4.</p>";
         }else if($sorteio2[3] == $animais[11][2] && $animal == 12 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 4° prêmio o valor de R$ $remuneracao4.</p>";
         }else if($sorteio2[3] == $animais[11][3] && $animal == 12 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 4° prêmio o valor de R$ $remuneracao4.</p>";
         }else if($sorteio2[3] == $animais[12][0] && $animal == 13 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 4° prêmio o valor de R$ $remuneracao4.</p>";
         }else if($sorteio2[3] == $animais[12][1] && $animal == 13 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 4° prêmio o valor de R$ $remuneracao4.</p>";
         }else if($sorteio2[3] == $animais[12][2] && $animal == 13 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 4° prêmio o valor de R$ $remuneracao4.</p>";
         }else if($sorteio2[3] == $animais[12][3] && $animal == 13 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 4° prêmio o valor de R$ $remuneracao4.</p>";
         }else if($sorteio2[3] == $animais[13][0] && $animal == 14 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 4° prêmio o valor de R$ $remuneracao4.</p>";
         }else if($sorteio2[3] == $animais[13][1] && $animal == 14 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 4° prêmio o valor de R$ $remuneracao4.</p>";
         }else if($sorteio2[3] == $animais[13][2] && $animal == 14 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 4° prêmio o valor de R$ $remuneracao4.</p>";
         }else if($sorteio2[3] == $animais[13][3] && $animal == 14 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 4° prêmio o valor de R$ $remuneracao4.</p>";
         }else if($sorteio2[3] == $animais[14][0] && $animal == 15 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 4° prêmio o valor de R$ $remuneracao4.</p>";
         }else if($sorteio2[3] == $animais[14][1] && $animal == 15 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 4° prêmio o valor de R$ $remuneracao4.</p>";
         }else if($sorteio2[3] == $animais[14][2] && $animal == 15 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 4° prêmio o valor de R$ $remuneracao4.</p>";
         }else if($sorteio2[3] == $animais[14][3] && $animal == 15 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 4° prêmio o valor de R$ $remuneracao4.</p>";
         }else if($sorteio2[3] == $animais[15][0] && $animal == 16 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 4° prêmio o valor de R$ $remuneracao4.</p>";
         }else if($sorteio2[3] == $animais[15][1] && $animal == 16 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 4° prêmio o valor de R$ $remuneracao4.</p>";
         }else if($sorteio2[3] == $animais[15][2] && $animal == 16 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 4° prêmio o valor de R$ $remuneracao4.</p>";
         }else if($sorteio2[3] == $animais[15][3] && $animal == 16 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 4° prêmio o valor de R$ $remuneracao4.</p>";
         }else if($sorteio2[3] == $animais[16][0] && $animal == 17 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 4° prêmio o valor de R$ $remuneracao4.</p>";
         }else if($sorteio2[3] == $animais[16][1] && $animal == 17 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 4° prêmio o valor de R$ $remuneracao4.</p>";
         }else if($sorteio2[3] == $animais[16][2] && $animal == 17 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 4° prêmio o valor de R$ $remuneracao4.</p>";
         }else if($sorteio2[3] == $animais[16][3] && $animal == 17 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 4° prêmio o valor de R$ $remuneracao4.</p>";
         }else if($sorteio2[3] == $animais[17][0] && $animal == 18 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 4° prêmio o valor de R$ $remuneracao4.</p>";
         }else if($sorteio2[3] == $animais[17][1] && $animal == 18 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 4° prêmio o valor de R$ $remuneracao4.</p>";
         }else if($sorteio2[3] == $animais[17][2] && $animal == 18 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 4° prêmio o valor de R$ $remuneracao4.</p>";
         }else if($sorteio2[3] == $animais[17][3] && $animal == 18 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 4° prêmio o valor de R$ $remuneracao4.</p>";
         }else if($sorteio2[3] == $animais[18][0] && $animal == 19 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 4° prêmio o valor de R$ $remuneracao4.</p>";
         }else if($sorteio2[3] == $animais[18][1] && $animal == 19 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 4° prêmio o valor de R$ $remuneracao4.</p>";
         }else if($sorteio2[3] == $animais[18][2] && $animal == 19 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 4° prêmio o valor de R$ $remuneracao4.</p>";
         }else if($sorteio2[3] == $animais[18][3] && $animal == 19 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 4° prêmio o valor de R$ $remuneracao4.</p>";
         }else if($sorteio2[3] == $animais[19][0] && $animal == 20 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 4° prêmio o valor de R$ $remuneracao4.</p>";
         }else if($sorteio2[3] == $animais[19][1] && $animal == 20 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 4° prêmio o valor de R$ $remuneracao4.</p>";
         }else if($sorteio2[3] == $animais[19][2] && $animal == 20 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 4° prêmio o valor de R$ $remuneracao4.</p>";
         }else if($sorteio2[3] == $animais[19][3] && $animal == 20 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 4° prêmio o valor de R$ $remuneracao4.</p>";
         }else if($sorteio2[3] == $animais[20][0] && $animal == 21 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 4° prêmio o valor de R$ $remuneracao4.</p>";
         }else if($sorteio2[3] == $animais[20][1] && $animal == 21 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 4° prêmio o valor de R$ $remuneracao4.</p>";
         }else if($sorteio2[3] == $animais[20][2] && $animal == 21 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 4° prêmio o valor de R$ $remuneracao4.</p>";
         }else if($sorteio2[3] == $animais[20][3] && $animal == 21 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 4° prêmio o valor de R$ $remuneracao4.</p>";
         }else if($sorteio2[3] == $animais[21][0] && $animal == 22 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 4° prêmio o valor de R$ $remuneracao4.</p>";
         }else if($sorteio2[3] == $animais[21][1] && $animal == 22 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 4° prêmio o valor de R$ $remuneracao4.</p>";
         }else if($sorteio2[3] == $animais[21][2] && $animal == 22 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 4° prêmio o valor de R$ $remuneracao4.</p>";
         }else if($sorteio2[3] == $animais[21][3] && $animal == 22 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 4° prêmio o valor de R$ $remuneracao4.</p>";
         }else if($sorteio2[3] == $animais[22][0] && $animal == 23 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 4° prêmio o valor de R$ $remuneracao4.</p>";
         }else if($sorteio2[3] == $animais[22][1] && $animal == 23 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 4° prêmio o valor de R$ $remuneracao4.</p>";
         }else if($sorteio2[3] == $animais[22][2] && $animal == 23 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 4° prêmio o valor de R$ $remuneracao4.</p>";
         }else if($sorteio2[3] == $animais[22][3] && $animal == 23 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 4° prêmio o valor de R$ $remuneracao4.</p>";
         }else if($sorteio2[3] == $animais[23][0] && $animal == 24 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 4° prêmio o valor de R$ $remuneracao4.</p>";
         }else if($sorteio2[3] == $animais[23][1] && $animal == 24 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 4° prêmio o valor de R$ $remuneracao4.</p>";
         }else if($sorteio2[3] == $animais[23][2] && $animal == 24 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 4° prêmio o valor de R$ $remuneracao4.</p>";
         }else if($sorteio2[3] == $animais[23][3] && $animal == 24 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 4° prêmio o valor de R$ $remuneracao4.</p>";
         }else if($sorteio2[3] == $animais[24][0] && $animal == 25 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 4° prêmio o valor de R$ $remuneracao4.</p>";
         }else if($sorteio2[3] == $animais[24][1] && $animal == 25 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 4° prêmio o valor de R$ $remuneracao4.</p>";
         }else if($sorteio2[3] == $animais[24][2] && $animal == 25 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 4° prêmio o valor de R$ $remuneracao4.</p>";
         }else if($sorteio2[3] == $animais[24][3] && $animal == 25 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 4° prêmio o valor de R$ $remuneracao4.</p>";
         }else if($sorteio2[4] == $animais[0][0] && $animal == 1 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 5° prêmio o valor de R$ $remuneracao5.</p>";
         }else if($sorteio2[4] == $animais[0][1] && $animal == 1 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 5° prêmio o valor de R$ $remuneracao5.</p>";
         }else if($sorteio2[4] == $animais[0][2] && $animal == 1 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 5° prêmio o valor de R$ $remuneracao5.</p>";
         }else if($sorteio2[4] == $animais[0][3] && $animal == 1 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 5° prêmio o valor de R$ $remuneracao5.</p>";
         }else if($sorteio2[4] == $animais[1][0] && $animal == 2 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 5° prêmio o valor de R$ $remuneracao5.</p>";
         }else if($sorteio2[4] == $animais[1][1] && $animal == 2 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 5° prêmio o valor de R$ $remuneracao5.</p>";
         }else if($sorteio2[4] == $animais[1][2] && $animal == 2 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 5° prêmio o valor de R$ $remuneracao5.</p>";
         }else if($sorteio2[4] == $animais[1][3] && $animal == 2 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 5° prêmio o valor de R$ $remuneracao5.</p>";
         }else if($sorteio2[4] == $animais[2][0] && $animal == 3 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 5° prêmio o valor de R$ $remuneracao5.</p>";
         }else if($sorteio2[4] == $animais[2][1] && $animal == 3 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 5° prêmio o valor de R$ $remuneracao5.</p>";
         }else if($sorteio2[4] == $animais[2][2] && $animal == 3 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 5° prêmio o valor de R$ $remuneracao5.</p>";
         }else if($sorteio2[4] == $animais[2][3] && $animal == 3 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 5° prêmio o valor de R$ $remuneracao5.</p>";
         }else if($sorteio2[4] == $animais[3][0] && $animal == 4 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 5° prêmio o valor de R$ $remuneracao5.</p>";
         }else if($sorteio2[4] == $animais[3][1] && $animal == 4 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 5° prêmio o valor de R$ $remuneracao5.</p>";
         }else if($sorteio2[4] == $animais[3][2] && $animal == 4 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 5° prêmio o valor de R$ $remuneracao5.</p>";
         }else if($sorteio2[4] == $animais[3][3] && $animal == 4 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 5° prêmio o valor de R$ $remuneracao5.</p>";
         }else if($sorteio2[4] == $animais[4][0] && $animal == 5 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 5° prêmio o valor de R$ $remuneracao5.</p>";
         }else if($sorteio2[4] == $animais[4][1] && $animal == 5 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 5° prêmio o valor de R$ $remuneracao5.</p>";
         }else if($sorteio2[4] == $animais[4][2] && $animal == 5 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 5° prêmio o valor de R$ $remuneracao5.</p>";
         }else if($sorteio2[4] == $animais[4][3] && $animal == 5 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 5° prêmio o valor de R$ $remuneracao5.</p>";
         }else if($sorteio2[4] == $animais[5][0] && $animal == 6 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 5° prêmio o valor de R$ $remuneracao5.</p>";
         }else if($sorteio2[4] == $animais[5][1] && $animal == 6 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 5° prêmio o valor de R$ $remuneracao5.</p>";
         }else if($sorteio2[4] == $animais[5][2] && $animal == 6 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 5° prêmio o valor de R$ $remuneracao5.</p>";
         }else if($sorteio2[4] == $animais[5][3] && $animal == 6 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 5° prêmio o valor de R$ $remuneracao5.</p>";
         }else if($sorteio2[4] == $animais[6][0] && $animal == 7 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 5° prêmio o valor de R$ $remuneracao5.</p>";
         }else if($sorteio2[4] == $animais[6][1] && $animal == 7 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 5° prêmio o valor de R$ $remuneracao5.</p>";
         }else if($sorteio2[4] == $animais[6][2] && $animal == 7 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 5° prêmio o valor de R$ $remuneracao5.</p>";
         }else if($sorteio2[4] == $animais[6][3] && $animal == 7 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 5° prêmio o valor de R$ $remuneracao5.</p>";
         }else if($sorteio2[4] == $animais[7][0] && $animal == 8 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 5° prêmio o valor de R$ $remuneracao5.</p>";
         }else if($sorteio2[4] == $animais[7][1] && $animal == 8 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 5° prêmio o valor de R$ $remuneracao5.</p>";
         }else if($sorteio2[4] == $animais[7][2] && $animal == 8 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 5° prêmio o valor de R$ $remuneracao5.</p>";
         }else if($sorteio2[4] == $animais[7][3] && $animal == 8 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 5° prêmio o valor de R$ $remuneracao5.</p>";
         }else if($sorteio2[4] == $animais[8][0] && $animal == 9 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 5° prêmio o valor de R$ $remuneracao5.</p>";
         }else if($sorteio2[4] == $animais[8][1] && $animal == 9 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 5° prêmio o valor de R$ $remuneracao5.</p>";
         }else if($sorteio2[4] == $animais[8][2] && $animal == 9 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 5° prêmio o valor de R$ $remuneracao5.</p>";
         }else if($sorteio2[4] == $animais[8][3] && $animal == 9 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 5° prêmio o valor de R$ $remuneracao5.</p>";
         }else if($sorteio2[4] == $animais[9][0] && $animal == 10 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 5° prêmio o valor de R$ $remuneracao5.</p>";
         }else if($sorteio2[4] == $animais[9][1] && $animal == 10 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 5° prêmio o valor de R$ $remuneracao5.</p>";
         }else if($sorteio2[4] == $animais[9][2] && $animal == 10 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 5° prêmio o valor de R$ $remuneracao5.</p>";
         }else if($sorteio2[4] == $animais[9][3] && $animal == 10 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 5° prêmio o valor de R$ $remuneracao5.</p>";
         }else if($sorteio2[4] == $animais[10][0] && $animal == 11 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 5° prêmio o valor de R$ $remuneracao5.</p>";
         }else if($sorteio2[4] == $animais[10][1] && $animal == 11 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 5° prêmio o valor de R$ $remuneracao5.</p>";
         }else if($sorteio2[4] == $animais[10][2] && $animal == 11 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 5° prêmio o valor de R$ $remuneracao5.</p>";
         }else if($sorteio2[4] == $animais[10][3] && $animal == 11 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 5° prêmio o valor de R$ $remuneracao5.</p>";
         }else if($sorteio2[4] == $animais[11][0] && $animal == 12 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 5° prêmio o valor de R$ $remuneracao5.</p>";
         }else if($sorteio2[4] == $animais[11][1] && $animal == 12 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 5° prêmio o valor de R$ $remuneracao5.</p>";
         }else if($sorteio2[4] == $animais[11][2] && $animal == 12 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 5° prêmio o valor de R$ $remuneracao5.</p>";
         }else if($sorteio2[4] == $animais[11][3] && $animal == 12 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 5° prêmio o valor de R$ $remuneracao5.</p>";
         }else if($sorteio2[4] == $animais[12][0] && $animal == 13 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 5° prêmio o valor de R$ $remuneracao5.</p>";
         }else if($sorteio2[4] == $animais[12][1] && $animal == 13 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 5° prêmio o valor de R$ $remuneracao5.</p>";
         }else if($sorteio2[4] == $animais[12][2] && $animal == 13 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 5° prêmio o valor de R$ $remuneracao5.</p>";
         }else if($sorteio2[4] == $animais[12][3] && $animal == 13 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 5° prêmio o valor de R$ $remuneracao5.</p>";
         }else if($sorteio2[4] == $animais[13][0] && $animal == 14 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 5° prêmio o valor de R$ $remuneracao5.</p>";
         }else if($sorteio2[4] == $animais[13][1] && $animal == 14 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 5° prêmio o valor de R$ $remuneracao5.</p>";
         }else if($sorteio2[4] == $animais[13][2] && $animal == 14 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 5° prêmio o valor de R$ $remuneracao5.</p>";
         }else if($sorteio2[4] == $animais[13][3] && $animal == 14 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 5° prêmio o valor de R$ $remuneracao5.</p>";
         }else if($sorteio2[4] == $animais[14][0] && $animal == 15 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 5° prêmio o valor de R$ $remuneracao5.</p>";
         }else if($sorteio2[4] == $animais[14][1] && $animal == 15 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 5° prêmio o valor de R$ $remuneracao5.</p>";
         }else if($sorteio2[4] == $animais[14][2] && $animal == 15 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 5° prêmio o valor de R$ $remuneracao5.</p>";
         }else if($sorteio2[4] == $animais[14][3] && $animal == 15 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 5° prêmio o valor de R$ $remuneracao5.</p>";
         }else if($sorteio2[4] == $animais[15][0] && $animal == 16 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 5° prêmio o valor de R$ $remuneracao5.</p>";
         }else if($sorteio2[4] == $animais[15][1] && $animal == 16 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 5° prêmio o valor de R$ $remuneracao5.</p>";
         }else if($sorteio2[4] == $animais[15][2] && $animal == 16 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 5° prêmio o valor de R$ $remuneracao5.</p>";
         }else if($sorteio2[4] == $animais[15][3] && $animal == 16 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 5° prêmio o valor de R$ $remuneracao5.</p>";
         }else if($sorteio2[4] == $animais[16][0] && $animal == 17 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 5° prêmio o valor de R$ $remuneracao5.</p>";
         }else if($sorteio2[4] == $animais[16][1] && $animal == 17 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 5° prêmio o valor de R$ $remuneracao5.</p>";
         }else if($sorteio2[4] == $animais[16][2] && $animal == 17 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 5° prêmio o valor de R$ $remuneracao5.</p>";
         }else if($sorteio2[4] == $animais[16][3] && $animal == 17 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 5° prêmio o valor de R$ $remuneracao5.</p>";
         }else if($sorteio2[4] == $animais[17][0] && $animal == 18 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 5° prêmio o valor de R$ $remuneracao5.</p>";
         }else if($sorteio2[4] == $animais[17][1] && $animal == 18 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 5° prêmio o valor de R$ $remuneracao5.</p>";
         }else if($sorteio2[4] == $animais[17][2] && $animal == 18 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 5° prêmio o valor de R$ $remuneracao5.</p>";
         }else if($sorteio2[4] == $animais[17][3] && $animal == 18 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 5° prêmio o valor de R$ $remuneracao5.</p>";
         }else if($sorteio2[4] == $animais[18][0] && $animal == 19 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 5° prêmio o valor de R$ $remuneracao5.</p>";
         }else if($sorteio2[4] == $animais[18][1] && $animal == 19 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 5° prêmio o valor de R$ $remuneracao5.</p>";
         }else if($sorteio2[4] == $animais[18][2] && $animal == 19 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 5° prêmio o valor de R$ $remuneracao5.</p>";
         }else if($sorteio2[4] == $animais[18][3] && $animal == 19 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 5° prêmio o valor de R$ $remuneracao5.</p>";
         }else if($sorteio2[4] == $animais[19][0] && $animal == 20 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 5° prêmio o valor de R$ $remuneracao5.</p>";
         }else if($sorteio2[4] == $animais[19][1] && $animal == 20 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 5° prêmio o valor de R$ $remuneracao5.</p>";
         }else if($sorteio2[4] == $animais[19][2] && $animal == 20 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 5° prêmio o valor de R$ $remuneracao5.</p>";
         }else if($sorteio2[4] == $animais[19][3] && $animal == 20 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 5° prêmio o valor de R$ $remuneracao5.</p>";
         }else if($sorteio2[4] == $animais[20][0] && $animal == 21 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 5° prêmio o valor de R$ $remuneracao5.</p>";
         }else if($sorteio2[4] == $animais[20][1] && $animal == 21 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 5° prêmio o valor de R$ $remuneracao5.</p>";
         }else if($sorteio2[4] == $animais[20][2] && $animal == 21 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 5° prêmio o valor de R$ $remuneracao5.</p>";
         }else if($sorteio2[4] == $animais[20][3] && $animal == 21 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 5° prêmio o valor de R$ $remuneracao5.</p>";
         }else if($sorteio2[4] == $animais[21][0] && $animal == 22 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 5° prêmio o valor de R$ $remuneracao5.</p>";
         }else if($sorteio2[4] == $animais[21][1] && $animal == 22 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 5° prêmio o valor de R$ $remuneracao5.</p>";
         }else if($sorteio2[4] == $animais[21][2] && $animal == 22 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 5° prêmio o valor de R$ $remuneracao5.</p>";
         }else if($sorteio2[4] == $animais[21][3] && $animal == 22 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 5° prêmio o valor de R$ $remuneracao5.</p>";
         }else if($sorteio2[4] == $animais[22][0] && $animal == 23 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 5° prêmio o valor de R$ $remuneracao5.</p>";
         }else if($sorteio2[4] == $animais[22][1] && $animal == 23 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 5° prêmio o valor de R$ $remuneracao5.</p>";
         }else if($sorteio2[4] == $animais[22][2] && $animal == 23 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 5° prêmio o valor de R$ $remuneracao5.</p>";
         }else if($sorteio2[4] == $animais[22][3] && $animal == 23 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 5° prêmio o valor de R$ $remuneracao5.</p>";
         }else if($sorteio2[4] == $animais[23][0] && $animal == 24 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 5° prêmio o valor de R$ $remuneracao5.</p>";
         }else if($sorteio2[4] == $animais[23][1] && $animal == 24 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 5° prêmio o valor de R$ $remuneracao5.</p>";
         }else if($sorteio2[4] == $animais[23][2] && $animal == 24 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 5° prêmio o valor de R$ $remuneracao5.</p>";
         }else if($sorteio2[4] == $animais[23][3] && $animal == 24 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 5° prêmio o valor de R$ $remuneracao5.</p>";
         }else if($sorteio2[4] == $animais[24][0] && $animal == 25 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 5° prêmio o valor de R$ $remuneracao5.</p>";
         }else if($sorteio2[4] == $animais[24][1] && $animal == 25 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 5° prêmio o valor de R$ $remuneracao5.</p>";
         }else if($sorteio2[4] == $animais[24][2] && $animal == 25 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 5° prêmio o valor de R$ $remuneracao5.</p>";
         }else if($sorteio2[4] == $animais[24][3] && $animal == 25 && $tipo == 1){
            echo "<p style='color:blue;'>voce ganhou o 5° prêmio o valor de R$ $remuneracao5.</p>";
         }else if($numero == $sorteio1[0].$sort2[0] && $tipo == 2){
            echo "<p style='color:blue;'>voce ganhou o 1° prêmio o valor de R$ $remu.</p>";
        }else if($numero == $sorteio1[1].$sort2[1] && $tipo == 2){
            echo "<p style='color:blue;'>voce ganhou o 2° prêmio o valor de R$ $remu2.</p>";
        }else if($numero == $sorteio1[2].$sort2[2] && $tipo == 2){
            echo "<p style='color:blue;'>voce ganhou o 3° prêmio o valor de R$ $remu3.</p>";
        }else if($numero == $sorteio1[3].$sort2[3] && $tipo == 2){
            echo "<p style='color:blue;'>voce ganhou o 4° prêmio o valor de R$ $remu4.</p>";
        }else if($numero == $sorteio1[4].$sort2[4] && $tipo == 2){
            echo "<p style='color:blue;'>voce ganhou o 5° prêmio o valor de R$ $remu5.</p>";
        }else if($tipo = isset($_POST['tipo'])){
            echo "<p style='color:red;'>que pena você perdeu</p>";
        }

    ?>

</body>
</html>
