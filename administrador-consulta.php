

<!-- site -->

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;500;700;900&display=swap" rel="stylesheet">      
        <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:opsz,wght@6..12,1000&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="./css/header-style.css">
        <link rel="stylesheet" href="./css/administrador-consulta.css">
        <link rel="shortcut icon" type="imagex/svg" href="./img/felupudos-shotcut.svg">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <title>Felpudos | Administrador</title>
    </head>
<body>

    <header>
        <nav class="nav-header">
            <div class="logo">
                <a href="#">
                    <img src="./img/logo-icon.svg" alt="Logo Felpudos">
                </a>
            </div>

            <div class="desktop-menu">
                <ul>
                    <li class="desktop-menu-item"><a href="administrador-adocao.html" id="para-adotar">Adoção</a></li>
                    <li class="desktop-menu-item"><a href="#" id="consulta">Consultas</a></li>
                </ul>
            </div>

            <div class="mobile-menu-icon">
                <button onclick="menuShow()"><img src="./img/menu-icon.svg" alt="Menu" class="icon"></button>
            </div>

            <div class="acess">
                    <ul>
                        <a href="#"><button>Administrador</button></a>
                    </ul>
            </div>

        </nav>

    </header>
    
    <main>
      <div class="container">
        <h1>Consultas</h1>

        <form method="POST">
          <div class="form-input">
            <input type="text" name="nome" placeholder="Nome do dono">
          </div>
        
          <button type="submit" value="Pesquisar" class="btn-pesquisar">Pesquisar</button>
        </form>

        <table>
          <thead>
            <tr>
              <th>ID</th>
              <th>Nome do Dono</th>
              <th>Email</th>
              <th>Celular</th>
              <th>CPF</th>
              <th>Raça</th>
              <th>Porte</th>
              <th>Espécie</th>
              <th>Sexo</th>
              <th>Descrição</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($produtos as $produto) { ?>
              <tr>
                <td><?php echo $produto["ID"]; ?></td>
                <td><?php echo $produto["email"]; ?></td>
                <td><?php echo $produto["celular"]; ?></td>
                <td><?php echo $produto["cpf"]; ?></td>
                <td><?php echo $produto["raca"]; ?></td>
                <td><?php echo $produto["porte"]; ?></td>
                <td><?php echo $produto["especie"]; ?></td>
                <td><?php echo $produto["sexoanimal"]; ?></td>
                <td><?php echo $produto["descricao"]; ?></td>
                <td><a href='alterar.php?id=<?php echo $produto["ID"]; ?>'><button>Alterar</button></a>
                <a href='remover_produto.php?id=<?php echo $produto["ID"]; ?>'><button>Remover</button></a></td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </main>
</body>
</html>
