<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style2.css">
    <link rel="stylesheet" href="aos-by-red.css">
     <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  </head>
    <title>Agro-business</title>
</head>

<body>
    <?php
    include("component/navbar-agro.php");
    ?>

<section class="banner" id="section1">
        <div class="imgbox">
            <img src="img/agri.webp" alt="" class="active">
            <img src="img/elevage.webp" alt="">
            <img src="img/engrais.jpg" alt="">
            <img src="img/pisciculture.jpg" alt="">
            <img src="img/formation.jpg" alt="">
        </div>
        <div class="welcome">
            <p>AGRO-PASTORAL</p>
        </div>
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
        </ul>

        <a href="#description1" id="scroll"><img src="img/chevron-fleche-vers-le-bas.png" alt=""></a>
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

    <div class="description2" id="description1">
        <H2>Des produits agricoles de qualité</H2>
        <div class="content2">
        <img src="img/bio-removebg-preview.png" alt="" class="bio2 plante" data-aos="zoom-in">
         <p>Nos productions sont 100% bio et cultivés dans les meilleures conditions afin de proposer la meilleure qualité de produits possibles à nos potentiels clients. 
         Nous cultivons et mettons à la disposition des populations différentes cultures(maraîchères, vivrières etc) à des prix abordables afin de permettre au togo d'atteindre la sécurité alimentaire.</p>
        
    </div>
    </div>

    <div class="offers">
        <H2>Nos dernières Productions</H2>
        <div class="repeter" data-aos="fade-right">
            <div class="card" >
                <div class="images">
                        <img src="img/fraises-fraiches-table-bois_1150-8055.webp" alt="">
                </div>
                <div class="desc">
                    <h3>Fraises</h3>
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
                    <img src="img/Tomate-1024x615-1.webp" alt="">
                </div>
                <div class="desc">
                <h3>Tomates</h3>
                    <p><ul>
                        <li>Prix: 500FCFA/kg</li>
                        <li>Localité: Kpalime</li>
                        <li>Disponible: 5t</li>
                        <li><a href="">Commander</a></li>
                </div>
            </div>
            <div class="card">
                <div class="images">
                    <img src="img/mayu-ken-cnz-9s5p2i8-unsplash_6074597f910f6.jpg" alt="">
                </div>
                <div class="desc">
                <h3>Oignons</h3>
                    <p><ul>
                        <li>Prix: 500FCFA/kg</li>
                        <li>Localité: Kpalime</li>
                        <li>Disponible: 5t</li>
                        <li><a href="">Commander</a></li>
                </div>
            </div>
            <div class="card">
                <div class="images">
                    <img src="img/piment-vert.jpg" alt="">
                </div>
                <div class="desc">
                <h3>Piment</h3>
                    <p><ul>
                        <li>Prix: 500FCFA/kg</li>
                        <li>Localité: Kpalime</li>
                        <li>Disponible: 5t</li>
                        <li><a href="">Commander</a></li>
                </div>
            </div>
        </div>
    </div>

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
    </div>
    <div class="description2" id="description3">
        <H2>Pourquoi les engrais ?</H2>
        <div class="content2">
        <img src="img/engrais.webp" alt="" class="bio2 engrais" data-aos="zoom-in">
         <p> Vous avez des problèmes avec la fertilisation des plantes et des cultures? La nutrition des plantes est le facteur le plus important pour atteindre les potentiels de rendement. Cependant, la fertilisation des plantes est difficile en raison du manque de main-d'œuvre, des problèmes météorologiques et des réglementations. Nos engrais sont la meilleure solution à vos problèmes.
         </p>
        </div>
        </div>
    <div class="offers">
        <H2>Nos engrais</H2>
        <div class="repeter" data-aos="fade-right">
            <div class="card">
                <div class="images">
                        <img src="img/compostage.jpg" alt="">
                </div>
                <div class="desc">
                    <h3>Compost</h3>
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
                    <img src="img/fumier.jpg" alt="">
                </div>
                <div class="desc">
                <h3>Fumier</h3>
                    <p><ul>
                        <li>Prix: 500FCFA/kg</li>
                        <li>Localité: Kpalime</li>
                        <li>Disponible: 5t</li>
                        <li><a href="">Commander</a></li>
                </div>
            </div>
            <div class="card">
                <div class="images">
                    <img src="img/mineral.webp" alt="">
                </div>
                <div class="desc">
                <h3>Engrais minéraux</h3>
                    <p><ul>
                        <li>Prix: 500FCFA/kg</li>
                        <li>Localité: Kpalime</li>
                        <li>Disponible: 5t</li>
                        <li><a href="">Commander</a></li>
                </div>
            </div>
            <div class="card">
                <div class="images">
                    <img src="img/mineroorg.jpg" alt="">
                </div>
                <div class="desc">
                <h3>Engrais organo-minéraux</h3>
                    <p><ul>
                        <li>Prix: 500FCFA/kg</li>
                        <li>Localité: Kpalime</li>
                        <li>Disponible: 5t</li>
                        <li><a href="">Commander</a></li>
                </div>
            </div>
        </div>
    </div>
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
    </div>
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