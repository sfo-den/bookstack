<?php

/**
 * SnappyPDF configuration options.
 *
 * Changes to these config files are not supported by BookStack and may break upon updates.
 * Configuration should be altered via the `.env` file or environment variables.
 * Do not edit this file unless you're happy to maintain any changes yourself.
 */

$snappyPaperSizeMap = [
    'a4' => 'A4',
    'letter' => 'Letter',
];

return [
    'pdf' => [
        'enabled' => true,
        'binary'  => file_exists(base_path('wkhtmltopdf')) ? base_path('wkhtmltopdf') : env('WKHTMLTOPDF', false),
        'timeout' => false,
        'options' => [
            'outline' => true,
            'page-size' => $snappyPaperSizeMap[env('EXPORT_PAGE_SIZE', 'a4')] ?? 'A4',
        ],
        'env'     => [],
    ],
    'image' => [
        'enabled' => false,
        'binary'  => '/usr/local/bin/wkhtmltoimage',
        'timeout' => false,
        'options' => [],
        'env'     => [],
    ],
];
