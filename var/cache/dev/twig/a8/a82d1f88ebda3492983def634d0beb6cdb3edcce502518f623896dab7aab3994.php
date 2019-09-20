<?php

/* reservation/index.html.twig */
class __TwigTemplate_0acc7dd718e27b259714b54fcae5926f387e6a471c0b5e1820a97ff261e09ea8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "reservation/index.html.twig", 1);
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
        $__internal_9e257cf0d745650133c27ee80915decab134d03b01ffac500e56137968cd0670 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e257cf0d745650133c27ee80915decab134d03b01ffac500e56137968cd0670->enter($__internal_9e257cf0d745650133c27ee80915decab134d03b01ffac500e56137968cd0670_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservation/index.html.twig"));

        $__internal_37553e359a8fc3409d6da4a635f9c80042cbe0e60d0cc33e35fd0d351439b1f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37553e359a8fc3409d6da4a635f9c80042cbe0e60d0cc33e35fd0d351439b1f2->enter($__internal_37553e359a8fc3409d6da4a635f9c80042cbe0e60d0cc33e35fd0d351439b1f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservation/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e257cf0d745650133c27ee80915decab134d03b01ffac500e56137968cd0670->leave($__internal_9e257cf0d745650133c27ee80915decab134d03b01ffac500e56137968cd0670_prof);

        
        $__internal_37553e359a8fc3409d6da4a635f9c80042cbe0e60d0cc33e35fd0d351439b1f2->leave($__internal_37553e359a8fc3409d6da4a635f9c80042cbe0e60d0cc33e35fd0d351439b1f2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c68463c7cfd50e1dd14c9d0a3d147329fcab0dfbf33c2577b5c48bdeda57213c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c68463c7cfd50e1dd14c9d0a3d147329fcab0dfbf33c2577b5c48bdeda57213c->enter($__internal_c68463c7cfd50e1dd14c9d0a3d147329fcab0dfbf33c2577b5c48bdeda57213c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e5b8f99c69ff8e35ad47b5a902e45c3a64927f86aa9b8d01da96ceae99befff4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5b8f99c69ff8e35ad47b5a902e45c3a64927f86aa9b8d01da96ceae99befff4->enter($__internal_e5b8f99c69ff8e35ad47b5a902e45c3a64927f86aa9b8d01da96ceae99befff4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\"></div>
    <div class=\"container w-50 bg-light shadow p-3 mb-5 rounded\">
        <h1 class=\"text-center shadow p-3 mb-5\">Reservations list</h1>



    <table class=\"table table-striped \">
        <thead>
            <tr>
                <th>Id</th>
                <th>Date</th>
                <th>Horaire( matin/après-midi)</th>
                <th>numero de la Salle</th>
                <th>le nom de la Promotion</th>
                <th>nom et prenom du formateur</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["reservations"] ?? $this->getContext($context, "reservations")));
        foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
            // line 24
            echo "            <tr>
                <td><a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reservation_show", array("id" => $this->getAttribute($context["reservation"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["reservation"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 26
            if ($this->getAttribute($context["reservation"], "date", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["reservation"], "date", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                ";
            // line 27
            if ($this->getAttribute($context["reservation"], "horaire", array())) {
                // line 28
                echo "                <td>matin</td>
                ";
            } else {
                // line 30
                echo "                    <td>après-midi</td>
                ";
            }
            // line 32
            echo "                <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["reservation"], "salle", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["reservation"], "promo", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["reservation"], "formateur", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul class=\"nav\">
                        <li>
                            <a class=\"btn btn-sm btn-dark\" href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reservation_show", array("id" => $this->getAttribute($context["reservation"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a class=\"btn btn-sm btn-success mt-2\" href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reservation_edit", array("id" => $this->getAttribute($context["reservation"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reservation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "        </tbody>
    </table>
            <ul class=\"nav d-flex justify-content-center\">
                <li class=\"nav-items\">
                    <a href=\"";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reservation_new");
        echo "\" class=\"nav-link\">Create a new reservation</a>
                </li>
            </ul>
        </div>

    </div>
";
        
        $__internal_e5b8f99c69ff8e35ad47b5a902e45c3a64927f86aa9b8d01da96ceae99befff4->leave($__internal_e5b8f99c69ff8e35ad47b5a902e45c3a64927f86aa9b8d01da96ceae99befff4_prof);

        
        $__internal_c68463c7cfd50e1dd14c9d0a3d147329fcab0dfbf33c2577b5c48bdeda57213c->leave($__internal_c68463c7cfd50e1dd14c9d0a3d147329fcab0dfbf33c2577b5c48bdeda57213c_prof);

    }

    public function getTemplateName()
    {
        return "reservation/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 51,  133 => 47,  121 => 41,  115 => 38,  108 => 34,  104 => 33,  99 => 32,  95 => 30,  91 => 28,  89 => 27,  83 => 26,  77 => 25,  74 => 24,  70 => 23,  49 => 4,  40 => 3,  11 => 1,);
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
    <div class=\"container\"></div>
    <div class=\"container w-50 bg-light shadow p-3 mb-5 rounded\">
        <h1 class=\"text-center shadow p-3 mb-5\">Reservations list</h1>



    <table class=\"table table-striped \">
        <thead>
            <tr>
                <th>Id</th>
                <th>Date</th>
                <th>Horaire( matin/après-midi)</th>
                <th>numero de la Salle</th>
                <th>le nom de la Promotion</th>
                <th>nom et prenom du formateur</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for reservation in reservations %}
            <tr>
                <td><a href=\"{{ path('reservation_show', { 'id': reservation.id }) }}\">{{ reservation.id }}</a></td>
                <td>{% if reservation.date %}{{ reservation.date|date('Y-m-d') }}{% endif %}</td>
                {% if reservation.horaire %}
                <td>matin</td>
                {% else %}
                    <td>après-midi</td>
                {% endif %}
                <td>{{ reservation.salle }}</td>
                <td>{{ reservation.promo }}</td>
                <td>{{ reservation.formateur }}</td>
                <td>
                    <ul class=\"nav\">
                        <li>
                            <a class=\"btn btn-sm btn-dark\" href=\"{{ path('reservation_show', { 'id': reservation.id }) }}\">show</a>
                        </li>
                        <li>
                            <a class=\"btn btn-sm btn-success mt-2\" href=\"{{ path('reservation_edit', { 'id': reservation.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
            <ul class=\"nav d-flex justify-content-center\">
                <li class=\"nav-items\">
                    <a href=\"{{ path('reservation_new') }}\" class=\"nav-link\">Create a new reservation</a>
                </li>
            </ul>
        </div>

    </div>
{% endblock %}
", "reservation/index.html.twig", "/var/www/projets/adrar_reservation/app/Resources/views/reservation/index.html.twig");
    }
}
