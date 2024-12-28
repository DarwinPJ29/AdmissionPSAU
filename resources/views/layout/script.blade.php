<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
{{-- font awesome --}}
<script src="https://kit.fontawesome.com/54bcf78a4d.js" crossorigin="anonymous"></script>
{{-- jquery --}}
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"
    integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
{{-- datatables --}}
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>

{{-- popper --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>

{{-- axios script --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.3.5/axios.min.js"
    integrity="sha512-nnNHpffPSgINrsR8ZAIgFUIMexORL5tPwsfktOTxVYSv+AUAILuFYWES8IHl+hhIhpFGlKvWFiz9ZEusrPcSBQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
{{-- sweetalert2 --}}
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
{{-- Axios --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.4.0/axios.min.js"
    integrity="sha512-uMtXmF28A2Ab/JJO2t/vYhlaa/3ahUOgj1Zf27M5rOo8/+fcTUVH0/E0ll68njmjrLqOBjXM3V9NiPFL5ywWPQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
    const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
</script>

<script src="{{ asset('assets/script.js') }}"></script>

{{-- DataTable --}}
<script>
    $(document).ready(function() {
        $("#table").DataTable();
    });
</script>

{{-- Login validation --}}
@if (session()->has('success'))
    <script>
        Swal.fire("Success", "{{ session('success') }}", "success");
    </script>
@endif

@if (session()->has('failed'))
    <script>
        Swal.fire("Error", "{{ session('failed') }}", "error");
    </script>
@endif
@if (session()->has('reOpenModal'))
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            function triggerModal() {
                // Get the session value safely and pass it to getElementById
                var openModalBtn = document.getElementById("{{ session('reOpenModal') }}");
                if (openModalBtn) {
                    openModalBtn.click();
                }
            }
            setTimeout(triggerModal, 0);
        });
    </script>
@endif
@if (Request::segment(2) === 'applyNow')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            function triggerModal() {
                // Get the session value safely and pass it to getElementById
                var openModalBtn = document.getElementById("newModalBtn");
                if (openModalBtn) {
                    openModalBtn.click();
                }
            }
            setTimeout(triggerModal, 0);
        });
    </script>
@endif
@if (session()->has('info'))
    <script>
        Swal.fire("Information", "{{ session('info') }}", "Information");
    </script>
@endif

@if (session()->has('activated'))
    <script>
        Swal.fire("Error", "{{ session('activated') }}", "error");
    </script>
@endif
<script>
    document.getElementById('showPassword').addEventListener('change', function() {
        var passwordField = document.getElementById('admin_password');
        var passwordField1 = document.getElementById('admin_password1');
        if (this.checked) {
            passwordField.type = 'text';
            passwordField1.type = 'text';

        } else {
            passwordField.type = 'password';
            passwordField1.type = 'password';
        }
    });
</script>
<script>
    let mybutton = document.getElementById("myBtn");
    window.onscroll = function() {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }

    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
</script>
