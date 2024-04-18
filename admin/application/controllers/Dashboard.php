<?php 

class Dashboard extends CI_Controller{
    public function index(){
		$records = $this->db->select(['MONTHNAME(created_on) month', 'count(id) AS tot'])->group_by('month')->get('payment')->result_array();
		$chartData = '';
		foreach($records as $record) {
			$chartData .= "['".$record['month'] ."',". $record['tot']."],";
		}
        $data['page_name']='dashboard/index';
        $data['slug']='dashboard';
		$data['chart_data'] = substr($chartData, 0, -1);
        $this->load->view('include/template',$data);
    }
}


?>
