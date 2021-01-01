<?php 
use GuzzleHttp\Client;

class Mobil_model extends CI_model {
    
    private $_client;
    public function __construct()
    {
        $this->_client = new Client([
            'base_uri' => 'http://localhost:8080/rest-ci/index.php/rental',
           
         ]);
    }


    public function getAllCar()
    {
       
        $response = $this->_client->request('GET', 'rental', [
            'query' => [
                'X-API-KEY' => '123456'
            ]
        ]);
        $result = json_decode($response->getbody()->getContents(), true);

        return $result['data'];
    }

    public function getCarById($No_mobil)
    {
        $response = $this->_client->request('GET', 'rental', [
            'query' => [
                'X-API-KEY' => '123456',
                'No_mobil' => $No_mobil
            ]
        ]);
        $result = json_decode($response->getbody()->getContents(), true);

        return $result['data'][0];
       
    }


    public function tambahDataMobil()
    {
   
        $data = [
            
            'No_polisi' =>$this->input->post('No_polisi', true),
            'Nama_mobil' =>$this->input->post('Nama_mobil', true),
            'Warna' =>$this->input->post('Warna', true),
            'Harga_sewa' =>$this->input->post('Harga_sewa', true),
            'X-API-KEY' => '123456'
        ];
        $response = $this->_client->request('POST', 'rental', [
            'form_params' => $data]);
        $result = json_decode($response->getbody()->getContents(), true);

        return $result; 

     
    }

    public function hapusDataMobil($No_mobil)
    {
        $response = $this->_client->request('DELETE', 'rental', [
            'form_params' => [
                'No_mobil' => $No_mobil,
                'X-API-KEY' => '123456'
                
            ]
        ]);
        $result = json_decode($response->getbody()->getContents(), true);

        return $result;
        
        
     
    }

    

    public function ubahDataMobil()
    {
        $data = [
            'No_mobil' =>$this->input->post('No_mobil', true),
            'No_polisi' =>$this->input->post('No_polisi', true),
            'Nama_mobil' =>$this->input->post('Nama_mobil', true),
            'Warna' =>$this->input->post('Warna', true),
            'Harga_sewa' =>$this->input->post('Harga_sewa', true),
            'X-API-KEY' => '123456'
        ];

        $response = $this->_client->request('PUT', 'rental', [
            'form_params' => $data]);
        $result = json_decode($response->getbody()->getContents(), true);

        return $result; 

       
    }

    public function cariDataMobil()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('No_polisi', $keyword);
        $this->db->or_like('Nama_mobil', $keyword);
        $this->db->or_like('Warna', $keyword);
        $this->db->or_like('Harga_sewa', $keyword);
        return $this->db->get('mobil')->result_array();
    }
}