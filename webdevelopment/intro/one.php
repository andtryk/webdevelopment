<?php
$name = 'Santiago';
$lastName = 'Donoso';
$schoolName = 'sKEA';
$pageTitle = 'Twitter Clone';
$year = "2020"; // This comes from a crapy API
// Convert year wich is a string to a number
$year = intval($year);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    <?= $pageTitle; ?>
  </title>
</head>
<body>
  <h1>
    <?php echo $name.' '.$lastName; ?>
  </h1>
  <div>
    <!-- I studay at KEA -->
    <?= 'I studay at '.$schoolName; ?>
    <h2>
      <?= "I study at $schoolName"; ?>
    </h2>
    <span>
      <?php
      // Next year will be 2021
      $data = 'Next year will be';
      $nextYear = $year + 1;
      echo "$data $nextYear";
      ?>
    </span>
  </div>
</body>
</html>
