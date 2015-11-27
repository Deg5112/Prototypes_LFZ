<script>
    $(function(){
        console.log('hello');
        $.ajax({
            dataType: 'json',
            method: 'GET',
            url:'http://localhost:8888/lfz/prototypes/php_directory_operations/dir_listing.php',
            success: function(response){
                console.log(response);
                var imgArray = [];
                for(var i = 0; i<response.images.length; i++){
                    var img = $('<img>').attr('src', response.images[i]);
                    imgArray.push(img);
                }
                console.log(imgArray);
            }
        });
    });

</script>