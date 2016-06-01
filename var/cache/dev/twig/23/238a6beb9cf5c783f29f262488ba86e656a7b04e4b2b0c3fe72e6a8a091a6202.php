<?php

/* UserBundle:Default:auth.html.twig */
class __TwigTemplate_3b05b0769bfb42effd96f5d932d44e95e9e13506c62d202c7cd6550adb570c33 extends Twig_Template
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
        $__internal_5593609234cc570b89542d918487552d7ca389911517c2dc644aadc7ff71e278 = $this->env->getExtension("native_profiler");
        $__internal_5593609234cc570b89542d918487552d7ca389911517c2dc644aadc7ff71e278->enter($__internal_5593609234cc570b89542d918487552d7ca389911517c2dc644aadc7ff71e278_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Default:auth.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <title>Afri Tours | Authentication</title>

    <!-- Bootstrap core CSS -->

    <link href=\"css/bootstrap.min.css\" rel=\"stylesheet\">

    <link href=\"fonts/css/font-awesome.min.css\" rel=\"stylesheet\">
    <link href=\"css/animate.min.css\" rel=\"stylesheet\">

    <!-- Custom styling plus plugins -->
    <link href=\"css/custom.css\" rel=\"stylesheet\">
    <link href=\"css/icheck/flat/green.css\" rel=\"stylesheet\">


    <script src=\"js/jquery.min.js\"></script>

    <!--[if lt IE 9]>
    <script src=\"../assets/js/ie8-responsive-file-warning.js\"></script>
    <![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->

</head>

<body style=\"background:#F7F7F7;\">

<div class=\"\">
    <a class=\"hiddenanchor\" id=\"toregister\"></a>
    <a class=\"hiddenanchor\" id=\"tologin\"></a>

    <div id=\"wrapper\">
        <div id=\"login\" class=\"animate form\">
            <section class=\"login_content\">
                <form novalidate>
                    <h1>Login Form</h1>
                    <div>
                        <input type=\"text\" class=\"form-control\" placeholder=\"Username\" required=\"\" />
                    </div>
                    <div>
                        <input type=\"password\" class=\"form-control\" placeholder=\"Password\" required=\"\" />
                    </div>

                    <div>
                        <input type=\"submit\" value=\"Log in\" class=\"btn btn-default submit\">
                        <!--a class=\"reset_pass\" href=\"#\">Lost your password?</a-->
                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"separator\">

                        <p class=\"change_link\">New to site?
                            <a href=\"#toregister\" class=\"to_register\"> Create Account </a>
                        </p>
                        <div class=\"clearfix\"></div>
                        <br />
                        <div>
                            <h1><i class=\"fa fa-bus\" style=\"font-size: 26px;\"></i> Afri Tours</h1>

                            <p>©";
        // line 72
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_converter($this->env), "Y"), "html", null, true);
        echo " All Rights Reserved. Fortune Maseko</p>
                        </div>
                    </div>
                </form>
                <!-- form -->
            </section>
            <!-- content -->
        </div>
        <div id=\"register\" class=\"animate form\">
            <section class=\"login_content\">



                <form novalidate>

                    <h1>Create Account</h1>
                    <div>
                        <input type=\"text\" class=\"form-control\" placeholder=\"First Name\" required/>
                    </div>
                    <div>
                        <input type=\"text\" class=\"form-control\" placeholder=\"Last Name\" required=\"\" />
                    </div>
                    <div>
                        <input type=\"text\" class=\"form-control\" placeholder=\"Username\" required=\"\" />
                    </div>
                    <div>
                        <input type=\"email\" class=\"form-control\" placeholder=\"Email\" required=\"\" />
                    </div>
                    <div>
                        <input type=\"password\" data-validate-length=\"6,8\" name=\"password\" class=\"form-control\" placeholder=\"Password\" required=\"\" />
                    </div>
                    <div>
                        <input type=\"password\" data-validate-linked=\"password\" name=\"passwordConfirm\" class=\"form-control\" placeholder=\"Repeat Password\" required=\"\" />
                    </div>
                    <div>
                        <select class=\"form-control\">
                            <option disabled selected>Gender</option>
                            <option value=\"Male\">Male</option>
                            <option value=\"Female\">Female</option>
                        </select>
                    </div>
                    <br>
                    <div>
                        <input type=\"text\" data-inputmask=\"'mask' : '(999) 999-9999'\" class=\"form-control\" placeholder=\"Phone\" required=\"\" />
                    </div>
                    <div>
                        <input type=\"submit\" class=\"btn btn-default submit\" value=\"Register\">
                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"separator\">

                        <p class=\"change_link\">Already a member ?
                            <a href=\"#tologin\" class=\"to_register\"> Log in </a>
                        </p>
                        <div class=\"clearfix\"></div>
                        <br />
                        <div>
                            <h1><i class=\"fa fa-bus\" style=\"font-size: 26px;\"></i> Afri Tours</h1>

                            <p>©";
        // line 131
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_converter($this->env), "Y"), "html", null, true);
        echo " All Rights Reserved. Fortune Maseko</p>
                        </div>
                    </div>
                </form>
                <!-- form -->
            </section>
            <!-- content -->
        </div>
    </div>
</div>

<!-- input mask -->
<script src=\"js/input_mask/jquery.inputmask.js\"></script>
<script src=\"js/validator/validator.js\"></script>
<!-- input_mask -->
<script>
    \$(document).ready(function() {
        \$(\":input\").inputmask();
    });
</script>

<script>
    // initialize the validator function

    // validate a field on \"blur\" event, a 'select' on 'change' event & a '.reuired' classed multifield on 'keyup':
    \$('form')
            .on('blur', 'input[required], input.optional, select.required', validator.checkField)
            .on('change', 'select.required', validator.checkField)
            .on('keypress', 'input[required][pattern]', validator.keypress);

    \$('.multi.required')
            .on('keyup blur', 'input', function() {
                validator.checkField.apply(\$(this).siblings().last()[0]);
            });

    // bind the validation to the form submit event
    //\$('#send').click('submit');//.prop('disabled', true);

    \$('form').submit(function(e) {
        e.preventDefault();
        var submit = true;
        // evaluate the form using generic validaing
        if (!validator.checkAll(\$(this))) {
            submit = false;
        }

        if (submit)
            this.submit();
        return false;
    });

    /* FOR DEMO ONLY */
    \$('#vfields').change(function() {
        \$('form').toggleClass('mode2');
    }).prop('checked', false);

    \$('#alerts').change(function() {
        validator.defaults.alerts = (this.checked) ? false : true;
        if (this.checked)
            \$('form .alert').remove();
    }).prop('checked', false);
</script>


</body>

</html>
";
        
        $__internal_5593609234cc570b89542d918487552d7ca389911517c2dc644aadc7ff71e278->leave($__internal_5593609234cc570b89542d918487552d7ca389911517c2dc644aadc7ff71e278_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Default:auth.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 131,  95 => 72,  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* */
/* <head>*/
/*     <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">*/
/*     <!-- Meta, title, CSS, favicons, etc. -->*/
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/* */
/*     <title>Afri Tours | Authentication</title>*/
/* */
/*     <!-- Bootstrap core CSS -->*/
/* */
/*     <link href="css/bootstrap.min.css" rel="stylesheet">*/
/* */
/*     <link href="fonts/css/font-awesome.min.css" rel="stylesheet">*/
/*     <link href="css/animate.min.css" rel="stylesheet">*/
/* */
/*     <!-- Custom styling plus plugins -->*/
/*     <link href="css/custom.css" rel="stylesheet">*/
/*     <link href="css/icheck/flat/green.css" rel="stylesheet">*/
/* */
/* */
/*     <script src="js/jquery.min.js"></script>*/
/* */
/*     <!--[if lt IE 9]>*/
/*     <script src="../assets/js/ie8-responsive-file-warning.js"></script>*/
/*     <![endif]-->*/
/* */
/*     <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->*/
/*     <!--[if lt IE 9]>*/
/*     <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>*/
/*     <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>*/
/*     <![endif]-->*/
/* */
/* </head>*/
/* */
/* <body style="background:#F7F7F7;">*/
/* */
/* <div class="">*/
/*     <a class="hiddenanchor" id="toregister"></a>*/
/*     <a class="hiddenanchor" id="tologin"></a>*/
/* */
/*     <div id="wrapper">*/
/*         <div id="login" class="animate form">*/
/*             <section class="login_content">*/
/*                 <form novalidate>*/
/*                     <h1>Login Form</h1>*/
/*                     <div>*/
/*                         <input type="text" class="form-control" placeholder="Username" required="" />*/
/*                     </div>*/
/*                     <div>*/
/*                         <input type="password" class="form-control" placeholder="Password" required="" />*/
/*                     </div>*/
/* */
/*                     <div>*/
/*                         <input type="submit" value="Log in" class="btn btn-default submit">*/
/*                         <!--a class="reset_pass" href="#">Lost your password?</a-->*/
/*                     </div>*/
/*                     <div class="clearfix"></div>*/
/*                     <div class="separator">*/
/* */
/*                         <p class="change_link">New to site?*/
/*                             <a href="#toregister" class="to_register"> Create Account </a>*/
/*                         </p>*/
/*                         <div class="clearfix"></div>*/
/*                         <br />*/
/*                         <div>*/
/*                             <h1><i class="fa fa-bus" style="font-size: 26px;"></i> Afri Tours</h1>*/
/* */
/*                             <p>©{{ date() | date('Y') }} All Rights Reserved. Fortune Maseko</p>*/
/*                         </div>*/
/*                     </div>*/
/*                 </form>*/
/*                 <!-- form -->*/
/*             </section>*/
/*             <!-- content -->*/
/*         </div>*/
/*         <div id="register" class="animate form">*/
/*             <section class="login_content">*/
/* */
/* */
/* */
/*                 <form novalidate>*/
/* */
/*                     <h1>Create Account</h1>*/
/*                     <div>*/
/*                         <input type="text" class="form-control" placeholder="First Name" required/>*/
/*                     </div>*/
/*                     <div>*/
/*                         <input type="text" class="form-control" placeholder="Last Name" required="" />*/
/*                     </div>*/
/*                     <div>*/
/*                         <input type="text" class="form-control" placeholder="Username" required="" />*/
/*                     </div>*/
/*                     <div>*/
/*                         <input type="email" class="form-control" placeholder="Email" required="" />*/
/*                     </div>*/
/*                     <div>*/
/*                         <input type="password" data-validate-length="6,8" name="password" class="form-control" placeholder="Password" required="" />*/
/*                     </div>*/
/*                     <div>*/
/*                         <input type="password" data-validate-linked="password" name="passwordConfirm" class="form-control" placeholder="Repeat Password" required="" />*/
/*                     </div>*/
/*                     <div>*/
/*                         <select class="form-control">*/
/*                             <option disabled selected>Gender</option>*/
/*                             <option value="Male">Male</option>*/
/*                             <option value="Female">Female</option>*/
/*                         </select>*/
/*                     </div>*/
/*                     <br>*/
/*                     <div>*/
/*                         <input type="text" data-inputmask="'mask' : '(999) 999-9999'" class="form-control" placeholder="Phone" required="" />*/
/*                     </div>*/
/*                     <div>*/
/*                         <input type="submit" class="btn btn-default submit" value="Register">*/
/*                     </div>*/
/*                     <div class="clearfix"></div>*/
/*                     <div class="separator">*/
/* */
/*                         <p class="change_link">Already a member ?*/
/*                             <a href="#tologin" class="to_register"> Log in </a>*/
/*                         </p>*/
/*                         <div class="clearfix"></div>*/
/*                         <br />*/
/*                         <div>*/
/*                             <h1><i class="fa fa-bus" style="font-size: 26px;"></i> Afri Tours</h1>*/
/* */
/*                             <p>©{{ date() | date('Y') }} All Rights Reserved. Fortune Maseko</p>*/
/*                         </div>*/
/*                     </div>*/
/*                 </form>*/
/*                 <!-- form -->*/
/*             </section>*/
/*             <!-- content -->*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* <!-- input mask -->*/
/* <script src="js/input_mask/jquery.inputmask.js"></script>*/
/* <script src="js/validator/validator.js"></script>*/
/* <!-- input_mask -->*/
/* <script>*/
/*     $(document).ready(function() {*/
/*         $(":input").inputmask();*/
/*     });*/
/* </script>*/
/* */
/* <script>*/
/*     // initialize the validator function*/
/* */
/*     // validate a field on "blur" event, a 'select' on 'change' event & a '.reuired' classed multifield on 'keyup':*/
/*     $('form')*/
/*             .on('blur', 'input[required], input.optional, select.required', validator.checkField)*/
/*             .on('change', 'select.required', validator.checkField)*/
/*             .on('keypress', 'input[required][pattern]', validator.keypress);*/
/* */
/*     $('.multi.required')*/
/*             .on('keyup blur', 'input', function() {*/
/*                 validator.checkField.apply($(this).siblings().last()[0]);*/
/*             });*/
/* */
/*     // bind the validation to the form submit event*/
/*     //$('#send').click('submit');//.prop('disabled', true);*/
/* */
/*     $('form').submit(function(e) {*/
/*         e.preventDefault();*/
/*         var submit = true;*/
/*         // evaluate the form using generic validaing*/
/*         if (!validator.checkAll($(this))) {*/
/*             submit = false;*/
/*         }*/
/* */
/*         if (submit)*/
/*             this.submit();*/
/*         return false;*/
/*     });*/
/* */
/*     /* FOR DEMO ONLY *//* */
/*     $('#vfields').change(function() {*/
/*         $('form').toggleClass('mode2');*/
/*     }).prop('checked', false);*/
/* */
/*     $('#alerts').change(function() {*/
/*         validator.defaults.alerts = (this.checked) ? false : true;*/
/*         if (this.checked)*/
/*             $('form .alert').remove();*/
/*     }).prop('checked', false);*/
/* </script>*/
/* */
/* */
/* </body>*/
/* */
/* </html>*/
/* */
