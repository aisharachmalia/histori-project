<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/gaia.css" rel="stylesheet"/>

    <!-- Fonts and icons -->
    <link href='https://fonts.googleapis.com/css?family=Cambo|Poppins:400,600' rel='stylesheet' type='text/css'>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/fonts/pe-icon-7-stroke.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>

    <div class="section section-our-team-freebie">
        <div class="parallax filter filter-color-black">
            <div class="image" style="background-image:url('assets/img/greeks.jpg')">
            </div>
            <div class="container">
                <div class="content">
                    <div class="row">
                        <div class="title-area">
                            <h2>Cari Tokoh Favoritmu Disini</h2>
                            <div class="separator separator-danger">✻</div>
                            <form class="brown-form">
                                <label for="tokoh"><h3>Pilih Kategori Tokoh:</h3></label>
                                <select id="tokoh" name="tokoh">
                                    <option value="">kategori tokoh</option>
                                    @foreach ($kategoris as $kategori)
                                        <option value="{{ $kategori->id }}">{{ $kategori->nama_kategori }}</option>
                                    @endforeach
                                </select>
                                @csrf
                                <button type="submit">
                                    <i class="fas fa-search"></i> Cari
                                </button>
                            </form>
                            <br>
                            <p class="description">Cari Tokoh Sejarah Favoritmu berdasarkan Kategori, untuk mengenal mereka lebih jauh. Jika tertarik, lanjutkan dengan membaca biografi atau tulisan tentang tokoh tersebut untuk memahami lebih dalam peran dan pengaruhnya dalam konteks sejarah.</p>
                        </div>
                    </div>

                    <div class="team">
                        <div class="row justify-content-center">
                            @foreach ($tokohs as $tokoh)
                                <div class="col-md-4 col-sm-6">
                                    <div class="card card-member">
                                        <div class="content">
                                            <div class="avatar avatar-danger">
                                                <img alt="..." class="img-circle" src="{{ asset('images/tokoh/' . $tokoh->foto) }}" width="100px">
                                            </div>
                                            <div class="description">
                                                <h3 class="title">{{ $tokoh->nama }}</h3>
                                                <p class="small-text">{{ $tokoh->tgl_lahir }}</p>
                                                <p class="description">I miss the old Kanye I gotta say at that time I’d like to meet Kanye And I promise the power is in the people and I will use the power given by the people to bring everything I have back to the people.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

<!-- core js files -->
<script src="assets/js/jquery.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.js" type="text/javascript"></script>

<!-- js library for devices recognition -->
<script type="text/javascript" src="assets/js/modernizr.js"></script>

<!-- script for google maps -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

<!-- file where we handle all the script from the Gaia - Bootstrap Template -->
<script type="text/javascript" src="assets/js/gaia.js"></script>

</html>

<style>
    .image {
        background-image: url('assets/img/greeks.jpg');
        background-size: cover; 
        background-repeat: no-repeat; 
        background-position: center; 
        height: 100vh; 
    }
    .brown-form {
        background-color: #D2B48C; 
        padding: 20px;
        border-radius: 5px; 
        width: 500px; 
        margin: 0 auto; 
    }
</style>

<style>
    .brown-form {
        display: flex;
        flex-direction: column;
        max-width: 300px;
        margin: 0 auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #503636;
    }

    label {
        margin-bottom: 10px;
    }

    select {
        padding: 8px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: rgb(37, 28, 28);
        color: white;
    }

    button {
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        background-color: #8e725e;
        color: white;
        font-size: 16px;
        cursor: pointer;
    }

    button i {
        margin-right: 5px;
    }

    .team .row {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }

    .card-member {
        margin-bottom: 30px;
        background-color: #fff;
        border: 1px solid #e3e3e3;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        text-align: center;
        padding: 15px;
    }

    .card-member .avatar {
        margin-bottom: 15px;
    }

    .card-member .title {
        font-size: 1.25rem;
        margin-bottom: 10px;
    }

    .card-member .description {
        font-size: 0.9rem;
        color: #555;
    }
</style>
