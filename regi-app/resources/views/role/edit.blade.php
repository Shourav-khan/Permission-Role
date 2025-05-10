<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>

        
    </x-slot>

    <div class="p-6 text-gray-900">
        <a href="{{route('allUsers.index', $role->id)}}" class="btn btn-primary ml-10">Back to list</a>

        <h1 class="text-center fw-bold"> Edit Form  </h1>
        
        <div class="flex items-center justify-center h-screen mt-5 bg-white-100 ">

            <form method="POST" action="{{route('roles.update', $role->id)}}" class="bg-primary p-5 rounded w-50" >       
                @csrf
                @method('PUT')
             
                  <div class="mb-3">
                    <label  class="form-label" style="color: white">Name</label>
                    <input type="text" name="name" value="{{$role->name}}" class="form-control w-full" id="exampleInputPassword1">
                    @error('name')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                  </div>       
                  
                  <div class="form-check"> <h5 style="font-size: 30px">Permissions: </h5>
                    @foreach ($permissions as $per)
                      <div class="form-check">
                        <input 
                          class="form-check-input" 
                          type="checkbox" 
                          name="permissions[{{$per->name}}]" 
                          value="{{ $per->name }}" 
                          id="permission_{{ $per->id }}" 
                          {{$role->hasPermissionTo($per->name) ? 'checked' : ''}}
                          
                         >
                        <label class="form-check-label" for="permission_{{ $per->id }}">
                          {{ $per->name }}
                        </label>
                      </div>
                    @endforeach
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
