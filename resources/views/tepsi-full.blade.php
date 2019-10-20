@extends('header')

@section('content')

        <!--<Cuerpo hecho con ReactJS-->
        <div id="tepsi"></div>
        <script src="{{asset('js/app.js')}}"></script>
        <script src="{{asset('js/app.js')}}"></script>




        <!--<Funciones de ampliar pantalla-->

        <script type="text/javascript">
                        
                function launchFullScreen(element) {
                        
                  if(element.requestFullScreen) {
                    element.requestFullScreen();
                  } else if(element.mozRequestFullScreen) {
                    element.mozRequestFullScreen();
                  } else if(element.webkitRequestFullScreen) {
                    element.webkitRequestFullScreen();
                  }
                }
                // Lanza en pantalla completa en navegadores que lo soporten
                 function cancelFullScreen() {
                        
                     if(document.cancelFullScreen) {
                         document.cancelFullScreen();
                     } else if(document.mozCancelFullScreen) {
                         document.mozCancelFullScreen();
                     } else if(document.webkitCancelFullScreen) {
                         document.webkitCancelFullScreen();
                     }
                 }
        </script>

@endsection