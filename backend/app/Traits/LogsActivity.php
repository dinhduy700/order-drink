<?php

namespace App\Traits;

use Illuminate\Support\Facades\Log;

trait LogsActivity
{
    // Boot method sẽ được gọi khi model khởi tạo
    public static function bootLogsActivity()
    {
        static::creating(function ($model) {
            Log::info('Creating event fired for ' .
                get_class($model));
        });
        static::updating(function ($model) {
            Log::info('Updating event fired for ' .
                get_class($model));
        });
    }
}
