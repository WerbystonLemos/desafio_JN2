<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <!-- CSS -->
    <link href="{{asset('./css/index.css')}}" rel="stylesheet">

</head>
<body>
        
    <div id="containerGeral" class="container-fluid">
        <div class="row">

            <div id="containerHeader" class="offset-md-1 col-md-10">
                <button class="btn btn-sm btn-success" title="Adicionar" onclick="mostrarModalAddUser()">Adicionar</button>
            </div>
            
            <div id="containerHeader" class="offset-md-1 col-md-10">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Nome</th>
                            <th>Telefone</th>
                            <th>CPF</th>
                            <th>Placa</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody id="bodyTable"></tbody>
                </table>
            </div>

        </div>
    </div>

    <?php include('./components/modal.php') ?>
    
    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script src="./js/main.js?a=<?php echo rand()?>" type="text/javascript"></script>

</body>
</html>
