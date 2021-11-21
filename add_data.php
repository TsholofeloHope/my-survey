?php
session_start();
    include("connection.php");
    include("functions.php");

  
    if($_SERVER['REQUEST_METHOD'] == "POST")
        {
            //something was posted
            $user_name = $_POST['user_name'];
            $password = $_POST['password'];
            $confirm = $_POST['pass'];
            $fname = $_POST['fname'];
            $sname = $_POST['sname'];
            $email = $_POST['email'];
            $Qualification = $_POST['qualification'];
            $cellphone = $_POST['cellphone'];
            $gender = $_POST['gender'];
            $nation = $_POST['nation'];


            if(!empty($user_name) && !empty($password)){
                //save to database
                $user_id = random_num(4);
                $query = "insert into student_reg(user_id,user_name,password,confirm_password,firstname,surname,email,qualification,cellphone,gender,nation) values ('$user_id','$user_name','$password','$confirm','$fname','$sname','$email','$Qualification','$cellphone','$gender','$nation')";

                mysqli_query($con, $query);
                header("Location: login.php");
            }
            else{
                echo "Please enter valid details";
            }


        }

?>