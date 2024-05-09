<?php
   include_once 'D:\xampp\htdocs\lpadsphpt12024\BLL\Equipamento.php';
   use \BLL\Equipamento;
   
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
    <title>Listar Equipamento usando DAL</title>
</head>
<body>
    <h1>Listar Equipamento</h1>
    <table class="highlight">
        <tr>
            <th>ID</th>
            <th>Descrição</th>
            <th>Responsável</th>
            <th>Departamento</th>
            <th>Compra</th>
        </tr>
        
        <?php foreach($lstEquip as $equip) { ?>
           <tr>
              <td><?php echo $equip->getId(); ?></td>
              <td><?php echo $equip->getDescricao();?></td>
              <td><?php echo $equip->getResponsavel();?></td>
              <td><?php echo $equip->getDepartamento();?></td>
              <td><?php echo $equip->getCompra();?></td>
           </tr>
        <?php } ?>

    </table>
</body>
</html>