<?php

return [
    'email' => 'contact@simagro.cm',
    'top_bar_enable' => (bool) env('APP_TOP_BAR_ENABLE', false),
    'footer' => [
        'startup_name' => 'Simagro',
        'startup_description' => 'Votre partenaire  numérique  pour  une  exploitation  agricole performante et durable',
        'startup_logo_link' => 'https://simagro.cm/logo.png',
        'startup_link' => 'https://simagro.cm',
    ],
    // donne moi une liste de services agricoles
    'services' => [
        1 => [
            'title' => 'Gestion de la chaîne d’approvisionnement',
            'image' => 'https://simagro.cm/assets/img/service-1.jpg',
            'description' => 'Optimisez la gestion de votre chaîne'],
        2 => [
            'title' => 'Gestion des recoltes',
            'image' => 'https://simagro.cm/assets/img/service-2.jpg',
            'description' => 'Optimisez la gestion de vos récoltes grâce à nos solutions performantes. Suivez en temps réel vos rendements, planifiez vos opérations et anticipez les besoins pour une gestion efficace de votre exploitation agricole.'],
        3 => [
            'title' => 'Suivis des cultures',
            'image' => 'https://simagro.cm/assets/img/service-3.jpg',
            'description' => 'Surveillez l\'état de vos cultures en temps réel avec nos outils de suivi innovants. Identifiez les variations climatiques, les maladies et les opportunités de récolte pour prendre des décisions éclairées et maximiser votre rendement..'],
        4 => [
            'title' => "Guide d'utilisation ",
            'image' => 'https://simagro.cm/assets/img/service-4.jpg',
            'description' => 'Bénéficiez d\'un guide complet pour une utilisation optimale de nos solutions. Apprenez à tirer le meilleur parti des fonctionnalités de nos outils, à interpréter les données et à intégrer nos solutions dans votre exploitation agricole de manière efficace.',
        ],
    ],
    'whatsapp_number' => '+237696896758',
    'whatsapp_text_quote' => urlencode("Salut ! j'aimerais avoir un devis sur mon projet"),
    'search_bar_enable' => false,
    'address_show' => false,
    'top_bar_details' => [
        'address' => '',
        'phone_number' => '+237 696 89 67 58',
        'phone_number_2' => '+237 696 89 67 58',
        'quote_number' => '+237 696 89 67 58',
        'email' => 'contact@simagro.cm',
        'facebook_link' => 'https://www.facebook.com/Simagro/',
        'twitter_link' => '',
        'linkedin_link' => 'https://www.linkedin.com/company/simagro',
        'youtube_link' => 'https://www.youtube.com/@simagro',
        'instagram_link' => '',
    ],
];
