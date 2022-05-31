<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Museu dos Shibas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body style="background-color: #F5EDDC;">

<style>
  @import url('https://fonts.googleapis.com/css2?family=Macondo&family=Roboto:wght@300&display=swap');
  @import url('https://fonts.googleapis.com/css2?family=Tiro+Devanagari+Sanskrit&display=swap');
</style>


<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ url('./') }}">
      <img src="src/communityIcon_f6gfuq10ghe61.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
      Museu Online de Preservação dos Shibas
    </a>
    
    <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="display: flex; flex-direction: row; ">
        <li class="nav-item" style="text-decoration: none;">
          <a class="nav-link active" aria-current="page" href="{{ url('./') }}" style="text-decoration: none;">Home</a>
        </li>
        <li class="nav-item" style="margin-left: 20px; margin-top: 8px;">
        <a href="{{ url('./about') }}" style="text-decoration: none; color: #000; align-itens: center; justify-content: center;">About</a>
        </li>
        <li class="nav-item" style="margin-left: 20px; margin-top: 8px;">
        <a href="{{ url('./contact') }}" style="text-decoration: none; color: #000; align-itens: center; justify-content: center;">Contact</a>
        </li>
</ul>
  </div>
</nav>

    <h1 style="text-align: center; justify-content: center; font-family: 'Macondo', cursive; margin-top:50px; font-size: 5rem;">Sobre Nós</h1>

    <br>

    <h2 style="text-align: center; justify-content: center; font-family: 'Roboto', sans-serif; margin-top:50px; font-size:3rem; margin-bottom: 50px">Criadores</h2>

    <br>

    <div class="container">

  <div class="row marcador align-items-center">
    <div class="col mx-auto text-center">
      <img class="img-responsive" src="{{ asset('./src/floppafino.jpg') }}" style="text-align: center; justify-content: center; border-style: dashed; border-radius: 30px;">
    </div>
  </div>

</div>


    <h3 style="padding: 50px 50px 50px 10px; text-align: center; justify-content: center; align-itens: center;">Floppafino Hernandez Gutierrez</h3>

    <p style="text-align: center; justify-content: center; font-family: 'Tiro Devanagari Sanskrit', serif; font-size: 1.5rem; margin-bottom: 50px">Nasceu em Nice, França, em 1969. Mudou-se para Málaga na Espanha, com 12
  começou a praticar empreendedorismo, vendendo balas no semáforo para sustentar sua familia, depois começou a vender rádios para pagar sua escola, foi nela que conheceu shinba.
 O seu amor por shibas surgiu nas ruas de Nice, onde ele dividia comida juntop aos shibas das ruas, pois não tinha dinheiro para comprar, junto com shinba começara esse projeto
e ficaram ricos.</p>

    <br>

    <div class="container">

<div class="row marcador align-items-center">
  <div class="col mx-auto text-center">
    <img class="img-responsive" src="./src/shinba.png" style="text-align: center; justify-content: center; border: 30px; border-style: double; border-radius: 30px;">
  </div>
</div>

</div>

    <h3 style="padding: 50px 50px 50px 10px;text-align: center; justify-content: center;">Presidente Shinba</h3>

    <p></p>

    <br>

    <h2 style="text-align: center; justify-content: center; font-family: 'Roboto', sans-serif; margin-top:50px; font-size:3rem; margin-bottom: 50px">História</h2>

    <p style="text-align: center; justify-content: center; font-family: 'Tiro Devanagari Sanskrit', serif; font-size: 1.5rem; margin-bottom: 50px;">
        Criada para ajudar a perservar a história e imagens dos maravilhosos cachorros shiba-inu para preservar 
        a espécie para as futuras gerações da humanidade, para caso a humanidade e os shibas forem extintos
        a memória deles nao seja esquecida
    </p>
</body>
</html>