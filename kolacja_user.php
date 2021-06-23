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

  <section class="showcase">

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
              <a class="dropdown-item" href="sniadanie_user.php">Śniadania</a>
              <a class="dropdown-item" href="obiad_user.php">Obiady</a>
              <a class="dropdown-item" href="kolacja_user.php">Kolacje</a>




            </div>
          </li>
         
          </li>
          <li class="nav-item active ">
            <a class="nav-link active" href="logout.php"> <i class="bi bi-eye"> <svg xmlns="http://www.w3.org/2000/svg"
                  width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                  <path
                    d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                  <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                </svg></i> Wyloguj</a>
          </li>
        </ul>

      </div>
    </nav>


    <div class="row justify-content-center w-100 mt-2">

      <div class="col-lg-3 col-md-6 col-sm-12 mt-sm-5">
        <div class="card">

          <a href="spah_user.php "> <img class="card-img-top"
              src="https://cdn.pixabay.com/photo/2016/06/17/19/10/pasta-1463930_1280.jpg"></a>
          <div class="card-body">
            <h4 class="card-title">Spaghetti </h5><i class="bi bi-hourglass-bottom"> <svg
                  xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                  class="bi bi-hourglass-bottom" viewBox="0 0 16 16">
                  <path
                    d="M2 1.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-1v1a4.5 4.5 0 0 1-2.557 4.06c-.29.139-.443.377-.443.59v.7c0 .213.154.451.443.59A4.5 4.5 0 0 1 12.5 13v1h1a.5.5 0 0 1 0 1h-11a.5.5 0 1 1 0-1h1v-1a4.5 4.5 0 0 1 2.557-4.06c.29-.139.443-.377.443-.59v-.7c0-.213-.154-.451-.443-.59A4.5 4.5 0 0 1 3.5 3V2h-1a.5.5 0 0 1-.5-.5zm2.5.5v1a3.5 3.5 0 0 0 1.989 3.158c.533.256 1.011.791 1.011 1.491v.702s.18.149.5.149.5-.15.5-.15v-.7c0-.701.478-1.236 1.011-1.492A3.5 3.5 0 0 0 11.5 3V2h-7z" />
                </svg> 1 godzine </i>

              <h7>



              </h7>
              <div class="card-footer">



                <label for="input">Komentarz</label>
                
                <a href="commentuser.php"><button type="button" class="btn btn-link" >+</button></a>
              </div>
          </div>
        </div>

      </div>

      <div class=" col-lg-3 col-md-6 col-sm-12 mt-sm-5">
        <div class="card">

          <a href="spah_user.php "> <img class="card-img-top"
              src="https://cdn.pixabay.com/photo/2017/01/06/16/46/sushi-1958247_1280.jpg"></a>
          <div class="card-body">
            <h5 class="card-title">Sushi </h5><i class="bi bi-hourglass-bottom"> <svg xmlns="http://www.w3.org/2000/svg"
                width="16" height="16" fill="currentColor" class="bi bi-hourglass-bottom" viewBox="0 0 16 16">
                <path
                  d="M2 1.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-1v1a4.5 4.5 0 0 1-2.557 4.06c-.29.139-.443.377-.443.59v.7c0 .213.154.451.443.59A4.5 4.5 0 0 1 12.5 13v1h1a.5.5 0 0 1 0 1h-11a.5.5 0 1 1 0-1h1v-1a4.5 4.5 0 0 1 2.557-4.06c.29-.139.443-.377.443-.59v-.7c0-.213-.154-.451-.443-.59A4.5 4.5 0 0 1 3.5 3V2h-1a.5.5 0 0 1-.5-.5zm2.5.5v1a3.5 3.5 0 0 0 1.989 3.158c.533.256 1.011.791 1.011 1.491v.702s.18.149.5.149.5-.15.5-.15v-.7c0-.701.478-1.236 1.011-1.492A3.5 3.5 0 0 0 11.5 3V2h-7z" />
              </svg> 1 godzine 20 minut </i>

            <div class="card-footer">



              <label for="input">Komentarz</label>
              
              </hr>

              <a href="commentuser.php"><button type="button" class="btn btn-link" >+</button></a>
            </div>
          </div>
        </div>
      </div>

      <div class=" col-lg-3 col-md-6 col-sm-12 mt-md-5 mt-sm-5">
        <div class="card">
          <a href="spah_user.php "> <img class="card-img-top"
              src="https://cdn.pixabay.com/photo/2017/03/10/13/56/cooking-2132873_1280.jpg"></a>
          <div class="card-body">
            <h5 class="card-title">Pierogi z ziemniakami </h5><i class="bi bi-hourglass-bottom"> <svg
                xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-hourglass-bottom" viewBox="0 0 16 16">
                <path
                  d="M2 1.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-1v1a4.5 4.5 0 0 1-2.557 4.06c-.29.139-.443.377-.443.59v.7c0 .213.154.451.443.59A4.5 4.5 0 0 1 12.5 13v1h1a.5.5 0 0 1 0 1h-11a.5.5 0 1 1 0-1h1v-1a4.5 4.5 0 0 1 2.557-4.06c.29-.139.443-.377.443-.59v-.7c0-.213-.154-.451-.443-.59A4.5 4.5 0 0 1 3.5 3V2h-1a.5.5 0 0 1-.5-.5zm2.5.5v1a3.5 3.5 0 0 0 1.989 3.158c.533.256 1.011.791 1.011 1.491v.702s.18.149.5.149.5-.15.5-.15v-.7c0-.701.478-1.236 1.011-1.492A3.5 3.5 0 0 0 11.5 3V2h-7z" />
              </svg> 2 godziny </i> <i class="bi bi-person-plus"> </i>

            <div class="card-footer">
              <label for="input"> Komentarz</label>
              
              <a href="commentuser.php"><button type="button" class="btn btn-link" >+</button></a>
            </div>

          </div>
        </div>
      </div>

    </div>



  </section>

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