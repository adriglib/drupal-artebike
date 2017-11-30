<?php

/* themes/artebike/templates/layout/page--contact_page.html.twig */
class __TwigTemplate_7da8c788b6bee3e95a0efb3694a2e24b5b438ce3b5ef3575b1673a3c2d7cbbca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 1, "include" => 48);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'include'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 1
        if ($this->getAttribute(($context["page"] ?? null), "menu", array())) {
            // line 2
            echo "    <div>
        ";
            // line 3
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "menu", array()), "html", null, true));
            echo "
    </div>
";
        }
        // line 6
        echo "
<nav class=\"navbar navbar-light pt-4\">
    <div class=\"col-md-10 offset-md-1 col-sm-12\">
        <div class=\"navbar-brand\">
          ";
        // line 10
        if ($this->getAttribute(($context["page"] ?? null), "branding", array())) {
            // line 11
            echo "            ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "branding", array()), "html", null, true));
            echo "
          ";
        }
        // line 13
        echo "        </div>
        <div class=\"navbar-brand float-right menu-button\" onclick=\"openNav()\">
            <a href=\"#\">
                Menu
            </a>
        </div>
    </div>
</nav>

<main class=\"container tarieven\">
    <div class=\"row top-row pt-5 pb-3\">
        <div class=\"col-xs-12 col-md-6 offset-md-3\">
            <h1 class=\"big-title text-center\" data-aos=\"fade\" data-aos-easing=\"ease-in-sine\" data-aos-duration=\"800\">
                ";
        // line 26
        if ($this->getAttribute(($context["page"] ?? null), "header", array())) {
            // line 27
            echo "                    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header", array()), "html", null, true));
            echo "
                ";
        }
        // line 29
        echo "            </h1>
        </div>
    </div>
    <div class=\"row bottom-row\">
        <figure class=\"figure image-container col-xs-12 col-lg-12 pt-5\" data-aos=\"fade\" data-aos-easing=\"ease-in-out\" data-aos-duration=\"1200\" data-aos-delay=\"800\" style=\"margin-bottom: 0;\">
            ";
        // line 34
        if ($this->getAttribute(($context["page"] ?? null), "image", array())) {
            // line 35
            echo "                ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "image", array()), "html", null, true));
            echo "
            ";
        }
        // line 37
        echo "        </figure>
    </div>

</main>
<main class=\"container-fluid  orange-bg\">
    <div class=\"row col-xs-12 col-md-6 offset-md-3 text-white pt-5 pb-5\">
            ";
        // line 43
        if ($this->getAttribute(($context["page"] ?? null), "content", array())) {
            // line 44
            echo "                ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
            echo "
            ";
        }
        // line 46
        echo "    </div>
</main>
";
        // line 48
        $this->loadTemplate("@artebike/partials/footer.html.twig", "themes/artebike/templates/layout/page--contact_page.html.twig", 48)->display($context);
    }

    public function getTemplateName()
    {
        return "themes/artebike/templates/layout/page--contact_page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 48,  122 => 46,  116 => 44,  114 => 43,  106 => 37,  100 => 35,  98 => 34,  91 => 29,  85 => 27,  83 => 26,  68 => 13,  62 => 11,  60 => 10,  54 => 6,  48 => 3,  45 => 2,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if page.menu %}
    <div>
        {{ page.menu }}
    </div>
{% endif %}

<nav class=\"navbar navbar-light pt-4\">
    <div class=\"col-md-10 offset-md-1 col-sm-12\">
        <div class=\"navbar-brand\">
          {% if page.branding %}
            {{ page.branding }}
          {% endif %}
        </div>
        <div class=\"navbar-brand float-right menu-button\" onclick=\"openNav()\">
            <a href=\"#\">
                Menu
            </a>
        </div>
    </div>
</nav>

<main class=\"container tarieven\">
    <div class=\"row top-row pt-5 pb-3\">
        <div class=\"col-xs-12 col-md-6 offset-md-3\">
            <h1 class=\"big-title text-center\" data-aos=\"fade\" data-aos-easing=\"ease-in-sine\" data-aos-duration=\"800\">
                {% if page.header %}
                    {{ page.header }}
                {% endif %}
            </h1>
        </div>
    </div>
    <div class=\"row bottom-row\">
        <figure class=\"figure image-container col-xs-12 col-lg-12 pt-5\" data-aos=\"fade\" data-aos-easing=\"ease-in-out\" data-aos-duration=\"1200\" data-aos-delay=\"800\" style=\"margin-bottom: 0;\">
            {% if page.image %}
                {{ page.image }}
            {% endif %}
        </figure>
    </div>

</main>
<main class=\"container-fluid  orange-bg\">
    <div class=\"row col-xs-12 col-md-6 offset-md-3 text-white pt-5 pb-5\">
            {% if page.content %}
                {{ page.content }}
            {% endif %}
    </div>
</main>
{% include '@artebike/partials/footer.html.twig' %}
", "themes/artebike/templates/layout/page--contact_page.html.twig", "D:\\CMS\\Promowebsite\\drupal\\themes\\artebike\\templates\\layout\\page--contact_page.html.twig");
    }
}
