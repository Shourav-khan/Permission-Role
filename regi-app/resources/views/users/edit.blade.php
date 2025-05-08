<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>

        
    </x-slot>

    <div class="p-6 text-gray-900">
        <a href="{{route('allUsers.index')}}" class="btn btn-primary ml-10">Back to list</a>

        <h1 class="text-center fw-bold"> Edit Form  </h1>
        
        <div class="flex items-center justify-center h-screen mt-5 bg-white-100 ">

            <form method="POST" action="{{route('allUsers.update', $us->id)}}" class="bg-primary p-5 rounded w-50" >       
                @csrf
                @method('PUT')
             
                  <div class="mb-3">
                    <label  class="form-label" style="color: white">Name</label>
                    <input type="text" name="name" value="{{$us->name}}" class="form-control w-full" id="exampleInputPassword1">
                    @error('name')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                  </div>

              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label" style="color: white">Email address</label>
                <input type="email" name="email" value="{{$us->email}}" class="form-control w-full" id="exampleInputEmail1" aria-describedby="emailHelp">
                @error('email')
                    <span class="text-danger">{{$message}}</span>
                @enderror
              </div>
          
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label" style="color: white">Password</label>
                <input type="password" name="password" class="form-control w-full" id="exampleInputPassword1">
                @error('password')
                 <span class="text-danger">{{$message}}</span>
                @enderror

              </div>
          
              <div class="flex justify-center">
                <button type="submit" class="btn btn-danger">Update</button>
              </div>
              
            </form>

          </div>
                      
        
    </div>
                      
                    
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
