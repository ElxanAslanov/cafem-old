<?php
class Menu extends CI_Controller {
    public function __construct()
    {
        parent::__construct();


        $this->view = 'menu';
        $this->loct = 'includes';
        $this->load->model('Menu_model');
        $this->load->model('Cafe_model');


    }

    public function index($id)
    {
        $data['menu'] = $this->Menu_model->get_menu();
        for ($i = 2; $i <= (count($data['menu']) - 1); $i++){
            $tables = $data['menu'];
            $data[$tables[$i]] = $this->Menu_model->get_sub_menu($tables[$i]);
            $columns = $data[$tables[$i]];
        }
        $this->page = 'list';
        $this->load->view("$this->loct/index",$data);
    }
    public function menu_add()
    {
        $data['cafes'] = $this->Cafe_model->getInfo();
        $data['menu'] = $this->Menu_model->get_menu();
        for ($i = 2; $i <= (count($data['menu']) - 1); $i++){
            $tables = $data['menu'];
            $data[$tables[$i]] = $this->Menu_model->get_sub_menu($tables[$i]);
            $columns = $data[$tables[$i]];
        }
        $this->page = 'menu_add';
        $this->load->view("$this->loct/index",$data);
    }

    public function add_menu_act()
    {
        $menu = array();
        $data['menu'] = $this->Menu_model->get_menu();
        for ($i = 2; $i <= (count($data['menu']) - 1); $i++){
            $tables = $data['menu'];
            $data[$tables[$i]] = $this->Menu_model->get_sub_menu($tables[$i]);
            $columns = $data[$tables[$i]];

            ${$tables[$i]} = array(
                $columns[1] => $this->input->post($columns[1]),
            );
            if ($this->input->post($tables[$i]) == 'on') {
                for ($x = 1; $x <= (count($columns) - 1); $x++) {
                    $sub = $this->input->post($columns[$x]);
                    $aa = array(
                        $columns[$x] => $sub,
                    );
                    ${$tables[$i]} = array_merge(${$tables[$i]},
                        $aa);

                }

                $insert_id = $this->Menu_model->menu_add(${$tables[$i]}, $tables[$i]);
                $aa = array(
                    $tables[$i] => $insert_id,
                );
                $menu = array_merge($menu,
                    $aa);
            }
        }
        $cafe_id = $this->input->post('cafe');
        $aa = array(
            'place_id' => $cafe_id,
        );
        $menu = array_merge($menu,
            $aa);
        $this->Menu_model->menu_add_id($menu);
        redirect(base_url('Menu'));
    }



}