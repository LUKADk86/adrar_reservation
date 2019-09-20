<?php

/* reservation/edit.html.twig */
class __TwigTemplate_6204891bc702bd4cc9e703e026f341638d4131717551e3d282e352c667fcbc30 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "reservation/edit.html.twig", 1);
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
        $__internal_33591d70864f78171d8f9364886c3bfc6efe10fe099eda7c796442df9f9035f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33591d70864f78171d8f9364886c3bfc6efe10fe099eda7c796442df9f9035f7->enter($__internal_33591d70864f78171d8f9364886c3bfc6efe10fe099eda7c796442df9f9035f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservation/edit.html.twig"));

        $__internal_0dd59c99e75a3d07c90cf67a1e825b6ffec5e64700f7b8904c5a33380777b9e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dd59c99e75a3d07c90cf67a1e825b6ffec5e64700f7b8904c5a33380777b9e7->enter($__internal_0dd59c99e75a3d07c90cf67a1e825b6ffec5e64700f7b8904c5a33380777b9e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservation/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_33591d70864f78171d8f9364886c3bfc6efe10fe099eda7c796442df9f9035f7->leave($__internal_33591d70864f78171d8f9364886c3bfc6efe10fe099eda7c796442df9f9035f7_prof);

        
        $__internal_0dd59c99e75a3d07c90cf67a1e825b6ffec5e64700f7b8904c5a33380777b9e7->leave($__internal_0dd59c99e75a3d07c90cf67a1e825b6ffec5e64700f7b8904c5a33380777b9e7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1893f07417fc934549a3d377e7c2609de005001c2ed0ee14c39cb05e4e2f11f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1893f07417fc934549a3d377e7c2609de005001c2ed0ee14c39cb05e4e2f11f9->enter($__internal_1893f07417fc934549a3d377e7c2609de005001c2ed0ee14c39cb05e4e2f11f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b97c9f6f955419d69958f4c0fb9bd8d351c3b5d27fad073ae4169eb654b9147f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b97c9f6f955419d69958f4c0fb9bd8d351c3b5d27fad073ae4169eb654b9147f->enter($__internal_b97c9f6f955419d69958f4c0fb9bd8d351c3b5d27fad073ae4169eb654b9147f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Reservation edit</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=jouter une reservation\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reservation_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Supprimer la reservation\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_b97c9f6f955419d69958f4c0fb9bd8d351c3b5d27fad073ae4169eb654b9147f->leave($__internal_b97c9f6f955419d69958f4c0fb9bd8d351c3b5d27fad073ae4169eb654b9147f_prof);

        
        $__internal_1893f07417fc934549a3d377e7c2609de005001c2ed0ee14c39cb05e4e2f11f9->leave($__internal_1893f07417fc934549a3d377e7c2609de005001c2ed0ee14c39cb05e4e2f11f9_prof);

    }

    public function getTemplateName()
    {
        return "reservation/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  75 => 16,  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Reservation edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=jouter une reservation\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('reservation_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Supprimer la reservation\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "reservation/edit.html.twig", "/var/www/projets/adrar_reservation/app/Resources/views/reservation/edit.html.twig");
    }
}
