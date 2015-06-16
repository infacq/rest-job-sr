var elixir = require('laravel-elixir');
/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor node_modules.
 |
 */

elixir(function(mix) {
    mix		
		//.copy('node_modules/material-design-icons/action', 'public/img/action')
		//.copy('node_modules/material-design-icons/alert', 'public/img/alert')
		//.copy('node_modules/material-design-icons/av', 'public/img/av')
		//.copy('node_modules/material-design-icons/communication', 'public/img/communication')
		.copy('node_modules/material-design-icons/content', 'public/img/content')
		//.copy('node_modules/material-design-icons/device', 'public/img/device')
		//.copy('node_modules/material-design-icons/editor', 'public/img/editor')
		//.copy('node_modules/material-design-icons/file', 'public/img/file')
		//.copy('node_modules/material-design-icons/hardware', 'public/img/hardware')
		//.copy('node_modules/material-design-icons/image', 'public/img/image')
		//.copy('node_modules/material-design-icons/maps', 'public/img/maps');
		//.copy('node_modules/material-design-icons/navigation', 'public/img/navigation')
		//.copy('node_modules/material-design-icons/notification', 'public/img/notification')
		//.copy('node_modules/material-design-icons/social', 'public/img/social')
		//.copy('node_modules/material-design-icons/sprites', 'public/img/sprites')
		//.copy('node_modules/material-design-icons/toggle', 'public/img/toggle')
		.copy('node_modules/angular-material/angular-material.css', 'resources/assets/css')
		.browserify('app.js')
		.styles([
			"angular-material.css",
			"home.css"
		]);
});
