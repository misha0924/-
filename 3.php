<?php 
    if (($_GET[id] == "john") && ($_GET[pwd]=="john1234"))//用來偵測帳密的對錯
        echo "Welcome";  //對的話就歡迎你
    else
        echo "fail login";  //錯的話就驅趕你
?>