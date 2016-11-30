//Custom redirect url
$("#home").click(function(){
	window.location = site_url + "/Controller/";
	return false;
});
$("#logo").click(function(){
	window.location = site_url + "/Controller/";
	return false;
});
$("#about").click(function(){
	window.location = site_url + "/Controller/about/";
	return false;
});
$("#menu5").click(function(){
	if($("#menu5").text()!='Order')
	{
		window.location = site_url + "/Controller/menu/";
		return false;
	}
});
$("#order").click(function(){
	window.location = site_url + "/Controller/order/";
	return false;
});
$("#orderhistory").click(function(){
	window.location = site_url + "/Controller/orderhistory/";
	return false;
});
$("#galleryss").click(function(){
	window.location = site_url + "/Controller/gallery/";
	return false;
});
$("#event").click(function(){
	window.location = site_url + "/Controller/events/";
	return false;
});
$("#reserve").click(function(){
	window.location = site_url + "/Controller/reservation/";
	return false;
});
$("#reservation2").click(function(){
	window.location = site_url + "/Controller/reservation/";
	return false;
});
$("#contact").click(function(){
	window.location = site_url + "/Controller/contact/";
	return false;
});
$("#login").click(function(){
	window.location = site_url + "/Controller/login/";
	return false;
});
$("#register").click(function(){
	window.location = site_url + "/Controller/register/";
	return false;
});
$("#logout").click(function(){
	window.location = site_url + "/Controller/logout/";
	return false;
});
$("#cart").click(function(){
	window.location = site_url + "/Controller/cart/";
	return false;
});

