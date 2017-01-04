$(document).ready(function(){
    $('#menu_toggle').click(function() {
        $('.ui.sidebar').sidebar('toggle');
    });

    $('.ui .dropdown')
      .dropdown({
        allowAdditions: true
      })
    ;

    $('.menu .item')
      .tab()
    ;
   function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            $('#input_img').val(input.files[0]['name']);
            reader.onload = function (e) {
                $('#preview_img_file').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    
    $("#attachmentName").change(function(){
        readURL(this);
    });

    $('#name').on('keyup keypress', function () {
        var name = $(this).val();
        var input = $('#tag-input');
        var main_tag = $('#main_tag');
        if(main_tag.hasClass('hidden_tag')) {
            main_tag.removeClass('hidden_tag');
            main_tag.addClass('visible');
        }
        else if(name == "") {
            main_tag.addClass('hidden_tag');
            main_tag.removeClass('visible');
        }
        main_tag.text(name);
        main_tag.attr("data-value", name);
    });

    $('#formid').on('keyup keypress', function(e) {
      var keyCode = e.keyCode || e.which;
      if (keyCode === 13) { 
        e.preventDefault();

        return false;
      }
    });

    $('#submit_btn').click(function() {
        var input = $('#tag-input');
        var main_tag = $('#main_tag');
        if(main_tag.attr("data-value") != "")
            input.val(input.val() + ',' + main_tag.attr("data-value"));
        $( "#formid" ).submit();
    });

});