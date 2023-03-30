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
   
   /*
    document.write('<tr>');
     document.write('<td>');
	   document.write('Column 1');
     document.write('</td>');
	   document.write('<td>');
	    document.write('Column 2');
       document.write('</td>');
	document.write('</tr>');   
	document.write('<tr>');   
	   document.write('<td>');
	   document.write('Content 11');
     document.write('</td>');
	   document.write('<td>');
	    document.write('Content 21');
       document.write('</td>');
	 document.write('<tr>');
	 document.write('</tr>');
	    document.write('<td>');
	   document.write('Content 12');
     document.write('</td>');
	   document.write('<td>');
	    document.write('Content 22');
       document.write('</td>');
    document.write('</tr>');
	*/
   document.write('</table>');
}