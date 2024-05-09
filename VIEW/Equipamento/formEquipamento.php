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

    <title>Inserir Equipamentos</title>
</head>
<body>
    <div class="container red darken-3 red lighten-5-text">
        <div class="center green" >
            <h1>Inserir Equipamento</h1>
        </div>
        <div class="row">
            <form action="insEquip.php" method="POST" class="col s12">
                <div class="input-field col s6">
                <input placeholder="Informe a descrição do Equipamento" id="descricao" type="text" class="validate">
                <label for="first_name">Descrição</label>
                </div>
                <div class="input-field col s6">
                <input placeholder="Informe o responsável pelo Equipamento" id="responsavel" type="text" class="validate">
                <label for="first_name">Responsável</label>
                </div>
                <div class="input-field col s6">
                <input placeholder="Informe o Departamento" id="departamento" type="text" class="validate">
                <label for="first_name">Departamento</label>
                </div>
                <div class="input-field col s6">
                <input placeholder="Informe a data da Compra" id="Compra" type="text" class="validate">
                <label for="first_name">Data da Compra</label>
                </div>
                <div class="brown lighten-3 center col s12">
                    <br>
                    <button class="waves-effect waves-light btn green" type="submit">
                        Gravar <i class="material-icons">save</i>
                    </button>
                    <button class="waves-effect waves-light btn red" type="reset">
                        Limpar <i class="material-icons">clear_all</i>
                    </button>
                    <button class="waves-effect waves-light btn blue" type="button" onclick="JavaScript:location.href='lstoperador2.php'">
                        Voltar <i class="material-icons">arrow_back</i>
                    </button>
                    <br>
                    <br>
                </div>
            </form>
        </div>
    </div>
</body>
</html>