<?php namespace WP; defined ('ABSPATH') or die ('Access denied!');

require_once 'class-file-meta.php' ;
require_once 'class-admin-page.php';

/*
 * A basic plugin class that encapsulates all related information
 * and automates common tasks
 */
class Plugin
{
    private $m_file_path, $m_dir;

    private $m_meta   = array(
        'Name'        => 'Plugin Name',
        'Title'       => 'Plugin Name',
        'PluginURI'   => 'Plugin URI' ,
        'Version'     => 'Version'    ,
        'Description' => 'Description',
        'Author'      => 'Author'     ,
        'AuthorURI'   => 'Author URI' ,
        'TextDomain'  => 'Text Domain',
        'DomainPath'  => 'Domain Path',
        'License'     => 'License'    ,
        'LicenseURI'  => 'License URI',
        'Network'     => 'Network'
    );

    // backend menu item slugs
    const Dashboard       = 'index.php'                        ;
    const Posts           = 'edit.php'                         ;
    const Media           = 'upload.php'                       ;
    const Pages           = 'edit.php?post_type=page'          ;
    const Comments        = 'edit-comments.php'                ;
    const CustomPostTypes = 'edit.php?post_type=your_post_type';
    const Appearance      = 'themes.php'                       ;
    const Plugins         = 'plugins.php'                      ;
    const Users           = 'users.php'                        ;
    const Tools           = 'tools.php'                        ;
    const Settings        = 'options-general.php'              ;
    const NetworkSettings = 'settings.php'                     ;

    public function __construct (string $path)
    {
        $self                   = &$this;
        $self->m_file_path      =   file_exists   ($path)  ? $path : wp_die ('plugin file not found!');
        $self->m_dir            =   dirname       ($self->m_file_path);
        $self->m_meta           =   get_file_data ($path   , $self->m_meta,  'plugin');
        $self->m_meta['Prefix'] =   str_replace   ('-', '_', $self->TextDomain);

        if (function_exists ($widgets = $self->Prefix . '_widgets'))
            add_action ('widgets_init', $widgets);

        add_action ('init', function () use ($self)
        {
            static $func_names = array(
                '_activate'  ,
                '_deactivate',
                '_uninstall');

            load_plugin_textdomain ($self->TextDomain, false, $self->dir () . $self->DomainPath);

            foreach ($func_names as $name)
            {
                if (function_exists ($name =  $self->Prefix      . $name))
                    register_activation_hook ($self->file_path (), $name);
            }

            if (function_exists ($main = $self->Prefix . '_main')) $main ();
        });
    }

    public function   file_path () { return $this->m_file_path  ; }
    public function   dir       () { return $this->m_dir        ; }
    public function   get  ($item) { return $this->m_meta[$item]; }
    public function __get  ($item) { return $this->m_meta[$item]; }
    public function __toString  () { return $this->TextDomain   ; }

    private function add_options (array $options)
    {
        while (($cur_val = current ($options)) !== FALSE)
        {
            add_option (key ($options), $cur_val);
            next ($options);
        }
    }

    public function remove_options (array $options)
    {
        while (current ($options) !== FALSE)
        {
            delete_option (key ($options));
            next ($options);
        }
    }

    public function add_settings (string $id, array& $settings)
    {
        foreach ($settings as $key => $value)
        {
        }
    }

    public function remove_settings ($settings)
    {
    }

    public function add_backend_page (string $parent_item,
                                      string $id,
                                      string $title,
                                             $load_func,
                                      string $template_file = '',
                                      string $capabilities  = 'manage_options')
    {
        $self = &$this;

        add_action ('admin_menu', function () use ($self,
                                                   $parent_item,
                                                   $id,
                                                   $title,
                                                   $template_file,
                                                   $load_func,
                                                   $capabilities)
        {
            switch ($parent_item)
            {
            case self::Dashboard : case self::Posts   : case self::Media          :
            case self::Pages     : case self::Comments: case self::CustomPostTypes:
            case self::Appearance: case self::Plugins : case self::Users          :
            case self::Tools     : case self::Settings: case self::NetworkSettings:
                break;
            default:
                break;
            }

            $page = new AdminPage ($self->TextDomain . '-' . $id, $title);

            $page_id = add_submenu_page ($parent_item ,
                                         $title       . ' - ' . $self->Title,
                                         $page->Title ,
                                         $capabilities,
                                         $page->TextDomain,
                                         function () use (&$page, $template_file, $capabilities)
            {
                // check user capabilities
                if (!current_user_can ($capabilities))
                    wp_die(__('You do not have sufficient permissions to access this page.'));
                ?>
                <div class="wrap" data-search="<?php _admin_search_query (); ?>">
                    <?php if (file_exists ($template_file)) include $template_file;
                          else wp_die ('Template file ' . $template_file . ' not found!'); ?>
                </div>
                <?php
            });

            if ($page_id)
                add_action ('load-' . $page_id, function () use ($load_func, &$page)
                {
                    $load_func ($page);
                });
        });
    }

    public function remove_backend_page (string $menu_slug, string $id)
    {
        remove_submenu_page ($menu_slug, $self->TextDomain . '-' . $id);
    }
};

?>
