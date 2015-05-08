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

namespace Delahaye\ConvertX\Hook\Step;

/**
 * Class Example
 *
 * Shows usage of a hook class for an import step
 *
 * @package Delahaye\ConvertX\Hook\Step
 */
class Example
{

    /**
     * Does something external as a job step, returns true or false
     *
     * @param $objRun
     * @param $objStep
     * @return bool
     */
    public function compileHook($objRun, $objStep)
    {

        // insert code here

        return true;
    }

}
