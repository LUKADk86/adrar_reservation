<?php

/* formateur/index.html.twig */
class __TwigTemplate_622bb3ea2057fa2ca0963263dc3b3f2f87589547c777a9457ce0c12dc20d221d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "formateur/index.html.twig", 1);
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
        $__internal_70631776b1f0ec55c12d7df269ff7a13811cf3b2346e0e1b8e2c152e650c3d02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70631776b1f0ec55c12d7df269ff7a13811cf3b2346e0e1b8e2c152e650c3d02->enter($__internal_70631776b1f0ec55c12d7df269ff7a13811cf3b2346e0e1b8e2c152e650c3d02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "formateur/index.html.twig"));

        $__internal_e1b30847b232b087f2c2decd29a2caf258c03c0ad8642615560b377438475587 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1b30847b232b087f2c2decd29a2caf258c03c0ad8642615560b377438475587->enter($__internal_e1b30847b232b087f2c2decd29a2caf258c03c0ad8642615560b377438475587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "formateur/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_70631776b1f0ec55c12d7df269ff7a13811cf3b2346e0e1b8e2c152e650c3d02->leave($__internal_70631776b1f0ec55c12d7df269ff7a13811cf3b2346e0e1b8e2c152e650c3d02_prof);

        
        $__internal_e1b30847b232b087f2c2decd29a2caf258c03c0ad8642615560b377438475587->leave($__internal_e1b30847b232b087f2c2decd29a2caf258c03c0ad8642615560b377438475587_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_11c5678450b2b8fabb21de88de215805b67be74a0ced9c003306acda3e7775bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11c5678450b2b8fabb21de88de215805b67be74a0ced9c003306acda3e7775bd->enter($__internal_11c5678450b2b8fabb21de88de215805b67be74a0ced9c003306acda3e7775bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b39e7198e7368c4cc354316617218f078b5c002456f346e6cf08f95827838185 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b39e7198e7368c4cc354316617218f078b5c002456f346e6cf08f95827838185->enter($__internal_b39e7198e7368c4cc354316617218f078b5c002456f346e6cf08f95827838185_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Formateurs list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Lastname</th>
                <th>Specialite</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["formateurs"] ?? $this->getContext($context, "formateurs")));
        foreach ($context['_seq'] as $context["_key"] => $context["formateur"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("formateur_show", array("id" => $this->getAttribute($context["formateur"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["formateur"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["formateur"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["formateur"], "lastname", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["formateur"], "specialite", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("formateur_show", array("id" => $this->getAttribute($context["formateur"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("formateur_edit", array("id" => $this->getAttribute($context["formateur"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formateur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("formateur_new");
        echo "\">Create a new formateur</a>
        </li>
    </ul>
";
        
        $__internal_b39e7198e7368c4cc354316617218f078b5c002456f346e6cf08f95827838185->leave($__internal_b39e7198e7368c4cc354316617218f078b5c002456f346e6cf08f95827838185_prof);

        
        $__internal_11c5678450b2b8fabb21de88de215805b67be74a0ced9c003306acda3e7775bd->leave($__internal_11c5678450b2b8fabb21de88de215805b67be74a0ced9c003306acda3e7775bd_prof);

    }

    public function getTemplateName()
    {
        return "formateur/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 40,  110 => 35,  98 => 29,  92 => 26,  85 => 22,  81 => 21,  77 => 20,  71 => 19,  68 => 18,  64 => 17,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Formateurs list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Lastname</th>
                <th>Specialite</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for formateur in formateurs %}
            <tr>
                <td><a href=\"{{ path('formateur_show', { 'id': formateur.id }) }}\">{{ formateur.id }}</a></td>
                <td>{{ formateur.name }}</td>
                <td>{{ formateur.lastname }}</td>
                <td>{{ formateur.specialite }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('formateur_show', { 'id': formateur.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('formateur_edit', { 'id': formateur.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('formateur_new') }}\">Create a new formateur</a>
        </li>
    </ul>
{% endblock %}
", "formateur/index.html.twig", "/var/www/projets/adrar_reservation/app/Resources/views/formateur/index.html.twig");
    }
}
