            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                       
                        <!-- end page title -->
 <div class="card">
                                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-6">
                               
                                         <div class="row mb-5">
                                    <div class="col-12">
                                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                            <h4 class="mb-sm-0 font-size-18">Add Batch</h4>
                                          
                                        </div>
                                    </div>
                                     <form method="POST" action="<?php echo base_url('Manage_course/save_batch');?>" autocomplete="off">
											<div class="row">
												<div class="col-md-8">
													<div class="mb-3">
													    	<label for="formrow-firstname-input" class="form-label">Select course</label>
													    <select class="form-control" id="duration_list" >
													        <?php foreach($get_schedule as $cs)
													        {
														echo '<option value="'.$cs->due_uuid.'">'.$cs->cr_name.'  >>  '.$cs->bt_name .'  >>  '.$cs->due_name.'</option>';
													        }?>
													    </select>
                                                    </div>
												</div>
												<div class="col-md-8">
													<div class="mb-3 ">
														<label for="formrow-firstname-input" class="form-label">Batch Name</label>
														<select class="form-control" id="due_list" >
														</select>
														<div class="row"><div class="optionBox">
    <div class="block">
        <input type="text" /> <span class="remove">Remove Option</span>
    </div>
    <div class="block">
        <input type="text" /> <span class="remove">Remove Option</span>
    </div>
    <div class="block">
        <span class="add">Add Option</span>
    </div>
</div>
 
 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$('.add').click(function() {
    $('.block:last').before('<div class="block"><input type="text" /><span class="remove">Remove Option</span></div>');
});
$('.optionBox').on('click','.remove',function() {
            $(this).parent().remove();
});
 
</script>
														</div>
                                                    </div>
												</div>
											</div>
                                            <div>
                                                <button type="submit" class="btn btn-primary w-md">Submit</button>
                                            </div>
                                        </form>
                                </div>
                                   
                                        
                                 
                                <!-- end card -->
                            </div>
                            <div class="col-xl-6">
                                 <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                                            <thead>
                                                <tr>
                                                    <th scope="col" >#</th>
                                                    <th scope="col">Name</th>
                                                     <th scope="col">Action</th>
                                                     
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i=0; foreach($all_batch as $item) { $i++;?>
                                                 <tr id="<?php echo $item->bt_uuid; ?>">
                                                    <td> <?php echo $i;?></td>
                                                   <td><h5><?php echo $item->cr_name;?> >> <?php echo $item->bt_name;?></h5></td>
                                                      <td> <button type="submit" data-url="delete_batch" class="btn btn-danger remove"> Delete</button></td>
                                                </tr>
                                               <?php } ?>
                                            </tbody>
                                        </table>
                                </div>
                                   </div>
                                    <!-- end card body -->
                                </div>
                            <!-- end col -->
                        </div>
                    </div> <!-- container-fluid -->
                </div>
				    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script type="text/javascript">
    $(document).ready(function(){

         $("#duration_list").change(function(){
            var deptid = $(this).val();

            $.ajax({
                url: '<?php echo base_url('fetch_fee')?>',
                type: 'post',
                data: {due_id:deptid},
                dataType: 'json',
                success:function(response){
						
						$("#due_list").empty();
						var s = response['due_day'];
							var match = s.split(',')
							console.log(match)
							for (var a in match)
							{
								var variable = match[a]
								console.log(variable)
								$("#due_list").append("<option value='"+variable+"'>"+variable+"</option>");
							}
                }
            });
        });
	});
	function add(){
      var new_chq_no = parseInt($('#total_chq').val())+1;
      var new_input="<input type='text' class='form-control' id='new_"+new_chq_no+"'>";
      var new_input2="<input type='text' class='form-control' id='new_"+new_chq_no+"'>";
      $('#new_chq').append(new_input);
      $('#new_chq2').append(new_input2);
      $('#total_chq').val(new_chq_no)
    }
    function remove(){
      var last_chq_no = $('#total_chq').val();
      if(last_chq_no>1){
        $('#new_'+last_chq_no).remove();
        $('#total_chq').val(last_chq_no-1);
      }
    }
        </script>