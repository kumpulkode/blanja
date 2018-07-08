<div class="form-group">
	@if (isset($label))
		<label
			for="{{ $field }}" class="control-label {{ isset($label_col) ? $label_col : ''}}"
		>
			{{ $label }}
		</label>
	@endif
	<div class="control-input {{ $errors->has($field) ? 'has-error' : '' }} {{ isset($form_col) ? $form_col : ''}}">
		<div class="input-group">
			{!! 
				Form::text(
					$field,
					isset($default) ? $default : null,
					[
						'class' => 'form-control input-date '.(isset($class) ? $class : ''),
						'placeholder' => isset($placeholder) ? $placeholder : ''
					] + (isset($attributes) ? $attributes : [])
				)
			!!}
			<span class="input-group-addon">
				<span class="glyphicon glyphicon-calendar"></span>
			</span>
		</div>
		@if (isset($help))
		<span class="help-block">{{ $help }}</span>
		@endif
		@if ($errors->has($field))
		<span class="help-block text-danger">{{ $errors->first($field) }}</span>
		@endif
	</div>
</div>