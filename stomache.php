<!DOCTYPE html>
<html lang="zh-TW">
<head>
<title>醫貳參</title>
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
            <a class="navbar-brand" href="#">醫貳參</a>
        </div>
        </nav>
    </div>
</div>

<div class="content-box">
    <h2><b>《腹部疼痛》</b></h2>
</div>

<div class="container-sm">
    <div class="row">
        <h4>腹痛乃常見的症狀，會引起腹部的疾病也多，通常以部位而分廣泛性腹痛及限局部性腹痛。再分右上腹痛、上腹痛、左上腹痛、右下腹痛、下腹痛（小腹痛）及左下腹痛。以腹痛性質而分純痛、飢餓痛、銳痛、絞痛、劇痛、陣痛等，又以發生時期分為急性、亞急性及慢性腹痛之別。致於腹痛的程度即有個人差。廣泛性腹痛常見的是重者有以下幾種 : 腹膜炎，是臨床上的急症，需要立即就醫加以治療，因次建議前往急診，食物中毒、急性腸炎等症狀建議前往肝膽腸胃內科就診，腸阻塞、腸扭結、腸血管栓塞等則建議前往肝膽腸胃外科。輕者有機能腸症，建議可以前往一般內科、 大腸直腸外科、肝膽腸胃科等進行就診。右上腹痛或上腹痛常見的包括消化性潰瘍、膽結石、膽囊炎、胃炎、橫膈膜疝氣胃，建議前往肝膽腸胃內科、一般內科、大腸直腸外科、泌尿科進行就診，若是症狀輕微的腹部疼痛也能前往家醫科進行看診。</h4>
    </row>
</div>

<div class="container-sm">
    <div class="row">
        <h4><b>想要看的科別</b></h4>
    </div>
    
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
                <button type="submit"  class="btn btn-primary font-size" name='d_id' value="00100000000000000000000000"><span>外科</span></button>

                <!-- <input type='hidden' name='d_id' value="00100000000000000000000000">
                <span><input type='submit' value='外科'></span> -->
            </form>
        </div>
        <div class="col-md-auto">
            <form action = "location.php" method = "post">
                <button type="submit"  class="btn btn-primary font-size" name='d_id' value="00000000100000000000000000"><span>泌尿科</span></button>

                <!-- <input type='hidden' name='d_id' value="00000000100000000000000000">
                <span><input type='submit' value='泌尿科'></span> -->
            </form>
        </div>
        <div class="col-md-auto">
            <form action = "location.php" method = "post">
                <button type="submit"  class="btn btn-primary font-size" name='d_id' value="00000000000000000000100000"><span>急診</span></button>

                <!-- <input type='hidden' name='d_id' value="00000000000000000000100000">
                <span><input type='submit' value='急診'></span> -->
            </form>
        </div>
    </row>
</div>