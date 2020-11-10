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
 * Strings for component 'report_coursesize', language 'ru', branch 'MOODLE_37_STABLE'
 *
 * @package   report_coursesize
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['backupsize'] = 'Размер резервной копии';
$string['catsystembackupuse'] = 'Резервное копирование системы и категории - {$a}.';
$string['catsystemuse'] = 'Использование системы и категории для внешних пользователей и курсов - {$a}.';
$string['coursebackupbytes'] = 'Для резервного копирования курса {$a->shortname} используется {$a->backupbytes} байт';
$string['coursebytes'] = 'Курсом {$a->shortname} используется {$a->bytes} байт';
$string['coursereport'] = 'Сводка типов плагинов. ПРИМЕЧАНИЕ. Перечень может быть меньше, чем в основном списке курсов, и, вероятно, является более точным.';
$string['coursesize'] = 'Размер курса';
$string['coursesize_desc'] = '<p> Этот отчет содержит только приблизительные значения если файл несколько раз используется в курсе или в нескольких курсах. Отчет учитывает каждый случай использования, даже если Moodle хранит только одну физическую версию на диске. </p>';
$string['coursesize:view'] = 'Просматривать отчет о размере курса';
$string['coursesummary'] = '(посмотреть статистику)';
$string['diskusage'] = 'Всего';
$string['emptycourseshidden'] = 'Курсы, не использующие хранилище файлов исключены из этого отчета.';
$string['exportcsv'] = 'Export CSV';
$string['nouserfiles'] = 'Нет пользовательских файлов в списке.';
$string['pluginname'] = 'Размер курса';
$string['privacy:metadata'] = 'Плагин «Размер курса» не хранит никаких личных данных.';
$string['sharedusage'] = 'Совместное использование';
$string['sharedusagecourse'] = 'Приблизительно {$a} используется совместно с другими курсами.';
$string['sitefilesusage'] = 'Отчет об использовании файла';
$string['sizepermitted'] = '(Разрешено использовать {$a} МБ)';
$string['sizerecorded'] = '(Записано {$a})';
$string['totalsitedata'] = 'Общее использование сайта: {$a}';
$string['userstopnum'] = 'Популярные пользователи (ТОП-{$a})';
