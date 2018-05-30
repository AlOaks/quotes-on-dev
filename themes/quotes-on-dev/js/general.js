jQuery( document ).ready(function($) {



    $(".randomize").click(function(event) {
        event.preventDefault();
        
        $.ajax({
            method: "GET",
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

    $(".submit-btn").click(function(event){
        event.preventDefault();

        $.ajax({
            method: "POST",
            url: quote_vars.rest_url + "wp/v2/posts/",
            data: {

           }
        }).done(function(thanks){
            $(".submit-quote").hide();
            $(".submit-content").append("<h1 class='thanks'>Thank you for submitting!</h1>");
        })
    });

















});