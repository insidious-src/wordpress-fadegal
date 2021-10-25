<?php namespace WP; defined ('ABSPATH') or die ('Access denied!');

require_once 'includes/class-widget.php';
require_once 'config.php'               ;

class MediaCollection extends Widget
{
    /*
     * Sets up the widgets name etc
     */
    public function __construct ()
    {
        global $jquery_fadegal_config;

        $default_options = array_merge ($jquery_fadegal_config, array(
            'title'      => '',
            'parent'     => '',
            'collection' => '',
            'meta'       => ''
            ));

        parent::__construct (__DIR__ . '/widget-templates/wp-form-collection.php',
                          __('Media Collection', 'fadegal'),
                          __('Show a selected media collection', 'fadegal'),
                             $default_options);

        $self = &$this;

        add_action ('wp_enqueue_scripts', function () use ($self)
        {
            if (function_exists ($scripts = $self->Prefix . '_scripts')) $scripts ();
        });
    }

    /*
     * Outputs the content of the widget
     *
     * @param array $args
     * @param array $instance
     */
    public function widget ($args, $instance)
    {
        // outputs the content of the widget
    }
};

?>
