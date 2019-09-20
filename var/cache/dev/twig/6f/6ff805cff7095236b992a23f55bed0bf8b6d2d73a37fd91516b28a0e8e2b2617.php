<?php

/* planning/show.html.twig */
class __TwigTemplate_185b8cad6e5479dd82eb1d919a966648577e62a822079db6c7dffd43fb725900 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "planning/show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_719b208060e34e0df8e08abb27414387f94eeb8e37fef3c5e4bb6f6160bf6377 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_719b208060e34e0df8e08abb27414387f94eeb8e37fef3c5e4bb6f6160bf6377->enter($__internal_719b208060e34e0df8e08abb27414387f94eeb8e37fef3c5e4bb6f6160bf6377_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "planning/show.html.twig"));

        $__internal_b0d9d9523deeaced4fadb445d9d864070e12360cca2a79975b450b42268b2d36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0d9d9523deeaced4fadb445d9d864070e12360cca2a79975b450b42268b2d36->enter($__internal_b0d9d9523deeaced4fadb445d9d864070e12360cca2a79975b450b42268b2d36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "planning/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_719b208060e34e0df8e08abb27414387f94eeb8e37fef3c5e4bb6f6160bf6377->leave($__internal_719b208060e34e0df8e08abb27414387f94eeb8e37fef3c5e4bb6f6160bf6377_prof);

        
        $__internal_b0d9d9523deeaced4fadb445d9d864070e12360cca2a79975b450b42268b2d36->leave($__internal_b0d9d9523deeaced4fadb445d9d864070e12360cca2a79975b450b42268b2d36_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_00818070349d1f2a15ed29ee77c405d6d8c47d6c25d01b74b89fbaf697891445 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00818070349d1f2a15ed29ee77c405d6d8c47d6c25d01b74b89fbaf697891445->enter($__internal_00818070349d1f2a15ed29ee77c405d6d8c47d6c25d01b74b89fbaf697891445_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2cd6e03d712187852328d4be4bf093027953dcf09d6bc3288e48924ad339e4fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cd6e03d712187852328d4be4bf093027953dcf09d6bc3288e48924ad339e4fe->enter($__internal_2cd6e03d712187852328d4be4bf093027953dcf09d6bc3288e48924ad339e4fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Planning</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["planning"] ?? $this->getContext($context, "planning")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>";
        // line 14
        if ($this->getAttribute(($context["planning"] ?? $this->getContext($context, "planning")), "date", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["planning"] ?? $this->getContext($context, "planning")), "date", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Horaire</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["planning"] ?? $this->getContext($context, "planning")), "horaire", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("planning_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("planning_edit", array("id" => $this->getAttribute(($context["planning"] ?? $this->getContext($context, "planning")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 31
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 33
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_2cd6e03d712187852328d4be4bf093027953dcf09d6bc3288e48924ad339e4fe->leave($__internal_2cd6e03d712187852328d4be4bf093027953dcf09d6bc3288e48924ad339e4fe_prof);

        
        $__internal_00818070349d1f2a15ed29ee77c405d6d8c47d6c25d01b74b89fbaf697891445->leave($__internal_00818070349d1f2a15ed29ee77c405d6d8c47d6c25d01b74b89fbaf697891445_prof);

    }

    public function getTemplateName()
    {
        return "planning/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 33,  95 => 31,  89 => 28,  83 => 25,  73 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Planning</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ planning.id }}</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>{% if planning.date %}{{ planning.date|date('Y-m-d') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Horaire</th>
                <td>{{ planning.horaire }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('planning_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('planning_edit', { 'id': planning.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "planning/show.html.twig", "/var/www/projets/adrar_reservation/app/Resources/views/planning/show.html.twig");
    }
}
