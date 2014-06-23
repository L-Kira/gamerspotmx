require.config({
    baseUrl: base_url + 'js',
    paths: {
        jquery: 'vendor/jquery/jquery',
        bootstrap: 'vendor/bootstrap/bootstrap.min',
        underscore: 'vendor/underscore/underscore-min',
		backbone: 'vendor/backbone/backbone',
		tinymce:'vendor/jquery/tinymce/tinymce.min',
		templates: '../templates'
    },
    waitSeconds: 15,
    shim: {
        'backbone': {
            //These script dependencies should be loaded before loading
            //backbone.js
            deps: ['underscore', 'jquery'],
            //Once loaded, use the global 'Backbone' as the
            //module value.
            exports: 'Backbone'
        },
        'underscore': {
            exports: '_'
        },
        'jquery':{
            exports: '$'
        },
        'bootstrap':['jquery']
    }
});

require([
	'app'
], function(App){
	App.initialize();
	console.log(App)
	$('#btnLogin').on('click', function(){
		window.location.hash = "#mail";
	});
});