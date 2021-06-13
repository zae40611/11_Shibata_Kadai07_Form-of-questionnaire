<?php



?>

<html>
<head>
    <meta charset="utf-8">
    <title>鬼滅アンケートフォーム</title>
</head>

<style>
html{
    font-size: 62.5%;
}
.outer{
    height: 90vh;  /* 縦幅スクリーンの90％*/
    width: 70vw;   /* 横幅スクリーンの70％*/
    background-image: url(img/ichimatsu2.jpg);
    background-repeat: repeat;
    margin: 30px auto;
    text-align: center;
}

.foropacity{
    height: 100%;
    width: 100%;
    background: rgba(255, 255, 255, 0.65);
        }


.container{
 height: 80%;
 width: 500px;
 background-color: white;
 margin: auto  ;
}

.form{
    display: grid;
    grid-template-columns: 3fr 5fr; 
}

img{
    width: 60px;
    height: 60px;
}

.ftitle{
    display: grid;
  place-items: center;
  padding-top: 10px;
  padding-bottom: 10px;
}

.formbox{
    display: grid;
  place-items: center;
}

.checkbox{
    display: grid;
    grid-template-columns: 1fr 3fr 1fr 3fr; 
    align-items: center;  /*チェックする箇所を画像の中央に配置*/
    padding-top: 10px; 
    padding-bottom: 10px; 
    margin: auto;
} 


</style>

<body>
    <div class="outer">
    <div class="foropacity">
    <h1 style="padding-top: 10px;">鬼滅アンケートフォーム</h1>
    <div class="container">
        <form action="kimetsu_confirm.php" method="post" class="form">
            <div class="ftitle">お名前: </div>
                <div class="formbox"><input type="text" name="name"></div>
            <div class="ftitle">EMAIL: </div>
                <div class="formbox"><input type="text" name="mail"></div>
            <div class="ftitle">好きなキャラ：</div>
                <div class="checkbox">
                <input type="checkbox" name="pic" value="tanjiro.jpg"> <img src="img/tanjiro.jpg" class="picture" alt="tanjiro">
                <input type="checkbox" name="pic" value="nezuko.jpeg"> <img src="img/nezuko.jpeg" class="picture" alt="nezuko">
                <input type="checkbox" name="pic" value="zenitsu.jpeg"> <img src="img/zenitsu.jpeg" class="picture" alt="zenitsu">
                <input type="checkbox" name="pic" value="inosuke.jpg"> <img src="img/inosuke.jpg" class="picture" alt="inosuke">
                <input type="checkbox" name="pic" value="kanawo.jpg"> <img src="img/kanawo.jpg" class="picture" alt="kanawo">
                </div>
            <!-- <div class="ftitle">好きな柱：</div>
                <div><input type="checkbox" name="hashira"></div>
            <div class="ftitle">嫌いな鬼:</div>
                <div><input type="checkbox" name="oni"></div>
            <div class="ftitle">好きな編:</div>
                <div><input type="checkbox" name="story"></div> -->
            
   
            
            
        <div></div>     
             
            <input type="submit" value="送信">
        </form>
    </div>


    </div>
    </div>
    </body>
</html>