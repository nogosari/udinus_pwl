<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Products extends CI_Controller
{
 public function __construct()
 {
 parent::__construct();
 $this->load->model("product_model");
 $this->load->library('form_validation');
 }
 public function index()
 {
 $data["products"] = $this->product_model->getAll();
 $this->load->view("admin/product/list", $data);
 }
 public function add()
 {
 $product = $this->product_model;
 $validation = $this->form_validation;
 $validation->set_rules($product->rules());
 if ($validation->run()) {
 $product->save();
 $this->session->set_flashdata('success', 'Berhasil 
disimpan');
 }
 $this->load->view("admin/product/new_form");
 }121
12.4.5. Pembuatan View
View merupakan bagian yang bertugas mengurus tampilan, buat file view 
sebagai berikut:
 list.php untuk menampilkan data;
 new_form.php untuk menampilkan form tambah data;
 edit_form.php untuk menampilkan form edit data.
untuk menyimpan file view buat folder baru pada direktori views/admin dengan 
nama product.
 public function edit($id = null)
 {
 if (!isset($id)) redirect('admin/products');
 
 $product = $this->product_model;
 $validation = $this->form_validation;
 $validation->set_rules($product->rules());
 if ($validation->run()) {
 $product->update();
 $this->session->set_flashdata('success', 'Berhasil 
disimpan');
 }
 $data["product"] = $product->getById($id);
 if (!$data["product"]) show_404();
 
 $this->load->view("admin/product/edit_form", $data);
 }
 public function delete($id=null)
 {
 if (!isset($id)) show_404();
 
 if ($this->product_model->delete($id)) {
 redirect(site_url('admin/products'));
 }
 }
}