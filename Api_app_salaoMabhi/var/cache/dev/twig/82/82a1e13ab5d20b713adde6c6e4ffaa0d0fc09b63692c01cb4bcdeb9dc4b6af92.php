<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_8ece518a7d47cbec3cd793902ac2d1780625c2e915ea685331c4e93ae6c98d3a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b0e51ff89e7cbc749713b43925ace6c7451310f4ed183537b727f90cea0dc471 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0e51ff89e7cbc749713b43925ace6c7451310f4ed183537b727f90cea0dc471->enter($__internal_b0e51ff89e7cbc749713b43925ace6c7451310f4ed183537b727f90cea0dc471_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_9fb2d26c7ec7ad8db7d33716d3a250018bf242d8808b0b321b88621fa44ede96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fb2d26c7ec7ad8db7d33716d3a250018bf242d8808b0b321b88621fa44ede96->enter($__internal_9fb2d26c7ec7ad8db7d33716d3a250018bf242d8808b0b321b88621fa44ede96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b0e51ff89e7cbc749713b43925ace6c7451310f4ed183537b727f90cea0dc471->leave($__internal_b0e51ff89e7cbc749713b43925ace6c7451310f4ed183537b727f90cea0dc471_prof);

        
        $__internal_9fb2d26c7ec7ad8db7d33716d3a250018bf242d8808b0b321b88621fa44ede96->leave($__internal_9fb2d26c7ec7ad8db7d33716d3a250018bf242d8808b0b321b88621fa44ede96_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a2f1ac5ca392e252e3d357591bd2c77b1da5611b03806c5f9df831adcb5008ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2f1ac5ca392e252e3d357591bd2c77b1da5611b03806c5f9df831adcb5008ed->enter($__internal_a2f1ac5ca392e252e3d357591bd2c77b1da5611b03806c5f9df831adcb5008ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1f58d286ad9156716fa155a7235b4d7030e62849bf34b1344d8428843599957d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f58d286ad9156716fa155a7235b4d7030e62849bf34b1344d8428843599957d->enter($__internal_1f58d286ad9156716fa155a7235b4d7030e62849bf34b1344d8428843599957d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_1f58d286ad9156716fa155a7235b4d7030e62849bf34b1344d8428843599957d->leave($__internal_1f58d286ad9156716fa155a7235b4d7030e62849bf34b1344d8428843599957d_prof);

        
        $__internal_a2f1ac5ca392e252e3d357591bd2c77b1da5611b03806c5f9df831adcb5008ed->leave($__internal_a2f1ac5ca392e252e3d357591bd2c77b1da5611b03806c5f9df831adcb5008ed_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8a7e987fc83e19f9abcda71c1c61c0bddd6060d1ecccdcbd1602145a8b22eca5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a7e987fc83e19f9abcda71c1c61c0bddd6060d1ecccdcbd1602145a8b22eca5->enter($__internal_8a7e987fc83e19f9abcda71c1c61c0bddd6060d1ecccdcbd1602145a8b22eca5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4dbc98c0df0aa45ec5b2680c1f22006cfdd03e69eafe0e7bc81e07977a1a51c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dbc98c0df0aa45ec5b2680c1f22006cfdd03e69eafe0e7bc81e07977a1a51c0->enter($__internal_4dbc98c0df0aa45ec5b2680c1f22006cfdd03e69eafe0e7bc81e07977a1a51c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_4dbc98c0df0aa45ec5b2680c1f22006cfdd03e69eafe0e7bc81e07977a1a51c0->leave($__internal_4dbc98c0df0aa45ec5b2680c1f22006cfdd03e69eafe0e7bc81e07977a1a51c0_prof);

        
        $__internal_8a7e987fc83e19f9abcda71c1c61c0bddd6060d1ecccdcbd1602145a8b22eca5->leave($__internal_8a7e987fc83e19f9abcda71c1c61c0bddd6060d1ecccdcbd1602145a8b22eca5_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0280a58129931cc925622cfcb001a1dc649e68ad17264f26f8ea7665dd6698f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0280a58129931cc925622cfcb001a1dc649e68ad17264f26f8ea7665dd6698f4->enter($__internal_0280a58129931cc925622cfcb001a1dc649e68ad17264f26f8ea7665dd6698f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9daca78dd9618d3b4ad23d40b7e98ca5a67e87c325a4aa063909ea53ee9678be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9daca78dd9618d3b4ad23d40b7e98ca5a67e87c325a4aa063909ea53ee9678be->enter($__internal_9daca78dd9618d3b4ad23d40b7e98ca5a67e87c325a4aa063909ea53ee9678be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_9daca78dd9618d3b4ad23d40b7e98ca5a67e87c325a4aa063909ea53ee9678be->leave($__internal_9daca78dd9618d3b4ad23d40b7e98ca5a67e87c325a4aa063909ea53ee9678be_prof);

        
        $__internal_0280a58129931cc925622cfcb001a1dc649e68ad17264f26f8ea7665dd6698f4->leave($__internal_0280a58129931cc925622cfcb001a1dc649e68ad17264f26f8ea7665dd6698f4_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\xampp\\htdocs\\dashboard\\3Projeto\\Api_app_salaoMabhi\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
