<?php
  if(isset($_COOKIE['member_id']))
{
	   $member_id=$_COOKIE['member_id'];
   }
   else
   {
      header('location:../index.php');
   }
	?>