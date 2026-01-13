document.addEventListener('DOMContentLoaded', () => {
  const now = Date.now() - 1000;
  const widgets = document.getElementsByClassName('field-timer-jquery-countdown');

  Array.from(widgets).forEach(widget => {
    const message = widget.closest('.qrida-countdown').querySelector('.countdown-message');
    const timestamp = widget.dataset.timestamp * 1000;
    if (timestamp - now < 0 && message) {
      message.style.display = 'block';
    }
  });
});
