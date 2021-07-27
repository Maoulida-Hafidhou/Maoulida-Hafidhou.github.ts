<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Document sans titre</title>
</head>

<body bgcolor="#FFFF33">

<font size="10">
<? php
$java=$php=$c++=$c#="";
$javaerr=$phperr=$c++err=$c#err="";
if($_SERVER['REQUEST_METHOD']== "POST"){

 if(empty($_POST["java"])) {
    $javarr = "Champ requis";
  } else {
    $java = $_POST["java"];
  }
  
   if(empty($_POST["php"])) {
    $phperr = "Champ requis";
  } else {
    $php = $_POST["php"];
  }
  
   if(empty($_POST["c++"])) {
    $c++err = "Champ requis";
  } else {
    $c++ = $_POST["c++"];
  }
  
   if(empty($_POST["c#"])) {
    $c#err = "Champ requis";
  } else {
    $c# = $_POST["c#"];
  }
  }
  

<label> Quel est votre langage de programmation préféré? </label>
<br>
<br>

<input type="radio" name="radio" value="radio"> <label> JAVA </label>
<br>
<br>
<input type="radio" name="radio" value="radio"> <label> php </label>
<br>
<br>
<input type="radio" name="radio" value="radio"> <label> C++ </label>
<br>
<br>
<input type="radio" name="radio" value="radio"> <label> C# </label>
<br>
<br>

<input type="submit" name="envoyer" value="envoyer">
<br>
<br>
 <div class="col-md-6 mt-5 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="icofont-award" style="color: #ffb459;"></i>
                    <span data-toggle="counter-up">15</span>
                    <p><strong>Awards</strong> rerum asperiores dolor alias quo reprehenderit eum et nemo pad der</p>
                  </div>

<label> <b> Java</b>  </label> &nbsp;&nbsp;&nbsp;&nbsp;
<div class="skills-content pl-lg-4">
              <div class="progress">
                <span class="skill">HTML <i class="val">100%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

<br>
<br>
<label> <b> php</b> </label>&nbsp;&nbsp;&nbsp;&nbsp; 
<br>
<br>

<label > <b> C++</b> </label>&nbsp;&nbsp;&nbsp;&nbsp;  
<br>
<br>
<label> <b> C# </b> </label> &nbsp;&nbsp;&nbsp;&nbsp;
 <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <span>Sur</span>
          <h2>Sur</h2>
          <p>Sit sint consectetur velit quisquam cupiditate impedit suscipit alias</p>
        </div>

        <div class="row">
          <div class="image col-lg-4 d-flex align-items-stretch justify-content-center justify-content-lg-start"></div>
          <div class="col-lg-8 d-flex flex-column align-items-stretch">
            <div class="content pl-lg-4 d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-lg-6">
                  <ul>
                    <li><i class="icofont-rounded-right"></i> <strong>Name:</strong> Maoulida Abdoulhafidhou</li>
                    <li><i class="icofont-rounded-right"></i> <strong>Website:</strong> www.example.com</li>
                    <li><i class="icofont-rounded-right"></i> <strong>Phone:</strong> +212 6 14 47 23 30</li>
                    <li><i class="icofont-rounded-right"></i> <strong>City:</strong> City : New York, USA</li>
                  </ul>
                </div>
                <div class="col-lg-6">
                  <ul>
                    <li><i class="icofont-rounded-right"></i> <strong>Age:</strong> 23</li>
                    <li><i class="icofont-rounded-right"></i> <strong>Degree:</strong> Master</li>
                    <li><i class="icofont-rounded-right"></i> <strong>Email:</strong> Abdoulhafidhou.maoulida1999@gmail.com</li>
                    <li><i class="icofont-rounded-right"></i> <strong>Freelance:</strong> Available</li>
                  </ul>
                </div>
              </div>
              <div class="row mt-n4">
                <div class="col-md-6 mt-5 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="icofont-simple-smile" style="color: #20b38e;"></i>
                    <span data-toggle="counter-up">65</span>
                    <p><strong>Happy Clients</strong> consequuntur voluptas nostrum aliquid ipsam architecto ut.</p>
                  </div>
                </div>

                <div class="col-md-6 mt-5 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="icofont-document-folder" style="color: #8a1ac2;"></i>
                    <span data-toggle="counter-up">85</span>
                    <p><strong>Projects</strong> adipisci atque cum quia aspernatur totam laudantium et quia dere tan</p>
                  </div>
                </div>

                <div class="col-md-6 mt-5 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="icofont-clock-time" style="color: #2cbdee;"></i>
                    <span data-toggle="counter-up">12</span>
                    <p><strong>Years of experience</strong> aut commodi quaerat modi aliquam nam ducimus aut voluptate non vel</p>
                  </div>
                </div>

                <div class="col-md-6 mt-5 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="icofont-award" style="color: #ffb459;"></i>
                    <span data-toggle="counter-up">15</span>
                    <p><strong>Awards</strong> rerum asperiores dolor alias quo reprehenderit eum et nemo pad der</p>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->



</body>

</font>
</html>
