<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="jquery-3.6.0.min.js"></script>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="port.css">
    <title>Document</title>
</head>
<body>
      <!-- header start -->
      <?php include('header.php'); ?>
    <!-- header end -->
    <!--hero section start-->
    <div class="container-fluid bg-dark">
      <div class="row">
        <div class="col-md-12">
          <div class="title-section text-left text-sm-center">
            <h1>Get <span>Touch</span></h1>
            <span class="title-bg">Contact</span></div>
          </div>
    
        </div>
        <div class="container">
          <div class="col-md-4">
            <div class="customtitle  ft-wt-600">
              Don't be shy !
            </div>
            <p style="font-family: serif;font-size: 18px; color: white; margin-top: 10px;">
              Feel free to get in touch with me. I am always open to discussing new projects, creative ideas or opportunities to be part of your visions.
            </p>
            <p class="addpo" style="font-family: serif;font-size: 18px; color: white; margin-top: 30px;">
              <i class="fa fa-map"></i>
                <span class="dblock">ADDRESS POINT <br></span>
                <div class="dblocks">
                  G4C 4thfloor,
                  amity apartment,Xreal city, padur, Chennai-603103

                </div>
                 
                
              
            </p>
            <!--<p style="font-family: serif;font-size: 18px; color: white; margin-top: 10px;">
              Feel free to get in touch with me. I am always open to discussing new projects, creative ideas or opportunities to be part of your visions.
            </p>-->
            <p class="addpo" style="font-family: serif;font-size: 18px; color: white; margin-top: 30px;">
              <i class="fa fa-envelope"></i>
                <span class="dblock">MAIL ME <br></span>
                <div class="dblocks">
                  <a href="mailto:arishnarayanan121@gmail.com" style="font-weight: 400;color: white;font-family: sans-serif; color: white">arishnarayanan121@gmail.com
                    


                  </a>
                  

                </div>
                <p class="addpo" style="font-family: serif;font-size: 18px; color: white; margin-top: 30px;cursor: none;">
                  <i class="fa fa-phone-square"></i>
                    <span class="dblock">CALL ME <br></span>
                    <div class="dblocks">
                      <a href="tel:9123568583" style="font-weight: 400;color: white;font-family: sans-serif; color: white">
                        +919123568583


                      </a>
                      
    
                    </div>
                 
                
              
            </p>
          </div>
          <div class="col-md-2"></div>
          <div class="col-md-6  " >
            <div class="card ">
                <div class="card-title" style="background-color: black;">
                    <h2 class="text-center py-2" style="color: #ffb400;"> Contact Us </h2>
                    <hr>
                    <?php 
                        $Msg = "";
                        if(isset($_GET['error']))
                        {
                            $Msg = " field to be required ";
                            echo '<div class="alert alert-danger">'.$Msg.'</div>';
                        }
  
                        if(isset($_GET['success']))
                        {
                            $Msg = " Your Message Has Been Sent ";
                            echo '<div class="alert alert-success">'.$Msg.'</div>';
                        }
                    
                    ?>
                </div>
                <div class="card-body" style="background-color: black;">
                    <form action="process.php" method="post">
                        <input type="text" style="height:60px; margin-top:10px;" name="UName" placeholder="User Name" class="form-control mb-2" style="margin-top:10px;">
                        <input type="email" style="height:60px;margin-top:10px;" name="Email" placeholder="Email" class="form-control mb-2" style="margin-top:10px;">
                        <input type="text" style="height:60px;margin-top:10px;" name="Subject" placeholder="Subject" class="form-control mb-2">
                        <textarea name="msg" style="height:130px;margin-top:10px;" class="form-control mb-2" placeholder="Write The Message"></textarea>
                        <button class="button" style="margin-top:10px;" name="btn-send"> Send message </button>
                    </form>
                </div>
            </div>
        </div>
  
        </div>
        <div class="container mt-5"></div>
        

      </div>
        
    </div>
   
    
</body>
</html>