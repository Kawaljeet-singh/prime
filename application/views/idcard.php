<!DOCTYPE html>
<html>
<head>
<style>
 
 
td {
    padding: 5px 5px;
  }
 .text-center
{
    text-align:center;
}
 
</style>
</head>
<body>

<div style="margin-left:300px;position: relative;
  width:400px;
border:2px solid #0e0e0e;
  padding:30px 20px 20px 30px;
  background-image:url(<?php echo base_url('assets/images/logo1.jpg');?>);
    background-repeat:no-repeat;
    background-size:400px 250px;
    background-position:50px 100px;">
 <img style="position: absolute;
  top: 10px;
  right: 150px;
  font-size: 18px;" src="<?php echo base_url('assets/images/logo.jpg');?>" alt="" >
 
  <table style="width:100%;">
      <tr>
   <td  colspan="2"><h3 class="text-center">ID CARD</h3></td>
    
  </tr>
  <tr>
   <td>ID Code</td>
    <td><?php echo $get_info->stu_id;?></td>
  </tr>
  <tr>
    <td>Name</td>
    <td><?php echo $get_info->stu_fname.'&nbsp;'.$get_info->stu_lname?></td>
  </tr>
  <tr>
    <td>Batch</td>
    <td><?php echo get_batchname($get_info->en_batch)?></td>
  </tr>
  <tr>
    <td>Class</td>
    <td><?php echo get_coursename($get_info->en_course)?></td>
  </tr>
  <tr>
    <td>DOB</td>
    <td><?php echo $get_info->stu_DOB;?></td>
  </tr>
  <tr>
    <td>Duration</td>
    <td><?php echo  get_duration($get_info->en_duration);?></td>
  </tr>
  <tr>
    <td>End Date</td>
    <td><?php $du=get_duration($get_info->en_duration);
                                                                $start_date = date("Y-M-d", strtotime($get_info->en_created_date));  
                                                              
                                                                    // Add days to date and display it
                                                                    echo date('d-M-Y', strtotime($start_date. ' + '.$du));?></td>
  </tr>
</table> 
<img style="display: block;
  margin-left: 100px;
  margin-top: 30px;
  width:170px;
  border:5px solid #000;padding:5px;
 " src="<?php echo base_url('profile/'.get_photo($get_info->attachment_id));?>">
                                        
                                         <h2 class="text-center">PRIME EDUCOMP</h2>
</div>

</body>
</html>


