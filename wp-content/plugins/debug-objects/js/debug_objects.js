function debug_objects_toggle(e){var t=document.getElementById(e);t.style.display="block"!=t.style.display?"block":"none"}!function(e){e(function(){e("#debugobjectstabs").tabs({select:function(e,t){window.location.replace(t.tab.hash)},create:function(t){var o=e(t.target),a=e.cookie("selected-tab");a&&(console.log("Setting value %s",a),o.tabs("select",a))}}),e(".ui-tabs-anchor").click(function(){var t=e(this).attr("id");t=jQuery.trim(t).substring(6,10)-1,e.cookie("debug-objects-selected-tab",t,{expires:7})})});var t=e.cookie("debug-objects-selected-tab");"undefined"==typeof t&&(t=0),e("#debugobjectstabs").tabs({collapsible:!0,active:t}),e('#debugobjects').find('table.tablesorter').DataTable({iDisplayLength:25,"aLengthMenu":[10,25,50,75,100,200,500],"bJQueryUI":true})}(jQuery);
