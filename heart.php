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
    <h2><b>《心臟不適》</b></h2>
</div>

<div class="container-sm">
    <div class="row">
        <h4>一般有心臟不適會建議先到醫院心臟科門診接受診治，如果不是心臟問題則可以請教你門診的心臟科醫師後續需要到哪一科檢查或是追蹤。因引發心臟不適的可能原因有許多，如心悸有可能是由先天性心臟疾病或甲狀腺機能亢進所引起，而這是所需看診的科別即是內科中的心臟內科，而若是與新總手術相關的問題則須至外科中的心臟外科就診。</h4>
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
                <button type="submit"  class="btn btn-primary font-size" name='d_id' value="00100000000000000000000000"><span>外科</span></button>

                <!-- <input type='hidden' name='d_id' value="00100000000000000000000000">
                <span><input type='submit' value='外科'></span> -->
            </form>
        </div>
    </row>
</div>
