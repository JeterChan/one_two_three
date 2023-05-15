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
    <h2><b>《眼部症狀》</b></h2>
</div>

<div class="container-sm">
    <div class="row">
        <h4>常見的眼部症狀有以下幾種 : 視力模糊，起因多為近視老花眼、嚴重眼疾(白內障)、眼部黃斑病變、急性青光眼、眼部葡萄膜炎、慢性病(糖尿病)，建議可以前往眼科就診，若是由特殊原因(如糖尿病)所引起的眼部病變，則可以前往內科中的新陳代謝內分泌科檢查。複視(東西看成兩個) : 原因包刮嚴重散光、角膜不整、白內障、水晶體脫位、黃斑部病變或重症肌無力等等，可以前往眼科或視神經內科進行治療。眼睛痛或眼周圍痛或是眼睛癢眼分泌物 : 起因為各項眼疾，建議前往眼科進行診察。眼瞼水腫 : 病因可能為結膜炎、腎臟疾病或是心臟機能，建議前往眼科或是心臟內科、腎臟內科。眼瞼下垂 : 病因包括顏面神經痳痺、肌能無力症、腦部疾病等等，建議前往眼科、神經科治療，若是祥恢復下垂眼瞼也可至整形外科諮詢。</h4>
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
                <button type="submit"  class="btn btn-primary font-size" name='d_id' value="00000000001000000000000000"><span>眼科</span></button>

                <!-- <input type='hidden' name='d_id' value="00000000001000000000000000">
                <span><input type='submit' value='眼科'></span> -->
            </form>
        </div>
        <div class="col-md-auto">
            <form action = "location.php" method = "post">
                <button type="submit"  class="btn btn-primary font-size" name='d_id' value="00000010000000000000000000"><span>神經科</span></button>

                <!-- <input type='hidden' name='d_id' value="00000010000000000000000000">
                <span><input type='submit' value='神經科'></span> -->
            </form>
        </div>
        <div class="col-md-auto">
            <form action = "location.php" method = "post">
                <button type="submit"  class="btn btn-primary font-size" name='d_id' value="00000000000000000000010000"><span>整形外科</span></button>

                <!-- <input type='hidden' name='d_id' value="00000000000000000000010000">
                <span><input type='submit' value='整形外科'></span> -->
            </form>
        </div>
    </row>
</div>