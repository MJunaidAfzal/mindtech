    <!-- inject:js-->
{{-- <script src="{{ asset('assets/vendor/js/jquery/jquery-3.5.1.min.js') }}"></script> --}}

    <script src="{{asset('assets/vendor/js/jquery/jquery-ui.js')}}"></script>
    {{-- <script src="{{asset('assets/vendor/js/bootstrap/bootstrap.min.js')}}"></script> --}}

    <script src="{{asset('assets/js/main.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


    <!-- endinject-->
    <script>
		// Render localStorage JS:
		if (localStorage.theme) document.documentElement.setAttribute("data-theme", localStorage.theme);
		if (localStorage.layout) document.documentElement.setAttribute("data-nav", localStorage.navbar);
		if (localStorage.layout) document.documentElement.setAttribute("dir", localStorage.layout);
    </script>
