<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: antiquewhite;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        td{
            background-color: whitesmoke;
            border-radius: 20px;
            padding: 10px;
            text-align: center;
        }
        .See-season:hover {
            background-color: black;
            color: white;
            padding: 12px;
            width: 100%;
        }
        .See-season{
            background: white;
            color: black;
            padding: 15px;
            width: 100%;
        }
        
    </style>
</head>
<body>
    <div style="background-color: bisque; border-radius: 20px; padding: 20px; text-align: center; ">
    <h1 style="text-align: center;">What's the <span style="color: red;">s</span><span style="color: orange;">e</span><span style="color: yellow;">a</span><span style="color: green;">s</span><span style="color: blue;">o</span><span style="color: purple;">n</span></span> at the time.</h1>
    <form action="LatianKuis2.php" method="POST">
  
    
    <table align="center" border="1" cellspacing = "15" style="border-color: transparent; padding: 10px; justify-content: center; border-radius: 10px;">
    
        <tr>
            <td><input type="radio" name="bulan" value="January">January</td>
            <td><input type="radio" name="bulan" value="February">February</td>
            <td><input type="radio" name="bulan" value="March">March</td>
            <td><input type="radio" name="bulan" value="April">April</td>
        </tr>
        <tr>
            <td><input type="radio" name="bulan" value="May">May</td>
            <td><input type="radio" name="bulan" value="June">June</td>
            <td><input type="radio" name="bulan" value="July">July</td>
            <td><input type="radio" name="bulan" value="August">August</td>
        </tr>
        <tr>
            <td><input type="radio" name="bulan" value="September">September</td>
            <td><input type="radio" name="bulan" value="October">October</td>
            <td><input type="radio" name="bulan" value="November">November</td>
            <td><input type="radio" name="bulan" value="December">December</td>
        </tr>
        <tr>
            <td colspan="4" style="text-align: center; background-color: transparent; border-color: transparent;">
                <form action="#" method="post">
                    <div style="text-align: center;">
                    <input type="Submit" value="See Season" class="See-season">
                    </div>
                </form>
            </td>
        </tr>
    </table>
    </div>
    
</body>
</html>