<x-project-layout>
    <x-slot name="title">Contact</x-slot>
    <x-slot name="content">
        <div class="container mt-5">
            <h1 class="text-warning mb-5 border-bottom">Contact Us</h1>
            <div class="row text-white mb-5">
                <p class="mx-auto mb-5">
                    Do you have any question? Please do not hesitate to contact us directly. I will come back to you
                    within a matter of hours to help you.
                </p>
                <div class="col-sm-9 mb-5">
                    <form action="">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="contact-name-color" for="inputName">Your Name</label>
                                <input type="text" class="form-control mt-2" id="inputName" required>
                            </div>

                            <div class="col-md-6">
                                <label class="contact-name-color" for="inputEmail">Your Email</label>
                                <input type="email" class="form-control mt-2" id="inputEmail" required>
                            </div>

                            <div class="col-md-12">
                                <label class="contact-name-color" for="inputSubject">Your Subject</label>
                                <input type="text" class="form-control mt-2" id="inputSubject">
                            </div>

                            <div class="col-md-12 mb-3">
                                <label class="contact-name-color" for="inputTextarea">Your Message</label>
                                <textarea class="form-control mt-2" id="inputTextarea" required></textarea>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-warning">Send</button>
                    </form>
                </div>
                <div class="col-sm-3 text-center">
                    <ul class="list-unstyled">
                        <li>
                            <i class="fas fa-map-marker-alt fa-2x i-color"></i>
                            <p>Ranchi, Jharkhand, India</p>
                        </li>

                        <li>
                            <i class="fas fa-phone mt-4 fa-2x i-color"></i>
                            <p>Ranchi, Jharkhand, India</p>
                            <p>+880 17241143339</p>
                        </li>

                        <li>
                            <i class="fas fa-envelope mt-4 fa-2x i-color"></i>
                            <p>Ranchi, Jharkhand, India</p>
                            <p>contact@gamil.com</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="text-center">
            <a href="#" target="_blank"><i class="fab fa-twitter i-color mx-3"></i></a>
            <a href="#" target="_blank"><i class="fab fa-instagram i-color mx-3"></i></a>
            <a href="#" target="_blank"><i class="fab fa-dribbble i-color mx-3"></i></a>
            <a href="#" target="_blank"><i class="fab fa-twitter i-color mx-3"></i></a>
        </div>
    </x-slot>
</x-project-layout>
