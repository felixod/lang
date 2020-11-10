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
 * Strings for component 'zoom', language 'ru', branch 'MOODLE_39_STABLE'
 *
 * @package   zoom
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Действия';
$string['addtocalendar'] = 'Добавить в календарь';
$string['allmeetings'] = 'Все собрания';
$string['apikey'] = 'Ключ API Zoom';
$string['apisecret'] = 'Пароль API Zoom';
$string['apiurl'] = 'URL API Zoom';
$string['audio_both'] = 'VoIP и Телефон';
$string['audio_telephony'] = 'Только телефон';
$string['audio_voip'] = 'Только VoIP';
$string['cachedef_sessions'] = 'Информация от zoom. Получить запрос на отчет пользователя';
$string['cachedef_zoomid'] = 'ID пользователя Zoom';
$string['calendardescriptionintro'] = '\\nОписание:\\n{\\$a}';
$string['calendardescriptionURL'] = 'URL адрес подключения к собранию: {$a}.';
$string['calendariconalt'] = 'Значок календаря';
$string['clickjoin'] = 'Нажал кнопку присоединиться к собранию';
$string['connectionfailed'] = 'Ошибка подключения:';
$string['connectionok'] = 'Подключение работает.';
$string['connectionstatus'] = 'Состояние подключения';
$string['defaultsettings'] = 'Настройки Zoom по умолчанию';
$string['defaultsettings_help'] = 'Эти настройки определяют значения по умолчанию для всех новых собраний и вебинаров Zoom.';
$string['downloadical'] = 'Скачать iCal';
$string['duration'] = 'Продолжительность (минуты)';
$string['endtime'] = 'Время окончания';
$string['err_duration_nonpositive'] = 'Продолжительность должна быть положительной';
$string['err_duration_too_long'] = 'Продолжительность не может превышать 150 часов.';
$string['err_long_timeframe'] = 'Запрошенный временной интервал слишком большой, показать результаты за последний месяц.';
$string['errorwebservice'] = 'Zoom ошибка вебсервиса: {$a}.';
$string['err_password'] = 'Пароль может содержать только следующие символы: [A-Z A-Z 0-9 @ - _ *]. Макс 10 символов.';
$string['err_start_time_past'] = 'Дата начала не может быть в прошлом';
$string['export'] = 'Экспорт';
$string['firstjoin'] = 'Сначала можно присоединиться';
$string['firstjoin_desc'] = 'Самый первый пользователь может присоединиться к запланированному собранию (за несколько минут до начала).';
$string['getmeetingreports'] = 'Получите отчет о собрании от Zoom';
$string['invalid_status'] = 'Некорректный статус, проверьте базу данных.';
$string['join'] = 'Присоединиться';
$string['joinbeforehost'] = 'Присоединяться к собранию раньше организатора';
$string['join_meeting'] = 'Присоединиться к собранию';
$string['jointime'] = 'Время присоединения';
$string['leavetime'] = 'Время отсоединения';
$string['licensesnumber'] = 'Количество лицензий';
$string['lowlicenses'] = 'Если количество ваших лицензий превышает требуемое, то при создании пользователем каждого нового собрания ему будет назначена PRO лицензия,  путем понижения статуса другого пользователя. Опция действует, когда количество активных PRO лицензий превышает 5.';
$string['meeting_finished'] = 'Завершено';
$string['meeting_nonexistent_on_zoom'] = 'Отсутствует в Zoom';
$string['meeting_not_started'] = 'Не начался';
$string['meetingoptions'] = 'Опции собрания';
$string['meetingoptions_help'] = '* Присоединяться раньше организатора * позволяет участникам присоединиться к совещанию до присоединения организатора или когда организатор не может присутствовать на собрании.';
$string['meeting_started'] = 'В процессе';
$string['meeting_time'] = 'Время начала';
$string['modulename'] = 'Собрание Zoom';
$string['modulename_help'] = 'Zoom - это платформа для видео и веб-конференций, которая дает авторизованным пользователям возможность проводить онлайн-собрания.';
$string['modulenameplural'] = 'Собрания Zoom';
$string['newmeetings'] = 'Новые встречи';
$string['nomeetinginstances'] = 'Не найдено сеансов для этого собрания.';
$string['noparticipants'] = 'На данный момент участников не найдено.';
$string['nosessions'] = 'Не найдено сеансов для указанного диапазона.';
$string['nozooms'] = 'Нет собраний';
$string['off'] = 'Выключить';
$string['oldmeetings'] = 'Заканчивающиеся собрания';
$string['on'] = 'Включить';
$string['option_audio'] = 'Параметры аудио';
$string['option_host_video'] = 'Видео организатора';
$string['option_jbh'] = 'Разрешить присоединение раньше организатора';
$string['option_participants_video'] = 'Видео участников';
$string['participants'] = 'Участники';
$string['password'] = 'Пароль';
$string['passwordprotected'] = 'Защищено паролем';
$string['pluginadministration'] = 'Управление собраниями Zoom';
$string['pluginname'] = 'Собрания Zoom';
$string['privacy:metadata:zoom_meeting_details'] = 'Таблица базы данных, в которой хранится информация о каждом экземпляре собрания.';
$string['privacy:metadata:zoom_meeting_details:topic'] = 'Название собрания, которое посетил пользователь.';
$string['privacy:metadata:zoom_meeting_participants'] = 'Таблица базы данных, в которой хранится информация об участниках собрания.';
$string['privacy:metadata:zoom_meeting_participants:duration'] = 'Как долго участник был на собрании';
$string['privacy:metadata:zoom_meeting_participants:join_time'] = 'Время, когда участник присоединился к собранию';
$string['privacy:metadata:zoom_meeting_participants:leave_time'] = 'Время, когда участник покинул собрание';
$string['privacy:metadata:zoom_meeting_participants:name'] = 'Имя участника';
$string['privacy:metadata:zoom_meeting_participants:user_email'] = 'Электронный адрес участника';
$string['recurringmeeting'] = 'Повторяющиеся';
$string['recurringmeeting_help'] = 'Отсутствует дата окончания';
$string['recurringmeetinglong'] = 'Повторяющееся собрание (без даты окончания или времени)';
$string['redefinelicenses'] = 'Переопределить лицензии';
$string['report'] = 'Отчеты';
$string['reportapicalls'] = 'Отчет вызовов API исчерпан';
$string['requirepassword'] = 'Требовать пароль для подключения';
$string['resetapicalls'] = 'Сбросить количество имеющихся вызовов API';
$string['search:activity'] = 'Zoom - информация об активности';
$string['sessions'] = 'Сессии';
$string['start'] = 'Начать';
$string['starthostjoins'] = 'Начать показ видео при подключении';
$string['start_meeting'] = 'Начать собрание';
$string['startpartjoins'] = 'Начинать видео, когда участник присоединяется к собранию';
$string['starttime'] = 'Время начала';
$string['start_time'] = 'Когда';
$string['status'] = 'Статус';
$string['title'] = 'Название';
$string['topic'] = 'Тема';
$string['unavailable'] = 'Невозможно присоединиться к собранию в это время';
$string['updatemeetings'] = 'Обновить настройки собрания из Zoom';
$string['usepersonalmeeting'] = 'Использовать персональный ID собрания {$a}';
$string['webinar'] = 'Вебинар';
$string['webinar_already_false'] = '<p><b> Этот модуль уже был установлен как собрание, а не как вебинар. Вы не можете переключить этот параметр после создания собрания.</b></p>';
$string['webinar_already_true'] = '<p><b> Этот модуль уже был установлен как вебинар, а не как собрание. Вы не можете переключить этот параметр после создания вебинара.</b></p>';
$string['webinar_help'] = 'Этот параметр доступен только для предварительно авторизованных учетных записей Zoom.';
$string['zoom:addinstance'] = 'Добавлять новое собрание Zoom';
$string['zoomerr'] = 'Произошла ошибка с Zoom.';
$string['zoomerr_apikey_missing'] = 'Zoom API key не найден';
$string['zoomerr_apisecret_missing'] = 'Zoom API secret не найден';
$string['zoomerr_id_missing'] = 'Необходимо указать ID курса или вышеуказанный пример ID';
$string['zoomerr_meetingnotfound'] = 'Это собрание просрочено. Вы можете  <a href="{$a->recreate}">создать его заново</a> или <a href="{$a->delete}">удалить его полностью</a>.';
$string['zoomerr_meetingnotfound_info'] = 'Это собрание не найдено в Zoom. Если у вас есть вопросы, обратитесь к владельцу собрания.';
$string['zoomerr_usernotfound'] = 'Вы используете Zoom в первый раз, поэтому для включения своей учетной записи Zoom войдите в <a href="{$a}" target="_blank">{$a}</a> с вашими учетными данными. Как только Вы активируете свою учетную запись Zoom, перезагрузите эту страницу и продолжите настройку своего собрания. Еще убедитесь, что ваша электронная почта на Zoom совпадает с вашей электронной почтой в этой системе.';
$string['zoomurl'] = 'URL домашней страницы Zoom';
$string['zoom:view'] = 'Просматривать собрания Zoom';
