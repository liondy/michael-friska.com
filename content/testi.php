<?php 
  $name = $_POST['testi-name'];
  $opinion = $_POST['testi-opinion'];
  $rating = $_POST['testi-rating'];

  $json = array(
    'name' => $name,
    'opinion' => $opinion,
    'rating' => $rating
  );

  $data = json_encode($json, true);

  $file = __DIR__ . '/results/testi.json';
  echo $file;

  $inp = file_get_contents($file, true);
  $tempArray = json_decode($inp);
  array_push($tempArray, $data);
  $jsonData = json_encode($tempArray);
  file_put_contents($file, $jsonData);
?> 