<?php include 'conn.php';
$sql = "SELECT * FROM list";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
 
} 
?>
<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barış Şimşek </title>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <div class="container-fluid p-4">
        <div class="col-md-12 text-center mt-3"><h1 class="name">BARIŞ ŞİMŞEK</h1></div>
        <div class="row">  
            <div class="col-md-12">
                <table id="example" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>Türkçe Kelime</th>
                            <th>İngilizce Kelime</th>
                            <th>Resim</th>
                        </tr>
                    </thead>
                    <tbody>
                       <?php
                        while($row = $result->fetch_assoc()) {
                            echo "
                            <tr>
                            <td id='hov' onclick='speakMe(this)'>".$row['tr']."</td>
                            <td id='hov' onclick='speakMeEn(this)'>".$row['ing']."</td>
                            <td><img onclick='clickMe(this);' class='img-wid' src='".$row['img']."'</td>
                        </tr>
                            ";                           
                          }
                       
                       ?>
                        

                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Türkçe Kelime</th>
                            <th>İngilizce Kelime</th>
                            <th>Resim</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
                <div class="col-md-12">
                <div id="pp" class="popup">
                    <div id="cancel" class="close"></div>
                    <div id="pop-id" class="pop-img">
                        <img id="pop-img" width="100%" height="80%" src="<?=$row['tr']?>" alt="">
                    </div>
                </div>
            </div>
          <!-- <div class="col-md-1 d-flex">
                <input type="text" id="txtAd" value="Barış">
                <button type="button" class="btn btn-warning" id="uyari">Konuş</button>
            </div>-->
        </div>
    </div>
    <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" charset="utf8"
        src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
    <script src="./app.js"></script>
    <script>
        var cls = document.getElementById("cancel");
        cls.onclick = function () {
            document.getElementById("pp").style.display = "none";
        }
        var o = document.getElementById("opimg");
        function clickMe(e){
            
            document.getElementById("pp").style.display = "block";
            document.getElementById("pop-img").setAttribute("src",e.getAttribute("src"));
        }
         function speakMeEn(e){
            responsiveVoice.speak(e.innerHTML, 'UK English Female');
        }
         function speakMe(e){
            responsiveVoice.speak(e.innerHTML, 'Turkish Female');
        }
        
        var btn = document.getElementById("uyari");
        btn.onclick = function () {
            var ad = document.getElementById("txtAd");
        }

    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>