<?php

namespace Kristories\QrcodeManager\Resources;

use Illuminate\Http\Request;
use Kristories\Qrcode\Qrcode;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Resource;

class QrcodeManager extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = 'Kristories\QrcodeManager\Models\Qrcode';

    /**
     * Indicates if the resource should be globally searchable.
     *
     * @var bool
     */
    public static $globallySearchable = false;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'text';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'text',
    ];

    /**
     * Get the displayable label of the resource.
     *
     * @return string
     */
    public static function label()
    {
        return __('qrcode-manager::navigation.label');
    }

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            Qrcode::make('QR Code', 'text')
                ->background($this->background)
                ->logo($this->logo)
                ->exceptOnForms(),

            Text::make('Text', 'text')
                ->sortable()
                ->rules([
                    'required',
                ]),

            Text::make('Background Image URL', 'background')
                ->sortable()
                ->rules([
                    'nullable',
                    'url',
                ])
                ->onlyOnForms(),

            Text::make('Logo Image URL', 'logo')
                ->sortable()
                ->rules([
                    'nullable',
                    'url',
                ])
                ->onlyOnForms(),
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [];
    }
}
