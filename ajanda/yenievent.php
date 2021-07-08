
<!DOCTYPE html>
<html>
    <script src="https://cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>
<head>
    <meta charset="utf-8"/>
    <title>ETKİNLİK KAYIT FORMU</title>
    <meta charset="utf-8">
    <title>CKEditor</title>
    <script src="https://cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>
    <style>
        *:focus{
    outline: 0;
}
        h1{
    text-align: center;
            color: #3498DB;
        }

        form{
    border: 5px solid #777;
            margin: 20px auto;
            width: 700px;
            padding: 30px 50px;
            border-radius: 10px;
            height: 600px;
        }
        input{
    width: 100%;
    padding-left: 10px;
            margin-top: 10px;
            line-height: 35px;
            border-radius: 10px;
            box-sizing: border-box;
        }
        button{
    background-color: #fff;
            color: #3498DB;
            width: 100%;
            line-height: 35px;
            font-size: 17px;
            border-radius: 5px;
            margin-top: 10px;
        }
        select{
    width: 100%;
    padding-left: 10px;
            margin-top: 10px;
            line-height: 35px;
            border-radius: 10px;
            box-sizing: border-box;
        }
        button:hover{
    background-color: #777777
        }

    </style>
</head>
<body style="background-color: azure">
    <form action="islem.php" method="POST" style="background-color: #EAEAEA">

        <h1 style="margin-top: -20px;margin-bottom: -5px;">ETKİNLİK KAYIT FORMU</h1>

        <label for="tarih">Etkinlik Tarih* </label>
        <input type="date" name="tablo_tarih" style="margin-top: 5px;"">
        <br><br>

        <label for="baslik">Etkinlik Başlık* </label>
        <input type="text" name="tablo_baslik" placeholder="Etkinliğin başlığını giriniz">
        <br><br>

        <label for="açıklama">Açıklama* </label>
        <br><br>
        <textarea name="tablo_aciklama"></textarea>
        <script>
            CKEDITOR.replace( 'tablo_aciklama' );
        </script>
        <br>


        <div style="white-space:nowrap; width: 5%;margin-right: 100px; " >
            <b><label style="color: green">Yapıldı</label></b>
            <input type="radio" name="tablo_yapilacak" value="yapildi">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

            <b><label style="color: red">Yapılmadı</label></b>
            <input type="radio" name="tablo_yapilacak" value="yapilmadi" checked>
        </div>

        <button type="submit" name="eventekle">Event Ekle</button>
    </form>
</body>
</html>