

<?php
$id = $_POST["tipo_coleta"];
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <title>MAIN PAGE</title>
  <style>
    :root 
  {
    --primary: #ffffff;
    --secondary: #23AD3E;
    --tertiary: #000000;
    --font-tittle: 'Arimo', sans-serif;
    --font-subtittle: 'sans-serif';
    --font-size-tittle: 6vh;
    --font-size-subtittle: 2.3vh;
  }
  </style>
</head>
<body>
<div id="back-drop">
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <img src="../main-page/img/new-logo.jpg" alt="" style="height: 100px">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
          </li>
          <li class="nav-item">
          </li>

          <li class="nav-item">
          </li>
        </ul>
        <a href="../login-page/index.php" id="teste" class="btn btn-success">Login/Logout</a></button></a>
      </div>
    </div>
  </nav>
      <div class="flex flex-column  p-2">
            <h3 class="mb-4 shadow p-4">Localidades</h3>
          <?php if($id == 1){ ?>
          <div class="flex flex-column">
              <div class="col-12  gap-2  bg-light-subtle shadow p-4 mb-4   justify-content-start align-items-start flex-shrink-1  flex-grow-0 ">
                  <span class=" ">  
                      <div class="flex-row col-12 flex-grow-0  flex-shrink-1  ">
                          <span class="text-white  bg-success  px-2 py-1 rounded-4 ">1°</span>
                          <span class="border-bottom  border-success ">Endereço 1</span>
                        </div>
                        <div class="text-secondary">
                          <p>ECOPONTO DO CITY PETRÓPOLIS</p>
                        <p>Avenida São Pedro, nº 1200, City Petrópolis, CEP 14.409-593, Franca/SP</p>
                        <p>Segunda a Sábado das 07h às 19h e Domingo das 08h às 14h</p>
                    </div>
                </span>
              </div>
          </div>
          <?php } if($id == 2){ ?>
          <div class="flex flex-column">
              <div class="col-12  gap-2  bg-light-subtle shadow p-4 mb-4   justify-content-start align-items-start flex-shrink-1  flex-grow-0 ">
                  <span class=" ">  
                      <div class="flex-row col-12 flex-grow-0  flex-shrink-1  ">
                          <span class="text-white  bg-success  px-2 py-1 rounded-4 ">1°</span>
                          <span class="border-bottom  border-success ">Ponto 1</span>
                        </div>
                        <div class="text-secondary">
                          <p>ATERRO DE GALHOS</p>
                        <p>Av. Sidney Romeu de Andrade</p>
                        <p>O resíduo deverá ser levado pelo munícipe para o Aterro de Galhos</p>
                        <p>Segunda a sexta-feira das 8h às 16h30</p>
                    </div>
                </span>
              </div>
          </div>
          <?php } if($id == 3){ ?>
          <div class="flex flex-column">
              <div class="col-12  gap-2  bg-light-subtle shadow p-4 mb-4   justify-content-start align-items-start flex-shrink-1  flex-grow-0 ">
                  <span class=" ">  
                      <div class="flex-row col-12 flex-grow-0  flex-shrink-1  ">
                          <span class="text-white  bg-success  px-2 py-1 rounded-4 ">1°</span>
                          <span class="border-bottom  border-success ">Endereço 1</span>
                        </div>
                        <div class="text-secondary">
                        <p>ECOPONTO DO CITY PETRÓPOLIS</p>
                        <p>Avenida São Pedro, nº 1200, City Petrópolis, CEP 14.409-593, Franca/SP</p>
                    </div>
                </span>
              </div>
          </div>
          <?php } if($id == 4){ ?>
          <div class="flex flex-column">
              <div class="col-12  gap-2  bg-light-subtle shadow p-4 mb-4   justify-content-start align-items-start flex-shrink-1  flex-grow-0 ">
                  <span class=" ">  
                      <div class="flex-row col-12 flex-grow-0  flex-shrink-1  ">
                          <span class="text-white  bg-success  px-2 py-1 rounded-4 ">1°</span>
                          <span class="border-bottom  border-success ">Endereço 1</span>
                        </div>
                        <div class="text-secondary">
                        <p>AGENDAMENTO</p>
                        <p>O munícipe deverá agendar a coleta ligando na Secretaria Municipal de Meio Ambiente</p>
                    </div>
                </span>
              </div>
          </div>
          <?php } ?>
        </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>