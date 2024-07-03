<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="manifest" href="{{ asset('manifest.json') }}">
    <link rel="icon" type="image/png" href="{{ asset('images') }}/logo/icon.png">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" /> --}}
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />

    <title>{{ config('app.name', 'Laravel') }}</title>
    <script src="{{asset('assets')}}/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['../assets/css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="{{asset('assets')}}/css/bootstrap.min.css">
	<link rel="stylesheet" href="{{asset('assets')}}/css/atlantis.min.css">

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="{{asset('assets')}}/css/demo.css">
    <!-- bulk image -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.min.css" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.2.7/css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" /> -->
    <style>
    .form-group .form-control,
    .input-group .form-control {
        height: calc(1.5em + 0.75rem + 2px);
        padding: 0.375rem 0.75rem !important;
    }
    </style>

    {{-- <script src="https://js.pusher.com/beams/1.0/push-notifications-cdn.js"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>
</head>

<body class="hold-transition login-page">

    @auth()
    @include('layouts.page_templates.auth')
    @endauth

    @guest
    @include('layouts.page_templates.guest')
    @endguest

    <!--   Core JS Files   -->
	<script src="{{asset('assets')}}/js/core/jquery.3.2.1.min.js"></script>
	<script src="{{asset('assets')}}/js/core/popper.min.js"></script>
	<script src="{{asset('assets')}}/js/core/bootstrap.min.js"></script>

	<!-- jQuery UI -->
	<script src="{{asset('assets')}}/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="{{asset('assets')}}/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

	<!-- jQuery Scrollbar -->
	<script src="{{asset('assets')}}/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>


	<!-- Chart JS -->
	<script src="{{asset('assets')}}/js/plugin/chart.js/chart.min.js"></script>

	<!-- jQuery Sparkline -->
	<script src="{{asset('assets')}}/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

	<!-- Chart Circle -->
	<script src="{{asset('assets')}}/js/plugin/chart-circle/circles.min.js"></script>

	<!-- Datatables -->
	<script src="{{asset('assets')}}/js/plugin/datatables/datatables.min.js"></script>

	<!-- Bootstrap Notify -->
	<script src="{{asset('assets')}}/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

	<!-- jQuery Vector Maps -->
	<script src="{{asset('assets')}}/js/plugin/jqvmap/jquery.vmap.min.js"></script>
	<script src="{{asset('assets')}}/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>

	<!-- Sweet Alert -->
	<script src="{{asset('assets')}}/js/plugin/sweetalert/sweetalert.min.js"></script>

	<!-- Atlantis JS -->
	<script src="{{asset('assets')}}/js/atlantis.min.js"></script>


    <script>
    var base_url = "{{ url('/') }}";
    var PRELOADING = "<div class='text-center'><i class='fa fa-spin fa-spinner' style='font-size: 30px'></i></div>";
    $(function() {
        $('[data-toggle="tooltip"]').tooltip();
        //autoclose alert
        $('div.alert').delay(3000).slideUp(300);
    })
    </script>

    {{-- <script src="{{ asset('/service-worker.js') }}"></script>
    <script src="{{ asset('/script.js') }}"></script>
    <script>
    if (!navigator.serviceWorker.controller) {
        navigator.serviceWorker.register("/sw.js").then(function(reg) {
            console.log("Service worker has been registered for scope: " + reg.scope);
        });
    }
    navigator.serviceWorker.register("/sw.js").then(function(reg) {
            Notification.requestPermission().then((permission) => {
            if (permission === 'granted') {
                
                // get service worker
                navigator.serviceWorker.ready.then((sw) =>{
                    
                    // subscribe
                    sw.pushManager.subscribe({
                        userVisibleOnly: true,
                        applicationServerKey:"BC5zel9JoqeOY2yVTJjDhiE1IisJTVHq-_p4rxC3zd60gQSqXzra_7_m7B12axwI42tZIUXYGXhIJ-t5MolKjNY"
                    }).then((subscription) => {
                        console.log(subscription);
                    });
                });
            }
            });
        });
    </script> --}}

    @stack('scripts')

    @include('layouts.navbars.fixed-plugin-js')
</body>

</html>