<!DOCTYPE html>
<html>
    <head>
      <title>Forum-Francophonie</title>
      <link rel="stylesheet" type="text/css" href="../divers/css/home.css">
      <link rel="icon" type="image/png"/>    <link rel="shortcut icon" type="image/x-icon" href="../divers/assets/images/logoFrancophonie.jpg"/>
    </head>

    <body>
        <div class="entete" >
           <div class="logo">
              <div><a href="home.php"><img src="../divers/assets/images/logoFrancophonie.jpg"></a></div>
              <div class="theme">
                  <p><h4><span class="guillemet">"</span>La francophonie comme facteur d'intégration par l'innovation numérique: enjeux et perspectives<span class="guillemet">"</span></h4></p>
              </div>
           </div>  
        </div>

        <?php include('menu.php');  ?>
          
        <div class="banniere"></div>

        <div class="contenu">
          
          <div class="contenu-milieu">
            <div class="slide">
              <?php include('slider.php');  ?>
            </div>
            <div class="article">  
                <p><h1>Pourquoi un forum?</h1></p>

                <p class="paragraphe">Le terme francophonie est apparu pour la première fois vers 1880, lorsqu’un géographe français, Onesime Reclus, l’utilise pour désigner l’ensemble des personnes et des pays parlant le français. On parle désormais de francophonie avec un « f » minuscule pour désigner les locuteurs de français et de Francophonie avec un « F » majuscule pour figurer le dispositif institutionnel organisant les relations entre les pays francophones.
                </p>
                <p class="paragraphe">Dans le cadre de ses missions de promotion de la Francophonie,<br> le Ministère de l’Intégration africaine, du NEPAD et de la Francophonie (MIANF) organise un forum international sur la francophonie. <br>Un événement qui a pour objectif de réunir tout les acteurs de la francophonie autour du thème : « La francophonie comme facteur d’intégration par l’innovation numérique : enjeux et perspectives » <br>Le MIANF a adopté une stratégie prospective, visant à valoriser le projet francophone dans un contexte marqué par de profondes mutations. <br>A terme, il est visé l’amélioration de l’image de la Francophonie dans le monde et de sa contribution à l’épanouissement des Peuples.<br> Le Ministère dans sa démarche a opté pour la pérennisation de cet événement.</p>
            </div>
          </div>


          <div class="contenu-side">
            <div class="espaceFilm">
              <div class="headerespaceFilm"><h3>Espace films</h3></div> 
              <div class="contenuespaceFilm"> 
                  <video src="../divers/assets/videos/filmFrancophonieMadagascar.mp4" controls poster="../divers/assets/images/ffm.png" width="320" >
                  </video>
              </div> 
              <div class="telecharger"> <a href="#">+ de films</a></div>
            </div>

             <div class="espaceTelechargement">
               <div class="headerespaceTelechargement"><h3>espace telechargement<h3></div>
               <div class="contenuespaceTelechargement">
                 <img src="../divers/assets/images/download.jpg" width="50" height="60">
                 <div class="rapportelecharger"><a href=""> Rapport premiére édition</a></div>
               </div>
             </div>

              <div class="espaceNewLetter">
               <div class="headerNewLetter"><a href=""> <h3>S'incrire au new letter<h3></a></div>
               
             </div>


          </div>
      </div>


        <div>
          <?php include('footer.php');?>
        </div>



    </body>
</html>