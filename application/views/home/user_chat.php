<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="<?= base_url(); ?>assets/js/chat.js"></script>
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/chat.css">
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
                        <div class="card-header msg_head">
                            <div class="d-flex bd-highlight">
                                <div class="img_cont">
                                    <img src="<?= base_url(); ?>assets/images/user.png" class="rounded-circle user_img">
                                    <span class="online_icon"></span>
                                </div>
                                <div class="user_info">
                                    <span>Chat with <?= $chat_with['full_name'] ?></span>
                                    <p></p>
                                </div>
                                <div class="video_cam">
                                    <span><i class="fas fa-video"></i></span>
                                    <span><i class="fas fa-phone"></i></span>
                                </div>
                            </div>
                            <span id="action_menu_btn"><i class="fas fa-ellipsis-v"></i></span>
                            <div class="action_menu">
                                <ul>
                                    <li><i class="fas fa-user-circle"></i> View profile</li>
                                    <li><i class="fas fa-users"></i> Add to close friends</li>
                                    <li><i class="fas fa-plus"></i> Add to group</li>
                                    <li><i class="fas fa-ban"></i> Block</li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body msg_card_body">
                            <?php foreach ($message as $mkey => $mval): ?>
                                <?php if ($mval['sender_id'] !== $this->session->userdata['user_id']) { ?>
                                    <div class="d-flex justify-content-start mb-4">
                                        <div class="img_cont_msg">
                                            <img src="<?= base_url();?>assets/images/user3.png" class="rounded-circle user_img_msg">
                                        </div>
                                        <div class="msg_cotainer">
                                            <?= $mval['message']; ?>
                                            <span class="msg_time"><?= date('M,D a', strtotime($mval['send_on'])) ?></span>
                                        </div>
                                    </div>
                                <?php } else { ?>
                                    <div class="d-flex justify-content-end mb-4">
                                        <div class="msg_cotainer_send">
                                            <?= $mval['message']; ?>
                                            <span class="msg_time_send"><?= date('M,D a', strtotime($mval['send_on'])) ?></span>
                                        </div>
                                        <div class="img_cont_msg">
                                            <img src="<?= base_url(); ?>assets/images/user2.png" class="rounded-circle user_img_msg">
                                        </div>
                                    </div>
                                <?php } ?>
                            <?php endforeach; ?>
                        </div>
                        <form action="<?=base_url();?>message/send" method="post">
                            <input type="hidden" value="<?= $receiver_id ?>" name="reciver_id"/>

                            <div class="card-footer">
                                <div class="input-group">
                                    <div class="input-group-append">
                                        <span class="input-group-text attach_btn"><i class="fas fa-paperclip"></i></span>
                                    </div>
                                    <textarea name="message" class="form-control type_msg" placeholder="Type your message..."></textarea>
                                    <div class="input-group-append">
                                        <input type="submit" name="sub" value="Send" class="bnt btn-primary">
                                        <button> <a href="http://localhost/innovative_solution/home">Back</a> </button>
                                        <!--<span class="input-group-text send_btn"><i class="fas fa-location-arrow"></i></span>-->
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>