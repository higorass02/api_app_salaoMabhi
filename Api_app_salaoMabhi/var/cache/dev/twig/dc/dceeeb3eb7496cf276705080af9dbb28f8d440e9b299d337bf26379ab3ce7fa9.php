<?php

/* base.html.twig */
class __TwigTemplate_551c2a089b13ddf4e0ac2282d0eb2712a2ea82e32b4a08ce8ba8a82a0817cbe0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f0aaf144e6319519a182579622c7c96f55de891c6b8e1938b171f2a52855bdd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0aaf144e6319519a182579622c7c96f55de891c6b8e1938b171f2a52855bdd8->enter($__internal_f0aaf144e6319519a182579622c7c96f55de891c6b8e1938b171f2a52855bdd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_8b89a8d3565803fe808258fde4a41609cc7ac3bc2653681cfcc44bcb8a6104f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b89a8d3565803fe808258fde4a41609cc7ac3bc2653681cfcc44bcb8a6104f9->enter($__internal_8b89a8d3565803fe808258fde4a41609cc7ac3bc2653681cfcc44bcb8a6104f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_f0aaf144e6319519a182579622c7c96f55de891c6b8e1938b171f2a52855bdd8->leave($__internal_f0aaf144e6319519a182579622c7c96f55de891c6b8e1938b171f2a52855bdd8_prof);

        
        $__internal_8b89a8d3565803fe808258fde4a41609cc7ac3bc2653681cfcc44bcb8a6104f9->leave($__internal_8b89a8d3565803fe808258fde4a41609cc7ac3bc2653681cfcc44bcb8a6104f9_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_fac20681672c382d6ff3436f41080664e4fb54cc3fdaafdc2d988042cad2a777 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fac20681672c382d6ff3436f41080664e4fb54cc3fdaafdc2d988042cad2a777->enter($__internal_fac20681672c382d6ff3436f41080664e4fb54cc3fdaafdc2d988042cad2a777_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9e6d65797c2f3682d17521b72cd21d9bd5b8e95c0c27d1ac3e6ab512cc426e26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e6d65797c2f3682d17521b72cd21d9bd5b8e95c0c27d1ac3e6ab512cc426e26->enter($__internal_9e6d65797c2f3682d17521b72cd21d9bd5b8e95c0c27d1ac3e6ab512cc426e26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_9e6d65797c2f3682d17521b72cd21d9bd5b8e95c0c27d1ac3e6ab512cc426e26->leave($__internal_9e6d65797c2f3682d17521b72cd21d9bd5b8e95c0c27d1ac3e6ab512cc426e26_prof);

        
        $__internal_fac20681672c382d6ff3436f41080664e4fb54cc3fdaafdc2d988042cad2a777->leave($__internal_fac20681672c382d6ff3436f41080664e4fb54cc3fdaafdc2d988042cad2a777_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2991dc88be30aa09fefe8fd1af3d75b3e36e32f7b9503bfdb1fdc373b3c33340 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2991dc88be30aa09fefe8fd1af3d75b3e36e32f7b9503bfdb1fdc373b3c33340->enter($__internal_2991dc88be30aa09fefe8fd1af3d75b3e36e32f7b9503bfdb1fdc373b3c33340_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_75184b8fcb08af2d8a33ce7eee449cdae8a92e2356efebe6eaf44b30d53521a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75184b8fcb08af2d8a33ce7eee449cdae8a92e2356efebe6eaf44b30d53521a5->enter($__internal_75184b8fcb08af2d8a33ce7eee449cdae8a92e2356efebe6eaf44b30d53521a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_75184b8fcb08af2d8a33ce7eee449cdae8a92e2356efebe6eaf44b30d53521a5->leave($__internal_75184b8fcb08af2d8a33ce7eee449cdae8a92e2356efebe6eaf44b30d53521a5_prof);

        
        $__internal_2991dc88be30aa09fefe8fd1af3d75b3e36e32f7b9503bfdb1fdc373b3c33340->leave($__internal_2991dc88be30aa09fefe8fd1af3d75b3e36e32f7b9503bfdb1fdc373b3c33340_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_cf54ebb599d48ee1d074cf3547a12c7e9a334542ab01ab43a42333eaad437b3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf54ebb599d48ee1d074cf3547a12c7e9a334542ab01ab43a42333eaad437b3d->enter($__internal_cf54ebb599d48ee1d074cf3547a12c7e9a334542ab01ab43a42333eaad437b3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b61e7e3e1487be44f51a7db289efd4ec02513418b6062ab49fd410b455399856 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b61e7e3e1487be44f51a7db289efd4ec02513418b6062ab49fd410b455399856->enter($__internal_b61e7e3e1487be44f51a7db289efd4ec02513418b6062ab49fd410b455399856_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b61e7e3e1487be44f51a7db289efd4ec02513418b6062ab49fd410b455399856->leave($__internal_b61e7e3e1487be44f51a7db289efd4ec02513418b6062ab49fd410b455399856_prof);

        
        $__internal_cf54ebb599d48ee1d074cf3547a12c7e9a334542ab01ab43a42333eaad437b3d->leave($__internal_cf54ebb599d48ee1d074cf3547a12c7e9a334542ab01ab43a42333eaad437b3d_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_65261091f34ad0cd01b74b2a5ecae75181a14da4c4de63e1d658127109961ec3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65261091f34ad0cd01b74b2a5ecae75181a14da4c4de63e1d658127109961ec3->enter($__internal_65261091f34ad0cd01b74b2a5ecae75181a14da4c4de63e1d658127109961ec3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_a1dc494702497f4d42a3eb2032a6a551fc1b938462a846baa3d78af14f407034 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1dc494702497f4d42a3eb2032a6a551fc1b938462a846baa3d78af14f407034->enter($__internal_a1dc494702497f4d42a3eb2032a6a551fc1b938462a846baa3d78af14f407034_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_a1dc494702497f4d42a3eb2032a6a551fc1b938462a846baa3d78af14f407034->leave($__internal_a1dc494702497f4d42a3eb2032a6a551fc1b938462a846baa3d78af14f407034_prof);

        
        $__internal_65261091f34ad0cd01b74b2a5ecae75181a14da4c4de63e1d658127109961ec3->leave($__internal_65261091f34ad0cd01b74b2a5ecae75181a14da4c4de63e1d658127109961ec3_prof);

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
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\xampp\\htdocs\\dashboard\\3Projeto\\Api_app_salaoMabhi\\app\\Resources\\views\\base.html.twig");
    }
}
