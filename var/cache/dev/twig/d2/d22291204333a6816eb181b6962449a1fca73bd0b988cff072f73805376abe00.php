<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_993917c48ca918f86b830c3ddef5bb97c92f399305799a1bae14d5ef9da2bdc0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_658401464fefa8795d71fb83fdaa8e64f2ad6fd8462a4efa8860589d0037019e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_658401464fefa8795d71fb83fdaa8e64f2ad6fd8462a4efa8860589d0037019e->enter($__internal_658401464fefa8795d71fb83fdaa8e64f2ad6fd8462a4efa8860589d0037019e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_24065e3d5e8347dfcce6c841843ba0479fc7c7deee37859a5093fa7a4658f946 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24065e3d5e8347dfcce6c841843ba0479fc7c7deee37859a5093fa7a4658f946->enter($__internal_24065e3d5e8347dfcce6c841843ba0479fc7c7deee37859a5093fa7a4658f946_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_658401464fefa8795d71fb83fdaa8e64f2ad6fd8462a4efa8860589d0037019e->leave($__internal_658401464fefa8795d71fb83fdaa8e64f2ad6fd8462a4efa8860589d0037019e_prof);

        
        $__internal_24065e3d5e8347dfcce6c841843ba0479fc7c7deee37859a5093fa7a4658f946->leave($__internal_24065e3d5e8347dfcce6c841843ba0479fc7c7deee37859a5093fa7a4658f946_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1b0a115a616a3753678273f3db0fa05463d80124c148b782cd816bc51b09978d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b0a115a616a3753678273f3db0fa05463d80124c148b782cd816bc51b09978d->enter($__internal_1b0a115a616a3753678273f3db0fa05463d80124c148b782cd816bc51b09978d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_7bf67b76f61186e1c23eea15353d4e1fc25393ce0ea0d97e4b352fa4283b2a70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bf67b76f61186e1c23eea15353d4e1fc25393ce0ea0d97e4b352fa4283b2a70->enter($__internal_7bf67b76f61186e1c23eea15353d4e1fc25393ce0ea0d97e4b352fa4283b2a70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7bf67b76f61186e1c23eea15353d4e1fc25393ce0ea0d97e4b352fa4283b2a70->leave($__internal_7bf67b76f61186e1c23eea15353d4e1fc25393ce0ea0d97e4b352fa4283b2a70_prof);

        
        $__internal_1b0a115a616a3753678273f3db0fa05463d80124c148b782cd816bc51b09978d->leave($__internal_1b0a115a616a3753678273f3db0fa05463d80124c148b782cd816bc51b09978d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a187fd333ddb9668fbb011b2975b286741e4521261b6f6dafa0e94576fe74d31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a187fd333ddb9668fbb011b2975b286741e4521261b6f6dafa0e94576fe74d31->enter($__internal_a187fd333ddb9668fbb011b2975b286741e4521261b6f6dafa0e94576fe74d31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ce895baa9ff5439d626d7d8b02c42e683b85d4acbca803f6d1bd384865f4a22b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce895baa9ff5439d626d7d8b02c42e683b85d4acbca803f6d1bd384865f4a22b->enter($__internal_ce895baa9ff5439d626d7d8b02c42e683b85d4acbca803f6d1bd384865f4a22b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ce895baa9ff5439d626d7d8b02c42e683b85d4acbca803f6d1bd384865f4a22b->leave($__internal_ce895baa9ff5439d626d7d8b02c42e683b85d4acbca803f6d1bd384865f4a22b_prof);

        
        $__internal_a187fd333ddb9668fbb011b2975b286741e4521261b6f6dafa0e94576fe74d31->leave($__internal_a187fd333ddb9668fbb011b2975b286741e4521261b6f6dafa0e94576fe74d31_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7121e8c4b057c463c26ecb0c4b45b1887910dd9b9b9875b5a236662f7c4f9c5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7121e8c4b057c463c26ecb0c4b45b1887910dd9b9b9875b5a236662f7c4f9c5f->enter($__internal_7121e8c4b057c463c26ecb0c4b45b1887910dd9b9b9875b5a236662f7c4f9c5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6a522e3db8d18ad8ac5eddeea6b759ee659e87c2ad5c7433c2b48f9703cff8e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a522e3db8d18ad8ac5eddeea6b759ee659e87c2ad5c7433c2b48f9703cff8e0->enter($__internal_6a522e3db8d18ad8ac5eddeea6b759ee659e87c2ad5c7433c2b48f9703cff8e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6a522e3db8d18ad8ac5eddeea6b759ee659e87c2ad5c7433c2b48f9703cff8e0->leave($__internal_6a522e3db8d18ad8ac5eddeea6b759ee659e87c2ad5c7433c2b48f9703cff8e0_prof);

        
        $__internal_7121e8c4b057c463c26ecb0c4b45b1887910dd9b9b9875b5a236662f7c4f9c5f->leave($__internal_7121e8c4b057c463c26ecb0c4b45b1887910dd9b9b9875b5a236662f7c4f9c5f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/projets/adrar_reservation/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
