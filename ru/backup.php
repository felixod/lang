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
 * Strings for component 'backup', language 'ru', branch 'MOODLE_39_STABLE'
 *
 * @package   backup
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['asyncbackupcomplete'] = 'Процесс резервного копирования завершен';
$string['asyncbackupcompletebutton'] = 'Продолжить';
$string['asyncbackupcompletedetail'] = 'Процесс резервного копирования успешно завершен. <br/> Вы можете получить доступ к резервной копии на <a href="{$a}">странице восстановления.</a>';
$string['asyncbackuperror'] = 'Процесс резервного копирования не удался';
$string['asyncbackuperrordetail'] = 'Процесс резервного копирования не удался. Пожалуйста, обратитесь к системному администратору.';
$string['asyncbackuppending'] = 'Подготовка к резервному копированию';
$string['asyncbackupprocessing'] = 'Выполняется резервное копирование';
$string['asynccheckprogress'] = 'Вы можете в любой момент проверить ход выполнения на <a href="{$a}">странице восстановления</a>.';
$string['asyncemailenable'] = 'Включить уведомления';
$string['asyncemailenabledetail'] = 'Если этот параметр включен, пользователи получат сообщение после завершения асинхронного резервного копирования или восстановления.';
$string['asyncgeneralsettings'] = 'Асинхронное резервное копирование/восстановление';
$string['asyncmessagebody'] = 'Сообщение';
$string['asyncmessagebodydefault'] = 'Здравствуйте, {user_firstname}, <br/> процесс {operation} (ID: {backupid}) успешно завершен. <br/> <br/> Вы можете получить к нему доступ здесь: {link}.';
$string['asyncmessagebodydetail'] = 'Сообщение для отправки после завершения асинхронного резервного копирования или восстановления.';
$string['asyncmessagesubject'] = 'Тема';
$string['asyncmessagesubjectdefault'] = 'Процесс {operation} Moodle успешно завершен.';
$string['asyncmessagesubjectdetail'] = 'Тема сообщения';
$string['asyncnowait'] = 'Вам не нужно ждать окончания, так как процесс будет продолжаться в фоновом режиме.';
$string['asyncprocesspending'] = 'Подготовка к процессу';
$string['asyncrestorecomplete'] = 'Процесс восстановления завершен';
$string['asyncrestorecompletebutton'] = 'Продолжить';
$string['asyncrestorecompletedetail'] = 'Процесс восстановления успешно завершен. Нажав «Продолжить», вы перейдете в <a href="{$a}"> восстановленный курс. </a>';
$string['asyncrestoreerror'] = 'Процесс восстановления не удался';
$string['asyncrestoreerrordetail'] = 'Процесс восстановления не удался. Пожалуйста, обратитесь к системному администратору.';
$string['asyncrestoreinprogress'] = 'Процесс восстановления';
$string['asyncrestoreinprogress_help'] = 'Здесь показан процесс асинхронного восстановления.';
$string['asyncrestorepending'] = 'Подготовка к восстановлению';
$string['asyncrestoreprocessing'] = 'Восстановление продолжается';
$string['asyncreturn'] = 'Вернуться к курсу';
$string['autoactivedescription'] = 'Выберите, нужно ли осуществлять автоматическое резервное копирование. Если выбран режим «Вручную», то автоматическое резервное копирование будет возможно только с помощью специального скрипта через интерфейс командной строки. Его можно запускать вручную или с помощью cron.';
$string['autoactivedisabled'] = 'Отключено';
$string['autoactiveenabled'] = 'Включено';
$string['autoactivemanual'] = 'Вручную';
$string['automatedbackupschedule'] = 'Расписание';
$string['automatedbackupschedulehelp'] = 'Укажите, в какие дня недели осуществлять автоматическое резервное копирование.';
$string['automatedbackupsinactive'] = 'Автоматическое резервное копирование не было включено администратором сайта';
$string['automatedbackupstatus'] = 'Состояние автоматического резервного копирования';
$string['automateddeletedays'] = 'Удалять резервные копии, которые старше чем';
$string['automatedmaxkept'] = 'Максимальное количество хранимых резервных копий';
$string['automatedmaxkepthelp'] = 'Здесь указывается максимальное количество последних автоматически созданных резервных копий, которые будут храниться для каждого курса. Старые резервные копии будут удаляться автоматически.';
$string['automatedminkept'] = 'Минимальное количество хранимых резервных копий';
$string['automatedminkepthelp'] = 'Если удаляются резервные копии старше определенного количества дней, то может оказаться, что в неактивном курсе все резервные копии будут удалены. Чтобы это предотвратить такую ситуацию, следует указать минимальное количество хранимых резервных копий.';
$string['automatedsettings'] = 'Настройки автоматического резервного копирования';
$string['automatedsetup'] = 'Настройка автоматического резервного копирования';
$string['automatedstorage'] = 'Хранилище для создаваемых автоматически резервных копий';
$string['automatedstoragehelp'] = 'Выберите место, где будут сохраняться создаваемые автоматически резервные копии.';
$string['backupactivity'] = 'Резервное копирование элемента курса: {$a}';
$string['backupcourse'] = 'Резервное копирование курса: {$a}';
$string['backupcoursedetails'] = 'Описание курса';
$string['backupcoursesection'] = 'Раздел: {$a}';
$string['backupcoursesections'] = 'Разделы курса';
$string['backupdate'] = 'Дата резервной копии';
$string['backupdetails'] = 'Описание резервной копии';
$string['backupdetailsnonstandardinfo'] = 'Выбранный файл не является стандартным файлом резервной копии Moodle. Будет предпринята попытка переконвертировать файл резервной копии в стандартный формат, а затем восстановить его.';
$string['backupformat'] = 'Формат';
$string['backupformatimscc1'] = 'Формат резервной копии IMS CC 1.0';
$string['backupformatimscc11'] = 'Формат резервной копии IMS CC 1.1';
$string['backupformatmoodle1'] = 'Moodle 1';
$string['backupformatmoodle2'] = 'Moodle 2';
$string['backupformatunknown'] = 'Неизвестный формат';
$string['backuplog'] = 'Техническая информация и предупреждения';
$string['backupmode'] = 'Режим';
$string['backupmode10'] = 'Общий';
$string['backupmode20'] = 'Импорт';
$string['backupmode30'] = 'Каталог';
$string['backupmode40'] = 'Тот же самый сайт';
$string['backupmode50'] = 'Автоматизированный';
$string['backupmode60'] = 'Конвертированный';
$string['backupmode70'] = 'Асинхронный';
$string['backupsection'] = 'Резервное копирование раздела курса: {$a}';
$string['backupsettings'] = 'Настройки резервного копирования';
$string['backupsitedetails'] = 'Описание сайта';
$string['backupstage16action'] = 'Продолжить';
$string['backupstage1action'] = 'Далее';
$string['backupstage2action'] = 'Далее';
$string['backupstage4action'] = 'Выполнить резервное копирование';
$string['backupstage8action'] = 'Продолжить';
$string['backuptype'] = 'Тип';
$string['backuptypeactivity'] = 'Элементы курса';
$string['backuptypecourse'] = 'Курс';
$string['backuptypesection'] = 'Раздел';
$string['backupversion'] = 'Версия резервной копии';
$string['cannotfindassignablerole'] = 'Роли «{$a}» из файла резервной копии не соответствует ни одной из тех, которые Вам разрешено назначать.';
$string['choosefilefromactivitybackup'] = 'Область резервных копий элементов курса';
$string['choosefilefromactivitybackup_help'] = 'Здесь хранятся резервные копии, выполненные с использованием настроек по умолчанию.';
$string['choosefilefromautomatedbackup'] = 'Автоматически созданные резервные копии';
$string['choosefilefromautomatedbackup_help'] = 'Содержит автоматически созданные резервные копии.';
$string['choosefilefromcoursebackup'] = 'Область резервных копий курса';
$string['choosefilefromcoursebackup_help'] = 'Здесь хранятся резервные копии, выполненные с использованием настроек по умолчанию.';
$string['choosefilefromuserbackup'] = 'Личная область пользователя для резервных копий';
$string['choosefilefromuserbackup_help'] = 'Здесь хранятся резервные копии курсов, выполненные с отмеченным параметром «Обезличить данные пользователей».';
$string['configgeneralactivities'] = 'Включать ли по умолчанию элементы курса в резервную копию.';
$string['configgeneralanonymize'] = 'При включении этого параметра вся касающаяся пользователей информация по умолчанию будет обезличиваться (делаться анонимной).';
$string['configgeneralbadges'] = 'Включать ли по умолчанию значки в резервную копию.';
$string['configgeneralblocks'] = 'Включать ли по умолчанию блоки в резервную копию.';
$string['configgeneralcalendarevents'] = 'По умолчанию включать события календаря в резервную копию.';
$string['configgeneralcomments'] = 'Включать ли по умолчанию комментарии в резервную копию.';
$string['configgeneralcompetencies'] = 'По умолчанию включать компетенции в резервную копию.';
$string['configgeneralcontentbankcontent'] = 'По умолчанию включать содержимое банка контеннта в резервную копию.';
$string['configgeneralfiles'] = 'Устанавливает значение по умолчанию для включения файлов в резервную копию. Обратите внимание: отключение этого параметра приведет к созданию резервной копии, содержащей только ссылки на файлы. Это не проблема, если резервная копия восстанавливается на том же сайте, а файлы не были удалены в соответствии с настройкой «Очищать корзину» (filescleanupperiod).';
$string['configgeneralfilters'] = 'Включать ли по умолчанию фильтры в резервную копию.';
$string['configgeneralgroups'] = 'По умолчанию включать группы и потоки в резервную копию.';
$string['configgeneralhistories'] = 'Включать ли по умолчанию историю пользователей в резервную копию.';
$string['configgenerallogs'] = 'При включеном параметре в резервные копии по умолчанию будут включаться записи журнала событий.';
$string['configgeneralquestionbank'] = 'При включенном параметре в резервные копии по умолчанию будет включен банк вопросов. ОБРАТИТЕ ВНИМАНИЕ: выключение этого параметра отключит резервное копирование элементов курса,  использующих  банк вопросов (например, тестов).';
$string['configgeneralroleassignments'] = 'Если параметр включен, то назначения ролей тоже будут сохраняться в резервной копии.';
$string['configgeneralusers'] = 'Включать ли по умолчанию пользователей в резервную копию.';
$string['configgeneraluserscompletion'] = 'При включенном параметре в резервные копии по умолчанию будет включена информация о прохождении курса пользователями.';
$string['config_keep_groups_and_groupings'] = 'По умолчанию сохранить текущие группы и группировки.';
$string['config_keep_roles_and_enrolments'] = 'По умолчанию сохранить текущие роли и зачисления на курс.';
$string['configloglifetime'] = 'Этот параметр определяет длительность хранения резервных копий информации журналов событий. Журналы, которые старше этого возраста, автоматически удаляются. Рекомендуется, чтобы это значение было маленьким, поскольку резервные копии информации журналов могут быть очень большими.';
$string['config_overwrite_conf'] = 'Позволить пользователю перезаписывать текущую конфигурацию курса';
$string['config_overwrite_course_fullname'] = 'По умолчанию перезаписать полное имя курса из файла резервной копии. Для этого требуется выбор параметра «Перезапись конфигурации курса» и текущий пользователь, должен иметь право изменять полное имя курса (moodle/course:changefullname)';
$string['config_overwrite_course_shortname'] = 'По умолчанию перезаписать краткое имя курса из файла резервной копии. Для этого требуется выбор параметра «Перезапись конфигурации курса» и текущий пользователь, должен иметь право изменять краткое имя курса (moodle/course:changeshortname)';
$string['config_overwrite_course_startdate'] = 'По умолчанию перезаписывать дату начала курса из файла резервной копии. Для этого требуется выбор параметра «Перезапись конфигурации курса» и текущий пользователь, должен иметь право изменять дату начала курса при восстановлении (moodle/restore:rolldates)';
$string['configrestoreactivities'] = 'По умолчанию восстанавливать элементы курса.';
$string['configrestorebadges'] = 'По умолчанию восстанавливать значки.';
$string['configrestoreblocks'] = 'По умолчанию восстанавливать блоки.';
$string['configrestorecalendarevents'] = 'По умолчанию восстанавливать событий календаря.';
$string['configrestorecomments'] = 'По умолчанию восстанавливать комментарии.';
$string['configrestorecompetencies'] = 'По умолчанию восстанавливать компетенции.';
$string['configrestoreenrolments'] = 'По умолчанию восстанавливать способы зачисления на курс.';
$string['configrestorefilters'] = 'По умолчанию восстанавливать фильтры.';
$string['configrestoregroups'] = 'По умолчанию восстанавливать группы и потоки, если они включены в резервную копию.';
$string['configrestorehistories'] = 'По умолчанию восстанавливать историю пользователя, если она включена в резервную копию.';
$string['configrestorelogs'] = 'При включенном параметре журналы событий по умолчанию будут восстановлены, если они включены в резервную копию.';
$string['configrestoreroleassignments'] = 'При включенном параметре назначения ролей по умолчанию будут восстановлены, если они включены в резервную копию.';
$string['configrestoreusers'] = 'По умолчанию восстанавливать пользователей, если они включены в резервную копию.';
$string['configrestoreuserscompletion'] = 'При включенном параметре информация о прохождении курса пользователями будет по умолчанию восстановлена, если она включена в резервную копию.';
$string['confirmcancel'] = 'Отменить резервное копирование';
$string['confirmcancelimport'] = 'Отменить импорт';
$string['confirmcancelno'] = 'Не отменять';
$string['confirmcancelquestion'] = 'Вы уверены, что хотите отменить? Вся информация, которую Вы ввели, будет потеряна.';
$string['confirmcancelrestore'] = 'Отменить восстановление';
$string['confirmcancelyes'] = 'Отменить резервное копирование';
$string['confirmnewcoursecontinue'] = 'Предупреждение - новый курс';
$string['confirmnewcoursecontinuequestion'] = 'При восстановлении курса будет создан временный (скрытый) курс. Чтобы прервать восстановление нажмите кнопку Отмена. Не закрывайте браузер при восстановлении.';
$string['copycoursedesc'] = 'Этот курс будет продублирован и помещен в выбранную категорию';
$string['copycourseheading'] = 'Скопировать курс';
$string['copycoursetitle'] = 'Копировать курс: {$a}';
$string['copydest'] = 'Место назначения';
$string['copyingcourse'] = 'Выполняется копирование курса';
$string['copyingcourseshortname'] = 'копирование';
$string['copyop'] = 'Текущая операция';
$string['copyprogressheading'] = 'Выполняется копирование курса';
$string['copyprogressheading_help'] = 'Эта таблица показывает состояние всех ваших незавершенных копий курса.';
$string['copyprogresstitle'] = 'Ход копирования курса';
$string['copyreturn'] = 'Скопировать и вернуться';
$string['copysource'] = 'Источник';
$string['copyview'] = 'Скопировать и показать';
$string['coursecategory'] = 'Категория, в которую будет восстановлен курс';
$string['courseid'] = 'Исходный ID';
$string['coursesettings'] = 'Настройки курса';
$string['coursetitle'] = 'Название';
$string['currentstage1'] = 'Первоначальная настройка';
$string['currentstage16'] = 'Завершение';
$string['currentstage2'] = 'Настройка схемы';
$string['currentstage4'] = 'Обзор и подтверждение';
$string['currentstage8'] = 'Резервное копирование';
$string['enableasyncbackup'] = 'Включить асинхронное резервное копирование';
$string['enableasyncbackup_help'] = 'Если эта функция включена, все операции резервного копирования и восстановления будут выполняться асинхронно. Это не влияет на импорт и экспорт. Асинхронное резервное копирование и восстановление позволяет пользователям выполнять другие операции во время резервного копирования или восстановления.';
$string['enterasearch'] = 'Введите искомое';
$string['error_block_for_module_not_found'] = 'Найден устаревший блок курса (id: {$a->bid}) для модуля курса (id: {$a->mid}). Этот блок не будет включен в резервную копию.';
$string['errorcopyingbackupfile'] = 'Не удалось скопировать файл резервной копии во временную папку перед восстановлением.';
$string['error_course_module_not_found'] = 'Найден устаревший модуль курса (ID: {$a}). Этот модуль не будет включен в резервную копию.';
$string['errorfilenamemustbezip'] = 'Указанный файл должен быть ZIP-архивом и иметь расширение .mbz';
$string['errorfilenamerequired'] = 'Вы должны ввести корректное имя файла этой резервной копии';
$string['errorfilenametoolong'] = 'Имя файла должно быть длиной менее 255 символов.';
$string['errorinvalidformat'] = 'Неизвестный формат резервной копии.';
$string['errorinvalidformatinfo'] = 'Выбранный файл не является корректным файлом резервной копии Moodle и не может быть восстановлен.';
$string['errorminbackup20version'] = 'Этот файл резервной копии был создан в версии Moodle ({$a->backup}). Минимально возможная версия - {$a->min}. Файл не может быть восстановлен.';
$string['errorrestorefrontpagebackup'] = 'На главную страницу сайта можно восстановить только резервные копии главной страницы.';
$string['executionsuccess'] = 'Файл резервной копии успешно создан.';
$string['failed'] = 'Ошибка резервного копирования';
$string['filealiasesrestorefailures'] = 'Сбой восстановления псевдонима';
$string['filealiasesrestorefailures_help'] = 'Псевдонимы являются символическими ссылками на другие файлы, в том числе те, которые хранятся во внешних хранилищах. В некоторых случаях, Moodle не может восстановить их - например, при восстановлении резервной копии в другом сайте или если указанный файл не существует.

Подробности и реальная причина сбоя может быть найдена в файле журнала восстановления.';
$string['filealiasesrestorefailuresinfo'] = 'Некоторые псевдонимы файлов, включенные в резервную копию, не могут быть восстановлены. Ниже приводится список, содержащий их ожидаемое расположение и исходный файл, где они ссылаются на первоначальный сайт.';
$string['filename'] = 'Имя файла';
$string['filereferencesincluded'] = 'В резервную копию включены файлы, ссылающиеся на внешнее содержимое. Они не будут работать при восстановлении резервной копии на другом сайте.';
$string['filereferencesnotsamesite'] = 'Файл резервной копии взят с другого сайта, поэтому ссылающиеся файлы не могут быть восстановлены.';
$string['filereferencessamesite'] = 'Файл резервной копии получен с этого сайта, поэтому ссылающиеся файлы могут быть восстановлены.';
$string['generalactivities'] = 'Включать элементы и ресурсы';
$string['generalanonymize'] = 'Обезличивать данные';
$string['generalbackdefaults'] = 'Настройки резервного копирования по умолчанию';
$string['generalbadges'] = 'Включать значки';
$string['generalblocks'] = 'Включать блоки';
$string['generalcalendarevents'] = 'Включать события календаря';
$string['generalcomments'] = 'Включать комментарии';
$string['generalcompetencies'] = 'Включать компетенции';
$string['generalcontentbankcontent'] = 'Включить содержимое банка контента';
$string['generalenrolments'] = 'Включать способы зачисления на курс';
$string['generalfiles'] = 'Включать файлы';
$string['generalfilters'] = 'Включать фильтры';
$string['generalgradehistories'] = 'Включать историю оценок';
$string['generalgroups'] = 'Включать группы и потоки';
$string['generalhistories'] = 'Включать историю';
$string['generallogs'] = 'Включать журналы событий';
$string['generalquestionbank'] = 'Включать банк вопросов';
$string['generalrestoredefaults'] = 'Общие настройки восстановления по умолчанию';
$string['generalrestoresettings'] = 'Общие настройки восстановления';
$string['generalroleassignments'] = 'Включать назначения ролей';
$string['generalsettings'] = 'Общие настройки резервного копирования';
$string['generalusers'] = 'Включать пользователей';
$string['generaluserscompletion'] = 'Включать информацию о прохождении курса пользователями';
$string['hidetypes'] = 'Скрыть типы параметров';
$string['importbackupstage16action'] = 'Продолжить';
$string['importbackupstage1action'] = 'Далее';
$string['importbackupstage2action'] = 'Далее';
$string['importbackupstage4action'] = 'Выполнить импорт';
$string['importbackupstage8action'] = 'Продолжить';
$string['importcurrentstage0'] = 'Выбор курса';
$string['importcurrentstage1'] = 'Первоначальная настройка';
$string['importcurrentstage16'] = 'Завершение';
$string['importcurrentstage2'] = 'Настройка схемы';
$string['importcurrentstage4'] = 'Просмотр и подтверждение';
$string['importcurrentstage8'] = 'Импорт';
$string['importfile'] = 'Импорт файла резервной копии';
$string['importgeneralduplicateadminallowed'] = 'Включить разрешение конфликта учетных записей admin';
$string['importgeneralduplicateadminallowed_desc'] = 'Если на сайте имеется учетная запись с именем пользователя admin, то при попытке восстановить файл резервной копии, содержащий учетную запись с именем admin может возникнуть конфликт. Если этот параметр включен, то конфликт решается заменой имени пользователя в файле резервной копии на admin_xyz.';
$string['importgeneralmaxresults'] = 'Максимальное количество курсов в списке для импорта';
$string['importgeneralmaxresults_desc'] = 'Устанавливает количество курсов, которые выводятся на первом этапе процесса импорта';
$string['importgeneralsettings'] = 'Основные настройки импорта по умолчанию';
$string['importrootsettings'] = 'Настройки импорта';
$string['importsettings'] = 'Общие параметры импорта';
$string['importsuccess'] = 'Импорт завершен. Нажмите «Продолжить» для возвращения к курсу.';
$string['includeactivities'] = 'Включить:';
$string['includeditems'] = 'Включенные элементы:';
$string['includefilereferences'] = 'Файлы, ссылающиеся на внешнее содержимое';
$string['includesection'] = 'Раздел {$a}';
$string['includeuserinfo'] = 'Данные пользователей';
$string['inprogress'] = 'Выполняется резервное копирование';
$string['jumptofinalstep'] = 'Переход к конечному этапу';
$string['keep'] = 'Сохранить';
$string['keptroles'] = 'Включить назначения ролей';
$string['keptroles_help'] = 'Пользователи с выбранными ролями будут записаны на новый курс. Никакие данные пользователя не будут скопированы, если не включен параметр «Включить данные пользователя».';
$string['locked'] = 'Заблокировано';
$string['lockedbyconfig'] = 'Этот параметр был заблокирован настройкой резервного копирования по умолчанию';
$string['lockedbyhierarchy'] = 'Заблокировано из-за зависимости';
$string['lockedbypermission'] = 'У Вас недостаточно прав для изменения этого параметра';
$string['loglifetime'] = 'Хранить журналы';
$string['managefiles'] = 'Управление файлами резервных копий';
$string['mergerestoredefaults'] = 'Настройки восстановления по умолчанию при слиянии с другим курсом';
$string['missingfilesinpool'] = 'Некоторые файлы не могут быть сохранены во время резервного копирования, поэтому их восстановление будет невозможно.';
$string['module'] = 'Модуль';
$string['moodleversion'] = 'Версия Moodle';
$string['morecoursesearchresults'] = 'Найдено более {$a} курсов, отображаются только первые {$a} результатов.';
$string['moreresults'] = 'Слишком много результатов, введите более четкие критерии поиска.';
$string['nomatchingcourses'] = 'Нет подходящих курсов';
$string['norestoreoptions'] = 'Нет категорий или курсов в которых Вы можете осуществлять восстановление';
$string['originalwwwroot'] = 'URL резервной копии';
$string['overwrite'] = 'Заменить';
$string['pendingasyncdeletedetail'] = 'Идет подготовка к асинхронному резервному копированию курса. <br/> Курсы не могут быть удалены до завершения резервного копирования.';
$string['pendingasyncdetail'] = 'Асинхронное резервное копирование позволяет пользователю одновременно иметь только одно задание резервного копирования для ресурса. <br/> Многочисленные асинхронные резервные копии одного и того же ресурса не могут быть поставлены в очередь, так как это, скорее всего, приведет к созданию нескольких резервных копий с одним и тем же содержимым.';
$string['pendingasyncedit'] = 'Идет подготовка к асинхронному резервному копированию курса. Пожалуйста, не редактируйте этот курс, пока резервное копирование не будет завершено.';
$string['pendingasyncerror'] = 'Подготовка резервного копирования для этого ресурса';
$string['preparingdata'] = 'Подготовка данных';
$string['preparingui'] = 'Подготовка страницы к показу';
$string['previousstage'] = 'Назад';
$string['privacy:metadata:backup_controllers'] = 'Список операций резервного копирования';
$string['privacy:metadata:backup_controllers:itemid'] = 'ID курса';
$string['privacy:metadata:backup_controllers:operation'] = 'Выполненная операция, например, восстановление.';
$string['privacy:metadata:backup_controllers:timecreated'] = 'Время, когда действие было создано';
$string['privacy:metadata:backup_controllers:timemodified'] = 'Время, когда действие было изменено';
$string['privacy:metadata:backup_controllers:type'] = 'Тип объекта, с которым выполнялась операция, например, элемент.';
$string['privacy:metadata:backup:detailsofarchive'] = 'Этот архив может содержать разнообразные данные пользователей, связанных с курсом, такие как оценки, запись пользователей на курс и данные об активности.';
$string['privacy:metadata:backup:externalpurpose'] = 'Цель этого архива — хранить информацию, связанную с курсом, которая может быть в будущем восстановлена.';
$string['qcategory2coursefallback'] = 'Категория вопросов «{$a->name}», находящаяся в файле резервной копии в контексте системы или категории курсов, при восстановлении будет создана в контексте курса.';
$string['qcategorycannotberestored'] = 'Категория вопросов «{$a->name}» не может быть создана при восстановлении';
$string['question2coursefallback'] = 'Категория вопросов «{$a->name}», находящаяся в файле резервной копии в контексте системы или категории курсов, при восстановлении будет создана в контексте курса.';
$string['questionegorycannotberestored'] = 'Вопросы «{$a->name}» не могут быть созданы при восстановлении';
$string['recyclebin_desc'] = 'Обратите внимание, что эти настройки также будут использоваться для корзины.';
$string['replacerestoredefaults'] = 'Настройки по умолчанию при восстановлении в другой курс с предварительным удалением его содержимого';
$string['restoreactivity'] = 'Восстановить элементы курса';
$string['restorecourse'] = 'Восстановить курс';
$string['restorecoursesettings'] = 'Настройки курса';
$string['restoreexecutionsuccess'] = 'Курс успешно восстановлен. Для перехода к восстановленному курсу нажмите «Продолжить».';
$string['restorefileweremissing'] = 'Некоторые файлы не могут быть восстановлены, так как они отсутствуют в резервной копии.';
$string['restorenewcoursefullname'] = 'Название нового курса';
$string['restorenewcourseshortname'] = 'Краткое название нового курса';
$string['restorenewcoursestartdate'] = 'Дата начала нового курса';
$string['restorerolemappings'] = 'Восстановить сопоставления роли';
$string['restorerootsettings'] = 'Настройки восстановления';
$string['restoresection'] = 'Восстановить раздел';
$string['restorestage1'] = 'Подтверждение';
$string['restorestage16'] = 'Обзор';
$string['restorestage16action'] = 'Приступить к восстановлению';
$string['restorestage1action'] = 'Далее';
$string['restorestage2'] = 'Назначение';
$string['restorestage2action'] = 'Далее';
$string['restorestage32'] = 'Процесс';
$string['restorestage32action'] = 'Продолжить';
$string['restorestage4'] = 'Настройки';
$string['restorestage4action'] = 'Далее';
$string['restorestage64'] = 'Завершение';
$string['restorestage64action'] = 'Продолжить';
$string['restorestage8'] = 'Схема';
$string['restorestage8action'] = 'Далее';
$string['restoretarget'] = 'Куда восстановить';
$string['restoretocourse'] = 'Восстановить в курс:';
$string['restoretocurrentcourse'] = 'Восстановить в этот курс';
$string['restoretocurrentcourseadding'] = 'Добавить в этот курс';
$string['restoretocurrentcoursedeleting'] = 'Удалить содержимое этого курса, а затем восстановить';
$string['restoretoexistingcourse'] = 'Восстановить в существующий курс';
$string['restoretoexistingcourseadding'] = 'Добавить в существующий курс';
$string['restoretoexistingcoursedeleting'] = 'Удалить содержимое существующего курса, а затем восстановить';
$string['restoretonewcourse'] = 'Восстановить как новый курс';
$string['restoringcourse'] = 'Идет процесс восстановления курса';
$string['restoringcourseshortname'] = 'идет восстановление';
$string['rootenrolmanual'] = 'Восстанавливать как зачисление на курс вручную';
$string['rootsettingactivities'] = 'Включать элементы и ресурсы';
$string['rootsettinganonymize'] = 'Обезличить данные пользователей';
$string['rootsettingbadges'] = 'Включать значки';
$string['rootsettingblocks'] = 'Включать блоки';
$string['rootsettingcalendarevents'] = 'Включать события календаря';
$string['rootsettingcomments'] = 'Включать комментарии';
$string['rootsettingcompetencies'] = 'Включать компетенции';
$string['rootsettingcontentbankcontent'] = 'Включить содержимое банка контента';
$string['rootsettingcustomfield'] = 'Включить пользовательские поля';
$string['rootsettingenrolments'] = 'Включать способы зачисления на курс';
$string['rootsettingenrolments_always'] = 'Да, всегда';
$string['rootsettingenrolments_never'] = 'Нет, восстанавливать пользователей вручную';
$string['rootsettingenrolments_withusers'] = 'Да, но только если пользователи включены';
$string['rootsettingfiles'] = 'Включать файлы';
$string['rootsettingfilters'] = 'Включать фильтры';
$string['rootsettinggradehistories'] = 'Включать историю оценок';
$string['rootsettinggroups'] = 'Включать группы и потоки';
$string['rootsettingimscc1'] = 'Сконвертировать в формат резервной копии IMS СС 1.0';
$string['rootsettingimscc11'] = 'Сконвертировать в формат резервной копии IMS СС 1.1';
$string['rootsettinglogs'] = 'Включать журналы событий курса';
$string['rootsettingquestionbank'] = 'Включать банк вопросов';
$string['rootsettingroleassignments'] = 'Включать назначенные пользователям роли';
$string['rootsettings'] = 'Настройки резервного копирования';
$string['rootsettingusers'] = 'Включать зачисленных пользователей';
$string['rootsettinguserscompletion'] = 'Включать информацию о завершении пользователем элементов курса';
$string['samesitenotification'] = 'Эта резервная копия была создана только со ссылками на файлы, а не на сами файлы. Восстановление будет работать только на этом сайте.';
$string['sectionactivities'] = 'Элементы курса';
$string['sectioninc'] = 'Включено в резервную копию (без пользовательской информации)';
$string['sectionincanduser'] = 'Включено в резервную копию с пользовательской информацией';
$string['selectacategory'] = 'Выберите категорию';
$string['selectacourse'] = 'Выберите курс';
$string['setting_course_fullname'] = 'Название курса';
$string['setting_course_shortname'] = 'Краткое название курса';
$string['setting_course_startdate'] = 'Дата начала курса';
$string['setting_keep_groups_and_groupings'] = 'Оставить текущие группы и потоки';
$string['setting_keep_roles_and_enrolments'] = 'Оставить текущие роли и записанных участников';
$string['setting_overwrite_conf'] = 'Заменить настройки курса';
$string['setting_overwrite_course_fullname'] = 'Заменить полное имя курса';
$string['setting_overwrite_course_shortname'] = 'Заменить короткое имя курса';
$string['setting_overwrite_course_startdate'] = 'Заменить дату начала курса';
$string['showtypes'] = 'Показать типы параметров';
$string['sitecourseformatwarning'] = 'Это резервная копия главной страницы. Обратите внимание, что она может быть восстановлена только на главную страницу.';
$string['skiphidden'] = 'Пропускать скрытые курсы';
$string['skiphiddenhelp'] = 'Выберите, следует ли пропускать скрытые курсы';
$string['skipmodifdays'] = 'Пропускать курсы, не изменившиеся с';
$string['skipmodifdayshelp'] = 'Пропускать ли курсы, не изменившиеся на протяжении указанного количества дней';
$string['skipmodifprev'] = 'Пропускать курсы, не изменившиеся с предыдущего создания резервной копии';
$string['skipmodifprevhelp'] = 'Пропускать ли курсы, не изменившиеся с предыдущего создания резервной копии. Для этого необходимо, чтобы было включено ведение журнала событий.';
$string['status'] = 'Статус';
$string['storagecourseandexternal'] = 'Область курса для резервных копий и указанный каталог';
$string['storagecourseonly'] = 'Область курса для резервных копий';
$string['storageexternalonly'] = 'Указанный каталог для автоматически созданных резервных копий';
$string['successful'] = 'Резервное копирование успешно';
$string['successfulcopy'] = 'Копирование завершено';
$string['successfulrestore'] = 'Восстановление успешно';
$string['timetaken'] = 'Прошло времени';
$string['title'] = 'Название';
$string['totalcategorysearchresults'] = 'Всего категорий: {$a}';
$string['totalcoursesearchresults'] = 'Всего курсов: {$a}';
$string['undefinedrolemapping'] = 'Соответствие роли не определено для образца «{$a}».';
$string['unnamedsection'] = 'Безымянный раздел';
$string['userdata'] = 'Включить пользовательские данные';
$string['userdata_help'] = 'Если включено, то данные пользователя, такие как сообщения форумов, отправленные задания и т. п.,  будут скопированы в новый курс для каждого пользователя, роль которого выбрана в разделе «Включить назначения ролей»';
$string['userinfo'] = 'Информация о пользователе';