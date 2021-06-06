@if (session('Emessage'))
<div class="alert flex flex-row items-center bg-red-200 p-5 rounded border-b-2 border-red-300 my-5 mb-4">
    <div
        class="alert-icon flex items-center bg-red-100 border-2 border-red-500 justify-center h-10 w-10 flex-shrink-0 rounded-full">
        <span class="text-red-500">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
</svg>
        </span>
    </div>
    <div class="alert-content ml-4">
        <div class="alert-title font-semibold text-lg text-red-800">
            {{ __('No se puede agendar') }}
        </div>
        <div class="alert-description text-sm text-red-600">
            {{ session('Emessage') }}
        </div>
    </div>
</div>
@endif