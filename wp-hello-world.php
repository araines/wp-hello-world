<?php
/**
 * Plugin Name:     Hello World
 * Plugin URI:      https://github.com/araines/wp-hello-world
 * Version:         0.1.0
 * Description:     Simple Hello World WordPress Plugin for figuring out testing with CircleCI and integration via Composer
 * Author:          Andy Raines - andrew.raines@gmail.com
 * Author URI:      https://github.com/araines
 * Text Domain:     wp-hello-world
 * Domain Path:     /languages
 * Network:         True
 */

declare(strict_types = 1);

namespace ARaines\HelloWorld;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;


if( !defined( 'ABSPATH' ) ) die();

// enable autoloader
include plugin_dir_path( __FILE__ ) . '/vendor/autoload.php';

