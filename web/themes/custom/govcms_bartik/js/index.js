jQuery( document ).ready( function( $ ) {
  console.log('JS Initialized');

  var hash = window.location.hash;
  var target = hash.split('#')[1];

  if(hash) {
    $('.nav-pill .btn').removeClass('active');
    $('.tab-pane').removeClass('active show');
    $(hash).addClass('active');
    $('.tab-pane[aria-labelledby="' + target + '"]').addClass('active show');
  };

  $(window).scroll(function() {
    if ($(this).scrollTop() > 100){
      $('.scroll-top').addClass('active');
      $('.scroll-top').on('click', function() {
        window.scrollTo({ top: 0, behavior: 'smooth' });
      });
    } else {
      $('.scroll-top').removeClass('active');
    }
  });

  $(function() {
    // $('a[href^="mailto:"]').each(function() {
    $('a.obfuscate-email').each(function() {
      this.href = this.href.replaceAll('[at]', '@').replaceAll('[dot]', '.');
      
      // Remove this line if you don't want to set the email address as link text:
      this.innerHTML = this.href.replace('mailto:', '');
    });
  });

  // $(function() {
  //   $('a.obfuscate-phone').each(function() {
  //     var chars = $(this).text().split('');
  //     $(chars).each(function() {
  //       $(this).wrapAll('<span></span>');
  //     });
  //   });
  // });

  if($('.views-all-people').length) {
    Drupal.behaviors.myBehavior = {
      attach: function (context, settings) {
        $('input[data-drupal-selector="edit-field-postcodes-target-id"]').prop('maxlength', 4);
        $('input[data-drupal-selector="edit-field-postcodes-target-id"]').attr('data-autocomplete-path', null);
        $('select[data-drupal-selector="edit-field-region-target-id"]').on('change', function() {
          $('input[data-drupal-selector="edit-field-postcodes-target-id"]').prop('value', null);
        });
        $('input[data-drupal-selector="edit-field-postcodes-target-id"]').on('focus', function() {
          $('option[value="All"]').prop('selected', true);
        });
        once('filterByPostcode', 'input.js-form-submit', context).forEach(function (element) {
          $(element).addClass('postcode-filtered');

          if($('.people-card').length) {
            var regionID = $('.people-card').data('region-id');
            $('option[value="' + regionID + '"]').prop('selected', true);
          };
        });
      }
    };
  };
});
