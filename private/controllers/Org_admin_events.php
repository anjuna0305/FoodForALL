<?php

class Org_admin_events extends Controller
{
    function index()
    {
        // $user = new User();
        // $data = $user->findAll();
        $user = new Org_admin_events();
        $results = array();

        // if (Auth::isuser('org_admin')) {
        //     $admin_model = new Admins();
        //     // $defaults=array();
        //     $defaults = $admin_model->select_orgs_bydate();
        //     $user->view('org.admin.events', ['defaults' => $defaults]);
        // } else {
        //     $this->redirect('login');
        // }
        $user->view('org.admin.events');
    }}