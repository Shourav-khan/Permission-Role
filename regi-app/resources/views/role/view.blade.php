<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>

        
    </x-slot>

    <div class="p-6 text-gray-900">
        <a href="{{route('roles.index')}}" class="btn btn-primary ml-10">Back to list</a>

        <h1 class="text-center fw-bold"> View  </h1>
        
        <div class="col-md-4">
            <label for="validationDefault01" class="form-label">Name</label>
            <input type="text" class="form-control" id="validationDefault01" value="{{$role->name}}" readonly>
          </div>


          <div>
            <h5 class="mt-4">PErmissions (Name): </h5>
            @foreach ($role->permissions as $permission)
            <p>{{$permission->name}}</p>         
            @endforeach
          </div>
         
            

          </div>
                      
        
    </div>
                      
                    
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
