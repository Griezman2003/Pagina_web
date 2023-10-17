
<script src="assets2/js/jquery-3.3.1.min.js"></script>
<script src="assets2/js/popper.min.js"></script>
<script src="assets2/js/bootstrap.min.js"></script>
<script src="assets2/js/main.js"></script>

{{-- scripts del cuerpo de la pagina --}}

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

{{--libreria de sweet alert--}}
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    @if(Session::has('mensaje'))
     Swal.fire({
      position: 'center',
      icon: 'success',
      title: '{{ Session::get('mensaje') }}',
      showConfirmButton: false,
        timer: 2000
     })
     @endif
</script>