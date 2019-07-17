<?php
//5.次のビルトイン関数の用途、
//使い方を調べて実際に使ってみてください。

    //strip_tags
    
        $str = "<h1>タグを取り除いて</1>"
                ."<p>改行しなくなりました！</p>";
            echo strip_tags($str)."\n";
    
            
    //array_push
    
        $numbers = ["one","two"];
            array_push($numbers,"three","four");
            print_r($numbers);
            echo "\n";
    
    //array_merge
    
        $fruits1 = ["apple","banana"];
        $fruits2 = ["melon","cherry"];
        $fruits3 = ["orange","strawberry"];
        $fruits = array_merge($fruits1,$fruits2,$fruits3);
            print_r($fruits);
            echo"\n";
            
            
    //time, mktime ついでにdateも。
    
        $date1 = time();
        echo "現在".date("Y年m月d日H時i分s秒",$date1)
            ."のタイムスタンプは".time()."です。\n";
        
        $date2 = mktime(0,0,0,7,20,2019);
        echo date("Y年m月d日H時i分s秒",$date2)."のタイムスタンプは："
            .mktime(0,0,0,7,20,2019). "です。\n";
            
        $date3 = date('Y年m月d日');
        echo "今日は$date3 です。\n";
 
?>