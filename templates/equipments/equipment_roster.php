<section class="page">
   <div class="container-fluid">
      <div class="row">
         <div class="col-6">
            <h1 class="sub-heading ft-dark page-title">Equipment Roster</h1>
         </div>
         <div class="col-6 text-right">
            <a href="#" data-target="#add_Equipment" data-toggle="modal" class="r-btn btn-sm r-btn-success mt-3"><i
               class="fa fa-plus"></i><span>Add</span></a>
         </div>
      </div>
   </div>
</section>

<section class="page page-dashboard">
   <div class="container-fluid">
      <div class="">
         <ul class="nav nav-tabs">
            <li class="nav-item"><a data-toggle="tab" href="#Ligature" class="nav-link show active">Ligature</a></li>
            <li class="nav-item"><a data-toggle="tab" href="#Curtain" class="nav-link show">Curtain</a></li>
         </ul>
      </div>
      <div class="card-body">
         <div class="tab-content">
            <div class="tab-pane show active" id="Ligature" role="tabpanel">
               <section class="page">
                  <div class="row">                        
                     <div class="col-2 mt-2">
                        <select class="form-control">
                           <option value="">Select Customer</option>
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
                              <table id="example" class="table nowrap table-default table-bordered" style="width:100%">
                                 <thead>
                                    <tr>
                                       <th>SR/code</th>
                                       <th>Descriptive name</th>
                                       <th>Client</th>
                                       <th>Location</th>
                                       <th>Area</th>
                                       <th>Room</th>
                                       <th>Equipment</th>
                                       <th>Equipment Code</th>                                       
                                       <th>Last Reviewed</th>
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
                                       <td>Equipment 1</td>                         
                                       <td>Lt-01</td>                                       
                                       <td>22-03-2022</td>
                                       <td>
                                          <span class="r-btn r-btn-success btn-block btn-sm"><i class="fa fa-check-circle"></i><span>Pass</span></span>
                                       </td>                           
                                       <td>
                                          <a href="#" data-target="#add_user" data-toggle="modal"
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
                                       <td>Equipment 2</td>                         
                                       <td>Lt-02</td>                                       
                                       <td>23-03-2022</td>
                                       <td>
                                          <span class="r-btn r-btn-danger btn-block btn-sm"><i class="fa fa-times"></i><span>Fail</span></span>
                                       </td>                           
                                       <td>
                                          <a href="#" data-target="#add_user" data-toggle="modal"
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
                                       <td>Equipment 3</td>                         
                                       <td>Lt-03</td>                                       
                                       <td>24-03-2022</td>
                                       <td>
                                          <span class="r-btn r-btn-success btn-block btn-sm"><i class="fa fa-check-circle"></i><span>Pass</span></span>
                                       </td>                           
                                       <td>
                                          <a href="#" data-target="#add_user" data-toggle="modal"
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
                                       <td>Equipment 4</td>                         
                                       <td>Lt-04</td>
                                       <td>25-03-2022</td>
                                       <td>
                                          <span class="r-btn r-btn-danger btn-block btn-sm"><i class="fa fa-times"></i><span>Fail</span></span>
                                       </td>                           
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
               </section>
            </div>            
            <div class="tab-pane show" id="Curtain" role="tabpanel">
               <section class="page">
                  <div class="row">                        
                     <div class="col-2 mt-2">
                        <select class="form-control">
                           <option value="">Select Customer</option>
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
                                       <th>SR/code</th>                                     
                                       <th>Descriptive name</th>
                                       <th>Client</th>
                                       <th>Location</th>
                                       <th>Area</th>
                                       <th>Room</th>
                                       <th>Equipment</th>
                                       <th>Equipment Code</th>                                       
                                       <th>Last Reviewed</th>
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
                                       <td>Equipment 1</td>                         
                                       <td>Lt-01</td>                                       
                                       <td>22-03-2022</td>
                                       <td>
                                          <span class="r-btn r-btn-success btn-block btn-sm"><i class="fa fa-check-circle"></i><span>Pass</span></span>
                                       </td>                           
                                       <td>
                                          <a href="#" data-target="#add_user" data-toggle="modal"
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
                                       <td>Equipment 2</td>                         
                                       <td>Lt-02</td>                                       
                                       <td>23-03-2022</td>
                                       <td>
                                          <span class="r-btn r-btn-danger btn-block btn-sm"><i class="fa fa-times"></i><span>Fail</span></span>
                                       </td>                           
                                       <td>
                                          <a href="#" data-target="#add_user" data-toggle="modal"
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
                                       <td>Equipment 3</td>                         
                                       <td>Lt-03</td>                                       
                                       <td>24-03-2022</td>
                                       <td>
                                          <span class="r-btn r-btn-success btn-block btn-sm"><i class="fa fa-check-circle"></i><span>Pass</span></span>
                                       </td>                           
                                       <td>
                                          <a href="#" data-target="#add_user" data-toggle="modal"
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
                                       <td>Equipment 4</td>                         
                                       <td>Lt-04</td>                                       
                                       <td>25-03-2022</td>
                                       <td>
                                          <span class="r-btn r-btn-danger btn-block btn-sm"><i class="fa fa-times"></i><span>Fail</span></span>
                                       </td>                           
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
               </section>
            </div>
         </div>
      </div>
   </div>
</section>

<!-- Add Equipment -->
<div class="modal fade" id="add_Equipment" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle"
   aria-hidden="true">
   <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title fw-600" id="exampleModalScrollableTitle">Add Equipment to Room</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">            
            <div class="form-group row">
               <div class="col-3">
                  <label for="">Client</label>
                  <select name="" id="" class="form-control">
                     <option value="">Select Customer</option>
                     <option value="">Customer 1</option>
                     <option value="">Customer 2</option>
                     <option value="">Customer 3</option>
                  </select>
               </div>
               <div class="col-3">
                  <label for="">Location</label>
                  <select name="" id="" class="form-control">
                     <option value="">Select Location</option>
                     <option value="">Location 1</option>
                     <option value="">Location 2</option>
                     <option value="">Location 3</option>
                  </select>
               </div>
               <div class="col-3">
                  <label for="">Area</label>
                  <select name="" id="" class="form-control">
                     <option value="">Select Area</option>
                     <option value="">Area 1</option>
                     <option value="">Area 2</option>
                     <option value="">Area 3</option>
                  </select>
               </div>
               <div class="col-3">
                  <label for="">Room</label>
                  <select name="" id="" class="form-control">
                     <option value="">Select Area</option>
                     <option value="">Room 1</option>
                     <option value="">Royal Mint</option>
                     <option value="">Deluxe</option>
                  </select>
               </div>
            </div>
            <div class="form-group row">
               <div class="col-3">
                  <label for="">Select Equipment</label>
                  <select name="" id="" class="form-control">
                     <option value="">Select Equipment</option>
                     <option value="">Equipment 1</option>
                     <option value="">Equipment 2</option>
                     <option value="">Equipment 3</option>
                  </select>
               </div>
               <div class="col-3">
                  <label for="">Equipment Name</label>
                  <input type="text" disabled class="form-control" placeholder="Equipment 1">                  
               </div>
               <div class="col-3">
                  <label for="">Sr. / Code</label>
                  <input type="text" class="form-control">
               </div>
               <div class="col-3">
                  <label for="">Descriptive Name</label>
                  <input type="text" class="form-control">
               </div>               
            </div>
            <div class="form-group row">               
               <div class="col-6">
                  <label for="">Reference</label>
                  <select name="" id="" class="form-control">
                     <option value="">Select Reference</option>
                     <option value="">Reference 1</option>
                     <option value="">Reference 2</option>
                     <option value="">Reference 3</option>
                     <option value="">Reference 4</option>
                     <option value="">Reference 5</option>
                     <option value="">Reference 6</option>
                     <option value="">Reference 7</option>
                     <option value="">Reference 8</option>
                     <option value="">Reference 9</option>
                     <option value="">Reference 10</option>
                  </select>
               </div>
               <!-- <div class="col-6">
                  <label for="">Status</label>
                  <input type="text" class="form-control">
               </div> -->               
            </div>            
            <!-- <div class="form-group">
               <label for="">Room Notes</label>
               <textarea name="" class="form-control" id="" cols="30" rows="2"></textarea>
            </div> -->
         </div>
         <div class="modal-footer">
            <a href="#" data-dismiss="modal" type="button" class="r-btn r-btn-base">Cancel</a>
            <button type="button" class="r-btn r-btn-secondary">Add</button>
         </div>
      </div>
   </div>
</div>

<!-- ADD Notes -->
<div class="modal fade" id="add_userrrr" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle"
   aria-hidden="true">
   <div class="modal-dialog modal-dialog-scrollable" role="document">
      <div class="modal-content">
         <div class="modal-header skin-secondary">
            <h5 class="modal-title fw-600" id="exampleModalScrollableTitle">Add Note</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <div class="form-group row">
               <div class="col-md-6">
                  <div>
                     <label for="">Source Name</label>
                     <a href="#" class="float-right icon icon-sm">
                     <i class="fa fa-plus"></i> </a>
                  </div>
                  <select id="combobox" class="form-control">
                     <option value>Select one...</option>
                     <option value="ActionScript">ActionScript</option>
                     <option value="AppleScript">AppleScript</option>
                     <option value="Asp">Asp</option>
                     <option value="BASIC">BASIC</option>
                     <option value="C">C</option>
                     <option value="C++">C++</option>
                     <option value="Scheme">Scheme</option>
                  </select>
               </div>
               <div class="col-md-6">
                  <label for="">Reason Code</label>
                  <select name="" id="" class="form-control">
                     <option value="">R.Code 1</option>
                     <option value="">R.Code 2</option>
                  </select>
               </div>
            </div>
            <div class="form-group row">
               <div class="col-md-6">
                  <label for="">Start Date/Time</label>
                  <div class="adon-group">
                     <input type="text" class="form-control datepicker" placeholder="Select Date">
                     <input id="spinner" class="form-control text-right" name="spinner" value="08:30 PM">
                  </div>
               </div>
               <div class="col-md-6">
                  <label for="">End Date/Time</label>
                  <div class="adon-group">
                     <input type="text" class="form-control datepicker" placeholder="Select Date">
                     <input id="" placeholder="Select Date" class="form-control text-right" name="spinner"
                        value="08:30 PM">
                  </div>
               </div>
            </div>
            <div class="form-group">
               <label for="">Notes</label>
               <textarea name="" class="form-control" id="" cols="30" rows="5"></textarea>
            </div>
         </div>
         <div class="modal-footer">
            <a href="#" data-dismiss="modal" type="button" class="r-btn r-btn-base">Cancel</a>
            <button type="button" class="r-btn r-btn-secondary">Add Note</button>
         </div>
      </div>
   </div>
</div>