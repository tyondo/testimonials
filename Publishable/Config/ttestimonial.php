<?php

return [
    /*
     |--------------------------------------------------------------------------
     | Musoni Website Views
     |--------------------------------------------------------------------------
     | The website has pre-defined view, their customization can be handled here
     |
     |
     */
    'namespace'=>'\\Tyondo\\Testimonial\\Models\\',
    'views' => [
        'layouts' => [
            'master'        => 'TyondoTestimonial::layouts.admin',
        ],
        'partials' => [
            'menu' => 'TyondoTestimonial::partials.front-end.main-menu',
            'footer' => 'TyondoTestimonial::partials.front-end.main-footer',
            'top' => 'TyondoTestimonial::partials.front-end.top-bar',
            '2action' => 'TyondoTestimonial::partials.front-end.call-out',
            'news' => [
                'index' => 'TyondoTestimonial::partials.front-end.news.index',
                'loop' => 'TyondoTestimonial::partials.front-end.news.news-loop',
            ],
            'products' => [
                'sidebar' => 'TyondoTestimonial::partials.front-end.products.sidebar',
            ]
        ],
        'back-end' => [
            'team' => [
                'index'     => 'TyondoTestimonial::back-end.team.index',
                'create'    => 'TyondoTestimonial::back-end.team.create',
                'show'      => 'TyondoTestimonial::back-end.team.show',
                'edit'      => 'TyondoTestimonial::back-end.team.edit',
                'role'      => 'TyondoTestimonial::back-end.team.role',
            ],
            'faq' => [
                'index'     => 'TyondoTestimonial::back-end.faq.index',
                'create'    => 'TyondoTestimonial::back-end.faq.create',
                'show'      => 'TyondoTestimonial::back-end.faq.show',
                'edit'      => 'TyondoTestimonial::back-end.faq.edit',
                'role'      => 'TyondoTestimonial::back-end.faq.role',
            ],
            'products' => [
                'index'     => 'TyondoTestimonial::back-end.products.index',
                'create'    => 'TyondoTestimonial::back-end.products.create',
                'show'      => 'TyondoTestimonial::back-end.products.show',
                'edit'      => 'TyondoTestimonial::back-end.products.edit',
                'role'      => 'TyondoTestimonial::back-end.products.role',
            ],
            'testimonials' => [
                'index'     => 'TyondoTestimonial::back-end.testimonials.index',
                'create'    => 'TyondoTestimonial::back-end.testimonials.create',
                'show'      => 'TyondoTestimonial::back-end.testimonials.show',
                'edit'      => 'TyondoTestimonial::back-end.testimonials.edit',
                'role'      => 'TyondoTestimonial::back-end.testimonials.role',
            ],
        ],
        'front-end' => [
            'about' =>  [
                'faq' => 'TyondoTestimonial::front-end.about.about-faq',
                'team' => 'TyondoTestimonial::front-end.about.about-team',
                'testimonials' => 'TyondoTestimonial::front-end.about.about-testimonials',
                'about' => 'TyondoTestimonial::front-end.about.about-us',
                'index' => 'TyondoTestimonial::front-end.about.index'
            ],
            'contact'   =>  [
                'contact' => 'TyondoTestimonial::front-end.contact.contact-us',
                'account' => 'TyondoTestimonial::front-end.contact.',
            ],
            'home'  =>  [
                'index' =>  'TyondoTestimonial::front-end.home.index'
            ],
            'loan'  =>  [
                'form'   =>  'TyondoTestimonial::front-end.loan.form'
            ],
            'news'  =>  [
                'list' =>  'TyondoTestimonial::front-end.news.news-grid'
            ],
            'products'  =>  [
                'products' => 'TyondoTestimonial::front-end.products.products',
                'agriBusiness' => 'TyondoTestimonial::front-end.products.agri-business-loans',
                'assetFinance' => 'TyondoTestimonial::front-end.products.asset-finance-loans',
                'education' => 'TyondoTestimonial::front-end.products.education-loans',
                'emergency' => 'TyondoTestimonial::front-end.products.emergency-loans',
                'groupBusiness' => 'TyondoTestimonial::front-end.products.group-business-loans',
                'individualBusiness' => 'TyondoTestimonial::front-end.products.individual-business-loans',
            ],
            'projects'
        ],


        'shared'=>[
            'google-analytics' => 'mnara::admin.shared.GoogleAnalytics'
        ]
    ],
    /*
    |--------------------------------------------------------------------------
    | Musoni Package Navigation Menu
    |--------------------------------------------------------------------------
    |
    |
    */
    'navigation' => [

        [
            'group' => 'Team',
            'class' => 'fa fa-book fa-lg',
            'links' => [
                [
                    'title' => 'Add Team',
                    'class' => 'fa fa-fw fa-plus',
                    'route' => 'musoni.team.create'
                ],
                [
                    'title' => 'Manage Team',
                    'class' => 'fa fa-newspaper-o',
                    'route' => 'musoni.team.index'
                ],
                [
                    'title' => 'List Team',
                    'class' => 'fa fa-fw fa-th-list',
                    'route' => 'musoni.team.index'
                ],
            ]
        ],

        [
            'group' => 'FAQ',
            'class' => 'fa fa-cubes fa-lg',
            'links' => [
                [
                    'title' => 'Add Faq',
                    'class' => 'fa fa-fw fa-plus',
                    'route' => 'musoni.faq.create'
                ],
                [
                    'title' => 'List Faq',
                    'class' => 'fa fa-fw fa-th-list',
                    'route' => 'musoni.faq.index'
                ],

            ]
        ],

        [
            'group' => 'Testimonials',
            'class' => 'fa fa-cubes fa-lg',
            'links' => [
                [
                    'title' => 'Add Category',
                    'class' => 'fa fa-fw fa-plus',
                    'route' => 'musoni.testimonial.create'
                ],
                [
                    'title' => 'List Category',
                    'class' => 'fa fa-fw fa-th-list',
                    'route' => 'musoni.testimonial.index'
                ],

            ]
        ],
        [
            'group' => 'Products',
            'class' => 'fa fa-cubes fa-lg',
            'links' => [
                [
                    'title' => 'Add Product',
                    'class' => 'fa fa-fw fa-plus',
                    'route' => 'musoni.product.create'
                ],
                [
                    'title' => 'List Products',
                    'class' => 'fa fa-fw fa-th-list',
                    'route' => 'musoni.product.index.list'
                ],

            ]

        ],
    ],
];