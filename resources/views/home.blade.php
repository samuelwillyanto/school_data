@extends('navbar')

@section('content')

<section class="text-center">
    <h2 class="jumbotron text-center"><strong>Welcome to SJ School</strong></h2>

    <div class="row">
      <div class="col-lg-4 col-md-12 mb-4">
        <div class="card">
          <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
            <img src="https://vineyardgazette.com/sites/default/files/styles/article_img_feature/public/article-assets/main-photos/2022/re_tisbury_school_1.jpg?itok=thhouucJ" class="img-fluid" />
            <a href="#!">
              <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
            </a>
          </div>
          <div class="card-body">
            <h5 class="card-title">School Profile</h5>
            <p class="card-text">
              You can see our school profile and the awards that have been received.
            </p>
            <a href="#!" class="btn btn-primary">Our Profile</a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card">
          <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
            <img src="https://static9.depositphotos.com/1011643/1138/i/950/depositphotos_11389074-stock-photo-young-school-teachers.jpg" class="img-fluid" />
            <a href="#!">
              <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
            </a>
          </div>
          <div class="card-body">
            <h5 class="card-title">Teachers</h5>
            <p class="card-text">
              You can see our teacher's profile
            </p>
            <a href="/teacher" class="btn btn-primary">Our Teachers</a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card">
          <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
            <img src="https://img.republicworld.com/republic-prod/stories/promolarge/xhdpi/ncprymr07ny2taac_1594372017.jpeg" class="img-fluid" />
            <a href="#!">
              <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
            </a>
          </div>
          <div class="card-body">
            <h5 class="card-title">Students</h5>
            <p class="card-text">
              You can see our student's profile
            </p>
            <a href="#!" class="btn btn-primary">Our Students</a>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection
