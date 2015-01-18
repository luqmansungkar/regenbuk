<?php $form=$this->beginWidget('CActiveForm', array(
	'action' => array('site/login'),
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>
	<table role="" cellspacing="0">
		<tbody>
			<tr style="line-height:5px">
				<td class=""><label for="email">Email atau Telepon</label></td>
				<td class=""><label for="pass">Kata Sandi <a href="">(Lupa?)</a></label></td>
			</tr>
			<tr>
				<td style="padding-right: 5px">
					<?php echo $form->textField($model,'username',array(
						'class'=>'form-control input-sm',
						'tabindex'=>'1')); ?>
				</td>
				<td style="padding-right: 5px">
					<?php echo $form->passwordField($model,'password', array(
						'class'=>'form-control input-sm',
						'tabindex'=>'2')); ?>
				</td>
				<td>
					<label class="" id="" for="">
						<?php echo CHtml::submitButton('Masuk', array(
							'class'=>'btn btn-primary btn-xs',
							'tabindex'=>'4')); ?>
					</label>
				</td>
			</tr>
			<tr>
				<td class="login_form_label_field">
					<div>
						<div class="uiInputLabel clearfix uiInputLabelLegacy">
							<input id="persist_box" name="persistent" value="1" tabindex="3" class="" type="checkbox">
							<label for="persist_box" class="uiInputLabelLabel">Biarkan saya tetap masuk</label>
						</div>
						<input name="default_persistent" value="0" type="hidden">
					</div>
				</td>
			</tr>
		</tbody>
	</table>
<?php $this->endWidget(); ?>




<!--
<form>
	<table role="" cellspacing="0">
		<tbody>
			<tr style="line-height:5px">
				<td class=""><label for="email">Email atau Telepon</label></td>
				<td class=""><label for="pass">Kata Sandi <a href="">(Lupa?)</a></label></td>
			</tr>
			<tr>
				<td style="padding-right: 5px"><input style="" class="form-control input-sm" name="email" id="email" value="" tabindex="1" type="text"></td>
				<td style="padding-right: 5px"><input style="" class="form-control input-sm" name="pass" id="pass" tabindex="2" type="password"></td>
				<td><label class="" id="" for=""><input class="btn btn-primary btn-xs" value="Masuk" tabindex="4" id="u_0_l" type="submit"></label></td>
			</tr>
			<tr>
				<td class="login_form_label_field">
					<div>
						<div class="uiInputLabel clearfix uiInputLabelLegacy">
							<input id="persist_box" name="persistent" value="1" tabindex="3" class="" type="checkbox">
							<label for="persist_box" class="uiInputLabelLabel">Biarkan saya tetap masuk</label>
						</div>
						<input name="default_persistent" value="0" type="hidden">
					</div>
				</td>
			</tr>
		</tbody>
	</table>
</form>
-->

