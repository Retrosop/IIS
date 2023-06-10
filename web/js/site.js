function messageWrite2() {
   
   a= +prompt('Введите число a');
   b= +prompt('Введите число b');
  document.write('<table border=1>'); 
   for(i=1;i<=a;i+=1){
    document.write('<tr>');
    for(j=1;j<=b;j+=1){
	//document.write(i+' ');
	 
     document.write('<td>');
	   document.write(i*j);
     document.write('</td>');
	   
	
	}
    document.write('</tr>');   
   }
   
   document.write('</table>');
}


$(document).ready(function() { 
	$( "#replaceoradd" ).click(function() {
	   //alert("asdsads");
	   
	 a= +prompt('Введите число a');
     b= +prompt('Введите число b');
	 s='';
     s+='<table border=1>'; 
     for(i=1;i<=a;i+=1){
       s+='<tr>';
       for(j=1;j<=b;j+=1){
	 
       s+='<td>';
	    s+=(i*j);
        s+='</td>';
	   
	
	  }
      s+='</tr>';   
     }
   
      s+='</table>';
	  
	  // var html = ' ';
	   $("#rezultat").append(s);
		
	});
 
});