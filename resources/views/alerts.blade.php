{{-- Notificaciones del controlador de AUTH --}}
@if (session('status') === 'password-updated')
    <script>
        toastr.success('Su contraseña fue modificada con éxito.', 'Actualizar contraseña')
    </script>
@endif
