<?php

/**
 * ConvertX
 * Extension for Contao Open Source CMS (contao.org)
 *
 * Copyright (c) 2015 de la Haye
 *
 * @author  Christian de la Haye
 * @link    http://delahaye.de
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */

namespace Delahaye\ConvertX\Hook\Field;

/**
 * Class Example
 *
 * Shows usage of a hook class for an import field
 *
 * @package Delahaye\ConvertX\Hook\Field
 */
class Example
{

    /**
     * Does something external and returns a field value
     *
     * @param $objConverterfields
     * @param $objSource
     * @param $arrExistentData
     * @return string
     */
    public function compileHook($objConverterfields, $objSource, $arrExistentData)
    {

        // insert code here

        $return = '1';

        return $return;
    }

}
