<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c78883b0a794df95bdc741371f79e94d9f33e13589dce19f76379b9c0a0f1d06 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_9a9b07ffdbb6ca3282d32da00185b11b1e401437039425b32acab9557629e4f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a9b07ffdbb6ca3282d32da00185b11b1e401437039425b32acab9557629e4f0->enter($__internal_9a9b07ffdbb6ca3282d32da00185b11b1e401437039425b32acab9557629e4f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_8041476ef49b33b8ade545f058b44183d23e43cb0e0254f403b565139a41b090 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8041476ef49b33b8ade545f058b44183d23e43cb0e0254f403b565139a41b090->enter($__internal_8041476ef49b33b8ade545f058b44183d23e43cb0e0254f403b565139a41b090_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a9b07ffdbb6ca3282d32da00185b11b1e401437039425b32acab9557629e4f0->leave($__internal_9a9b07ffdbb6ca3282d32da00185b11b1e401437039425b32acab9557629e4f0_prof);

        
        $__internal_8041476ef49b33b8ade545f058b44183d23e43cb0e0254f403b565139a41b090->leave($__internal_8041476ef49b33b8ade545f058b44183d23e43cb0e0254f403b565139a41b090_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_fb03a2411c9171f7f7421771e812ca6edb67143303b37f097299277528045938 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb03a2411c9171f7f7421771e812ca6edb67143303b37f097299277528045938->enter($__internal_fb03a2411c9171f7f7421771e812ca6edb67143303b37f097299277528045938_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_d6cb90fa41a898a409bd40845328f9ea1ae4e1e6533b9ec215caeb5513729fb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6cb90fa41a898a409bd40845328f9ea1ae4e1e6533b9ec215caeb5513729fb9->enter($__internal_d6cb90fa41a898a409bd40845328f9ea1ae4e1e6533b9ec215caeb5513729fb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d6cb90fa41a898a409bd40845328f9ea1ae4e1e6533b9ec215caeb5513729fb9->leave($__internal_d6cb90fa41a898a409bd40845328f9ea1ae4e1e6533b9ec215caeb5513729fb9_prof);

        
        $__internal_fb03a2411c9171f7f7421771e812ca6edb67143303b37f097299277528045938->leave($__internal_fb03a2411c9171f7f7421771e812ca6edb67143303b37f097299277528045938_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0a84461fe8515d5ea72aee7de66fa866b49ec1606083f1e58e96890946234575 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a84461fe8515d5ea72aee7de66fa866b49ec1606083f1e58e96890946234575->enter($__internal_0a84461fe8515d5ea72aee7de66fa866b49ec1606083f1e58e96890946234575_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d5c8e736241a89f88f618c882e456422cee85ef72c454914a9d9e4570ae11d0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5c8e736241a89f88f618c882e456422cee85ef72c454914a9d9e4570ae11d0b->enter($__internal_d5c8e736241a89f88f618c882e456422cee85ef72c454914a9d9e4570ae11d0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d5c8e736241a89f88f618c882e456422cee85ef72c454914a9d9e4570ae11d0b->leave($__internal_d5c8e736241a89f88f618c882e456422cee85ef72c454914a9d9e4570ae11d0b_prof);

        
        $__internal_0a84461fe8515d5ea72aee7de66fa866b49ec1606083f1e58e96890946234575->leave($__internal_0a84461fe8515d5ea72aee7de66fa866b49ec1606083f1e58e96890946234575_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4edc9338ec7c3982fd45f20f56b2e55356fe8a3f9856b63de8ef43864b4ce2e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4edc9338ec7c3982fd45f20f56b2e55356fe8a3f9856b63de8ef43864b4ce2e0->enter($__internal_4edc9338ec7c3982fd45f20f56b2e55356fe8a3f9856b63de8ef43864b4ce2e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9e5f66ccfaf31aff4cb4dcb76ccaa29ddd822b097745eff401015944fbea18c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e5f66ccfaf31aff4cb4dcb76ccaa29ddd822b097745eff401015944fbea18c2->enter($__internal_9e5f66ccfaf31aff4cb4dcb76ccaa29ddd822b097745eff401015944fbea18c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9e5f66ccfaf31aff4cb4dcb76ccaa29ddd822b097745eff401015944fbea18c2->leave($__internal_9e5f66ccfaf31aff4cb4dcb76ccaa29ddd822b097745eff401015944fbea18c2_prof);

        
        $__internal_4edc9338ec7c3982fd45f20f56b2e55356fe8a3f9856b63de8ef43864b4ce2e0->leave($__internal_4edc9338ec7c3982fd45f20f56b2e55356fe8a3f9856b63de8ef43864b4ce2e0_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\dashboard\\3Projeto\\Api_app_salaoMabhi\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
