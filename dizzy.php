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
    <h2><b>《頭暈》</b></h2>
</div>

<div class="container-sm">
    <div class="row">
        <h4>頭暈主要分為4大類，包括眩暈，即天旋地轉，大都是內耳的疾病，如美尼爾氏症、前庭神經炎和良性陣發性姿勢性眩暈等，建議看耳鼻喉科，小部份是腦幹或小腦中風所引起，建議看神經科。第二種為昏厥，是因由心臟到腦部的血流不足而造成短暫的意識喪失，也就是俗稱的昏倒，引起昏厥的疾病包括如心律不整、姿勢性低血壓、以及迷走神經性昏厥等等，建議看心臟內科與神經科。再來則是不平衡感，因為不平衡感而覺得頭暈，如小腦病變、巴金森症或四肢的周邊神經病變而造成走路不穩，建議看神經科。第四種是頭昏，症狀不是很具體，只覺得頭昏昏沈沈、頭重腳輕或「頭腦不清楚」，有時找不出原因，但常與憂鬱、壓力、睡眠不足、焦慮、服用鎮靜劑或其他藥物有關。緊張恐慌所造成的換氣過度症候群也會讓病人頭昏建議可以看家醫科或是神經科。</h4>
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
                <button type="submit"  class="btn btn-primary font-size" name='d_id' value="00000010000000000000000000"><span>神經科</span></button>

                <!-- <input type='hidden' name='d_id' value="00000010000000000000000000">
                <span><input type='submit' value='神經科'></span> -->
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