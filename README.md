# advanced environment indicator

This plugin shows the environment name (dev || staging || prod) in the Wordpress toolbar, to avoid editing the wrong environment.


## Description
This plugin shows the environment name (dev || staging || prod) in the Wordpress toolbar, to avoid editing the wrong environment.

It's settings are added to wp-config.php to set and forget. If you replace the DB
you still preserve the enviromnemt name.

## Installation

This section describes how to install the plugin and get it working.

1. Upload `advanced_environment_indicator` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Place `define('ADVANCED_ENVIRONMENT_INDICATOR_NAME', 'development');` in your wp-config.php. Replace 'development' with the name of your environment.
4. Place `define('ADVANCED_ENVIRONMENT_INDICATOR_COLOR', '#669900');` in your wp-config.php. Replace '#669900' with any valid CSS color value of your choice.

## Frequently Asked Questions

### Why set the environment name in wp-config.php

This plugin povides a clear and reliable environment indicator. Having your environment name set in the wp-config.php will not be overwritten when you migrate databaseses back and forth.

### Why not look at the address bar in the browser?

You can, and if that is enough you will not need this plugin.

## Changelog

### 0.1
First release.
