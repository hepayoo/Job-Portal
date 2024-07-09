@extends('front.inc.layout')

@section('content')

<style>
body, html {
    margin: 0;
    padding: 0;
    height: 100%;
    font-family: Arial, sans-serif;
}

.content {
    position: relative;
    width: 100%;
    height: 100vh;
    background: url('{{ asset("images/logos/company.jpeg") }}') no-repeat center center/cover;

}

.caption {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
    font-size: 2em;
    color: #333;
    background: rgba(255, 255, 255, 0.5);
    padding: 1em;
    border-radius: 10px;
}

.bold {
    font-weight: bold;
    color: gray;
}

.highlight {
    color: #7b61ff;
}

.icon {
    font-size: 1.2em;
    vertical-align: middle;
}

.trusted {
    text-align: center;
    margin-top: 2em;
}

.trusted p {
    font-size: 1.5em;
    font-weight: bold;
    margin-bottom: 20px;
}

.marquee {
    overflow: hidden;
    width: 100%;
    white-space: nowrap;
    box-sizing: border-box;
    margin-top: 2em;
}

.marquee-content {
    display: inline-block;
    padding-left: 100%;
    animation: marquee 30s linear infinite;
}

.marquee-content img {
    display: inline-block;
    height: 70px;
    margin: 0 20px;
    vertical-align: middle;
}
.marquee-content .github {
    display: inline-block;
    height: 25px;
    margin: 0 20px;
    vertical-align: middle;
}

@keyframes marquee {
    from {
        transform: translateX(0);
    }
    to {
        transform: translateX(-100%);
    }
}



.offers-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
    padding: 20px;
}

.offer-card {
    width: calc(33.33% - 20px); /* Three offers per line */
    margin: 10px;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    background-color: #f9f9f9;
}

.offer-title {
    font-size: 1.2em;
    font-weight: bold;
    margin-bottom: 5px;
}

.offer-description {
    margin-bottom: 10px;
    color: #666;
}

.offer-price {
    font-style: italic;
    color: #888;
}

.offer-company {
    font-size: 0.9em;
    color: #555;
}

.h1 {
    text-align: center;
    margin-top: 2em;
}
</style>

<div class="content">
    <div class="caption">
        <p>How you <span class="bold">search</span> <span class="icon">🔍</span>, <span class="highlight">apply</span> <span class="icon highlight">💼</span>, and <span class="bold">get hired</span> <span class="icon">🎉</span> matters. Do it with us at <span class="bold">YourJobPortal</span>.</p>
    </div>
</div>

<div class="trusted">
    <p>TRUSTED BY TEAMS AT</p>
</div>
<div class="marquee">
    <div class="marquee-content">
        <img class="github" src="{{ asset('images/logos/github.png') }}" alt="GitHub">
        <img src="{{ asset('images/logos/Google1.png') }}" alt="Google">
        <img src="{{ asset('images/logos/Microsoft.png') }}" alt="Microsoft">
        <img src="{{ asset('images/logos/LinkedIn.png') }}" alt="LinkedIn">
        <img src="{{ asset('images/logos/Acer.png') }}" alt="Acer">
        <img src="{{ asset('images/logos/Amazon.png') }}" alt="Amazon">
        <img src="{{ asset('images/logos/Asus.png') }}" alt="Asus">
        <img src="{{ asset('images/logos/Dropbox1.png') }}" alt="Dropbox">
        <img src="{{ asset('images/logos/Gigabyte.png') }}" alt="Gigabyte">
        <img src="{{ asset('images/logos/intel.png') }}" alt="Intel">
        <img src="{{ asset('images/logos/Oracle.png') }}" alt="Oracle">
        <img src="{{ asset('images/logos/Pinterest.png') }}" alt="Pinterest">
        <img src="{{ asset('images/logos/Salesforce.png') }}" alt="Salesforce">
        <img class="github" src="{{ asset('images/logos/github.png') }}" alt="GitHub">
        <img src="{{ asset('images/logos/Google1.png') }}" alt="Google">
        <img src="{{ asset('images/logos/Microsoft.png') }}" alt="Microsoft">
        <img src="{{ asset('images/logos/LinkedIn.png') }}" alt="LinkedIn">
        <img src="{{ asset('images/logos/Acer.png') }}" alt="Acer">
        <img src="{{ asset('images/logos/Amazon.png') }}" alt="Amazon">
        <img src="{{ asset('images/logos/Asus.png') }}" alt="Asus">
        <img src="{{ asset('images/logos/Dropbox1.png') }}" alt="Dropbox">
        <img src="{{ asset('images/logos/Gigabyte.png') }}" alt="Gigabyte">
        <img src="{{ asset('images/logos/intel.png') }}" alt="Intel">
        <img src="{{ asset('images/logos/Oracle.png') }}" alt="Oracle">
        <img src="{{ asset('images/logos/Pinterest.png') }}" alt="Pinterest">
        <img src="{{ asset('images/logos/Salesforce.png') }}" alt="Salesforce">
        <img class="github" src="{{ asset('images/logos/github.png') }}" alt="GitHub">
        <img src="{{ asset('images/logos/Google1.png') }}" alt="Google">
        <img src="{{ asset('images/logos/Microsoft.png') }}" alt="Microsoft">
        <img src="{{ asset('images/logos/LinkedIn.png') }}" alt="LinkedIn">
        <img src="{{ asset('images/logos/Acer.png') }}" alt="Acer">
        <img src="{{ asset('images/logos/Amazon.png') }}" alt="Amazon">
        <img src="{{ asset('images/logos/Asus.png') }}" alt="Asus">
        <img src="{{ asset('images/logos/Dropbox1.png') }}" alt="Dropbox">
        <img src="{{ asset('images/logos/Gigabyte.png') }}" alt="Gigabyte">
        <img src="{{ asset('images/logos/intel.png') }}" alt="Intel">
        <img src="{{ asset('images/logos/Oracle.png') }}" alt="Oracle">
        <img src="{{ asset('images/logos/Pinterest.png') }}" alt="Pinterest">
        <img src="{{ asset('images/logos/Salesforce.png') }}" alt="Salesforce">
       
    </div>
</div>


<h1 class="h1" >All Job Offers</h1>
<div class="offers-container">
    @foreach($allOffers as $offer)
        <div class="offer-card">
         <td><img src="{{ asset('images/logos/' . $offer->img) }}" alt="Offre Image" style="width: 100px; height: auto;"></td>
            <div class="offer-title">{{ $offer->title }}</div>
            <div class="offer-description">{{ $offer->description }}</div>
            <div class="offer-price">{{'$' . $offer->price }}</div>
            
                <button type="submit" class="btn btn-primary">Register</button>
            
        </div>
    @endforeach
</div>








@endsection
