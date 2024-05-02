<?php
   include_once 'C:\xampp\htdocs\lpadst1php2024\DAL\Software.php';
   use \DAL\Software;
   
   $dalSftw = new \DAL\Software();
   $lstSftw = $dalSftw->Select(); 

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Departamentos usando DAL</title>
</head>
<body>
    <h1>Listar Softwares</h1>
    <table class="highlight">
        <tr>
            <th>ID</th>
            <th>Descrição</th>
            <th>Fabricante</th>
            <th>Tipo</th>
            <th>Valor</th>
            <th>Quantidade de Cópias</th>
        </tr>
        
        <?php foreach($lstSftw as $sftw) { ?>
           <tr>
              <td><?php echo $sftw->getId(); ?></td>
              <td><?php echo $sftw->getDescricao();?></td>
              <td><?php echo $sftw->getFabricante();?></td>
              <td><?php echo $sftw->getTipo();?></td>
              <td><?php echo $sftw->getValor();?></td>
              <td><?php echo $sftw->getQtdCopias();?></td>
           </tr>
        <?php } ?>

    </table>
</body>
</html>