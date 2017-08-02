$(document).ready(function() {
        $('.js-datepicker').datepicker({
            format: 'dd-mm-yyyy'
        });





         $('input:radio[name="plan[plan]"]').change(function() {
        if ($(this).val() == '1') {
           
            $(".all").show();
            $(".scimap").hide();
            $(".perso").show();

            $("#plan_worktype").attr('required', true);
             $("#plan_housetype").attr('required', false);

            $(".scimap").val('');
        } else {
        	$(".all").show();
            $(".scimap").show();
            $(".perso").hide();

             $(".perso").val('');
          $("#plan_housetype").attr('required', true);
          $("#plan_worktype").attr('required', false);
        }
    });


    });