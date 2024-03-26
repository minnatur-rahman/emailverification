






@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="col-6">
        <div class="card">
            <div class="card-body">
                <h1>Student Address Add</h1>
                <form method="POST" action="{{ route('student.store') }}">
                    @csrf
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Student Name</label>
                      <input type="text" name="name" placeholder="Write Your Name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label"> Student Email</label>
                        <input type="email" name="email" placeholder="Write Your Email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                      </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Phone Number</label>
                      <input type="number" placeholder="Write Your Phone Number" name="phone" class="form-control" id="exampleInputPassword1">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>

        </div>
    </div>
</div>
@endsection
