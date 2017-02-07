<?php
	//require("image-uploader/src/ImageUploader.php");
	//$imageUploader = new ImageUploader();


$num_columns	= 22;
$can_delete	= $this->auth->has_permission('Contacts.Admin.Delete');
$can_edit		= $this->auth->has_permission('Contacts.Admin.Edit');
$has_records	= isset($records) && is_array($records) && count($records);

if ($can_delete) {
    $num_columns++;
}
?>
<div class='admin-box'>
	<h3><?php echo lang('contacts_area_title'); ?></h3>
<?php if ($can_edit) : ?>
    <button class='btn btn-success' onclick="window.location='http://ignition-go.localhost/admin/contacts/create'><i class="glyphicon glyphicon-plus"></i> Add</button>
<?php endif; ?>	
	<?php echo form_open($this->uri->uri_string()); ?>
		<table class='table table-striped'>
			<thead>
				<tr>
					<?php if ($can_delete && $has_records) : ?>
					<th class='column-check'><input class='check-all' type='checkbox' /></th>
					<?php endif;?>
					<th> </th>
					<th class="hide"><?php echo lang('contacts_field_created_on'); ?></th>
					<th class="hide"><?php echo lang('contacts_field_created_by'); ?></th>
					<th class="hide"><?php echo lang('contacts_field_modified_by'); ?></th>
					<th class="hide"><?php echo lang('contacts_field_deleted'); ?></th>
					<th class="hide"><?php echo lang('contacts_field_salutation'); ?></th>
					<th class="hide"><?php echo lang('contacts_field_first_name'); ?></th>
					<th class="hide"><?php echo lang('contacts_field_last_name'); ?></th>
					<th class="hide"><?php echo lang('contacts_field_title'); ?></th>
					<th><?php echo lang('contacts_field_photo'); ?></th>
					<th><?php echo lang('contacts_field_phone_home'); ?></th>
					<th><?php echo lang('contacts_field_phone_mobile'); ?></th>
					<th><?php echo lang('contacts_field_phone_work'); ?></th>
					<th class="hide"><?php echo lang('contacts_field_phone_other'); ?></th>
					<th class="hide"><?php echo lang('contacts_field_phone_fax'); ?></th>
					<th><?php echo lang('contacts_field_addr_street'); ?></th>
					<th><?php echo lang('contacts_field_addr_city'); ?></th>
					<th><?php echo lang('contacts_field_addr_state'); ?></th>
					<th><?php echo lang('contacts_field_addr_postalcode'); ?></th>
					<th class="hide"><?php echo lang('contacts_field_addr_country'); ?></th>
					<th class="hide"><?php echo lang('contacts_field_birthdate'); ?></th>
					<th><?php echo lang('contacts_field_account_name'); ?></th>
					<th><?php echo lang('contacts_field_modified_on'); ?></th>
				</tr>
			</thead>
			<?php if ($has_records) : ?>
			<tfoot>
				<?php if ($can_delete) : ?>
				<tr>
					<td colspan='<?php echo $num_columns; ?>'>
						<?php echo lang('contacts_with_selected'); ?>
						<input type='submit' name='delete' id='delete-me' class='btn btn-danger' value="<?php echo lang('contacts_delete'); ?>" onclick="return confirm('<?php echo (js_escape(lang('contacts_delete_confirm'))); ?>')" />
					</td>
				</tr>
				<?php endif; ?>
			</tfoot>
			<?php endif; ?>
			<tbody>
				<?php
				if ($has_records) :
					foreach ($records as $record) :
				?>
				<tr>
					<?php if ($can_delete) : ?>
					<td class='column-check'><input type='checkbox' name='checked[]' value='<?php echo $record->id; ?>' /></td>
					<?php endif;?>
					
				<?php if ($can_edit) : ?>
					<td><?php echo anchor('/admin/contacts/edit/' . $record->id, '<span class="icon-pencil"></span> '); ?>  
										<td><?php echo ($record->first_name. ' ' . $record->last_name); ?>
					</td>
				<?php else : ?>
										<td><?php echo ($record->first_name .' ' . $record->last_name); ?> 
				<?php endif; ?>
					<td class="hide"><?php echo ($record->created_by); ?></td>
					<td class="hide"><?php echo ($record->modified_by); ?></td>
					<td class="hide"><?php echo $record->deleted > 0 ? lang('contacts_true') : lang('contacts_false'); ?></td>
					<td class="hide"><?php echo ($record->salutation); ?></td>
					<td class="hide"><?php echo ($record->first_name); ?></td>
					<td class="hide"><?php echo ($record->last_name); ?></td>
					<td class="hide"><?php echo ($record->title); ?></td>
					<td><?php if ($record->photo) {
						echo '<img src="'.base_url().'admin/contacts/jpg/'.$record->photo.'" width=80 />';
						} ?></td>
					<td><?php echo ($record->phone_home); ?></td>
					<td><?php echo ($record->phone_mobile); ?></td>
					<td><?php echo ($record->phone_work); ?></td>
					<td class="hide"><?php echo ($record->phone_other); ?></td>
					<td class="hide"><?php echo ($record->phone_fax); ?></td>
					<td><?php echo ($record->addr_street); ?></td>
					<td><?php echo ($record->addr_city); ?></td>
					<td><?php echo ($record->addr_state); ?></td>
					<td><?php echo ($record->addr_postalcode); ?></td>
					<td class="hide"><?php echo ($record->addr_country); ?></td>
					<td class="hide"><?php echo ($record->birthdate); ?></td>
					<td><?php echo ($record->account_name); ?></td>
					<td><?php echo ($record->modified_on); ?></td>
				</tr>
				<?php
					endforeach;
				else:
				?>
				<tr>
					<td colspan='<?php echo $num_columns; ?>'><?php echo lang('contacts_records_empty'); ?></td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
	<?php
    echo form_close();
    
    ?>
</div>