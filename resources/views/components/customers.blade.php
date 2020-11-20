<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<div>

    <div class="container mt-5">
        
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

        <form action="{{url('customers-save')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="">UserName</label>
                <input type="name" name="name" class="form-control" value="{{old('name')}}" >
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="email" name="email" class="form-control" value="{{old('email')}}">
            </div>
            <div class="form-group">
                <label for="">PhoneNumber</label>
                <input type="number" name="number" class="form-control" value="{{old('number')}}">
            </div>
            <div class="form-group">
                <label for="">Address</label>
                <textarea type="address" name="address" class="form-control" value="{{old('address')}}" ></textarea>
            </div>  

            <button type="submit" class="btn btn-primary">Submit</button>           
        </form>


        <table class="table table-bordered table-dark mt-5">
            <thead>
                <tr>
                <th scope="col">Id</th>
                <th scope="col">UserName</th>
                <th scope="col">email</th>
                <th scope="col">PhoneNumber</th>
                <th scope="col">address</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @if(count($customers)>0)
                @foreach($customers as $customer)
                <tr>
                    <td>{{$customer->id}}</td>
                    <td>{{$customer->username}}</td>
                    <td>{{$customer->email}}</td>
                    <td>{{$customer->phonenumber}}</td>
                    <td>{{$customer->address}}</td>
                    <td>
                    <a href="{{url('customers-edit')}}/{{($customer->id)}}" class="btn btn-danger">Edit</a>
                    <a href="{{url('customers-delete')}}/{{$customer->id}}" class="btn btn-primary">Delete</a>
                    </td>
                </tr>
                @endforeach
                @else
                    <tr><td colspan="6">No Records Found</td></tr>
                @endif
            </tbody>
        </table>
        @if(count($customers)>0)
        {{$customers->links()}}
        @endif

    </div>
</div>


