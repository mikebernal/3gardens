jQuery(document).ready(function() {
  jQuery('.rast').hover(function() {
    jQuery( this ).find("img:last").fadeToggle();
    jQuery( this ).find("p").toggle({ effect: "scale", direction: "both", origin: "middle" });
  });
});
