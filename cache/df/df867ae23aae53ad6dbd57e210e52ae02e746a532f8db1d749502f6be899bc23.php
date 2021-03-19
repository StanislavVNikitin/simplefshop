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

/* content/basket.html */
class __TwigTemplate_352766509bf758e6a313a8f500e87bc48509ca46036abecf4de83f5bc9604429 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div id=\"content\">
 \t\t\t<div class=\"row\">
        <div class=\"col-7\">Наименование Товара</div>
        <div class=\"col-2\">Количество</div>
        <div class=\"col-2\">Стоимость</div>
        <div class=\"col-1\"></div>
      </div>
      ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["data"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            // line 9
            echo "      <div class=\"row\" id=\"busketitem";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["d"], "id", [], "any", false, false, false, 9));
            echo "\"\">
        <div class=\"col-7\">";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["d"], "goodname", [], "any", false, false, false, 10), "html", null, true);
            echo "</div>
        <div class=\"col-2\">";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["d"], "counts", [], "any", false, false, false, 11), "html", null, true);
            echo "</div>
        <div class=\"col-2\">";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["d"], "price", [], "any", false, false, false, 12), "html", null, true);
            echo "</div>
        <div class=\"col-1\">
          <div class=\"btn btn-primary\" onclick=\"DelBusketItem(";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["d"], "id", [], "any", false, false, false, 14));
            echo ");\">\t\t\t\t\t
            <p>X</p>
          </div>\t\t
        </div>
      </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "      <div class=\"row\"><div class=\"col-9\">Общая стоимость в корзине</div>
      <div class=\"col-2\"><b>";
        // line 21
        echo twig_escape_filter($this->env, ($context["sumprice"] ?? null), "html", null, true);
        echo "</b></div>
      </div>
      <div class=\"col-12\"><br></div><div class=\"col-auto\"><form method=\"post\" action=\"index.php?c=order&act=add\"><div class=\"form-row\"><div class=\"col-4\"><label for=\"inputName1\">ФИО</label><input class=\"form-control\" type=\"text\" id=\"inputName1\" name=\"username\" placeholder=\"Имя Фамилия\"></div><div class=\"col-4\"><label for=\"inputEmeil1\">Email</label><input type=\"email\" class=\"form-control\" id=\"inputEmeil1\" name=\"useremail\" placeholder=\"Емеил\"></div> <div class=\"col-4\"><label for=\"inputTel1\">Телефон</label><input class=\"form-control\" type=\"text\" id=\"inputTel1\" name=\"usertel\" placeholder=\"Телефон\"></div>  </div><div class=\"form-row\">
        <div class=\"col-12\">Адрес доставки</div> 
        <div class=\"col-2\"> <label for=\"inputAddress1\">Город</label><input type=\"text\" class=\"form-control\" name=\"usercity\"  placeholder=\"Город\">\t</div>
        <div class=\"col-4\"> <label for=\"inputAddress2\">Улица</label><input type=\"text\" class=\"form-control\" name=\"userstreet\"  placeholder=\"Улица\"></div>
        <div class=\"col-2\"> <label for=\"inputAddress3\">Дом</label><input type=\"text\" class=\"form-control\" name=\"userhouse\"  placeholder=\"дом\"></div>
        <div class=\"col-2\"> <label for=\"inputAddress4\">Корп./Стр.</label> <input type=\"text\" class=\"form-control\" name=\"userboild\"  placeholder=\"корпус/строение\"></div>
        <div class=\"col-2\"> <label for=\"inputAddress5\">Квартира</label> <input type=\"text\" class=\"form-control\" name=\"userkv\" placeholder=\"кв\"></div>
        </div><div class=\"col-12\"><br></div><button type=\"submit\" class=\"btn btn-primary mb-2\" name=\"idorder\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, ($context["idorde"] ?? null), "html", null, true);
        echo "\">Заказать</button></div></form></div>
</div>
";
    }

    public function getTemplateName()
    {
        return "content/basket.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 30,  83 => 21,  80 => 20,  68 => 14,  63 => 12,  59 => 11,  55 => 10,  50 => 9,  46 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "content/basket.html", "C:\\OpenServer\\domains\\seshop.local\\templates\\content\\basket.html");
    }
}
