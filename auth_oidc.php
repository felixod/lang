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
 * @package    auth
 * @subpackage oidc
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_oidcdescription'] = 'Плагин OpenID Connect обеспечивает функциональность единого входа с использованием настраиваемых поставщиков удостоверений.';
$string['cfg_authendpoint_desc'] = 'URI конечной точки авторизации от вашего провайдера идентификации до пользователя.';
$string['cfg_authendpoint_key'] = 'Конечная точка авторизации';
$string['cfg_autoappend_desc'] = 'Автоматически добавлять эту строку при входе в систему с использованием метода аутентификации «Учетные данные пароля владельца ресурса». Это полезно, когда вашему провайдеру идентификации требуется общий домен, но вы не хотите, чтобы пользователи вводили его при входе в систему. Например, если полный пользователь OpenID Connect - «3425@stud.samgups.ru» и вы вводите «@stud.samgups.ru» в это поле, пользователь должен будет только ввести «3425» в качестве своего имени пользователя. <br /><b> Примечание. </b> В случае, когда существуют конфликтующие имена пользователей, то есть пользователь ЭИОС СамГУПС с тем же именем, приоритет подключаемого модуля аутентификации используется для определения того, какой пользователь будет выбран.';
$string['cfg_autoappend_key'] = 'Автоматическое добавление';
$string['cfg_clientid_desc'] = 'Ваш зарегистрированный идентификатор клиента на провайдера идентификации';
$string['cfg_clientid_key'] = 'ID клиента';
$string['cfg_clientsecret_desc'] = 'Ваш зарегистрированный секрет клиента на провайдере идентификации. На некоторых провайдерах это также упоминается как ключ.';
$string['cfg_clientsecret_key'] = 'Секрет клиента';
$string['cfg_customicon_desc'] = 'Если вы хотите использовать свой собственный значок, загрузите его здесь. Это действие отменит любой значок, выбранный выше. <br /><br /><b> Примечание по использованию пользовательских значков: </b><ul><li>Размер этого изображения <b>не будет</ b> изменен на странице входа, поэтому мы рекомендуем загрузить изображение размером не более 35x35 пикселей. </li><li> Если вы загрузили пользовательский значок и хотите вернуться к одному из стандартных значков, щелкните пользовательский значок в поле выше, затем нажмите «Удалить», затем нажмите «ОК», затем нажмите «Сохранить изменения» в нижней части этой формы. Выбранный значок появится на странице входа в ЭИОС СамГУПС.</li></ul>';
$string['cfg_customicon_key'] = 'Пользовательский значок';
$string['cfg_debugmode_desc'] = 'Если этот параметр включен, в журнал ЭИОС СамГУПС будет заноситься информация, которая может помочь в выявлении проблем.';
$string['cfg_debugmode_key'] = 'Запись отладочных сообщений';
$string['cfg_domainhint_desc'] = 'При использовании метода аутентификации «Код авторизации» передайте это значение в качестве параметра «Подсказка домена». «Подсказка домена» используется некоторыми поставщиками OpenID Connect, чтобы облегчить пользователям процесс входа в систему. Узнайте у своего провайдера, поддерживают ли они этот параметр.';
$string['cfg_domainhint_key'] = 'Подсказка домена';
$string['cfg_err_invalidauthendpoint'] = 'Неверная конечная точка авторизации';
$string['cfg_err_invalidclientid'] = 'Неверный идентификатор клиента';
$string['cfg_err_invalidclientsecret'] = 'Неверный секрет клиента';
$string['cfg_err_invalidtokenendpoint'] = 'Неверная конечная точка токена';
$string['cfg_forceredirect_desc'] = 'Если включено, система пропустит страницу индекса входа и перенаправит на страницу OpenID Connect. Можно обойти с помощью параметра: ?noredirect=1';
$string['cfg_forceredirect_key'] = 'Принудительное перенаправление';
$string['cfg_icon_desc'] = 'Значок, отображаемый рядом с именем провайдера на странице входа.';
$string['cfg_icon_key'] = 'Значок';
$string['cfg_iconalt_check'] = 'Значок галочки';
$string['cfg_iconalt_go'] = 'Зеленый круг';
$string['cfg_iconalt_group'] = 'Значок группы';
$string['cfg_iconalt_group2'] = 'Альтернативный значок группы';
$string['cfg_iconalt_key'] = 'Значок ключа';
$string['cfg_iconalt_lock'] = 'Значок замка';
$string['cfg_iconalt_locked'] = 'Заблокированный значок';
$string['cfg_iconalt_mnet'] = 'Значок MNET';
$string['cfg_iconalt_o365'] = 'Значок Office 365';
$string['cfg_iconalt_plus'] = 'Значок плюс';
$string['cfg_iconalt_rightarrow'] = 'Значок стрелки вправо';
$string['cfg_iconalt_stop'] = 'Красный круг';
$string['cfg_iconalt_user'] = 'Значок пользователя';
$string['cfg_iconalt_user2'] = 'Чередующийся значок пользователя';
$string['cfg_iconalt_userlock'] = 'Пользователь со значком замка';
$string['cfg_loginflow_authcode'] = 'Поток кода авторизации (рекомендуется)';
$string['cfg_loginflow_authcode_desc'] = 'Используя этот поток, пользователь щелкает имя провайдера идентификации (см. «Имя провайдера» выше) на странице входа в ЭИОС СамГУПС и перенаправляется провайдеру для входа. После успешного входа пользователь перенаправляется обратно в ЭИОС СамГУПС, где Вход в ЭИОС СамГУПС происходит прозрачно. Это наиболее стандартизированный и безопасный способ входа пользователя.';
$string['cfg_loginflow_key'] = 'Метод проверки подлинности';
$string['cfg_loginflow_rocreds'] = 'Предоставление учетных данных пароля владельца ресурса';
$string['cfg_loginflow_rocreds_desc'] = 'Используя этот поток, пользователь вводит свое имя пользователя и пароль в форму входа в систему ЭИОС СамГУПС, как при ручном входе. Это авторизует пользователя с поставщиком удостоверений, но не создает сеанс на сайте поставщика удостоверений. Например, при использовании Office 365 с OpenID Connect пользователь будет входить в ЭИОС СамГУПС, но не через веб-приложения Office 365. Рекомендуется использовать запрос авторизации, если вы хотите, чтобы пользователи входили в ЭИОС СамГУПС и провайдер идентификации. Обратите внимание, что не все поставщики удостоверений поддерживают этот поток. Этот параметр следует использовать только в том случае, если другие типы разрешений на авторизацию недоступны.';
$string['cfg_oidcresource_desc'] = 'Ресурс OpenID Connect, для которого нужно отправить запрос.';
$string['cfg_oidcresource_key'] = 'Ресурс';
$string['cfg_oidcscope_desc'] = 'Объем применения OIDC для использования.';
$string['cfg_oidcscope_key'] = 'Объем';
$string['cfg_opname_desc'] = 'Это метка, предназначенная для конечного пользователя, которая определяет тип учетных данных, которые пользователь должен использовать для входа в систему. Эта метка используется во всех частях этого плагина, обращенных к пользователю, для идентификации вашего провайдера.';
$string['cfg_opname_key'] = 'Имя провайдера';
$string['cfg_redirecturi_desc'] = 'Это URI, который нужно зарегистрировать как «URI перенаправления». Ваш провайдер идентификации OpenID Connect должен запросить это при регистрации ЭИОС СамГУПС в качестве клиента. <br /><b> ПРИМЕЧАНИЕ. </b> Вы должны ввести это в настройки своего провайдера OpenID Connect *точно* так, как показано здесь. Любая разница помешает входу в систему с использованием OpenID Connect.';
$string['cfg_redirecturi_key'] = 'URI перенаправления';
$string['cfg_tokenendpoint_desc'] = 'URI конечной точки токена от вашего провайдера идентификации для использования.';
$string['cfg_tokenendpoint_key'] = 'Конечная точка токена';
$string['cfg_userrestrictions_desc'] = 'Разрешить только пользователям войти в систему, которые отвечают определенным ограничениям. <br /><b> Как использовать пользовательские ограничения: </b> <ul><li> введите <a href="https://en.wikipedia.org/wiki/Regular_expression"> регулярное выражение </a> шаблон, который совпадает с именами пользователей, которым вы хотите разрешить. </li><li> Введите один шаблон в строке </li><li> Если вы введете несколько шаблонов, пользователю будет разрешено входить, если они соответствуют ЛЮБОМУ из шаблонов. </li><li>Символ "/" следует экранировать с помощью "\\". </li><li> Если вы не введете никаких ограничений выше, все пользователи, которые могут войти в систему поставщика OpenID Connect, будут приняты ЭИОС СамГУПС. </li><li> Любой пользователь, который не соответствует ни одному из введенных шаблонов, не сможет войти в систему с помощью OpenID Connect. </li></ul>';
$string['cfg_userrestrictions_key'] = 'Пользовательские ограничения';
$string['errorauthdisconnectemptypassword'] = 'Пароль не может быть пустым';
$string['errorauthdisconnectemptyusername'] = 'Имя пользователя не может быть пустым';
$string['errorauthdisconnectifmanual'] = 'При использовании ручного метода входа введите учетные данные ниже.';
$string['errorauthdisconnectinvalidmethod'] = 'Получен неверный метод входа.';
$string['errorauthdisconnectnewmethod'] = 'Использовать метод входа';
$string['errorauthdisconnectusernameexists'] = 'Это имя пользователя уже занято. Пожалуйста, выберите другое.';
$string['errorauthgeneral'] = 'При входе в систему произошла ошибка. Обратитесь за помощью к администратору.';
$string['errorauthinvalididtoken'] = 'Получен неверный id_token.';
$string['errorauthloginfailednouser'] = 'Ошибка входа: пользователь не найден в ЭИОС СамГУПС. Если на этом сайте включен параметр «authpreventaccountcreation», это может означать, что вам сначала понадобится администратор для создания учетной записи.';
$string['errorauthnoauthcode'] = 'Код авторизации не был получен с сервера идентификации. Журналы ошибок могут содержать больше информации.';
$string['errorauthnocreds'] = 'Пожалуйста, настройте учетные данные клиента OpenID Connect.';
$string['errorauthnoendpoints'] = 'Пожалуйста, настройте конечные точки сервера OpenID Connect.';
$string['errorauthnohttpclient'] = 'Пожалуйста, установите HTTP-клиент.';
$string['errorauthnoidtoken'] = 'OpenID Connect id_token не получен.';
$string['errorauthunknownstate'] = 'Неизвестное состояние. Возможно Ваша учетная запись Office 365 еще не активирована в компании Микрософт. Подождите несколько минут, прежде чем пытаться снова.';
$string['errorauthuseralreadyconnected'] = 'Вы уже подключены к другому пользователю OpenID Connect.';
$string['errorauthuserconnectedtodifferent'] = 'Пользователь OpenID Connect, прошедший проверку подлинности, уже подключен к пользователю ЭИОС СамГУПС.';
$string['errorbadloginflow'] = 'Указан неверный тип аутентификации. Примечание. Если вы получили это сообщение после недавней установки или обновления, очистите кеш ЭИОС СамГУПС.';
$string['errorinvalidredirect_message'] = 'URL, на который вы пытаетесь перенаправить, не существует.';
$string['errorjwtbadpayload'] = 'Не удалось прочитать полезную нагрузку JWT.';
$string['errorjwtcouldnotreadheader'] = 'Не удалось прочитать заголовок JWT';
$string['errorjwtempty'] = 'Получен пустой или не строковый JWT.';
$string['errorjwtinvalidheader'] = 'Неверный заголовок JWT';
$string['errorjwtmalformed'] = 'Неправильно получен JWT.';
$string['errorjwtunsupportedalg'] = 'JWS Alg или JWE не поддерживаются';
$string['errorlogintoconnectedaccount'] = 'Этот пользователь Office 365 подключен к учетной записи ЭИОС СамГУПС, но вход в систему OpenID Connect не включен для этой учетной записи ЭИОС. Войдите в учетную запись ЭИОС, используя ранее определенный метод проверки подлинности для использования функций Office 365.';
$string['errornodisconnectionauthmethod'] = 'Невозможно отключиться, потому что нет подключаемого модуля аутентификации (либо предыдущий метод входа, либо метод входа вручную).';
$string['erroroidccall'] = 'Ошибка в OpenID Connect. Пожалуйста, проверьте журналы для получения дополнительной информации.';
$string['erroroidccall_message'] = 'Ошибка в OpenID Connect: {$a}';
$string['erroroidcclientinsecuretokenendpoint'] = 'Конечная точка токена должна использовать SSL / TLS для этого.';
$string['erroroidcclientinvalidendpoint'] = 'Получен неверный URI конечной точки.';
$string['erroroidcclientnoauthendpoint'] = 'Не установлена конечная точка авторизации. Пожалуйста, установите с $this->setendpoints';
$string['erroroidcclientnocreds'] = 'Пожалуйста, установите учетные данные клиента с помощью setcreds';
$string['erroroidcclientnotokenendpoint'] = 'Не установлена конечная точка токена. Пожалуйста, установите с $this->setendpoints';
$string['erroroidcnotenabled'] = 'Плагин аутентификации OpenID Connect не включен.';
$string['errorrestricted'] = 'Этот сайт имеет ограничения для пользователей, которые могут войти в систему с помощью OpenID Connect. Эти ограничения в настоящее время не позволяют завершить эту попытку входа в систему.';
$string['errorucpinvalidaction'] = 'Получено недействительное действие.';
$string['event_debug'] = 'Отладочное сообщение';
$string['eventuserauthed'] = 'Пользователь авторизован с OpenID Connect';
$string['eventuserconnected'] = 'Пользователь подключен к OpenID Connect';
$string['eventusercreated'] = 'Пользователь создан с OpenID Connect';
$string['eventuserdisconnected'] = 'Пользователь отключен от OpenID Connect';
$string['eventuserloggedin'] = 'Пользователь вошел в систему с OpenID Connect';
$string['exception_tokenemptyuserid'] = 'Существующий токен для этого пользователя не содержит действительный идентификатор пользователя. Пожалуйста, свяжитесь с вашим администратором.';
$string['oidc:manageconnection'] = 'Разрешить OpenID подключение и отключение';
$string['oidc:manageconnectionconnect'] = 'Разрешить OpenID соединение';
$string['oidc:manageconnectiondisconnect'] = 'Разрешить отключение OpenID';
$string['pluginname'] = 'OpenID Connect';
$string['privacy:metadata:auth_oidc'] = 'Аутентификация OpenID Connect';
$string['privacy:metadata:auth_oidc_prevlogin'] = 'Предыдущие способы входа в систему для отмены соединений Office 365';
$string['privacy:metadata:auth_oidc_prevlogin:method'] = 'Предыдущий метод входа';
$string['privacy:metadata:auth_oidc_prevlogin:password'] = 'Предыдущее (зашифрованное) поле пароля пользователя.';
$string['privacy:metadata:auth_oidc_prevlogin:userid'] = 'Идентификатор пользователя Moodle';
$string['privacy:metadata:auth_oidc_token'] = 'OpenID Connect токены';
$string['privacy:metadata:auth_oidc_token:authcode'] = 'Код авторизации для токена';
$string['privacy:metadata:auth_oidc_token:expiry'] = 'Срок действия токена';
$string['privacy:metadata:auth_oidc_token:idtoken'] = 'Идентификационный токен';
$string['privacy:metadata:auth_oidc_token:oidcuniqid'] = 'Уникальный идентификатор пользователя OIDC.';
$string['privacy:metadata:auth_oidc_token:oidcusername'] = 'Имя пользователя пользователя OIDC';
$string['privacy:metadata:auth_oidc_token:refreshtoken'] = 'Токен обновления';
$string['privacy:metadata:auth_oidc_token:resource'] = 'Ресурс токена';
$string['privacy:metadata:auth_oidc_token:scope'] = 'Область действия токена';
$string['privacy:metadata:auth_oidc_token:token'] = 'Токен';
$string['privacy:metadata:auth_oidc_token:userid'] = 'Идентификатор пользователя Moodle';
$string['privacy:metadata:auth_oidc_token:username'] = 'Имя пользователя ЭИОС СамГУПС';
$string['ucp_disconnect_details'] = 'Это отключит вашу учетную запись ЭИОС СамГУПС от {$a}. Вам нужно будет создать имя пользователя и пароль для входа в ЭИОС.';
$string['ucp_disconnect_title'] = '{$a} разъединение';
$string['ucp_general_intro'] = 'Здесь вы можете управлять своим соединением с {$a}. Если включено, вы сможете использовать свою учетную запись {$a} для входа в ЭИОС СамГУПС вместо отдельного имени пользователя и пароля. После подключения вам больше не придется запоминать имя пользователя и пароль для ЭИОС, все входы в систему будут обрабатываться {$a}.';
$string['ucp_login_start'] = 'Начните использовать {$a} для входа в ЭИОС СамГУПС';
$string['ucp_login_start_desc'] = 'Это переключит вашу учетную запись на использование {$a} для входа в ЭИОС СамГУПС. После включения вы войдете в систему, используя свои учетные данные {$a} - ваше текущее имя пользователя и пароль ЭИОС СамГУПС не будут работать. Вы можете отключить свою учетную запись в любое время и вернуться к входу в систему в обычном режиме.';
$string['ucp_login_status'] = '{$a} логин:';
$string['ucp_login_stop'] = 'Прекратить использование {$a} для входа в ЭИОС СамГУПС';
$string['ucp_login_stop_desc'] = 'В настоящее время вы используете {$a} для входа в ЭИОС СамГУПС. Нажатие «Прекратить использование {$a}» - это отключит вашу учетную запись ЭИОС от {$a}. Вы больше не сможете войти в ЭИОС СамГУПС под своей учетной записью {$a}. Вам будет предложено создать имя пользователя и пароль, и с этого момента вы сможете напрямую войти в ЭИОС.';
$string['ucp_o365accountconnected'] = 'Эта учетная запись Office 365 уже связана с другой учетной записью ЭИОС СамГУПС.';
$string['ucp_status_disabled'] = 'Отключено';
$string['ucp_status_enabled'] = 'Включено';
$string['ucp_title'] = '{$a} Управление';
