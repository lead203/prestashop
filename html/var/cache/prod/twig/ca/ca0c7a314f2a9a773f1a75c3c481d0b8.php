<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__9360f72e9883f929c2fb8d9c365aa0dd */
class __TwigTemplate_19c98ede5c19430206686db4e5ebe388 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"ru\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/img/app_icon.png\" />

<title>Производительность • Presta Shop</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminPerformance';
    var iso_user = 'ru';
    var lang_is_rtl = '0';
    var full_language_code = 'ru-ru';
    var full_cldr_language_code = 'ru-RU';
    var country_iso_code = 'UA';
    var _PS_VERSION_ = '8.1.7';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'A new order has been placed on your store.';
    var order_number_msg = 'Номер заказа: ';
    var total_msg = 'Всего: ';
    var from_msg = 'С: ';
    var see_order_msg = 'Смотреть заказ';
    var new_customer_msg = 'A new customer registered on your store.';
    var customer_name_msg = 'Имя клиента: ';
    var new_msg = 'A new message was posted on your store.';
    var see_msg = 'Прочитать это сообщение';
    var token = '2abab027d65f5810d08a5e0c66fdee1a';
    var currentIndex = 'index.php?controller=AdminPerformance';
    var employee_token = '4aac8895468985bba2825f1f2ffac8bf';
    var choose_language_translate = 'Выберите язык:';
    var default_language = '3';
    var admin_modules_link = '/admin9434fu3bddgkp9ptvzu/index.php/improve/modules/manage?_token=2_y2i5cLOxX23ecW7ukGkAcCrPtRSYlhmNm4KerICfw';
    var admin_notification_get_link = '/admin9434fu3bddgkp9ptvzu/index.php/common/notifications?_token=2_y2i5cLOxX23ecW7ukGkAcCrPtRSYlhmNm4KerICfw';
    var admin_notification_push_link = adminNotificationPushLink = '/admin9434fu3bddgkp9ptvzu/index.php/common/notifications/ack?_token=2_y2i5cLOxX23ecW7ukGkAcCrPtRSYlhmN";
        // line 40
        echo "m4KerICfw';
    var tab_modules_list = '';
    var update_success_msg = 'Успешно обновлено';
    var search_product_msg = 'Искать товар';
  </script>



<link
      rel=\"preload\"
      href=\"/admin9434fu3bddgkp9ptvzu/themes/new-theme/public/2d8017489da689caedc1.preload..woff2\"
      as=\"font\"
      crossorigin
    >
      <link href=\"/admin9434fu3bddgkp9ptvzu/themes/new-theme/public/create_product_default_theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin9434fu3bddgkp9ptvzu/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/blockwishlist/public/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin9434fu3bddgkp9ptvzu/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/admin9434fu3bddgkp9ptvzu\\/\";
var baseDir = \"\\/\";
var changeFormLanguageUrl = \"\\/admin9434fu3bddgkp9ptvzu\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=2_y2i5cLOxX23ecW7ukGkAcCrPtRSYlhmNm4KerICfw\";
var currency = {\"iso_code\":\"UAH\",\"sign\":\"\",\"name\":\"\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"\\u043d\\u0435\\u00a0\\u0447\\u0438\\u0441\\u043b\\u043e\"],\"currencyCode\":\"UAH\",\"currencySymbol\":\"\",\"numberSymbols\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"\\u043d\\u0435\\u00a0\\u0447\\u0438\\u0441\\u043b\\u043e\"],\"positivePattern\":\"#,##0.00\\u00a0\\u00a4\",\"negativePattern\":\"-#,##0.00\\u00a0\\u00a4\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var number_specifications = {\"symbol\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"\\u043d\\u0435\\u00a0\\u04";
        // line 67
        echo "47\\u0438\\u0441\\u043b\\u043e\"],\"numberSymbols\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"\\u043d\\u0435\\u00a0\\u0447\\u0438\\u0441\\u043b\\u043e\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":false};
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/admin9434fu3bddgkp9ptvzu/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/js/admin.js?v=8.1.7\"></script>
<script type=\"text/javascript\" src=\"/admin9434fu3bddgkp9ptvzu/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/tools.js?v=8.1.7\"></script>
<script type=\"text/javascript\" src=\"/admin9434fu3bddgkp9ptvzu/themes/new-theme/public/create_product.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/modules/blockwishlist/public/vendors.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_emailalerts/js/admin/ps_emailalerts.js\"></script>
<script type=\"text/javascript\" src=\"/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/admin9434fu3bddgkp9ptvzu/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>

  <script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF0067',
      textColor: '#FFFFFF',
      notificationGetUrl: '/admin9434fu3bddgkp9ptvzu/index.php/common/notifications?_token=2_y2i5cLOxX23ecW7ukGkAcCrPtRSYlhmNm4KerIC";
        // line 92
        echo "fw',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>


";
        // line 102
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-ru adminperformance\"
  data-base-url=\"/admin9434fu3bddgkp9ptvzu/index.php\"  data-token=\"2_y2i5cLOxX23ecW7ukGkAcCrPtRSYlhmNm4KerICfw\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"http://ec2-18-157-81-67.eu-central-1.compute.amazonaws.com/admin9434fu3bddgkp9ptvzu/index.php?controller=AdminDashboard&amp;token=7ec117f5b289e7892f6623ddff0eb632\"></a>
      <span id=\"shop_version\">8.1.7</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Быстрый доступ
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://ec2-18-157-81-67.eu-central-1.compute.amazonaws.com/admin9434fu3bddgkp9ptvzu/index.php/sell/orders?token=1392f1d3d75640965fc9045942f3a65e\"
                 data-item=\"Заказы\"
      >Заказы</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://ec2-18-157-81-67.eu-central-1.compute.amazonaws.com/admin9434fu3bddgkp9ptvzu/index.php/sell/catalog/categories/new?token=1392f1d3d75640965fc9045942f3a65e\"
                 data-item=\"Новая категория\"
      >Новая категория</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://ec2-18-157-81-67.eu-central-1.compute.amazonaws.com/admin9434fu3bddgkp9ptvzu/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=d0e719402750913e152cce97136cb5cd\"
                 data-item=\"Новый купон\"
      >Новый купон</a>
          <a class=\"dropdown-item quick-row-link new-produc";
        // line 135
        echo "t-button\"
         href=\"http://ec2-18-157-81-67.eu-central-1.compute.amazonaws.com/admin9434fu3bddgkp9ptvzu/index.php/sell/catalog/products-v2/create?token=1392f1d3d75640965fc9045942f3a65e\"
                 data-item=\"Новый товар\"
      >Новый товар</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://ec2-18-157-81-67.eu-central-1.compute.amazonaws.com/admin9434fu3bddgkp9ptvzu/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=ad1f70884d586ed67106ba9f6adc1def\"
                 data-item=\"Оценка каталога\"
      >Оценка каталога</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://ec2-18-157-81-67.eu-central-1.compute.amazonaws.com/admin9434fu3bddgkp9ptvzu/index.php/improve/modules/manage?token=1392f1d3d75640965fc9045942f3a65e\"
                 data-item=\"Установленные модули\"
      >Установленные модули</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"173\"
        data-icon=\"icon-AdminAdvancedParameters\"
        data-method=\"add\"
        data-url=\"index.php/configure/advanced/performance\"
        data-post-link=\"http://ec2-18-157-81-67.eu-central-1.compute.amazonaws.com/admin9434fu3bddgkp9ptvzu/index.php?controller=AdminQuickAccesses&token=543140397853ac35970fc52b8f7539c1\"
        data-prompt-text=\"Задайте название ярлыка:\"
        data-link=\"Производительность - Список\"
      >
        <i class=\"material-icons\">add_circle</i>
        Add current page to Quick Access
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://ec2-18-157-81-67.eu-central-1.compute.amazonaws.com/admin9434fu3bddgkp9ptvzu/index.php?controller=AdminQuickAccesses&token=543140397853ac35970fc52b8f7539c1\">
      <i class=\"material-icons\">settings</i>
      Manage your qu";
        // line 164
        echo "ick accesses
    </a>
  </div>
</div>
      </div>
      <div class=\"component component-search\" id=\"header-search-container\">
        <div class=\"component-search-body\">
          <div class=\"component-search-top\">
            <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/admin9434fu3bddgkp9ptvzu/index.php?controller=AdminSearch&amp;token=f3f502f6bc3cc135d2685bf3db213287\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Поиск (например, артикул, имя пользователя...)\" aria-label=\"Searchbar\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Везде
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Везде\" href=\"#\" data-value=\"0\" data-placeholder=\"Что вы ищете?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Везде</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Каталог\" href=\"#\" data-value=\"1\" data-placeholder=\"Product name, reference, etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Каталог</a>
        <a class=\"dropdown-item\" data-item=\"Клиенты по имени\" href=\"#\" data-value=\"2\" data-placeholder=\"Имя\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Клиенты по имени</a>
        <a class=\"dropdown-item\" data-item=\"Клиенты по IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Клиенты �";
        // line 189
        echo "�о IP-адресу</a>
        <a class=\"dropdown-item\" data-item=\"Заказы\" href=\"#\" data-value=\"3\" data-placeholder=\"№ заказа\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Заказы</a>
        <a class=\"dropdown-item\" data-item=\"По счетам\" href=\"#\" data-value=\"4\" data-placeholder=\"Номер счёта\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> По счетам</a>
        <a class=\"dropdown-item\" data-item=\"Корзины\" href=\"#\" data-value=\"5\" data-placeholder=\"ID Корзины\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Корзины</a>
        <a class=\"dropdown-item\" data-item=\"Модули\" href=\"#\" data-value=\"7\" data-placeholder=\"Название модуля\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Модули</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">Поиск</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
            <button class=\"component-search-cancel d-none\">Отмена</button>
          </div>

          <div class=\"component-search-quickaccess d-none\">
  <p class=\"component-search-title\">Быстрый доступ</p>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://ec2-18-157-81-67.eu-central-1.compute.amazonaws.com/admin9434fu3bddgkp9ptvzu/index.php/sell/orders?token=1392f1d3d75640965fc9045942f3a65e\"
             data-item=\"Заказы\"
    >Заказы</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://ec2-18-157-81-67.eu-central-1.compute.amazonaws.com/admin9434fu3bddgkp9ptvzu/index.php/sell/catalog/categories/new?token=1392f1d3d75640965fc9045942f3a65e\"
             data-item=\"Новая категория";
        // line 218
        echo "\"
    >Новая категория</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://ec2-18-157-81-67.eu-central-1.compute.amazonaws.com/admin9434fu3bddgkp9ptvzu/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=d0e719402750913e152cce97136cb5cd\"
             data-item=\"Новый купон\"
    >Новый купон</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://ec2-18-157-81-67.eu-central-1.compute.amazonaws.com/admin9434fu3bddgkp9ptvzu/index.php/sell/catalog/products-v2/create?token=1392f1d3d75640965fc9045942f3a65e\"
             data-item=\"Новый товар\"
    >Новый товар</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://ec2-18-157-81-67.eu-central-1.compute.amazonaws.com/admin9434fu3bddgkp9ptvzu/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=ad1f70884d586ed67106ba9f6adc1def\"
             data-item=\"Оценка каталога\"
    >Оценка каталога</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://ec2-18-157-81-67.eu-central-1.compute.amazonaws.com/admin9434fu3bddgkp9ptvzu/index.php/improve/modules/manage?token=1392f1d3d75640965fc9045942f3a65e\"
             data-item=\"Установленные модули\"
    >Установленные модули</a>
    <div class=\"dropdown-divider\"></div>
      <a id=\"quick-add-link\"
      class=\"dropdown-item js-quick-link\"
      href=\"#\"
      data-rand=\"109\"
      data-icon=\"icon-AdminAdvancedParameters\"
      data-method=\"add\"
      data-url=\"index.php/configure/advanced/performance\"
      data-post-link=\"http://ec2-18-157-81-67.eu-central-1.compute.amazonaws.com/admin9434fu3bddgkp9ptvzu/index.php?controller=AdminQuickAccesses&token=543140397853ac35970fc52b8f7539c1\"
      data-prompt-text=\"Задайте название ярлыка:\"
      data-link=\"Производительность - Список\"
    >
      <i class=\"material-icons\">add_circle</i>
      Add cur";
        // line 249
        echo "rent page to Quick Access
    </a>
    <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://ec2-18-157-81-67.eu-central-1.compute.amazonaws.com/admin9434fu3bddgkp9ptvzu/index.php?controller=AdminQuickAccesses&token=543140397853ac35970fc52b8f7539c1\">
    <i class=\"material-icons\">settings</i>
    Manage your quick accesses
  </a>
</div>
        </div>

        <div class=\"component-search-background d-none\"></div>
      </div>

      
      
      <div class=\"header-right\">
                  <div class=\"component\" id=\"header-shop-list-container\">
              <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://ec2-18-157-81-67.eu-central-1.compute.amazonaws.com/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>View my store</span>
    </a>
  </div>
          </div>
                          <div class=\"component header-right-component\" id=\"header-notifications-container\">
            <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Заказы<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#cus";
        // line 299
        echo "tomers-notifications\"
              role=\"tab\"
            >
              Клиенты<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Сообщения<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Сейчас нет новых заказов :(<br>
              Вы проверяли <strong><a href=\"http://ec2-18-157-81-67.eu-central-1.compute.amazonaws.com/admin9434fu3bddgkp9ptvzu/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=90e9d9ecbab97049e98904db4e23d911\">брошенные корзины</a></strong>?<br>Ваш следующий заказ может скрываться там!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Пока нет новых клиентов :(<br>
              Были ли вы активны в соцсетях в эти дни?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Пока нет сообщений.<br>
              Видимо, все ваши клиенты счастливы :)
         ";
        // line 339
        echo "   </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      c <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - зарегистрировано <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
          </div>
        
        <div class=\"component\" id=\"header-employee-container\">
          <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">
      <div class=\"employee-top\">
        <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"http://ec2-18-157-81-67.eu-central-1.compute.amazonaws.com/img/pr/default.jpg\" alt=\"Ди\" /></span>
        <span class=\"employee_profile\">С возвращением, Ди</span>
      </div>

      <a class=\"dropdown-item employee-link profile-link\" href=\"/admin9434fu3bddgkp9ptvzu/index.php/configure/advanced/employees/1/edit?_token=2_y2i5cLOxX23ecW7ukGkAcCrPtRSYlhmNm4KerICfw\">
      <i class=\"material-icons\">edit</i>
      <span>Ваш профиль</span>
    </a>
    </div>

    <p class=\"divider\"></p>
";
        // line 390
        echo "
    
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://ec2-18-157-81-67.eu-central-1.compute.amazonaws.com/admin9434fu3bddgkp9ptvzu/index.php?controller=AdminLogin&amp;logout=1&amp;token=b90e5987f72af5134d03513ae51f3873\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Выход</span>
    </a>
  </div>
</div>
        </div>
              </div>
    </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/admin9434fu3bddgkp9ptvzu/index.php/configure/advanced/employees/toggle-navigation?_token=2_y2i5cLOxX23ecW7ukGkAcCrPtRSYlhmNm4KerICfw\">
    <i class=\"material-icons rtl-flip\">chevron_left</i>
    <i class=\"material-icons rtl-flip\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <div class=\"logo-container\">
          <a id=\"header_logo\" class=\"logo float-left\" href=\"http://ec2-18-157-81-67.eu-central-1.compute.amazonaws.com/admin9434fu3bddgkp9ptvzu/index.php?controller=AdminDashboard&amp;token=7ec117f5b289e7892f6623ddff0eb632\"></a>
          <span id=\"shop_version\" class=\"header-version\">8.1.7</span>
      </div>

      <ul class=\"main-menu\">
              
                    
                    
          
            <li class=\"link-levelone\" data-submenu=\"1\" id=\"tab-AdminDashboard\">
              <a href=\"http://ec2-18-157-81-67.eu-central-1.compute.amazonaws.com/admin9434fu3bddgkp9ptvzu/index.php?controller=AdminDashboard&amp;token=7ec117f5b289e7892f6623ddff0eb632\" class=\"link\" >
                <i class=\"material-icons\">trending_up</i> <span>Пульт</span>
              </a>
            </li>

          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Продажа</span>
            </li>

                              
                  
            ";
        // line 437
        echo "                                          
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/admin9434fu3bddgkp9ptvzu/index.php/sell/orders/?_token=2_y2i5cLOxX23ecW7ukGkAcCrPtRSYlhmNm4KerICfw\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Заказы
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/admin9434fu3bddgkp9ptvzu/index.php/sell/orders/?_token=2_y2i5cLOxX23ecW7ukGkAcCrPtRSYlhmNm4KerICfw\" class=\"link\"> Заказы
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/admin9434fu3bddgkp9ptvzu/index.php/sell/orders/invoices/?_token=2_y2i5cLOxX23ecW7ukGkAcCrPtRSYlhmNm4KerICfw\" class=\"link\"> По счетам
                                </a>
                              </li>

                                                                                  
            ";
        // line 467
        echo "                  
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/admin9434fu3bddgkp9ptvzu/index.php/sell/orders/credit-slips/?_token=2_y2i5cLOxX23ecW7ukGkAcCrPtRSYlhmNm4KerICfw\" class=\"link\"> Платежные квитанции
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/admin9434fu3bddgkp9ptvzu/index.php/sell/orders/delivery-slips/?_token=2_y2i5cLOxX23ecW7ukGkAcCrPtRSYlhmNm4KerICfw\" class=\"link\"> Транспортные накладные
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://ec2-18-157-81-67.eu-central-1.compute.amazonaws.com/admin9434fu3bddgkp9ptvzu/index.php?controller=AdminCarts&amp;token=90e9d9ecbab97049e98904db4e23d911\" class=\"link\"> Корзины
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/";
        // line 497
        echo "admin9434fu3bddgkp9ptvzu/index.php/sell/catalog/products?_token=2_y2i5cLOxX23ecW7ukGkAcCrPtRSYlhmNm4KerICfw\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Каталог
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/admin9434fu3bddgkp9ptvzu/index.php/sell/catalog/products?_token=2_y2i5cLOxX23ecW7ukGkAcCrPtRSYlhmNm4KerICfw\" class=\"link\"> Товары
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/admin9434fu3bddgkp9ptvzu/index.php/sell/catalog/categories?_token=2_y2i5cLOxX23ecW7ukGkAcCrPtRSYlhmNm4KerICfw\" class=\"link\"> Категории
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
      ";
        // line 527
        echo "                          <a href=\"/admin9434fu3bddgkp9ptvzu/index.php/sell/catalog/monitoring/?_token=2_y2i5cLOxX23ecW7ukGkAcCrPtRSYlhmNm4KerICfw\" class=\"link\"> Мониторинг
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://ec2-18-157-81-67.eu-central-1.compute.amazonaws.com/admin9434fu3bddgkp9ptvzu/index.php?controller=AdminAttributesGroups&amp;token=2be30fbf0954e15e873541ffcdced0a1\" class=\"link\"> Атрибуты и характеристики
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/admin9434fu3bddgkp9ptvzu/index.php/sell/catalog/brands/?_token=2_y2i5cLOxX23ecW7ukGkAcCrPtRSYlhmNm4KerICfw\" class=\"link\"> Бренды и Поставщики
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/admin9434fu3bddgkp9ptvzu/index.php/sell/attachments/?_token=2_y2i5cLOxX23ecW7ukGkAcCrPtRSYlhmNm4KerICfw\" class=\"link\"> Файлы
                                </a>
                              </li>

                 ";
        // line 555
        echo "                                                                 
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://ec2-18-157-81-67.eu-central-1.compute.amazonaws.com/admin9434fu3bddgkp9ptvzu/index.php?controller=AdminCartRules&amp;token=d0e719402750913e152cce97136cb5cd\" class=\"link\"> Скидки
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/admin9434fu3bddgkp9ptvzu/index.php/sell/stocks/?_token=2_y2i5cLOxX23ecW7ukGkAcCrPtRSYlhmNm4KerICfw\" class=\"link\"> Запасы
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/admin9434fu3bddgkp9ptvzu/index.php/sell/customers/?_token=2_y2i5cLOxX23ecW7ukGkAcCrPtRSYlhmNm4KerICfw\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Клиенты
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
               ";
        // line 585
        echo "                                             </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/admin9434fu3bddgkp9ptvzu/index.php/sell/customers/?_token=2_y2i5cLOxX23ecW7ukGkAcCrPtRSYlhmNm4KerICfw\" class=\"link\"> Клиенты
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/admin9434fu3bddgkp9ptvzu/index.php/sell/addresses/?_token=2_y2i5cLOxX23ecW7ukGkAcCrPtRSYlhmNm4KerICfw\" class=\"link\"> Адреса
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"http://ec2-18-157-81-67.eu-central-1.compute.amazonaws.com/admin9434fu3bddgkp9ptvzu/index.php?controller=AdminCustomerThreads&amp;token=4bf1a6e664b4a75056b0e60cdce64f99\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      Клиентс�";
        // line 614
        echo "�ая служба
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://ec2-18-157-81-67.eu-central-1.compute.amazonaws.com/admin9434fu3bddgkp9ptvzu/index.php?controller=AdminCustomerThreads&amp;token=4bf1a6e664b4a75056b0e60cdce64f99\" class=\"link\"> Клиентская служба
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/admin9434fu3bddgkp9ptvzu/index.php/sell/customer-service/order-messages/?_token=2_y2i5cLOxX23ecW7ukGkAcCrPtRSYlhmNm4KerICfw\" class=\"link\"> Сообщения о заказах
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://ec2-18-157-81-67.eu-central-1.compute.amazonaws.com/admin9434fu3bddgkp9ptv";
        // line 641
        echo "zu/index.php?controller=AdminReturn&amp;token=a1f17529bf1f351e6a1a5a35e07469ba\" class=\"link\"> Возвраты товаров
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"http://ec2-18-157-81-67.eu-central-1.compute.amazonaws.com/admin9434fu3bddgkp9ptvzu/index.php?controller=AdminStats&amp;token=ad1f70884d586ed67106ba9f6adc1def\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Статистика
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"37\" id=\"tab-IMPROVE\">
                <span class=\"title\">Улучшения</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"38\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/admin9434fu3bddgkp9ptvzu/index.php/improve/modules/manage?_token=2_y2i5cLOxX23ecW7ukGkAcCrPtRSYlhmNm4KerICfw\" class=\"link\">
                      <i class=\"materi";
        // line 678
        echo "al-icons mi-extension\">extension</i>
                      <span>
                      Модули
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-38\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"39\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/admin9434fu3bddgkp9ptvzu/index.php/improve/modules/manage?_token=2_y2i5cLOxX23ecW7ukGkAcCrPtRSYlhmNm4KerICfw\" class=\"link\"> Module Manager
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/admin9434fu3bddgkp9ptvzu/index.php/improve/design/themes/?_token=2_y2i5cLOxX23ecW7ukGkAcCrPtRSYlhmNm4KerICfw\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Дизайн
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                ";
        // line 709
        echo "                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"127\" id=\"subtab-AdminThemesParent\">
                                <a href=\"/admin9434fu3bddgkp9ptvzu/index.php/improve/design/themes/?_token=2_y2i5cLOxX23ecW7ukGkAcCrPtRSYlhmNm4KerICfw\" class=\"link\"> Шаблон и логотип
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"45\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/admin9434fu3bddgkp9ptvzu/index.php/improve/design/mail_theme/?_token=2_y2i5cLOxX23ecW7ukGkAcCrPtRSYlhmNm4KerICfw\" class=\"link\"> Шаблон письма
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"47\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/admin9434fu3bddgkp9ptvzu/index.php/improve/design/cms-pages/?_token=2_y2i5cLOxX23ecW7ukGkAcCrPtRSYlhmNm4KerICfw\" class=\"link\"> Страницы
                                </a>
                              </li>

                                                                                  
                              
                                                            
                             ";
        // line 739
        echo " <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/admin9434fu3bddgkp9ptvzu/index.php/improve/design/modules/positions/?_token=2_y2i5cLOxX23ecW7ukGkAcCrPtRSYlhmNm4KerICfw\" class=\"link\"> Расположение блоков
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"49\" id=\"subtab-AdminImages\">
                                <a href=\"http://ec2-18-157-81-67.eu-central-1.compute.amazonaws.com/admin9434fu3bddgkp9ptvzu/index.php?controller=AdminImages&amp;token=9d3d70d24a6bf0d2af72a794a18c35ff\" class=\"link\"> Настройки изображений
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"118\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/admin9434fu3bddgkp9ptvzu/index.php/modules/link-widget/list?_token=2_y2i5cLOxX23ecW7ukGkAcCrPtRSYlhmNm4KerICfw\" class=\"link\"> Список ссылок
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"50\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://ec2-18-157-81-67.eu-central-1.compute.amazonaws.com/admin9434fu3b";
        // line 767
        echo "ddgkp9ptvzu/index.php?controller=AdminCarriers&amp;token=722dcd964992efd94b0ad45e9f9bf60d\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Доставка
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-50\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"51\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://ec2-18-157-81-67.eu-central-1.compute.amazonaws.com/admin9434fu3bddgkp9ptvzu/index.php?controller=AdminCarriers&amp;token=722dcd964992efd94b0ad45e9f9bf60d\" class=\"link\"> Перевозчики
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"52\" id=\"subtab-AdminShipping\">
                                <a href=\"/admin9434fu3bddgkp9ptvzu/index.php/improve/shipping/preferences/?_token=2_y2i5cLOxX23ecW7ukGkAcCrPtRSYlhmNm4KerICfw\" class=\"link\"> Настройки
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                ";
        // line 797
        echo "                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"53\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/admin9434fu3bddgkp9ptvzu/index.php/improve/payment/payment_methods?_token=2_y2i5cLOxX23ecW7ukGkAcCrPtRSYlhmNm4KerICfw\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Оплата
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"54\" id=\"subtab-AdminPayment\">
                                <a href=\"/admin9434fu3bddgkp9ptvzu/index.php/improve/payment/payment_methods?_token=2_y2i5cLOxX23ecW7ukGkAcCrPtRSYlhmNm4KerICfw\" class=\"link\"> Способы оплаты
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/admin9434fu3bddgkp9ptvzu/index.php/improve/payment/preferences?_token=2_y2i5cLOxX23ecW7ukGkAcCrPtRSYlhmNm4KerICfw\" class=\"link\"> Настройки
                                </a>
                              </li>

                                       ";
        // line 826
        echo "                                       </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"56\" id=\"subtab-AdminInternational\">
                    <a href=\"/admin9434fu3bddgkp9ptvzu/index.php/improve/international/localization/?_token=2_y2i5cLOxX23ecW7ukGkAcCrPtRSYlhmNm4KerICfw\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      Интернационализация
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/admin9434fu3bddgkp9ptvzu/index.php/improve/international/localization/?_token=2_y2i5cLOxX23ecW7ukGkAcCrPtRSYlhmNm4KerICfw\" class=\"link\"> Локализация
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/admin9434fu3bddgkp9ptvzu/index.php/improve/intern";
        // line 855
        echo "ational/zones/?_token=2_y2i5cLOxX23ecW7ukGkAcCrPtRSYlhmNm4KerICfw\" class=\"link\"> География
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"66\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/admin9434fu3bddgkp9ptvzu/index.php/improve/international/taxes/?_token=2_y2i5cLOxX23ecW7ukGkAcCrPtRSYlhmNm4KerICfw\" class=\"link\"> Налоги
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"69\" id=\"subtab-AdminTranslations\">
                                <a href=\"/admin9434fu3bddgkp9ptvzu/index.php/improve/international/translations/settings?_token=2_y2i5cLOxX23ecW7ukGkAcCrPtRSYlhmNm4KerICfw\" class=\"link\"> Переводы
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"70\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Настроить</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"71\" id=\"subtab-ShopParameters\">
                    <a href=\"/admin9434fu3bddgkp9ptvzu/index.php";
        // line 892
        echo "/configure/shop/preferences/preferences?_token=2_y2i5cLOxX23ecW7ukGkAcCrPtRSYlhmNm4KerICfw\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Параметры магазина
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-71\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/admin9434fu3bddgkp9ptvzu/index.php/configure/shop/preferences/preferences?_token=2_y2i5cLOxX23ecW7ukGkAcCrPtRSYlhmNm4KerICfw\" class=\"link\"> Общее
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"75\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/admin9434fu3bddgkp9ptvzu/index.php/configure/shop/order-preferences/?_token=2_y2i5cLOxX23ecW7ukGkAcCrPtRSYlhmNm4KerICfw\" class=\"link\"> Настройки заказов
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li c";
        // line 921
        echo "lass=\"link-leveltwo\" data-submenu=\"78\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/admin9434fu3bddgkp9ptvzu/index.php/configure/shop/product-preferences/?_token=2_y2i5cLOxX23ecW7ukGkAcCrPtRSYlhmNm4KerICfw\" class=\"link\"> Настройки товаров
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/admin9434fu3bddgkp9ptvzu/index.php/configure/shop/customer-preferences/?_token=2_y2i5cLOxX23ecW7ukGkAcCrPtRSYlhmNm4KerICfw\" class=\"link\"> Настройки клиента
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"83\" id=\"subtab-AdminParentStores\">
                                <a href=\"/admin9434fu3bddgkp9ptvzu/index.php/configure/shop/contacts/?_token=2_y2i5cLOxX23ecW7ukGkAcCrPtRSYlhmNm4KerICfw\" class=\"link\"> Контакты
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"86\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/admin9434fu3bddgkp9ptvzu/index.php/configure/shop/seo-urls/?_token=2_y2i5cLOxX23ecW7ukGkAcCrPtRSYlhmNm4KerICfw\" class=\"link\"> Трафик и SEO
                                </a>
                    ";
        // line 948
        echo "          </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://ec2-18-157-81-67.eu-central-1.compute.amazonaws.com/admin9434fu3bddgkp9ptvzu/index.php?controller=AdminSearchConf&amp;token=31b2a865302eadb472c33e5a21597d96\" class=\"link\"> Поиск
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"92\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/admin9434fu3bddgkp9ptvzu/index.php/configure/advanced/system-information/?_token=2_y2i5cLOxX23ecW7ukGkAcCrPtRSYlhmNm4KerICfw\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Расширенные параметры
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-92\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                ";
        // line 978
        echo "              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminInformation\">
                                <a href=\"/admin9434fu3bddgkp9ptvzu/index.php/configure/advanced/system-information/?_token=2_y2i5cLOxX23ecW7ukGkAcCrPtRSYlhmNm4KerICfw\" class=\"link\"> Информация
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"94\" id=\"subtab-AdminPerformance\">
                                <a href=\"/admin9434fu3bddgkp9ptvzu/index.php/configure/advanced/performance/?_token=2_y2i5cLOxX23ecW7ukGkAcCrPtRSYlhmNm4KerICfw\" class=\"link\"> Производительность
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"95\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/admin9434fu3bddgkp9ptvzu/index.php/configure/advanced/administration/?_token=2_y2i5cLOxX23ecW7ukGkAcCrPtRSYlhmNm4KerICfw\" class=\"link\"> Администрирование
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminEmails\">
                                <a href=\"/admin9434fu3bddgkp9ptvzu/index.php/configure/advanced/emails/?_token=2_y2i5cLOxX23ecW7ukGkAcCrPtRSYlhmNm4KerICfw\" class=\"link\"> E-mail
                                </a>";
        // line 1004
        echo "
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"97\" id=\"subtab-AdminImport\">
                                <a href=\"/admin9434fu3bddgkp9ptvzu/index.php/configure/advanced/import/?_token=2_y2i5cLOxX23ecW7ukGkAcCrPtRSYlhmNm4KerICfw\" class=\"link\"> Импорт
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"98\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/admin9434fu3bddgkp9ptvzu/index.php/configure/advanced/employees/?_token=2_y2i5cLOxX23ecW7ukGkAcCrPtRSYlhmNm4KerICfw\" class=\"link\"> Сотрудники
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"102\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/admin9434fu3bddgkp9ptvzu/index.php/configure/advanced/sql-requests/?_token=2_y2i5cLOxX23ecW7ukGkAcCrPtRSYlhmNm4KerICfw\" class=\"link\"> База данных
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminLogs\">
                                <a href=\"/admin943";
        // line 1035
        echo "4fu3bddgkp9ptvzu/index.php/configure/advanced/logs/?_token=2_y2i5cLOxX23ecW7ukGkAcCrPtRSYlhmNm4KerICfw\" class=\"link\"> Журнал событий
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminWebservice\">
                                <a href=\"/admin9434fu3bddgkp9ptvzu/index.php/configure/advanced/webservice-keys/?_token=2_y2i5cLOxX23ecW7ukGkAcCrPtRSYlhmNm4KerICfw\" class=\"link\"> Веб службы
                                </a>
                              </li>

                                                                                                                                                                                                                                                    
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"110\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/admin9434fu3bddgkp9ptvzu/index.php/configure/advanced/feature-flags/?_token=2_y2i5cLOxX23ecW7ukGkAcCrPtRSYlhmNm4KerICfw\" class=\"link\"> New &amp; Experimental Features
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"111\" id=\"subtab-AdminParentSecurity\">
                                <a href=\"/admin9434fu3bddgkp9ptvzu/index.php/configure/advanced/security/?_token=2_y2i5cLOxX23ecW7ukGkAcCrPtRSYlhmNm4KerICfw\" class=\"link\"> Security
                                </a>
  ";
        // line 1061
        echo "                            </li>

                                                                              </ul>
                                        </li>
                              
          
                  </ul>
  </div>
  
</nav>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Расширенные параметры</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/admin9434fu3bddgkp9ptvzu/index.php/configure/advanced/performance/?_token=2_y2i5cLOxX23ecW7ukGkAcCrPtRSYlhmNm4KerICfw\" aria-current=\"page\">Производительность</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Производительность          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                          <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-clear_cache\"
                  href=\"/admin9434fu3bddgkp9ptvzu/index.php/configure/advanced/performance/clear-cache?_token=2_y2i5cLOxX23ecW7ukGkAcCrPtRSYlhmNm4KerICfw\"                  title=\"Очистка кэша\"                                  >
                  <i class=\"material-icons\">delete</i>                  Очистка кэша
                </a>
                                      
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Помощь\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/admin9434fu3bddgkp9ptvzu/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%25";
        // line 1110
        echo "2Fru%252Fdoc%252FAdminAdvancedParametersPerformance%253Fversion%253D8.1.7%2526country%253Dru/%D0%9F%D0%BE%D0%BC%D0%BE%D1%89%D1%8C?_token=2_y2i5cLOxX23ecW7ukGkAcCrPtRSYlhmNm4KerICfw\"
                   id=\"product_form_open_help\"
                >
                  Помощь
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
                              <a
              class=\"btn btn-floating-item   pointer\"              id=\"page-header-desc-floating-configuration-clear_cache\"
              href=\"/admin9434fu3bddgkp9ptvzu/index.php/configure/advanced/performance/clear-cache?_token=2_y2i5cLOxX23ecW7ukGkAcCrPtRSYlhmNm4KerICfw\"              title=\"Очистка кэша\"            >
              Очистка кэша
              <i class=\"material-icons\">delete</i>            </a>
                  
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Помощь\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/admin9434fu3bddgkp9ptvzu/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fru%252Fdoc%252FAdminAdvancedParametersPerformance%253Fversion%253D8.1.7%2526country%253Dru/%D0%9F%D0%BE%D0%BC%D0%BE%D1%89%D1%8C?_token=2_y2i5cLOxX23ecW7ukGkAcCrPtRSYlhmNm4KerICfw\"
            >
              Помощь
            </a>
                        </div>
    </div>
  </div>
  
</div>

<div id=\"main-div\">
          
      <div class=\"content-div  \">

        

                                                        
        <div id=\"ajax_confirmation\" c";
        // line 1158
        echo "lass=\"alert alert-success\" style=\"display: none;\"></div>
<div id=\"content-message-box\"></div>


  ";
        // line 1162
        $this->displayBlock('content_header', $context, $blocks);
        $this->displayBlock('content', $context, $blocks);
        $this->displayBlock('content_footer', $context, $blocks);
        $this->displayBlock('sidebar_right', $context, $blocks);
        echo "

        

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>О, нет!</h1>
  <p class=\"mt-3\">
    Мобильная версия этой страницы еще не доступна.
  </p>
  <p class=\"mt-2\">
    Используйте настольный компьютер для просмотра этой страницы, пока она не адаптирована для мобильных устройств.
  </p>
  <p class=\"mt-2\">
    Спасибо.
  </p>
  <a href=\"http://ec2-18-157-81-67.eu-central-1.compute.amazonaws.com/admin9434fu3bddgkp9ptvzu/index.php?controller=AdminDashboard&amp;token=7ec117f5b289e7892f6623ddff0eb632\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons rtl-flip\">arrow_back</i>
    Назад
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      
    </div>
  
";
        // line 1196
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
    }

    // line 102
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1162
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_sidebar_right($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1196
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "__string_template__9360f72e9883f929c2fb8d9c365aa0dd";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1365 => 1196,  1344 => 1162,  1333 => 102,  1324 => 1196,  1284 => 1162,  1278 => 1158,  1228 => 1110,  1177 => 1061,  1149 => 1035,  1116 => 1004,  1088 => 978,  1056 => 948,  1027 => 921,  996 => 892,  957 => 855,  926 => 826,  895 => 797,  863 => 767,  833 => 739,  801 => 709,  768 => 678,  729 => 641,  700 => 614,  669 => 585,  637 => 555,  607 => 527,  575 => 497,  543 => 467,  511 => 437,  462 => 390,  409 => 339,  367 => 299,  315 => 249,  282 => 218,  251 => 189,  224 => 164,  193 => 135,  155 => 102,  143 => 92,  116 => 67,  87 => 40,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__9360f72e9883f929c2fb8d9c365aa0dd", "");
    }
}
