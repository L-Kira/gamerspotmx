define([
	'jquery',
	'underscore',
	'backbone',
	'router',
], function( $, _, Backbone, Router){
	"use strict";
	
	var initialize = function(){
		// Inicializamos la Rutas
		$(document).on("ready", function () {
          console.log('lets rock');
      	});
      	Router.initialize();
	}

	return {
		initialize: initialize
	};
});