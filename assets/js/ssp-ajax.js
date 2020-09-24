(function ($) {
  "use strict";

  // Dummy ajax call function
  $.ajax({
    url: ssp_ajax_obj.ajaxurl,
    type: "post",
    data: {
      action: "ssp_dummy_api_call",
    },
    success: function (data) {
      console.log(data);
    },
    error: function (errorThrown) {
      console.log(errorThrown);
    },
  });

})(jQuery);
