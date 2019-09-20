<?php

/* bootstrap_4_layout.html.twig */
class __TwigTemplate_e683d18d4f6b33c09b6ce8f3d31e03757ee29ee8ad7e50045a65e00d6bbcb275 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_base_layout.html.twig", "bootstrap_4_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_base_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'money_widget' => array($this, 'block_money_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'widget_attributes' => array($this, 'block_widget_attributes'),
                'button_widget' => array($this, 'block_button_widget'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'form_label' => array($this, 'block_form_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0125e7af3bd1fb7bea5a4e083aea9c925237551bc5e4581e7cdcbe4b60673797 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0125e7af3bd1fb7bea5a4e083aea9c925237551bc5e4581e7cdcbe4b60673797->enter($__internal_0125e7af3bd1fb7bea5a4e083aea9c925237551bc5e4581e7cdcbe4b60673797_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_layout.html.twig"));

        $__internal_0ddb6984a27d07de1df053ba26e4c00cbecc7ce6bee2da80e7ce72769a187038 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ddb6984a27d07de1df053ba26e4c00cbecc7ce6bee2da80e7ce72769a187038->enter($__internal_0ddb6984a27d07de1df053ba26e4c00cbecc7ce6bee2da80e7ce72769a187038_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('money_widget', $context, $blocks);
        // line 12
        echo "
";
        // line 13
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('date_widget', $context, $blocks);
        // line 28
        echo "
";
        // line 29
        $this->displayBlock('time_widget', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 44
        echo "
";
        // line 45
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 52
        echo "
";
        // line 53
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 60
        $this->displayBlock('widget_attributes', $context, $blocks);
        // line 67
        $this->displayBlock('button_widget', $context, $blocks);
        // line 71
        echo "
";
        // line 72
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 83
        echo "
";
        // line 84
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 95
        echo "
";
        // line 96
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 120
        echo "
";
        // line 122
        echo "
";
        // line 123
        $this->displayBlock('form_label', $context, $blocks);
        // line 132
        echo "
";
        // line 133
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 158
        echo "
";
        // line 160
        echo "
";
        // line 161
        $this->displayBlock('form_row', $context, $blocks);
        // line 171
        echo "
";
        // line 173
        echo "
";
        // line 174
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_0125e7af3bd1fb7bea5a4e083aea9c925237551bc5e4581e7cdcbe4b60673797->leave($__internal_0125e7af3bd1fb7bea5a4e083aea9c925237551bc5e4581e7cdcbe4b60673797_prof);

        
        $__internal_0ddb6984a27d07de1df053ba26e4c00cbecc7ce6bee2da80e7ce72769a187038->leave($__internal_0ddb6984a27d07de1df053ba26e4c00cbecc7ce6bee2da80e7ce72769a187038_prof);

    }

    // line 5
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_61448dc75eeb5136ec7583df9f3777c6bd355c56bb27e60f7f09cc74b3b1868c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61448dc75eeb5136ec7583df9f3777c6bd355c56bb27e60f7f09cc74b3b1868c->enter($__internal_61448dc75eeb5136ec7583df9f3777c6bd355c56bb27e60f7f09cc74b3b1868c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_a1fe1e0e6989c36d44f2d7ae5ce400aedce036dfe50748907c6beadbc85d05e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1fe1e0e6989c36d44f2d7ae5ce400aedce036dfe50748907c6beadbc85d05e3->enter($__internal_a1fe1e0e6989c36d44f2d7ae5ce400aedce036dfe50748907c6beadbc85d05e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 6
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            // line 7
            echo "        ";
            $context["group_class"] = " form-control is-invalid";
            // line 8
            echo "        ";
            $context["valid"] = true;
            // line 9
            echo "    ";
        }
        // line 10
        $this->displayParentBlock("money_widget", $context, $blocks);
        
        $__internal_a1fe1e0e6989c36d44f2d7ae5ce400aedce036dfe50748907c6beadbc85d05e3->leave($__internal_a1fe1e0e6989c36d44f2d7ae5ce400aedce036dfe50748907c6beadbc85d05e3_prof);

        
        $__internal_61448dc75eeb5136ec7583df9f3777c6bd355c56bb27e60f7f09cc74b3b1868c->leave($__internal_61448dc75eeb5136ec7583df9f3777c6bd355c56bb27e60f7f09cc74b3b1868c_prof);

    }

    // line 13
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_6ec225a6f1210ab9ef130d5d4080624dc5de966e46b07e3349489599186219e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ec225a6f1210ab9ef130d5d4080624dc5de966e46b07e3349489599186219e5->enter($__internal_6ec225a6f1210ab9ef130d5d4080624dc5de966e46b07e3349489599186219e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_5c6dbac27a6c41f74fd5e067f75941452ccbbc8efcecdb306d32be315bbc81a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c6dbac27a6c41f74fd5e067f75941452ccbbc8efcecdb306d32be315bbc81a2->enter($__internal_5c6dbac27a6c41f74fd5e067f75941452ccbbc8efcecdb306d32be315bbc81a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 14
        if (((($context["widget"] ?? $this->getContext($context, "widget")) != "single_text") &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            // line 15
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 16
            $context["valid"] = true;
        }
        // line 18
        $this->displayParentBlock("datetime_widget", $context, $blocks);
        
        $__internal_5c6dbac27a6c41f74fd5e067f75941452ccbbc8efcecdb306d32be315bbc81a2->leave($__internal_5c6dbac27a6c41f74fd5e067f75941452ccbbc8efcecdb306d32be315bbc81a2_prof);

        
        $__internal_6ec225a6f1210ab9ef130d5d4080624dc5de966e46b07e3349489599186219e5->leave($__internal_6ec225a6f1210ab9ef130d5d4080624dc5de966e46b07e3349489599186219e5_prof);

    }

    // line 21
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_eb90d44bcdd89f3a5c7b79f876ffdb6e86f6adbc6beb3bd8c5168eb4a7f0350c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb90d44bcdd89f3a5c7b79f876ffdb6e86f6adbc6beb3bd8c5168eb4a7f0350c->enter($__internal_eb90d44bcdd89f3a5c7b79f876ffdb6e86f6adbc6beb3bd8c5168eb4a7f0350c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_adfc17f1777dce8ad7fac2a66eef8795408e53a33fc77fbb6bfd9d7d9be91cad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adfc17f1777dce8ad7fac2a66eef8795408e53a33fc77fbb6bfd9d7d9be91cad->enter($__internal_adfc17f1777dce8ad7fac2a66eef8795408e53a33fc77fbb6bfd9d7d9be91cad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 22
        if (((($context["widget"] ?? $this->getContext($context, "widget")) != "single_text") &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            // line 23
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 24
            $context["valid"] = true;
        }
        // line 26
        $this->displayParentBlock("date_widget", $context, $blocks);
        
        $__internal_adfc17f1777dce8ad7fac2a66eef8795408e53a33fc77fbb6bfd9d7d9be91cad->leave($__internal_adfc17f1777dce8ad7fac2a66eef8795408e53a33fc77fbb6bfd9d7d9be91cad_prof);

        
        $__internal_eb90d44bcdd89f3a5c7b79f876ffdb6e86f6adbc6beb3bd8c5168eb4a7f0350c->leave($__internal_eb90d44bcdd89f3a5c7b79f876ffdb6e86f6adbc6beb3bd8c5168eb4a7f0350c_prof);

    }

    // line 29
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_b745255e00c60d298a7c71ced0f801755093179dff1aaca9a60c359f9396d665 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b745255e00c60d298a7c71ced0f801755093179dff1aaca9a60c359f9396d665->enter($__internal_b745255e00c60d298a7c71ced0f801755093179dff1aaca9a60c359f9396d665_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_c036e1b77d9312e07799288b87f6c845c17ae03ed5ffce5d394e327c7040d5c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c036e1b77d9312e07799288b87f6c845c17ae03ed5ffce5d394e327c7040d5c9->enter($__internal_c036e1b77d9312e07799288b87f6c845c17ae03ed5ffce5d394e327c7040d5c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 30
        if (((($context["widget"] ?? $this->getContext($context, "widget")) != "single_text") &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            // line 31
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 32
            $context["valid"] = true;
        }
        // line 34
        $this->displayParentBlock("time_widget", $context, $blocks);
        
        $__internal_c036e1b77d9312e07799288b87f6c845c17ae03ed5ffce5d394e327c7040d5c9->leave($__internal_c036e1b77d9312e07799288b87f6c845c17ae03ed5ffce5d394e327c7040d5c9_prof);

        
        $__internal_b745255e00c60d298a7c71ced0f801755093179dff1aaca9a60c359f9396d665->leave($__internal_b745255e00c60d298a7c71ced0f801755093179dff1aaca9a60c359f9396d665_prof);

    }

    // line 37
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_02acee38e15741168347e95d9fb8bd760650f8a83de513dac392e0936f05a43a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02acee38e15741168347e95d9fb8bd760650f8a83de513dac392e0936f05a43a->enter($__internal_02acee38e15741168347e95d9fb8bd760650f8a83de513dac392e0936f05a43a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_eeef6541050826cbf32f2dd9bdd38dbf8fe1d0ac215b8e13a72f54899ab1c2ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eeef6541050826cbf32f2dd9bdd38dbf8fe1d0ac215b8e13a72f54899ab1c2ec->enter($__internal_eeef6541050826cbf32f2dd9bdd38dbf8fe1d0ac215b8e13a72f54899ab1c2ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 38
        if (((($context["widget"] ?? $this->getContext($context, "widget")) != "single_text") &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            // line 39
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 40
            $context["valid"] = true;
        }
        // line 42
        $this->displayParentBlock("dateinterval_widget", $context, $blocks);
        
        $__internal_eeef6541050826cbf32f2dd9bdd38dbf8fe1d0ac215b8e13a72f54899ab1c2ec->leave($__internal_eeef6541050826cbf32f2dd9bdd38dbf8fe1d0ac215b8e13a72f54899ab1c2ec_prof);

        
        $__internal_02acee38e15741168347e95d9fb8bd760650f8a83de513dac392e0936f05a43a->leave($__internal_02acee38e15741168347e95d9fb8bd760650f8a83de513dac392e0936f05a43a_prof);

    }

    // line 45
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_e2991a4bbe22b55dc3a113e9b4842e2a836b695bad359899eec7221c6f7a0858 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2991a4bbe22b55dc3a113e9b4842e2a836b695bad359899eec7221c6f7a0858->enter($__internal_e2991a4bbe22b55dc3a113e9b4842e2a836b695bad359899eec7221c6f7a0858_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_10eed682390c925b119155f5454fa2b288e5e227bd2a2800ca38bb4de95c5c5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10eed682390c925b119155f5454fa2b288e5e227bd2a2800ca38bb4de95c5c5a->enter($__internal_10eed682390c925b119155f5454fa2b288e5e227bd2a2800ca38bb4de95c5c5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 46
        echo "<div class=\"input-group";
        echo (( !($context["valid"] ?? $this->getContext($context, "valid"))) ? (" form-control is-invalid") : (""));
        echo "\">
        ";
        // line 47
        $context["valid"] = true;
        // line 48
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 49
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_10eed682390c925b119155f5454fa2b288e5e227bd2a2800ca38bb4de95c5c5a->leave($__internal_10eed682390c925b119155f5454fa2b288e5e227bd2a2800ca38bb4de95c5c5a_prof);

        
        $__internal_e2991a4bbe22b55dc3a113e9b4842e2a836b695bad359899eec7221c6f7a0858->leave($__internal_e2991a4bbe22b55dc3a113e9b4842e2a836b695bad359899eec7221c6f7a0858_prof);

    }

    // line 53
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_55fa3d9107e8cdcb38bfd2af535c6a0b8d7b4ac86449dc800b572122c7c0496d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55fa3d9107e8cdcb38bfd2af535c6a0b8d7b4ac86449dc800b572122c7c0496d->enter($__internal_55fa3d9107e8cdcb38bfd2af535c6a0b8d7b4ac86449dc800b572122c7c0496d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_5b7149172ec827baf9f4f6b0d33a62fa91f388ada0e97d55f01207d04fe3bdfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b7149172ec827baf9f4f6b0d33a62fa91f388ada0e97d55f01207d04fe3bdfa->enter($__internal_5b7149172ec827baf9f4f6b0d33a62fa91f388ada0e97d55f01207d04fe3bdfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 54
        if (( !array_key_exists("type", $context) || (($context["type"] ?? $this->getContext($context, "type")) != "hidden"))) {
            // line 55
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control") . (((((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "")) : ("")) == "file")) ? ("-file") : (""))))));
        }
        // line 57
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_5b7149172ec827baf9f4f6b0d33a62fa91f388ada0e97d55f01207d04fe3bdfa->leave($__internal_5b7149172ec827baf9f4f6b0d33a62fa91f388ada0e97d55f01207d04fe3bdfa_prof);

        
        $__internal_55fa3d9107e8cdcb38bfd2af535c6a0b8d7b4ac86449dc800b572122c7c0496d->leave($__internal_55fa3d9107e8cdcb38bfd2af535c6a0b8d7b4ac86449dc800b572122c7c0496d_prof);

    }

    // line 60
    public function block_widget_attributes($context, array $blocks = array())
    {
        $__internal_1c094cd1bfc6146a78efb846e0f0c6ebfe45c96b69e41a6064cf063bbcda6a58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c094cd1bfc6146a78efb846e0f0c6ebfe45c96b69e41a6064cf063bbcda6a58->enter($__internal_1c094cd1bfc6146a78efb846e0f0c6ebfe45c96b69e41a6064cf063bbcda6a58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        $__internal_1356a27e1f0fde5dc7ac8f53ee164cc00c5922b90a49c5e701549c87726246b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1356a27e1f0fde5dc7ac8f53ee164cc00c5922b90a49c5e701549c87726246b8->enter($__internal_1356a27e1f0fde5dc7ac8f53ee164cc00c5922b90a49c5e701549c87726246b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        // line 61
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            // line 62
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 63
            echo "    ";
        }
        // line 64
        $this->displayParentBlock("widget_attributes", $context, $blocks);
        
        $__internal_1356a27e1f0fde5dc7ac8f53ee164cc00c5922b90a49c5e701549c87726246b8->leave($__internal_1356a27e1f0fde5dc7ac8f53ee164cc00c5922b90a49c5e701549c87726246b8_prof);

        
        $__internal_1c094cd1bfc6146a78efb846e0f0c6ebfe45c96b69e41a6064cf063bbcda6a58->leave($__internal_1c094cd1bfc6146a78efb846e0f0c6ebfe45c96b69e41a6064cf063bbcda6a58_prof);

    }

    // line 67
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_d15fbe5275eae77cb04212240ae153115ff40b77394665718900037852df630a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d15fbe5275eae77cb04212240ae153115ff40b77394665718900037852df630a->enter($__internal_d15fbe5275eae77cb04212240ae153115ff40b77394665718900037852df630a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_b6843bb1d32c7236eb1b102de34f21d465b1e6b6342a7b4d17ef74a4c9e27f7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6843bb1d32c7236eb1b102de34f21d465b1e6b6342a7b4d17ef74a4c9e27f7d->enter($__internal_b6843bb1d32c7236eb1b102de34f21d465b1e6b6342a7b4d17ef74a4c9e27f7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 68
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-secondary")) : ("btn-secondary")) . " btn"))));
        // line 69
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_b6843bb1d32c7236eb1b102de34f21d465b1e6b6342a7b4d17ef74a4c9e27f7d->leave($__internal_b6843bb1d32c7236eb1b102de34f21d465b1e6b6342a7b4d17ef74a4c9e27f7d_prof);

        
        $__internal_d15fbe5275eae77cb04212240ae153115ff40b77394665718900037852df630a->leave($__internal_d15fbe5275eae77cb04212240ae153115ff40b77394665718900037852df630a_prof);

    }

    // line 72
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_ca609ad176e003c5ceee3c0980647ffc17a7fafc11a722d67f78b17b4d2a712a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca609ad176e003c5ceee3c0980647ffc17a7fafc11a722d67f78b17b4d2a712a->enter($__internal_ca609ad176e003c5ceee3c0980647ffc17a7fafc11a722d67f78b17b4d2a712a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_d532f16f58da24af2281d87a9b95ba1ca540d1053649532ecfe75bae32490a14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d532f16f58da24af2281d87a9b95ba1ca540d1053649532ecfe75bae32490a14->enter($__internal_d532f16f58da24af2281d87a9b95ba1ca540d1053649532ecfe75bae32490a14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 73
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 74
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-check-input"))));
        // line 75
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 76
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 78
            echo "<div class=\"form-check";
            echo (( !($context["valid"] ?? $this->getContext($context, "valid"))) ? (" form-control is-invalid") : (""));
            echo "\">";
            // line 79
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 80
            echo "</div>";
        }
        
        $__internal_d532f16f58da24af2281d87a9b95ba1ca540d1053649532ecfe75bae32490a14->leave($__internal_d532f16f58da24af2281d87a9b95ba1ca540d1053649532ecfe75bae32490a14_prof);

        
        $__internal_ca609ad176e003c5ceee3c0980647ffc17a7fafc11a722d67f78b17b4d2a712a->leave($__internal_ca609ad176e003c5ceee3c0980647ffc17a7fafc11a722d67f78b17b4d2a712a_prof);

    }

    // line 84
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_be58dbfbbed58c8930b630ca588482cbf51c0ad755e2c1586e7de10072a8a76b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be58dbfbbed58c8930b630ca588482cbf51c0ad755e2c1586e7de10072a8a76b->enter($__internal_be58dbfbbed58c8930b630ca588482cbf51c0ad755e2c1586e7de10072a8a76b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_7df2a713e2354b5317f0877f28adfda576382b27116a8382b24fbd8e595afadb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7df2a713e2354b5317f0877f28adfda576382b27116a8382b24fbd8e595afadb->enter($__internal_7df2a713e2354b5317f0877f28adfda576382b27116a8382b24fbd8e595afadb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 85
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 86
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-check-input"))));
        // line 87
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 88
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 90
            echo "<div class=\"form-check";
            echo (( !($context["valid"] ?? $this->getContext($context, "valid"))) ? (" form-control is-invalid") : (""));
            echo "\">";
            // line 91
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 92
            echo "</div>";
        }
        
        $__internal_7df2a713e2354b5317f0877f28adfda576382b27116a8382b24fbd8e595afadb->leave($__internal_7df2a713e2354b5317f0877f28adfda576382b27116a8382b24fbd8e595afadb_prof);

        
        $__internal_be58dbfbbed58c8930b630ca588482cbf51c0ad755e2c1586e7de10072a8a76b->leave($__internal_be58dbfbbed58c8930b630ca588482cbf51c0ad755e2c1586e7de10072a8a76b_prof);

    }

    // line 96
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_9b0d3966651475b62f817d180d16b30e5599c0147918e54316e5224baf8c48c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b0d3966651475b62f817d180d16b30e5599c0147918e54316e5224baf8c48c9->enter($__internal_9b0d3966651475b62f817d180d16b30e5599c0147918e54316e5224baf8c48c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_d926afaabcc65c0712bcfca51d58c7e33ad1b6529a94bd172a5dcf184bcc9254 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d926afaabcc65c0712bcfca51d58c7e33ad1b6529a94bd172a5dcf184bcc9254->enter($__internal_d926afaabcc65c0712bcfca51d58c7e33ad1b6529a94bd172a5dcf184bcc9254_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 97
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 98
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 99
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 100
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 101
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain")), "valid" =>                 // line 102
($context["valid"] ?? $this->getContext($context, "valid"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 106
            if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
                // line 107
                $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            }
            // line 109
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 110
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 111
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 112
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 113
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain")), "valid" => true));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 117
            echo "</div>";
        }
        
        $__internal_d926afaabcc65c0712bcfca51d58c7e33ad1b6529a94bd172a5dcf184bcc9254->leave($__internal_d926afaabcc65c0712bcfca51d58c7e33ad1b6529a94bd172a5dcf184bcc9254_prof);

        
        $__internal_9b0d3966651475b62f817d180d16b30e5599c0147918e54316e5224baf8c48c9->leave($__internal_9b0d3966651475b62f817d180d16b30e5599c0147918e54316e5224baf8c48c9_prof);

    }

    // line 123
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_051b907a2a25b1ee6539c706877e82c85741571d7b8142bf80b79bf0b773f715 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_051b907a2a25b1ee6539c706877e82c85741571d7b8142bf80b79bf0b773f715->enter($__internal_051b907a2a25b1ee6539c706877e82c85741571d7b8142bf80b79bf0b773f715_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_98b2e7d56b6084c27b9d3ef2cbc4dfed77f3dfed0bee3d8149dbfd46530f2255 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98b2e7d56b6084c27b9d3ef2cbc4dfed77f3dfed0bee3d8149dbfd46530f2255->enter($__internal_98b2e7d56b6084c27b9d3ef2cbc4dfed77f3dfed0bee3d8149dbfd46530f2255_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 124
        if ((array_key_exists("compound", $context) && ($context["compound"] ?? $this->getContext($context, "compound")))) {
            // line 125
            $context["element"] = "legend";
            // line 126
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " col-form-legend"))));
        } else {
            // line 128
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " form-control-label"))));
        }
        // line 130
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_98b2e7d56b6084c27b9d3ef2cbc4dfed77f3dfed0bee3d8149dbfd46530f2255->leave($__internal_98b2e7d56b6084c27b9d3ef2cbc4dfed77f3dfed0bee3d8149dbfd46530f2255_prof);

        
        $__internal_051b907a2a25b1ee6539c706877e82c85741571d7b8142bf80b79bf0b773f715->leave($__internal_051b907a2a25b1ee6539c706877e82c85741571d7b8142bf80b79bf0b773f715_prof);

    }

    // line 133
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_e850b9a69f392ecf52426f4c2551c460e65f9978d855264df046b302d90352c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e850b9a69f392ecf52426f4c2551c460e65f9978d855264df046b302d90352c1->enter($__internal_e850b9a69f392ecf52426f4c2551c460e65f9978d855264df046b302d90352c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_700336b0a8acfaff18f2e8deedc8ee4e5ef56935f0b916d14c9b8e52530d4e29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_700336b0a8acfaff18f2e8deedc8ee4e5ef56935f0b916d14c9b8e52530d4e29->enter($__internal_700336b0a8acfaff18f2e8deedc8ee4e5ef56935f0b916d14c9b8e52530d4e29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 135
        if (array_key_exists("widget", $context)) {
            // line 136
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " form-check-label"))));
            // line 137
            if (($context["required"] ?? $this->getContext($context, "required"))) {
                // line 138
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 140
            if (array_key_exists("parent_label_class", $context)) {
                // line 141
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class"))))));
            }
            // line 143
            if (( !(($context["label"] ?? $this->getContext($context, "label")) === false) && twig_test_empty(($context["label"] ?? $this->getContext($context, "label"))))) {
                // line 144
                if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                    // line 145
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                     // line 146
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                     // line 147
($context["id"] ?? $this->getContext($context, "id"))));
                } else {
                    // line 150
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
                }
            }
            // line 153
            echo "<label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 154
            echo ($context["widget"] ?? $this->getContext($context, "widget"));
            echo " ";
            echo twig_escape_filter($this->env, (( !(($context["label"] ?? $this->getContext($context, "label")) === false)) ? ((((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            // line 155
            echo "</label>";
        }
        
        $__internal_700336b0a8acfaff18f2e8deedc8ee4e5ef56935f0b916d14c9b8e52530d4e29->leave($__internal_700336b0a8acfaff18f2e8deedc8ee4e5ef56935f0b916d14c9b8e52530d4e29_prof);

        
        $__internal_e850b9a69f392ecf52426f4c2551c460e65f9978d855264df046b302d90352c1->leave($__internal_e850b9a69f392ecf52426f4c2551c460e65f9978d855264df046b302d90352c1_prof);

    }

    // line 161
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_01ccb8b71372f5e117b69a505e507aec69970c07595af8ff0d5c448697e8eae4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01ccb8b71372f5e117b69a505e507aec69970c07595af8ff0d5c448697e8eae4->enter($__internal_01ccb8b71372f5e117b69a505e507aec69970c07595af8ff0d5c448697e8eae4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_1c749402324a1b6188cf995f26b507ff3dd874fc44b1a6d2487f2a8c4af4b854 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c749402324a1b6188cf995f26b507ff3dd874fc44b1a6d2487f2a8c4af4b854->enter($__internal_1c749402324a1b6188cf995f26b507ff3dd874fc44b1a6d2487f2a8c4af4b854_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 162
        if ((array_key_exists("compound", $context) && ($context["compound"] ?? $this->getContext($context, "compound")))) {
            // line 163
            $context["element"] = "fieldset";
        }
        // line 165
        echo "<";
        echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter(($context["element"] ?? $this->getContext($context, "element")), "div")) : ("div")), "html", null, true);
        echo " class=\"form-group\">";
        // line 166
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 167
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 168
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 169
        echo "</";
        echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter(($context["element"] ?? $this->getContext($context, "element")), "div")) : ("div")), "html", null, true);
        echo ">";
        
        $__internal_1c749402324a1b6188cf995f26b507ff3dd874fc44b1a6d2487f2a8c4af4b854->leave($__internal_1c749402324a1b6188cf995f26b507ff3dd874fc44b1a6d2487f2a8c4af4b854_prof);

        
        $__internal_01ccb8b71372f5e117b69a505e507aec69970c07595af8ff0d5c448697e8eae4->leave($__internal_01ccb8b71372f5e117b69a505e507aec69970c07595af8ff0d5c448697e8eae4_prof);

    }

    // line 174
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_59a04a402b1699905929537f941b26415db1b6bb6870da3ce63ca032d4b73c2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59a04a402b1699905929537f941b26415db1b6bb6870da3ce63ca032d4b73c2c->enter($__internal_59a04a402b1699905929537f941b26415db1b6bb6870da3ce63ca032d4b73c2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_df9a822aa7ed62e2a8f2c670ce5223eefba9d85085accc70d549a53a52f77e55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df9a822aa7ed62e2a8f2c670ce5223eefba9d85085accc70d549a53a52f77e55->enter($__internal_df9a822aa7ed62e2a8f2c670ce5223eefba9d85085accc70d549a53a52f77e55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 175
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 176
            echo "<div class=\"";
            if ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array())) {
                echo "invalid-feedback";
            } else {
                echo "alert alert-danger";
            }
            echo "\">
        <ul class=\"list-unstyled mb-0\">";
            // line 178
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 179
                echo "<li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 181
            echo "</ul>
    </div>";
        }
        
        $__internal_df9a822aa7ed62e2a8f2c670ce5223eefba9d85085accc70d549a53a52f77e55->leave($__internal_df9a822aa7ed62e2a8f2c670ce5223eefba9d85085accc70d549a53a52f77e55_prof);

        
        $__internal_59a04a402b1699905929537f941b26415db1b6bb6870da3ce63ca032d4b73c2c->leave($__internal_59a04a402b1699905929537f941b26415db1b6bb6870da3ce63ca032d4b73c2c_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_4_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  672 => 181,  664 => 179,  660 => 178,  651 => 176,  649 => 175,  640 => 174,  628 => 169,  626 => 168,  624 => 167,  622 => 166,  618 => 165,  615 => 163,  613 => 162,  604 => 161,  593 => 155,  589 => 154,  574 => 153,  570 => 150,  567 => 147,  566 => 146,  565 => 145,  563 => 144,  561 => 143,  558 => 141,  556 => 140,  553 => 138,  551 => 137,  549 => 136,  547 => 135,  538 => 133,  528 => 130,  525 => 128,  522 => 126,  520 => 125,  518 => 124,  509 => 123,  498 => 117,  492 => 113,  491 => 112,  490 => 111,  486 => 110,  482 => 109,  479 => 107,  477 => 106,  470 => 102,  469 => 101,  468 => 100,  467 => 99,  463 => 98,  461 => 97,  452 => 96,  441 => 92,  439 => 91,  435 => 90,  432 => 88,  430 => 87,  428 => 86,  426 => 85,  417 => 84,  406 => 80,  404 => 79,  400 => 78,  397 => 76,  395 => 75,  393 => 74,  391 => 73,  382 => 72,  372 => 69,  370 => 68,  361 => 67,  351 => 64,  348 => 63,  345 => 62,  343 => 61,  334 => 60,  324 => 57,  321 => 55,  319 => 54,  310 => 53,  299 => 49,  297 => 48,  295 => 47,  290 => 46,  281 => 45,  271 => 42,  268 => 40,  266 => 39,  264 => 38,  255 => 37,  245 => 34,  242 => 32,  240 => 31,  238 => 30,  229 => 29,  219 => 26,  216 => 24,  214 => 23,  212 => 22,  203 => 21,  193 => 18,  190 => 16,  188 => 15,  186 => 14,  177 => 13,  167 => 10,  164 => 9,  161 => 8,  158 => 7,  156 => 6,  147 => 5,  137 => 174,  134 => 173,  131 => 171,  129 => 161,  126 => 160,  123 => 158,  121 => 133,  118 => 132,  116 => 123,  113 => 122,  110 => 120,  108 => 96,  105 => 95,  103 => 84,  100 => 83,  98 => 72,  95 => 71,  93 => 67,  91 => 60,  89 => 53,  86 => 52,  84 => 45,  81 => 44,  79 => 37,  76 => 36,  74 => 29,  71 => 28,  69 => 21,  66 => 20,  64 => 13,  61 => 12,  59 => 5,  56 => 4,  53 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_base_layout.html.twig\" %}

{# Widgets #}

{% block money_widget -%}
    {% if not valid %}
        {% set group_class = ' form-control is-invalid' %}
        {% set valid = true %}
    {% endif %}
    {{- parent() -}}
{%- endblock money_widget %}

{% block datetime_widget -%}
    {%- if widget != 'single_text' and not valid -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control is-invalid')|trim}) -%}
        {% set valid = true %}
    {%- endif -%}
    {{- parent() -}}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {%- if widget != 'single_text' and not valid -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control is-invalid')|trim}) -%}
        {% set valid = true %}
    {%- endif -%}
    {{- parent() -}}
{%- endblock date_widget %}

{% block time_widget -%}
    {%- if widget != 'single_text' and not valid -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control is-invalid')|trim}) -%}
        {% set valid = true %}
    {%- endif -%}
    {{- parent() -}}
{%- endblock time_widget %}

{% block dateinterval_widget -%}
    {%- if widget != 'single_text' and not valid -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control is-invalid')|trim}) -%}
        {% set valid = true %}
    {%- endif -%}
    {{- parent() -}}
{%- endblock dateinterval_widget %}

{% block percent_widget -%}
    <div class=\"input-group{{ not valid ? ' form-control is-invalid' }}\">
        {% set valid = true %}
        {{- block('form_widget_simple') -}}
        <span class=\"input-group-addon\">%</span>
    </div>
{%- endblock percent_widget %}

{% block form_widget_simple -%}
    {% if type is not defined or type != 'hidden' %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control' ~ (type|default('') == 'file' ? '-file' : ''))|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{%- block widget_attributes -%}
    {%- if not valid %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control is-invalid')|trim}) %}
    {% endif -%}
    {{ parent() }}
{%- endblock widget_attributes -%}

{% block button_widget -%}
    {%- set attr = attr|merge({class: (attr.class|default('btn-secondary') ~ ' btn')|trim}) -%}
    {{- parent() -}}
{%- endblock button_widget %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-check-input')|trim}) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"form-check{{ not valid ? ' form-control is-invalid' }}\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif -%}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-check-input')|trim}) -%}
    {%- if 'radio-inline' in parent_label_class -%}
        {{- form_label(form, null, { widget: parent() }) -}}
    {%- else -%}
        <div class=\"form-check{{ not valid ? ' form-control is-invalid' }}\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif -%}
{%- endblock radio_widget %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') -%}
        {%- for child in form %}
            {{- form_widget(child, {
                parent_label_class: label_attr.class|default(''),
                translation_domain: choice_translation_domain,
                valid: valid,
            }) -}}
        {% endfor -%}
    {%- else -%}
        {%- if not valid -%}
            {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control is-invalid')|trim}) %}
        {%- endif -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                    valid: true,
                }) -}}
            {% endfor -%}
        </div>
    {%- endif %}
{%- endblock choice_widget_expanded %}

{# Labels #}

{% block form_label -%}
    {%- if compound is defined and compound -%}
        {%- set element = 'legend' -%}
        {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' col-form-legend')|trim}) -%}
    {%- else -%}
        {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' form-control-label')|trim}) -%}
    {%- endif -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block checkbox_radio_label -%}
    {#- Do not display the label if widget is not defined in order to prevent double label rendering -#}
    {%- if widget is defined -%}
        {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' form-check-label')|trim}) -%}
        {%- if required -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) -%}
        {%- endif -%}
        {%- if parent_label_class is defined -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) -%}
        {%- endif -%}
        {%- if label is not same as(false) and label is empty -%}
            {%- if label_format is not empty -%}
                {%- set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) -%}
            {%- else -%}
                {%- set label = name|humanize -%}
            {%- endif -%}
        {%- endif -%}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
    {%- endif -%}
{%- endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    {%- if compound is defined and compound -%}
        {%- set element = 'fieldset' -%}
    {%- endif -%}
    <{{ element|default('div') }} class=\"form-group\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </{{ element|default('div') }}>
{%- endblock form_row %}

{# Errors #}

{% block form_errors -%}
    {%- if errors|length > 0 -%}
    <div class=\"{% if form.parent %}invalid-feedback{% else %}alert alert-danger{% endif %}\">
        <ul class=\"list-unstyled mb-0\">
            {%- for error in errors -%}
                <li>{{ error.message }}</li>
            {%- endfor -%}
        </ul>
    </div>
    {%- endif %}
{%- endblock form_errors %}
", "bootstrap_4_layout.html.twig", "/var/www/projets/adrar_reservation/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_4_layout.html.twig");
    }
}
