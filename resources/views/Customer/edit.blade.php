@extension('admin-theme.master')


@section('judul', 'Edit Pelanggan')

@section('isi')

<div class="row mt-4">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
            Edit Customer
            <a class="btn btn-sm btn-info float-right"
            href="{{ url('customer' }}">
            <i class="fas fa-forward"></i>back
                </a>
            </div>
            <div class="card-body">
                <form action="{{ route('customer.update', $customer->id) }}" method="post">
                    @csrf 
                    @method('PATCH')
                    <div class="form-group">
                        <labe>name</labe>
                        <input type="text" name="name" class="form-control" value="{{ $customer->name }}">

                    </div>
                    <div class="form-group">
                        <labe>phone</labe>
                        <input type="text" name="name" class="form-control">
                    </div>
                    </div>
                    <div class="form-group">
                        <labe>email</labe>
                        <input type="text" name="name" class="form-control" value="{{ $customer->email }}">
                    </div>
                    
                    <div class="form-group">
                         <labe>Address</labe>
                        <textarea name="address" cols="30" rows="2" class="form-control">{{ $customer->address }}</textarea>
                    </div>

                    <input type="submit" class="btn btn-primary" name="submit" value="Save Customer">
                    <a class="btn btn_warnig float-right" href="{{ url('customer') }}">
                        <i class="fas fa_bacward"></i> Cancel
                    </a>
                    
                </form>
            </div>
    </div>
</div>
@endsection
                    
                    
                  
                  
                  
                    
               
           
           
           
           
           
           
           
           
           
           
           
           
           
           
           
           
           
           

           
           
           
           
        
