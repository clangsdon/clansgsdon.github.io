jQuery(function ($) {
    $('.stepbox button').click(function(e) {
        e.preventDefault();
        var $currentBox = $(this).closest('.stepbox');
        $currentBox.fadeOut(function() {
            var $nextBox = $currentBox.next('.stepbox');
            if ($nextBox.length > 0) {
                $nextBox.fadeIn();
            } else {
                // If there is no next box, show the thank you message.
                $('.popup.thankYou').fadeIn();
            }
        });
    });

    $('#lead-form').on('submit', function(e) {
        e.preventDefault();

        // You can put your form submission logic here. For example, you can use AJAX to submit the form.
        // After you have successfully submitted the form, you can show the thank you message.
        $('.popup.thankYou').fadeIn();
    });
});
