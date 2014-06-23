define([
	'jquery',
	'underscore',
	'backbone',
	'tinymce'
], function($, _, Backbone){
	var AppRouter = Backbone.Router.extend({
	routes:{
		'':'root',
		'mail':'mail',
		'acceso':'acceso',
		'desktop': 'home_ac',
		'section/:query':'section',
		//Rutas para loguear
		'login': 'login',
	},
	//Rutas
	root:function(){
		console.log('root');
	},
	mail:function(){
		console.log('mail');
		$('.container').empty().append('<textarea></textarea>');
		tinymce.init({
		    selector: "textarea"
		 });
		
	},
	home_na:function(){
	
	},
	login: function(){
	
	},
	home_ac: function(id){
	},
	section: function(query){
		console.log(query);
	},
	});
	var initialize = function(){
		console.log('Router:Initialize');
		var app_router = new AppRouter;
		//Inicia el Historial de Backbone
		Backbone.history.start();
	};
	return {
		initialize: initialize
	};
});
