<div class="breadcrumb-banner-area" style="background-image: url('/images/lesson.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-text">
                    <h1 class="text-center">Yaponiya</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="course-details-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-3">


                <div class="panel panel-default" style="margin-bottom: 5px;">
                    <div class="panel-heading" style="font-weight: bold;">Yaponiya</div>
                </div>

                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="heading3">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                    href="#collapse3" aria-expanded="true" aria-controls="collapse3">TARİX</a>
                            </h4>
                        </div>
                        <div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
                            <div class="list-group">

                                <a href="/japan/4" class="list-group-item"><span class="fa fa-chevron-right"></span>
                                    Etimalogiya</a>

                                <a href="/japan/5" class="list-group-item"><span class="fa fa-chevron-right"></span>
                                    Tarix öncəsi və qədim tarix</a>

                                <a href="/japan/6" class="list-group-item"><span class="fa fa-chevron-right"></span>
                                    Feodalizm dövrü</a>

                                <a href="/japan/7" class="list-group-item"><span class="fa fa-chevron-right"></span>
                                    Müasir dövr</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="heading4">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                    href="#collapse4" aria-expanded="true" aria-controls="collapse4">TƏHSİL</a>
                            </h4>
                        </div>
                        <div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading4">
                            <div class="list-group">

                                <a href="?page=japan2" class="list-group-item"><span class="fa fa-chevron-right"></span>
                                    Universitet</a>

                                <a href="?page=japan3" class="list-group-item"><span class="fa fa-chevron-right"></span>
                                    Kİtabxana</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="heading5">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                    href="#collapse5" aria-expanded="true" aria-controls="collapse5">TEXNOLOGİYA</a>
                            </h4>
                        </div>
                        <div id="collapse5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading5">
                            <div class="list-group">
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="heading6">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                    href="#collapse6" aria-expanded="true" aria-controls="collapse6">MƏDƏNİYYƏT</a>
                            </h4>
                        </div>
                        <div id="collapse6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading6">
                            <div class="list-group">

                                <a href="/japan/12" class="list-group-item"><span class="fa fa-chevron-right"></span>
                                    Adət - Ənənə</a>

                                <a href="/japan/13" class="list-group-item"><span class="fa fa-chevron-right"></span>
                                    İncəsənət</a>

                                <a href="/japan/14" class="list-group-item"><span class="fa fa-chevron-right"></span>
                                    Din və Fəlsəfə</a>

                                <a href="/japan/15" class="list-group-item"><span class="fa fa-chevron-right"></span>
                                    Yapon Mətbəxi</a>

                                <a href="/japan/16" class="list-group-item"><span class="fa fa-chevron-right"></span>
                                    Musiqi</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">Resurslar</div>
                    <div class="list-group">

                        <a href="?page=resources" class="list-group-item"><span class="fa fa-chevron-right"></span>
                            Yaponiya</a>

                        <a href="?page=resources2" class="list-group-item"><span class="fa fa-chevron-right"></span>
                            Musiqi</a>

                        <a href="?page=resources3" class="list-group-item"><span class="fa fa-chevron-right"></span>
                            Dialoqlar</a>

                        <a href="?page=resources4" class="list-group-item"><span class="fa fa-chevron-right"></span>
                            Manqa</a>

                        <a href="?page=resources5" class="list-group-item"><span class="fa fa-chevron-right"></span> Cizgi
                            Filmləri</a>

                        <a href="?page=resources6" class="list-group-item"><span class="fa fa-chevron-right"></span>
                            Filmlər</a>
                    </div>
                </div>


                <div class="panel panel-default">
                    <div class="panel-heading" style="font-weight: bold;">Kalendar</div>
                    <table id="calendar-demo" class="calendar"></table>
                    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
                    <script src="/js/dcalendar.picker.js"></script>
                    <script>
                        $('#calendar-demo').dcalendar(); //creates the calendar
                    </script>
                </div>

                <link href="/css/flatWeatherPlugin.css" rel="stylesheet">
                <script src="/js/jquery-2.1.1.min.js"></script>
                <script src="/js/jquery.flatWeatherPlugin.min.js"></script>
                <script>
                    $(document).ready(function () {
                        //ex.3 today only detailed view
                        var weather_hamza = $("#weather_hamza").flatWeatherPlugin({
                            location: "Baku",
                            country: "Azerbaijan",
                            api: "yahoo",
                            view: "partial",
                            displayCityNameOnly: true,
                        });
                        //then setup an interval to make repeat calls to fetchWeather 
                        var intervalID = window.setInterval(function () {
                            example5.flatWeatherPlugin('fetchWeather').then(success, fail);
                        }, 2 * 60 * 1000); //call every two minutes
                        //then handle the success and fail states of the fetchWeather promise
                        function success(data) {
                            example5.flatWeatherPlugin('render', data);
                        }
                        function fail(data) {
                            example5.flatWeatherPlugin('error', data);
                        }
                        custom_example.flatWeatherPlugin('fetchWeather').then(function (data) {
                            //you can then do whatever you want with the data, such as display just a portion
                            $("<h2/>", { "class": "wi wi" + data.today.code }).text(" " + data.city).appendTo(custom_example);
                            $("<p/>").html(data.today.temp.now + "&#176;C, " + data.today.desc).appendTo(custom_example);
                        });
                    });
                </script>
                <style>
                    #weather_hamza {
                        width: 96%;
                        background: #fff;
                        margin: 10px;
                    }
                </style>
                <div class="panel panel-default">
                    <div class="panel-heading" style="font-weight: bold;">Hava</div>
                    <div id="weather_hamza"></div>
                </div>



                <div class="panel panel-default">
                    <div class="panel-heading" style="font-weight: bold;">Facebook</div>
                    <div class="fb-page fb_iframe_widget"
                        data-href="https://www.facebook.com/Yapon-Dili-Hazirliq-Kursu-916402371735780/?hc_ref=SEARCH&amp;fref=nf"
                        data-tabs="timeline" data-height="300" data-small-header="true"
                        data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"
                        fb-xfbml-state="rendered"
                        fb-iframe-plugin-query="adapt_container_width=true&amp;app_id=&amp;container_width=268&amp;height=300&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2FYapon-Dili-Hazirliq-Kursu-916402371735780%2F%3Fhc_ref%3DSEARCH%26fref%3Dnf&amp;locale=en_US&amp;sdk=joey&amp;show_facepile=false&amp;small_header=true&amp;tabs=timeline">
                        <span style="vertical-align: bottom; width: 268px; height: 300px;"><iframe
                                name="f5ba466437cce0154" width="1000px" height="300px"
                                data-testid="fb:page Facebook Social Plugin" title="fb:page Facebook Social Plugin"
                                frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no"
                                allow="encrypted-media"
                                src="https://www.facebook.com/v2.8/plugins/page.php?adapt_container_width=true&amp;app_id=&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df80b841e5fdb4622a%26domain%3Dyapondili.az%26is_canvas%3Dfalse%26origin%3Dhttps%253A%252F%252Fyapondili.az%252Ff207e125930a77c37%26relation%3Dparent.parent&amp;container_width=268&amp;height=300&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2FYapon-Dili-Hazirliq-Kursu-916402371735780%2F%3Fhc_ref%3DSEARCH%26fref%3Dnf&amp;locale=en_US&amp;sdk=joey&amp;show_facepile=false&amp;small_header=true&amp;tabs=timeline"
                                style="border: none; visibility: visible; width: 268px; height: 300px;"
                                class=""></iframe></span></div>
                </div>


            </div>
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading" style="font-weight: bold;">Yaponiya</div>
                            <div class="panel-body">
                                <div class="course-text-content">
                                    <p><span
                                            style="color:rgb(68, 68, 68); font-family:palatino linotype; font-size:17px"><span
                                                style="font-family:inherit; font-size:12pt"><span
                                                    style="color:rgb(255, 69, 0); font-family:inherit; font-size:inherit"><span
                                                        style="color:rgb(0, 0, 205); font-family:inherit; font-size:inherit">&nbsp;
                                                        Yaponiya&nbsp;</span>(Qədim yaponca Yamata-“Dağlılar
                                                    ölkəsi”)</span></span></span></p>

                                    <p><span style="font-family:inherit; font-size:inherit"><span
                                                style="font-family:inherit; font-size:12pt"><span
                                                    style="color:rgb(30, 144, 255); font-family:inherit; font-size:inherit">İdarəetmə
                                                    forması-konstitusiyalı monarxiya</span></span></span></p>

                                    <p><span style="font-family:inherit; font-size:inherit">Dövlət
                                            başçısı-imperator</span><img alt="" src="/uploads/images/home_map.png"
                                            style="float:right; height:291px; width:400px"></p>

                                    <p><span style="font-family:inherit; font-size:inherit">İmperator-Akixito</span></p>

                                    <p><span style="font-family:inherit; font-size:inherit">Ali qanunverici
                                            orqan-ikipalatali parlament</span></p>

                                    <p><span style="font-family:inherit; font-size:inherit">Ali icraçı orqan-Nazirlər
                                            kabibneti</span></p>

                                    <p><span style="font-family:inherit; font-size:inherit">Dövlət dili-yapon</span></p>

                                    <p><span
                                            style="font-family:inherit; font-size:inherit">Din-sintoizm,buddizm,xristianliq</span>
                                    </p>

                                    <p><span style="font-family:inherit; font-size:inherit">Milli bayram-İmperator
                                            Akixitonun doğum günü-23 dekabr 1933</span></p>

                                    <p>&nbsp;</p>

                                    <p><span style="font-family:inherit; font-size:inherit"><span
                                                style="font-family:inherit; font-size:12pt"><span
                                                    style="color:rgb(255, 0, 0); font-family:inherit; font-size:inherit">Tarixi
                                                    arayış:</span></span></span></p>

                                    <p><span style="font-family:inherit; font-size:inherit"><span
                                                style="color:rgb(0, 0, 205); font-family:inherit; font-size:inherit">1.Yaponiyanın
                                                birinci imperatoru-e.ə 660</span></span></p>

                                    <p><span style="font-family:inherit; font-size:inherit">2.”Təcridolunma” siyasətinin
                                            sonu</span></p>

                                    <p><span style="font-family:inherit; font-size:inherit">3.Yaponiya faşist Almaniyası
                                            tərəfindən II Dünya müharibəsinə qoşulur-1941</span></p>

                                    <p><span style="font-family:inherit; font-size:inherit">4.ABŞ Xirosima və Naqasaki
                                            şəhərlərinə atom bombası atır-1945</span></p>

                                    <p><span style="font-family:inherit; font-size:inherit"><span
                                                style="font-family:inherit; font-size:12pt"><span
                                                    style="color:rgb(255, 0, 0); font-family:inherit; font-size:inherit">İnzibati
                                                    ərazi bölgüsü:</span></span></span></p>

                                    <p><span style="font-family:inherit; font-size:inherit"><span
                                                style="color:rgb(148, 0, 211); font-family:inherit; font-size:inherit">47
                                                prefektura.Böyük şəhərlər: Tokio, İokoqoma, Osaka , Kobe, Naqoya , Kioto
                                                ,Sapporo , Xirosima ,Funkuoka, Kavasaki</span></span></p>

                                    <p><span style="font-family:inherit; font-size:inherit"><span
                                                style="font-family:inherit; font-size:12pt"><span
                                                    style="color:rgb(255, 0, 0); font-family:inherit; font-size:inherit">Əhali:</span></span></span>
                                    </p>

                                    <p><span style="font-family:inherit; font-size:inherit"><span
                                                style="color:rgb(0, 0, 205); font-family:inherit; font-size:inherit">127,4
                                                mln (2005)</span></span></p>

                                    <p><span style="font-family:inherit; font-size:inherit"><span
                                                style="font-family:inherit; font-size:12pt"><span
                                                    style="color:rgb(255, 0, 0); font-family:inherit; font-size:inherit">Orta
                                                    yaş həddi:</span></span></span></p>

                                    <p><span style="font-family:inherit; font-size:inherit"><span
                                                style="color:rgb(255, 20, 147); font-family:inherit; font-size:inherit">Kişilər-77,86
                                                il</span></span></p>

                                    <p><span style="font-family:inherit; font-size:inherit">Qadınlar-84,65 il</span></p>

                                    <p><span style="font-family:inherit; font-size:inherit"><span
                                                style="font-family:inherit; font-size:12pt"><span
                                                    style="color:rgb(255, 0, 0); font-family:inherit; font-size:inherit">Tərkibi:</span></span></span>
                                    </p>

                                    <p><span style="font-family:inherit; font-size:inherit"><span
                                                style="color:rgb(0, 191, 255); font-family:inherit; font-size:inherit">Yaponlar-99%</span></span>
                                    </p>

                                    <p><span style="font-family:inherit; font-size:inherit">Koreyalılar-0,5%</span></p>

                                    <p><span style="font-family:inherit; font-size:inherit">Çinlilər və
                                            aynilər-0,5%</span></p>

                                    <p><span style="color:rgb(255, 0, 0); font-family:inherit; font-size:inherit">Ali
                                            təhsil müəssisələri:</span></p>

                                    <p><span style="font-family:inherit; font-size:inherit"><span
                                                style="color:rgb(0, 0, 205); font-family:inherit; font-size:inherit">450-dən
                                                çox ali məktəb.Ən iriləri: Tokio Universiteti, Sendayda Toxoku
                                                Universiteti, Kioto Universiteti ,Nixon Universiteti</span></span></p>

                                    <div align="center" color:="" palatino=""
                                        style="margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; font-size: 17px; line-height: inherit; font-family: "
                                        vertical-align:="">
                                        <p><span
                                                style="color:rgb(255, 0, 0); font-family:inherit; font-size:inherit">Valyuta:</span>
                                        </p>
                                    </div>

                                    <p><span style="font-family:inherit; font-size:inherit"><span
                                                style="color:rgb(0, 0, 205); font-family:inherit; font-size:inherit">Pul
                                                vahidi-iyen=100 sen</span></span></p>

                                    <p><span style="font-family:inherit; font-size:inherit"><span
                                                style="font-family:inherit; font-size:12pt"><span
                                                    style="color:rgb(255, 0, 0); font-family:inherit; font-size:inherit">TOKİO</span></span></span>
                                    </p>

                                    <p><span style="font-family:inherit; font-size:inherit"><span
                                                style="color:rgb(0, 191, 255); font-family:inherit; font-size:inherit">Paytaxt
                                                Xonsyu adasının cənub-şərq hissəsində Tokio körfəzinin sahilində
                                                yerləşir.</span></span></p>

                                    <p><span style="font-family:inherit; font-size:inherit">Sahəsi-2000 kv.km</span></p>

                                    <p><span style="font-family:inherit; font-size:inherit">Əhalisi-11,9 mln.nəfər
                                            (1995)</span></p>

                                    <p><span style="font-family:inherit; font-size:inherit"><span
                                                style="color:rgb(255, 20, 147); font-family:inherit; font-size:inherit">Əsası
                                                1457-ci ildə Eko qalası kimi (“Çay ağzı”) qoyulmuşdur.1603-cü ildən
                                                ölkənin faktiki paytaxtı,nominal qaydada isə paytaxt imperatorlarının
                                                yaşadığı Kioto idi.1869-cu ildə paytaxt Edoya köçürülür və adı
                                                dəyişdirilərək Tokio “şərq paytaxtı” adlandırılır.</span></span></p>

                                    <p><span style="font-family:inherit; font-size:inherit">Şəhər-Tokio paytaxt
                                            dairəsinə daxildir.Bu dairə 23 şəhər rayonundan ,12 peyk şəhərdən ,19
                                            qəsəbədən, 10 kənddən ,7 adadan ibarətdir.</span></p>

                                    <p><span style="font-family:inherit; font-size:inherit">Tokio bələdiyyəsi 120
                                            nəfərdən ibarət olub 4 ildən bir seçilir.Bütün icra hakimiyyəti dairənin
                                            qubernatoruna aiddir.O,həm də şəhərin meridir.</span></p>

                                    <p><span style="font-family:inherit; font-size:inherit"><span
                                                style="color:rgb(255, 0, 0); font-family:inherit; font-size:inherit">Şəhərin
                                                xarici görünüşü:&nbsp;</span><span
                                                style="color:rgb(0, 0, 205); font-family:inherit; font-size:inherit">Ticarət
                                                və işgüzar rayonlar Gindza küçəsindən qərbdə yerləşir.Yaşayış rayonları
                                                həmin küçədən şərqdədir.Gindza şəhərin baş küçəsidir.Mərkəzdə
                                                göydələnlər ,mehmanxanalar, mağazalar , televiziya qülləsi (hündürlüyü
                                                333 m.) , çoxmərtəbəli yeraltı “Tokio” mərkəzi.</span></span></p>

                                    <p><span style="font-family:inherit; font-size:inherit"><span
                                                style="color:rgb(255, 0, 0); font-family:inherit; font-size:inherit">İqtisadiyyat:&nbsp;</span><span
                                                style="color:rgb(0, 191, 255); font-family:inherit; font-size:inherit">Şəhərin
                                                maliyyə mərkəzi Marinouti rayonudur , məşhur Mitsubişi ,Mitsui ,
                                                Sumitomo ,Yasuda firmalarının ofisləri bu rayonda fəaliyyət
                                                göstərir.</span></span></p>

                                    <p><span style="font-family:inherit; font-size:inherit"><span
                                                style="color:rgb(255, 0, 0); font-family:inherit; font-size:inherit">Şəhər
                                                nəqliyyatı:</span>&nbsp;<span
                                                style="color:rgb(50, 205, 50); font-family:inherit; font-size:inherit">Yaponiyada
                                                ən böyük liman ,iki beynəlxalq hava limanı Xaneda və
                                                Narita</span></span></p>

                                    <p><span style="font-family:inherit; font-size:inherit"><span
                                                style="color:rgb(255, 0, 0); font-family:inherit; font-size:inherit">Muzeylər
                                                :</span><span
                                                style="color:rgb(148, 0, 211); font-family:inherit; font-size:inherit">&nbsp;30-a
                                                qədər muzey ,o cümlədən Tenri qalereyası , Bricston incəsənət muzeyi ,
                                                Tokio Milli muzeyi və s.</span></span></p>

                                    <p><span style="font-family:inherit; font-size:inherit"><span
                                                style="color:rgb(255, 0, 0); font-family:inherit; font-size:inherit">Memarlıq
                                                abidələri:&nbsp;</span><span
                                                style="color:rgb(148, 0, 211); font-family:inherit; font-size:inherit">Universitetin
                                                binası ,Köhnə İmperator sarayı , Rikuşen mənzərə parkı və
                                                s.</span></span></p>

                                    <p>&nbsp;</p>
                                </div>
                                <div class="single-item-content">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>