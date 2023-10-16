<?php

use Illuminate\Http\Request;
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
    return view('listings', [
        'heading' => 'Latest Listings',
        'listings' => [
            [
                'id' => 1,
                'title' => 'Listing One',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Ut lacus massa, fermentum in interdum a, hendrerit varius augue. Quisque
                tellus mi, auctor at lectus ac, volutpat viverra lectus. In non porta lacus.
                Vestibulum tincidunt lorem non aliquam interdum. Lorem ipsum dolor sit amet,
                consectetur adipiscing elit. Nulla lorem turpis, elementum in tincidunt ut,
                ultricies vel eros. Sed eu augue id mauris tincidunt efficitur quis quis turpis.
                Fusce nec mi non enim imperdiet porta non in enim. Duis in justo turpis. Quisque
                luctus arcu sem, tristique placerat sapien suscipit ac. Phasellus pretium tempus
                sem, sed imperdiet massa vulputate sit amet. Nullam in volutpat orci, ut interdum
                turpis.'
            ],
            [
                'id' => 2,
                'title' => 'Listing Two',
                'description' => 'Nunc semper mattis justo. Proin quis turpis lobortis, dapibus
                elit vel, egestas arcu. Sed facilisis sagittis interdum. Curabitur pellentesque
                sem at vehicula vestibulum. Curabitur vitae vulputate orci. Interdum et malesuada
                fames ac ante ipsum primis in faucibus. Morbi odio nulla, suscipit id dolor non,
                feugiat lacinia eros. Proin est sapien, pretium id purus vel, feugiat lobortis ligula.
                Fusce quis massa laoreet, bibendum erat et, consequat lacus. Donec posuere odio vitae
                tempus dapibus. Morbi pellentesque nibh lectus, vitae hendrerit metus semper a. Proin
                justo erat, ultricies dapibus cursus hendrerit, tempus quis ex. Suspendisse potenti.
                Aliquam quam eros, laoreet a libero vel, suscipit tempus mi. Duis varius venenatis felis,
                id hendrerit purus porttitor in. In fermentum aliquet mauris non tempus.'
            ]
        ]
    ]);
});
