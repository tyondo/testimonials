<?php

event('faq.routing', app('router'));
$namespacePrefix = '\\'.'Tyondo\\Testimonial\\Http\\Controllers'.'\\';
//-----Back-end ----------//

Route::resource('testimonials', $namespacePrefix.'TestimonialController', [
    'names'=> [
        'index' => 'tyondo.testimonial.index',
        'create' => 'tyondo.testimonial.create',
        'store' => 'tyondo.testimonial.store',
        'update' => 'tyondo.testimonial.update',
        'destroy' => 'tyondo.testimonial.destroy',
        'show' => 'tyondo.testimonial.show',
        'edit' => 'tyondo.testimonial.edit',
    ]
]);