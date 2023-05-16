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
    <h2><b>《呼吸困難》</b></h2>
</div>

<div class="container-sm">
    <div class="row">
        <h4>呼吸困難是一種主觀的症狀，不一定代表疾病的症狀。正常生活中由於情緒壓力、緊張、激烈運動及肥胖的人可能會經驗到呼吸困難，由於年齡、性別、生理狀況、精神上的剌激而有不同程度的表現，多半是一過性或暫時性。引起呼吸困難的疾病有心臟衰竭、氣喘、肺炎、肺氣腫、肺水腫、肺結核、肋膜積水、急性氣胸、呼吸道狹窄、呼吸道阻塞、呼吸道異物、呼吸肌麻痺、聲帶麻痺、冠狀動脈症、胸縱隔腫瘤、喉咽腫大、白喉、心膜炎、支氣管或肺炎、貧血、肺栓塞等，建議前往內科中的一般內科、呼吸胸腔內科或是一般外科耳鼻喉科尋求幫助，若是有呼吸困難的狀況，也可以至急診求助。</h4>
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
        <div class="col-md-auto">
            <form action = "location.php" method = "post">
                <button type="submit"  class="btn btn-primary font-size" name='d_id' value="00000000000000000000100000"><span>急診</span></button>

                <!-- <input type='hidden' name='d_id' value="00000000000000000000100000">
                <span><input type='submit' value='急診'></span> -->
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