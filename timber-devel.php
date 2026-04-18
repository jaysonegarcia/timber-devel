<?php
/**
 * Plugin Name: Timber Devel
 * Plugin URI: https://github.com/jaysonegarcia/timber-devel/
 * Description: This plugin will enable symfony var_dumper & twig template suggestion file.
 * Version: 1.0.0
 * Author: Jayson Garcia (Github - jaysonegarcia)
 * Author URI: https://jaysonegarcia.github.io
 * License: GPLv2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 */

namespace Hallowichig0\Timber;

use Djboris88\Twig\Extension\CommentedIncludeExtension;
use HelloNico\Twig\DumpExtension;

/**
 * @param $twig \Twig_Environment;
 *
 * @return \Twig_Environment
 */
function add_debugging_extensions($twig)
{
	$twig->addExtension(new CommentedIncludeExtension());
	$twig->addExtension(new DumpExtension());

	return $twig;
}

if (defined('WP_DEBUG') && WP_DEBUG && function_exists('add_filter')) {
	add_filter('timber/loader/twig', sprintf('%s\\add_debugging_extensions', __NAMESPACE__));

	/**
	 * Adding a second filter to cover the `Timber::render()` case, when the
	 * template is not loaded through the `include` tag inside a twig file
	 */
	add_filter( 'timber/output', function( $output, $data, $file ) {
		return "\n<!-- Begin output of '" . $file . "' -->\n" . $output . "\n<!-- / End output of '" . $file . "' -->\n";
	}, 10, 3 );
}
