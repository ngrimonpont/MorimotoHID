jQuery(document).ready(function() {
jQuery('.countdown').each(function() {
        jQuery(this).countdown({
            until: new Date(jQuery(this).attr('data-date'))
        });
      });
});