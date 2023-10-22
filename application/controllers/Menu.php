<?php
class Menu extends CI_Controller
{

    public function index()

    {

        $this->load->view('view_input_menu');
    }

    public function cetak()
    {
        $this->form_validation->set_rules('kode', 'Kode Menu', 'required|min_length[3]', [
            'required' => 'Kode Menu Harus diisi',
            'min_length' => 'Kode terlalu pendek'
        ]);

        $this->form_validation->set_rules('nama', 'Nama Menu', 'required|min_length[3]', [
            'required' => 'Nama Menu Harus diisi',
            'min_length' => 'Nama terlalu pendek'
        ]);

        $this->form_validation->set_rules('harga', 'Harga Menu', 'required|min_length[3]', [
            'required' => 'Harga Menu Harus diisi',
            'min_length' => 'Harga terlalu pendek'
        ]);

        if ($this->form_validation->run() != true) {
            $this->load->view('view_input_menu');
        } else {
            $data = [
                'kode' => $this->input->post('kode'),
                'nama' => $this->input->post('nama'),
                'harga' => $this->input->post('harga'),
                'gambar' => $this->input->post('gambar')
            ];

            $this->load->view('view_output_menu', $data);
        }
    }
}