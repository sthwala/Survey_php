

<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  
<?php
  include 'Survey.php';
  include  'variable.php';

  ?>

<h1>Take Our Survey</h1>
<p><span class="error">* required field</span></p>

<form  method="POST" action="database.php">  
  <div class="form-grup">
    <label for="Surname">Surname</label>
    <input type="text" class = "form control" id="surname" name="surname">
    <span class="error">* <?php echo $surnameErr;?></span>
  </div>
  <br></br>
  <div class="form-grup">
    <label for="firstname">Firstname</label>
    <input type="text" class = "form control" id="firstname" name="firstname">
    <span class="error">* <?php echo $firstnameErr;?></span>
  </div>
  <br></br>
  <div class="form-grup">
    <label for="contactnumber">Contact</label>
    <input type="text" class = "form control" id="contactnumber" name="contactnumber">
    <span class="error">* <?php echo $contactnumber;?></span>
  </div>
  <br></br>
  <div class="form-grup">
  <label for="age">Date of birth:</label>
  <input type="date" id="age" name="age">
    <span class="error">* <?php echo $ageErr;?></span>
  </div>
  <br></br>
  <div class="form-grup">
    <label for="gender">Gender</label>
    <input type="radio" class = "radio-inline" name="gender" id="gender" value="female" />f
    <input type="radio" class = "radio-inline" name="gender" id="gender" value="male" />m
    <input type="radio" class = "radio-inline" name="gender" id="gender" value="other">o
    <span class="error">* <?php echo $genderErr;?></span>
  </div>
  <br></br>
  <div class="form-grup">
    <label for="favfood"><h4>What is your favourite food?(You can choose more than one option)</h4></label>
    <input type="checkbox" name="favfood[]" id="favfood" value="Pizza">Pizza
    <input type="checkbox" name="favfood[]" id="favfood" value="Pasta">Pasta  
    <input type="checkbox" name="favfood[]" id="favfood" value="Papa and wors">Papa and wors  
  </div>
  <br></br>
  <div class="form-grup">
    <label for="Surname"><h4>On a scale of 1 to 5 indicate whether you strongly agree to strongly disagree</h4></label>
  </div>
  <br></br>
  <div class="form-grup">
    <label for="eatout">Eat out</label>
    <input type="radio" class = "radio-inline" name="eatout" id="eatout" value="strongly agree">strongly agree
    <input type="radio" class = "radio-inline" name="eatout" id="eatout" value="agree">agree
    <input type="radio" class = "radio-inline" name="eatout" id="eatout" value="Neutral">Neutral
    <input type="radio" class = "radio-inline" name="eatout" id="eatout" value="disagree">disagree
    <input type="radio" class = "radio-inline" name="eatout" id="eatout" value="strongly disagree">strongly disagree
    <span class="error">* <?php echo $eatoutErr;?></span>
  </div>
  <br></br>
  <div class="form-grup">
    <label for="movies">Movies</label>
    <input type="radio" class = "radio-inline" name="movies" id="movies" value="strongly agree">strongly agree
    <input type="radio" class = "radio-inline" name="movies" id="movies" value="agree">agree
    <input type="radio" class = "radio-inline" name="movies" id="movies" value="Neutral">Neutral
    <input type="radio" class = "radio-inline" name="movies" id="movies" value="disagree">disagree
    <input type="radio" class = "radio-inline" name="movies" id="movies" value="strongly disagree">strongly disagree
    <span class="error">* <?php echo $moviesErr;?></span>
  </div>
  <br></br>
  <div class="form-grup">
    <label for="Surname">RADIO</label>
    <input type="radio" class = "radio-inline" name="radio" id="radio" value="strongly agree">strongly agree
    <input type="radio" class = "radio-inline" name="radio" id="radio" value="agree">agree
    <input type="radio" class = "radio-inline" name="radio" id="radio" value="Neutral">Neutral
    <input type="radio" class = "radio-inline" name="radio" id="radio" value="disagree">disagree
    <input type="radio" class = "radio-inline" name="radio" id="radio" value="strongly disagree">strongly disagree
    <span class="error">* <?php echo $radioErr;?></span>
  </div>
  <br></br>
  <div class="form-grup">
    <label for="Surname">TV</label>
    <input type="radio" class = "radio-inline" name="tv" id="tv" value="strongly agree">strongly agree
    <input type="radio" class = "radio-inline" name="tv" id="tv" value="agree">agree
    <input type="radio" class = "radio-inline" name="tv" id="tv" value="Neutral">Neutral
    <input type="radio" class = "radio-inline" name="tv" id="tv" value="disagree">disagree
    <input type="radio" class = "radio-inline" name="tv" id="tv" value="strongly disagree">strongly disagree
    <span class="error">* <?php echo $tvErr;?></span>
  </div>


  <br></br>
  <input type="submit" name="submit" value="Submit" />
  
</body>
</html>


