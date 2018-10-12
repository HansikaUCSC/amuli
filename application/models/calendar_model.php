<?php

class Calendar_Model extends CI_Model
{
	public function get_events($id, $start, $end)
	{
	    return $this->db->where("start_date >=", $start)->where("end_date <=", $end)->get("availability_status");
	}

	// public function add_event($data)
	// {
	//     $this->db->insert("calendar_events", $data);
	// }

	public function get_event($id)
	{
	    return $this->db->where("hs_id", $id)->get("availability_status");
	}

	// public function update_event($id, $data)
	// {
	//     $this->db->where("ID", $id)->update("calendar_events", $data);
	// }

	// public function delete_event($id)
	// {
	//     $this->db->where("ID", $id)->delete("calendar_events");
	// }
	
}

?>