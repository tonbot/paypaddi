

$(document).ready(function(){
    //AJAX FUNCTION CHART 
      
    
    var formData = { };

   $.ajax //ajax call
       ({
           url: "post/graphdata_post.php",
           type: "POST",
           data: formData,
           encode:true,
           success: function(data)
               {
                    //JSCHARTING START HERE
                 var data=JSON.parse(data);
                JSC.Chart("myChart", {
                    debug: false, 
                    type: 'pie', 
                    title_label_text: 'PAYMENT PERFORMANCE BY MONTH IN CURRENT YEAR', 
                    yAxis: { label_text: 'Amount' }, 
                    xAxis_label_text: 'Monthly',
                    series: [
                      {
                     
                        points: [    { x: "JAN", y: data[0] }, 
                                     { x: "FEB", y: data[1] },
                                     { x: "MAR", y: data[2] }, 
                                     { x: "APR", y: data[3] },  
                                     { x: "MAY", y: data[4] },  
                                     { x: "JUN", y: data[5] },  
                                     { x: "JUL", y: data[6] },  
                                     { x: "AUG", y: data[7] },  
                                     { x: "SEP", y: data[8] },  
                                     { x: "OCT", y: data[9] },  
                                     { x: "NOV", y: data[10] },  
                                     { x: "DEC", y: data[11] }
                                  
                                ]
                      }
                    ]
                  }); //JSCHARTING ENDS HERE
                        console.log(data[1]);
               },
        

           error: function(error)
               { alert("failed"); }   
       }); //end of ajax






})