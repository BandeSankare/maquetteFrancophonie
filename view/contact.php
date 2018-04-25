<!DOCTYPE html>
<html>
<head>
  <title>thematique-Francophonie</title>

    <link rel="stylesheet" type="text/css" href="../divers/css/home.css">
        <link rel="stylesheet" type="text/css" href="../divers/css/contact.css">

    <link rel="icon" type="image/png"/>
    <link rel="shortcut icon" type="image/x-icon" href="../divers/assets/images/logoFrancophonie.jpg"/>


</head>
<body>
<div class="entete" >
  
  <div class="logo">
    <div> <a href="home.php">   <img src="../divers/assets/images/logoFrancophonie.jpg"></a> </div>
     <div class="theme">
    <p><h4><span class="guillemet">"</span>La francophonie comme facteur d'intégration par l'innovation numérique: enjeux et perspectives<span class="guillemet">"</span></h4></p>
  </div>
    </div>
     
  
  </div>
<?php include('menu.php');  ?>
  
  <div class="banniere"></div>


<div class="contenu">
  
  <div class="contenu-milieu">
   
    <div class="article">   
   
<div class="container">
  <form action="action_page.php">

    <label for="fname">Nom</label>
    <input type="text" id="fnom" name="nom" placeholder="Votre nom..">

    <label for="lname">Prenom</label>
    <input type="text" id="fprenom" name="prenom" placeholder="Votre prénom..">

    <label for="country">Continant</label>
    <select id="country" name="country">
    <option value="afrique">Afrique</option>
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
            <option value="europe">Europe</option>
      <option value="usa">USA</option>
    </select>

    <label for="subject">Objet</label>
    <textarea id="subject" name="subject" placeholder="Votre messages.." style="height:200px"></textarea>

    <input type="submit" value="Submit">

  </form>
</div>

  </div>

  </div>



  <div class="contenu-side">

    <div class="espaceFilm">
      <div class="headerespaceFilm"><h3>Espace films</h3></div> 
      <div class="contenuespaceFilm"> 
          <video src="../divers/assets/videos/filmFrancophonieMadagascar.mp4" controls poster="../divers/assets/images/ffm.png" width="320" >
          </video>
      </div> 
      <div class="telecharger"> <a href="#">+ de films</a>
   </div>
    </div>


     <div class="espaceTelechargement">
      <div class=" headerespaceTelechargement"><h3>espace telechargement<h3></div>
      <div class="contenuespaceTelechargement"> <a href=""> Rapport premiére édition</a></div>
    </div>

  </div>

</div>


<!-- <div class="con">
<div class="contact"></div>
<div class="img2"></div>

</div> -->
 <div>
          <?php include('footer.php');?>
        </div>

</body>
</html>