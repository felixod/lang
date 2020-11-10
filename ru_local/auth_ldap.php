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
 * @package    auth
 * @subpackage ldap
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_ldap_auth_user_create_key'] = 'Создать внешних пользователей';
$string['auth_ldap_noconnect'] = 'LDAP-модуль не может соединиться с сервером: {$a}';
$string['auth_ldap_noconnect_all'] = 'LDAP-модуль не может соединиться с серверам: {$a}';
$string['auth_ldap_noextension'] = '<em>Модуль PHP LDAP не установлен. Пожалуйста, убедитесь, что он установлен и включен, если Вы хотите использовать этот плагин аутентификации. </em>';
$string['auth_ldapnotinstalled'] = 'Нельзя использовать LDAP аутентификацию. Модуль PHP LDAP не установлен.';
