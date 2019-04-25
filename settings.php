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
 * Settings for Available Sections in Course Creation Form.
 * @package local
 * @subpackage simple_course_creator
 * @copyright  2019 Queen Mary University of London
 * @author     Shubhendra R Doiphode <doiphode.sunny@gmail.com>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
// No direct script access.
defined('MOODLE_INTERNAL') || die();

// Ensure the configurations for this site are set
if ( $hassiteconfig ){

    // Create the new settings page
    // - in a local plugin this is not defined as standard, so normal $settings->methods will throw an error as
    // $settings will be NULL
    $settings = new admin_settingpage( 'local_simple_course_creator', get_string('setting_name','local_simple_course_creator') );

    $settings->add(new admin_setting_heading('general', get_string('general', 'form'), ''));

    $settings->add(new admin_setting_configcheckbox('local_simple_course_creator/coursevisibility',
        get_string('coursevisibility'), '', 0));

    $settings->add(new admin_setting_configcheckbox('local_simple_course_creator/coursecategory',
            get_string('coursecategory'), '', 0));

    $settings->add(new admin_setting_configcheckbox('local_simple_course_creator/idnumbercourse',
        get_string('idnumbercourse'), '', 0));

    $settings->add(new admin_setting_heading('description', get_string('description'), ''));

    $settings->add(new admin_setting_configcheckbox('local_simple_course_creator/description',
        get_string('description'), '', 0));

    $settings->add(new admin_setting_heading('type_format', get_string('type_format', 'plugin'), ''));

    $settings->add(new admin_setting_configcheckbox('local_simple_course_creator/type_format',
        get_string('type_format', 'plugin'), '', 0));

    $settings->add(new admin_setting_heading('appearance', get_string('appearance'), ''));

    $settings->add(new admin_setting_configcheckbox('local_simple_course_creator/appearance',
        get_string('appearance'), '', 0));

    $settings->add(new admin_setting_heading('filesanduploads', get_string('filesanduploads'), ''));

    $settings->add(new admin_setting_configcheckbox('local_simple_course_creator/filesanduploads',
        get_string('filesanduploads'), '', 0));

    $settings->add(new admin_setting_heading('completion', get_string('completion', 'completion'), ''));

    $settings->add(new admin_setting_configcheckbox('local_simple_course_creator/completion',
        get_string('completion', 'completion'), '', 0));

    $settings->add(new admin_setting_heading('groups', get_string('groupsettingsheader', 'group'), ''));

    $settings->add(new admin_setting_configcheckbox('local_simple_course_creator/groups',
        get_string('groupsettingsheader', 'group'), '', 0));

    $settings->add(new admin_setting_heading('rolerenaming', get_string('rolerenaming'), ''));

    $settings->add(new admin_setting_configcheckbox('local_simple_course_creator/rolerenaming',
        get_string('rolerenaming'), '', 0));

    $settings->add(new admin_setting_heading('tags', get_string('tags', 'tag'), ''));

    $settings->add(new admin_setting_configcheckbox('local_simple_course_creator/tags',
        get_string('tags', 'tag'), '', 0));
    

    // Create

    $ADMIN->add( 'localplugins', $settings );

}