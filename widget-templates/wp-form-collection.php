<?php defined ('ABSPATH') or die ('Access denied!');

/*
 * Widget ID:    media_collection
 * Widget Class: widget_media_collection
 */

?>

<p>
    <label for="<?php echo $this->get_field_id ('title'); ?>">
        <?php _e('Title:'); ?>
    </label>
    <input class="widefat" <?php echo $this->get_field_attr ('title'); ?>
            type="text" value="<?php echo esc_attr ($instance['title']); ?>"
     placeholder="<?php _e('Enter title here'); ?>">
    <small>
        <?php _e('only used to distinguish instances', 'fadegal'); ?>
    </small>
</p>
<p>
    <label for="<?php echo $this->get_field_id ('parent'); ?>">
        <?php _e('Parent:'); ?>
    </label>
    <select class="widefat" <?php echo $this->get_field_attr ('parent'); ?>>
        <option value=""<?php selected ($instance['parent'], ''); ?>>
            <?php _e('None'); ?>
        </option>
        <?php foreach ($this->active_instances () as $key => $value) :
        if ($this->number !== $key) : ?>
        <option value="<?php echo $key; ?>"<?php selected ($instance['parent'], $key); ?>>
            <?php echo '[' . $key . '] ' . $value['title']; ?>
        </option>
        <?php endif;
        endforeach; ?>
    </select>
    <small>
        <?php _e('where to put the code in the html output', 'fadegal'); ?>
    </small>
</p>
<p>
    <label for="<?php echo $this->get_field_id ('collection'); ?>">
        <?php _e('Collection:', 'fadegal'); ?>
    </label>
    <select class="widefat" <?php echo $this->get_field_attr ('collection'); ?>>
        <option value=""<?php selected ($instance['collection'], ''); ?>>
            <?php esc_html_e('— Select —'); ?>
        </option>
    </select>
</p>
<p>
    <label for="<?php echo $this->get_field_id ('meta'); ?>">
        <?php _e('File Meta:', 'fadegal'); ?>
    </label>
    <select class="widefat" <?php echo $this->get_field_attr ('meta'); ?>>
        <option value="file"<?php       selected ($instance['meta'], 'file'      ); ?>>
            <?php _e('Content'    ); ?>
        </option>
        <option value="title"<?php      selected ($instance['meta'], 'title'     ); ?>>
            <?php _e('Title'      ); ?>
        </option>
        <option value="desciption"<?php selected ($instance['meta'], 'desciption'); ?>>
            <?php _e('Description'); ?>
        </option>
    </select>
    <small>
        <?php _e('what to show from each file', 'fadegal'); ?>
    </small>
</p>
<p>
    <input class="checkbox" type="checkbox" <?php checked ($instance['alwaysVisible']); ?>
                 <?php echo $this->get_field_attr ('alwaysVisible'); ?>>
    <label  for="<?php echo $this->get_field_id   ('alwaysVisible'); ?>">
        <?php _e('Always Visible', 'fadegal'); ?>
    </label>
    <br>
    <small>
        <?php _e('if always visible or it should popup like a gallery', 'fadegal'); ?>
    </small>
<p>
<p>
    <input class="checkbox" type="checkbox" <?php checked ($instance['navigation']); ?>
                <?php echo $this->get_field_attr ('navigation'); ?>>
    <label for="<?php echo $this->get_field_id   ('navigation'); ?>">
         <?php _e('Navigation', 'fadegal'); ?>
    </label>
</p>
<hr>
</p>
    <input class="checkbox" type="checkbox" <?php checked ($instance['animation']); ?>
                <?php echo $this->get_field_attr ('animation'); ?>>
    <label for="<?php echo $this->get_field_id   ('animation'); ?>">
        <?php _e('Animations:', 'fadegal'); ?>&nbsp;
    </label>
    <select <?php disabled ($instance['animation'], false    ); ?>
            <?php echo $this->get_field_name ('animationType'); ?>>
        <option value="fade"<?php  selected ($instance['animationType'], 'fade' ); ?>>
            <?php _e('Fade' , 'fadegal'); ?>
        </option>
        <option value="slide"<?php selected ($instance['animationType'], 'slide'); ?>>
            <?php _e('Slide', 'fadegal'); ?>
        </option>
        <option value="popup"<?php selected ($instance['animationType'], 'popup'); ?>>
            <?php _e('Popup', 'fadegal'); ?>
        </option>
    </select>
</p>
<p>
    <input class="checkbox" type="checkbox" <?php checked ($instance['initialEffect']); ?>
                <?php echo $this->get_field_attr ('initialEffect'); ?>>
    <label for="<?php echo $this->get_field_id   ('initialEffect'); ?>">
        <?php _e('Initial Effect:', 'fadegal'); ?>&nbsp;
    </label>
    <select <?php disabled ($instance['initialEffect'], false    ); ?>
            <?php echo $this->get_field_attr ('initialEffectType'); ?>>
        <option value="fade"<?php  selected ($instance['initialEffectType'], 'fade' ); ?>>
            <?php _e('Fade' , 'fadegal'); ?>
        </option>
        <option value="slide"<?php selected ($instance['initialEffectType'], 'slide'); ?>>
            <?php _e('Slide', 'fadegal'); ?>
        </option>
        <option value="popup"<?php selected ($instance['initialEffectType'], 'popup'); ?>>
            <?php _e('Popup', 'fadegal'); ?>
        </option>
    </select>
</p>
<p>
    <label for="<?php echo $this->get_field_id ('animationDuration'); ?>">
        <?php _e('Duration:', 'fadegal'); ?>
    </label>
    <input class="widefat" type="number" placeholder="Enter title here"
           value="<?php echo $instance['animationDuration']             ; ?>"
                  <?php echo $this->get_field_attr ('animationDuration'); ?>>
    <small><?php _e('in milliseconds', 'fadegal'); ?></small>
</p>
<hr>
<p>
    <label for="<?php echo $this->get_field_id ('initialDelay'); ?>">
        <?php _e('Initial Delay:', 'fadegal'); ?>
    </label>
    <input class="widefat" type="number" placeholder="Enter title here"
           value="<?php echo $instance['initialDelay']             ; ?>"
                  <?php echo $this->get_field_attr ('initialDelay'); ?>>
    <small><?php _e('in milliseconds', 'fadegal'); ?></small>
</p>
<p>
    <label for="<?php echo $this->get_field_id ('itemChangeEvent'); ?>">
        <?php _e('Change Item Event:', 'fadegal'); ?>
    </label>
    <select class="widefat" <?php echo $this->get_field_attr ('itemChangeEvent'); ?>>
        <option value="click"<?php    selected ($instance['itemChangeEvent'], 'click'   ); ?>>
            <?php _e('Click'       , 'fadegal'); ?>
        </option>
        <option value="hover"<?php    selected ($instance['itemChangeEvent'], 'hover'   ); ?>>
            <?php _e('Hover'       , 'fadegal'); ?>
        </option>
        <option value="dblclick"<?php selected ($instance['itemChangeEvent'], 'dblclick'); ?>>
            <?php _e('Double Click', 'fadegal'); ?>
        </option>
    </select>
</p>
<p>
    <label><?php _e('Maximum Visible Items:', 'fadegal'); ?></label>
    <input class="widefat" type="number" value="1">
</p>
<p>
    <input class="checkbox" type="checkbox" <?php checked ($instance['autoWidth']); ?>
                <?php echo $this->get_field_attr ('autoWidth'); ?>>
    <label for="<?php echo $this->get_field_id   ('autoWidth'); ?>">
        <?php _e('Auto Width', 'fadegal'); ?>
    </label>
    <br>
    <input class="checkbox" type="checkbox" <?php checked ($instance['autoHeight']); ?>
                <?php echo $this->get_field_attr ('autoHeight'); ?>>
    <label for="<?php echo $this->get_field_id   ('autoHeight'); ?>">
        <?php _e('Auto Height', 'fadegal'); ?>
    </label>
</p>
<hr>
<p>
    <label  for="<?php echo $this->get_field_id ('navigatorFor'); ?>">
        <?php _e('Navigate:', 'fadegal'); ?>
    </label>
    <br>
    <select <?php echo $this->get_field_attr ('navigatorFor'); ?>>
        <option value=""><?php echo esc_html__('— Select —'); ?></option>
        <?php foreach ($this->active_instances () as $key => $value) :
        if ($this->number !== $key) : ?>
        <option value="<?php echo $key; ?>">
            <?php echo '[' . $key . '] ' . $value['title']; ?>
        </option>
        <?php endif;
        endforeach; ?>
    </select>
    <a class="button" href="#" for="<?php echo $this->get_field_id ('navigatorFor'); ?>">
    <?php _e('Add'); ?></a>
</p>
<p>
    <small>The widget uses jquery.fadegal.js</small>
</p>
