<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

	public function __construct ()
	{
		parent::__construct();
		

		//load model -> Model_products
		$this->load->model('Model_products');
		$this->load->model('Model_users');
		$this->load->model('Model_settings');
		$this->load->model('M_kategori/M_v_kategori');
	}
	public function index ()
	{ 
		$data['kt'] = $this->M_v_kategori->tampil_data_kategori();
		$data['products'] = $this->Model_products->all_products();
		$data['kt'] = $this->Model_products->all_kategori();
		$data['get_sitename'] = $this->Model_settings->sitename_settings();
		$data['get_footer'] = $this->Model_settings->footer_settings();
		$this->load->view('backend/View_produk',$data);
	}



	public function create()
	{
		$this->load->model('M_kategori/M_v_kategori');
		$this->form_validation->set_rules('pro_name','Product Name','required');
		$this->form_validation->set_rules('pro_title','Product Title','required');
		$this->form_validation->set_rules('pro_description','Product Description','required');
		$this->form_validation->set_rules('pro_price','Product Price','required|integer');
		$this->form_validation->set_rules('pro_stock','Available Stock','required|integer');
		//$this->form_validation->set_rules('userfile','image error','required');

		if ($this->form_validation->run() == FALSE)
		{
			$data['kt'] = $this->M_v_kategori->tampil_data_kategori();
			$this->load->view('backend/form_create_product');

		}else{
			//load uploading file
				$config['upload_path']          = './assets/uploads/';
				$config['allowed_types']        = 'jpg|png';
				$config['max_size']             = 2048000;// = MB
				$config['max_width']            = 2000;
				$config['max_height']           = 2000;
				$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload())
			{
				$data['kt'] = $this->M_v_kategori->tampil_data_kategori();
				$this->load->view('backend/form_create_product');


			}else{
				// if form_validation = true  -> insert into db
					$upload_image = $this->upload->data();
					$data_products = array
					(
						'pro_name'			=> set_value('pro_name'),
						'pro_title'			=> set_value('pro_title'),
						'penulis'			=> set_value('penulis'),
						'penerbit'			=> set_value('penerbit'),
						'tahun	'			=> set_value('tahun'),
						'pro_description'	=> set_value('pro_description'),
						'pro_price'			=> set_value('pro_price'),
						'pro_stock'			=> set_value('pro_stock'),
						'pro_image'			=> $upload_image['file_name']
					);//end array data_products
					$data['kt'] = $this->M_v_kategori->tampil_data_kategori();
					$this->Model_products->create($data_products);
					redirect('admin/Products');
			} //end if uploading

		}//end if form_validation

	}///end class create ///

	public function edit($pro_id)
	{
		$data['kt'] = $this->M_v_kategori->tampil_data_kategori();
		$data['get_sitename'] = $this->Model_settings->sitename_settings();
		$data['get_footer'] = $this->Model_settings->footer_settings();
		$this->form_validation->set_rules('pro_name','Product Name','required');
		$this->form_validation->set_rules('pro_title','Product Title','required');
		$this->form_validation->set_rules('pro_description','Product Description','required');
		$this->form_validation->set_rules('pro_price','Product Price','required|integer');
		$this->form_validation->set_rules('pro_stock','Available Stock','required|integer');

		if ($this->form_validation->run() == FALSE)
			{	$data['kt'] = $this->M_v_kategori->tampil_data_kategori();
				$data['product'] = $this->Model_products->find($pro_id);
				$this->load->view('backend/form_update_product',$data);
			} else {
				if($_FILES['userfile']['name'] != '')
				{
					//load uploading file
						$config['upload_path']          = './assets/uploads/';
						$config['allowed_types']        = 'jpg|png';
						$config['max_size']             = 2000;// = MB
						$config['max_width']            = 2000;
						$config['max_height']           = 2000;
						$this->load->library('upload', $config);

					if ( ! $this->upload->do_upload())
					{
						$data['kt'] = $this->M_v_kategori->tampil_data_kategori();
						$data['product'] = $this->Model_products->find($pro_id);
						$this->load->view('backend/form_update_product',$data);

					}else{
							$upload_image = $this->upload->data();
							$data_products = array(
								'pro_name'			=> set_value('pro_name'),
								'pro_title'			=> set_value('pro_title'),
								'penulis'			=> set_value('penulis'),
								'penerbit'			=> set_value('penerbit'),
								'tahun	'			=> set_value('tahun'),
								'pro_description'	=> set_value('pro_description'),
								'pro_price'			=> set_value('pro_price'),
								'pro_stock'			=> set_value('pro_stock'),
								'pro_image'			=> $upload_image['file_name']
							);//end array data_products
							$this->Model_products->edit($pro_id,$data_products);
							redirect('admin/Products');
					}//end if uploading
				}else{
						$data_products = array(
						'pro_name'			=> set_value('pro_name'),
						'pro_title'			=> set_value('pro_title'),
						'penulis'			=> set_value('penulis'),
						'penerbit'			=> set_value('penerbit'),
						'tahun	'			=> set_value('tahun'),
						'pro_description'	=> set_value('pro_description'),
						'pro_price'			=> set_value('pro_price'),
						'pro_stock'			=> set_value('pro_stock'),

						);//end array data_products
						$this->Model_products->edit($pro_id,$data_products);
						redirect('admin/Products');

				}//end if FILES

			}//end if form_validation

	}//end function update

	public function delete($pro_id)
	{
		$this->Model_products->delete($pro_id);
		redirect('admin/Products');
	}

	public function reports()
	{
		$data['kt'] = $this->M_v_kategori->tampil_data_kategori();
		$data['get_sitename'] = $this->Model_settings->sitename_settings();
		$data['get_footer'] = $this->Model_settings->footer_settings();
		$data['reports'] = $this->Model_products->reports();
		$this->load->view('backend/reports',$data);
	}

	public function del_report($rep_id_product)
	{
		$this->Model_products->del_report($rep_id_product);
		redirect('admin/Products/reports');
	}

	public function members()
	{
		$data['kt'] = $this->M_v_kategori->tampil_data_kategori();
		$data['get_sitename'] = $this->Model_settings->sitename_settings();
		$data['get_footer'] = $this->Model_settings->footer_settings();
		$data['members'] = $this->Model_users->members();
		$this->load->view('backend/members',$data);
	}

	public function active_usr($usr_id)
	{
		$active = '1';
		$data_user = array
		(
			'stuts'			=> $active
		);
		$data['kt'] = $this->M_v_kategori->tampil_data_kategori();
		$this->Model_users->active($usr_id,$data_user);
		redirect('admin/Products/members');
	}

	public function disable_usr($usr_id)
	{
		$active = '0';
		$data_user = array
		(
		'stuts'			=> $active
		);
		$data['kt'] = $this->M_v_kategori->tampil_data_kategori();
		$this->Model_users->active($usr_id,$data_user);
		redirect('admin/Products/members');
	}




}
