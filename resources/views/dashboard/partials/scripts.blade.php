    <!-- inject:js-->
    <script src="{{asset('assets/vendor/js/jquery/jquery-3.5.1.min.js')}}"></script>
    <script src="{{asset('assets/vendor/js/jquery/jquery-ui.js')}}"></script>
    <script src="{{asset('assets/vendor/js/bootstrap/bootstrap.min.js')}}"></script>
    <script src="swiper%4011.1.12/swiper-bundle.min.js"></script>
    <script src="npm/apexcharts%403.27.0/dist/apexcharts.min.js"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>
    <!-- endinject-->
    <script>
		// Render localStorage JS:
		if (localStorage.theme) document.documentElement.setAttribute("data-theme", localStorage.theme);
		if (localStorage.layout) document.documentElement.setAttribute("data-nav", localStorage.navbar);
		if (localStorage.layout) document.documentElement.setAttribute("dir", localStorage.layout);
    </script>
