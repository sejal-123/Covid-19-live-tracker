<!DOCTYPE html>
<html>
<head>
  <title>World Tracker</title>
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
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php">Symptoms</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php">Prevention</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="india.php">India Tracker</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php">Contact</a>
        </li>
        
      </ul>
      
    </div>
  </div>
</nav>


<section class="corona_update container-fluid pt-4 mt-3">
  <div class="mb-3">
    <h3 class="text-center pt-3 pb-4">COVID-19 LIVE UPDATES OF THE WORLD</h3>
  </div>

  <div class="table-responsive">
    <table class="table table-striped table-bordered table-striped text-center" id="tbval">
      <tr>
        <th>Country</th>
        <th>Total Confirmed</th>
        <th>Total Recovered</th>
        <th>Total Deaths</th>
        <th>New Confirmed</th>
        <th>New Recovered</th>
        <th>New Deaths</th>
      </tr>
    </table>
  </div>
</section>

  <footer class="mt-5">
  <div class="footer_style text-white text-center container-fluid">
    <p>Copyright by Sejal Budhani</p>
  </div>
</footer>

<script type="text/javascript">

function fetch(){
  $.get("https://api.covid19api.com/summary", function (data){
    //console.log(data['Countries'].length);
    var tbval = document.getElementById('tbval');
    for(var i = 1; i < (data['Countries'].length); i++){
      var x = tbval.insertRow();
      x.insertCell(0);
      tbval.rows[i].cells[0].innerHTML = data['Countries'][i-1]['Country'];
      tbval.rows[i].cells[0].style.background = '#47597e';
      tbval.rows[i].cells[0].style.color = '#fff';

      x.insertCell(1);
      tbval.rows[i].cells[1].innerHTML = data['Countries'][i-1]['TotalConfirmed'];
      tbval.rows[i].cells[1].style.background = '#b4846c';
      tbval.rows[i].cells[1].style.color = '#fff';

      x.insertCell(2);
      tbval.rows[i].cells[2].innerHTML = data['Countries'][i-1]['TotalRecovered'];
      tbval.rows[i].cells[2].style.background = '#393e46';
      tbval.rows[i].cells[2].style.color = '#fff';

      x.insertCell(3);
      tbval.rows[i].cells[3].innerHTML = data['Countries'][i-1]['TotalDeaths'];
      tbval.rows[i].cells[3].style.background = '#f7a440';
      tbval.rows[i].cells[3].style.color = '#fff';

      x.insertCell(4);
      tbval.rows[i].cells[4].innerHTML = data['Countries'][i-1]['NewConfirmed'];
      tbval.rows[i].cells[4].style.background = '#5b8a72';
      tbval.rows[i].cells[4].style.color = '#fff';

      x.insertCell(5);
      tbval.rows[i].cells[5].innerHTML = data['Countries'][i-1]['NewRecovered'];
      tbval.rows[i].cells[5].style.background = '#c64756';
      tbval.rows[i].cells[5].style.color = '#fff';      

      x.insertCell(6);
      tbval.rows[i].cells[6].innerHTML = data['Countries'][i-1]['NewDeaths'];
      tbval.rows[i].cells[6].style.background = '#8e7f7f';
      tbval.rows[i].cells[6].style.color = '#fff';
    }
  })
}
</script>
</body>
</html>
