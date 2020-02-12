<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct() {

		parent::__construct();

		if(!isset($this->session->isLogin)){
			redirect( base_url() );
		}
	
    }

	public function index()
	{
		$this->renderView('schedules');
	}

	public function drivers(){

		$this->renderView('drivers');
		
	}
	public function bus(){

		$this->renderView('bus');

	}


	public function renderView($viewName){

		$this->load->view('common/header');
		
			echo '<div class="container p-3 my-3 border">';
			echo '<div class="container p-3 my-3 border">
				<div class="jumbotron">
				 	<h2 class="text-1">Server Side</h2>
				</div>';

				$this->load->view('common/nav');
				$this->load->view('admin/'.$viewName);
			echo '</div>';
        $this->load->view('common/footer');

	}

	public function getTest(){

		header('Access-Control-Allow-Origin: *');

		echo '{
			"trips": [
				{
					"Id": 1,
					"Name": "DGTE to Bayawan",
					"Businfo": {
						"Busnumber" : "Bus# 0291",
						"Bustype" : "Bus Type: Air Conditioned"
					},
					"Userinfo": {
						"Driver" : "Mr. R.A. Valencia",
						"Age" : "31"
					},
					"Schedules": {
						"4:00 am" : "10/50",
						"5:30 am" : "15/50",
						"8:00 am" : "30/50",
						"12:45 pm" : "40/50",
						"4:30 pm" : "15/50",
						"8:00 pm" : "11/50"
					}
				},
				{
					"Id": 2,
					"Name": "DGTE to San Carlos",
					"Businfo": {
						"Busnumber" : "Bus# 0233",
						"Bustype" : "Bus Type: Air Conditioned"
					},
					"Userinfo": {
						"Driver" : "",
						"Age" : ""
					},
					"Schedules": {
						"4:30 am" : "10/50",
						"7:00 am" : "21/50",
						"10:15 pm" : "43/50",
						"3:30 pm" : "2/50",
						"7:00 pm" : "17/50"
					}
				},
				{
					"Id": 3,
					"Name": "DGTE to Bacolod",
					"Businfo": {
						"Busnumber" : "Bus# 0324",
						"Bustype" : "Bus Type: Air Conditioned"
					},
					"Userinfo": {
						"Driver" : "",
						"Age" : ""
					},
					"Schedules": {
						"3:30 am" : "10/50",
						"5:30 am" : "15/50",
						"7:00 am" : "30/50",
						"11:45 am" : "40/50",
						"2:30 pm" : "15/50",
						"5:00 pm" : "11/50"
					}
				},
				{
					"Id": 4,
					"Name": "DGTE to Iloilo",
					"Businfo": {
						"Busnumber" : "Bus# 1422",
						"Bustype" : "Bus Type: Air Conditioned"
					},
					"Userinfo": {
						"Driver" : "",
						"Age" : ""
					},
					"Schedules": {
						"5:30 am" : "17/50",
						"7:30 am" : "15/50",
					}
				},
				{
					"Id": 5,
					"Name": "DGTE to Cebu",
					"Businfo": {
						"Busnumber" : "Bus# 1571",
						"Bustype" : "Bus Type: Air Conditioned"
					},
					"Userinfo": {
						"Driver" : "",
						"Age" : ""
					},
					"Schedules": {
						"5:00 am" : "16/50",
						"7:30 am" : "28/50",
						"1:30 pm" : "50/50",
						"5:00 pm" : "48/50"
					}
				},
				{
					"Id": 6,
					"Name": "DGTE to Zamboanga",
					"Businfo": {
						"Busnumber" : "Bus# 1609",
						"Bustype" : "Bus Type: Air Conditioned"
					},
					"Userinfo": {
						"Driver" : "",
						"Age" : ""
					},
					"Schedules": {
						"5:00 am" : "38/50",
						"6:30 am" : "15/50"          
					}
				},
				{
					"Id": 7,
					"Name": "DGTE to Manila",
					"Businfo": {
						"Busnumber" : "Bus# 0722",
						"Bustype" : "Bus Type: Air Conditioned"
					},
					"Userinfo": {
						"Driver" : "",
						"Age" : ""
					},
					"Schedules": {
						"4:45 am" : "10/50"          
					}
				}
			]
		}';
	}
}
