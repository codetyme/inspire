<?php

use Illuminate\Support\Facades\Route;

Route::get('inspire', [Codetyme\Inspire\Controllers\InspirationController::class, '__invoke']);

?>
