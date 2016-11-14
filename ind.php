<?php 

if (!isset($_SESSION)) {

session_start();

}

if(isset($_SESSION['check']))

{

header("location:home.php");

}

else 

{
?>

<html>



<head>

  <meta name="keywords" content="acadsite , acadsite.com , academics ,Sign up ,At our campus,campus updates,CGPA Tracker , SGPA Tracker,Tech-fest tracker,buy/bart"  />

  <meta name="description" content="Acadsite provides students a one stop bazar to meet all their academic needs.The site features the entire academic experience under roof.The site covers a wide range of features like facility to buy/bart/promote items,share college events,track technical and cultural fest throughout India,share articles,calculate and forecast CGPA ,access to a pool of URL's from web-directory and storage of bookmarks on online" />

  

  <title>acadsite - index </title>

<link rel="SHORTCUT ICON" href="logo/logo.jpg"/>

  <link rel="stylesheet" type="text/css" href="style/style.css" />

  <link rel="stylesheet" href="scripts/nivo-slider.css" type="text/css" media="screen" />

<script type="text/javascript">



  var _gaq = _gaq || [];

  _gaq.push(['_setAccount', 'UA-24811871-1']);

  _gaq.push(['_trackPageview']);



  (function() {

    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;

    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';

    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);

  })();



</script>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=302560006421966";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>





</head>





<body>

 

  <div id="main">

  

    <div id="header">

	

      <div id="logo">

	 <form id="regForm" action="signin.php" method="post">

	  <table id="corner" >

		  <tr >

 

     <td id="cc1"> <input onFocus="if



(this.value==this.defaultValue) this.value='';" name="mail" id="" value="MailId :" type="text"><br></td>

	 <td id="cc1"> <input onFocus="if



(this.value==this.defaultValue) this.value='';" name="pass" id="" type="password"></td>

	 <td id="cc1"><input type="submit" class="greenButton" value="Sign In" /></td> 

  </tr>

  

  </table>

   

  </form>

         <div id="logo_text">

          <h1><a href=""><span class="logo_colour">acadsite</span></a></h1>

          <h2>academics,online</h2>

		 

        </div>

		 

      </div>

	  

      <div id="menubar">

        <ul id="menu">

		   

 

		<li class="selected"><a href="index.php">Home</a></li>



		  

 <li><a href="login.php">SignUp/Forget password</a></li>

		 		  

		  

        </ul>

      </div>

	      </div>

    <div id="content_header"></div>

    <div id="site_content">

	

      <div class="sidebar">

 <center> <b><u>Latest TechFest/Culturals </u></b>  </center>
		 
<?php

require_once 'classes/Membership.php';

$membership = new Membership();

$i=8;

$response = $membership->callevent($i);



$_SESSION['log']='home.php';

?>

			 

			 

	 

         </div>

		<div id="content">



             

			 <div class="help2">

		

			<b>Web-Directory/Online BookMarks</b><br><p></p>

			This is a collection of global resources available for our academic purposes. A clear categorization is made and the most useful links are listed. <b><a  target="_blank" href="ebooks.php">View more</a></b>

			  <h1>

			  </h1>

			  <b>CGPA-Tracker</b><p></p>

			  Use this simple tool to decide how hard you'll have to work to achieve the GPA you want to have. <b><a  target="_blank" href="cgpa.php">View more</a></b> 

			  <h1>

			  </h1>

			  <b>Technical symposia and fests</b><p></p>

			  Track ongoing tech fests,culturals and conferences throughout India. Handy schedules and other information is available. Click here for <b><a  target="_blank" href="culturals.php">View more</a></b> 

			  <h1>

			  </h1>

			  <b>Events In Campus</b><p></p>

			  For all the latest events and sessions being conducted by the various organisations and clubs in college, visit this section. Students are welcome to post any and all events they are associated with.<br>(Content moderated)<b><a  target="_blank" href="atcampus.php">View more</a></b>

			 </div>
            
           <div class="fb-like" data-href="http://www.facebook.com/Acadsite" data-send="true" data-width="450" data-show-faces="true" ></div>
             
             
             
       


			 <div class="help4">


 <h1>



			 </h1>
			
			 	<center><b><u>Buy/Bart/Promote</u></b></center>		 	

  <?php      
   
    $response = $membership->get_bart();
	?>

<a href="barter.php" id="red">View more</a>





			 </div>
    


			 </div>

			 </div>

      </div>

    </div>

    <div id="content_footer"></div>

    <div id="footer">

     <p><a href="home.php">Home</a> |  <a href="contact.php">Contact Us</a></p>

      <p id="lower">acadsite © 2012</p>

	 

	</div>

  </div>

</body>

</html>







<?php
}

?>

