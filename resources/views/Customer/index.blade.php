@extension('admin-theme.master')


@section('judul', 'Data Pelanggan')

@section('isi')

<div class="row">
    <div class="col-6">
        <div class="card">
            <div class="card-header">Data Customer</div>
            <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>#</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($customers as $customer)
                    <tr>
                        <td>{{ $loop->interation }}</td>
                        <td></{{ $customer->name }}td>
                        <td>{{ $customer->phone }}</td>
                        <td>{{ $customer->email }}</td>
                        <td>{{ $customer->address }}</td>
                        <td>
                        <form action="{{ route('customer.delete', $customer->id) }}" method="post">
                            @csrf 
                            @method('DELETE')
                            <button class="btn btn-danger"><i class="fas"></i>
                        </button>
                        <a href="{{ route('customer.edit', $customer->id) }}" class="btn btn-sm btn-warning">
                            <i class="fas fa-edit"></i> delete
                        </a>

                        </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
        </div>
    </div>
</div>