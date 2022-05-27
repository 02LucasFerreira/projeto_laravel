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
</style>


<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="src/communityIcon_f6gfuq10ghe61.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
      Museu Online de Preservação dos Shibas
    </a>
    
    <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="display: flex; flex-direction: row; ">
        <li class="nav-item" style="text-decoration: none;">
          <a class="nav-link active" aria-current="page" href="{{ url('./') }}" style="text-decoration: none;">Home</a>
        </li>
        <li class="nav-item" style="margin-left: 20px;">
        <a href="{{ url('./about') }}" style="text-decoration: none; color: #000; align-itens: center; justify-content: center;">About</a>
        </li>
        <li class="nav-item" style="margin-left: 20px;">
        <a href="{{ url('./contact') }}" style="text-decoration: none; color: #000; align-itens: center; justify-content: center;">Contact</a>
        </li>
</ul>
  </div>
</nav>

    <div class="contato">
        
        <h1  style="text-align: center; justify-content: center; font-family: 'Macondo', cursive; margin-top:50px; font-size: 5rem;">Entre em contato conosco!</h1>
        <div class="itens" style="display: flex; flex-direction: row; justify-content: center; align-itens: center; margin-top: 40px;">
        <div class="zap">
    <div class="card" style="width: 100px;  margin-right: 100px; margin-top: 40px;">
  <img src="./src/zap.png" class="card-img-top" style="height: 100px; width:125px;">
  <div class="card-body">
    <p class="card-text">Zaponga</p>
  </div>
</div>
<div class="card" style="width: 100px;  margin-right: 100px; margin-top: 40px;">
  <img src="./src/facebook.png" class="card-img-top" style="height: 75px; width:75px;">
  <div class="card-body">
    <p class="card-text">Facebook</p>
  </div>
</div>
<div class="card" style="width: 100px;  margin-right: 100px; margin-top: 40px;">
  <img src="./src/wechat.png" class="card-img-top" style="height: 75px; width:100px;">
  <div class="card-body">
    <p class="card-text">WeChat</p>
  </div>
</div>
<div class="card" style="width: 100px;  margin-right: 100px; margin-top: 40px;">
  <img src="./src/vk.png" class="card-img-top" style="height: 100px; width:100px;">
  <div class="card-body">
    <p class="card-text">VK</p>
  </div>
</div>
<div class="card" style="width: 100px;  margin-right: 100px; margin-top: 40px;">
  <img src="./src/chan.png" class="card-img-top" style="height: 100px; width:95px;">
  <div class="card-body">
    <p class="card-text">4chan</p>
  </div>
</div>
    </div>
    </div>
    </div>

</body>
</html>