<?php
include 'db.php';
//$strTarih = "2020-10-22";
//$strTarih = date("Y-m-d");

$strIlkGun = date("Y-m-01", strtotime($strTarihpre));
$strSonGun = date("Y-m-t", strtotime($strTarihpre));

$intIlkGun = date("N", strtotime($strIlkGun));,
$intSonGun = date("N", strtotime($strSonGun));

$strTakvimIlk = date("Y-m-d", strtotime($strIlkGun . " -" . ($intIlkGun - 1) . " days"));
$strTakvimSon = date("Y-m-d", strtotime($strSonGun . " +" . (7 - $intSonGun) . " days"));
$strAyIsim = date("F", strtotime($strTarihpre));
?>
<center><h1 style="margin-right: 40px;"><?php echo $strAyIsim ?></h1></center>
<table border="1" cellspacing="0" cellpadding="5" width="90%" height="60%" style="background-color: #EAEAEA">
    <tr>
        <td style="width:55px; text-align:center" >Pzt</td>
        <td style="width:55px; text-align:center" >Sal</td>
        <td style="width:55px; text-align:center" >Çar</td>
        <td style="width:55px; text-align:center" >Per</td>
        <td style="width:55px; text-align:center" >Cum</td>
        <td style="width:55px; text-align:center" bgcolor=#a7e0e0 >Cts</td>
        <td style="width:55px; text-align:center" bgcolor=#a7e0e0 >Paz</td>
    </tr>
    <?php $strTakvimGun = $strTakvimIlk; ?>

    <?php while ($strTakvimGun <= $strTakvimSon) { ?>

        <?php if (date("N", strtotime($strTakvimGun)) == 1) { ?>
            <tr>
        <?php } ?>

        <?php if (date("m", strtotime($strTakvimGun)) == date("m", strtotime($strTarihpre))) { ?>
            <td style="width:55px; text-align:center" <?php if(((date("N", strtotime($strTakvimGun))) == 6) or ((date("N", strtotime($strTakvimGun))) == 7) ){ ?> bgcolor="a7e0e0" <?php } ?> <?php $strSQL="SELECT * FROM ajanda WHERE tablo_tarih='$strTakvimGun'";
            $res= $db->query($strSQL);
            $cnt=$res->num_rows;
            if($cnt>0){
                ?> bgcolor="#f7ffaa" <?php
            }
            ?>><?php if($cnt>0) { ?> <a href="etkinlikler.php?tarih=<?php echo $strTakvimGun; ?>"><?php echo date("j", strtotime($strTakvimGun));?></a> <?php }else { echo date("j", strtotime($strTakvimGun));} ?></td>
        <?php } else { ?>
            <td style="width:55px; text-align:center" <?php if(((date("N", strtotime($strTakvimGun))) == 6) or ((date("N", strtotime($strTakvimGun))) == 7) ){ ?> bgcolor="a7e0e0" <?php } ?> >&nbsp;</td>
        <?php } ?>

        <?php if (date("N", strtotime($strTakvimGun)) == 7) { ?>
            </tr>
        <?php } ?>

        <?php $strTakvimGun = date("Y-m-d", strtotime($strTakvimGun . "+1 days")); ?>

    <?php } ?>
</table>

