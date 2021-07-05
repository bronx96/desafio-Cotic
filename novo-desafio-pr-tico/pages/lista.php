<html lang="en">
  <head>
    <meta charset="UTF-8" /> <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <meta http-equiv="X-UA-Compatible" content="ie=edge" />
      <title>The Boys 3 - Formulário</title>
      <link
              rel="stylesheet"
              href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
              integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
              crossorigin="anonymous"
      />
      
    <link rel="stylesheet" href="../css/main.css" />
  </head>
  <body class="main-bg">
  <?php
  
  $hostname = "localhost"; //criando conexão com o banco de dados
  $database = "desafio";
  $usuario = "root";
  $senha = "";
  $com = mysqli_connect($hostname, $usuario, $senha, $database);

  $data = "select * from personagens";
  $dados= $com->query($data) or die($com->error);
  $total = mysqli_num_rows($dados);
  ?>
  <nav class="navbar navbar-expand-lg navbar-light bg-light transparent">
      <a class="navbar-brand" href="#"
      ><img src="../assets/logo_cotic.fw.png" width="256" height="64" alt=""
          /></a>
      <button
              class="navbar-toggler"
              type="button"
              data-toggle="collapse"
              data-target="#conteudoNavbarSuportado"
              aria-controls="conteudoNavbarSuportado"
              aria-expanded="false"
              aria-label="Alterna navegação"
      >
          <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
          <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                  <a class="nav-link" href="index.html"
                  >inicio <span class="sr-only">(página atual)</span></a>
              </li>
              <li class="nav-item active">
                  <a class="nav-link" href="formulario.html">
                      Formulário <span class="sr-only">(página atual)</span>
                  </a>
              </li>
              <li class="nav-item active">
                  <a class="nav-link" href="lista.html">
                      Lista <span class="sr-only">(página atual)</span>
                  </a>
              </li>
          </ul>
      </div>
  </nav>
  <section>
      <div>
          <table>
              <tr id='title'>
                  <th>Nome</th>
                  <th>Idade</th>
                  <th>Intérprete</th>
                  <th>Alinhamento</th>
                  <th>Biografia</th>
              </tr>
              <?php  while($linha = $dados->fetch_assoc()){ 
                  if($linha['alinhamento']== 'the boys'){?>
              <tr id='the'>
                  <td><?php echo $linha['nome']; ?></td>
                  <td><?php echo $linha['idade']; ?></td>
                  <td><?php echo $linha['interprete']; ?></td>
                  <td><?php echo $linha['alinhamento']; ?></td>
                  <td><?php echo $linha['biografia']; ?></td>
              </tr>
              <?php } 
              else{?>
              <tr id='super'>
              <td><?php echo $linha['nome']; ?></td>
                  <td><?php echo $linha['idade']; ?></td>
                  <td><?php echo $linha['interprete']; ?></td>
                  <td><?php echo $linha['alinhamento']; ?></td>
                  <td><?php echo $linha['biografia']; ?></td>
                  <?php }}?>
          </table>
      </div>
  </section>
  <script
          src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
          integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
          crossorigin="anonymous"
  ></script>
  <script
          src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
          integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
          crossorigin="anonymous"
  ></script>
  <script
          src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
          integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
          crossorigin="anonymous"
  ></script>
  </body>
</html>
