<?php require APPPATH . 'libraries/REST_Controller.php';     

class API extends CI_Controller {    

    public function __construct() {
       parent::__construct();
       $this->load->database();
    }
    
   public function all()
   {
       $list= $this->Dashboard_model->stu_chart();
       header('Content-Type: application/json');
       $lis=array();
       $i=0;
       foreach($list as $ls)
        {
            $i++;
            $lis[]=array('y'=>$ls->cs,'x'=>date('Y',strtotime($ls->stu_create_date)));
        }
       
       echo json_encode( $lis,JSON_NUMERIC_CHECK );
       
    }
     public function month()
   {
       $list= $this->Dashboard_model->stu_mnth();
       header('Content-Type: application/json');
       $lis=array();
       $i=0;
       foreach($list as $ls)
        {
            $i++;
            $lis[]=array('y'=>$ls->cs,'x'=>date('d M Y',strtotime($ls->stu_create_date)));
        }
       
       echo json_encode( $lis,JSON_NUMERIC_CHECK );
    }
     public function six_month()
   {
       $list= $this->Dashboard_model->stu_six_mnth();
       header('Content-Type: application/json');
       $lis=array();
       $i=0;
       foreach($list as $ls)
        {
            $i++;
            $lis[]=array('y'=>$ls->cs,'x'=>date('d M Y',strtotime($ls->stu_create_date)));
        }
       
       echo json_encode( $lis,JSON_NUMERIC_CHECK );
    }
    public function year()
   {
       $list= $this->Dashboard_model->stu_year();
       header('Content-Type: application/json');
       $lis=array();
       $i=0;
       foreach($list as $ls)
        {
            $i++;
            $lis[]=array('y'=>$ls->cs,'x'=>date('d M Y',strtotime($ls->stu_create_date)));
        }
       
       echo json_encode( $lis,JSON_NUMERIC_CHECK );
    }
}
?>