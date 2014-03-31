<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Survey extends CI_Controller {

	public function index()
	{
		$this->load->helper(array('form', 'url'));

		$this->load->model('Survey_model');

		$this->load->library('session');

		$data['styleSheets'] 	= array('survey.css');
		$data['javaScript'] 	= array('survey.js');
		$data['siteTitle'] 		= "The Agile Project";
		$data['title'] 			= $data['siteTitle']." - Survey";

//=== PART ONE FORM ===
		if( $this->input->post('consent') ) {
			$this->load->view('include/header', $data);
			$this->load->view('surveyPart1_view');
		}
//=== PART ONE Confirm ===
		else if( $this->input->post('toPartOneConfirm') ) {

			//==Validation
			$this->load->library('form_validation');

			$this->form_validation->set_error_delimiters('<div class="error" style="color:red;">', '</div>');
			$this->form_validation->set_rules('q1_radio', 'Question 1', 'required');
			$this->form_validation->set_rules('q2_radio', 'Question 2', 'required');
			$this->form_validation->set_rules('q3_radio', 'Question 3', 'required');
			$this->form_validation->set_rules('q4_radio', 'Question 4', 'required');
			$this->form_validation->set_rules('q5a_radio', 'Question 5', 'required');
			$this->form_validation->set_rules('q5b_radio', 'Question 5', 'required');
			$this->form_validation->set_rules('q5c_radio', 'Question 5', 'required');
			$this->form_validation->set_rules('q5d_radio', 'Question 5', 'required');
			$this->form_validation->set_rules('q5e_radio', 'Question 5', 'required');
			$this->form_validation->set_rules('q5f_radio', 'Question 5', 'required');
			$this->form_validation->set_rules('q6_radio', 'Question 6', 'required');

			//==Load Views
			$this->load->view('include/header', $data);

			//==Debug
			//$data['debug'] = $this->input->post();

			//==IF Invalid
			if ($this->form_validation->run() == FALSE) {
				$this->load->view('surveyPart1_view');
			}
			//==IF Valid
			else {

				//==Insert in to DB==
				
				$db_data = array(
					'ip_address'=> $this->input->ip_address(),
					'q1_radio' 	=> $this->input->post('q1_radio'),
					'q2_radio' 	=> $this->input->post('q2_radio'),
					'q3_radio' 	=> $this->input->post('q3_radio'),
					'q4_radio' 	=> $this->input->post('q4_radio'),
					'q5a_radio' => $this->input->post('q5a_radio'),
					'q5b_radio' => $this->input->post('q5b_radio'),
					'q5c_radio' => $this->input->post('q5c_radio'),
					'q5d_radio' => $this->input->post('q5d_radio'),
					'q5e_radio' => $this->input->post('q5e_radio'),
					'q5f_radio' => $this->input->post('q5f_radio'),
					'q6_radio' 	=> $this->input->post('q6_radio'),
				);

				$insert_id = $this->Survey_model->addEntriesPartOne($db_data);

				$this->session->set_userdata('entry_id', $insert_id);

				//Add the Multi-entry Q7
				$q7_data = NULL;
				foreach ($_POST as $key=>$value){
					if(substr($key, 0, 7) == "q7_list"){
						$q7_data[] = $value;
					}
				}

				$this->Survey_model->addEntriesQ7($q7_data,$insert_id);

				//==Format Data for the Result Page==

				$data['q1_result'] = $this->Survey_model->getPartOneResults('q1_radio');
				$data['q1_answer'] = $this->input->post('q1_radio');

				$data['q2_result'] = $this->Survey_model->getPartOneResults('q2_radio');
				$data['q2_answer'] = $this->input->post('q2_radio');

				$data['q3_result'] = $this->Survey_model->getPartOneResults('q3_radio');
				$data['q3_answer'] = $this->input->post('q3_radio');

				$data['q4_result'] = $this->Survey_model->getPartOneResults('q4_radio');
				$data['q4_answer'] = $this->input->post('q4_radio');

				$data['q6_result'] = $this->Survey_model->getPartOneResults('q6_radio');
				$data['q6_answer'] = $this->input->post('q6_radio');


				if( $this->input->post('q3_radio') != '100% traditional' ){
					$data['continueToPart2'] = TRUE;
				}
				else {
					$data['continueToPart2'] = FALSE;
				}

				$this->load->view('surveyPart1_confirm_view', $data);
			}

			
		} 
//=== PART TWO Form ===
		else if( $this->input->post('toPartTwo') ) {
			$this->load->view('include/header', $data);
			$this->load->view('surveyPart2_view');
		}
//=== PART TWO Confirm ===
		else if( $this->input->post('toPartTwoConfirm') ) {

			//Submit Part II Response
			foreach ($_POST as $key=>$value){
				if( substr($key, 0, 5) == "part2" && strlen($value) > 0 ){
					$this->Survey_model->saveEntryFollowUpQuestions(
						$key,
						$value, 
						'submitted', 
						$this->session->userdata('entry_id'));
				}
			}

			$this->load->view('include/header', $data);
			$this->load->view('surveyPart2_confirm_view');
		}
//=== CONCENT FORM ===
		else {
			$data['title'] = $data['siteTitle']." - Informed Consent";
			$this->load->view('include/header', $data);
			$this->load->view('ethicForm_view');
		}
		
		$this->load->view('include/footer');
	}

	/**
	 *	AJAX page for signing up with Email. Accept a POST variable: emailAddress. Return JSON msg
	 */
	public function signUpForReport()
	{
		$this->load->helper(array('form', 'url'));
		$this->load->model('Survey_model');
		$this->load->library('session');

		if( filter_var($this->input->post('emailAddress'), FILTER_VALIDATE_EMAIL) ) {

			$this->Survey_model->addEmailForReport( $this->input->post('emailAddress') , $this->session->userdata('entry_id'));

			echo json_encode(array('result' => TRUE));
		}
		else {
			echo json_encode(array('result' => FALSE));
		}

	}

	/**
	 *	AJAX page for saving follow-up questions
	 */
	public function saveFollowUpQuestions()
	{
		$this->load->helper(array('form', 'url'));
		$this->load->model('Survey_model');
		$this->load->library('session');

		if( strlen( $this->input->post('response') ) > 0 ) {
			$this->Survey_model->saveEntryFollowUpQuestions(
				$this->input->post('questionId'),
				$this->input->post('response'), 
				'saved', 
				$this->session->userdata('entry_id'));
			echo json_encode( array('result' => TRUE, 'questionId' => $this->input->post('questionId'),  'response' => $this->input->post('response')) );
		} else {
			echo json_encode( array('result' => FALSE, 'questionId' => $this->input->post('questionId'),  'response' => $this->input->post('response')) );
		}

		
	}
}

/* End of file Survey.php */
/* Location: ./application/controllers/surveyPart1.php */