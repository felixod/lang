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
 * @subpackage assign
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addsubmission_help'] = 'Ваше задание еще не отправлено';
$string['allocatedmarker'] = 'Проверяющий';
$string['allowsubmissionsanddescriptionfromdatesummary'] = 'Назначение деталей и форм доступных заданий <strong>{$a}</strong>';
$string['allowsubmissionsfromdate_help'] = 'Если включено, студенты не смогут сдавать работы до этой даты. Если отключено, студенты смогут начать сдавать работы сразу.';
$string['allowsubmissionsshort'] = 'Разрешить сдавать работы';
$string['alwaysshowdescription_help'] = 'Если отключено, описание заданий становятся видимыми для студентов ранее даты "Разрешить задание".';
$string['applytoteam'] = 'Применить для всей группы';
$string['assign:addinstance'] = 'Добавить новое задание';
$string['assign:grantextension'] = 'Перевод';
$string['assign:revealidentities'] = 'Выявить идентичных студентов';
$string['assignfeedback'] = 'Плагин обратной связи';
$string['assignmentmail'] = '{$a->grader} опубликовал отзыв на ваше задание \'{$a->assignment}\'. Вы можете его увидеть: {$a->url}';
$string['assignmentmailhtml'] = '{$a->grader} опубликовал отзыв на ваше задание \'<i>{$a->assignment}</i>\'<br /><br />. Вы можете <a href="{$a->url}">его увидеть</a>.';
$string['assignmentmailsmall'] = '{$a->grader} опубликовал отзыв на ваше задание \'{$a->assignment}\' . Вы можете его увидеть';
$string['assignmentplugins'] = 'Задания';
$string['assignsubmission'] = 'Работы';
$string['assignsubmissionpluginname'] = 'Работы';
$string['attemptnumber'] = 'Попыток разрешено';
$string['attemptreopenmethod'] = 'Повтор попытки';
$string['attemptreopenmethod_untilpass'] = 'Автоматически';
$string['attemptsettings'] = 'Настройки попыток';
$string['batchoperationconfirmlock'] = 'Заблокировать все выбранные работы?';
$string['batchoperationconfirmreverttodraft'] = 'Вернуть выбранные работы на доработку?';
$string['batchoperationconfirmunlock'] = 'Разблокировать все выбранные работы?';
$string['batchoperationlock'] = 'заблокировать работы';
$string['batchoperationreverttodraft'] = 'вернуть на доработку';
$string['batchoperationsdescription'] = 'С выделенным...';
$string['batchoperationunlock'] = 'разблокировать работы';
$string['choosemarker'] = 'Выберите...';
$string['completionsubmit'] = 'Чтобы завершить, студент должен представить ответ';
$string['confirmbatchgradingoperation'] = 'Вы уверены, что хотите {$a->operation} для {$a->count} студентов?';
$string['confirmsubmission'] = 'Вы уверены, что хотите представить вашу работу для оценки? После этого Вы не сможете больше сделать в ней изменений.';
$string['confirmsubmissionheading'] = 'Подтвердите отправку ответа';
$string['conversionexception'] = 'Не удалось преобразовать задание. Причина: {$a}.';
$string['couldnotconvertgrade'] = 'Не удалось преобразовать задание для пользователя {$a}.';
$string['couldnotcreatenewassignmentinstance'] = 'Не удалось создать новый экземпляр задания.';
$string['couldnotfindassignmenttoupgrade'] = 'Не удалось найти старый экземпляр задания для обновления.';
$string['currentattempt'] = 'Это {$a} попытка.';
$string['currentattemptof'] = 'Это {$a->attemptnumber} попытка (Всего разрешено {$a->maxattempts} попытки).';
$string['downloadall'] = 'Загрузить все работы';
$string['duedatevalidation'] = 'Дата сдачи должна быть после разрешенной даты.';
$string['editattemptfeedback'] = 'Редактировать оценку и отзыв на попытку {$a}.';
$string['editingpreviousfeedbackwarning'] = 'Вы редактируете отзыв на предыдущую попытку. Это {$a->attemptnumber} попытка из {$a->totalattempts}.';
$string['editsubmission_help'] = 'Отправьте задание на проверку!';
$string['enabled'] = 'Включить';
$string['errornosubmissions'] = 'Не выбрано работ для загрузки';
$string['errorrecordmodified'] = 'Оценки не сохранены, потому что некоторые записи были изменены после загрузки страницы.';
$string['extensionduedate'] = 'Увеличить срок выполнения';
$string['extensionnotafterduedate'] = 'Дата увеличения срока должна быть после даты завершения задания';
$string['extensionnotafterfromdate'] = 'Дата увеличения срока должна быть после даты начала сдачи задания';
$string['feedbacktypes'] = 'Вид обратной связи';
$string['filesubmissions'] = 'Файл работы';
$string['filterrequiregrading'] = 'Требуется оценивание';
$string['gradedfollowupsubmit'] = 'Оценено - возможно повторно загрузить работу';
$string['gradedon'] = 'Оцениваются по';
$string['gradeoutof'] = 'Оценка (макс. {$a})';
$string['gradeoutofhelp_help'] = 'В этом поле введите оценку за работу студента. Вы можете использовать не только целые значения.';
$string['gradestudent'] = 'Оценка студента: (id={$a->id}, fullname={$a->fullname}).';
$string['gradingchangessaved'] = 'Оценка сохранена';
$string['gradingoptions'] = 'Параметры';
$string['gradingstudent'] = 'Оценка студентов';
$string['gradingsummary'] = 'Общая оценка';
$string['grantextension'] = 'Увеличить оценку';
$string['grantextensionforusers'] = 'Увеличить оценку для {$a} студентов';
$string['groupsubmissionsettings'] = 'Настройки групповых отчетов';
$string['hideshow'] = 'Скрыть/Показать';
$string['instructionfiles'] = 'Файлы инструкций';
$string['lastmodifiedgrade'] = 'Последнее изменение оценки';
$string['lastmodifiedsubmission'] = 'Последнее изменение работы';
$string['latesubmissions'] = 'Просроченные ответы';
$string['latesubmissionsaccepted'] = 'Только студент(ы) получившие оценки смогут продолжить присылать ответы на задания';
$string['locksubmissions'] = 'Заблокировать работы';
$string['marker'] = 'Проверяющий';
$string['mysubmission'] = 'Моя работа:';
$string['noattempt'] = 'Не было попыток отправить задание';
$string['nofiles'] = 'Нет файлов.';
$string['nograde'] = 'Нет оценок.';
$string['notgraded'] = 'Не оценен';
$string['numberofdraftsubmissions'] = 'Черновики';
$string['numberofsubmissionsneedgrading'] = 'Нуждается в проверке';
$string['numberofsubmittedassignments'] = 'Ответы и отзывы';
$string['offline'] = 'Не требуется предоставления на сайте';
$string['outlinegrade'] = 'Оценка: {$a}';
$string['overdue'] = '<font color="red">Работа просрочена на: {$a}</font>';
$string['pluginadministration'] = 'Администрирование заданий';
$string['preventsubmissionsshort'] = 'Запретить обновление ответов';
$string['quickgrading'] = 'Режим быстрой оценки';
$string['quickgradingchangessaved'] = 'Все изменения были сохранены';
$string['quickgradingresult'] = 'Режим быстрой оценки';
$string['reverttodraft'] = 'Вернуть выбранные ответы к статусу черновика.';
$string['reverttodraftshort'] = 'Вернуть ответ к статусу черновика';
$string['saveallquickgradingchanges'] = 'Сохранить все изменения';
$string['savenext'] = 'Сoхранить и показать следующий';
$string['selectlink'] = 'Выбрать...';
$string['submissionreceipthtml'] = 'Вы отправили отчёт по работе \'<i>{$a->assignment}</i>\'<br /><br /> Результаты проверки Вы можете увидеть по <a href="{$a->url}">следующей ссылке</a>.';
$string['submissionreceiptsmall'] = 'Вы отправили отчет по работе {$a->assignment}';
$string['submissionreceipttext'] = 'Вы отправили отчёт по работе \'{$a->assignment}\' Результаты проверки Вы можете увидеть по адресу: {$a->url}';
$string['submissionslockedshort'] = 'Изменение работы не разрешено';
$string['submissionsnotgraded'] = 'Не оцененных заданий: {$a}';
$string['submissionstatus'] = 'Состояние работы';
$string['submissionstatus_'] = 'Работа не представлена';
$string['submissionstatus_draft'] = 'Черновик (не отправлен)';
$string['submissionstatus_submitted'] = 'Опубликовано для оценивания';
$string['submissionstatusheading'] = 'Состояние работы';
$string['submissiontypes'] = 'Тип ответов';
$string['submitassignment'] = 'Отправить на проверку преподавателю';
$string['unlimitedattempts'] = 'Не ограничено';
$string['unlocksubmissions'] = 'Разблокировать работы';
$string['updategrade'] = 'Обновить оценку';
$string['usergrade'] = 'Пользовательская оценка';
$string['usersubmissioncannotberemoved'] = 'Работа {$a} не может быть удалена.';
$string['viewgradebook'] = 'Отчёт по оценкам';
$string['viewgrading'] = 'Посмотреть/оценить все работы';
$string['viewownsubmissionstatus'] = 'Посмотреть состояние своей работы.';
$string['viewsubmission'] = 'Просмотреть ответы';
$string['viewsubmissionforuser'] = 'Просмотреть ответы пользователя: {$a}';
