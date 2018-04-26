<?php namespace XML; defined ('ABSPATH') or die ('Access denied!');

class Element
{
    private static $m_tab_size = 4      ;
    private        $m_data     = array();
    private        $m_children = array();
    private        $m_name     = string ;

    public function __get ($item)
    { return isset ($this->m_data[$item]) ? $this->m_data[$item] : null; }

    public function __construct (string $name, array& $properties, array& $children = array())
    {
        $this->m_name      = $name      ;
        $this->m_data     += $properties;
        $this->m_children += $children  ;
    }

    public function __invoke ()
    {
        $output = '<' . $this->m_name;

        foreach ($this->m_data as $key => $value)
            $output .= ' ' . $key . '="' . $value . '"';

        return $this->m_children ?
               $output . '>' . $this->_output_children () . '</' . $this->m_name . '>' :
               $output . '>';
    }

    private function _output_children ()
    {
        $output;

        foreach ($this->m_children as $child) $output .= $child ();
        return   $output;
    }
};

// =====================================================

?>
