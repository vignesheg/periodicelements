<?php 

function hide(){
    if(isset($_GET['search']) && $_GET["atomicmass"] != ""){
        echo 'style="display:none;"';
    }
}

function listhide(){
    if(isset($_GET['search']) && $_GET["atomicmass"] == "" || isset($_GET['search']) == false){
        echo 'style="display:none;"';
    }
}

function formindicator(){
    if(isset($_GET['search']) && $_GET["atomicmass"] == ""){
        echo "style='border:1px solid red;'";
    }
}

function preloader(){
    if(isset($_GET["search"]) && $_GET["atomicmass"] != ""){
        echo "<script>
                 setTimeout(function(){
                    $('.loader_bg').fadeToggle();
                 },1500);
                 </script>";
    }
}

function preloaderdiv(){
    if(isset($_GET["search"]) && $_GET["atomicmass"] != ""){
        echo "<div class='loader_bg mt-4'>
        <div class='loader'>
      </div>
      </div>";
    }
}

?>