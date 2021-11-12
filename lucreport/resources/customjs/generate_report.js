$(document).ready(function(){
  
 //date picker fnction
$(function(){
    $('.datepicker').datepicker({
      format: 'yyyy-mm-dd',
      todayHighlight: true,
      autoclose: true,
    });
});

   //report type choosing 
   $('#my-select').on('change', function(){
         let request=$('#my-select').val();
             if(request === 'default')
                {
                    $('.daterow').hide();
                    $('#generate').hide();
                    $('#lgaContainer').hide();

                } 
             else if(request === 'BillDetails' || request === 'PaymentDetails' ) 
                {
                    $('.daterow').show();
                    $('#generate').show();
                    $('#lgaContainer').hide();

                }
             else
                {
                    $('.daterow').hide();
                    $('#generate').show();
                    $('#lgaContainer').show();
                }
   });
         
   //on click of generate button
   $('#generate').click(function(){
    let request=$('#my-select').val().trim();
             if(request === '' || request === null ) {
                    $('#userMessage').html('Date field can not be empty');
                    $('#userMessage').show();
                 }
                 else{
                        if(request === 'EnumerationDetails'){
                            let lga=$('#lga').val().trim();
                            //alert(lga);
                            window.open('enumerationdetails.php?&request='+request+'&lga='+lga ,'_blank')
                        }
                        //if request is bill details
                        if(request === 'BillDetails')
                        {
                               let fromdate=$('#fromdate').val().trim();
                               let todate=$('#todate').val().trim();
                               //validate input
                               if(fromdate === '' || fromdate === null || todate === '' || todate === null ) {
                                    $('#userMessage').html('Date field can not be empty');
                                    $('#userMessage').show();
                                  }
                                  else{
                                    window.open('billdetails.php?&request='+request+'&fromdate='+fromdate+'&todate='+todate, '_blank')
                                  }

                        }// end if request is biill details

                        //if request is payment details
                        if(request === 'PaymentDetails')
                        {
                                let fromdate=$('#fromdate').val().trim();
                                let todate=$('#todate').val().trim();
                               //validate input
                               if(fromdate === '' || fromdate === null || todate === '' || todate === null ) {
                                    $('#userMessage').html('Date field can not be empty');
                                    $('#userMessage').show();
                                  }else{
                                    window.open('paymentdetails.php?&request='+request+'&fromdate='+fromdate+'&todate='+todate, '_blank')
                                  }
                        }// end if request is payment details

                 }

   });


   // focus out of generate button
   $('#generate').focusout(function(){
      $('#userMessage').hide();
   });


});

