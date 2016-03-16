<?php

/* /home/forge/aaronbullard.com/themes/fabriciorabelo-squad/partials/footer.htm */
class __TwigTemplate_d1b34bff574b7475051090ac856870350632187f9c6efdd8bdb3355e29e4c7db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<footer>
 <div class=\"container\">
     <div class=\"row\">
         <div class=\"col-md-12 col-lg-12\">
             <div class=\"wow shake\" data-wow-delay=\"0.4s\">
             <div class=\"page-scroll marginbot-30\">
                 <a href=\"#intro\" id=\"totop\" class=\"btn btn-circle\">
                     <i class=\"fa fa-angle-double-up animated\"></i>
                 </a>
             </div>
             </div>
             <p>&copy;Copyright ";
        // line 12
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["now"]) ? $context["now"] : null), "Y"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "theme", array()), "site_name", array()), "html", null, true);
        echo ". Todos os direitos reservados.</p>
         </div>
     </div>
 </div>
</footer>";
    }

    public function getTemplateName()
    {
        return "/home/forge/aaronbullard.com/themes/fabriciorabelo-squad/partials/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 12,  19 => 1,);
    }
}
/* <footer>*/
/*  <div class="container">*/
/*      <div class="row">*/
/*          <div class="col-md-12 col-lg-12">*/
/*              <div class="wow shake" data-wow-delay="0.4s">*/
/*              <div class="page-scroll marginbot-30">*/
/*                  <a href="#intro" id="totop" class="btn btn-circle">*/
/*                      <i class="fa fa-angle-double-up animated"></i>*/
/*                  </a>*/
/*              </div>*/
/*              </div>*/
/*              <p>&copy;Copyright {{ now|date('Y') }} - {{ this.theme.site_name }}. Todos os direitos reservados.</p>*/
/*          </div>*/
/*      </div>*/
/*  </div>*/
/* </footer>*/
