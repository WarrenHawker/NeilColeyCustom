<?php 
function NCBigBandPostTypes() {
    register_post_type('member', array(
        'public' => true,
        'capability_type' => 'member',
        'map_meta_cap' => true,
        'supports' => array('title'),
        'has_archive' => true,
        'rewrite' => array('slug' => 'members'),
        'show_in_rest' => true, 
        //true uses new block editor, false uses classic editor
        'menu_icon' => 'dashicons-groups', 
        'labels' => array(
            'name' => 'Band Members',
            'add_new_item' => 'Add New Band Member',
            'edit_item' => 'Edit Band Member',
            'all_items' => 'All Band Members', 
            'singular_name' => 'member'
        )
        ));
    register_post_type('video', array(
        'public' => true,
        'capability_type' => 'video',
        'map_meta_cap' => true,
        'supports' => array('title'),
        'has_archive' => true,
        'rewrite' => array('slug' => 'video'),
        'show_in_rest' => true, 
        //true uses new block editor, false uses classic editor
        'menu_icon' => 'dashicons-youtube', 
        'labels' => array(
            'name' => 'Band Videos',
            'add_new_item' => 'Add New Band Video',
            'edit_item' => 'Edit Band Video',
            'all_items' => 'All Band Video', 
            'singular_name' => 'video'
        )
    )

);
}?>