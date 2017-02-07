    <div class="container">
    <link href="http://ignition-go.localhost/assets/datatables/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="http://ignition-go.localhost/assets/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet">
        <h1 style="font-size:20pt">Ajax CRUD with Bootstrap modals and Datatables with Image Upload</h1>
 
        <h3>FIXME('{$module_name_lower}_area_title')</h3>
        <br />
        <button class="btn btn-success" onclick="add_
<div style="border:1px solid #990000;padding-left:20px;margin:0 0 10px 0;">

<h4>A PHP Error was encountered</h4>

<p>Severity: Notice</p>
<p>Message:  Undefined variable: entity_1</p>
<p>Filename: files/view_listing.php</p>
<p>Line Number: 137</p>


	<p>Backtrace:</p>
	
		
	
		
	
		
			<p style="margin-left:10px">
			File: D:\Rossie\freelancer\visualsol\Ignition-Go\igocore\modules\buildablox\views\files\view_listing.php<br />
			Line: 137<br />
			Function: _error_handler			</p>

		
	
		
			<p style="margin-left:10px">
			File: D:\Rossie\freelancer\visualsol\Ignition-Go\igocore\libraries\MX\Loader.php<br />
			Line: 358<br />
			Function: include			</p>

		
	
		
			<p style="margin-left:10px">
			File: D:\Rossie\freelancer\visualsol\Ignition-Go\igocore\libraries\MX\Loader.php<br />
			Line: 301<br />
			Function: _ci_load			</p>

		
	
		
			<p style="margin-left:10px">
			File: D:\Rossie\freelancer\visualsol\Ignition-Go\igocore\modules\buildablox\libraries\Modulebuilder.php<br />
			Line: 674<br />
			Function: view			</p>

		
	
		
			<p style="margin-left:10px">
			File: D:\Rossie\freelancer\visualsol\Ignition-Go\igocore\modules\buildablox\libraries\Modulebuilder.php<br />
			Line: 315<br />
			Function: buildView			</p>

		
	
		
			<p style="margin-left:10px">
			File: D:\Rossie\freelancer\visualsol\Ignition-Go\igocore\modules\buildablox\controllers\buildablox.php<br />
			Line: 577<br />
			Function: buildFiles			</p>

		
	
		
			<p style="margin-left:10px">
			File: D:\Rossie\freelancer\visualsol\Ignition-Go\igocore\modules\buildablox\controllers\buildablox.php<br />
			Line: 135<br />
			Function: build_module			</p>

		
	
		
	
		
	
		
			<p style="margin-left:10px">
			File: D:\Rossie\freelancer\visualsol\Ignition-Go\public\index.php<br />
			Line: 393<br />
			Function: require_once			</p>

		
	

</div>()"><i class="glyphicon glyphicon-plus"></i> Add 
<div style="border:1px solid #990000;padding-left:20px;margin:0 0 10px 0;">

<h4>A PHP Error was encountered</h4>

<p>Severity: Notice</p>
<p>Message:  Undefined variable: entity_1</p>
<p>Filename: files/view_listing.php</p>
<p>Line Number: 137</p>


	<p>Backtrace:</p>
	
		
	
		
	
		
			<p style="margin-left:10px">
			File: D:\Rossie\freelancer\visualsol\Ignition-Go\igocore\modules\buildablox\views\files\view_listing.php<br />
			Line: 137<br />
			Function: _error_handler			</p>

		
	
		
			<p style="margin-left:10px">
			File: D:\Rossie\freelancer\visualsol\Ignition-Go\igocore\libraries\MX\Loader.php<br />
			Line: 358<br />
			Function: include			</p>

		
	
		
			<p style="margin-left:10px">
			File: D:\Rossie\freelancer\visualsol\Ignition-Go\igocore\libraries\MX\Loader.php<br />
			Line: 301<br />
			Function: _ci_load			</p>

		
	
		
			<p style="margin-left:10px">
			File: D:\Rossie\freelancer\visualsol\Ignition-Go\igocore\modules\buildablox\libraries\Modulebuilder.php<br />
			Line: 674<br />
			Function: view			</p>

		
	
		
			<p style="margin-left:10px">
			File: D:\Rossie\freelancer\visualsol\Ignition-Go\igocore\modules\buildablox\libraries\Modulebuilder.php<br />
			Line: 315<br />
			Function: buildView			</p>

		
	
		
			<p style="margin-left:10px">
			File: D:\Rossie\freelancer\visualsol\Ignition-Go\igocore\modules\buildablox\controllers\buildablox.php<br />
			Line: 577<br />
			Function: buildFiles			</p>

		
	
		
			<p style="margin-left:10px">
			File: D:\Rossie\freelancer\visualsol\Ignition-Go\igocore\modules\buildablox\controllers\buildablox.php<br />
			Line: 135<br />
			Function: build_module			</p>

		
	
		
	
		
	
		
			<p style="margin-left:10px">
			File: D:\Rossie\freelancer\visualsol\Ignition-Go\public\index.php<br />
			Line: 393<br />
			Function: require_once			</p>

		
	

</div></button>
        <button class="btn btn-default" onclick="reload_table()"><i class="glyphicon glyphicon-refresh"></i> Reload</button>
        <br />
        <br />
        <table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Gender</th>
                    <th>Address</th>
                    <th>Date of Birth</th>
                    <th>Photo</th>
                    <th style="width:150px;">Action</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
 
            <tfoot>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Gender</th>
                <th>Address</th>
                <th>Date of Birth</th>
                <th>Photo</th>
                <th>Action</th>
            </tr>
            </tfoot>
        </table>
    </div>
 
<script src="http://ignition-go.localhost/assets/jquery/jquery-3.1.0.min.js"></script>
<script src="http://ignition-go.localhost/assets/bootstrap/js/bootstrap.min.js"></script>
<script src="http://ignition-go.localhost/assets/datatables/js/jquery.dataTables.min.js"></script>
<script src="http://ignition-go.localhost/assets/datatables/js/dataTables.bootstrap.min.js"></script>
<script src="http://ignition-go.localhost/assets/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
 
 
<script type="text/javascript">
 
var save_method; //for save method string
var table;
var base_url = 'http://ignition-go.localhost/';
 
$(document).ready(function() {
 
    //datatables
    table = $('#table').DataTable({ 
 
        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "order": [], //Initial no order.
 
        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "http://ignition-go.localhost/contacts/ajax_list')?>",
            "type": "POST"
        },
 
        //Set column definition initialisation properties.
        "columnDefs": [
            { 
                "targets": [ -1 ], //last column
                "orderable": false, //set not orderable
            },
            { 
                "targets": [ -2 ], //2 last column (photo)
                "orderable": false, //set not orderable
            },
        ],
 
    });
 
    //datepicker
    $('.datepicker').datepicker({
        autoclose: true,
        format: "yyyy-mm-dd",
        todayHighlight: true,
        orientation: "top auto",
        todayBtn: true,
        todayHighlight: true,  
    });
 
    //set input/textarea/select event when change value, remove class error and remove text help block 
    $("input").change(function(){
        $(this).parent().parent().removeClass('has-error');
        $(this).next().empty();
    });
    $("textarea").change(function(){
        $(this).parent().parent().removeClass('has-error');
        $(this).next().empty();
    });
    $("select").change(function(){
        $(this).parent().parent().removeClass('has-error');
        $(this).next().empty();
    });
 
});
 
 
 
function add_
<div style="border:1px solid #990000;padding-left:20px;margin:0 0 10px 0;">

<h4>A PHP Error was encountered</h4>

<p>Severity: Notice</p>
<p>Message:  Undefined variable: entity_1</p>
<p>Filename: files/view_listing.php</p>
<p>Line Number: 240</p>


	<p>Backtrace:</p>
	
		
	
		
	
		
			<p style="margin-left:10px">
			File: D:\Rossie\freelancer\visualsol\Ignition-Go\igocore\modules\buildablox\views\files\view_listing.php<br />
			Line: 240<br />
			Function: _error_handler			</p>

		
	
		
			<p style="margin-left:10px">
			File: D:\Rossie\freelancer\visualsol\Ignition-Go\igocore\libraries\MX\Loader.php<br />
			Line: 358<br />
			Function: include			</p>

		
	
		
			<p style="margin-left:10px">
			File: D:\Rossie\freelancer\visualsol\Ignition-Go\igocore\libraries\MX\Loader.php<br />
			Line: 301<br />
			Function: _ci_load			</p>

		
	
		
			<p style="margin-left:10px">
			File: D:\Rossie\freelancer\visualsol\Ignition-Go\igocore\modules\buildablox\libraries\Modulebuilder.php<br />
			Line: 674<br />
			Function: view			</p>

		
	
		
			<p style="margin-left:10px">
			File: D:\Rossie\freelancer\visualsol\Ignition-Go\igocore\modules\buildablox\libraries\Modulebuilder.php<br />
			Line: 315<br />
			Function: buildView			</p>

		
	
		
			<p style="margin-left:10px">
			File: D:\Rossie\freelancer\visualsol\Ignition-Go\igocore\modules\buildablox\controllers\buildablox.php<br />
			Line: 577<br />
			Function: buildFiles			</p>

		
	
		
			<p style="margin-left:10px">
			File: D:\Rossie\freelancer\visualsol\Ignition-Go\igocore\modules\buildablox\controllers\buildablox.php<br />
			Line: 135<br />
			Function: build_module			</p>

		
	
		
	
		
	
		
			<p style="margin-left:10px">
			File: D:\Rossie\freelancer\visualsol\Ignition-Go\public\index.php<br />
			Line: 393<br />
			Function: require_once			</p>

		
	

</div>()
{
    save_method = 'add';
    $('#form')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string
    $('#modal_form').modal('show'); // show bootstrap modal
    $('.modal-title').text('Add 
<div style="border:1px solid #990000;padding-left:20px;margin:0 0 10px 0;">

<h4>A PHP Error was encountered</h4>

<p>Severity: Notice</p>
<p>Message:  Undefined variable: entity_1</p>
<p>Filename: files/view_listing.php</p>
<p>Line Number: 247</p>


	<p>Backtrace:</p>
	
		
	
		
	
		
			<p style="margin-left:10px">
			File: D:\Rossie\freelancer\visualsol\Ignition-Go\igocore\modules\buildablox\views\files\view_listing.php<br />
			Line: 247<br />
			Function: _error_handler			</p>

		
	
		
			<p style="margin-left:10px">
			File: D:\Rossie\freelancer\visualsol\Ignition-Go\igocore\libraries\MX\Loader.php<br />
			Line: 358<br />
			Function: include			</p>

		
	
		
			<p style="margin-left:10px">
			File: D:\Rossie\freelancer\visualsol\Ignition-Go\igocore\libraries\MX\Loader.php<br />
			Line: 301<br />
			Function: _ci_load			</p>

		
	
		
			<p style="margin-left:10px">
			File: D:\Rossie\freelancer\visualsol\Ignition-Go\igocore\modules\buildablox\libraries\Modulebuilder.php<br />
			Line: 674<br />
			Function: view			</p>

		
	
		
			<p style="margin-left:10px">
			File: D:\Rossie\freelancer\visualsol\Ignition-Go\igocore\modules\buildablox\libraries\Modulebuilder.php<br />
			Line: 315<br />
			Function: buildView			</p>

		
	
		
			<p style="margin-left:10px">
			File: D:\Rossie\freelancer\visualsol\Ignition-Go\igocore\modules\buildablox\controllers\buildablox.php<br />
			Line: 577<br />
			Function: buildFiles			</p>

		
	
		
			<p style="margin-left:10px">
			File: D:\Rossie\freelancer\visualsol\Ignition-Go\igocore\modules\buildablox\controllers\buildablox.php<br />
			Line: 135<br />
			Function: build_module			</p>

		
	
		
	
		
	
		
			<p style="margin-left:10px">
			File: D:\Rossie\freelancer\visualsol\Ignition-Go\public\index.php<br />
			Line: 393<br />
			Function: require_once			</p>

		
	

</div>'); // Set Title to Bootstrap modal title
 
    $('#photo-preview').hide(); // hide photo preview modal
 
    $('#label-photo').text('Upload Photo'); // label photo upload
}
 
function edit_
<div style="border:1px solid #990000;padding-left:20px;margin:0 0 10px 0;">

<h4>A PHP Error was encountered</h4>

<p>Severity: Notice</p>
<p>Message:  Undefined variable: entity_1</p>
<p>Filename: files/view_listing.php</p>
<p>Line Number: 254</p>


	<p>Backtrace:</p>
	
		
	
		
	
		
			<p style="margin-left:10px">
			File: D:\Rossie\freelancer\visualsol\Ignition-Go\igocore\modules\buildablox\views\files\view_listing.php<br />
			Line: 254<br />
			Function: _error_handler			</p>

		
	
		
			<p style="margin-left:10px">
			File: D:\Rossie\freelancer\visualsol\Ignition-Go\igocore\libraries\MX\Loader.php<br />
			Line: 358<br />
			Function: include			</p>

		
	
		
			<p style="margin-left:10px">
			File: D:\Rossie\freelancer\visualsol\Ignition-Go\igocore\libraries\MX\Loader.php<br />
			Line: 301<br />
			Function: _ci_load			</p>

		
	
		
			<p style="margin-left:10px">
			File: D:\Rossie\freelancer\visualsol\Ignition-Go\igocore\modules\buildablox\libraries\Modulebuilder.php<br />
			Line: 674<br />
			Function: view			</p>

		
	
		
			<p style="margin-left:10px">
			File: D:\Rossie\freelancer\visualsol\Ignition-Go\igocore\modules\buildablox\libraries\Modulebuilder.php<br />
			Line: 315<br />
			Function: buildView			</p>

		
	
		
			<p style="margin-left:10px">
			File: D:\Rossie\freelancer\visualsol\Ignition-Go\igocore\modules\buildablox\controllers\buildablox.php<br />
			Line: 577<br />
			Function: buildFiles			</p>

		
	
		
			<p style="margin-left:10px">
			File: D:\Rossie\freelancer\visualsol\Ignition-Go\igocore\modules\buildablox\controllers\buildablox.php<br />
			Line: 135<br />
			Function: build_module			</p>

		
	
		
	
		
	
		
			<p style="margin-left:10px">
			File: D:\Rossie\freelancer\visualsol\Ignition-Go\public\index.php<br />
			Line: 393<br />
			Function: require_once			</p>

		
	

</div>(id)
{
    save_method = 'update';
    $('#form')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string
 
 
    //Ajax Load data from ajax
    $.ajax({
        url : "http://ignition-go.localhost/<?php echo site_url($module_name_lower); ?>/ajax_edit/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
 
            $('[name="id"]').val(data.id);
            $('[name="firstName"]').val(data.firstName);
            $('[name="lastName"]').val(data.lastName);
            $('[name="gender"]').val(data.gender);
            $('[name="address"]').val(data.address);
            $('[name="dob"]').datepicker('update',data.dob);
            $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('Edit 
<div style="border:1px solid #990000;padding-left:20px;margin:0 0 10px 0;">

<h4>A PHP Error was encountered</h4>

<p>Severity: Notice</p>
<p>Message:  Undefined variable: entity_1</p>
<p>Filename: files/view_listing.php</p>
<p>Line Number: 277</p>


	<p>Backtrace:</p>
	
		
	
		
	
		
			<p style="margin-left:10px">
			File: D:\Rossie\freelancer\visualsol\Ignition-Go\igocore\modules\buildablox\views\files\view_listing.php<br />
			Line: 277<br />
			Function: _error_handler			</p>

		
	
		
			<p style="margin-left:10px">
			File: D:\Rossie\freelancer\visualsol\Ignition-Go\igocore\libraries\MX\Loader.php<br />
			Line: 358<br />
			Function: include			</p>

		
	
		
			<p style="margin-left:10px">
			File: D:\Rossie\freelancer\visualsol\Ignition-Go\igocore\libraries\MX\Loader.php<br />
			Line: 301<br />
			Function: _ci_load			</p>

		
	
		
			<p style="margin-left:10px">
			File: D:\Rossie\freelancer\visualsol\Ignition-Go\igocore\modules\buildablox\libraries\Modulebuilder.php<br />
			Line: 674<br />
			Function: view			</p>

		
	
		
			<p style="margin-left:10px">
			File: D:\Rossie\freelancer\visualsol\Ignition-Go\igocore\modules\buildablox\libraries\Modulebuilder.php<br />
			Line: 315<br />
			Function: buildView			</p>

		
	
		
			<p style="margin-left:10px">
			File: D:\Rossie\freelancer\visualsol\Ignition-Go\igocore\modules\buildablox\controllers\buildablox.php<br />
			Line: 577<br />
			Function: buildFiles			</p>

		
	
		
			<p style="margin-left:10px">
			File: D:\Rossie\freelancer\visualsol\Ignition-Go\igocore\modules\buildablox\controllers\buildablox.php<br />
			Line: 135<br />
			Function: build_module			</p>

		
	
		
	
		
	
		
			<p style="margin-left:10px">
			File: D:\Rossie\freelancer\visualsol\Ignition-Go\public\index.php<br />
			Line: 393<br />
			Function: require_once			</p>

		
	

</div>'); // Set title to Bootstrap modal title
 
            $('#photo-preview').show(); // show photo preview modal
 
            if(data.photo)
            {
                $('#label-photo').text('Change Photo'); // label photo upload
                $('#photo-preview div').html('<img src="'+base_url+'upload/'+data.photo+'" class="img-responsive">'); // show photo
                $('#photo-preview div').append('<input type="checkbox" name="remove_photo" value="'+data.photo+'"/> Remove photo when saving'); // remove photo
 
            }
            else
            {
                $('#label-photo').text('Upload Photo'); // label photo upload
                $('#photo-preview div').text('(No photo)');
            }
 
 
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
}
 
function reload_table()
{
    table.ajax.reload(null,false); //reload datatable ajax 
}
 
function save()
{
    $('#btnSave').text('saving...'); //change button text
    $('#btnSave').attr('disabled',true); //set button disable 
    var url;
 
    if(save_method == 'add') {
        url = "http://ignition-go.localhost/<?php echo site_url($module_name_lower); ?>/ajax_add";
    } else {
        url = "http://ignition-go.localhost/<?php echo site_url($module_name_lower); ?>/ajax_update";
    }
 
    // ajax adding data to database
 
    var formData = new FormData($('#form')[0]);
    $.ajax({
        url : url,
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        dataType: "JSON",
        success: function(data)
        {
 
            if(data.status) //if success close modal and reload ajax table
            {
                $('#modal_form').modal('hide');
                reload_table();
            }
            else
            {
                for (var i = 0; i < data.inputerror.length; i++) 
                {
                    $('[name="'+data.inputerror[i]+'"]').parent().parent().addClass('has-error'); //select parent twice to select div form-group class and add has-error class
                    $('[name="'+data.inputerror[i]+'"]').next().text(data.error_string[i]); //select span help-block class set text error string
                }
            }
            $('#btnSave').text('save'); //change button text
            $('#btnSave').attr('disabled',false); //set button enable 
 
 
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error adding / update data');
            $('#btnSave').text('save'); //change button text
            $('#btnSave').attr('disabled',false); //set button enable 
 
        }
    });
}
 
function delete_
<div style="border:1px solid #990000;padding-left:20px;margin:0 0 10px 0;">

<h4>A PHP Error was encountered</h4>

<p>Severity: Notice</p>
<p>Message:  Undefined variable: entity_1</p>
<p>Filename: files/view_listing.php</p>
<p>Line Number: 361</p>


	<p>Backtrace:</p>
	
		
	
		
	
		
			<p style="margin-left:10px">
			File: D:\Rossie\freelancer\visualsol\Ignition-Go\igocore\modules\buildablox\views\files\view_listing.php<br />
			Line: 361<br />
			Function: _error_handler			</p>

		
	
		
			<p style="margin-left:10px">
			File: D:\Rossie\freelancer\visualsol\Ignition-Go\igocore\libraries\MX\Loader.php<br />
			Line: 358<br />
			Function: include			</p>

		
	
		
			<p style="margin-left:10px">
			File: D:\Rossie\freelancer\visualsol\Ignition-Go\igocore\libraries\MX\Loader.php<br />
			Line: 301<br />
			Function: _ci_load			</p>

		
	
		
			<p style="margin-left:10px">
			File: D:\Rossie\freelancer\visualsol\Ignition-Go\igocore\modules\buildablox\libraries\Modulebuilder.php<br />
			Line: 674<br />
			Function: view			</p>

		
	
		
			<p style="margin-left:10px">
			File: D:\Rossie\freelancer\visualsol\Ignition-Go\igocore\modules\buildablox\libraries\Modulebuilder.php<br />
			Line: 315<br />
			Function: buildView			</p>

		
	
		
			<p style="margin-left:10px">
			File: D:\Rossie\freelancer\visualsol\Ignition-Go\igocore\modules\buildablox\controllers\buildablox.php<br />
			Line: 577<br />
			Function: buildFiles			</p>

		
	
		
			<p style="margin-left:10px">
			File: D:\Rossie\freelancer\visualsol\Ignition-Go\igocore\modules\buildablox\controllers\buildablox.php<br />
			Line: 135<br />
			Function: build_module			</p>

		
	
		
	
		
	
		
			<p style="margin-left:10px">
			File: D:\Rossie\freelancer\visualsol\Ignition-Go\public\index.php<br />
			Line: 393<br />
			Function: require_once			</p>

		
	

</div>(id)
{
    if(confirm('Are you sure you want to delete this data?'))
    {
        // ajax delete data to database
        $.ajax({
            url : "http://ignition-go.localhost/contacts//ajax_delete/"+id,
            type: "POST",
            dataType: "JSON",
            success: function(data)
            {
                //if success reload ajax table
                $('#modal_form').modal('hide');
                reload_table();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error deleting data');
            }
        });
 
    }
}
 
</script>
 
<!-- Bootstrap modal -->
<div class="modal fade" id="modal_form" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">
<div style="border:1px solid #990000;padding-left:20px;margin:0 0 10px 0;">

<h4>A PHP Error was encountered</h4>

<p>Severity: Notice</p>
<p>Message:  Undefined variable: entity_1</p>
<p>Filename: files/view_listing.php</p>
<p>Line Number: 393</p>


	<p>Backtrace:</p>
	
		
	
		
	
		
			<p style="margin-left:10px">
			File: D:\Rossie\freelancer\visualsol\Ignition-Go\igocore\modules\buildablox\views\files\view_listing.php<br />
			Line: 393<br />
			Function: _error_handler			</p>

		
	
		
			<p style="margin-left:10px">
			File: D:\Rossie\freelancer\visualsol\Ignition-Go\igocore\libraries\MX\Loader.php<br />
			Line: 358<br />
			Function: include			</p>

		
	
		
			<p style="margin-left:10px">
			File: D:\Rossie\freelancer\visualsol\Ignition-Go\igocore\libraries\MX\Loader.php<br />
			Line: 301<br />
			Function: _ci_load			</p>

		
	
		
			<p style="margin-left:10px">
			File: D:\Rossie\freelancer\visualsol\Ignition-Go\igocore\modules\buildablox\libraries\Modulebuilder.php<br />
			Line: 674<br />
			Function: view			</p>

		
	
		
			<p style="margin-left:10px">
			File: D:\Rossie\freelancer\visualsol\Ignition-Go\igocore\modules\buildablox\libraries\Modulebuilder.php<br />
			Line: 315<br />
			Function: buildView			</p>

		
	
		
			<p style="margin-left:10px">
			File: D:\Rossie\freelancer\visualsol\Ignition-Go\igocore\modules\buildablox\controllers\buildablox.php<br />
			Line: 577<br />
			Function: buildFiles			</p>

		
	
		
			<p style="margin-left:10px">
			File: D:\Rossie\freelancer\visualsol\Ignition-Go\igocore\modules\buildablox\controllers\buildablox.php<br />
			Line: 135<br />
			Function: build_module			</p>

		
	
		
	
		
	
		
			<p style="margin-left:10px">
			File: D:\Rossie\freelancer\visualsol\Ignition-Go\public\index.php<br />
			Line: 393<br />
			Function: require_once			</p>

		
	

</div></h3>
            </div>
            <div class="modal-body form">
                <form action="#" id="form" class="form-horizontal">
                    <input type="hidden" value="" name="id"/> 
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3">First Name</label>
                            <div class="col-md-9">
                                <input name="firstName" placeholder="First Name" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Last Name</label>
                            <div class="col-md-9">
                                <input name="lastName" placeholder="Last Name" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Gender</label>
                            <div class="col-md-9">
                                <select name="gender" class="form-control">
                                    <option value="">--Select Gender--</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Address</label>
                            <div class="col-md-9">
                                <textarea name="address" placeholder="Address" class="form-control"></textarea>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Date of Birth</label>
                            <div class="col-md-9">
                                <input name="dob" placeholder="yyyy-mm-dd" class="form-control datepicker" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group" id="photo-preview">
                            <label class="control-label col-md-3">Photo</label>
                            <div class="col-md-9">
                                (No photo)
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3" id="label-photo">Upload Photo </label>
                            <div class="col-md-9">
                                <input name="photo" type="file">
                                <span class="help-block"></span>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- End Bootstrap modal -->
