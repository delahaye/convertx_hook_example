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

/**
 * Register hook
 */

$GLOBALS['TL_HOOKS']['convertx']['step']['example']  = array('Delahaye\ConvertX\Hook\Step\Example', 'compileHook');
$GLOBALS['TL_HOOKS']['convertx']['field']['example'] = array('Delahaye\ConvertX\Hook\Field\Example', 'compileHook');
