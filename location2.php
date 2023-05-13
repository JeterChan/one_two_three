<?php
    if(isset($_POST['city'])){
        $city = $_POST['city'];
    }
    if(isset($_POST['d_id'])){
        $d_id = $_POST['d_id'];
    }
    $opt = array();
    $tapei = [0=>"松山區", 1=>"信義區", 2=>"大安區", 3=>"中山區", 4=>"中正區", 5=>"大同區", 6=>"萬華區", 7=>"文山區", 8=>"南港區", 9=>"內湖區", 10=>"士林區", 
                11=>"北投區",];
    $newtp = [0=>"板橋區", 1=>"三重區", 2=>"中和區", 3=>"永和區", 4=>"新莊區", 5=>"新店區", 6=>"樹林區", 7=>"鶯歌區", 8=>"三峽區", 9=>"淡水區", 10=>"瑞芳區", 
                11=>"汐止區", 12=>"土城區", 13=>"蘆洲區", 14=>"五股區", 15=>"泰山區", 16=>"林口區", 17=>"深坑區", 18=>"石碇區", 19=>"坪林區",
                20=>"三芝區", 21=>"石門區", 22=>"八里區", 23=>"雙溪區", 24=>"貢寮區", 25=>"金山區", 26=>"萬里區", 27=>"烏來區",];
    if($city == "臺北市"){ $opt = $tapei; }
    else if($city == "新北市"){ $opt = $newtp; }
?>

<!DOCTYPE html>
<html lang="zh-TW">
<head>
<title>醫二三</title>
<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1">        <!--到mobile裝置上仍可正常顯示,指定螢幕寬度為裝置寬度,畫面載入初始縮放比例 100% -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<link rel="stylesheet" href="/page_css/location.css">

</head>
<body>
<div class="row">
    <div class="container-fluid">
        <nav class="navbar fixed-top navbar-dark" style="background-color: #2F4F4F;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">醫二三</a>
        </div>
        </nav>
    </div>
</div>

<div class="content-box">
    <h2>請填入位置資訊，若是不確定詳細地址也可以使用附近地標查詢!</h2>
</div>

<form action = "show.php" method = "post">
    <input type='hidden' name='d_id' value="<?php echo $d_id;?>">
    <div class="container">

        <div class="row">
        <div class="input-group input-group-lg mb-3">
                <label class="input-group-text" for="town">鄉鎮市區</label>
                <select class="form-select" id="city" name="town">
                    <option selected>請選擇所在鄉鎮市區...</option>
                    <?php
                        foreach($opt as $option):;
                    ?>
                    <option value="<?php echo $city.$option;?>"><?php echo $option;?></option>
                    <?php
                        endforeach;
                    ?>
                </select>
            </div>
        </div>

    </div>

    <div class="container-xl">

        <div class="row">
            <div class="input-group input-group-lg">
                <span class="input-group-text" id="addr">位置資訊</span>
                <input type="text" class="form-control" aria-label="Large input group" aria-describedby="input-group-lg" name="addr">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <input type="submit" value="確認送出"><!--按下這個送出按鈕就可以把文字送到後端-->
        </div>
    </div>
</form>
</html>