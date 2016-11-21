<?php/* require_once("applicationtop.php") ; */?>
 <?php/*
					$pageSize =25;
					$order = ' order by dos DESC';
					$resultarray = $login_obj->pagno(" tblmessage where  M_receiver_id='Admin' ".$order,$pageSize);
					$pageno = $resultarray[0];
					$resultselect = $resultarray[1];
					$check=mysql_num_rows($resultselect);
				if($check<=0)
				{
					echo 'No Record Found';
				}
				else
				{
					
				*/?>
                    <table class="table">
                      <thead>
                        <tr>
                          
                            <th class="col-md-2 text-left">From</th>
                           <th>Subject</th>
						     <th class="col-md-2 text-right">Date</th>
                        </tr>
                      </thead>
                      <tbody>
						<?php/*
						$sno=0;
                        while($result = $db_obj->fetch_object($resultselect))
                        {
							$sno++;
							if($sno%2==0)
							$cl='success';
							else
							$cl='warning';
                        */?>
                        <tr class="<?php/* echo $cl;*/?>">
                             <td><?php/*
							 $username=$obj_Common->get_field_name("Uid='".$result->M_sender_id."'",'tbl_user',"u_username");
							 echo $username['u_username'];*/?></td>
                           <td> <a href="message_view.php?id=<?php/* echo $result->Message_id;*/?>&uid=<?php/* echo $result->M_sender_id;*/?>" target="_parent" ><?php/* echo $result->M_Subject;*/?></a>
						   <td class="text-right"><?php/* echo date('M d, Y',$result->dos);*/?></td>
                         
                        </tr>
                       <?php/* } */?>
                       <?php/* if($pageno>1){  $login_obj->paging_no("message.php",$pageno,"5");} */?>
                      </tbody>
                    </table>
					<?php/* } */?>