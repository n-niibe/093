<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
<title>奥さん、セールですよ</title>
<style>
html, body {
width: 100%;
height: 100%;
margin: 0px;
padding: 0px;
background: rgb(58, 58, 58);
overflow: hidden;
font-family: "メイリオ", "ヒラギノ角ゴ Pro W3", "MS PGothic", "MS UI Gothic", Helvetica, Arial, sans-serif;
box-shadow: inset 0px 0px 50px rgba(0, 0, 0, 0.41);
}
#box {
width: 372px;
position: absolute;
top: 50%;
left: 50%;
margin-left: -186px;
margin-top: -80px;
}
#id, #name {
width: 100%;
}
#store, #user {
width: 283px;
border: 5px solid white;
float: left;
cursor:pointer;
}
#store {
margin-right: 12px;
}
#foot {
position: absolute;
bottom: 0px;
color: white;
width: 100%;
text-align: center;
border-top: 1px dashed white;
height: 38px;
line-height: 38px;
font-size: 12px;
cursor: pointer;
}
#logo {
width: 600px;
height: 200px;
background: url(https://farm3.staticflickr.com/2894/13004739535_c98a5a7d58_o.png);
position: absolute;
left: 50%;
margin-left: -300px;
margin-top: -45px;
}
input[type="submit"] {
width: 100%;
padding: 0px;
margin-left: 3px;
margin-top: 11px;
}
#textarea {
width: 100%;
height: 121px;
margin-top: 2px;
}

@media (max-width:43.75em) {
  #store {
float: none;
margin-bottom: 10px;
}
  #box{
    margin-left: -140.5px;
    width: 293px;
  }
#logo {
width: 100%;
height: 309px;
left: 0px;
top: 0px;
margin-top: 26px;
margin-left: 0px;
background-repeat: no-repeat;
background: url(https://farm3.staticflickr.com/2894/13004739535_c98a5a7d58_o.png) no-repeat;
background-size: 100%;
background-position-y: 95px;
border-top: 1px solid rgba(255, 255, 255, 0.46);
border-bottom: 1px solid rgba(255, 255, 255, 0.46);
}

}
</style>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
</head>
<body>
<div id='logo'></div>
<div id='box'>
<input id='id' placeholder='日時'>
<input id='name' placeholder='タイトル'>
<input id='textarea' type='textarea'>
<input type='submit' value='告知'>
</div>
<div id='foot'>
<div id='help'>使い方</div>
</div>
<script>
$(function(){
  $('body').hide().fadeIn();

});
</script>
</body>
</html>