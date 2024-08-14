
<?php
include_once 'php_action/create.php';
?>

<!DOCTYPE html>
 <html>
   <head>
       <title>Cadastrar Clientes</title>
       <meta charset="UTF-8">
       <link rel="stylesheet" href="css/style.css">
       <link rel="stylesheet" href="css/styleInserts.css">
   </head>
   <body>
       <div class="main">
           <h2>Cadastro de Clientes</h2>

           <form class="insert" method="post" action="">
                <h3>Nome</h3>
                <input class="i" type="text" name="nome" id="nome" placeholder="Nome do cliente">

                <h3>Email</h3>
                <input class="i" name="email" id="email" type="text" placeholder="cliente@example.com">

                <h3>Cidade</h3>
                <input class="i" name="cidade" id="cidade" type="text" placeholder="Cidade do cliente">
            
                <button class="btn" type="submit" name="cadastrar">Adicionar Clientes</button>

                <a href="index.php">
                    <input class="btn" type="button" value="Listar Clientes">
                </a>
            </form>

        </div>
    </body>
</html>