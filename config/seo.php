<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Organization (E-E-A-T & structured data)
    |--------------------------------------------------------------------------
    */

    'organization' => [
        'name' => 'Yortek Innovations',
        'description' => 'Yortek Innovations partners with businesses to design, build, and scale modern web applications, mobile products, and cloud platforms.',
        'email' => 'info@yortekinnovations.com',
        'phone' => '+1-555-123-4567',
        'address' => [
            'street' => '123 Innovation Drive',
            'locality' => 'Tech City',
            'region' => '',
            'postal_code' => '',
            'country' => 'US',
        ],
        'same_as' => [
            'https://linkedin.com/company/yortek-innovations',
            'https://x.com/yortekinnovations',
            'https://instagram.com/yortekinnovations',
            'https://facebook.com/yortekinnovations',
        ],
    ],

    'twitter_site' => '@yortekinnovations',

    'default_image' => 'images/hero-background.png',

    'title_separator' => ' | ',

    'pages' => [
        'home' => [
            'title' => 'Technology Partners for Growth',
            'description' => 'Yortek Innovations builds custom software, web apps, and cloud solutions that help teams move faster. Strategy, design, engineering, and long-term support.',
            'og_type' => 'website',
        ],
        'about' => [
            'title' => 'About Us',
            'description' => 'Learn how Yortek Innovations partners with organizations through innovation, integrity, and excellence — from discovery to launch and beyond.',
            'og_type' => 'website',
        ],
        'services' => [
            'title' => 'Services',
            'description' => 'Web development, mobile apps, cloud solutions, UI/UX design, data analytics, and ongoing support — tailored to your business goals and timeline.',
            'og_type' => 'website',
        ],
        'projects.index' => [
            'title' => 'Projects',
            'description' => 'Explore case studies and recent work from Yortek Innovations — platforms, products, and digital transformations delivered for modern teams.',
            'og_type' => 'website',
        ],
        'contact' => [
            'title' => 'Contact',
            'description' => 'Start a conversation with Yortek Innovations. Tell us about your project and our team will respond within one business day.',
            'og_type' => 'website',
        ],
    ],

];
