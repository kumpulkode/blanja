<div class="form-group">
	@if (isset($label))
		<label
			for="{{ $field }}" class="control-label {{ isset($label_col) ? $label_col : ''}}"
		>
			{{ $label }}
		</label>
	@endif
	<div class="control-input {{ $errors->has($field) ? 'has-error' : '' }} {{ isset($form_col) ? $form_col : ''}}">
		{!! 
			Form::text(
				$field,
				isset($default) ? $default : null,
				[
					'class' => 'form-control ' . (isset($class) ? $class : ''),
					'placeholder' => isset($placeholder) ? $placeholder : ''
				] + (isset($attributes) ? $attributes : [])
			)
		!!}

		@if (isset($help))
		<span class="help-block">{{ $help }}</span>
		@endif
		@if ($errors->has($field))
		<span class="help-block text-danger">{{ $errors->first($field) }}</span>
		@endif
	</div>
	@if (isset($label2))
		<label
			for="{{ $field }}" class="control-label {{ isset($label_col2) ? $label_col2 : ''}}"
		>
			{{ $label2 }}
		</label>
	@endif
</div>