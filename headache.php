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
    <h2><b>《頭痛》</b></h2>
</div>

<div class="container-sm">
    <div class="row">
        <h4>引發頭痛的狀況有很多，如睡眠不足、緊張、感冒、感染、腦炎、腦膜炎、青光眼、牙病等等，若是一般輕微的頭痛，可以前往家醫科、一般內科等進行就診，如果患有明顯鼻竇炎的頭痛患者，則需要耳鼻喉科醫師的幫助，若是更嚴重的頭痛狀況，建議可以至神經內科或神經科就診，請醫生幫忙判斷詳細病況，而焦慮所引起的頭疼則須前往神經科就診，牙病或是青光眼也有可能造成頭部疼痛，可前往眼科與一般牙科看診。</h4>
    </row>
</div>

<div class="container-sm">
    <div class="row">
        <h4><b>想要看的科別</b></h4>
    </row>
    
</div>

<div class="container-sm">
    <div class="row">
        <div class="col justify-content-center">
            <form action = "location.php" method = "post">
                <input type='hidden' name='d_id' value="01000000000000000000000000">
                <span><input type='submit' value='內科'></span>
            </form>
        </div>
        <div class="col justify-content-center">
            <form action = "location.php" method = "post">
                <input type='hidden' name='d_id' value="10000000000000000000000000">
                <span><input type='submit' value='家醫科'></span>
            </form>
        </div>
        <div class="col justify-content-center">
            <form action = "location.php" method = "post">
                <input type='hidden' name='d_id' value="00000010000000000000000000">
                <span><input type='submit' value='神經科'></span>
            </form>
        </div>
        <div class="col justify-content-center">
            <form action = "location.php" method = "post">
                <input type='hidden' name='d_id' value="00000000000000000000000010">
                <span><input type='submit' value='牙科'></span>
            </form>
        </div>
        <div class="col justify-content-center">
            <form action = "location.php" method = "post">
                <input type='hidden' name='d_id' value="00000000001000000000000000">
                <span><input type='submit' value='眼科'></span>
            </form>
        </div>
        <div class="col justify-content-center">
            <form action = "location.php" method = "post">
                <input type='hidden' name='d_id' value="00000000010000000000000000">
                <span><input type='submit' value='耳鼻喉科'></span>
            </form>
        </div>
    </row>
</div>