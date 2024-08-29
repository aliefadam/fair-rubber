@if ($jenis == 'success')
    <div id="toast-success"
        class="my-toast animate__animated animate__fadeInUp fixed z-[999999999] bottom-5 right-5 flex items-center w-full max-w-xs p-4 mb-4 bg-gradient-to-r from-green-700 to-green-500 rounded-lg"
        role="alert">
        <div class="inline-flex items-center justify-center flex-shrink-0 w-9 h-9 text-green-500 rounded-">
            <i
                class="fa-solid fa-check bg-white rounded-full w-6 h-6 text-green-700 text-xs leading-none flex justify-center items-center"></i>
        </div>
        <div class="ms-3 text-sm font-normal text-white">{{ $pesan }}</div>
        <button type="button" onclick="closeToast($(this).parent())"
            class="close-toast ms-auto -mx-1.5 -my-1.5 text-white hover:text-gray-200 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 inline-flex items-center justify-center h-8 w-8">
            <i class="fa-solid fa-x text-xs"></i>
        </button>
    </div>
@elseif($jenis == 'warning')
    <div id="toast-warning"
        class="my-toast animate__animated animate__fadeInUp fixed z-[999999999] bottom-5 right-5 flex items-center w-full max-w-xs p-4 mb-4 bg-gradient-to-r from-yellow-700 to-yellow-500 rounded-lg"
        role="alert">
        <div class="inline-flex items-center justify-center flex-shrink-0 w-9 h-9 text-yellow-500 rounded-">
            <i
                class="fa-solid fa-check bg-white rounded-full w-6 h-6 text-yellow-700 text-xs leading-none flex justify-center items-center"></i>
        </div>
        <div class="ms-3 text-sm font-normal text-white">{{ $pesan }}</div>
        <button type="button" onclick="closeToast($(this).parent())"
            class="close-toast ms-auto -mx-1.5 -my-1.5 text-white hover:text-gray-200 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 inline-flex items-center justify-center h-8 w-8">
            <i class="fa-solid fa-x text-xs"></i>
        </button>
    </div>
@else
    <div id="toast-error"
        class="my-toast animate__animated animate__fadeInUp fixed bottom-5 right-5 flex items-center w-full max-w-xs p-4 mb-4 bg-gradient-to-r from-red-700 to-red-500 rounded-lg"
        role="alert">
        <div class="inline-flex items-center justify-center flex-shrink-0 w-9 h-9 text-red-500 rounded-">
            <i
                class="fa-solid fa-x bg-white rounded-full w-6 h-6 text-red-700 text-xs leading-none flex justify-center items-center"></i>
        </div>
        <div class="ms-3 text-sm font-normal text-white">{{ $pesan }}</div>
        <button type="button" onclick="closeToast($(this).parent())"
            class="close-toast ms-auto -mx-1.5 -my-1.5 text-white hover:text-gray-200 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 inline-flex items-center justify-center h-8 w-8">
            <i class="fa-solid fa-x text-xs"></i>
        </button>
    </div>
@endif

<script>
    function closeToast(parent) {
        parent.removeClass("animate__fadeInUp").addClass("animate__fadeOutDown");
        setTimeout(() => {
            parent.hide();
        }, 600);
    }

    setTimeout(() => {
        $(".my-toast").removeClass("animate__fadeInUp").addClass("animate__fadeOutDown");
        setTimeout(() => {
            $("#toast-success").hide();
        }, 600);
    }, 5000);
</script>
