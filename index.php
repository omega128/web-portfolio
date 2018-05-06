<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Kristopher Chambers' Portfolio</title>
  </head>
  <body>  
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="#">Kristopher Chambers' Portfolio</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar"><span class="navbar-toggler-icon"></span></button>
      
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item"><a class="nav-link scroll" href="#profile">Profile</a></li>
          <li class="nav-item"><a class="nav-link scroll" href="#resume">Resume</a></li>
          <li class="nav-item"><a class="nav-link scroll" href="#portfolio">Portfolio</a></li>
          <li class="nav-item"><a class="nav-link scroll" href="#contact">Contact</a></li>          
        </ul>
      </div>
    </nav>
    
    <main class="container">        
        <div class="card mt-5" id="profile">
          <h2 class="card-header">Profile</h2>          
          <div class="card-body">
            <img class="img-fluid float-left p-5" src="images/biopic-384x384.jpg" alt="A picture of Kristopher Chambers"/>          
            <div class="media-body">
              <p>Hello! My name is Kristopher Chambers. I am a Washington-based <strong>Web Developer</strong> and <strong>Progammer</strong>.</p>
              <p>I'm a recent graduate with proficiency in:</p>
              <ul>
                  <li>Operating Systems: Linux, Windows, OS X</li>
                  <li>Programming Languages: JavaScript, C#, Python, Java, PHP, Haskell</li>
                  <li>Web Technologies: HTML5, CSS3, SQL, WordPress, CodeIgniter, Bootstrap</li>
                  <li>Office Tools: Photoshop, Illustrator, Word, Excel, PowerPoint, Access</li>
              </ul>
            </div>
          </div>          
        </div>
        
        <div class="card mt-3" id="resume">
          <h2 class="card-header">Resume</h2>
          <div class="card-body">
            <div class="media">
              <div class="media-body">My resume is available in a number of convenient formats:</div>
            </div>
            <a href="resume/kc_resume.pdf" class="btn btn-primary">PDF</a>
            <a href="resume/kc_resume.doc" class="btn btn-primary">DOC</a>
            <a href="resume/kc_resume.odt" class="btn btn-primary">ODT</a>
            <a href="resume/kc_resume.html" class="btn btn-primary">HTML</a>
            <a href="resume/kc_resume.txt" class="btn btn-primary">TXT</a>
          </div>
        </div>

        <div class="card mt-3" id="portfolio">
          <h2 class="card-header">Portfolio</h2>
          <div class="card-body">
            <div class="card-deck">
              <!-- APWD Site -->
              <div class="card">
                <div class="card-header">Alliance for People With Disabilities</div>
                <a href="http://disabilitypride.org/apwd/"><img class="card-img-top" src="images/apwd_full.png" alt="Alliance for People With Disabilities Screenshot"/></a>
                <div class="card-body">
                  <p class="card-text">The Alliance for People With Disabilities wanted a complete site overhaul. I worked with several designers, and made this site to their specifications. It uses a custom wordpress template.</p>
                  <a href="http://disabilitypride.org/apwd/" class="btn btn-primary">View Site</a>
                  <a href="https://github.com/omega128/itc210-theme" class="btn btn-primary">View Source</a>
                </div>
              </div>
              
              <!-- Harvest Posse -->
              <div class="card">
                <div class="card-header">Harvest Posse</div>
                <a href="http://kcchambers.dreamhosters.com/sites/harvestposse/index.php"><img class="card-img-top" src="images/harvest_full.png" alt="Harvest Posse Site Screenshot"/></a>
                <div class="card-body">
                    <p class="card-text">The Harvest Posse site is an aggregator for Seattle-area farmers market information.</p>
                    <div class="alert alert-primary">This archived version does not have a functioning twitter feed.</div>
                    <a href="http://kcchambers.dreamhosters.com/sites/harvestposse/index.php" class="btn btn-primary">View Site</a>
                    <a href="https://github.com/omega128/harvestposse" class="btn btn-primary">View Source</a>
                </div>
              </div>

              <!-- Minimal Adventure -->
              <div class="card">
                <div class="card-header">Minimal Adventure</div>
                <a href="http://kcchambers.dreamhosters.com/sites/adventure/"><img class="card-img-top" src="images/minimal_full.png" alt="Minimal Adventure Screenshot"/></a>
                <div class="card-body">              
                  <p class="card-text">Minimal Adventure! is a simple, online MUD (Multi-User Dungeon) using stick-figure drawings. I designed and created Minimal Adventure from the ground up, using MySQL, PHP, and Inkscape. It is free to play, and does not feature intrusive ads!</p>
                  <a href="http://kcchambers.dreamhosters.com/sites/adventure/" class="btn btn-primary">View Site</a>
                  <a href="https://github.com/omega128/min_adventure" class="btn btn-primary">View Source</a>
                </div>
              </div>
              
            </div>
          </div>
        </div>
        
        <div class="card mt-3 mb-3" id="contact">
          <h2 class="card-header">Contact</h2>
          
          <div class="card-body">
            <form method="post" action="index.php#contact">
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" id="name"/>
              </div>
              <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" name="email" id="email"/>
              </div>
              <div class="form-group">
                <label for="subject">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject"/>
              </div>
              <div class="form-group">
                <label for="message">Message</label>
                <textarea class="form-control" name="message" id="message"></textarea>
              </div>
              <input name="submit" type="submit" class="btn btn-primary" value="Send"/>
            </form>
          </div>
          <?php
            if ( isset($_POST['submit']) ) {
             $field_name = $_POST["name"];
             $field_email = $_POST["email"];
             $field_subject = $_POST["subject"];
             $field_message = $_POST["message"];
            
             $mail_to = "omega128@gmail.com";
             $mail_subject = "Message from Portfolio Visitor";
             $mail_content = "Name: $field_name\n Email: $field_email\n Subject: $field_subject\n Message: $field_message";

             mail($mail_to, $mail_subject, $mail_content);
            
             echo '<p class="alert alert-primary">Thank you for your message!</p>';              
            }
           ?>
        </div>
    </main>
  
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
