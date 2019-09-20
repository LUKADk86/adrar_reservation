<?php

/* formateur/new.html.twig */
class __TwigTemplate_e8421b0ae16c97cfd788f3e7c31a15ccbf57aaa10aa7180a442ea9f9bf85bc55 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "formateur/new.html.twig", 1);
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
        $__internal_5f771ff7dabb70728077d87f04695a8ad238d557be017a67773f221e4a917625 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f771ff7dabb70728077d87f04695a8ad238d557be017a67773f221e4a917625->enter($__internal_5f771ff7dabb70728077d87f04695a8ad238d557be017a67773f221e4a917625_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "formateur/new.html.twig"));

        $__internal_b50698e50d44e3e9ac7ef45f2207cd56733cc3719bcbeaf272be4b63c163253e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b50698e50d44e3e9ac7ef45f2207cd56733cc3719bcbeaf272be4b63c163253e->enter($__internal_b50698e50d44e3e9ac7ef45f2207cd56733cc3719bcbeaf272be4b63c163253e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "formateur/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5f771ff7dabb70728077d87f04695a8ad238d557be017a67773f221e4a917625->leave($__internal_5f771ff7dabb70728077d87f04695a8ad238d557be017a67773f221e4a917625_prof);

        
        $__internal_b50698e50d44e3e9ac7ef45f2207cd56733cc3719bcbeaf272be4b63c163253e->leave($__internal_b50698e50d44e3e9ac7ef45f2207cd56733cc3719bcbeaf272be4b63c163253e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9ded29cf86bc91385f3051bb0c2616578c6ab3fa95ac16732282b6a43ee98dbe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ded29cf86bc91385f3051bb0c2616578c6ab3fa95ac16732282b6a43ee98dbe->enter($__internal_9ded29cf86bc91385f3051bb0c2616578c6ab3fa95ac16732282b6a43ee98dbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b9b826fd371ddf7fe33039974ccccd6e30878348c01de581abc634c1b97d7a52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9b826fd371ddf7fe33039974ccccd6e30878348c01de581abc634c1b97d7a52->enter($__internal_b9b826fd371ddf7fe33039974ccccd6e30878348c01de581abc634c1b97d7a52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Formateur creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("formateur_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_b9b826fd371ddf7fe33039974ccccd6e30878348c01de581abc634c1b97d7a52->leave($__internal_b9b826fd371ddf7fe33039974ccccd6e30878348c01de581abc634c1b97d7a52_prof);

        
        $__internal_9ded29cf86bc91385f3051bb0c2616578c6ab3fa95ac16732282b6a43ee98dbe->leave($__internal_9ded29cf86bc91385f3051bb0c2616578c6ab3fa95ac16732282b6a43ee98dbe_prof);

    }

    public function getTemplateName()
    {
        return "formateur/new.html.twig";
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
    <h1>Formateur creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('formateur_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "formateur/new.html.twig", "/var/www/projets/adrar_reservation/app/Resources/views/formateur/new.html.twig");
    }
}
