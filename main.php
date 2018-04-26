<?php defined ('ABSPATH') or die ('Access denied!');

require_once 'admin/page-collections.php';
require_once 'admin/page-single-collection.php';

function fadegal_main ()
{
    global $fadegal_plugin;

    // add backend pages
    $fadegal_plugin->add_backend_page (WP\Plugin::Media,
                                       'collections'   ,
                                    __('Collections'   , 'fadegal') ,
                                       'on_fadegal_collections_load',
                                       $fadegal_plugin->dir () . '/page-templates/wp-list-table.php'
                                       );

    $fadegal_plugin->add_backend_page (WP\Plugin::Media,
                                       'add-collection',
                                    __('Add Collection', 'fadegal')       ,
                                       'on_fadegal_single_collection_load',
                                       $fadegal_plugin->dir () . '/page-templates/wp-post-media.php'
                                       );
}

?>
