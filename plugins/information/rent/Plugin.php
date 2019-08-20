<?php namespace Information\Rent;

use Backend;
use System\Classes\PluginBase;

/**
 * Rent Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Rent',
            'description' => 'No description provided yet...',
            'author'      => 'Information',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return []; // Remove this line to activate

        return [
            'Information\Rent\Components\MyComponent' => 'myComponent',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'information.rent.some_permission' => [
                'tab' => 'Rent',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return []; // Remove this line to activate

        return [
            'rent' => [
                'label'       => 'Rent',
                'url'         => Backend::url('information/rent/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['information.rent.*'],
                'order'       => 500,
            ],
        ];
    }
}
