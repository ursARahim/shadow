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
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Plugin version and other meta-data are defined here.
 *
 * @package     local_greetings
 * @copyright   2024 Abdur Rahim <abdur.rahim@dsinnovators.com>
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

// This line protects the file from being accessed by a URL directly.
defined('MOODLE_INTERNAL') || die();

$THEME->name = 'shadow';
$THEME->sheets = [];
$THEME->editor_sheets = [];
$THEME->editor_scss = ['editor'];
$THEME->usefallback = true;

$THEME->scss = function($theme) {
    return theme_shadow_get_main_scss_content($theme);
};

//$THEME->layouts = [
//    // The site home page.
//    'frontpage' => [
//        'file' => 'frontpage.php',
//        'regions' => ['side-pre'],
//        'defaultregion' => 'side-pre',
//        'options' => ['nonavbar' => true],
//    ],
//
//];

$THEME->parents = ['boost'];
$THEME->enable_dock = false;
$THEME->extrascsscallback = 'theme_shadow_get_extra_scss';
$THEME->prescsscallback = 'theme_shadow_get_pre_scss';
$THEME->yuicssmodules = [];
$THEME->rendererfactory = 'theme_overridden_renderer_factory';
$THEME->requiredblocks = '';
$THEME->addblockposition = BLOCK_ADDBLOCK_POSITION_FLATNAV;
$THEME->iconsystem = \core\output\icon_system::FONTAWESOME;
$THEME->haseditswitch = true;
$THEME->usescourseindex = true;
// By default, all boost theme do not need their titles displayed.
$THEME->activityheaderconfig = [
    'notitle' => true,
];
$THEME->hidefromselector = false;
