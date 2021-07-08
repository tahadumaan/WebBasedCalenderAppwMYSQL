<?php
include 'db.php';

if(isset($_POST['eventekle'])) {
    $srtSQL = "INSERT INTO ajanda (tablo_tarih,tablo_baslik,tablo_aciklama,tablo_yapilacak) VALUES ('" . $_POST['tablo_tarih'] . "','". $_POST['tablo_baslik'] . "','". $_POST['tablo_aciklama'] . "','". $_POST['tablo_yapilacak']."')";
    $eventekle = $db->query($srtSQL);

    if (mysqli_affected_rows($db)){
        header("Location:index.php?durum=ok");
    } else {
        header("Location:index.php?durum=no");
    }
}

if(isset($_POST['ayrıntıkaydet'])) {
    $tablo_id=$_GET['id'];
    $srtSQL = "UPDATE ajanda SET tablo_yapilacak = '". $_POST['tablo_yapilacak']."' WHERE tablo_id='$tablo_id'";
    $ayrıntıkaydet = $db->query($srtSQL);

    if (mysqli_affected_rows($db)){
        header("Location:index.php?durum=ok");
    } else {
        header("Location:index.php?durum=no");
    }
}

