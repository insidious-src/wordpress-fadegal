<?php defined ('ABSPATH') or die ('Access denied!');

/*
 * Template Name: List Table
 */

?>

<h1>
    <?php echo $page->Title; ?>
    <?php foreach ($page->get_helper_links () as $key => $value) : ?>
    <a href="<?php echo $key; ?>" class="page-title-action"><?php echo $value; ?></a>
    <?php endforeach; ?>
</h1>
<form id="posts-filter" method="get" class="">
    <h2 class="screen-reader-text"><?php _e('Filter media items list'); ?></h2>

    <div class="wp-filter">
        <div class="filter-items">
            <input type="hidden" name="mode" value="list">
            <div class="view-switch">
                <a href="?page=fadegal-collections&mode=list" class="view-list current" id="view-switch-list">
                    <span class="screen-reader-text"><?php _e('List View'); ?></span>
                </a>
                <a href="?page=fadegal-collections&mode=grid" class="view-grid" id="view-switch-grid">
                    <span class="screen-reader-text"><?php _e('Grid View'); ?></span>
                </a>
            </div>

            <label for="attachment-filter" class="screen-reader-text"><?php _e('Filter by type'); ?></label>
            <select class="attachment-filters" name="attachment-filter" id="attachment-filter">
                    <option value=""><?php _e('All media types'); ?></option>
                    <option value="post_mime_type:image"><?php _e('Images'    ); ?></option>
                    <option value="post_mime_type:video"><?php _e('Videos'    ); ?></option>
                    <option value="detached"><?php             _e('Unattached'); ?></option>
            </select>

            <div class="actions">
                <label for="filter-by-date" class="screen-reader-text">
                    <?php _e('Filter by date'); ?>
                </label>
                <select name="m" id="filter-by-date">
                    <option selected="selected" value="0"><?php _e('All dates'); ?></option>
                </select>
                <input type="submit" name="filter_action" id="post-query-submit" class="button" value="Filter">
            </div>
        </div>

        <div class="search-form">
            <label for="media-search-input" class="screen-reader-text">
                <?php _e('Search Collections', 'fadegal'); ?>
            </label>
            <input type="search" placeholder="<?php _e('Search collections...', 'fadegal'); ?>" id="collections-search-input" class="search" name="s" value="">
        </div>
    </div>

    <h2 class="screen-reader-text"><?php _e('Collections list', 'fadegal'); ?></h2>
    <br><br><br>
    <div class="tablenav top" style="display:none;">
        <div class="alignleft actions bulkactions">
            <label for="bulk-action-selector-top" class="screen-reader-text">
                <?php _e('Select bulk action'); ?>
            </label>
            <select name="action" id="bulk-action-selector-top">
                <option value="-1"><?php _e('Bulk Actions'); ?></option>
                <option value="delete"><?php _e('Delete Permanently'); ?></option>
            </select>
            <input type="submit" id="doaction" class="button action" value="<?php _e('Apply'); ?>">
        </div>
        <div class="tablenav-pages one-page">
            <span class="displaying-num">0 <?php _e('items'); ?></span>
            <span class="pagination-links"><span class="tablenav-pages-navspan" aria-hidden="true">«</span>
                <span class="tablenav-pages-navspan" aria-hidden="true">‹</span>
                <span class="paging-input">
                    <label for="current-page-selector" class="screen-reader-text">
                        <?php _e('Current Page'); ?>
                    </label>
                    <input class="current-page" id="current-page-selector" type="text" name="paged" value="1" size="1" aria-describedby="table-paging">
                    <span class="tablenav-paging-text">
                        1 <?php _e('of'); ?> <span class="total-pages">1</span>
                    </span>
                </span>
                <span class="tablenav-pages-navspan" aria-hidden="true">›</span>
                <span class="tablenav-pages-navspan" aria-hidden="true">»</span>
            </span>
        </div>
        <br class="clear">
    </div>


    <table class="wp-list-table widefat fixed striped media">
        <thead>
            <tr>
                <td id="cb" class="manage-column column-cb check-column">
                    <label class="screen-reader-text" for="cb-select-all-1">
                        <?php _e('Select All'); ?>
                    </label>
                    <input id="cb-select-all-1" type="checkbox">
                </td>
                <th scope="col" id="title" class="manage-column column-title column-primary sortable desc">
                    <a href="http://portfoliowp.hightechbgweb.com/wp-admin/upload.php?mode=list&amp;orderby=title&amp;order=asc">
                        <span><?php _e('Title'); ?></span><span class="sorting-indicator"></span>
                    </a>
                </th>
                <th scope="col" id="author" class="manage-column column-author sortable desc">
                    <a href="http://portfoliowp.hightechbgweb.com/wp-admin/upload.php?mode=list&amp;orderby=author&amp;order=asc">
                        <span><?php _e('Author'); ?></span><span class="sorting-indicator"></span>
                    </a>
                </th>
                <th scope="col" id="parent" class="manage-column column-parent sortable desc">
                    <a href="http://portfoliowp.hightechbgweb.com/wp-admin/upload.php?mode=list&amp;orderby=parent&amp;order=asc">
                        <span><?php _e('Items'); ?></span><span class="sorting-indicator"></span>
                    </a>
                </th>
                <th scope="col" id="date" class="manage-column column-date sortable asc">
                    <a href="http://portfoliowp.hightechbgweb.com/wp-admin/upload.php?mode=list&amp;orderby=date&amp;order=desc">
                        <span><?php _e('Date'); ?></span><span class="sorting-indicator"></span>
                    </a>
                </th>
            </tr>
        </thead>

        <tbody id="the-list">
            <tr id="post-110" class="author-self status-inherit no-items">
                <th scope="row" class="check-column" style="display:none;">
                    <label class="screen-reader-text" for="cb-select-110"><?php _e('None'); ?></label>
                    <input type="checkbox" name="media[]" id="cb-select-110" value="110">
                </th>
                <td class="title column-title has-row-actions column-primary colspanchange" data-colname="Title" colspan="5">
                    <?php _e('No collections found.', 'fadegal'); ?>
                </td>
                <td class="author column-author" data-colname="Author" style="display:none;"></td>
                <td class="parent column-parent" data-colname="Items" style="display:none;"></td>
                <td class="date column-date" data-colname="Date" style="display:none;"></td>
            </tr>
        </tbody>

        <tfoot>
            <tr>
                <td class="manage-column column-cb check-column">
                    <label class="screen-reader-text" for="cb-select-all-2">
                        <?php _e('Select All'); ?>
                    </label>
                    <input id="cb-select-all-2" type="checkbox">
                </td>
                <th scope="col" class="manage-column column-title column-primary sortable desc">
                    <a href="http://portfoliowp.hightechbgweb.com/wp-admin/upload.php?mode=list&amp;orderby=title&amp;order=asc">
                        <span><?php _e('Title'); ?></span><span class="sorting-indicator"></span>
                    </a>
                </th>
                <th scope="col" class="manage-column column-author sortable desc">
                    <a href="http://portfoliowp.hightechbgweb.com/wp-admin/upload.php?mode=list&amp;orderby=author&amp;order=asc">
                        <span><?php _e('Author'); ?></span><span class="sorting-indicator"></span>
                    </a>
                </th>
                <th scope="col" class="manage-column column-parent sortable desc">
                    <a href="http://portfoliowp.hightechbgweb.com/wp-admin/upload.php?mode=list&amp;orderby=parent&amp;order=asc">
                        <span><?php _e('Items'); ?></span><span class="sorting-indicator"></span>
                    </a>
                </th>
                <th scope="col" class="manage-column column-date sortable asc">
                    <a href="http://portfoliowp.hightechbgweb.com/wp-admin/upload.php?mode=list&amp;orderby=date&amp;order=desc">
                        <span><?php _e('Date'); ?></span><span class="sorting-indicator"></span>
                    </a>
                </th>
            </tr>
        </tfoot>
    </table>


    <div class="tablenav bottom" style="display:none;">
        <div class="alignleft actions bulkactions">
            <label for="bulk-action-selector-bottom" class="screen-reader-text">
                <?php _e('Select bulk action'); ?>
            </label>
            <select name="action2" id="bulk-action-selector-bottom">
                <option value="-1"><?php _e('Bulk Actions'); ?></option>
                <option value="delete"><?php _e('Delete Permanently'); ?></option>
            </select>
            <input type="submit" id="doaction2" class="button action" value="<?php _e('Apply'); ?>">
        </div>
        <div class="tablenav-pages one-page"><span class="displaying-num">0 <?php _e('items'); ?></span>
            <span class="pagination-links"><span class="tablenav-pages-navspan" aria-hidden="true">«</span>
                <span class="tablenav-pages-navspan" aria-hidden="true">‹</span>
                <span class="screen-reader-text"><?php _e('Current Page'); ?></span>
                <span id="table-paging" class="paging-input">
                    <span class="tablenav-paging-text">
                        1 <?php _e('of'); ?> <span class="total-pages">1</span>
                    </span>
                </span>
                <span class="tablenav-pages-navspan" aria-hidden="true">›</span>
                <span class="tablenav-pages-navspan" aria-hidden="true">»</span>
            </span>
        </div>
        <br class="clear">
    </div>
</form>
