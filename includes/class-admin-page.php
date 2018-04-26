<?php namespace WP; defined ('ABSPATH') or die ('Access denied!');

class AdminPage
{
    private $m_meta   = array();
    private $m_links  = array();
    private $m_screen = null   ;

    public function __construct ($slug, $title)
    {
        $this->m_meta['TextDomain'] = $slug ;
        $this->m_meta['Title']      = $title;
    }

    public function __get                    ($item) { return $this->m_meta[$item]; }
    public function   get_helper_links            () { return $this->m_links      ; }
    public function   add_helper_links (array $info) { $this->m_links += $info    ; }

    public function screen ()
    { return $this->m_screen ? $this->m_screen : $this->m_screen = get_current_screen (); }
};

?>
