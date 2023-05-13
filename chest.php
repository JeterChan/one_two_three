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
    <h2><b>《胸痛胸悶》</b></h2>
</div>

<div class="container-sm">
    <div class="row">
        <h4>胸痛是常見的症狀之一，依部位、年齡之別有不同疾病之可能。下列疾病可能引起前胸痛如狹心症、冠狀動脈症、心肌梗塞、大動脈瘤、胸縱隔腫瘤、橫隔膜疝氣、心膜炎、氣胸、胸部外傷、肺栓塞、肺炎、肺結核、嚴重咳嗽、乳房炎、神經痛、胸肌痛等等；側胸痛可能為肋膜炎、肋膜神經痛、肺炎、肋骨骨折、肺癌、肋骨轉移癌、帶狀泡疹、氣胸等等，乃是胸腔疾病為多，有時脊椎病變也呈現胸痛。建議看診科別為內科中的一般內科、心臟內科、胸腔內科，或是外科中的胸腔及心臟血管外科、一般外科，若是由帶狀泡疹(皮蛇)所引起的胸痛，則須至皮膚科看診。</h4>
    </row>
    <div class="row">
        <h4>可能引發發胸悶的疾病也有許多，如常見的心血管疾病包括瓣膜性心臟病（其中較常見的是二尖瓣脫垂）、冠狀動脈心臟病等等，這是建議前往內科中的心臟內科就診，肺部疾病例如氣喘、肺栓塞、慢性阻塞性肺病和肺炎等也可能引發胸悶，某些胸悶的情況與肌肉拉傷和骨頭挫傷有關，這種狀況多不嚴重，建議可至骨科、一般外科就診，消化道疾病造成的胸悶中又以胃食道逆流較常見，可以找內科中的腸胃科或是家醫科就診。憂鬱症或是焦慮症這種負面情緒都可能會有胸悶的症狀，若是狀況過於嚴重，也可以找精神科尋求醫療幫助。</h4>
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
                <input type='hidden' name='d_id' value="00100000000000000000000000">
                <span><input type='submit' value='外科'></span>
            </form>
        </div>
        <div class="col justify-content-center">
            <form action = "location.php" method = "post">
                <input type='hidden' name='d_id' value="00000000000100000000000000">
                <span><input type='submit' value='皮膚科'></span>
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
                <input type='hidden' name='d_id' value="10000000000000000000000000">
                <span><input type='submit' value='家醫科'></span>
            </form>
        </div>
        <div class="col justify-content-center">
            <form action = "location.php" method = "post">
                <input type='hidden' name='d_id' value="00000000000010000000000000">
                <span><input type='submit' value='精神科'></span>
            </form>
        </div>
    </row>
</div>