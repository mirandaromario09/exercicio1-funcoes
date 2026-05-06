<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php     

    $cliente_vip = false;
    $valor_compra = 320;
    $frete = 30;
    $cupom_ativo = true;
    $primeira_compra = true;
   


    if ($cliente_vip == true){
        $frete_final = 0;
    } else if ($valor_compra >= 200){
        $frete_final = $frete/2;
    } else {
        $frete_final = $frete;
    }

    if ($cupom_ativo == true && $primeira_compra == true) {
        $valor_final = $valor_compra * 0.8;
    } else if ($cupom_ativo && $valor_compra >= 300){
        $valor_final = $valor_compra * 0.9;
    } else{
        $valor_final = $valor_compra;
    }

    ?>

    <p>Cliente é vip?
        <?php
            if ($cliente_vip == true){
                echo " Sim";
            } else {
                echo " Não";
            }
        ?>
    </p>
     <p>Cupom esta ativo?
        <?php
            if ($cupom_ativo == true){
                echo "Sim";
            } else {
                echo "Não";
            }
        ?>
    </p>
    <p>É a primeira compra?
        <?php
            if ($primeira_compra == true){
                echo "Sim";
            } else {
                echo "Não";
            }
        ?>
    </p>
    <p>Valor original da compra: <?php echo $valor_compra; ?></p>
    <p>Valor da compra com desconto: <?php echo $valor_final; ?></p>
    <p>Valor original do frete: <?php echo $frete; ?></p>
    <p>Valor final do frete: <?php echo $frete_final; ?></p>
    <p>Valor total do pedido: <?php echo $valor_final + $frete_final; ?></p>

    <p>Houve desconto na compra?
        <?php
            if ($valor_final != $valor_compra){
                echo "Sim";
            } else {
                echo "Não";
            }
        ?>
    </p>
    <p>Houve desconto no frete? 
        <?php
            if ($frete != $frete_final){
                echo "Sim";
            } else {
                echo "Não";
            }
        ?>
    </p>


</body>
</html>