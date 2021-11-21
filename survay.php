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
            color:black;
        }
        #main p{
          font-size: large;
        }
        td,th{
            color:white;
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

    <div id ="main">
        <br>
        <p style="color:orange; font-size:x-large;">Take Our Survay</p>
        <form method ="post" action="info.php">
    <table>
         <tr>
            <td>   
                <p>Personal Details:</p>
                <table>
                    <tr>
                        <td><label>Surname</label></td>
                        <td><input type="text" name="surname"></td>
                    </tr>
                    <tr>
                        <td><label>First Names</label></td>
                        <td> <input type="text" name="firstname"></td>
                    </tr>
                    <tr>
                        <td><label>Contact</label></td>
                        <td><input type="text" name="contact"></td>
                    </tr>
                    <tr>
                        <td><label>Date</label></td>
                        <td><input type="date" name="date"></td>
                    </tr>
                    <tr>
                        <td><label>Age</label></td>
                        <td><input type="text" name="age"></td>
                    </tr>
                </table>   
            <td>
         </tr>
        <tr>    
           <td> 
                <p>What is your favourite food? (You can choose more than 1 answer)</p>
                <input type="checkbox" name="food" value="Pizza">Pizza
                <br>
                <input type="checkbox" name="food" value="Pasta">Pasta
                <br>
                <input type="checkbox" name="food" value="Pap and Wors">Pap and Wors
                <br>
                <input type="checkbox"name="food" value="Chicken stir fry">Chicken stir fry
                <br>
                <input type="checkbox" name="food" value="Beef stir fry">Beef stir fry
                <br>
                <input type="checkbox" name="food" value="other">Other
            </td>
        </tr>
        <tr>
            <td>
                <p>On a scale of 1 to 5 indicate whether you strongly agree to strongly disagree</p>
                <table>
                    <tr>
                        <th>..</th>
                        <th>Strongly Agree (1)</th>
                        <th>Agree (2)</th>
                        <th>Neutral (3)</th>
                        <th>Disagree (4)</th>
                        <th>Strongly disagree (5)</th>
                    </tr>
                    <tr>
                        <td>I like to eat out</td>
                        <td><input type="radio" name="eat-out" value="Strongly Agree"></td>
                        <td><input type="radio" name="eat-out" value="Agree"></td>
                        <td><input type="radio" name="eat-out" value="Neutral"></td>
                        <td><input type="radio" name="eat-out" value="Disagree"></td>
                        <td><input type="radio" name="eat-out" value="Strongly disagree"></td>  
                    </tr>
                    <tr>
                        <td>I like to watch movies</td>
                        <td><input type="radio" name="watch-movies" value="Strongly Agree"></td>
                        <td><input type="radio" name="watch-movies" value="Strongly Agree"></td>
                        <td><input type="radio" name="watch-movies" value="Strongly Agree"></td>
                        <td><input type="radio" name="watch-movies" value="Strongly Agree"></td>
                        <td><input type="radio" name="watch-movies" value="Strongly Agree"></td>  
                    </tr>
                    <tr>
                        <td>I like to watch TV</td>
                        <td><input type="radio" name="watch-TV" value="Strongly Agree"></td>
                        <td><input type="radio" name="watch-TV" value="Strongly Agree"></td>
                        <td><input type="radio" name="watch-TV" value="Strongly Agree"></td>
                        <td><input type="radio" name="watch-TV" value="Strongly Agree"></td>
                        <td><input type="radio" name="watch-TV" value="Strongly Agree"></td>  
                    </tr>
                    <tr>
                        <td>I like to listen to the radio</td>
                        <td><input type="radio" name="listen-to-the-radio" value="Strongly Agree"></td>
                        <td><input type="radio" name="listen-to-the-radio" value="Strongly Agree"></td>
                        <td><input type="radio" name="listen-to-the-radio" value="Strongly Agree"></td>
                        <td><input type="radio" name="listen-to-the-radio" value="Strongly Agree"></td>
                        <td><input type="radio" name="listen-to-the-radio" value="Strongly Agree"></td>  
                    </tr>
                </table>
            </td>
            </tr>
            <tr>
                <td>   
                </td>
            </tr>
    </table> 
    <input type ="submit" value ="Submit" id="submit"> 
    </form>      
    <center>
</div>
</body>
</html>
