// slide animation
$('.slide-scroll').on('click', function(e){

    // ambil isi tujuan
    var tujuan = $(this).attr('href');
    // dapatkan elemen tujuan
    var elemenTujuan = $(tujuan);
    // console.log(elemenTujuan);

    // geser dengan halus
    $('html, body').animate({
        scrollTop: elemenTujuan.offset().top
    }, 1500, 'easeInOutExpo');

    e.preventDefault();
});