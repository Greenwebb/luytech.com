@extends('website.layouts.app')
@section('content')

<style>
@import url("https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap");
:root {
	--font: "Inter", sans-serif;
	--red: #da2535;
	--black: #292929;
	--white: #fbfbfb;
}

html {
	font-size: 62.5%;
}

img {
	max-width: 100%;
}

a {
	text-decoration: none;
}


/* SEARCH BAR CONTAINER */
.search-local {
	width: 100%;
	max-width: 75rem;
	display: flex;
	align-items: center;
	column-gap: 2rem;
	padding-left: 2rem;
	background: var(--white);
	border-radius: 1rem;
	min-height: 7rem;
	height: auto;
	border: 0.1rem solid var(--black);
	border-right: none;
}

/* ICON */
.icon {
	color: var(--red);
	font-size: 3.5rem;
	display: flex;
	align-items: center;
	cursor: pointer;
}

.icon:hover {
	animation: funny-icon 0.4s ease-in-out;
}

@keyframes funny-icon {
	0% {
		scale: 1;
	}

	50% {
		scale: 0.8;
		transform-origin: bottom;
		transform: rotate(-15deg);
	}

	100% {
		scale: 1;
	}
}

/* INPUT */
.search-local input {
	height: 100%;
	width: 100%;
	flex: 1 1 25rem;
	background: var(--white);
	display: flex;
	outline: none;
	border: none;
	color: var(--black);
	font-size: 2.4rem;
}

input[type="text"]::placeholder {
	color: var(--black);
	font-size: 2.4rem;
}

/* BUTTON */
.search-local button {
	background: var(--red);
	border: none;
	border-radius: 0 1rem 1rem 0;
	font-weight: 500;
	font-size: 2.4rem;
	height: 7rem;
	width: 18rem;
	cursor: pointer;
	transition: all 0.3s;
	text-align: center;
}

button a {
	color: var(--white);
}

.search-local button .search-icon {
	display: none;
}

.search-local button:hover {
	letter-spacing: 0.5rem;
}

/* MEDIAS */
@media (max-width: 575px) {
	.search-local {
		padding-left: 0;
		column-gap: 0.25rem;
	}

	.search-local button {
		width: 10rem;
	}

	button a {
		display: none;
	}

	.search-local button .search-icon {
		display: block;
		margin-inline: auto;
		color: var(--white);
		font-size: 3rem;
	}

	input[type="text"]::placeholder {
		font-size: 1.7rem;
	}
}

</style>

<section id="page-title" class="page-title bg-overlay bg-parallax">
    <div class="bg-img">
      <img src="public/web/assets/images/6.jpg" alt="background">
    </div>
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
          <h1 class="pagetitle__heading">Track & Trace</h1>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Track & Trace</li>
            </ol>
          </nav>
        </div><!-- /.col-lg-12 -->
      </div><!-- /.row -->
    </div><!-- /.container -->
  </section><!-- /.page-title -->

  <!-- ======================
     Track Shipmeent
  ========================= -->
  <section id="trackShipmeent" class="track-shipmeent pb-80">
    {{-- <div class="container"> --}}
        <form action="{{route('tracker.search')}}" method="POST"  class="container">
            <div class="search-local">
                <div class="icon">
                    <ion-icon name="search-outline"></ion-icon>
                </div>
            
                <input type="text" name="tracker_id" placeholder="Enter Tracking ID">
                <button type="submit" class="text-white">
                    Track Now
                </button>
            </div>
            
            <!-- icons -->
            <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
            <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        </form>
    {{-- </div><!-- /.container --> --}}
  </section><!-- /.Track Shipmeent -->


@endsection