<!-- Include all js compiled plugins (below), or include individual files as needed -->
<script src="{{ asset('Template/assets/js/jquery.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
<script src="{{ asset('Template/assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('Template/assets/js/bootsnav.js') }}"></script>
<script src="{{ asset('Template/assets/js/jquery.sticky.js') }}"></script>
<script src="{{ asset('Template/assets/js/progressbar.js') }}"></script>
<script src="{{ asset('Template/assets/js/jquery.appear.js') }}"></script>
<script src="{{ asset('Template/assets/js/owl.carousel.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<script src="{{ asset('Template/assets/js/custom.js') }}"></script>
<script>
    $('a[data-toggle="modal"]').on('click', function (e) {
    e.preventDefault(); // Mencegah link membuka gambar langsung
    var imageSrc = $(this).attr('href'); // Ambil href sebagai sumber gambar
    $('#certificateImage').attr('src', imageSrc); // Set src pada modal
});
</script>