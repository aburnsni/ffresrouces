jQuery(function ($) {
  "use strict";

  $(function() {
    $("#field-links-add-more-wrapper>div").addClass('panel panel-default form-wrapper');
    $("#field-links-add-more-wrapper>div").removeClass('form-item form-item-field-links-und-0 form-type-link-field form-group');
    $("#field-links-add-more-wrapper>div>label").addClass('panel-heading');
    $("#field-links-add-more-wrapper>div>label").removeClass('control-label');
    $("#field-links-add-more-wrapper>div>label").wrapInner( "<span class='panel-title fieldset-legend'></span>");
    $("div.link-field-subrow").addClass('panel-body');
  });
});
