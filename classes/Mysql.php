<?php



require_once 'includes/constants.php';



class Mysql {

private $dbConnection;


function __construct()
 {
$this->dbConnection = new PDO('mysql:dbname=crowd_proj;host=localhost;charset=utf8', 'root', '');
$this->dbConnection->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
$this->dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 }
	
	
	function verify_Username_and_Pass($mail, $pass) {

	if (!isset($_SESSION)) {

session_start();



}

				
$statement = $this->dbConnection->prepare("SELECT email_id,user_id FROM login where email_id = :email AND password = :pass");
$statement->bindParam(':email', $mail);
$statement->bindParam(':pass', $pass);

if($statement->execute())
	{
		
foreach ($statement as $rows)
  {

$_SESSION['email_id'] = $rows['email_id'];		
$_SESSION['user_id'] = $rows['user_id'];	

  }
  return 1;
  
}
else
  {
     return 0;
  }
}

function insert_answers($team_a, $team_b,$team_a_goals,$team_b_goals,$winning_team,$team_a_blocked,$team_b_blocked,$team_a_missed,$team_b_missed,$team_a_give_away,$team_b_give_away,$team_a_take_away,$team_b_take_away,$team_a_players,$team_b_players)
 {

 	  if (!isset($_SESSION))
   {

session_start();

	}
  $statement1 = $this->dbConnection->prepare('insert into uder_video_mapping (user_id,video_id,question_id,answer_team_a,answer_team_b,round_id) values(:user_id,:video_id,:question_id,:answer_team_a,:answer_team_b,:round_id)');
  
  $statement1->bindParam(':user_id', $_SESSION['user_id'],PDO::PARAM_INT);
  $statement1->bindParam(':video_id', $_SESSION['video_id']);
  $q_id1=1;
  $statement1->bindParam(':question_id',$q_id1);
  $statement1->bindParam(':answer_team_a',$team_a);
  $statement1->bindParam(':answer_team_b',$team_b);
  $statement1->bindParam(':round_id',$_SESSION['round']);
  
  $statement2 = $this->dbConnection->prepare('insert into uder_video_mapping (user_id,video_id,question_id,answer_team_a,answer_team_b,round_id) values(:user_id,:video_id,:question_id,:answer_team_a,:answer_team_b,:round_id)');
  
  $statement2->bindParam(':user_id', $_SESSION['user_id'],PDO::PARAM_INT);
  $statement2->bindParam(':video_id', $_SESSION['video_id']);
  $q_id2=2;
  $statement2->bindParam(':question_id',$q_id2);
  $statement2->bindParam(':answer_team_a',$team_a_goals);
  $statement2->bindParam(':answer_team_b',$team_b_goals);
  $statement2->bindParam(':round_id',$_SESSION['round']);
  
  $statement3 = $this->dbConnection->prepare('insert into uder_video_mapping (user_id,video_id,question_id,answer_team_a,round_id) values(:user_id,:video_id,:question_id,:answer_team_a,:round_id)');
  
  $statement3->bindParam(':user_id', $_SESSION['user_id'],PDO::PARAM_INT);
  $statement3->bindParam(':video_id', $_SESSION['video_id']);
  $q_id3=3;
  $statement3->bindParam(':question_id',$q_id3);
  $statement3->bindParam(':answer_team_a',$winning_team);
  $statement3->bindParam(':round_id',$_SESSION['round']);
  
  $statement4 = $this->dbConnection->prepare('insert into uder_video_mapping (user_id,video_id,question_id,answer_team_a,answer_team_b,round_id) values(:user_id,:video_id,:question_id,:answer_team_a,:answer_team_b,:round_id)');
  
  $statement4->bindParam(':user_id', $_SESSION['user_id'],PDO::PARAM_INT);
  $statement4->bindParam(':video_id', $_SESSION['video_id']);
  $q_id4=4;
  $statement4->bindParam(':question_id',$q_id4);
  $statement4->bindParam(':answer_team_a',$team_a_blocked);
  $statement4->bindParam(':answer_team_b',$team_b_blocked);
  $statement4->bindParam(':round_id',$_SESSION['round']);

  $statement5 = $this->dbConnection->prepare('insert into uder_video_mapping (user_id,video_id,question_id,answer_team_a,answer_team_b,round_id) values(:user_id,:video_id,:question_id,:answer_team_a,:answer_team_b,:round_id)');
  
  $statement5->bindParam(':user_id', $_SESSION['user_id'],PDO::PARAM_INT);
  $statement5->bindParam(':video_id', $_SESSION['video_id']);
  $q_id5=5;
  $statement5->bindParam(':question_id',$q_id5);
  $statement5->bindParam(':answer_team_a',$team_a_missed);
  $statement5->bindParam(':answer_team_b',$team_b_missed);
  $statement5->bindParam(':round_id',$_SESSION['round']);

  $statement6 = $this->dbConnection->prepare('insert into uder_video_mapping (user_id,video_id,question_id,answer_team_a,answer_team_b,round_id) values(:user_id,:video_id,:question_id,:answer_team_a,:answer_team_b,:round_id)');
  
  $statement6->bindParam(':user_id', $_SESSION['user_id'],PDO::PARAM_INT);
  $statement6->bindParam(':video_id', $_SESSION['video_id']);
  $q_id6=6;
  $statement6->bindParam(':question_id',$q_id6);
  $statement6->bindParam(':answer_team_a',$team_a_give_away);
  $statement6->bindParam(':answer_team_b',$team_b_give_away);
  $statement6->bindParam(':round_id',$_SESSION['round']);
  
  $statement7 = $this->dbConnection->prepare('insert into uder_video_mapping (user_id,video_id,question_id,answer_team_a,answer_team_b,round_id) values(:user_id,:video_id,:question_id,:answer_team_a,:answer_team_b,:round_id)');
  
  $statement7->bindParam(':user_id', $_SESSION['user_id'],PDO::PARAM_INT);
  $statement7->bindParam(':video_id', $_SESSION['video_id']);
  $q_id7=7;
  $statement7->bindParam(':question_id',$q_id7);
  $statement7->bindParam(':answer_team_a',$team_a_take_away);
  $statement7->bindParam(':answer_team_b',$team_b_take_away);
  $statement7->bindParam(':round_id',$_SESSION['round']);

  $statement8 = $this->dbConnection->prepare('insert into uder_video_mapping (user_id,video_id,question_id,answer_team_a,answer_team_b,round_id) values(:user_id,:video_id,:question_id,:answer_team_a,:answer_team_b,:round_id)');
  
  $statement8->bindParam(':user_id', $_SESSION['user_id'],PDO::PARAM_INT);
  $statement8->bindParam(':video_id', $_SESSION['video_id']);
  $q_id8=8;
  $statement8->bindParam(':question_id',$q_id8);
  $statement8->bindParam(':answer_team_a',$team_a_players);
  $statement8->bindParam(':answer_team_b',$team_b_players);
  $statement8->bindParam(':round_id',$_SESSION['round']);
  
	if($statement1->execute())
	{
	if($statement2->execute())
	{
	if($statement3->execute())
	{
		if($statement4->execute())
	{
		if($statement5->execute())
		{
			if($statement6->execute())
			{
				if($statement7->execute())
				{
					if($statement8->execute())
					{
						$statement9 = $this->dbConnection->prepare("SELECT count from video_details where video_id=:video_id");
						$statement9->bindParam(':video_id', $_SESSION['video_id']);
						if($statement9->execute())
						{
							foreach ($statement9 as $rows)
							{
								$count_val=$rows['count'];
								$statement10 = $this->dbConnection->prepare('update video_details set count='.($count_val+1).' where video_id=:video_id');
								$statement10->bindParam(':video_id', $_SESSION['video_id']);
								if($statement10->execute())
								{
									return 1;
								}
							}
						}
						
 
 

					}
				}
			}
		}
	}
	}

	}
	}
return 0;
  
 }	

 function get_video()
 {
	  if (!isset($_SESSION))
   {

session_start();

	}
	 $loop_count=1;
	 while($loop_count!=0)
	{
		$statement = $this->dbConnection->prepare('SELECT video_id,count,video_url FROM video_details where count < 10 ORDER BY RAND() LIMIT 1');
		if($statement->execute())
       {
		   	  foreach ($statement as $rows)
			{
			
			$user_id=$_SESSION['user_id'];
		    $video_id=$rows['video_id'];
			print $video_id;
			print $user_id;
			
			$statement1 = $this->dbConnection->prepare('SELECT count(*) as mapping_count FROM login l left join uder_video_mapping uvm on l.user_id=uvm.user_id left join round_2_users ru on ru.user_id=l.user_id where l.user_id=:user_id and ((uvm.user_id is not null and uvm.video_id=:video_id1)OR (ru.user_id is not null and ru.video_id=:video_id2))');
		
			$statement1->bindParam(':user_id',$user_id);
			$statement1->bindParam(':video_id1',$video_id);
			$statement1->bindParam(':video_id2',$video_id);
		
			if($statement1->execute())
			{

				foreach ($statement1 as $rows1)
				{
					$loop_count=$rows1['mapping_count'];
					$statement2 = $this->dbConnection->prepare('SELECT count(*) as video_count FROM video_details vd where not exists (select 1 from login l left join uder_video_mapping uvm on l.user_id=uvm.user_id left join round_2_users ru on ru.user_id=l.user_id where l.user_id=:user_id and ((uvm.user_id is not null and uvm.video_id=vd.video_id) OR (ru.user_id is not null and ru.video_id=vd.video_id)))');
					$statement2->bindParam(':user_id',$user_id);
					if($statement2->execute())
					{
						foreach ($statement2 as $rows2)
						{
							if($rows2['video_count']==0)
							{
								return 2;
							}
						}
					}
				}
			}
			if($loop_count==0)
			{	
			 $_SESSION['video_id']=$rows['video_id'];
		     $_SESSION['video_url']=$rows['video_url'];
			if($rows['count']<5)
			{
				$_SESSION['round']=1;
				
				return 1;
			}
			else
			{
				$_SESSION['round']=2;
				return 1;
			}
			}
		 }
       }

	}
	return 0;
 }
  function get_answers($question_id,$video_id)
 {
	$statement = $this->dbConnection->prepare('SELECT uvm.id,uvm.answer_team_a,uvm.answer_team_b,qm.question from uder_video_mapping uvm,question_master qm where uvm.question_id=qm.question_id and uvm.video_id=:video_id order by uvm.question_id asc');
	$statement->bindParam(':video_id', $video_id);
	if($statement->execute())
  {
	  $flag=0;
	  ?>
	<form action="answers2.php" method="post"> 
	<table>
	<?php
foreach ($statement as $rows)
  {	
   if ($flag%5==0)
   {
	   echo '<tr><td><b>'.$rows['question'].'</b></td><td></td><td></td></tr>';
   }
   echo '<tr><td>'.$rows['answer_team_a'].'</td><td>'.$rows['answer_team_b'].'</td><td><input type="checkbox" name="id[]" value="'.$rows["id"].'"/> </td></tr>';
   $flag=$flag+1;
  }
   ?>

	</table>

<input type="submit" value="submit answers" />
</form>
		<?php
  }
 }
 
 function insert_answers2($id1) {
	 if (!isset($_SESSION)) {

session_start();
	 }
	 $count=count($id1)-1;
	 while($count>=0)
	 {
		 
		 $id=$id1[$count];
		 $statement = $this->dbConnection->prepare('update uder_video_mapping set vote=vote+1 where id=:id');
		 $statement->bindParam(':id', $id); 
		 $statement->execute();
		 $count=$count-1;

	 }
		 $statement = $this->dbConnection->prepare('update video_details set count=count+1 where video_id=:video_id');
		 $video_id=$_SESSION['video_id'];
		 $statement->bindParam(':video_id', $video_id); 
		 $statement->execute();	
		 
		 $statement = $this->dbConnection->prepare('insert into round_2_users(user_id,video_id) values(:user_id,:video_id)');
		 $video_id=$_SESSION['video_id'];
		 $user_id=$_SESSION['user_id'];
		 $statement->bindParam(':user_id', $user_id); 
		 $statement->bindParam(':video_id', $video_id); 
		 $statement->execute();			 
		 return 1;
	 
 }
 function get_video_result() {
	 $statement = $this->dbConnection->prepare('select video_id,image_path,video_name from video_details where count=6');
	 if($statement->execute())
	 {
		 foreach ($statement as $rows)
  {
		 $video_id=$rows['video_id'];
		 $image_path=$rows['image_path'];
		 $video_name=$rows['video_name'];

	echo "<table><tr><th><img src='".$image_path."' height='200' width='250'></th><th><a href='annotation.php?id=".$video_id."'>".$video_name."</a></th></tr><br>";

		 
  }
		 
	 }
		 
 }
 
  function get_video_annotation($video_id) {
	  
	  echo '<p><iframe title="YouTube video player" class="youtube-player" type="text/html" 
width="640" height="390" src="videos/'.$video_id.'.mp4" frameborder="0" allowFullScreen></iframe></p>';


	  
$statement = $this->dbConnection->prepare('select question_id,question from question_master');
if($statement->execute())
{
	echo '<table border=1><tr><th>Question</th><th>Team A</th><th>Team B</th></tr>';
	foreach ($statement as $rows)
  {
	  
	  echo '<tr><th>'.$rows['question'].'</th>';
	  $statement1 = $this->dbConnection->prepare('select answer_team_a,answer_team_b from uder_video_mapping where question_id=:question_id1 and video_id=:video_id1 and vote=(select max(vote) from uder_video_mapping where question_id=:question_id2 and video_id=:video_id2)');
	  $statement1->bindParam(':question_id1', $rows['question_id']); 
	  $statement1->bindParam(':question_id2', $rows['question_id']); 
	  $statement1->bindParam(':video_id1', $video_id); 
	  $statement1->bindParam(':video_id2', $video_id);
	  if($statement1->execute())
	  {
		  	foreach ($statement1 as $rows)
  {
	  echo '<th>'.$rows['answer_team_a'].'</th><th>'.$rows['answer_team_b'].'</th></tr>';
  }
	  }

}

echo '</table>';
		 
 }
 
}
}

?>

