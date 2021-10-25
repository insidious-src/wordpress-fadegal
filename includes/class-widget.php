<?php namespace WP; defined ('ABSPATH') or die ('Access denied!');

require_once 'xml.php';

class WidgetFormText extends \XML\Element
{
};

// =====================================================

class WidgetFormNumber extends \XML\Element
{
};

// =====================================================

class WidgetFormCombo extends \XML\Element
{
};

// =====================================================

class WidgetFormCheck extends \XML\Element
{
};

// =====================================================

class WidgetFormRadio extends \XML\Element
{
};

// =====================================================

class Widget extends \WP_Widget
{
    private $m_default_settings = array();
    private $m_tpl_file         = ''     ;
    private $m_meta             = array(
            'WidgetID'          => 'Widget ID'  ,
            'WidgetClass'       => 'Widget Class'
            );

    public function __construct (string $tpl_file,
                                 string $name    ,
                                 string $desc    ,
                                 array& $settings = array())
    {
        $this->m_meta = get_file_data ($tpl_file, $this->m_meta);

        parent::__construct ($this->WidgetID, $name, array(
            'description'                 => $desc,
            'classname'                   => $this->m_meta['WidgetClass'] ?
                                             $this->WidgetClass :
                                             $this->m_meta['WidgetClass'] =
                                                'widget_' . $this->WidgetID,
            'customize_selective_refresh' => true
            ));

        $this->m_default_settings = $settings;
        $this->m_tpl_file         = $tpl_file;
    }

    public function __get ($item)
    {
        switch ($item)
        {
        case 'Defaults':
            return $this->m_default_settings;
        case 'TemplateFile':
            return $this->m_tpl_file;
        default:
            return $this->m_meta[$item];
        }
    }

    /**
     * Outputs the options form on admin
     *
     * @param array $instance The widget options
     */
    public function form ($instance)
    {
        // if there are no modified options use the default ones
        $instance = wp_parse_args ($instance, $this->Defaults);

        if (file_exists ($this->TemplateFile)) include $this->TemplateFile;
        else wp_die ('Widget template file ' . $this->TemplateFile . ' not found!');
    }

    public function active_instances (string& $sidebar = '')
    { return $sidebar === '' ? get_option ('widget_' . $this->WidgetID) : array(); }

    public function get_field_attr   (string $field)
    { return 'id="'     . $this->get_field_id   ($field) .
             '" name="' . $this->get_field_name ($field) . '"'; }

    public function update ($new_instance, $old_instance)
    {
        $instance = $old_instance;
        $unset    = array_diff ($instance, $new_instance);

        foreach ($unset as $key => $value)
            $instance[$key] = (bool) $new_instance[$key];

        foreach ($new_instance as $key => $value)
        {
            switch ($value)
            {
            case 'on':
                $instance[$key] = true;
                break;
            default:
                $instance[$key] = $value;
                break;
            }
        }

        return $instance;
    }
};
