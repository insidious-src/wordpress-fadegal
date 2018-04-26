<?php defined ('ABSPATH') or die ('Access denied!');

/*
 * Template Name: Media Post
 */

?>

<h1>
    <?php echo $page->Title; ?>
    <?php foreach ($page->get_helper_links () as $key => $value) : ?>
    <a href="<?php echo $key; ?>" class="page-title-action"><?php echo $value; ?></a>
    <?php endforeach; ?>
</h1>

<div id="poststuff">
    <div id="post-body" class="metabox-holder columns-2">
    <div id="post-body-content">

        <div id="titlediv">
            <div id="titlewrap">
                <label class="screen-reader-text" id="title-prompt-text" for="title">
                    <?php _e('Enter title here'); ?>
                </label>
                <input type="text" name="post_title" size="30" value="" id="title" spellcheck="true" autocomplete="off"
                 placeholder="<?php _e('Enter title here'); ?>" required>
            </div>
            <div class="inside">
                <div id="edit-slug-box" class="hide-if-no-js">
                    <strong><?php _e('Permalink:'); ?></strong>
                    <a id="sample-permalink" href="<?php bloginfo ('url'); ?>/new-collection/">
                        <?php bloginfo ('url'); ?>/new-collection/
                    </a>
                </div>
            </div>
            <input type="hidden" id="samplepermalinknonce" name="samplepermalinknonce" value="08947da762">
        </div><!-- titlediv -->
        <div class="wp_attachment_holder wp-clearfix">
            <div class="imgedit-response" id="imgedit-response-108"></div>

            <div class="wp_attachment_image wp-clearfix" id="media-head-108">
                <p><button type="button" id="insert-media-button" class="button insert-media add_media" data-editor="content"><span class="wp-media-buttons-icon"></span> Add Media</button></p>
            </div>
            <div style="display:none" class="image-editor" id="image-editor-108"></div>
        </div>
        <div class="wp_attachment_details edit-form-section">
            <p></p>

            <label for="attachment_content"><strong><?php _e('Description'); ?></strong></label>
            <div id="wp-attachment_content-wrap" class="wp-core-ui wp-editor-wrap html-active">
                <link rel="stylesheet" id="editor-buttons-css" href="http://portfoliowp.hightechbgweb.com/wp-includes/css/editor.min.css?ver=4.7" type="text/css" media="all">
                <div id="wp-attachment_content-editor-container" class="wp-editor-container"><div id="qt_attachment_content_toolbar" class="quicktags-toolbar"><input type="button" id="qt_attachment_content_strong" class="ed_button button button-small" aria-label="Bold" value="b"><input type="button" id="qt_attachment_content_em" class="ed_button button button-small" aria-label="Italic" value="i"><input type="button" id="qt_attachment_content_link" class="ed_button button button-small" aria-label="Insert link" value="link"><input type="button" id="qt_attachment_content_block" class="ed_button button button-small" aria-label="Blockquote" value="b-quote"><input type="button" id="qt_attachment_content_del" class="ed_button button button-small" aria-label="Deleted text (strikethrough)" value="del"><input type="button" id="qt_attachment_content_ins" class="ed_button button button-small" aria-label="Inserted text" value="ins"><input type="button" id="qt_attachment_content_img" class="ed_button button button-small" aria-label="Insert image" value="img"><input type="button" id="qt_attachment_content_ul" class="ed_button button button-small" aria-label="Bulleted list" value="ul"><input type="button" id="qt_attachment_content_ol" class="ed_button button button-small" aria-label="Numbered list" value="ol"><input type="button" id="qt_attachment_content_li" class="ed_button button button-small" aria-label="List item" value="li"><input type="button" id="qt_attachment_content_code" class="ed_button button button-small" aria-label="Code" value="code"><input type="button" id="qt_attachment_content_close" class="ed_button button button-small" title="Close all open tags" value="close tags"></div><textarea class="wp-editor-area" rows="5" cols="40" name="content" id="attachment_content"></textarea></div>
            </div>
        </div>

        <div id="postbox-container-2" class="postbox-container">
            <div id="normal-sortables" class="meta-box-sortables ui-sortable">
                <div id="authordiv" class="postbox">
                <button type="button" class="handlediv button-link" aria-expanded="true">
                    <span class="screen-reader-text"><?php _e('Toggle panel: Author'); ?></span>
                    <span class="toggle-indicator" aria-hidden="true"></span>
                </button>
                <h2 class="hndle ui-sortable-handle"><span><?php _e('Author'); ?></span></h2>
                <div class="inside">
                <label class="screen-reader-text" for="post_author_override">
                    <?php _e('Author'); ?>
                </label>
                <select name="post_author_override" id="post_author_override" class="">
                    <option value="1" selected="selected">Insidious One (fymfifa)</option>
                    <option value="2">Tashko Valkov (takovbg)</option>
                </select></div>
                </div>
            </div>
            <div id="advanced-sortables" class="meta-box-sortables ui-sortable"></div>
        </div>
    </div><!-- /post-body-content -->

    <div id="postbox-container-1" class="postbox-container">
    <div id="side-sortables" class="meta-box-sortables ui-sortable"><div id="submitdiv" class="postbox ">
    <button type="button" class="handlediv button-link" aria-expanded="true">
        <span class="screen-reader-text"><?php _e('Toggle panel: Save'); ?></span>
        <span class="toggle-indicator" aria-hidden="true"></span>
    </button>
    <h2 class="hndle ui-sortable-handle"><span><?php _e('Save'); ?></span></h2>
    <div class="inside">
    <div class="submitbox" id="submitpost">

    <div id="minor-publishing">

    <div style="display:none;">
    <p class="submit"><input type="submit" name="save" id="save" class="button" value="Save"></p></div>


    <div id="misc-publishing-actions">
        <div class="misc-pub-section curtime misc-pub-curtime">
            <span id="timestamp">
                <?php _e('Created on:'); ?> <b><?php echo date_i18n ('M j, Y @ G:i'); ?></b>
            </span>
        </div><!-- .misc-pub-section -->

        <div class="misc-pub-section misc-pub-filetype">
            Media types: <strong>Images, Videos</strong>
        </div>

        <div class="misc-pub-section misc-pub-filesize">
            Item count: <strong>0</strong>
        </div>
    </div><!-- #misc-publishing-actions -->
    <div class="clear"></div>
    </div><!-- #minor-publishing -->

    <div id="major-publishing-actions">
        <div id="delete-action" style="display:none;">
            <a class="submitdelete deletion" onclick="return showNotice.warn();" href="http://portfoliowp.hightechbgweb.com/wp-admin/post.php?post=108&amp;action=delete&amp;_wpnonce=b0140be4c0">
                <?php _e('Delete Permanently'); ?>
            </a>
        </div>

        <div id="publishing-action">
            <span class="spinner"></span>
            <input name="original_publish" type="hidden" id="original_publish" value="<?php _e('Create'); ?>">
            <input name="save" type="submit" class="button button-primary button-large" id="publish" value="<?php _e('Create'); ?>">
        </div>
        <div class="clear"></div>
    </div><!-- #major-publishing-actions -->

    </div>

    </div>
    </div>
    </div></div>
    <div id="postbox-container-2" class="postbox-container">
    <div id="normal-sortables" class="meta-box-sortables ui-sortable"><div id="commentstatusdiv" class="postbox  hide-if-js">
    <button type="button" class="handlediv button-link" aria-expanded="true">
        <span class="screen-reader-text"><?php _e('Toggle panel: Discussion'); ?></span>
        <span class="toggle-indicator" aria-hidden="true"></span>
    </button>
    <h2 class="hndle ui-sortable-handle"><span><?php _e('Discussion'); ?></span></h2>
    <div class="inside">
    <input name="advanced_view" type="hidden" value="1">
    <p class="meta-options">
        <label for="comment_status" class="selectit"><input name="comment_status" type="checkbox" id="comment_status" value="open" checked="checked"> Allow comments.</label><br>
        <label for="ping_status" class="selectit"><input name="ping_status" type="checkbox" id="ping_status" value="open"> Allow <a href="https://codex.wordpress.org/Introduction_to_Blogging#Managing_Comments">trackbacks and pingbacks</a> on this page.</label>
        </p>
    </div>
    </div>
    <div id="commentsdiv" class="postbox  hide-if-js">
    <button type="button" class="handlediv button-link" aria-expanded="true"><span class="screen-reader-text">Toggle panel: Comments</span><span class="toggle-indicator" aria-hidden="true"></span></button><h2 class="hndle ui-sortable-handle"><span>Comments</span></h2>
    <div class="inside">
    <input type="hidden" id="add_comment_nonce" name="add_comment_nonce" value="8632d1055c">    <p class="hide-if-no-js" id="add-new-comment"><a class="button" href="#commentstatusdiv" onclick="window.commentReply &amp;&amp; commentReply.addcomment(108);return false;">Add comment</a></p>
        <input type="hidden" id="_ajax_fetch_list_nonce" name="_ajax_fetch_list_nonce" value="0fe9589eab"><input type="hidden" name="_wp_http_referer" value="/wp-admin/post.php?post=108&amp;action=edit"><table class="widefat fixed striped comments wp-list-table comments-box" style="display:none;">
        <tbody id="the-comment-list" data-wp-lists="list:comment">
                </tbody>
    </table>
    <p id="no-comments">No comments yet.</p><div class="hidden" id="trash-undo-holder">
        <div class="trash-undo-inside">Comment by <strong></strong> moved to the trash. <span class="undo untrash"><a href="#">Undo</a></span></div>
    </div>
    <div class="hidden" id="spam-undo-holder">
        <div class="spam-undo-inside">Comment by <strong></strong> marked as spam. <span class="undo unspam"><a href="#">Undo</a></span></div>
    </div>
    </div>
    </div>
    <div id="slugdiv" class="postbox  hide-if-js">
        <button type="button" class="handlediv button-link" aria-expanded="true"><span class="screen-reader-text">Toggle panel: Slug</span><span class="toggle-indicator" aria-hidden="true"></span></button><h2 class="hndle ui-sortable-handle"><span>Slug</span></h2>
        <div class="inside">
            <label class="screen-reader-text" for="post_name">Slug</label>
            <input name="post_name" type="text" size="13" id="post_name" value="slide1">
        </div>
    </div>
    <div id="authordiv" class="postbox  hide-if-js">
        <button type="button" class="handlediv button-link" aria-expanded="true">
            <span class="screen-reader-text">Toggle panel: Author</span>
            <span class="toggle-indicator" aria-hidden="true"></span>
        </button>
        <h2 class="hndle ui-sortable-handle"><span>Author</span></h2>
        <div class="inside">
            <label class="screen-reader-text" for="post_author_override">Author</label>
            <select name="post_author_override" id="post_author_override" class="">
                <?php

                $users = get_users (array('fields' => array('ID', 'display_name', 'user_login'),
                                          'role'   => 'author'
                                          ));

                foreach ($users as $user) : ?>
                    <option value="<?php echo $user->ID; ?>"
                        <?php if (get_current_user_id () == $user->ID) echo 'selected="selected"'; ?>>
                        <?php echo esc_html ($user->display_name) . ' (' . $user->user_login . ')'; ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
    </div>
    </div><div id="advanced-sortables" class="meta-box-sortables ui-sortable"></div></div>
    </div><!-- /post-body -->
    <br class="clear">
</div>
