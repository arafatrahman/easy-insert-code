=== Easy Insert Code Headers and Footers ===

Plugin Name : Easy Insert Code
Tags: wp insert code,insert code header, insert code footer , insert header scripts, insert footer scripts , insert , code,css,text,js,meta, meta tags, scripts
Contributors: arafatrahmanbd,abushoaib
Requires at least: 5.0
Requires PHP at least : 5.6
Tested up to: 5.6
Stable tag: 5.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Easy Insert Code plugin helps you to insert code/text in the header ( <head> ),footer( </body> ) and body<body> tag of your WordPress websites


== Description ==

With this plugin you can easily place the code or text you need in the header and footer.
Our website often requires the use of custom CSS or JS . For thats You can use our plugin to solve this problem .
With this plugin you can easily add header script or footer script and even any kind of code or test to the body if you want.
Hey you don't need too much coding to use the plugin . you just add your code / text and see the magic.

All you have to do is adding appropriate html code.

Don't forget to wrap your code with proper tags.

	<script type="text/javascript">
	YOUR JS CODE HERE
	</script>

Or for CSS:

	<style type="text/css">
	YOUR CSS CODE HERE
	</style>

Or for tag:

    <h1> Your Header Text Goes Here </h1>
    <p> Your Header Text <b>Goes Here</b> </p>


However, if you have any problems with the installation or use of the plugin, 
you can contact us without any hesitation.Support Email arafatrahmank@gmail.com
Give us feedback, suggestions, bug reports, and any other contributions on the in
the plugin's [GitHub repository](https://github.com/arafatrahman/easy-insert-code).
Easy Insert Code plugin does not collect any personal data, so it is 
**ready for EU General Data Protection Regulation (GDPR) compliance**.

== Installation ==

You can install from within WordPress using the Plugin/Add New feature, or if you wish to manually install:

1. Download the plugin.
2. Upload the entire `easy-insert-code` directory to your plugins folder
3. Activate the plugin from the plugin page in your WordPress Dashboard
4. Then Go to 'Settings' => 'Easy insert Code' and add your header script And footer script
5. Congratulations! you are now ready to work

== Screenshots ==
1. The first screenshot shows WP Insert Code Headers and Footers Settings Section.

= for developers: Supported Hooks =

add_action('wp_head', 'eic_show_header');
=> this action hook use to show wp header script 

add_action('wp_footer', 'eic_show_footer');
=> this action hook use to show wp footer script

add_action('wp_body_open', 'eic_show_body');
=> this action hook use to show text/code in wp body tag


= WP Insert Code Headers and Footers =

* Easy to set up
* Easy to insert code/scripts/text
* Insert wp header script or footer script
* Insert any code or script, including HTML and Javascript


 



