<?php
use PHPUnit\Framework\TestCase;

class RecipeTest extends TestCase {
    public function testRecipeCategories() {
        $this->assertTrue(function_exists('hcdb_register_recipe_categories'));
    }
}
