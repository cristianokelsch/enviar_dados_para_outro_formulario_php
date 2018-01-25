<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="container">
            <form class="form-horizontal" action="" method="POST" enctype="multipart/form-data" >
                <fieldset>

                    <div class="form-group">
                        <label class="col-md-2 control-label" for="nome">Informe seu nome</label>  
                        <div class="col-md-5">
                            <input type="text" placeholder="Nome" class="form-control input-md" required="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label" for="email">Informe seu e-mail</label>  
                        <div class="col-md-5">
                            <input type="email" placeholder="E-mail" class="form-control input-md" required=""/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label" for="singlebutton"></label>
                        <div class="col-md-4">
                            <button type="submit" class="btn btn-success" >Enviar Dados</button>
                        </div>
                    </div>

                </fieldset>
            </form>
        </div>
    </body>
</html>
