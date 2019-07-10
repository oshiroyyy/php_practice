<?php
    $name = "田中";
    if ($name == "大城") {
        echo"私は {$name} です";
    }   else {
        echo"あなたの名前ではありません";
    }
?>

<?php
    $total = 0;
    for ($i = 1; $i <= 10000; $i++) {
        $total += $i;
    }
    echo $total;
?>

<?php
    $furuits = array("apple","orange","lemon","strawberry","cherry");
    foreach($furuits as $furuits){
        echo $furuits;
        echo "\n";
    }
?>


<?php
$start = 1;
$end = 100;

for($i = $start; $i <= $end; $i++){
  if($i % 5 == 0){
    echo $i;
    echo "\n";
  }
}

?>