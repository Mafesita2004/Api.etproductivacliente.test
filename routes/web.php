<?php

use App\Http\Controllers\Administrator;
use App\Http\Controllers\AdministratorController;
use App\Http\Controllers\ApprenticeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');

});

// Ruta principal que muestra el formulario de inicio de sesión
Route::get('/', function () {
    return view('auth.login');
});

// Rutas para el inicio de sesión y registro
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Grupo de rutas protegidas por middleware 'auth' (usuarios autenticados)
Route::middleware(['auth'])->group(function () {
    // Rutas para roles específicos
    Route::get('/superadmin/home', function () {
        return view('superadmin.home');
    })->name('superadmin.home');
 //RUTAS ADMINISTRADOR
 Route::get('/administrator/home', function () {
    return view('administrator.home');
})->name('administrator.home');

Route::get('/administrator/settings', [AdministratorController::class, 'settings'])->name('administrator.settings');
Route::get('/administrator/instructor', [AdministratorController::class, 'instructor'])->name('administrator.instructor');
Route::get('/administrator/apprentice', [AdministratorController::class, 'apprentice'])->name('administrator.apprentice');
Route::get('/administrator/reports', [AdministratorController::class, 'reports'])->name('administrator.reports');
Route::get('/administrator/graphic', [AdministratorController::class, 'graphic'])->name('administrator.graphic');
Route::get('/administrator/template', [AdministratorController::class, 'template'])->name('administrator.template');
Route::get('/administrator/Administrator-perfil', [AdministratorController::class, 'Adminperfil'])->name('administrator.Administrator-perfil');
Route::get('/administrator/Apprentice-perfil', [AdministratorController::class, 'perfilAprendiz'])->name('administrator.Apprentice-perfil');
Route::get('/administrator/Instructor-perfil', [AdministratorController::class, 'perfilInstructor'])->name('administrator.Instructor-perfil');
Route::get('/administrator/Agregar-aprendiz', [AdministratorController::class, 'AgregarAprendiz'])->name('administrator.Agregar-aprendiz');
Route::get('/administrator/Agregar-instructor', [AdministratorController::class, 'AgregarInstructor'])->name('administrator.Agregar-instructor');
Route::get('/administrator/Mensaje-aprendiz', [AdministratorController::class, 'MensajeAprendiz'])->name('administrator.Mensaje-aprendiz');
Route::get('/administrator/Mensaje-instructor', [AdministratorController::class, 'MensajeInstructor'])->name('administrator.Mensaje-instructor');
Route::get('/administrator/notificaciones', [AdministratorController::class, 'Notificaciones'])->name('administrator.notificaciones');
Route::get('/administrator/redactar', [AdministratorController::class, 'redactar'])->name('administrator.redactar');
Route::get('/administrator/email', [AdministratorController::class, 'Email'])->name('administrator.email');
Route::get('/administrator/Reporte-aprendiz', [AdministratorController::class, 'ReporteAprendiz'])->name('administrator.Reporte-aprendiz');
Route::get('/administrator/perfil', [AdministratorController::class, 'perfil'])->name('administrator.perfil');
Route::get('/administrator/perfilInstructor', [AdministratorController::class, 'perfilInstructor'])->name('administrator.perfil-instructor');



// Rutas de aprendiz (cambiada la duplicación del nombre)
Route::get('/apprentice/home', function () {
return view('apprentice.home');
})->name('apprentice.home');
});

// RUTAS APRENDIZ (fuera del middleware 'auth')
Route::get('/homeaprendiz', [ApprenticeController::class, 'index'])->name('apprentice.index');
Route::get('/calendaraprendiz', [ApprenticeController::class, 'calendar'])->name('apprentice.calendar');
Route::get('/visitaprendiz', [ApprenticeController::class, 'visit'])->name('apprentice.visit');
Route::get('/registervisitaprendiz', [ApprenticeController::class, 'registervisit'])->name('apprentice.registervisit');
Route::get('/profileaprendiz', [ApprenticeController::class, 'profile'])->name('apprentice.profile');
Route::get('/settingsaprendiz', [ApprenticeController::class, 'settings'])->name('apprentice.settings');
