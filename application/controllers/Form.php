<?php
class Form extends CI_Controller
{

    function __construct()
    {
        $this->load->model('form_model');
        parent::__construct();
    } 
   function index()
   {
       $data["order_list"]= $this->form_model->get_all();
       $this->load->view("order",$data);
   }
    public function form_show()
    {
        $this->load->view("order");
    }

    public function data_submitted()
    {
        
        $data = array(
            'user_name' => $this->input->post('user_name'),
            'order_desc' => $this->input->post('order_desc')
        );
        $this->form_model->creat($data);
    }
}
