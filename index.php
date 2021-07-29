<?php
include('conexao.php');
include('logica-formula.php');
?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <title>Fórmula Bhaskara</title>
</head>

<style>
    body {
        background-color: lightgray;
    }
</style>

<body>

    <div class="container">
        <form name="formBaskara" method="post">
            <h1 class="text-center mb-5"> <i class="fas fa-calculator"></i> Calculo da Fórmula de Bhaskara </h1>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="valorA"> Valor A </label>
                    <input type="text" classe="form-control" name="valorA" placeholder="Digite o Número.">
                </div>

                <div class="form-group col-md-4">
                    <label for="valorB"> Valor B </label>
                    <input type="text" classe="form-control" name="valorB" placeholder="Digite o Número .">
                </div>

                <div class="form-group col-md-4">
                    <label for="valorC"> Valor C </label>
                    <input type="text" classe="form-control" name="valorC" placeholder="Digite o Número.">
                </div>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-dark"> Somar </button>
            </div>

            <?php
            if ($_POST) {
                bhaskara($conexao);
            }
            ?>

        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>