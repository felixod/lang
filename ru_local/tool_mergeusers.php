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
 * Local language pack from https://lms.samgups.ru
 *
 * @package    tool
 * @subpackage mergeusers
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['eventusermergedfailure'] = 'Слияние не удалось';
$string['eventusermergedsuccess'] = 'Слияние успешно завершено';
$string['finishtime'] = 'Слияние завершено в {$a}';
$string['mergeusers:mergeusers'] = 'Слияние учётных записей';
$string['mergeusers:view'] = 'Слияние учётных записей';
$string['privacy:metadata'] = 'Плагин \'Слияние учётных записей\' не хранит никаких личных данных.';
$string['starttime'] = 'Слияние началось в {$a}';
$string['timetaken'] = 'Слияние заняло {$a} секунд';
$string['uniquekeynewidtomaintain'] = 'Хранить данные нового пользователя';
$string['uniquekeynewidtomaintain_desc'] = 'В случае конфликта, например, когда связанный столбец user.id является уникальным ключом, этот плагин будет хранить данные от нового пользователя (по умолчанию). Это также означает, что данные от старого пользователя удаляются, чтобы сохранить последовательность. В противном случае, если вы снимите этот флажок, данные от старого пользователя будут сохранены.';
