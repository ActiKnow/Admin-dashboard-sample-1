<section class="page">
   <div class="container-fluid">
      <div class="row">
         <div class="col-6">
            <h1 class="sub-heading ft-dark page-title">Manage Site</h1>
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
            <li class="nav-item"><a data-toggle="tab" href="#Client" class="nav-link show active">Customers</a></li>
            <li class="nav-item"><a data-toggle="tab" href="#Location" class="nav-link show">Locations</a></li>
            <li class="nav-item"><a data-toggle="tab" href="#Area" class="nav-link show">Area</a></li>
            <li class="nav-item"><a data-toggle="tab" href="#Room" class="nav-link show">Rooms</a></li>
         </ul>
      </div>
      <div class="card-body">
         <div class="tab-content">
            <div class="tab-pane show active" id="Client" role="tabpanel">
               <section class="page">
                  <div class="">
                     <div class="row">
                        <div class="col-6">
                           <!-- <h1 class="sub-heading ft-dark page-title">Customers</h1> -->
                        </div>
                        <div class="col-6 text-right">                                        
                           <a href="#" data-target="#add_client" data-toggle="modal" class="r-btn btn-sm r-btn-success mt-2"><i
                              class="fa fa-plus"></i><span>Add Customer</span></a>
                        </div>
                     </div>
                     <!-- <div class="row">
                        <div class="col-md-12 mt-1">
                            <div class="alert alert-danger" role="alert">
                                Unable to create new user or user already been exist! Pleae Check!
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="alert alert-success" role="alert">
                                New Customer has been created successfully!
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                     </div>                               -->
                     <div class="row">
                        <div class="col-md-12">
                           <div class="block">
                              <div class="content px-0">
                                 <table id="example" class="table nowrap table-default table-bordered" style="width:100%">                                 
                                    <thead>
                                       <tr>
                                          <th>S.No.</th>
                                          <th>Customer Name</th>
                                          <th>Email</th>
                                          <th>Phone No.</th>
                                          <th># of Locations</th>
                                          <th># of Area</th>
                                          <th># of Rooms</th>
                                          <th># of Ligature Eq.</th>
                                          <th># of Curtains</th>
                                          <th>Note</th>
                                          <th>Status</th>
                                          <th>Action</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <tr>
                                          <td>#001</td>
                                          <td><a data-toggle="tab" href="#Location" class="ft-secondary fw-600">Customer 1</a></td>
                                          <td>customer 1@gmail.com</td>
                                          <td>9999999999</td>
                                          <td>1</td>
                                          <td>1</td>
                                          <td>1</td>
                                          <td>1</td>
                                          <td>1</td>
                                          <td>Customer Note 1</td>
                                          <td>
                                             <input class="tgl tgl-light" id="cb1" type="checkbox">
                                             <label class="tgl-btn" for="cb1"></label>
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
                                          <td><a href="#" class="ft-secondary fw-600">Customer 2</a></td>
                                          <td>customer 2@gmail.com</td>
                                          <td>9999999999</td>
                                          <td>1</td>
                                          <td>1</td>
                                          <td>1</td>
                                          <td>1</td>
                                          <td>1</td>
                                          <td>Customer Note 2</td>
                                          <td>
                                             <input class="tgl tgl-light" id="cb2" type="checkbox">
                                             <label class="tgl-btn" for="cb2"></label>
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
                                          <td><a href="#" class="ft-secondary fw-600">Customer 3</a></td>
                                          <td>customer 3@gmail.com</td>
                                          <td>9999999999</td>
                                          <td>1</td>
                                          <td>1</td>
                                          <td>1</td>
                                          <td>1</td>
                                          <td>1</td>
                                          <td>Customer Note 3</td>
                                          <td>
                                             <input class="tgl tgl-light" id="cb3" type="checkbox">
                                             <label class="tgl-btn" for="cb3"></label>
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
                                          <td><a href="#" class="ft-secondary fw-600">Customer 4</a></td>
                                          <td>customer 4@gmail.com</td>
                                          <td>9999999999</td>
                                          <td>1</td>
                                          <td>1</td>
                                          <td>1</td>
                                          <td>1</td>
                                          <td>1</td>
                                          <td>Customer Note 4</td>
                                          <td>
                                             <input class="tgl tgl-light" id="cb4" type="checkbox">
                                             <label class="tgl-btn" for="cb4"></label>
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
                  </div>
               </section>
            </div>
            <div class="tab-pane show" id="Location" role="tabpanel">
               <section class="page">
                  <div class="">
                     <div class="row">                        
                        <div class="col-2 mt-2 text-right">
                           <select class="form-control">
                              <option value="">Select Customer</option>
                              <option value="">Customer 1</option>
                              <option value="">Customer 2</option>
                              <option value="">Customer 3</option>
                           </select>
                        </div>
                        <div class="col-10 text-right">
                           <a href="#" data-target="#add_location" data-toggle="modal" class="r-btn btn-sm r-btn-success mt-2"><i
                              class="fa fa-plus"></i><span>Add Location</span></a>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-12">
                           <div class="block">
                              <div class="content px-0">
                              <table id="example2" class="table nowrap table-default table-bordered" style="width:100%">                                 
                                    <thead>
                                       <tr>
                                          <th>S.No.</th>
                                          <th>Customer Name</th>
                                          <th>Location Name</th>                                          
                                          <th># of Area</th>
                                          <th># of Rooms</th>
                                          <th># of Ligature Eq.</th>
                                          <th># of Curtains</th>
                                          <th>Note</th>
                                          <th>Action</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <tr>
                                          <td>#001</td>                                          
                                          <td>Customer 1</td>
                                          <td><a href="#" class="ft-secondary fw-600">Location 1</a></td>
                                          <td>1</td>
                                          <td>1</td>
                                          <td>1</td>
                                          <td>1</td>
                                          <td>Customer Note 1</td>
                                          <td>
                                             <a href="#" data-target="#add_user" data-toggle="modal"
                                                class="icon icon-sm icon-base"><i class="fa fa-pencil-alt"></i></a>
                                             <a href="#" class="icon icon-sm icon-danger icon-xs"><i
                                                class="fa fa-archive"></i></a>
                                          </td>
                                       </tr>
                                       <tr>
                                          <td>#002</td>                                          
                                          <td>Customer 2</td>
                                          <td><a href="#" class="ft-secondary fw-600">Location 2</a></td>
                                          <td>1</td>
                                          <td>1</td>
                                          <td>1</td>
                                          <td>1</td>
                                          <td>Customer Note 2</td>
                                          <td>
                                             <a href="#" data-target="#add_user" data-toggle="modal"
                                                class="icon icon-sm icon-base"><i class="fa fa-pencil-alt"></i></a>
                                             <a href="#" class="icon icon-sm icon-danger icon-xs"><i
                                                class="fa fa-archive"></i></a>
                                          </td>
                                       </tr>
                                       <tr>
                                          <td>#003</td>                                          
                                          <td>Customer 3</td>
                                          <td><a href="#" class="ft-secondary fw-600">Location 3</a></td>
                                          <td>1</td>
                                          <td>1</td>
                                          <td>1</td>
                                          <td>1</td>
                                          <td>Customer Note 3</td>
                                          <td>
                                             <a href="#" data-target="#add_user" data-toggle="modal"
                                                class="icon icon-sm icon-base"><i class="fa fa-pencil-alt"></i></a>
                                             <a href="#" class="icon icon-sm icon-danger icon-xs"><i
                                                class="fa fa-archive"></i></a>
                                          </td>
                                       </tr>
                                       <tr>
                                          <td>#004</td>                                          
                                          <td>Customer 4</td>
                                          <td><a href="#" class="ft-secondary fw-600">Location 4</a></td>
                                          <td>1</td>
                                          <td>1</td>
                                          <td>1</td>
                                          <td>1</td>
                                          <td>Customer Note 4</td>
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
            </div>
            <div class="tab-pane show" id="Area" role="tabpanel">
               <section class="page">
                  <div class="">
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
                        <div class="col-8 text-right">
                           <a href="#" data-target="#add_area" data-toggle="modal" class="r-btn btn-sm r-btn-success mt-2"><i
                              class="fa fa-plus"></i><span>Add Area</span></a>
                        </div>
                        <!-- <div class="col-6 text-right">
                           <a href="#" data-target="#add_user" data-toggle="modal" class="r-btn r-btn-primary mt-2"><i
                                   class="fa fa-plus"></i><span>Add Customer</span></a>
                           </div> -->
                     </div>
                     <div class="row">
                        <div class="col-md-12">
                           <div class="block">
                              <div class="content px-0">
                              <table id="example3" class="table  nowrap table-default table-bordered" style="width:100%">
                                 <thead>
                                       <tr>
                                          <th>S.No.</th>                                          
                                          <th>Customer Name</th>
                                          <th>Location Name</th>
                                          <th>Area Name</th>
                                          <th># of Rooms</th>
                                          <th># of Ligature Eq.</th>
                                          <th># of Curtains</th>
                                          <th>Note</th>
                                          <th>Action</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <tr>
                                          <td>#001</td>                                          
                                          <td>Customer 1</td>
                                          <td>Location 1</td>
                                          <td><a href="#" class="ft-secondary fw-600">Area 1</a></td>
                                          <td>1</td>
                                          <td>1</td>
                                          <td>1</td>
                                          <td>Customer Note 1</td>
                                          <td>
                                             <a href="#" data-target="#add_user" data-toggle="modal"
                                                class="icon icon-sm icon-base"><i class="fa fa-pencil-alt"></i></a>
                                             <a href="#" class="icon icon-sm icon-danger icon-xs"><i
                                                class="fa fa-archive"></i></a>
                                          </td>
                                       </tr>
                                       <tr>
                                          <td>#002</td>
                                          <td>Customer 2</td>
                                          <td>Location 3</td>
                                          <td><a href="#" class="ft-secondary fw-600">Area 2</a></td>
                                          <td>1</td>
                                          <td>1</td>
                                          <td>1</td>
                                          <td>Customer Note 2</td>
                                          <td>
                                             <a href="#" data-target="#add_user" data-toggle="modal"
                                                class="icon icon-sm icon-base"><i class="fa fa-pencil-alt"></i></a>
                                             <a href="#" class="icon icon-sm icon-danger icon-xs"><i
                                                class="fa fa-archive"></i></a>
                                          </td>
                                       </tr>
                                       <tr>
                                          <td>#003</td>
                                          <td>Customer 3</td>
                                          <td>Location 3</td>
                                          <td><a href="#" class="ft-secondary fw-600">Area 3</a></td>
                                          <td>1</td>
                                          <td>1</td>
                                          <td>1</td>
                                          <td>Customer Note 3</td>
                                          <td>
                                             <a href="#" data-target="#add_user" data-toggle="modal"
                                                class="icon icon-sm icon-base"><i class="fa fa-pencil-alt"></i></a>
                                             <a href="#" class="icon icon-sm icon-danger icon-xs"><i
                                                class="fa fa-archive"></i></a>
                                          </td>
                                       </tr>
                                       <tr>
                                          <td>#004</td>
                                          <td>Customer 4</td>
                                          <td>Location 4</td>
                                          <td><a href="#" class="ft-secondary fw-600">Area 4</a></td>
                                          <td>1</td>
                                          <td>1</td>
                                          <td>1</td>
                                          <td>Customer Note 4</td>
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
            </div>
            <div class="tab-pane show" id="Room" role="tabpanel">
               <section class="page">
                  <div class="">
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
                           <a href="#" data-target="#add_room" data-toggle="modal" class="r-btn btn-sm r-btn-success mt-2"><i
                              class="fa fa-plus"></i><span>Add Room</span></a>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-12">
                           <div class="block">
                              <div class="content px-0">
                              <table id="example4" class="table  nowrap table-default table-bordered" style="width:100%">
                                 <thead>
                                       <tr>
                                          <th>S.No.</th>                                          
                                          <th>Customer Name</th>
                                          <th>Location Name</th>
                                          <th>Area Name</th>
                                          <th>Room Name</th>
                                          <th># of Ligature Eq.</th>
                                          <th># of Curtains</th>
                                          <th>Note</th>
                                          <th>Action</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <tr>
                                          <td>#001</td>                                          
                                          <td>Customer 1</td>
                                          <td>Location 1</td>
                                          <td>Area 1</td>
                                          <td><a href="#" class="ft-secondary fw-600">Room 1</a></td>
                                          <td>1</td>
                                          <td>1</td>
                                          <td>Customer Note 1</td>
                                          <td>
                                             <a href="#" data-target="#add_user" data-toggle="modal"
                                                class="icon icon-sm icon-base"><i class="fa fa-pencil-alt"></i></a>
                                             <a href="#" class="icon icon-sm icon-danger icon-xs"><i
                                                class="fa fa-archive"></i></a>
                                          </td>
                                       </tr>
                                       <tr>
                                          <td>#002</td>
                                          <td>Customer 2</td>
                                          <td>Location 2</td>
                                          <td>Area 2</td>
                                          <td><a href="#" class="ft-secondary fw-600">Room 2</a></td>
                                          <td>1</td>
                                          <td>1</td>
                                          <td>Customer Note 2</td>
                                          <td>
                                             <a href="#" data-target="#add_user" data-toggle="modal"
                                                class="icon icon-sm icon-base"><i class="fa fa-pencil-alt"></i></a>
                                             <a href="#" class="icon icon-sm icon-danger icon-xs"><i
                                                class="fa fa-archive"></i></a>
                                          </td>
                                       </tr>
                                       <tr>
                                          <td>#003</td>
                                          <td>Customer 3</td>
                                          <td>Location 3</td>
                                          <td>Area 3</td>
                                          <td><a href="#" class="ft-secondary fw-600">Room 3</a></td>
                                          <td>1</td>
                                          <td>1</td>
                                          <td>Customer Note 3</td>
                                          <td>
                                             <a href="#" data-target="#add_user" data-toggle="modal"
                                                class="icon icon-sm icon-base"><i class="fa fa-pencil-alt"></i></a>
                                             <a href="#" class="icon icon-sm icon-danger icon-xs"><i
                                                class="fa fa-archive"></i></a>
                                          </td>
                                       </tr>
                                       <tr>
                                          <td>#004</td>
                                          <td>Customer 4</td>
                                          <td>Location 4</td>
                                          <td>Area 4</td>
                                          <td><a href="#" class="ft-secondary fw-600">Room 4</a></td>
                                          <td>1</td>
                                          <td>1</td>
                                          <td>Customer Note 4</td>
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
            </div>
         </div>
      </div>
   </div>
</section>

<!-- Add Customer -->
<div class="modal fade" id="add_client" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle"
   aria-hidden="true">
   <div class="modal-dialog modal-dialog-scrollable" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title fw-600" id="exampleModalScrollableTitle">Add Customer</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <div class="form-group row">
               <div class="col-6">
                  <label for="">Contact Name</label>
                  <input type="text" class="form-control">
               </div>
               <div class="col-6">
                  <label for="">Email Address</label>
                  <input type="email" class="form-control">                  
               </div>
            </div>
            <div class="form-group row">
               <div class="col-6">
                  <label for="">Mobile Number</label>
                  <input type="number" class="form-control">
               </div>
               <div class="col-6">
                  <label for="">Phone Number</label>
                  <input type="number" class="form-control">
               </div>
            </div>
            <div class="form-group">
               <label for="">Website</label>
               <input type="text" class="form-control">
            </div>
            <div class="form-group">
               <label for="">Address</label>
               <textarea name="" class="form-control" id="" cols="30" rows="5"></textarea>
            </div>
            <div class="form-group">
               <label for="">Note</label>
               <textarea name="" class="form-control" id="" cols="30" rows="5"></textarea>
            </div>
            <!-- <div class="form-check">
               <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
               <label class="form-check-label" for="flexCheckDefault">Active</label>
            </div> -->
         </div>
         <div class="modal-footer">
            <a href="#" data-dismiss="modal" type="button" class="r-btn r-btn-base">Cancel</a>
            <button type="button" class="r-btn r-btn-secondary">Add</button>
         </div>
      </div>
   </div>
</div>

<!-- Add Location -->
<div class="modal fade" id="add_location" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle"
   aria-hidden="true">
   <div class="modal-dialog modal-dialog-scrollable" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title fw-600" id="exampleModalScrollableTitle">Add Location</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <div class="form-group row">
               <div class="col-6">
                  <label for="">Customer Name</label>
                  <select name="" id="" class="form-control">
                     <option value="">Select Customer</option>
                     <option value="">Customer 1</option>
                     <option value="">Customer 2</option>
                     <option value="">Customer 3</option>
                  </select>
               </div>
               <div class="col-6">
                  <label for="">Location Name</label>
                  <input type="text" class="form-control">
               </div>               
            </div>
            <div class="form-group row">
               <div class="col-6">
                  <label for="">Location Contact</label>
                  <input type="text" class="form-control">
               </div>
               <div class="col-6">
                  <label for="">Email Address </label>
                  <input type="email" class="form-control">                  
               </div>
            </div>
            <div class="form-group row">
               <div class="col-6">
                  <label for="">Mobile Number</label>
                  <input type="number" class="form-control">
               </div>
               <div class="col-6">
                  <label for="">Phone Number</label>
                  <input type="text" class="form-control">
               </div>
            </div>
            <div class="form-group">
               <label for="">Location Address</label>                    
               <textarea class="form-control" id="message" name="message" rows="5"></textarea>
            </div>
            <div class="form-group">
               <label for="">Note</label>
               <textarea name="" class="form-control" id="" cols="30" rows="5"></textarea>
            </div>
         </div>
         <div class="modal-footer">
            <a href="#" data-dismiss="modal" type="button" class="r-btn r-btn-base">Cancel</a>
            <button type="button" class="r-btn r-btn-secondary">Add</button>
         </div>
      </div>
   </div>
</div>

<!-- Add Area -->
<div class="modal fade" id="add_area" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle"
   aria-hidden="true">
   <div class="modal-dialog modal-dialog-scrollable" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title fw-600" id="exampleModalScrollableTitle">Add Area</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">            
            <div class="form-group row">
               <div class="col-6">
                  <label for="">Customer Name</label>
                  <select name="" id="" class="form-control">
                     <option value="">Select Customer</option>
                     <option value="">Customer 1</option>
                     <option value="">Customer 2</option>
                     <option value="">Customer 3</option>
                  </select>
               </div>
               <div class="col-6">
                  <label for="">Location Name</label>
                  <select name="" id="" class="form-control">
                     <option value="">Select Location</option>
                     <option value="">Location 1</option>
                     <option value="">Location 2</option>
                     <option value="">Location 3</option>
                  </select>
               </div>
            </div>
            <div class="form-group">
               <label for="">Area Name</label>
               <input type="text" class="form-control">
            </div>
            <div class="form-group row">
               <div class="col-6">
                  <label for="">Area Contact</label>
                  <input type="text" class="form-control">
               </div>
               <div class="col-6">
                  <label for="">Email Address </label>
                  <input type="email" class="form-control">                  
               </div>
            </div>
            <div class="form-group row">
               <div class="col-6">
                  <label for="">Mobile Number</label>
                  <input type="number" class="form-control">
               </div>
               <div class="col-6">
                  <label for="">Phone Number</label>
                  <input type="text" class="form-control">
               </div>
            </div>            
            <div class="form-group">
               <label for="">Note</label>
               <textarea name="" class="form-control" id="" cols="30" rows="5"></textarea>
            </div>
         </div>
         <div class="modal-footer">
            <a href="#" data-dismiss="modal" type="button" class="r-btn r-btn-base">Cancel</a>
            <button type="button" class="r-btn r-btn-secondary">Add</button>
         </div>
      </div>
   </div>
</div>

<!-- Add Room -->
<div class="modal fade" id="add_room" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle"
   aria-hidden="true">
   <div class="modal-dialog modal-dialog-scrollable" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title fw-600" id="exampleModalScrollableTitle">Add Room</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">            
            <div class="form-group row">
               <div class="col-4">
                  <label for="">Customer Name</label>
                  <select name="" id="" class="form-control">
                     <option value="">Select Customer</option>
                     <option value="">Customer 1</option>
                     <option value="">Customer 2</option>
                     <option value="">Customer 3</option>
                  </select>
               </div>
               <div class="col-4">
                  <label for="">Location Name</label>
                  <select name="" id="" class="form-control">
                     <option value="">Select Location</option>
                     <option value="">Location 1</option>
                     <option value="">Location 2</option>
                     <option value="">Location 3</option>
                  </select>
               </div>
               <div class="col-4">
                  <label for="">Area Name</label>
                  <select name="" id="" class="form-control">
                     <option value="">Select Area</option>
                     <option value="">Area 1</option>
                     <option value="">Area 2</option>
                     <option value="">Area 3</option>
                  </select>
               </div>
            </div>
            <div class="form-group">
               <label for="">Room Name</label>
               <input type="text" class="form-control">
            </div>            
            <div class="form-group">
               <label for="">Note</label>
               <textarea name="" class="form-control" id="" cols="30" rows="5"></textarea>
            </div>
         </div>
         <div class="modal-footer">            
            <a href="#" data-dismiss="modal" type="button" class="r-btn r-btn-base">Cancel</a>
            <button type="button" class="r-btn r-btn-secondary"><i class="fa fa-plus"></i>  Add More</button>
         </div>
      </div>
   </div>
</div>