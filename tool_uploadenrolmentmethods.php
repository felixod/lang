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
 * @subpackage uploadenrolmentmethods
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['cohortnotfound'] = 'Глобальная группа не найдена.';
$string['csvfile_help'] = 'Формат файла CSV следующий: * Каждая строка файла содержит одну запись. * Каждая запись представляет собой серию данных в любом порядке, разделённых запятыми или другими стандартными разделителями. * Полями являются: операция, метод регистрации, короткое имя курса, короткое имя родительского курса или идентификатор глобальной группы, статус [, имя группы, роль]. * Все поля обязательны, кроме группы и роли. * Это операции add, del (ete) и upd (ate). * Поддерживаемые методы регистрации: мета и когорта. * Значения отключённого состояния: 1 (отключено) или 0 (включено). * Студенты, зачисленные с помощью этого метода, будут помещены в группу, указанную в поле названия группы. Группа будет создана, если она ещё не существует. * В поле роли должно быть допустимое имя роли, например, редактирование: учитель, ученик и т.д.';
$string['heading'] = 'Зачисление на курс с помощью CSV';
$string['invalidmethod'] = 'Неверный метод.';
$string['invalidop'] = 'Неверная операция.';
$string['method'] = 'Метод';
$string['methoddisabledwarning'] = 'Метод зачисления "{$a}" отключён.';
$string['methodscreated'] = 'Создано: {$a}';
$string['methodsdeleted'] = 'Удалено: {$a}';
$string['methodserrors'] = 'Ошибки: {$a}';
$string['methodstotal'] = 'Всего: {$a}';
$string['methodsupdated'] = 'Загружено: {$a}';
$string['operation'] = 'Операция';
$string['parentnotfound'] = 'Ссылка на мета-курс не найдена.';
$string['pluginname'] = 'Метод зачисления на курс';
$string['pluginname_help'] = 'Загрузите методы зачисления из файла CSV, чтобы задать методы зачисления для ряда курсов за одну операцию.';
$string['privacy:metadata'] = 'Инструмент администрирования методов регистрации не хранит личные данные.';
$string['reladderror'] = 'Ошибка при связывании метода с курсом.';
$string['relalreadyexists'] = 'Метод уже связан с курсом.';
$string['reldoesntexist'] = 'Метод не существует.';
$string['result'] = 'Результат';
$string['results'] = 'Результаты зачисления на курс';
$string['targetisparent'] = 'Метод является родительским для курса, поэтому не может быть добавлен в качестве его цели.';
$string['targetnotfound'] = 'Неизвестный курс.';
