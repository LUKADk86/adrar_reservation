<?php

/* formateur/show.html.twig */
class __TwigTemplate_8eb3761f8ffc96f4c31ef712496701e5d033fe93d2fa5d9895d8331f51676286 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "formateur/show.html.twig", 1);
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
        $__internal_1d1ff8e01c6b10347f3aef45c9539408e6b9360521db1dd288626930124d165f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d1ff8e01c6b10347f3aef45c9539408e6b9360521db1dd288626930124d165f->enter($__internal_1d1ff8e01c6b10347f3aef45c9539408e6b9360521db1dd288626930124d165f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "formateur/show.html.twig"));

        $__internal_7efcb548eb959457678b5ac6260803c6e71be669b2c312c2e0ce03766b19758e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7efcb548eb959457678b5ac6260803c6e71be669b2c312c2e0ce03766b19758e->enter($__internal_7efcb548eb959457678b5ac6260803c6e71be669b2c312c2e0ce03766b19758e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "formateur/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d1ff8e01c6b10347f3aef45c9539408e6b9360521db1dd288626930124d165f->leave($__internal_1d1ff8e01c6b10347f3aef45c9539408e6b9360521db1dd288626930124d165f_prof);

        
        $__internal_7efcb548eb959457678b5ac6260803c6e71be669b2c312c2e0ce03766b19758e->leave($__internal_7efcb548eb959457678b5ac6260803c6e71be669b2c312c2e0ce03766b19758e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_54617d5df32a71a404b63c566bee8e653e7e4ce9b672e90fc38825bf3561b9e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54617d5df32a71a404b63c566bee8e653e7e4ce9b672e90fc38825bf3561b9e5->enter($__internal_54617d5df32a71a404b63c566bee8e653e7e4ce9b672e90fc38825bf3561b9e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_02c8de0d55f508945b8f70aa56f8f691a22f1b3959280ac53d519089133faca2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02c8de0d55f508945b8f70aa56f8f691a22f1b3959280ac53d519089133faca2->enter($__internal_02c8de0d55f508945b8f70aa56f8f691a22f1b3959280ac53d519089133faca2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Formateur</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["formateur"] ?? $this->getContext($context, "formateur")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["formateur"] ?? $this->getContext($context, "formateur")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Lastname</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["formateur"] ?? $this->getContext($context, "formateur")), "lastname", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Specialite</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["formateur"] ?? $this->getContext($context, "formateur")), "specialite", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("formateur_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("formateur_edit", array("id" => $this->getAttribute(($context["formateur"] ?? $this->getContext($context, "formateur")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 35
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 37
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_02c8de0d55f508945b8f70aa56f8f691a22f1b3959280ac53d519089133faca2->leave($__internal_02c8de0d55f508945b8f70aa56f8f691a22f1b3959280ac53d519089133faca2_prof);

        
        $__internal_54617d5df32a71a404b63c566bee8e653e7e4ce9b672e90fc38825bf3561b9e5->leave($__internal_54617d5df32a71a404b63c566bee8e653e7e4ce9b672e90fc38825bf3561b9e5_prof);

    }

    public function getTemplateName()
    {
        return "formateur/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 37,  100 => 35,  94 => 32,  88 => 29,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Formateur</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ formateur.id }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ formateur.name }}</td>
            </tr>
            <tr>
                <th>Lastname</th>
                <td>{{ formateur.lastname }}</td>
            </tr>
            <tr>
                <th>Specialite</th>
                <td>{{ formateur.specialite }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('formateur_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('formateur_edit', { 'id': formateur.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "formateur/show.html.twig", "/var/www/projets/adrar_reservation/app/Resources/views/formateur/show.html.twig");
    }
}
