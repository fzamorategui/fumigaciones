<?php namespace Pamatz\Clientes;

use Backend;
use System\Classes\PluginBase;

/**
 * Clientes Plugin Information File
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
            'name'        => 'Clientes',
            'description' => 'No description provided yet...',
            'author'      => 'Pamatz',
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
            'Pamatz\Clientes\Components\MyComponent' => 'myComponent',
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
            'pamatz.clientes.some_permission' => [
                'tab' => 'Clientes',
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
        return [
            'clientes' => [
                'label'       => 'Clientes',
                'url'         => Backend::url('pamatz/clientes/cliente'),
                'icon'        => 'icon-leaf',
                'permissions' => ['pamatz.clientes.*'],
                'order'       => 500,
            ],
        ];
    }
}
