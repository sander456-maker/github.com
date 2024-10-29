<?php
class Principal extends Controller
{
    public function __construct() {
        parent::__construct();
        session_start();
    }
    //vista about
    public function index()
    {
        
    }
      //vista about
      public function about()
      {
          $data['title'] = 'Acerca de';
          $this->views->getView('principal', "about", $data);
      }
        //vista Shop
        public function Shop()
        {
            $data['title'] = 'Productos';
            $this->views->getView('principal', "shop", $data);
        }
        //vista detail
        public function detail($id_producto)
        {
            $data['title'] = '-----------';
            $this->views->getView('principal', "detail", $data);
        }
         //vista contacto
         public function contact()
         {
             $data['title'] = 'Contactos';
             $this->views->getView('principal', "contact", $data);
         }
      
    
    
    
}