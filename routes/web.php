 <?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});



route::get('/redirect', [HomeController::class, 'redirect']);

route::get('/', [HomeController::class, 'index']);

Route::get('materials', [AdminController::class, 'materials']);

Route::get('logo', [AdminController::class, 'logo']);

Route::get('students', [AdminController::class, 'students']);

Route::get('levels', [AdminController::class, 'levels']);

Route::get('homepage', [AdminController::class, 'homepage']);

Route::post('upload_levels', [AdminController::class, 'upload_levels']);

Route::post('upload_students', [AdminController::class, 'upload_students']);

Route::get('hundred_level_students', [AdminController::class, 'hundred_level_students']);

Route::get('two_hundred_level_students', [AdminController::class, 'two_hundred_level_students']);

Route::get('three_hundred_level_students', [AdminController::class, 'three_hundred_level_students']);

Route::get('four_hundred_level_students', [AdminController::class, 'four_hundred_level_students']);

Route::get("/delete_student/{id}", [AdminController::class, "delete_student"]);

Route::get('/edit_student/{id}', [AdminController::class, 'edit_student']);

Route::post('/update_logo/{id}', [AdminController::class, 'update_logo']);

Route::post("/update_student/{id}", [AdminController::class, "update_student"]);

Route::post('upload_materials', [AdminController::class, 'upload_materials']);

Route::post('upload_logo', [AdminController::class, 'upload_logo']);

Route::get('hundred_level_materials', [AdminController::class, 'hundred_level_materials']);

Route::get('two_hundred_level_materials', [AdminController::class, 'two_hundred_level_materials']);

Route::get('three_hundred_level_materials', [AdminController::class, 'three_hundred_level_materials']);

Route::get('four_hundred_level_materials', [AdminController::class, 'four_hundred_level_materials']);

Route::get('view_material/{id}', [AdminController::class, 'view_material']);

Route::get('remove_material/{id}', [AdminController::class, 'remove_material']);

Route::get('download/{file}', [AdminController::class, 'download']);

Route::get('show_materials', [HomeController::class, 'show_materials']);

Route::get('view_logo', [AdminController::class, 'view_logo']);

Route::get('edit_logo/{id}', [AdminController::class, 'edit_logo']);

Route::get('/delete_logo/{id}', [AdminController::class, 'delete_logo']);

Route::get('user_view_material/{id}', [HomeController::class, 'user_view_material']);