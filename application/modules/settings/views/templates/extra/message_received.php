<?php     
$attributes = array('class' => 'bs-example form-horizontal');
echo form_open('settings/templates', $attributes); ?>
			<input type="hidden" name="email_group" value="message_received">
			<input type="hidden" name="return_url" value="<?=base_url()?>settings/?settings=templates&group=extra&email=message_received">
			<div class="form-group">
				<label class="col-lg-12"><?=lang('subject')?></label>
				<div class="col-lg-12">
				<input class="form-control" name="subject" value="<?=$this -> applib -> get_any_field('email_templates',array(
                                    'email_group' => 'message_received'
                                    ), 'subject')?>" />
				</div>
			</div>
			<div class="form-group">
				<label class="col-lg-12"><?=lang('message')?></label>
				<div class="col-lg-12">
				<textarea class="form-control foeditor" name="email_template">
				<?=$this -> applib -> get_any_field('email_templates',array(
				                                    'email_group' => 'message_received'
									), 'template_body')?></textarea>
				</div>
			</div>
			<div class="form-group">
				<div class="col-lg-12">
				<button type="submit" class="btn btn-sm btn-primary"><?=lang('save_changes')?></button>
				</div>
			</div>
		</form>