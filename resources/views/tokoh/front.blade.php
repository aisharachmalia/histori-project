<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @extends('layouts.app')
@section('content')
<div class="team">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="row">
                <div class="col-md-4">
                    <div class="card card-member">
                        @foreach ($tokohs as $data)
                        <div class="content">
                            <div class="avatar avatar-danger">
                                <img src="{{ asset('images/tokoh/' . $data->foto) }}" width="100">
                            </div>
                            <div class="description">
                                <h3 class="title">{{ $data->nama }}</h3>
                                <p class="small-text">>{{ $data->tgl_lahir }}</p>
                                <p class="description">I miss the old Kanye I gotta say at that time I’d like to meet Kanye And I promise the power is in the people and I will use the power given by the people to bring everything I have back to the people.</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                {{-- <div class="col-md-4">
                    <div class="card card-member">
                        <div class="content">
                            <div class="avatar avatar-danger">
                                <img alt="..." class="img-circle" src="assets/img/faces/face_4.jpg"/>
                            </div>
                            <div class="description">
                                <h3 class="title">Andrew</h3>
                                <p class="small-text">Product Designer</p>
                                <p class="description">I miss the old Kanye I gotta say at that time I’d like to meet Kanye And I promise the power is in the people and I will use the power given by the people to bring everything I have back to the people.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4"> --}}
                    <div class="card card-member">
                        <div class="content">
                            <div class="avatar avatar-danger">
                                <img alt="..." class="img-circle" src="assets/img/faces/face_3.jpg"/>
                            </div>
                            <div class="description">
                                <h3 class="title">Michelle</h3>
                                <p class="small-text">Marketing Hacker</p>
                                <p class="description">I miss the old Kanye I gotta say at that time I’d like to meet Kanye And I promise the power is in the people and I will use the power given by the people to bring everything I have back to the people.</p>
                            </div>
                        </div>
                    </div>
                {{-- </div> --}}
            </div>
        </div>
    </div>
</div>
@endsection
</body>
</html>