<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="styles1.css">
</head>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Gaji: <input type="text" name="gaji"><br>
  Pajak (dalam desimal, misal 0.1 untuk 10%): <input type="text" name="pajak"><br>
  <input type="submit" value="Hitung">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $gaji = $_POST['gaji'];
  $pajak = $_POST['pajak'];

  if (is_numeric($gaji) && is_numeric($pajak)) {
    $gaji = (float)$gaji;
    $pajak = (float)$pajak;
    $thp = $gaji - ($gaji * $pajak);

    echo "<div class='result'>";
    echo "Gaji sebelum pajak = Rp. " . number_format($gaji, 2, ',', '.') . "<br>";
    echo "Gaji yang dibawa pulang = Rp. " . number_format($thp, 2, ',', '.') . "<br>";
    echo "</div>";
  } else {
    echo "<div class='result'>Masukkan nilai numerik yang valid untuk gaji dan pajak.</div>";
  }
}
?>

</body>
</html>
