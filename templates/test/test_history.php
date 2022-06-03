<section class="page">
   <div class="container-fluid">
      <div class="row">
         <div class="col-6">
            <h1 class="sub-heading ft-dark page-title">Test History</h1>
         </div>
         <!-- <div class="col-6 text-right">                                        
            <a href="#" data-target="#add_customer" data-toggle="modal" class="r-btn btn-sm r-btn-success mt-3"><i
               class="fa fa-plus"></i><span>Add</span></a>
         </div> -->
      </div>
   </div>
</section>
<section class="page page-dashboard">
   <div class="container-fluid">
      <div class="">         
         <ul class="nav nav-tabs">
            <li class="nav-item"><a data-toggle="tab" href="#Room" class="nav-link show active">Ligature</a></li>
            <li class="nav-item"><a data-toggle="tab" href="#Location" class="nav-link show">Curtain</a></li>
         </ul>
      </div>
      <div class="card-body">
         <div class="tab-content">            
            <div class="tab-pane active" id="Room" role="tabpanel">
               <section class="page">
                  <div class="">
                     <div class="row">                        
                        <div class="col-2 mt-2">
                           <select class="form-control">
                              <option value="">Select Client</option>
                              <option value="">Customer 1</option>
                              <option value="">Customer 2</option>
                              <option value="">Customer 3</option>
                           </select>
                        </div>
                        <div class="col-2 mt-2">
                           <select name="" id="" class="form-control">
                              <option value="">Select Location</option>
                              <option value="">Location 1</option>
                              <option value="">Location 2</option>
                              <option value="">Location 3</option>
                           </select>
                        </div>
                        <div class="col-2 mt-2">
                           <select name="" id="" class="form-control">
                              <option value="">Select Area</option>
                              <option value="">Area 1</option>
                              <option value="">Area 2</option>
                              <option value="">Area 3</option>
                           </select>
                        </div>
                        <div class="col-6 text-right">
                           <!-- <a href="#" data-target="#add_room" data-toggle="modal" class="r-btn btn-sm r-btn-success mt-2"><i
                              class="fa fa-plus"></i><span>Add Room</span></a> -->
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-12">
                           <div class="block">
                              <div class="content px-0">
                                 <table id="example1" class="table nowrap table-default table-bordered" style="width:100%">
                                    <thead>
                                       <tr>
                                          <th>S.No.</th>
                                          <th>Descriptive Name</th>
                                          <th>Client</th>
                                          <th>Location</th>
                                          <th>Area</th>
                                          <th>Room</th>
                                          <!-- <th>Type</th>
                                          <th>Code</th>
                                          <th>Manufacturer</th> -->
                                          <th>Last Review Date</th>
                                          <th>Date of test</th>
                                          <th>Status</th>
                                          <th>Action</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <tr>
                                          <td>#001</td>
                                          <td>Lorem Ipsum</td>
                                          <td><a href="#" class="ft-secondary fw-600">Customer 1</a></td>
                                          <td>Location 1</td>
                                          <td>Area 1</td>
                                          <td>Room 1</td>
                                          <!-- <td>Standard</td>                         
                                          <td>Lt-01</td>
                                          <td>Lorem Ipsum</td> -->
                                          <td>22-03-2022</td>
                                          <td>27-03-2022
                                             <a href="#" data-target="#download_report" data-toggle="modal" data-toggle="tooltip" data-placement="top" title="View Report"
                                                class="icon icon-sm icon-primary"><i class="fa fa-eye"></i></a>
                                          </td>
                                          <td>
                                             <span class="r-btn r-btn-success btn-block btn-sm"><i class="fa fa-check-circle"></i><span>Pass</span></span>
                                          </td>                           
                                          <td>
                                             <a href="#" data-target="#add_room" data-toggle="modal"
                                                class="icon icon-sm icon-base"><i class="fa fa-pencil-alt"></i></a>
                                             <a href="#" class="icon icon-sm icon-danger icon-xs"><i
                                                class="fa fa-archive"></i></a>
                                          </td>
                                       </tr>                                    
                                       <tr>
                                          <td>#002</td>
                                          <td>Lorem Ipsum</td>
                                          <td><a href="#" class="ft-secondary fw-600">Customer 2</a></td>
                                          <td>Location 2</td>
                                          <td>Area 2</td>
                                          <td>Room 2</td>
                                          <!-- <td>Standard</td>                         
                                          <td>Lt-02</td>
                                          <td>Lorem Ipsum</td> -->
                                          <td>23-03-2022</td>
                                          <td>27-03-2022
                                             <a href="#" data-target="#download_report" data-toggle="modal" data-toggle="tooltip" data-placement="top" title="View Report"
                                                class="icon icon-sm icon-primary"><i class="fa fa-eye"></i></a>
                                          </td>
                                          <td>
                                             <span class="r-btn r-btn-danger btn-block btn-sm"><i class="fa fa-times"></i><span>Fail</span></span>
                                          </td>                           
                                          <td>
                                             <a href="#" data-target="#add_room" data-toggle="modal"
                                                class="icon icon-sm icon-base"><i class="fa fa-pencil-alt"></i></a>
                                             <a href="#" class="icon icon-sm icon-danger icon-xs"><i
                                                class="fa fa-archive"></i></a>
                                          </td>
                                       </tr>                                    
                                       <tr>
                                          <td>#003</td>
                                          <td>Lorem Ipsum</td>
                                          <td><a href="#" class="ft-secondary fw-600">Customer 3</a></td>
                                          <td>Location 3</td>
                                          <td>Area 3</td>
                                          <td>Room 3</td>
                                          <!-- <td>Standard</td>                         
                                          <td>Lt-03</td>
                                          <td>Lorem Ipsum</td> -->
                                          <td>24-03-2022</td>
                                          <td>27-03-2022
                                             <a href="#" data-target="#download_report" data-toggle="modal" data-toggle="tooltip" data-placement="top" title="View Report"
                                                class="icon icon-sm icon-primary"><i class="fa fa-eye"></i></a>
                                          </td>
                                          <td>
                                             <span class="r-btn r-btn-success btn-block btn-sm"><i class="fa fa-check-circle"></i><span>Pass</span></span>
                                          </td>                           
                                          <td>
                                             <a href="#" data-target="#add_room" data-toggle="modal"
                                                class="icon icon-sm icon-base"><i class="fa fa-pencil-alt"></i></a>
                                             <a href="#" class="icon icon-sm icon-danger icon-xs"><i
                                                class="fa fa-archive"></i></a>
                                          </td>
                                       </tr>                                    
                                       <tr>
                                          <td>#004</td>
                                          <td>Lorem Ipsum</td>
                                          <td><a href="#" class="ft-secondary fw-600">Customer 4</a></td>
                                          <td>Location 4</td>
                                          <td>Area 4</td>
                                          <td>Room 4</td>
                                          <!-- <td>Standard</td>                         
                                          <td>Lt-04</td>
                                          <td>Lorem Ipsum</td> -->
                                          <td>25-03-2022</td>
                                          <td>27-03-2022
                                             <a href="#" data-target="#download_report" data-toggle="modal" data-toggle="tooltip" data-placement="top" title="View Report"
                                                class="icon icon-sm icon-primary"><i class="fa fa-eye"></i></a>
                                          </td>
                                          <td>
                                             <span class="r-btn r-btn-danger btn-block btn-sm"><i class="fa fa-times"></i><span>Fail</span></span>
                                          </td>                           
                                          <td>
                                             <a href="#" data-target="#add_room" data-toggle="modal"
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
            </div>
         </div>
      </div>
   </div>
</section>

<!-- Download Report -->
<div class="modal fade" id="download_report" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle"
   aria-hidden="true">
   <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title fw-600" id="exampleModalScrollableTitle">Test History</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <div class="form-group row">
               <div class="col-6">
                  <h1 class="">Download Report</h1>
               </div>
               <div class="col-6 text-right">                                        
                  <a href="#" data-target="#add_customer" data-toggle="modal" class="r-btn btn-sm r-btn-success"><i
                     class="fa fa-download"></i><span>Download</span></a>                     
               </div>
            </div><hr>
            <div class="form-group">
               <h1 class="sub-heading ft-dark">Test Reference Image</h1>
            </div>
            <div class="form-group">                             
               <img class="img-thumbnail" src="https://dummyimage.com/800x300/">            
            </div> <hr>
            <div class="form-group">
               <h1 class="sub-heading ft-dark">Client Details</h1>
            </div>           
            <div class="form-group row">             
               <div class="col-3 border-right">
                  <label for="">Client</label>
                  <p>Customer 1</p>
               </div>
               <div class="col-3 border-right">
                  <label for="">Location</label>
                  <p>Location 2</p>
               </div>
               <div class="col-3 border-right">
                  <label for="">Area</label>
                  <p>Area 2</p>
               </div>
               <div class="col-3 border-right">
                  <label for="">Rooms</label>
                  <p>Room 1</p>
               </div>
            </div><hr>
            <div class="form-group">
               <h1 class="sub-heading ft-dark">Equipment Details</h1>
            </div> 
            <div class="form-group row">             
               <div class="col-6 border-right">
                  <label for="">Equipment Name</label>
                  <p>Equipment 1</p>                  
               </div>               
               <div class="col-6">
                  <label for="">Descriptive Name</label>
                  <p>Lorem Ipsum</p>                  
               </div>               
               <!-- <div class="col-4">
                  <label for="">Reference Points</label>
                  <input type="text" class="form-control">
               </ddiv>
               <div class="col-4 text-center">
                  <label for="">Test Reference Image</label>                  
                  <img class="img-thumbnail" src="assets/no-image.jpg" data-toggle="tooltip" data-placement="top" title="Test Reference Image" style="width:40%">
               </div>                -->
            </div><hr>
            <div class="form-group">
               <h1 class="sub-heading ft-dark">Test Details</h1>
            </div>             
            <div class="form-group row">                             
               <!-- <div class="col-4 border-right">
                  <label for="">Test Reference Image</label>                  
                  <img class="img-thumbnail" src="assets/no-image.jpg" data-toggle="tooltip" data-placement="top" title="Test Reference Image">
               </div>                -->
               <div class="col-12">                                    
                  <div class="form-group row">
                     <div class="col">
                        <label for="">Reference Points</label>                        
                        <input type="text" class="form-control" disabled placeholder="Lt-01">
                     </div>
                     <div class="col">
                        <label for="">Vertical Test</label>
                        <input type="text" class="form-control" disabled placeholder="---">
                     </div>
                     <div class="col">
                        <label for="">30-45 Deg. Inner</label>
                        <input type="text" class="form-control" disabled placeholder="---">
                     </div>
                     <div class="col">
                        <label for="">30-45 Deg. Outer</label>
                        <input type="text" class="form-control" disabled placeholder="---">
                     </div>                     
                     <div class="col">
                        <label for="">Status</label>
                        <span class="r-btn d-block r-btn-success invert btn-sm"><i class="fa fa-check-circle"></i><span>Pass</span></span>
                     </div>
                  </div>
                  <div class="form-group row">
                     <div class="col">                        
                        <input type="text" class="form-control" disabled placeholder="Lt-02">
                     </div>
                     <div class="col">
                        <input type="text" class="form-control" disabled placeholder="---">
                     </div>
                     <div class="col">
                        <input type="text" class="form-control" disabled placeholder="---">
                     </div>
                     <div class="col">
                        <input type="text" class="form-control" disabled placeholder="---">
                     </div>                      
                     <div class="col">
                        <span class="r-btn d-block r-btn-danger invert btn-sm"><i class="fa fa-times"></i><span>Fail</span></span>
                     </div>
                  </div>
                  <div class="form-group row">
                     <div class="col">                        
                        <input type="text" class="form-control" disabled placeholder="Lt-03">
                     </div>
                     <div class="col">
                        <input type="text" class="form-control" disabled placeholder="---">
                     </div>
                     <div class="col">
                        <input type="text" class="form-control" disabled placeholder="---">
                     </div>
                     <div class="col">
                        <input type="text" class="form-control" disabled placeholder="---">
                     </div>                     
                     <div class="col">
                        <span class="r-btn d-block r-btn-danger invert btn-sm"><i class="fa fa-times"></i><span>Fail</span></span>
                     </div>
                  </div>
                  <div class="form-group row">
                     <div class="col">                        
                        <input type="text" class="form-control" disabled placeholder="Lt-04">
                     </div>
                     <div class="col">
                        <input type="text" class="form-control" disabled placeholder="---">
                     </div>
                     <div class="col">
                        <input type="text" class="form-control" disabled placeholder="---">
                     </div>
                     <div class="col">
                        <input type="text" class="form-control" disabled placeholder="---">
                     </div>                      
                     <div class="col">
                        <span class="r-btn d-block r-btn-success invert btn-sm"><i class="fa fa-check-circle"></i><span>Pass</span></span>
                     </div>
                  </div>
                  <div class="form-group row">
                     <div class="col">                        
                        <input type="text" class="form-control" disabled placeholder="Lt-05">
                     </div>
                     <div class="col">
                        <input type="text" class="form-control" disabled placeholder="---">
                     </div>
                     <div class="col">
                        <input type="text" class="form-control" disabled placeholder="---">
                     </div>
                     <div class="col">
                        <input type="text" class="form-control" disabled placeholder="---">
                     </div> 
                     <div class="col">
                        <span class="r-btn d-block r-btn-success invert btn-sm"><i class="fa fa-check-circle"></i><span>Pass</span></span>
                     </div>
                  </div>
                  <div class="form-group row">
                     <div class="col">                        
                        <input type="text" class="form-control" disabled placeholder="Lt-06">
                     </div>
                     <div class="col">
                        <input type="text" class="form-control" disabled placeholder="---">
                     </div>
                     <div class="col">
                        <input type="text" class="form-control" disabled placeholder="---">
                     </div>
                     <div class="col">
                        <input type="text" class="form-control" disabled placeholder="---">
                     </div>                      
                     <div class="col">
                        <span class="r-btn d-block r-btn-danger invert btn-sm"><i class="fa fa-times"></i><span>Fail</span></span>
                     </div>
                  </div>
               </div>               
            </div><hr>
            <div class="form-group">
               <h1 class="sub-heading ft-dark">Overall Test</h1>
            </div>            
            <div class="form-group row">            
               <div class="col-12">
                  <div class="form-group row">
                     <div class="col-md-3">
                        <label for="">Product Condition</label>                       
                     </div>
                     <div class="col-md-4">                       
                        <input type="text" class="form-control" disabled placeholder="---">
                     </div>                     
                     <div class="col-md-2">
                        <!-- <label for="">Status</label> -->
                        <span class="r-btn r-btn-success btn-block btn-sm"><i class="fa fa-check-circle"></i><span>Pass</span></span>
                     </div>                     
                  </div>
                  <div class="form-group row">
                     <div class="col-md-3">                        
                        <label for="">Product Ligature Risk</label>
                     </div>
                     <div class="col-md-4">
                        <input type="text" class="form-control" disabled placeholder="---">
                     </div>                     
                     <div class="col-md-2">
                        <span class="r-btn r-btn-danger btn-block btn-sm"><i class="fa fa-times"></i><span>Fail</span></span>
                     </div>
                  </div>
                  <div class="form-group row">
                     <div class="col-md-3">                        
                        <label for="">Batten Ligature Risk</label>
                     </div>                     
                     <div class="col-md-4">
                        <input type="text" class="form-control" disabled placeholder="---">
                     </div>
                     <div class="col-md-2">
                        <span class="r-btn r-btn-danger btn-block btn-sm"><i class="fa fa-times"></i><span>Fail</span></span>
                     </div>
                  </div>
                  <div class="form-group row">
                     <div class="col-md-3">                        
                        <label for="">Cord Ligature Risk</label>
                     </div>                     
                     <div class="col-md-4">
                        <input type="text" class="form-control" disabled placeholder="---">
                     </div>
                     <div class="col-md-2">
                        <span class="r-btn r-btn-success btn-block btn-sm"><i class="fa fa-check-circle"></i><span>Pass</span></span>
                     </div>
                  </div>                  
               </div>               
            </div><hr>           
            <div class="form-group">
               <label for=""><h1 class="sub-heading ft-dark">Notes</h1></label>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, facere quos a quibusdam obcaecati rem repudiandae nobis perferendis quis esse placeat mollitia, ad expedita voluptas dignissimos commodi, fugiat nihil hic.</p>
            </div><hr>
            <div class="form-group">               
               <label for=""><h1 class="sub-heading ft-dark">Work Automatically Completed</h1></label>
               <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Modi, soluta?</p>
            </div><hr>
            <div class="form-group">
               <label for=""><h1 class="sub-heading ft-dark">Recommendations</h1></label>
               <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quia perferendis aspernatur quis nostrum libero explicabo.</p>
            </div><hr>
         </div>
         <!-- <div class="modal-footer">
            <a href="#" data-dismiss="modal" type="button" class="r-btn r-btn-base">Cancel</a>
            <button type="button" class="r-btn r-btn-secondary">Add</button>
         </div> -->
      </div>
   </div>
</div>