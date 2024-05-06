<?php
session_start();
include("connect.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/a98bba8d58.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <title>Home</title>

    <style>
        .nav-link{
            color: rgb(255, 255, 255)
        }

        .containerr{
        margin-left: 50%;
        margin-top: 20%;

        transform: translate(-50%, -50%);
        width: 1000px;
        height: 600px;
        background: #f5f5f5;
        box-shadow: 0 30px 50px #dbdbdb;
    }

        .containerr .slide .itemm{
        width: 200px;
        height: 300px;
        position: absolute;
        top: 50%;
        transform: translate(0, -50%);
        border-radius: 20px;
        box-shadow: 0 30px 50px #505050;
        background-position: 50% 50%;
        background-size: cover;
        display: inline-block;
        transition: 0.5s;
    }

        .slide .itemm:nth-child(1),
        .slide .itemm:nth-child(2){
        top: 0;
        left: 0;
        transform: translate(0, 0);
        border-radius: 0;
        width: 100%;
        height: 100%;
    }


        .slide .itemm:nth-child(3){
        left: 50%;
    }
        .slide .itemm:nth-child(4){
        left: calc(50% + 220px);
    }
        .slide .itemm:nth-child(5){
        left: calc(50% + 440px);
    }

        /* here n = 0, 1, 2, 3,... */
        .slide .itemm:nth-child(n + 6){
        left: calc(50% + 660px);
        opacity: 0;
    }



        .itemm .content{
        position: absolute;
        top: 50%;
        left: 100px;
        width: 300px;
        text-align: left;
        color: #eee;
        transform: translate(0, -50%);
        font-family: system-ui;
        display: none;
    }


        .slide .itemm:nth-child(2) .content{
        display: block;
    }


        .content .name{
        font-size: 40px;
        text-transform: uppercase;
        font-weight: bold;
        opacity: 0;
        animation: animate 1s ease-in-out 1 forwards;
    }

        .content .des{
        margin-top: 10px;
        margin-bottom: 20px;
        opacity: 0;
        animation: animate 1s ease-in-out 0.3s 1 forwards;
    }

        .content button{
        padding: 10px 20px;
        border: none;
        cursor: pointer;
        opacity: 0;
        animation: animate 1s ease-in-out 0.6s 1 forwards;
    }


    @keyframes animate {
        from{
            opacity: 0;
            transform: translate(0, 100px);
            filter: blur(33px);
        }

        to{
            opacity: 1;
            transform: translate(0);
            filter: blur(0);
        }
    }



    .button{
        width: 100%;
        text-align: center;
        position: absolute;
        bottom: 20px;
    }

    .button button{
        width: 40px;
        height: 35px;
        border-radius: 8px;
        border: none;
        cursor: pointer;
        margin: 0 5px;
        border: 1px solid #000;
        transition: 0.3s;
    }

    .button button:hover{
        background: #ababab;
        color: #fff;
    }

    
/* 2 */




    </style>
</head>
<body class="vh-100 ">
    <div class ="welcome" hight = "100px">
        <nav class="navbar navbar-expand-lg navbar-light bg-transparent" style="position:sticky;">
            <div class="container-fluid">
              <!--logo-->
              <img src="img/WhatsApp Image 2024-02-29 at 20.35.13_effc8592.jpg" alt="" height="50px" width="100px" style="padding-right: 10px;">
              <a class="navbar-brand" href="#" style="color: white;">Buabat Al ata</a>
              <!--toggle-->
              <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <!--sidebar header-->
              <div class="sidebar offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header text-white border-bottom">
                  <h5 class="offcanvas-title" id="offcanvasNavbarLabel">buabat al atta</h5>
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
                    <a href="login.html" class="text-white" style="text-decoration: none;">Hello</a>
                    <a href="signin.html" class="text-white text-decoration-none px-3 py-1  rounded-4" style="background-color: #cc8a69;"><?php 
       
        $email=$_SESSION['email'];
        $query=mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
        while($row=mysqli_fetch_array($query)){
            echo $row['email'];
        }
       
       ?></a>
                  </div>
                  
                </div>
              </div>
            </div>
          </nav>
    </div>
    
    <div class="preif">
        <div class="icon-and-text left">
            <img src="img/A green-themed image representing charity in a circular design, without a heart (1).png" alt="Left Icon" width="100px" height="100px">
            <p>unity</p>
        </div>
        <div class="main-content">
            <h1>Buabat al ata</h1>
            <p>At Buabat al ata, we embody compassion, social responsibility, and Islamic values to make a positive impact on society.  our mission is to provide essential assistance, fostering a community where collective giving transforms lives. Explore our achievements and join us in creating a world where kindness knows no bounds.</p>
        </div>
            <div class="icon-and-text right">
            <img src="img/A hand in a circular frame with Islamic architectural elements, focusing on the theme of char (1).png" alt="Right Icon" width="100px" height="100px">
            <p>giving</p>
        </div>
    </div>

    <marquee direction="left" behavior="scroll" style="background:rgb(255, 255, 255);border:1px solid rgb(255, 0, 0); color:#ff0000 " scrolldelay=70 truespeed id="text" onbounce>  
      Welcome to Buabat al ata Website. Today is <span id="date"></span> , and the time is <span id="time"></span>
    </marquee> 
    <div class="background">
      <div class="secound_background">
        <div class="card-container">
            <div class="card smaller-card">
            <img src="img/donations.jpeg" alt="Image">
            <div class="card-content">
                <h3>donations
                </h3>
                <p>Your kindness speaks volumes and leaves a lasting impact on those who need it most</p>
                <a href="donation.html" class="btn">donate</a>
            </div>
            </div>
            <div class="card bigger-card">
            <img src="img/store.jpeg" alt="Image">
            <div class="card-content">
                <h3>store
                </h3>
                <p>Every item you purchase contributes directly to helping vulnerable individuals and families.</p>
                <a href="store.html" class="btn">purchase now</a>
            </div>
            </div>
            <div class="card smaller-card">
            <img src="img/vloenteer.jpeg" alt="Image">
            <div class="card-content">
                <h3>volenteer 
                </h3>
                <p>Your time and effort can truly make a difference.
                </p>
                <a href="volenteer .html" class="btn">volenteer</a>
            </div>
            </div>
        </div>
      </div>

        <div class="containerr">

          <div class="slide">
  
              
              <div class="itemm" style="background-image: url(https://i.ibb.co/sj9CxZz/IMG-20220812-102641-780x470.jpg);">
                  <div class="content">
                      <div class="name">Zakat al-Fitr course</div>
                      <div class="des">Join our Zakat al-Fitr section and learn the sacred tradition of giving back, enriching your Ramadan experience with the spirit of generosity and compassion.</div>
                      <button>Join now</button>
                  </div>
              </div>
              <div class="itemm" style="background-image: url(https://i.ibb.co/71zkzRs/Whats-App-Image-2024-02-29-at-17-56-46-b8aedf04.jpg);">
                  <div class="content">
                      <div class="name">Preserving the Prayer</div>
                      <div class="des">Join our section on Preserving the Prayers and deepen your connection with Allah through the sacred act of worship with shaik kahlan</div>
                      <button>See More</button>
                  </div>
              </div>
              <div class="itemm" style="background-image: url(https://i.ibb.co/qnTF7zx/Whats-App-Image-2024-02-29-at-17-42-00-3b7abb3b.jpg);">
                  <div class="content">
                      <div class="name">Developing Empathy and Sensitivity </div>
                      <div class="des">Through interactive exercises and discussions, participants will explore ways to cultivate compassion and kindness towards others, even in challenging situations with abu sinan.</div>
                      <button>See More</button>
                  </div>
              </div>
              <div class="itemm" style="background-image: url(https://i.ibb.co/c1W34yC/The-holy-quraan-2-AR21112019-1024x640.jpg);">
                  <div class="content">
                      <div class="name">Quran Memorization Courses</div>
                      <div class="des">Let your children embark on a journey to memorize the Quran with us and witness the countless blessings unfold.</div>
                      <button>See More</button>
                  </div>
              </div>
  
  
          </div>
  
          <div class="button">
              <button class="prev"><i class="fa-solid fa-arrow-left"></i></button>
              <button class="next"><i class="fa-solid fa-arrow-right"></i></button>
          </div>
  

        
        </div>

        <div class="linkTo">
          <a href="funpage.html" class=""><button class="custom-btn btn-8"><span>Fun page</span></button></a>
          <a href="QuestionnairePage.html" class=""><button class="custom-btn btn-6"><span>QuestionnairePage</span></button></a>
          <a href="addToCard.html" class=""><button class="custom-btn btn-8"><span>Store</span></button></a>
        </div>
        
      
      <div class="container">
        
        <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 my border-top">
          <div class="col mb-3">
            <a href="/" class="d-flex align-items-center mb-3 link-body-emphasis text-decoration-none">
              <img src="img/WhatsApp Image 2024-02-29 at 20.35.13_effc8592.jpg" alt="logo" width="200px">
            </a>
            <p class="text-body-secondary">©Buabat Alatta 2024</p>
          </div>
      
          <div class="col mb-3">
          </div>
      
          <div class="col mb-3">
            <h5>Section</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="index.html" class="nav-link p-0 text-body-secondary">Home</a></li>
              <li class="nav-item mb-2"><a href="volenteer .html" class="nav-link p-0 text-body-secondary">volenteer</a></li>
              <li class="nav-item mb-2"><a href="store.html" class="nav-link p-0 text-body-secondary">Store</a></li>
              <li class="nav-item mb-2"><a href="donation.html" class="nav-link p-0 text-body-secondary">Donations</a></li>
              <li class="nav-item mb-2"><a href="checkout_delivery.html" class="nav-link p-0 text-body-secondary">checkout</a></li>
              
            </ul>
          </div>
          <div class="col mb-3">
            <h5>Information</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="contact .html" class="nav-link p-0 text-body-secondary">Contact us</a></li>
              <li class="nav-item mb-2"><a href="aboutus.html" class="nav-link p-0 text-body-secondary">About us</a></li> 
            </ul>
          </div>
      
        </footer>
      </div>

      <script>
        // Get the next and previous buttons 
        let next = document.querySelector('.next')
        let prev = document.querySelector('.prev')

        // Add event listeners to the next and previous buttons
        next.addEventListener('click', function(){
            // Get all items within the slide
            let itemms = document.querySelectorAll('.itemm')
            // Move the first item to the end of the slide
            document.querySelector('.slide').appendChild(itemms[0])
        })

        prev.addEventListener('click', function(){
            // Get all items within the slide
            let itemms = document.querySelectorAll('.itemm')
            // Move the last item to the beginning of the slide
            document.querySelector('.slide').prepend(itemms[itemms.length - 1]) // here the length of itemms = 6
        })

        // Function to simulate clicking the next button programmatically
        function simulateNextClick() {
            // Get all items within the slide
            let itemms = document.querySelectorAll('.itemm');
            // Move the first item to the end of the slide
            document.querySelector('.slide').appendChild(itemms[0]);
        }

        // Activate the function every 5 seconds
        setInterval(simulateNextClick, 5000);
        // Function to update the date and time on the webpage in real-time
        function DateTime(){
                // Create a new Date object to get the current date and time
                var day = new Date();

                // Extract year, month, and day from the Date object
                var date = day.getFullYear()+' | '+(day.getMonth()+1)+' | '+day.getDate();
                
                // Extract hours, minutes, and seconds from the Date object
                var time = day.getHours() + " : " + day.getMinutes() + " : " + day.getSeconds();

                // Update the HTML elements with the formatted date and time
                document.getElementById("date").innerHTML = date;

                document.getElementById("time").innerHTML = time;
                
                // Set the color of the date and time text to black
                document.getElementById("date").style.color = "black";
                
                document.getElementById("time").style.color = "black";
            }
            setInterval(DateTime,10)
        </script>
    
</body>
</html>