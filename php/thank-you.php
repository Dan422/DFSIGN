<?php
 
if(isset($_POST['email'])) {
 
     
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
 
    $email_to = "danfour22@gmail.com";
 
    $email_subject = "DFSIGN Request";
 
     
 
     
 
    function died($error) {
 
        // your error code can go here
 
        echo "Please enter your name, email, and a request or comment. ";
 
        die();
 
    }
 
     
 
    // validation expected data exists
 
    if(!isset($_POST['first_name']) ||
 
        !isset($_POST['email']) ||
 
        !isset($_POST['comments'])) {
 
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
 
    }
 
     
 
    $first_name = $_POST['first_name']; // required
 
    $email_from = $_POST['email']; // required
 
    $comments = $_POST['comments']; // required
 
     
 
    $error_message = "";
 
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
 
    $error_message .= 'Please enter a valid email address.<br />';
 
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$first_name)) {
 
    $error_message .= 'Please enter your name.<br />';
 
  }
 
  if(strlen($comments) < 2) {
 
    $error_message .= 'Please enter a request or comment.<br />';
 
  }
 
  if(strlen($error_message) > 0) {
 
    died($error_message);
 
  }
 
    $email_message = "You received a request or comment for DFSIGN.\n\n";
 
     
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 
     
 
    $email_message .= "Name: ".clean_string($first_name)."\n";
 
    $email_message .= "Email: ".clean_string($email_from)."\n";
 
    $email_message .= "Request or Comment: ".clean_string($comments)."\n";
 
     
 
     
 
// create email headers
 
$headers = 'From: '.$email_from."\r\n".
 
'Reply-To: '.$email_from."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
@mail($email_to, $email_subject, $email_message, $headers);  
 
?>
 
 
 
<!-- include your own success html here -->
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Professional graphic and UX designer with a passion in crafting logical and thoughtful design solutions and experiences.">
    <meta name="author" content="DFSIGN">
    <link rel="icon" href="https://danfournierdesign.com/img/dfsign-favicon.png">

    <title>DFSIGN - Thank You!</title>

    <link href="https://danfournierdesign.com/css/dfsign.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,800" rel="stylesheet">
    <link href="https://unpkg.com/aos@next/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

  </head>
  
  <body>
    <header>
      <nav class="navbar navbar-expand-md navbar-light fixed-top bg-white">
        <a href="https://danfournierdesign.com/">
          <img class="navbar-brand" src="https://danfournierdesign.com/img/dfsign-logo.png">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="https://danfournierdesign.com/">Works</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://danfournierdesign.com/about">About <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="https://danfournierdesign.com/contact">Contact</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>

    <div class="container-fluid">
      
      <div class="project-caption">
        <div class="text-center">
          <h1>Thank You!</h1>
          <p>Your request or comment was sent to Dan and you'll receive a response back in a timely manner.</p>
        </div>
      </div>

      <div class="text-center mb-5 mt-5">
        <a class="play-button" href="https://danfournierdesign.com/">
          View Works <i class="far fa-arrow-alt-circle-right"></i> 
        </a>
      </div>
    </div> 
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="js/bootstrap.js"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-114746802-1');
    </script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
  </body>
</html>
 
<?php
 
}
 
?>