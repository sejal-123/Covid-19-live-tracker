<!DOCTYPE html>
<html>
<head>
  <title>Covid-19 Live Tracker</title>
  <?php include 'link/links.php'; ?>
  <?php include 'css/style.php'; ?>
  
</head>
<body onload="fetch()">
<nav class="navbar navbar-expand-lg nav_style p-4">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">COVID-19 Tracker</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#symptoms">Symptoms</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#prevention">Prevention</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" target="_blank" href="corona.php">World Tracker</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" target="_blank" href="india.php">India Tracker</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact">Contact</a>
        </li>
        
      </ul>
      
    </div>
  </div>
</nav>

<div class="main_header">
  <div class="row w-100 h-100">
    <div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
      <div class="leftside w-100 h-100 d-flex justify-content-center align-items-center">
        <img src="images/eksath.jpg" width="320" height="320">        
      </div>
    </div>
    <div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1">
      <div class="rightside w-100 h-100 d-flex justify-content-center align-items-center">
        <h1>Let's Stay Safe and Fight Together Against Cor<span class="corona_rot"><img src="images/covidpic.jpg" height = "35px" style="border-radius: 50%;"></span>na.</h1>     
      </div>
    </div>
  </div>
</div>

<!-- ************corona latest update**************>-->

<section class="corona_update container-fluid pt-4 mt-3">
  <div class="mb-3">
    <h3 class="text-uppercase text-center pt-3 pb-4">COVID-19 UPDATES</h3>
  </div>








<!--===============================-->

<div class="row align-items-center">
  <div class="col-lg-3 col-md-6 col-12">
    <h1 class="count">1,524,266</h1>
    <p style="text-align: center;">Passengers screened at airport</p>
  </div>
  <div class="col-lg-3 col-md-6 col-12">
    <h1 class="count">512</h1>
    <p style="text-align: center;">Active COVID-19 cases</p>
  </div>
  <div class="col-lg-3 col-md-6 col-12">
    <h1 class="count">51</h1>
    <p style="text-align: center;">Cured/Discharged cases</p>
  </div>
  <div class="col-lg-3 col-md-6 col-12">
    <h1 class="count">9</h1>
    <p style="text-align: center;">Death cases</p>
  </div>
  </div>

</section>

<!--------------about section------------------->
<div class="container-fluid  sub_section">
<div class="container pt-5 pb-5 align-items-center" id ="about">
  <div class="section_header text-center mb-5 mt-4">
    <h1>About COVID-19</h1>
  </div>

  <div class="row pt-5">
    <div class="col-lg-5 col-md-6 col-12 ml-5 pb-4">
      <img src="images/corona_desc.png" width="600px" class="img-fluid ml-5">
    </div>

    <div class="col-lg-6 col-md-6 col-12">
      <h2>What is COVID-19 (Corona Virus)?</h2>
      <p>Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus.</p>
      <p>The COVID-19 virus spreads primarily through droplets of saliva or discharge from the nose when an infected person coughs or sneezes, so it’s important that you also practice respiratory etiquette (for example, by coughing into a flexed elbow).</p>
      <p>Symptoms of COVID-19 are variable, but often include fever, cough, headache, fatigue, breathing difficulties, and loss of smell and taste. Symptoms may begin one to fourteen days after exposure to the virus. At least a third of people who are infected do not develop noticeable symptoms.</p>
    </div>
    
  </div>
  
</div>
</div>


<!--Corona symptoms-->
<div class="container-fluid pt-5 pb-5 align-items-center" id ="symptoms">
  <div class="section_header text-center mb-5 mt-4">
    <h1>Corona Virus Symptoms</h1>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-12 mt-3">
        <figure class="text-center">
        <img src="images/cough.jpg" height="120px" width="150px" class="image-fluid">
        <figcaption>Cough</figcaption>
        </figure>
      </div>

      <div class="col-lg-4 col-md-4 col-12 mt-3">
        <figure class="text-center">
        <img src="images/runningnose.png" height="120px" width="150px" class="image-fluid">
        <figcaption>Running nose</figcaption>
        </figure>
      </div>

      <div class="col-lg-4 col-md-4 col-12 mt-3">
        <figure class="text-center">
        <img src="images/fever.jpg" height="120px" width="150px" class="image-fluid">
        <figcaption>Fever</figcaption>
        </figure>
      </div>

      <div class="col-lg-4 col-md-4 col-12 mt-3">
        <figure class="text-center">
        <img src="images/tired.jpg" height="120px" width="150px" class="image-fluid">
        <figcaption>Tiredness</figcaption>
        </figure>
      </div>

      <div class="col-lg-4 col-md-4 col-12 mt-3">
        <figure class="text-center">
        <img src="images/headache.jpg" height="120px" width="150px" class="image-fluid">
        <figcaption>Headache</figcaption>
        </figure>
      </div>

      <div class="col-lg-4 col-md-4 col-12 mt-3">
        <figure class="text-center">
        <img src="images/difficulty.jpg" height="130px" width="150px" class="image-fluid">
        <figcaption>Difficulty in breathing</figcaption>
        </figure>
      </div>
    </div>
  </div>
</div>


<!--prevention-->
<div class="container-fluid sub_section pt-5 pb-5 align-items-center" id ="prevention">
  <div class="section_header text-center mb-5 mt-4">
    <h1>6 Steps Prevention Against Coronavirus</h1>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-12 mt-5">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-12">
            <figure>
            <img src="images/handwash.jpg" height="120px" width="150px" class="image-fluid">
            </figure>
          </div>

          <div class="col-lg-8 col-md-8 col-12 text-center">
            
            <p>Wash your hands regularly for 20 seconds, with soap and water or alchohol based hand rub.</p>
            
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-4 col-12 mt-5">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-12">
            <figure>
            <img src="images/mask.jpg" height="120px" width="150px" class="image-fluid">
            </figure>
          </div>

          <div class="col-lg-8 col-md-8 col-12 text-center">
            
            <p>Cover your nose and mouth with a disposable tissue or flexed elbow when you cough or sneeze.</p>
            
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-4 col-12 mt-5">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-12">
            <figure>
            <img src="images/distancing.png" height="120px" width="150px" class="image-fluid">
            </figure>
          </div>

          <div class="col-lg-8 col-md-8 col-12 text-center">
            
            <p>Avoid close contact (2 meter or 6 feet) with people who are unwell.</p>
            
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-4 col-12 mt-5">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-12">
            <figure>
            <img src="images/home.jpg" height="120px" width="150px" class="image-fluid">
            </figure>
          </div>

          <div class="col-lg-8 col-md-8 col-12 text-center">
            
            <p>Stay home and self-isolate from others in household if you are not feeling well.</p>
            
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-4 col-12 mt-5">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-12">
            <figure>
            <img src="images/news.jpg" height="120px" width="150px" class="image-fluid">
            </figure>
          </div>

          <div class="col-lg-8 col-md-8 col-12 text-center">
            
            <p>Stay updated by watchingnews and follow the recommended practices.</p>
            
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-4 col-12 mt-5">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-12">
            <figure>
            <img src="images/doctor.jpg" height="120px" width="150px" class="image-fluid">
            </figure>
          </div>

          <div class="col-lg-8 col-md-8 col-12 text-center">
            
            <p>If you have fever, cough, and difficulty in breathing, seek medical care early.</p>
            
          </div>
        </div>
      </div>


    </div>
  </div>
</div>
<div class="container-fluid pt-5 pb-5 align-items-center" id="contact">
  <div class="section_header text-center mb-5 mt-4">
    <h1>Contact Us</h1>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 offset-lg-2 col-12">
        <form action="" method="POST"> 
          <div class="mb-3">
  <label class="form-label">Name</label>
  <input type="text" class="form-control" name="username"placeholder="name" required autocomplete="off">
</div>
  <div class="mb-3">
  <label class="form-label">Email address</label>
  <input type="email" class="form-control" name="email" placeholder="name@example.com" required autocomplete="off">
</div>

<div class="mb-3">
  <label class="form-label">Phone</label>
  <input type="text" class="form-control" name="mobile" placeholder="mobile" required autocomplete="off">
</div>
<label for="exampleFormControlTextarea1" class="form-label">Symptoms</label><br>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="coronasym[]" value="Fever">
  <label class="form-check-label" for="inlineCheckbox1">Fever</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="coronasym[]" value="Headache">
  <label class="form-check-label" for="inlineCheckbox2">Headache</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="coronasym[]" value="Fatigue">
  <label class="form-check-label" for="inlineCheckbox2">Fatigue</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="coronasym[]" value="Breathing difficulty">
  <label class="form-check-label" for="inlineCheckbox2">Difficulty in breathing</label>
</div>
<br><br>



<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Description</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" name="message" rows="3"></textarea>
</div>

<button type="submit" name="submit" class="btn btn-outline-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>

<footer class="mt-5">
  <div class="footer_style text-white text-center container-fluid">
    <p>Copyright by Sejal Budhani</p>
  </div>
</footer>

<script type="text/javascript">
  $('.count').counterUp({
    delay:30,
    time:3000
  })

</script>
</body>
</html>

<?php
include 'dbcon.php';

if(isset($_POST['submit'])){
  $username = $_POST['username'];
  $email = $_POST['email'];
  $mobile = $_POST['mobile'];
  $msg = $_POST['message'];
  $symp = $_POST['coronasym'];

  $chk = "";
  foreach($symp as $chk1){
  $chk .= $chk1.",";
  }
  $insertquery = "insert into cooronacase(username, email, mobile, symptoms, message) values('$username', '$email', '$mobile', '$chk', '$msg')";

  $query = mysqli_query($con, $insertquery);
  if($query){
  ?>
  <script >
    alert("insertion successful");
  </script>
  <?php
}else{
  ?>
  <script>
    alert("Not inserted");
  </script>
  <?php
}
}
?>