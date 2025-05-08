<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>

        
    </x-slot>

    <div class="p-6 text-gray-900">
        <a href="{{route('allUsers.index')}}" class="btn btn-primary ml-10">Back to list</a>

        <h1 class="text-center fw-bold"> View  </h1>
        
        <div class="col-md-4">
            <label for="validationDefault01" class="form-label">Name</label>
            <input type="text" class="form-control" id="validationDefault01" value="{{$usr1->name}}" readonly>
          </div>

          <div class="col-md-4">
            <label for="validationDefault02" class="form-label">Email</label>
            <input type="text" class="form-control" id="validationDefault02" value="{{$usr1->email}}" readonly>
          </div>

            

          </div>
                      
        
    </div>
                      
                    
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
