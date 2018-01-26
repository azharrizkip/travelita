<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<h2>Hai, <?php echo $this->session->userdata("name"); ?> Selamat Anda Berhasil Login!</h2>
<a href="<?php base_url();?>logout">Logout</a>
</body>
</html>