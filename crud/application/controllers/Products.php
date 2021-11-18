<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller{
    
    function  __construct(){
        parent::__construct();
        
        // Load cart library
        $this->load->library('cart');
        
        // Load product model
        $this->load->model('M_Product');
    }
    
    function index(){
        $data = array();
        
        // Fetch products from the database
        $data['products'] = $this->M_Product->getRows();
        
        // Load the product list view
        $this->load->view('products/index', $data);
    }
    
    function addToCart($proID){
        
        // Fetch specific product by ID
        $M_Product = $this->M_Product->getRows($proID);
        
        // Add product to the cart
        $data = array(
            'id'    => $M_Product['id'],
            'qty'    => 1,
            'price'    => $M_Product['price'],
            'name'    => $M_Product['name'],
            'image' => $M_Product['image']
        );
        $this->cart->insert($data);
        
        // Redirect to the cart page
        redirect('cart/');
    }
    
}