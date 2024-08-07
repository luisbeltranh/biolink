<?php
header('Content-type: text/css; charset:UTF-8');
?>
/*===================================
Background Color
=====================================*/
body {
/* 1 background-color: #eae7dc; */
background-color: #0f0;

transition: all 0.5s;
}

/*===================================
Custom Text Color
=====================================*/
.custom-text-color-primary {
color: #d3d3d3;
transition: all 0.5s;
}

.custom-text-color-secondary {
color: #a7a7a7;
transition: all 0.5s;
}

/*===================================
Img Rounded Circle Border Color
=====================================*/
.rounded-circle {
border: 2px solid rgba(255, 255, 255, 0.25);
transition: all 0.5s;
}

/*===================================
A Color
=====================================*/
a {
color:#aaa;
transition: all 0.5s;
}
a:hover {
color: #fff;
transition: all 0.5s;
}

/*===================================
Back To Top Color
=====================================*/
.back_top {
background-color: #fff;
transition: all 0.5s;
}

.back_top i {
color: rgb(61, 59, 60);
transition: all 0.5s;
}

/*===================================
Social Icons
=====================================*/
.about-social li a {
color: white;
background-color: #903749;
box-shadow: 2px 5px 8px rgba(0,0,0,30%);
border: 1px solid rgba(255, 255, 255, 0.25);
transition: all 0.5s;
}

.about-social li a:hover {
border: 1px solid rgba(255, 255, 255, 0.25);
color: white;
background-color: rgba(255, 255, 255, 0.40);
transition: all 0.5s;
}

/*===================================
Main Buttons
=====================================*/
.btn-custom {
color: rgb(31, 31, 31);
background-color: #E84545;
box-shadow: 3px 5px 8px rgba(0,0,0,40%);
border: 1px solid rgba(255, 255, 255, 0.25);
transition: all 0.5s;
}

.btn-custom:hover,
.btn-custom:focus,
.btn-custom:active,
.btn-custom.active,
.btn-custom.focus,
.btn-custom:active,
.btn-custom:focus,
.btn-custom:hover,
.open > .dropdown-toggle.btn-custom {
color: #fff;
background-color: #53354A66;
border: 1px solid rgba(255, 255, 255, 0.25);
transition: all 0.5s;
}

/* Form message text */
/* #success_msg {
color: #aaa;
} */

/*===================================
Form Switch Colors
=====================================*/
.form-control {
color: rgb(255, 255, 255);
border: 1px solid rgba(255, 255, 255, 0.1);
background-color: #e1e1e1c2;
box-shadow: 3px 5px 8px rgba(0,0,0,40%);
border: 1px solid rgba(255, 255, 255, 0.25);
transition: all 0.5s;
}

/*===================================
Toggle Switch Colors
=====================================*/
.form-check-input:checked {
background-color: #5c5c5c;
border: 1px solid rgba(255, 255, 255, 0.25);
transition: all 0.5s;
}

.form-check-input {
background-color: #aaa;
border-color: #fff;
transition: all 0.5s;
}

/*===================================
Modal Colors
=====================================*/
.modal-content {
background-color: #1f1f1f;
transition: all 0.5s;
}