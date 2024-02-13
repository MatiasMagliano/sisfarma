{{-- Notificaciones del controlador de AUTH --}}
@if (session('status') === 'profile-updated')
    <script>
        toastr.success('Su perfil ha sido modificado con éxito.');
    </script>
@endif
@if (session('status') === 'password-updated')
    <script>
        toastr.success('Su contraseña fue modificada con éxito.');
    </script>
@endif

{{-- Notificaciones normales de sistema --}}
@if (session('success'))
    <script>
        toastr.success('{!! session('success') !!}');
    </script>
@endif
@if (session('error'))
    <script>
        toastr.error('{!! session('error') !!}');
    </script>
@endif
