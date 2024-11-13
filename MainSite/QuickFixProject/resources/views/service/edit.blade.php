<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body>
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Dashboard') }}
                <ul class="flex justify-center">
                    <li class="bg-cyan-800 text-white font-bold p-4 rounded">
                        <a class="font-bold" href="{{ route('dashboard') }}">List Of service</a>
                    </li>
                    
                </ul>
            </h2>
            <img src="" alt="">
        </x-slot>
      
        @if($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
            <strong class="font-bold">Errors:</strong>
            <ul class="mt-2">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <div class="container mx-auto max-w-lg p-8 mt-4 bg-white rounded-lg shadow-md">
        <h2 class="text-2xl font-bold mb-6 text-center text-cyan-800">Edite ur service</h2>
        <form action="{{ route('services.update',$service->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Service Name</label>
                <input type="text" name="name" id="name" class="w-full mt-1 p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-cyan-600" required value="{{old('name',$service->name)}}">
            </div>
    
            <div class="mb-4">
                <label for="description" class="block text-sm font-medium text-gray-700">Service Description</label>
                <textarea name="description" id="description" rows="4" class="w-full mt-1 p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-cyan-600" required>{{old('description',$service->description)}} </textarea>
            </div>
    
            <div class="mb-4">
                <label for="image" class="block text-sm font-medium text-gray-700">Service Image</label>
                <input type="file" name="image" id="image" class="w-full mt-1 p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-cyan-600" accept="image/*" >
                <img src="{{ Storage::url($service->image) }}" alt="Service Image" class="w-20 h-20 rounded-lg">
            </div>
    
            <div class="flex justify-center">
                <button type="submit" class="bg-cyan-800 text-white font-semibold py-2 px-6 rounded-lg hover:bg-cyan-600 focus:outline-none focus:ring-2 focus:ring-cyan-600">Edite Service</button>
            </div>
        </form>
    </div>
</x-app-layout>
</body>
</html>
