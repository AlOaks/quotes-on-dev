jQuery( document ).ready(function($) {



    $(".randomize").click(function(event) {
        event.preventDefault();
        
        $.ajax({
            method: "GET",
            cache: false,
            url: quote_vars.rest_url + "wp/v2/posts/?filter[posts_per_page]=1&filter[orderby]=rand",
            
            beforeSend: function(xhr) {
              xhr.setRequestHeader("X-WP-Nonce", quote_vars.wpapi_nonce);
            }
          }).done(function(response){
                console.log(response);
                var url = response[0].link;
                console.log(url);
                document.location.href = url;
          });
    })

    $(".submit-quote").on("submit", function(event){
        event.preventDefault();

        var author = $(this).find('[name="author"]').val();
        var quote = $(this).find('[name="quote-text"]').val();
        var quote_source = $(this).find('[name="quote_source"]').val();
        var quote_link = $(this).find('[name="quote_link"]').val();

        $.ajax({
            method: "POST",
            cache: false,
            url: quote_vars.rest_url + "wp/v2/posts/",
            data: {
                title: author,
                content: quote,
                _qod_quote_source: quote_source,
                _qod_quote_source_url: quote_link,
                post_status: "pending",
           },

           beforeSend: function(xhr) {
            xhr.setRequestHeader("X-WP-Nonce", quote_vars.wpapi_nonce);
          }
        }).done(function(thanks){
            $(".submit-quote").hide();
            $(".submit-page-title").hide();
            $(".submit-content").append("<h1 class='thanks'>Thank you for submitting!</h1>");
        })
        .fail(function(error){
            alert("Error " + error);
        })
    });

















});