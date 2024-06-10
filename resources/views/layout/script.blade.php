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
        Swal.fire("Error", "{{ session('failure') }}", "error");
    </script>
@endif

{{-- admin setting --}}
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
