<!-- Jquery Core Js -->
{{-- <script src="{{ asset ('assets/plugins/jquery/jquery.js') }}"></script> --}}
{{-- <script src="{{ asset ('assets/js/jquery-3.2.1.min.js') }}"></script> --}}
<script src="{{ asset ('assets/plugins/jquery/jquery-1.11.3.min.js') }}"></script>
<script src="{{ asset ('assets/plugins/jquery/jquery-2.1.4.min.js') }}"></script>
<!-- Bootstrap Core Js -->
<script src="{{ asset ('assets/plugins/bootstrap/js/bootstrap.js') }}"></script>

<!-- Bootstrap Tags Input Plugin Js -->
<script src="{{ asset ('assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js') }}"></script>

<!-- Select Plugin Js -->
<script src="{{ asset ('assets/plugins/bootstrap-select/js/bootstrap-select.js') }}"></script>

<!-- Moment Plugin Js -->
<script src="{{ asset ('assets/plugins/momentjs/moment.js') }}"></script>

<!-- Bootstrap Material Datetime Picker Plugin Js -->
<script src="{{ asset ('assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js') }}"></script>

<!-- Custom Js -->
<script src="{{ asset ('assets/js/pages/forms/basic-form-elements.js') }}"></script>
{{-- DROPZONE --}}
<script src="{{ asset ('assets/js/dropzone.js') }}"></script>

<!-- Autosize Plugin Js -->
<script src="{{ asset ('assets/plugins/autosize/autosize.js') }}"></script>

<!-- Slimscroll Plugin Js -->
<script src="{{ asset ('assets/plugins/jquery-slimscroll/jquery.slimscroll.js') }}"></script>
{{-- count to --}}
<script src="{{ asset ('assets/plugins/jquery-countTo/jquery.countTo.js') }}"></script>

<!-- Waves Effect Plugin Js -->
<script src="{{ asset ('assets/plugins/node-waves/waves.js') }}"></script>

<!-- Flot Charts Plugin Js -->
<script src="{{ asset ('assets/plugins/flot-charts/jquery.flot.js') }}"></script>
<script src="{{ asset ('assets/plugins/flot-charts/jquery.flot.pie.js') }}"></script>
<script src="{{ asset ('assets/plugins/flot-charts/jquery.flot.categories.js') }}"></script>
<script src="{{ asset ('assets/plugins/flot-charts/jquery.flot.time.js') }}"></script>

<!-- Sparkline Chart Plugin Js -->
<script src="{{ asset ('assets/plugins/jquery-sparkline/jquery.sparkline.js') }}"></script>
<!-- TinyMCE -->
<!-- Custom Js -->
<script src="{{ asset ('assets/js/admin.js') }}"></script>
<script src="{{ asset ('assets/js/pages/index.js') }}"></script>
<script src="{{ asset ('assets/js/pages/forms/editors.js') }}"/></script>

<!-- Demo Js -->
<script src="{{ asset ('assets/js/demo.js') }}"></script>

<!-- Jquery DataTable Plugin Js -->
<script src="{{ asset ('assets/plugins/jquery-datatable/jquery.dataTables.js') }}"></script>
<script src="{{ asset ('assets/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js') }}"></script>

<!-- Custom Validasi-->
<script src="{{ asset ('assets/js/pages/forms/form-validation.js') }}"></script>
<script src="{{ asset ('assets/plugins/jquery-validation/jquery.validate.js')}}"></script>
<script src="{{ asset ('assets/plugins/jquery-steps/jquery.steps.js')}}"></script>

<script src="{{ asset ('assets/js/demo.js') }}"></script>


<!-- Advanced Form-->
<script src="{{ asset ('assets/js/pages/forms/advanced-form-elements.js') }}"></script>

<!-- Izi toast-->
<script src="{{ asset ('assets/plugins/iziToast/dist/js/iziToast.js')}}"></script>
<script src="{{ asset ('assets/plugins/iziToast/dist/js/iziToast.min.js')}}"></script>

<!-- Font awesome-->
<script src="{{ asset ('assets/plugins/fontawesome/js/fontawesome.js')}}"></script>
<script src="{{ asset ('assets/plugins/fontawesome/js/all.js')}}"></script>

<!-- Mask Money-->
<script src="{{ asset ('assets/plugins/mask-money/jquery.maskMoney.min.js')}}"></script>
{{-- DATEPICKER --}}
<script src="{{ asset ('assets/plugins/datepicker/js/bootstrap-datepicker.min.js') }}"></script>
{{-- SELECT2 --}}
<script src="{{ asset ('assets/plugins/select2/dist/js/select2.min.js') }}"/></script>


{{-- highchart --}}
<script src="{{ asset ('assets/js/highchart/highcharts.js') }}"></script>
<script src="{{ asset ('assets/js/highchart/highcharts-3d.js') }}"></script>
<script src="{{ asset ('assets/js/highchart/exporting.js') }}"></script>


<!-- Custom Js -->


<script type="text/javascript">
		

	$('.dataTable').DataTable({
		responsive: true
	});		

	$('.datenormal').bootstrapMaterialDatePicker({
        format: 'DD-MM-YYYY',
        clearButton: true,
        weekStart: 1,
        time: false,
        onSet: function (ele) {
		    if(ele.select){
		          this.close();
		    }
		}
    });

    $('.datenormal_month').bootstrapMaterialDatePicker({
        format: 'MM-YYYY',
        clearButton: true,
        weekStart: 0,
        time: false,
        onSet: function (ele) {
		    if(ele.select){
		          this.close();
		    }
		}
    });

    $('.maskMoney').maskMoney({thousands:'.', decimal:',', precision:-1});
    $('.numberonly').maskMoney({thousands:'', decimal:'', precision:-1,allowZero: true});

    var baseUrl = '{{ url('/') }}';
    


</script>