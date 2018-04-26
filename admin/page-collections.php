<?php defined ('ABSPATH') or die ('Access denied!');

function on_fadegal_collections_load ($page)
{
    $screen = $page->screen ();

    $screen->add_help_tab (array(
        'id'      =>    'collections-overview',
        'title'   => __('Overview', 'fadegal'),
        'content' =>
        '<p>Media Collections are groups of media files along with their meta data.</p>',
        ));

    $content  = '<p><strong>' . __( 'For more information:', 'fadegal' ) . '</strong></p>';
    $content .= '<p><a href="https://bitbucket.org/softtech-bg/fadegal/">Source Code</a></p>';

    $screen->set_help_sidebar ($content);

    $screen->add_option ('title' );
    $screen->add_option ('items' );
    $screen->add_option ('date'  );
    $screen->add_option ('author');

    $page->add_helper_links (array('upload.php?page=fadegal-add-collection' => __('Add New')));
}

?>
