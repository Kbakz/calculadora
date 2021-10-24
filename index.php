<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Kevin Freire">
    <title>Calculadora...</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css"> 
</head>
<body>
    <form method="post">
        <div class="visor">
            <p><i class="fas fa-calculator"></i> Calcuadora virtual</p>
            <input type="text" id="visor-op">
            <p id="visor-res"></p>
        </div>
        <div class="teclado">
            <div class="numbers">
            <?php for($i = 7; $i < 10; $i++){?>
                <input type="submit" class="exp" name="numero" value="<?php echo $i ?>">
            <?php }?>
            <?php for($i = 4; $i < 7; $i++){?>
                <input type="submit" class="exp" name="numero" value="<?php echo $i ?>">
            <?php }?>
            <?php for($i = 1; $i < 4; $i++){?>
                <input type="submit" class="exp" name="numero" value="<?php echo $i ?>">
            <?php }?>
            <input type="submit" class="exp" name="numero" value="0">
            </div><!--numbers-->
            <div class="expressoes">
                <button name="calc" class="exp" value="-"><i class="fas fa-minus"></i></button>
                <button name="calc" class="exp" value="+"><i class="fas fa-plus"></i></button>
                <button name="calc" class="exp" value="." style="font-weight:bold">,</button>
                <button name="ce" class="exp" style="font-weight:bold">CE</button>
            </div><!--expressoes-->
            <div class="expressoes">
            <button name="calc" class="exp" value="*"><i class="fas fa-times"></i></button>
                <button name="calc" class="exp" value="/"><i class="fas fa-divide"></i></button>
                <button name="apagar" class="exp"><i class="fas fa-backspace"></i></button>
                <button name="result" class="exp"><i class="fas fa-equals"></i></button>
            </div><!--expressoes-->
        </div>
    </form>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://kit.fontawesome.com/169263c84a.js" crossorigin="anonymous" defer></script>
    <script src="main.js"></script>
</body>
</html>