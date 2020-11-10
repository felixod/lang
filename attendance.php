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
 * @package    mod
 * @subpackage attendance
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['deletecheckfull'] = 'Вы абсолютно уверены, что хотите полностью удалить {$a}, включая все пользовательские данные?';
$string['eventstudentattendancesessionsviewed'] = 'Просмотр отчёта о сеансе';
$string['mobilesessionfrom'] = 'Показ сеансов старше предыдущего';
$string['mobilesessionfrom_help'] = 'Позволяет ограничить список сеансов при маркировке в приложении - показывает только сеансы, начавшиеся с этого значения';
$string['mobilesessionto'] = 'Показать будущие сессии';
$string['mobilesessionto_help'] = 'Позволяет ограничить список сеансов, чтобы показать только небольшое количество будущих сеансов.';
$string['mobilesettings'] = 'Настройки мобильного приложения';
$string['mobilesettings_help'] = 'Эти настройки управляют поведением мобильного приложения Moodle';
$string['previewhtml'] = 'Предварительный просмотр текста в формате HTML';
$string['qr_cookie_error'] = 'QR-код сеанса истёк.';
$string['qr_pass_wrong'] = 'QR-пароль неверен или истёк срок его действия.';
$string['rotateqrcode'] = 'Поворот QR-кода';
$string['rotateqrcode_cleartemppass_task'] = 'Задача очистить временные пароли, генерируемые функцией поворота QR-кода.';
$string['rotateqrcodeexpirymargin'] = 'Поворот QR-код/срок действия пароля (секунды)';
$string['rotateqrcodeexpirymargin_desc'] = 'Интервал времени (секунды), чтобы разрешить истекший QR-код/пароль.';
$string['rotateqrcodeinterval'] = 'Поворот QR-кода / пароля интервал (секунды)';
$string['rotateqrcodeinterval_desc'] = 'Интервал времени (секунды) для поворота QR-кода/пароля.';
$string['statusall'] = 'все';
$string['statusunselected'] = 'не выбрано';
$string['submit'] = 'Отправить';
$string['submitpassword'] = 'Отправить пароль';
$string['uploadattendance'] = 'Загрузить посещаемость из CSV';
