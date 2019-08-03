<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Blog_model extends CI_model {



/*
|------------------------------------------------
|    save  data to blog_tbl
|------------------------------------------------
*/
    public function save_new_post($savedata)
    {
        $this->db->insert('blog_tbl',$savedata);
    }

/*
|------------------------------------------------
|    get all post data form blog_tbl
|------------------------------------------------
*/
    public function get_all_post()
    {
         $result = $this->db->select('*')
              ->from('blog_tbl')
              ->get()
              ->result(); 
          return $result;    
    }

    public function get_post_by_id($id)
    {
      return $resutl = $this->db->select('*')->from('blog_tbl')->where('id',$id)->get()->row();
    }

    public function save_update_post($savedata,$id)
    {
      $this->db->where('id',$id)->update('blog_tbl',$savedata);
    }

}    