<div class="row justify-content-center">
    <div class="col-6 mt-5">
        <section class="card bg-translucent">
            <div class="container h-full max-w-5xl mx-auto overflow-hidden rounded-lg shadow">
                <h3 class="text-center mt-5">Contact Form</h3>
                <div class="row justify-content-center">
                    @if ($success)
                    <div class="col-md-12 col-12">
                        <div class="alert alert-success" role="alert">
                            <strong><span class="text-success">Success</span></strong>
                            <p class="mb-1 text-sm leading-none text-gray-500">{{ $success }}</p>
                        </div>
                    </div>
                    @endif
                    <div class="col-md-12 col-12">
                        <div class="flex items-center justify-center w-full p-10">
                            <form wire:submit.prevent="contactFormSubmit" action="/contact" method="POST" class="w-full">
                                @csrf
                                <div class="pb-3">
                                    <input wire:model="email" class="form-control" type="text" placeholder="Email Address" name="email" value="{{ old('email') }}" />
                                    @error('email')
                                        <small class="text-danger mt-1">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="py-3">
                                    <input wire:model="name" class="form-control" type="text" placeholder="Name" name="name" value="{{ old('name') }}" />
                                    @error('name')
                                        <small class="text-danger mt-1">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="py-3">
                                    <textarea wire:model="comment" row="4" class="form-control" name="comment" placeholder="Your message here...">{{ old('comment') }}</textarea>
                                    @error('comment')
                                        <small class="text-danger mt-1">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="pt-3 pb-3">
                                    <button class="btn btn-brown" type="submit">
                                        <span class="self-center float-left ml-3 text-base font-medium">Submit</span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>



