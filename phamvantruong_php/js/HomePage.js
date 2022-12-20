$(document).ready(function () {

    // Set image width height
        var x = $('.swiper-slide').width();
        var y = $('.swiper-slide').height();
        $('.swiper-slide img').width(x).height(y);

    // Set value mounts number product
    var num = $('.Main_content_details_option_num #amounts').val();

    // Check amounts product set
    var amount = parseInt($('.amount_product').attr("value"));

    $('.fa-plus').click(function () {
        num++;
        $('.Main_content_details_option_num #amounts').val(num);
        // $('.Main_content_details_option_num #amounts').attr("value",num);
        if(amount < num ){
            alert("Số lượng trong kho hiện không đủ.");
            $('.Main_content_details_option_num #amounts').val(amount);
            $('.Main_content_details_option_num #amounts').attr("value",amount);
        }else{
            $('.Main_content_details_option_num #amounts').attr("value",num);
        }
    });

    $('.fa-minus').click(function () {
        num--;
        if(num == 0)
            num = 1;
        $('.Main_content_details_option_num #amounts').val(num);
        $('.Main_content_details_option_num #amounts').attr("value",num);
        
    });

    // Active Desc Details Product View

    $('.Main_content_data_desc_details:eq(0)').show();

    $('ul.Main_content_data_desc li').click(function () {
        $('ul.Main_content_data_desc li').removeClass('active');
        $(this).addClass('active');

        var n = $('ul.Main_content_data_desc li').index(this);

        $('.Main_content_data_desc_details').hide();

        $('.Main_content_data_desc_details:eq('+n+')').fadeIn(300);
    });

    // Active Home Page
    $('.Main_product:eq(0)').show();

    $('.Main_menu_list li').click(function () {
        $('.Main_menu_list li').removeClass('active');
        $(this).addClass('active');

        var list_position = $('.Main_menu_list li').index(this);

        $('.Main_product').hide();

        $('.Main_product:eq('+list_position+')').fadeIn(3000);

    });


    // Active button pagination
    $('.Main_product_button li').click(function () {
        $('.Main_product_button li').removeClass('active');
        $(this).addClass('active');
    });

})