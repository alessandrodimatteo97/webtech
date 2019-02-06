var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
$(document).ready(function() {
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
if($("input:checkbox:not(:checked)")) console.log("not checked anyone");

 $( "input[type=checkbox]" ).on("change", function(e) {

    var brands=[];
    var styles=[];
    var categories=[];
    var sex=[];
        e.preventDefault();
        $('input[name="sex[]"]:checked').each(function()
        {
            sex.push($(this).val());
        });
        $('input[name="brands[]"]:checked').each(function()
        {
            brands.push($(this).val());
        });

        $('input[name="categories[]"]:checked').each(function()
        {
            categories.push($(this).val());
        });

        $('input[name="styles[]"]:checked').each(function()
        {
            styles.push($(this).val());
        });

        console.log(window.location.pathname);
        console.log("-------------------------------------------------------------------------------")
        console.log($(this).val());
        console.log(brands);
        console.log(styles);
        console.log(categories);
        console.log(sex);
        $.get('/filterFunction', {sex:sex,brands: brands, styles: styles, categories: categories}, function(markup)
        {
            $('#html').html(markup);
        });
      });


});