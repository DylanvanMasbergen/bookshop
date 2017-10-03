<?php
class Books_model extends CI_Model {
 
    public function __construct()
    {
        $this->load->database();
    }
    
    public function get_books($slug = FALSE)
    {
        if ($slug === FALSE)
        {
            $query = $this->db->get('books');
            return $query->result_array();
        }
 
        $query = $this->db->get_where('books', array('slug' => $slug));
        return $query->row_array();
    }
    
    public function get_books_by_id($id = 0)
    {
        if ($id === 0)
        {
            $query = $this->db->get('books');
            return $query->result_array();
        }
 
        $query = $this->db->get_where('books', array('id' => $id));
        return $query->row_array();
    }
    
    public function set_books($id = 0)
    {
        $this->load->helper('url');
 
        $slug = url_title($this->input->post('title'), 'dash', TRUE);
 
        $data = array(
            'title' => $this->input->post('title'),
            'slug' => $slug,
            'author' => $this->input->post('author'),
            'description' => $this->input->post('description'),
            'genre' => $this->input->post('genre'),
            'year' => $this->input->post('year')

        );
        
        if ($id == 0) {
            return $this->db->insert('books', $data);
        } else {
            $this->db->where('id', $id);
            return $this->db->update('books', $data);
        
    }
}
    
    public function delete_books($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('books');
    }
}