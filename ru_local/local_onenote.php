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
 * @subpackage onenote
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['connction_error'] = 'Не удаётся подключиться к OneNote. Пожалуйста, подождите несколько минут и повторите попытку.';
$string['error_noapiavailable'] = 'API OneNote недоступен. При использовании набора плагинов Office 365 мы не смогли связаться с OneNote. В противном случае, пожалуйста, установите учётную запись local_msaccount.';
$string['errorfeedbackinstudentcontext'] = 'Предпринята попытка создать обратную связь в контексте подачи заявки студентом.';
$string['errornopostdata'] = 'Не удалось создать данные страницы для отправки в OneNote.';
$string['errornosection'] = 'Не удалось получить или создать раздел в записной книжке OneNote';
$string['erroronenoteapibadcall'] = 'Ошибка в вызове API.';
$string['erroronenoteapibadcall_message'] = 'Ошибка в вызове API: {$a}';
$string['errorsubmissioninteachercontext'] = 'Предпринята попытка создать представление из контекста оценки преподавателя.';
$string['feedbacktitle'] = 'Отзыв: {$a->assign_name} [{$a->student_firstname} {$a->student_lastname}]';
$string['onenote_page_error'] = 'Не удалось открыть страницу OneNote для этой отправки или обратной связи.';
$string['submissiontitle'] = 'Ответ: {$a->assign_name} [{$a->student_firstname} {$a->student_lastname}]';
