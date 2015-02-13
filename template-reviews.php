<?php
/*
 Template Name: Reviews
 */
?>
<div class="row well">

    <h1 class="text-center">Отзывы</h1>

    <div class="alert alert-info media">
        <div class="media-left">
            <a href="#">
                <img class="img-circle media-object" src="<?php echo get_template_directory_uri(); ?>/assets/img/538710492.jpg" alt="...">
            </a>
        </div>
        <div class="media-body">
            <h4 class="media-heading">Media heading</h4>
            <time>19:08</time>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore esse illo ipsa ipsam itaque iusto sed
                voluptate? Ad aliquam assumenda consequatur cum dolor dolorem doloremque dolores dolorum et, excepturi
                facere facilis fugiatimpedit, in incidunt labore magnam modi molestiae optio, quas quibusdam
                reprehenderit rerum vitae. Dolore id minus reiciendis veniam!
            </p>
        </div>
    </div>
    <nav>
        <ul class="pagination">
            <li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
            <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
            <li><a href="#" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>
        </ul>
    </nav>
    <div class="row">
        <form role="form" action="" method="post" >
            <div class="col-lg-6">
                <h1 class="text-center">Оставить отзыв</h1>
                <div class="form-group">
                    <label for="InputName">Заголовок</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="InputName" id="InputName" placeholder="Заголовок" required>
                        <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span></div>
                </div>
                <div class="form-group">
                    <label for="InputName">Имя</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="InputName" id="InputName" placeholder="Имя" required>
                        <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span></div>
                </div>
                <div class="form-group">
                    <label for="InputEmail">Email</label>
                    <div class="input-group">
                        <input type="email" class="form-control" id="InputEmail" name="InputEmail" placeholder="example@gmail.com" required  >
                        <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span></div>
                </div>
                <div class="form-group">
                    <label for="InputMessage">Сообщение</label>
                    <div class="input-group"
                        >
                        <textarea name="InputMessage" id="InputMessage" class="form-control" rows="5" required></textarea>
                        <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span></div>
                </div>
                <input type="submit" name="submit" id="submit" value="ОТПРАВИТЬ" class="btn btn-info pull-right">
            </div>
        </form>
        <hr class="featurette-divider hidden-lg">
    </div>
</div>

