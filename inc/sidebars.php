<?php
    namespace inc\Theme\Sidebars;

        class Init{
            public function __construct() {
                add_action('widgets_init', function() {
                    register_sidebar([
                        'name'=>'Topbar left',
                        'id'=>'topbar-left',
                        'before_widget'=>'',
                        'after_widget'=>'',
                        'before_title'=>'',
                        'after_title'=>''
                    ]);
            
                    register_sidebar([
                        'name'=>'Topbar right',
                        'id'=>'topbar-right',
                        'before_widget'=>'',
                        'after_widget'=>'',
                        'before_title'=>'',
                        'after_title'=>''
                    ]);
            
                    register_sidebar([
                        'name'=>'Header right',
                        'id'=>'header-2',
                        'before_widget'=>'',
                        'after_widget'=>'',
                        'before_title'=>'',
                        'after_title'=>''
                    ]);
            
                    register_sidebar([
                        'name'=>'Left Sidebar',
                        'id'=>'left',
                        'before_widget'=>'<div class="contentwrapper"><div class="contentbox">',
                        'after_widget'=>'</div></div>',
                        'before_title'=>'',
                        'after_title'=>''
                    ]);
            
                    register_sidebar([
                        'name'=>'Right Sidebar',
                        'id'=>'right',
                        'before_widget'=>'<div class="contentwrapper"><div class="contentbox">',
                        'after_widget'=>'</div></div>',
                        'before_title'=>'',
                        'after_title'=>''
                    ]);
            
                    register_sidebar([
                        'name'=>'Footer 1',
                        'id'=>'footer-1',
                        'before_widget'=>'',
                        'after_widget'=>'',
                        'before_title'=>'<h3>',
                        'after_title'=>'</h3>'
                    ]);
            
                    register_sidebar([
                        'name'=>'Footer 2',
                        'id'=>'footer-2',
                        'before_widget'=>'',
                        'after_widget'=>'',
                        'before_title'=>'<h3>',
                        'after_title'=>'</h3>'
                    ]);
            
                    register_sidebar([
                        'name'=>'Footer 3',
                        'id'=>'footer-3',
                        'before_widget'=>'',
                        'after_widget'=>'',
                        'before_title'=>'<h3>',
                        'after_title'=>'</h3>'
                    ]);
            
                    register_sidebar([
                        'name'=>'Footer 4',
                        'id'=>'footer-4',
                        'before_widget'=>'',
                        'after_widget'=>'',
                        'before_title'=>'<h3>',
                        'after_title'=>'</h3>'
                    ]);
            
                    register_sidebar([
                        'name'=>'Footer 5',
                        'id'=>'footer-5',
                        'before_widget'=>'',
                        'after_widget'=>'',
                        'before_title'=>'<h3>',
                        'after_title'=>'</h3>'
                    ]);
            
                    register_sidebar(array(
                            'name'=>'Footer 6',
                            'id'=>'footer-6',
                            'before_widget'=>'',
                            'after_widget'=>'',
                            'before_title'=>'<h3>',
                            'after_title'=>'</h3>'
                    ));
                    register_sidebar(array(
                            'name'=>'Footer 7',
                            'id'=>'footer-7',
                            'before_widget'=>'',
                            'after_widget'=>'',
                            'before_title'=>'<h3>',
                            'after_title'=>'</h3>'
                    ));
            
                    register_sidebar(array(
                            'name'=>'Footer 8',
                            'id'=>'footer-8',
                            'before_widget'=>'',
                            'after_widget'=>'',
                            'before_title'=>'<h3>',
                            'after_title'=>'</h3>'
                    ));
                    register_sidebar(array(
                            'name'=>'Footer wide top',
                            'id'=>'footerwidetop',
                            'before_widget'=>'',
                            'after_widget'=>'',
                            'before_title'=>'<h3>',
                            'after_title'=>'</h3>'
                    ));
            
                    register_sidebar([
                        'name'=>'Footer wide top 2',
                        'id'=>'footerwidetop-2',
                        'before_widget'=>'',
                        'after_widget'=>'',
                        'before_title'=>'<h3>',
                        'after_title'=>'</h3>'
                    ]);
            
                    register_sidebar([
                        'name'=>'Footer wide middle',
                        'id'=>'footerwidemid',
                        'before_widget'=>'',
                        'after_widget'=>'',
                        'before_title'=>'<h3>',
                        'after_title'=>'</h3>'
                    ]);
            
                    register_sidebar([
                        'name'=>'Homepage header',
                        'id'=>'header',
                        'before_widget'=>'',
                        'after_widget'=>'',
                        'before_title'=>'',
                        'after_title'=>''
                    ]);
            
                    register_sidebar([
                        'name'=>'Hero section',
                        'id'=>'rxwp15hero',
                        'before_widget'=>'',
                        'after_widget'=>'',
                        'before_title'=>'',
                        'after_title'=>''
                    ]);
            
                    register_sidebar([
                        'name'=>'Front half 1',
                        'id'=>'half-1',
                        'before_widget'=>'',
                        'after_widget'=>'',
                        'before_title'=>'<h3>',
                        'after_title'=>'</h3>'
                    ]);
            
                    register_sidebar([
                        'name'=>'Front half 2',
                        'id'=>'half-2',
                        'before_widget'=>'',
                        'after_widget'=>'',
                        'before_title'=>'<h3>',
                        'after_title'=>'</h3>'
                    ]);
            
                    register_sidebar([
                        'name'=>'Front third 1',
                        'id'=>'front-1',
                        'before_widget'=>'<div class="safariwidget">',
                        'after_widget'=>'</div></div>',
                        'before_title'=>'<h3>',
                        'after_title'=>'</h3><div class="swcontent">',
                    ]);
            
                    register_sidebar([
                        'name'=>'Front third 2',
                        'id'=>'front-2',
                        'before_widget'=>'<div class="safariwidget">',
                        'after_widget'=>'</div></div>',
                        'before_title'=>'<h3>',
                        'after_title'=>'</h3><div class="swcontent">',
                    ]);
            
                    register_sidebar([
                        'name'=>'Front third 3',
                        'id'=>'front-3',
                        'before_widget'=>'<div class="safariwidget">',
                        'after_widget'=>'</div></div>',
                        'before_title'=>'<h3>',
                        'after_title'=>'</h3><div class="swcontent">',
                    ]);
            
                    register_sidebar([
                        'name'=>'Home Bottom',
                        'id'=>'front-bottom',
                        'before_widget'=>'',
                        'after_widget'=>'',
                        'before_title'=>'',
                        'after_title'=>''
                    ]);
                });
            }
        }
