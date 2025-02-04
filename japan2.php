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
                            Filmlər</a>

                        <a href="?page=resources2" class="list-group-item"><span class="fa fa-chevron-right"></span> Cizgi
                            Filmləri</a>

                        <a href="?page=resources3" class="list-group-item"><span class="fa fa-chevron-right"></span>
                            Manqa</a>

                        <a href="?page=resources4" class="list-group-item"><span class="fa fa-chevron-right"></span>
                            Dialoqlar</a>

                        <a href="?page=resources5" class="list-group-item"><span class="fa fa-chevron-right"></span>
                            Musiqi</a>

                        <a href="?page=resources6" class="list-group-item"><span class="fa fa-chevron-right"></span>
                            Yaponiya</a>
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
                                name="ffde0426a447bfad7" width="1000px" height="300px"
                                data-testid="fb:page Facebook Social Plugin" title="fb:page Facebook Social Plugin"
                                frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no"
                                allow="encrypted-media"
                                src="https://www.facebook.com/v2.8/plugins/page.php?adapt_container_width=true&amp;app_id=&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df0321d78226e0d3bd%26domain%3Dyapondili.az%26is_canvas%3Dfalse%26origin%3Dhttps%253A%252F%252Fyapondili.az%252Ff67996161a992c487%26relation%3Dparent.parent&amp;container_width=268&amp;height=300&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2FYapon-Dili-Hazirliq-Kursu-916402371735780%2F%3Fhc_ref%3DSEARCH%26fref%3Dnf&amp;locale=en_US&amp;sdk=joey&amp;show_facepile=false&amp;small_header=true&amp;tabs=timeline"
                                style="border: none; visibility: visible; width: 268px; height: 300px;"
                                class=""></iframe></span></div>
                </div>


            </div>



            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading" style="font-weight: bold;">Universitet</div>
                            <div class="panel-body">
                                <div class="course-text-content"></div>
                                <div class="single-item-content">

                                    <p></p>
                                    <div class="fb-like fb_iframe_widget" data-href="//yapondili.az/japan/9"
                                        data-layout="button_count" data-action="like" data-size="large"
                                        data-show-faces="false" data-share="true" fb-xfbml-state="rendered"
                                        fb-iframe-plugin-query="action=like&amp;app_id=&amp;container_width=838&amp;href=https%3A%2F%2Fyapondili.az%2Fjapan%2F9&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey&amp;share=true&amp;show_faces=false&amp;size=large">
                                        <span style="vertical-align: bottom; width: 174px; height: 28px;"><iframe
                                                name="fe1416e090d9db74d" width="1000px" height="1000px"
                                                data-testid="fb:like Facebook Social Plugin"
                                                title="fb:like Facebook Social Plugin" frameborder="0"
                                                allowtransparency="true" allowfullscreen="true" scrolling="no"
                                                allow="encrypted-media"
                                                src="https://www.facebook.com/v2.8/plugins/like.php?action=like&amp;app_id=&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df25cb96848642ba90%26domain%3Dyapondili.az%26is_canvas%3Dfalse%26origin%3Dhttps%253A%252F%252Fyapondili.az%252Ff67996161a992c487%26relation%3Dparent.parent&amp;container_width=838&amp;href=https%3A%2F%2Fyapondili.az%2Fjapan%2F9&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey&amp;share=true&amp;show_faces=false&amp;size=large"
                                                style="border: none; visibility: visible; width: 174px; height: 28px;"
                                                class=""></iframe></span></div>
                                    <p></p>
                                    <p>
                                        <i class="zmdi zmdi-eye"></i> 1423 dəfə oxunub
                                    </p>



                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading" style="font-weight: bold;">Şərhlər</div>
                            <div class="panel-body">




                                <div class="comments">



                                    <div class="contact-form-area section-padding">
                                        <form action="/japan/9" method="post">
                                            <div class="row" style="margin-right: 0; margin-left: 0;">
                                                <div class="col-md-4">
                                                    <input type="text" name="name" placeholder="Adınız" required="">
                                                </div>
                                                <div class="col-md-4">
                                                    <input type="email" name="email" placeholder="E-poçt" required="">
                                                </div>

                                                <div class="col-md-4">
                                                    <input type="text" name="sec_code" placeholder="Kod : 821"
                                                        required="">
                                                </div>

                                                <div class="col-md-12">
                                                    <textarea name="comment" cols="30" rows="10"
                                                        placeholder="Şərhinizi daxil edin" required=""></textarea>
                                                    <button type="submit" name="submit"
                                                        class="button-default">Göndər</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading" style="font-weight: bold;">Oxşar yazılar</div>
                            <div class="panel-body">
                                <div class="course-text-content">

                                    <p><a style="color:#2d3e50;" href="/japan/11"><span
                                                class="fa fa-chevron-right"></span> Kİtabxana</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>