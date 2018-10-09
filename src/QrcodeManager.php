<?php

namespace Kristories\QrcodeManager;

use Laravel\Nova\Nova;
use Laravel\Nova\Tool;

class QrcodeManager extends Tool
{
    /**
     * Perform any tasks that need to happen when the tool is booted.
     *
     * @return void
     */
    public function boot()
    {
        Nova::script('qrcode-manager', __DIR__ . '/../dist/js/tool.js');
        Nova::style('qrcode-manager', __DIR__ . '/../dist/css/tool.css');
    }
}
