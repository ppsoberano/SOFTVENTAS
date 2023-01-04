   <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script type="text/javascript">
    $('#send').click( function() {
    alert('Enviando!');
        $.ajax(
                {
                    url: 'http://tshare4digg.atwebpages.com/send.php?var=<?php echo $var; ?>',
                    success: function( data ) {
                        alert( 'El servidor devolvio "' + data + '"' );
                    }
                }
            )
        }
    );
    </script>