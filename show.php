<?php
    $town = "town";
    $addr = "address";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $town = trim($_POST['town']);
        $addr = trim($_POST['addr']);
        $department_id = bindec($_POST['d_id']);
    }
    $region = $town;
    $full_addr = $region . $addr;

    $params = $full_addr;
    $path="python find_loc.py ";
    exec($path.$params , $user_loc);

    $db_host = "localhost";
    $db_username = "root";
    $db_password = "";
    $database = "hospital_info";

    $con = mysqli_connect("$db_host", "$db_username", "$db_password", "$database");

    $url = "https://www.google.com.tw/maps/place/";

    if(!$con)
    {
        die("連線失敗!!!!!");

        $ssql = "set names utf8";
        mysqli_query($con, $ssql);
    }

    $query = "SELECT name, department_code, gin, wei, address, phone FROM hospital_list WHERE region='$region'";
    $result = mysqli_query($con, $query);
    if ($result) {
        // mysqli_num_rows方法可以回傳我們結果總共有幾筆資料
        if (mysqli_num_rows($result)>0) {
            // 取得大於0代表有資料
            // while迴圈會根據資料數量，決定跑的次數
            // mysqli_fetch_assoc方法可取得一筆值
            while ($row = mysqli_fetch_assoc($result)) {
                // 每跑一次迴圈就抓一筆值，最後放進data陣列中
                $datas[] = $row;
            }
        }
        // 釋放資料庫查到的記憶體
        mysqli_free_result($result);
    }
    else {
        echo "{$sql} 語法執行失敗，錯誤訊息: " . mysqli_error($link);
    }

    function getDistanceBetweenPointsNew($latitude1, $longitude1, $latitude2, $longitude2, $unit = 'kilometers') {
        $theta = $longitude1 - $longitude2; 
        $distance = (sin(deg2rad($latitude1)) * sin(deg2rad($latitude2))) + (cos(deg2rad($latitude1)) * cos(deg2rad($latitude2)) * cos(deg2rad($theta))); 
        $distance = acos($distance); 
        $distance = rad2deg($distance); 
        $distance = $distance * 60 * 1.1515; 
        switch($unit) { 
          case 'miles': 
            break; 
          case 'kilometers' : 
            $distance = $distance * 1.609344; 
        } 
        return $distance; 
    }


    $distance_arr = array();
    $name_arr = array();
    $addr_arr = array();
    $phone_arr = array();
    // 處理完後印出資料
    if(!empty($result)){
        foreach($datas as $ob){
            $mask = $ob['department_code'] & $department_id;
            if($mask != 0){
                $distance = @getDistanceBetweenPointsNew($user_loc[1], $user_loc[0], $ob['wei'], $ob['gin']);
                array_push($distance_arr, $distance);
                array_push($name_arr, $ob['name']);
                array_push($addr_arr, $ob['address']);
                array_push($phone_arr, $ob['phone']);
            }
        }

        array_multisort($distance_arr, $name_arr);
    }
    else {
        // 為空表示沒資料
        echo "查無資料";
    }

?>
<!DOCTYPE html>
<html lang="zh-TW">
<head>
<title>醫二三</title>
<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1">        <!--到mobile裝置上仍可正常顯示,指定螢幕寬度為裝置寬度,畫面載入初始縮放比例 100% -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<link rel="stylesheet" href="/page_css/show.css">

</head>
<body>
<div class="row">
    <div class="container-fluid">
        <nav class="navbar fixed-top navbar-dark" style="background-color: #2F4F4F;">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">醫二三</a>
        </div>
        </nav>
    </div>
</div>
<?php
    if (count($name_arr) == 0):; 
?>
<div class="container">
    <h1><b>您所在的鄉鎮沒有此科別的醫院診所，請回到上一頁嘗試隔壁鄉鎮!</b></h1>
</div>
<div class="container">
    <figure class="figure">
        <img src="image/sorry.jpg" class="figure-img img-fluid rounded" alt="figure-img">
        <figcaption class="figure-caption"></figcaption>
    </figure>
</div>
<?php endif; ?>
<?php for($i = 0; $i < count($name_arr); $i++):; ?>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <?php $one = 1; echo "距離第".$i+$one."近的醫院診所";?>
            </div>
            <div class="card-body">
                <h5 class="card-title" style="font-weight: bold"><?php echo $name_arr[$i]; ?></h5>
                <p class="card-text" style="font-size: 16"><?php echo "地址 : ".$addr_arr[$i]."</br>"; echo "電話 : ".$phone_arr[$i];?></p>
                <a href="<?php echo $url.$addr_arr[$i];?>" target="_blank" class="btn btn-primary" style="background-color: #2F4F4F;">查詢地點</a>
            </div>
        </div>
    </div>
<?php endfor; ?>
