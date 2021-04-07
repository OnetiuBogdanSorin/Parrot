<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* parrot/show.html.twig */
class __TwigTemplate_68d44e610188d4b512bfc12805c83d3fe1fa1b986f5e91218286503cb54e87a8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "parrot/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "parrot/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "parrot/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<table class=\"table table-striped\">
    <thead>
    <tr>
        <td>Rase</td>
        <td>Age</td>
        <td>Sex</td>
        <td>Colors</td>

    </tr>
    </thead>
    <tbody>
        <tr>
            <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["parrot"]) || array_key_exists("parrot", $context) ? $context["parrot"] : (function () { throw new RuntimeError('Variable "parrot" does not exist.', 16, $this->source); })()), "species", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            <td>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["parrot"]) || array_key_exists("parrot", $context) ? $context["parrot"] : (function () { throw new RuntimeError('Variable "parrot" does not exist.', 17, $this->source); })()), "age", [], "any", false, false, false, 17), "html", null, true);
        echo "</td>
            <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["parrot"]) || array_key_exists("parrot", $context) ? $context["parrot"] : (function () { throw new RuntimeError('Variable "parrot" does not exist.', 18, $this->source); })()), "sex", [], "any", false, false, false, 18), "html", null, true);
        echo "</td>
            <td>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["parrot"]) || array_key_exists("parrot", $context) ? $context["parrot"] : (function () { throw new RuntimeError('Variable "parrot" does not exist.', 19, $this->source); })()), "color", [], "any", false, false, false, 19), "html", null, true);
        echo "</td>
        </tr>
    </tbody>
</table>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "parrot/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 19,  90 => 18,  86 => 17,  82 => 16,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%  extends 'base.html.twig'%}

{% block body %}
<table class=\"table table-striped\">
    <thead>
    <tr>
        <td>Rase</td>
        <td>Age</td>
        <td>Sex</td>
        <td>Colors</td>

    </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{ parrot.species }}</td>
            <td>{{ parrot.age }}</td>
            <td>{{ parrot.sex }}</td>
            <td>{{ parrot.color }}</td>
        </tr>
    </tbody>
</table>
{% endblock %}", "parrot/show.html.twig", "/var/www/sites/parrot/templates/parrot/show.html.twig");
    }
}
