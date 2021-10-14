$(function() {


  // Trigger validation on tagsinput change
  $('input[name="validation-bs-tagsinput"]').on('itemAdded itemRemoved', function() {
    $(this).valid();
  });

  // Add phone validator
  $.validator.addMethod(
    'phone_format',
    function(value, element) {
      return this.optional(element) || /^\([0-9]{2}\) [0-9]?[0-9]{4}-[0-9]{4}$/.test(value);
    },
    'Por favor, informe um número de celular válido.',
  );

  // Initialize validation
  $('#validation-form-1').validate({
    ignore: '.ignore, .select2-input',
    focusInvalid: false,
    rules: {
      'validation-email': {
        required: true,
        email: true
      },
      'validation-name': {
        required: true,
        minlength: 10,
        maxlength: 100
      },
      'validation-phone': {
        required: true,
        phone_format: true
      },
      'validation-subject': {
        required: true
      },
      'validation-message': {
        required: true,
        minlength: 10,
      },
      'validation-aluno': {
        required: true
      },      
      'validation-cpf': {
        required: true,
        minlength:11,
      },
      'validation-unidade': {
        required: true
      },

    },

    // Errors
    //

    errorPlacement: function errorPlacement(error, element) {
      var $parent = $(element).parents('.form-group');

      // Do not duplicate errors
      if ($parent.find('.jquery-validation-error').length) { return; }

      $parent.append(
        error.addClass('jquery-validation-error small form-text invalid-feedback')
      );
    },
    highlight: function(element) {
      var $el = $(element);
      var $parent = $el.parents('.form-group');

      $el.addClass('is-invalid');

      // Select2 and Tagsinput
      if ($el.hasClass('select2-hidden-accessible') || $el.attr('data-role') === 'tagsinput') {
        $el.parent().addClass('is-invalid');
      }
    },
    unhighlight: function(element) {
      $(element).parents('.form-group').find('.is-invalid').removeClass('is-invalid');
    }
  });

});
