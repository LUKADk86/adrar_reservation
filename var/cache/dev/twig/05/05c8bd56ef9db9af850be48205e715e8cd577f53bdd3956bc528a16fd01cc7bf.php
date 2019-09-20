<?php

/* planning/new.html.twig */
class __TwigTemplate_3b2b9a835ca87b90177871c9990290558856cdd966c79fc058217b1b5172ef46 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "planning/new.html.twig", 1);
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
        $__internal_9d382d37a65c9ae0c10a6e9d4ac994cfe9564790447a6044b5b34dac7f1fb65a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d382d37a65c9ae0c10a6e9d4ac994cfe9564790447a6044b5b34dac7f1fb65a->enter($__internal_9d382d37a65c9ae0c10a6e9d4ac994cfe9564790447a6044b5b34dac7f1fb65a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "planning/new.html.twig"));

        $__internal_d565713983f3e437e8a476c25cf38e382b86b39bf7fa0cc71aaaafac7f958041 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d565713983f3e437e8a476c25cf38e382b86b39bf7fa0cc71aaaafac7f958041->enter($__internal_d565713983f3e437e8a476c25cf38e382b86b39bf7fa0cc71aaaafac7f958041_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "planning/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d382d37a65c9ae0c10a6e9d4ac994cfe9564790447a6044b5b34dac7f1fb65a->leave($__internal_9d382d37a65c9ae0c10a6e9d4ac994cfe9564790447a6044b5b34dac7f1fb65a_prof);

        
        $__internal_d565713983f3e437e8a476c25cf38e382b86b39bf7fa0cc71aaaafac7f958041->leave($__internal_d565713983f3e437e8a476c25cf38e382b86b39bf7fa0cc71aaaafac7f958041_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1599dfb2ae35abb64154e9d59c856c09a39ec46252c3f30bace4a2e98b21b75c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1599dfb2ae35abb64154e9d59c856c09a39ec46252c3f30bace4a2e98b21b75c->enter($__internal_1599dfb2ae35abb64154e9d59c856c09a39ec46252c3f30bace4a2e98b21b75c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_27bab9c440307907c63694ec7858f3554c148d178845d0873fe460814cf9c56c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27bab9c440307907c63694ec7858f3554c148d178845d0873fe460814cf9c56c->enter($__internal_27bab9c440307907c63694ec7858f3554c148d178845d0873fe460814cf9c56c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Planning creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("planning_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_27bab9c440307907c63694ec7858f3554c148d178845d0873fe460814cf9c56c->leave($__internal_27bab9c440307907c63694ec7858f3554c148d178845d0873fe460814cf9c56c_prof);

        
        $__internal_1599dfb2ae35abb64154e9d59c856c09a39ec46252c3f30bace4a2e98b21b75c->leave($__internal_1599dfb2ae35abb64154e9d59c856c09a39ec46252c3f30bace4a2e98b21b75c_prof);

    }

    public function getTemplateName()
    {
        return "planning/new.html.twig";
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
    <h1>Planning creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('planning_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "planning/new.html.twig", "/var/www/projets/adrar_reservation/app/Resources/views/planning/new.html.twig");
    }
}
