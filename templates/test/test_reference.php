<section class="page">
   <div class="container-fluid">
      <div class="row">
         <div class="col-8">
            <h1 class="sub-heading ft-dark page-title">Test Reference</h1>
         </div>
         <div class="col-4 text-right">                                        
            <a href="#" data-target="#add_test_reference" data-toggle="modal" class="r-btn btn-sm r-btn-success mt-3"><i
               class="fa fa-plus"></i><span>Test Reference</span></a>
         </div>
      </div>
   </div>
</section>
<section class="page page-dashboard">
   <div class="container-fluid">      
   <div class="row">
                     <div class="col-md-12">
                        <div class="block">
                           <div class="content px-0">
                              <table id="example" class="table  nowrap table-default table-bordered" style="width:100%">
                                 <thead>
                                    <tr>
                                       <th>S.No.</th>
                                       <th>Reference Name</th>                                       
                                       <th>Test. Ref img</th>                                                                              
                                       <th>No. of Reference Points </th>                                       
                                       <th>Action</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td>#001</td>
                                       <td><a href="#" class="ft-secondary fw-600">Reference 1</a></td>                                       
                                       <td class="text-center">
                                          <img src="assets/no-image.jpg" data-toggle="tooltip" data-placement="top" title="Test Reference Image" style="width:20px">
                                       </td>                                       
                                       <td>4</td>                                                                              
                                       <td>
                                          <a href="#" data-target="#add_user" data-toggle="modal"
                                             class="icon icon-sm icon-base"><i class="fa fa-pencil-alt"></i></a>
                                          <a href="#" class="icon icon-sm icon-danger icon-xs"><i
                                             class="fa fa-archive"></i></a>
                                       </td>
                                    </tr>                                      
                                    <tr>
                                       <td>#002</td>
                                       <td><a href="#" class="ft-secondary fw-600">Reference 2</a></td>                                       
                                       <td class="text-center">
                                          <img src="assets/no-image.jpg" data-toggle="tooltip" data-placement="top" title="Test Reference Image" style="width:20px">
                                       </td>                                       
                                       <td>5</td>
                                       <td>
                                          <a href="#" data-target="#add_user" data-toggle="modal"
                                             class="icon icon-sm icon-base"><i class="fa fa-pencil-alt"></i></a>
                                          <a href="#" class="icon icon-sm icon-danger icon-xs"><i
                                             class="fa fa-archive"></i></a>
                                       </td>
                                    </tr>                                      
                                    <tr>
                                       <td>#003</td>
                                       <td><a href="#" class="ft-secondary fw-600">Reference 3</a></td>                                       
                                       <td class="text-center">
                                          <img src="assets/no-image.jpg" data-toggle="tooltip" data-placement="top" title="Test Reference Image" style="width:20px">
                                       </td>                                       
                                       <td>3</td>
                                       <td>
                                          <a href="#" data-target="#add_user" data-toggle="modal"
                                             class="icon icon-sm icon-base"><i class="fa fa-pencil-alt"></i></a>
                                          <a href="#" class="icon icon-sm icon-danger icon-xs"><i
                                             class="fa fa-archive"></i></a>
                                       </td>
                                    </tr>                                      
                                    <tr>
                                       <td>#004</td>
                                       <td><a href="#" class="ft-secondary fw-600">Reference 4</a></td>                                       
                                       <td class="text-center">
                                          <img src="assets/no-image.jpg" data-toggle="tooltip" data-placement="top" title="Test Reference Image" style="width:20px">
                                       </td>                                       
                                       <td>2</td>
                                       <td>
                                          <a href="#" data-target="#add_user" data-toggle="modal"
                                             class="icon icon-sm icon-base"><i class="fa fa-pencil-alt"></i></a>
                                          <a href="#" class="icon icon-sm icon-danger icon-xs"><i
                                             class="fa fa-archive"></i></a>
                                       </td>
                                    </tr>                                      
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
   </div>
</section>

<!-- Add Test Reference -->
<div class="modal fade" id="add_test_reference" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle"
   aria-hidden="true">
   <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title fw-600" id="exampleModalScrollableTitle">Add Test Reference</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <!-- <hr class="custom-border"> -->
            <div class="form-group row">               
               <div class="col-6">
                  <label for="">Reference Name</label>
                  <input type="text" class="form-control">
               </div>
               <!-- <div class="col-6">
                  <label for="">Status</label>
                  <input type="text" class="form-control">
               </div> -->               
            </div>
            <div class="form-group row">
               <div class="col-8">
                  <label for="">Test Reference Image</label>
                  <div class="custom-file">
                     <input type="file" class="custom-file-input file referenceImage" accept="image/*" name="filename">
                     <label class="custom-file-label" for="customFile">Choose file</label>
                  </div>
               <img src="" id="preview1" class="img-fluid d-none" style="height:200px; width:400px">
               </div>               
               <div class="col-4">
                  <label for=""># of Reference Points</label>
                  <select name="" id="reference" class="form-control">reference
                     <option value="">Select</option>
                     <option value="1">1</option>
                     <option value="2">2</option>
                     <option value="3">3</option>
                     <option value="4">4</option>
                     <option value="5">5</option>
                     <option value="6">6</option>
                     <option value="7">7</option>
                     <option value="8">8</option>
                     <option value="9">9</option>
                     <option value="10">10</option>
                  </select>
               </div>
            </div>            
            <div class="form-group row rajiv">
            </div>         
         </div>
         <div class="modal-footer">
            <a href="#" data-dismiss="modal" type="button" class="r-btn r-btn-base">Cancel</a>
            <button type="button" class="r-btn r-btn-secondary">Add</button>
         </div>
      </div>
   </div>
</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<!-- For Image upload 1-->
<script type="text/javascript">
    $('.productImage').change(function(e) {
        $('.image_size_error').text('');
        $('.image_error').text('');
        var fileName = e.target.files[0].name;
      //   $("#file").val(fileName);
        var extn = fileName.substring(fileName.lastIndexOf('.') + 1).toLowerCase();
        var size  = e.target.files[0].size;

        if(extn == "gif" || extn == "png" || extn == "jpg" || extn == "jpeg"){
            $('.image_error').text('');
            var reader = new FileReader();
            reader.onload = function(e) {
                // get loaded data and render thumbnail.
                
                document.getElementById("preview").src = e.target.result;
                $('#preview').removeClass('d-none');
            };
            // read the image file as a data URL.
            reader.readAsDataURL(this.files[0]);
        }else{
            $('.image_error').text('Please select only image');
        }

        if(size <= 300000){
            $('.image_size_error').text('');
        }else{
            $('.image_size_error').text('Please upload file size less than 300 KB');
        }
});
</script>

<!-- For Image upload 2-->
<script type="text/javascript">
    $('.referenceImage').change(function(e) {
        $('.image_size_error').text('');
        $('.image_error').text('');
        var fileName = e.target.files[0].name;
        $("#file").val(fileName);
        var extn = fileName.substring(fileName.lastIndexOf('.') + 1).toLowerCase();
        var size  = e.target.files[0].size;

        if(extn == "gif" || extn == "png" || extn == "jpg" || extn == "jpeg"){
            $('.image_error').text('');
            var reader = new FileReader();
            reader.onload = function(e) {
                // get loaded data and render thumbnail.
                
                document.getElementById("preview1").src = e.target.result;
                $('#preview1').removeClass('d-none');
            };
            // read the image file as a data URL.
            reader.readAsDataURL(this.files[0]);
        }else{
            $('.image_error').text('Please select only image');
        }

        if(size <= 300000){
            $('.image_size_error').text('');
        }else{
            $('.image_size_error').text('Please upload file size less than 300 KB');
        }
});
</script>