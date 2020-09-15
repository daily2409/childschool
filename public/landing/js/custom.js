(function ($) {
	"use strict";
	var money = {
		initialised: false,
		version: 1.0,
		money: false,
		init: function () {

			if(!this.initialised) {
				this.initialised = true;
			} else {
				return;
			}

			this.world_map();
        },
        
    // ----------function js-----------
        // timer js start
        // partner slider end
        // service map start
        world_map: function() {
            if($('#world-map').length > 0){
                $(function(){
                    $('#world-map').vectorMap({
                    map: 'world_mill',
                    scaleColors: ['#C8EEFF', '#0071A4'],
                    normalizeFunction: 'polynomial',
                    hoverOpacity: 0.9,
                    hoverColor: false,
                    zoomOnScrollSpeed:1, //default value is 3
                     zoomStep:1.1, //default value is 1.6
                        markerStyle: {
                                        initial:{
                                                    fill: '#ffb628',
                                                    stroke: '#ffb628'
                                                },
                                        hover: {
                                                    stroke: '#ffb628',
                                                    fill:'#ffc454',
                                                    "stroke-width": 2,
                                                    cursor: 'pointer'
                                                },
                                        selected:{
                                                    fill: 'blue'
                                                },
                                        selectedHover: {
                                                        }
                                    },
                        regionStyle:{
                                        initial: {
                                                    fill: '#e3eaef',
                                                    "fill-opacity": 1,
                                                    stroke: 'none',
                                                    "stroke-width": 0,
                                                    "stroke-opacity": 1
                                                },
                                        hover: {
                                                    "fill-opacity": 0.8,
                                                    cursor: 'pointer'
                                                },
                                        selected:{
                                                    fill: 'yellow'
                                                },
                                        selectedHover: {
                                                        }
                                    },
                        backgroundColor: 'transparent',
                        markers: [
                            {
                                latLng: [10.7866523, 106.6333823, 17],
                                name: '15 Vươn Lài, Phú Thọ Hoà, Tân Phú, HCM',
                            }
                        ]
                      });
                    });
            }
        },
       
    };	
	money.init();
	
	
})(jQuery);	
