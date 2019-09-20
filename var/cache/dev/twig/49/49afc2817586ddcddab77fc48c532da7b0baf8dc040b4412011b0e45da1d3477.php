<?php

/* base.html.twig */
class __TwigTemplate_559e907860c46520099dcbde370f6353b32f541dcfcac85bea6c45c73c49bfbf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'head_css' => array($this, 'block_head_css'),
            'head_js' => array($this, 'block_head_js'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8dc9cbb2532f34cabe3f9e152cc06c3147497dbb08d03cfd45be2305698e6688 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8dc9cbb2532f34cabe3f9e152cc06c3147497dbb08d03cfd45be2305698e6688->enter($__internal_8dc9cbb2532f34cabe3f9e152cc06c3147497dbb08d03cfd45be2305698e6688_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_7311fe72ddd8a2555d5ece9edf6a31e704fac246fb7fcf8e4c1cf7960716ef46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7311fe72ddd8a2555d5ece9edf6a31e704fac246fb7fcf8e4c1cf7960716ef46->enter($__internal_7311fe72ddd8a2555d5ece9edf6a31e704fac246fb7fcf8e4c1cf7960716ef46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 8
        echo "        ";
        $this->displayBlock('head_css', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('head_js', $context, $blocks);
        // line 14
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body >
    <style>
        body{background-image:url(\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/fond.jpg"), "html", null, true);
        echo "\");background-size: cover;}
    </style>
    <div class=\"d-flex p-2 bd-highlight\" style=\"margin-left: 22%\">
        <img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/adrar.png"), "html", null, true);
        echo "\">
        <div>
        <h1 class=\"text-center text-light\">ADRAR Formations</h1>
            <h1 class=\"text-center text-light\">POLE NUMÉRIQUE</h1>

        <h1 class=\"text-center text-light\">Application de réservation pour formateurs</h1>
            <h1 class=\"text-center text-light\">Centre Du Montpellier</h1>
        </div>
    </div>
    <hr>
        ";
        // line 31
        $this->displayBlock('body', $context, $blocks);
        // line 32
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 33
        echo "
    </body>
</html>
";
        
        $__internal_8dc9cbb2532f34cabe3f9e152cc06c3147497dbb08d03cfd45be2305698e6688->leave($__internal_8dc9cbb2532f34cabe3f9e152cc06c3147497dbb08d03cfd45be2305698e6688_prof);

        
        $__internal_7311fe72ddd8a2555d5ece9edf6a31e704fac246fb7fcf8e4c1cf7960716ef46->leave($__internal_7311fe72ddd8a2555d5ece9edf6a31e704fac246fb7fcf8e4c1cf7960716ef46_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_90b63317a4362f7c01f700afd69b88b0c350d8c76cff264a516953d1218781fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90b63317a4362f7c01f700afd69b88b0c350d8c76cff264a516953d1218781fe->enter($__internal_90b63317a4362f7c01f700afd69b88b0c350d8c76cff264a516953d1218781fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cc1dc66f9689de21dbc4937633ed9e36455617d4a54388cac366acbbbe4b10cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc1dc66f9689de21dbc4937633ed9e36455617d4a54388cac366acbbbe4b10cc->enter($__internal_cc1dc66f9689de21dbc4937633ed9e36455617d4a54388cac366acbbbe4b10cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ADRAR Reservation!";
        
        $__internal_cc1dc66f9689de21dbc4937633ed9e36455617d4a54388cac366acbbbe4b10cc->leave($__internal_cc1dc66f9689de21dbc4937633ed9e36455617d4a54388cac366acbbbe4b10cc_prof);

        
        $__internal_90b63317a4362f7c01f700afd69b88b0c350d8c76cff264a516953d1218781fe->leave($__internal_90b63317a4362f7c01f700afd69b88b0c350d8c76cff264a516953d1218781fe_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_91b76eb0742b3e26727a3bcb0fd236431ad71f05d990fa29090dd7d4cc7e4387 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91b76eb0742b3e26727a3bcb0fd236431ad71f05d990fa29090dd7d4cc7e4387->enter($__internal_91b76eb0742b3e26727a3bcb0fd236431ad71f05d990fa29090dd7d4cc7e4387_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_f180576d6ad02db3c6fc1b03163dd651aebeb76c141953a124e5795a8f660269 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f180576d6ad02db3c6fc1b03163dd651aebeb76c141953a124e5795a8f660269->enter($__internal_f180576d6ad02db3c6fc1b03163dd651aebeb76c141953a124e5795a8f660269_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        ";
        
        $__internal_f180576d6ad02db3c6fc1b03163dd651aebeb76c141953a124e5795a8f660269->leave($__internal_f180576d6ad02db3c6fc1b03163dd651aebeb76c141953a124e5795a8f660269_prof);

        
        $__internal_91b76eb0742b3e26727a3bcb0fd236431ad71f05d990fa29090dd7d4cc7e4387->leave($__internal_91b76eb0742b3e26727a3bcb0fd236431ad71f05d990fa29090dd7d4cc7e4387_prof);

    }

    // line 8
    public function block_head_css($context, array $blocks = array())
    {
        $__internal_dfe4970a3b57bbde7bf37259da035d95b96291aa4b9a686a60ed3788cb42e2b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfe4970a3b57bbde7bf37259da035d95b96291aa4b9a686a60ed3788cb42e2b7->enter($__internal_dfe4970a3b57bbde7bf37259da035d95b96291aa4b9a686a60ed3788cb42e2b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_css"));

        $__internal_a2698cd65864c848e4e02af5adf956ff2b465004dd87e2e6bf4140eaf4065bc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2698cd65864c848e4e02af5adf956ff2b465004dd87e2e6bf4140eaf4065bc5->enter($__internal_a2698cd65864c848e4e02af5adf956ff2b465004dd87e2e6bf4140eaf4065bc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_css"));

        // line 9
        echo "            <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
        ";
        
        $__internal_a2698cd65864c848e4e02af5adf956ff2b465004dd87e2e6bf4140eaf4065bc5->leave($__internal_a2698cd65864c848e4e02af5adf956ff2b465004dd87e2e6bf4140eaf4065bc5_prof);

        
        $__internal_dfe4970a3b57bbde7bf37259da035d95b96291aa4b9a686a60ed3788cb42e2b7->leave($__internal_dfe4970a3b57bbde7bf37259da035d95b96291aa4b9a686a60ed3788cb42e2b7_prof);

    }

    // line 11
    public function block_head_js($context, array $blocks = array())
    {
        $__internal_7552cc72791983b8d11783af8366ca0bb787bf40ad7e3081f397356a3e0b8160 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7552cc72791983b8d11783af8366ca0bb787bf40ad7e3081f397356a3e0b8160->enter($__internal_7552cc72791983b8d11783af8366ca0bb787bf40ad7e3081f397356a3e0b8160_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_js"));

        $__internal_88efd5814314cb903042dfb1669f1d9fabf350af94f73823393062cac1bf832f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88efd5814314cb903042dfb1669f1d9fabf350af94f73823393062cac1bf832f->enter($__internal_88efd5814314cb903042dfb1669f1d9fabf350af94f73823393062cac1bf832f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_js"));

        // line 12
        echo "            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\" integrity=\"sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1\" crossorigin=\"anonymous\"></script>
        ";
        
        $__internal_88efd5814314cb903042dfb1669f1d9fabf350af94f73823393062cac1bf832f->leave($__internal_88efd5814314cb903042dfb1669f1d9fabf350af94f73823393062cac1bf832f_prof);

        
        $__internal_7552cc72791983b8d11783af8366ca0bb787bf40ad7e3081f397356a3e0b8160->leave($__internal_7552cc72791983b8d11783af8366ca0bb787bf40ad7e3081f397356a3e0b8160_prof);

    }

    // line 31
    public function block_body($context, array $blocks = array())
    {
        $__internal_7da0406de6601897912070b0c62d0652738b494a1278858b6738aec1597b73f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7da0406de6601897912070b0c62d0652738b494a1278858b6738aec1597b73f5->enter($__internal_7da0406de6601897912070b0c62d0652738b494a1278858b6738aec1597b73f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_67cf89975dc9e6498fa307c753370597004caf127c0168ba4cf2cf4917f06557 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67cf89975dc9e6498fa307c753370597004caf127c0168ba4cf2cf4917f06557->enter($__internal_67cf89975dc9e6498fa307c753370597004caf127c0168ba4cf2cf4917f06557_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_67cf89975dc9e6498fa307c753370597004caf127c0168ba4cf2cf4917f06557->leave($__internal_67cf89975dc9e6498fa307c753370597004caf127c0168ba4cf2cf4917f06557_prof);

        
        $__internal_7da0406de6601897912070b0c62d0652738b494a1278858b6738aec1597b73f5->leave($__internal_7da0406de6601897912070b0c62d0652738b494a1278858b6738aec1597b73f5_prof);

    }

    // line 32
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6e26ec3e2d8abe12b76f6040e4d792c3fe17eb2430f0d89cc808cd0b11f12567 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e26ec3e2d8abe12b76f6040e4d792c3fe17eb2430f0d89cc808cd0b11f12567->enter($__internal_6e26ec3e2d8abe12b76f6040e4d792c3fe17eb2430f0d89cc808cd0b11f12567_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_69f2c52ed108ae7cae368d8ac7d112bb189e1b8a4b6f72d53d4951b77a9234c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69f2c52ed108ae7cae368d8ac7d112bb189e1b8a4b6f72d53d4951b77a9234c8->enter($__internal_69f2c52ed108ae7cae368d8ac7d112bb189e1b8a4b6f72d53d4951b77a9234c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_69f2c52ed108ae7cae368d8ac7d112bb189e1b8a4b6f72d53d4951b77a9234c8->leave($__internal_69f2c52ed108ae7cae368d8ac7d112bb189e1b8a4b6f72d53d4951b77a9234c8_prof);

        
        $__internal_6e26ec3e2d8abe12b76f6040e4d792c3fe17eb2430f0d89cc808cd0b11f12567->leave($__internal_6e26ec3e2d8abe12b76f6040e4d792c3fe17eb2430f0d89cc808cd0b11f12567_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 32,  171 => 31,  160 => 12,  151 => 11,  140 => 9,  131 => 8,  121 => 7,  112 => 6,  94 => 5,  81 => 33,  78 => 32,  76 => 31,  63 => 21,  57 => 18,  49 => 14,  46 => 11,  43 => 8,  41 => 6,  37 => 5,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}ADRAR Reservation!{% endblock %}</title>
        {% block stylesheets %}
        {% endblock %}
        {% block head_css %}
            <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
        {% endblock %}
        {% block head_js %}
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\" integrity=\"sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1\" crossorigin=\"anonymous\"></script>
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body >
    <style>
        body{background-image:url(\"{{ asset('images/fond.jpg') }}\");background-size: cover;}
    </style>
    <div class=\"d-flex p-2 bd-highlight\" style=\"margin-left: 22%\">
        <img src=\"{{ asset('images/adrar.png') }}\">
        <div>
        <h1 class=\"text-center text-light\">ADRAR Formations</h1>
            <h1 class=\"text-center text-light\">POLE NUMÉRIQUE</h1>

        <h1 class=\"text-center text-light\">Application de réservation pour formateurs</h1>
            <h1 class=\"text-center text-light\">Centre Du Montpellier</h1>
        </div>
    </div>
    <hr>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}

    </body>
</html>
", "base.html.twig", "/var/www/projets/adrar_reservation/app/Resources/views/base.html.twig");
    }
}
