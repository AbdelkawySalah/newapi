
    <!-- SCRIPTS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script>
	   if (!window.jQuery) { 
		  document.write('<script src="{{asset('frontend/js/jquery-3.1.1.min.js')}}"><\/script>'); 
	   }
	</script>
    <script src="{{asset('frontend/js/jquery-migrate-3.0.0.min.js')}}"></script>
    <script src="{{asset('frontend/js/fastclick.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.fitvids.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.viewport.mini.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.waypoints.min.js')}}"></script>    
    <script src="{{asset('frontend/js/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('frontend/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.isotope.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.magnific-popup/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.fluidbox/jquery.fluidbox.min.js')}}"></script>
    <script src="{{asset('frontend/js/owl-carousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('frontend/js/selection-sharer/selection-sharer.js')}}"></script>
    <script src="{{asset('frontend/js/socialstream.jquery.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.collagePlus/jquery.collagePlus.min.js')}}"></script>
    <script src="{{asset('frontend/js/main.js')}}"></script>
    <script src="{{asset('frontend/js/shortcodes/shortcodes.js')}}"></script>
    @yield('scripts')
