/**
 * Creates a REST API endpoint for smart device integration.
 */
function hcdb_register_rest_api_endpoint() {
    register_rest_route('hcdb/v1', '/recipes', [
        'methods' => 'GET',
        'callback' => 'hcdb_get_recipe_data',
        'permission_callback' => '__return_true',
    ]);
}
add_action('rest_api_init', 'hcdb_register_rest_api_endpoint');
