<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8" />
    <title>お店選択</title>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <style>
      html, body,#map {
        height: 100%;
        margin: 0px;
        padding: 0px
      }
    </style>
  </head>
  <body>
    <div id="map"></div>
    <div id="message"></div>
    <script>
       window.onload =function() {
          if (navigator.geolocation) {
              navigator.geolocation.getCurrentPosition(function(position) {
                  //現在地取得
                  var latlng = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);

                  //地図作製のオプション　現在地の緯度経度を設定
                  var options = {
                      zoom: 15,
                      center: latlng,
                      mapTypeId: google.maps.MapTypeId.ROADMAP
                  };

                  //配列作成→PHPから配列を受け取る
                  var data = new Array();
                  data.push({lat:'35.681382', lng:'139.766084',name:'東京駅'});
                  data.push({lat:'35.684801', lng:'139.766086',name:'大手町駅'});
                  //bodyのmapを取得
                  var map = new google.maps.Map(document.getElementById('map'), options);
                  //windowカスタマイズ
                  var contentString = '<div id="content">'+
                        '<div id="siteNotice">'+
                        '</div>'+
                        '<h2 id="firstHeading" class="firstHeading">Uluru</h2>'+
                        '<div id="bodyContent">'+
                        '<p><b>Uluru</b>, also referred to as <b>Ayers Rock</b>, is a large ' +
                        'sandstone rock formation in the southern part of the '+
                        'Northern Territory, central Australia. It lies 335 km (208 mi) '+
                        'south west of the nearest large town, Alice Springs; 450 km '+
                        '(280 mi) by road. Kata Tjuta and Uluru are the two major '+
                        'features of the Uluru - Kata Tjuta National Park. Uluru is '+
                        'sacred to the Pitjantjatjara and Yankunytjatjara, the '+
                        'Aboriginal people of the area. It has many springs, waterholes, '+
                        'rock caves and ancient paintings. Uluru is listed as a World '+
                        'Heritage Site.</p>'+
                        '<p>Attribution: Uluru, <a href="http://en.wikipedia.org/w/index.php?title=Uluru&oldid=297882194">'+
                        'http://en.wikipedia.org/w/index.php?title=Uluru</a> (last visited June 22, 2009).</p>'+
                        '</div>'+
                        '</div>';

                    //ウィンドウ作成
                    var infowindow = new google.maps.InfoWindow({
                        content: contentString
                    });

                    //マーカー表示メソッド→PHPに渡すデータもセットする
                    function dispInfo(marker,name) {
                      google.maps.event.addListener(marker, 'click',
                      function(event) {
                        infowindow.open(map,marker);
                      });
                    }

                    //マーカー作成→PHPに渡すデータもセットする
                    var markers = new Array();
                    for (i = 0; i < data.length; i++) {
                    markers[i] = new google.maps.Marker({
                     position: new google.maps.LatLng
                        (data[i].lat, data[i].lng),
                     map: map
                    });
                    dispInfo(markers[i],data[i].name);
                   }
              }, function(e) {
                  document.getElementById('message').innerHTML = typeof e == 'string' ? e : e.message;
              });
          } else {
              document.getElementById('message').innerHTML = 'Location APIがサポートされていません。';
          }
      };




    </script>
  </body>
</html>