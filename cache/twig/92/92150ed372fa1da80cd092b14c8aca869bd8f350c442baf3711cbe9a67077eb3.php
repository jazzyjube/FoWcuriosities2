<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* flex-directory.html.twig */
class __TwigTemplate_d5930430dab03b25b5553de2d09d320ab7a792b4a41ce36193740295367ba295 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'titlebar' => [$this, 'block_titlebar'],
            'content_top' => [$this, 'block_content_top'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 4
        $context["base_route"] = ($context["location"] ?? null);
        // line 5
        $context["separator"] = $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "param_sep", []);
        // line 7
        $context["tabs"] = [0 => "Directory"];
        // line 16
        $context["action"] = ((($context["action"] ?? null)) ? (($context["action"] ?? null)) : ("edit"));
        // line 18
        $context["template"] = (((($context["action"] ?? null) == "add")) ? ("edit") : ((((($context["action"] ?? null) == "delete")) ? ("list") : (($context["action"] ?? null)))));
        // line 2
        $this->parent = $this->loadTemplate("partials/base.html.twig", "flex-directory.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_head($context, array $blocks = [])
    {
        // line 10
        echo "    ";
        if ((null === ($context["target"] ?? null))) {
            // line 11
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->redirectFunc((($context["base_url"] ?? null) . "/flex-directory/entries")), "html", null, true);
            echo "
    ";
        }
        // line 13
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
    }

    // line 20
    public function block_titlebar($context, array $blocks = [])
    {
        // line 21
        echo "    <div class=\"button-bar\">
        ";
        // line 22
        if ((($context["action"] ?? null) == "list")) {
            // line 23
            echo "            <a class=\"button\" href=\"";
            echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
            echo "\"><i class=\"fa fa-reply\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACK"), "html", null, true);
            echo "</a>
            <a class=\"button\" href=\"";
            // line 24
            echo twig_escape_filter($this->env, (((($context["base_url"] ?? null) . "/flex-directory/") . ($context["target"] ?? null)) . "/action:add"), "html", null, true);
            echo "\"><i class=\"fa fa-plus\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD"), "html", null, true);
            echo "</a>
        ";
        } else {
            // line 26
            echo "            <a class=\"button\" href=\"";
            echo twig_escape_filter($this->env, ((($context["base_url"] ?? null) . "/flex-directory/") . ($context["target"] ?? null)), "html", null, true);
            echo "\"><i class=\"fa fa-reply\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACK"), "html", null, true);
            echo "</a>
            <button class=\"button\" type=\"submit\" name=\"task\" value=\"save\" form=\"blueprints\"><i class=\"fa fa-check\"></i> ";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SAVE"), "html", null, true);
            echo "</button>
        ";
        }
        // line 29
        echo "
    </div>
    <h1><i class=\"fa fa-fw fa-file-text-o\"></i> ";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("Les curiositées FoW"), "html", null, true);
        echo "</h1>
";
    }

    // line 34
    public function block_content_top($context, array $blocks = [])
    {
        // line 35
        echo "    <div class=\"alert notice\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SAVE_LOCATION"), "html", null, true);
        echo ": <b>user/data/";
        echo twig_escape_filter($this->env, ($context["base_route"] ?? null), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, ($context["target"] ?? null), "html", null, true);
        echo ".json</b></div>
";
    }

    // line 38
    public function block_content($context, array $blocks = [])
    {
        // line 39
        echo "    <div id=\"directory\">
    ";
        // line 40
        $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = null;
        try {
            $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 =             $this->loadTemplate((((("partials/" . ($context["target"] ?? null)) . "-") . ($context["template"] ?? null)) . ".html.twig"), "flex-directory.html.twig", 40);
        } catch (LoaderError $e) {
            // ignore missing template
        }
        if ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) {
            $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4->display($context);
        }
        // line 41
        echo "    </div>

        <style>

        .alert.notice {
              display: none;
          }
          #admin-main .admin-block {
              padding-top: 15px !important;
              padding-bottom: 10px;
          }

        </style>
        <script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-3.4.1.js\"></script>
        <script type=\"text/javascript\">

          \$( document ).ready(function() {

            if (window.location.href.indexOf(':add') != -1) {

              var existingNumbers = [];

              \$.getJSON( \"";
        // line 63
        echo twig_escape_filter($this->env, ($context["home_url"] ?? null), "html", null, true);
        echo "/user/data/flex-directory/entries.json\", function( json ) {
                  \$.each( json, function( key, val ) {
                      existingNumbers.push(  val.numero );
                   });
              });

              \$( \"#blueprints\" ).submit(function( event ) {

                var newNumber = \$( \".block-number input\" ).val();
                if(existingNumbers.indexOf(parseInt(newNumber, 10)) != -1){
                    var message = \"Ce numéro de curiosité est déjà pris ...\"
                    if(\$(\".alert-custom\").length == 0){
                      \$(\".default-box-shadow\").prepend('<div class=\"alert error alert-custom\">'+message+'</div>');
                    }else{
                      \$(\".alert-custom\").fadeOut();
                      \$(\".alert-custom\").fadeIn();
                    }
                    event.preventDefault();
                }else{
                    return;
                }

              });

            }

          });

        </script>

";
    }

    public function getTemplateName()
    {
        return "flex-directory.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 63,  146 => 41,  136 => 40,  133 => 39,  130 => 38,  119 => 35,  116 => 34,  110 => 31,  106 => 29,  101 => 27,  94 => 26,  87 => 24,  80 => 23,  78 => 22,  75 => 21,  72 => 20,  65 => 13,  59 => 11,  56 => 10,  53 => 9,  48 => 2,  46 => 18,  44 => 16,  42 => 7,  40 => 5,  38 => 4,  32 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'partials/base.html.twig' %}

{% set base_route = location %}
{% set separator = config.system.param_sep %}

{% set tabs = ['Directory'] %}

{% block head %}
    {% if target is null %}
    {{ redirect_me(base_url ~ '/flex-directory/entries') }}
    {% endif %}
    {{ parent() }}
{% endblock %}

{% set action = action ?: 'edit' %}

{% set template = (action == 'add') ? 'edit' : (action == 'delete') ? 'list' : action %}

{% block titlebar %}
    <div class=\"button-bar\">
        {% if action == 'list' %}
            <a class=\"button\" href=\"{{ base_url }}\"><i class=\"fa fa-reply\"></i> {{ \"PLUGIN_ADMIN.BACK\"|tu }}</a>
            <a class=\"button\" href=\"{{ base_url ~ '/flex-directory/' ~ target ~ '/action:add' }}\"><i class=\"fa fa-plus\"></i> {{ \"PLUGIN_ADMIN.ADD\"|tu }}</a>
        {% else %}
            <a class=\"button\" href=\"{{ base_url ~ '/flex-directory/' ~ target }}\"><i class=\"fa fa-reply\"></i> {{ \"PLUGIN_ADMIN.BACK\"|tu }}</a>
            <button class=\"button\" type=\"submit\" name=\"task\" value=\"save\" form=\"blueprints\"><i class=\"fa fa-check\"></i> {{ \"PLUGIN_ADMIN.SAVE\"|tu }}</button>
        {% endif %}

    </div>
    <h1><i class=\"fa fa-fw fa-file-text-o\"></i> {{ \"Les curiositées FoW\"|tu }}</h1>
{% endblock %}

{% block content_top %}
    <div class=\"alert notice\">{{ \"PLUGIN_ADMIN.SAVE_LOCATION\"|tu }}: <b>user/data/{{ base_route }}/{{ target }}.json</b></div>
{% endblock %}

{% block content %}
    <div id=\"directory\">
    {% include \"partials/\"~target~\"-\"~template~\".html.twig\" ignore missing %}
    </div>

        <style>

        .alert.notice {
              display: none;
          }
          #admin-main .admin-block {
              padding-top: 15px !important;
              padding-bottom: 10px;
          }

        </style>
        <script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-3.4.1.js\"></script>
        <script type=\"text/javascript\">

          \$( document ).ready(function() {

            if (window.location.href.indexOf(':add') != -1) {

              var existingNumbers = [];

              \$.getJSON( \"{{ home_url }}/user/data/flex-directory/entries.json\", function( json ) {
                  \$.each( json, function( key, val ) {
                      existingNumbers.push(  val.numero );
                   });
              });

              \$( \"#blueprints\" ).submit(function( event ) {

                var newNumber = \$( \".block-number input\" ).val();
                if(existingNumbers.indexOf(parseInt(newNumber, 10)) != -1){
                    var message = \"Ce numéro de curiosité est déjà pris ...\"
                    if(\$(\".alert-custom\").length == 0){
                      \$(\".default-box-shadow\").prepend('<div class=\"alert error alert-custom\">'+message+'</div>');
                    }else{
                      \$(\".alert-custom\").fadeOut();
                      \$(\".alert-custom\").fadeIn();
                    }
                    event.preventDefault();
                }else{
                    return;
                }

              });

            }

          });

        </script>

{% endblock %}
", "flex-directory.html.twig", "/Applications/MAMP/htdocs/FoWcuriosities/user/plugins/flex-directory/admin/templates/flex-directory.html.twig");
    }
}
