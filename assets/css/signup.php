<?php
    header("Content-type: text/css; charset: UTF-8");
    require 'server.php';
?>
.sign-up-form {
  color: #66605b;
  }
.sign-up-form h4 {
  color: #7ed321;
}
.sign-up-form input,
.sign-up-form input[type="radio"] + label,
.sign-up-form input[type="checkbox"] + label:before,
.sign-up-form select option,
.sign-up-form select {
  width: 100%;
  padding: 1em;
  line-height: 1.4;
  background-color: #f9f9f9;
  border: 1px solid #e5e5e5;
  border-radius: 3px;
  -webkit-transition: 0.35s ease-in-out;
  -moz-transition: 0.35s ease-in-out;
  -o-transition: 0.35s ease-in-out;
  transition: 0.35s ease-in-out;
  transition: all 0.35s ease-in-out;
}
.sign-up-form input:focus {
  outline: 0;
  border-color: #64ac15;
}
.sign-up-form input:focus + .input-icon i {
  color: #7ed321;
}
.sign-up-form input:focus + .input-icon:after {
  border-right-color: #7ed321;
}
.sign-up-form input[type="radio"] {
  display: none;
}
.sign-up-form input[type="radio"] + label,
.sign-up-form select {
  display: inline-block;
  width: 50%;
  text-align: center;
  float: left;
  border-radius: 0;
}
.sign-up-form input[type="radio"] + label:first-of-type {
  border-top-left-radius: 3px;
  border-bottom-left-radius: 3px;
}
.sign-up-form input[type="radio"] + label:last-of-type {
  border-top-right-radius: 3px;
  border-bottom-right-radius: 3px;
}
.sign-up-form input[type="radio"] + label i {
  padding-right: 0.4em;
}
.sign-up-form input[type="radio"]:checked + label,
.sign-up-form input:checked + label:before,
.sign-up-form select:focus,
.sign-up-form select:active {
  background-color: #7ed321;
  color: #ffffff;
  border-color: #64ac15;
}
.sign-up-form input[type="checkbox"] {
  display: none;
}
.sign-up-form input[type="checkbox"] + label {
  position: relative;
  display: block;
  padding-left: 1.6em;
  color:#ffffff;
}
.sign-up-form input[type="checkbox"] + label:before {
  position: absolute;
  top: 0.2em;
  left: 0;
  display: block;
  width: 1em;
  height: 1em;
  padding: 0;
  content: "";
}
.sign-up-form input[type="checkbox"] + label:after {
  position: absolute;
  top: 0.45em;
  left: 0.2em;
  font-size: 0.8em;
  color: #ffffff;
  opacity: 0;
  font-family: FontAwesome;
  content: "\f00c";
}
.sign-up-form input:checked + label:after {
  opacity: 1;
}

.sign-up-form select {
  height: 3.6em;
  line-height: 2;
  width: 100%;
}
.sign-up-form select:first-of-type {
  border-top-left-radius: 3px;
  border-bottom-left-radius: 3px;
}
.sign-up-form select:last-of-type {
  border-top-right-radius: 3px;
  border-bottom-right-radius: 3px;
}
.sign-up-form select:focus,
.sign-up-form select:active {
  outline: 0;
}
.sign-up-form select option {
  color: #252525;
}

.submit-btn-padding{
	padding-top: 11px;
}

.sign-up-form .input-group-icon {
  position: relative;
}
.sign-up-form .input-group-icon input {
  padding-left: 4.4em;
}
.sign-up-form .input-group-icon .input-icon {
  position: absolute;
  top: 0;
  left: 0;
  width: 3.4em;
  height: 3.4em;
  line-height: 2.4em;
  text-align: center;
  pointer-events: none;
}
.sign-up-form .input-group-icon .input-icon:after {
  position: absolute;
  top: 0.6em;
  bottom: 0.6em;
  left: 3.4em;
  display: block;
  border-right: 1px solid #e5e5e5;
  content: "";
  -webkit-transition: 0.35s ease-in-out;
  -moz-transition: 0.35s ease-in-out;
  -o-transition: 0.35s ease-in-out;
  transition: 0.35s ease-in-out;
  transition: all 0.35s ease-in-out;
}
.sign-up-form .input-group-icon .input-icon .vertical-flip i{
	padding-top: 7px;
}

.sign-up-form .input-group-icon .input-icon .phn i{
	padding-top: 13px;
}

.sign-up-form .input-group-icon .input-icon i {
  -webkit-transition: 0.35s ease-in-out;
  -moz-transition: 0.35s ease-in-out;
  -o-transition: 0.35s ease-in-out;
  transition: 0.35s ease-in-out;
  transition: all 0.35s ease-in-out;
  padding-top: 15px;
}
.sign-up-form .container {
	background-image: url("<?php echo $server; ?>Registration/img/cover.png");
	background-size: cover;
	background-position: center;
  	max-width: 40em;
  	padding: 1em 4em 2em 4em;
  	margin: 0em auto;
  	border-radius: 10px;
  	box-shadow: 0px 3px 10px -2px rgba(0, 0, 0, 0.2);
}
.sign-up-form .row {
  zoom: 1;
}
.sign-up-form .row:before,
.sign-up-form .row:after {
  content: "";
  display: table;
}
.sign-up-form .row:after {
  clear: both;
}
.sign-up-form .col-half {
  padding-right: 10px;
  float: left;
  width: 50%;
}
.sign-up-form .col-half:last-of-type {
  padding-right: 0;
}

.row .hover-focus input[type="submit"]{
	background-color: #2672ec;
	border: 0;
	color:#ffffff;
	padding-right: 44px;
}
.row .hover-focus input[type="submit"]:hover{
	background-color: #125acd;
	color:#ffffff;
	border : 0;
}

.input-icon .solgas{
	color: #ffffff;
	font-size: 22px;
}

@media only screen and (max-width: 540px) {
  .sign-up-form .col-half {
    width: 100%;
    padding-right: 0;
  }
}