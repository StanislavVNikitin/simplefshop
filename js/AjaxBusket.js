function AddToBusket(index)
{
	$.ajax({ 	 
	  url: "m/tobasket.php", 
	  method: 'post', 
	  data: {itemId:index} 
	}).done(function(data){ 
	  // Успешное получение ответа 	  
	  $("#busket").html(data); 
	});
}	

function DelBusketItem(index)
{
	$.ajax({ 	 
	  url: "/m/delbasket.php", 
	  method: 'post', 
	  data: {
			 itemId:index,	
			} 
	}).done(function(data){ 
	  // Успешное получение ответа
	  $("#busket").html(data);
	  var str="";
	  $("#busketitem"+index).html(str);  	  
	});
}

function DelGoodItem(index)
{
	$.ajax({ 	 
	  url: "/m/delgood.php", 
	  method: 'post', 
	  data: {
			 goodId:index,	
			} 
	}).done(function(data){ 
	  // Успешное получение ответа
	  var str="";
	  $("#gooditem"+index).html(str);  	  
	});
}

function DelUserItem(index)
{
	$.ajax({ 	 
	  url: "/m/deluser.php", 
	  method: 'post', 
	  data: {
			userId:index,	
			} 
	}).done(function(data){ 
	  // Успешное получение ответа
	  var str="";
	  $("#useritem"+index).html(str);  	  
	});
}

function AdminUserItem(index)
{
	$.ajax({ 	 
	  url: "/m/chuseradmin.php", 
	  method: 'post', 
	  data: {
			userId:index,	
			} 
	}).done(function(data){ 
	  // Успешное получение ответа
	  $("#useritemadmin"+index).html(data); 
	});
}

function UpdateOrder(index)
{
	$.ajax({ 	 
	  url: "/m/chorderstatus.php", 
	  method: 'post', 
	  data: {
			orderId:index,	
			} 
	}).done(function(data){ 
	  // Успешное получение ответа
	  $("#orderitemstatus"+index).html(data);
	  var str="";
	  $("#orderitem"+index).html(str); 
	});
}