// console.log("the script load");

jQuery(document).ready(function ($) {
  $(".like").on("click", function (e) {
    // console.log("clicked"); // just to be sure
    e.preventDefault();

    let user_id = jQuery(this).attr("data-user-id"); // we'll need this later

    jQuery.ajax({
      type: "post",
      dataType: "json",
      url: my_ajax_object.ajax_url,
      data: {
        action: "rentahome_like_property", // PHP function
        user_id: user_id, // we need to make this dynamic
        post_id: jQuery(this).attr("data-post-id"), // we need to make this dynamic
      },
      success: function (msg) {
        console.log(msg);
      },
    });
    // console.log(user_id);
  });
});
