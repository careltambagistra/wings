<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ProductList extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("ModelProduct");
	}

	public function index()
	{
		$body = $this->ModelProduct->getAll();
		$data = array(
			"header" => "Product List",
			"page" => "product/v_list_product",
			"products" => $body
		);
		$this->load->view("layout/dashboard", $data);
	}

    public function details($code)
	{
		$details = $this->ModelProduct->getByPrimaryKey($code);
		$data = array(
			"header" => "Detail Order",
			"detail" => $details,
			"page" => "product/v_details_product"
		);

		$this->load->view("layout/dashboard", $data);
	}

    public function report($code)
	{
		$report = $this->ModelProduct->getByPrimaryKey($code);
		$data = array(
			"header" => "Report",
			"report" => $report
		);
		$html = $this->load->view('product/v_report_product', $data, true);
		$this->fungsi->createPDF($html, 'Report Penjualan', 'A5', 'portrait');
	}

}
