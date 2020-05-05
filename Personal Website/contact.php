<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Victoria Scholten</title>
  <meta name="description" content="Victoria Personal Website">
  <meta name="author" content="Victoria">

  <link rel="stylesheet" type="text/css" href="css/style.css">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>

<body>
  <script src="js/scripts.js"></script>
</body>
  <!-- Navigation -->
<link rel="stylesheet" href="https://use.typekit.net/coy7gsl.css">
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#">Victoria's Designs</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home
                <span class="sr-only">(current)</span>
              </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="aboutMe.html">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="projects.html">Projects</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="resume.html">Resume</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Page Content -->
<section class="py-5">
  <div class="container">
    <h2 class="font-weight-light">Contact</h2>
      <div class="container-fluid">
      <div class="row">

        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
          <img src="Tori-23.jpeg" alt="Victoria Scholten" width="100%">
        </div><!--class size div 2-->

        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
          <h2>Let's Chat</h2>


          <p>Please fill out the form below to get in contact with me and I will respond as soon as possible.</p>
          <p>I can't wait to make your ideas come to life! Thanks again for reaching out to me!</p>
      
        </div><!--class size-->
    
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
          <div class="contactContainer">
              <p>
      <?php 

  class Email{
    
      private $recipient;
      private $sender;  
      private $subject;  
      private $message;  
    
    public function  __construct($inRecipient){
      $this->recipient = $inRecipient; 
    }
    
    public function setRecipient ($inRecipient){
      $this->recipient = $inRecipient;
    }
    
    public function getRecipient (){
      return $this->recipient;
    }
    
    public function setSender ($inSender){
      $this->sender = $inSender;
    }
    
    public function getSender (){
      return $this->sender;
    }
    
    public function setSubject ($inSubject){
      $this->subject = $inSubject;
    }
    
    public function getSubject (){
      return $this->subject;
    }
    
    public function setMessage ($inMessage){
      $this->message = $inMessage;
    }
    
    public function getMessage (){
      return $this->message;
    }
    
    public function sendMail(){
    
      $to = $this->getRecipient();
      $subject = $this->getSubject();
      $messageText = wordwrap($this->getMessage(), 50, "/n", FALSE);
      $header = 'From: ' . $this->getSender();
      
      return mail($to, $subject, $messageText, $header);
      
    }
  }
  
  
  if (isset($_POST['submit'])) {
  $contactEmail = new Email(""); 
  
  $contactEmail->setRecipient("vascholten@gmail.com");
  
  $contactEmail->setSender("contact@victoriannescholten.com");
  
  $contactEmail->setSubject($_POST['first_name']);
  
  $contactEmail->setMessage('Contact: ' . $_POST['email'] . ' Message: ' . $_POST['message']);
  $emailStatus = $contactEmail->sendMail(); 
  ?>
  <br>Thank You! your message has been recieved.<br><br>
  <?php
  }
      
      ?>
      
      <form name = "ContactForm" id = "ContactForm" method="post">
        Name:<br> <input type="text" name="first_name"><br>
        Email:<br> <input type="text" name="email"><br>
        Message:<br><textarea rows="5" name="message" cols="30"></textarea><br>
        <input type="submit" name="submit" value="Submit">
      </form>

    </p>      
          </div>
        </div><!--class size div 2-->
      </div><!--close div class row-->
    </div><!--close div class container-fluid-->
    
   
  <footer>
          <div class="footer-top">
            <div class="container">
              <div class="row">
                <div class="col-md-3 footer-about wow fadeInUp">
                  <h3>About Me</h3>
                  <p>
                    I'm a young developer looking for new and creative ideas to help you make ideas come to life in your everyday work.
                  </p>
                  <p>Copyright &copy; <script> var d = new Date(); document.write (d.getFullYear());</script> Victoria Scholten - All Rights Reserved</p>
                      </div>
                <div class="col-md-4 offset-md-1 footer-contact wow fadeInDown">
                  <h3>Contact</h3>
                      <p><i class="fas fa-map-marker-alt"></i>Des Moines, IA</p>
                      <p><i class="fas fa-phone"></i> Phone: (515)478-3746</p>
                      <p><i class="fas fa-envelope"></i> Email: <a href="mailto:vascholten@gmail.com">vascholten.com</a></p>
                  
                      </div>
                      <div class="col-md-4 footer-links wow fadeInUp">
                        <div class="row">
                          <div class="col">
                            <h3>Links</h3>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <p><a class="scroll-link" href="index.html">Home</a></p>
                            <p><a href="aboutMe.html">About</a></p>
                            <p><a href="projects.html">Projects</a></p>
                 
                          </div>
                          <div class="col-md-6">
                            <p><a href="contact.html">Contact</a></p>
                            <p><a href="resume.html">Resume</a></p>
                            <p><a href="https://github.com/victorianne">GitHub</a></p>
                          </div>
                        </div>
                      </div>
                </div>
            </div>
          </div>
         <!-- <div class="footer-bottom">
            <div class="container">
              <div class="row">
                  <div class="col footer-social">
                        <a href="#"><i class="fab fa-facebook-f"></i></a> 
              <a href="#"><i class="fab fa-twitter"></i></a> 
              <a href="#"><i class="fab fa-google-plus-g"></i></a> 
              <a href="#"><i class="fab fa-instagram"></i></a> 
              <a href="#"><i class="fab fa-pinterest"></i></a>
                      </div>
                </div>
            </div>
          </div>-->
        </footer>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>