<?php

class User_model extends CI_Model
{

  public function getmentors($course)
  {
    $mentor_role_id = 2;
    return $this->db->get_where('user', ['role_id' => $mentor_role_id, 'course_id' => $course])->result_array();
  }

  public function add($data, $profile)
  {
    $filter_data = array(
      'full_name' => $data['username'],
      'username' => $data['email'],
      'email' => $data['email'],
      'password' => $data['password'],
      'state_id' => $data['state_id'],
      'city_id' => $data['city_id'],
      'course_id' => $data['course_id'],
      'landmark' => $data['landmark'],
      'profile' => $profile,
      'role_id' => $data['role_id'],
      'phone' => $data['phone_no'],
      'passing_year' => isset($data['passing_year']) ? $data['passing_year'] : null,
    );
    $this->db->insert('user', $filter_data);
    return $this->db->insert_id();
  }


  public function login($data)
  {
    return $data = $this->db->get_where('user', ['email' => $data['username'], 'password' => $data['password'], 'role_id' => 3])->row_array();
  }

  public function get($user_id)
  {
    return $this->db->get_where('user', ['user_id' => $user_id])->row_array();
  }
  public function is_online($data)
  {
    $this->db->set('is_online', 1);
    $this->db->where('user_id', $data['user_id']);
    $this->db->update('user');
  }
  public function is_offline($id)
  {
    $this->db->set('is_online', 0);
    $this->db->where('user_id', $id);
    $this->db->update('user');
  }
  public function updateUserIsOnLine()
  {
    $item_arr = ['is_online'];
    $data['is_online'] = 1;
    $filter_data = elements($item_arr, $data);
    return $this->db->update('user', $filter_data, ['user_id' => $this->session->userdata['user_id']]);
  }
  public function TrailEntry($user_id)
  {
    $data = $this->db->get_where('user', ['user_id' => $user_id])->row_array();
    $old_date = $data['created_at'];
    $next_due_date = date('Y-m-d', strtotime($old_date . ' +30 days'));

    $update = array(
      'payment_id' => 1,
      'user_id' => $user_id,
      'renew_on' => $data['created_at'],
      'trail_period' => 0,
      'package_id' => 0,
      'starting_on' => $data['created_at'],
      'ending_on' => $next_due_date
    );
    $res = $this->db->insert('sub_status', $update);
  }
  public function is_subscribe($data)
  {
    $res = $this->db->get_where('sub_status', ['user_id' => $data['user_id']])->row_array();
    if (!empty($res)) {
      $end_date = strtotime($res['ending_on']);
      $today = strtotime(date('Y-m-d'));
      if ($end_date >= $today) {
        return 0;
      } else {
        return 1;
      }
    } else {
      return 1;
    }
  }
}
