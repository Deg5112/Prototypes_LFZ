<script>
    $(function(){
        var carousel1 = new carousel();
        carousel1.init();
        $('.glyphicon.glyphicon-chevron-right').click(function(){
           carousel1.next(carousel1.imgArray);
        });
        $('.glyphicon.glyphicon-chevron-left').click(function(){
           carousel1.prev(carousel1.imgArray);
        });
    });

var carousel = function() {
    var self = this;
    this.imgArray = [];
    this.index = 0;
    this.slideInterval = null;
    this.init = function(){
        self.getPhotos();
    };
    //next
    this.next = function (array) {
        clearInterval(self.slideInterval);
        self.index+=1;
        if(self.index === array.length) {
            self.index = 0;
        }
        $('.image').remove();
        var startImg = self.imgArray[self.index][0];
        var $innerContainer = $('#inner-container');
        $innerContainer.append(startImg);
        self.slideShow(self.imgArray);
    };

    //prev
    this.prev = function (array) {
        clearInterval(self.slideInterval);
        self.index-=1;
        if(self.index < 0) {
            self.index = array.length-1;
        }
        $('.image').remove();
        var startImg = self.imgArray[self.index][0];
        var $innerContainer = $('#inner-container');
        $innerContainer.append(startImg);
        self.slideShow(self.imgArray);
    };

    this.slideShow = function(array){

        var $innerContainer = $('#inner-container');

        self.slideInterval = setInterval(function() {
            self.index += 1;
            if(self.index === array.length) {
                self.index = 0;
            }
            var nextImg = array[self.index][0];
            $('.image').remove();
            $innerContainer.append(nextImg).hide().fadeIn('slow');

        }, 3000);
    };

    //ajax to get photos on dom ready.
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
                var startImg = self.imgArray[self.index][0];
                var $innerContainer = $('#inner-container');
                $innerContainer.append(startImg);
              self.slideShow(self.imgArray);
            }

        });

    };
};

</script>