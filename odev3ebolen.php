<!doctype html>
<html lang="tr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col sm-6 text-center mt-5">
                <form  method="post">
    <label for="Number"> Lütfen Numarayı Giriniz</label><br>
    <input type="Number"  name="Number" placeholder="Number"><br>

    <button class="btn btn-outline-dark mt-3 mb-5" type="submit">Gönder</button>

</form>
    
<?php 

        $num=$_POST['Number'];
        if($num==""){
            echo '<div class="alert alert-danger" role="alert">
            Boş bir Numara Göderemezsinizz....
          </div>';
        
        }
        else{
           if($num%3==0){
            echo 'Girilen Sayı: ' . $num;
            echo '<div class="alert alert-success" role="alert">
             Sayınız Tam olarak 3 e bülünüyor..
          </div>';
           }
           elseif(($num+1)%3==0){

            echo 'Girilen Sayı: ' . $num;
            echo '<div class="alert alert-warning" role="alert">
           Sayınız 3 e Tam bülünemiyor. Tam bülünen Sayılar : '. $num+1 .' ve '. $num-2 .'</div>' ;
           
           }
           else{
            echo 'Girilen Sayı: ' . $num;
            echo '<div class="alert alert-warning" role="alert">
           Sayınız 3 e Tam bülünemiyor. Tam bülünen Sayılar : '. $num-1 .' ve '. $num+2 .'</div>' ;

           }
        }
    
    
    
    
    ?>


            </div>
        </div>
    </div>


    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>

</html>

