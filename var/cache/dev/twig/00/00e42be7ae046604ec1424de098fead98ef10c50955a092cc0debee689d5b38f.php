<?php

/* planning/index.html.twig */
class __TwigTemplate_820d0b6a8895666e518bf8a3ff915c93ed1d21772da191dfa0eeedd88951219b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "planning/index.html.twig", 1);
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
        $__internal_8e38a64f5e08b6b246a81e3287374e5b452ab085055c72d57dadeb2c1d67a8f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e38a64f5e08b6b246a81e3287374e5b452ab085055c72d57dadeb2c1d67a8f7->enter($__internal_8e38a64f5e08b6b246a81e3287374e5b452ab085055c72d57dadeb2c1d67a8f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "planning/index.html.twig"));

        $__internal_823f3c8933c56e9e99e283ea7b576e74434216b1a18a87bf14d6079b85771d6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_823f3c8933c56e9e99e283ea7b576e74434216b1a18a87bf14d6079b85771d6a->enter($__internal_823f3c8933c56e9e99e283ea7b576e74434216b1a18a87bf14d6079b85771d6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "planning/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e38a64f5e08b6b246a81e3287374e5b452ab085055c72d57dadeb2c1d67a8f7->leave($__internal_8e38a64f5e08b6b246a81e3287374e5b452ab085055c72d57dadeb2c1d67a8f7_prof);

        
        $__internal_823f3c8933c56e9e99e283ea7b576e74434216b1a18a87bf14d6079b85771d6a->leave($__internal_823f3c8933c56e9e99e283ea7b576e74434216b1a18a87bf14d6079b85771d6a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_14a35f07f8b7a7e7ec73e497e7cb40489aa42fa09edc3f4447b7803087b1b6f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14a35f07f8b7a7e7ec73e497e7cb40489aa42fa09edc3f4447b7803087b1b6f5->enter($__internal_14a35f07f8b7a7e7ec73e497e7cb40489aa42fa09edc3f4447b7803087b1b6f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d7f11fc9d99cf276b005f5529dcdd0beef74fa1551b7a9f748d9ae161cf6f68e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7f11fc9d99cf276b005f5529dcdd0beef74fa1551b7a9f748d9ae161cf6f68e->enter($__internal_d7f11fc9d99cf276b005f5529dcdd0beef74fa1551b7a9f748d9ae161cf6f68e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Plannings list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Date</th>
                <th>Horaire</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["plannings"] ?? $this->getContext($context, "plannings")));
        foreach ($context['_seq'] as $context["_key"] => $context["planning"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("planning_show", array("id" => $this->getAttribute($context["planning"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["planning"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            if ($this->getAttribute($context["planning"], "date", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["planning"], "date", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["planning"], "horaire", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("planning_show", array("id" => $this->getAttribute($context["planning"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("planning_edit", array("id" => $this->getAttribute($context["planning"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['planning'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("planning_new");
        echo "\">Create a new planning</a>
        </li>
    </ul>
";
        
        $__internal_d7f11fc9d99cf276b005f5529dcdd0beef74fa1551b7a9f748d9ae161cf6f68e->leave($__internal_d7f11fc9d99cf276b005f5529dcdd0beef74fa1551b7a9f748d9ae161cf6f68e_prof);

        
        $__internal_14a35f07f8b7a7e7ec73e497e7cb40489aa42fa09edc3f4447b7803087b1b6f5->leave($__internal_14a35f07f8b7a7e7ec73e497e7cb40489aa42fa09edc3f4447b7803087b1b6f5_prof);

    }

    public function getTemplateName()
    {
        return "planning/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 38,  107 => 33,  95 => 27,  89 => 24,  82 => 20,  76 => 19,  70 => 18,  67 => 17,  63 => 16,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Plannings list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Date</th>
                <th>Horaire</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for planning in plannings %}
            <tr>
                <td><a href=\"{{ path('planning_show', { 'id': planning.id }) }}\">{{ planning.id }}</a></td>
                <td>{% if planning.date %}{{ planning.date|date('Y-m-d') }}{% endif %}</td>
                <td>{{ planning.horaire }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('planning_show', { 'id': planning.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('planning_edit', { 'id': planning.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('planning_new') }}\">Create a new planning</a>
        </li>
    </ul>
{% endblock %}
", "planning/index.html.twig", "/var/www/projets/adrar_reservation/app/Resources/views/planning/index.html.twig");
    }
}
