<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	var $computingId = NULL;

	function __construct()
    {
    	parent::__construct();

    	//Setup the CAS Authentication and Access Control.
        $this->load->library('cas');
		$this->cas->force_auth();
    	$user = $this->cas->user();
    	$this->computingId = $user->userlogin;

    	$this->load->model('User_access');
    	
    	if( !$this->User_access->canAccess() ){
			echo "You (".$this->computingId.") do not have the permission to access this page.";
			exit();
		}

		//Load other Libraries and Models
		$this->load->database();
		$this->load->model('Survey_model');
    	$this->load->library('table');
    }

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data['siteTitle'] 		= "The Agile Project";
		$data['title'] 			= $data['siteTitle']." - Admin";
		$data['user']			= $this->computingId;
		
		//==Format Data for the Result Page==

		$data['q1_result'] = $this->Survey_model->getPartOneResults('q1_radio');
		$data['q2_result'] = $this->Survey_model->getPartOneResults('q2_radio');
		$data['q3_result'] = $this->Survey_model->getPartOneResults('q3_radio');
		$data['q4_result'] = $this->Survey_model->getPartOneResults('q4_radio');
		$data['q6_result'] = $this->Survey_model->getPartOneResults('q6_radio');

		//Question 5
		$data['q5a_result'] = $this->Survey_model->getEntries_q5('q5a_radio');
		$data['q5b_result'] = $this->Survey_model->getEntries_q5('q5b_radio');
		$data['q5c_result'] = $this->Survey_model->getEntries_q5('q5c_radio');
		$data['q5d_result'] = $this->Survey_model->getEntries_q5('q5d_radio');
		$data['q5e_result'] = $this->Survey_model->getEntries_q5('q5e_radio');
		$data['q5f_result'] = $this->Survey_model->getEntries_q5('q5f_radio');

		//Generate the table for question 7
		$tmpl = array ( 'table_open'  => '<table class="table table-striped">' );
		$this->table->set_template($tmpl);
		$data['q7_table'] = $this->table->generate( $this->Survey_model->getSubEntries_q7() );

		//Load the views
		$this->load->view('admin/include/header', $data);
		$this->load->view('admin/main_view', $data);
		$this->load->view('admin/include/footer');

	}

	public function partOne()
	{
		$data['siteTitle'] 		= "The Agile Project";
		$data['title'] 			= $data['siteTitle']." - Part Two Responses";
		$data['user']			= $this->computingId;

		//Generate the table
		$tmpl = array ( 'table_open'  => '<table class="table table-striped">' );
		$this->table->set_template($tmpl);
		$data['table'] = $this->table->generate( $this->Survey_model->getEntries() );

		if( !$this->User_access->canAccess() ){
			echo "You (".$data['user'].") do not have the permission to access this page.";
		}
		else {
			$this->load->view('admin/include/header', $data);
			$this->load->view('admin/partOne_view', $data);
			$this->load->view('admin/include/footer');
		}		
	}

	public function partTwo()
	{
		$data['siteTitle'] 		= "The Agile Project";
		$data['title'] 			= $data['siteTitle']." - Part Two Responses";
		$data['user']			= $this->computingId;

		//Generate the table
		$tmpl = array ( 'table_open'  => '<table class="table table-striped">' );
		$this->table->set_template($tmpl);
		$data['part2q01_table'] = $this->table->generate( $this->Survey_model->getSubEntries('part2q01') );
		$data['part2q02_table'] = $this->table->generate( $this->Survey_model->getSubEntries('part2q02') );
		$data['part2q03_table'] = $this->table->generate( $this->Survey_model->getSubEntries('part2q03') );
		$data['part2q04_table'] = $this->table->generate( $this->Survey_model->getSubEntries('part2q04') );
		$data['part2q05_table'] = $this->table->generate( $this->Survey_model->getSubEntries('part2q05') );
		$data['part2q06_table'] = $this->table->generate( $this->Survey_model->getSubEntries('part2q06') );
		$data['part2q07_table'] = $this->table->generate( $this->Survey_model->getSubEntries('part2q07') );
		$data['part2q08_table'] = $this->table->generate( $this->Survey_model->getSubEntries('part2q08') );
		$data['part2q09_table'] = $this->table->generate( $this->Survey_model->getSubEntries('part2q09') );
		$data['part2q10_table'] = $this->table->generate( $this->Survey_model->getSubEntries('part2q10') );
		$data['part2q11_table'] = $this->table->generate( $this->Survey_model->getSubEntries('part2q11') );
		$data['part2q12_table'] = $this->table->generate( $this->Survey_model->getSubEntries('part2q12') );
		$data['part2q13_table'] = $this->table->generate( $this->Survey_model->getSubEntries('part2q13') );
		$data['part2q14_table'] = $this->table->generate( $this->Survey_model->getSubEntries('part2q14') );

		if( !$this->User_access->canAccess() ){
			echo "You (".$data['user'].") do not have the permission to access this page.";
		}
		else {
			$this->load->view('admin/include/header', $data);
			$this->load->view('admin/partTwo_view', $data);
			$this->load->view('admin/include/footer');
		}		
	}

	public function maillist()
	{
		$data['siteTitle'] 		= "The Agile Project";
		$data['title'] 			= $data['siteTitle']." - Maillist";
		$data['user']			= $this->computingId;

		//Generate the table
		$tmpl = array ( 'table_open'  => '<table class="table table-striped">' );
		$this->table->set_template($tmpl);
		$data['maillist_table'] = $this->table->generate( $this->Survey_model->getSubEntries('emailAddress') );

    	if( !$this->User_access->canAccess() ){
			echo "You (".$data['user'].") do not have the permission to access this page.";
		}
		else {
			$this->load->view('admin/include/header', $data);
			$this->load->view('admin/maillist_view', $data);
			$this->load->view('admin/include/footer');
		}
	}

	public function system()
	{
		$data['siteTitle'] 		= "The Agile Project";
		$data['title'] 			= $data['siteTitle']." - System Configurations";
		$data['user']			= $this->computingId;

		if( !$this->User_access->canAccess() ){
			echo "You (".$data['user'].") do not have the permission to access this page.";
		}
		else {
			$this->load->view('admin/include/header', $data);
			echo '<h1 class="page-header">Under Construction.</h1>';
			$this->load->view('admin/include/footer');
		}		
	}

	public function export($table_name)
	{
		//Get the Table from Database
		
		$query = $this->db->get($table_name);

		//load our new PHPExcel library
		$this->load->library('excel');
		//activate worksheet number 1
		$this->excel->setActiveSheetIndex(0);
		//name the worksheet
		$this->excel->getActiveSheet()->setTitle($table_name);
		
		// Field names in the first row
        $fields = $query->list_fields();
        $col = 0;
        foreach ($fields as $field)
        {
            $this->excel->getActiveSheet()->setCellValueByColumnAndRow($col, 1, $field);
            $col++;
        }
        // Fetching the table data
        $row = 2;
        foreach($query->result() as $data)
        {
            $col = 0;
            foreach ($fields as $field)
            {
                $this->excel->getActiveSheet()->setCellValueByColumnAndRow($col, $row, $data->$field);
                $col++;
            }
            $row++;
        }
		 
		$filename='export_'.$table_name.'.xls'; //save our workbook as this file name
		header('Content-Type: application/vnd.ms-excel'); //mime type
		header('Content-Disposition: attachment;filename="'.$filename.'"'); //tell browser what's the file name
		header('Cache-Control: max-age=0'); //no cache
		             
		//save it to Excel5 format (excel 2003 .XLS file), change this to 'Excel2007' (and adjust the filename extension, also the header mime type)
		//if you want to save it as .XLSX Excel 2007 format
		$objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel5');  
		//force user to download the Excel file without writing it to server's HD
		$objWriter->save('php://output');
	}
}

/* End of file admin.php */
/* Location: ./application/controllers/admin.php */