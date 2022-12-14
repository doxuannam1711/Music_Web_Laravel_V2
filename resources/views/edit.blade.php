<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>{{$title}}</title>
</head>
<body>
    

    <form action="{{route('admin.post-edit')}}" method="post">
        <div class="mb-3">
            <label for="">Name</label>
            <input type="text" class="form-control" name="name" placeholder="name" value="{{old('name') ?? $userDetail->name}}">
        </div>
        <div class="mb-3">
            <label for="">Singer</label>
            <input type="text" class="form-control" name="singer" placeholder="singer" value="{{old('singer') ?? $userDetail->singer}}">
        </div>
        <div class="mb-3">
            <label for="">Path</label>
            <input type="file" class="form-control" name="path" placeholder="name">
        </div>
        <div class="mb-3">
            <label for="">Image</label>
            <input type="file" class="form-control" name="image" placeholder="name">
        </div>
        
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{route('admin.index')}}" class="btn btn-primary">Back</a>
        @csrf 
    </form>
    <script src="{{url('/assets/js/ca_nhan.js')}}">
    </script>
</body>
</html>
