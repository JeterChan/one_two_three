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
            <a class="navbar-brand" href="index.php">醫貳參</a>
        </div>
        </nav>
    </div>
</div>

<div class="content-box">
    <h2><b>《腰背痠痛》</b></h2>
</div>

<div class="container-sm">
    <div class="row">
        <h4>常見的病因有下肢的放射痛（坐骨神經痛），有時是泌尿系統或婦產科疾病造成的影響。單純的背痛常因肌肉扭傷或姿勢不良引起，非單純性的背痛，可能是椎骨畸型、腫瘤、骨刺或椎間盤軟骨壓迫神經所致，建議前往妹科中的風濕過敏免疫科、婦產科、泌尿科、復健科、骨科、神經內科等進行診察。</h4>
    </row>
</div>

<div class="container-sm">
    <div class="row">
        <h4><b>想要看的科別</b></h4>
    </row>
    
</div>

<div class="container-sm">
    <div class="row">
        <div class="col-md-auto">
            <form action = "location.php" method = "post">
                <button type="submit"  class="btn btn-primary font-size  btn-color" name='d_id' value="01000000000000000000000000" ><span>內科</span></button>
                <!-- <input type='hidden' name='d_id' value="01000000000000000000000000">
                <span><input type='submit' value='內科'></span> -->
            </form>
        </div>
        <div class="col-md-auto">
            <form action = "location.php" method = "post">
                <button type="submit"  class="btn btn-primary font-size btn-color" name='d_id' value="00000100000000000000000000"><span>骨科</span></button>

                <!-- <input type='hidden' name='d_id' value="00000100000000000000000000">
                <span><input type='submit' value='骨科'></span> -->
            </form>
        </div>
        <div class="col-md-auto">
            <form action = "location.php" method = "post">
                <button type="submit"  class="btn btn-primary font-size btn-color" name='d_id' value="00001000000000000000000000"><span>婦產科</span></button>

                <!-- <input type='hidden' name='d_id' value="00001000000000000000000000">
                <span><input type='submit' value='婦產科'></span> -->
            </form>
        </div>
        <div class="col-md-auto">
            <form action = "location.php" method = "post">
                <button type="submit"  class="btn btn-primary font-size btn-color" name='d_id' value="00000000100000000000000000"><span>泌尿科</span></button>

                <!-- <input type='hidden' name='d_id' value="00000000100000000000000000">
                <span><input type='submit' value='泌尿科'></span> -->
            </form>
        </div>
        <div class="col-md-auto">
            <form action = "location.php" method = "post">
                <button type="submit"  class="btn btn-primary font-size btn-color" name='d_id' value="00000000000001000000000000">復健科</button>

                <!-- <input type='hidden' name='d_id' value="00000000000001000000000000">
                <span><input type='submit' value='復健科'></span> -->
            </form>
        </div>
    </row>
</div>