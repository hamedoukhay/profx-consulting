<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Expert up Administration</title>
<link href="<?php echo WEBROOT.'css/style.css' ; ?>" rel="stylesheet" type="text/css" />
<!--[if lt IE 8]>
<link href="<?php echo WEBROOT.'css/style_IE.css' ; ?>" rel="stylesheet" type="text/css" media="all" />
<![endif]-->


<script type="text/javascript" src="<?php echo WEBROOT.'js/jquery-1.4.1.js' ; ?>"></script>

<script type="text/javascript" src="<?php echo WEBROOT.'js/galerie.js' ; ?>"></script>
<link rel="stylesheet" href="<?php echo WEBROOT.'css/galerie.css' ; ?>" type="text/css" media="screen"/>


<script type="text/javascript" src="<?php echo WEBROOT.'js/jquery-ui-1.7.2.custom.min.js' ; ?>"></script>


<script type="text/javascript" src="<?php echo WEBROOT.'js/clock.js' ; ?>"></script>
<script type="text/javascript" src="<?php echo WEBROOT.'js/js.js' ; ?>"></script>

<script type="text/javascript" src="<?php echo WEBROOT.'template/plugins/tiny_mce/jquery.tinymce.js' ; ?>"></script>


</head>
<script type="text/javascript"> 

$(document).ready(function(){
	var host= '<?php echo WEBROOT ; ?>';
	$(document).dropdown(host);
	//alert(host);
	// setTimeout('window.location.reload( true );', 3000);
	
})

</script>
<script type="text/javascript">
function is_numeric(field){
	return !isNaN(document.getElementById(field).value);
}
function is_email(field){
	rx=new RegExp("^[\\w\.-]+@[\\w\\.-]+\\.[a-zA-Z]{2,4}$");
	if(!rx.test(document.getElementById(field).value)){
		document.getElementById(field).style.border='2px solid #CA0B10';
		document.getElementById(field).style.background='#f8f6f6';
		return true;
	} else {
		document.getElementById(field).style.border='1px solid #9d3007';
		document.getElementById(field).style.background='#fff';
		return false;
	}
}
function is_empty(field){
	if(document.getElementById(field).value == ''){
		document.getElementById(field).style.border='2px solid #CA0B10';
		document.getElementById(field).style.background='#f8f6f6';
		return true;
	} else {
		document.getElementById(field).style.border='1px solid #9d3007';
		document.getElementById(field).style.background='#fff';
		return false;
	}
}


</script>
<body onload="" >
<div class="container" >
  <!-- HEADER -->
  <div class="header">
    <div class="header_logo">
      <a href="<?php echo WEBROOT ; ?>"><img src="<?php echo WEBROOT.'images/logo.jpg' ;?>" width="417" height="122" alt="Logo" class="logo" /></a>
      <div class="right">
        <ul class="dark">
          <li class="first"><a href="<?php echo LIEN ; ?>" target="_blank">Site web</a></li>
          <li><a href="<?php echo WEBROOT ; ?>users/view/<?php echo $_SESSION['id']; ?>">Mon compte</a></li>
          <!--li><a href="contact.html">Contacter nous</a></li-->
        </ul>
        <div class="clr"></div>
        <ul class="light">
        <li class="first"><span id="tm">11:57</span></li>
          <!--li ><a href="messages.html"><img src="<?php echo WEBROOT.'images/icon_email.gif' ; ?>" alt="picture" width="14" height="10" class="email" /></a><a href="#"><?php echo $m ; ?></a> message<?php if($m>1){echo 's' ; } ?></li-->
          <li><a href="<?php echo WEBROOT ; ?>homes/logout"><img src="<?php echo WEBROOT.'images/icon_logout.gif' ; ?>" alt="picture" width="16" height="16" class="logout" /></a><a href="<?php echo WEBROOT ; ?>homes/logout">Déconnection</a></li>
        </ul>
      </div>
      <div class="clr"></div>
    </div>
    <div class="menu">
      <ul>
        <li class="first"><a href="<?php echo WEBROOT ; ?>" class="active"><span><span><span><img src="<?php echo WEBROOT.'images/icone/32/icon_1.png' ; ?>" width="32" height="32"/>Accueil</span></span></span></a></li>
        <li><a href="<?php echo WEBROOT.'users/' ; ?>"><span><span><span><img src="<?php echo WEBROOT.'images/icone/32/icon_2.png' ; ?>" width="32" height="32"/>Accés</span></span></span></a></li>
        <li><a href="#"><span><span><span><img src="<?php echo WEBROOT.'images/icone/32/icon_3.png'; ?>" width="32" height="32"/>Pages <img src="<?php echo WEBROOT.'images/dropdown_arrow.gif' ; ?>" class="dir" width="8" height="7" /></span></span></span></a>
        <ul>
                <li><a href="<?php echo WEBROOT.'pages/' ; ?>">Créer les pages</a></li>
               <li><a href="<?php echo WEBROOT.'menus/' ; ?>">Gérer menus</a></li>
          </ul>
        </li>
        <li><a href="#"><span><span><span><img src="<?php echo WEBROOT.'images/icone/32/icon_3.png'; ?>" width="32" height="32"/>Articles <img src="<?php echo WEBROOT.'images/dropdown_arrow.gif' ; ?>" class="dir" width="8" height="7" /></span></span></span></a>
        <ul>
                <li><a href="<?php echo WEBROOT.'articles/' ; ?>">Créer les articles</a></li>
                <li><a href="<?php echo WEBROOT.'categories/' ; ?>">Gérer catégories</a></li>
          </ul>
        </li>
         <!--li><a href="#"><span><span><span><img src="<?php echo WEBROOT.'images/icone/32/icon_10.png' ; ?>" width="32" height="32"/>Média <img src="<?php echo WEBROOT.'images/dropdown_arrow.gif' ; ?>" class="dir" width="8" height="7" /></span></span></span></a>
          <ul>
                <li><a href="galeries.html">Galeries</a></li>
                <li><a href="<?php echo WEBROOT.'sons/' ; ?>">Son</a></li>
                <li><a href="<?php echo WEBROOT.'videos/' ; ?>">Vidéo</a></li>
          </ul>
        </li-->
        <li><a href="#"><span><span><span><img src="<?php echo WEBROOT.'images/icone/32/icon_11.png' ; ?>" width="32" height="32"/>Communication<img src="<?php echo WEBROOT.'images/dropdown_arrow.gif' ; ?>" class="dir" width="8" height="7" /></span></span></span></a>
          <ul>
                <li><a href="<?php echo WEBROOT.'coordonnes/' ; ?>">Coordonnées</a></li>
                <!--li><a href="<?php //echo WEBROOT.'messages/' ; ?>">Messages</a></li-->
          </ul>
        </li>
        <!--li><a href="#"><span><span><span><img src="<?php //echo WEBROOT.'images/icone/32/icon_12.png'; ?>" width="32" height="32"/>Templates</span></span></span></a></li-->
        
      </ul>
      <div class="clr"></div>
    </div>

  </div> 
  <!-- CONTENT -->
  <div class="content">
    <div class="content_res">
    <?php echo $content_for_layout; ?></p>
  </div>
  </div>
  
      <!-- FOOTER -->
  <div class="footer">
    <div class="bgr">
      <img src="<?php echo WEBROOT.'images/footer_bg_left.jpg' ; ?>" width="430" height="99" alt="Logo" class="logo" />
      <div class="f_right">
        <ul>
          <li class="first"><a href="<?php echo WEBROOT ; ?>">Accueil</a></li>
          <li><a href="contact.html">Contacter nous</a></li>
        </ul>
        <div class="clr"></div>
        <p>Copyright © 2010 - 2011 <a href="http://profxconsulting.com/">Profx Consulting </a> </p>
      </div>
      <div class="clr"></div>
    </div>
  </div>
    <div id="mask"></div>
  </div>
</div>
</body>

</html>
