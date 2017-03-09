<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/9
 * Time: 14:04
 */
if(isset($_GET['b']) && !empty($_GET['b'])){
    return '{a:1,b:2,c:3,d:4}';
}
if(isset($_POST)) {
    //为了避免gif图因数据加载过快而破坏测试效果,脚本延时5秒返回
    sleep(5);
    echo '加载成功！<br/>';
}