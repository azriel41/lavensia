<!-- Jquery Core Js -->
{{-- <script src="{{ asset ('assets/plugins/jquery/jquery.js') }}"></script> --}}
<script src="{{ asset ('assets/plugins/jquery/jquery-1.11.3.min.js') }}"></script>
<script src="{{ asset ('assets/plugins/jquery/jquery-2.1.4.min.js') }}"></script>
<!-- Bootstrap Core Js -->
<script src="{{ asset ('assets/plugins/bootstrap/js/bootstrap.js') }}"></script>

<!-- Bootstrap Tags Input Plugin Js -->
<script src="{{ asset ('assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js') }}"></script>

<!-- Select Plugin Js -->
{{-- <script src="{{ asset ('assets/plugins/bootstrap-select/js/bootstrap-select.js') }}"></script> --}}

<!-- Moment Plugin Js -->
<script src="{{ asset ('assets/plugins/momentjs/moment.js') }}"></script>

<!-- Bootstrap Material Datetime Picker Plugin Js -->
<script src="{{ asset ('assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js') }}"></script>

<!-- Custom Js -->
<script src="{{ asset ('assets/js/pages/forms/basic-form-elements.js') }}"></script>

<!-- Autosize Plugin Js -->
<script src="{{ asset ('assets/plugins/autosize/autosize.js') }}"></script>

<!-- Slimscroll Plugin Js -->
<script src="{{ asset ('assets/plugins/jquery-slimscroll/jquery.slimscroll.js') }}"></script>

<!-- Waves Effect Plugin Js -->
<script src="{{ asset ('assets/plugins/node-waves/waves.js') }}"></script>

<!-- Jquery CountTo Plugin Js -->
<script src="{{ asset ('assets/plugins/jquery-countto/jquery.countTo.js') }}"></script>

<!-- Morris Plugin Js -->
<script src="{{ asset ('assets/plugins/raphael/raphael.min.js') }}"></script>
<script src="{{ asset ('assets/plugins/morrisjs/morris.js') }}"></script>

<!-- ChartJs -->
<script src="{{ asset ('assets/plugins/chartjs/Chart.bundle.js') }}"></script>

<!-- Flot Charts Plugin Js -->
<script src="{{ asset ('assets/plugins/flot-charts/jquery.flot.js') }}"></script>
<script src="{{ asset ('assets/plugins/flot-charts/jquery.flot.pie.js') }}"></script>
<script src="{{ asset ('assets/plugins/flot-charts/jquery.flot.categories.js') }}"></script>
<script src="{{ asset ('assets/plugins/flot-charts/jquery.flot.time.js') }}"></script>

<!-- Sparkline Chart Plugin Js -->
<script src="{{ asset ('assets/plugins/jquery-sparkline/jquery.sparkline.js') }}"></script>

<!-- Custom Js -->
<script src="{{ asset ('assets/js/admin.js') }}"></script>
<script src="{{ asset ('assets/js/pages/index.js') }}"></script>

<!-- Demo Js -->
<script src="{{ asset ('assets/js/demo.js') }}"></script>

<!-- Jquery DataTable Plugin Js -->
<script src="{{ asset ('assets/plugins/jquery-datatable/jquery.dataTables.js') }}"></script>
<script src="{{ asset ('assets/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js') }}"></script>
<script src="{{ asset ('assets/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset ('assets/plugins/jquery-datatable/extensions/export/buttons.flash.min.js') }}"></script>
<script src="{{ asset ('assets/plugins/jquery-datatable/extensions/export/jszip.min.js') }}"></script>
<script src="{{ asset ('assets/plugins/jquery-datatable/extensions/export/pdfmake.min.js') }}"></script>
<script src="{{ asset ('assets/plugins/jquery-datatable/extensions/export/vfs_fonts.js') }}"></script>
<script src="{{ asset ('assets/plugins/jquery-datatable/extensions/export/buttons.html5.min.js') }}"></script>
<script src="{{ asset ('assets/plugins/jquery-datatable/extensions/export/buttons.print.min.js') }}"></script>

<!-- Custom Validasi-->
<script src="{{ asset ('assets/js/pages/forms/form-validation.js') }}"></script>
<script src="{{ asset ('assets/plugins/jquery-validation/jquery.validate.js')}}"></script>
<script src="{{ asset ('assets/plugins/jquery-steps/jquery.steps.js')}}"></script>

<script src="{{ asset ('assets/js/demo.js') }}"></script>

<!-- Input Mask Plugin Js -->
<script src="{{ asset ('assets/plugins/jquery-inputmask/jquery.inputmask.bundle.js') }}"></script>

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

<script type="text/javascript">
		

	$('.dataTable').DataTable({
		responsive: true
	});		

	$('.datenormal').bootstrapMaterialDatePicker({
        format: 'DD-MM-YYYY',
        clearButton: true,
        weekStart: 1,
        time: false
    });

    $('.maskMoney').maskMoney({thousands:'.', decimal:',', precision:-1});


</script>