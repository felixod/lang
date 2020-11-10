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
 * @subpackage questionnaire
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activityoverview'] = 'У вас есть анкеты, которые должны быть заполнены';
$string['addnewsection'] = 'Добавить новый раздел';
$string['addquestion'] = 'Добавить вопрос...';
$string['addquestions'] = 'Добавить вопрос';
$string['addquestiontosection'] = 'Добавить вопрос в раздел';
$string['allnameddegrees'] = 'Названные степени';
$string['allnameddegrees_help'] = 'Укажите текст для отображения значений скорости вместо числа. Оставьте значение пустым, чтобы не использовать его.';
$string['answer'] = 'Ответ';
$string['answergiven'] = 'Этот ответ представлен';
$string['answernotgiven'] = 'Этот ответ не представлен';
$string['answerquestions'] = 'Ответьте на вопросы ...';
$string['answers'] = 'Ответы';
$string['attemptstillinprogress'] = 'В процессе. Сохранено на:';
$string['autonumbering'] = 'Автонумерация';
$string['autonumbering_help'] = 'Автоматическая нумерация вопросов и страниц. Вы можете отключить автоматическую нумерацию для анкеты с условным ветвлением.';
$string['averagesrow'] = 'Средние значения (если применимо):';
$string['condition'] = 'Состояние';
$string['configemailreporting'] = 'Разрешить отчёты по электронной почте';
$string['configemailreportinglong'] = 'Позволяет отправлять некоторые отчёты по электронной почте непосредственно на указанные адреса электронной почты.';
$string['configmaxsections'] = 'Максимальный размер обратной связи';
$string['confirmdeletesection'] = 'Вы уверены, что хотите удалить раздел обратной связи "{$a}"?';
$string['confirmremovequestion'] = 'Вы уверены, что хотите удалить вопрос "{$a->qname}" из раздела "{$a->sname}"?';
$string['crontask'] = 'Задание по очистке анкеты';
$string['dependencies'] = 'Зависимости';
$string['didnotrespondtoquestion'] = 'Не ответил на вопрос';
$string['directwarnings'] = 'Прямые зависимости от этого вопроса будут удалены. Это повлияет на:';
$string['downloadpdf'] = 'Скачать PDF файл';
$string['downloadtypes'] = 'Тип отчёта';
$string['editingfeedback'] = 'Редактирование настроек обратной связи';
$string['emailextra'] = 'Отправлять на электронную почту';
$string['emailextra_help'] = 'Будет отправлен файл загрузки на указанные адреса электронной почты, разделённые запятыми. Обратите внимание, что никакая проверка безопасности или конфиденциальности не выполняется. чтобы получить к нему доступ, в настройках модуля должна быть включена опция "разрешить отчёты по электронной почте".';
$string['emailsend'] = 'Отправить отчёты';
$string['emailsnotspecified'] = 'Электронная почта(ы) не была указана.';
$string['essaybox'] = 'Поле эссе';
$string['feedbackdefaultlabel'] = '[Новый раздел]';
$string['feedbacksectionquestions'] = '{$a} вопросы раздела';
$string['includeincomplete'] = 'Включить неполные ответы';
$string['includerankaverages'] = 'Включить средние значения вопросов ранга';
$string['indirectwarnings'] = 'В этом списке показаны косвенные зависимые вопросы и оставшиеся зависимости для прямых зависимых вопросов:';
$string['invalidsectionid'] = 'Указан неверный раздел обратной связи.';
$string['mandatory'] = 'Обязательно - Все эти зависимости должны быть выполнены.';
$string['messageprovider:notification'] = 'Представление анкеты';
$string['navigatetosection'] = 'Перейдите в раздел обратная связь';
$string['notificationfull'] = 'Полный ответ';
$string['notifications'] = 'Отправка уведомлений об ответе';
$string['notificationsimple'] = 'Только уведомление';
$string['notrequired'] = 'Ответ не требуется';
$string['notset'] = 'не установлено';
$string['option'] = 'параметр {$a}';
$string['optional'] = 'Необязательно - Хотя бы одна из этих зависимостей должна быть выполнена.';
$string['parent'] = 'Родитель';
$string['questionnaire:submissionnotification'] = 'Получать уведомления по каждой заявке';
$string['removenotinuse'] = 'Этот вопросник раньше зависел от публичного вопросника, который был удалён. Он больше не может быть использован и должен быть удалён.';
$string['required_help'] = 'Если Вы выберите «Да», то ответ на этот вопрос будет обязательным, то есть респондент не сможет сдать ответы на анкетный опрос, пока не ответит на этот вопрос.';
$string['search:activity'] = 'Анкета - информация о деятельности';
$string['search:question'] = 'Анкета - вопросы';
$string['set'] = 'набор';
$string['show_nonrespondents'] = 'Показать не ответевших';
$string['submissionnotificationsubject'] = 'Представление новой анкеты';
$string['submissionnotificationtextanon'] = 'Это новый ответ ({$a->submissionurl}) на анкету "{$a->name}".';
$string['submissionnotificationtextuser'] = '{$a->username} ({$a->profileurl}) имеет новый ответ ({$a->submissionurl}) на анкету "{$a->name}" в курсе "{$a->coursename}".';
$string['summaryreportattached'] = 'Анкета краткий отчёт прилагается';
$string['thousands'] = 'Не используйте разделители тысяч.';
$string['totalofnumbers'] = 'Общее количество введённых чисел';
$string['totalresponses'] = 'Общее количество ответов на вопрос';
