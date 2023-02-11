<?php require("../assets/php/database.php") ?>
<?php require("../assets/includables/action/select.php"); ?>
<!DOCTYPE html>
<html lang="en">
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
    <title>All-elements</title>
</head>
<style>
   .mgtb{
    margin-top:5rem;
   }
    </style>
<body >
<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
  <div class="container-fluid">
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item text-white">
          <a class="nav-link text-white" href="../">Home</a>
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
    <div class="mgtb">
    <table class="table table-striped">
        <tr class="">
        <?php 
        for($i=0;$i<28;$i++){
            echo "<th>".$heading[$i]."</th>";
        }
        echo "</tr>";
while($run3 = mysqli_fetch_assoc($selectallquery)){
    echo "<tr><td>".$run3['COL 1']."</td>";
    echo "<td>".$run3['COL 2']."</td>";
    echo "<td>".$run3['COL 3']."</td>";
    echo "<td>".$run3['COL 4']."</td>";
    echo "<td>".$run3['COL 5']."</td>";
    echo "<td>".$run3['COL 6']."</td>";
    echo "<td>".$run3['COL 7']."</td>";
    echo "<td>".$run3['COL 8']."</td>";
    echo "<td>".$run3['COL 9']."</td>";
    echo "<td>".$run3['COL 10']."</td>";
    echo "<td>".$run3['COL 11']."</td>";
    echo "<td>".$run3['COL 12']."</td>";
    echo "<td>".$run3['COL 13']."</td>";
    echo "<td>".$run3['COL 14']."</td>";
    echo "<td>".$run3['COL 15']."</td>";
    echo "<td>".$run3['COL 16']."</td>";
    echo "<td>".$run3['COL 17']."</td>";
    echo "<td>".$run3['COL 18']."</td>";
    echo "<td>".$run3['COL 19']."</td>";
    echo "<td>".$run3['COL 20']."</td>";
    echo "<td>".$run3['COL 21']."</td>";
    echo "<td>".$run3['COL 22']."</td>";
    echo "<td>".$run3['COL 23']."</td>";
    echo "<td>".$run3['COL 24']."</td>";
    echo "<td>".$run3['COL 25']."</td>";
    echo "<td>".$run3['COL 26']."</td>";
    echo "<td>".$run3['COL 27']."</td>";
    echo "<td>".$run3['COL 28']."</td></tr>";
}
        ?>
    </table>
</div>
</body>
</html>