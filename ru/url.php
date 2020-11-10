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
 * Strings for component 'url', language 'ru', branch 'MOODLE_39_STABLE'
 *
 * @package   url
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['chooseavariable'] = 'Выберите переменную ...';
$string['clicktoopen'] = 'Нажмите на ссылку {$a}, чтобы открыть ресурс.';
$string['configdisplayoptions'] = 'Выделите все варианты, которые должны быть доступны, существующие параметры не изменятся. Удерживайте нажатой клавишу CTRL для выбора нескольких полей.';
$string['configframesize'] = 'Это значение высоты (в пикселях) верхнего фрейма, содержащего навигацию, если веб-страницы или загруженные файлы отображаются в фрейме.';
$string['configrolesinparams'] = 'Включите, если хотите включить переведенные названия ролей в список доступных параметров.';
$string['configsecretphrase'] = 'Эта секретная фраза используется при создании зашифрованного кода, который может быть отправлен в качестве параметра на некоторые серверы. Код вычисляется как md5-сумма по значению IP-адреса текущего пользователя, объединенным с Вашей секретной фразой. Т.е. code=md5(IP.secretphrase). Пожалуйста, учтите, что это не надежно, поскольку IP-адреса могут меняться и один адрес часто используется несколькими компьютерами.';
$string['contentheader'] = 'Содержимое';
$string['createurl'] = 'Создать URL';
$string['displayoptions'] = 'Доступные параметры отображения';
$string['displayselect'] = 'Отображение';
$string['displayselectexplain'] = 'Выберите тип отображения. К сожалению, не все типы подходят для всех видов гиперссылок.';
$string['displayselect_help'] = 'Этот параметр (наряду с типом файла и возможностью браузера по отображению внедренных объектов) определяет, как будет отображаться гиперссылка. Возможные варианты:

* Автоматически - Наиболее подходящий режим отображения гиперссылки подбирается автоматически
* Внедрить - гиперссылка отображается на странице после панели навигации вместе с описанием и блоками
* Принудительное скачивание - пользователю предлагается скачать файл
* Открыть - гиперссылка открывается в текущем окне браузера
* Во всплывающем окне - гиперссылка открывается в новом окне браузера без меню и адресной строки
* В фрейме - гиперссылка отображается в фрейме под панелью навигации и описанием
* В новом окне - гиперссылка открывается в новом окне браузера с меню и адресной строкой';
$string['externalurl'] = 'Адрес (URL)';
$string['framesize'] = 'Высота фрейма';
$string['indicator:cognitivedepth'] = 'Ссылка: познавательный аспект';
$string['indicator:cognitivedepth_help'] = 'Этот показатель основан на глубине познания, достигнутой студентом при работе с ресурсом Ссылка.';
$string['indicator:socialbreadth'] = 'Гиперссылка: социальный аспект';
$string['indicator:socialbreadth_help'] = 'Этот показатель основан на широте общения, которая может быть достигнута студентом при работе с ресурсом Гиперссылка.';
$string['invalidstoredurl'] = 'Невозможно отобразить ресурс, некорректный адрес';
$string['invalidurl'] = 'Введеный URL неверный';
$string['modulename'] = 'Гиперссылка';
$string['modulename_help'] = 'Модуль «Гиперссылка» позволяет преподавателю разместить веб-ссылку как ресурс курса. Ссылка может быть связана с любым ресурсом, который находится в свободном доступе в Интернете (напр. документы и изображения). Желательно, чтобы ссылка не вела на главную страницу сайта. Лучше использовать адрес конкретной веб-страницы. Преподаватель может использовать ссылку из хранилища, такого как Flickr, YouTube, Wikimedia и др. (в зависимости от того, какие хранилища разрешены для сайта).

Есть варианты отображения Гиперссылки: встроенной в страницу или открывающейся в новом окне.

При необходимости можно добавлять к гиперссылке (в качестве параметра запроса) дополнительную информацию, например, имя студента.

Также обратите внимание, что гиперссылки могут быть добавлены к любому другому типу ресурса или элемента курса, используя текстовый редактор.';
$string['modulenameplural'] = 'Гиперссылки';
$string['page-mod-url-x'] = 'Любая страница модуля «гиперссылка»';
$string['parameterinfo'] = '&amp;параметр=переменная';
$string['parametersheader'] = 'Параметры';
$string['parametersheader_help'] = 'К адресу можно автоматически добавить в качестве параметров значения некоторых внутренних переменных Moodle. Введите в текстовые поля названия для параметров, а затем выберите соответствующие переменные.';
$string['pluginadministration'] = 'Управление гиперссылкой';
$string['pluginname'] = 'Гиперссылка';
$string['popupheight'] = 'Высота всплывающего окна (в пикселях)';
$string['popupheightexplain'] = 'Заданная по умолчанию высота всплывающего окна.';
$string['popupwidth'] = 'Ширина всплывающего окна (в пикселях)';
$string['popupwidthexplain'] = 'Заданная по умолчанию ширина всплывающего окна.';
$string['printintro'] = 'Отображать описание гиперссылки';
$string['printintroexplain'] = 'Выводить описание гиперссылки после содержимого? При некоторых настройках отображения описание гиперссылки не будет отображаться, даже если этот параметр включен.';
$string['rolesinparams'] = 'Включить названия ролей в параметры';
$string['search:activity'] = 'Гиперссылка';
$string['serverurl'] = 'Гиперссылка на этот сайт';
$string['url:addinstance'] = 'Добавлять новый ресурс типа «Гиперссылка»';
$string['url:view'] = 'Просматривать гиперссылки';
