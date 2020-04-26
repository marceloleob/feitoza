<?php

use Illuminate\Support\Facades\Config;

return [

    // DEVELOPER INFORMATION
    'DEVELOPER_NAME'         => 'Marcelo Leopold Batista',
    'DEVELOPER_EMAIL'        => 'marceloleob@gmail.com',

    // COMPANY INFORMATION
    'COMPANY_NAME'           => Config::get('app.name'),
    'COMPANY_EMAIL'          => 'marceloleodev@gmail.com', //'contact@feitozawallpaper.com',
    'COMPANY_SUBJECT_TO'     => 'You have received a contact`s site - ' . date('m/d/Y'),
    'COMPANY_SUBJECT_FROM'   => Config::get('app.name'),

    // PAGINATION
    'TOTAL_PAGE'             => 10,

    // BUSINESS RULES
    'INACTIVE'               => 0,
    'ACTIVE'                 => 1,

    // IMAGES
    'PICTURES_PATH'          => 'gallery/',
    'PICTURES_SIZE'          => 3072000, // 3 MEGABYTES EM KB
    'PICTURES_PATH_MSG'      => '3 MB',
    'PICTURES_LIMIT'         => 30,
    'PICTURES_NOTAVAILABLE'  => 'images/no-available-370x278.png',

    // GOOGLE CONFIGS
    'GOOGLE_ANALYTICS_ID'    => 'UA-161429430-1',
    'CAPTCHA_SECRET_KEY'     => '6LcwgOsUAAAAAGSwWBHWiDmlZrlniWC-L5mj9_kO',
    'CAPTCHA_WEBSITE_KEY'    => '6LcwgOsUAAAAAMGiMxq7tKwwydNvR8A2xRdEGrCi',

];

