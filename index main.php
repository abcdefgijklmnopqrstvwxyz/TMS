<?php
session_start();
if(!isset($_SESSION["username"])){

   header("location:LoginForm.php");
}


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Transport Services Management System</title>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
     <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="C:/xampp/htdocs\Vehicle-Management/slick/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="./slick/slick-theme.css"> 
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="animate.css">
    <link rel="stylesheet" href="Main.css">
    <link rel="stylesheet" href="swiper-bundle.min.css">

 
</head> 


<style>
.parallax {
    /* The image used */
    background-image: url("bus-people-public-transportation-34171.jpg");
    height: 100%;

    /* Set a specific height */
    min-height: 700px; 

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    
    }
    
.parallax1 {
    /* The image used */
    background-image: url("Bus 1.jpg");
    height: 100%;

    /* Set a specific height */
    min-height: 600px; 

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    
    } 
    
    .navbar-fixed-top.scrolled {
       background-color: #777777;
      transition: background-color 200ms linear;
    }

</style>
<body data-spy="scroll" data-target=".navbar" data-offset="50" onload="myFunction()"> 
   
       
    <div class="parallax foo">
       
     
  
  
  <div class="container">


        <nav class="navbar navbar-expand-lg navigation-wrap">
            <div class="container">
              
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <!--<span class="navbar-toggler-icon"></span>-->
                <i class="fas fa-stream navbar-toggler-icon"></i>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index main.html">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#vehicles">Vehicles</a>
                  </li>
                  
                  <li class="nav-item">
                    <a class="nav-link" href="Schedule.html">Drivers Scedule</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="Route.php">Route</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="Track.html">Logbook</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="logout.php">Log Out</a>
                  </li>
                  

                  </ul>
                
              </div>
            </div>
          </nav>
  
      
       
  </div>
   

        
        <div class="hero-text" style="font-size:50px text-align: center; position: absolute;top: 50%;left: 50%;transform: translate(-50%, -50%);color: white;">


            <?php echo $_SESSION["username"]?>

            <h1 class="animated rubberBand" >Vehicle Management System</h1>
            <p>A management system where you can easily manage vehicles</p>
            
                        
          </div>
    </div>                 
            
        <br><br>
        <div id="vehicles" class="container">
          <div class="page-header">
            <h1 style="text-align: center ; color: #FFFFFF" >Vehicles </h1>      
          </div> 



        <div class="container">
        <div class="row g-3">
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card">
                    <img src="info.jpg" class="card-img-top" alt="Vehicle-deatail">
                    <div class="card-body">
                        <h3 class="card-title">Vehicle Details</h3>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer interdum odio in felis mattis feugiat. In rhoncus libero magna, ultricies condimentum tortor tempor sit amet.</p>
                        <a href="vehicle details.php" class="btn btn-primary">Information</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card">
                    <img src="Repair.png" class="card-img-top" alt="Repairing">
                    <div class="card-body" method="POST" action="Repairing.php">
                        <h3 class="card-title">Repairing</h3>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer interdum odio in felis mattis feugiat. In rhoncus libero magna, ultricies condimentum tortor tempor sit amet.</p>
                        <a href="http://localhost/tsms%20project/repairing.php" class="btn btn-primary">Repair</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card">
                    <img src="Fuel.png" class="card-img-top" alt="Fueling">
                    <div class="card-body">
                        <h3 class="card-title">Fueling</h3>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer interdum odio in felis mattis feugiat. In rhoncus libero magna, ultricies condimentum tortor tempor sit amet.</p>
                        <a href="http://localhost/tsms%20project/fuel.php" class="btn btn-primary">Fuel</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


 <div>
      
        
        
        <br>
        
        
        <div class="parallax1"></div>
        <div id="driver" class="container">
          
         
          </div>
             

             <div id="bus_route" class="container">
          <div class="page-header">
            <h1 style="text-align: center; color: #FFFFFF">Driver Information</h1>      
          </div> 
       <!--   <p style="font-size: 20px;">The driver of ruet are very punctual and they provides great service. Every one of them is professional and great at their jobs</p>    -->

        <div class="slide-container swiper">
            <div class="slide-content">
                <div class="card-wrapper swiper-wrapper">
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>
                            <div class="card-image">
                                <img src="Nadeem.jpg" alt="nadeem" class="card-img">
                                
                            </div>
                        </div>
                        <div class="card-content">
                            <h2 class="name">Nadeem Akhtar</h2>
                            <p class="description">0302 5811085 </p>
                            <p class="description">34520-00280246-1 </p>
                            
                        </div>
                        
                    </div>

                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>
                            <div class="card-image">
                                <img src="IMG-20221117-WA0000.jpg" alt="Shahid" class="card-img">
                                
                            </div>
                        </div>
                        <div class="card-content">
                            <h2 class="name">Shahid Khan</h2>
                            <p class="description">0301-6306195 </p>
                            <p class="description">34502-7323399-5 </p>
                            
                        </div>
                        
                    </div>

                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>
                            <div class="card-image">
                                <img src="Angry.jpg" alt="angry" class="card-img">
                                
                            </div>
                        </div>
                        <div class="card-content">
                            <h2 class="name">Bashir Ahmed</h2>
                            <p class="description">0306-6189920 </p>
                            <p class="description">34501-3868508-7 </p>
                            
                        </div>
                        
                    </div>

                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>
                            <div class="card-image">
                                <img src="user.png" alt="profile" class="card-img">
                                
                            </div>
                        </div>
                        <div class="card-content">
                            <h2 class="name">Muhammad Sarwar</h2>
                            <p class="description">0300-7767930 </p>
                              <p class="description">34520-00280246-1 </p>
                            
                          
                            
                        </div>
                        
                    </div>

                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>
                            <div class="card-image">
                                <img src="user.png" alt="profile1" class="card-img">
                                
                            </div>
                        </div>
                        <div class="card-content">
                            <h2 class="name">Nadeem Akhtar</h2>
                            <p class="description">0302 5811085 </p>
                            <p class="description">34520-00280246-1 </p>
                            
                        </div>
                        
                    </div>

                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>
                            <div class="card-image">
                                <img src="user.png" alt="profile2" class="card-img">
                                
                            </div>
                        </div>
                        <div class="card-content">
                            <h2 class="name">Nadeem Akhtar</h2>
                            <p class="description">0302 5811085 </p>
                            <p class="description">34520-00280246-1 </p>
                            
                        </div>
                        
                    </div>

                    </div>
                
            </div>
           
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
        
              
        </div>  
        </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>  

<br>
           
        
        <footer style="background-color: #2f2f2f;
          color: #fff; padding-top: 10px;
          padding-bottom: 0px;" class="container-fluid text-center">
                <p>All rights reserved by TSMS Team</p> 
        </footer>
        
        

    
<script>
    $(function () {
  $(document).scroll(function () {
    var $nav = $(".navbar-fixed-top");
    $a= $(".parallax");
    $nav.toggleClass('scrolled', $(this).scrollTop() > $a.height());
  });
}); 
    
    </script>    
  
  
  <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
  
  
  <script>
        window.sr = ScrollReveal();
        sr.reveal('.foo', { duration: 800 });
        sr.reveal('.foo1', { duration: 800,origin: 'top'});
    </script>
    
</body>
<script src="swiper-bundle.min.js" ></script>
<script src="slide.js"></script>
</html>