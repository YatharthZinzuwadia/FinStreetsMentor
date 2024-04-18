<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="<?= base_url();?>assets/chat.js"></script>
<link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/chat.css">
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
    <head>
        <title>Chat</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.js"></script>
    </head>
    <!--Coded With Love By Mutiullah Samim-->
    <body>
        <div class="container-fluid h-100">
            <div class="row justify-content-center h-100">
               
                <div class="col-md-8 col-xl-6 chat">
                    <div class="card">
                        <ul class="list-group">
                            <?php foreach($message as $val):?>
                            <li class="list-group-item"><a href="<?=base_url()?>chat/chat/<?=$val['user_id']?>"><?=$val['full_name'];?></a></li>
                            <li class="list-group-item"><a href="<?=base_url()?>chat/chat/<?=$val['user_id']?>"><?=$val['full_name'];?></a></li>
                           
                                <?php endforeach;?>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
