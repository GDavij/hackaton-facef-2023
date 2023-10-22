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
      <img src="img/Imagem do WhatsApp de 2023-10-21 à(s) 15.22.06_9306b5d4.jpg" alt="Logo">
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
  
  <!--<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <img src="img/Imagem do WhatsApp de 2023-10-21 à(s) 15.22.06_9306b5d4.jpg" alt="Logo">
    </div>
  </nav>-->

  <!-- MAIN BACKGROUND -->
<div id="main-background">
  <button type="button" class="btn btn-success" onclick="abre_modal()">Descarte</button>
  <button type="button" class="btn btn-success">Doação</button>
</div>


<!-- MAIN CONTENT-->
<div id="main-content">
  <h1 id="how">Como funciona?</h1>
  <div id="main-description">
    <span>Doação</span><br>
    <p>Tem um sofá, uma geladeira, roupas que não usa mais ou algo que pode ser útil para alguém? Entre agora e doe para alguém que realmente precisa.</p>
    <span>Descarte</span><br>
    <p>Saiba os pontos de coleta de lixo especial mais próximo de você e faça uma ação voluntária e ecológica.</p>
    
  </div>
  
</div>
</div>

<div id="modal">
  <h1>Teste de modal</h1>
</div>

<script>
  function abre_modal(){
    let modal = document.getElementById('modal');
    let backdrop = document.getElementById('back-drop');

    modal.style.display = 'block';
    backdrop.classList.add('modal-fundo');
  }

</script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>
