<script>
    window.addEventListener('swal:prompt', event => {
        Swal.fire(
        event.detail.title,
        event.detail.message,
        event.detail.type
        )
    });
</script>