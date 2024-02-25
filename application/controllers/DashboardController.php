<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DashboardController extends CI_Controller
{

    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        if (!$this->session->userdata('logged_in')) {
            redirect('login');
        }
    }


    public function index()
	{

        // $curl = curl_init();

        // curl_setopt_array($curl, array(
        // CURLOPT_URL => 'https://www.deckofcardsapi.com/api/deck/new/draw/?count=1',
        // CURLOPT_RETURNTRANSFER => true,
        // CURLOPT_ENCODING => '',
        // CURLOPT_MAXREDIRS => 10,
        // CURLOPT_TIMEOUT => 0,
        // CURLOPT_FOLLOWLOCATION => true,
        // CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        // CURLOPT_CUSTOMREQUEST => 'GET',
        // ));

        // $response = curl_exec($curl);

        // curl_close($curl);

        // $response = json_decode($response, true);

        // $curl = curl_init();

        // curl_setopt_array($curl, array(
        //   CURLOPT_URL => 'https://192.168.162.12/payment/pay_without_ref',
        //   CURLOPT_RETURNTRANSFER => true,
        //   CURLOPT_ENCODING => '',
        //   CURLOPT_MAXREDIRS => 10,
        //   CURLOPT_TIMEOUT => 0,
        //   CURLOPT_FOLLOWLOCATION => true,
        //   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        //   CURLOPT_CUSTOMREQUEST => 'POST',
        //   CURLOPT_POSTFIELDS =>'{
        //     "info": {
        //         "user": "jeraldtc@yahoo.com",
        //         "posted_by": "jerald",
        //         "branch": "20325"
        //     },
        //     "payment": {
        //         "first_name": "Jerald",
        //         "middle_name": "Jerald",
        //         "last_name": "Jerald",
        //         "email": "jerald@clearmindai.com",
        //         "mobile_no": "09999999999",
        //         "amount": "100",
        //         "total_amount": "100",
        //         "remarks": "UAT Payment"
        //     },
        //     "order_no": "KJQMJM84",
        //     "OR_no": "USSC123"
        // }',
        //   CURLOPT_HTTPHEADER => array(
        //     'Content-Type: application/json',
        //     'Authorization: Basic Og=='
        //   ),
        // ));
        
        // $response = curl_exec($curl);
        
        // curl_close($curl);
        // $response = json_decode($response, true);

        // var_dump($response);

        if ($this->session->userdata('logged_in')) {
            $data['first_name'] = $this->session->userdata('first_name');
            $data['last_name'] = $this->session->userdata('last_name');
            $data['birthdate'] = $this->session->userdata('birthdate');
            $data['gender'] = $this->session->userdata('gender');
            $data['email'] = $this->session->userdata('userEmail');
            $this->load->view('dashboard', $data);
        } else {
            redirect('login');
        }

	}

}