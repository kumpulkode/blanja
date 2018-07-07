@include('form.text', [
    'label' => 'Form Text',
    'field' => 'text',
    'class' => 'bg-light-grey',
])

@include('form.password', [
    'label' => 'Password *',
    'field' => 'password',
    'class' => '',
])

@include('form.textarea', [
    'label' => 'Message *',
    'field' => 'message',
    'class' => '',
])

@include('form.select', [
    'field' => 'is_active',
    'label' => 'State',
    'options' => [
      '0' => 'Inactive',
      '1' => 'Active'
    ],
    'default' => 0
])

<div class="row">
    <div class="col-md-6">
        @include('form.date', [
            'field' => 'start_date',
            'label' => 'Single datepicker',
            'class' => 'single-date',
            'placeholder' => 'dd/mm/yyyy',
        ])
    </div>
    <div class="col-md-6">
        @include('form.date', [
            'field' => 'end_date',
            'label' => 'Pickadate',
            'class' => 'pickadate',
            'placeholder' => 'dd/mm/yyyy'
        ])
    </div>
</div>
@include('form.date', [
    'field' => 'end_date',
    'label' => 'datepicker range',
    'class' => 'daterange-time',
    'placeholder' => 'dd/mm/yyyy'
])

@include('form.textarea', [
    'label' => 'Message *',
    'field' => 'message',
    'class' => 'summernote',
])