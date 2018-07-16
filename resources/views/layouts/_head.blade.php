<meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<meta name="csrf-token" content="{{ csrf_token() }}" />
<title>Lavensi Tour & Travel</title>

<link rel="icon" href="favicon.ico" type="image/x-icon">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">


<!-- Bootstrap Core Css -->
<link href="{{ asset ('assets/plugins/bootstrap/css/bootstrap.css') }}" rel="stylesheet">

<!-- Custom Css -->
<link href="{{ asset ('assets/css/style.css') }}" rel="stylesheet">

{{-- <link href="{{ asset ('assets_frontend/css/package_style.css') }}" rel="stylesheet"> --}}

<!-- Waves Effect Css -->
<link href="{{ asset ('assets/plugins/node-waves/waves.css') }}" rel="stylesheet" />


<!-- Animation Css -->
<link href="{{ asset ('assets/plugins/animate-css/animate.css') }}" rel="stylesheet" />

{{-- Bootstrap Datatable --}}
<link href="{{ asset ('assets/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css') }}" rel="stylesheet">

<!-- Swall Css-->
<link href="{{ asset ('assets/plugins/sweetalert/sweetalert.css') }}" rel="stylesheet" />

<!-- Morris Chart Css-->
<link href="{{ asset ('assets/plugins/morrisjs/morris.css') }}" rel="stylesheet" />

<!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
<link href="{{ asset ('assets/css/themes/all-themes.css') }}" rel="stylesheet" />


<link href="{{ asset ('assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css') }}" rel="stylesheet" />

<link href="{{ asset ('assets/plugins/waitme/waitMe.css') }}" rel="stylesheet" />
{{-- DATEPICKER --}}
<link href="{{ asset ('assets/plugins/datepicker/css/bootstrap-datepicker.css') }}" rel="stylesheet" />


<!-- Font awesome-->
{{-- <link href="{{ asset ('assets/css/fontawesome/css/all.css') }}" rel="stylesheet" /> --}}

 <!-- Colorpicker Css -->
<link href="{{ asset ('assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css') }}" rel="stylesheet" />

<!-- Izi toast-->
<link href="{{ asset ('assets/plugins/iziToast/dist/css/iziToast.css') }}" rel="stylesheet" />
<link href="{{ asset ('assets/plugins/iziToast/dist/css/iziToast.min.css') }}" rel="stylesheet" />

<!-- font awesome-->
<link href="{{ asset ('assets/plugins/fontawesome/css/fontawesome.css') }}" rel="stylesheet" />
<link href="{{ asset ('assets/plugins/fontawesome/css/all.css') }}" rel="stylesheet" />





<style type="text/css">
	
	.readonly:read-only
	{
	    background-color: #ebebeb;
		pointer-events: none;
	}
	.center{
		text-align: center;
	}
	.right{
		text-align: right;
	}
	.left{
		text-align: left;
	}
	.borderless{
		border: none !important;
	}
	.form-control-label {
	    text-align: left;
	}
	table .v_center { 
	  display: table-cell;
	  vertical-align: center; 
	}
	.over-flow-x{
		overflow-x: auto;
	}
	.paging-trans{
		-webkit-transition: all 0.2s ease;
		-moz-transition: all 0.2s ease;
		-o-transition: all 0.2s ease;
		-ms-transition: all 0.2s ease;
		transition: all 0.2s ease;
	}
	.arrow{
		color: green;
		background: white;
	}
	.arrow:hover{
		color: red;
		background: #8888;
	}
	.on_screen{
		left: 0;
		opacity: 1;
		display: inline-block;
	}
	.delayed{
		left: /*1500*/;
		opacity: 0;
		display: none;
	}
	
	
</style>