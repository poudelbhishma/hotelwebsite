<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Contact</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">

	<style>
	
	
		@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500,600,700,800,900@display=swap');
  	*{
  		margin: 0;
  		padding: 0;
  		box-sizing: border-box;
  		font-family: 'Josefin Sans', sans-serif;
	}
	.contact{
		position: relative;
		min-height: 100vh;
		padding: 50px 100px;
		display: flex;
		justify-content: center;
		align-items: center;
		flex-direction: column;
		background: url(pic.jpg);
		background-size: cover;
	}
	.contact .content{
		max-width: 800px;
		text-align: center;
	}
	.contact .content h2{
		font-size: 36px;
		font-weight: 500;
		color: #fff;
	}
	.contact .content p{
		font-weight: 300;
		color: #fff;
		font-size: 15px;
	}
	.container{
		width: 100%;
		display: flex;
		justify-content: center;
		align-items: center;
		margin-top: 30px;
	}
	.container .contactInfo{
		width: 40%;
		display: flex;
		flex-direction: column;
	}
	.container .contactInfo .box{
		position: relative;
		padding: 20px 0;
		display: flex;
	}
	.container .contactInfo .box .icon{
		min-width: 60px;
		height: 60px;
		background: #fff;
		display: flex;
		justify-content: center;
		align-items: center;
		border-radius: 50%;
		font-size: 22px;
	}
	.container .contactInfo .box .text{
		display: flex;
		margin-left: 20px;
		font-size: 16px;
		color: #fff;
		flex-direction: column;
		font-weight: 300;
	}
	.container .contactInfo .box h3{
		font-weight: 500;
		color: #00bcd4;
	}
	.contactForm{
		width: 40%;
		padding: 40px;
		background: #fff;
	}
	.contactForm h2{
		font-size: 30px;
		color: #333;
		font-weight: 500;
	}
	.contactForm .inputBox{
		position: relative;
		width: 100%;
		margin-top: 10px;
	}
	.contactForm .inputBox input,
	.contactForm .inputBox textarea{
		width: 100%;
		padding: 5px 0;
		font-size: 16px;
		margin: 10px 0;
		border: none;
		border-bottom: 2px solid #333;
		outline: none;
		resize: none;
	}
	.contactForm .inputBox span{
		position: absolute;
		left: 0;
		padding: 5px 0;
		font-size: 16px;
		margin: 10px 0;
		transition: 0.5s;
		color: #666;
	}
	.contactForm .inputBox input:focus ~ span,
	.contactForm .inputBox input:valid ~ span,
	.contactForm .inputBox textarea:focus ~ span,
	.contactForm .inputBox textarea:valid ~ span{
		color: #e91e63;
		font-size: 12px;
		transform: translateY(-20px);
	}
	.contactForm .inputBox input[type="submit"]{
		width: 100px;
		background: #00bcd4;
		color: #fff;
		border: none;
		cursor: pointer;
		padding: 10px;
		font-size: 18px;
	}

	@media (max-width: 991px){
		.contact{
			padding: 50px;
		}
		.container{
			flex-direction: column;
		}
		.container .contactInfo{
			margin-bottom: 40px;
		}
		.container .contactInfo,
		.contactForm{
			width: 100%;
		}
	}


	
	</style>
</head>
<body>
	<header>

    <a href="#" class="logo"><i class="fas fa-utensils"></i>food</a>

    <div id="menu-bar" class="fas fa-bars"></div>

    <nav class="navbar">
        <a href="index.php">home</a>
        <a href="about.php">About</a>
        <a href="#gallery">Our Blog</a>
        <a href="#order">Order</a>
        <a href="#contact">Contact</a>
    </nav>

</header>

<!-- header section ends -->


	<section class="contact">
		<div class="content">
			<h2>Contact Us</h2>
			<p>To make your document look professionally produced, Word provides header, footer, cover page. </p>
		</div>
		<div class="container">
			<div class="contactInfo">
				<div class="box">
					<div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
						<div class="text">
							<h3>Address</h3>
							<p>Shivaraj_04 Bankatti,<br>kapilavastu<br>Nepal</p>
						</div>
					</div>
					<div class="box">
					<div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
						<div class="text">
							<h3>Phone</h3>
							<p>076540715<br>9857083812</p>
						</div>
					</div>
					<div class="box">
					<div class="icon"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
						<div class="text">
							<h3>Email</h3>
							<p>hotelbalaji9001@gmail.com</p>
						</div>
					</div>
				</div>
			
			<div class="contactForm">
				<form>
					<h2>Send Me Massage</h2>
					<div class="inputBox">
						<input type="text" name="required">
						<span>Full Name</span>
					</div>
					<div class="inputBox">
						<input type="email" name="required">
						<span>Email</span>
					</div>
					<div class="inputBox">
						<textarea required="required"></textarea>
						<span>What you want</span>
					</div>
					<div class="inputBox">
						<input type="submit" name="" value="send">
					</div>
				</form>
				</div>
			</div>
	</section>
<section class="footer">

    <div class="share">
        <a href="#" class="btn">facebook</a>
        <a href="#" class="btn">twitter</a>
        <a href="#" class="btn">instagram</a>
        <a href="#" class="btn">pinterest</a>
        <a href="#" class="btn">linkedin</a>
    </div>

    <h1 class="credit"> You Have <span> Also Join </span> Our Social Media </h1>
    <h3 class="credit"> Thank You <span> Visit Our </span> Hotel </h3>

</section>


</body>
</html>