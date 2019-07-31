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

/* partials/entries-list.html.twig */
class __TwigTemplate_cabb226e00e0a1d0dff4ec1481b04ee12fb58a1b13d8fbd08f844a527720e174 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["tbl_data"] = $this->getAttribute(($context["flex_entries"] ?? null), "getData", []);
        // line 2
        echo "
";
        // line 3
        $context["entry_url"] = ((((($context["base_url_relative"] ?? null) . "/") . ($context["location"] ?? null)) . "/entries/id") . ($context["separator"] ?? null));
        // line 4
        echo "
";
        // line 5
        if ( !twig_length_filter($this->env, $this->getAttribute(($context["tbl_data"] ?? null), "toArray", []))) {
            // line 6
            echo "    <div class=\"no-entries\">
        There are currently no entries, click the <a href=\"";
            // line 7
            echo twig_escape_filter($this->env, (($context["base_url"] ?? null) . "/flex-directory/entries/action:add"), "html", null, true);
            echo "\">Add</a> button to create a new one...
    </div>
";
        } else {
            // line 10
            echo "    <table id=\"data-table\" class=\"tablesorter tablesorter-default\">
        <colgroup>
            <col width=\"10\" />
            <col width=\"10\" />
            <col width=\"30\" />
            <col width=\"30\" />
        </colgroup>
        <thead>
        <tr>

            <th>&nbsp;</th>
            <th>Numéro <img src=\"data:image/gif;base64,R0lGODlhFQAJAIAAACMtMP///yH5BAEAAAEALAAAAAAVAAkAAAIXjI+AywnaYnhUMoqt3gZXPmVg94yJVQAAOw==\" /></th>
            <th>Titre <img src=\"data:image/gif;base64,R0lGODlhFQAJAIAAACMtMP///yH5BAEAAAEALAAAAAAVAAkAAAIXjI+AywnaYnhUMoqt3gZXPmVg94yJVQAAOw==\" /></th>
            <th>Image </th>

        </tr>
        </thead>
        <tbody>
        ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["tbl_data"] ?? null), "toArray", []));
            foreach ($context['_seq'] as $context["id"] => $context["entry"]) {
                // line 29
                echo "            <tr>

              <td>
                  <a href=\"";
                // line 32
                echo twig_escape_filter($this->env, (($context["entry_url"] ?? null) . $context["id"]), "html", null, true);
                echo "\"
                     title=\"Edit '";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "title", []), "html", null, true);
                echo "'\"
                     class=\"edit-action\"><i class=\"fa fa-pencil\"></i></a>
                  <a href=\"#delete\"
                     class=\"page-delete delete-action\"
                     title=\"Delete '";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "title", []), "html", null, true);
                echo "'\"
                     data-remodal-target=\"delete\"
                     data-delete-url=\"";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "addNonce", [0 => ((((($context["entry_url"] ?? null) . $context["id"]) . "/action") . ($context["separator"] ?? null)) . "delete"), 1 => "admin-form", 2 => "admin-nonce"], "method"), "html", null, true);
                echo "\"><i class=\"fa fa-close\"></i></a>
              </td>
                <td class=\"numero-cell\">
                    <a href=\"";
                // line 42
                echo twig_escape_filter($this->env, (($context["entry_url"] ?? null) . $context["id"]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "numero", []), "html", null, true);
                echo "</a>
                </td>

                <td>
                    <a href=\"";
                // line 46
                echo twig_escape_filter($this->env, (($context["entry_url"] ?? null) . $context["id"]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "title", []), "html", null, true);
                echo "</a>
                </td>
                <td>
                  ";
                // line 49
                if (twig_first($this->env, twig_get_array_keys_filter($this->getAttribute($context["entry"], "image_cover", [])))) {
                    // line 50
                    echo "                    <img src=\"";
                    echo twig_escape_filter($this->env, ((($context["base_url_absolute"] ?? null) . "/") . twig_first($this->env, twig_get_array_keys_filter($this->getAttribute($context["entry"], "image_cover", [])))), "html", null, true);
                    echo "\" class=\"list-picture\" />
                  ";
                }
                // line 52
                echo "                </td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['id'], $context['entry'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "        </tbody>
    </table>

";
        }
        // line 59
        echo "
";
        // line 60
        $this->loadTemplate("partials/modal-remove.html.twig", "partials/entries-list.html.twig", 60)->display(twig_array_merge($context, ["name" => "entry"]));
    }

    public function getTemplateName()
    {
        return "partials/entries-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 60,  141 => 59,  135 => 55,  127 => 52,  121 => 50,  119 => 49,  111 => 46,  102 => 42,  96 => 39,  91 => 37,  84 => 33,  80 => 32,  75 => 29,  71 => 28,  51 => 10,  45 => 7,  42 => 6,  40 => 5,  37 => 4,  35 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set tbl_data = flex_entries.getData %}

{% set entry_url =  base_url_relative ~ '/' ~ location ~ '/entries/id' ~ separator %}

{% if not tbl_data.toArray|length %}
    <div class=\"no-entries\">
        There are currently no entries, click the <a href=\"{{ base_url ~ '/flex-directory/entries/action:add' }}\">Add</a> button to create a new one...
    </div>
{% else %}
    <table id=\"data-table\" class=\"tablesorter tablesorter-default\">
        <colgroup>
            <col width=\"10\" />
            <col width=\"10\" />
            <col width=\"30\" />
            <col width=\"30\" />
        </colgroup>
        <thead>
        <tr>

            <th>&nbsp;</th>
            <th>Numéro <img src=\"data:image/gif;base64,R0lGODlhFQAJAIAAACMtMP///yH5BAEAAAEALAAAAAAVAAkAAAIXjI+AywnaYnhUMoqt3gZXPmVg94yJVQAAOw==\" /></th>
            <th>Titre <img src=\"data:image/gif;base64,R0lGODlhFQAJAIAAACMtMP///yH5BAEAAAEALAAAAAAVAAkAAAIXjI+AywnaYnhUMoqt3gZXPmVg94yJVQAAOw==\" /></th>
            <th>Image </th>

        </tr>
        </thead>
        <tbody>
        {% for id,entry in tbl_data.toArray %}
            <tr>

              <td>
                  <a href=\"{{ entry_url ~ id }}\"
                     title=\"Edit '{{ entry.title }}'\"
                     class=\"edit-action\"><i class=\"fa fa-pencil\"></i></a>
                  <a href=\"#delete\"
                     class=\"page-delete delete-action\"
                     title=\"Delete '{{ entry.title }}'\"
                     data-remodal-target=\"delete\"
                     data-delete-url=\"{{ uri.addNonce(entry_url ~ id  ~ '/action' ~ separator ~ 'delete', 'admin-form', 'admin-nonce') }}\"><i class=\"fa fa-close\"></i></a>
              </td>
                <td class=\"numero-cell\">
                    <a href=\"{{ entry_url ~ id }}\">{{ entry.numero }}</a>
                </td>

                <td>
                    <a href=\"{{ entry_url ~ id }}\">{{ entry.title }}</a>
                </td>
                <td>
                  {% if entry.image_cover|keys|first %}
                    <img src=\"{{ base_url_absolute ~ \"/\" ~ entry.image_cover|keys|first }}\" class=\"list-picture\" />
                  {% endif %}
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

{% endif %}

{% include 'partials/modal-remove.html.twig' with { name: 'entry' } %}
", "partials/entries-list.html.twig", "/Applications/MAMP/htdocs/FoWcuriosities/user/plugins/flex-directory/admin/templates/partials/entries-list.html.twig");
    }
}
