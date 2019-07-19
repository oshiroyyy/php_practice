<?php
// 3、「http://XXXXXX.jp/XXXというアクセスが来たときに、 
// AAAControllerのbbbというAction に渡すRoutingの設定」
// を書いてみてください。

Route::get('XXX', 'Admin\AAAController@bbb');

?>