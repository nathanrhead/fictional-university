<?php
  get_header();

  while(have_posts()) {
    the_post();
?>
  <div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/ocean.jpg'); ?>)"></div>
    <div class="page-banner__content container container--narrow">
      <h1 class="page-banner__title"><?php the_title(); ?></h1>
      <div class="page-banner__intro">
        <p>Don't forget to replace me later.</p>
      </div>
    </div>
  </div>

  <div class="container container--narrow page-section">
    <?php 
      $parent_id = wp_get_post_parent_id( get_the_ID() );
      $parent_page = '';
      $parent_page_uri = '';
      
      if ($parent_id) { // Returns 0 if no parent ID, in which case do not render the crumb. 
        $parent_page = get_the_title( $parent_id );
        $parent_page_uri = get_permalink( $parent_id );
      
    ?>
      <div class="metabox metabox--position-up metabox--with-home-link">
        <p>
          <a 
            class="metabox__blog-home-link" 
            href="<?php echo $parent_page_uri; ?>">
            <i class="fa fa-home" aria-hidden="true"></i>
            Back to <?php echo $parent_page; ?>
          </a>
          <span class="metabox__main"><?php the_title(); ?></span>
        </p>
      </div>
    <?php } ?>

    <?php 
      $test_array = get_pages(array( 'child_of' => get_the_ID() )); // Gets the ids of any children of this page, meaning it determines whether this page is a parent or not.
      if ($parent_id or $test_array) { // Only display the parent + child links if the page is either a parent or a child.
    ?>
      <div class="page-links">
        <h2 class="page-links__title"><a href="<?php echo get_permalink($parent_id); ?>"><?php echo get_the_title($parent_id); ?></a></h2>
        <ul class="min-list">
          <?php 
            $find_children_of = $parent_id ? $parent_id : get_the_ID();   
            wp_list_pages(array('title_li' => null, 'child_of' => $find_children_of, 'sort_column' => 'menu_order'));
          ?>
        </ul>
      </div>    
    <?php } ?>
  
    <div class="generic-content">
      <?php the_content(); ?>
    </div>
  </div>

<?php  } ?>

<?php get_footer(); ?>