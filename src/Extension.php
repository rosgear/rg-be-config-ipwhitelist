<?php
/**
 * Расширение модуля веб-приложения RosGear.
 * 
 * @link https://rosgear.ru/
 * @copyright Copyright (c) 2015 RosGear
 * @license https://rosgear.ru/license/
 */

namespace Rg\Backend\Config\IpWhiteList;

/**
 * Расширение "Белый список IP-адресов".
 * 
 * Настройка доступ к Панели управления или сайту только с указанных IP-адресов.
 * 
 * Расширение принадлежит модулю "Конфигурация".
 * 
 * @author Anton Tivonenko <anton.tivonenko@gmail.com>
 * @package Rg\Backend\Config\IpWhiteList
 * @since 1.0
 */
class Extension extends \Ge\Panel\Extension\Extension
{
    /**
     * {@inheritdoc}
     */
    public string $id = 'rg.be.config.ipwhitelist';

    /**
     * {@inheritdoc}
     */
    public string $defaultController = 'grid';
}