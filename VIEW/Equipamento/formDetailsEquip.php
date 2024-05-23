<?php
    include_once 'D:\xampp\htdocs\lpadsphpt12024\MODEL\Equipamento.php';
    include_once 'D:\xampp\htdocs\lpadsphpt12024\BLL\Equipamento.php';
    $id = $_GET['id']

    $bllEquip = new \BLL\Equipamento();
    $equipamento = $bllEquip->SelectById($id);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>Detalhes de Equipamentos</title>
</head>
<body>
    <div class="container red darken-3 red lighten-5-text">
        <div class="center green" >
            <h1>Editar Equipamento</h1>
        </div>
                <div class="input-field col s8">
                    <h5>ID: <?php echo $id; ?> </h5>
                    <input type="hidden" name="txtID" value=<?php echo $id; ?>>
                    <h5>Descrição: <?php echo $$equipamento->getDescricao(); ?> </h5>
                    <h5>Responsável: <?php echo $equipamento->getDepartamento(); ?> </h5>
                    <h5>Departamento: <?php echo $equipamento->getDepartamento(); ?> </h5>
                    <h5>Compra: <?php echo $equipamento->getCompra(); ?> </h5>
                </div>

                <div class="brown lighten-3 center col s12">
                    <br>
                    <button class="waves-effect waves-light btn orange" type="button" onclick="JavaScript:location.href='formEditEquipamento.php?id=' + '<?php echo $equip->getId();?>'">
                         <i class="material-icons">edit</i>
                    </button>
                    
                    <button class="waves-effect waves-light btn blue" type="button" onclick="JavaScript:location.href='lstEquipamento.php'">
                        <i class="material-icons">arrow_back</i>
                    </button>

                    <button class="waves-effect waves-light btn red" type="button" onclick="JavaScript: remover( <?php echo $equipamento->getId(); ?> )">
                        <i class="material-icons">delete</i>
                    </button>
                    <br>
                    <br>
                </div>
    </div>
</body>
</html>

<script>
    function remover(id) {
        if (confirm('Excluir o Equipamento ' + id + '?')) {
            location.href = 'remEquip.php?id=' + id;
        }
    }
</script>