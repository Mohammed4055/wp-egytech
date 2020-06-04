<?php get_header(); ?>
    <body>
        <div class="desginerinfo">
            <div class="container">
                <span>desgined by :- 911web.net 
                    <a href="http://911web.000webhostapp.com/" target="_blank"><i class="fas fa-external-link-alt"></i></a>
                </span>
            </div>
        </div>
        <header class="brand">
        <div class="container">
                <div class="row">
                    <div class="col">
                        <a href="<?php bloginfo('url');?>"><?php bloginfo('name');?></a>
                        <div class="sub-brand"><?php bloginfo('description');?></div>
                    </div>
                    <div class="col"><?php get_search_form();?></div>
                </div>
            </div>
        </header>
        <nav class="navbar navbar-expand-md navigation-clean">   
            <?php display_the_nav_menu();?>
        </nav>
        
<?php get_footer();?>