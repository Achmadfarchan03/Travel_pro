<script src="{{ url('frontend/libraries/jquery/jquery-3.6.0.min.js') }}"></script>
<script src="{{ url('frontend/libraries/bootstrap/js/bootstrap.js') }}"></script>
<script src="{{ url('frontend/libraries/retina-js/retina.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript">
    $(function(){
        $(document).on('click', '#keluar', function(e){

            e.preventDefault();
            var form = $(this).parents('form');

            Swal.fire({
                title: 'Yakin Deck?',
                text: "Yakin Te Keluar?!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Confirm!'
                }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }
                });
        });

    });

</script>
