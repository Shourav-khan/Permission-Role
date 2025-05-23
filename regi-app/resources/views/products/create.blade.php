<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>

        
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                
                <div class="p-6 text-gray-900">
                    <a href="{{route('allProducts.index')}}" class="btn btn-primary ml-10">Back to list</a>

                    <h1 class="text-center fw-bold"> Create Form  </h1>
                    
                    <div class="flex items-center justify-center h-screen mt-5 bg-white-100 ">

                        <form method="POST" action="{{route('allProducts.store')}}" class="bg-primary p-5 rounded w-50" >       
                            @csrf

                           
                          

                              <div class="mb-3">
                                <label  class="form-label" style="color: white">Name</label>
                                <input type="text" name="name" class="form-control w-full" id="exampleInputPassword1">
                                @error('name')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                              </div>

                        
                                     
                      
                          <div class="flex justify-center">
                            <button type="submit" class="btn btn-danger">Submit</button>
                          </div>
                        </form>

                      </div>
                                  
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
