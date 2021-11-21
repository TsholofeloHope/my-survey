<html>
<head>
    <style>
        #main{
            background-image: url('images/pic9.jpg');
            background-size:     cover;                      
            background-repeat:   no-repeat;
            background-position: center center; 
            height: 720px;
            width: 80%;
            margin-top: 10px;
            align-items: center;
            color:white;
        }
        #main p{
          font-size: large;
        }
        
        td,th{
            color:white;
            font-size: x-large;
        }
        #submit{
            background-color: orange;
            border: 2px solid orange;
            height: 53px;
            width: 20%;
            color:white;
            font-size: x-large;
            padding: 20px;
            border-radius: 13px
        }
        #submit:hover{
            background-color: orange;
            border: 2px solid orange;
            height: 53px;
            width: 20%;
            color:white;
            font-size: x-large;
            padding: 20px;
            border-radius: 13px;
        }
    </style>
</head>
<body>
<center>

    <?php
        $connection = mysqli_connect("localhost","root","","survay");
        $query = "SELECT id FROM data ORDER BY id";
        $query_run = mysqli_query($connection, $query)
    ?>
    <div id ="main">
        <br><br><br>
        <p style="color:orange; font-size:xx-large;">Survay Results</p>
        <br><br><br>
        <table>
        <?php
            $row = mysqli_num_rows($query_run);
        ?>
            <tr>
            <td>
            <table>
                    <tr>
                        <td><label>Total number of surveys:</label></td>
                        <td><?php echo $row; ?></td>
                    </tr>
                   
                    <tr>
                    <?php
                        $connection = mysqli_connect("localhost","root","","survay");
                        $query = "SELECT AVG(Age) AS avg FROM data";
                        $query_result = mysqli_query($connection, $query);
                            while($row = mysqli_fetch_assoc($query_result)){
                                $output = $row['avg'];
                            }
                    ?>
                        <td><label>Average age:</label></td>
                        <td><?php echo $output ?></td>
                    </tr>
                    <tr>
                    <?php
                        $connection = mysqli_connect("localhost","root","","survay");
                        $query = "SELECT MAX(Age) AS Age FROM data";
                        $query_result = mysqli_query($connection, $query);
                            while($row = mysqli_fetch_assoc($query_result)){
                                $max_age  = $row['Age'];
                            }
                    ?>
                        <td><label>Oldest person who participated in survey:</label></td>
                        <td><?php echo $max_age?></td>
                    </tr>
                    <tr>
                    <?php
                        $connection = mysqli_connect("localhost","root","","survay");
                        $query = "SELECT MIN(Age) AS Age FROM data";
                        $query_result = mysqli_query($connection, $query);
                            while($row = mysqli_fetch_assoc($query_result)){
                                $min_age  = $row['Age'];
                            }
                    ?>
                        <td><label>Youngest person who participated in survey:</label></td>
                        <td><?php echo  $min_age ?></td>
                    </tr>
                </table>
            </td>

            <tr>
                <td>
                <table>
                    <tr>
                    <?php
                        $connection = mysqli_connect("localhost","root","","survay");
                        $query = "SELECT * FROM data";
                        $query_run = mysqli_query($connection, $query);
                        $row = mysqli_num_rows($query_run);
                        $sql = "SELECT Food FROM data WHERE Food = 'Pizza'";
                        $result = mysqli_query($connection,$sql);
                        $rows = mysqli_fetch_array($result,MYSQLI_ASSOC); 
                        $count = mysqli_num_rows($result);
                        $pizza_percentage = round($count*100) /$row;
                    ?>
                        <td><label>Percentage of people who like Pizza:</label></td>
                        <td><?php echo $pizza_percentage."%"?></td>
                    </tr>

                    <tr>
                    <?php
                        $connection = mysqli_connect("localhost","root","","survay");
                        $query = "SELECT * FROM data";
                        $query_run = mysqli_query($connection, $query);
                        $row = mysqli_num_rows($query_run);
                        $sql = "SELECT Food FROM data WHERE Food = 'Pasta'";
                        $result = mysqli_query($connection,$sql);
                        $rows = mysqli_fetch_array($result,MYSQLI_ASSOC);
                        $count = mysqli_num_rows($result);
                        $pasta_percentage = round($count*100) /$row;
                    ?>
                        <td><label>Percentage of people who like Pasta:</label></td>
                        <td><?php echo $pasta_percentage. "%" ?></td>
                    </tr>

                    <tr>
                    <?php
                        $connection = mysqli_connect("localhost","root","","survay");
                        $query = "SELECT * FROM data";
                        $query_run = mysqli_query($connection, $query);
                        $row = mysqli_num_rows($query_run);
                        $sql = "SELECT Food FROM data WHERE Food = 'Pap and Wors'";
                        $result = mysqli_query($connection,$sql);
                        $rows = mysqli_fetch_array($result,MYSQLI_ASSOC);
                        $count = mysqli_num_rows($result);
                        $pap_percentage = round($count*100) /$row;
                    ?>
                        <td><label>Percentage of people who like Pap and Wors:</label></td>
                        <td><?php echo $pap_percentage."%"?></td>
                    </tr>
                </table>
            </td>
            </tr>

            <tr>
                <td>
                <table>
                    <tr>
                    <?php
                        $connection = mysqli_connect("localhost","root","","survay");
                        $query = "SELECT * FROM data";
                        $query_run = mysqli_query($connection, $query);
                        $row = mysqli_num_rows($query_run);
                        $sql = "SELECT Watch_Movies FROM data WHERE Watch_Movies = 'Strongly Agree'";
                        $result = mysqli_query($connection,$sql);
                        $rows = mysqli_fetch_array($result,MYSQLI_ASSOC);
                        $count = mysqli_num_rows($result);
                        $movie_Avarage = round($row/$count);
                    ?>
                        <td><label>People like to watch movies (AVG):</label></td>
                        <td><?php echo $movie_Avarage ?></td>
                    </tr>

                    <tr>
                    <?php
                        $connection = mysqli_connect("localhost","root","","survay");
                        $query = "SELECT * FROM data";
                        $query_run = mysqli_query($connection, $query);
                        $row = mysqli_num_rows($query_run);
                    
                        $sql = "SELECT Watch_TV FROM data WHERE Watch_TV = 'Strongly Agree'";
                        $result = mysqli_query($connection,$sql);
                        $rows = mysqli_fetch_array($result,MYSQLI_ASSOC);
                        $count = mysqli_num_rows($result);
                        $tv_Avarage = round($row/$count);
                    ?>
                        <td><label>People like to watch TV (AVG):</label></td>
                        <td><?php echo $tv_Avarage ?></td>
                    </tr>

                    <tr>
                    <?php
                        $connection = mysqli_connect("localhost","root","","survay");
                        $query = "SELECT * FROM data";
                        $query_run = mysqli_query($connection, $query);
                        $row = mysqli_num_rows($query_run);
                    
                        $sql = "SELECT Radio FROM data WHERE Radio = 'Strongly Agree'";
                        $result = mysqli_query($connection,$sql);
                        $rows = mysqli_fetch_array($result,MYSQLI_ASSOC);
                        $count = mysqli_num_rows($result);
                        $radio_Avarage = round($row/$count);
                    ?>
                        <td><label>People like to listen to the radio (AVG):</label></td>
                        <td><?php echo $radio_Avarage ?></td>
                    </tr>
                </table>
            </td>
            </tr>
    </table>
    <br><br>
    <a href="app.php">
    <input type ="button" value ="OK" id="submit">
    </a>
    </div>   
</center>
</body>
</html>
