<div class="flex items-baseline">
    <!-- icon dislike -->
    <button wire:click="DisLikesCount">
        <svg class="w-4" fill="{{ $condition == true ? 'none' : '#bfbfbf' }}" stroke="#bfbfbf" stroke-linecap="round"
            stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M10 15v4a3 3 0 0 0 3 3l4-9V2H5.72a2 2 0 0 0-2 1.7l-1.38 9a2 2 0 0 0 2 2.3zm7-13h2.67A2.31 2.31 0 0 1 22 4v7a2.31 2.31 0 0 1-2.33 2H17">
            </path>
        </svg>
    </button>
    <span class="text-slate-400 ml-1 text-xs lg:text-sm font-semibold">
        {{ $value }}
    </span>
</div>
