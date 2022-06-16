<?php
    include 'conn.php';
    
    if($_POST){     
        $sql = "INSERT INTO list(tr,ing,img) VALUES('".$_POST["tr"]."','".$_POST["ing"]."','".$_POST["img"]."')";
        $sonuc = mysqli_query($conn,$sql);

        if($sonuc){
            echo"EKLENDİ";
        }
        else{
            echo "EKLENMEDİ";
        }
    }
?>

            <form enctype='multipart/form-data' action='' method='post'>
                </br>
                <input placeholder="türkçe" type='text' name='tr'>
                <input placeholder="ingilizce" type='text' name='ing'>
                <input placeholder="resim linki" type='text' name='img'>
                <div class="col-12 m-3">
                    <input type='submit' class=" btn btn-light m-3" value='Listeye ekle'>
                </div>
            </form>
      