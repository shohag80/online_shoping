@extends('Backend/Master')
@section('Container')
<div class="Container">
    <div class="row mt-3 mx-3 mb-4"> <div class="col-md-12">
        <div style="margin-top: 50px; margin-left: 10px;" class="text-center">
        <h1 class="mt-3">New Admin</h1>
        <p class="white-text">You are 5 minutes away from compleating your Informantion!</p>
        </div>
        </div>

        <div class="col-md-4 justify-content-center"> </div>

            <div class="col-md-4 justify-content-center"> <div class="card card-custom pb-4"> <div
                class="card-body mt-0 mx-5">

                <form action="{{route('Admin_Store')}}" method="post">
                @csrf
                <div>
                    <div class="col">
                        <div class="form-outline">
                            <label class="form-label" for="form9Example1">Name</label>
                            <input type="text" required value="{{old('name')}}" name="name" class="form-control" />
                            @error('name')
                                {{$message}}
                            @enderror
                        </div>
                    </div>
                </div>

                <div>
                    <div class="col">
                        <div class="form-outline">
                            <label class="form-label" for="form9Example1">Role</label><br>
                            <select name="role" required id="" style="height: 32px; width: 370px; border: 1px solid lightgray;">
                                <option value="manager">Manager</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="col">
                        <div class="form-outline">
                            <label class="form-label" for="form9Example1">Phone Number</label>
                            <input type="number" required name="phone" min="6" value="{{old('phone')}}" class="form-control" />
                            @error('phone')
                                {{$message}}
                            @enderror
                        </div>
                    </div>
                </div>
                <div>
                    <div class="col">
                        <div class="form-outline">
                            <label class="form-label" for="form9Example1">Email</label>
                            <input type="email" required name="email" value="{{old('email')}}" class="form-control" />
                            @error('email')
                                {{$message}}
                            @enderror
                        </div>
                    </div>
                </div>
                <div>
                    <div class="col">
                        <div class="form-outline">
                            <label class="form-label" for="form9Example1">Password</label>
                            <input type="password" required name="password" value="{{old('password')}}" min="6" max="32" class="form-control" />
                            @error('password')
                                {{$message}}
                            @enderror
                        </div>
                    </div>
                </div>
                <div>
                    <div class="col">
                        <div class="form-outline">
                            <label class="form-label" for="form9Example1">Upload Photo</label>
                            <input type="file" required name="photo" value="{{old('photo')}}" class="form-control" />
                            @error('photo')
                                {{$message}}
                            @enderror
                        </div>
                    </div>
                </div>

                <br /><br />

                <div class="col-md-12">
                    <div class="col-md-8">
                        <a class="btn btn-info" href="{{url('/admin')}}" type="submit">Go back</a>
                    </div>
                    <div class="col-md-4">
                        <button class="btn btn-info" type="submit">Submit</button>
                    </div>
                </div>

                <br /><br /><br /><br />

                </form>

            </div>
        </div>
    </div>

    <div class="col-md-4 justify-content-center">
    </div>

</div>
</div>

@endsection