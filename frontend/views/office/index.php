<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
<div class="link-anchors d-flex mt-4 flex-column flex-md-row">
    <a href="">Главная <img src="public/images/link-arrow-right.png" alt=""></a>
    <a href="">О компании <img src="public/images/link-arrow-right.png" alt=""></a>
    <a href="">Документы и публикации <img src="public/images/link-arrow-right.png" alt=""></a>
    <a href="">Правила страхования</a>
</div>

<div class="main-text mt-1 mt-md-3 mb-3 d-flex flex-md-row flex-column justify-content-between align-items-center">
    <h3 class="text-uppercase text-md-left text-center">офисы в нашем городе</h3>
</div>
<div class="main-text d-flex justify-content-center">
    <div class="map-wrap">

        <div id="map" style="width: 100%; height: 250px"></div>
        <script>
            document.getElementById("office-city").innerHTML="<?=$city->name?>";
            ymaps.ready(init);
            var center_map = [0, 0];
            var map = "";
            function init() {
                map = new ymaps.Map('map', {
                    center: center_map,
                    zoom: 8,
                });

                var myGeocoder = ymaps.geocode("<?=$city->name?>");
                myGeocoder.then(
                    function (res) {
//                        map.geoObjects.add(res.geoObjects);
                        var street = res.geoObjects.get(0);
                        var coords = street.geometry.getCoordinates();
                        map.setCenter(coords);
                    },
                    function (err) {

                    }
                );

                <?foreach($model as $v){?>
                    map.geoObjects.add(new ymaps.Placemark([<?=$v->latitude?>, <?=$v->longitude?>], {
                        balloonContent: '<?=$v->text?>'
                    }, {
                        iconLayout: 'default#image',
                        iconImageHref: '/frontend/web/images/absolute-logo.png',
                        preset: 'islands#icon',
                        iconColor: '#0095b6'
                    }));
                <?}?>
            }
        </script>

        <div class="map-adress d-flex justify-content-between  p-2">
            <div class="img-adres-wrap">
                <img src="public/images/adress-img.jpg" alt="">
            </div>
            <div class="adress-map-text flex-column">
                <span>пр. Аль-Фараби 17/1, ПФЦ <br> "Нурлы Тау", 5Б, 10 этаж, 17 офис</span>
                <p><img src="public/images/call-adress.png" alt="">+7 (727) 338 45 01</p>
                <p><img src="public/images/mail-adress.png" alt="">info@asia-life.kz</p>
                <p><img src="public/images/time-adress.png" alt="">time-adress.png</p>
            </div>
        </div>
    </div>
</div>