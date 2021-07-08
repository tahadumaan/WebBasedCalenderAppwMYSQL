<?php
$strTarih = date("Y-m-d");
?>
<html>
<head>
    <title>Ajanda</title>
</head>
<body style="background-color: azure">
<?php if(isset($_GET['durum'])) {
    if($_GET['durum'] == 'ok'){ ?> <pre><b>DEĞİŞİKLİKLER KAYDEDİLDİ</b></pre>
    <?php } else if($_GET['durum'] == 'no'){ ?> <pre><b>DEĞİŞİKLİKLER KAYDEDİLMEDİ</b></pre>
<?php } 
}?>
<div style="float:left;width:33%; margin-left: 10px;" > <!-- SOL TARAF -->
    <?php $strTarihpre = date("Y-m-d", strtotime($strTarih . "-" . 1 . " months"));?>
    <?php include 'takvimpre.php';?>
</div>

<div style="float:right;width:33%; ">   <!-- SAĞ TARAF -->
    <?php $strTarihnext = date("Y-m-d", strtotime($strTarih . "+" . 1 . " months"));?>
    <?php include 'takvimnext.php';?>
</div>

<div style="float:right;width:33%;margin-left:5px;" > <!-- ORTA -->
    <?php include 'takvim.php';?>
</div>


<div style="clear:both;">
    <a href="yenievent.php"><button style=" margin-top: 30px;  margin-left: 10px;">Yeni Etkinlik</button></a>

</div>
</body>
</html>