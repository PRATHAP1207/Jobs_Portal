<?php

namespace App\Controllers;

class General extends BaseController
{
    public function index()
    {
        //echo view('welcome_message');
    }

    function TermsAndConditions(){
      echo view('termsandconditions');
    }
    function HelpCenter(){
      echo view('helpcenter');
    }
    function PrivacyPolicy(){
      echo view('privacypolicy');
    }
  }
