<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_74c868a56d6355b7de9680f17ca3ce640c925ebd6476d6efec672482a0905706 extends Twig_Template
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
        $__internal_79185343bdb87d6abfb2017631de01bc4f4f18adb19521e9015362dda7d6699d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79185343bdb87d6abfb2017631de01bc4f4f18adb19521e9015362dda7d6699d->enter($__internal_79185343bdb87d6abfb2017631de01bc4f4f18adb19521e9015362dda7d6699d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_b1935ccd87bdcccf6fb8b899d6011eff7f135a9d0cc1734f37f24440ab59d958 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1935ccd87bdcccf6fb8b899d6011eff7f135a9d0cc1734f37f24440ab59d958->enter($__internal_b1935ccd87bdcccf6fb8b899d6011eff7f135a9d0cc1734f37f24440ab59d958_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_79185343bdb87d6abfb2017631de01bc4f4f18adb19521e9015362dda7d6699d->leave($__internal_79185343bdb87d6abfb2017631de01bc4f4f18adb19521e9015362dda7d6699d_prof);

        
        $__internal_b1935ccd87bdcccf6fb8b899d6011eff7f135a9d0cc1734f37f24440ab59d958->leave($__internal_b1935ccd87bdcccf6fb8b899d6011eff7f135a9d0cc1734f37f24440ab59d958_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "/var/www/projets/adrar_reservation/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
