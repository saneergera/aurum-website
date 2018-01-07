<div id="templatemo_timeline" class="container_wapper" style="background: url('images/time.jpg');background-size:cover;background-position: center center;background-attachment: fixed">
<div class="container-fluid" style="position:relative;top:100px!important" >
    
    <?php
   $dbhost = 'localhost:phpmyadmin';
   $dbuser = 'gjdrytak_aurumfe';
   $dbpass = 'ikjs875#(_lmnl7477';
   
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   
   $sql = 'SELECT * FROM timeline order by `time` desc';
   mysql_select_db('gjdrytak_aurumfest');
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
   
   while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
      
	 ?><div class="time_line_wap">
            <div class="time_line_caption"><?php echo $row['time'];?></div>
            <div class="time_line_paragraph">
                <h1><?php echo $row['event'];?></h1>
                <p><span class="glyphicon glyphicon-user"></span> <a href="#"><?php echo $row['team'];?></a> &nbsp;&nbsp;</p>
                <p><?php echo $row['update'];?></p>
            </div>
        </div><?php
		
	 
	 
	 }
   
  
   
   mysql_close($conn);
?>
    
        <?php /*?><div class="time_line_wap">
            <div class="time_line_caption">5 April 2084</div>
            <div class="time_line_paragraph">
                <h1>Ut enim ad minim veniam</h1>
                <p>
                       <span class="glyphicon glyphicon-user"></span> <a href="#">Moon Plus</a> &nbsp;&nbsp;
                       <span class="glyphicon glyphicon-bookmark"></span> <a href="#">Web Design</a>, <a href="#">Responsive</a> &nbsp;&nbsp;
                       <span class="glyphicon glyphicon-edit"></span> <a href="#">5 comments</a>
                </p>
                <p>Duis lacinia leo erat, eu tincidunt mauris congue ut. Ut auctor turpis a sapien commodo, ac ultrices dui vehicula. Etiam in tristique felis. Sed eleifend turpis sed purus venenatis fringilla. <br><br> Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Suspendisse vel sollicitudin eros, vel vulputate leo.</p>
            </div>
        </div><?php */?>
    </div>
</div>