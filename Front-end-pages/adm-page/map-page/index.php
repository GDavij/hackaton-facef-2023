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
        <img src="../img/Imagem do WhatsApp de 2023-10-22 à(s) 02.50.30_dd7c2095.jpg" alt="">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          </ul>
          <a href="../login-page/index.php" id="teste" class="btn btn-success">Login/Logout</a></button></a>
        </div>
      </div>
    </nav>
  </div>
  <main>
    <div id="map-div">
      <img src="../img/Imagem do WhatsApp de 2023-10-22 à(s) 02.24.55_f591e86b.jpg" alt="" id="city-photo">
      <button type="button" class="btn btn-success" id="bottom-1" onclick="atualiza(1)"></button>
      <button type="button" class="btn btn-success" id="bottom-2" onclick="atualiza(2)"></button>
      <button type="button" class="btn btn-success" id="bottom-3" onclick="atualiza(3)"></button>
      <button type="button" class="btn btn-success" id="bottom-4" onclick="atualiza(4)"></butt
    </div>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

  <script>
    function atualiza(id){
      let botao = document.getElementById(`bottom-${id}`)

      botao.style.backgroundColor = "red";
    }


  </script>



</body>