<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.


/**
 * Defines the version of pumukit
 *
 * This code fragment is called by moodle_needs_upgrading() and
 * /admin/index.php
 *
 * @package    mod
 * @subpackage pumukit
 * @copyright  2012 Andres Perez
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @author     rubenrua@uvigo.es aperez@teltek.es
 */

defined('MOODLE_INTERNAL') || die();

$module->version   = 0;             // If version == 0 then module will not be installed
$module->version   = 2016042101;    // The current module version (Date: YYYYMMDDXX)
$module->requires  = 2011051000;    // Requires this Moodle version
$module->cron      = 0;             // Period for cron to check this module (secs)
$module->component = 'mod_pumukit'; // To check on upgrade, that module sits in correct place