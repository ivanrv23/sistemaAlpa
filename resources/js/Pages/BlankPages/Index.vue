<template>
    <admin-layout>
        Bienvenido¡¡
    </admin-layout>
</template>

<script>
import AdminLayout from '@/Layouts/AdminLayout'

export default {
    components: {
        AdminLayout,
    },
    // redireccionar formulario
    mounted() {
        window.open('/dashboard');
        window.close();
    },
}
</script>
