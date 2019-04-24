$(document).ready(function(){

    var links = document.getElementsByTagName('a'), hrefs = [];
        for (var i = 0; i<links.length; i++)
        {   
            hrefs.push(links[i].href);

        }
        var arrays=[];
        for(var i=1;i<links.length;i++){
           // console.log(links[i].href);
            arrays.push(links[i].href);
            i+=3;
        }

        

        function myFunction(item, index) {
            demoP = document.getElementById("url");
          demoP.innerHTML = demoP.innerHTML + "index[" + index + "]: " + item + "<br>"; 
        }
        for (var i = 0; i <= arrays.length; i++) {

           $('#url').html('<a href="#">arrays[i]</a>');
       }

    // $("form").submit(function (e) {
    //     //prevent submit form
    //     alert("aa");
    //     e.preventDefault();
        
    //     //get data form contact
    //     var url = {

    //     };
        
    //      $.ajax({
    //         type: "GET",
    //         data: contact,
    //         url: "demo_google_search_api/search-google/1111-content.php"
    //     }).done(function (msg) {
    //         alert("Data Saved: " + msg);
    //     });
        
    // });
});