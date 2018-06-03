<?php 
    header('Content-Type: text/html; charset=UTF-8');
    $types = file_get_contents('./types.txt');
    $types = explode('|', $types);
    $items_str = file_get_contents('./items.txt');
    $items_arr = explode("\r\n", $items_str);
    $data = [];
    foreach($items_arr as $key=>$val){
        $row = explode('|', $val);
        // array_push($data, $row);
        $data[]=$row;
    }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> -->
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="header">
        传智网上水果超市
    </div>
    <div class="container">
        <p>
            <?php foreach($types as $key=>$val){ ?>
            <a href="javascript:;"><?php echo $val;  ?></a>
            <?php  } ?>
        </p>
        <ul>
            <!-- 把水果的数据引入到页面中 -->
                <!-- li的个数有服务器返回的数据决定 -->
            <!-- 遍历动态生成li标签 -->
            <?php  foreach($data as $key=>$val){ ?>
             <li>
                <img src="<?php echo $val[2]; ?>" alt="">
                <a href="#"><?php echo $val[1]; ?></a>
            </li>
            <?php  } ?>
        </ul>
    </div>
    <div class="footer">
        传智播客 版权所有
    </div>
</body>
</html>