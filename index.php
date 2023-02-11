<?php 
require("assets/php/database.php");
require("assets/includables/action/select.php");
require("assets/includables/action/style.php");
?>
<!DOCTYPE html>
<html>

<head>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
  <link rel="stylesheet" href="assets/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <title>periodic-elements</title>
</head>

<body class="">

<?php preloaderdiv(); ?>

 <div class="container">
    
<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top pt-2 pb-2 ">
  <div class="container-fluid">
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item text-white">
          <a class="nav-link text-white" href="#">Home</a>
        </li>
        <li class="nav-item text-white">
          <a class="nav-link text-white" href="#">History</a>
        </li>
        <li class="nav-item text-white">
          <a class="nav-link text-white" href="all/?all">All</a>
        </li>    
        </li>  
      </ul>
    </div>
    <a class="navbar-brand" href="#">Logo</a>
  </div>
</nav>
      <div class="row mt-5">
        <div class="col-md" <?php echo hide(); ?>>
          <canvas id="myChart" class="background chartdimensions mt-4 container-fluid ">
          </canvas>
        </div>
        <div class="col-md">
          <form action="" class="ms-3 mt-4 background" method="GET">
            <div class="d-flex flex-row">
              <input type="text" class="d-inline forms" placeholder="Enter Atomic Number or Symbol" <?php formindicator() ?> name="atomicmass" required>
              <button type="submit" class="d-inline btn btn-primary buttonborder ps-3 pe-3" id="search" name="search"><i
                  class="fas fa-magnifying-glass"></i></button><br>
          </form>
        </div>
        <div class="background mt-4 ms-3 about p-3 fontstyle" <?php echo hide(); ?>>
          The periodic table, also known as the periodic table of the elements,
          is a rows and columns arrangement of the chemical elements.
          It is widely used in chemistry, physics, and other sciences,
          and is generally seen as an icon of chemistry
        </div>


      </div>
    </div>
    <div class="row bg-primary mt-4 p-2 listborder text-white" <?php listhide(); ?>>
      <div class="col-1 text-center">
        S.No
      </div>
      <div class="col-5 text-center">
        Properties
      </div>
      <div class="col-6 text-center">
        Values
      </div>
    </div>
    <div class="row mt-3" <?php listhide(); ?>>
      <div class="col-1">
        <ul class="list-group">
          <?php for($i=1;$i<29;$i++){
          echo "<li  class='list-group-item list-group-item-action'><b>".$i."</b></li>";
        }
        ?>
        </ul>
      </div>
      <div class="col-6">
        <ul class="list-group">
          <?php for($i=0;$i<29;$i++){
          echo "<li  class='list-group-item list-group-item-action text-center'><b>".$run2[$i]."</b></li>";
        }
        ?>
        </ul>
      </div>
      <div class="col-5">
        <ul class="list-group">
          <?php for($i=0;$i<28;$i++){
            if($run[$i] == ""){
              $run[$i] = "no";
            }

            if($run[$i] == "" && $i > 15){
              $run[$i] == "0";
            }


          echo "<li  class='list-group-item list-group-item-action text-center'>".$run[$i]."</li>";
        }
        echo "<li  class='list-group-item list-group-item-action text-center'><img class='img-fluid' src='".$run[28]."'></li>";
        ?>
        </ul>
      </div>
    </div>
      </div>

    <script>
      var xValues = ["s-block", "d-block", "p-block", "f-block"];
      var yValues = [14, 35, 40, 14];
      var barColors = [
        "green",
        "blue",
        "orange",
        "red",
      ];

      new Chart("myChart", {
        type: "pie",
        data: {
          labels: xValues,
          datasets: [{
            backgroundColor: barColors,
            data: yValues
          }]
        },
        options: {
          title: {
            display: true,
            text: "Classification of Periodic Table"
          }
        }
      });
    </script>
    <?php preloader(); ?>
  
</body>

</html>