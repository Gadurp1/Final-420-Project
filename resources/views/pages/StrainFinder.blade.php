
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

        <!-- CONTENT -->

        <!-- Intro Section -->
        <section class="inner-intro bg-img overlay-dark light-color parallax parallax-background2" style="background:url('http://i.huffpost.com/gen/1192715/images/o-MARIJUANA-DISPENSARY-facebook.jpg')">
             <div class="container">
                <div class="row title">
                    <h1>What's Your Condintion?</h1>

                        <form class="contact-form" id="contact" role="form">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="col-md-12">
                                    <div class="row>">
                                        <div class="ui-widget">                               
                                    <input class="col-sm-12 ghost-white" id="tags">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">  
                                            <a href="" class="btn btn-md btn-success form-full">Search</a>                          
                                        </div>

                                        <div class="col-md-6">  
                                            <a href="" class="btn btn-md btn-color-b form-full">Explore Strains</a>                          
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

        <!-- Work Detail Section -->
        <section class="ptb-3" style="overflow:hidden">
            <div class="container">
                <!-- work Filter -->
                <div class="row">                    
                    <div class="dropdown" class="pull-right">
                      <button id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown trigger
                        <span class="caret"></span>
                      </button>
                      <ul class="dropdown-menu container-filter categories-filter" aria-labelledby="dLabel">
                        <li><a class="categories" data-filter=".Hybrid">hybrid</a></li>
                        <li><a class="categories" data-filter=".Indica">indica</a></li>
                        <li><a class="categories" data-filter=".Sativa">sativa</a></li>
                      </ul>
                    </div>

                   
                </div>
                <!-- End work Filter -->
                <div class="container-grid nf-col-5 ">
                    <!doctype html>
                    <head>
                        <title>Leafly Test</title>
                        <style type="text/css">
                        body{ font: 14px helvetica,sans-serif; color: #433; }
                        </style>
                    </head>
                    <body>


                    <?php

                    $api_url = 'http://data.leafly.com';
                    $app_id = '91768d00';
                    $app_key = 'fa557088ad73a02196ab929a1be0437b';

                    include(app_path().'/includes/leafly/utils.php');
                    include(app_path().'/includes/leafly/src/leafly.php');

                    Leafly_Connector::init( $app_id, $app_key );

                    $strains = new Leafly_Strains();

                    if ( isset( $_GET['strain'] ) )
                    {
                        $strain = $strains->get_strain( '' );
                    }

                    if ( isset( $_GET['symptom'] ) )
                    {

                        $symptoms = $_GET['symptom'];

                    }
                    else{


                        $symptoms='';
                     }





                    $search = $strains->search( array( 'take' => 20, 'page' => 0, 'Condition' => 'addadhd' ) );





                    foreach ( $search->Strains as $strain )
                    {
                    ?>


                    <div class="container">
                    <div class="nf-item 


                            <?php echo $strain->Category; ?>

                            spacing

                <?php if ($strain->Category=='hybrid')

                {
                    echo 'bg-blue ';
                }
                elseif($strain->Category=='indica')
                {
                    echo 'bg-red ';

                }
                elseif($strain->Category=='sativa')
                {
                    echo 'bg-white ';

                }
        ?>

                            ">
                        <div class="item-box">
                            <a href="Medical-Marijuana-Strain-Guide/<?php echo $strain->Name; ?>">
                                <img alt="1" src="https://snap-photos.s3.amazonaws.com/img-thumbs/280h/I9ZF8UC1GE.jpg" class="item-container">
                                <div class="item-mask item-mask-strain">
                                    <div class="item-caption text-center">
                                        <h2 class="white symbol "><?php echo $strain->Symbol; ?></h2>

                                        <h5 class="white"><?php echo $strain->Name; ?></h5>
                                         <p><img class="col-md-6 pull-right" src="<?php echo $strain->StarImage; ?>"></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
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

