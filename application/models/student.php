<?php
Class Student extends CI_Model
{
  	function student_show_record()
    {
      $query = $this->db->get('pto_students');
      return $query->result();

    }
	function update_student($id, $data)
	{
		$this->db->where('student_id', $id);
		$this->db->update('pto_students', $data);
		
	}
	function delete_student($id)
    {
          $this->db->where('student_id', $id);
          $this->db->delete('pto_students');
		 
    }
	function add_student($data)
	{
	     $this->db->insert('pto_students', $data);
	}


	
}
?>