<?php

namespace Devtical\QrcodeManager;

use Illuminate\Http\Request;
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
        Nova::script('qrcode-manager', __DIR__.'/../dist/js/tool.js');
        Nova::style('qrcode-manager', __DIR__.'/../dist/css/tool.css');

        Nova::resources([
            \Devtical\QrcodeManager\Resources\QrcodeManager::class,
        ]);
    }

    /**
     * Build the menu that renders the navigation links for the tool.
     *
     * @param  \Illuminate\Http\Request $request
     * @return mixed
     */
    public function menu(Request $request)
    {
        //
    }
}
