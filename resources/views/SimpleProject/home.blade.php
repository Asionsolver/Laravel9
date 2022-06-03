<x-projectlayout>
    <x-slot name="title">Home</x-slot>
    <x-slot name="content">
        <div>
            <div class="text-white text-center mt-5">
                <img src="{{ asset('img/home.jpg') }}" alt="Home-Image" class="img-thumbnail">
            </div>

            <div class="mt-5 text-white mx-5 text-justify">
                <h1 class="fw-bold st-font">Hello,</h1>
                <p class="indent">I am <b class="text-warning">Ashis Kumar Pal</b>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt vel sint error veritatis totam.
                    Quaerat sapiente doloremque accusamus quae quidem quis, porro magnam repellendus commodi assumenda
                    inventore et, placeat, dolorum sunt enim.</p>

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate quod deserunt officia facere porro
                    sunt consectetur laboriosam ipsam odit, quia ab provident qui, magni optio hic dignissimos modi
                    dolore facilis inventore voluptatibus enim? Voluptates error saepe quam consequatur suscipit
                    assumenda dolorum iusto sint incidunt. Laborum!</p>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, quaerat quidem libero voluptatum hic
                    fugiat quas autem harum adipisci tempora quis voluptas ea. Architecto eaque cum magni ipsa
                    asperiores eveniet sunt possimus, neque quod quae.</p>
            </div>
            <div class="text-center">
                <a href="{{ route('contact') }}" class="btn btn-outline-warning mx-5 my-3">Contact</a>
                <a href="{{ route('skill') }}" class="btn btn-outline-info mx-5 my-3">Hire Me</a>
            </div>
        </div>
    </x-slot>
</x-projectlayout>
