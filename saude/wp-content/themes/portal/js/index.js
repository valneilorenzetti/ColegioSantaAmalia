$(document).ready(function(){

      $(document).foundation();
//    $('html').css({marginTop:'0 !important'});

      $(".skip").focus(function(){
         $(this).parent().parent().animate({top: 0},'slow', function() {
         });
      });

      if (!$("#mobile").attr("id")) {
            $(".rslides").responsiveSlides({
                  speed: 1000,
                  timeout: 5000
            });
      }

      (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1&appId=617595334956176";
            fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));

      $('#news_contato, #news_visita').change(function(){
            if($(this).is(':checked')){
                  $(this).val(1);
            } else {
                  $(this).val(0);
            }
      });

      $("#telefone_contato").focusout(function(){
            var phone, element;
            element = $(this);
            element.unmask();
            phone = element.val().replace(/\D/g, '');
            if(phone.length > 10) {
            element.mask("(99) 99999-999?9");
            } else {
            element.mask("(99) 9999-9999?9");
            }
      }).trigger('focusout');

      var l = Ladda.create( document.querySelector( '.ladda-button' ) );
      $('.ladda-button').click(function(e){
            e.preventDefault();
            if($("#form_contato").validate().form()){
                  l.start();
                  $("#form_contato").submit();
            }
      });


      var l = Ladda.create( document.querySelector( '.ladda-button-visita' ) );
      $('.ladda-button-visita').click(function(e){
            e.preventDefault();
            if($("#form_visita").validate().form()){
                  l.start();
                  $("#form_visita").submit();
            }
      });

      $("#conheceu_contato").change(function(){
            if ($(this).val() == "Revista" || $(this).val() == "Indicação" || $(this).val() == "Clube") {
                  $(".qual_contato").slideDown("slow");
            }
            else{
                  $(".qual_contato").slideUp("slow");
            }
      });

      $("#assunto_contato").change(function(){
            if ($(this).val() == "Agende sua visita") {
                  $("#form_contato").attr("action", $("#url_form").val()+"/agende-sua-visita");
            }
            else{
                  $("#form_contato").attr("action", $("#url_form").val()+"/contato");
            }
      });

      function reorient(e) {
            if ($("#mobile-tablet").attr("id")) {
                  $("body").html("");
                  window.location = "";
            }
       }
       window.onorientationchange = reorient;


});
