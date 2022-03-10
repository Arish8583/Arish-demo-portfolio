<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="jquery-3.6.0.min.js"></script>
<script src="header.js"></script>
    <!--<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/bootstrap.min.js</script>-->
      <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="">
    <script src="nav.js"></script>
    <style>
        body {margin:0;font-family:Arial}
        

        
        .topnav {
          overflow: hidden;
          background-color: black;
        }
        
        .topnav a {
          float: left;
          display: block;
          color: #f2f2f2;
          text-align: center;
          padding: 14px 16px;
          text-decoration: none;
          font-size: 17px;
        }
        
        .active {
          background-color: black;
          color: white;
        }
        
        
        .topnav .icon {
          display: none;
        }
        
        .dropdownn {
          float: left;
          overflow: hidden;
        }
        
        .dropdownn .dropbtnn {
          font-size: 17px;    
          border: none;
          outline: none;
          color: white;
          padding: 14px 16px;
          background-color: inherit;
          font-family: inherit;
          margin: 0;
        }
        
        .dropdownn-content {
          display: none;
          position: absolute;
          background-color: black;
          min-width: 160px;
          box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
          z-index: 1;
        }
        
        .dropdownn-content a {
          float: none;
          color: black;
          padding: 12px 16px;
          text-decoration: none;
          display: block;
          text-align: left;
        }
        
        .topnav a:hover, .dropdownn:hover .dropbtnn {
          background-color: #ff8d1e;
          color: white;
        }
        
        .dropdownn-content a:hover {
          background-color: #ff8d1e;
          color: black;
        }
        
        .dropdownn:hover .dropdownn-content {
          display: block;
        }
        
        @media screen and (max-width: 600px) {
          .topnav a:not(:first-child), .dropdownn .dropbtnn {
            display: none;
          }
          .topnav a.icon {
            float: right;
            display: block;
          }
        }
        
        @media screen and (max-width: 600px) {
          .topnav.responsive {position: relative;}
          .topnav.responsive .icon {
            position: absolute;
            right: 0;
            top: 0;
          }
          .topnav.responsive a {
            float: none;
            display: block;
            text-align: left;
          }
          .topnav.responsive .dropdownn {float: none;}
          .topnav.responsive .dropdownn-content {position: relative;}
          .topnav.responsive .dropdownn .dropbtn {
            display: block;
            width: 100%;
            text-align: left;
          }
        }


        </style>
        </head>
        <body>

            <div class="container-fluid "style="background-color: black;  position: sticky !important;position: -webkit-sticky;top: 0rem;z-index:999;" >

                <div class="row">
                  <div class="col-md-1"></div>
                  <div class="col-md-2">
                    <a style="font-weight: 600; color: white; font-family: Poppins;text-align: center; font-size: 3.4rem; display: flex;justify-content: center; " class="text-uppercase">

Arish</a>

                  </div>
                  <div class="col-md-2"></div>
                  <div class="col-md-7">
                    
                <div class="topnav" id="myTopnav">
                  <a href="main.php" class="active"><i class="fa fa-fw fa-home"></i>HOME</a>
                  <a href="portfolio.php"><i class="fa fa-fw fab  fa-briefcase"></i> PORTFOLIO </a>

                  <a href="about.php"><i class="fa fa-fw fab fa-drupal"></i> ABOUT </a>
                  <a href="index.php"><i class="fa fa-fw fa-envelope"></i> CONTACT</a>
                  
                  <div class="dropdownn">
                    <button class="dropbtnn"><i class="fa fa-fw fa-user"></i> SOCIAL MEDIA</a> 
                      <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdownn-content">
                      <a href="https://www.facebook.com/harish.pandian.946" style="color: white;"><i class="fa fa-fw fab fa-facebook  " style="color: #4867AA;"></i>FACEBOOK</a>
                      <a href="https://wa.me/919123568583" style="color: white;"><i class="fa fa-fw fab fa-whatsapp  " style="color:#28D267; "></i>WHATSAPP</a>
                      <a href="" style="color: white;"><i class="fa fa-fw fab fa-twitter  " style="color:  #4867AA;"></i>TWITTER</a>
                      <a href="https://www.linkedin.com/in/arish-narayanan-76502917b" style="color: white;"><i class="fa fa-fw fab fa-linkedin  " style="color:  #4867AA"></i>LINKEDLIN</a>
                      <a href="https://instagram.com/solo_dork?utm_medium=copy_link" style="color: white;"><i class="fa fa-fw fab fa-instagram  " style="color: #FE8647"></i>INSTAGRAM</a>



                      
                      

                      
                    </div>
                  </div> 
                  <a href="#contact"><i class="fa fa-fw fa-envelope"></i> BLOG</a>
                  

                  
                  <!--<a><i class="fa fa-fw fab fa-briefcase  " style="color: black;"></i></a>
                  <a><i class="fa fa-fw fab fa-whatsapp  " style="color: black;"></i></a>-->
                  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
                </div>



                  </div>
                </div>
                
              
            
                    
                    
              

                
            </div>
        
        <!--<div class="topnav" id="myTopnav">
          <a href="#home" class="active"><i class="fa fa-fw fa-home"></i>Home</a>
          <a href="#news"><i class="fa fa-fw fa-search"></i> Search</a></a>
          <a href="#contact"><i class="fa fa-fw fa-envelope"></i> Contact</a></a>
          <div class="dropdown">
            <button class="dropbtn"><i class="fa fa-fw fa-user"></i> Login</a> 
              i class="fa fa-caret-down"></i>-->
            </button>
            <!--<div class="dropdown-content">
              <a href="#">Link 1</a>
              <a href="#">Link 2</a>
              <a href="#">Link 3</a>
            </div>
          </div> 
          <a href="#about">About</a>
          <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
        </div>-->
                


</body>
</html>
