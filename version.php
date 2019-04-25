<?php
/**
 * Version info
 * @package local
 * @subpackage simple_course_creator
 * @copyright  2019 Queen Mary University of London
 * @author     Shubhendra R Doiphode <doiphode.sunny@gmail.com>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
 
defined('MOODLE_INTERNAL') || die();

// don't forget to bump this in case of change in local/db ...
$plugin->version   = 2019042201;        // The current plugin version (Date: YYYYMMDDXX)

$plugin->requires  = 2011120100;        // Moodle 2.2 onwards
$plugin->component = 'local_simple_course_creator';       // Full name of the plugin (used for diagnostics)
$plugin->maturity = MATURITY_STABLE; // required for registering to Moodle's database of plugins 
$plugin->release = '1.1 (Build 20190422)';  // required for registering to Moodle's database of plugins
$plugin->dependencies = array(
);