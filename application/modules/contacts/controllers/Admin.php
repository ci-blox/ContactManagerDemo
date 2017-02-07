<?php defined('BASEPATH') || exit('No direct script access allowed');
require("image-uploader/src/ImageUploader.php");

/**
 * Admin controller
 * @created on : 
 * @author :
 * Copyright {year}
 *
 */
class Admin extends Admin_Controller
{
    protected $permissionCreate = 'Contacts.Admin.Create';
    protected $permissionDelete = 'Contacts.Admin.Delete';
    protected $permissionEdit   = 'Contacts.Admin.Edit';
    protected $permissionView   = 'Contacts.Admin.View';
protected $imageUploader;
    /**
	 * Constructor
	 *
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();
		Template::set('page_title','Contact Manager');
		Template::set('page_subtitle','');

		$this->load->library('securinator/Auth'); 
		$this->load->model('contacts/contacts_model');
        $this->lang->load('contacts');
		
			Modules::register_asset('flick/jquery-ui-1.8.13.custom.css');
			Modules::register_asset('jquery-ui-1.8.13.min.js');
			Modules::register_asset('jquery-ui-timepicker.css');
			Modules::register_asset('jquery-ui-timepicker-addon.js'); Template::set_theme('backend'); $this->form_validation->set_error_delimiters("<span class='error'>", "</span>");
	$imageUploader = new ImageUploader();
$imageUploader->setPath("assets/uploads");   // The directory where images will be uploaded

// The rest are optional
//$imageUploader->setSalt("my_application_specific_salt");  // It is used while hashing image names
$imageUploader->setMinFileSize(0);                           // Set minimum file size in bytes
$imageUploader->setMaxFileSize(100000);  
$this->imageUploader = $imageUploader;  
	
	}

	/**
	 * Display a list of contacts data.
	 *
	 * @return void
	 */
	public function index()
	{
		$data = array();
        		if ($this->auth->is_logged_in() === false) {
    		Template::redirect('/admin/check/login');
 		}

		Template::set('page_subtitle','Listing');
		 
				// Deleting anything?
		if (isset($_POST['delete'])) {
            //$this->auth->restrict($this->permissionDelete);
			$checked = $this->input->post('checked');
			if (is_array($checked) && count($checked)) {

                // If any of the deletions fail, set the result to false, so
                // failure message is set if any of the attempts fail, not just
                // the last attempt

				$result = true;
				foreach ($checked as $pid) {
					$deleted = $this->contacts_model->delete($pid);
                    if ($deleted == false) {
                        $result = false;
                    }
				}
				if ($result) {
					Template::set_message(count($checked) . ' ' . lang('contacts_delete_success'), 'success');
				} else {
					Template::set_message(lang('contacts_delete_failure') . $this->contacts_model->error, 'error');
				}
			}
		}
        
				$data['imageUploader'] = $this->imageUploader;
        		$data['records'] = $this->contacts_model->find_all();
       foreach( $data as $key => $value )
            Template::set($key, $value);
        
		Template::render();
	}
    
//
public function jpg($file)
    {
		if (!$file)
		$file = $this->uri->segment(5);
             header('Content-type: image/jpeg');
             $this->imageUploader->serve($file);
    }

    /**
	 * Create a contact object.
	 *
	 * @return void
	 */
	public function create()
	{
		$this->auth->restrict($this->permissionCreate);
        
		if (isset($_POST['save'])) {
			if ($insert_id = $this->save_contacts()) {
				log_activity($this->auth->user_id(), lang('contacts_act_create_record') . ': ' . $insert_id . ' : ' . $this->input->ip_address(), 'contacts');
				Template::set_message(lang('contacts_create_success'), 'success');
				redirect('/admin/contacts');
			}

            // Not validation error
			if ( ! empty($this->contacts_model->error)) {
				Template::set_message(lang('contacts_create_failure') . $this->contacts_model->error, 'error');
            }
		}

		Template::set('page_subtitle', lang('contacts_action_create'));

		Template::render();
	}
	/**
	 * Allows editing of contact data.
	 *
	 * @return void
	 */
	public function edit()
	{
		$id = $this->uri->segment(5);
		if (empty($id)) {
			Template::set_message(lang('contacts_invalid_id'), 'error');

			redirect('/admin/contacts');
		}
        
		if (isset($_POST['save'])) {
			$this->auth->restrict($this->permissionEdit);

			if ($this->save_contacts('update', $id)) {
				log_activity($this->auth->user_id(), lang('contacts_act_edit_record') . ': ' . $id . ' : ' . $this->input->ip_address(), 'contacts');
				Template::set_message(lang('contacts_edit_success'), 'success');
				redirect('/admin/contacts');
			}

            // Not validation error
            if ( ! empty($this->contacts_model->error)) {
                Template::set_message(lang('contacts_edit_failure') . $this->contacts_model->error, 'error');
			}
		}
        
		elseif (isset($_POST['delete'])) {
			$this->auth->restrict($this->permissionDelete);

			if ($this->contacts_model->delete($id)) {
				log_activity($this->auth->user_id(), lang('contacts_act_delete_record') . ': ' . $id . ' : ' . $this->input->ip_address(), 'contacts');
				Template::set_message(lang('contacts_delete_success'), 'success');

				redirect('/admin/contacts');
			}

            Template::set_message(lang('contacts_delete_failure') . $this->contacts_model->error, 'error');
		}
        
        Template::set('contacts', $this->contacts_model->find($id));

		Template::set('page_subtitle', lang('contacts_edit_heading'));		
		Template::render();
	}

	//--------------------------------------------------------------------
	// !PRIVATE METHODS
	//--------------------------------------------------------------------

	/**
	 * Save the data.
	 *
	 * @param string $type Either 'insert' or 'update'.
	 * @param int	 $id	The ID of the record to update, ignored on inserts.
	 *
	 * @return bool|int An int ID for successful inserts, true for successful
     * updates, else false.
	 */
	private function save_contacts($type = 'insert', $id = 0)
	{
		if ($type == 'update') {
			$_POST['id'] = $id;
		}

        // Validate the data
        $this->form_validation->set_rules($this->contacts_model->get_validation_rules());
        if ($this->form_validation->run() === false) {
            return false;
        }

		$savedata = array();
		foreach ($_POST as $key => $value) {
			$savedata[$key] = ($value);
		}

		// Make sure we only pass in the fields we want
		if ($_FILES['photoimg'])
		{
			$this->imageUploader->upload($_FILES["photoimg"], 'cntct_'.($_FILES["photoimg"]['name'].date('Ymd_his')));
			//$imgjson = $this->uploadimage();
			$savedata['photo'] = 'cntct_'.($_FILES["photoimg"]['name'].date('Ymd_his')); //json_decode($imgjson)->file_name;

		}
		$data = $this->contacts_model->prep_data($savedata);

        // Additional handling for default values should be added below,
        // or in the model's prep_data() method
        
		$data['created_on']	= $this->input->post('created_on') ? $this->input->post('created_on') : '0000-00-00 00:00:00';
		$data['modified_on']	= $this->input->post('modified_on') ? $this->input->post('modified_on') : '0000-00-00 00:00:00';
		$data['birthdate']	= $this->input->post('birthdate') ? $this->input->post('birthdate') : '0000-00-00';

        $return = false;
		if ($type == 'insert') {
			$id = $this->contacts_model->insert($data);

			if (is_numeric($id)) {
				$return = $id;
			}
		} elseif ($type == 'update') {
			$return = $this->contacts_model->update($id, $data);
		}

		return $return;
	}


function uploadimage()
    {
        $file_name                  = $this->input->post('photoimg');
        $imageName                  = 'cntct_'.($_FILES["photoimg"]['name'].date('Ymd_his'));
        $config['image_library']    = 'gd2';
        $config['source_image']     = $imageName;
        $config['create_thumb']     = TRUE;
        $config['maintain_ratio']   = TRUE;
        $config['master_dim']       = 'width'; 
  
            $upload_path = '/assets/uploads/';
            $config['upload_path'] = $upload_path;
            //allowed file types. * means all types
            $config['allowed_types'] = 'jpg|png|gif';
            //allowed max file size. 0 means unlimited file size
            $config['max_size'] = '0';
            //max file name size
            $config['max_filename'] = '255';
            //whether file name should be encrypted or not
            $config['encrypt_name'] = TRUE;
            //store image info once uploaded
            $image_data = array();
            //check for errors
            $is_file_error = FALSE;
            //check if file was selected for upload
            if (!$_FILES) {
                $is_file_error = TRUE;
                $msgs .= ('Select an image file.');
            }
            //if file was selected then proceed to upload
            if (!$is_file_error) {
                //load the preferences
                $this->load->library('upload', $config);
                //check file successfully uploaded. 'image_name' is the name of the input
                if (!$this->upload->do_upload($nm)) {
                    //if file upload failed then catch the errors
                    $msgs .= ($this->upload->display_errors());
                    $is_file_error = TRUE;
                }  
  
          $config['width']            = 100;
        $config['height']           = 120;
			if (!$is_file_error) {
        $this->load->library('image_lib', $config);
        $this->image_lib->initialize($config);
        $this->image_lib->resize();
        $this->image_lib->clear();
        $json_data = array(
                'error'     =>false,
                'tmp_name'  =>$file_name,
                'file_name' =>base_url().'assets/uploads/'.$imageName.'?dummy='.rand(0,1000),
                'file_path' =>$imageName
        );
		}
		else {
      $json_data = array(
                'error'     =>true,
                'tmp_name'  =>$file_name,
                'file_name' =>'',
                'file_path' =>'',
				'msgs' => $msgs
        );
			
		}

		//remove original file
		@unlink($file_name );
    	return  json_encode($json_data);

	}   
	
	function upload_resize($nm, $imgname )
	{
		$msgs = '';
		//	     if ($this->input->post('image_upload')) {
            //set preferences
            //file upload destination
            $upload_path = '/assets/uploads/';
            $config['upload_path'] = $upload_path;
            //allowed file types. * means all types
            $config['allowed_types'] = 'jpg|png|gif';
            //allowed max file size. 0 means unlimited file size
            $config['max_size'] = '0';
            //max file name size
            $config['max_filename'] = '255';
            //whether file name should be encrypted or not
            $config['encrypt_name'] = TRUE;
            //store image info once uploaded
            $image_data = array();
            //check for errors
            $is_file_error = FALSE;
            //check if file was selected for upload
            if (!$_FILES) {
                $is_file_error = TRUE;
                $msgs .= ('Select an image file.');
            }
            //if file was selected then proceed to upload
            if (!$is_file_error) {
                //load the preferences
                $this->load->library('upload', $config);
                //check file successfully uploaded. 'image_name' is the name of the input
                if (!$this->upload->do_upload($nm)) {
                    //if file upload failed then catch the errors
                    $msgs .= ($this->upload->display_errors());
                    $is_file_error = TRUE;
                } else {
                    //store the file info
                    $image_data = $this->upload->data();
                    $config['image_library'] = 'gd2';
                    $config['source_image'] = $image_data['full_path']; //get original image
                    $config['maintain_ratio'] = TRUE;
                    $config['width'] = 150;
                    $config['height'] = 100;
                    $this->load->library('image_lib', $config);
                    if (!$this->image_lib->resize()) {
                        $msgs .= ($this->image_lib->display_errors());
                    }
                }
            }
            // There were errors, we have to delete the uploaded image
            if ($is_file_error) {
                if ($image_data) {
                    $file = $upload_path . $image_data['file_name'];
                    if (file_exists($file)) {
                        unlink($file);
                    }
                }
            } else {
                $data['resize_img'] = $upload_path . $image_data['file_name'];
                $msgs = ('Image was successfully uploaded to direcoty <strong>' . $upload_path . '</strong> and resized.');
            }
			return array('msg'=> $msgs,
			'filename'=> $data['resize_img']);
        }
 
}
}