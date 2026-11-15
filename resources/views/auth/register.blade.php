<x-layout>
    <main>
        <section class="container mt-5">
         <div class="row justify-content-center align-items-center">
            <div class="col-12 col-md-6">
               <form action="{{route('register')}}" method="POST">

               @csrf
               @if ($errors->any())
    <div class="alert alert-danger">
        @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif
                
                <div class="mb-3">
                <label for="exampleInputname" class="form-label">Name</label>
                <input type="text" class="form-control" id="exampleInputtext" name="name">
                </div>

                <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                </div>
                
                <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                </div>

                <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword2" name="password_confirmation">
                </div>
                 
                <button type="submit" class="btn btn-primary">Submit</button>

               </form>
            </div>
         </div>
        </section>
    </main>
</x-layout>