<div>


    @switch($details->status_kehadiran)
        @case('Hadir')
        <a href="#" class="">
            <label class="flex bg-green-400 text-gray-700 rounded-md px-3 py-2 my-3 hover:bg-indigo-300 cursor-pointer ">
                <p class="font-bold pl-2">Hadir</p>
            </label>
        </a>
        <a href="{{ url('set-mengajar').'/'.$details->email }}">
            <label class="flex bg-gray-100 text-gray-700 rounded-md px-3 py-2 my-3  hover:bg-indigo-300 cursor-pointer ">

                <p class="pl-2">Mengajar</p>
            </label>
        </a>
        <a href="{{ url('set-absen').'/'.$details->email }}">
            <label class="flex bg-gray-100 text-gray-700 rounded-md px-3 py-2 my-3  hover:bg-indigo-300 cursor-pointer ">

                <p class="pl-2">Tidak Hadir</p>
            </label>
        </a>
            @break
        @case('Tidak Hadir')
            <a href="{{ url('set-hadir').'/'.$details->email }}">
                <label class="flex bg-gray-100 text-gray-700 rounded-md px-3 py-2 my-3  hover:bg-indigo-300 cursor-pointer ">

                    <p class="pl-2">Hadir</p>
                </label>
            </a>
            <a href="{{ url('set-mengajar').'/'.$details->email }}">
                <label class="flex bg-gray-100 text-gray-700 rounded-md px-3 py-2 my-3  hover:bg-indigo-300 cursor-pointer ">

                    <p class="pl-2">Mengajar</p>
                </label>
            </a>
            <a href="#" class="">
                <label class="flex bg-red-400 text-gray-700 rounded-md px-3 py-2 my-3  hover:bg-indigo-300 cursor-pointer ">

                    <p class="pl-2">Tidak Hadir</p>
                </label>
            </a>
            @break
        @case('Mengajar')
            <a href="{{ url('set-hadir').'/'.$details->email }}">
                <label class="flex bg-gray-100 text-gray-700 rounded-md px-3 py-2 my-3  hover:bg-indigo-300 cursor-pointer ">

                    <p class="pl-2">Hadir</p>
                </label>
            </a>
            <a href="#" class="">
                <label class="flex bg-blue-400 text-gray-700 rounded-md px-3 py-2 my-3  hover:bg-indigo-300 cursor-pointer ">

                    <p class="pl-2">Mengajar</p>
                </label>
            </a>
            <a href="{{ url('set-absen').'/'.$details->email }}">
                <label class="flex bg-gray-100 text-gray-700 rounded-md px-3 py-2 my-3  hover:bg-indigo-300 cursor-pointer ">

                    <p class="pl-2">Tidak Hadir</p>
                </label>
            </a>
            @break
        @default

    @endswitch

    <div>
        Di Update Pada : {{ $details->updated_at }} <br>
    </div>
</div>
