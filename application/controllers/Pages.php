<?php
class Pages extends CI_Controller {

        public function view($page = 'home')


        {

              $this->load->helper('url_helper');

            if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
            {
                    // Whoops, we don't have a page for that!
                    show_404();
            }
    
            $data['title'] = ucfirst($page); // Capitalize the first letter
            
            $this->load->view('templates/header2', $data);
            $this->load->view('pages/'.$page, $data);
            $this->load->view('templates/footer', $data);
        }        
}