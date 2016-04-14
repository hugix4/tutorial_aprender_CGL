/*
 *  Plugin que muestra y oculta elementos - 21/06/2012
 *  modificacion v3 23/10/2012 
 *  UNAM - DGCCH
 *  Jonathan Bailon Segura
 *  jonn59@gmail.com
 */
;(function ( $, window, undefined ) {
    
    var pluginName = 'mostrarocultar',
        document = window.document,
        defaults = {
                        active:   false,        //Mostramos el elemento a mostrar por defecto
			elemento: "ul",       //Cambiar el elemento que muestra y oculta
			oactive:   true,       //SAber si el elemento seleccionado se puede ocultar
			contopc:  "#opc"
        };

    function Plugin( element, options ) {
        this.element = element;
        this.options = $.extend( {}, defaults, options) ;
 
        this._defaults = defaults;
        this._name = pluginName;
        
        this.init();
    }

    Plugin.prototype.init = function () {
	    var elem   = $(this.element);
	    var opcion = this.options;
	    var asig   = "";
		$(".oculto",this.element).hide();
		
		if( this.options.elemento == "ul"){
			if (this.options.active != false){
				var actual = $("ul li:nth-child("+this.options.active+") a",elem).attr("href");
				$("ul li:nth-child("+this.options.active+")",elem).addClass("active");
				jQuery (actual, elem).show()
			}
                        asig = "ul li  a";
		}else if( this.options.elemento == "div"){
			if (this.options.active != false){
				var actual = $(this.options.contopc + " div:nth-child("+this.options.active+") a",elem).attr("href");
				$(this.options.contopc + " div:nth-child("+this.options.active+")",elem).addClass("active");
				jQuery (actual, elem).show()
			}
                        asig = this.options.contopc +" div a";
		}
			
		$(asig,this.element).click(function(event){		
			event.preventDefault();
			var nodo  = $(this).attr("href");
			var nodoP = $(this).parent();
				
			$($(asig).parent(),elem).removeClass("active");
			
		  	if ($(nodo,elem).is(":visible")){
		  		if (opcion.oactive != false){
					$(nodo,elem).hide();
					$(nodoP).removeClass("active");
				}else{
					$(nodoP).addClass("active");
				}
		  	} else{
				$(".oculto",elem).hide();           					 
				$(nodo,elem).fadeToggle( "slow" );
				$(nodoP).addClass("active");
		  	}
		});	
    };

    $.fn[pluginName] = function ( options ) {
        return this.each(function () {
            if (!$.data(this, 'plugin_' + pluginName)) {
                $.data(this, 'plugin_' + pluginName, new Plugin( this, options ));
            }
        });
    };

}(jQuery, window)); 
