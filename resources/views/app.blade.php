<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Óptima | Login</title>
		<meta name="description" content="Login page example" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="canonical" href="https://keenthemes.com/metronic" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Page Custom Styles(used by this page)-->
		<link href="{{ asset('assets_new')}}/css/pages/login/classic/login-3.css?v=7.2.0" rel="stylesheet" type="text/css" />
		<!--end::Page Custom Styles-->
		<!--begin::Global Theme Styles(used by all pages)-->
		<link href="{{ asset('assets_new') }}/plugins/global/plugins.bundle.css?v=7.2.0" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets_new') }}/plugins/custom/prismjs/prismjs.bundle.css?v=7.2.0" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets_new')}}/css/style.bundle.css?v=7.2.0" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets')}}/global/plugins/bootstrap-toastr/toastr.min.css" rel="stylesheet" type="text/css" />
		<!--end::Global Theme Styles-->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

		<link rel="shortcut icon" href="https://keenthemes.com/metronic/theme/html/demo3/dist/assets/media/logos/favicon.ico" />
		<!-- Hotjar Tracking Code for keenthemes.com -->
		<script>(function(h,o,t,j,a,r){ h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)}; h._hjSettings={hjid:1070954,hjsv:6}; a=o.getElementsByTagName('head')[0]; r=o.createElement('script');r.async=1; r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv; a.appendChild(r); })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');</script>
		<!--begin::Layout Themes(used by all pages)-->
		<!--end::Layout Themes-->

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

		<!---axios-->

		<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.2.0/vue.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.16.1/axios.min.js"></script>

		<!--Select2-->
		<script src="https://unpkg.com/vue-multiselect@2.1.0"></script>
		<link rel="stylesheet" href="https://unpkg.com/vue-multiselect@2.1.0/dist/vue-multiselect.min.css">

		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw==" crossorigin="anonymous" />
		<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js" integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A==" crossorigin="anonymous"></script>
        <!-- Scripts -->
        @routes
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
		

		
		@inertia
		
       



        <!--end::Main-->
		<!--<script>var HOST_URL = "https://keenthemes.com/metronic/theme/html/tools/preview";</script>
		begin::Global Config(global config for global JS scripts)-->
		<script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1200 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#1BC5BD", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#6993FF", "warning": "#FFA800", "danger": "#F64E60", "light": "#F3F6F9", "dark": "#212121" }, "light": { "white": "#ffffff", "primary": "#1BC5BD", "secondary": "#ECF0F3", "success": "#C9F7F5", "info": "#E1E9FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#212121", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#ECF0F3", "gray-300": "#E5EAEE", "gray-400": "#D6D6E0", "gray-500": "#B5B5C3", "gray-600": "#80808F", "gray-700": "#464E5F", "gray-800": "#1B283F", "gray-900": "#212121" } }, "font-family": "Poppins" };</script>
		<!--end::Global Config-->
		<!--begin::Global Theme Bundle(used by all pages)-->
		<script src="{{ asset('assets_new') }}/plugins/global/plugins.bundle.js?v=7.2.0"></script>
		<script src="{{ asset('assets_new') }}/plugins/custom/prismjs/prismjs.bundle.js?v=7.2.0"></script>
		<script src="{{ asset('assets_new') }}/js/scripts.bundle.js?v=7.2.0"></script>
		<script src="{{ asset('js') }}/validaciones.js" type="text/javascript"></script>
		<!--end::Global Theme Bundle-->
		<!--begin::Page Scripts(used by this page)-->
		<script src="{{ asset('assets_new') }}/js/pages/custom/login/login-general.js?v=7.2.0"></script>
		<!--end::Page Scripts-->
		
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="{{ asset('assets') }}/global/plugins/bootstrap-toastr/toastr.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="{{ asset('assets') }}/pages/scripts/ui-toastr.min.js" type="text/javascript"></script>		
		<script>
			$(document).ready(function() {
				$('.js-example-basic-multiple').select2();
			});
		</script>
		<script>
			$(document).ready(function(){
				var meses = new Array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
				var f=new Date();
				//document.write(f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear());
				
				document.getElementById("dia").innerHTML = f.getDate() ;
				document.getElementById("mesAno").innerHTML = " de " + meses[f.getMonth()] + " de " + f.getFullYear();

				if (window.location.pathname == "/client") {
					$('#clientes').addClass(" active");
					
					$('#cliente').addClass(" menu-item-active");
					$('#cliente').css("color", "#3699FF");

					$('#client').addClass(" menu-item-active");
					$('#client').css("background", "ghostwhite");
					$('#client').css("width", "155px");
				

					$('#kt_aside_tab_4').addClass(" active show");
				
					$('#kt_aside_tab_1').removeClass("show");
					$('#kt_aside_tab_1').removeClass("active");
					
				}
			});
		</script>
    </body>
</html>

