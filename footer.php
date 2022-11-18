        <div id="boton-subir"><a class="boton-subir" href="#inicio">a</a></div>
</main>

<footer>
        <div class="texto_footer">
                    <p>© Web diseñada por Matias Solís.</p>
        </div>
    </footer>
       
       <!--scroll lento<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" integrity="sha384-3ceskX3iaEnIogmQchP8opvBy3Mi7Ce34nWjpBIwVTHfGYWQS9jwHDVRnpKKHJg7" crossorigin="anonymous"></script>-->
       
        
        <script type='application/ld+json'> 
                {
                  "@context": "http://www.schema.org",
                  "@type": "LocalBusiness",
                  "name": "MS Diseño Gráfico y Web",
                  "url": "https://www.matiassolis.com/",
                  "logo": "http://matiassolis.com/img/logo_ms.png",
                  "image": "http://matiassolis.com/img/ms_diseno-grafico-web.jpg",
                  "description": "Diseño gráfico y web, zona oeste, Ituzaingó · MS Diseñador gráfico y web · Diseño web · Redes sociales · Diseño de identidad · Tipografía · Diseño editorial - revistas y catálogos. info@matiassolis.com.",
                  "telephone": "+54 11 4054-9068",
                  "address": {
                    "@type": "PostalAddress",
                    "streetAddress": "Fernández de la Cruz 115",
                    "addressLocality": "Buenos Aires",
                    "addressRegion": "Ituzaingó",
                    "postalCode": "1714",
                    "addressCountry": "Argentina"
                  },
                  "geo": {
                    "@type": "GeoCoordinates",
                    "latitude": "-34.634202",
                    "longitude": "-58.665206"
                  },
                  "sameAs": [
                    "https://www.facebook.com/dgmatiassolis",
                    "https://www.instagram.com/matiassolisdg/",
                    "https://www.linkedin.com/in/dgmatiassolis/",
                    "https://twitter.com/matiassolis97"
                  ],
                  "hasMap": "https://www.google.com/maps/place/34%C2%B038'03.1%22S+58%C2%B039'54.7%22W/@-34.6341944,-58.6657416,19z/data=!3m1!4b1!4m6!3m5!1s0x0:0x0!7e2!8m2!3d-34.6342022!4d-58.665206",
                  "openingHours": "Mo, Tu, We, Th, Fr 09:00-18:00"
                }
         </script>
         
         <script>
            $(document).ready(function(){$('#button-menu').click(function(){if($('#button-menu').attr('class')=='fa fa-bars'){$('#button-menu').removeClass('fa fa-bars').addClass('fa fa-times-circle');$('.navegacion .menu').css({'left':'0%'});$('.navegacion').css({'background':'rgba(0,0,0,0.4)'});$('.navegacion').css({'height':'100vh'})}
else{$('#button-menu').removeClass('fa fa-times-circle').addClass('fa fa-bars');$('.navegacion .menu').css({'left':'-100%'});$('.navegacion .submenu').css({'left':'-100%'});$('.navegacion').css({'height':'0%'})}});$('.navegacion .menu > .item-submenu a').click(function(){var positionMenu=$(this).parent().attr('menu');$('.item-submenu[menu='+positionMenu+'] .submenu').css({'left':'0'});$('.navegacion .submenu li.go-back').click(function(){$(this).parent().css({'left':'-100%'})})});$('.navegacion ul li .btn-enlace').click(function(){$(this).parent().css({'left':'-100%'});$('.menu').css({'left':'-100%'});$('.navegacion').css({'height':'0%'});$('#button-menu').removeClass('fa fa-times-circle').addClass('fa fa-bars')});$('.navegacion .submenu li a').click(function(){$(this).parent().css({'left':'-100%'});$('.menu').css({'left':'-100%'});$('.navegacion').css({'height':'0%'});$('#button-menu').removeClass('fa fa-times-circle').addClass('fa fa-bars')});var consulta=$("#searchTable").DataTable();$("#inputBusqueda").keyup(function(){consulta.search($(this).val()).draw();$(".header_box").css({"height":"100vh","width":"100vw","background":"rgba(0,0,0,0.5)","display":"flex","align-items":"flex-start","z-index":"9999",})
if($("#inputBusqueda").val()==""){$(".header_box").css({"height":"auto","background":"none","width":"90%",})
$("#search").hide()}else{$("#search").fadeIn("fast");$("#button-menu").css({"height":"98%",});$(".ms-dgjr").css({"height":"100%",});$(".header-top").css({"margin-top":".5em",})}});$("#icon-search").click(function(){$("#inputBusqueda").slideToggle()})
$('tbody tr td a').click(function(){$(".header_box").css({"height":"auto","background":"none",})
$("#search").hide()})})
         </script>        
        
    </body>