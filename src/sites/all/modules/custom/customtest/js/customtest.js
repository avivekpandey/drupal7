**
 * @file
 * For JS Script
 */
(function($) {

	/**  publish/draft click functionality  **/
  $(document).delegate('.archive,.lock,.unarchive,.unlock', "click", function() {
    $link = $(this);
    $content_type = $(this).data('type');
    if ($(this).attr('class') == 'archive') {
      $change = "Archive";
    } else if ($(this).attr('class') == 'unarchive') {
      $change = "Un-archive";
    } else if ($(this).attr('class') == 'lock') {
      $change = "Close";
    } else if ($(this).attr('class') == 'unlock') {
      $change = "Open";
    }

    modal({
      buttonText: {
          yes: "Yes",
          cancel: "No"
      },
      type: 'confirm',
      onShow: function() {},
      text: "<center><strong>Are you sure, you want to " + $change + " this " + $content_type + "?</strong></center>",
      template: '<div class="modal-box"><div class="modal-inner"><div class="modal-title"></div><div class="modal-text"></div><div class="modal-buttons"></div></div></div>',
      callback: function(result) {
        if (result) {

          $link.parent().parent().addClass("state_updated");
          $.ajax({
            url: Drupal.settings.site_url + "/node/" + $link.data('type') + '/' + $link.data('nid') + '/' + $link.data('toupdate') + '/update',
            type: 'GET',
            success: function(response) {
              if (response == '1') {
                if ($link.hasClass('archive')) {
                  $link.addClass("unarchive");
                  $link.removeClass("archive");
                  $link.attr("title", "Un-archive It");
                } else if ($link.hasClass('unarchive')) {
                  $link.removeClass("unarchive");
                  $link.addClass("archive");
                  $link.attr("title", "Archive It");
                } else if ($link.hasClass('lock')) {
                  $link.removeClass("lock");
                  $link.addClass("unlock");
                  $link.attr("title", "Open It");
                } else if ($link.hasClass('unlock')) {
                  $link.removeClass("unlock");
                  $link.addClass("lock");
                  $link.attr("title", "Close It");
                }
              } else {
                alert(response);
              }
              setTimeout(function() {
                $link.parent().parent().removeClass("state_updated");
              }, 500);
            }
          });

        } else {
          $("#ajax_load_data").find("select").focus();
        }
      }
    });
  });

});