# ramenRouter
A super simple PHP URL router to use with small, custom websites. 

## About
ramenRouter is a basic MVC framework that routes URL paths to specified (and optional) controller and view files. 

## Getting Started

### Add Ramen

Add the "ramen" directory to your public directory, along with the index.php and .htaccess files. 

### Modify the Config File

Modify the config.php file within the "ramen" directory to your needs. 

Inside the config file is where you'll place all your URL paths, which link to controllers and view files:

```
$routing_arr = array(
	
	//	PATH								CONTROLLER					VIEW
	'/' 						=> array(	'', 						'home.php'			),
	'/about' 					=> array(	'', 						'about.php'			),
	'/contact' 					=> array(	'',							'contact.php'		),
	'/category/cars'			=> array(	'categories.php', 			'category.php'		),
	'/ajax/contact'				=> array(	'ajax-contact.php', 		''					),
	'/error'					=> array(	'error.php', 				'error.php'			),
);
```

### Create your files

Create/add your controller and view files for your project. 

## Author

[Nick Jagodzinski](http://nickjag.com)

## Licensing
ramenRouter is available under the MIT license.

