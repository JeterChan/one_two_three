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
    <h2><b>《皮膚病症》</b></h2>
</div>

<div class="container-sm">
    <div class="row">
        <h4>若是疹子，水痘等症狀，有可能為帶狀皰疹(皮蛇)、玫瑰糠疹、蕁麻疹、單純皰疹、汗皰疹等所引起，較輕微者可以前往家醫科，嚴重者可至皮膚科。如有皮膚紅腫痛的症狀，起因可能為細菌性毛囊炎、帶狀皰疹(皮蛇)、蜂窩組織炎等等，建議前往皮膚科看診。若是有皮下腫塊，可能成因為軟組織腫瘤、良性脂肪瘤等等，可以前往皮膚科、一般外科、整形外科進行處理。</h4>
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
                <input type='hidden' name='d_id' value="00000000000100000000000000">
                <span><input type='submit' value='皮膚科'></span>
            </form>
        </div>
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
                <input type='hidden' name='d_id' value="00100000000000000000000000">
                <span><input type='submit' value='外科'></span>
            </form>
        </div>
        <div class="col justify-content-center">
            <form action = "location.php" method = "post">
                <input type='hidden' name='d_id' value="00000000000000000000010000">
                <span><input type='submit' value='整形外科'></span>
            </form>
        </div>
    </row>
</div>