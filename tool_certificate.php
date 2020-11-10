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
 * @package    tool
 * @subpackage certificate
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcertpage'] = 'Новая страница';
$string['addelement'] = 'Добавить элемент';
$string['aissueswerecreated'] = 'было выпущено {$a} сертификатов';
$string['aligncentre'] = 'По центру';
$string['alignleft'] = 'По левому краю';
$string['alignment'] = 'Выравнивание текста';
$string['alignment_help'] = 'Выравнивание текста по правому краю будет означать, что координаты элемента (положение X и положение Y) будут связаны с верхней правой границей, по центру - верхняя граница по центру, по левому краю - с верхней левой границей.';
$string['alignright'] = 'По правому краю';
$string['availableincourses'] = 'Доступно в подкатегориях и курсах';
$string['availableincourses_help'] = 'Включив этот параметр, пользователи (с соответствующими правами) смогут использовать этот шаблон в каждом курсе внутри выбранной категории, а также в курсах внутри ее подкатегорий. Если этот параметр отключен, этот шаблон будет доступен исключительно пользователям с правами в выбранной категории.';
$string['certificate'] = 'Сертификат';
$string['certificate_customfield'] = 'Настраиваемые поля сертификатов';
$string['certificate:image'] = 'Управление изображениями сертификатов';
$string['certificate:issue'] = 'Выдавать сертификат для пользователей';
$string['certificate:manage'] = 'Управление сертификатами';
$string['certificate:verify'] = 'Проверить любые сертификаты';
$string['certificate:viewallcertificates'] = 'Просмотреть все шаблоны сертификатов и их выпуск для текущего владельца';
$string['certificatecopy'] = '{$a} (копия)';
$string['certificateimages'] = 'Изображения сертификата';
$string['certificates'] = 'Сертификаты';
$string['certificatesissued'] = 'Выпущенные сертификаты';
$string['certificatesissues'] = 'Выпуск сертификатов';
$string['certificatetemplate'] = 'Шаблон сертификата';
$string['certificatetemplatename'] = 'Название шаблона сертификата';
$string['certificatetemplates'] = 'Шаблоны сертификатов';
$string['changeelementsequence'] = 'Переместить вперед или назад';
$string['code'] = 'QR-код';
$string['codewithlink'] = 'QR-код со сылкой';
$string['coursecategorywithlink'] = 'Категория курса со ссылкой';
$string['createtemplate'] = 'Новый шаблон сертификата';
$string['customfield_previewvalue'] = 'Предварительный просмотр';
$string['customfield_previewvalue_help'] = 'Значение, отображаемое при предварительном просмотре шаблона сертификата';
$string['customfield_visible'] = 'Отобразить';
$string['customfield_visible_help'] = 'Разрешить выбирать это поле в шаблоне сертификата';
$string['customfieldsettings'] = 'Общие настройки настраиваемых полей сертификата';
$string['deleteelement'] = 'Удалить элемент';
$string['deleteelementconfirm'] = 'Вы уверены, что хотите удалить элемент \'{$a}\'?';
$string['deletepage'] = 'Удалить страницу';
$string['deletepageconfirm'] = 'Вы уверены, что хотите удалить эту страницу сертификата?';
$string['deletetemplateconfirm'] = 'Вы действительно хотите удалить шаблон сертификата \'{$a}\' и все связанные с ним данные? Это действие не может быть отменено.';
$string['demotmpl'] = 'Демонстрационный шаблон сертификата';
$string['demotmplawardedon'] = 'Выпущен';
$string['demotmplawardedto'] = 'Этот сертификат выпущен';
$string['demotmplbackground'] = 'Изображение фона';
$string['demotmplcoursefullname'] = 'Полное название курса';
$string['demotmpldirector'] = 'Руководитель';
$string['demotmplforcompleting'] = 'Для прохождения курса';
$string['demotmplissueddate'] = 'Дата выдачи';
$string['demotmplqrcode'] = 'QR-код';
$string['demotmplsignature'] = 'Подпись';
$string['demotmplusername'] = 'Имя пользователя';
$string['duplicate'] = 'Копия';
$string['duplicatetemplateconfirm'] = 'Вы уверены, что хотите продублировать шаблон \'{$a}\'?';
$string['editcertificate'] = 'Изменить шаблон сертификата \'{$a}\'';
$string['editcontent'] = 'Редактировать содержание';
$string['editdetails'] = 'Редактировать элементы';
$string['editelement'] = 'Редактировать \'{$a}\'';
$string['editelementname'] = 'Изменить название элемента';
$string['editpage'] = 'Редактировать страницу {$a}';
$string['edittemplatename'] = 'Изменить название шаблона';
$string['elementname'] = 'Имя элемента';
$string['elementname_help'] = 'Это имя будет использоваться для идентификации этого элемента при редактировании сертификата. Обратите внимание, что оно не будет отображаться в PDF.';
$string['elementwidth'] = 'Ширина, мм';
$string['elementwidth_help'] = 'Укажите ширину элемента. Ноль (0) означает отсутствие ограничения ширины.';
$string['entitycertificate'] = 'Сертификат';
$string['entitycertificateissue'] = 'Выдать сертификат';
$string['entitycertificateissues'] = 'Выдать сертификат';
$string['errornopermissionissuecertificate'] = 'У вас нет разрешения на выдачу этого сертификата';
$string['eventcertificateissued'] = 'Сертификат выдан';
$string['eventcertificaterevoked'] = 'Сертификат отозван';
$string['eventcertificateverified'] = 'Сертификат подтвержден';
$string['eventtemplatecreated'] = 'Шаблон создан';
$string['eventtemplatedeleted'] = 'Шаблон удален';
$string['eventtemplateupdated'] = 'Шаблон обновлен';
$string['expired'] = 'Срок действия истек';
$string['expiredcertificate'] = 'Срок действия этого сертификата истек';
$string['expires'] = 'Истекает';
$string['font'] = 'Шрифт';
$string['font_help'] = 'Шрифт, используемый при создании этого элемента.';
$string['fontcolour'] = 'Цвет';
$string['fontcolour_help'] = 'Цвет шрифта.';
$string['fontsize'] = 'Размер, пт';
$string['fontsize_help'] = 'Размер шрифта в пунктах.';
$string['hideshow'] = 'Скрыть / показать';
$string['invalidcolour'] = 'Цвет шрифта указан неверно. Введите допустимое название цвета HTML или шестизначный или трехзначный шестнадцатеричный цвет.';
$string['invalidelementwidth'] = 'Пожалуйста, введите положительное число.';
$string['invalidheight'] = 'Высота должна быть указана, как неотрицательное число больше нуля.';
$string['invalidmargin'] = 'Поле должно быть указано, как неотрицательное число больше нуля.';
$string['invalidposition'] = 'Пожалуйста, выберите положительное число для элемента {$a}.';
$string['invalidwidth'] = 'Ширина должна быть указана, как неотрицательное число больше нуля.';
$string['issuecertificates'] = 'Выдать сертификаты';
$string['issuedon'] = 'Выпущен';
$string['issuenewcertificate'] = 'Выдать сертификаты с использованием этого шаблона';
$string['issuenewcertificates'] = 'Выпустить новые сертификаты';
$string['issuenotallowed'] = 'Вам не разрешено выпускать сертификаты с использованием этого шаблона.';
$string['issueormangenotallowed'] = 'Вам не разрешено выпускать сертификаты с использованием этого шаблона или управлять им.';
$string['leftmargin'] = 'Левое поле, мм';
$string['leftmargin_help'] = 'Это левое поле сертификата PDF в мм.';
$string['manageelementplugins'] = 'Управление плагинами элементов сертификата';
$string['managetemplates'] = 'Управление шаблонами сертификатов';
$string['mappingerrorcertificateheader'] = 'Некоторые шаблоны сертификатов не существуют';
$string['mappingerrorcertificatelog'] = 'Сертификат {$a} не найден';
$string['messageprovider:certificateissued'] = 'Сертификат получен';
$string['mycertificates'] = 'Мои сертификаты';
$string['mycertificatesdescription'] = 'Это сертификаты, которые были выданы Вам по электронной почте или загружены вручную.';
$string['name'] = 'Имя';
$string['nametoolong'] = 'Вы превысили максимально допустимую длину имени';
$string['noimage'] = 'Нет изображения';
$string['noissueswerecreated'] = 'Нет выданных сертификатов';
$string['nopermissionform'] = 'У вас нет разрешения на доступ к этой форме.';
$string['notificationmsgcertificateissued'] = 'Добрый день, {$a->fullname},<br /><br />Ваш сертификат доступен! Вы найдете его по ссылке: <a href="{$a->url}">Мои сертификаты</a>';
$string['notificationsubjectcertificateissued'] = 'Ваш сертификат доступен!';
$string['notverified'] = 'Не проверен';
$string['numberofpages'] = 'Число страниц';
$string['oneissuewascreated'] = 'Создан сертификат';
$string['outcomecertificate'] = 'Выдать сертификат';
$string['outcomecertificatedescription'] = 'Выдавать сертификат \'{$a}\'  пользователям';
$string['page'] = 'Страница {$a}';
$string['pageheight'] = 'Высота страницы, мм';
$string['pageheight_help'] = 'Это высота сертификата PDF в мм. Для справки: лист бумаги формата A4 имеет высоту 297 мм, а письмо - 279 мм в высоту.';
$string['pagewidth'] = 'Ширина страницы, мм';
$string['pagewidth_help'] = 'Это ширина сертификата PDF в мм. Для справки: лист бумаги формата А4 имеет ширину 210 мм, письмо - 216 мм в ширину.';
$string['pluginname'] = 'Менеджер сертификатов';
$string['posx'] = 'Положение X, мм';
$string['posx_help'] = 'Это положение в мм от верхнего левого угла, в котором вы хотите, чтобы начальная точка элемента располагалась в направлении X.';
$string['posy'] = 'Положение Y, мм';
$string['posy_help'] = 'Это положение в мм от верхнего левого угла, в котором вы хотите, чтобы начальная точка элемента располагалась в направлении Y.';
$string['privacy:metadata:tool_certificate_issues:code'] = 'Код сертификата';
$string['privacy:metadata:tool_certificate_issues:expires'] = 'Время до истечения срока действия сертификата. 0, если срок действия сертификата не истекает.';
$string['privacy:metadata:tool_certificate_issues:templateid'] = 'Код сертификата';
$string['privacy:metadata:tool_certificate_issues:timecreated'] = 'Время выдачи сертификата';
$string['privacy:metadata:tool_certificate_issues:userid'] = 'Код пользователя, которому был выдан сертификат';
$string['privacy:metadata:tool_certificate:issues'] = 'Список выданных сертификатов';
$string['receiveddate'] = 'Награжден';
$string['reg_wpcertificates'] = 'Количество сертификатов ({$a})';
$string['reg_wpcertificatesissues'] = 'Количество выданных сертификатов ({$a})';
$string['regenerate'] = 'Восстановить';
$string['regeneratefileconfirm'] = 'Вы уверены, что хотите повторно сгенерировать сертификат, выданный этому пользователю?';
$string['regenerateissuefile'] = 'Восстановить сертификат';
$string['revoke'] = 'Отозвать';
$string['revokecertificateconfirm'] = 'Вы действительно хотите отозвать этот сертификат у этого пользователя?';
$string['rightmargin'] = 'Правое поле, мм';
$string['rightmargin_help'] = 'Это правое поле сертификата PDF в мм.';
$string['selectcertificate'] = 'Выберите сертификат';
$string['selectuserstoissuecertificatefor'] = 'Выберите пользователей, которым будет выдан сертификат';
$string['shared'] = 'Общий';
$string['subplugintype_certificateelement_plural'] = 'Плагины элементов';
$string['timecreated'] = 'Время создания';
$string['toomanycertificatestoshow'] = 'Отображено слишком много сертификатов ({$a})';
$string['type'] = 'Тип';
$string['uploadimage'] = 'Загрузить изображение';
$string['valid'] = 'Действителен';
$string['validcertificate'] = 'Этот сертификат действителен';
$string['verified'] = 'Проверен';
$string['verify'] = 'Проверить';
$string['verifycertificates'] = 'Проверить сертификаты';
$string['verifynotallowed'] = 'Вам не разрешено проверять сертификаты.';
$string['viewcertificate'] = 'Просмотреть сертификат';
