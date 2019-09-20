<?php

/* promo/index.html.twig */
class __TwigTemplate_2cee074bcd4413f7e3f104bc6c4be51b8a37a8cd06c2c4c7509a80876a0583bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "promo/index.html.twig", 1);
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
        $__internal_5cfd5bf300b1487c5dd500e04fa93d6a2e110bb404bd123426acd34f14bdbb22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cfd5bf300b1487c5dd500e04fa93d6a2e110bb404bd123426acd34f14bdbb22->enter($__internal_5cfd5bf300b1487c5dd500e04fa93d6a2e110bb404bd123426acd34f14bdbb22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "promo/index.html.twig"));

        $__internal_551d92dd3ffbac122b9cca3936ef6d94b97f332eb87dde3ee2b22875ffbf7af8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_551d92dd3ffbac122b9cca3936ef6d94b97f332eb87dde3ee2b22875ffbf7af8->enter($__internal_551d92dd3ffbac122b9cca3936ef6d94b97f332eb87dde3ee2b22875ffbf7af8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "promo/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5cfd5bf300b1487c5dd500e04fa93d6a2e110bb404bd123426acd34f14bdbb22->leave($__internal_5cfd5bf300b1487c5dd500e04fa93d6a2e110bb404bd123426acd34f14bdbb22_prof);

        
        $__internal_551d92dd3ffbac122b9cca3936ef6d94b97f332eb87dde3ee2b22875ffbf7af8->leave($__internal_551d92dd3ffbac122b9cca3936ef6d94b97f332eb87dde3ee2b22875ffbf7af8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a735ecc8dad53324553161288aac81ea8f9c246ab642d8cb41da85a99445b293 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a735ecc8dad53324553161288aac81ea8f9c246ab642d8cb41da85a99445b293->enter($__internal_a735ecc8dad53324553161288aac81ea8f9c246ab642d8cb41da85a99445b293_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9fa646fc969cc9041c426b06d70f5aaf64464ca0f94a3192a756a698a12b6abb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fa646fc969cc9041c426b06d70f5aaf64464ca0f94a3192a756a698a12b6abb->enter($__internal_9fa646fc969cc9041c426b06d70f5aaf64464ca0f94a3192a756a698a12b6abb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Promos list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Nbeleve</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["promos"] ?? $this->getContext($context, "promos")));
        foreach ($context['_seq'] as $context["_key"] => $context["promo"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("promo_show", array("id" => $this->getAttribute($context["promo"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["promo"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["promo"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["promo"], "nbEleve", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("promo_show", array("id" => $this->getAttribute($context["promo"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("promo_edit", array("id" => $this->getAttribute($context["promo"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['promo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("promo_new");
        echo "\">Create a new promo</a>
        </li>
    </ul>
";
        
        $__internal_9fa646fc969cc9041c426b06d70f5aaf64464ca0f94a3192a756a698a12b6abb->leave($__internal_9fa646fc969cc9041c426b06d70f5aaf64464ca0f94a3192a756a698a12b6abb_prof);

        
        $__internal_a735ecc8dad53324553161288aac81ea8f9c246ab642d8cb41da85a99445b293->leave($__internal_a735ecc8dad53324553161288aac81ea8f9c246ab642d8cb41da85a99445b293_prof);

    }

    public function getTemplateName()
    {
        return "promo/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 38,  105 => 33,  93 => 27,  87 => 24,  80 => 20,  76 => 19,  70 => 18,  67 => 17,  63 => 16,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Promos list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Nbeleve</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for promo in promos %}
            <tr>
                <td><a href=\"{{ path('promo_show', { 'id': promo.id }) }}\">{{ promo.id }}</a></td>
                <td>{{ promo.name }}</td>
                <td>{{ promo.nbEleve }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('promo_show', { 'id': promo.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('promo_edit', { 'id': promo.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('promo_new') }}\">Create a new promo</a>
        </li>
    </ul>
{% endblock %}
", "promo/index.html.twig", "/var/www/projets/adrar_reservation/app/Resources/views/promo/index.html.twig");
    }
}
