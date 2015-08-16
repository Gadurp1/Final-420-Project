<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title> {{ CNF_APPNAME }} | {{ $pageTitle}} </title>
<meta name="keywords" content="{{ $pageMetakey }}">
<meta name="description" content="{{ $pageMetadesc }}"/>
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
<div style="min-height:400px;">
@include($pages)

</div>
<div class="clr"></div>
        <!-- FOOTER -->
        <footer class="footer">

            <!-- Copyright Bar -->
            <section class="copyright">
                <div class="container">
                    <p>&copy; 2015 <a><b>420 Windy City</b></a>. All Rights Reserved.</p>
                </div>
            </section>
            <!-- End Copyright Bar -->

        </footer>
        <!-- END FOOTER -->
<div class="modal fade" id="sximo-modal" tabindex="-1" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header bg-default">
		
			<button type="button " class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			<h4 class="modal-title">Modal title</h4>
		</div>
		<div class="modal-body" id="sximo-modal-content">
	
		</div>
	</div>
</div>
</div>
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