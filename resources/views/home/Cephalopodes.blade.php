@extends('layouts.public')
@section('content')
<link rel="stylesheet" href="{{asset('home')}}/css/product.css">
<style>
	.p-page{
		color:#20b6c9 !important;
	}
	</style>
		
<div class="container">
    <h1 id="ph1">Cephalopods </h1>
</div>
<div class="container p-grid">
<div>
    <img class="r-img" src="{{asset('home')}}/images/portus product images/squids.jpg" style="width:400px; height:350px;">
<h2 class="ph1">Squid(Loligo Duvaucelli)</h2>
<p>For a delicious dish, cooking squid would be the perfect idea. With the respect to World’s nature, thanks to our Professional supply chain from sea to your table, we are serving squids to your table as fresh in the ocean.
</p>
<h5 class="ph1">Available Production&Sizes</h3>
<p>Whole Round : u/3, 3/6, 6/10<br /> 
Whole Cleaned : u/5, u/10, 10/20 <br />
Tubes, Rings, Tentacles. 

</p>

</div>
<div><img class="r-img" src="{{asset('home')}}/images/portus product images/octobus.jpg" style="width:400px; height:350px;">   

<h2 class="ph1">Octopus (Octopus SPP/Octopus Vulgaris)</h2>
<p>Octopus and tentacles… This magnificent seafood will become your favorite for your meals. Grilled, fried or salad, each type different taste…</p>
<h5 class="ph1">Available Production&Sizes</h3>
<p>Baby Octopus<br/>
Octopus Flower Type<br />
Octopus Ball Type


</p>

</div> 
</div>

<div class="container"><img class="r-img" src="{{asset('home')}}/images/portus product images/cuttle.jpg" style="width:400px; height:350px;">   

<h2 class="ph1">Cuttlefish (Sepia Spp)</h2>
<p>As the member of Molluscs, Cuttlefish has a delicious meat as well. </p>
<h5 class="ph1">Available Production&Sizes</h3>
<p>Whole Round <br />
Whole Clean 


</p>

</div> 

			

			
@endsection