<?php

/* salle/new.html.twig */
class __TwigTemplate_c28d941f3906ec0815c0529733373fe746ad77d75cec72d32e9f0dec69fc5ad2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "salle/new.html.twig", 1);
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
        $__internal_739c02dabe11c01c9693eeafbf422a3247646391f05b8db4878a0c66fb288f77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_739c02dabe11c01c9693eeafbf422a3247646391f05b8db4878a0c66fb288f77->enter($__internal_739c02dabe11c01c9693eeafbf422a3247646391f05b8db4878a0c66fb288f77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "salle/new.html.twig"));

        $__internal_61b43e568d29542d33e47337e8b096c0cbc3050dd1e56c2fda2fb4a247a4ed21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61b43e568d29542d33e47337e8b096c0cbc3050dd1e56c2fda2fb4a247a4ed21->enter($__internal_61b43e568d29542d33e47337e8b096c0cbc3050dd1e56c2fda2fb4a247a4ed21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "salle/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_739c02dabe11c01c9693eeafbf422a3247646391f05b8db4878a0c66fb288f77->leave($__internal_739c02dabe11c01c9693eeafbf422a3247646391f05b8db4878a0c66fb288f77_prof);

        
        $__internal_61b43e568d29542d33e47337e8b096c0cbc3050dd1e56c2fda2fb4a247a4ed21->leave($__internal_61b43e568d29542d33e47337e8b096c0cbc3050dd1e56c2fda2fb4a247a4ed21_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_64fe2e7a03a10e4813938e23ba46e120630f06b62e6a2418d5237e4f9bcd3628 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64fe2e7a03a10e4813938e23ba46e120630f06b62e6a2418d5237e4f9bcd3628->enter($__internal_64fe2e7a03a10e4813938e23ba46e120630f06b62e6a2418d5237e4f9bcd3628_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_14ee5cc11c7ae0ed92bca86f2989795e17ad4362c4683ca21e32310e912b921f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14ee5cc11c7ae0ed92bca86f2989795e17ad4362c4683ca21e32310e912b921f->enter($__internal_14ee5cc11c7ae0ed92bca86f2989795e17ad4362c4683ca21e32310e912b921f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Salle creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("salle_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_14ee5cc11c7ae0ed92bca86f2989795e17ad4362c4683ca21e32310e912b921f->leave($__internal_14ee5cc11c7ae0ed92bca86f2989795e17ad4362c4683ca21e32310e912b921f_prof);

        
        $__internal_64fe2e7a03a10e4813938e23ba46e120630f06b62e6a2418d5237e4f9bcd3628->leave($__internal_64fe2e7a03a10e4813938e23ba46e120630f06b62e6a2418d5237e4f9bcd3628_prof);

    }

    public function getTemplateName()
    {
        return "salle/new.html.twig";
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
    <h1>Salle creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('salle_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "salle/new.html.twig", "/var/www/projets/adrar_reservation/app/Resources/views/salle/new.html.twig");
    }
}
