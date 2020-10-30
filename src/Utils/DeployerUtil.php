<?php


namespace LaravelSimpleDeploye\Utils;




use LaravelSimpleDeploye\Models\Deployer;

class DeployerUtil
{
    static function getConfig()
    {

        $config = config('laravel_simple_deployer');

        return new Deployer(
            $config['secret'],
            $config['enabled'],
            $config['branch'],
            $config['git_pull'],
            $config['git_type_auth'],
            $config['git_type_http_username'],
            $config['git_type_http_password'],
            $config['git_type_http_repo'],
            $config['composer_install'],
            $config['composer_update'],
            $config['artisan_migrate']
        );
    }
}
