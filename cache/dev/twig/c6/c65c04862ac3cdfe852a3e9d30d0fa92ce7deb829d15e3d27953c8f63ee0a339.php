<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* KountacBundle:Default:produits/cfa/single_mannequin.html.twig */
class __TwigTemplate_379af8d888072d972528f41b4ee290b94f6e7bb7845ec558116a518ebd948e06 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "KountacBundle:Default:produits/cfa/single_mannequin.html.twig"));

        // line 1
        if ($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "cfaprix", [])) {
            // line 2
            echo "        <div>
            <div class=\"breadcrumbs\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <ul>
                                ";
            // line 8
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
                // line 9
                echo "                                    ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", ["%username%" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "username", [])], "FOSUserBundle"), "html", null, true);
                echo " |
                                    <a href=\"";
                // line 10
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
                echo "\">
                                        ";
                // line 11
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", [], "FOSUserBundle"), "html", null, true);
                echo "
                                    </a>
                                ";
            }
            // line 13
            echo " 
                            </ul>
                            <ul>
                                ";
            // line 16
            if ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "hasPreviousSession", [])) {
                // line 17
                echo "                                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "flashbag", []), "all", [], "method"));
                foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                    // line 18
                    echo "                                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["messages"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                        // line 19
                        echo "                                            <div class=\"flash-";
                        echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                        echo "\">
                                                ";
                        // line 20
                        echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                        echo "
                                            </div>
                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 23
                    echo "                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 24
                echo "                                ";
            }
            // line 25
            echo "                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        ";
            // line 33
            if ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "hasPreviousSession", [])) {
                // line 34
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "flashbag", []), "all", [], "method"));
                foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                    // line 35
                    echo "                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["messages"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                        // line 36
                        echo "                    <div class=\"flash-";
                        echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                        echo "\">
                        ";
                        // line 37
                        echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                        echo "
                    </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 40
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 41
                echo "        ";
            }
            // line 42
            echo "
        <!-- Breadcrumbs -->

        <div class=\"breadcrumbs\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-xs-12\">
                        <ul>
                            <li class=\"home\"> <a title=\"Aller à la page d'accueil\" href=\"";
            // line 50
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("kountac_homepage");
            echo "\">Accueil</a><span>&raquo;</span></li>
                            <li class=\"home\"> <a title=\"Voir produits de la catégorie ";
            // line 51
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "produit1", []), "categorie", [])), "html", null, true);
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("categorie_2", ["categorie" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "produit1", []), "categorie", []), "id", [])]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "produit1", []), "categorie", [])), "html", null, true);
            echo "</a><span>&raquo;</span></li>
                            <li><strong>";
            // line 52
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "produit1", []), "nom", [])), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "libelle", []), "libelle", [])), "html", null, true);
            echo "</strong></li>
                        </ul>
                        ";
            // line 54
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "flashbag", []), "get", [0 => "success"], "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                // line 55
                echo "                            <div class=\"alert-box\">
                                <br>
                                ";
                // line 57
                echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
                echo "
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcrumbs End --> 
        <!-- Main Container -->
        <div class=\"main-container col1-layout\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-main\">
                        <div class=\"product-view-area\">
                            ";
            // line 71
            $context["prixReduction"] = 0;
            // line 72
            echo "                            ";
            $context["prixReduction"] = ($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "cfaprix", []) - (($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "cfaprix", []) * $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "reduction", [])) / 100));
            // line 73
            echo "
                            <div class=\"product-big-image col-xs-12 col-sm-5 col-lg-5 col-md-5\">
                                <div class=\"slider-items-products\">
                                    <div id=\"upsell-product-slider\" class=\"product-flexslider hidden-buttons\">
                                        <div class=\"large-image slides\"> 
                                            <a href=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute(($context["image"] ?? $this->getContext($context, "image")), "AssetPath", [])), "html", null, true);
            echo "\" class=\"cloud-zoom\" id=\"zoom1\" rel=\"useWrapper: false, adjustY:0, adjustX:20\"> 
                                                <li><figure><img class=\"zoom-img\" src=\"";
            // line 79
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute(($context["image"] ?? $this->getContext($context, "image")), "AssetPath", [])), "html", null, true);
            echo "\"> </figure></li>
                                            </a> 
                                        </div>
                                    </div>
                                </div>

                                <div class=\"flexslider flexslider-thumb\">
                                    <ul class=\"previews-list slides\">
                                        <li><a href='";
            // line 87
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute(($context["image"] ?? $this->getContext($context, "image")), "AssetPath", [])), "html", null, true);
            echo "' class='cloud-zoom-gallery' rel=\"useZoom: 'zoom1', smallImage: '";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute(($context["image"] ?? $this->getContext($context, "image")), "AssetPath", [])), "html", null, true);
            echo "' \"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute(($context["image"] ?? $this->getContext($context, "image")), "AssetPath", [])), "html", null, true);
            echo "\" alt = \"\"/></a></li>
                                            ";
            // line 88
            if ($this->getAttribute(($context["image"] ?? $this->getContext($context, "image")), "path2", [])) {
                // line 89
                echo "                                        <li><a href='";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute(($context["image"] ?? $this->getContext($context, "image")), "AssetPath2", [])), "html", null, true);
                echo "' class='cloud-zoom-gallery' rel=\"useZoom: 'zoom1', smallImage: '";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute(($context["image"] ?? $this->getContext($context, "image")), "AssetPath2", [])), "html", null, true);
                echo "' \"><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute(($context["image"] ?? $this->getContext($context, "image")), "AssetPath2", [])), "html", null, true);
                echo "\" alt = \"\"/></a></li>
                                            ";
            }
            // line 91
            echo "                                            ";
            if ($this->getAttribute(($context["image"] ?? $this->getContext($context, "image")), "path3", [])) {
                // line 92
                echo "                                        <li><a href='";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute(($context["image"] ?? $this->getContext($context, "image")), "AssetPath3", [])), "html", null, true);
                echo "' class='cloud-zoom-gallery' rel=\"useZoom: 'zoom1', smallImage: '";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute(($context["image"] ?? $this->getContext($context, "image")), "AssetPath3", [])), "html", null, true);
                echo "' \"><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute(($context["image"] ?? $this->getContext($context, "image")), "AssetPath3", [])), "html", null, true);
                echo "\" alt = \"\"/></a></li>
                                            ";
            }
            // line 94
            echo "                                    </ul>
                                </div>
                                <!-- end: more-images --> 

                            </div>
                            <div class=\"col-xs-12 col-sm-7 col-lg-7 col-md-7 product-details-area\">
                                <div class=\"product-name\">
                                    <h1>";
            // line 101
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "produit1", []), "nom", [])), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "libelle", []), "libelle", [])), "html", null, true);
            echo "</h1>
                                </div>
                                ";
            // line 103
            if (($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "reduction", []) == 0)) {
                // line 104
                echo "                                    <div class=\"price-box\"> <span class=\"regular-price\"> <span class=\"price\">";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["prixReduction"] ?? $this->getContext($context, "prixReduction")), 2), "html", null, true);
                echo " F CFA</span> </span> </div>
                                ";
            } else {
                // line 106
                echo "                                    <div class=\"price-box\">
                                        <p class=\"special-price\"> <span class=\"price-label\">Special Price</span> <span class=\"price\">";
                // line 107
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["prixReduction"] ?? $this->getContext($context, "prixReduction")), 2), "html", null, true);
                echo " F CFA</span> </p>
                                        <p class=\"old-price\"> <span class=\"price-label\">Regular Price:</span> <span class=\"price\">";
                // line 108
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "cfaprix", []), 2), "html", null, true);
                echo " F CFA</span> </p>
                                    </div>
                                ";
            }
            // line 111
            echo "
                                <div class=\"short-description\">
                                    ";
            // line 113
            if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "produit1", []), "produit2", [])) > 1)) {
                // line 114
                echo "                                        &nbsp;&nbsp;<label>Autre(s) motif(s) : </label> 
                                        ";
                // line 115
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "produit1", []), "produit2", []));
                foreach ($context['_seq'] as $context["_key"] => $context["motif"]) {
                    // line 116
                    echo "                                            ";
                    if (($context["motif"] != ($context["produit"] ?? $this->getContext($context, "produit")))) {
                        // line 117
                        echo "                                                <a title=\"Motif ";
                        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($context["motif"], "libelle", []), "libelle", [])), "html", null, true);
                        echo "\" href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product", ["id" => $this->getAttribute($context["motif"], "id", [])]), "html", null, true);
                        echo "\">
                                                    <img src=\"";
                        // line 118
                        echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->getAttribute($this->getAttribute($context["motif"], "libelle", []), "AssetPath", []), "cartThumbMenuItem"), "html", null, true);
                        echo "\" alt=\"\">&nbsp;&nbsp;&nbsp;&nbsp;
                                                </a>
                                            ";
                    }
                    // line 121
                    echo "                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['motif'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 122
                echo "                                    ";
            }
            // line 123
            echo "                                </div>
                                
                                <div class=\"short-description\">
                                    ";
            // line 126
            if ((twig_length_filter($this->env, ($context["produit"] ?? $this->getContext($context, "produit"))) > 1)) {
                // line 127
                echo "                                        &nbsp;&nbsp;<label>Autre(s) mannequin(s) : </label> 
                                        ";
                // line 128
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["images_autres"] ?? $this->getContext($context, "images_autres")));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 129
                    echo "                                            ";
                    if (($this->getAttribute($context["image"], "top", []) == 0)) {
                        // line 130
                        echo "                                                <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product", ["id" => $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", [])]), "html", null, true);
                        echo "\" title=\"Mannequin par défaut (taille standard: ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["image"], "mannequin", []), "tailleStandardMannequin", []), "html", null, true);
                        echo ", poids: ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["image"], "mannequin", []), "poidsMannequin", []), "html", null, true);
                        echo "Kg, Taille:";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["image"], "mannequin", []), "tailleMannequin", []), "html", null, true);
                        echo "m)\">
                                                    <img src=\"";
                        // line 131
                        echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->getAttribute($this->getAttribute($context["image"], "mannequin", []), "AssetPath", []), "cartThumbMenuItem"), "html", null, true);
                        echo "\" alt=\"\">&nbsp;
                                                    <label>";
                        // line 132
                        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($context["image"], "mannequin", []), "nomMannequin", [])), "html", null, true);
                        echo " - ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["image"], "mannequin", []), "tailleStandardMannequin", []), "html", null, true);
                        echo "&nbsp;<i class=\"glyphicon glyphicon-check\"></i>&nbsp;&nbsp;</label>
                                                </a>
                                                ";
                    } else {
                        // line 135
                        echo "                                                <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_mannequin", ["id" => $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", []), "id_image" => $this->getAttribute($context["image"], "id", [])]), "html", null, true);
                        echo "\" title=\"(taille standard: ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["image"], "mannequin", []), "tailleStandardMannequin", []), "html", null, true);
                        echo ", poids: ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["image"], "mannequin", []), "poidsMannequin", []), "html", null, true);
                        echo "Kg, Taille:";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["image"], "mannequin", []), "tailleMannequin", []), "html", null, true);
                        echo "m)\">
                                                    <img src=\"";
                        // line 136
                        echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->getAttribute($this->getAttribute($context["image"], "mannequin", []), "AssetPath", []), "cartThumbMenuItem"), "html", null, true);
                        echo "\" alt=\"\">&nbsp;
                                                    ";
                        // line 137
                        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($context["image"], "mannequin", []), "nomMannequin", [])), "html", null, true);
                        echo " - ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["image"], "mannequin", []), "tailleStandardMannequin", []), "html", null, true);
                        echo "&nbsp;&nbsp;&nbsp;
                                                </a>
                                            ";
                    }
                    // line 140
                    echo "                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 141
                echo "                                    ";
            }
            // line 142
            echo "                                </div>
                                
                                <div class=\"short-description\">
                                </div>
                                

                                <ul id=\"product-detail-tab\" class=\"nav-tabs product-tabs cart_product center\">
                                    ";
            // line 149
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "produit3", []));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["produit3"]) {
                // line 150
                echo "                                        ";
                if ($this->getAttribute($context["loop"], "first", [])) {
                    // line 151
                    echo "                                            <li class=\"active\"> <a href=\"#";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["produit3"], "id", []), "html", null, true);
                    echo "\" data-toggle=\"tab\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["produit3"], "taille", []), "html", null, true);
                    echo "</a> </li>
                                            ";
                } else {
                    // line 153
                    echo "                                            <li> <a href=\"#";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["produit3"], "id", []), "html", null, true);
                    echo "\" data-toggle=\"tab\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["produit3"], "taille", []), "html", null, true);
                    echo "</a> </li>
                                            ";
                }
                // line 154
                echo "    
                                        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit3'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 156
            echo "                                </ul>
                                <br>
                                <div id=\"productTabContent\" class=\"tab-content\">
                                    ";
            // line 159
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "produit3", []));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["produit3"]) {
                // line 160
                echo "                                        ";
                if ($this->getAttribute($context["loop"], "first", [])) {
                    // line 161
                    echo "                                            <div class=\"tab-pane fade in active\" id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["produit3"], "id", []), "html", null, true);
                    echo "\">
                                            ";
                } else {
                    // line 163
                    echo "                                                <div class=\"tab-pane fade\" id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["produit3"], "id", []), "html", null, true);
                    echo "\">
                                                ";
                }
                // line 165
                echo "                                                <div class=\"product-color-size-area\">

                                                    <div class=\"color-area\">
                                                        <h2 class=\"saider-bar-title\">Matière</h2>
                                                        <div class=\"color\">
                                                            <ul>
                                                                ";
                // line 171
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "produit1", []), "matiere", [])), "html", null, true);
                echo "
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <div class=\"size-area\">
                                                        <h2 class=\"saider-bar-title\">Taille</h2>
                                                        <div class=\"size\">
                                                            <ul>
                                                                <li><a>";
                // line 180
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit3"], "taille", []), "html", null, true);
                echo "</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"product-variation\">
                                                    <form action=\"";
                // line 186
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajoutpanier", ["id" => $this->getAttribute($context["produit3"], "id", [])]), "html", null, true);
                echo "\" method=\"get\">
                                                        <div class=\"cart-plus-minus\">
                                                            <label for=\"qty\">Quantité:</label>
                                                            <div class=\"numbers-row\">
                                                                <select name=\"qte\" class=\"select form-control\">
                                                                    ";
                // line 191
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, abs($this->getAttribute($context["produit3"], "stock", []))));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 192
                    echo "                                                                        <option value=\"";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "</option>
                                                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 194
                echo "                                                                </select>
                                                            </div>
                                                        </div>
                                                        <button class=\"button pro-add-to-cart\" type=\"submit\" title=\"Ajouter au panier\" type=\"button\"><span><i class=\"fa fa-shopping-cart\"></i> Ajouter au panier</span></button>
                                                    </form>
                                                </div>
                                                <div class=\"product-cart-option\">
                                                    <ul>
                                                        <li><a title=\"Réserver ce produit\" href=\"";
                // line 202
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reserve_new", ["id" => $this->getAttribute($context["produit3"], "id", [])]), "html", null, true);
                echo "\"><i class=\"fa fa-save\"></i><span>Reservation</span></a></li>
                                                        <li><a title=\"Ajouter à vos souhaits\" href=\"";
                // line 203
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajoutwishlist", ["id" => $this->getAttribute($context["produit3"], "id", [])]), "html", null, true);
                echo "\"><i class=\"fa fa-heart\"></i><span>Souhait</span></a></li>
                                                        <li><a title=\"Comparer ce produit\" href=\"";
                // line 204
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajoutcompare", ["id" => $this->getAttribute($context["produit3"], "id", [])]), "html", null, true);
                echo "\"><i class=\"fa fa-exchange\"></i><span>comparaison</span></a></li>
                                                        ";
                // line 205
                if ($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "cfaprixCommande", [])) {
                    // line 206
                    echo "                                                            <li><a title=\"Commander sur mesure ce produit, prix commande: ";
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "cfaprixCommande", []), 2), "html", null, true);
                    echo "F CFA\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("commande_mesures_new_item", ["id" => $this->getAttribute($this->getAttribute($context["produit3"], "produit2", []), "id", [])]), "html", null, true);
                    echo "\"><i class=\"fa fa-pencil\"></i><span>Commande sur mesure</span></a></li>
                                                        ";
                }
                // line 208
                echo "                                                        ";
                if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
                    // line 209
                    echo "                                                        <li><a title=\"Contactez le vendeur\"><i class=\"fa fa-envelope\"></i><span class=\"user\">Contacter le vendeur</span></a></li>
                                                        ";
                }
                // line 211
                echo "                                                    </ul>
                                                </div>
                                            </div>
                                        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit3'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 215
            echo "                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"product-overview-tab\">
                            <div class=\"container\">
                                <div class=\"row\">
                                    <div class=\"col-xs-12\">
                                        <div class=\"product-tab-inner\">
                                            <ul id=\"product-detail-tab\" class=\"nav nav-tabs product-tabs\">
                                                <li class=\"active\"> <a href=\"#description\" data-toggle=\"tab\">Description</a> </li>
                                                <li> <a href=\"#utilisation\" data-toggle=\"tab\">Conditions d'utilisation</a> </li>
                                                <li> <a href=\"#reviews\" data-toggle=\"tab\">Avis</a> </li>
                                            </ul>
                                            <div id=\"productTabContent\" class=\"tab-content\">
                                                <div id=\"description\" class=\"tab-pane fade in active\">
                                                        <center><h3> \"";
            // line 231
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "produit1", []), "nom", [])), "html", null, true);
            echo "\" </h3></center>
                                                                 <div class=\"review-ratting\">
                                                                    <span>
                                                                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ";
            // line 234
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "produit1", []), "description", [])), "html", null, true);
            echo "</a> 
                                                                    </span>
                                                                    <br><br><br>
                                                                    A propos de <a href=\"";
            // line 237
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("espace_marque", ["id" => $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", [])]), "html", null, true);
            echo "\" title=\"Voir les informations sur la marque ''";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "produit1", []), "marque", []), "marque", [])), "html", null, true);
            echo "''\"> ";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "produit1", []), "marque", []), "marque", [])), "html", null, true);
            echo " <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "produit1", []), "marque", []), "image", []), "AssetPath", []), "rechercheThumbItem"), "html", null, true);
            echo "\" alt=\"\"></a>
                                                                </div> 
                                                            <div class=\"buttons-set\"></div>
                                                    
                                                </div>
                                                                
                                                <div id=\"utilisation\" class=\"tab-pane fade\">
                                                    <div class=\"review-ratting\">
                                                        ";
            // line 245
            if ($this->getAttribute($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "produit1", []), "conditionsUtilisation", [])) {
                // line 246
                echo "                                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "produit1", []), "conditionsUtilisation", [])), "html", null, true);
                echo "</a> 
                                                        ";
            } else {
                // line 248
                echo "                                                        <span>
                                                            <h4>";
                // line 249
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, "Aucune conditions d'utilisation pour ce produit"), "html", null, true);
                echo "</h4></span>
                                                        ";
            }
            // line 251
            echo "                                                    </div> 
                                                    <div class=\"buttons-set\"></div>
                                                    
                                                </div>
                                                        
                                                <div id=\"reviews\" class=\"tab-pane fade\">
                                                    <div class=\"col-sm-5 col-lg-5 col-md-5\">
                                                        ";
            // line 258
            if ((twig_length_filter($this->env, ($context["commentaires"] ?? $this->getContext($context, "commentaires"))) != 0)) {
                // line 259
                echo "                                                            <h4>";
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, "Avis des utilisateurs"), "html", null, true);
                echo "</h4>
                                                        ";
            } else {
                // line 261
                echo "                                                            <h4>";
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, "Aucun commentaire sur le produit"), "html", null, true);
                echo "</h4><h3> <br> <strong> \"";
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "produit1", []), "nom", [])), "html", null, true);
                echo "\" </strong></h3>
                                                            ";
            }
            // line 263
            echo "                                                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["commentaires"] ?? $this->getContext($context, "commentaires")));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["commentaire"]) {
                echo "  
                                                            <div class=\"reviews-content-left\">
                                                                <div class=\"review-ratting\">
                                                                    <p>
                                                                        <a>";
                // line 267
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["commentaire"], "titre", [])), "html", null, true);
                echo "</a> 
                                                                        ";
                // line 268
                $this->loadTemplate("KountacBundle:Default:produits/rating/rating.html.twig", "KountacBundle:Default:produits/cfa/single_mannequin.html.twig", 268)->display($context);
                // line 269
                echo "                                                                    </p>
                                                                    <span>";
                // line 270
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["commentaire"], "contenu", [])), "html", null, true);
                echo "</span>
                                                                    <p class=\"author\"> ";
                // line 271
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["commentaire"], "pseudo", [])), "html", null, true);
                echo "<small>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; (Ajouté le ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["commentaire"], "date", []), "d/M/Y"), "html", null, true);
                echo ")</small> </p>
                                                                </div> 
                                                            </div>
                                                            <div class=\"buttons-set\"></div>
                                                        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commentaire'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 276
            echo "
                                                    </div>

                                                    <div class=\"col-sm-7 col-lg-7 col-md-7\">
                                                        <div class=\"reviews-content-right\">
                                                            ";
            // line 281
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
                echo " 
                                                                <h2>Donnez votre avis</h2>
                                                                <br>
                                                                <form action=\"";
                // line 284
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product", ["id" => $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", [])]), "html", null, true);
                echo "\" method=\"POST\">
                                                                    ";
                // line 285
                echo                 $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
                echo "
                                                                    ";
                // line 286
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
                echo "
                                                                    <div class=\"form-area\">
                                                                        <div class=\"page-content checkout-page\">
                                                                         <div class=\"box-border\">
                                                                        <ul>
                                                                        <li class=\"row\">
                                                                            <div class=\"col-sm-6\">
                                                                                <div class=\"rating\">
                                                                                     Votre avis
                                                                                        <input type=\"radio\" name=\"note\" id=\"excellent\" value=\"excellent\">
                                                                                        <label for=\"excellent\"><i class=\"icon-star\"></i></label>
                                                                                        <input type=\"radio\" name=\"note\" id=\"tres_bien\" value=\"tres_bien\">
                                                                                        <label for=\"tres_bien\"><i class=\"icon-star\"></i></label>
                                                                                        <input type=\"radio\" name=\"note\" id=\"bien\" value=\"bien\">
                                                                                        <label for=\"bien\"><i class=\"icon-star\"></i></label>
                                                                                        <input type=\"radio\" name=\"note\" id=\"moyen\" value=\"moyen\">
                                                                                        <label for=\"moyen\"><i class=\"icon-star\"></i></label>
                                                                                        <input type=\"radio\" name=\"note\" id=\"mauvais\" value=\"mauvais\">
                                                                                        <label for=\"mauvais\"><i class=\"icon-star\"></i></label>
                                                                                        <input type=\"radio\" name=\"note\" id=\"tres_mauvais\" value=\"tres_mauvais\">
                                                                                        <label for=\"tres_mauvais\"><i class=\"icon-star\"></i></label>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class=\"row\">
                                                                            <div class=\"col-sm-6\">
                                                                                ";
                // line 312
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "pseudo", []), 'row');
                echo "
                                                                            </div>
                                                                        </li>
                                                                        <li class=\"row\"> 
                                                                            <div class=\"col-sm-10\">
                                                                                ";
                // line 317
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "contenu", []), 'row');
                echo "
                                                                            </div>
                                                                        </li>
                                                                        <li class=\"row\"> 
                                                                            <div class=\"col-sm-10\">
                                                                                <div class=\"buttons-set\">
                                                                                    <button class=\"button submit\" title=\"Submit\" type=\"submit\"><span><i class=\"fa fa-thumbs-up\"></i> &nbsp;Commenter</span></button>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        
                                                                     </ul>  
                                                                             </div></div>
                                                                    </div>
                                                                    ";
                // line 331
                echo                 $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
                echo "
                                                                </form>
                                                            ";
            } else {
                // line 334
                echo "                                                                <a title=\"Pour ajouter votre avis, vous devez avoir un compte kountac\" href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
                echo "\"><h2>Donnez votre avis</h2></a><br>
                                                            ";
            }
            // line 336
            echo "                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Container End --> 

            <!-- Related Product Slider -->
            ";
            // line 352
            if ((twig_length_filter($this->env, ($context["categorieProduits"] ?? $this->getContext($context, "categorieProduits"))) != 0)) {
                // line 353
                echo "                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <div class=\"related-product-area\">
                                <div class=\"page-header\">
                                    <h2>Vous aimerez</h2>
                                </div>
                                <div class=\"related-products-pro\">
                                    <div class=\"slider-items-products\">
                                        <div id=\"related-product-slider\" class=\"product-flexslider hidden-buttons\">
                                            <div class=\"slider-items slider-width-col4\">

                                                ";
                // line 365
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["categorieProduits"] ?? $this->getContext($context, "categorieProduits")));
                foreach ($context['_seq'] as $context["_key"] => $context["produit1"]) {
                    // line 366
                    echo "                                                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["produit1"], "produit2", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["produit_autre"]) {
                        // line 367
                        echo "                                                        ";
                        if (($this->getAttribute($context["produit_autre"], "cfaprix", []) && (($context["produit"] ?? $this->getContext($context, "produit")) != $context["produit_autre"]))) {
                            // line 368
                            echo "                                                        ";
                            $context["prixReduction"] = 0;
                            // line 369
                            echo "                                                        ";
                            $context["prixReduction"] = ($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "cfaprix", []) - (($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "cfaprix", []) * $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "reduction", [])) / 100));
                            // line 370
                            echo "                                                        ";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(($context["images_rest"] ?? $this->getContext($context, "images_rest")));
                            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                                // line 371
                                echo "                                                        ";
                                if (($this->getAttribute($context["image"], "produit2", []) == $context["produit_autre"])) {
                                    // line 372
                                    echo "                                                        <div class=\"product-item\">
                                                            <div class=\"item-inner\">
                                                                <div class=\"product-thumb has-hover-img\">
                                                                    <figure> 
                                                                        <center> 
                                                                            <a href=\"";
                                    // line 377
                                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product", ["id" => $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", [])]), "html", null, true);
                                    echo "\"><img src=\"";
                                    echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->getAttribute($context["image"], "AssetPath", []), "resizeThumb"), "html", null, true);
                                    echo "\" alt=\"\"></a>
                                                                            ";
                                    // line 378
                                    if ($this->getAttribute($context["image"], "path2", [])) {
                                        // line 379
                                        echo "                                                                            <a class=\"hover-img\" href=\"";
                                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product", ["id" => $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", [])]), "html", null, true);
                                        echo "\">
                                                                                <img src=\"";
                                        // line 380
                                        echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->getAttribute($context["image"], "AssetPath2", []), "resizeThumb"), "html", null, true);
                                        echo "\" alt=\"\">
                                                                            </a>
                                                                            ";
                                    }
                                    // line 383
                                    echo "                                                                            ";
                                    if ($this->getAttribute($context["image"], "path3", [])) {
                                        // line 384
                                        echo "                                                                            <a class=\"hover-img\" href=\"";
                                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product", ["id" => $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", [])]), "html", null, true);
                                        echo "\">
                                                                                <img src=\"";
                                        // line 385
                                        echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->getAttribute($context["image"], "AssetPath3", []), "resizeThumb"), "html", null, true);
                                        echo "\" alt=\"\">
                                                                            </a>
                                                                            ";
                                    }
                                    // line 388
                                    echo "                                                                                
                                                                        </center>
                                                                    </figure>
                                                                    <div class=\"pr-info-area animated animate4\">
                                                                        <a title=\"Reserver ce produit\" href=\"";
                                    // line 392
                                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quickView", ["id" => $this->getAttribute($context["produit_autre"], "id", [])]), "html", null, true);
                                    echo "\" class=\"quick-view\"><i class=\"fa fa-save\"><span>Reserver</span></i></a> 
                                                                        <a title=\"Ajouter à vos souhaits\" href=\"";
                                    // line 393
                                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quickView", ["id" => $this->getAttribute($context["produit_autre"], "id", [])]), "html", null, true);
                                    echo "\" class=\"wishlist\"><i class=\"fa fa-heart\"><span>Wishlist</span></i></a> 
                                                                        <a title=\"Comparer ce produit\" href=\"";
                                    // line 394
                                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quickView", ["id" => $this->getAttribute($context["produit_autre"], "id", [])]), "html", null, true);
                                    echo "\" class=\"compare\"><i class=\"fa fa-exchange\"><span>Compare</span></i></a> 
                                                                        ";
                                    // line 395
                                    if ($this->getAttribute($context["produit_autre"], "cfaprixCommande", [])) {
                                        // line 396
                                        echo "                                                                            <a title=\"Commander sur mesure, prix pour une commande sur mesure : ";
                                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["produit_autre"], "cfaprixCommande", []), 2), "html", null, true);
                                        echo " F CFA\" href=\"";
                                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("commande_mesures_new_item", ["id" => $this->getAttribute($context["produit_autre"], "id", [])]), "html", null, true);
                                        echo "\" class=\"wishlist\"><i class=\"fa fa-pencil\"><span>Commander sur mesure</span></i></a> 
                                                                        ";
                                    }
                                    // line 398
                                    echo "                                                                    </div>
                                                                </div>
                                                                <div class=\"item-info\">
                                                                    <div class=\"info-inner\">
                                                                        <div class=\"item-title\"> <a title=\"";
                                    // line 402
                                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($context["produit_autre"], "produit1", []), "nom", [])), "html", null, true);
                                    echo "\" href=\"";
                                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product", ["id" => $this->getAttribute($context["produit_autre"], "id", [])]), "html", null, true);
                                    echo "\">";
                                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($context["produit_autre"], "produit1", []), "nom", [])), "html", null, true);
                                    echo "-";
                                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($context["produit_autre"], "libelle", []), "libelle", [])), "html", null, true);
                                    echo "</a> </div>
                                                                        <div class=\"item-content\">
                                                                            <div class=\"item-price\">
                                                                                ";
                                    // line 405
                                    if (($this->getAttribute($context["produit_autre"], "reduction", []) == 0)) {
                                        // line 406
                                        echo "                                                                                    <div class=\"price-box\"> <span class=\"regular-price\"> <span class=\"price\">";
                                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["prixReduction"] ?? $this->getContext($context, "prixReduction")), 2), "html", null, true);
                                        echo " F CFA</span> </span> </div>
                                                                                ";
                                    } else {
                                        // line 408
                                        echo "                                                                                    <div class=\"price-box\">
                                                                                        <p class=\"special-price\"> <span class=\"price-label\">Special Price</span> <span class=\"price\">";
                                        // line 409
                                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["prixReduction"] ?? $this->getContext($context, "prixReduction")), 2), "html", null, true);
                                        echo " F CFA</span> </p>
                                                                                        <p class=\"old-price\"> <span class=\"price-label\">Regular Price:</span> <span class=\"price\">";
                                        // line 410
                                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["produit_autre"], "cfaprix", []), 2), "html", null, true);
                                        echo " F CFA</span> </p>
                                                                                    </div>
                                                                                ";
                                    }
                                    // line 413
                                    echo "                                                                            </div>
                                                                            <center>
                                                                                <div class=\"language-currency-wrapper left\">
                                                                                    <div class=\"inner-cl\">
                                                                                        <div class=\"block block-language form-language \">
                                                                                          <div class=\"myaccount\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href=\"";
                                    // line 418
                                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("espace_marque", ["id" => $this->getAttribute($context["produit_autre"], "id", [])]), "html", null, true);
                                    echo "\" title=\"Aller à la marque ";
                                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["produit_autre"], "produit1", []), "marque", []), "marque", [])), "html", null, true);
                                    echo "\"><img src=\"";
                                    echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["produit_autre"], "produit1", []), "marque", []), "image", []), "AssetPath", []), "marqueLogoThumb"), "html", null, true);
                                    echo "\" alt=\"\">&nbsp;&nbsp;&nbsp;<span class=\"hidden-xs\"> ";
                                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["produit_autre"], "produit1", []), "marque", []), "marque", [])), "html", null, true);
                                    echo "</span></a></div>
                                                                                            <ul>
                                                                                                <li>
                                                                                                    <strong><a title=\"Voir tous les produits de la marque ";
                                    // line 421
                                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["produit_autre"], "produit1", []), "marque", []), "marque", [])), "html", null, true);
                                    echo "\" href=\"";
                                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("espace_marque", ["id" => $this->getAttribute($context["produit_autre"], "id", [])]), "html", null, true);
                                    echo "\"><span class=\"hidden-xs\">";
                                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["produit_autre"], "produit1", []), "marque", []), "marque", [])), "html", null, true);
                                    echo "</span></a></strong>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </center>
                                                                            <div class=\"pro-action\">
                                                                                <a href=\"";
                                    // line 429
                                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajoutpanier", ["id" => $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", [])]), "html", null, true);
                                    echo "\">
                                                                                    <button type=\"button\" class=\"add-to-cart-mt\"> <img src=\"";
                                    // line 430
                                    echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter("css/cart.jpg", "rechercheThumbItem"), "html", null, true);
                                    echo "\" alt=\"\"><span> Ajouter au panier</span> </button>
                                                                                </a>                                                                        </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                                ";
                                }
                                // line 438
                                echo "                                                            ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 439
                            echo "                                                        ";
                        }
                        // line 440
                        echo "                                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit_autre'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo "  
                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit1'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 441
                echo " 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            ";
            }
            // line 451
            echo "        ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "KountacBundle:Default:produits/cfa/single_mannequin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1097 => 451,  1085 => 441,  1073 => 440,  1070 => 439,  1064 => 438,  1053 => 430,  1049 => 429,  1034 => 421,  1022 => 418,  1015 => 413,  1009 => 410,  1005 => 409,  1002 => 408,  996 => 406,  994 => 405,  982 => 402,  976 => 398,  968 => 396,  966 => 395,  962 => 394,  958 => 393,  954 => 392,  948 => 388,  942 => 385,  937 => 384,  934 => 383,  928 => 380,  923 => 379,  921 => 378,  915 => 377,  908 => 372,  905 => 371,  900 => 370,  897 => 369,  894 => 368,  891 => 367,  886 => 366,  882 => 365,  868 => 353,  866 => 352,  848 => 336,  842 => 334,  836 => 331,  819 => 317,  811 => 312,  782 => 286,  778 => 285,  774 => 284,  768 => 281,  761 => 276,  740 => 271,  736 => 270,  733 => 269,  731 => 268,  727 => 267,  704 => 263,  696 => 261,  690 => 259,  688 => 258,  679 => 251,  674 => 249,  671 => 248,  665 => 246,  663 => 245,  646 => 237,  640 => 234,  634 => 231,  616 => 215,  599 => 211,  595 => 209,  592 => 208,  584 => 206,  582 => 205,  578 => 204,  574 => 203,  570 => 202,  560 => 194,  549 => 192,  545 => 191,  537 => 186,  528 => 180,  516 => 171,  508 => 165,  502 => 163,  496 => 161,  493 => 160,  476 => 159,  471 => 156,  456 => 154,  448 => 153,  440 => 151,  437 => 150,  420 => 149,  411 => 142,  408 => 141,  402 => 140,  394 => 137,  390 => 136,  379 => 135,  371 => 132,  367 => 131,  356 => 130,  353 => 129,  349 => 128,  346 => 127,  344 => 126,  339 => 123,  336 => 122,  330 => 121,  324 => 118,  317 => 117,  314 => 116,  310 => 115,  307 => 114,  305 => 113,  301 => 111,  295 => 108,  291 => 107,  288 => 106,  282 => 104,  280 => 103,  273 => 101,  264 => 94,  254 => 92,  251 => 91,  241 => 89,  239 => 88,  231 => 87,  220 => 79,  216 => 78,  209 => 73,  206 => 72,  204 => 71,  191 => 60,  182 => 57,  178 => 55,  174 => 54,  167 => 52,  159 => 51,  155 => 50,  145 => 42,  142 => 41,  136 => 40,  127 => 37,  122 => 36,  117 => 35,  112 => 34,  110 => 33,  100 => 25,  97 => 24,  91 => 23,  82 => 20,  77 => 19,  72 => 18,  67 => 17,  65 => 16,  60 => 13,  54 => 11,  50 => 10,  45 => 9,  43 => 8,  35 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if produit.cfaprix %}
        <div>
            <div class=\"breadcrumbs\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <ul>
                                {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                                    {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |
                                    <a href=\"{{ path('fos_user_security_logout') }}\">
                                        {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}
                                    </a>
                                {% endif %} 
                            </ul>
                            <ul>
                                {% if app.request.hasPreviousSession %}
                                    {% for type, messages in app.session.flashbag.all() %}
                                        {% for message in messages %}
                                            <div class=\"flash-{{ type }}\">
                                                {{ message }}
                                            </div>
                                        {% endfor %}
                                    {% endfor %}
                                {% endif %}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        {% if app.request.hasPreviousSession %}
            {% for type, messages in app.session.flashbag.all() %}
                {% for message in messages %}
                    <div class=\"flash-{{ type }}\">
                        {{ message }}
                    </div>
                {% endfor %}
            {% endfor %}
        {% endif %}

        <!-- Breadcrumbs -->

        <div class=\"breadcrumbs\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-xs-12\">
                        <ul>
                            <li class=\"home\"> <a title=\"Aller à la page d'accueil\" href=\"{{ path ('kountac_homepage')}}\">Accueil</a><span>&raquo;</span></li>
                            <li class=\"home\"> <a title=\"Voir produits de la catégorie {{ produit.produit1.categorie|capitalize }}\" href=\"{{ path('categorie_2', { 'categorie' : produit.produit1.categorie.id}) }}\">{{ produit.produit1.categorie|capitalize }}</a><span>&raquo;</span></li>
                            <li><strong>{{ produit.produit1.nom|capitalize }} - {{ produit.libelle.libelle|capitalize }}</strong></li>
                        </ul>
                        {% for flashMessage in app.session.flashbag.get('success') %}
                            <div class=\"alert-box\">
                                <br>
                                {{ flashMessage }}
                            </div>
                        {% endfor %}
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcrumbs End --> 
        <!-- Main Container -->
        <div class=\"main-container col1-layout\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-main\">
                        <div class=\"product-view-area\">
                            {% set prixReduction = 0 %}
                            {% set prixReduction = produit.cfaprix - (produit.cfaprix * produit.reduction/100) %}

                            <div class=\"product-big-image col-xs-12 col-sm-5 col-lg-5 col-md-5\">
                                <div class=\"slider-items-products\">
                                    <div id=\"upsell-product-slider\" class=\"product-flexslider hidden-buttons\">
                                        <div class=\"large-image slides\"> 
                                            <a href=\"{{ asset(image.AssetPath) }}\" class=\"cloud-zoom\" id=\"zoom1\" rel=\"useWrapper: false, adjustY:0, adjustX:20\"> 
                                                <li><figure><img class=\"zoom-img\" src=\"{{ asset(image.AssetPath) }}\"> </figure></li>
                                            </a> 
                                        </div>
                                    </div>
                                </div>

                                <div class=\"flexslider flexslider-thumb\">
                                    <ul class=\"previews-list slides\">
                                        <li><a href='{{ asset(image.AssetPath) }}' class='cloud-zoom-gallery' rel=\"useZoom: 'zoom1', smallImage: '{{ asset(image.AssetPath) }}' \"><img src=\"{{ asset(image.AssetPath) }}\" alt = \"\"/></a></li>
                                            {% if image.path2%}
                                        <li><a href='{{ asset(image.AssetPath2) }}' class='cloud-zoom-gallery' rel=\"useZoom: 'zoom1', smallImage: '{{ asset(image.AssetPath2) }}' \"><img src=\"{{ asset(image.AssetPath2) }}\" alt = \"\"/></a></li>
                                            {% endif %}
                                            {% if image.path3%}
                                        <li><a href='{{ asset(image.AssetPath3) }}' class='cloud-zoom-gallery' rel=\"useZoom: 'zoom1', smallImage: '{{ asset(image.AssetPath3) }}' \"><img src=\"{{ asset(image.AssetPath3) }}\" alt = \"\"/></a></li>
                                            {% endif %}
                                    </ul>
                                </div>
                                <!-- end: more-images --> 

                            </div>
                            <div class=\"col-xs-12 col-sm-7 col-lg-7 col-md-7 product-details-area\">
                                <div class=\"product-name\">
                                    <h1>{{ produit.produit1.nom|capitalize }} - {{ produit.libelle.libelle|capitalize }}</h1>
                                </div>
                                {% if produit.reduction == 0 %}
                                    <div class=\"price-box\"> <span class=\"regular-price\"> <span class=\"price\">{{ prixReduction|number_format(2) }} F CFA</span> </span> </div>
                                {% else %}
                                    <div class=\"price-box\">
                                        <p class=\"special-price\"> <span class=\"price-label\">Special Price</span> <span class=\"price\">{{ prixReduction|number_format(2) }} F CFA</span> </p>
                                        <p class=\"old-price\"> <span class=\"price-label\">Regular Price:</span> <span class=\"price\">{{ produit.cfaprix|number_format(2) }} F CFA</span> </p>
                                    </div>
                                {% endif %}

                                <div class=\"short-description\">
                                    {% if produit.produit1.produit2|length > 1 %}
                                        &nbsp;&nbsp;<label>Autre(s) motif(s) : </label> 
                                        {% for motif in produit.produit1.produit2 %}
                                            {% if motif != produit %}
                                                <a title=\"Motif {{ motif.libelle.libelle|capitalize }}\" href=\"{{ path('product', {'id' : motif.id}) }}\">
                                                    <img src=\"{{ motif.libelle.AssetPath|imagine_filter('cartThumbMenuItem') }}\" alt=\"\">&nbsp;&nbsp;&nbsp;&nbsp;
                                                </a>
                                            {% endif %}
                                        {% endfor %}
                                    {% endif %}
                                </div>
                                
                                <div class=\"short-description\">
                                    {% if produit|length > 1 %}
                                        &nbsp;&nbsp;<label>Autre(s) mannequin(s) : </label> 
                                        {% for image in images_autres %}
                                            {% if image.top == 0 %}
                                                <a href=\"{{ path('product', {'id': produit.id}) }}\" title=\"Mannequin par défaut (taille standard: {{ image.mannequin.tailleStandardMannequin }}, poids: {{ image.mannequin.poidsMannequin }}Kg, Taille:{{ image.mannequin.tailleMannequin }}m)\">
                                                    <img src=\"{{ image.mannequin.AssetPath|imagine_filter('cartThumbMenuItem') }}\" alt=\"\">&nbsp;
                                                    <label>{{ image.mannequin.nomMannequin|capitalize }} - {{ image.mannequin.tailleStandardMannequin }}&nbsp;<i class=\"glyphicon glyphicon-check\"></i>&nbsp;&nbsp;</label>
                                                </a>
                                                {% else %}
                                                <a href=\"{{ path('product_mannequin', {'id': produit.id, 'id_image': image.id}) }}\" title=\"(taille standard: {{ image.mannequin.tailleStandardMannequin }}, poids: {{ image.mannequin.poidsMannequin }}Kg, Taille:{{ image.mannequin.tailleMannequin }}m)\">
                                                    <img src=\"{{ image.mannequin.AssetPath|imagine_filter('cartThumbMenuItem') }}\" alt=\"\">&nbsp;
                                                    {{ image.mannequin.nomMannequin|capitalize }} - {{ image.mannequin.tailleStandardMannequin }}&nbsp;&nbsp;&nbsp;
                                                </a>
                                            {% endif %}
                                        {% endfor %}
                                    {% endif %}
                                </div>
                                
                                <div class=\"short-description\">
                                </div>
                                

                                <ul id=\"product-detail-tab\" class=\"nav-tabs product-tabs cart_product center\">
                                    {% for produit3 in produit.produit3 %}
                                        {% if loop.first %}
                                            <li class=\"active\"> <a href=\"#{{ produit3.id }}\" data-toggle=\"tab\">{{ produit3.taille }}</a> </li>
                                            {% else %}
                                            <li> <a href=\"#{{ produit3.id }}\" data-toggle=\"tab\">{{ produit3.taille }}</a> </li>
                                            {% endif %}    
                                        {% endfor %}
                                </ul>
                                <br>
                                <div id=\"productTabContent\" class=\"tab-content\">
                                    {% for produit3 in produit.produit3 %}
                                        {% if loop.first %}
                                            <div class=\"tab-pane fade in active\" id=\"{{ produit3.id }}\">
                                            {% else %}
                                                <div class=\"tab-pane fade\" id=\"{{ produit3.id }}\">
                                                {% endif %}
                                                <div class=\"product-color-size-area\">

                                                    <div class=\"color-area\">
                                                        <h2 class=\"saider-bar-title\">Matière</h2>
                                                        <div class=\"color\">
                                                            <ul>
                                                                {{ produit.produit1.matiere|capitalize }}
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <div class=\"size-area\">
                                                        <h2 class=\"saider-bar-title\">Taille</h2>
                                                        <div class=\"size\">
                                                            <ul>
                                                                <li><a>{{ produit3.taille }}</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"product-variation\">
                                                    <form action=\"{{ path('ajoutpanier', {'id' : produit3.id}) }}\" method=\"get\">
                                                        <div class=\"cart-plus-minus\">
                                                            <label for=\"qty\">Quantité:</label>
                                                            <div class=\"numbers-row\">
                                                                <select name=\"qte\" class=\"select form-control\">
                                                                    {% for i in 1 .. produit3.stock|abs %}
                                                                        <option value=\"{{ i }}\">{{ i }}</option>
                                                                    {% endfor %}
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <button class=\"button pro-add-to-cart\" type=\"submit\" title=\"Ajouter au panier\" type=\"button\"><span><i class=\"fa fa-shopping-cart\"></i> Ajouter au panier</span></button>
                                                    </form>
                                                </div>
                                                <div class=\"product-cart-option\">
                                                    <ul>
                                                        <li><a title=\"Réserver ce produit\" href=\"{{ path('reserve_new', {'id' : produit3.id}) }}\"><i class=\"fa fa-save\"></i><span>Reservation</span></a></li>
                                                        <li><a title=\"Ajouter à vos souhaits\" href=\"{{ path('ajoutwishlist', {'id' : produit3.id}) }}\"><i class=\"fa fa-heart\"></i><span>Souhait</span></a></li>
                                                        <li><a title=\"Comparer ce produit\" href=\"{{ path('ajoutcompare', {'id' : produit3.id}) }}\"><i class=\"fa fa-exchange\"></i><span>comparaison</span></a></li>
                                                        {% if produit.cfaprixCommande %}
                                                            <li><a title=\"Commander sur mesure ce produit, prix commande: {{ produit.cfaprixCommande|number_format(2) }}F CFA\" href=\"{{ path('commande_mesures_new_item', {'id' : produit3.produit2.id}) }}\"><i class=\"fa fa-pencil\"></i><span>Commande sur mesure</span></a></li>
                                                        {% endif %}
                                                        {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                                                        <li><a title=\"Contactez le vendeur\"><i class=\"fa fa-envelope\"></i><span class=\"user\">Contacter le vendeur</span></a></li>
                                                        {% endif %}
                                                    </ul>
                                                </div>
                                            </div>
                                        {% endfor %}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"product-overview-tab\">
                            <div class=\"container\">
                                <div class=\"row\">
                                    <div class=\"col-xs-12\">
                                        <div class=\"product-tab-inner\">
                                            <ul id=\"product-detail-tab\" class=\"nav nav-tabs product-tabs\">
                                                <li class=\"active\"> <a href=\"#description\" data-toggle=\"tab\">Description</a> </li>
                                                <li> <a href=\"#utilisation\" data-toggle=\"tab\">Conditions d'utilisation</a> </li>
                                                <li> <a href=\"#reviews\" data-toggle=\"tab\">Avis</a> </li>
                                            </ul>
                                            <div id=\"productTabContent\" class=\"tab-content\">
                                                <div id=\"description\" class=\"tab-pane fade in active\">
                                                        <center><h3> \"{{ produit.produit1.nom|upper }}\" </h3></center>
                                                                 <div class=\"review-ratting\">
                                                                    <span>
                                                                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; {{ produit.produit1.description|capitalize }}</a> 
                                                                    </span>
                                                                    <br><br><br>
                                                                    A propos de <a href=\"{{ path('espace_marque', {'id' : produit.id})}}\" title=\"Voir les informations sur la marque ''{{ produit.produit1.marque.marque|capitalize }}''\"> {{ produit.produit1.marque.marque|capitalize }} <img src=\"{{ produit.produit1.marque.image.AssetPath|imagine_filter('rechercheThumbItem') }}\" alt=\"\"></a>
                                                                </div> 
                                                            <div class=\"buttons-set\"></div>
                                                    
                                                </div>
                                                                
                                                <div id=\"utilisation\" class=\"tab-pane fade\">
                                                    <div class=\"review-ratting\">
                                                        {% if produit.produit1.conditionsUtilisation %}
                                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; {{ produit.produit1.conditionsUtilisation|capitalize }}</a> 
                                                        {% else %}
                                                        <span>
                                                            <h4>{{ (\"Aucune conditions d\\'utilisation pour ce produit\")|upper }}</h4></span>
                                                        {% endif %}
                                                    </div> 
                                                    <div class=\"buttons-set\"></div>
                                                    
                                                </div>
                                                        
                                                <div id=\"reviews\" class=\"tab-pane fade\">
                                                    <div class=\"col-sm-5 col-lg-5 col-md-5\">
                                                        {% if commentaires|length != 0%}
                                                            <h4>{{ ('Avis des utilisateurs')|upper }}</h4>
                                                        {% else %}
                                                            <h4>{{ ('Aucun commentaire sur le produit')|upper }}</h4><h3> <br> <strong> \"{{ produit.produit1.nom|upper }}\" </strong></h3>
                                                            {% endif %}
                                                            {% for commentaire in commentaires %}  
                                                            <div class=\"reviews-content-left\">
                                                                <div class=\"review-ratting\">
                                                                    <p>
                                                                        <a>{{ commentaire.titre|capitalize }}</a> 
                                                                        {% include 'KountacBundle:Default:produits/rating/rating.html.twig' %}
                                                                    </p>
                                                                    <span>{{ commentaire.contenu|capitalize }}</span>
                                                                    <p class=\"author\"> {{ commentaire.pseudo|capitalize }}<small>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; (Ajouté le {{ commentaire.date|date(\"d/M/Y\") }})</small> </p>
                                                                </div> 
                                                            </div>
                                                            <div class=\"buttons-set\"></div>
                                                        {% endfor %}

                                                    </div>

                                                    <div class=\"col-sm-7 col-lg-7 col-md-7\">
                                                        <div class=\"reviews-content-right\">
                                                            {% if is_granted('IS_AUTHENTICATED_FULLY') %} 
                                                                <h2>Donnez votre avis</h2>
                                                                <br>
                                                                <form action=\"{{ path('product', {'id' : produit.id}) }}\" method=\"POST\">
                                                                    {{ form_start(form) }}
                                                                    {{ form_errors(form) }}
                                                                    <div class=\"form-area\">
                                                                        <div class=\"page-content checkout-page\">
                                                                         <div class=\"box-border\">
                                                                        <ul>
                                                                        <li class=\"row\">
                                                                            <div class=\"col-sm-6\">
                                                                                <div class=\"rating\">
                                                                                     Votre avis
                                                                                        <input type=\"radio\" name=\"note\" id=\"excellent\" value=\"excellent\">
                                                                                        <label for=\"excellent\"><i class=\"icon-star\"></i></label>
                                                                                        <input type=\"radio\" name=\"note\" id=\"tres_bien\" value=\"tres_bien\">
                                                                                        <label for=\"tres_bien\"><i class=\"icon-star\"></i></label>
                                                                                        <input type=\"radio\" name=\"note\" id=\"bien\" value=\"bien\">
                                                                                        <label for=\"bien\"><i class=\"icon-star\"></i></label>
                                                                                        <input type=\"radio\" name=\"note\" id=\"moyen\" value=\"moyen\">
                                                                                        <label for=\"moyen\"><i class=\"icon-star\"></i></label>
                                                                                        <input type=\"radio\" name=\"note\" id=\"mauvais\" value=\"mauvais\">
                                                                                        <label for=\"mauvais\"><i class=\"icon-star\"></i></label>
                                                                                        <input type=\"radio\" name=\"note\" id=\"tres_mauvais\" value=\"tres_mauvais\">
                                                                                        <label for=\"tres_mauvais\"><i class=\"icon-star\"></i></label>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class=\"row\">
                                                                            <div class=\"col-sm-6\">
                                                                                {{ form_row(form.pseudo) }}
                                                                            </div>
                                                                        </li>
                                                                        <li class=\"row\"> 
                                                                            <div class=\"col-sm-10\">
                                                                                {{ form_row(form.contenu) }}
                                                                            </div>
                                                                        </li>
                                                                        <li class=\"row\"> 
                                                                            <div class=\"col-sm-10\">
                                                                                <div class=\"buttons-set\">
                                                                                    <button class=\"button submit\" title=\"Submit\" type=\"submit\"><span><i class=\"fa fa-thumbs-up\"></i> &nbsp;Commenter</span></button>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        
                                                                     </ul>  
                                                                             </div></div>
                                                                    </div>
                                                                    {{ form_end(form) }}
                                                                </form>
                                                            {% else %}
                                                                <a title=\"Pour ajouter votre avis, vous devez avoir un compte kountac\" href=\"{{ path('fos_user_security_login') }}\"><h2>Donnez votre avis</h2></a><br>
                                                            {% endif %}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Container End --> 

            <!-- Related Product Slider -->
            {% if categorieProduits|length != 0%}
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <div class=\"related-product-area\">
                                <div class=\"page-header\">
                                    <h2>Vous aimerez</h2>
                                </div>
                                <div class=\"related-products-pro\">
                                    <div class=\"slider-items-products\">
                                        <div id=\"related-product-slider\" class=\"product-flexslider hidden-buttons\">
                                            <div class=\"slider-items slider-width-col4\">

                                                {% for produit1 in categorieProduits %}
                                                    {% for produit_autre in produit1.produit2 %}
                                                        {% if produit_autre.cfaprix and produit != produit_autre %}
                                                        {% set prixReduction = 0 %}
                                                        {% set prixReduction = produit.cfaprix - (produit.cfaprix * produit.reduction/100) %}
                                                        {% for image in images_rest %}
                                                        {% if image.produit2 == produit_autre %}
                                                        <div class=\"product-item\">
                                                            <div class=\"item-inner\">
                                                                <div class=\"product-thumb has-hover-img\">
                                                                    <figure> 
                                                                        <center> 
                                                                            <a href=\"{{ path('product', {'id' : produit.id}) }}\"><img src=\"{{ image.AssetPath|imagine_filter('resizeThumb') }}\" alt=\"\"></a>
                                                                            {% if image.path2 %}
                                                                            <a class=\"hover-img\" href=\"{{ path('product', {'id' : produit.id}) }}\">
                                                                                <img src=\"{{ image.AssetPath2|imagine_filter('resizeThumb') }}\" alt=\"\">
                                                                            </a>
                                                                            {% endif %}
                                                                            {% if image.path3 %}
                                                                            <a class=\"hover-img\" href=\"{{ path('product', {'id' : produit.id}) }}\">
                                                                                <img src=\"{{ image.AssetPath3|imagine_filter('resizeThumb') }}\" alt=\"\">
                                                                            </a>
                                                                            {% endif %}
                                                                                
                                                                        </center>
                                                                    </figure>
                                                                    <div class=\"pr-info-area animated animate4\">
                                                                        <a title=\"Reserver ce produit\" href=\"{{ path('quickView', {'id' : produit_autre.id}) }}\" class=\"quick-view\"><i class=\"fa fa-save\"><span>Reserver</span></i></a> 
                                                                        <a title=\"Ajouter à vos souhaits\" href=\"{{ path('quickView', {'id' : produit_autre.id}) }}\" class=\"wishlist\"><i class=\"fa fa-heart\"><span>Wishlist</span></i></a> 
                                                                        <a title=\"Comparer ce produit\" href=\"{{ path('quickView', {'id' : produit_autre.id}) }}\" class=\"compare\"><i class=\"fa fa-exchange\"><span>Compare</span></i></a> 
                                                                        {% if produit_autre.cfaprixCommande %}
                                                                            <a title=\"Commander sur mesure, prix pour une commande sur mesure : {{ produit_autre.cfaprixCommande|number_format(2) }} F CFA\" href=\"{{ path('commande_mesures_new_item', {'id' : produit_autre.id}) }}\" class=\"wishlist\"><i class=\"fa fa-pencil\"><span>Commander sur mesure</span></i></a> 
                                                                        {% endif %}
                                                                    </div>
                                                                </div>
                                                                <div class=\"item-info\">
                                                                    <div class=\"info-inner\">
                                                                        <div class=\"item-title\"> <a title=\"{{ produit_autre.produit1.nom|capitalize }}\" href=\"{{ path('product', {'id' : produit_autre.id}) }}\">{{ produit_autre.produit1.nom|capitalize }}-{{ produit_autre.libelle.libelle|capitalize }}</a> </div>
                                                                        <div class=\"item-content\">
                                                                            <div class=\"item-price\">
                                                                                {% if produit_autre.reduction == 0 %}
                                                                                    <div class=\"price-box\"> <span class=\"regular-price\"> <span class=\"price\">{{ prixReduction|number_format(2) }} F CFA</span> </span> </div>
                                                                                {% else %}
                                                                                    <div class=\"price-box\">
                                                                                        <p class=\"special-price\"> <span class=\"price-label\">Special Price</span> <span class=\"price\">{{ prixReduction|number_format(2) }} F CFA</span> </p>
                                                                                        <p class=\"old-price\"> <span class=\"price-label\">Regular Price:</span> <span class=\"price\">{{ produit_autre.cfaprix|number_format(2) }} F CFA</span> </p>
                                                                                    </div>
                                                                                {% endif %}
                                                                            </div>
                                                                            <center>
                                                                                <div class=\"language-currency-wrapper left\">
                                                                                    <div class=\"inner-cl\">
                                                                                        <div class=\"block block-language form-language \">
                                                                                          <div class=\"myaccount\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href=\"{{ path('espace_marque', {'id' : produit_autre.id}) }}\" title=\"Aller à la marque {{ produit_autre.produit1.marque.marque|capitalize }}\"><img src=\"{{ produit_autre.produit1.marque.image.AssetPath|imagine_filter('marqueLogoThumb') }}\" alt=\"\">&nbsp;&nbsp;&nbsp;<span class=\"hidden-xs\"> {{ produit_autre.produit1.marque.marque|capitalize }}</span></a></div>
                                                                                            <ul>
                                                                                                <li>
                                                                                                    <strong><a title=\"Voir tous les produits de la marque {{ produit_autre.produit1.marque.marque|capitalize }}\" href=\"{{ path('espace_marque', {'id' : produit_autre.id}) }}\"><span class=\"hidden-xs\">{{ produit_autre.produit1.marque.marque|capitalize }}</span></a></strong>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </center>
                                                                            <div class=\"pro-action\">
                                                                                <a href=\"{{ path('ajoutpanier', {'id' : produit.id}) }}\">
                                                                                    <button type=\"button\" class=\"add-to-cart-mt\"> <img src=\"{{ 'css/cart.jpg'|imagine_filter('rechercheThumbItem') }}\" alt=\"\"><span> Ajouter au panier</span> </button>
                                                                                </a>                                                                        </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                                {% endif %}
                                                            {% endfor %}
                                                        {% endif %}
                                                    {% endfor %}  
                                                {% endfor %} 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            {% endif %}
        {% endif %}
", "KountacBundle:Default:produits/cfa/single_mannequin.html.twig", "C:\\xampp\\htdocs\\Projet test\\Kountac_project\\src\\Kountac\\KountacBundle/Resources/views/Default/produits/cfa/single_mannequin.html.twig");
    }
}
