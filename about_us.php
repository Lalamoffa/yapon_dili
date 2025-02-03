<div class="breadcrumb-banner-area" style="background-image: url('/images/blog.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-text">
                    <h1 class="text-center">Haqqımızda</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="about-page-area section-padding">
    <div class="container">
        <div class="row">


            <div class="col-md-3">
                <script type="text/javascript" src="/js/jquery-1.9.1.min.js"></script>
                <div class="panel panel-default">
                    <div class="panel-heading" style="font-weight: bold;">Kalendar</div>
                    <table id="calendar-demo" class="calendar">
                        <thead>
                            <tr>
                                <th id="prev">‹</th>
                                <th colspan="5" id="currM">Fevral 2025</th>
                                <th id="next">›</th>
                            </tr>
                            <tr>
                                <th>B.</th>
                                <th>B.e.</th>
                                <th>Ç.a.</th>
                                <th>Ç.</th>
                                <th>C.</th>
                                <th>C.a.</th>
                                <th>Ş.</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="pMDate"><span>26</span></td>
                                <td class="pMDate"><span>27</span></td>
                                <td class="pMDate"><span>28</span></td>
                                <td class="pMDate"><span>29</span></td>
                                <td class="pMDate"><span>30</span></td>
                                <td class="pMDate"><span>31</span></td>
                                <td class="date"><span>1</span></td>
                            </tr>
                            <tr>
                                <td id="currDay" class="date"><span>2</span></td>
                                <td class="date"><span>3</span></td>
                                <td class="date"><span>4</span></td>
                                <td class="date"><span>5</span></td>
                                <td class="date"><span>6</span></td>
                                <td class="date"><span>7</span></td>
                                <td class="date"><span>8</span></td>
                            </tr>
                            <tr>
                                <td class="date"><span>9</span></td>
                                <td class="date"><span>10</span></td>
                                <td class="date"><span>11</span></td>
                                <td class="date"><span>12</span></td>
                                <td class="date"><span>13</span></td>
                                <td class="date"><span>14</span></td>
                                <td class="date"><span>15</span></td>
                            </tr>
                            <tr>
                                <td class="date"><span>16</span></td>
                                <td class="date"><span>17</span></td>
                                <td class="date"><span>18</span></td>
                                <td class="date"><span>19</span></td>
                                <td class="date"><span>20</span></td>
                                <td class="date"><span>21</span></td>
                                <td class="date"><span>22</span></td>
                            </tr>
                            <tr>
                                <td class="date"><span>23</span></td>
                                <td class="date"><span>24</span></td>
                                <td class="date"><span>25</span></td>
                                <td class="date"><span>26</span></td>
                                <td class="date"><span>27</span></td>
                                <td class="date"><span>28</span></td>
                                <td class="nMDate"><span>1</span></td>
                            </tr>
                            <tr>
                                <td class="nMDate"><span>2</span></td>
                                <td class="nMDate"><span>3</span></td>
                                <td class="nMDate"><span>4</span></td>
                                <td class="nMDate"><span>5</span></td>
                                <td class="nMDate"><span>6</span></td>
                                <td class="nMDate"><span>7</span></td>
                                <td class="nMDate"><span>8</span></td>
                            </tr>
                            <tr>
                                <td colspan="7" id="today">Today: Bazar, Fevral 2, 2025</td>
                            </tr>
                        </tbody>
                    </table>
                    <script src="/js/dcalendar.picker.js"></script>
                    <script>
                        $('#calendar-demo').dcalendar(); //creates the calendar
                    </script>
                </div>

                <link href="/css/flatWeatherPlugin.css" rel="stylesheet">

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
                                name="f3e8274259e19e880" width="1000px" height="300px"
                                data-testid="fb:page Facebook Social Plugin" title="fb:page Facebook Social Plugin"
                                frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no"
                                allow="encrypted-media"
                                src="https://www.facebook.com/v2.8/plugins/page.php?adapt_container_width=true&amp;app_id=&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df602591d7916025ce%26domain%3Dyapondili.az%26is_canvas%3Dfalse%26origin%3Dhttps%253A%252F%252Fyapondili.az%252Ff2e36f0d65325c2dd%26relation%3Dparent.parent&amp;container_width=268&amp;height=300&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2FYapon-Dili-Hazirliq-Kursu-916402371735780%2F%3Fhc_ref%3DSEARCH%26fref%3Dnf&amp;locale=en_US&amp;sdk=joey&amp;show_facepile=false&amp;small_header=true&amp;tabs=timeline"
                                style="border: none; visibility: visible; width: 268px; height: 300px;"
                                class=""></iframe></span>
                    </div>
                </div>

            </div>

            <div class="col-md-9">
                <div class="about-text-container">
                    <p>
                    </p>
                    <p style="text-align:justify"><u><strong>Hədəfimiz&nbsp;</strong></u></p>

                    <p>&nbsp; &nbsp; &nbsp; &nbsp;Dünya inkişaf etdikcə insanlar da inkişaf edir. Bir çox şeydəyişir və
                        biz dəyişikliklərdən</p>

                    <p><u><strong><img alt="" src="/uploads/images/logo%282%29.png"
                                    style="float:right; height:59px; width:220px"></strong></u></p>

                    <div>
                        <div>
                            <p>kənar qala bilmərik.</p>

                            <p>&nbsp; &nbsp; &nbsp; &nbsp;Hədəfimiz Azərbaycan vətəndaşlarına bu sistemlə yapon dilini
                                mükəmməl öyrətmək, beynəlxalq</p>

                            <p>arenaya&nbsp;inteqrasiya etməsində istiqamət vermək və hazırlamaqdan ibarətdir. Tədris
                                sistemindəki</p>

                            <p>nailiyyətlər fərqliliyimizin göstəricisidir.&nbsp;Fəaliyyətə başladığı ilk gündən
                                etibarən öz peşəkar və yüksək</p>

                            <p>keyfiyyəti və ciddi nəzarət sistemi ilə fərqlənmişdir.</p>

                            <div>
                                <p style="text-align:right">&nbsp;</p>

                                <p style="text-align:justify"><img alt=""
                                        src="/uploads/images/p1aq4oja521i6s1ts1uvpg1t1ddn3.jpg"
                                        style="float:left; height:200px; width:250px"></p>

                                <p style="text-align:justify"><span
                                        style="font-size:24px"><strong>&nbsp;&nbsp;</strong></span>Bizcə bacarıqsız
                                    tələbə yoxdur, hər tələbənin özünə məxsus dərs hazırlama metodu vardır.</p>

                                <p style="text-align:justify">&nbsp; Bu inamla keçdiyimiz dərslərdə tələbələrin dərsi
                                    başa düşməsini, qavramasını nəzərə alaraq,</p>

                                <p style="text-align:justify">&nbsp; aylıq və illik dərs proqramları hazırladıq.
                                    Məqsəsdimiz tələbələrə dərs hazırlama alışqanlığı</p>

                                <p style="text-align:justify">&nbsp;və sevgisini qazandıraraq motivasyonlarını
                                    yüksəltməkdən ibarətdir. Müəllim və tələbələr</p>

                                <p style="text-align:justify">arasında sağlam dialoq qurulmasını və tələbələrin dərslə
                                    bağlı qarşılaşdıqları problemlərin o</p>

                                <p style="text-align:justify">anda həll edilməsini təşkil edirik.</p>

                                <p style="text-align:justify">&nbsp;</p>

                                <p style="text-align:justify">&nbsp;</p>

                                <p style="text-align:justify">&nbsp;</p>

                                <p style="text-align:justify">&nbsp;</p>

                                <p style="text-align:justify">&nbsp;</p>

                                <p style="text-align:justify"><strong><span style="font-size:24px"><u><span
                                                    style="font-family:mont">Siz dəyərli tələbələrimizin yolunu
                                                    gözləməkdəyik</span></u></span></strong></p>

                                <p style="text-align:justify">Soruşmaq istədiyiniz suallar, sizə qaranlıq qalan
                                    məsələlər barəsində saytımızın onlayn<img alt="" src="/uploads/images/egitim-2.jpg"
                                        style="float:right; height:239px; width:244px"></p>

                                <p style="text-align:justify">müraciət formundan bizə yaza bilərsiniz. Biz ən qısa
                                    zamanda sizinlə əlaqə saxlayaraq,</p>

                                <p style="text-align:justify">problemlərinizi həll etməyə, sizə yardımçı olmağa
                                    çalışacağıq.</p>

                                <p style="text-align:justify">&nbsp;</p>

                                <div>&nbsp;</div>
                            </div>
                        </div>
                    </div>
                    <p></p>
                </div>
            </div>
        </div>
    </div>
</div>