<?php

/* promo/new.html.twig */
class __TwigTemplate_92cf1778119ff9be919c0eccf66a1fd589ba799f67b79728b0e1c1ef0592c030 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "promo/new.html.twig", 1);
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
        $__internal_d8ed186659263e249bae1ebd8cfa05bbcf95fe3b6556860db6d749374f0f559f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8ed186659263e249bae1ebd8cfa05bbcf95fe3b6556860db6d749374f0f559f->enter($__internal_d8ed186659263e249bae1ebd8cfa05bbcf95fe3b6556860db6d749374f0f559f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "promo/new.html.twig"));

        $__internal_757a1cbffdc2c17ff11cd483ec287b13933a577fbe3d5ae90951b9ba41126382 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_757a1cbffdc2c17ff11cd483ec287b13933a577fbe3d5ae90951b9ba41126382->enter($__internal_757a1cbffdc2c17ff11cd483ec287b13933a577fbe3d5ae90951b9ba41126382_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "promo/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d8ed186659263e249bae1ebd8cfa05bbcf95fe3b6556860db6d749374f0f559f->leave($__internal_d8ed186659263e249bae1ebd8cfa05bbcf95fe3b6556860db6d749374f0f559f_prof);

        
        $__internal_757a1cbffdc2c17ff11cd483ec287b13933a577fbe3d5ae90951b9ba41126382->leave($__internal_757a1cbffdc2c17ff11cd483ec287b13933a577fbe3d5ae90951b9ba41126382_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7be95c364f1c0d45ba85df2677cfd9bd50dbea4f1e7cbdfb5bf68cd1504e3a12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7be95c364f1c0d45ba85df2677cfd9bd50dbea4f1e7cbdfb5bf68cd1504e3a12->enter($__internal_7be95c364f1c0d45ba85df2677cfd9bd50dbea4f1e7cbdfb5bf68cd1504e3a12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ec39dd99f8a3f9edd8d9ce2a5791e540bb007a9a02c7c29dd43fb365016a4afa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec39dd99f8a3f9edd8d9ce2a5791e540bb007a9a02c7c29dd43fb365016a4afa->enter($__internal_ec39dd99f8a3f9edd8d9ce2a5791e540bb007a9a02c7c29dd43fb365016a4afa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Promo creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("promo_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_ec39dd99f8a3f9edd8d9ce2a5791e540bb007a9a02c7c29dd43fb365016a4afa->leave($__internal_ec39dd99f8a3f9edd8d9ce2a5791e540bb007a9a02c7c29dd43fb365016a4afa_prof);

        
        $__internal_7be95c364f1c0d45ba85df2677cfd9bd50dbea4f1e7cbdfb5bf68cd1504e3a12->leave($__internal_7be95c364f1c0d45ba85df2677cfd9bd50dbea4f1e7cbdfb5bf68cd1504e3a12_prof);

    }

    public function getTemplateName()
    {
        return "promo/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Promo creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('promo_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "promo/new.html.twig", "/var/www/projets/adrar_reservation/app/Resources/views/promo/new.html.twig");
    }
}
