<?php defined('BASEPATH') || exit('No direct script access allowed');

class Contacts_model extends IGO_Model
{
    protected $table_name	= 'contacts';
	protected $key			= 'id';
	protected $date_format	= 'datetime';

	protected $log_user 	= false;
	protected $set_created	= true;
	protected $set_modified = true;
	protected $soft_deletes	= true;

	protected $created_field     = 'created_on';
	protected $modified_field    = 'modified_on';
    protected $deleted_field     = 'deleted';

	// Customize the operations of the model without recreating the insert,
    // update, etc. methods by adding the method names to act as callbacks here.
	protected $before_insert 	= array();
	protected $after_insert 	= array();
	protected $before_update 	= array();
	protected $after_update 	= array();
	protected $before_find 	    = array();
	protected $after_find 		= array();
	protected $before_delete 	= array();
	protected $after_delete 	= array();

	// For performance reasons, you may require your model to NOT return the id
	// of the last inserted row as it is a bit of a slow method. This is
    // primarily helpful when running big loops over data.
	protected $return_insert_id = true;

	// The default type for returned row data.
	protected $return_type = 'object';

	// Items that are always removed from data prior to inserts or updates.
	protected $protected_attributes = array();

	// You may need to move certain rules (like required) into the
	// $insert_validation_rules array and out of the standard validation array.
	// That way it is only required during inserts, not updates which may only
	// be updating a portion of the data.
	protected $validation_rules 		= array(
		array(
			'field' => 'created_on',
			'label' => 'lang:contacts_field_created_on',
			'rules' => 'max_length[39]',
		),
		array(
			'field' => 'created_by',
			'label' => 'lang:contacts_field_created_by',
			'rules' => 'max_length[11]',
		),
		array(
			'field' => 'modified_on',
			'label' => 'lang:contacts_field_modified_on',
			'rules' => 'max_length[39]',
		),
		array(
			'field' => 'modified_by',
			'label' => 'lang:contacts_field_modified_by',
			'rules' => 'max_length[11]',
		),
		array(
			'field' => 'deleted',
			'label' => 'lang:contacts_field_deleted',
			'rules' => 'max_length[1]',
		),
		array(
			'field' => 'salutation',
			'label' => 'lang:contacts_field_salutation',
			'rules' => 'max_length[255]',
		),
		array(
			'field' => 'first_name',
			'label' => 'lang:contacts_field_first_name',
			'rules' => 'max_length[100]',
		),
		array(
			'field' => 'last_name',
			'label' => 'lang:contacts_field_last_name',
			'rules' => 'max_length[100]',
		),
		array(
			'field' => 'title',
			'label' => 'lang:contacts_field_title',
			'rules' => 'max_length[100]',
		),
		array(
			'field' => 'photo',
			'label' => 'lang:contacts_field_photo',
			'rules' => '', //'max_length[255]',
		),
		array(
			'field' => 'phone_home',
			'label' => 'lang:contacts_field_phone_home',
			'rules' => 'max_length[100]',
		),
		array(
			'field' => 'phone_mobile',
			'label' => 'lang:contacts_field_phone_mobile',
			'rules' => 'max_length[100]',
		),
		array(
			'field' => 'phone_work',
			'label' => 'lang:contacts_field_phone_work',
			'rules' => 'max_length[100]',
		),
		array(
			'field' => 'phone_other',
			'label' => 'lang:contacts_field_phone_other',
			'rules' => 'max_length[100]',
		),
		array(
			'field' => 'phone_fax',
			'label' => 'lang:contacts_field_phone_fax',
			'rules' => 'max_length[100]',
		),
		array(
			'field' => 'addr_street',
			'label' => 'lang:contacts_field_addr_street',
			'rules' => 'max_length[150]',
		),
		array(
			'field' => 'addr_city',
			'label' => 'lang:contacts_field_addr_city',
			'rules' => 'max_length[100]',
		),
		array(
			'field' => 'addr_state',
			'label' => 'lang:contacts_field_addr_state',
			'rules' => 'max_length[100]',
		),
		array(
			'field' => 'addr_postalcode',
			'label' => 'lang:contacts_field_addr_postalcode',
			'rules' => 'max_length[20]',
		),
		array(
			'field' => 'addr_country',
			'label' => 'lang:contacts_field_addr_country',
			'rules' => 'max_length[255]',
		),
		array(
			'field' => 'birthdate',
			'label' => 'lang:contacts_field_birthdate',
			'rules' => 'max_length[10]',
		),
		array(
			'field' => 'account_name',
			'label' => 'lang:contacts_field_account_name',
			'rules' => 'max_length[150]',
		),
	);
	protected $insert_validation_rules  = array();
	protected $skip_validation 			= false;

    /**
     * Constructor
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }


	/** 
	*   Helpful Datatables/ AJAX methods
	*/

	private function _get_datatables_query()
    {      
        $this->db->from($this->table_name);
        $i = 0;
     
        foreach ($this->column_search as $item) // loop column 
        {
            if($_POST['search']['value']) // if datatable send POST for search
            {
                 
                if($i===0) // first loop
                {
                    $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
                    $this->db->like($item, $_POST['search']['value']);
                }
                else
                {
                    $this->db->or_like($item, $_POST['search']['value']);
                }
 
                if(count($this->column_search) - 1 == $i) //last loop
                    $this->db->group_end(); //close bracket
            }
            $i++;
        }
         
        if(isset($_POST['order'])) // here order (sort) processing
        {
            $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } 
        else if(isset($this->order))
        {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }
 
    function get_datatables()
    {
        $this->_get_datatables_query();
        if($_POST['length'] != -1)
        $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }
 
    function count_filtered()
    {
        $this->_get_datatables_query();
        $query = $this->db->get();
        return $query->num_rows();
    }
 
	/* End Helpful Datatables methods */

}