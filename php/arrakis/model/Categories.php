<?php
namespace arrakis\model;

class Categories extends Model {
    
    public function __construct() {
        parent::__construct();
            
        $query = "SELECT id, name, image FROM categories;";
        parent::query($query);

        }
        
        
        public function getId()
        {
            return parent::get('id');  
        }
        public function getName()
        {
            return parent::get('name');  
        }
         public function getImage()
        {
            return parent::get('image');     
        }
    }
?>
