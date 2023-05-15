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
    <h2><b>《嘔吐》</b></h2>
</div>

<div class="container-sm">
    <div class="row">
        <h4>嘔吐常伴有噁心，嘔吐不一定代表疾病的症狀，如暈車、暈船、害喜、恐懼、酒醉等。引起嘔吐的原因有急性胃炎、急性腸炎、腸阻塞、急性闌尾炎、膽囊炎、幽門狹窄、食物中毒等與消化道有關係者，建議看一般內科或是內科中的肝膽腸胃科，和與消化道無關者則有眩暈症、頭外傷、腦膜炎等等建議看耳鼻喉科。</h4>
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
                <button type="submit"  class="btn btn-primary font-size" name='d_id' value="00000000010000000000000000"><span>耳鼻喉科</span></button>

                <!-- <input type='hidden' name='d_id' value="00000000010000000000000000">
                <span><input type='submit' value='耳鼻喉科'></span> -->
            </form>
        </div>
    </row>
</div>