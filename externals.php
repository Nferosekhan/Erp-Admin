  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" media="all" href="vendor/daterangepicker/daterangepicker.css" />

  <link href="assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="assets/css/dtimporttsa-ui.css" rel="stylesheet" />
  <link href="assets/css/improved-inventory.css" rel="stylesheet" />

  <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
  <link href="assets/fontawesome/css/all.css" rel="stylesheet">
  <link href="assets/js/plugins/jquery-ui-1.13.1/jquery-ui.min.css" rel="stylesheet" />
  <link id="pagestyle" href="assets/css/soft-ui-dashboard.css?v=1.0.3" rel="stylesheet" />  
  <link href="vendor/select2/css/select2.min.css" rel="stylesheet" />
  <link href="vendor/select3/css/select3.min.css" rel="stylesheet" />

  <style>
    table td::before{
        color: black;
    }
  .select2-container--default .select2-selection--single{	border:none;}.select2-container{	width: 130px !important;	margin-top:3px;}
  @media only screen and (max-width: 600px) 
  {
	  .select2-container
	  {	
		  width: 90px !important;	margin-top:3px;
	  }
	  .select2-container--open .select2-dropdown--below
	  {
		  width: 130px !important;
	  }
	  #fulla
	  {
	  padding-left: 12px !important;
	  }
}
</style>
<style type="text/css">
  <?php
if ($current_file_name=='custom.php') {
    ?>
    th{
    word-break: break-all;
    }
table tbody tr:nth-of-type(odd) { 
  
}
@media screen and (max-width: 850px) 
{
  .add{
    position: relative;
    top: 36px; 
  }
  table {
    border: 0;
    margin-top: 30px;
  }

  table caption {
    font-size: 1.3em;
  }
  
  table thead {
    border: none;
    clip: rect(0 0 0 0);
    height: 1px;
    margin: -1px;
    overflow: hidden;
    padding: 0;
    position: absolute;
    width: 1px;
  }
  
  table tr {
    border-bottom: 3px solid #ddd;
    display: block;
    margin-bottom: 1em;
  }
  
  
  table td {
    border-bottom: 1px solid #ddd;
    display: block;
    font-size: .8em;
    text-align: right;
  }
  
  table td::before {
    /*
    * aria-label has no advantage, it won't be read inside a table
    content: attr(aria-label);
    */
    content: attr(data-label);
    float: left;
    font-weight: bold;
    text-transform: uppercase;
  }
  
  table td:last-child {
    border-bottom: 0;
  }
}
.wrapword {
overflow-wrap: break-word;
word-wrap: break-word;
word-break: break-word;
      }
      <?php
    }
    ?>
  <?php
if ($current_file_name=='customadd.php'||$current_file_name=='customedit.php') {
    ?>
   .tree li {
     font-size:13px;
    list-style-type:none;
    margin:0;
    padding:2px 5px 0 5px;
    position:relative
}
.tree li::before, 
.tree li::after {
    content:'';
    left:-20px;
    position:absolute;
    right:auto
}
.tree li::before {
    border-left:1px solid #ced4da;
    bottom:50px;
    height:100%;
    top:0;
    width:1px
}
.tree li::after {
    border-top:1px solid #ced4da;
    height:20px;
    top:15px;
    width:25px
}
.tree li span {
    display:inline-block;
    padding:3px 3px;
    text-decoration:none;
    cursor:pointer;
}
.tree>ul>li::before,
.tree>ul>li::after {
    border:0
}
.tree li:last-child::before {
    height:15px
}
.tree li span a
{
  text-decoration:none;
}
.tree li span:hover {
   
    }
  .tree li span:hover a{
  color:white;
  }

[aria-expanded="false"] > .expanded,
[aria-expanded="true"] > .collapsed {
  display: none;
}
 
 .myinput::-webkit-input-placeholder {
    font-size: 9.5px;
 }
.profile-badge{
    border:1px solid #c1c1c1;
    padding:5px;
    position: relative;
}

.profile-pic{
    height:80px;
    /*width:120px;*/
    padding: 10px;
}
.profile-pic img{
   
    border-radius: 50%;
    box-shadow: 0px 0px 5px 0px #c1c1c1;
    cursor: pointer;
    width: 60px;
    height: 60px;
}   
    /*************************************
 * BUTTON BASE
 */

    .arlina-button {
        position: relative;
        border: 0;
        cursor: pointer;
        outline: 0;
        -webkit-appearance: none;
        -webkit-font-smoothing: antialiased;
        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
    }

    .arlina-button[data-loading] {
        cursor: default;
    }


    /* Blue button */
    .arlina-button.blue {
        background: #53b5e6;
        color: #fff;
        border-radius: 2px;
        border: 1px solid transparent;
    }

    .arlina-button.blue:hover {
        border-color: rgba(0, 0, 0, 0.07);
        background-color: #58c2f8;
    }

    .arlina-button.blue[data-loading] {
        border-color: rgba(0, 0, 0, 0.07);
        background-color: #999;
    }

    /* Orange button */
    .arlina-button.orange {
        background: #ea8557;
        color: #fff;
        border-radius: 2px;
        border: 1px solid transparent;
    }

    .arlina-button.orange:hover {
        border-color: rgba(0, 0, 0, 0.07);
        background-color: #ffa96c;
    }

    .arlina-button.orange[data-loading] {
        border-color: rgba(0, 0, 0, 0.07);
        background-color: #999;
    }


    /* Spinner animation */
    .arlina-button .spinner {
        position: absolute;
        width: 20px;
        height: 20px;
        top: 50%;
        margin-top: -10px;
        opacity: 0;

        background-image: url("assets/img/spin.gif");
        background-repeat: no-repeat;

        /* background-image: url(http://2.bp.blogspot.com/-GPSLDnKmX3s/VSvPkXsCHvI/AAAAAAAACOg/Xmm2kIDu-CU/s1600/spin.gif); */


    }


    /*************************************
 * EASING
 */

    .arlina-button,
    .arlina-button .spinner,
    .arlina-button .label {
        -webkit-transition: 0.3s cubic-bezier(0.175, 0.885, 0.320, 1.275) all;
        -moz-transition: 0.3s cubic-bezier(0.175, 0.885, 0.320, 1.275) all;
        -ms-transition: 0.3s cubic-bezier(0.175, 0.885, 0.320, 1.275) all;
        transition: 0.3s cubic-bezier(0.175, 0.885, 0.320, 1.275) all;
    }

    .arlina-button.zoom-in,
    .arlina-button.zoom-in .spinner,
    .arlina-button.zoom-in .label,
    .arlina-button.zoom-out,
    .arlina-button.zoom-out .spinner,
    .arlina-button.zoom-out .label {
        -webkit-transition: 0.3s ease all;
        -moz-transition: 0.3s ease all;
        -ms-transition: 0.3s ease all;
        transition: 0.3s ease all;
    }



    /*************************************
 * EXPAND RIGHT
 */

    .arlina-button.expand-left .spinner {
        left: 0.8em;
    }

    .arlina-button.expand-left[data-loading] {
        padding-left: 40px;
    }

    .arlina-button.expand-left[data-loading] .spinner {
        opacity: 1;
    }
      <?php
    }
    ?>
  <?php
if ($current_file_name=='customview.php') {
    ?>
table tbody tr:nth-of-type(odd) { 
  
}
@media screen and (max-width: 600px) 
{
  table {
    border: 0;
  }

  table caption {
    font-size: 1.3em;
  }
  
  table thead {
    border: none;
    clip: rect(0 0 0 0);
    height: 1px;
    margin: -1px;
    overflow: hidden;
    padding: 0;
    position: absolute;
    width: 1px;
  }
  
  table tr {
    border-bottom: 3px solid #ddd;
    display: block;
    margin-bottom: 1em;
  }
  
  
  table td {
    border-bottom: 1px solid #ddd;
    display: block;
    font-size: .8em;
    text-align: right;
  }
  
  table td::before {
    /*
    * aria-label has no advantage, it won't be read inside a table
    content: attr(aria-label);
    */
    content: attr(data-label);
    float: left;
    font-weight: bold;
    text-transform: uppercase;
  }
  
  table td:last-child {
    border-bottom: 0;
  }
}
.table td, .table th {
    white-space: normal;
}
   .tree li {
     font-size:13px;
    list-style-type:none;
    margin:0;
    padding:2px 5px 0 5px;
    position:relative
}
.tree li::before, 
.tree li::after {
    content:'';
    left:-20px;
    position:absolute;
    right:auto
}
.tree li::before {
    border-left:1px solid #ced4da;
    bottom:50px;
    height:100%;
    top:0;
    width:1px
}
.tree li::after {
    border-top:1px solid #ced4da;
    height:20px;
    top:15px;
    width:25px
}
.tree li span {
    display:inline-block;
    padding:3px 3px;
    text-decoration:none;
    cursor:pointer;
}
.tree>ul>li::before,
.tree>ul>li::after {
    border:0
}
.tree li:last-child::before {
    height:15px
}
.tree li span a
{
  text-decoration:none;
}
.tree li span:hover {
   
    }
  .tree li span:hover a{
  color:white;
  }

[aria-expanded="false"] > .expanded,
[aria-expanded="true"] > .collapsed {
  display: none;
}
 
 .myinput::-webkit-input-placeholder {
    font-size: 12px;
 }
  .slow .toggle-group { transition: left 0.7s; -webkit-transition: left 0.7s; }
  .fast .toggle-group { transition: left 0.1s; -webkit-transition: left 0.1s; }
  .quick .toggle-group { transition: none; -webkit-transition: none; }
  
  .toggle-group .btn {
    display: inline-block;
    padding: 6px 12px;
    margin-bottom: 0;
    font-size: 14px;
    font-weight: 400;
    line-height: 1.42857143;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    background-image: none;
    border: 1px solid transparent;
    border-radius: 4px;
    margin-bottom: 0rem;
}
  .toggle-group .btn-default {
    color: #333;
    background-color: #fff;
    border-color: #ccc;
}
.toggle-on {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 50%;
    margin: 0;
    border: 0;
    border-radius: 0;
}
.toggle-off {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 50%;
    right: 0;
    margin: 0;
    border: 0;
    border-radius: 0;
}
.toggle-handle {
    position: relative;
    margin: 0 auto;
    padding-top: 0px;
    padding-bottom: 0px;
    height: 100%;
    width: 0px;
    border-width: 0 1px;
}
.toggle-on.btn {
    padding-right: 24px;    
    text-transform:none;
}
.toggle-off.btn {
    padding-left: 24px;
    text-transform:none;
}
 .toggle-group .btn-success {
    color: #fff;
    background-color: #5cb85c;
    border-color: #4cae4c;
}
.toggle-group .btn-danger.active
{
    color: #fff;
    background-color: #c9302c;
    border-color: #ac2925;
}
.toggle.btn
{
        margin-bottom: 0rem;
}
 
 .myinput::-webkit-input-placeholder {
    font-size: 9.5px;
 }
 .card .card-body {
    font-family:'Myriad Set Pro','Helvetica Neue',Helvetica,Arial,sans-serif;
   
}
input, button, select, optgroup, textarea
{
    font-family:'Myriad Set Pro','Helvetica Neue',Helvetica,Arial,sans-serif;;
   
}
      <?php
    }
    ?>
</style>
