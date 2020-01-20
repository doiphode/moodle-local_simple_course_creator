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
 * @package local
 * @subpackage simple_course_creator
 * @copyright  2019 Queen Mary University of London
 * @author     Shubhendra R Doiphode <doiphode.sunny@gmail.com>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$plugin->version = 2019042204;        // The current plugin version (Date: YYYYMMDDXX).
$plugin->requires = 2018120308;        // Moodle 3.6.8 onwards.
$plugin->component = 'local_simple_course_creator';       // Full name of the plugin (used for diagnostics).
$plugin->maturity = MATURITY_STABLE; // required for registering to Moodle's database of plugins.
$plugin->release = '1.1 (Build 20190422)';  // required for registering to Moodle's database of plugins.
$plugin->dependencies = array();