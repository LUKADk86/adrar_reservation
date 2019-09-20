<?php

/* reservation/new.html.twig */
class __TwigTemplate_1664f4311d32e62eaba684938fa58e71c834f79d771c1c3514f7acecf2bcfc22 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "reservation/new.html.twig", 1);
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
        $__internal_ca390b7ad04a968c91cf998eee11fc7ced31b761725661e4cdf012154affd2d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca390b7ad04a968c91cf998eee11fc7ced31b761725661e4cdf012154affd2d7->enter($__internal_ca390b7ad04a968c91cf998eee11fc7ced31b761725661e4cdf012154affd2d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservation/new.html.twig"));

        $__internal_6283f390a641b348f4f4722f316b138da9c625406e7c845f45fa701f2ac348a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6283f390a641b348f4f4722f316b138da9c625406e7c845f45fa701f2ac348a7->enter($__internal_6283f390a641b348f4f4722f316b138da9c625406e7c845f45fa701f2ac348a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservation/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca390b7ad04a968c91cf998eee11fc7ced31b761725661e4cdf012154affd2d7->leave($__internal_ca390b7ad04a968c91cf998eee11fc7ced31b761725661e4cdf012154affd2d7_prof);

        
        $__internal_6283f390a641b348f4f4722f316b138da9c625406e7c845f45fa701f2ac348a7->leave($__internal_6283f390a641b348f4f4722f316b138da9c625406e7c845f45fa701f2ac348a7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d189ca42d37d2c06eeb3d0e7103f231e92ce3683d2e95e9f1565b4703ca4f2d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d189ca42d37d2c06eeb3d0e7103f231e92ce3683d2e95e9f1565b4703ca4f2d2->enter($__internal_d189ca42d37d2c06eeb3d0e7103f231e92ce3683d2e95e9f1565b4703ca4f2d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_aec018e90b7c76e297433bb9901a755bfb68701bc923565090030f6a4a0484dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aec018e90b7c76e297433bb9901a755bfb68701bc923565090030f6a4a0484dc->enter($__internal_aec018e90b7c76e297433bb9901a755bfb68701bc923565090030f6a4a0484dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container mt-5\">

    <h2 class=\"text-center text-light\">Créez un nouvelle réservation en remplissant les formulaire ci-dessous</h2>

    <div class=\"container  w-25 rounded shadow p-3 mb-5 \">
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "

        <input type=\"submit\" class=\"input-group mb-3 bg-primary text-light rounded\" value=\"ajouter une nouvelle reservation\" />
    ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <ul class=\"nav d-flex justify-content-center\">
        <li class=\"nav-items\">
            <a class=\"btn btn-info\" href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reservation_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
    ";
        // line 20
        if (array_key_exists("reservations", $context)) {
            // line 21
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservations"] ?? $this->getContext($context, "reservations")), 0, array(), "array"), "getDate", array(), "method"), "html", null, true);
            echo "
    ";
        }
        // line 23
        echo "    </div>
</div>
";
        
        $__internal_aec018e90b7c76e297433bb9901a755bfb68701bc923565090030f6a4a0484dc->leave($__internal_aec018e90b7c76e297433bb9901a755bfb68701bc923565090030f6a4a0484dc_prof);

        
        $__internal_d189ca42d37d2c06eeb3d0e7103f231e92ce3683d2e95e9f1565b4703ca4f2d2->leave($__internal_d189ca42d37d2c06eeb3d0e7103f231e92ce3683d2e95e9f1565b4703ca4f2d2_prof);

    }

    public function getTemplateName()
    {
        return "reservation/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 23,  81 => 21,  79 => 20,  73 => 17,  66 => 13,  60 => 10,  56 => 9,  49 => 4,  40 => 3,  11 => 1,);
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
<div class=\"container mt-5\">

    <h2 class=\"text-center text-light\">Créez un nouvelle réservation en remplissant les formulaire ci-dessous</h2>

    <div class=\"container  w-25 rounded shadow p-3 mb-5 \">
    {{ form_start(form) }}
        {{ form_widget(form) }}

        <input type=\"submit\" class=\"input-group mb-3 bg-primary text-light rounded\" value=\"ajouter une nouvelle reservation\" />
    {{ form_end(form) }}

    <ul class=\"nav d-flex justify-content-center\">
        <li class=\"nav-items\">
            <a class=\"btn btn-info\" href=\"{{ path('reservation_index') }}\">Back to the list</a>
        </li>
    </ul>
    {% if reservations is defined %}
        {{ reservations[0].getDate() }}
    {% endif %}
    </div>
</div>
{% endblock %}
", "reservation/new.html.twig", "/var/www/projets/adrar_reservation/app/Resources/views/reservation/new.html.twig");
    }
}
