<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="<?= base_url(); ?>assets/chat.js"></script>
<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/chat.css">
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>

<head>
	<title>Chat</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"  crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"  crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.js"></script>
</head>
<!--Coded With Love By Mutiullah Samim-->

<body>
	<div class="container-fluid h-100">
		<div class="row justify-content-center h-100">

			<div class="col-md-4 col-xl-1 chat">
			</div>
			<div class="col-md-4 col-xl-4 chat">
				<div class="card">
					<button><a href="http://localhost/innovative_solution/admin/dashboard">Back</a></button>
					<div class="card-body msg_card_body">
						<?php foreach ($chat_with as $val) : ?>
							<a class="text-white" href="<?= base_url() . "chat/chat/" . $val['user_id'] ?>">
								<div class="p-3 d-flex bg-primary">
									<img style="float:left;height:40px" src="<?= base_url(); ?>assets/image/user.png" class="rounded-circle user_img_msg" alt="Avatar">
									<p style="float:left"><?= $val['username'] ?></p>
							</a>

					</div>

				<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>
</body>

</html>
