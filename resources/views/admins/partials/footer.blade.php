    <script src="{{url('/')}}/assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="{{url('/')}}/https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="{{url('/')}}/assets/js/plugins.js"></script>
    <script src="{{url('/')}}/assets/js/main.js"></script>


    <script src="{{url('/')}}/assets/js/lib/chart-js/Chart.bundle.js"></script>
    <script src="{{url('/')}}/assets/js/dashboard.js"></script>
    <script src="{{url('/')}}/assets/js/widgets.js"></script>
    <script src="{{url('/')}}/assets/js/lib/vector-map/jquery.vmap.js"></script>
    <script src="{{url('/')}}/assets/js/lib/vector-map/jquery.vmap.min.js"></script>
    <script src="{{url('/')}}/assets/js/lib/vector-map/jquery.vmap.sampledata.js"></script>
    <script src="{{url('/')}}/assets/js/lib/vector-map/country/jquery.vmap.world.js"></script>
    <script type="text/javascript">
        var baseUrl='{{ url('/')}}';
    </script>
    <script type="text/javascript" src="{{url('/')}}/assets/tiny/jquery.tinymce.min.js"></script>
    <script type="text/javascript" src="{{url('/')}}/assets/tiny/tinymce.min.js"></script>
    <script type="text/javascript" src="{{url('/')}}/assets/tiny/tinymce.setting.js"></script>
    <script>
        ( function ( $ ) {
            "use strict";

            jQuery( '#vmap' ).vectorMap( {
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: [ '#1de9b6', '#03a9f5' ],
                normalizeFunction: 'polynomial'
            } );
        } )( jQuery );
    </script>