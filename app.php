<html>
<head>
    <style>
        #main{
            background-image: url('images/pexels-oleg-magni-1040499.jpg');
            background-size:     cover;                      /* <------ */
            background-repeat:   no-repeat;
            background-position: center center; 
            height: 600px;
            width: 80%;
            margin-top: 70px;
            align-items: center;
        }
        #survayBTN{
            background-color: transparent;
            border: 2px solid white;
            height: 90px;
            width: 50%;
            color:white;
            font-size: large;
            padding: 20px;
            border-radius: 13px;
        }
        #survayBTN:hover{
            background-color: orange;
            border: 2px solid orange;
            height: 100px;
            width: 50%;
            color:white;
            font-size: x-large;
            padding: 20px;
            border-radius: 13px;
        }
    </style>    
</head>
<body>
    <center>
    <div id ="main">
        <br><br><br><br><br><br><br><br><br><br>
        <a href ="survay.php">
            <input type ="button" value ="Fill Out Survay" id="survayBTN">
        </a>
        <br><br><br>
        <a href ="survays.php">
        <input type ="button" value ="View Survay Results" id="survayBTN">
        </a>
    </div> 
    </center>   
</body>
</html>