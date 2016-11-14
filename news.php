<?php 
if (!isset($_SESSION)) {
session_start();
}
if($_SESSION['check']=='true')
{
?>
<html>

<head>
  <title>acadsite - news </title>
  <link rel="SHORTCUT ICON" href="logo/logo.jpg"/>
  <link rel="stylesheet" type="text/css" href="style/style.css" />
  <link rel="stylesheet" href="css/main.css" type="text/css" media="screen" />

<script type="text/javascript" src="js/mootools.js"></script>

<!-- Formcheck2 / Moo.Floor.ch -->
<!-- http://moo.floor.ch/?p=18 -->
<script type="text/javascript" src="js/formcheck.js"></script>
<script type="text/javascript">
	window.addEvent('domready', function(){check = new FormCheck('third', {
		display : {
		
			adeDuration : 500,
			errorsLocation : 1,
			indicateErrors : 1,
			showErrors : 1
		}
	})});
</script>

<!-- NiceForms / BadBoy.ro -->
<!-- http://www.badboy.ro/articles/2005-07-23/niceforms_preview/ -->
<script type="text/javascript" src="js/niceforms.js"></script>

</style>
  
  
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
  
  
</head>

<body>
 
  <div id="main">
  
    <div id="header">
	
      <div id="logo">
	 
        <div id="logo_text">
          <h1><a href=""><span class="logo_colour">acadsite</span></a></h1>
          <h2>academics,online</h2>
		 
        </div>
		 
      </div>
	  
      <div id="menubar">
        <ul id="menu">
           
		      <li ><a href="home.php">Home</a></li>

          <li ><a href="barter.php">Buy/Bart/promote</a></li>

		 

		 <li><a href="ebooks.php">web-directory</a></li>

		  

		  		  <li><a href="cgpa.php">CGPA-Tracker</a></li>    

		   <li><a href="blog.php">Articles</a></li>

		 

		  <li><a href="culturals.php">Tech-Fest</a></li>
          
          <li class="selected"><a href="atcampus.php">Campus updates</a></li>
           <li><a href="userdetails.php?id=<?php echo $_SESSION['email'];?>">Portfolio</a></li>



		  <li><a href="signout.php">SignOut</a></li>
		 
		 
        </ul>
      </div>
	      </div>
    <div id="content_header"></div>
    <div id="site_content">
      <div class="sidebar">
       
 <table id="cc1" width="110%">
	 <tr >
	 	 <th id="cc2">
 <a target="_blank" href="news.php">Post Your Events</a>
	 </th>
	 	 </tr>
		 
			 </table>
             
             <table id="cc1" width="110%">
	 <tr >
	 	 <th id="cc2">
 <a target="_blank" href="newsview.php">View your post</a>
	 </th>
	 	 </tr>
		 </table>
         
          <table id="cc1" width="110%">
	 <tr >
	 	 <th id="cc2">
 <a target="_blank" href="atcampus.php">View Headlines</a>
	 </th>
	 	 </tr>
		 </table>

         </div>
		<div id="content">
        <h1>Welcome </h1>
       <p>
	 
			<form name="form" method="post" id="third" action="newsdetails.php" enctype="multipart/form-data">
			<label for="name"><strong> Select The Category : </strong></label>
			<select name="category"  >
  
    <option value="college">College</option>
    <option value="department">Department</option>
	<option value="hostel">Hostel</option>
	 <option value="sport">Sports</option>
    </select>
	<label for="name"><strong><span class="blue">*</span> HeadLine : </strong></label>
	
			<input id="name" name="headline" type="text" class="validate['required']" size="30" maxlength="30" />
		
	<label for="name"><strong> Event Date : </strong></label>
	
			<select name="date"  >
  
    <option value="01">1</option>
<option value="02">2</option>
<option value="03">3</option>
<option value="04">4</option>
<option value="05">5</option>
<option value="06">6</option>
<option value="07">7</option>
<option value="08">8</option>
<option value="09">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>

    </select>
			<select name="month"  >
  
    <option value="01">January</option>
    <option value="02">Febraury</option>
	<option value="03">March</option>
	<option value="04">April</option>
	<option value="05">May</option>
	<option value="06">June</option>
	<option value="07">July</option>
	<option value="08">August</option>
	<option value="09">September</option>
	<option value="10">October</option>
	<option value="11">November</option>
	<option value="12">December</option>
    </select>
			<select name="year"  >
  
    
    <option value="2012">2012</option>
	    </select>
		<label for="name"><strong><span class="blue">*</span> Event Venue : </strong></label>
	
			<input id="name" name="venue" type="text" class="validate['required']" size="30" maxlength="30" />
            <label for="name"><strong><span class="blue"></span> Links(URL) http://: </strong></label>
	
			<input id="name" name="link" type="text" size="40"  />
            <label for="name"><strong><span class="blue"></span> Image: </strong></label>
            
         <input type="file" name="file" id="file" />   
            
	<label for="msg"><strong><span class="blue">*</span>News Details  : </strong></label><br />
			<textarea id="message" name="description" type="text" class="validate['required']" rows="10" cols="60" maxlength="1000"></textarea><br>
			<input type="submit" class="buttonSubmit" value="Post it!" />
			</form>
			
		</p>
        
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
else 
{

echo '<META HTTP-EQUIV="Refresh" Content="0; URL=login.php">';
}
?>