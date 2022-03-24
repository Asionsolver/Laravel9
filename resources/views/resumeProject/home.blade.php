<x-resume_project.layouts>
    <x-slot name='title'>Home Page</x-slot>
    <x-slot name='content'>
        <div class="mt-5">
            <div class="text-center">
                <img src="{{ asset('../img/img.jpg') }}" alt="image" class="img-thumbnail">
            </div>
            <div class="mt-5 text-white mx-5 text-justify">
                <h1 class="fw-bold font-family"> Hello</h1>
                <div class="px-4 paragraph">
                    <p>I am <b class="text-warning">Ashis Kumar</b> Lorem ipsum dolor sit amet consectetur adipisicing
                        elit. Corporis perferendis suscipit eos minima dignissimos neque iste. Corporis, ex repellendus!
                        Quaerat.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam excepturi aliquam id adipisci
                        pariatur
                        vel libero, ducimus laborum provident neque.</p>
                </div>
            </div>
            <div class="text-center mb-5">
                <a href="{{ route('contact') }}" class="btn btn-outline-warning mx-2">Hire Me</a>
                <a href="{{ route('contact') }}" class="btn btn-outline-info mx-2">Contact</a>
            </div>
        </div>
    </x-slot>
</x-resume_project.layouts>
