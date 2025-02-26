@if(session('success'))
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            Toastify({
                text: "{{ session('success') }}",
                duration: 3000,
                close: true,
                gravity: "top",
                position: "right",
                backgroundColor: "white",
                className: "toast-success",
                style: {
                    borderRadius: "10px",
                    padding: "15px",
                    color: "#155724",
                    background: "#d4edda",
                    border: "1px solid #c3e6cb",
                    boxShadow: "0px 4px 10px rgba(0, 0, 0, 0.1)",
                    animation: "fadeIn 0.5s ease-out, bounce 0.3s ease-out",
                }
            }).showToast();
        });
    </script>
@endif

@if(session('error'))
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            Toastify({
                text: "{{ session('error') }}",
                duration: 3000,
                close: true,
                gravity: "top",
                position: "right",
                backgroundColor: "red",
            }).showToast();
        });
    </script>
@endif

@if ($errors->any())
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            @foreach ($errors->all() as $error)
                Toastify({
                    text: "{{ $error }}",
                    duration: 3000,
                    close: true,
                    gravity: "top",
                    position: "right",
                    backgroundColor: "red",
                }).showToast();
            @endforeach
        });
    </script>
@endif