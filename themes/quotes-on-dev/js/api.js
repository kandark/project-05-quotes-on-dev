(function($) {
    $(function() {
      console.log(red_vars);
      //this is your event listener, make sure this class exists somehwere on  your page
      $('.randomQuote').on('click', function(e) {
        
        $.ajax({
          method: 'get',
          url:
            red_vars.rest_url +
            'wp/v2/posts?filter[orderby]=rand&filter[posts_per_page]=1'
        }).done(function(data) {
          console.log(data)
          
          data.forEach(quote => { //quote is the key we created for each data array element
            console.log(quote);
            console.log('title:' + quote.title.rendered);
            console.log($(".the-author"));
            $(".the-author")[0].innerHTML = quote.title.rendered;
            $(".the-quote")[0].innerHTML = quote.content.rendered;
        });

        
        });
      
       
      });
    });
  })(jQuery);
  