<!DOCTYPE html>
<html lang="zh-TW">
<head>
<title>醫二三</title>
<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1">        <!--到mobile裝置上仍可正常顯示,指定螢幕寬度為裝置寬度,畫面載入初始縮放比例 100% -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<link rel="stylesheet" href="/page_css/diease.css">

</head>
<body>
<div class="row ">
    <div class="container-fluid">
        <nav class="navbar fixed-top navbar-dark" style="background-color: #2F4F4F;">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">醫二三</a>
        </div>
        </nav>
    </div>
</div>

<div class="content-box">
    <h2><b>《感冒症狀》</b></h2>
</div>

<div class="container-sm">
    <div class="row">
        <h4>若是出現鼻塞、流鼻水、喉嚨痛、伴有耳鳴不適、頭痛及發燒等經典感冒症狀，也就是上呼吸道症狀，可以先到一般內科、耳鼻喉科或家醫科看診；然而若是有咳嗽、咳痰、咳血、呼吸困難、胸痛及發燒現象，則是下呼吸道症狀，建議第一時間找胸腔內科醫師看診，安排胸部X光檢查，必要時接受肺功能與電腦斷層檢查，才能正確鑑別診斷。</h4>
    </row>
</div>

<div class="container-sm">
    <div class="row">
        <h4><b>想要看的科別</b></h4>
    </row>
    
</div>

<div class="container-sm">
    <div class="row justify-content-center">
        <div class="col-md-auto">
            <form action = "location.php" method = "post">
                <button type="submit"  class="btn btn-primary font-size" name='d_id' value="01000000000000000000000000"><span>內科</span></button>

                <!-- <input type='hidden' name='d_id' value="01000000000000000000000000">
                <span><input type='submit' value='內科'></span> -->
            </form>
        </div>
        <div class="col-md-auto">
            <form action = "location.php" method = "post">
                <button type="submit"  class="btn btn-primary font-size" name='d_id' value="10000000000000000000000000"><span>家醫科</span></button>

                <!-- <input type='hidden' name='d_id' value="10000000000000000000000000">
                <span><input type='submit' value='家醫科'></span> -->
            </form>
        </div>
        <div class="col-md-auto">
            <form action = "location.php" method = "post">
                <button type="submit"  class="btn btn-primary font-size" name='d_id' value="00000000010000000000000000"><span>耳鼻喉科</span></button>
<!-- 
                <input type='hidden' name='d_id' value="00000000010000000000000000">
                <span><input type='submit' value='耳鼻喉科'></span> -->
            </form>
        </div>
    </row>
</div>