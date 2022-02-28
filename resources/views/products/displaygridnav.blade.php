<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script> 
<div style="padding-top:7%" class="container-fluid"> 
    <nav class="navbar navbar-default navbar-fixed-top"> 
        <ul class="list-inline nav navbar-nav navbar-right">
            <li><button id="checkOut" onclick="window.location.href=''" type="button" class="btn btn-primary navbar-btn center-block">Check Out</button></a></li> 
            <li><button id="emptycart" type="button" class="btn btn-primary navbar-btn center-block">Empty Cart</button></li> 
            <li><span style="font-size:40px;margin-right:0px;" class="glyphicon glyphicon-shopping-cart navbar-btn"></span></li> 
            <li><div class="navbar-text" id="shoppingcart" style="font-size:12pt;margin-left:0px;margin-right:0px;"></div></li> 
            <li><div class="navbar-text" style="font-size:14pt;margin-left:0px;">{{$totalItems}} Item(s)</div></li> 
        <ul> 
    </nav> 
</div>