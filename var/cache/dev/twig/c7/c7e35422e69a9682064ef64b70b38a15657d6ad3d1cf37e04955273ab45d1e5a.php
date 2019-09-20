<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_ee77b0566e02c08097cc0818e6e220f0438fc514ff5c2ae52342b3a8ccea3295 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ce8c5e29dae49bdd40a3195a9223fc2879173970426d02ab98e6b746af785f6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce8c5e29dae49bdd40a3195a9223fc2879173970426d02ab98e6b746af785f6d->enter($__internal_ce8c5e29dae49bdd40a3195a9223fc2879173970426d02ab98e6b746af785f6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_722e43de254852d40ddf140db597e0498738db1e2771e62d23cb43a8da0a4ef2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_722e43de254852d40ddf140db597e0498738db1e2771e62d23cb43a8da0a4ef2->enter($__internal_722e43de254852d40ddf140db597e0498738db1e2771e62d23cb43a8da0a4ef2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce8c5e29dae49bdd40a3195a9223fc2879173970426d02ab98e6b746af785f6d->leave($__internal_ce8c5e29dae49bdd40a3195a9223fc2879173970426d02ab98e6b746af785f6d_prof);

        
        $__internal_722e43de254852d40ddf140db597e0498738db1e2771e62d23cb43a8da0a4ef2->leave($__internal_722e43de254852d40ddf140db597e0498738db1e2771e62d23cb43a8da0a4ef2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2df3276980aa9adade18895141d5db2fb435902ccc93f64da9bb67db4d8ab519 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2df3276980aa9adade18895141d5db2fb435902ccc93f64da9bb67db4d8ab519->enter($__internal_2df3276980aa9adade18895141d5db2fb435902ccc93f64da9bb67db4d8ab519_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_99e40d104dd9471c62c81009bbda7b26eddb8c33f7168f0ba96a991a2f81c029 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99e40d104dd9471c62c81009bbda7b26eddb8c33f7168f0ba96a991a2f81c029->enter($__internal_99e40d104dd9471c62c81009bbda7b26eddb8c33f7168f0ba96a991a2f81c029_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_99e40d104dd9471c62c81009bbda7b26eddb8c33f7168f0ba96a991a2f81c029->leave($__internal_99e40d104dd9471c62c81009bbda7b26eddb8c33f7168f0ba96a991a2f81c029_prof);

        
        $__internal_2df3276980aa9adade18895141d5db2fb435902ccc93f64da9bb67db4d8ab519->leave($__internal_2df3276980aa9adade18895141d5db2fb435902ccc93f64da9bb67db4d8ab519_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_02767fdcbdfbe6a5c50cdcad807689ffeb64fbe83a4aefe6778b44f86dd8f6ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02767fdcbdfbe6a5c50cdcad807689ffeb64fbe83a4aefe6778b44f86dd8f6ab->enter($__internal_02767fdcbdfbe6a5c50cdcad807689ffeb64fbe83a4aefe6778b44f86dd8f6ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0ee4ae0887009d74e32a717b0c0532817712079c6bc292a0ad55ae7fd7d90447 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ee4ae0887009d74e32a717b0c0532817712079c6bc292a0ad55ae7fd7d90447->enter($__internal_0ee4ae0887009d74e32a717b0c0532817712079c6bc292a0ad55ae7fd7d90447_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_0ee4ae0887009d74e32a717b0c0532817712079c6bc292a0ad55ae7fd7d90447->leave($__internal_0ee4ae0887009d74e32a717b0c0532817712079c6bc292a0ad55ae7fd7d90447_prof);

        
        $__internal_02767fdcbdfbe6a5c50cdcad807689ffeb64fbe83a4aefe6778b44f86dd8f6ab->leave($__internal_02767fdcbdfbe6a5c50cdcad807689ffeb64fbe83a4aefe6778b44f86dd8f6ab_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_725e593d9bd7e36d2ba389aeecbf0b55f549c4e36bde1a6c9cd394761449d6fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_725e593d9bd7e36d2ba389aeecbf0b55f549c4e36bde1a6c9cd394761449d6fe->enter($__internal_725e593d9bd7e36d2ba389aeecbf0b55f549c4e36bde1a6c9cd394761449d6fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fb1b16d4be9e574a775752b3d4ba1f48c059b61420ba89c0e8e8b08503895d27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb1b16d4be9e574a775752b3d4ba1f48c059b61420ba89c0e8e8b08503895d27->enter($__internal_fb1b16d4be9e574a775752b3d4ba1f48c059b61420ba89c0e8e8b08503895d27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_fb1b16d4be9e574a775752b3d4ba1f48c059b61420ba89c0e8e8b08503895d27->leave($__internal_fb1b16d4be9e574a775752b3d4ba1f48c059b61420ba89c0e8e8b08503895d27_prof);

        
        $__internal_725e593d9bd7e36d2ba389aeecbf0b55f549c4e36bde1a6c9cd394761449d6fe->leave($__internal_725e593d9bd7e36d2ba389aeecbf0b55f549c4e36bde1a6c9cd394761449d6fe_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/projets/adrar_reservation/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
