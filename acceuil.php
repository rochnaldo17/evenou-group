<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Acceuil.css">
    <title>Document</title>
</head>
<body>

<div class="loader">
<div class="spinner">
  <div></div>
  <div></div>
  <div></div>
  <div></div>
  <div></div>
  <div></div>
</div>
</div>
<style>
.spinner {
   width: 44.8px;
   height: 44.8px;
   animation: spinner-y0fdc1 2s infinite ease;
   transform-style: preserve-3d;
}

.spinner > div {
   background-color: rgba(71,75,255,0.2);
   height: 100%;
   position: absolute;
   width: 100%;
   border: 2.2px solid #474bff;
}

.spinner div:nth-of-type(1) {
   transform: translateZ(-22.4px) rotateY(180deg);
}

.spinner div:nth-of-type(2) {
   transform: rotateY(-270deg) translateX(50%);
   transform-origin: top right;
}

.spinner div:nth-of-type(3) {
   transform: rotateY(270deg) translateX(-50%);
   transform-origin: center left;
}

.spinner div:nth-of-type(4) {
   transform: rotateX(90deg) translateY(-50%);
   transform-origin: top center;
}

.spinner div:nth-of-type(5) {
   transform: rotateX(-90deg) translateY(50%);
   transform-origin: bottom center;
}

.spinner div:nth-of-type(6) {
   transform: translateZ(22.4px);
}

@keyframes spinner-y0fdc1 {
   0% {
      transform: rotate(45deg) rotateX(-25deg) rotateY(25deg);
   }

   50% {
      transform: rotate(45deg) rotateX(-385deg) rotateY(25deg);
   }

   100% {
      transform: rotate(45deg) rotateX(-385deg) rotateY(385deg);
   }
}
</style>

<script>
   function showContent(){
    document.querySelector('.loader').classList.add('hidden');
   }

setTimeout(showContent,3000);

</script>

<div class="main">
  <h1><img src="img/EVENOU_GR.png" alt=""></h1>
  <ul class="cards">
    <li class="cards_item">
      <div class="card">
        <div class="card_image"><img src="img/EVENOU_energie.png"></div>
        <div class="card_content">
          <h2 class="card_title">L'energie pour l'avenir</h2>
          <!-- <p class="card_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p> -->
          <a href="elecsolaire.php"><button class="btn card_btn">Plus</button></a>
        </div>
      </div>
    </li>
    <li class="cards_item">
      <div class="card">
        <div class="card_image"><img src="img/EVENOU_agro.png"></div>
        <div class="card_content">
          <h2 class="card_title">Notre objectif: la sécurité alimentaire</h2>
          <!-- <p class="card_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p> -->
          <a href="agro.php"><button class="btn card_btn">Plus</button></a>
        </div>
      </div>
    </li>
    <li class="cards_item">
      <div class="card">
        <div class="card_image"><img src="img/EVENOU_invest.png"></div>
        <div class="card_content">
          <h2 class="card_title">Planifions ensemble votre avenir</h2>
          <!-- <p class="card_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p> -->
          <a href=""><button class="btn card_btn">Plus</button></a>
        </div>
      </div>
    </li>
    <li class="cards_item">
      <div class="card">
        <div class="card_image"><img src="img/EVENOU_money.png"></div>
        <div class="card_content">
          <h2 class="card_title">Argent en sécurité, vie en sécurité</h2>
          <!-- <p class="card_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p> -->
          <button class="btn card_btn">Plus</button>
        </div>
      </div>
    </li>
    <li class="cards_item">
      <div class="card">
        <div class="card_image"><img src="img/EVENOU_resto.png"></div>
        <div class="card_content">
          <h2 class="card_title">Délectez vous de chaque bouchée</h2>
          <!-- <p class="card_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p> -->
          <a href="resto.php"><button class="btn card_btn">Plus</button></a>
        </div>
      </div>
    </li>
    <!-- <li class="cards_item">
      <div class="card">
        <div class="card_image"><img src=""></div>
        <div class="card_content">
          <h2 class="card_title">Card Grid Layout</h2>
          <p class="card_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p>
          <button class="btn card_btn">Plus</button>
        </div>
      </div>
    </li> -->
  </ul>
</div>
</body>
</html>