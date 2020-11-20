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

        <form action="{{url('customers-update')}}" method="POST">
            @csrf
            <input type="hidden" name='id' value="{{$customers->id}}">
            <div class="form-group">
                <label for="">UserName</label>
                <input type="name" name="name" class="form-control" value="{{$customers->username}}" >
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="email" name="email" class="form-control" value="{{$customers->email}}">
            </div>
            <div class="form-group">
                <label for="">PhoneNumber</label>
                <input type="number" name="number" class="form-control" value="{{$customers->phonenumber}}">
            </div>
            <div class="form-group">
                <label for="">Address</label>
                <textarea type="address" name="address" class="form-control" value="{{$customers->address}}" ></textarea>
            </div>  

            <button type="submit" class="btn btn-primary">Submit</button>           
        </form>
</div>