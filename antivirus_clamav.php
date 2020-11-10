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
 * @package    antivirus
 * @subpackage clamav
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['configclamfailureonupload'] = 'Как вести себя в этом случае, если вы настроили Clam сканировать загружаемые файлы, но он настроен неправильно или не запускается по неизвестной причине? Если вы выберите «Считать файлы заражёнными», они будут перемещаться в зону карантина или удаляться. Если вы выберите «Считать файлы нормальными», файлы будут перемещаться в целевой каталог как незаражённые. В любом случае, администраторы будут уведомлены, что произошла ошибка Clam. Если вы выберите «Считать файлы заражёнными» и по какой-то причине Clam не запустится (обычно это происходит потому, что вы ввели неправильный путь к Clam), то ВСЕ загружаемые файлы будут перемещаться в указанную зону карантина или удаляться. Будьте осторожны с этим параметром.';
