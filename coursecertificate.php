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
 * @subpackage coursecertificate
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activityhiddenwarning'] = 'Этот элемент курса в настоящий момент скрыт. Как только Вы его сделаете видимым, студенты, которые соответствуют условиям получения, автоматически получат копию сертификата в формате PDF.';
$string['automaticsend_helptitle'] = 'Помощь с автоматической отправкой';
$string['automaticsenddisabled'] = 'Автоматическая отправка этого сертификата отключена.';
$string['automaticsenddisabled_help'] = 'Если оставить этот параметр отключенным, учащиеся должны будут перейти по ссылке, размещенной на странице курса (после выполнения условий получения), чтобы получить сертификат.<br/><br/>Включив его, учащиеся автоматически получат копию сертификата в формате PDF, как только они выполнят требуемые ограничения доступа. Обратите внимание, что все учащиеся, которые уже соответствуют условиям получения, получат автоматически сертификат при включении этого параметра.';
$string['automaticsenddisabledinfo'] = 'В настоящее время {$a} учащихся соответствуют ограничениям доступа и как только они перейдут по ссылке, они сразу получат сертификат.';
$string['automaticsendenabled'] = 'Включена автоматическая отправка этого сертификата.';
$string['automaticsendenabled_help'] = 'Если оставить этот параметр включенным, учащиеся будут автоматически получать копию сертификата в формате PDF, как только они выполнят условия его получения.<br/><br/>Отключив его, учащимся нужно будет щелкнуть по ссылке элемента курса, чтобы получить сертификат (после выполнения условий получения).';
$string['certificateissues'] = 'Выдать сертификат';
$string['certifiedusers'] = 'Пользователи, получившие сертификат';
$string['chooseatemplate'] = 'Выберите шаблон ...';
$string['code'] = 'QR-код';
$string['coursecertificate:addinstance'] = 'Добавить сертификат в курс';
$string['coursecertificate:receive'] = 'Получить выданные сертификаты';
$string['coursecertificate:view'] = 'Просмотреть сертификат в курсе';
$string['coursecertificate:viewreport'] = 'Просмотреть отчет о выданных сертификатах в курсе';
$string['coursecompletiondate'] = 'Дата завершения';
$string['courseinternalid'] = 'Внутренний идентификатор курса, используемый в URL-адресах';
$string['courseurl'] = 'URL-курса';
$string['disableautomaticsend'] = 'Учащиеся больше не будут автоматически получать копию сертификата в формате PDF, как только они выполнят условия его получения. Вместо этого им нужно будет щелкнуть по ссылке элемента курса, чтобы получить сертификат (после выполнения условий ограничения).';
$string['enableautomaticsend'] = 'Все учащиеся автоматически получат копию сертификата в формате PDF, как только они выполнят условия его получения.<br/><br/>В настоящее время {$a} учащихся уже соответствуют этим условиям, но еще не получили сертификат. Они также немедленно получат свою копию.<br/><br/>Студенты, которые уже получили сертификат, повторно его не получат.';
$string['expirydate'] = 'Срок действия';
$string['issueddate'] = 'Дата выдачи';
$string['modulename'] = 'Сертификат курса';
$string['modulename_help'] = 'Модуль сертификатов курса дает учащимся возможность отметить достижения, получив сертификаты.<br/><br/>Он позволяет вам выбирать из различных шаблонов сертификатов, которые автоматически отображают данные пользователя, такие как полное имя, курс и т.д.<br/><br/>Пользователи смогут сами загрузить копию сертификата в формате PDF, получив доступ к этому действию, и есть возможность автоматически отправить им копию в формате PDF по электронной почте.<br/><br/>Если шаблон, используемый в этом элементе курса, содержит QR-код, пользователи смогут отсканировать его, чтобы проверить свои сертификаты.';
$string['modulenameplural'] = 'Сертификаты курса';
$string['notemplateselected'] = 'Выбранный шаблон не найден. Пожалуйста, перейдите в настройки элемента курса и выберите новый шаблон.';
$string['notemplateselecteduser'] = 'Сертификат недоступен. Обратитесь к администратору курса.';
$string['notemplateswarning'] = 'Нет доступных шаблонов. Пожалуйста свяжитесь с администратором сайта.';
$string['notemplateswarningwithlink'] = 'Нет доступных шаблонов. Перейдите на <a href="{$a}">страницу управления</a> и создайте новый шаблон сертификата.';
$string['nouserscertified'] = 'Нет пользователей, получивших сертификат.';
$string['page-mod-coursecertificate-x'] = 'Страница модуля любого сертификата курса';
$string['pluginadministration'] = 'Управление сертификатом курса';
$string['pluginname'] = 'Сертификат курса';
$string['previewcoursefullname'] = 'Полное название курса';
$string['previewcourseshortname'] = 'Краткое название курса';
$string['privacy:metadata'] = 'Плагин \'Сертификат курса\' не хранит персональные данные.';
$string['revoke'] = 'Отозвать';
$string['revokeissue'] = 'Вы действительно хотите отозвать этот сертификат у этого пользователя?';
$string['selectdate'] = 'Выберите дату';
$string['selecttemplatewarning'] = 'Как только в этом элементе курса будет выдан хотя бы один сертификат, данное поле будет заблокировано и больше не будет редактироваться.';
$string['status'] = 'Статус';
$string['taskissuecertificates'] = 'Выданные в курсе сертификаты';
$string['template'] = 'Шаблон';
