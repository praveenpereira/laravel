<!DOCTYPE html>
<html lang>
    <head>
        <title></title>

        <!-- Load Bootstrap CSS -->
        
        {{ Html::style('css/bootstrap.min.css') }}
    </head>
    <body>
        <h2>Customer Details</h2>
        

            <!-- Table-to-load-the-data Part -->
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                         <th>Address</th>
                        <th>Contact No</th>
                        <th>Service</th>
                        <th><button id="btn-add" class="btn btn-primary btn-xs" click="toggle('add',0)">Add New Customer</button></th>
                    </tr>
                </thead>
                 @foreach ($customers as $customer)
                 
                <tbody>
               
                    <tr>
                        <td>  {{ $customer->id }}  </td>
                        <td> {{ $customer->name }} </td>
                        <td> {{ $customer->email }}  </td>
                        <td>  {{ $customer->address}}  </td>
                        <td>  {{ $customer->contact_number }} </td>
                         <td>  {{ $customer->service }} </td>
                        <td>
                            <button class="btn btn-default btn-xs btn-detail" click="toggle('edit', employee.id)">Edit</button>
                            <button class="btn btn-danger btn-xs btn-delete">Delete</button>
                        </td>
                    </tr>
                </tbody>
               
                
            </table>
           
  <form action="{{ url('customer/'.$customer->id) }}" method="POST">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}

            <button type="submit" class="btn btn-danger">
                <i class="fa fa-trash"></i> Delete
            </button>
        </form>
         @endforeach
            <!-- End of Table-to-load-the-data Part -->
            <!-- Modal (Pop up when detail button clicked) -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <h4 class="modal-title" id="myModalLabel"></h4>
                        </div>
                        <div class="modal-body">
                         {{ Form::open(array('url'=>'/register','method'=>'post')) }}
                            <form class="form-horizontal" role="form">

                                <div class="form-group error">
                                    <label for="inputEmail3" class="col-sm-3 control-label">Name</label>
                                    <div class="col-sm-9">
                                       
                                       
                               {{ Form::text('firstname', null, array('required','class'=>'form-control input-sm','placeholder'=>'First Name')) }}
                                       
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-3 control-label">Email</label>
                                    <div class="col-sm-9">
                                       
                                        {{ Form::email('email', null, array('required','class'=>'form-control input-sm','placeholder'=>'Email Address')) }}
                                        
                                    </div>
                                </div>
                                
                                
                                 <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-3 control-label">Address</label>
                                    <div class="col-sm-9">
                                       
                                           {{ Form::text('address', null, array('required','class'=>'form-control input-sm','placeholder'=>'Address')) }}
                                        
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-3 control-label">Contact Number</label>
                                    <div class="col-sm-9">
                                        
                                       {{ Form::text('contact number', null, array('required','class'=>'form-control input-sm','placeholder'=>'Contact number')) }}
                                   
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-3 control-label">Service</label>
                                    <div class="col-sm-9">
                                        
                                           {{ Form::text('service', null, array('required','class'=>'form-control input-sm','placeholder'=>'Service')) }}
                                    
                                    </div>
                                </div>
                           {{ Form::submit('Save', array('class'=>'btn btn-success btn-block')) }} 

                            </form>
                            {{ Form::close() }}
                            
                        </div>
                        <div class="modal-footer">
                           
                             
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Load Javascript Libraries ( JQuery, Bootstrap) -->
       
          {{ Html::script('js/jquery.min.js') }}
         {{ Html::script('js/bootstrap.min.js') }}
        
        
       
       
    </body>
</html>
