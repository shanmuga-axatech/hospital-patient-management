<?php

class Register_Model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function save($params)
	{
		$data = array();
		$data['status'] = false;
		$record = array();		
		if(!empty($params['dob'])) {			
			$date = explode('-', $params['dob']);
			$record['dob'] = $date[2].'-'.$date[1].'-'.$date[0];
		}
		$record['patient_no'] = $this->get_next_patientno();
		$record['first_name'] = $params['first_name'];
		$record['last_name'] = $params['last_name'];		
		$record['age'] = $params['age'];
		$record['sex'] = $params['sex'];
		$record['address1'] = $params['address1'];
		$record['address2'] = $params['address2'];
		$record['contact_no'] = $params['contact_no'];
		$record['aadhar_no'] = $params['aadhar_no'];
		$record['city'] = $params['city'];
		$record['remarks'] = $params['remarks'];
		$record['mtime'] = time();		
		if($this->db->insert('patients', $record)) {		
			$data['status'] = true;
			$data['data'] = $record;
			$data['msg'] = 'Patient details saved successfully.';
		}
		else {
			$data['msg'] = 'Failed to create patient details';
		}

		return $data;

	}

	private function update()
	{

	}

	public function get_next_patientno()
	{
		$sql = 'SELECT IFNULL(MAX(patient_no), 0) AS patient_no FROM patients';
		$result = $this->db->query($sql)->row();
		return $result->patient_no+1;
	}


}