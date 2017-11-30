<?php

/* themes/artebike/templates/block/block--system-menu-block--footer.html.twig */
class __TwigTemplate_cb96d0b6b1372ddbfa97050a76b7aac62c0da4e5ae402d4eff941df0522adcf4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("block" => 2);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('block'),
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
        echo "<div class=\"col-12\">
    ";
        // line 2
        $this->displayBlock('content', $context, $blocks);
        // line 5
        echo "</div>";
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "        ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true));
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "themes/artebike/templates/block/block--system-menu-block--footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  56 => 3,  53 => 2,  49 => 5,  47 => 2,  44 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"col-12\">
    {% block content %}
        {{ content }}
    {% endblock %}
</div>", "themes/artebike/templates/block/block--system-menu-block--footer.html.twig", "D:\\CMS\\Promowebsite\\drupal\\themes\\artebike\\templates\\block\\block--system-menu-block--footer.html.twig");
    }
}
