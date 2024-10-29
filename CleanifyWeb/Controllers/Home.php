<?php
class Home extends Controller
{
    public function __construct() {
        parent::__construct();
        session_start();
    }
    //vista about
    public function index()
    {
        $data['title'] = 'Pagina Principal';
        $this->views->getView('home', "index", $data);
    }
   
      
    
    
    
}