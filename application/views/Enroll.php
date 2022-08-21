<div class="main-content">
                <div class="page-content">
                    <div class="container-fluid">
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">Enrollment report</h4>
                                    <?php echo $this->session->flashdata('message');?>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                        <div class="row">
                            <div class="col-xl-4">
                                <div class="card">
                                    <div class="card-body">
                                       <form method="POST" action="<?php echo base_url('Manage_walkins/enroll_walkins_info');?>">
											<div class="row">
												<div class="col-md-6">
													<div class="mb-3 ">
														<label for="formrow-firstname-input" class="form-label">First name</label>
														<input type="text" name="s_first_name" class="form-control" id="formrow-firstname-input" value="<?php echo $get_info->stu_fname;?>">
													</div>
												</div>
												<div class="col-md-6">
													<div class="mb-3 ">
														<label for="formrow-firstname-input" class="form-label">last name</label>
														<input type="text" name="s_last_name" class="form-control" id="formrow-firstname-input" value="<?php echo $get_info->stu_lname;?>">
													</div>
												</div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="formrow-email-input" class="form-label">Email</label>
                                                        <input type="email" name="s_email" class="form-control" id="formrow-email-input" value="<?php echo $get_info->stu_email;?>">
                                                    </div>
                                                </div>
												<div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="formrow-password-input" class="form-label">Phone number</label>
                                                        <input type="text" name="s_phone_a" class="form-control" id="formrow-password-input" value="<?php echo $get_info->stu_phone_a;?>">
                                                    </div>
                                                </div>
												 <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="formrow-password-input" class="form-label">Alternative number</label>
                                                        <input type="text" name="s_phone_b" class="form-control" id="formrow-password-input" value="<?php echo $get_info->stu_phone_b;?>">
                                                    </div>
                                                </div>
                                            </div>
											<div class="row">
												<div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="formrow-inputState" class="form-label">Qualification</label>
                                                        <select id="formrow-inputState" name="s_qual" class="form-select">
                                                            <option>10th</option>
                                                            <option>12th</option>
                                                            <option>Diploma</option>
                                                            <option>Graduation</option>
                                                            <option>Post Graduation</option>
                                                        </select>
                                                    </div>
                                                </div>
												<div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="formrow-inputCity" class="form-label">Detail study (Bsc,B-tech etc)</label>
                                                        <input type="text" name="s_study" class="form-control" id="formrow-inputCity" value="<?php echo $get_info->stu_study;?>">
                                                    </div>
                                                </div>
											
											 <div class="col-lg-6">
											 
													<div class="mb-3">
                                                        <label class="d-block mb-3">Gender :</label>

                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input"  <?php if($get_info->stu_gender == 'Male') { echo 'checked="checked"' ; } ?>  type="radio" name="s_gender" id="inlineRadio1" value="Male">
                                                            <label class="form-check-label" for="inlineRadio1">Male</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" <?php if($get_info->stu_gender == "Female") { echo 'checked="checked"' ; } ?>type="radio" name="s_gender" id="inlineRadio2" value="Female">
                                                            <label class="form-check-label" for="inlineRadio2">Female</label>
                                                        </div>                                                          
                                                    </div>
                                                </div>
												 <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="formrow-inputCity" class="form-label">Date of Birth</label>
                                                        <input type="date" name="s_dob" value="<?php echo $get_info->stu_DOB;?>" class="form-control"  id="formrow-inputCity">
                                                    </div>
                                                </div>
												
                                             
											</div>
											<div class="row">
                                                <div class="col-lg-12">
                                                    <div class="mb-3">
                                                        <label for="formrow-inputCity" class="form-label">Full Address (House/village/Town)</label>
                                                        <input type="text" name="s_address" value="<?php echo $get_info->stu_address;?>" class="form-control" id="formrow-inputCity">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="mb-3">
                                                        <label for="formrow-inputCity" class="form-label">City</label>
                                                        <input type="text" name="s_city" value="<?php echo $get_info->stu_city;?>" class="form-control" id="formrow-inputCity">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="mb-3">
                                                        <label for="formrow-inputState" class="form-label">State</label>
                                                        <select id="formrow-inputState" name="s_state" class="form-select">
                                                            <option selected>Choose...</option>
                                                            <option>...</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-lg-4">
                                                    <div class="mb-3">
                                                        <label for="formrow-inputZip" class="form-label">Zip</label>
                                                        <input type="text" name="s_zip" value="<?php echo $get_info->stu_zip;?>" class="form-control" id="formrow-inputZip">
                                                    </div>
                                                </div>
												
                                            </div>
											
                                         
                                            <div>
                                             
                                            </div>
                                       
                                    </div>
                                    <!-- end card body -->
                                </div>
                                <!-- end card -->
                            </div>
                           
<input type="s" name="class_id" id="class_id">
                            <!-- end col -->
                            <div class="col-xl-8">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="col-md-12">
                                                                <label for="formrow-firstname-input" class="form-label">Course</label>
                                                                <select id="sel_course" name="course" class="form-select">
                                                                <option value="0">- Select -</option>
                                                                <?php foreach($get_course as $cs){
                                                                    echo '<option value='.$cs->cr_uuid.'>'.$cs->cr_name.'</option>';
                                                                }?>
                                                                </select>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="mb-3 ">
                                                                <label for="formrow-firstname-input" class="form-label">Batch</label>
                                                                <select id="batch_list" name="batch" class="form-select" disabled>
                                                                    
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="mb-3 ">
                                                                <label for="formrow-firstname-input" class="form-label">Duration</label>
                                                                <select id="duration_list" name="duration" class="form-select" disabled>
                                                                
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="mb-3">
                                                                <label for="formrow-password-input" class="form-label">Total Fee</label>
                                                                <input type="text" name="total_fee" class="form-control" readonly id="total_fee">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="mb-3">
                                                                <label for="formrow-password-input" class="form-label">Fee Paid</label>
                                                                <input type="text" name="fee_paid" onkeypress="return isNumber(event)" onblur="reSum();"  class="form-control" id="paid_fee" >
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="mb-3">
                                                                <label for="formrow-password-input" class="form-label">Fee Due</label>
                                                                <input type="text" name="fee_due" readonly class="form-control" id="due_fee" >
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="mb-3">
                                                                <label for="formrow-inputState" class="form-label">Mode of Payment</label>
                                                                <select id="formrow-inputState" name="pay_mode" class="form-select">
                                                                     <?php foreach($mode as $sys) {
                                                                        echo '<option value="'.$sys->sc_id.'">'.$sys->sc_name.'</option>';
                                                                        }?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 mb-2">
                                                                <label for="formrow-password-input" class="form-label">Issue</label>
                                                                    <?php foreach($all_items as $item) {?>
                                                                        <div class="form-check">
                                                                                <input class="form-check-input" value="<?php echo $item->st_uid?>" type="checkbox" name="item[]">
                                                                                <label class="form-check-label" for="<?php echo $item->st_uid?>"><?php echo $item->st_item?></label>
                                                                        </div>
                                                                    <?php }?>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <input type="hidden" name="stu_uuid"  class="form-control" value="<?php echo $get_info->stu_uid; ?>" >
                                                        <button type="submit" class="btn btn-primary w-md" id="submit_button" disabled>Submit</button>
                                                        </div>
                                                    </div>
													<div class="col-md-8">
													<div class="row" id="myDIV">
														
														
														
													</div>        
													</div>
                                            </div>
                                    </div>
                                    <!-- end card body -->
                                    </form>
                                </div>
                                <!-- end card -->
                            </div>
                        
                        </div>
                      
                        
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->
                 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script type="text/javascript">
    $(document).ready(function(){

        $("#sel_course").change(function(){
            var deptid = $(this).val();
           
            $.ajax({
                url: '<?php echo base_url('fetch_batch')?>',
                type: 'post',
                data: {course_id:deptid},
                dataType: 'json',
                success:function(response){
                    
                    var len = response.length;
                   
                    $("#batch_list").empty();
                    $("#batch_list").prop('disabled', false);
                    
                    for( var i = 0; i<len; i++){
                        var uid = response[i]['bt_uuid'];
                        var name = response[i]['bt_name'];

                        $("#batch_list").append("<option value='"+uid+"'>"+name+"</option>");

                    }
                    
                    
                }
            });
        });
        
        $("#batch_list").change(function(){
            var deptid = $(this).val();

            $.ajax({
                url: '<?php echo base_url('fetch_duration')?>',
                type: 'post',
                data: {batch_id:deptid},
                dataType: 'json',
                success:function(response){

                    var len = response.length;

                    $("#duration_list").empty();
                    $("#duration_list").prop('disabled', false);
                    for( var i = 0; i<len; i++){
                        var id = response[i]['due_uuid'];
                        var name = response[i]['due_name'];

                        $("#duration_list").append("<option value='"+id+"'>"+name+"</option>");

                    }
                }
            });
        });
        $("#duration_list").change(function(){
            var deptid = $(this).val();
			var second = document.getElementById("myDIV");
						second.innerHTML='';
            $.ajax({
                url: '<?php echo base_url('fetch_fee')?>',
                type: 'post',
                data: {due_id:deptid},
                dataType: 'json',
                success:function(response){
					 
                        $("#total_fee").val(response.ss['due_fee']);
						
						var bss=response.bb;
						var blen = bss.length; 
                       
						for( var i = 0; i<blen; i++){
                        var id = bss[i]['sch_uuid'];
                        var str_tme = bss[i]['sch_strt_time'];
                        var lst_tme = bss[i]['sch_lst_time'];
                        var stu_limit =bss[i]['sch_student_limit'];
                        var stu_left = bss[i]['sh_left_stu'];
						var left_seat = stu_limit - stu_left;
                        var classname = bss[i]['sch_class_name'];
                        var uuid = bss[i]['sch_uuid'];
                        var days = bss[i]['sh_day'];
						if(left_seat != '0')
						{
						var book='<input class="form-check-input" type="radio" onclick="peso(name);" name="'+uuid+'" value="'+uuid+'"><label class="form-check-label" for="inlineRadio2">&nbsp;Book</label>';
						}
						else
						{
							var book='Class Full';
						}
						
                         $("#myDIV").append('<div class="col-lg-4"><div class="card border border-success"><div class="card-body"><h5>'+classname+'</h5><h6>'+left_seat+' seats Left</h6><h6>'+str_tme+'-'+lst_tme+'</h6><p>'+days+'</p>'+book+'</div></div></div>');
                    }
                }
            });
        });
    });
    function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}   function reSum()
        {
            var num1 = parseInt(document.getElementById("total_fee").value);
            var num2 = parseInt(document.getElementById("paid_fee").value);
            document.getElementById("due_fee").value = num1 - num2;
            $("#submit_button").prop('disabled', false);
        }
        function peso(name){
        var elem = document.getElementById("class_id");
       elem.value=name;
        console.log("Choice: ", name);
       
        };
</script>