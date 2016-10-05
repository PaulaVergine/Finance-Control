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
    </div>
</body>
</html>