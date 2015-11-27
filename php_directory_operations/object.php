<script>
    $(function(){
        var carousel1 = new carousel();
        carousel1.init();

    });
var carousel = function() {
    var self = this;
    this.imgArray = [];
    this.init = function(){
        self.getPhotos();
    };
    //next
    this.next = function () {

    };

    //prev
    this.prev = function () {

    };

//    //ajax to get photos on dom ready.
    this.getPhotos = function () {
        $.ajax({
            dataType: 'json',
            method: 'GET',
            url: 'http://localhost:8888/lfz/prototypes/php_directory_operations/dir_listing.php',
            success: function (response) {
                for (var i = 0; i < response.images.length; i++) {
                    var img = $('<img>').attr('src', response.images[i]).addClass('image');
                    self.imgArray.push(img);
                }
                var startImg = self.imgArray[0][0];
                var $innerContainer = $('#inner-container');
                $innerContainer.append(startImg);
                var index = 0;
                setTimeout(function(){
                    index+=1;
                    //if index is equal to array length
                    //set index back to 0..
                    //remove the inner picture..
                    //replace with new picture..
                    //and so on..
                        }
                }, 2000);
            }
        });
    };
};

</script>