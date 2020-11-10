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
 * @subpackage mobile
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['apprequired'] = 'Эта функция доступна только при доступе через мобильное или настольное приложение Moodle.';
$string['cachedef_subscriptiondata'] = 'Здесь хранится информация о подписке на приложение Moodle.';
$string['darkmode'] = 'Тёмный режим';
$string['h5poffline'] = 'Просмотр контента H5P в автономном режиме';
$string['insecurealgorithmwarning'] = 'Похоже, что сертификат HTTPS использует небезопасный алгоритм подписи (SHA-1). Пожалуйста, попробуйте обновить сертификат.';
$string['invalidcertificatechainwarning'] = 'Похоже, что цепочка сертификатов недействительна.';
$string['invalidcertificateexpiredatewarning'] = 'Похоже, что срок действия сертификата HTTPS для сайта истёк.';
$string['invalidcertificatestartdatewarning'] = 'Похоже, что сертификат HTTPS для сайта ещё не действителен (с датой начала в будущем).';
$string['minimumversion'] = 'Если указана версия приложения (3.8.0 или выше), всем пользователям, использующим более старую версию приложения, будет предложено обновить своё приложение, прежде чем им будет разрешён доступ к сайту.';
$string['minimumversion_key'] = 'Минимальная требуемая версия приложения';
$string['mobileappconnected'] = 'Мобильное приложение подключено';
$string['mobileappsubscription'] = 'Подписка на приложение Moodle';
$string['moodleappsportalfeatureswarning'] = 'Обратите внимание, что некоторые функции могут быть ограничены в зависимости от вашей подписки на приложение Moodle. Для получения более подробной информации посетите сайт <a href="{$a}" target="_blank">Портал Приложений Moodle</a>.';
$string['notifications'] = 'Уведомления';
$string['notificationsactivedevices'] = 'Активные устройства';
$string['notificationscurrentactivedevices'] = 'Устройства, получающие уведомления в этом месяце';
$string['notificationsignorednotifications'] = 'Уведомления не отправлены';
$string['notificationslimitreached'] = 'Превышен месячный лимит активных пользовательских устройств. Уведомления для некоторых пользователей не будут отправляться. Рекомендуется обновить свой план приложений на <a href="{$a}" target="_blank">портале мобильного приложения</a>.';
$string['notificationsmissingwarning'] = 'Не удалось получить статистику уведомлений приложения Moodle. Скорее всего, это связано с тем, что мобильные уведомления ещё не включены на сайте. Вы можете включить их в разделе Администрирование сайта / обмен сообщениями / мобильный телефон.';
$string['notificationsnewdevices'] = 'Новые устройства';
$string['notificationsseemore'] = 'Примечание: статистика использования приложения Moodle не рассчитывается в режиме реального времени. Чтобы получить доступ к более подробной статистике, включая данные за предыдущие месяцы, пожалуйста, войдите в систему. <a href="{$a}" target="_blank">Портал мобильного приложения</a>.';
$string['notificationssentnotifications'] = 'Отправленные уведомления';
$string['oauth2identityproviders'] = 'Протокол OAuth 2';
$string['offlineuse'] = 'Автономное использование';
$string['privacy:metadata:core_userkey'] = 'Ключи пользователя, используемые для создания ключа автоматического входа в систему для текущего пользователя.';
$string['privacy:metadata:preference:tool_mobile_autologin_request_last'] = 'Дата последнего запроса ключа автоматического входа в систему. Между каждым запросом требуется 6 минут.';
$string['qrcodedisabled'] = 'Доступ через QR-код отключён';
$string['qrcodeformobileappaccess'] = 'QR-код для доступа к мобильному приложению';
$string['qrcodeformobileapploginabout'] = 'Сканируйте QR-код с помощью мобильного приложения, и вы автоматически войдёте в систему. Срок действия QR-кода истекает через {$a} минут.';
$string['qrcodeformobileappurlabout'] = 'Сканируйте QR-код с помощью мобильного приложения, чтобы заполнить URL-адрес сайта в вашем приложении.';
$string['qrcodetype'] = 'Доступ к QR-коду';
$string['qrcodetype_desc'] = 'QR-код может быть предоставлен пользователям мобильных приложений для заполнения URL-адреса сайта, либо для автоматического входа в систему без необходимости вводить свои учётные данные.';
$string['qrcodetypelogin'] = 'QR-код с автоматическим входом в систему';
$string['qrcodetypeurl'] = 'QR-код с URL-адресом сайта';
$string['qrsiteadminsnotallowed'] = 'По соображениям безопасности вход через QR-код не разрешён администраторам сайта или если вы вошли в систему как другой пользователь.';
$string['readingthisemailgettheapp'] = 'Читаете это в электронном письме? <a href="{$a}">Загрузите мобильное приложение и получайте уведомления на своё мобильное устройство</a>.';
$string['responsivemainmenuitems'] = 'Адаптивные пункты меню';
$string['selfsignedoruntrustedcertificatewarning'] = 'Похоже, что сертификат HTTPS является самозаверяющим или не доверенным. Мобильное приложение будет работать только с надёжными сайтами.';
$string['subscriptioncreated'] = 'Дата начала';
$string['subscriptionerrorrequest'] = 'При попытке получить информацию о подписке на приложение Moodle произошла непредвиденная ошибка.';
$string['subscriptionexpiration'] = 'Дата истечения срока действия';
$string['subscriptionfeaturenotapplied'] = 'Эта функция настроена на вашем сайте, но она не включена в ваш план приложения Moodle. Таким образом, установка не будет иметь никакого эффекта.';
$string['subscriptionfeatures'] = 'Особенности подписки';
$string['subscriptionlimitsurpassed'] = 'Превышен лимит подписки';
$string['subscriptionregister'] = 'Для получения подробной информации о различных планах приложений, а также для доступа к статистике использования приложений Moodle, пожалуйста, посетите <a href="{$a}" target="_blank">портал мобильного приложения</a>.';
$string['subscriptionsseemore'] = 'Примечание: отображаемая информация не обновляется в режиме реального времени. Возможно, вам придётся выйти из системы и снова войти в систему, чтобы увидеть обновления. Для получения информации об обновлении вашего плана приложений, пожалуйста, войдите на сайт <a href="{$a}" target="_blank">мобильного приложения</a>.';
$string['viewqrcode'] = 'Просмотр QR-кода';
