$(document).ready(function(){
	
	cat();
	function cat(){

		$.ajax({
			url : "action.php",
			method :"POST",
			data : {category:1},
			success : function(data){
				 
				$("#get_category").html(data);

			}
		});

		
	}
  
 product();
	function product(){
				$.ajax({
			url : "action.php",
			method :"POST",
			data : {product:1},
			success : function(data){
				
				$("#get_product").html(data);

			}
		});
	}

$("#submitbtn").click(function(event) {
	 

    event.preventDefault();
    			$.ajax({
			url : "regi.php",
			method :"POST",
			data : $("form").serialize(),
			success : function(data){
				
				 $("#signup_msg").html(data);

			}
		});
});
$("#loginbtn").click(function(event) {
	 

    event.preventDefault();
    var email= $("#email").val();
    var pass= $("#password").val();
    			$.ajax({
			url : "logindatabase.php",
			method :"POST",
			data : {userLogin: 1,userEmail:email,userPassword:pass},
			success : function(data){
				if(data=="truelogin"){
				    window.location.href="profile.php";
				}else{
					alert(data);
				}

			}
		});
});
  
  	$("body").delegate("#product","click",function(event){
  		event.preventDefault();
  		// alert("addtocart");
  		var p_id=$(this).attr("pid");
  		
  		$.ajax({
  			url:"action.php",
  			method:"POST",
  			data:{addToproduct:1,proId:p_id},
  			success:function(data){
  				$("#product_msg").html(data);

  			}
  		});
  	});
 $("body").delegate("#mycartbtn","click",function(event){
	 

    event.preventDefault();
   		
    			$.ajax({
			url : "action.php",
			method :"POST",
			data : {get_cart_product: 1},
			success : function(data){
				$("#cart_product").html(data);

			}
		});
});

 $("#searchbtn").click(function(event) {
	 

    event.preventDefault();
    var key= $("#searchinput").val();
    			$.ajax({
			url : "action.php",
			method :"POST",
			data : {search: 1,keyword:key},
			success : function(data){	
			$("#get_product").html(data);	
			}
		});
});

  $("body").delegate("#select_category","click",function(event){
	 // alert("hello");
      event.preventDefault();
    var cat=$(this).attr("cid");
    		
   		
    			$.ajax({
			url : "action.php",
			method :"POST",
			data : {get_selected_category: 1,cat_id:cat},
			success : function(data){
				$("#get_product").html(data);

			}
		});
});

 $("body").delegate(".qty","keyup",function(event){
	  // alert("hello");
	      event.preventDefault();
        var p_id=$(this).attr("pro_id");
        // alert(p_id);
    	var u_id=$(this).attr("uid");
    	var id="#qty-"+p_id;
    	var idp="#price-"+p_id;
    	var price=$(idp).val();
    	var qty=$(id).val();
    	var total=qty*price;
   		$("#total-"+p_id).val(total);
 
});
 $("body").delegate("#removecart","click",function(event){
	  
  //     event.preventDefault();
     var p_id=$(this).attr("pro_id");
    		
   	
    			$.ajax({
			url : "action.php",
			method :"POST",
			data : {removeFromCart: 1,remove_id:p_id},
			success : function(data){
				$.ajax({
			url : "action.php",
			method :"POST",
			data : {get_cart_product: 1},
			success : function(data){
				$("#cart_product").html(data);

			}
		});

			}
		});
});
 $("body").delegate("#updatecart","click",function(event){
	  alert("hello");
  //     event.preventDefault();
  //   var cat=$(this).attr("cid");
    		
   		
  //   			$.ajax({
		// 	url : "action.php",
		// 	method :"POST",
		// 	data : {get_selected_category: 1,cat_id:cat},
		// 	success : function(data){
		// 		$("#get_product").html(data);

		// 	}
		// });
});
});

