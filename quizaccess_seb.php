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
 * @package    quizaccess
 * @subpackage seb
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addtemplate'] = 'Добавить новый шаблон';
$string['allowedbrowserkeysdistinct'] = 'Все ключи должны быть разными.';
$string['allowedbrowserkeyssyntax'] = 'Ключ должен быть 64-символьной шестнадцатеричной строкой.';
$string['cachedef_config'] = 'Кэш конфигурации SEB';
$string['cachedef_configkey'] = 'SEB настройка кэша';
$string['cachedef_quizsettings'] = 'SEB параметры кэша теста';
$string['cantdelete'] = 'Шаблон не может быть удалён, так как он был использован для одного или нескольких тестов.';
$string['cantedit'] = 'Шаблон не может быть отредактирован, так как он был использован для одного или нескольких тестов.';
$string['clientrequiresseb'] = 'Этот тест был настроен для использования Safe Exam Browser с конфигурацией клиента.';
$string['confirmtemplateremovalquestion'] = 'Вы уверены, что хотите удалить этот шаблон?';
$string['confirmtemplateremovaltitle'] = 'Подтвердите удаление шаблона?';
$string['conflictingsettings'] = 'У вас нет разрешения на обновление существующих настроек браузера Safe Exam.';
$string['content'] = 'Шаблон';
$string['description'] = 'Описание';
$string['disabledsettings'] = 'Отключённые настройки.';
$string['disabledsettings_help'] = 'Safe Exam Browser настройки теста не могут быть изменены, если тест был начат. Чтобы изменить настройку, все попытки тестирования сначала должны быть удалены.';
$string['downloadsebconfig'] = 'Скачать конфигурационный файл SEB';
$string['duplicatetemplate'] = 'Шаблон с таким же именем уже существует.';
$string['edittemplate'] = 'Редактировать шаблон';
$string['enabled'] = 'Включить';
$string['event:accessprevented'] = 'Доступ к тесту был запрещён';
$string['event:templatecreated'] = 'Был создан шаблон SEB';
$string['event:templatedeleted'] = 'Шаблон SEB был удалён';
$string['event:templatedisabled'] = 'Шаблон SEB был отключён';
$string['event:templateenabled'] = 'Шаблон SEB был включён';
$string['event:templateupdated'] = 'Шаблон SEB был обновлён';
$string['exitsebbutton'] = 'Выход из Safe Exam Browser';
$string['filemanager_sebconfigfile'] = 'Загрузите безопасный конфигурационный файл браузера';
$string['filemanager_sebconfigfile_help'] = 'Пожалуйста, загрузите свой собственный конфигурационный файл Safe Exam Browser для этого теста.';
$string['filenotpresent'] = 'Пожалуйста, загрузите конфигурационный файл SEB.';
$string['fileparsefailed'] = 'Загруженный файл не может быть сохранен как конфигурационный файл SEB.';
$string['httplinkbutton'] = 'Скачать конфигурацию';
$string['invalid_browser_key'] = 'Неверный ключ SEB';
$string['invalid_config_key'] = 'Неправильный ключ настройки SEB';
$string['invalidkeys'] = 'Ключ конфигурации или экзаменационные ключи браузера не могут быть проверены. Пожалуйста, убедитесь, что вы используете Safe Exam Browser с правильным конфигурационным файлом.';
$string['invalidtemplate'] = 'Недопустимый шаблон конфигурации SEB';
$string['manage_templates'] = 'Шаблоны Safe Exam Browser';
$string['managetemplates'] = 'Управлять шаблонами';
$string['missingrequiredsettings'] = 'В настройках конфигурации отсутствуют некоторые необходимые значения.';
$string['name'] = 'Имя';
$string['newtemplate'] = 'Новый шаблон';
$string['noconfigfilefound'] = 'Не удалось найти загруженный конфигурационный файл SEB для теста cmid: {$a}';
$string['noconfigfound'] = 'Для SEB не могут быть найдены настройки тестирования с помощью cmid: {$a}';
$string['not_seb'] = 'No Safe Exam Browser не используется.';
$string['notemplate'] = 'Нет шаблона';
$string['passwordnotset'] = 'Текущие настройки требуют, чтобы тестирование шло с помощью Safe Exam и имело пароль.';
$string['pluginname'] = 'Safe Exam Browser правило доступа';
$string['privacy:metadata:quizaccess_seb_quizsettings'] = 'Safe Exam Browser настройки теста. Включает в себя идентификатор последнего пользователя, создавшего или изменившего настройки.';
$string['privacy:metadata:quizaccess_seb_quizsettings:quizid'] = 'Идентификатор теста, для которого существуют настройки.';
$string['privacy:metadata:quizaccess_seb_quizsettings:timecreated'] = 'Unix время, когда были созданы настройки.';
$string['privacy:metadata:quizaccess_seb_quizsettings:timemodified'] = 'Время Unix, когда настройки были изменены в последний раз.';
$string['privacy:metadata:quizaccess_seb_quizsettings:usermodified'] = 'Идентификатор пользователя, который в последний раз создавал или изменял настройки.';
$string['privacy:metadata:quizaccess_seb_template'] = 'Параметры шаблона Safe Exam Browser. Они включают в себя идентификатор последнего пользователя, создавшего или изменившего шаблон.';
$string['privacy:metadata:quizaccess_seb_template:timecreated'] = 'Unix время создания шаблона.';
$string['privacy:metadata:quizaccess_seb_template:timemodified'] = 'Unix-время последнего изменения шаблона.';
$string['privacy:metadata:quizaccess_seb_template:usermodified'] = 'Идентификатор пользователя, который в последний раз создавал или изменял шаблон.';
$string['quizsettings'] = 'Настройки теста';
$string['restoredfrom'] = '{$a->name} (восстановлено через cmid {$a->cmid})';
$string['seb'] = 'Браузер Safe Exam';
$string['seb_activateurlfiltering'] = 'Включить фильтрацию URL-адресов';
$string['seb_allowedbrowserexamkeys'] = 'Разрешить ключи теста в браузере';
$string['seb_allowreloadinexam'] = 'Включить перезагрузку в тесте';
$string['seb_allowspellchecking'] = 'Включить проверку орфографии';
$string['seb_allowspellchecking_help'] = 'Если этот параметр включён, проверка орфографии в браузере SEB разрешена.';
$string['seb_allowuserquitseb'] = 'Включить выход из SEB';
$string['seb_allowuserquitseb_help'] = 'Если эта функция включена, пользователи могут выйти из SEB с помощью кнопки "Выход" в панели задач SEB или нажав клавиши Ctrl-Q или нажав кнопку закрытия главного окна браузера.';
$string['seb_enableaudiocontrol'] = 'Включить управление звуком';
$string['seb_enableaudiocontrol_help'] = 'Если этот параметр включён, значок управления звуком отображается на панели задач SEB.';
$string['seb_expressionsallowed'] = 'Выражения разрешены';
$string['seb_expressionsblocked'] = 'Выражения заблокированы';
$string['seb_filterembeddedcontent'] = 'Фильтровать встроенный контент';
$string['seb_filterembeddedcontent_help'] = 'Если этот параметр включён, встроенные ресурсы также будут отфильтрованы с помощью набора фильтров.';
$string['seb_help'] = 'Настройте тест, чтобы использовать Safe Exam Browser.';
$string['seb_linkquitseb'] = 'Показать кнопку "Выход из Safe Exam Browser", настроенную с помощью ссылки';
$string['seb_linkquitseb_help'] = 'В этом поле вы можете ввести ссылку для выхода из SEB. Она будет использоваться на кнопке "Выход из Safe Exam Browser" на странице, которая появится после сдачи экзамена. При нажатии на кнопку или ссылку, размещённую там, где вы хотите её разместить, можно выйти из SEB без необходимости вводить пароль выхода. Если ссылка не введена, то кнопка "Выйти из Safe Exam Browser" не появляется, и нет никакой ссылки, установленной для выхода из SEB.';
$string['seb_managetemplates'] = 'Управлять шаблонам Safe Exam Browser';
$string['seb_muteonstartup'] = 'Отключать звук при запуске';
$string['seb_muteonstartup_help'] = 'Если этот параметр включён, звук отключается при запуске SEB.';
$string['seb_quitpassword'] = 'Пароль выхода';
$string['seb_quitpassword_help'] = 'Этот пароль запрашивается, когда пользователи пытаются выйти из SEB с помощью кнопки "Выйти", Ctrl-Q или кнопки закрыть в главном окне браузера. Если пароль выхода не установлен, то SEB просто спрашивает: "Вы уверены, что хотите выйти из SEB?".';
$string['seb_regexallowed'] = 'Регулярное выражение разрешено';
$string['seb_regexallowed_help'] = 'Текстовое поле, содержащее выражения фильтрации для разрешённых URL-адресов в формате регулярных выражений (Regex).';
$string['seb_regexblocked'] = 'Регулярное выражение заблокировано';
$string['seb_regexblocked_help'] = 'Текстовое поле, содержащее выражения фильтрации для заблокированных URL-адресов в формате регулярных выражений (Regex).';
$string['seb_requiresafeexambrowser'] = 'Требовать использование Safe Exam Browser';
$string['seb_requiresafeexambrowser_help'] = 'Если этот параметр включён, учащиеся могут выполнить тест только с помощью Safe Exam Browser. Доступные опции: * нет <br/>Safe Exam Browser не требуется, чтобы пройти тест. * Да  – используйте существующий шаблон < br/>можно использовать шаблон для настройки Safe Exam Browser. Управление шаблонами осуществляется в меню администрирования. Ваши ручные настройки перезаписываются шаблоном. * Да – настройка вручную < br/>шаблон для настройки Safe Exam Browser использоваться не будет. Вы можете настроить Safe Exam Browser вручную. * Да – загрузите мою собственную конфигурацию <br/>вы можете загрузить свой собственный файл конфигурации браузера Safe Exam. Все ручные настройки и использование шаблонов будут отключены. * Да – используйте SEB config <br/>никакие конфигурации Safe Exam Browser не находятся на стороне Moodle. Тест можно пройти с любой конфигурацией Safe Exam Browser.';
$string['seb_showkeyboardlayout'] = 'Показать кнопку переключения раскладки';
$string['seb_showkeyboardlayout_help'] = 'Если этот параметр включён, текущая раскладка клавиатуры отображается на панели задач SEB. Она позволяет переключаться на другие раскладки клавиатуры, которые были включены в операционной системе.';
$string['seb_showreloadbutton'] = 'Показать кнопку перезагрузки';
$string['seb_showreloadbutton_help'] = 'Если этот параметр включён, на панели задач SEB отображается кнопка перезагрузки, позволяющая перезагрузить текущую веб-страницу.';
$string['seb_showsebdownloadlink'] = 'Показать кнопку загрузки Safe Exam Browser';
$string['seb_showsebdownloadlink_help'] = 'Если этот параметр включён, то на начальной странице теста будет показана кнопка загрузки Safe Exam Browser.';
$string['seb_showsebtaskbar'] = 'Показать панель задач SEB';
$string['seb_showsebtaskbar_help'] = 'Если этот параметр включён, в нижней части окна браузера SEB появится панель задач. Панель задач необходима для отображения таких элементов, как управление Wi-Fi, кнопка перезагрузки, время и раскладка клавиатуры.';
$string['seb_showtime'] = 'Показать время';
$string['seb_showtime_help'] = 'Если этот параметр включён, текущее время отображается на панели задач SEB.';
$string['seb_showwificontrol'] = 'Показать управление Wi-Fi';
$string['seb_showwificontrol_help'] = 'Если эта функция включена, на панели задач SEB появится кнопка управления Wi-Fi. Кнопка позволяет пользователям повторно подключиться к сетям Wi-Fi, к которым они ранее были подключены.';
$string['seb_templateid'] = 'Safe Exam Browser шаблон конфигурации';
$string['seb_templateid_help'] = 'Настройки в выбранном шаблоне конфигурации будут использоваться для настройки безопасного браузера экзамена во время выполнения теста. Вы можете перезаписать настройки в шаблоне с помощью ваших настроек.';
$string['seb_use_client'] = 'Да – Используйте конфигурацию клиента SEB';
$string['seb_use_manually'] = 'Да – Настройка вручную';
$string['seb_use_template'] = 'Да – Использовать существующий шаблон';
$string['seb_use_upload'] = 'Да – Загрузить мою собственную конфигурацию';
$string['seb_userconfirmquit'] = 'Попросите пользователя подтвердить выход';
$string['seb_userconfirmquit_help'] = 'Если этот параметр включён, пользователи должны подтвердить выход из SEB при обнаружении ссылки выхода.';
$string['seb:bypassseb'] = 'Обойти требование для просмотра теста в Safe Exam Browser.';
$string['seb:manage_filemanager_sebconfigfile'] = 'Изменить настройки тестирования в SEB: Выберите конфигурационный файл SEB';
$string['seb:manage_seb_activateurlfiltering'] = 'Изменить настройки тестирования в SEB: Активация фильтрации URL-адресов';
$string['seb:manage_seb_allowedbrowserexamkeys'] = 'Изменить настройки тестирования в SEB: Разрешены ключи SEB';
$string['seb:manage_seb_allowreloadinexam'] = 'Изменить настройки тестирования в SEB: Разрешить перезагрузку';
$string['seb:manage_seb_allowspellchecking'] = 'Изменить настройки тестирования в SEB: Включить проверку орфографии';
$string['seb:manage_seb_allowuserquitseb'] = 'Изменить настройки тестирования в SEB: Разрешать выход';
$string['seb:manage_seb_enableaudiocontrol'] = 'Изменить настройки тестирования в SEB: Включить управление звуком';
$string['seb:manage_seb_expressionsallowed'] = 'Изменить настройки тестирования в SEB: Простые выражения разрешены';
$string['seb:manage_seb_expressionsblocked'] = 'Изменить настройки тестирования в SEB: Простые выражения заблокированы';
$string['seb:manage_seb_filterembeddedcontent'] = 'Изменить настройки тестирования в SEB: Фильтр встроенного контента';
$string['seb:manage_seb_linkquitseb'] = 'Изменить настройки тестирования в SEB: Ссылка выхода';
$string['seb:manage_seb_muteonstartup'] = 'Изменить настройки тестирования в SEB: Отключение звука при запуске';
$string['seb:manage_seb_quitpassword'] = 'Изменить настройки тестирования в SEB: Пароль на выход';
$string['seb:manage_seb_regexallowed'] = 'Изменить настройки тестирования в SEB: Регулярные выражения разрешены';
$string['seb:manage_seb_regexblocked'] = 'Изменить настройки тестирования в SEB: Регулярные выражения заблокированы';
$string['seb:manage_seb_requiresafeexambrowser'] = 'Изменить настройки тестирования в SEB: Требуется Safe Exam Browser';
$string['seb:manage_seb_showkeyboardlayout'] = 'Изменить настройки тестирования в SEB: Показать раскладку клавиатуры';
$string['seb:manage_seb_showreloadbutton'] = 'Изменить настройки тестирования в SEB: Показать кнопку перезагрузки';
$string['seb:manage_seb_showsebdownloadlink'] = 'Изменить настройки тестирования в SEB: Показать панель задач';
$string['seb:manage_seb_showsebtaskbar'] = 'Изменить настройки тестирования в SEB: Показать панель задач';
$string['seb:manage_seb_showtime'] = 'Изменить настройки  тестирования в SEB: Показать время';
$string['seb:manage_seb_showwificontrol'] = 'Изменить настройки тестирования в SEB: Показать управление Wi-Fi';
$string['seb:manage_seb_templateid'] = 'Изменить настройки тестирования в SEB: Выбор SEB шаблона.';
$string['seb:manage_seb_userconfirmquit'] = 'Изменить настройки тестирования в SEB: подтверждение при выходе.';
$string['seb:managetemplates'] = 'Управление шаблонами конфигурации SEB';
$string['sebdownloadbutton'] = 'Загрузить Safe Exam Browser';
$string['seblinkbutton'] = 'Запустить Safe Exam Browser';
$string['sebrequired'] = 'Этот тест был настроен таким образом, что студенты могли его использовать только с помощью Safe Exam Browser.';
$string['setting:autoreconfigureseb'] = 'Автоматическая настройка SEB';
$string['setting:autoreconfigureseb_desc'] = 'Если этот параметр включён, пользователи, которые переходят к тесту с помощью браузера Safe Exam, будут автоматически вынуждены перенастроить свой браузер Safe Exam.';
$string['setting:displayblocksbeforestart'] = 'Отображение блоков перед началом тестирования';
$string['setting:displayblocksbeforestart_desc'] = 'Если этот параметр включён, блоки будут отображаться до того, как пользователь попытается пройти тест.';
$string['setting:displayblockswhenfinished'] = 'Отображение блоков после завершения тестирования';
$string['setting:displayblockswhenfinished_desc'] = 'Если этот параметр включён, блоки будут отображаться после того, как пользователь завершит свою попытку тестирования.';
$string['setting:downloadlink'] = 'Ссылка для скачивания Safe Exam Browser';
$string['setting:downloadlink_desc'] = 'URL-адрес для загрузки приложения Safe Exam Browser.';
$string['setting:quizpasswordrequired'] = 'Требуется пароль для теста';
$string['setting:quizpasswordrequired_desc'] = 'Если этот параметр включён, все тесты, требующие Safe Exam Browser, должны иметь установленный пароль.';
$string['setting:showhttplink'] = 'Показать seb:// ссылку';
$string['setting:showseblink'] = 'Показать seb:// ссылку';
$string['setting:showseblinks'] = 'Показать настройки ссылок Safe Exam Browser';
$string['setting:showseblinks_desc'] = 'Следует ли показывать ссылки для доступа пользователя к файлу конфигурации Safe Exam Browser, когда доступ к тесту запрещён. Обратите внимание, что ссылки seb:// могут работать не в каждом браузере.';
$string['setting:supportedversions'] = 'Обратите внимание, что для использование функции конфигурации ключа требуют следующие минимальные версии клиента Safe Exam Browser: macOS - 2.1.5pre2, Windows - 3.0, iOS - 2.1.14.';
$string['settingsfrozen'] = 'Из-за наличия хотя бы одной попытки тестирования настройки браузера Safe Exam больше не могут быть обновлены.';
$string['unknown_reason'] = 'Неизвестная причина';
$string['used'] = 'Используется';
