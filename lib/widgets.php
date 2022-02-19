

<?php
function belfast_sidebar_widgets(){
    register_sidebar( array(
        'name'=> 'Blog Sidebar',
        'id'=> 'sidebar-1',
        'before_widget'=> '<div class="sidebar-categories"> <ul class="categories-list"> ',
        'after_widget'=> '</ul></div>',
        'before_title'=> '<h3 class="sidebar-title">',
        'after_title'=> '</h3>',
    ) );
}
add_action( 'widgets_init', 'belfast_sidebar_widgets');