<?php
session_start();

include('vending.php');

$change =  0;



if(isset($_POST['money']))
{
 if ($_POST['money'] == 'dollar'){

    if(!isset($_SESSION['load'])){

        $_SESSION['load'] = 1;
    }else{

        $_SESSION['load'] =  $_SESSION['load'] + 1;
    }
    
 }

 if ($_POST['money'] == 'twenfivecents'){

    if(!isset($_SESSION['load'])){

        $_SESSION['load'] = 0.25;
    }else{

        $_SESSION['load'] =  $_SESSION['load'] + 0.25;
    }

 }

 if ($_POST['money'] == 'tencents'){

    if(!isset($_SESSION['load'])){

        $_SESSION['load'] = 0.10;
    }else{

        $_SESSION['load'] =  $_SESSION['load'] + 0.10;
    }

 }
 if ($_POST['money'] == 'fivecents'){

    if(!isset($_SESSION['load'])){

        $_SESSION['load'] = 0.05;
    }else{

        $_SESSION['load'] =  $_SESSION['load'] + 0.05;
    }

    echo  $_SESSION['load'];
 }
 

}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {


    if(!isset($_POST['products'])){


    }
    else{

       $load = $_SESSION['load'];

       $product = $_POST['product'];

        if($product = ""){

            echo "Select an Item";

        }
        if($product == "chocolate"){


            if($load < 1.25){

                echo " Please load more cash for choclate";

            }
            else{

                $transaction = new vevendingMachine(1.25, $product, $load);
                $item->purchase();
            }


        }
        if($product == "chips"){


            if($load < 1.75){

                echo " Please load more cash for chips";

            }
            else{

                $item= new vevendingMachine(1.75, $product, $load);
                $item->purchase();
            }


        }
        if($product == "pop"){


            if($load < 1.50){

                echo " Please load more cash for pop";

            }
            else{

                $item = new vevendingMachine(1.50, $product, $load);
                $item->purchase();
            }


        }

          
    }
}


?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
   

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <div class='container'>
    <br>
    <br>
    <form method='post' action=''>
    <div class="form-group"> 
    <select name="product" >
            
             <option value="pop">pop</option>
              <option value="chips">chips</option> 
              <option value="chocolate">chocolate</option>
              
        </select>
    <br><br>
    </div>
    <br>
    <br>
    <div class='form-group'>
    <input type='submit' name='money' id='dollar' value='dollar'>
    <input type='submit' name='money' id='twenfivecents' value='25cents'>
    <input type='submit' name='money' id='tencents' value='10cents'>
    <input type='submit' name='money' id='fivecents' value='5cents'>
    <br>
    <br>
    </div>
    <br>
    <br>
    <button type='submit' value='submit'>Submit</button>
    </form>
    
</div>

  </body>
</html>