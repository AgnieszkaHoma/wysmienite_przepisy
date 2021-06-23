<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <link rel="stylesheet" href="app.css">
  <title>Wyśmienite przepisy</title>


</head>

<body>

  <div class="showcase">

    <video src="cook.mp4" muted loop autoplay></video>
    <div class="overlay"></div>
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-transparent">
      <a class="navbar-brand" href="index.php">Strona główna</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon" style="font-size:28px;">
        </span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="galeria.php"> <i class="bi bi-card-image"> <svg
                  xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-card-image"
                  viewBox="0 0 16 16">
                  <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                  <path
                    d="M1.5 2A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13zm13 1a.5.5 0 0 1 .5.5v6l-3.775-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12v.54A.505.505 0 0 1 1 12.5v-9a.5.5 0 0 1 .5-.5h13z" />
                </svg></i>Galeria <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" href="przepisy.php" id="navbardropdown" role="button"
              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Przepisy
            </a>
            <div class="dropdown-menu " aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="sniadania.php">Śniadania</a>
              <a class="dropdown-item" href="obiady.php">Obiady</a>
              <a class="dropdown-item" href="kolacje.php">Kolacje</a>
              

          

            </div>
          </li>
          
          </li>
          <li class="nav-item active ">
            <a class="nav-link active" href="login.php"> <i class="bi bi-eye"> <svg
                  xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye"
                  viewBox="0 0 16 16">
                  <path
                    d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                  <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                </svg></i> Logowanie</a>
          </li>
        </ul>
       
      </div>
    </nav>
    
    <div class="row justify-content-center w-100 mt-2">
      <div class="col-lg-3 col-md-6 col-sm-12 mt-sm-5">

        <div class="card">
          <div class="card-body">
          <a href="sniadania.php">

          <h5 class="card-title">Zupa pomidorowa <i class="bi bi-emoji-heart-eyes"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-emoji-heart-eyes" viewBox="0 0 16 16">
        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
        <path d="M11.315 10.014a.5.5 0 0 1 .548.736A4.498 4.498 0 0 1 7.965 13a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .548-.736h.005l.017.005.067.015.252.055c.215.046.515.108.857.169.693.124 1.522.242 2.152.242.63 0 1.46-.118 2.152-.242a26.58 26.58 0 0 0 1.109-.224l.067-.015.017-.004.005-.002zM4.756 4.566c.763-1.424 4.02-.12.952 3.434-4.496-1.596-2.35-4.298-.952-3.434zm6.488 0c1.398-.864 3.544 1.838-.952 3.434-3.067-3.554.19-4.858.952-3.434z"/>
      </svg></i></h5></a>
    
 <h6>
   <ul><li>Zagotuj bulion . Dodaj przecier i wymieszaj.

    Odlej troszkę  zupy do  małej miski  i dodaj do niej śmietanę.</li><li>Zawartość miski wlej do zupy i pomieszaj. 
    
        Ponownie zagotuj. Dopraw do smaku solą i pieprzem. Podawaj z ugotowanym ryżem oraz  natką pietruszki.</li></ul> 
 </h6>
 <p></p> Smacznego!<i class="bi bi-heart-fill"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
  </svg></i>
            </div>
        </div>
      </div>


      <div class=" col-lg-3 col-md-6 col-sm-12 mt-sm-5">
        <div class="card">
        <div class="card-body">
          <a href="sniadania.php">
          <h5 class="card-title">Hamburger z frytkami <i class="bi bi-emoji-heart-eyes"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-emoji-heart-eyes" viewBox="0 0 16 16">
        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
        <path d="M11.315 10.014a.5.5 0 0 1 .548.736A4.498 4.498 0 0 1 7.965 13a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .548-.736h.005l.017.005.067.015.252.055c.215.046.515.108.857.169.693.124 1.522.242 2.152.242.63 0 1.46-.118 2.152-.242a26.58 26.58 0 0 0 1.109-.224l.067-.015.017-.004.005-.002zM4.756 4.566c.763-1.424 4.02-.12.952 3.434-4.496-1.596-2.35-4.298-.952-3.434zm6.488 0c1.398-.864 3.544 1.838-.952 3.434-3.067-3.554.19-4.858.952-3.434z"/>
      </svg></i></h5> </a>
     
   
     <h6>
      <ul><li>Pokrój cebule, pomidory na półksiężyce oraz możesz dodać również ogórka kiszonego lub zwykłego.
        Przygotuj sałate.</li><li>Dobrym zamiennikiem będzie rukola. Przygotuj mięso. Najlepsze będzie  z dzika. Jeśli nie
            posiadasz dziczyzny kup wołowe mięso. Zamarynuj wcierając przyprawy w mięso.</li>
        <li>Wrzuć na patelnie i smaż 
            do 20 minut. Użyj słodkich byłek kupnych do hamburegrów . W między czasie pokrój ziemniaki i wsadź Następniedo piekarnika.</li></ul>   
     </h6>
     <p></p> Smacznego!<i class="bi bi-heart-fill"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
      </svg></i>
            </div>
        </div>
      </div>

      <div class=" col-lg-3 col-md-6 col-sm-12 mt-md-5 mt-sm-5">
        <div class="card">
        <div class="card-body">
          <a href="sniadania.php">
          <h5 class="card-title"> Tortilla<i class="bi bi-emoji-heart-eyes"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-emoji-heart-eyes" viewBox="0 0 16 16">
        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
        <path d="M11.315 10.014a.5.5 0 0 1 .548.736A4.498 4.498 0 0 1 7.965 13a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .548-.736h.005l.017.005.067.015.252.055c.215.046.515.108.857.169.693.124 1.522.242 2.152.242.63 0 1.46-.118 2.152-.242a26.58 26.58 0 0 0 1.109-.224l.067-.015.017-.004.005-.002zM4.756 4.566c.763-1.424 4.02-.12.952 3.434-4.496-1.596-2.35-4.298-.952-3.434zm6.488 0c1.398-.864 3.544 1.838-.952 3.434-3.067-3.554.19-4.858.952-3.434z"/>
      </svg></i> </h5> </a>
   <h6> 
       <ul><li>Przygotuj  5 placków trotilli zakupionych w sklepie.Pokrój wszystkie warzywa które 
           chcesz aby znalaznły się w twoim daniu. Użyj pomidorów, papryki, rulkoli oraz zaleca dodać się
           odrobine cebuli posiekaną w półksięzyce. 
       </li>
    <li>Następnie  pokrój kurczaka na wąskie paski. Użyj wielu przypraw w tym przyprawydo kebaba. Nasmaruj
        nimi mięso i wrzuć na patelnie. Smaż około 7 minut. 
    </li>
<li> Przygotuj sos używając jogurtu naturalnego, soli i pieprzu oraz łyżeczkę majonzeu</li>
<li>Po usmażeniu mięsa na plackach przygotuj oddzielnie każda porcje nakładając warzywa z mięsem i polewając sosem

</li><li>Na samym końcu zwiń placek według upodobań. Smaczego </li></ul>
</h6>
        

      <p></p> Smacznego!<i class="bi bi-heart-fill"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
      </svg></i>
        </div>
            </div>





      </div>
    </div>


  </div>
  </div>


  <script>

    const showcase=document.querySelector('.showcase');


  </script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
    integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF"
    crossorigin="anonymous"></script>
</body>

</html>