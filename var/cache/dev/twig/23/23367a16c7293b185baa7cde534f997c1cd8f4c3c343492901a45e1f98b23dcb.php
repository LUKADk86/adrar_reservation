<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_825ca2aa137a9515ebe275341b175c9009faae5483283b9a68051a94da6769f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3c38a21e91a91ad4b3c8ade280b6a199d6c73a1e6a417a3b37bb353a264cc546 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c38a21e91a91ad4b3c8ade280b6a199d6c73a1e6a417a3b37bb353a264cc546->enter($__internal_3c38a21e91a91ad4b3c8ade280b6a199d6c73a1e6a417a3b37bb353a264cc546_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_cc403205426fff8e47595a1701cd3e8e69106238f3e0a93fac4fed030bfca449 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc403205426fff8e47595a1701cd3e8e69106238f3e0a93fac4fed030bfca449->enter($__internal_cc403205426fff8e47595a1701cd3e8e69106238f3e0a93fac4fed030bfca449_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_3c38a21e91a91ad4b3c8ade280b6a199d6c73a1e6a417a3b37bb353a264cc546->leave($__internal_3c38a21e91a91ad4b3c8ade280b6a199d6c73a1e6a417a3b37bb353a264cc546_prof);

        
        $__internal_cc403205426fff8e47595a1701cd3e8e69106238f3e0a93fac4fed030bfca449->leave($__internal_cc403205426fff8e47595a1701cd3e8e69106238f3e0a93fac4fed030bfca449_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a31d205372831bdf9e0f428a53ed5d7a753d9121a9c59e04ef8d2a45626ac6e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a31d205372831bdf9e0f428a53ed5d7a753d9121a9c59e04ef8d2a45626ac6e7->enter($__internal_a31d205372831bdf9e0f428a53ed5d7a753d9121a9c59e04ef8d2a45626ac6e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6069b50cbf47a4f466c64347a0c91072d3e001c914d7136d5fdb78e7ea928a77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6069b50cbf47a4f466c64347a0c91072d3e001c914d7136d5fdb78e7ea928a77->enter($__internal_6069b50cbf47a4f466c64347a0c91072d3e001c914d7136d5fdb78e7ea928a77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_6069b50cbf47a4f466c64347a0c91072d3e001c914d7136d5fdb78e7ea928a77->leave($__internal_6069b50cbf47a4f466c64347a0c91072d3e001c914d7136d5fdb78e7ea928a77_prof);

        
        $__internal_a31d205372831bdf9e0f428a53ed5d7a753d9121a9c59e04ef8d2a45626ac6e7->leave($__internal_a31d205372831bdf9e0f428a53ed5d7a753d9121a9c59e04ef8d2a45626ac6e7_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_70af37111522f84ccaddef245ca722b50b1af774b6b121515c275e1c52f83ef7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70af37111522f84ccaddef245ca722b50b1af774b6b121515c275e1c52f83ef7->enter($__internal_70af37111522f84ccaddef245ca722b50b1af774b6b121515c275e1c52f83ef7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e2ce536504628eb278f5dedac0efa9b1c4b055886415f74f90c091383a02cfe3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2ce536504628eb278f5dedac0efa9b1c4b055886415f74f90c091383a02cfe3->enter($__internal_e2ce536504628eb278f5dedac0efa9b1c4b055886415f74f90c091383a02cfe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_e2ce536504628eb278f5dedac0efa9b1c4b055886415f74f90c091383a02cfe3->leave($__internal_e2ce536504628eb278f5dedac0efa9b1c4b055886415f74f90c091383a02cfe3_prof);

        
        $__internal_70af37111522f84ccaddef245ca722b50b1af774b6b121515c275e1c52f83ef7->leave($__internal_70af37111522f84ccaddef245ca722b50b1af774b6b121515c275e1c52f83ef7_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_6940b3fde7dd75b88306a181cfec59cda3527f55a22af97582e1fcd28ebabcc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6940b3fde7dd75b88306a181cfec59cda3527f55a22af97582e1fcd28ebabcc5->enter($__internal_6940b3fde7dd75b88306a181cfec59cda3527f55a22af97582e1fcd28ebabcc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e7dd79e635286feee6417f8445a00a8114f99f7e8a53098dd3980372cd0c66a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7dd79e635286feee6417f8445a00a8114f99f7e8a53098dd3980372cd0c66a3->enter($__internal_e7dd79e635286feee6417f8445a00a8114f99f7e8a53098dd3980372cd0c66a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e7dd79e635286feee6417f8445a00a8114f99f7e8a53098dd3980372cd0c66a3->leave($__internal_e7dd79e635286feee6417f8445a00a8114f99f7e8a53098dd3980372cd0c66a3_prof);

        
        $__internal_6940b3fde7dd75b88306a181cfec59cda3527f55a22af97582e1fcd28ebabcc5->leave($__internal_6940b3fde7dd75b88306a181cfec59cda3527f55a22af97582e1fcd28ebabcc5_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/var/www/projets/adrar_reservation/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
