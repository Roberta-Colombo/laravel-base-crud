@extends('layouts.app')

@section('snow')
<div id="particles-js"></div>
@endsection

@section('content')
<section class="section-main align-items-center justify-content-center col-4 ">
    <div class="form-container   ">
        <form action={{ route('gifts.update', $gift->id) }} method="POST" class="text-white">
            @csrf
            @method('PUT')
         
            <div class="col-6">
                <div class="d-flex flex-column align-items-center mb-4">
                    <label for="gift">Regalo</label>
                    <input required type="text" name="gift" id="gift" placeholder="regalo" class="p-1" value="{{old('gift', $product->gift)}}">
                </div>
                <div class="d-flex flex-column align-items-center mb-4">
                    <label for="name">Nome </label>
                    <input required type="text" name="name" id="name" placeholder=" nome" class="p-1" value="{{old('name', $product->name)}}">
                </div>
                <div class="d-flex flex-column align-items-center mb-4">
                    <label for="surname">Cognome </label>
                    <input required type="text" name="surname" id="surname" placeholder="cognome" class="p-1" value="{{old('surname', $product->surname)}}">
                </div>
            </div>

            
            <div class="col-6">

                <div class="d-flex flex-column align-items-center mb-4">
                    <label for="age">Età</label>
                    <input required type="text" name="age" id="age" placeholder="età" class="p-1" value="{{old('age', $product->age)}}" >
                </div>
    
                <div class="d-flex flex-column align-items-center mb-4">
                    <label for="country">Paese</label>
                    <input required type="text" name="country" id="country"  placeholder="nazione" class="p-1" value="{{old('country', $product->country)}}">
                </div>
        
                <div class="d-flex flex-column align-items-center mb-4">
                    <label for="city">Città</label>
                    <input required type="text" name="city" id="city" placeholder="città" class="p-1" value="{{old('city', $product->city)}}">
                </div>
    </div>

    <div class="col-6 ">
            <div class="d-flex flex-column align-items-center mb-4">
                <label for="address">Indirizzo</label>
                <input required type="text" name="address" id="address"  placeholder="indirizzo" class="p-1" value="{{old('address', $product->address)}}">
            </div> 
    </div>

    <div class="col-6 ">
        <div class="d-flex flex-column align-items-center mb-4">
            <label for="image">Immagine</label>
            <select required name="image" id="image" class="p-1">
                <option value="https://www.labottegadelnerd.com/labottegadelnerd/wp-content/uploads/2020/11/gift-box-png-transparent-21.png" selected>regalo</option>
                <option value="https://www.pngall.com/wp-content/uploads/8/Coal-PNG-Pic.png">carbone</option>
            </select>
            {{-- <input required type="text" name="type" id="type"  placeholder="Inserisci il tipo" class="p-1"> --}}
        </div>
    </div>

    <div class="col">
        <input type="submit" value="Invia" class="btn submit-btn">
    </div>
         </form>
    </div>
    
</section>
@endsection