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

    if(!$con)
    {
        die("連線失敗!!!!!");

        $ssql = "set names utf8";
        mysqli_query($con, $ssql);
    }

    $query = "SELECT name, department_code, gin, wei FROM hospital_list WHERE region='$region'";
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
    // 處理完後印出資料
    if(!empty($result)){
        foreach($datas as $ob){
            $mask = $ob['department_code'] & $department_id;
            if($mask != 0){
                $distance = getDistanceBetweenPointsNew($user_loc[1], $user_loc[0], $ob['wei'], $ob['gin']);
                array_push($distance_arr, $distance);
                array_push($name_arr, $ob['name']);
            }
        }

        array_multisort($distance_arr, $name_arr);

        foreach($name_arr as $na){
            echo $na."\n";
        }
    }
    else {
        // 為空表示沒資料
        echo "查無資料";
    }
    
    



?>
