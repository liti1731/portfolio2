<?php function create_project_type() {
 $labels = array(
    'name'                       => _x( 'Project Types', 'Taxonomy General Name', 'portfolio-theme' ),
    'singular_name'              => _x( 'Project Type', 'Taxonomy Singular Name', 'portfolio-theme' ),
    'menu_name'                  => __( 'Project Types', 'portfolio-theme' ),
    'all_items'                  => __( 'All types', 'portfolio-theme' ),
    'new_item_name'              => __( 'New Type Name', 'portfolio-theme' ),
    'add_new_item'               => __( 'Add New Project Type', 'portfolio-theme' ),
    'edit_item'                  => __( 'Edit Project Type', 'portfolio-theme' ),
    'update_item'                => __( 'Update Project Type', 'portfolio-theme' ),
    'add_or_remove_items'        => __( 'Add or remove Project Types', 'portfolio-theme' ),
    'popular_items'              => __( 'Popular Types', 'portfolio-theme' ),
  );//all labels in dashboard
  $args = array(
    'labels'                     => $labels,
    'hierarchical'               => true,
    'public'                     => true,
    'show_ui'                    => true,
    'show_admin_column'          => true,
    'show_in_nav_menus'          => true,
    
  );

  register_taxonomy( 'project_type', array('project'), $args );

  $labels = array(
    'name'                       => _x( 'Project Skills', 'Taxonomy General Name', 'portfolio-theme' ),
    'singular_name'              => _x( 'Project Skill', 'Taxonomy Singular Name', 'portfolio-theme' ),
    'menu_name'                  => __( 'Project Skills', 'portfolio-theme' ),
    'all_items'                  => __( 'All skills', 'portfolio-theme' ),
    'new_item_name'              => __( 'New Skill Name', 'portfolio-theme' ),
    'add_new_item'               => __( 'Add New Project Skill', 'portfolio-theme' ),
    'edit_item'                  => __( 'Edit Project Skill', 'portfolio-theme' ),
    'update_item'                => __( 'Update Project Skill', 'portfolio-theme' ),
    'add_or_remove_items'        => __( 'Add or remove Project Skills', 'portfolio-theme' ),
    'popular_items'              => __( 'Popular Skills', 'portfolio-theme' ),
  );

  $args = array(
    'labels'                     => $labels,
    'hierarchical'               => true,
    'public'                     => true,
    'show_ui'                    => true,
    'show_admin_column'          => true,
    'show_in_nav_menus'          => true,
    
  );

  register_taxonomy( 'project_skill', array('project'), $args );
}


add_action( 'init', 'create_project_type' );
?>