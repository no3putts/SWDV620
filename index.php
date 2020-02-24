<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="wk6.css">
</head>
<body>
<?php
/**********************************************************************************
  Week 6 Practice Exercise by Jeremiah Pineda
  
  Combines all 3 requirements:
  1)  Write a PHP script. In your script use all of the following:
      HTML
      Javascript
      PHP
  2)  Create a script that displays an image and uses the switch statement and a for loop.
  3)  Write a PHP script using arithmetic operators.
  
***********************************************************************************/
 if (!isset( $_GET['Submit'])) { 
      echo <<< EOD
        <h2>Welcome</h2>
        <h3>Login to continue</h3>
        <h4><i>REQUIREMENT 1: HTML, JavaScript and PHP</i></h4>
        <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>

        <div id="id01" class="modal">

          <form class="modal-content animate" action="?php echo $PHP_SELF;?>">
            <div class="imgcontainer">
              <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
            </div>

            <div class="container">
              <label for="uname"><b>Username</b></label>
              <input type="text" placeholder="Enter Username" name="uname" required>

              <label for="psw"><b>Password</b></label>
              <input type="password" placeholder="Enter 'ANY' Password" name="psw" required>

              <input type="submit" value="Submit" name="Submit" />
            </div>

            <div class="container" style="background-color:#f1f1f1">
              <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
            </div>
          </form>
        </div>
        <script>
        // Get the modal
        var modal = document.getElementById('id01');

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }

        </script>
      EOD;
 }else{
  /**********************************************************************************
   * 
   *    Requirement 3: Write a PHP script using arithmetic operators
   * 
   **********************************************************************************/ 
  echo "<a href='index.php'>Click here to start over</a>";
  echo '<h3>Congratulations you logged in successfully</h3>';
  echo '<h4>You can now use this fancy calculator</h4>';
  echo '<h4><i>REQUIREMENT 3: Write a PHP script using arithmetic operators.</i> </h4>';
  echo '<i>Please use the calulator to generate the ouput for requiment #2</i><br>';
  echo '<hr>';
  echo '<h3>PHP Calculator</h3>';
  echo '<hr>';
  echo '<form>';
  echo '1st Number: ';
  echo '<input type="text" name="firstNum" value="5">&nbsp;&nbsp;';
  echo '2nd Number: ';
  echo '<input type="text" name="secondNumber" value="5">' . '<br>';
  echo '<hr>';
  echo '<select name="method">
          <option>*</option>
          <option>+</option>
          <option>-</option>
          <option>/</option>
      </select>';
  echo '<input type="submit" value="Submit" name="Submit" />';
  echo '</form>';

  $num1 = (float)$_GET["firstNum"];
  $num2 = (float)$_GET["secondNumber"];
  $num3 = 0;
  $img = '';
  $op = $_GET["method"];

  switch ($_GET["method"]){
      case "+":
          $num3 = $num1 + $num2;
          $img = '<img src="plus.png">';
          break;
      case "-":
          $num3 = $num1 - $num2;
          $img = '<img src="minus.png">';
          break;
      case "*":
          $num3 = $num1 * $num2;
          $img = '<img src="times.png">';
          break;
      case "/":
          if (!$num2){
              $num3 =  "ERROR: divide by ZERO!";
          } else{
              $num3 = $num1 / $num2;
              $img = '<img src="divide.png">';
          }
          
  }
  
  /**********************************************************************************
   *   REQUIREMENT #2
   * 
   *   Using the output from Requirement 3 to create a loop for generating lyrics
   *   for the 100 bottles of beer on the wall song
   * **********************************************************************************/

  if($num3>0){
      echo '<h4><i>REQUIREMENT 2: Displays an image and uses the switch statement and a for loop.</i></h4>';
      echo "<figure>";
      echo "$img";
      echo "<figcaption>Req 2: Images via Switch<br>Operation Used</figcaption>";
      echo "</figure>";
      echo "<br>The outcome of the operation ($op) is: $num3";
      echo '<hr>';
      echo '<hr>';
      echo '<h5>Output for Loop for Requirement 2<br><br>';
      for ($x = $num3; $x >= 0; $x--) {
        echo "$x bottles of bear on the wall, $x bottles of beer, take one down pass it around, " , $x-1 ," bottles of beer on the wall<br>";
      }
  }
 }
?>
</body>
</html>