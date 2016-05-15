# shy-ajax-handler
WordPress plugin to specify which plugins should be active while answering an ajax call to admin-ajax.php - much better performance.

When a WordPress plugin calls admin-ajax.php WordPress will load every active plugin to answer the request. 
In a lot of cases only the calling plugin is needed to answer the request. 
The overhead of loading the other plugins will slow the answer down. For autocomplete and similar services, this can be painful.

## Install and use the plugin

This plugin should be put in the mu-plugins folder within wp-content (maybe you need to create the folder). MU-Plugins are loaded before all the other plugins.

This plugin is intented to be used by developers. There is no GUI. See the example code in the plugin file how to use it. 

You need to find out which action the AJAX call is using. 

Learn how plugins use the admin-ajax.php (http://solislab.com/blog/5-tips-for-using-ajax-in-wordpress/)

Get to know the action by looking in the plugin code: 
```PHP
add_action( 'wp_ajax_nopriv_{THE_ACTION}', 'myajax_submit' ); // not logged in
add_action( 'wp_ajax_{THE_ACTION}', 'myajax_submit' );        // logged in
```

Or check our browsers developer tool for XHR requests and the the action of the request you want to speed up. 

