// JavaScript Document
/*alert('script');*/
$(function(){
/*var a	='';
  $.ajax(
  {
   type: "post", 
   url: 'dashboard/xhrGetList', 

  success:function(result){
   a=jQuery.parseJSON(result);
   alert(a.length);
   for(i=0;i<a.length;i++)
   	$("#listInsert").append(a[i].text);
  }});
*/
		
$.get('dashboard/xhrGetList',function(o){
			   for(i=0;i<o.length;i++)
   $("#listInsert").append('<div>'+o[i].fld+'  -  <a href="#" class="del" rel="'+o[i].id+'">X</a> <div>');
		$(".del").click(function(){
			var id=$(this).attr('rel');
			var delitem=$(this);
			
			var url='dashboard/xhrDel';
			$.post(url,{'id':id},function(o){
				delitem.parent().remove();
			
				});
			/*console.log(data);*/
			return false;
		});
			
	},'json');
			
			
  
	$('#randomInsert').submit(function(){
		var data=$(this).serialize();
		var url=$(this).attr('action');
				$.post(url,data,function(o){
				$("#listInsert").append('<div>'+o.fld+'  -  <a href="#" class="del" rel="'+o.id+'">X</a> <div>');
			
			},'json');
		/*console.log(data);*/
		return false;
	});
	
	

	
	});
	
	
	function add_room(){
		
	$.get('dashboard/xhrGetList',function(o){
			   for(i=0;i<o.length;i++)
   $("#listInsert").append('<div>'+o[i].fld+'  -  <a href="#" class="del" rel="'+o[i].id+'">X</a> <div>');
		$(".del").click(function(){
			var id=$(this).attr('rel');
			var delitem=$(this);
			
			var url='dashboard/xhrDel';
			$.post(url,{'id':id},function(o){
				delitem.parent().remove();
			
				});
			/*console.log(data);*/
			return false;
		});
			
	},'json');
				
	}
