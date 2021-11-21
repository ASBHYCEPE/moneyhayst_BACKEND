var lookup = {
   '0': ['CASH', 'PAYCHECK'],
   '1': ['FOOD', 'UTILITIES',         'COMMUNICATION', 'GROCERY', 'MEDICAL',
         'ACCESSORIES', 'TRANSPORTATION', 'OTHERS']
};

$(document).on('change','#transac-options',function(){
   var selectValue = $(this).val();

   $('#category').empty();
   
   for (i = 0; i < lookup[selectValue].length; i++) {
      // Output choice in the target field
      $('#category').append("<option value='" + lookup[selectValue][i] + "'>" + lookup[selectValue][i] + "</option>");
   }
});