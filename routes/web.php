<?php

Route::get('/', function () {
    return view('welcome');
});
/*--------------------------------CATEGORY CONTROLLER--------------------------------*/ 
Route::get('/categories', 'CategoriesController@getCategories');
Route::get('/categories/filtredById', 'CategoriesController@getCategoryById');
Route::post('/categories', 'CategoriesController@postCategory');
Route::put('/categories', 'CategoriesController@putCategory');

/*--------------------------------PRODUCT CONTROLLER--------------------------------*/ 
Route::get('/products', 'ProductsController@getProducts');
Route::get('/product/{id}', 'ProductsController@getProductById');
Route::post('/products', 'ProductsController@postProduct');
Route::put('/product/{id}', 'ProductsController@putProduct');

/*--------------------------------INGREDIENT CONTROLLER--------------------------------*/ 
Route::get('/ingredients', 'IngredientsController@getIngredients');
Route::get('/ingredient/{id}', 'IngredientsController@getIngredientById');
//Route::post('/ingredients', 'IngredientsController@postIngredients');
Route::put('/ingredient/{id}', 'IngredientsController@putIngredient');

/*--------------------------------TECHNIQUE CONTROLLER--------------------------------*/ 
Route::get('/techniques', 'TechniquesController@getTechniques');
Route::get('/technique/{id}', 'TechniquesController@getTechniqueById');
Route::post('/techniques', 'TechniquesController@postTechniques');
Route::put('/technique/{id}', 'TechniquesController@putTechnique');

/*--------------------------------RECIPE CONTROLLER--------------------------------*/ 
Route::get('/recipes', 'RecipesController@getRecipes');
Route::get('/recipe/{id}', 'RecipesController@getRecipeById');
Route::post('/recipes', 'RecipesController@postRecipes');
Route::put('/recipe/{id}', 'RecipesController@putRecipe');

/*--------------------------------UNIT CONTROLLER--------------------------------*/ 
Route::get('/units', 'UnitsController@getUnits');
Route::get('/unit/{id}', 'UnitsController@getUnitById');
Route::post('/units', 'UnitsController@postUnits');
Route::put('/unit/{id}', 'UnitsController@putUnit');

/*--------------------------------PROCESS CONTROLLER--------------------------------*/ 
Route::get('/processes', 'ProcessesController@getProcesses');
Route::get('/processe/{id}', 'ProcessesController@getProcesseById');
Route::post('/processes', 'ProcessesController@postProcesses');
Route::put('/processe/{id}', 'ProcessesController@putProcesse');
