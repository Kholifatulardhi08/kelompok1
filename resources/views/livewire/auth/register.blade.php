<div class="container">    
    <div class="row mt-5">
        <div class="col-md-4">

        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h1 class="text-center">Register</h1>
                    <form wire:submit.prevent="submit">
                        <div class="form-group">
                            <label for="name">Nama</label>
                            <input wire:model="form.name" type="text" class="form-control" placeholder="Masukan Nama Anda">
                            @error('form.name')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input wire:model="form.email" type="text" class="form-control" placeholder="Masukan Email Anda">
                            @error('form.email')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input wire:model="form.password" type="password" class="form-control" placeholder="Masukan Password Anda">
                        @error('form.password')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input wire:model="form.password_confirmation" type="password" class="form-control" placeholder="Ulangi Password Anda">
                        
                        </div>
                        <div class="form-group">
                            <button class="btn btn-block btn-primary">
                                Submit
                            </button>
                        </div>
                        <div>
                            <a href="/login"> Login !</a><a href="#"> Sudah Punya Akun? </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-4">

        </div>
    </div>        
</div>
<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
</div>