<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="shortcut icon" href="" type="image/x-icon">  

    <!-- Favicone Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <link rel="icon" type="image/png" href="img/favicon.png">
    <link rel="apple-touch-icon" href="img/favicon.png">

    <!-- CSS -->
    <link href="{{ asset('sximo/themes/420/css/normalize.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('sximo/themes/420/css/navigation.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('sximo/themes/420/css/style.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('sximo/themes/420/css/bootstrap.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('sximo/themes/420/css/ionicons.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('sximo/themes/420/css/plugin/jPushMenu.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('sximo/themes/420/css/plugin/animate.css') }}" rel="stylesheet" type="text/css" />


<!-- Anthony Search Bar-->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <link href="{{ asset('sximo/themes/420/css/style-420.css') }}" rel="stylesheet" type="text/css" />

    <style>
@font-face {
    font-family: 'modern_sansregular';
    src: url('{{ asset("sximo/themes/420/fonts/moderne_sans-webfont.eot") }}');
    src: url('{{ asset("sximo/themes/420/fonts/moderne_sans-webfont.eot?#iefix") }}') format('embedded-opentype'),
         url('{{ asset("sximo/themes/420/fonts/moderne_sans-webfont.woff2") }}') format('woff2'),
         url('{{ asset("sximo/themes/420/fonts/moderne_sans-webfont.woff") }}') format('woff'),
         url('{{ asset("sximo/themes/420/fonts/moderne_sans-webfont.ttf") }}') format('truetype'),
         url('{{ asset("sximo/themes/420/fonts/moderne_sans-webfont.svg#modern_sansregular") }}') format('svg');
    font-weight: normal;
    font-style: normal;
}
    </style>
    </head>



<body class="full-intro background--dark">

    @include('layouts/sximone/topbar')


 <!-- CONTENT -->

        <!-- Intro Section -->
  <script>
  $(function() {
    var availableTags = [
"addadhd","alzheimers","anorexia","anxiety","arthritis","asthma","bipolardisorder","cachexia","cancer","crohnsdisease","epilepsy","fibromyalgia","gastrointestinaldisorder","glaucoma","hivaids","hypertension","migraines","multiplesclerosis","musculardystrophy","parkinsons","phantomlimbpain","pms","ptsd","spinalcordinjury","tinnitus","tourettessyndrome "
    ];
    $( "#tags" ).autocomplete({
      source: availableTags
    });
  });
  </script>


                    <?php

                    $api_url = 'https://data.leafly.com/strains/'.$slug.'';
                    $app_id = '91768d00';
                    $app_key = 'fa557088ad73a02196ab929a1be0437b';

                    include(app_path().'/includes/leafly/utils.php');
                    include(app_path().'/includes/leafly/src/leafly.php');

                    Leafly_Connector::init( $app_id, $app_key );

                    $strains = new Leafly_Strains();

                    $search = $strains->search( array( 'take' => 1, 'page' => 0,'sort' => 'rating' ) );


                    foreach ( $search->Strains as $strain )
                    {
                    ?>

        <!-- CONTENT -->

        <!-- Intro Section -->
        <section class="inner-intro bg-img overlay-dark light-color parallax parallax-background2" style="background:url('http://i.huffpost.com/gen/1192715/images/o-MARIJUANA-DISPENSARY-facebook.jpg')">
             <div class="container">
                <div class="row title">
                    <h1>{{$slug}}</h1>

                        <form class="contact-form" id="contact" role="form">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="col-md-12">
                              
                                    <div class="row">
                                        <div class="col-md-4">  
                                        </div>

                                        <div class="col-md-4">  
                                        <img class="img-responsive col-md-12" src="<?php echo $strain->StarImage; ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        </form>


                </div>
            </div>
        </section>
        <div class="clearfix"></div>
        <!-- End Intro Section -->


        <section id="about" class="wow fadeIn ptb ptb-sm-80">
            <div class="container">
                <div class="row ">
                    <div class="col-md-8 col-md-offset-2">
                        <h1><?php echo $strain->Rating; ?></h1>
                        <h1 class="h4">Strain Highlights</h1>
                        <div class="spacer-15"></div>
                            <div class="spacer-15"></div>
                                <p>OG Kush makes up the genetic backbone of West Coast cannabis varieties, but in spite of its ubiquity, its origins remain a debatable mystery. Popular myth maintains that Chemdawg and an indica Hindu Kush parented OG Kush, passing on the distinct “kush” bud structure we see in many strains today. Other theories throw Lemon Thai genetics into the genetic mix, but no one can say for sure how this iconic strain came into existence. There are many different phenotypes of OG Kush, some of which include Tahoe OG, SFV OG, and Alpha OG. 
                                </p><p>
                                Whatever its true genetics may be, OG Kush is commonly described as sativa-like in its euphoric and happy effects that combat stress and anxiety. It has an earthy pine scent with woody undertones, an aroma that has become the signature of OG Kush varieties and descendants. With OG Kush, patients most commonly cite improvements in migraines, ADD/ADHD, and stress disorders. It has an indoor flowering time of 8 to 9 weeks with moderate yields.
                                </p>

                                <hr/>

                                <h1>Medical Traits</h1>
                                <div class="spacer-15 col-md-5"></div>
                                     <div class="skillbar" data-percent="55%">
                                        <div class="skillbar-title">Stress</div>
                                        <div class="skill-bar-percent">37</div>
                                        <div class="skillbar-bar"></div>
                                    </div>

                                    <div class="skillbar" data-percent="80%">
                                        <div class="skillbar-title">Pain</div>
                                        <div class="skill-bar-percent">29</div>
                                        <div class="skillbar-bar"></div>
                                    </div>

                                    <div class="skillbar" data-percent="40%">
                                        <div class="skillbar-title">Depression</div>
                                        <div class="skill-bar-percent">26.7</div>
                                        <div class="skillbar-bar"></div>
                                    </div>

                                    <div class="skillbar" data-percent="70%">
                                        <div class="skillbar-title">Insomnia</div>
                                        <div class="skill-bar-percent">21.1</div>
                                        <div class="skillbar-bar"></div>
                                    </div>
                                     <div class="skillbar" data-percent="70%">
                                        <div class="skillbar-title">Headaches</div>
                                        <div class="skill-bar-percent">15.6</div>
                                        <div class="skillbar-bar"></div>
                                    </div>
                                    <a class="btn-link-a">More About</a>
                                </div>
                            </div>

                               <!-- Features -->
        <section id="features" class="overlay-dark  ptb ptb-sm-80">
            <div class="container text-center">
                <h1 class="mt-sm">Key Features</h1>
                <p class="lead">Fully Responsive & Mobile Ready</p>
                <div class="spacer-60"></div>
                <div class="row">
                    <div class="wow fadeInLeft col-md-5 pt-80 pt-sm-0">

                    <?php foreach($strain->Tags as $conditions){
                        echo'


                        <ul class="list-group">
                          <li class="list-group-item">'.$conditions->Name.'</li>
                        </ul>';
                        }
                    ?>



                    </div>
                    <div class="wow fadeIn col-md-2 hidden-sm hidden-xs text-center">
                        <img src="img/moc-3.png" />
                    </div>
                    <div class="wow fadeInRight col-md-5 pt-80 pt-sm-0">
                    <?php foreach($strain->Tags as $conditions){

                        echo'
                        <ul class="list-group">
                          <li class="list-group-item">'.$conditions->Name.'</li>
                        </ul>';

                        }
                    ?>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Features -->






                        </div>

        </div>
    </section>
     <!-- End About Section-->
    <hr />

</div>
</section>

<pre>
<?php var_dump($search );?>
     </pre>     
                    <?php
                    }

                    ?>
                    </div>


                    </body>
                    </html>


                    
                </div>

            </div>

        </section>
        <!-- End Work Detail Section -->

    <!-- End CONTENT -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js')}}"></script>
    
<script>
    jQuery(document).ready(function() {

        window.prettyPrint && prettyPrint();
    });
</script>   
</body> 
  <script src="{{ asset('sximo/themes/420/js/jquery-1.11.2.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('sximo/themes/420/js/jquery-ui.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('sximo/themes/420/js/plugin/jquery.easing.js')}}" type="text/javascript"></script>
    <script src="{{ asset('sximo/themes/420/js/bootstrap.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('sximo/themes/420/js/plugin/jquery.flexslider.js')}}" type="text/javascript"></script>
    <script src="{{ asset('sximo/themes/420/js/plugin/background-check.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('sximo/themes/420/js/plugin/jquery.fitvids.js')}}" type="text/javascript"></script>
    <script src="{{ asset('sximo/themes/420/js/plugin/jquery.viewportchecker.js')}}" type="text/javascript"></script>
    <script src="{{ asset('sximo/themes/420/js/plugin/jquery.stellar.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('sximo/themes/420/js/plugin/wow.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('sximo/themes/420/js/plugin/jquery.colorbox-min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('sximo/themes/420/js/plugin/owl.carousel.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('sximo/themes/420/js/plugin/isotope.pkgd.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('sximo/themes/420/js/plugin/masonry.pkgd.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('sximo/themes/420/js/plugin/imagesloaded.pkgd.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('sximo/themes/420/js/plugin/jPushMenu.js')}}" type="text/javascript"></script>
    <script src="{{ asset('sximo/themes/420/js/plugin/jquery.fs.tipper.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('sximo/themes/420/js/plugin/mediaelement-and-player.min.js')}}"></script>
    <script src="{{ asset('sximo/themes/420/js/theme.js')}}" type="text/javascript"></script>
    <script src="{{ asset('sximo/themes/420/js/navigation.js')}}" type="text/javascript"></script>
    <script src="//use.typekit.net/jqj6cmj.js')}}"></script>
    <script>try{Typekit.load();}catch(e){}</script>
</html>


<script type="text/javascript">
    (function() {
        var path = '//easy.myfonts.net/v2/js?sid=263498(font-family=Boucherie+Sans)&sid=263503(font-family=Boucherie+Cursive)&sid=263508(font-family=Boucherie+Cursive+Bold)&key=NQdrvX5hL5',
            protocol = ('https:' == document.location.protocol ? 'https:' : 'http:'),
            trial = document.createElement('script');
        trial.type = 'text/javascript';
        trial.async = true;
        trial.src = protocol + path;
        var head = document.getElementsByTagName("head")[0];
        head.appendChild(trial);
    })();
</script>
