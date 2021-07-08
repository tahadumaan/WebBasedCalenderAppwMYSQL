<?php
include 'db.php';
$tablo_tarih = $_GET['tarih'];
$tablo_id = $_GET['id'];
$objConn = $db->query("SELECT * FROM ajanda WHERE tablo_id='$tablo_id'");
$arrRes = $objConn->fetch_all(1);
$objConn2 = $db->query("SELECT * FROM ajanda WHERE tablo_tarih='$tablo_tarih'");
$arrRes2 = $objConn2->fetch_all(1);
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Etkinlikler</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet"/>
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet"/>
    <!--CUSTOM BASIC STYLES-->
    <link href="assets/css/basic.css" rel="stylesheet"/>
    <!--CUSTOM MAIN STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet"/>
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'/>
</head>
<body>
<div id="wrapper">

<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
            <li>
                <a class="active-menu" href="index.php"><i
                            class="fa fa-calendar btn-lg"></i><?php print_r($arrRes[0]['tablo_tarih']); ?></a>
            </li>

            <?php
            foreach ($arrRes2
                     as $sira2 => $deger2){ ?>
                <li>
                    <a href="etkinlikicerik.php?tarih=<?php echo $tablo_tarih; ?>&id=<?php print_r($deger2['tablo_id']); ?>"><i class="fa fa-calendar-o btn-xs"></i><?php print_r($deger2['tablo_baslik']); ?></a>
                </li> <?php
            }
            ?>
        </ul>
    </div>
</nav>
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row" style="text-align: center;">
                <div class="col-md-12">
                    <h1 class="page-head-line"><?php print_r($arrRes[0]['tablo_tarih']); ?> tarihindeki etkinlikler</h1>
                    <h1 class="page-subhead-line"><?php print_r($arrRes[0]['tablo_tarih']); ?>'tarihindeki <?php print_r($arrRes[0]['tablo_baslik']); ?> başlıklı etkinlik.</h1>
                </div>
                <?php print_r($arrRes[0]['tablo_aciklama']); ?>
            </div>
            <br><br>
            <form action="islem.php?id=<?php echo $tablo_id ?>" method="POST" >
            <div style="white-space:nowrap; width: 5%;margin-right: 100px; " >
                <b><label style="color: green">Yapıldı</label></b>
                <input type="radio" name="tablo_yapilacak" value="yapildi" <?php if($arrRes[0]['tablo_yapilacak'] == 'yapildi') { ?> checked <?php } ?> >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <b><label style="color: red">Yapılmadı</label></b>
                <input type="radio" name="tablo_yapilacak" value="yapilmadi" <?php if($arrRes[0]['tablo_yapilacak'] == 'yapilmadi') { ?> checked <?php } ?> >
                <br><br><br>
                <button type="submit" name="ayrıntıkaydet">Kaydet</button>
            </div>
            </form>
        </div>
    </div>





</body>
</html>
