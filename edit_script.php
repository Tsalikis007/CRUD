<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Alteração de Cadastro</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <?php
            include "conexao.php";

            $id = $_POST['id'];
            $nome = $_POST['nome'];
            $endereco = $_POST['endereco'];
            $telefone = $_POST['telefone'];
            $email = $_POST['email'];
            $data_nascimento = $_POST['data_nascimento'];

            //$sql = "INSERT INTO `pessoas` (`nome`, `endereco`, `telefone`, `email`, `data_nascimento`) VALUES ('$nome','$endereco','$telefone','$email','$data_nascimento')";
            $sql = "UPDATE `pessoas` SET `nome` = '$nome', `endereco` = '$endereco', `telefone` = '$telefone', `email` = '$email', `data_nascimento` = '$data_nascimento' WHERE `cod_pessoa` = $id";
            
            
            if(mysqli_query($conn, $sql)){
                mensagem("$nome alterado com sucesso!", 'success');
            } else
            mensagem("$nome não alterado cadastrado!", 'danger');
            ?>
            <hr>
            <a href="cadastro.php" class="btn-primary">Voltar</a>
        </div>
    </div>

<!-- OPTIONAL JavaScript-->
 <!-- jQuery first, then Popper.js, then Bootstrap JS-->

 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>