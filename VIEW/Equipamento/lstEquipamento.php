<?php
   include_once 'D:\xampp\htdocs\lpadsphpt12024\BLL\Equipamento.php';
   use BLL\Equipamento;
   
   $bllEquip = new \BLL\Equipamento();
   $lstEquip = $bllEquip->Select();

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
            
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Equipamento</title>
</head>
<body>
    <?php include_once '../menu.php'; ?>

    <h1>Listar Equipamento</h1>

    <div>
    <a class="btn-floating btn-large waves-effect waves-light green"><i class="material-icons" onclick="JavaScript:location.href='formEquipamento.php'">add</i></a>

    <a class="btn-floating btn-large waves-effect waves-light blue"><i class="material-icons" onclick="JavaScript:location.href='../menu.php'">arrow_back</i></a>
    </div>

    <table class="highlight">
        <tr>
            <th>ID</th>
            <th>Descrição</th>
            <th>Responsável</th>
            <th>Departamento</th>
            <th>Compra</th>
            <th>Operações</th>
        </tr>
        
        <?php foreach($lstEquip as $equip) { ?>
           <tr>
              <td><?php echo $equip->getId(); ?></td>
              <td><?php echo $equip->getDescricao();?></td>
              <td><?php echo $equip->getResponsavel();?></td>
              <td><?php echo $equip->getDepartamento();?></td>
              <td><?php echo $equip->getCompra();?></td>
              <td> 
                <a class="btn-floating btn-small waves-effect waves-light orange"><i class="material-icons" onclick="JavaScript:location.href='formEditEquipamento.php?id=' + '<?php echo $equip->getId();?>'" >edit</i></a>

                <a class="btn-floating btn-small waves-effect waves-light blue"><i class="material-icons" onclick="JavaScript:location.href='formEditEquipamento.php?id=' + '<?php echo $equip->getId();?>'" >details</i></a>

                <a class="waves-effect waves-light btn red" type="button" onclick="JavaScript: remover( <?php echo $equip->getId(); ?> )"><i class="material-icons">delete</i></a>
              </td>
           </tr>
        <?php } ?>

    </table>
</body>
</html>

<script>
    function remover(id) {
        if (confirm('Excluir o Equipamento ' + id + '?')) {
            location.href = 'remEquip.php?id=' + id;
        }
    }
</script>