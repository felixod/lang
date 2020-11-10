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
 * @subpackage badges
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['alignment'] = 'Выравнивание';
$string['anymethodcompetencies'] = 'Любая из выбранных компетенций была завершена';
$string['apiversion'] = 'Поддерживаемая версия API';
$string['backpackapiurl'] = 'URL API коллекции';
$string['backpackbadgessettings'] = 'Изменение настроек коллекции';
$string['backpackbadgessummary'] = 'У Вас {$a->totalbadges} значок(ов) отображено из {$a->totalcollections} коллекции(й).';
$string['backpackconnected'] = 'Коллекция подключена';
$string['backpackconnectionok'] = 'Соединение с коллекцией успешно установлено';
$string['backpackconnectionunexpectedmessage'] = 'Коллекция вернула ошибку: "{$a}".';
$string['backpackexporterror'] = 'Не удаётся экспортировать значок в коллекцию';
$string['backpackneedsupdate'] = 'Коллекция, подключённая к этому профилю, не соответствует коллекции для сайта. Вам нужно отсоединить и снова подсоединить коллекцию.';
$string['bendorsement'] = 'Поддержка';
$string['brelated'] = 'Связанные значки ({$a})';
$string['claim'] = 'Жалоба';
$string['claimcomment'] = 'Комментарий поддержки';
$string['claimid'] = 'URL-адрес жалобы';
$string['criteria_descr_short9'] = 'Завершено <strong>{$a}</strong> из:';
$string['criteria_descr_single_9'] = 'Следующие компетенции должны быть завершены:';
$string['defaultissuerpassword'] = 'Пароль эмитента значка';
$string['delexternalbackpack'] = 'Удалить коллекцию сайта';
$string['delexternalbackpackconfirm'] = 'Удалить коллекцию \'{$a}\'?';
$string['endorsement'] = 'Поддержка';
$string['error:nogroupslink'] = '<p>Показываются только публичные коллекции. <a href="{$a}" target="_blank" rel="nofollow">Посетите свою коллекцию</a> чтобы создать несколько публичных коллекций.</p>';
$string['error:nogroupssummary'] = '<p>В вашей коллекции нет общедоступных коллекций значков. </p>';
$string['error:relatedbadgedoesntexist'] = 'Нет никакого публичного значка с этим идентификатором';
$string['existsinbackpack'] = 'Значок уже существует в коллекции';
$string['hidden'] = 'Скрытый';
$string['imageauthoremail'] = 'Электронная почта автора изображения';
$string['imageauthorname'] = 'Имя автора изображения';
$string['imageauthorname_help'] = 'Если указано, то имя автора изображения значка отображается на странице значка.';
$string['imageauthorurl'] = 'URL-адрес автора изображения';
$string['imageauthorurl_help'] = 'Если указано, то на странице значка отображается ссылка на сайт автора изображения значка. URL-адрес должен иметь префикс http://или https://.';
$string['imagecaption'] = 'Подпись к изображению';
$string['imagecaption_help'] = 'Если это указано, то на странице значка отображается подпись к изображению.';
$string['invalidurl'] = 'Недопустимый URL-адрес';
$string['issueremail_help'] = 'Контактный адрес электронной почты организации, выдавшей индоссамент.';
$string['issuername_endorsement'] = 'Имя индоссанта';
$string['issuername_endorsement_help'] = 'Имя индоссанта.';
$string['issuerurl_help'] = 'Веб-сайт организации, выдавшей индоссамент. URL-адрес должен иметь префикс http://или https://.';
$string['listbackpacks'] = 'Список коллекций';
$string['managebackpacks'] = 'Управление коллекциями';
$string['newbackpack'] = 'Добавить новую коллекцию';
$string['noalignment'] = 'Этот значок не имеет каких-либо внешних навыков или стандартов.';
$string['nobackpackbadgessummary'] = 'В выбранных вами коллекциях значков нет.';
$string['nobackpackcollectionssummary'] = 'Коллекции значков не были отобраны.';
$string['nobackpacks'] = 'Коллекций нет в наличии';
$string['nocompetencies'] = 'Нет выбранных компетенций.';
$string['norelated'] = 'Этот значок не имеет никаких связанных значков.';
$string['notealignment'] = 'Могут быть указаны внешние навыки или стандарты, которым соответствует значок. Любые внешние навыки или стандарты отображаются на странице значка.';
$string['noteendorsement'] = 'Индоссамент от третьей стороны может быть использован для повышения ценности значка. Например, значок, выданный учителем, может быть одобрен школой, или значок, выданный местным органом награждения, может быть одобрен Национальным органом награждения.';
$string['noterelated'] = 'Значки с подключением могут быть помечены как связанные. Например, значки с одинаковыми критериями, которые отображаются на разных языках, могут быть помечены как связанные. Все связанные значки отображаются на странице значков.';
$string['privacy:metadata:backpack:externalbackpackid'] = 'Идентификатор коллекции';
$string['privacy:metadata:backpackoauth2:scope'] = 'Список областей коллекции подключения';
$string['privacy:metadata:backpackoauth2:token'] = 'Маркер подключения коллекции';
$string['sitebackpack'] = 'Активная внешняя коллекция';
$string['sitebackpack_help'] = 'Внешняя коллекция, к которой пользователи могут подключиться с этого сайта. Обратите внимание, что изменение этого параметра после подключения рюкзаков потребует от каждого пользователя перехода на страницу настроек рюкзака и отключения, а затем повторного подключения.';
$string['sitebackpackdeleted'] = 'Коллекция сайта была удалена.';
$string['sitebackpacknotdeleted'] = 'Этот рюкзак не может быть удалён, потому что в настоящее время он является сайтом по умолчанию.';
$string['sitebackpackverify'] = 'Соединение рюкзака';
$string['sitebackpackwarning'] = 'Не удалось подключиться к рюкзаку. <br/><br/>Убедитесь, что параметр администратора" адрес электронной почты эмитента бейджа " является допустимым адресом электронной почты для учетной записи на веб-сайте backpack.<br/><br/>Проверьте, что "пароль эмитента бейджа" на <a href="{$a->url}">страница настроек рюкзака сайта</a>, это правильный пароль для учетной записи на сайте рюкзака.. <br/><br/>Рюкзак вернул: "{$a->warning}"';
$string['targetcode_help'] = 'Уникальный строковый идентификатор для ссылки на внешний навык или стандарт в его рамках.';
$string['targetdescription'] = 'Описание';
$string['targetdescription_help'] = 'Краткое описание внешнего навыка или стандарта.';
$string['targetframework'] = 'Фреймворк';
$string['targetframework_help'] = 'Название внешнего навыка или стандартной структуры.';
$string['targetname'] = 'Имя';
$string['testbackpack'] = 'Тестовый рюкзак \' {$a}\'';
$string['testsettings'] = 'Параметры тестирования';
