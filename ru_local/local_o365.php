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
 * @package    local
 * @subpackage o365
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acp_maintenance_cleandeltatoken'] = 'Очистить токены дельта синхронизации пользователей';
$string['acp_maintenance_cleandeltatoken_desc'] = 'Если синхронизация пользователя работает не полностью после обновления настроек пользовательской синхронизации, это может быть вызвано старым токеном дельта-синхронизации. Очистка токена приведёт к полной повторной синхронизации при следующей пользовательской синхронизации.';
$string['acp_maintenance_cleanoidctokens'] = 'Очистка токенов OpenID Connect';
$string['acp_maintenance_cleanoidctokens_desc'] = 'Если у ваших пользователей возникли проблемы с входом в систему с помощью своей учётной записи Office 365, попробуйте очистить токены OpenID Connect. Это удаляет случайные и неполные маркёры, которые могут вызвать ошибки. Предупреждение: это может прервать вход в систему в процессе работы, поэтому лучше всего делать это во время простоя.';
$string['acp_maintenance_coursegroupusers_desc'] = 'Это повторно синхронизирует членство пользователя во всех группах Office 365, созданных для всех курсов ЭИОС СамГУПС. Это гарантирует, что только те пользователи, которые зарегистрированы в курсе ЭИОС, входят в группу Office 365. <br /> <b> Примечание: </b> Если вы добавили в группу курсов дополнительных пользователей, которые не зарегистрированы в соответствующем курсе ЭИОС СамГУПС, они будут удалены.';
$string['acp_maintenance_debugdata_desc'] = 'Это создаст пакет, содержащий различную информацию о вашей среде ЭИОС СамГУПС и Office 365, чтобы помочь разработчикам в решении любых проблем, которые могут у вас возникнуть. По запросу разработчика запустите этот инструмент и отправьте полученный файл для загрузки. Примечание: Хотя этот пакет не содержит конфиденциальных данных, мы просим вас открыто не публиковать этот файл и не отправлять его ненадёжной стороне.';
$string['acp_parentsite_desc'] = 'Сайт для обмена данными курса ЭИОС СамГУПС.';
$string['acp_parentsite_name'] = 'Сайт ЭИОС СамГУПС';
$string['acp_sharepointcourseselect_onall'] = 'Синхронизировать все <br /> Для каждого курса ЭИОС СамГУПС на этом сайте будет создан сайт SharePoint.';
$string['acp_userconnections_table_resync'] = 'Связать повторно';
$string['customtheme'] = 'Пользовательская тема (Дополнительно)';
$string['customthemedesc'] = 'Рекомендуемая тема "boost_o365teams". Однако вы можете выбрать другую тему, если у вас есть пользовательская тема, которая адаптирована для использования на вкладке команды.';
$string['errorcreatingteamfromgroup'] = 'Не удалось создать команду из группы. Пожалуйста, проверьте, существует ли группа и есть ли у неё владелец.';
$string['errorhttpclientnofileinput'] = 'Нет параметра файла в httpclient::put';
$string['help_user_emailsync'] = 'Синхронизации пользователей Azure по адресу электронной почты в Moodle';
$string['help_user_emailsync_help'] = 'При включении этого параметра пользователи Azure будут синхронизироваться с Moodle по адресу электронной почты, а не по имени пользователя';
$string['list_of_due_assignments'] = 'Это список соответствия заданий';
$string['no_due_assignments_found'] = 'Заданий не найдено';
$string['no_due_incomplete_assignments_found'] = 'Заданий не найдено';
$string['no_late_submissions_found'] = 'Представленных с опозданием заданий не найдено';
$string['o365:manageconnectionlink'] = 'Управление соединением';
$string['o365:manageconnectionunlink'] = 'Управление отключением соединения';
$string['other_login'] = 'Войдите в систему вручную';
$string['pending_submissions_due_date'] = 'Ожидающие ответы - {$a->incomplete} / {$a->total} &nbsp; | &nbsp; Due - {$a->duedate}';
$string['privacy:metadata:local_o365_token:refreshtoken'] = 'Обновление токена.';
$string['privacy:metadata:local_o365_token:resource'] = 'Ресурс токена.';
$string['privacy:metadata:local_o365_token:scope'] = 'Область действия токена.';
$string['privacy:metadata:local_o365_token:token'] = 'Токен.';
$string['settings_aadsync_emailsync'] = 'Сопоставить пользователей Azure с адресами электронной почты Moodle вместо имени пользователя в процессе синхронизации';
$string['settings_fieldmap_field_employeeId'] = 'Идентификатор сотрудника';
$string['settings_header_moodle_app'] = 'Приложение Moodle в Teams';
$string['settings_moodle_app_id'] = 'Идентификатор приложения Moodle';
$string['settings_moodle_app_id_desc'] = 'Идентификатор загруженного приложения Moodle в каталоге приложений Teams';
$string['settings_sds_fieldmap_f_pre_FederalRace'] = 'Федеральная гонка';
$string['settings_sds_fieldmap_f_pre_MailingLatitude'] = 'Почтовый адрес широта';
$string['settings_sds_fieldmap_f_pre_MailingLongitude'] = 'Почтовый адрес долгота';
$string['settings_sds_fieldmap_f_pre_MailingState'] = 'Почтовый адрес страна';
$string['settings_sds_fieldmap_f_pre_MailingZip'] = 'Почтовый адрес почтовый индекс';
$string['settings_sds_fieldmap_f_pre_StateId'] = 'Страна номер';
$string['settings_sds_fieldmap_f_pre_StudentNumber'] = 'Район / школа';
$string['settings_sds_fieldmap_f_pre_StudentStatus'] = 'Статус студента';
$string['settings_sds_fieldmap_f_pre_SyncSource_SchoolId'] = 'Код школы';
$string['settings_sds_fieldmap_f_pre_SyncSource_StudentId'] = 'SIS идентификатор студента';
$string['settings_set_moodle_app_id_instruction'] = 'Чтобы найти идентификатор приложения Moodle вручную, выполните следующие действия: <ol><li>загрузите загруженный файл манифеста в каталог приложений Teams вашего клиента.</li> <li>в каталоге приложений Teams найдите это приложение.</li> <li>щёлкните значок опции приложения, который находится в правом верхнем углу изображения приложения.</li> <li>нажмите кнопку "Копировать ссылку".</li> <li>вставьте скопированное содержимое в текстовый редактор. Он должен содержать URL-адрес, например https://teams.microsoft.com/l/app/00112233-4455-6677-8899-aabbccddeeff.</li> </ol>последняя часть URL-адреса, т. е. <span class="local_o365_settings_moodle_app_id">00112233-4455-6677-8899-aabbccddeeff</span>, это идентификатор приложения.';
