<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Responsive Side Menu</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
  <style>
   .container1{
        height:60%;
        width:60%;
        float: left;
       
        
     }
      .container2{
        height:40%;
        width:40%;
        float: right;
      }


    .border-both-chart{
      border: 2px solid;
    }
 
  .spacing{
    margin-left: 40px;
    margin-right: 40px; 
  }

</style>
</head>
<body>
  <nav class="navbar">
    <span class="open-slide">
      <a href="#" onclick="openSlideMenu()">
        <svg width="30" height="30">
            <path d="M0,5 30,5" stroke="#fff" stroke-width="5"/>
            <path d="M0,14 30,14" stroke="#fff" stroke-width="5"/>
            <path d="M0,23 30,23" stroke="#fff" stroke-width="5"/>
        </svg>
      </a>
    </span>
    
    <ul class="navbar-nav">
      <li><a href="#">Home</a></li>
      <li><a href="logout.php">Logout</a></li>
    </ul>
  </nav>

  <div id="side-menu" class="side-nav">
    <a href="#" class="btn-close" onclick="closeSlideMenu()">&times;</a>
    <h3>Admin Panel</h3>
    <a href="studreg.php">Student Registration</a>
    <a href="parentreg.php">Parent Registration</a>
    <a href="teachreg.html">Teacher Registation</a>
    <a href="#">Remove</a>
    <a href="#">Inspect</a>
    <a href="#">View Credentials</a>
    <a href="#">Logout</a>

  </div>

  <div id="main">
   <!-- <h1>Responsive Side Menu</h1>-->
  </div>

  <script>
    function openSlideMenu(){
      document.getElementById('side-menu').style.width = '250px';
      document.getElementById('main').style.marginLeft = '250px';
    }

    function closeSlideMenu(){
      document.getElementById('side-menu').style.width = '0';
      document.getElementById('main').style.marginLeft = '0';
    }
  </script>


<div class="spacing">
 <p>
    n this exercise, the idea is to write a paragraph that would be a random passage from a story. An effective paragraph is one that has unity (it isn’t a hodgepodge of things), focus (everything in the paragraph stacks up to the whatever-it-is the paragraph is about), and coherence (the content follows smoothly). For this exercise, the paragraph should be quick to read--say, not be more than 100 words long.

    A paragraph needn’t be several sentences long, but might be only a sentence or two, or a single line of dialogue.
    
    Or it could be a snippet of dialogue with narration:
    
    She made an attempt to straighten her tawny hair. Her voice quavered with emotion. “You must be a very lonely man, Judge Seagrave.” Then she turned a gaze on him that might have ignited a rain-sodden haystack. “And I’m a lonely woman.”
    
    It might be merely descriptive:
    
    Lines of weeds criss-crossed the cracked parking lot of the Seashell Motor Courts. The flaking paint on the buildings had chalked to a pastel pink on walls covered with graffiti. Many of the windows had been smashed out. Where the sign had been, atop rusting steel posts, only the metal outline of a seashell remained.

 </p>
<br>
 <p>
    n this exercise, the idea is to write a paragraph that would be a random passage from a story. An effective paragraph is one that has unity (it isn’t a hodgepodge of things), focus (everything in the paragraph stacks up to the whatever-it-is the paragraph is about), and coherence (the content follows smoothly). For this exercise, the paragraph should be quick to read--say, not be more than 100 words long.

    A paragraph needn’t be several sentences long, but might be only a sentence or two, or a single line of dialogue.
    
    Or it could be a snippet of dialogue with narration:
    
    She made an attempt to straighten her tawny hair. Her voice quavered with emotion. “You must be a very lonely man, Judge Seagrave.” Then she turned a gaze on him that might have ignited a rain-sodden haystack. “And I’m a lonely woman.”
    
    It might be merely descriptive:
    
    Lines of weeds criss-crossed the cracked parking lot of the Seashell Motor Courts. The flaking paint on the buildings had chalked to a pastel pink on walls covered with graffiti. Many of the windows had been smashed out. Where the sign had been, atop rusting steel posts, only the metal outline of a seashell remained.
  
  </p>
</div>




<!--FOOTER-->
<footer class="footer-distributed">

  <div class="footer-left">

    <h3>Exam<span>monitoring</span></h3>

    <p class="footer-links">
      <a href="#">xyz</a>
      ·
      <a href="#">xyz</a>
      ·
      <a href="#">xyz</a>
      ·
      <a href="#">xyz</a>
      ·
      <a href="#">xyz</a>
      ·
      <a href="#">xyz</a>
    </p>

    <p class="footer-company-name">NotFriendsTech &copy; 2018</p>
    </div>

  <div class="footer-center">

    <div>
      <i class="fa fa-map-marker"></i>
      <p><span>Ramrao Adik Institute of Technology</span> Nerul, Navi-Mumbai</p>
    </div>

    <div>
      <i class="fa fa-phone"></i>
      <p>+91 8850184206</p>
    </div>

  <div>
      <i class="fa fa-envelope"></i>
      <p><a href="mailto:support@company.com">NotFriendsTech@gmail.com</a></p>
    </div>
  </div>

  <div class="footer-right">

    <p class="footer-company-about">
      <span>About the company</span>
       something about exam monitoring sysytem.
    </p>

    
      <div class="footer-icons">
      <a href="#"><i class="fa fa-facebook"></i></a>
      <a href="#"><i class="fa fa-twitter"></i></a>
      <a href="#"><i class="fa fa-linkedin"></i></a>
      <a href="#"><i class="fa fa-github"></i></a>
    </div>
  </div>
</footer>


</body>
</html>
