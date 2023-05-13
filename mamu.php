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
    <h2><b>《手腳麻木》</b></h2>
</div>

<div class="container-sm">
    <div class="row">
        <h4>若是休息便可平復的麻木感可能是因為處於不同姿勢長時間所引起四肢的麻木感，若久久不退、部段重複出現的麻木感就有可能是其他原因，成因有可能是糖尿病、血管栓塞症等等，如因姿勢改變而引起手腳麻木，則有可能是頸椎或腰椎的病變，神經被壓迫時也會造成手腳麻木的情形，建議前往一般內科、內科中的新陳代謝科、心臟內科或是一般外科、骨科進行治療。</h4>
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
                <input type='hidden' name='d_id' value="00000100000000000000000000">
                <span><input type='submit' value='骨科'></span>
            </form>
        </div>
        <div class="col justify-content-center">
            <form action = "location.php" method = "post">
                <input type='hidden' name='d_id' value="00100000000000000000000000">
                <span><input type='submit' value='外科'></span>
            </form>
        </div>
    </row>
</div>