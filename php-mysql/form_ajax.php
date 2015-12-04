<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<form action="index_insert.php" method="POST">
    <input type="text" id='title' name="title" placeholder="task title">
    <input type="text" id='details' name="details" placeholder="task details">
    <input type="text" id='user_id' name="user_id" placeholder="username">
    <button type="button">Submit!</button>
</form>
<script>
    $(function(){
        $('button').click(function(){
            console.log('clicked');
            var title = $('#title').val();
            var details = $('#details').val();
            var user_id = $('#user_id').val();

            $.ajax({
               method: 'POST',
                dataType: 'json',
                data: {title: title, details: details, user_id: user_id},
                url: 'index_insert.php',
                success: function(response){
                    console.log(response + ' ' + typeof response);
                },
                error: function(){
                    console.log('unsuccessful');
                }
            });
        });
    });
</script>