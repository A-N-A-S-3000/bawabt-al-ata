
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <title>Document</title>
    
</head>
<body><nav class="navbar navbar-expand-lg navbar-light bg-transparent ">
        <div class="container-fluid">
          <!--logo-->
          <img src="img/WhatsApp Image 2024-02-29 at 20.35.13_effc8592.jpg" alt="" height="50px" width="100px" style="padding-right: 10px;">
          <a class="navbar-brand" href="#" >buabat al atta</a>
          <!--toggle-->
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <!--sidebar header-->
          <div class="sidebar offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header text-white border-bottom">
              <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
              <button type="button" class="btn-close btn-close-white shadow-none" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>

            <!--sidebar body-->
            <div class="offcanvas-body d-flex flex-column flex-lg-row p-4 p-lg-0">
              <ul class="navbar-nav justify-content-center fs-5 flex-grow-1 pe-3">
                <li class="nav-item">
                  <a class="nav-link active mx-2 text-ligh" aria-current="page" href="index.html">Home</a>
                </li>
                <li class="nav-item mx-2">
                  <a class="nav-link" href="aboutus.html">about us</a>
                </li>

                <li class="nav-item mx-2">
                    <a class="nav-link" href="contact .html">contact</a>
                  </li>




                <li class="nav-item dropdown mx-2">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Dropdown
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="donation.html">donations</a></li>
                    <li><a class="dropdown-item" href="store.html">store</a></li>
                    <li><a class="dropdown-item" href="volenteer .html">volenteer</a></li>
                    
                  </ul>
                </li>
              </ul>

              <!--login-->
              <div class="d-flex flex-column flex-lg-row justify-content-center  align-items-center gap-3">
                <a href="login.html" class="text-black">Login</a>
                <a href="signin.html" class="text-white text-decoration-none px-3 py-1  rounded-4" style="background-color: #cc8a69;">sign up</a>
              </div>
              
            </div>
          </div>
        </div>
      </nav>
    <div class="container">
        <!--srart form -->
        <form action="vol_to_database.php" method="post" >
            <!-- read name-->
            <div class="col-sm-6">
                    <label for="Name" class="form-label">name</label>
                    <input type="text" class="form-control" id="firstName" name="username" placeholder="Enter your name" value="" required="" fdprocessedid="6lm2go">
                    <div class="invalid-feedback">
                        Valid first name is required.
                    </div>
            </div>
            <!-- read number-->
            <div class="col-md-6">
                    <label for="cc-number" class="form-label">Phone number</label>
                    <input type="text" class="form-control" id="cc-number" name="phoneNumber" placeholder="Enter your phone number" required="" fdprocessedid="sdy95">
                    <div class="invalid-feedback">
                        phone number is required
                    </div>
            </div>
            <!-- read the vol type -->
            <div class="form-check">
              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1"  value="Driver">
              <label class="form-check-label" for="exampleRadios1">
              Driver
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2"  value="box manager">
              <label class="form-check-label" for="exampleRadios2">
              box manager
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2"  value="Carpentry">
              <label class="form-check-label" for="exampleRadios2">
              Carpentry
              </label>
            </div>
            
           
            <br/>
            <!-- show buttun to submit-->
            <input type="hidden" value="<?php echo $vol_type; ?>" name="vol_1">
            <button class="btn btn-primary" type="submit" >Confirm</button>
        </form>
    </div>
</body>
</html>


