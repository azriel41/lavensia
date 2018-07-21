
<!-- Essential jQuery Plugins
================================================== -->
<!-- Main jQuery -->
<script src="{{ asset ('assets_frontend/js/jquery-1.11.1.min.js') }}"></script>
<!-- Single Page Nav -->
<script src="{{ asset ('assets_frontend/js/jquery.singlePageNav.min.js') }}"></script>
<!-- Twitter Bootstrap -->
<script src="{{ asset ('assets_frontend/js/bootstrap.min.js') }}"></script>
<!-- jquery.fancybox.pack -->
<script src="{{ asset ('assets_frontend/js/jquery.fancybox.pack.js') }}"></script>
<!-- jquery.mixitup.min -->
<script src="{{ asset ('assets_frontend/js/jquery.mixitup.min.js') }}"></script>
<!-- jquery.parallax -->
<script src="{{ asset ('assets_frontend/js/jquery.parallax-1.1.3.js') }}"></script>
<!-- jquery.countTo -->
<script src="{{ asset ('assets_frontend/js/jquery-countTo.js') }}"></script>
<!-- jquery.appear -->
<script src="{{ asset ('assets_frontend/js/jquery.appear.js') }}"></script>
<!-- Contact form validation -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.32/jquery.form.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.11.1/jquery.validate.min.js"></script>
<!-- Google Map -->
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
<!-- jquery easing -->
<script src="{{ asset ('assets_frontend/js/jquery.easing.min.js') }}"></script>
<!-- jquery easing -->
<script src="{{ asset ('assets_frontend/js/wow.min.js') }}"></script>
{{-- DROPZONE --}}
<script src="{{ asset ('assets_frontend/dropzone/dropzone.js') }}"></script>
<!-- Select Plugin Js -->
<script src="{{ asset ('assets/plugins/bootstrap-select/js/bootstrap-select.js') }}"></script>
<!-- Izi toast-->
<script src="{{ asset ('assets/plugins/iziToast/dist/js/iziToast.js')}}"></script>
<script src="{{ asset ('assets/plugins/iziToast/dist/js/iziToast.min.js')}}"></script>
{{-- ACCOUNTING --}}
<script src="{{ asset ('assets/plugins/accounting/accounting.min.js')}}"></script>
{{-- SELECT2 --}}
<script src="{{ asset ('assets/plugins/select2/dist/js/select2.min.js') }}"  /></script>
<script>
    var wow = new WOW ({
        boxClass:     'wow',      // animated element css class (default is wow)
        animateClass: 'animated', // animation css class (default is animated)
        offset:       120,          // distance to the element when triggering the animation (default is 0)
        mobile:       false,       // trigger animations on mobile devices (default is true)
        live:         true        // act on asynchronously loaded content (default is true)
      }
    );
    wow.init();
</script> 
<!-- Custom Functions -->
<script src="{{ asset ('assets_frontend/js/custom.js') }}"></script>

<script type="text/javascript">
    
    $(function(){
        /* ========================================================================= */
        /*  Contact Form
        /* ========================================================================= */
        
        $('#contact-form').validate({
            rules: {
                name: {
                    required: true,
                    minlength: 2
                },
                email: {
                    required: true,
                    email: true
                },
                message: {
                    required: true
                }
            },
            messages: {
                name: {
                    required: "come on, you have a name don't you?",
                    minlength: "your name must consist of at least 2 characters"
                },
                email: {
                    required: "no email, no message"
                },
                message: {
                    required: "um...yea, you have to write something to send this form.",
                    minlength: "thats all? really?"
                }
            },
            submitHandler: function(form) {
                $(form).ajaxSubmit({
                    type:"POST",
                    data: $(form).serialize(),
                    url:"process.php",
                    success: function() {
                        $('#contact-form :input').attr('disabled', 'disabled');
                        $('#contact-form').fadeTo( "slow", 0.15, function() {
                            $(this).find(':input').attr('disabled', 'disabled');
                            $(this).find('label').css('cursor','default');
                            $('#success').fadeIn();
                        });
                    },
                    error: function() {
                        $('#contact-form').fadeTo( "slow", 0.15, function() {
                            $('#error').fadeIn();
                        });
                    }
                });
            }
        });
    });

    function login(argument) {
        window.location=('{{ url('/login') }}');
    }
    function register(argument) {
        window.location=('{{ url('/register') }}');
    }

    

</script>