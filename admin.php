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
 * @package    core
 * @subpackage admin
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['checkupgradepending'] = 'Обновление';
$string['croninfrequent'] = 'Время между двумя последними запусками сценария обслуживания cron составило более {$a->actual} секунд, что превышает рекомендуемое значение {$a->expected}. Рекомендуется настроить его для более частого запуска.';
$string['enableuserfeedback'] = 'Включите обратную связь об этом программном обеспечении';
$string['enableuserfeedback_desc'] = 'Если этот параметр включён, в нижнем колонтитуле отображается ссылка "дать отзыв об этом программном обеспечении", чтобы пользователи могли оставить отзыв о программном обеспечении Moodle в штаб-квартире Moodle. Если установлен параметр "следующее напоминание обратной связи", то пользователю также будет показано напоминание на панели мониторинга с заданным интервалом. Определение следующего напоминания обратной связи\' в \'никогда\' отключает напоминание приборной панели, оставляя \'давать обратную связь о ссылке этой программы в нижнем колонтитуле.';
$string['feedbacksettings'] = 'Настройки обратной связи';
$string['mlbackendsettings'] = 'Параметры бэкенда машинного обучения';
$string['rememberuserlicensepref'] = 'Запомнить предпочтения пользователя лицензии';
$string['rememberuserlicensepref_help'] = 'Если этот параметр включён, то последняя лицензия, выбранная пользователем, предварительно выбирается при загрузке файла в средство выбора файлов. В противном случае предварительно выбирается лицензия сайта по умолчанию.';
$string['userfeedbackencouragement'] = '<p>Moodle 3.9 включает в себя новую функцию, которая даёт пользователям возможность предоставлять обратную связь о программном обеспечении Moodle в штаб-квартиру Moodle через внешний сайт опроса, размещённый штаб-квартирой Moodle. Никакая идентифицирующая пользователя информация не передаётся на сайт опроса.</p> <p>Штаб-квартира Moodle стремится быть открытой и прозрачной в отношении своей практики сбора данных. Таким образом, мы хотим убедиться, что вы знаете и контролируете эту функциональность.</p> <p>Обратная связь от пользователей значительно поможет штабу Moodle улучшить программное обеспечение Moodle. Чтобы включить эту функцию, перейдите по ссылке <a href="{$a}">настройки обратной связи</a>.</p>';
$string['userfeedbackremindafter'] = 'Показать напоминание после';
$string['userfeedbackremindafter_desc'] = 'Напомните пользователям ещё раз, чтобы дать обратную связь после заданного количества дней.';
