<style type="text/css">

html{
	scroll-behavior: smooth;
}

*{margin: 0; padding: 0; box-sizing: border-box; font-family: 'Mulish', sans-serif;}

.nav_style{
	background-color: #39a6a3;
}

.nav_style a{
	color: white;
}



/*main header*/
.main_header{
	height:450px;
	width:100%;
}

.rightside h1{
	font-size:3rem;
}

.corona_rot img{
	animation: gocorona 3s linear infinite;
}

@keyframes gocorona{
	0% { transform: rotate(0); }
	100% { transform: rotate(360deg); }
}

.leftside img{ 
	animation : heartbeat 5s linear infinite;
}

@keyframes heartbeat{
	0% { transform: scale(.75); }
	20% { transform: scale(1); }
	40% { transform: scale(.75); }
	60% { transform: scale(1); }
	80% { transform: scale(.75); }
	100% { transform: scale(1); }
}

/*==========corona update=============*/
.corona_update{
	margin: 0 0 30px 0;
}

.corona_update h3{
	color: #99154e;
}

.corona_update h1{
	font-size: 2rem;
	text-align: center;
}

/*-----------about section-----------*/
.sub_section{
	background-color: #a7c4bc;
}

.footer_style{
	background-color: #39a6a3;
}

.footer_style p{
	margin-bottom: 0;
	padding: 10px;
}
</style>
