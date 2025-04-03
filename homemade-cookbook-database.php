<?php
/**
 * Plugin Name: Homemade Cookbook Database by CPAI
 * Plugin URI: https://github.com/your-username/homemade-cookbook-database
 * Description: A versatile plugin for managing recipes, collections, filters, and smart device integration.
 * Version: 2.8
 * Author: CPAI
 * License: GPL-2.0+
 * Text Domain: homemade-cookbook-database
 * Domain Path: /languages
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

// Include Features
require_once plugin_dir_path(__FILE__) . 'features/ai-recipe-suggestions.php';
require_once plugin_dir_path(__FILE__) . 'features/export-backup-enhancements.php';
require_once plugin_dir_path(__FILE__) . 'features/ingredient-database.php';
require_once plugin_dir_path(__FILE__) . 'features/integration-smart-devices.php';
require_once plugin_dir_path(__FILE__) . 'features/multilingual-support.php';
require_once plugin_dir_path(__FILE__) . 'features/recipe-categories-tags.php';
require_once plugin_dir_path(__FILE__) . 'features/recipe-collections-cookbooks.php';
require_once plugin_dir_path(__FILE__) . 'features/recipe-ratings-comments.php';
require_once plugin_dir_path(__FILE__) . 'features/shopping-list-generator.php';
require_once plugin_dir_path(__FILE__) . 'features/timer-integration.php';
