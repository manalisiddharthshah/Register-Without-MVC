<?php
	require("connection.php");
	require("DAO/dao.php");
	require("DAO/model.php");
	$d=new dao();
	$m=new model();
	extract($_POST);
 	if(isset($_POST) && !empty($_POST))
 	{
		if(isset($_POST['btnupdate']))
		{
			$m->set_data("tname",$tname);
			$m->set_data("tmail",$tmail);
			$m->set_data("tphone",$tphone);
			$m->set_data("tgen",$tgen);
			$m->set_data("txtaddress",$txtaddress);
			$m->set_data("txtcon",$txtcon);
			$m->set_data(",",$_POST["in"]);
			$m->set_data("hobby",$hobby);

			$a=array('name'=>$m->get_data(text_input('txtname')),
				('email'=>$m->get_data(text_input('tmail')),
					('phone'=>$m->get_data(text_input('txtname')),
						('gender'=>$m->get_data(text_input('gen')),
							('address'=>$m->get_data(text_input('taddress')),
								('country'=>$m->get_data(text_input('tcon')),
									('interest'=>$m->get_data(text_input('hobby'))
								);
			$q=$d->insert("sanjay",$a);
			if($q>0)
			{
				header("Location:Database_view.php")
			}	
			else {
									echo "something went wrong!";
				}					
		}
	}
?>