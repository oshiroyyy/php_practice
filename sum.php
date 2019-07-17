
<?php

//1.引数に数値を指定して実行すると、
//数値を2倍にして返す関数を作成してください
echo "問１\n";

    function Number($num){
        
        $result = $num * 2;
        return $result;
    }
    echo Number(4);
    echo "\n";


//2.$a と $b を仮引数に持ち、　
//$a と $b　を足した結果を返す関数を作成してください。
echo "問2\n";

  function printSum($a,$b){
        $result = $a + $b;
        return $result;
    }
    echo printSum(2,4);
    echo "\n";

//3.$arr という配列の仮引数を持ち、
//数値が入った配列array(1, 3, 5 ,7, 9) を渡すと
//その要素をすべてかけた結果を返す関数を作成してください。
echo "問3\n";

   function multiply($arr){
        $result=1;
        foreach ($arr as $c){
            $result *= $c;
        }
        return $result;
    }

    echo multiply(array(1, 3, 5 ,7, 9));
    echo "\n";
  
//4.【応用】　次のプログラムは、配列の中で一番大きい値を返す
//max_array という関数を実装しようとしています。
//途中の部分を完成させてください。
echo "問4\n";

    function max_array($arr){
    // とりあえず配列の最初の要素を一番大きい値とする
        $max_number = $arr[0];
        foreach($arr as $a){
    //どうしたらいいかわからない
            if ($max_number < $a){
            $max_number = $a;
        }
    }
    return $max_number;
 }
echo max_array(array(1, 3,5))."\n";


?>