(function ($, Drupal) {
    $('.top-row').on('click', () =>
        document.querySelector('.list-unstyled').scrollIntoView({
            behavior: 'smooth'
        })
    )
})(window.jQuery, window.Drupal);