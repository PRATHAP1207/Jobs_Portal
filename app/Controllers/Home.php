<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('welcome_message');
    }
    function Jobs()
    {
        $jobDesc['CategoryData'] = $this->Common_model->get_Records("categories");
        $jobDesc['DescriptionData'] = $this->Common_model->get_Records("jobs");
        $jobDesc['getworkLocation']= getWorkLocation();
        echo view('JobsPortal', $jobDesc);
    }


    public function Jobs_Details($id)
    {   // print_r($id);
        $JobDescription['jobDescript'] = $this->Common_model->get_Records("jobs", "*", array('job_id' => $id));
        //  print_r(json_encode($JobDescription));       
        echo view('Jobs_details', $JobDescription);
    }
    function Application($id)
    {
        $JobDescription['jobDescript'] = $this->Common_model->get_Records("jobs", "*", array('job_id' => $id));
        echo view('ApplicationForm', $JobDescription);
    }

    function saveUser($id)
    {
        //echo "i am in save position";
        //print_r( $_POST);exit;
        $uid = $id;
        $firstName = $this->request->getVar('firstname');
        $emailId = $this->request->getVar('emailId');
        $phoneNo = $this->request->getVar('phoneNo');
        $file = $this->request->getFile('filename');
        $fileStore = $_FILES['filename']['name'];
        //$file->move_uploaded_file(WRITEPATH.'uploads/'.$file->getname());

        $img = $file;
        $validated = $this->validate([
            'filename' => [
                'uploaded[filename]',
                'mime_in[filename,image/jpg,image/jpeg,image/gif,image/png,image/pdf]',
            ],
        ]);
        // print_r($validated);exit;
        // if ($validated)
        {
            $sec = strtotime(date('Y-m-d h:m:s'));
            $new_name =  md5(uniqId() . $sec);
            //print_r($new_name);exit;
            $logoname1 = $_FILES['filename']['name'];
            //$logoname=explode('.', $logoname1);
            $file_ext = pathinfo($logoname1, PATHINFO_EXTENSION);
            $cmp_image = $new_name . '.' . $file_ext;
            // print_r($cmp_image);exit;
            $file_path = './public/assests/upload/';

            if (!file_exists($file_path)) {
                mkdir($file_path, 0777, true);
            }
            //print_r($file_path);//exit;
            $res = $file->move($file_path, $cmp_image);
        } { //Need to insert

            $value['full_name'] = $firstName;
            $value['email_id'] = $emailId;
            $value['contact_number'] = $phoneNo;
            $value['resume_files'] = $cmp_image;
            $value['applied_job'] = $uid;
            $value['applied_on'] = date("Y-m-d");
            $uid = $this->Common_model->ApplicationData('applicationform', $value);
            $data['uid'] = $uid;
        }
        echo view('Thank_you');
    }


    function updatedJobs()
    {
        $category = $this->request->getVar('categorySelect');
        $workLocation = $this->request->getVar('workLocation');

        $jobDesc['getworkLocation']= getWorkLocation();
      //  print_r($jobDesc);

        $jobDesc['category'] = $category;
        $jobDesc['workLocation'] = $workLocation;


        if ($category != "0"  && $workLocation != "0") {
            $jobDesc['DescriptionData'] = $this->Common_model->get_Records("jobs", "*", array('category' => $category, 'workLocation' => $workLocation));
            $jobDesc['CategoryData'] = $this->Common_model->get_Records("categories");
            echo view('JobsPortal', $jobDesc);
        } elseif ($category == "0"  && $workLocation != "0") {
            $jobDesc['CategoryData'] = $this->Common_model->get_Records("categories");
            $jobDesc['DescriptionData'] = $this->Common_model->get_Records("jobs", "*", array('workLocation' => $workLocation));
            echo view('JobsPortal', $jobDesc);
        } elseif ($category != "0"  && $workLocation == "0") {
            $jobDesc['CategoryData'] = $this->Common_model->get_Records("categories");
            $jobDesc['DescriptionData'] = $this->Common_model->get_Records("jobs", "*", array('category' => $category));
            echo view('JobsPortal', $jobDesc);
        } else {
            $jobDesc['CategoryData'] = $this->Common_model->get_Records("categories");
            $jobDesc['DescriptionData'] = $this->Common_model->get_Records("jobs");
            echo view('JobsPortal', $jobDesc);
        }
    }
}
