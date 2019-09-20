<?php

/* reservation/show.html.twig */
class __TwigTemplate_fcc98466f8c8a897b64405841848b64b089cf570d0b6bf1b32362a46d783536b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "reservation/show.html.twig", 1);
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
        $__internal_2684b0ca34cd7b12ba8e4da300fd655d3d7104bb8aa5fa3fdd54395a7ee5860b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2684b0ca34cd7b12ba8e4da300fd655d3d7104bb8aa5fa3fdd54395a7ee5860b->enter($__internal_2684b0ca34cd7b12ba8e4da300fd655d3d7104bb8aa5fa3fdd54395a7ee5860b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservation/show.html.twig"));

        $__internal_785aef31dc11f75802f37e315eb70f6e05f7ade0a2d863da1ae3a7d1791d1c7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_785aef31dc11f75802f37e315eb70f6e05f7ade0a2d863da1ae3a7d1791d1c7d->enter($__internal_785aef31dc11f75802f37e315eb70f6e05f7ade0a2d863da1ae3a7d1791d1c7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservation/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2684b0ca34cd7b12ba8e4da300fd655d3d7104bb8aa5fa3fdd54395a7ee5860b->leave($__internal_2684b0ca34cd7b12ba8e4da300fd655d3d7104bb8aa5fa3fdd54395a7ee5860b_prof);

        
        $__internal_785aef31dc11f75802f37e315eb70f6e05f7ade0a2d863da1ae3a7d1791d1c7d->leave($__internal_785aef31dc11f75802f37e315eb70f6e05f7ade0a2d863da1ae3a7d1791d1c7d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_09568a1101811406a2c61289dee6e03af11b3eac70d907117d2c59f28d6cbc9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09568a1101811406a2c61289dee6e03af11b3eac70d907117d2c59f28d6cbc9b->enter($__internal_09568a1101811406a2c61289dee6e03af11b3eac70d907117d2c59f28d6cbc9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b42a4e16ea56801f0c0f93aa39ba299db911262b82737ac74f2ced1aca668122 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b42a4e16ea56801f0c0f93aa39ba299db911262b82737ac74f2ced1aca668122->enter($__internal_b42a4e16ea56801f0c0f93aa39ba299db911262b82737ac74f2ced1aca668122_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Reservation</h1>

    <table>

        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>";
        // line 15
        if ($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), "date", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), "date", array()), "Y/m/d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Horaire du réservation</th>
                ";
        // line 19
        if ($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), "horaire", array())) {
            // line 20
            echo "                    <td>matin</td>
                ";
        } else {
            // line 22
            echo "                    <td>après-midi</td>
                ";
        }
        // line 24
        echo "            </tr>
            <tr>
                <th>Formateur</th>
                <td>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), "formateur", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>la sallle du résevation</th>
                <td>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), "salle", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reservation_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reservation_edit", array("id" => $this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 44
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 46
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_b42a4e16ea56801f0c0f93aa39ba299db911262b82737ac74f2ced1aca668122->leave($__internal_b42a4e16ea56801f0c0f93aa39ba299db911262b82737ac74f2ced1aca668122_prof);

        
        $__internal_09568a1101811406a2c61289dee6e03af11b3eac70d907117d2c59f28d6cbc9b->leave($__internal_09568a1101811406a2c61289dee6e03af11b3eac70d907117d2c59f28d6cbc9b_prof);

    }

    public function getTemplateName()
    {
        return "reservation/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 46,  118 => 44,  112 => 41,  106 => 38,  96 => 31,  89 => 27,  84 => 24,  80 => 22,  76 => 20,  74 => 19,  65 => 15,  58 => 11,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Reservation</h1>

    <table>

        <tbody>
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

    <ul>
        <li>
            <a href=\"{{ path('reservation_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('reservation_edit', { 'id': reservation.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "reservation/show.html.twig", "/var/www/projets/adrar_reservation/app/Resources/views/reservation/show.html.twig");
    }
}
