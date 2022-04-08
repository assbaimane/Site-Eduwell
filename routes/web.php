<?php

use App\Models\Titre;
use App\Models\Banner;
use App\Models\Footer;
use App\Models\Contact;
use App\Models\Service;
use App\Models\Testimonial;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\TitreController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TestimonialController;

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

Route::get('/', function () {
    $titres = Titre::all();
    $banners = Banner::all();
    $services = Service::all();
    $testimonials = Testimonial::all();
    $contacts = Contact::all();
    $footers = Footer::all();
    // $navs = Nav::all();
    return view('welcome', compact('titres', 'banners', 'contacts', 'footers', 'services', 'testimonials'));
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
// Titre
Route::get('/back/titres', [TitreController::class, 'index'])->name('titre.index');
Route::get('/back/titres/{id}/edit', [TitreController::class, 'edit'])->name('titre.edit');
Route::post('/back/titres/{id}/update', [TitreController::class, 'update'])->name('titre.update');
// Banner
Route::get('/back/banners', [BannerController::class, 'index'])->name('banner.index');
Route::get('/back/banners/{id}/edit', [BannerController::class, 'edit'])->name('banner.edit');
Route::post('/back/banners/{id}/update', [BannerController::class, 'update'])->name('banner.update');
// Service
Route::get('/back/services', [ServiceController::class, 'index'])->name('service.index');
Route::get('/back/services/create', [ServiceController::class, 'create'])->name('service.create');
Route::post('/back/services/store', [ServiceController::class, 'store'])->name('service.store');
Route::get('/back/services/{id}/read', [ServiceController::class, 'read'])->name('service.read');
Route::get('/back/services/{id}/edit', [ServiceController::class, 'edit'])->name('service.edit');
Route::post('/back/services/{id}/update', [ServiceController::class, 'update'])->name('service.update');
Route::post('/back/services/{id}/delete', [ServiceController::class, 'destroy'])->name('service.destroy');
// Testimonial
Route::get('/back/testimonials', [TestimonialController::class, 'index'])->name('testimonial.index');
Route::get('/back/testimonials/create', [TestimonialController::class, 'create'])->name('testimonial.create');
Route::post('/back/testimonials/store', [TestimonialController::class, 'store'])->name('testimonial.store');
Route::get('/back/testimonials/{id}/read', [TestimonialController::class, 'read'])->name('testimonial.read');
Route::get('/back/testimonials/{id}/edit', [TestimonialController::class, 'edit'])->name('testimonial.edit');
Route::post('/back/testimonials/{id}/update', [TestimonialController::class, 'update'])->name('testimonial.update');
Route::post('/back/testimonials/{id}/delete', [TestimonialController::class, 'destroy'])->name('testimonial.destroy');
// Contact
Route::get('/back/contacts', [ContactController::class, 'index'])->name('contact.index');
Route::get('/back/contacts/{id}/edit', [ContactController::class, 'edit'])->name('contact.edit');
Route::post('/back/contacts/{id}/update', [ContactController::class, 'update'])->name('contact.update');
// Footer
Route::get('/back/footers', [FooterController::class, 'index'])->name('footer.index');
Route::get('/back/footers/{id}/edit', [FooterController::class, 'edit'])->name('footer.edit');
Route::post('/back/footers/{id}/update', [FooterController::class, 'update'])->name('footer.update');
// Role
Route::get('/back/roles', [RoleController::class, 'index'])->name('role.index');
Route::get('/back/roles/create', [RoleController::class, 'create'])->name('role.create');
Route::post('/back/roles/store', [RoleController::class, 'store'])->name('role.store');
Route::get('/back/roles/{id}/read', [RoleController::class, 'read'])->name('role.read');
Route::get('/back/roles/{id}/edit', [RoleController::class, 'edit'])->name('role.edit');
Route::post('/back/roles/{id}/update', [RoleController::class, 'update'])->name('role.update');
Route::post('/back/roles/{id}/delete', [RoleController::class, 'destroy'])->name('role.destroy');
