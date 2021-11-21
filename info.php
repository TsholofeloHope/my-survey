<?php
session_start();
    include("connection.php");

  
    if($_SERVER['REQUEST_METHOD'] == "POST")
        {
            $surname = $_POST['surname'];
            $firstname = $_POST['firstname'];
            $contact = $_POST['contact'];
            $date = $_POST['date'];
            $age = $_POST['age'];
            $food = $_POST['food'];
            $eat_out = $_POST['eat-out'];
            $watch_movie = $_POST['watch-movies'];
            $watch_tv = $_POST['watch-TV'];
            $radio = $_POST['listen-to-the-radio'];


            if(!empty($surname) && !empty($firstname)){
                
                $query = "INSERT INTO data(Surname,First_Names,Contact,Date,Age,Food,Eating_Out,Watch_Movies,Watch_TV,Radio) VALUES ('$surname','$firstname','$contact','$date',' $age','$food','$eat_out','$watch_movie','$watch_tv','$radio')";

                mysqli_query($con, $query);
                echo "Thank you for your survay";
            }
            else{
                echo "Please enter valid details";
            }


        }

?>

