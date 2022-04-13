<script src='{{path()}}files/home/js/jquery.min.js'></script>
<script src='{{path()}}files/home/js/slick.min.js'></script>
<script src='{{path()}}files/home/js/jquery.sticky.js'></script>
<script src='{{path()}}files/home/js/countto.min.js'></script>
<script src='{{path()}}files/home/js/jquery.magnific-popup.min.js'></script>
<script src='{{path()}}files/home/js/jquery.isotope.min.js'></script>
<script src='{{path()}}files/home/js/scripts.js'></script>

<script
    src="https://code.jquery.com/jquery-1.12.4.min.js"
    integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
    crossorigin="anonymous"></script>
<script src="{{path()}}js/toastr.min.js"></script>
<script src="{{path()}}js/jquery.form.min.js"></script>
<script src="{{path()}}nprogress-master/nprogress.js"></script>
<script src="{{path()}}js/master.js"></script>
@if(scripts())
    @if(scripts()->js)
        {!! scripts()->js !!}
    @endif
    @if(scripts()->custom)
        {!! scripts()->custom !!}
    @endif
@endif
