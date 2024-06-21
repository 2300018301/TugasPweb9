<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="styles2.css">
</head>
<body>

<div class="container">
  <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Nilai A: <input type="text" name="a"><br>
    Nilai B: <input type="text" name="b"><br>
    <input type="submit" value="Bandingkan">
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = $_POST['a'];
    $b = $_POST['b'];

    if (is_numeric($a) && is_numeric($b)) {
      $a = (float)$a;
      $b = (float)$b;

      echo "<div class='result'>";
      echo "<p>$a == $b : <span class='" . (($a == $b) ? 'true' : 'false') . "'>" . (($a == $b) ? 'true' : 'false') . "</span></p>";
      echo "<p>$a != $b : <span class='" . (($a != $b) ? 'true' : 'false') . "'>" . (($a != $b) ? 'true' : 'false') . "</span></p>";
      echo "<p>$a > $b : <span class='" . (($a > $b) ? 'true' : 'false') . "'>" . (($a > $b) ? 'true' : 'false') . "</span></p>";
      echo "<p>$a < $b : <span class='" . (($a < $b) ? 'true' : 'false') . "'>" . (($a < $b) ? 'true' : 'false') . "</span></p>";
      echo "<p>($a == $b) && ($a > $b) : <span class='" . ((($a == $b) && ($a > $b)) ? 'true' : 'false') . "'>" . ((($a == $b) && ($a > $b)) ? 'true' : 'false') . "</span></p>";
      echo "<p>($a == $b) || ($a > $b) : <span class='" . ((($a == $b) || ($a > $b)) ? 'true' : 'false') . "'>" . ((($a == $b) || ($a > $b)) ? 'true' : 'false') . "</span></p>";
      echo "</div>";
    } else {
      echo "<div class='result'>Masukkan nilai numerik yang valid untuk A dan B.</div>";
    }
  }
  ?>

</div>

</body>
</html>
