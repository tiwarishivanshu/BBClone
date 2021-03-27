
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/3.3.7/paper/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link rel="stylesheet" href="https://cdn.rawgit.com/mladenplavsic/bootstrap-navbar-sidebar/3bd282bd/docs/navbar-fixed-right.min.css">
  <link rel="stylesheet" href="https://cdn.rawgit.com/mladenplavsic/bootstrap-navbar-sidebar/3bd282bd/docs/navbar-fixed-left.min.css">
  <link rel="stylesheet" href="https://cdn.rawgit.com/mladenplavsic/bootstrap-navbar-sidebar/3bd282bd/docs/docs.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://cdn.rawgit.com/mladenplavsic/bootstrap-navbar-sidebar/3bd282bd/docs/docs.js"></script>
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <script src="https://kit.fontawesome.com/0bb3563ad4.js" crossorigin="anonymous"></script>
  <style>

    #mn li:hover
    {
      background:#9A2D2D; 
      text-decoration: underline;
          
    }
    #mn li a:hover
    {
      text-decoration:underline;
    }
    #btn
    {
      background:none;
      border:none;
    }
    #btn:focus
    {
      background:none;
      outline: none;
    }
    #btn1{
      width:180px;
      border:1px solid black;
      height:61px;
      padding:0;
      display: none; 
      background-color: white;
      margin-top:-20px;
    }
    #btn1 a
    {
      text-decoration:none;
      color:black;
    }
    #btn1 p:hover
    {
      background:#DBDBDB;
      text-decoration: underline;
    }
    #btn1 p
    {
      text-align:center;     
      font-size: 15px;
    }

  
</style>
</head>

<body>

  <nav class="navbar navbar-inverse navbar-fixed-left" style="background:#CE3D3D;">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#" style="color:white;"><i class="far fa-snowflake"></i> BlackBoard</a>
      </div>

      <div id="navbar" class="navbar-collapse collapse" style="margin:auto;">
        <ul class="nav navbar-nav" id="mn">
          
        <li><a href="rt" style="font-size:18px;color:white;"><p><i class="fas fa-user" style="font-size: 25px;"></i> UserName</p></a></li>

        <li><a href="rt" style="font-size:18px;color:white;"><p> <i class="fas fa-globe" style="font-size: 25px;"></i> Activity Stream</p></a></li>

        <li><a href="rt" style="font-size:18px;color:white;"><p> <i class="fas fa-book" style="font-size: 25px;"></i> Cources</p></a></li>

        <li><a href="rt" style="font-size:18px;color:white;"><p> <i class="fas fa-users" style="font-size: 25px;"></i> Organizations</p></a></li>

        <li><a href="rt" style="font-size:18px;color:white;"><p> <i class="fas fa-calendar-alt" style="font-size: 25px;"></i> Calander</p></a></li>

        <li><a href="rt" style="font-size:18px;color:white;"><p> <i class="fas fa-envelope" style="font-size: 25px;"></i> Messages</p></a></li>

        <li><a href="rt" style="font-size:18px;color:white;"><p> <i class="fas fa-clipboard-list" style="font-size: 25px;"></i> Grades</p></a></li>

        <li><a href="rt" style="font-size:18px;color:white;"><p> <i class="fas fa-tools" style="font-size: 25px;"></i> Tools</p></a></li>

        <li><a href="rt" style="font-size:18px;color:white;"><p> <i class="fas fa-sign-out-alt" style="font-size: 25px;"></i> Sign Out</p></a></li>

        <li ><a href="rt" style="font-size:18px;color:white;"><p>Privacy <br>Terms</p></a></li>

          </ul>
      </div>
    </div>
  </nav>

<div class="container-fluid">
  <div class="row">    
      <div class="col-md-12 col-lg-12">
        
          <p style="color:black;text-align:left;font-size: 25px;margin-left:0%;">Cources</p>
          <p style="width:100%;border-bottom:1px solid grey;"></p>
          
              <p style="color:black;text-align: center;font-size:25px;"><button id="btn" onClick="myFunction()">Current Cources <i class="fas fa-caret-down"></i></button></p>
          <p style="width:100%;border-bottom:1px solid grey;display:fixed;"></p>
          <div style="width:100%;display:flex;justify-content: center;margin-top:-20px;">
              <div id="btn1">
                <p><a href="4">UpComing Cources</a></p>
                <p style="margin-top:-10px;"><a href="5">Current Cources</a></p>
              </div>
          </div>

        
      </div>
  </div>
</div>
<div class="container-fluid" >
  <div class="row"> 

      <div class="col-sm-6 col-md-6 col-lg-3" style=""><div style="border:1px solid black;margin-top: 5%;">

        <img src='a.png' width="100%" height="130px" style="border:1px solid black;">
        <p>I'm here</p>
            </div>

      </div>

       <div class="col-sm-6 col-md-6 col-lg-3" style=""><div style="border:1px solid black;margin-top: 5%;">

        <img src='a.png' width="100%" height="130px" style="border:1px solid black;">
        <p>I'm here</p>
            </div></div>

       <div class="col-sm-6 col-md-6 col-lg-3" style=""><div style="border:1px solid black;margin-top: 5%;">

        <img src='a.png' width="100%" height="130px" style="border:1px solid black;">
        <p>I'm here</p>
            </div></div>

       <div class="col-sm-6 col-md-6 col-lg-3" style=""><div style="border:1px solid black;margin-top: 5%;">

        <img src='a.png' width="100%" height="130px" style="border:1px solid black;">
        <p>I'm here</p>
            </div>
        </div>


    </div>


  <div class="row">    


      <div class="col-sm-6 col-md-6 col-lg-3" style=""><div style="border:1px solid black;margin-top: 5%;">

        <img src='a.png' width="100%" height="130px" style="border:1px solid black;">
        <p>I'm here</p>
            </div>

      </div>

       <div class="col-sm-6 col-md-6 col-lg-3" style=""><div style="border:1px solid black;margin-top: 5%;">

        <img src='a.png' width="100%" height="130px" style="border:1px solid black;">
        <p>I'm here</p>
            </div></div>

       <div class="col-sm-6 col-md-6 col-lg-3" style=""><div style="border:1px solid black;margin-top: 5%;">

        <img src='a.png' width="100%" height="130px" style="border:1px solid black;">
        <p>I'm here</p>
            </div></div>

       <div class="col-sm-6 col-md-6 col-lg-3" style=""><div style="border:1px solid black;margin-top: 5%;">

        <img src='a.png' width="100%" height="130px" style="border:1px solid black;">
        <p>I'm here</p>
            </div>
        </div>



      </div>
  
  <div class="row"> 

     <div class="col-sm-6 col-md-6 col-lg-3" style=""><div style="border:1px solid black;margin-top: 5%;">

        <img src='a.png' width="100%" height="130px" style="border:1px solid black;">
        <p>I'm here</p>
            </div>

      </div>

       <div class="col-sm-6 col-md-6 col-lg-3" style=""><div style="border:1px solid black;margin-top: 5%;">

        <img src='a.png' width="100%" height="130px" style="border:1px solid black;">
        <p>I'm here</p>
            </div></div>

       <div class="col-sm-6 col-md-6 col-lg-3" style=""><div style="border:1px solid black;margin-top: 5%;">

        <img src='a.png' width="100%" height="130px" style="border:1px solid black;">
        <p>I'm here</p>
            </div></div>

       

       
           
      
      
  </div>
</div>

</body>
<script>
  function myFunction()
  {
    
    var x =document.getElementById("btn1");
    if(x.style.display==='none')
    {
      x.style.display="block";
    }
    else
    {
      x.style.display="none";
    }
  }
   window.addEventListener('mouseup',function(event){
        var pol = document.getElementById('btn1');
        if(event.target != pol && event.target.parentNode != pol){
            pol.style.display = 'none';
        }
  }); 

</script>
</html>
