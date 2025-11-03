<?php

namespace Config;

use CodeIgniter\Config\Filters as BaseFilters;
use CodeIgniter\Filters\Cors;
use CodeIgniter\Filters\CSRF;
use CodeIgniter\Filters\DebugToolbar;
use CodeIgniter\Filters\ForceHTTPS;
use CodeIgniter\Filters\Honeypot;
use CodeIgniter\Filters\InvalidChars;
use CodeIgniter\Filters\PageCache;
use CodeIgniter\Filters\PerformanceMetrics;
use CodeIgniter\Filters\SecureHeaders;

class Filters extends BaseFilters
{
    /**
     * Aliases untuk filter agar lebih mudah digunakan.
     */
    public array $aliases = [
        'csrf'          => CSRF::class,
        'toolbar'       => DebugToolbar::class,
        'honeypot'      => Honeypot::class,
        'invalidchars'  => InvalidChars::class,
        'secureheaders' => SecureHeaders::class,
        'cors'          => Cors::class,
        'forcehttps'    => ForceHTTPS::class,
        'pagecache'     => PageCache::class,
        'performance'   => PerformanceMetrics::class,

        // Custom filter untuk login
        'auth'          => \App\Filters\AuthFilter::class,
    ];

    /**
     * Filter yang wajib (dipakai framework secara global)
     */
    public array $required = [
        'before' => [
            'forcehttps', // jika pakai HTTPS
            'pagecache',
        ],
        'after' => [
            'pagecache',
            'performance',
            'toolbar',
        ],
    ];

    /**
     * Filter global (dipakai semua request)
     */
    public array $globals = [
        'before' => [
            // 'csrf', // aktifkan jika perlu
        ],
        'after' => [
            'toolbar',
        ],
    ];

    /**
     * Filter untuk metode HTTP tertentu (POST, GET, dll)
     */
    public array $methods = [];

    /**
     * Filter berdasarkan URI (misal hanya aktif di route tertentu)
     */
    public array $filters = [
        'auth' => [
            'before' => [
                'admin/*',
                'mahasiswa/*',
            ],
        ],
    ];
}
