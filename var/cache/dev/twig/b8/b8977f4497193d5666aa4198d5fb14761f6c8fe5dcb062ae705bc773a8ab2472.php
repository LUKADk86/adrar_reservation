<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_5cf7f5f7a9341b476c5a26bb488adf88dc03032b6ca7df8b1378e7eeab7fa8b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_16bf6e431fa3fdf61b540fb09e0382074624190c6cbfbebf054cc11590524c1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16bf6e431fa3fdf61b540fb09e0382074624190c6cbfbebf054cc11590524c1c->enter($__internal_16bf6e431fa3fdf61b540fb09e0382074624190c6cbfbebf054cc11590524c1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_6796850f56fa2c499a6ff1bc1b6c2fd3bbc2a7e94e12f934b46ccc6f318e6a20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6796850f56fa2c499a6ff1bc1b6c2fd3bbc2a7e94e12f934b46ccc6f318e6a20->enter($__internal_6796850f56fa2c499a6ff1bc1b6c2fd3bbc2a7e94e12f934b46ccc6f318e6a20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_16bf6e431fa3fdf61b540fb09e0382074624190c6cbfbebf054cc11590524c1c->leave($__internal_16bf6e431fa3fdf61b540fb09e0382074624190c6cbfbebf054cc11590524c1c_prof);

        
        $__internal_6796850f56fa2c499a6ff1bc1b6c2fd3bbc2a7e94e12f934b46ccc6f318e6a20->leave($__internal_6796850f56fa2c499a6ff1bc1b6c2fd3bbc2a7e94e12f934b46ccc6f318e6a20_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7e8814fb68ded5de769e057088a7848fb9f72fd19d5245693ae9578ea0fd9586 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e8814fb68ded5de769e057088a7848fb9f72fd19d5245693ae9578ea0fd9586->enter($__internal_7e8814fb68ded5de769e057088a7848fb9f72fd19d5245693ae9578ea0fd9586_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_34433a0af43d54fc63d513cf85b2cce88f4e2183c6d8da2bf50873fad66990e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34433a0af43d54fc63d513cf85b2cce88f4e2183c6d8da2bf50873fad66990e2->enter($__internal_34433a0af43d54fc63d513cf85b2cce88f4e2183c6d8da2bf50873fad66990e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_34433a0af43d54fc63d513cf85b2cce88f4e2183c6d8da2bf50873fad66990e2->leave($__internal_34433a0af43d54fc63d513cf85b2cce88f4e2183c6d8da2bf50873fad66990e2_prof);

        
        $__internal_7e8814fb68ded5de769e057088a7848fb9f72fd19d5245693ae9578ea0fd9586->leave($__internal_7e8814fb68ded5de769e057088a7848fb9f72fd19d5245693ae9578ea0fd9586_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/var/www/projets/adrar_reservation/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
