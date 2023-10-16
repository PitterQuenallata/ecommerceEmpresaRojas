
    $('.jd-slider').jdSlider({
        isLoop:true,
        speed:500
    });

    // esconder slide
    var toogle=false;
    $(document).on("click","#btnSlide",function(){

        if(toogle==false){
            $(".jd-slider").slideUp("fast");
            $("#btnSlide").html('<i class="fas fa-angle-down templateColor"></i>');
            toogle=true;
        }else{
            $(".jd-slider").slideDown("fast");
            $("#btnSlide").html('<i class="fas fa-angle-up templateColor"></i>');
            toogle=false;
        }

    });
