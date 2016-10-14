        <footer>

        </footer>
        </div>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src='<?= base_url("js/jquery-3.1.0.min.js") ?>' ></script>
        <script src='<?= base_url("js/bootstrap.min.js") ?>' ></script>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                var tt = document.getElementsByClassName("table-title");
                for(var i = 0; i < tt.length; i++){
                    (function (i){
                        tt[i].addEventListener('click', function(){
                            if(tt[i].parentNode.nextElementSibling.className == 'hidden'){
                                tt[i].parentNode.nextElementSibling.className = '';
                                tt[i].parentNode.parentNode.nextElementSibling.className = '';
                            }else{
                                tt[i].parentNode.nextElementSibling.className = 'hidden';
                                tt[i].parentNode.parentNode.nextElementSibling.className = 'hidden';
                            }
                        });
                    }(i));
                }
            });
        </script>
        <script>
            $('#myModal').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget) // Button that triggered the modal
                console.log(button);
                var title = button.data('title') // Extract info from data-* attributes
                var action = button.data('action') // Extract info from data-* attributes
                console.log(button);
                // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
                // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
                var modal = $(this)
                modal.find('.modal-title').text(title)
                modal.find('.modal-form').attr('action', action)

            })
        </script>
    </div>
</body>
</html>