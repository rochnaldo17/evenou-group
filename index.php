<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Bienvenue</title>
</head>

<body>
    <header>
        <a href="#" class="logo"><img src="img/EVENOU_GR.png"></a>
        <!--  <ul>
            <li><a href="">Acceuil</a></li>
            <li><a href="">Agro-business</a></li>
            <li><a href="">Matériel informatique</a></li>
            <li><a href="">Solaire</a></li>
            <li><a href="">Restauration</a></li>
        </ul> -->
    </header>

    <section class="banner">
        <div class="imgbox">
            <img src="img/elecsolaire.png" alt="" class="active">
            <img src="img/monétique.jpg" alt="">
            <img src="img/investissement_en_entreprise_definition.jpg" alt="">
            <img src="img/agrobussiness.jpg" alt="">
            <img src="img/restaurant.jpg" alt="">
        </div>
        <div class="welcome">
            <p>vous souhaite la bienvenue.<br></p>
        </div>
        <div class="contentbox">
            <div class="active">
                <h2>Matériel electrique et solaire</h2>
                <!-- <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Similique .</p> -->
                <a href="acceuil.php">Entrer</a>
            </div>
            <div>
                <h2>Monétique</h2>
                <!-- <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Similique .</p> -->
                <a href="acceuil.php">Entrer</a>
            </div>
            <div>
                <h2>Investissement</h2>
                <!-- <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Similique .</p> -->
                <a href="acceuil.php">Entrer</a>
            </div>
            <div>
                <h2>Agro-pastoral</h2>
                <!-- <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Similique .</p> -->
                <a href="acceuil.php">Entrer</a>
            </div>
            <div>
                <h2>Restauration</h2>
                <!-- <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Similique .</p> -->
                <a href="acceuil.php">Entrer</a>
            </div>
        </div>

        <ul class="controls">
            <li onclick="prevSlide();prevSlideText();"></li>
            <li onclick="nextSlide();nextSlideText();"></li>
        </ul>
    </section>

    <script type="text/javascript">
        const imgbox = document.querySelector('.imgbox');
        const slides = imgbox.getElementsByTagName('img');
        var i = 0;

        function nextSlide() {
            slides[i].classList.remove('active');
            i = (i + 1) % slides.length;
            slides[i].classList.add('active');
        }

        function prevSlide() {
            slides[i].classList.remove('active');
            i = (i - 1 + slides.length) % slides.length;
            slides[i].classList.add('active');
        }

        const contentbox = document.querySelector('.contentbox');
        const slidesText = contentbox.getElementsByTagName('div');
        var j = 0;

        function nextSlideText() {
            slidesText[j].classList.remove('active');
            j = (j + 1) % slidesText.length;
            slidesText[j].classList.add('active');
        }

        function prevSlideText() {
            slidesText[j].classList.remove('active');
            j = (j - 1 + slidesText.length) % slidesText.length;
            slidesText[j].classList.add('active');
        }

        setInterval(nextSlide, 5000);
        setInterval(nextSlideText, 5000);
    </script>
</body>

</html>