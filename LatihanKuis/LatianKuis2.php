<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="musim.css">
</head>
<body>
    <?php
      $tangkapbulan = $_POST["bulan"];

      if($tangkapbulan == "December" || $tangkapbulan == "January" || $tangkapbulan == "February"){
        echo '<body class="winter">';
        echo '<div class="container">
        <img src="winter.png" alt="Winter Image">
        <div class="content">
        <h1>It\'s <span style="color: #00796b; font-weight: bold;">Winter</span> Time!</h1>
        <p><strong style="font-style: italic; color: grey;">December - February</strong></p>
        <p>Winter serves as a time for reflection and introspection, where the silence of snow offers a chance to contemplate the warmth within our hearts.</p>
        <a href="LatianKuis1.php" class="btn">Back to Menu</a>
        </div>
    </div>';
      }else if($tangkapbulan == "June" || $tangkapbulan == "July" || $tangkapbulan == "August"){
        echo '<body class="Summer">';
        echo '<div class="container">
        <img src="summer.png" alt="Summer Image">
        <div class="content">
        <h1>It\'s <span style="color:rgb(42, 57, 255); font-weight: bold;">Summer</span> Time!</h1>
        <p><strong style="font-style: italic; color: grey;">June - August</strong></p>
        <p>Summer marks a time of energy and freedom, where the shining sun encourages us to celebrate life and our presence in this world.</p>
        <a href="LatianKuis1.php" class="btn">Back to Menu</a>
        </div>
    </div>';
      }else if($tangkapbulan == "September" || $tangkapbulan == "October" || $tangkapbulan == "November"){
        echo '<body class="autumn">';
        echo '<div class="container">
        <img src="autumn.png" alt="Autumn Image">
        <div class="content">
        <h1>It\'s <span style="color:rgb(252, 185, 69); font-weight: bold;">Autumn</span> Time!</h1>
        <p><strong style="font-style: italic; color: grey;">September - November</strong></p>
        <p>Autmn invites us to reflect on the cycles of life, as the feeling leaves teach us the art of letting go and embracing change.</p>
        <a href="LatianKuis1.php" class="btn">Back to Menu</a>
        </div>
    </div>';
      }else if($tangkapbulan == "March" || $tangkapbulan == "April" || $tangkapbulan == "May"){
        echo '<body class="spring">';
        echo '<div class="container">
        <img src="spring.png" alt="Spring Image">
        <div class="content">
        <h1>It\'s <span style="color:rgb(11, 144, 75); font-weight: bold;">Spring</span> Time!</h1>
        <p><strong style="font-style: italic; color: grey;">March - May</strong></p>
        <p>Spring symbolizes hope and renewal, reminding us that life always finds a way to return with each blooming flower.</p>
        <a href="LatianKuis1.php" class="btn">Back to Menu</a>
        </div>';
      }
    ?>
</body>
</html>