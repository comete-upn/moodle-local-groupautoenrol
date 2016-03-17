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
 * Version info
 *
 * @package    local_groupautoenrol
 * @copyright  2016 Pascal Maury - Université Paris Ouest - service COMETE
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$plugin->version = 2016031601;    // The (date) version of this module + 2 extra digital for daily versions.
                                  // This version number is displayed into /admin/forms.php.
$plugin->requires = 2013040500;   // Requires this Moodle version - at least 2.0.
$plugin->cron = 0;
$plugin->component = 'local_groupautoenrol';
$plugin->release = '1.1.1';
$plugin->maturity = MATURITY_STABLE;
