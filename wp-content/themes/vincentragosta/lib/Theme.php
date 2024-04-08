<?php

namespace ChildTheme;

/**
 * class Theme
 * @package ChildTheme
 */
class Theme
{
    protected array $endpoints = [];

    protected array $controllers = [];

    public function __construct()
    {
        // add_filter('devanime/controllers', fn($controllers) => { return array_merge($controllers, []); }
        // add_filter('devanime/rename_post_type, fn($label) => { return '' });
        // add_filter('devanime/remove_default_post_type', '__return_true');
        // add_filter('devanime/enable_comments', '__return_true');
        // add_filter('devanime/theme_support', fn($support) => { return array_merge($support, []); });
        // add_filter('devanime/soil_theme_support', fn($support) => { return array_merge($support, []); });
        // add_filter('devanime/register_nav_menus', fn($menus) => { return array_merge($menus, []); });
        // add_filter('devanime/disable_auto_updates', '__return_true');
        // add_filter('devanime/editor_styles', fn($styles) => { return array_merge($styles, []) });
        // add_filter('devanime/register_post_type_models', fn($post_type_models) => { return array_merge($post_type_models, []); });
        // add_filter('devanime/register_taxonomy_models', fn($taxonomy_models) => { return array_merge($taxonomy_models, []); });
        // add_filter('devanime/config_registration_types', fn($types) => { return array_merge($types, []); });
        // add_filter('devanime/default_config_paths', fn($paths) => { return array_merge($paths, []); });
        // add_filter('devanime/register_config', fn($files) => { return array_merge($files, []); });
        // add_filter('devanime/config', fn($value, $key, $type) => { return $value; });
        // add_filter('devanime/print_admin_styles', '__return_false');
        // add_filter('devanime/print_admin_styles/{{post_type_slug}}', fn($styles) => { return $styles });
        // add_filter('devanime/admin_col', fn($content, $post_id, $column_id, $post_type) => { return $content; });
        // add_filter('devanime/admin_col/{{column_key}}', fn($content, $post_id, $post_type) => { return $content; });
        // add_filter('devanime/admin_col/{{column_key}}/{{post_type}}', fn($content, $post_id) => { return $content; });
        // add_filter('devanime/admin_filters', fn($filters, $slug) => { return $filters; });
        // add_filter('devanime/admin_sort/{{orderby}}', fn($query_params, $this->slug) => { return $query_params; });
        // add_filter('devanime/save_post/increment_menu_order', '__return_false');
        // add_filter('devanime/register_options/defaults', fn($options) => { return array_merge($options, []); });
        // add_filter('visual_composer/children/{{tag}}', fn($children) => { return array_merge($children, []); });
        // add_filter('visual_composer/button_styles', fn($styles) => { return array_merge($styles, []); });
        // add_filter('visual_composer/{{tag}}/additional_options', fn($options) => { return array_merge($options, []); });
        // add_filter('visual_composer/image_default_width', fn($width) => { return '768px'; });
        // add_filter('visual_composer/background_colors/{{tag}}', fn($colors) => { return array_merge($colors, []); });
        // add_filter('visual_composer/background_colors', fn($colors) => { return array_merge($colors, []); });
    }
}
