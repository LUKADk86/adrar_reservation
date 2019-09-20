<?php

/* promo/show.html.twig */
class __TwigTemplate_a91437ed481cbcb75f82db25c7dfc6a28d0d15b3a237b3d23fb0790fa26520c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "promo/show.html.twig", 1);
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
        $__internal_d591d7efb0b521663961f5efc2de2868cab0cd9638eced16c7a586953fe79fc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d591d7efb0b521663961f5efc2de2868cab0cd9638eced16c7a586953fe79fc4->enter($__internal_d591d7efb0b521663961f5efc2de2868cab0cd9638eced16c7a586953fe79fc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "promo/show.html.twig"));

        $__internal_5871cf7744a355885e46e568534cc0a999d3a7f22ddbb1f93d9f0a27e6f45575 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5871cf7744a355885e46e568534cc0a999d3a7f22ddbb1f93d9f0a27e6f45575->enter($__internal_5871cf7744a355885e46e568534cc0a999d3a7f22ddbb1f93d9f0a27e6f45575_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "promo/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d591d7efb0b521663961f5efc2de2868cab0cd9638eced16c7a586953fe79fc4->leave($__internal_d591d7efb0b521663961f5efc2de2868cab0cd9638eced16c7a586953fe79fc4_prof);

        
        $__internal_5871cf7744a355885e46e568534cc0a999d3a7f22ddbb1f93d9f0a27e6f45575->leave($__internal_5871cf7744a355885e46e568534cc0a999d3a7f22ddbb1f93d9f0a27e6f45575_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_76172f2d91fb0c6787f473e1a0220253d1c20d80a84c403e4d9cc8fc504e976a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76172f2d91fb0c6787f473e1a0220253d1c20d80a84c403e4d9cc8fc504e976a->enter($__internal_76172f2d91fb0c6787f473e1a0220253d1c20d80a84c403e4d9cc8fc504e976a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6584324a963542fa4c9fbfd0f39bede565f949ddc9c1d1026effa475ca3d7b6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6584324a963542fa4c9fbfd0f39bede565f949ddc9c1d1026effa475ca3d7b6c->enter($__internal_6584324a963542fa4c9fbfd0f39bede565f949ddc9c1d1026effa475ca3d7b6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Promo</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["promo"] ?? $this->getContext($context, "promo")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["promo"] ?? $this->getContext($context, "promo")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nbeleve</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["promo"] ?? $this->getContext($context, "promo")), "nbEleve", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("promo_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("promo_edit", array("id" => $this->getAttribute(($context["promo"] ?? $this->getContext($context, "promo")), "id", array()))), "html", null, true);
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
        
        $__internal_6584324a963542fa4c9fbfd0f39bede565f949ddc9c1d1026effa475ca3d7b6c->leave($__internal_6584324a963542fa4c9fbfd0f39bede565f949ddc9c1d1026effa475ca3d7b6c_prof);

        
        $__internal_76172f2d91fb0c6787f473e1a0220253d1c20d80a84c403e4d9cc8fc504e976a->leave($__internal_76172f2d91fb0c6787f473e1a0220253d1c20d80a84c403e4d9cc8fc504e976a_prof);

    }

    public function getTemplateName()
    {
        return "promo/show.html.twig";
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
    <h1>Promo</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ promo.id }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ promo.name }}</td>
            </tr>
            <tr>
                <th>Nbeleve</th>
                <td>{{ promo.nbEleve }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('promo_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('promo_edit', { 'id': promo.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "promo/show.html.twig", "/var/www/projets/adrar_reservation/app/Resources/views/promo/show.html.twig");
    }
}
