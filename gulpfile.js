var elixir = require('laravel-elixir');
/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix		
		//.copy('resources/assets/vendor/material-design-icons/action', 'public/img/action')
		//.copy('resources/assets/vendor/material-design-icons/alert', 'public/img/alert')
		//.copy('resources/assets/vendor/material-design-icons/av', 'public/img/av')
		//.copy('resources/assets/vendor/material-design-icons/communication', 'public/img/communication')
		//.copy('resources/assets/vendor/material-design-icons/content', 'public/img/content')
		//.copy('resources/assets/vendor/material-design-icons/device', 'public/img/device')
		//.copy('resources/assets/vendor/material-design-icons/editor', 'public/img/editor')
		//.copy('resources/assets/vendor/material-design-icons/file', 'public/img/file')
		//.copy('resources/assets/vendor/material-design-icons/hardware', 'public/img/hardware')
		//.copy('resources/assets/vendor/material-design-icons/image', 'public/img/image')
		//.copy('resources/assets/vendor/material-design-icons/maps', 'public/img/maps');
		//.copy('resources/assets/vendor/material-design-icons/navigation', 'public/img/navigation')
		//.copy('resources/assets/vendor/material-design-icons/notification', 'public/img/notification')
		//.copy('resources/assets/vendor/material-design-icons/social', 'public/img/social')
		//.copy('resources/assets/vendor/material-design-icons/sprites', 'public/img/sprites')
		//.copy('resources/assets/vendor/material-design-icons/toggle', 'public/img/toggle')
		.browserify('app.js');
});
