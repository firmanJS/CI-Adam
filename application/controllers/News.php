<?php

class News extends CI_Controller{
    function index()
    {
        $this->load->model('news_m','m_news');
        $data['people']=$this->m_news->get_data()->result();
        $this->load->view('news/index', $data);
        
    }
    function Show($id_people)
    {
        $this->load->model('news_m','m_news');
        $data['people']=$this->m_news->show_data($id_people)->result();
        $this->load->view('news/show', $data);
    }
    function Add()
    {
        $this->load->view('news/add');
    }
    function save()
    {
        $this->load->model('news_m','m_news');
        $data=array('nama'=>$this->input->post('nama'),
        'alamat'=>$this->input->post('alamat'),
        'hp'=>$this->input->post('hp'));
        $eksekusi=$this->m_news->save($data);
        if ($eksekusi==true){
            redirect('news');
        }

    }
    function update($id_people)
    {
        $this->load->model('news_m','m_news');
        $data=array('nama'=>$this->input->post('nama'),
        'alamat'=>$this->input->post('alamat'),
        'hp'=>$this->input->post('hp'));
        $eksekusi=$this->m_news->update_data($id_people, $data);
        if ($eksekusi==true){
            redirect('news');
        }

    }
}