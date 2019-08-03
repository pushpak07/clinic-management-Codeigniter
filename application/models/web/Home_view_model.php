<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home_view_model extends CI_model {



/*
|--------------------------------------
|   get home view setup data
|--------------------------------------
*/ 
    public function Home_satup()
    {
        $result = $this->db->select('*')
            ->from('web_pages_tbl')
            ->where('status',1)
            ->get()
            ->result(); 
        $info = null;
        foreach ($result as $value) {
            $info[$value->name] = (object)[
                'id'       => $value->id,
                'name'     => $value->name,
                'details'  => $value->details,
                'sequence' => $value->sequence,
                'date'     => $value->date,
                'icon'     => $value->icon,
                'picture'  => $value->picture,
                'head_line'=> $value->head_line,
                'status'   => $value->status
            ];
        } 
        return (object)$info;
    }

/*
|--------------------------------------
|   get slider data
|--------------------------------------
*/ 
    public function Slider()
    {
        $result = $this->db->select('*')
        ->from('slider')
        ->order_by('sequence','asc')
        ->get()
        ->result();
        return $result;
    }


/*
|--------------------------------------
|   get schedule list
|--------------------------------------
*/ 
    public function shedule_by_doctor(){
        return $this->db->select('schedul_setup_tbl.*,venue_tbl.*')
            ->from('schedul_setup_tbl')
            ->join('venue_tbl','venue_tbl.venue_id = schedul_setup_tbl.venue_id')
            ->where('schedul_setup_tbl.visibility',1)
            ->order_by('day','asc')
            ->get()
            ->result();
    }

    public function doctor_info()
    {
        $query = $this->db->select('*')
        ->from('doctor_tbl')
        ->get();
        
        if ($query->num_rows() == 1) {
            return $query->row();
        } else {
            return false;
        }
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
              ->where('post_category',1)
              ->order_by('id','DESC')
              ->get()
              ->result_array(); 
          
          $i = 1;
          foreach ($result as  $value) {
             $P['title'.$i] = $value['title'];
             $P['details'.$i] = $value['details'];
             $P['picture'.$i] = $value['picture'];
             $P['id'.$i] = $value['id'];
             $P['post_date'.$i] = $value['post_date'];
            $i++;
          }
          return $P;  
    } 


/*
|------------------------------------------------
|    get all post data form blog_tbl
|------------------------------------------------
*/
    public function get_all_testimonial()
    {
         $result = $this->db->select('*')
              ->from('blog_tbl')
              ->where('post_category',2)
              ->order_by('id','DESC')
              ->get()
              ->result_array(); 

          $i = 1;
          $T = array();
          foreach ($result as  $value) {
             $T['title'.$i] = $value['title'];
             $T['details'.$i] = $value['details'];
             $T['picture'.$i] = $value['picture'];
            $i++;
          }
          return $T;
          
    }  

      


    

}       