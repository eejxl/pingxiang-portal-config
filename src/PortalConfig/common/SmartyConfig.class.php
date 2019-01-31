<?php
namespace PortalConfig\common;

use Marmot\Core;

class SmartyConfig
{
    public static function configDir()
    {
        $dirArray = array(
            S_ROOT.'vendor/eejxl/pingxiang-portal-config/src/portalConfig/px',
            S_ROOT.'vendor/eejxl/pingxiang-portal-config/src/portalConfig/common',
            S_ROOT.'vendor/eejxl/pingxiang-portal-config/src/portalConfig/',
        );

        return $dirArray;
    }
}
