<?php
/**
 * Этот файл является частью расширения модуля веб-приложения RosGear.
 * 
 * Файл конфигурации установки расширения.
 * 
 * @link https://rosgear.ru/
 * @copyright Copyright (c) 2015 RosGear
 * @license https://rosgear.ru/license/
 */

return [
    'id'          => 'rg.be.config.ipwhitelist',
    'moduleId'    => 'rg.be.config',
    'name'        => 'IP Whitelist',
    'description' => 'User access to the control panel and website only from specified IP addresses',
    'namespace'   => 'Rg\Backend\Config\IpWhiteList',
    'path'        => '/rg/rg.be.config.ipwhitelist',
    'route'       => 'ipwhitelist',
    'locales'     => ['ru_RU', 'en_GB'],
    'permissions' => ['any', 'info'],
    'events'      => [],
    'required'    => [
        ['php', 'version' => '8.2'],
        ['app', 'code' => 'RG Workspace'],
        ['app', 'code' => 'RG CMS'],
        ['app', 'code' => 'RG CRM'],
        ['module', 'id' => 'rg.be.config']
    ]
];
