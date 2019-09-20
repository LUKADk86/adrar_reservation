<?php

/* reservation/erreur.html.twig */
class __TwigTemplate_09aec0605f1b99b64ea4c5a50a6cb4e63f0694c0a78e0bda244d4c6161f64dab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "reservation/erreur.html.twig", 1);
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
        $__internal_d73e14b78518d9b9de69b7d6c28d01bc88db2f263a261728b74063562b169b08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d73e14b78518d9b9de69b7d6c28d01bc88db2f263a261728b74063562b169b08->enter($__internal_d73e14b78518d9b9de69b7d6c28d01bc88db2f263a261728b74063562b169b08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservation/erreur.html.twig"));

        $__internal_949060c27f346723e4b32fb8e5716d782272d96336f218ebfa96641840cc12da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_949060c27f346723e4b32fb8e5716d782272d96336f218ebfa96641840cc12da->enter($__internal_949060c27f346723e4b32fb8e5716d782272d96336f218ebfa96641840cc12da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservation/erreur.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d73e14b78518d9b9de69b7d6c28d01bc88db2f263a261728b74063562b169b08->leave($__internal_d73e14b78518d9b9de69b7d6c28d01bc88db2f263a261728b74063562b169b08_prof);

        
        $__internal_949060c27f346723e4b32fb8e5716d782272d96336f218ebfa96641840cc12da->leave($__internal_949060c27f346723e4b32fb8e5716d782272d96336f218ebfa96641840cc12da_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fe9b3aad5825f6aff2ea91a8c7ecab412e240cc26cc58b86a2ac436cbb573df9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe9b3aad5825f6aff2ea91a8c7ecab412e240cc26cc58b86a2ac436cbb573df9->enter($__internal_fe9b3aad5825f6aff2ea91a8c7ecab412e240cc26cc58b86a2ac436cbb573df9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ad3e5f4658bf82d926b665262791055137a92037999392854e5a16acd4b38878 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad3e5f4658bf82d926b665262791055137a92037999392854e5a16acd4b38878->enter($__internal_ad3e5f4658bf82d926b665262791055137a92037999392854e5a16acd4b38878_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container bg-info rounded mt-5\">
        <hr>
    <h2 class=\"text-center text-danger\"> ";
        // line 6
        echo twig_escape_filter($this->env, ($context["erreur"] ?? $this->getContext($context, "erreur")), "html", null, true);
        echo " Veuillez choisir un autre créneau</h2>

    <table class=\"table table-striped shadow p-3 mb-5 mt-5 rounded\">

        <tbody class=\"bg-success\">
        <tr>
            <th>Id</th>
            <td>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), "id", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Date</th>
            <td>";
        // line 17
        if ($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), "date", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), "date", array()), "Y/m/d"), "html", null, true);
        }
        echo "</td>
        </tr>
        <tr>
            <th>Horaire du réservation</th>
            ";
        // line 21
        if ($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), "horaire", array())) {
            // line 22
            echo "                <td>matin</td>
            ";
        } else {
            // line 24
            echo "                <td>après-midi</td>
            ";
        }
        // line 26
        echo "        </tr>
        <tr>
            <th>Formateur</th>
            <td>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), "formateur", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>la sallle du résevation</th>
            <td>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), "salle", array()), "html", null, true);
        echo "</td>
        </tr>
        </tbody>
    </table>

    </div>

";
        
        $__internal_ad3e5f4658bf82d926b665262791055137a92037999392854e5a16acd4b38878->leave($__internal_ad3e5f4658bf82d926b665262791055137a92037999392854e5a16acd4b38878_prof);

        
        $__internal_fe9b3aad5825f6aff2ea91a8c7ecab412e240cc26cc58b86a2ac436cbb573df9->leave($__internal_fe9b3aad5825f6aff2ea91a8c7ecab412e240cc26cc58b86a2ac436cbb573df9_prof);

    }

    public function getTemplateName()
    {
        return "reservation/erreur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 33,  94 => 29,  89 => 26,  85 => 24,  81 => 22,  79 => 21,  70 => 17,  63 => 13,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <div class=\"container bg-info rounded mt-5\">
        <hr>
    <h2 class=\"text-center text-danger\"> {{ erreur }} Veuillez choisir un autre créneau</h2>

    <table class=\"table table-striped shadow p-3 mb-5 mt-5 rounded\">

        <tbody class=\"bg-success\">
        <tr>
            <th>Id</th>
            <td>{{ reservation.id }}</td>
        </tr>
        <tr>
            <th>Date</th>
            <td>{% if reservation.date %}{{ reservation.date|date('Y/m/d') }}{% endif %}</td>
        </tr>
        <tr>
            <th>Horaire du réservation</th>
            {% if reservation.horaire %}
                <td>matin</td>
            {% else %}
                <td>après-midi</td>
            {% endif %}
        </tr>
        <tr>
            <th>Formateur</th>
            <td>{{ reservation.formateur }}</td>
        </tr>
        <tr>
            <th>la sallle du résevation</th>
            <td>{{ reservation.salle }}</td>
        </tr>
        </tbody>
    </table>

    </div>

{% endblock %}
", "reservation/erreur.html.twig", "/var/www/projets/adrar_reservation/app/Resources/views/reservation/erreur.html.twig");
    }
}
