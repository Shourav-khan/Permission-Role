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

                  
                    
                    <h1 class="text-center fw-bold"> Product Table </h1>
                    <a href="{{route('allProducts.create')}}" class="btn btn-primary">Create Product</a>
                    <table class="table">
                        <thead>
                          <tr>

                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Action</th>
                            
                            
                          </tr>
                        </thead>
                        <tbody>

                            @foreach ($pro as $product)
                         <tr>
                            <td>{{$product->id}}</td>
                            <td>{{$product->name}}</td>
                            

                            <td>
                                <form method="POST" action="{{route('allProducts.destroy', $product->id)}}" >
                                    @csrf
                                    @method('DELETE')
                                <a href="{{route('allProducts.edit', $product->id)}}" class="btn btn-warning btn-sm">Edit</a>
                                <a href="{{route('allProducts.show', $product->id)}}" class="btn btn-info btn-sm">View</a>
                                <button class="btn btn-danger btn-sm">Delete</button>
                            </form>
                            </td>
                           
                         </tr>     
                          @endforeach  

                        </tbody>
                      </table>
                    
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
