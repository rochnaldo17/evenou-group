<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="energie.css">
    <link rel="stylesheet" href="aos-by-red.css">
     <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  </head>
    <title>Electricité/Solaire</title>
</head>

<body>
    <?php
    include("component/navbar-energie.php");
    ?>

<section class="banner" id="section1">
        <div class="imgbox">
            <img src="img/elecsolaire.png" alt="" class="active">
        </div>
        <div class="welcome">
            <p>vente de matériel electrique et solaire</p>
        </div>
   <!--     
<div class="contentbox">
            <div class="active">
                <h2><a href="#description1">Agriculture</a></h2>

            </div>
            <div>
                <h2>Elevage</h2>
            </div>
            <div>
                <h2><a href="#description3">Engrais</a></h2>
               
                
            </div>
            <div>
                <h2>Pisciculture</h2>
                
                
            </div>
            <div>
                <h2><a href="#description2">Formations</a></h2>
                
                
            </div>
        </div>

        <ul class="controls">
            <li onclick="prevSlide();prevSlideText();"></li>
            <li onclick="nextSlide();nextSlideText();"></li>
        </ul>-->

        <a href="#description1" id="scroll"><img src="img/chevron-fleche-vers-le-bas.png" alt=""></a>
    </section>
<!--
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
    </script> -->

    <div class="description2" id="description1">
        <H2>Du matériel électrique de qualité</H2>
        <div class="content2">
        <img src="img/electricite.png" alt="" class="bio2 elec" data-aos="zoom-in">
         <p>Nous sommes à votre disposition pour l'acquisition de tout matériel electrique. Des ampoules aux onduleurs en passant par les cables electriques nous vous fournissons tout.</p>
        
    </div>
    </div>

    <div class="offers">
        <H2>Notre catalogue</H2>
        <div class="repeter" data-aos="fade-right">
            <div class="card" >
                <div class="images">
                        <img src="img/IMG-20220928-WA0075.jpg" alt="">
                </div>
                <div class="desc">
                    <h3>Ampoules leds bulbes</h3>
                    <p><ul>
                        <li>Prix: 500FCFA/u</li>
                        <li>5W</li>
                        <li>AC185-285V</li>
                        <li><a href="">Commander</a></li>
                        
                    </ul></p>
                </div>
            </div>
            <div class="card">
                <div class="images">
                    <img src="img/IMG-20220928-WA0080 1.jpg" alt="">
                </div>
                <div class="desc">
                <h3>Ampoules leds tubes</h3>
                    <p><ul>
                        <li>Prix: 500FCFA/u</li>
                        <li>18W</li>
                        <li>AC185-265V</li>
                        <li><a href="">Commander</a></li>
                </div>
            </div>
            <div class="card">
                <div class="images">
                    <img src="img/IMG-20220928-WA0081.jpg" alt="">
                </div>
                <div class="desc">
                <h3>Regulateurs electriques</h3>
                    <p><ul>
                        <li>Prix: 500FCFA/kg</li>
                        <!--<li>Localité: Kpalime</li>
                        <li>Disponible: 5t</li>
                        <li><a href="">Commander</a></li>-->
                        <li><a href="">Commander</a></li>
                </div>
            </div>
            <div class="card">
                <div class="images">
                    <img src="img/IMG-20220928-WA0084.jpg" alt="">
                </div>
                <div class="desc">
                <h3>Flood lights Led</h3>
                    <p><ul>
                        <li>Prix: 500FCFA/u</li>
                        <li>300W</li>
                        <li>AC185-265V</li>
                        <li><a href="">Commander</a></li>
                </div>
            </div>
        </div>
    </div>
<!--
    <div class="description2" id="description2">
        <H2>Des formations qualifiantes</H2>
        <div class="content2">
        <img src="img/formation3.png" alt="" class="bio2 chapeau" data-aos="zoom-in">
         <p> Conscients de ne pas pouvoir relever à nous seuls le défi de la sécurité alimentaire, nous proposons des formations certifiés dans plusieurs domaines liés à l'agro-pastoral. Vous etes jeune, dynamique et vous souhaitez vous lancer dans un domaine lié à l'agro pastoral?
            Contactez nous pour que nous puissons vous aider à atteindre vos objectifs.
         </p>
        </div>
        </div>
    
    <div class="offers">
        <H2>Les filières</H2>
        <div class="repeter" data-aos="fade-right">
            <div class="card">
                <div class="images">
                        <img src="img/elevage.webp" alt="">
                </div>
                <div class="desc">
                    <h3>Elevage</h3>
                    <p><ul>
                        <li>Prix: 50000/mois</li>
                        <li>Durée: 6mois</li>
                        <li><a href="">Participer</a></li>
                    </ul></p>
                </div>
            </div>
            <div class="card">
                <div class="images">
                    <img src="img/agri.webp" alt="">
                </div>
                <div class="desc">
                <h3>Agriculture</h3>
                    <p><ul>
                        <li>Prix: 50000/mois</li>
                        <li>Durée: 6mois</li>
                        <li><a href="">Participer</a></li>
                    </ul></p>
                </div>
            </div>
            <div class="card">
                <div class="images">
                    <img src="img/engrais.jpg" alt="">
                </div>
                <div class="desc">
                <h3>Production d'engrais</h3>
                    <p><ul>
                        <li>Prix: 50000/mois</li>
                        <li>Durée: 2 mois</li>
                        <li><a href="">Participer</a></li>
                    </ul></p>
                </div>
            </div>
            <div class="card">
                <div class="images">
                    <img src="img/pisciculture.jpg" alt="">
                </div>
                <div class="desc">
                <h3>Pisciculture</h3>
                    <p><ul>
                        <li>Prix: 50000/mois</li>
                        <li>Durée: 3 mois</li>
                        <li><a href="">Participer</a></li>
                    </ul></p>
                </div>
            </div>
        </div>
    </div>-->
    <div class="description2" id="description3">
        <H2>Pourquoi le solaire?</H2>
        <div class="content2">
        <img src="img/panneau-solaire.png" alt="" class="bio2 panneau" data-aos="zoom-in">
         <p> Les panneaux solaires produisent ce qu’on appelle une énergie verte. Une énergie bénéfique pour notre environnement car elle ne rejette aucun produit polluant comme le CO2 et donc réduit notre empreinte carbone. De plus, elle ralentit considérablement le réchauffement climatique. Mais ce n’est pas tout ! Le soleil produisant en continu de la lumière, c’est une source inépuisable et donc durable qui pompera en aucun cas dans nos ressources naturelles.
         </p>
        </div>
        </div>
    <div class="offers">
        <H2>Catalogue</H2>
        <div class="repeter" data-aos="fade-right">
            <div class="card">
                <div class="images">
                        <img src="img/panneaux-solaires.jpg" alt="">
                </div>
                <div class="desc">
                    <h3>Panneaux solaires</h3>
                    <p><ul>
                        <li>Prix: 500FCFA/kg</li>
                        <li>Localité: Kpalime</li>
                        <li>Disponible: 5t</li>
                        <li><a href="">Commander</a></li>
                        
                    </ul></p>
                </div>
            </div>
            <div class="card">
                <div class="images">
                    <img src="img/batterie-solaire-mes-power-bank-200ah-12volt.jpg" alt="">
                </div>
                <div class="desc">
                <h3>Batteries solaires</h3>
                    <p><ul>
                        <li>Prix: 500FCFA/kg</li>
                        <li>Localité: Kpalime</li>
                        <li>Disponible: 5t</li>
                        <li><a href="">Commander</a></li>
                </div>
            </div>
            <div class="card">
                <div class="images">
                    <img src="img/kit-pompage-solaire-600w-ps2-600-immergee-c-sj8-5.jpg" alt="">
                </div>
                <div class="desc">
                <h3>Pompes solaires</h3>
                    <p><ul>
                        <li>Prix: 500FCFA/kg</li>
                        <li>Localité: Kpalime</li>
                        <li>Disponible: 5t</li>
                        <li><a href="">Commander</a></li>
                </div>
            </div>
            <div class="card">
                <div class="images">
                    <img src="img/lampadaire.webp" alt="">
                </div>
                <div class="desc">
                <h3>Lampadaires solaires</h3>
                    <p><ul>
                        <li>Prix: 500FCFA/kg</li>
                        <li>Localité: Kpalime</li>
                        <li>Disponible: 5t</li>
                        <li><a href="">Commander</a></li>
                </div>
            </div>
        </div>
    </div><!--
    <div class="description2" id="description5">
        <H2>Elevage</H2>
        <div class="content2">
        <img src="img/du-boeuf.png" alt="" class="bio2 boeuf" data-aos="zoom-in">
         <p>Nous vous proposons des bêtes élevées dans les meilleures conditions et à des prix défiant toute concurence.
            Les betes sont nourris avec des aliments 100% naturels et de première qualité que nous produisons nous même dans nos champs situés sur la meme exploitation.
         </p>
        </div>
    </div>
    <div class="offers">
        <H2>Notre cheptel</H2>
        <div class="repeter" data-aos="fade-right">
            <div class="card">
                <div class="images">
                        <img src="img/boeuf.jpg.opdownload" alt="">
                </div>
                <div class="desc">
                    <h3>Boeufs</h3>
                    <p><ul>
                        <li>500 têtes</li>
                        <li>Race:</li>
                        <li>Prix: 400000/tête</li>
                        <li><a href="">Commander</a></li>
                        
                    </ul></p>
                </div>
            </div>
            <div class="card">
                <div class="images">
                    <img src="img/poulet.jpg" alt="">
                </div>
                <div class="desc">
                <h3>Poulets</h3>
                    <p><ul>
                        <li>5000 têtes</li>
                        <li>Race:</li>
                        <li>Prix: 3000/tête</li>
                        <li><a href="">Commander</a></li>
                        
                    </ul></p>
                </div>
            </div>
            <div class="card">
                <div class="images">
                    <img src="img/mouton.jpg" alt="">
                </div>
                <div class="desc">
                <h3>Moutons</h3>
                    <p><ul>
                        <li>1000 têtes</li>
                        <li>Race:</li>
                        <li>Prix: 40000/tête</li>
                        <li><a href="">Commander</a></li>
                        
                    </ul></p>
                </div>
            </div>
            <div class="card">
                <div class="images">
                    <img src="img/lapin.jfif" alt="">
                </div>
                <div class="desc">
                <h3>Lapins</h3>
                    <p><ul>
                        <li>500 têtes</li>
                        <li>Race:</li>
                        <li>Prix: 3000/tête</li>
                        <li><a href="">Commander</a></li>
                        
                    </ul></p>
                </div>
            </div>
        </div>
    </div>-->
    <?php
    include("component/footer.php")
    ?>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init({
        duration: 3000,
        once: true,
      });
    </script>
</body>

</html>