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

/* flex-directory/site.html.twig */
class __TwigTemplate_c105f264b485d7b172db82dc8be44b4f542ccec38d13fc3a80f50580481fd842 extends \Twig\Template
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
        $context["data"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->sortByKeyFilter($this->getAttribute($this->getAttribute(($context["flex_entries"] ?? null), "getData", [], "method"), "toArray", [], "method"), "numero");
        // line 2
        $context["data2"] = ($context["curiosity_requested"] ?? null);
        // line 3
        echo "
<script>document.documentElement.className=\"js\";var supportsCssVars=function(){var e,t=document.createElement(\"style\");return t.innerHTML=\"root: { --tmp-var: bold; }\",document.head.appendChild(t),e=!!(window.CSS&&window.CSS.supports&&window.CSS.supports(\"font-weight\",\"var(--tmp-var)\")),t.parentNode.removeChild(t),e};supportsCssVars()||alert(\"Please view this demo in a modern browser that supports CSS Variables.\");</script>

<div id=\"flex-directory\">
    <div class=\"text-center\">
        <h5>Découvrez les autres curiosités !</h5>
    </div>
      <ul class=\"list\">
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["data"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 12
            echo "            <li>
                <div class=\"entry-details\">
                  <p class=\"numero\" style=\"float:left\">
                     ";
            // line 15
            echo $this->getAttribute($context["entry"], "numero", []);
            echo "
                  </p>
                  <p class=\"knowmore\" style=\"float:right\">
                     <a href=\"?curiosity=";
            // line 18
            echo $this->getAttribute($context["entry"], "numero", []);
            echo "\">En savoir plus</a>
                  </p>
                  <p class=\"title\" style=\"clear:both\">
                     ";
            // line 21
            echo $this->getAttribute($context["entry"], "title", []);
            echo "
                  </p>
                </div>
                ";
            // line 24
            if ($this->getAttribute($context["entry"], "image_cover", [])) {
                // line 25
                echo "                  <div class=\"entry-extra\">
                    <p>
                      <img src=\"";
                // line 27
                echo ((($context["base_url_absolute"] ?? null) . "/") . twig_first($this->env, twig_get_array_keys_filter($this->getAttribute($context["entry"], "image_cover", []))));
                echo "\" class=\"list-picture\" />
                    </p>
                  </div>
                ";
            }
            // line 31
            echo "            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "    </ul>
</div>


<script src=\"";
        // line 37
        echo ($context["theme_url"] ?? null);
        echo "/js/demo.js\"></script>
<script src=\"";
        // line 38
        echo ($context["theme_url"] ?? null);
        echo "/js/three.min.js\"></script>
<script src=\"";
        // line 39
        echo ($context["theme_url"] ?? null);
        echo "/js/perlin.js\"></script>
<script src=\"";
        // line 40
        echo ($context["theme_url"] ?? null);
        echo "/js/TweenMax.min.js\"></script>
<script src=\"";
        // line 41
        echo ($context["theme_url"] ?? null);
        echo "/js/demo3.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "flex-directory/site.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 41,  109 => 40,  105 => 39,  101 => 38,  97 => 37,  91 => 33,  84 => 31,  77 => 27,  73 => 25,  71 => 24,  65 => 21,  59 => 18,  53 => 15,  48 => 12,  44 => 11,  34 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set data = flex_entries.getData().toArray()|sort_by_key('numero') %}
{% set data2 = curiosity_requested %}

<script>document.documentElement.className=\"js\";var supportsCssVars=function(){var e,t=document.createElement(\"style\");return t.innerHTML=\"root: { --tmp-var: bold; }\",document.head.appendChild(t),e=!!(window.CSS&&window.CSS.supports&&window.CSS.supports(\"font-weight\",\"var(--tmp-var)\")),t.parentNode.removeChild(t),e};supportsCssVars()||alert(\"Please view this demo in a modern browser that supports CSS Variables.\");</script>

<div id=\"flex-directory\">
    <div class=\"text-center\">
        <h5>Découvrez les autres curiosités !</h5>
    </div>
      <ul class=\"list\">
        {% for entry in data %}
            <li>
                <div class=\"entry-details\">
                  <p class=\"numero\" style=\"float:left\">
                     {{ entry.numero }}
                  </p>
                  <p class=\"knowmore\" style=\"float:right\">
                     <a href=\"?curiosity={{ entry.numero }}\">En savoir plus</a>
                  </p>
                  <p class=\"title\" style=\"clear:both\">
                     {{ entry.title }}
                  </p>
                </div>
                {% if (entry.image_cover) %}
                  <div class=\"entry-extra\">
                    <p>
                      <img src=\"{{ base_url_absolute ~ \"/\" ~ entry.image_cover|keys|first }}\" class=\"list-picture\" />
                    </p>
                  </div>
                {% endif %}
            </li>
        {% endfor %}
    </ul>
</div>


<script src=\"{{ theme_url }}/js/demo.js\"></script>
<script src=\"{{ theme_url }}/js/three.min.js\"></script>
<script src=\"{{ theme_url }}/js/perlin.js\"></script>
<script src=\"{{ theme_url }}/js/TweenMax.min.js\"></script>
<script src=\"{{ theme_url }}/js/demo3.js\"></script>
", "flex-directory/site.html.twig", "/Applications/MAMP/htdocs/FoWcuriosities/user/plugins/flex-directory/templates/flex-directory/site.html.twig");
    }
}
