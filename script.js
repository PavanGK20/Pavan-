// script.js - small UX improvements using jQuery
$(function(){
  // Reset button
  $('#resetBtn').on('click', function(){
    $('#regForm')[0].reset();
  });

  // Basic client-side validation and friendly submit button state
  $('#regForm').on('submit', function(e){
    // Use HTML5 validity to check required fields quickly
    var form = this;
    if (!form.checkValidity()) {
      // Let browser show native validation messages
      return;
    }
    // Provide quick visual feedback (server will still handle final validation)
    $('#submitBtn').text('Submitting...').prop('disabled', true);
    // allow normal POST to proceed
  });

  // re-enable when user changes an input
  $('#regForm input, #regForm select, #regForm textarea').on('input change', function(){
    $('#submitBtn').text('Submit Application').prop('disabled', false);
  });
});