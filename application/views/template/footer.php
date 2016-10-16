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
                var button = $(event.relatedTarget)
                
                var title = button.data('title')
                var action = button.data('action')

                var modal = $(this)
                modal.find('.modal-title').text(title)
                modal.find('.modal-form').attr('action', action)

            })

            $('#NovaCarteira').on('click', function () {
                $('#contaFields').addClass('hide');
            })

            $('.editaCarteira').on('click', function () {
                $('#contaFields').addClass('hide');
                $('input[name=nome]').attr('value', $(this).data('nome'));
                $('input[name=cor]').attr('value', $(this).data('cor'));
            })

            $('#NovaConta').on('click', function () {
                $('#contaFields').removeClass('hide');
            })

            $('.editaConta').on('click', function () {
                $('#contaFields').removeClass('hide');
                $('input[name=nome]').attr('value', $(this).data('nome'));
                $('input[name=cor]').attr('value', $(this).data('cor'));
                $('input[name=tipo]').attr('value', $(this).data('tipo'));
                $('input[name=banco]').attr('value', $(this).data('banco'));
            })

            $('#NovoCartao').add('.editaCartao').on('click', function () {
                $('#contaFields').addClass('hide');

            })
        </script>

    </div>
</body>
</html>