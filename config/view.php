<?php

declare(strict_types=1);

/*|--------------------------------------------------------------------------
 | View Engine Configuration
 |--------------------------------------------------------------------------
 |
 | پیکربندی موتور view — همهٔ کلیدهای مستندشده در `docs/03-engines/view.md` بخش «پیکربندی».
 |
 |@see https://github.com/Derogaramin/Tavaan-Doc/blob/main/docs/03-engines/view.md
 */

return [
    /*| پیش‌فرض موتور (driver/store یا حالت فعال) */
    'default' => env('VIEW_DEFAULT', 'default'),

    /*| کلید کش (در صورت استفاده) */
    'prefix' => env('VIEW_PREFIX', 'view:'),

    /*| تنظیمات لاگ */
    'log' => [
        'channel' => env('VIEW_LOG_CHANNEL', 'view'),
    ],

    /*| Facade */
    'facade' => [
        'name' => 'View',
        'accessor' => 'view',
    ],

    /*| سایر کلیدها (طبق مستندات) */
    'options' => [
        // TODO: کلیدهای اضافی طبق سند §۶ (پیکربندی)
    ],
];