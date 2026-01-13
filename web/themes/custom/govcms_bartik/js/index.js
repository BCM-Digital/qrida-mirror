document.addEventListener('DOMContentLoaded', () => {
  console.log('JS Initialized');

  const hash = window.location.hash;
  const target = hash.split('#')[1];
  if (hash) {
    document.querySelectorAll('.nav-pill .btn').forEach(el => el.classList.remove('active'));
    document.querySelectorAll('.tab-pane').forEach(el => el.classList.remove('active', 'show'));
    const tab = document.querySelector(hash);
    if (tab) tab.classList.add('active');
    const pane = document.querySelector('.tab-pane[aria-labelledby="' + target + '"]');
    if (pane) pane.classList.add('active', 'show');
  }

  window.addEventListener('scroll', () => {
    document.querySelectorAll('.scroll-top').forEach(btn => {
      if (window.scrollY > 100) {
        btn.classList.add('active');
        btn.addEventListener('click', () => {
          window.scrollTo({ top: 0, behavior: 'smooth' });
        });
      } else {
        btn.classList.remove('active');
      }
    });
  });

  document.querySelectorAll('a.obfuscate-email').forEach(link => {
    link.href = link.href.replaceAll('[at]', '@').replaceAll('[dot]', '.');
    link.textContent = link.href.replace('mailto:', '');
  });

  if (document.querySelector('.views-all-people')) {
    Drupal.behaviors.myBehavior = {
      attach: function (context) {
        const postcode = context.querySelector('input[data-drupal-selector="edit-field-postcodes-target-id"]');
        const regionSelect = context.querySelector('select[data-drupal-selector="edit-field-region-target-id"]');
        if (postcode) {
          postcode.maxLength = 4;
          postcode.removeAttribute('data-autocomplete-path');
          postcode.addEventListener('focus', () => {
            const allOpt = regionSelect?.querySelector('option[value="All"]');
            if (allOpt) allOpt.selected = true;
          });
        }
        if (regionSelect) {
          regionSelect.addEventListener('change', () => {
            if (postcode) postcode.value = '';
          });
        }
        once('filterByPostcode', 'input.js-form-submit', context).forEach(element => {
          element.classList.add('postcode-filtered');
          const peopleCard = document.querySelector('.people-card');
          if (peopleCard) {
            const regionID = peopleCard.dataset.regionId;
            const opt = regionSelect?.querySelector('option[value="' + regionID + '"]');
            if (opt) opt.selected = true;
          }
        });
      }
    };
  }
});
