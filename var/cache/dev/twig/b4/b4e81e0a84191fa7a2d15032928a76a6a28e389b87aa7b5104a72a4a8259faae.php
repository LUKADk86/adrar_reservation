<?php

/* salle/index.html.twig */
class __TwigTemplate_f333e0b05fa25f0b438d15b4330e7557794f4cba8ace9dbef2819b8e960b6a72 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "salle/index.html.twig", 1);
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
        $__internal_e03d371ab8afa3f7b8d19875b984508956c464087a26830fab406f55e7b0891a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e03d371ab8afa3f7b8d19875b984508956c464087a26830fab406f55e7b0891a->enter($__internal_e03d371ab8afa3f7b8d19875b984508956c464087a26830fab406f55e7b0891a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "salle/index.html.twig"));

        $__internal_a4dd87ae62c5ee8ce00f40e3ba56a8afa2d90cb1aa6fded463b40d1e79c34bad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4dd87ae62c5ee8ce00f40e3ba56a8afa2d90cb1aa6fded463b40d1e79c34bad->enter($__internal_a4dd87ae62c5ee8ce00f40e3ba56a8afa2d90cb1aa6fded463b40d1e79c34bad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "salle/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e03d371ab8afa3f7b8d19875b984508956c464087a26830fab406f55e7b0891a->leave($__internal_e03d371ab8afa3f7b8d19875b984508956c464087a26830fab406f55e7b0891a_prof);

        
        $__internal_a4dd87ae62c5ee8ce00f40e3ba56a8afa2d90cb1aa6fded463b40d1e79c34bad->leave($__internal_a4dd87ae62c5ee8ce00f40e3ba56a8afa2d90cb1aa6fded463b40d1e79c34bad_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cea55a9e689124c2fb0a136d17eaa3440d162addb0be8ca8421e20fea0b8a91c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cea55a9e689124c2fb0a136d17eaa3440d162addb0be8ca8421e20fea0b8a91c->enter($__internal_cea55a9e689124c2fb0a136d17eaa3440d162addb0be8ca8421e20fea0b8a91c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d6948558b40b1b4207d8e47b5e1a869e4ed3acc11ef8d76bf2a3979a0f14cb22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6948558b40b1b4207d8e47b5e1a869e4ed3acc11ef8d76bf2a3979a0f14cb22->enter($__internal_d6948558b40b1b4207d8e47b5e1a869e4ed3acc11ef8d76bf2a3979a0f14cb22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Salles list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Numerosalle</th>
                <th>Nbplace</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["salles"] ?? $this->getContext($context, "salles")));
        foreach ($context['_seq'] as $context["_key"] => $context["salle"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("salle_show", array("id" => $this->getAttribute($context["salle"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["salle"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["salle"], "numeroSalle", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["salle"], "nbPlace", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("salle_show", array("id" => $this->getAttribute($context["salle"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("salle_edit", array("id" => $this->getAttribute($context["salle"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['salle'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("salle_new");
        echo "\">Create a new salle</a>
        </li>
    </ul>
";
        
        $__internal_d6948558b40b1b4207d8e47b5e1a869e4ed3acc11ef8d76bf2a3979a0f14cb22->leave($__internal_d6948558b40b1b4207d8e47b5e1a869e4ed3acc11ef8d76bf2a3979a0f14cb22_prof);

        
        $__internal_cea55a9e689124c2fb0a136d17eaa3440d162addb0be8ca8421e20fea0b8a91c->leave($__internal_cea55a9e689124c2fb0a136d17eaa3440d162addb0be8ca8421e20fea0b8a91c_prof);

    }

    public function getTemplateName()
    {
        return "salle/index.html.twig";
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
    <h1>Salles list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Numerosalle</th>
                <th>Nbplace</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for salle in salles %}
            <tr>
                <td><a href=\"{{ path('salle_show', { 'id': salle.id }) }}\">{{ salle.id }}</a></td>
                <td>{{ salle.numeroSalle }}</td>
                <td>{{ salle.nbPlace }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('salle_show', { 'id': salle.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('salle_edit', { 'id': salle.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('salle_new') }}\">Create a new salle</a>
        </li>
    </ul>
{% endblock %}
", "salle/index.html.twig", "/var/www/projets/adrar_reservation/app/Resources/views/salle/index.html.twig");
    }
}
