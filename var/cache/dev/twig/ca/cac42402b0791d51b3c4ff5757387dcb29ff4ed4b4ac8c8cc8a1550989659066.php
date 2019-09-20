<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_7a56631aec9ecc9a55b7dfb35d6581121066a4fb4cae0634e626cb86147c0ba2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_d0a769430afec510187a1f7abf2ec40e952d32973480aa50681478744b3ee16d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0a769430afec510187a1f7abf2ec40e952d32973480aa50681478744b3ee16d->enter($__internal_d0a769430afec510187a1f7abf2ec40e952d32973480aa50681478744b3ee16d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_a6bf837d1f87f7dea0772fbcab6a8c3daab93b71c16b16afc4b01b9c7d58c813 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6bf837d1f87f7dea0772fbcab6a8c3daab93b71c16b16afc4b01b9c7d58c813->enter($__internal_a6bf837d1f87f7dea0772fbcab6a8c3daab93b71c16b16afc4b01b9c7d58c813_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d0a769430afec510187a1f7abf2ec40e952d32973480aa50681478744b3ee16d->leave($__internal_d0a769430afec510187a1f7abf2ec40e952d32973480aa50681478744b3ee16d_prof);

        
        $__internal_a6bf837d1f87f7dea0772fbcab6a8c3daab93b71c16b16afc4b01b9c7d58c813->leave($__internal_a6bf837d1f87f7dea0772fbcab6a8c3daab93b71c16b16afc4b01b9c7d58c813_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_89297a5c96ca7c493d86fbcf3624652165b28a1acea085a49e615a21810950a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89297a5c96ca7c493d86fbcf3624652165b28a1acea085a49e615a21810950a2->enter($__internal_89297a5c96ca7c493d86fbcf3624652165b28a1acea085a49e615a21810950a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_af2b72b6dede9df372a96cff3db531125e9553fe6664166184311af2d4d81c6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af2b72b6dede9df372a96cff3db531125e9553fe6664166184311af2d4d81c6b->enter($__internal_af2b72b6dede9df372a96cff3db531125e9553fe6664166184311af2d4d81c6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_af2b72b6dede9df372a96cff3db531125e9553fe6664166184311af2d4d81c6b->leave($__internal_af2b72b6dede9df372a96cff3db531125e9553fe6664166184311af2d4d81c6b_prof);

        
        $__internal_89297a5c96ca7c493d86fbcf3624652165b28a1acea085a49e615a21810950a2->leave($__internal_89297a5c96ca7c493d86fbcf3624652165b28a1acea085a49e615a21810950a2_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a8d95f826ee11755e38306084a0f38f6492dff1015aadb7eb27904fa2a31b38a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8d95f826ee11755e38306084a0f38f6492dff1015aadb7eb27904fa2a31b38a->enter($__internal_a8d95f826ee11755e38306084a0f38f6492dff1015aadb7eb27904fa2a31b38a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_aed028e2877c1b6df6b715133f670fa44837a159f2946d2b4be09e91550dc1f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aed028e2877c1b6df6b715133f670fa44837a159f2946d2b4be09e91550dc1f4->enter($__internal_aed028e2877c1b6df6b715133f670fa44837a159f2946d2b4be09e91550dc1f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_aed028e2877c1b6df6b715133f670fa44837a159f2946d2b4be09e91550dc1f4->leave($__internal_aed028e2877c1b6df6b715133f670fa44837a159f2946d2b4be09e91550dc1f4_prof);

        
        $__internal_a8d95f826ee11755e38306084a0f38f6492dff1015aadb7eb27904fa2a31b38a->leave($__internal_a8d95f826ee11755e38306084a0f38f6492dff1015aadb7eb27904fa2a31b38a_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9ca96f4a5ea92da08872df16f4e221d6e11dae51885dc35b2de065bf97ecc319 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ca96f4a5ea92da08872df16f4e221d6e11dae51885dc35b2de065bf97ecc319->enter($__internal_9ca96f4a5ea92da08872df16f4e221d6e11dae51885dc35b2de065bf97ecc319_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0dc6ca83af72cd217d48d709efc7960ee6d2475162acc3b4add11d8bfdbd940a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dc6ca83af72cd217d48d709efc7960ee6d2475162acc3b4add11d8bfdbd940a->enter($__internal_0dc6ca83af72cd217d48d709efc7960ee6d2475162acc3b4add11d8bfdbd940a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_0dc6ca83af72cd217d48d709efc7960ee6d2475162acc3b4add11d8bfdbd940a->leave($__internal_0dc6ca83af72cd217d48d709efc7960ee6d2475162acc3b4add11d8bfdbd940a_prof);

        
        $__internal_9ca96f4a5ea92da08872df16f4e221d6e11dae51885dc35b2de065bf97ecc319->leave($__internal_9ca96f4a5ea92da08872df16f4e221d6e11dae51885dc35b2de065bf97ecc319_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/www/projets/adrar_reservation/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
