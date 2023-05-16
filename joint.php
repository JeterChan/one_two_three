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
            <a class="navbar-brand" href="index.php">醫二三</a>
        </div>
        </nav>
    </div>
</div>

<div class="content-box">
    <h2><b>《關節疼痛》</b></h2>
</div>

<div class="container-sm">
    <div class="row">
        <h4>常見症狀包括關節的紅腫熱痛、跛行、手腳不靈活、嚴重風濕性關節炎引起的關節變形，若是伴隨發燒，於小兒須考慮骨髓炎、關節炎，於成人須考慮一些過敏性疾病、肝炎等疾病。尿酸過多（痛風）及退化性關節病變也可引起關節痛，建議前往內科中的新陳代謝科、風濕過敏免疫科或是骨科進行治療，若是兒童出現此類症狀，可以前往內科中的兒童內科或是兒科進行診察。</h4>
    </div>
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
                <button type="submit"  class="btn btn-primary font-size" name='d_id' value="00000100000000000000000000"><span>骨科</span></button>

                <!-- <input type='hidden' name='d_id' value="00000100000000000000000000">
                <span><input type='submit' value='骨科'></span> -->
            </form>
        </div>
        <div class="col-md-auto">
            <form action = "location.php" method = "post">
                <button type="submit"  class="btn btn-primary font-size" name='d_id' value="00010000000000000000000000"><span>兒科</span></button>

                <!-- <input type='hidden' name='d_id' value="00010000000000000000000000">
                <span><input type='submit' value='兒科'></span> -->
            </form>
        </div>
    </row>
</div>