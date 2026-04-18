=== Timber Devel ===
Contributors: jaysonegarcia
Tags: timber, twig, symfony, debug
Requires at least: 3.8
Tested up to: 5.5
Stable tag: 1.0.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Package which provides some extra debugging options for [Timber](https://github.com/timber/timber)

== Installation ==
------------
To install the latest stable version of this component, open a console and execute the following command:

`composer require jaysonegarcia/timber-devel`


== Usage ==
-----
These extensions are only active when `WP_DEBUG` is defined and set to 
`true`. Twig Extensions will automatically be registered
and applied.

== Commented Include ==

Package: `djboris88/twig-commented-include` ([GitHub](https://github.com/djboris88/twig-commented-include), [Packagist](https://packagist.org/packages/djboris88/twig-commented-include))

This is a simple Twig Extension which helps debugging and navigating through many Twig partials in your project. It outputs a HTML comments before and after each include statement while rendering the template. Comments look like this:

<!-- Begin output of "_partials/_navigation.twig" -->
<div class="navigation" role="navigation" data-navigation>...</div>
<!-- / End output of "_partials/_navigation.twig" -->

== Dump extension ==

Package: `hellonico/twig-dump-extension` ([GitHub](https://github.com/nlemoine/twig-dump-extension)
[Packagist](https://packagist.org/packages/hellonico/twig-dump-extension))

Standalone Symfony Var Dumper Twig extension. Add `{{ dump() }}` in your twig templates to see it in action.

{{ dump(foo) }}
{% dump foo %}
{% dump foo, bar %}

== Frequently Asked Questions ==

= Is it safe to use this plugin without using composer? =

The answer is no. This plugin required to install via composer only and not recommended to copy it directly to the /wp-plugin/ folder.

== Changelog ==
= 1.0.0 =
* Initial Release.
