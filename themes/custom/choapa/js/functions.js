(function($){
  Drupal.behaviors.some_name = {
    attach: function (context) {

        var ciudades = [
             ["RM","Santiago"]
            ,["V","La Calera"]
            ,["V","La Ligua"]
            ,["V","Quillota"]
            ,["V","Valparaiso"]
            ,["V","Viña del Mar"]
        ];

        var sucursales = [];

        sucursales['argentina'] = [
             "Mendoza"   //Ciudad 
            ,"Tas Choapa" //Empresa
            ,"Autopista de Acceso Este S/N" // Dirección 1
            ,"Terminal del Sol, Locales E6-E7" // Dirección 2
            ,"-32.894689" // Latitud
            ,"-68.829421" // Longitud
            ,"L-D 07:00-22:30 hrs" // Horario
            ,"+54 2 61431 2140" // Telefono
        ];

        sucursales['chile'] = [
            [
             "Santiago"   //Ciudad
            ,"Tas Choapa" //Empresa
            ,"Terminal de Buses Sur, Oficina 70" // Dirección 1
            ,"Terminal de Buses Sur, Oficina 70" // Dirección 2
            ,"-33.453968" // Latitud
            ,"-70.687867" // Longitud
            ,"L-D 07:30-22:15 hrs" // Horario
            ,"+56 2 2822 7561" // Telefono
            ],
            [
             "Santiago"   //Ciudad
            ,"Turbus" //Empresa
            ,"Av. Bernardo O'Higgins 3750" // Dirección 1
            ,"" // Dirección 2
            ,"-33.453398" // Latitud
            ,"-70.687077" // Longitud
            ,"L 05:30-00:50 M-D: 05:45-00:50" // Horario
            ,"+56 2 2822 7500" // Telefono
            ],
            [
             "La Calera"   //Ciudad
            ,"Turbus" //Empresa
            ,"Av. Gonzalo Lizasoain 523" // Dirección 1
            ,"Terminal de Buses, Oficina 1" // Dirección 2
            ,"-32.785463" // Latitud
            ,"-71.188792" // Longitud
            ,"L-D 08:30-14:00 Y 15:30-23:00" // Horario
            ,"+56 3 3222 5452" // Telefono
            ]
        ];

        var myLatlng = new google.maps.LatLng(-33.4727879, -70.6298313);
        var myOptions = {
            zoom: 8,
            center: myLatlng,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        map = new google.maps.Map(document.getElementById("map"), myOptions);


        function addMarker(location,contentString) {

            var infowindow = new google.maps.InfoWindow({
                content: contentString
            });

            marker = new google.maps.Marker({
                position: location,
                map: map
            });

            marker.addListener('click', function() {
                infowindow.open(map, marker);
            });
        }


        $(document).ready(function() {

            $("#pto_venta_pais").change(function(){
                var pais = $(this).val();
                var select_region = "<option value=''>Selecticione una región</option>";
                var select_ciudad = "<option value=''>Selecticione una ciudad</option>";
                if( pais == "chile" ){
                    select_region = select_region+'<option value="RM">Región Metropolitana</option><option value="V">Región de Valparaiso</option>';
                    $('#pto_venta_region,#pto_venta_ciudad').prop('disabled', false);
                }else{
                    $('#pto_venta_region,#pto_venta_ciudad').prop('disabled', true);
                }
                $("#pto_venta_region").html(select_region);
                $("#pto_venta_ciudad").html(select_ciudad);
            });

            $("#pto_venta_region").change(function(){
                var pais            = 'chile';
                var region          = $(this).val();
                var select_ciudad   = "<option value=''>Selecticione una ciudad</option>";

                for (i=0;i<ciudades.length;i++){
                    if (region == ciudades[i][0] ){
                        select_ciudad = select_ciudad + "<option value='"+ciudades[i][1]+"'>"+ciudades[i][1]+"</option>";
                    }
                }

                $("#pto_venta_ciudad").html(select_ciudad);

            });

            $("#pto_venta_ciudad").change(function(){
                var pais            = 'chile';
                var ciudad          = $(this).val();
                var select_ciudad   = "<option value=''>Selecticione una ciudad</option>";

                for (i=0;i<sucursales[pais].length;i++){
                    if(ciudad == sucursales[pais][i][0] ){
                     var contentString = '<div id="content">'+
                          '<h1>'+sucursales[pais][i][0]+'</h1>'+
                          '<div id="bodyContent">'+
                          '<p>'+sucursales[pais][i][1]+'</p>'+
                          '<p>'+sucursales[pais][i][2]+'</p>'+
                          '<p>'+sucursales[pais][i][3]+'</p>'+
                          '<p>'+sucursales[pais][i][6]+'</p>'+
                          '<p>'+sucursales[pais][i][7]+'</p>'+
                          '</div>'+
                          '</div>';

                        marcador = new google.maps.LatLng(sucursales[pais][i][4], sucursales[pais][i][5]);
                        addMarker(marcador,contentString);

                    }
                }

            });

            $("#form").validate({
                rules: {
                     nombre     : { required: true , minlength : 3 }
                    ,email      : { required: true , minlength : 3 , validEmail: true }
                    ,mensaje    : { required: true , minlength : 3 }
                }
            });


            // PLACEHOLDER IE
            $('input, textarea').placeholder();

            // EASY SCROLL 
            $('.easy').on('click', function(e) {
                e.preventDefault();
                var $link = $(this);
                var anchor = $link.attr('href');
                $('html, body').stop().animate({
                    scrollTop: $(anchor).offset().top
                }, 500);
            });

            // TABS
            /*jQuery(".tabs").tabs();
            jQuery(".subtab").tabs();
            openParentTab();*/
        });


        $(document).ready(main);
        //MENÚ RESPONSIVO
        var contador = 1;

        function main() {
            $('.menu_bar').click(function() {
                if (contador == 1) {
                    $('nav').animate({
                        left: '0'
                    });
                    contador = 0;
                } else {
                    contador = 1;
                    $('nav').animate({
                        left: '-100%'
                    });
                }
            });

        };



        // CARRUSEL
        $(function() {});
        $(window).load(function() {
            $('.buses').flexslider({
                animation: "slide",
                animationLoop: true,
                itemWidth: 315,
                itemMargin: 5,
                minItems: 1,
                maxItems: 5,
                controlNav: false,
                start: function(slider) {
                    $('body').removeClass('loading');
                }
            });
        });


        // MAGAZINE
        $(function() {});
        $(window).load(function() {
            $('.magazine').flexslider({
                animation: "slide",
                start: function(slider) {
                    $('body').removeClass('loading');
                }
            });
        });

    }
  };
})(jQuery);

    // TABS PARENT
    function openParentTab() {
        locationHash = location.hash.substring(1);
        console.log(locationHash);
        // Check if we have an location Hash
        if (locationHash) {
            // Check if the location hash exsist.
            var hash = jQuery('#' + locationHash);
            if (hash.length) {
                // Check of the location Hash is inside a tab.
                if (hash.closest(".tabContent").length) {
                    // Grab the index number of the parent tab so we can activate it
                    var tabNumber = hash.closest(".tabContent").index();
                    jQuery(".tabs.fix").tabs({ active: tabNumber });
                    // Not need but this puts the focus on the selected hash
                    hash.get(0).scrollIntoView();
                    setTimeout(function() {
                        hash.get(0).scrollIntoView();
                    }, 1000);
                }
            }
        }
    }