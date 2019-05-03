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
 * @package local
 * @subpackage simple_course_creator
 * @copyright  2019 Queen Mary University of London
 * @author     Shubhendra R Doiphode <doiphode.sunny@gmail.com>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
require_once(dirname(dirname(dirname(__FILE__))) . '/config.php');
require_once($CFG->dirroot . '/local/simple_course_creator/forms/course_create_form.php');

global $OUTPUT, $PAGE, $CFG;

require_login();
$catcontext = context_coursecat::instance($categoryid);
require_capability('moodle/course:create', $catcontext);
$PAGE->set_context(context_coursecat::instance($categoryid));

$PAGE->set_title('Simple Course Creator');
$PAGE->set_heading('Choose');
$PAGE->set_pagelayout('admin');

echo '<style>';
if ($sectodisp["numberofsections"] != 1) {
    echo '#fitem_id_numsections { display:none; }';
}
echo '</style>';