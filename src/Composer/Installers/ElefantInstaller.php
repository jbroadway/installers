<?php
namespace Composer\Installers;

class ElefantInstaller extends BaseInstaller
{
    protected $locations = array(
        'app'       => 'apps/{$name}/',
        'theme'     => 'layouts/{$name}/',
    );
}
