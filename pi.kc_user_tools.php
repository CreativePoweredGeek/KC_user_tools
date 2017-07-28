<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kc_user_tools {

    public function full_name() {
		$str = ee()->session->userdata('member_id');
		ee()->db->select('m_field_id_1, m_field_id_2');
		ee()->db->where('member_id', $str);
		$query = ee()->db->get('exp_member_data');
		$row = $query->row();
		return  $row -> m_field_id_1.' '.$row -> m_field_id_2;
	}
	
	public function last_name() {
		$str = ee()->session->userdata('member_id');
		ee()->db->select('m_field_id_2');
		ee()->db->where('member_id', $str);
		$query = ee()->db->get('exp_member_data');
		$row = $query->row();
		return $row -> m_field_id_2;
	}
	
	public function first_name() {
		$str = ee()->session->userdata('member_id');
		ee()->db->select('m_field_id_1');
		ee()->db->where('member_id', $str);
		$query = ee()->db->get('exp_member_data');
		$row = $query->row();
		return $row -> m_field_id_1;
	}
}

/* End of file pi.plugin_name.php */
/* Location: ./system/user/addons/plugin_name/pi.plugin_name.php */