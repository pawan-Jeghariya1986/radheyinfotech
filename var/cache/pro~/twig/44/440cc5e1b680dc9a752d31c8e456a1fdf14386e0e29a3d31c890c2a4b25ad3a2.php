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

/* __string_template__c67d7b74d963d28906c31c5f13780a5b678d4f9822b4cb1139c80c704ca7f840 */
class __TwigTemplate_466b50fd7bb0bd3511a800bce88ee9d3e85de9f13239c68d06daccb6993689cc extends Template
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
<html lang=\"en\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/divyansh/radheyinfotech.com/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/divyansh/radheyinfotech.com/img/app_icon.png\" />

<title>Performance • Radhey Infotech Solutions Pvt Ltd</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminPerformance';
    var iso_user = 'en';
    var lang_is_rtl = '0';
    var full_language_code = 'en-us';
    var full_cldr_language_code = 'en-US';
    var country_iso_code = 'IN';
    var _PS_VERSION_ = '8.0.4';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'A new order has been placed on your shop.';
    var order_number_msg = 'Order number: ';
    var total_msg = 'Total: ';
    var from_msg = 'From: ';
    var see_order_msg = 'View this order';
    var new_customer_msg = 'A new customer registered on your shop.';
    var customer_name_msg = 'Customer name: ';
    var new_msg = 'A new message was posted on your shop.';
    var see_msg = 'Read this message';
    var token = '5192ef84827118dd1ed07bc4bab5f57f';
    var token_admin_orders = tokenAdminOrders = '410f4ad4d240a666b9061177f548c6fa';
    var token_admin_customers = '3f844db427092b7f472d3ecacf50b717';
    var token_admin_customer_threads = tokenAdminCustomerThreads = '800d6323c12fe2cb991e03d9c87ef9ed';
    var currentIndex = 'index.php?controller=AdminPerformance';
    var employee_token = '4d1ca6429360ed63fc61f77bdfb7257a';
    var choose_language_translate = 'Choose language:';
    var default_language = '1';
    var admin_modules_link = '/divyansh/radheyinfotech.com/admin4252vctx2cuvzq6tmdu/index.php/improve/modules/manage?_token=SZdr1ImF8s9Xg0rOwPrtUy5OIOKcG6rb6NOEmD_cs_U';
    var admin_notification_get_link = '/divyansh/radheyin";
        // line 42
        echo "fotech.com/admin4252vctx2cuvzq6tmdu/index.php/common/notifications?_token=SZdr1ImF8s9Xg0rOwPrtUy5OIOKcG6rb6NOEmD_cs_U';
    var admin_notification_push_link = adminNotificationPushLink = '/divyansh/radheyinfotech.com/admin4252vctx2cuvzq6tmdu/index.php/common/notifications/ack?_token=SZdr1ImF8s9Xg0rOwPrtUy5OIOKcG6rb6NOEmD_cs_U';
    var tab_modules_list = '';
    var update_success_msg = 'Update successful';
    var search_product_msg = 'Search for a product';
  </script>



<link
      rel=\"preload\"
      href=\"/divyansh/radheyinfotech.com/admin4252vctx2cuvzq6tmdu/themes/new-theme/public/703cf8f274fbb265d49c6262825780e1.preload.woff2\"
      as=\"font\"
      crossorigin
    >
      <link href=\"/divyansh/radheyinfotech.com/admin4252vctx2cuvzq6tmdu/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/divyansh/radheyinfotech.com/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/divyansh/radheyinfotech.com/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/divyansh/radheyinfotech.com/modules/blockwishlist/public/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/divyansh/radheyinfotech.com/admin4252vctx2cuvzq6tmdu/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/divyansh\\/radheyinfotech.com\\/admin4252vctx2cuvzq6tmdu\\/\";
var baseDir = \"\\/divyansh\\/radheyinfotech.com\\/\";
var changeFormLanguageUrl = \"\\/divyansh\\/radheyinfotech.com\\/admin4252vctx2cuvzq6tmdu\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=SZdr1ImF8s9Xg0rOwPrtUy5OIOKcG6rb6NOEmD_cs_U\";
var currency = {\"iso_code\":\"INR\",\"sign\":\"\\u20b9\",\"name\":\"Indian Rupee\",\"format\":null};
var currency_specifications = {\"symbol\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"INR\",\"currencySymbol\":\"\\u20b9\",\"numberSymbols\":[\".\",\",\",\";\",\"%\",\"-\",\"+";
        // line 68
        echo "\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"\\u00a4#,##0.00\",\"negativePattern\":\"-\\u00a4#,##0.00\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var number_specifications = {\"symbol\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":false};
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/divyansh/radheyinfotech.com/admin4252vctx2cuvzq6tmdu/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/divyansh/radheyinfotech.com/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/divyansh/radheyinfotech.com/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/divyansh/radheyinfotech.com/js/admin.js?v=8.0.4\"></script>
<script type=\"text/javascript\" src=\"/divyansh/radheyinfotech.com/admin4252vctx2cuvzq6tmdu/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/divyansh/radheyinfotech.com/js/tools.js?v=8.0.4\"></script>
<script type=\"text/javascript\" src=\"/divyansh/radheyinfotech.com/modules/blockwishlist/public/vendors.js\"></script>
<script type=\"text/javascript\" src=\"/divyansh/radheyinfotech.com/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/divyansh/radheyinfotech.com/admin4252vctx2cuvzq6tmdu/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/divyansh/radheyinfotech.com/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/divyansh/radheyinfotech.com/modules/ps_faviconnotificationbo/views/js/ps_f";
        // line 85
        echo "aviconnotificationbo.js\"></script>

  <script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF0067',
      textColor: '#FFFFFF',
      notificationGetUrl: '/divyansh/radheyinfotech.com/admin4252vctx2cuvzq6tmdu/index.php/common/notifications?_token=SZdr1ImF8s9Xg0rOwPrtUy5OIOKcG6rb6NOEmD_cs_U',
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
  class=\"lang-en adminperformance\"
  data-base-url=\"/divyansh/radheyinfotech.com/admin4252vctx2cuvzq6tmdu/index.php\"  data-token=\"SZdr1ImF8s9Xg0rOwPrtUy5OIOKcG6rb6NOEmD_cs_U\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost/divyansh/radheyinfotech.com/admin4252vctx2cuvzq6tmdu/index.php?controller=AdminDashboard&amp;token=e2b67321943acedae0f649a83fe50c09\"></a>
      <span id=\"shop_version\">8.0.4</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Quick Access
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/divyansh/radheyinfotech.com/admin4252vctx2cuvzq6tmdu/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=7ba5dfd1d8fe1c428b72700ea11ab45f\"
                 data-item=\"Catalog evaluation\"
      >Catalog evaluation</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/divyansh/radheyinfotech.com/admin4252vctx2cuvzq6tmdu/index.php/improve/modules/manage?token=54a2373785d58472e8a5ab9c00dfbd79\"
                 data-item=\"Installed modules\"
      >Installed modules</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/divyansh/radheyinfotech.com/admin4252vctx2cuvzq6tmdu/index.php/sell/catalog/categories/new?token=54a2373785d58472e8a5ab9c00dfbd79\"
                 data-item=\"New category\"
      >New category</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/divyansh/radheyinfotech.com/admin4252vc";
        // line 136
        echo "tx2cuvzq6tmdu/index.php/sell/catalog/products/new?token=54a2373785d58472e8a5ab9c00dfbd79\"
                 data-item=\"New product\"
      >New product</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/divyansh/radheyinfotech.com/admin4252vctx2cuvzq6tmdu/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=cea4dd8bbac23030c7f4ea90a2198d8d\"
                 data-item=\"New voucher\"
      >New voucher</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/divyansh/radheyinfotech.com/admin4252vctx2cuvzq6tmdu/index.php/sell/orders?token=54a2373785d58472e8a5ab9c00dfbd79\"
                 data-item=\"Orders\"
      >Orders</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"189\"
        data-icon=\"icon-AdminAdvancedParameters\"
        data-method=\"add\"
        data-url=\"index.php/configure/advanced/performance\"
        data-post-link=\"http://localhost/divyansh/radheyinfotech.com/admin4252vctx2cuvzq6tmdu/index.php?controller=AdminQuickAccesses&token=846d010f62d9fd3cf4df0889871d9104\"
        data-prompt-text=\"Please name this shortcut:\"
        data-link=\"Performance - List\"
      >
        <i class=\"material-icons\">add_circle</i>
        Add current page to Quick Access
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost/divyansh/radheyinfotech.com/admin4252vctx2cuvzq6tmdu/index.php?controller=AdminQuickAccesses&token=846d010f62d9fd3cf4df0889871d9104\">
      <i class=\"material-icons\">settings</i>
      Manage your quick accesses
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
    ";
        // line 175
        echo "  action=\"/divyansh/radheyinfotech.com/admin4252vctx2cuvzq6tmdu/index.php?controller=AdminSearch&amp;token=241b87be71eb5a5b6d9b82bbbfdca006\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Search (e.g.: product reference, customer name…)\" aria-label=\"Searchbar\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Everywhere
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Everywhere\" href=\"#\" data-value=\"0\" data-placeholder=\"What are you looking for?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Everywhere</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catalog\" href=\"#\" data-value=\"1\" data-placeholder=\"Product name, reference, etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catalog</a>
        <a class=\"dropdown-item\" data-item=\"Customers by name\" href=\"#\" data-value=\"2\" data-placeholder=\"Name\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Customers by name</a>
        <a class=\"dropdown-item\" data-item=\"Customers by ip address\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Customers by IP address</a>
        <a class=\"dropdown-item\" data-item=\"Orders\" href=\"#\" data-value=\"3\" data-placeholder=\"Order ID\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Orders</a>
        <a class=\"dropdown-item\" data-item=\"Invoices\" href=\"#\" data-value=\"4\" data-placeholder=\"Invoice number\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Invoices</a>
     ";
        // line 192
        echo "   <a class=\"dropdown-item\" data-item=\"Carts\" href=\"#\" data-value=\"5\" data-placeholder=\"Cart ID\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Carts</a>
        <a class=\"dropdown-item\" data-item=\"Modules\" href=\"#\" data-value=\"7\" data-placeholder=\"Module name\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Modules</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">SEARCH</span><i class=\"material-icons\">search</i></button>
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
            <button class=\"component-search-cancel d-none\">Cancel</button>
          </div>

          <div class=\"component-search-quickaccess d-none\">
  <p class=\"component-search-title\">Quick Access</p>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/divyansh/radheyinfotech.com/admin4252vctx2cuvzq6tmdu/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=7ba5dfd1d8fe1c428b72700ea11ab45f\"
             data-item=\"Catalog evaluation\"
    >Catalog evaluation</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/divyansh/radheyinfotech.com/admin4252vctx2cuvzq6tmdu/index.php/improve/modules/manage?token=54a2373785d58472e8a5ab9c00dfbd79\"
             data-item=\"Installed modules\"
    >Installed modules</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/divyansh/radheyinfotech.com/admin4252vctx2cuvzq6tmdu/index.php/sell/catalog/categories/new?token=54a2373785d58472e8a5ab9c00dfbd79\"
             data-item=\"New category\"
    >New category</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/divyansh/radheyinfotech.com/admin4252vctx2cuvzq6tmdu/index.php/sell/catalog/products/new?token=54a2373785d58472e8a5ab9c00dfbd79\"
             data-ite";
        // line 226
        echo "m=\"New product\"
    >New product</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/divyansh/radheyinfotech.com/admin4252vctx2cuvzq6tmdu/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=cea4dd8bbac23030c7f4ea90a2198d8d\"
             data-item=\"New voucher\"
    >New voucher</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/divyansh/radheyinfotech.com/admin4252vctx2cuvzq6tmdu/index.php/sell/orders?token=54a2373785d58472e8a5ab9c00dfbd79\"
             data-item=\"Orders\"
    >Orders</a>
    <div class=\"dropdown-divider\"></div>
      <a id=\"quick-add-link\"
      class=\"dropdown-item js-quick-link\"
      href=\"#\"
      data-rand=\"95\"
      data-icon=\"icon-AdminAdvancedParameters\"
      data-method=\"add\"
      data-url=\"index.php/configure/advanced/performance\"
      data-post-link=\"http://localhost/divyansh/radheyinfotech.com/admin4252vctx2cuvzq6tmdu/index.php?controller=AdminQuickAccesses&token=846d010f62d9fd3cf4df0889871d9104\"
      data-prompt-text=\"Please name this shortcut:\"
      data-link=\"Performance - List\"
    >
      <i class=\"material-icons\">add_circle</i>
      Add current page to Quick Access
    </a>
    <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost/divyansh/radheyinfotech.com/admin4252vctx2cuvzq6tmdu/index.php?controller=AdminQuickAccesses&token=846d010f62d9fd3cf4df0889871d9104\">
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
    <a class=\"link\" id=\"header_shopname\" href=\"http://localhost/divyansh/radheyinfotech.com/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>View my store</span>
    </a>
  </div>
          </div>
                         ";
        // line 272
        echo " <div class=\"component header-right-component\" id=\"header-notifications-container\">
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
              Orders<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Customers<span id=\"_nb_new_customers_\"></span>
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
              Messages<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new order for now :(<br>
              Have you checked your &lt;strong&gt;&lt";
        // line 324
        echo ";a href=\"http://localhost/divyansh/radheyinfotech.com/admin4252vctx2cuvzq6tmdu/index.php?controller=AdminCarts&amp;action=filterOnlyAbandonedCarts&amp;token=3fc70b3e4532bada938cae802c62911a\"&gt;abandoned carts&lt;/a&gt;&lt;/strong&gt;?&lt;br&gt;Your next order could be hiding there!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new customer for now :(<br>
              Are you active on social media these days?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new message for now.<br>
              Seems like all your customers are happy :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      from <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - registered <strong>_date_add_</strong>
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
       ";
        // line 370
        echo " 
        <div class=\"component\" id=\"header-employee-container\">
          <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">
      <div class=\"employee-top\">
        <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"http://localhost/divyansh/radheyinfotech.com/img/pr/default.jpg\" alt=\"Divyansh\" /></span>
        <span class=\"employee_profile\">Welcome back Divyansh</span>
      </div>

      <a class=\"dropdown-item employee-link profile-link\" href=\"/divyansh/radheyinfotech.com/admin4252vctx2cuvzq6tmdu/index.php/configure/advanced/employees/1/edit?_token=SZdr1ImF8s9Xg0rOwPrtUy5OIOKcG6rb6NOEmD_cs_U\">
      <i class=\"material-icons\">edit</i>
      <span>Your profile</span>
    </a>
    </div>

    <p class=\"divider\"></p>

    
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://localhost/divyansh/radheyinfotech.com/admin4252vctx2cuvzq6tmdu/index.php?controller=AdminLogin&amp;logout=1&amp;token=486ffdb39f7ff391210d1490ec84b43a\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Sign out</span>
    </a>
  </div>
</div>
        </div>
              </div>
    </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/divyansh/radheyinfotech.com/admin4252vctx2cuvzq6tmdu/index.php/configure/advanced/employees/toggle-navigation?_token=SZdr1ImF8s9Xg0rOwPrtUy5OIOKcG6rb6NOEmD_cs_U\">
    <i class=\"material-icons rtl-flip\">chevron_left</i>
    <i class=\"material-icons rtl-flip\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <div class=\"logo-container\">
          <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost/divyansh/radheyinfotech.com/admin4252vctx2cuvzq6tmdu/index.php?controller=AdminDashboard&amp;";
        // line 411
        echo "token=e2b67321943acedae0f649a83fe50c09\"></a>
          <span id=\"shop_version\" class=\"header-version\">8.0.4</span>
      </div>

      <ul class=\"main-menu\">
              
                    
                    
          
            <li class=\"link-levelone\" data-submenu=\"1\" id=\"tab-AdminDashboard\">
              <a href=\"http://localhost/divyansh/radheyinfotech.com/admin4252vctx2cuvzq6tmdu/index.php?controller=AdminDashboard&amp;token=e2b67321943acedae0f649a83fe50c09\" class=\"link\" >
                <i class=\"material-icons\">trending_up</i> <span>Dashboard</span>
              </a>
            </li>

          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Sell</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/divyansh/radheyinfotech.com/admin4252vctx2cuvzq6tmdu/index.php/sell/orders/?_token=SZdr1ImF8s9Xg0rOwPrtUy5OIOKcG6rb6NOEmD_cs_U\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Orders
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                        ";
        // line 453
        echo "      <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/divyansh/radheyinfotech.com/admin4252vctx2cuvzq6tmdu/index.php/sell/orders/?_token=SZdr1ImF8s9Xg0rOwPrtUy5OIOKcG6rb6NOEmD_cs_U\" class=\"link\"> Orders
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/divyansh/radheyinfotech.com/admin4252vctx2cuvzq6tmdu/index.php/sell/orders/invoices/?_token=SZdr1ImF8s9Xg0rOwPrtUy5OIOKcG6rb6NOEmD_cs_U\" class=\"link\"> Invoices
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/divyansh/radheyinfotech.com/admin4252vctx2cuvzq6tmdu/index.php/sell/orders/credit-slips/?_token=SZdr1ImF8s9Xg0rOwPrtUy5OIOKcG6rb6NOEmD_cs_U\" class=\"link\"> Credit Slips
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/divyansh/radheyinfotech.com/admin4252vctx2cuvzq6tmdu/index.php/sell/orders/delivery-slips/?_token=SZdr1ImF8s9Xg0rOwPrtUy5OIOKcG6rb6NOEmD_cs_U\" class=\"link\"> Delivery Slips
                                </a>
                         ";
        // line 480
        echo "     </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://localhost/divyansh/radheyinfotech.com/admin4252vctx2cuvzq6tmdu/index.php?controller=AdminCarts&amp;token=3fc70b3e4532bada938cae802c62911a\" class=\"link\"> Shopping Carts
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/divyansh/radheyinfotech.com/admin4252vctx2cuvzq6tmdu/index.php/sell/catalog/products?_token=SZdr1ImF8s9Xg0rOwPrtUy5OIOKcG6rb6NOEmD_cs_U\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catalog
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/divyansh/radheyinfotech.com/admin425";
        // line 511
        echo "2vctx2cuvzq6tmdu/index.php/sell/catalog/products?_token=SZdr1ImF8s9Xg0rOwPrtUy5OIOKcG6rb6NOEmD_cs_U\" class=\"link\"> Products
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/divyansh/radheyinfotech.com/admin4252vctx2cuvzq6tmdu/index.php/sell/catalog/categories?_token=SZdr1ImF8s9Xg0rOwPrtUy5OIOKcG6rb6NOEmD_cs_U\" class=\"link\"> Categories
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/divyansh/radheyinfotech.com/admin4252vctx2cuvzq6tmdu/index.php/sell/catalog/monitoring/?_token=SZdr1ImF8s9Xg0rOwPrtUy5OIOKcG6rb6NOEmD_cs_U\" class=\"link\"> Monitoring
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://localhost/divyansh/radheyinfotech.com/admin4252vctx2cuvzq6tmdu/index.php?controller=AdminAttributesGroups&amp;token=2de47ece1fe99118e68127218e6ed9ad\" class=\"link\"> Attributes &amp; Features
                                </a>
                              </li>

                                                                                  
  ";
        // line 540
        echo "                            
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/divyansh/radheyinfotech.com/admin4252vctx2cuvzq6tmdu/index.php/sell/catalog/brands/?_token=SZdr1ImF8s9Xg0rOwPrtUy5OIOKcG6rb6NOEmD_cs_U\" class=\"link\"> Brands &amp; Suppliers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/divyansh/radheyinfotech.com/admin4252vctx2cuvzq6tmdu/index.php/sell/attachments/?_token=SZdr1ImF8s9Xg0rOwPrtUy5OIOKcG6rb6NOEmD_cs_U\" class=\"link\"> Files
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://localhost/divyansh/radheyinfotech.com/admin4252vctx2cuvzq6tmdu/index.php?controller=AdminCartRules&amp;token=cea4dd8bbac23030c7f4ea90a2198d8d\" class=\"link\"> Discounts
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/divyansh/radheyinfotech.com/admin4252vctx2cuvzq6tmdu/index.php/s";
        // line 567
        echo "ell/stocks/?_token=SZdr1ImF8s9Xg0rOwPrtUy5OIOKcG6rb6NOEmD_cs_U\" class=\"link\"> Stock
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/divyansh/radheyinfotech.com/admin4252vctx2cuvzq6tmdu/index.php/sell/customers/?_token=SZdr1ImF8s9Xg0rOwPrtUy5OIOKcG6rb6NOEmD_cs_U\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Customers
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/divyansh/radheyinfotech.com/admin4252vctx2cuvzq6tmdu/index.php/sell/customers/?_token=SZdr1ImF8s9Xg0rOwPrtUy5OIOKcG6rb6NOEmD_cs_U\" class=\"link\"> Customers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                        ";
        // line 599
        echo "      <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/divyansh/radheyinfotech.com/admin4252vctx2cuvzq6tmdu/index.php/sell/addresses/?_token=SZdr1ImF8s9Xg0rOwPrtUy5OIOKcG6rb6NOEmD_cs_U\" class=\"link\"> Addresses
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"http://localhost/divyansh/radheyinfotech.com/admin4252vctx2cuvzq6tmdu/index.php?controller=AdminCustomerThreads&amp;token=800d6323c12fe2cb991e03d9c87ef9ed\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      Customer Service
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://localhost/divyansh/radheyinfotech.com/admin4252vctx2cuvzq6tmdu/index.php?controller=AdminCustomerThreads&amp;token=800d6323c12fe2cb991e03d9c87ef9ed\" clas";
        // line 625
        echo "s=\"link\"> Customer Service
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/divyansh/radheyinfotech.com/admin4252vctx2cuvzq6tmdu/index.php/sell/customer-service/order-messages/?_token=SZdr1ImF8s9Xg0rOwPrtUy5OIOKcG6rb6NOEmD_cs_U\" class=\"link\"> Order Messages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://localhost/divyansh/radheyinfotech.com/admin4252vctx2cuvzq6tmdu/index.php?controller=AdminReturn&amp;token=850333b8f6b7dddaa42127a7b1211f94\" class=\"link\"> Merchandise Returns
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"http://localhost/divyansh/radheyinfotech.com/admin4252vctx2cuvzq6tmdu/index.php?controller=AdminStats&amp;token=7ba5dfd1d8fe1c428b72700ea11ab45f\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Stats
                      </span>
                                          ";
        // line 657
        echo "          <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"37\" id=\"tab-IMPROVE\">
                <span class=\"title\">Improve</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"38\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/divyansh/radheyinfotech.com/admin4252vctx2cuvzq6tmdu/index.php/improve/modules/manage?_token=SZdr1ImF8s9Xg0rOwPrtUy5OIOKcG6rb6NOEmD_cs_U\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Modules
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-38\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"39\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/divyansh/radheyinfotech.com/admin4252vctx2cuvzq6tmdu/index.php/improve/modules/manage?_token=SZdr1ImF8s9Xg0rOwPrtUy5OIOKcG6rb6NOEmD_cs_U\" class=\"link\">";
        // line 691
        echo " Module Manager
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/divyansh/radheyinfotech.com/admin4252vctx2cuvzq6tmdu/index.php/improve/design/themes/?_token=SZdr1ImF8s9Xg0rOwPrtUy5OIOKcG6rb6NOEmD_cs_U\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Design
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"126\" id=\"subtab-AdminThemesParent\">
                                <a href=\"/divyansh/radheyinfotech.com/admin4252vctx2cuvzq6tmdu/index.php/improve/design/themes/?_token=SZdr1ImF8s9Xg0rOwPrtUy5OIOKcG6rb6NOEmD_cs_U\" class=\"link\"> Theme &amp; Logo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                        ";
        // line 723
        echo "      <li class=\"link-leveltwo\" data-submenu=\"45\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/divyansh/radheyinfotech.com/admin4252vctx2cuvzq6tmdu/index.php/improve/design/mail_theme/?_token=SZdr1ImF8s9Xg0rOwPrtUy5OIOKcG6rb6NOEmD_cs_U\" class=\"link\"> Email Theme
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"47\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/divyansh/radheyinfotech.com/admin4252vctx2cuvzq6tmdu/index.php/improve/design/cms-pages/?_token=SZdr1ImF8s9Xg0rOwPrtUy5OIOKcG6rb6NOEmD_cs_U\" class=\"link\"> Pages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/divyansh/radheyinfotech.com/admin4252vctx2cuvzq6tmdu/index.php/improve/design/modules/positions/?_token=SZdr1ImF8s9Xg0rOwPrtUy5OIOKcG6rb6NOEmD_cs_U\" class=\"link\"> Positions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"49\" id=\"subtab-AdminImages\">
                                <a href=\"http://localhost/divyansh/radheyinfotech.com/admin4252vctx2cuvzq6tmdu/index.php?controller=AdminImages&amp;token=880ac548cab6333f3c6cf735cf6a492a\" class=\"link\"> Image Settings
             ";
        // line 749
        echo "                   </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"117\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/divyansh/radheyinfotech.com/admin4252vctx2cuvzq6tmdu/index.php/modules/link-widget/list?_token=SZdr1ImF8s9Xg0rOwPrtUy5OIOKcG6rb6NOEmD_cs_U\" class=\"link\"> Link List
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"50\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://localhost/divyansh/radheyinfotech.com/admin4252vctx2cuvzq6tmdu/index.php?controller=AdminCarriers&amp;token=4081defd93edecbbed1ca35a8af998a7\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Shipping
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-50\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"51\" id=\"subtab-AdminCarr";
        // line 780
        echo "iers\">
                                <a href=\"http://localhost/divyansh/radheyinfotech.com/admin4252vctx2cuvzq6tmdu/index.php?controller=AdminCarriers&amp;token=4081defd93edecbbed1ca35a8af998a7\" class=\"link\"> Carriers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"52\" id=\"subtab-AdminShipping\">
                                <a href=\"/divyansh/radheyinfotech.com/admin4252vctx2cuvzq6tmdu/index.php/improve/shipping/preferences/?_token=SZdr1ImF8s9Xg0rOwPrtUy5OIOKcG6rb6NOEmD_cs_U\" class=\"link\"> Preferences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"53\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/divyansh/radheyinfotech.com/admin4252vctx2cuvzq6tmdu/index.php/improve/payment/payment_methods?_token=SZdr1ImF8s9Xg0rOwPrtUy5OIOKcG6rb6NOEmD_cs_U\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Payment
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                     ";
        // line 810
        echo "                                 
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"54\" id=\"subtab-AdminPayment\">
                                <a href=\"/divyansh/radheyinfotech.com/admin4252vctx2cuvzq6tmdu/index.php/improve/payment/payment_methods?_token=SZdr1ImF8s9Xg0rOwPrtUy5OIOKcG6rb6NOEmD_cs_U\" class=\"link\"> Payment Methods
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/divyansh/radheyinfotech.com/admin4252vctx2cuvzq6tmdu/index.php/improve/payment/preferences?_token=SZdr1ImF8s9Xg0rOwPrtUy5OIOKcG6rb6NOEmD_cs_U\" class=\"link\"> Preferences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"56\" id=\"subtab-AdminInternational\">
                    <a href=\"/divyansh/radheyinfotech.com/admin4252vctx2cuvzq6tmdu/index.php/improve/international/localization/?_token=SZdr1ImF8s9Xg0rOwPrtUy5OIOKcG6rb6NOEmD_cs_U\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      International
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_";
        // line 839
        echo "arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/divyansh/radheyinfotech.com/admin4252vctx2cuvzq6tmdu/index.php/improve/international/localization/?_token=SZdr1ImF8s9Xg0rOwPrtUy5OIOKcG6rb6NOEmD_cs_U\" class=\"link\"> Localization
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/divyansh/radheyinfotech.com/admin4252vctx2cuvzq6tmdu/index.php/improve/international/zones/?_token=SZdr1ImF8s9Xg0rOwPrtUy5OIOKcG6rb6NOEmD_cs_U\" class=\"link\"> Locations
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"66\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/divyansh/radheyinfotech.com/admin4252vctx2cuvzq6tmdu/index.php/improve/international/taxes/?_token=SZdr1ImF8s9Xg0rOwPrtUy5OIOKcG6rb6NOEmD_cs_U\" class=\"link\"> Taxes
                                </a>
                              </li>

                                                                                  
               ";
        // line 868
        echo "               
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"69\" id=\"subtab-AdminTranslations\">
                                <a href=\"/divyansh/radheyinfotech.com/admin4252vctx2cuvzq6tmdu/index.php/improve/international/translations/settings?_token=SZdr1ImF8s9Xg0rOwPrtUy5OIOKcG6rb6NOEmD_cs_U\" class=\"link\"> Translations
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"70\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configure</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"71\" id=\"subtab-ShopParameters\">
                    <a href=\"/divyansh/radheyinfotech.com/admin4252vctx2cuvzq6tmdu/index.php/configure/shop/preferences/preferences?_token=SZdr1ImF8s9Xg0rOwPrtUy5OIOKcG6rb6NOEmD_cs_U\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Shop Parameters
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-71\" class=\"submenu panel-collapse\">
                                                      
                              
          ";
        // line 904
        echo "                                                  
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/divyansh/radheyinfotech.com/admin4252vctx2cuvzq6tmdu/index.php/configure/shop/preferences/preferences?_token=SZdr1ImF8s9Xg0rOwPrtUy5OIOKcG6rb6NOEmD_cs_U\" class=\"link\"> General
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"75\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/divyansh/radheyinfotech.com/admin4252vctx2cuvzq6tmdu/index.php/configure/shop/order-preferences/?_token=SZdr1ImF8s9Xg0rOwPrtUy5OIOKcG6rb6NOEmD_cs_U\" class=\"link\"> Order Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"78\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/divyansh/radheyinfotech.com/admin4252vctx2cuvzq6tmdu/index.php/configure/shop/product-preferences/?_token=SZdr1ImF8s9Xg0rOwPrtUy5OIOKcG6rb6NOEmD_cs_U\" class=\"link\"> Product Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/divyansh/radheyinfotech.com/admin4252vctx2cuvzq6tm";
        // line 930
        echo "du/index.php/configure/shop/customer-preferences/?_token=SZdr1ImF8s9Xg0rOwPrtUy5OIOKcG6rb6NOEmD_cs_U\" class=\"link\"> Customer Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"83\" id=\"subtab-AdminParentStores\">
                                <a href=\"/divyansh/radheyinfotech.com/admin4252vctx2cuvzq6tmdu/index.php/configure/shop/contacts/?_token=SZdr1ImF8s9Xg0rOwPrtUy5OIOKcG6rb6NOEmD_cs_U\" class=\"link\"> Contact
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"86\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/divyansh/radheyinfotech.com/admin4252vctx2cuvzq6tmdu/index.php/configure/shop/seo-urls/?_token=SZdr1ImF8s9Xg0rOwPrtUy5OIOKcG6rb6NOEmD_cs_U\" class=\"link\"> Traffic &amp; SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://localhost/divyansh/radheyinfotech.com/admin4252vctx2cuvzq6tmdu/index.php?controller=AdminSearchConf&amp;token=225a5528642b3773454a8362c2a2b7f0\" class=\"link\"> Search
                                </a>
                              </li>

                                                                              </ul>
             ";
        // line 959
        echo "                           </li>
                                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"92\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/divyansh/radheyinfotech.com/admin4252vctx2cuvzq6tmdu/index.php/configure/advanced/system-information/?_token=SZdr1ImF8s9Xg0rOwPrtUy5OIOKcG6rb6NOEmD_cs_U\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Advanced Parameters
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-92\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminInformation\">
                                <a href=\"/divyansh/radheyinfotech.com/admin4252vctx2cuvzq6tmdu/index.php/configure/advanced/system-information/?_token=SZdr1ImF8s9Xg0rOwPrtUy5OIOKcG6rb6NOEmD_cs_U\" class=\"link\"> Information
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"94\" id=\"subtab-AdminPerformance\">
                      ";
        // line 987
        echo "          <a href=\"/divyansh/radheyinfotech.com/admin4252vctx2cuvzq6tmdu/index.php/configure/advanced/performance/?_token=SZdr1ImF8s9Xg0rOwPrtUy5OIOKcG6rb6NOEmD_cs_U\" class=\"link\"> Performance
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"95\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/divyansh/radheyinfotech.com/admin4252vctx2cuvzq6tmdu/index.php/configure/advanced/administration/?_token=SZdr1ImF8s9Xg0rOwPrtUy5OIOKcG6rb6NOEmD_cs_U\" class=\"link\"> Administration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminEmails\">
                                <a href=\"/divyansh/radheyinfotech.com/admin4252vctx2cuvzq6tmdu/index.php/configure/advanced/emails/?_token=SZdr1ImF8s9Xg0rOwPrtUy5OIOKcG6rb6NOEmD_cs_U\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"97\" id=\"subtab-AdminImport\">
                                <a href=\"/divyansh/radheyinfotech.com/admin4252vctx2cuvzq6tmdu/index.php/configure/advanced/import/?_token=SZdr1ImF8s9Xg0rOwPrtUy5OIOKcG6rb6NOEmD_cs_U\" class=\"link\"> Import
                                </a>
                              </li>

                                                ";
        // line 1015
        echo "                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"98\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/divyansh/radheyinfotech.com/admin4252vctx2cuvzq6tmdu/index.php/configure/advanced/employees/?_token=SZdr1ImF8s9Xg0rOwPrtUy5OIOKcG6rb6NOEmD_cs_U\" class=\"link\"> Team
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"102\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/divyansh/radheyinfotech.com/admin4252vctx2cuvzq6tmdu/index.php/configure/advanced/sql-requests/?_token=SZdr1ImF8s9Xg0rOwPrtUy5OIOKcG6rb6NOEmD_cs_U\" class=\"link\"> Database
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminLogs\">
                                <a href=\"/divyansh/radheyinfotech.com/admin4252vctx2cuvzq6tmdu/index.php/configure/advanced/logs/?_token=SZdr1ImF8s9Xg0rOwPrtUy5OIOKcG6rb6NOEmD_cs_U\" class=\"link\"> Logs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminWebservice\">
                                <a href=\"/divyansh/radheyinfotech.com/admin4252vctx2cu";
        // line 1043
        echo "vzq6tmdu/index.php/configure/advanced/webservice-keys/?_token=SZdr1ImF8s9Xg0rOwPrtUy5OIOKcG6rb6NOEmD_cs_U\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                              
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"109\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/divyansh/radheyinfotech.com/admin4252vctx2cuvzq6tmdu/index.php/configure/advanced/feature-flags/?_token=SZdr1ImF8s9Xg0rOwPrtUy5OIOKcG6rb6NOEmD_cs_U\" class=\"link\"> New &amp; Experimental Features
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"110\" id=\"subtab-AdminParentSecurity\">
                                <a href=\"/divyansh/radheyinfotech.com/admin4252vctx2cuvzq6tmdu/index.php/configure/advanced/security/?_token=SZdr1ImF8s9Xg0rOwPrtUy5OIOKcG6rb6NOEmD_cs_U\" class=\"link\"> Security
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                  </ul>
  </div>
  
</nav>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Advanced Parameters</li>
          
                      <li class=\"breadcrumb-item active\">
              <";
        // line 1083
        echo "a href=\"/divyansh/radheyinfotech.com/admin4252vctx2cuvzq6tmdu/index.php/configure/advanced/performance/?_token=SZdr1ImF8s9Xg0rOwPrtUy5OIOKcG6rb6NOEmD_cs_U\" aria-current=\"page\">Performance</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Performance          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                          <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-clear_cache\"
                  href=\"/divyansh/radheyinfotech.com/admin4252vctx2cuvzq6tmdu/index.php/configure/advanced/performance/clear-cache?_token=SZdr1ImF8s9Xg0rOwPrtUy5OIOKcG6rb6NOEmD_cs_U\"                  title=\"Clear cache\"                >
                  <i class=\"material-icons\">delete</i>                  Clear cache
                </a>
                                      
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Help\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/divyansh/radheyinfotech.com/admin4252vctx2cuvzq6tmdu/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fen%252Fdoc%252FAdminAdvancedParametersPerformance%253Fversion%253D8.0.4%2526country%253Den/Help?_token=SZdr1ImF8s9Xg0rOwPrtUy5OIOKcG6rb6NOEmD_cs_U\"
                   id=\"product_form_open_help\"
                >
                  Help
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-containe";
        // line 1128
        echo "r collapse\">
      <div class=\"btn-floating-menu\">
        
                              <a
              class=\"btn btn-floating-item   pointer\"              id=\"page-header-desc-floating-configuration-clear_cache\"
              href=\"/divyansh/radheyinfotech.com/admin4252vctx2cuvzq6tmdu/index.php/configure/advanced/performance/clear-cache?_token=SZdr1ImF8s9Xg0rOwPrtUy5OIOKcG6rb6NOEmD_cs_U\"              title=\"Clear cache\"            >
              Clear cache
              <i class=\"material-icons\">delete</i>            </a>
                  
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Help\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/divyansh/radheyinfotech.com/admin4252vctx2cuvzq6tmdu/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fen%252Fdoc%252FAdminAdvancedParametersPerformance%253Fversion%253D8.0.4%2526country%253Den/Help?_token=SZdr1ImF8s9Xg0rOwPrtUy5OIOKcG6rb6NOEmD_cs_U\"
            >
              Help
            </a>
                        </div>
    </div>
  </div>
  
</div>

<div id=\"main-div\">
          
      <div class=\"content-div  \">

        

                                                        
        <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>
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
  <h1>Oh no!</h1>
  <p class=\"mt-3\">
    The mobile version of this page is not available yet.
  </p>
  <p class=\"mt-2\">
    Please use a desktop computer to access this page, until is adapted to mobile.
  </p>
  <p class=\"mt-2\">
    Thank you.
  </p>
  <a href=\"http://localhost/divyansh/radheyinfotech.com/admin4252vctx2cuvzq6tmdu/index.php?controller=AdminDashboard&amp;token=e2b67321943acedae0f649a83fe50c09\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons rtl-flip\">arrow_back</i>
    Back
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
        return "__string_template__c67d7b74d963d28906c31c5f13780a5b678d4f9822b4cb1139c80c704ca7f840";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1363 => 1196,  1342 => 1162,  1331 => 102,  1322 => 1196,  1282 => 1162,  1246 => 1128,  1199 => 1083,  1157 => 1043,  1127 => 1015,  1097 => 987,  1067 => 959,  1036 => 930,  1008 => 904,  970 => 868,  939 => 839,  908 => 810,  876 => 780,  843 => 749,  815 => 723,  781 => 691,  745 => 657,  711 => 625,  683 => 599,  649 => 567,  620 => 540,  589 => 511,  556 => 480,  527 => 453,  483 => 411,  440 => 370,  392 => 324,  338 => 272,  290 => 226,  254 => 192,  235 => 175,  194 => 136,  155 => 102,  136 => 85,  117 => 68,  89 => 42,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__c67d7b74d963d28906c31c5f13780a5b678d4f9822b4cb1139c80c704ca7f840", "");
    }
}
