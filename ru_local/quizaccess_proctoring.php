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
 * @subpackage proctoring
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Действия';
$string['camhtml'] = '<div class="camera"> <video id="video">Видеопоток недоступен.</video></div> <canvas id="canvas" style="display:none;"> </canvas> <img style="display:none;" id="photo" alt="Снимок экрана появится в этом поле."/>';
$string['dateverified'] = 'Дата и время';
$string['eprotroringreports'] = 'Отчет о проверке личности для:';
$string['eprotroringreportsdesc'] = 'В этом отчете вы найдете все изображения учащихся, сделанные во время экзамена. С их помощью Вы можете подтвердить их личность, например, сравнив их с фотографией в профиле или другим источником информации.';
$string['event:screenshotcreated'] = 'Создан новый снимок';
$string['event:screenshotupdated'] = 'Снимок обновлен';
$string['event:takescreenshot'] = 'Снимок получен';
$string['name'] = 'Имя учащегося';
$string['notpermissionreport'] = 'Отчеты о проверке личности для Вас недоступны.';
$string['notrequired'] = 'Не требуется';
$string['openwebcam'] = 'Разрешите использовать Вашу веб-камеру для продолжения работы';
$string['picturesreport'] = 'Посмотреть отчет проктора';
$string['picturesusedreport'] = 'Фотографии, сделанные во время тестирования.';
$string['pluginname'] = 'Прокторинг';
$string['privacy:core_files'] = 'QuizAccess. Верификация пользователей в процессе  тестирования с помощью веб-камеры';
$string['privacy:metadata'] = 'Мы не передаем никакие личные данные третьим лицам.';
$string['privacy:metadata:core_files'] = 'В Quiz Access хранятся фотографии пользователей, снятые веб-камерой во время тестирования.';
$string['privacy:metadata:courseid'] = 'Идентификатор курса, в котором используется верификация.';
$string['privacy:metadata:quizaccess_proctoring_logs'] = 'Moodle Quiz получает доступ к таблице журналов верификации пользователей, в которой хранятся ссылки на фотографии пользователя.';
$string['privacy:metadata:quizid'] = 'Идентификатор теста, в котором используется верификация.';
$string['privacy:metadata:status'] = 'Статус прокторинга.';
$string['privacy:metadata:webcampicture'] = 'Название фотографии, сделанной в процессе верификации.';
$string['privacy:quizaccess_proctoring_logs'] = 'Журналы верификации QuizAccess';
$string['proctoring:getcamshots'] = 'Получать фотографии с веб-камеры во время верификации';
$string['proctoring:sendcamshot'] = 'Отправлять фотографии с веб-камеры во время верификации';
$string['proctoring:viewreport'] = 'Просмотреть отчет верификации';
$string['proctoringheader'] = '<strong>Чтобы продолжить эту попытку тестирования Вы должны разрешить браузеру использовать Вашу веб-камеру. В процессе тестирования она сделает несколько случайных снимков и отправит их ВАШЕМУ преподавателю в качестве подтверждения Вашей личности.</strong>';
$string['proctoringlabel'] = 'Я согласен пройти процедуру верификации.';
$string['proctoringrequired'] = 'Проверка личности с помощью веб-камеры';
$string['proctoringrequired_help'] = 'Если вы включите эту опцию, учащиеся не смогут начать тестирование, пока не установят флажок, подтверждающий, что они осведомлены о политике верификации с помощью веб-камеры.';
$string['proctoringrequiredoption'] = 'Верифицировать';
$string['proctoringstatement'] = 'Этот тест требует прохождения процедуры верификации с помощью веб-камеры. Перед началом тестирования Вы должны разрешить использовать Вашу веб-камеру. В процессе тестирования она будет делать случайные снимки и отправлять их ВАШЕМУ преподавателю <br /> (Разрешите вашему веб-браузеру доступ к вашей камере).';
$string['quizaccess_proctoring'] = 'Тестирование с прокторингом';
$string['setting:autoreconfigureproctoring'] = 'Автоматическая настройка прокторинга';
$string['setting:autoreconfigureproctoring_desc'] = 'Если этот параметр включен, при переходе между вопросами теста будет сделан снимок экрана';
$string['setting:proctoringreconfigureproctoring'] = 'Автоматическая настройка прокторинга';
$string['setting:proctoringreconfigureproctoring_desc'] = 'Если этот параметр включен, при переходе между вопросами теста будет сделан снимок экрана';
$string['status'] = 'Статус проверки';
$string['timemodified'] = 'Последнее изменение';
$string['webcampicture'] = 'Полученные изображения';
$string['youmustagree'] = 'Перед продолжением вы должны согласиться на подтверждение своей личности.';
