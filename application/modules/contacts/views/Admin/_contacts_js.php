<?php

if (validation_errors()) :
?>
<div class='alert alert-block alert-danger fade in'>
    <a class='close' data-dismiss='alert'>&times;</a>
    <h4 class='alert-heading'>
        <?php echo lang('contacts_errors_message'); ?>
    </h4>
    <?php echo validation_errors(); ?>
</div>
<?php
endif;

$id = isset($contacts->id) ? $contacts->id : '';

?>
<div class='admin-box container'>
    <h3>contacts</h3>
    <?php echo form_open($this->uri->uri_string(), 'class="form-horizontal"'); ?>
        <fieldset>
            

            <div class="form-group<?php echo form_error('created_on') ? ' error' : ''; ?>">
                <?php echo form_label(lang('contacts_field_created_on'), 'created_on', array('class' => 'control-label')); ?>
                <div class='controls'>
                    <input id='created_on' type='text' name='created_on' maxlength='39' value="<?php echo set_value('created_on', isset($contacts->created_on) ? $contacts->created_on : ''); ?>" />
                    <span class='help-inline'><?php echo form_error('created_on'); ?></span>
                </div>
            </div>

            <div class="form-group<?php echo form_error('created_by') ? ' error' : ''; ?>">
                <?php echo form_label(lang('contacts_field_created_by'), 'created_by', array('class' => 'control-label')); ?>
                <div class='controls'>
                    <input id='created_by' type='text' name='created_by' maxlength='11' value="<?php echo set_value('created_by', isset($contacts->created_by) ? $contacts->created_by : ''); ?>" />
                    <span class='help-inline'><?php echo form_error('created_by'); ?></span>
                </div>
            </div>

            <div class="form-group<?php echo form_error('modified_on') ? ' error' : ''; ?>">
                <?php echo form_label(lang('contacts_field_modified_on'), 'modified_on', array('class' => 'control-label')); ?>
                <div class='controls'>
                    <input id='modified_on' type='text' name='modified_on' maxlength='39' value="<?php echo set_value('modified_on', isset($contacts->modified_on) ? $contacts->modified_on : ''); ?>" />
                    <span class='help-inline'><?php echo form_error('modified_on'); ?></span>
                </div>
            </div>

            <div class="form-group<?php echo form_error('modified_by') ? ' error' : ''; ?>">
                <?php echo form_label(lang('contacts_field_modified_by'), 'modified_by', array('class' => 'control-label')); ?>
                <div class='controls'>
                    <input id='modified_by' type='text' name='modified_by' maxlength='11' value="<?php echo set_value('modified_by', isset($contacts->modified_by) ? $contacts->modified_by : ''); ?>" />
                    <span class='help-inline'><?php echo form_error('modified_by'); ?></span>
                </div>
            </div>

            <div class="form-group<?php echo form_error('deleted') ? ' error' : ''; ?>">
                <div class='checkbox'>
                    <label for='deleted'>
                        <input type='checkbox' id='deleted' name='deleted'  value='1' <?php echo set_checkbox('deleted', 1, isset($contacts->deleted) && $contacts->deleted == 1); ?> />
                        <?php echo lang('contacts_field_deleted'); ?>
                    </label>
                    <span class='help-inline'><?php echo form_error('deleted'); ?></span>
                </div>
            </div>

            <div class="form-group<?php echo form_error('salutation') ? ' error' : ''; ?>">
                <?php echo form_label(lang('contacts_field_salutation'), 'salutation', array('class' => 'control-label')); ?>
                <div class='controls'>
                    <input id='salutation' type='text' name='salutation' maxlength='255' value="<?php echo set_value('salutation', isset($contacts->salutation) ? $contacts->salutation : ''); ?>" />
                    <span class='help-inline'><?php echo form_error('salutation'); ?></span>
                </div>
            </div>

            <div class="form-group<?php echo form_error('first_name') ? ' error' : ''; ?>">
                <?php echo form_label(lang('contacts_field_first_name'), 'first_name', array('class' => 'control-label')); ?>
                <div class='controls'>
                    <input id='first_name' type='text' name='first_name' maxlength='100' value="<?php echo set_value('first_name', isset($contacts->first_name) ? $contacts->first_name : ''); ?>" />
                    <span class='help-inline'><?php echo form_error('first_name'); ?></span>
                </div>
            </div>

            <div class="form-group<?php echo form_error('last_name') ? ' error' : ''; ?>">
                <?php echo form_label(lang('contacts_field_last_name'), 'last_name', array('class' => 'control-label')); ?>
                <div class='controls'>
                    <input id='last_name' type='text' name='last_name' maxlength='100' value="<?php echo set_value('last_name', isset($contacts->last_name) ? $contacts->last_name : ''); ?>" />
                    <span class='help-inline'><?php echo form_error('last_name'); ?></span>
                </div>
            </div>

            <div class="form-group<?php echo form_error('title') ? ' error' : ''; ?>">
                <?php echo form_label(lang('contacts_field_title'), 'title', array('class' => 'control-label')); ?>
                <div class='controls'>
                    <input id='title' type='text' name='title' maxlength='100' value="<?php echo set_value('title', isset($contacts->title) ? $contacts->title : ''); ?>" />
                    <span class='help-inline'><?php echo form_error('title'); ?></span>
                </div>
            </div>

            <div class="form-group<?php echo form_error('photo') ? ' error' : ''; ?>">
                <?php echo form_label(lang('contacts_field_photo'), 'photo', array('class' => 'control-label')); ?>
                <div class='controls'>
                    <input id='photo' type='text' name='photo' maxlength='255' value="<?php echo set_value('photo', isset($contacts->photo) ? $contacts->photo : ''); ?>" />
                    <span class='help-inline'><?php echo form_error('photo'); ?></span>
                </div>
            </div>

            <div class="form-group<?php echo form_error('phone_home') ? ' error' : ''; ?>">
                <?php echo form_label(lang('contacts_field_phone_home'), 'phone_home', array('class' => 'control-label')); ?>
                <div class='controls'>
                    <input id='phone_home' type='text' name='phone_home' maxlength='100' value="<?php echo set_value('phone_home', isset($contacts->phone_home) ? $contacts->phone_home : ''); ?>" />
                    <span class='help-inline'><?php echo form_error('phone_home'); ?></span>
                </div>
            </div>

            <div class="form-group<?php echo form_error('phone_mobile') ? ' error' : ''; ?>">
                <?php echo form_label(lang('contacts_field_phone_mobile'), 'phone_mobile', array('class' => 'control-label')); ?>
                <div class='controls'>
                    <input id='phone_mobile' type='text' name='phone_mobile' maxlength='100' value="<?php echo set_value('phone_mobile', isset($contacts->phone_mobile) ? $contacts->phone_mobile : ''); ?>" />
                    <span class='help-inline'><?php echo form_error('phone_mobile'); ?></span>
                </div>
            </div>

            <div class="form-group<?php echo form_error('phone_work') ? ' error' : ''; ?>">
                <?php echo form_label(lang('contacts_field_phone_work'), 'phone_work', array('class' => 'control-label')); ?>
                <div class='controls'>
                    <input id='phone_work' type='text' name='phone_work' maxlength='100' value="<?php echo set_value('phone_work', isset($contacts->phone_work) ? $contacts->phone_work : ''); ?>" />
                    <span class='help-inline'><?php echo form_error('phone_work'); ?></span>
                </div>
            </div>

            <div class="form-group<?php echo form_error('phone_other') ? ' error' : ''; ?>">
                <?php echo form_label(lang('contacts_field_phone_other'), 'phone_other', array('class' => 'control-label')); ?>
                <div class='controls'>
                    <input id='phone_other' type='text' name='phone_other' maxlength='100' value="<?php echo set_value('phone_other', isset($contacts->phone_other) ? $contacts->phone_other : ''); ?>" />
                    <span class='help-inline'><?php echo form_error('phone_other'); ?></span>
                </div>
            </div>

            <div class="form-group<?php echo form_error('phone_fax') ? ' error' : ''; ?>">
                <?php echo form_label(lang('contacts_field_phone_fax'), 'phone_fax', array('class' => 'control-label')); ?>
                <div class='controls'>
                    <input id='phone_fax' type='text' name='phone_fax' maxlength='100' value="<?php echo set_value('phone_fax', isset($contacts->phone_fax) ? $contacts->phone_fax : ''); ?>" />
                    <span class='help-inline'><?php echo form_error('phone_fax'); ?></span>
                </div>
            </div>

            <div class="form-group<?php echo form_error('addr_street') ? ' error' : ''; ?>">
                <?php echo form_label(lang('contacts_field_addr_street'), 'addr_street', array('class' => 'control-label')); ?>
                <div class='controls'>
                    <input id='addr_street' type='text' name='addr_street' maxlength='150' value="<?php echo set_value('addr_street', isset($contacts->addr_street) ? $contacts->addr_street : ''); ?>" />
                    <span class='help-inline'><?php echo form_error('addr_street'); ?></span>
                </div>
            </div>

            <div class="form-group<?php echo form_error('addr_city') ? ' error' : ''; ?>">
                <?php echo form_label(lang('contacts_field_addr_city'), 'addr_city', array('class' => 'control-label')); ?>
                <div class='controls'>
                    <input id='addr_city' type='text' name='addr_city' maxlength='100' value="<?php echo set_value('addr_city', isset($contacts->addr_city) ? $contacts->addr_city : ''); ?>" />
                    <span class='help-inline'><?php echo form_error('addr_city'); ?></span>
                </div>
            </div>

            <div class="form-group<?php echo form_error('addr_state') ? ' error' : ''; ?>">
                <?php echo form_label(lang('contacts_field_addr_state'), 'addr_state', array('class' => 'control-label')); ?>
                <div class='controls'>
                    <input id='addr_state' type='text' name='addr_state' maxlength='100' value="<?php echo set_value('addr_state', isset($contacts->addr_state) ? $contacts->addr_state : ''); ?>" />
                    <span class='help-inline'><?php echo form_error('addr_state'); ?></span>
                </div>
            </div>

            <div class="form-group<?php echo form_error('addr_postalcode') ? ' error' : ''; ?>">
                <?php echo form_label(lang('contacts_field_addr_postalcode'), 'addr_postalcode', array('class' => 'control-label')); ?>
                <div class='controls'>
                    <input id='addr_postalcode' type='text' name='addr_postalcode' maxlength='20' value="<?php echo set_value('addr_postalcode', isset($contacts->addr_postalcode) ? $contacts->addr_postalcode : ''); ?>" />
                    <span class='help-inline'><?php echo form_error('addr_postalcode'); ?></span>
                </div>
            </div>

            <div class="form-group<?php echo form_error('addr_country') ? ' error' : ''; ?>">
                <?php echo form_label(lang('contacts_field_addr_country'), 'addr_country', array('class' => 'control-label')); ?>
                <div class='controls'>
                    <input id='addr_country' type='text' name='addr_country' maxlength='255' value="<?php echo set_value('addr_country', isset($contacts->addr_country) ? $contacts->addr_country : ''); ?>" />
                    <span class='help-inline'><?php echo form_error('addr_country'); ?></span>
                </div>
            </div>

            <div class="form-group<?php echo form_error('birthdate') ? ' error' : ''; ?>">
                <?php echo form_label(lang('contacts_field_birthdate'), 'birthdate', array('class' => 'control-label')); ?>
                <div class='controls'>
                    <input id='birthdate' type='text' name='birthdate' maxlength='10' value="<?php echo set_value('birthdate', isset($contacts->birthdate) ? $contacts->birthdate : ''); ?>" />
                    <span class='help-inline'><?php echo form_error('birthdate'); ?></span>
                </div>
            </div>

            <div class="form-group<?php echo form_error('account_name') ? ' error' : ''; ?>">
                <?php echo form_label(lang('contacts_field_account_name'), 'account_name', array('class' => 'control-label')); ?>
                <div class='controls'>
                    <input id='account_name' type='text' name='account_name' maxlength='150' value="<?php echo set_value('account_name', isset($contacts->account_name) ? $contacts->account_name : ''); ?>" />
                    <span class='help-inline'><?php echo form_error('account_name'); ?></span>
                </div>
            </div>
        </fieldset>
        <fieldset class='form-actions'>
            <input type='submit' name='save' class='btn btn-primary' value="<?php echo lang('contacts_action__contacts_js'); ?>" />
            <?php echo anchor('/admin/contacts', lang('contacts_cancel'), 'class="btn btn-warning"'); ?>
            
            <?php if ($this->auth->has_permission('Contacts.Admin.Delete')) : ?>
                <button type='submit' name='delete' formnovalidate class='btn btn-danger' id='delete-me' onclick="return confirm('<?php e(js_escape(lang('contacts_delete_confirm'))); ?>');">
                    <span class='icon-trash icon-white'></span>&nbsp;<?php echo lang('contacts_delete_record'); ?>
                </button>
            <?php endif; ?>
        </fieldset>
    <?php echo form_close(); ?>
</div>