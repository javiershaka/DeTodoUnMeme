<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title">Iniciar session</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>

            </div>

            <div class="modal-body">
              <!--<p>Some text in the modal.</p>-->
                <form role="form"  method="post" action="index.php">
                    <fieldset>
                        <div class="form-group">
                            <input class="form-control" placeholder="correo@ejemplo.com" name="email" type="email" autofocus>
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="contraseña" name="password" type="password" value="">
                        </div>
                        <div class="checkbox">
                            <!--                                    <label>
                                                                    <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                                                </label>-->
                        </div>
                        <!-- Change this to a button or input when using this as a form -->

                    </fieldset>
                    <a href="index.php"  class="btn btn-lg btn-success btn-block" data-dismiss="modal" >Iniciar session</a>
                    <!--<a  class="btn btn-lg btn-success btn-block" data-dismiss="modal" >Iniciar session</a>-->
                </form>
            </div>
<!--            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>-->
        </div>

    </div>
</div>
