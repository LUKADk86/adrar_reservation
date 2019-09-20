<?php

/* salle/show.html.twig */
class __TwigTemplate_8a2188599e4b2bb5b53dfcaba35bb9da86836382694c770e174222b42916bcd5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "salle/show.html.twig", 1);
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
        $__internal_e5eb6ae6b3f4db9931232d656643818e74e5d83a4dca6bc97a3d72f0c37c0fa4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5eb6ae6b3f4db9931232d656643818e74e5d83a4dca6bc97a3d72f0c37c0fa4->enter($__internal_e5eb6ae6b3f4db9931232d656643818e74e5d83a4dca6bc97a3d72f0c37c0fa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "salle/show.html.twig"));

        $__internal_a515b65ee7e1713159c3475a9f793777c10b31689873df230f7daa3641b825b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a515b65ee7e1713159c3475a9f793777c10b31689873df230f7daa3641b825b8->enter($__internal_a515b65ee7e1713159c3475a9f793777c10b31689873df230f7daa3641b825b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "salle/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e5eb6ae6b3f4db9931232d656643818e74e5d83a4dca6bc97a3d72f0c37c0fa4->leave($__internal_e5eb6ae6b3f4db9931232d656643818e74e5d83a4dca6bc97a3d72f0c37c0fa4_prof);

        
        $__internal_a515b65ee7e1713159c3475a9f793777c10b31689873df230f7daa3641b825b8->leave($__internal_a515b65ee7e1713159c3475a9f793777c10b31689873df230f7daa3641b825b8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b92ecd881a79a5f2f001257d57e839ed33ae76f89e78f22b448bf9949113dbe6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b92ecd881a79a5f2f001257d57e839ed33ae76f89e78f22b448bf9949113dbe6->enter($__internal_b92ecd881a79a5f2f001257d57e839ed33ae76f89e78f22b448bf9949113dbe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_758d7daec0c3e4278ad31468a42a4fcc528d74c11cbd1aaa18dbc9bbd5b81d09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_758d7daec0c3e4278ad31468a42a4fcc528d74c11cbd1aaa18dbc9bbd5b81d09->enter($__internal_758d7daec0c3e4278ad31468a42a4fcc528d74c11cbd1aaa18dbc9bbd5b81d09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Salle</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["salle"] ?? $this->getContext($context, "salle")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Numerosalle</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["salle"] ?? $this->getContext($context, "salle")), "numeroSalle", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nbplace</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["salle"] ?? $this->getContext($context, "salle")), "nbPlace", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("salle_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("salle_edit", array("id" => $this->getAttribute(($context["salle"] ?? $this->getContext($context, "salle")), "id", array()))), "html", null, true);
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
        
        $__internal_758d7daec0c3e4278ad31468a42a4fcc528d74c11cbd1aaa18dbc9bbd5b81d09->leave($__internal_758d7daec0c3e4278ad31468a42a4fcc528d74c11cbd1aaa18dbc9bbd5b81d09_prof);

        
        $__internal_b92ecd881a79a5f2f001257d57e839ed33ae76f89e78f22b448bf9949113dbe6->leave($__internal_b92ecd881a79a5f2f001257d57e839ed33ae76f89e78f22b448bf9949113dbe6_prof);

    }

    public function getTemplateName()
    {
        return "salle/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 33,  93 => 31,  87 => 28,  81 => 25,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Salle</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ salle.id }}</td>
            </tr>
            <tr>
                <th>Numerosalle</th>
                <td>{{ salle.numeroSalle }}</td>
            </tr>
            <tr>
                <th>Nbplace</th>
                <td>{{ salle.nbPlace }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('salle_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('salle_edit', { 'id': salle.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "salle/show.html.twig", "/var/www/projets/adrar_reservation/app/Resources/views/salle/show.html.twig");
    }
}
