<?php
include 'connection.php';

         if(isset($_POST['reserve'])){

            $pickup = $_POST['pickupL'];
            $dropoff = $_POST['dropoffL'];
            $people = $_POST['person'];
            $luggage = $_POST['luggage'];
            $pdate = $_POST['PickUpD'];
            $ddate = $_POST['DropOffD'];
            $ptime = $_POST['PickUpT'];
            $dtime = $_POST['DropOffT'];
            $additional = $_POST['addition'];
            $mpesa = $_POST['mpesa'];

            $query = "INSERT INTO orders SET pickupLocation = '$pickup', dropoffLocation = '$dropoff',
            person = '$people', laggage = '$luggage',
            pickupD = '$pdate', pickupT = '$ptime', dropoffD = '$ddate', dropoffT = '$dtime', additional = '$additional',
            transactions = '$mpesa'";

            $result = $link->query($query);

            if($result == TRUE){

               echo "<script type = \"text/javascript\">
               alert(\"Payment Successfully Done. Wait for Admin Approval\");
               window.location = (\"wait.php\")
               </script>";
            } else {
               echo "<script type = \"text/javascript\">
               alert(\"Registration Failed. Try Again\");
               window.location = (\"pay.php\")
               </script>";
            }



         }




      ?>