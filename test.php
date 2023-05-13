<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <link rel='stylesheet' type='text/css' media='screen' href='style.css' />
<title>連動選單</title>
<script language="JavaScript" type="text/javascript" src="jquerychained/jquery.js"></script>
<script language="JavaScript" type="text/javascript" src="jquerychained/jquery.chainedSelects2.js"></script>
<script language="JavaScript" type="text/javascript">
$(function(){

    $('#car').chainSelect('#style','jquerychained/combobox2.php',{
        before:function (target){
          $('#loading').css('display','block');
            $(target).css("display","none");
        },
        after:function (target){
          $('#loading').css('display','none');
            $(target).css("display","inline");
        },
        defaultValue: '<?php echo $_POST['style'];?>'
    }).change();

    $('#style').chainSelect('#color','jquerychained/combobox2.php',    {
        before:function (target){
          $('#loading').css('display','block');
            $(target).css("display","none");
        },
        after:function (target){
          $('#loading').css('display','none');
            $(target).css("display","inline");
        },
        defaultValue: '<?php echo $_POST['color'];?>'
    }).change();

    $('#color').chainSelect('#cc','jquerychained/combobox2.php',    {
        before:function (target){
          $('#loading').css('display','block');
            $(target).css("display","none");
        },
        after:function (target){
          $('#loading').css('display','none');
            $(target).css("display","inline");
        },
        defaultValue: '2000cc'
    }).change();
});
</script>
<style>
#loading
{
    position:absolute;
    top:0px;
    right:0px;
    background:#ff0000;
    color:#fff;
    font-size:14px;
    font-familly:Arial;
    padding:2px;
    display:none;
}
</style>
</head>
<body>

<div id="loading">載入中 ...</div>

<h3>連動選單範例</h3>
<?php
$select1=($_POST['car']=="福特")?"selected":"";
$select2=($_POST['car']=="日產")?"selected":"";
$select3=($_POST['car']=="豐田")?"selected":"";
?>
<form name="formname" method="post" action="index.php">
    <select id="car" name="car">
    <option value="">請選擇廠牌</option>
    <option value="福特" <?php echo $select1;?>>福特</option>
    <option value="日產" <?php echo $select2;?>>日產</option>
    <option value="豐田" <?php echo $select3;?>>豐田</option>
    </select>
    <select name="style" id="style" style="display:none"></select>
    <select name="color" id="color" style="display:none"></select>
    <select name="cc" id="cc" style="display:none"></select>
    <input type="submit" value="送出">
</form>
<?php
echo "<div>廠牌：{$_POST['car']}</div>";
?>