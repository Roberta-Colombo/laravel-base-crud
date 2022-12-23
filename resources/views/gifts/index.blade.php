@extends('layouts.app')

@section('content')
<section class="section-main bg-danger outer-container-cards">
        <div class="cards-container">
            <button class="left-btn">
                <i class="fa-solid fa-angle-left" onclick="scrollLft()"></i>
            </button>
            <div id="box" class="d-flex">
                @foreach ($gifts as $gift)
                <div class="card col-3  me-3" style="width: 18rem;">
                    <img src={{$gift->image}} class="card-img-top" alt="Regalo">
                    <div class="card-body">
                    <h4 class="card-title">{{$gift->name}} {{$gift->surname}}</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href={{route('gifts.show', $gift->id)}} class="btn btn-primary">Apri regalo</a>
                    </div>
                </div>
                @endforeach
            </div>
            <button class="right-btn" onclick="scrollRgt()">
                <i class="fa-solid fa-angle-right"></i>
            </button>
        </div>
</section>   

@endsection

<script>
    function scrollLft() {
        const element = document.getElementById('box');
        element.scrollBy({
            left: -1000,
            behavior: "smooth",
        })
    }

    function scrollRgt() {
      const element = document.getElementById('box');
      element.scrollBy({
        left: 1000,
        behavior: "smooth",
      });
    }
</script>