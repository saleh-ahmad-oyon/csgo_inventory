<?php
    header("Content-type: text/css; charset: UTF-8");
?>
.cover-image{
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    z-index: -1;
    top:0;
	background-image: url("../images/csgo.jpg");
	background-position: center;
	background-repeat: no-repeat;
	background-attachment: fixed;
	background-size: cover;
	filter: url('data:image/svg+xml;charset=utf-8,<svg xmlns="http://www.w3.org/2000/svg"><filter id="filter"><feGaussianBlur stdDeviation="2" /></filter></svg>#filter');
    -webkit-filter: blur(2px);
    filter: blur(2px);
    height: 100%;
}

body{
    line-height: 0;
}

.bodytype{
	color: #ffffff;
	height:auto;
	font-size: 12px;
	overflow-x: hidden;
	font-family: "Comic Sans MS", cursive, sans-serif;
}

section{
	min-height:333px;
}

h1{
    font-family: 'Courgette', cursive;
    font-size: 40px;
    /*text-shadow: 4px 4px 4px #aaa;*/
    color: #05e28f;
}

.gold{color: #D4AF37;}
.silver{color: #C0C0C0;}
.bronze{color: #CD7F32;}

.classified{color: rgb(211, 44, 230);}
.StatTrak{color: rgb(207, 106, 50);}
.Souvenir{color: rgb(255, 215, 0);}
.MilSpec{color: rgb(75, 105, 255);}
.restricted{color: rgb(136, 71, 255);}
.industrial{color: rgb(94, 152, 217);}
.consumer{color: rgb(176, 195, 217);}
.Covert{color: rgb(235, 75, 75);}
.contraband{color: rgb(228, 174, 57);}

.divborder{
	border-style: ridge;
	border-color: #0082e7;
}

.divbackcolor{background-color: #333;}

.table-bordered > tbody > tr > td{
	border: 1px solid #46C5E8;
}
		
/*hr.style-seven {height: 30px;border-style: solid;border-color: #ffff00;border-width: 1px 0 0 0;border-radius: 30px;}*/

.fontsize11px{font-size: 11.5px;}
.fontsize10px{font-size: 10px;}
.fontsize15px{font-size: 15px;}

.none{
	list-style-type: none;
}

a {
    text-decoration: none !important;
}

a:visited{
	color: #70f343;
}

a:link {
    color: #70f343;
}

.zoom{
	zoom: 300%
}

.vertical-flip{
	-webkit-transform: scale(1, -1);
	-ms-transform: scale(1, -1);
	transform: scale(1, -1);
}
.trans-one-eighty{
	-webkit-transform: rotate(180deg);
    -ms-transform: rotate(180deg);
    transform: rotate(180deg);
}

.trans-ninty{
	-webkit-transform: rotate(90deg);
    -ms-transform: rotate(90deg);
    transform: rotate(90deg);
}

/*table*/

.table-green{background-color: #3bb156;}
.table-red{background-color: #d62027;}
.table-blue{background-color: #525daa;}

/*header*/

.header-image{
	background-image: url("../images/header.png");
	background-size: cover;
	padding-top: 10px;
    overflow-x: hidden;
}

.login-btn a:link,
.login-btn a:visited{
	color: #ffffff;
}

/* Login */
.login-image{
	background-image: url("../images/cover.png");
	background-size: cover;
	border-radius: 10px;
	background-position: center;
}

.social-corner{
	border-top-color: #d9d7d7;
	border-top-width: 1px;
	border-top-style: groove;
}

.login-logo img{
	margin-bottom: 40px;
}

.hover-focus:hover{
  -webkit-transform: scale(1.05);
      -ms-transform: scale(1.05);
          transform: scale(1.05);
}

.field-warn input:active, .field-warn input:focus {
	border: 1px solid #ff656c;
}

.btn-log-lonely input[type="submit"]{
	background-color: transparent;
	border: 0;
}

.forgot{
	width: 100%;
	font-size: 14px;
}

.btn-link-facebook { background: #4862a3; }
.btn-link-twitter { background: #55acee; }
.btn-link-google-plus { background: #dd4b39; }
.btn-link-steam { background: #101e45; }

.social-corner center a:link,
.social-corner center a:visited,
.sign a:link,
.sign a:visited{
	color: #ffffff;
	text-decoration: none;
}

.social-corner center .btn{
	border-radius:50%;
	height: 35px;
	width:35px;
}

.social-corner .btn-link-facebook,
.social-corner .btn-link-twitter,
.social-corner .btn-link-google-plus,
.social-corner .btn-link-steam{
	padding: 6px 7px;
	font-size: 15px;
	margin-right: 2px;
}

.sign{
	display:inline-block; 
	width:100%; 
	line-height:50px;
	margin-top: 25px;
}
.sign-button{
	margin-top: 5px;
}

/* Footer */

.footer-distributed{
	background-image: url("../images/footer.jpg");
	background-size: cover;
	box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
	box-sizing: border-box;
	width: 100%;
	text-align: left;
	font-weight: bold;
	padding: 20px 15px;
	margin-top: 60px;
}

.footer-distributed .footer-left,
.footer-distributed .footer-center,
.footer-distributed .footer-right{
	display: inline-block;
	vertical-align: top;
}

/* Footer left */

.footer-distributed .footer-left{
	width: 37%;
}

/* Footer links */

.footer-distributed .footer-links{
	margin: 105px 0 12px;
	padding: 0;
	font-size: 13px;
}

.footer-distributed .footer-company-name{
	color:  #8f9296;
	font-size: 16px;
	font-weight: normal;
	margin: 0;
}

/* Footer Center */

.footer-distributed .footer-center{
	width: 37%;
}

.footer-distributed .footer-center i{
	background-color: #5B6063;
	color: #ffffff;
	font-size: 25px;
	width: 38px;
	height: 38px;
	border-radius: 50%;
	text-align: center;
	line-height: 39px;
	margin: 10px 15px;
	vertical-align: middle;
}

.footer-distributed .footer-center i.fa-envelope{
	font-size: 17px;
	line-height: 35px;
}

.footer-distributed .footer-center address,
.footer-distributed .footer-center p{
	display: inline-block;
	vertical-align: middle;
	margin:0;
	font-size: 16px;
}

.footer-distributed .footer-center address span{
	display:block;
	font-size:14px;
	line-height:2;
}

.footer-distributed .footer-center p a{
	color:  #5383d3;
	text-decoration: none;;
}


/* Footer Right */

.footer-distributed .footer-right{
	width: 24%;
}

.footer-distributed .footer-float-value{
	line-height: 20px;
	color:  #92999f;
	font-size: 13px;
	font-weight: normal;
	margin: 0;
}

.footer-distributed .footer-float-value span{
	display: block;
	color:  #ffffff;
	font-size: 14px;
	font-weight: bold;
	margin-bottom: 20px;
}

.footer-distributed .footer-icons{
	margin-top: 20px;
}

.footer-distributed .footer-icons a{
	padding-top: 3px;
	display: inline-block;
	width: 35px;
	height: 35px;
	cursor: pointer;
	background-color:  #101417;
	border-radius: 50%;
	font-size: 20px;
	color: #ffffff;
	text-align: center;
	margin-right: 3px;
}

.footer-icons span{
	display: block;
	font-size: 14px;
	font-weight: bold;
	margin-bottom: 20px;
}

.padding-top-10{
    padding-top: 10px;
}

@media screen and (max-width: 991px) {
	/* Header */
	.header-image a{
		margin-bottom: 11px;
	}
	
	.header-image .row .col-md-12 .col-md-3 img{
		width: 50%;
	}
	
	.marg-bot .col-md-3{
		margin-bottom:5px;
	}
	
	/* login */
	.login-logo img{
		width:40%
	}
	
	.sign .btn,{
		font-size:12px;
		padding: 5px 10px;
	}

	.social-corner .btn-link-facebook,
	.social-corner .btn-link-twitter,
	.social-corner .btn-link-google-plus,
	.social-corner .btn-link-steam{
		padding: 8px 7px;
	}
	
	/* Footer */
	
	.footer-distributed .footer-left img{
		width: 40%;
	}
	
	.footer-distributed .footer-links{
		margin: 50px 0 12px;
	}

	.footer-distributed .footer-left,
	.footer-distributed .footer-center,
	.footer-distributed .footer-right{
		display: block;
		width: 100%;
		margin-bottom: 40px;
		text-align: center;
	}

	.footer-distributed .footer-center i{
		margin-left: 0;
	}
	

}

@media screen and (min-width: 991px) and (max-width: 1199px){
	.weird-font-size{
		font-size: 9.3px;
	}
}

@media screen and (max-width: 480px) {
	
	.footer-distributed .footer-center i{
	font-size: 20px;
	width: 32px;
	height: 32px;
	line-height: 33px;
}
	
	/*Login*/
	
	.sign{
		font-size: 10px;
	}
	.forgot{
		font-size: 9px;
	}
	
	.checkbox .forgot input[type="checkbox"] {
    	margin-left: -20px;
	}
	
	.forgot input[type="checkbox"] {
    	margin: 0px 0px 0px;
	}
	
	.sign .btn{
		padding: 4px 4px;
	}
	
	.sign .login-btn{
		margin-top: 7px;
	}
	.social-corner center .btn{
		height: 30px;
		width:30px;
	}

	.social-corner .btn-link-facebook,
	.social-corner .btn-link-twitter,
	.social-corner .btn-link-google-plus,
	.social-corner .btn-link-steam{
		padding: 8px 7px;
		font-size: 14px;
		margin-right: 1px;
	}
	.footer-distributed .footer-links{
		margin: 50px 0 12px;
	}
	
	.footer-distributed .footer-center i.fa-envelope{
		line-height: 30px;
	}
	.footer-distributed .footer-center p{
		font-size: 14px;
	}
	.footer-distributed .footer-center p a{
		font-size: 15px;
	}
	
	.footer-distributed .footer-icons a{
		width: 30px;
		height: 30px;
		font-size: 17px;
	}
}

@media screen and (max-width: 292px){
	.weird-font-size{
		font-size: 9.3px;
	}
	.forgot{
		font-size: 7.5px;
	}
	.sign{
		font-size: 8px;
	}
}