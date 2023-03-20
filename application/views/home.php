<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
        rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="stylesheet.css">
    </head>
    <style>
      h1{
        padding-top: 10px;
        color: white;
        text-align: center;
        font-family: cursive;
        font-weight: bold;
      }
      h3{

        color: whitesmoke;
        text-align: center;
        font-family: cursive;
      }
      .container{
        padding-top: 20px;
      }
      .containerc{
        padding-top: 100px;
      }
      .nav-link{
        color: whitesmoke;
        font-weight: 700;
      }
      body{
        background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.3)), url(assets/back2.png);
        background-repeat: no-repeat;
        background-position: absolute;
        background-size: cover;
      }
    </style>
    <body>

    <div class="container">
        <h1>Aishwarya Creations</h1>
        <h3>Marriages are made in Heaven</h3>
        <h3>we arrage to celebrate it on Earth</h3>
      </div>
      <div class="containerc">
      <nav class="nav nav-tabs nav-justified">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Login
            </a>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                  <div class="modal-content">
                  <div class="modal-header" style="background-color: whitesmoke;">
                      <h4 class="modal-title" id="exampleModalLabel" style="text-transform: uppercase">LOGIN</h4>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-footer" style="background-color: lightgoldenrodyellow;">
                      <a class="btn btn-outline-info" href="http://localhost/mini/users/login">User login</a>
                      <a class="btn btn-outline-info" href="http://localhost/mini/admin/login">Admin login</a>
                      <a class="btn btn-outline-info" href="http://localhost/mini/workers/login">Worker login</a>
                  </div>
                  </div>
              </div>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://localhost/mini/users/aler">Halls</a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="http://localhost/mini/users/aler">Food</a>
          </li>
          </nav>
    </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>

</html>
    