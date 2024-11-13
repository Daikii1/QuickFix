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
    <div class="container mx-auto mt-8 p-4">
        <table class="min-w-full bg-white border border-gray-200">
            <thead>
                <tr>
                    <th class="px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-gray-600 uppercase tracking-wider">Image</th>
                    <th class="px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-gray-600 uppercase tracking-wider">Name</th>
                    <th class="px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-gray-600 uppercase tracking-wider">Description</th>
                    <th class="px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-gray-600 uppercase tracking-wider">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($services as $service)
                <tr class="border-b">
                    <td class="px-6 py-4">
                        <img src="{{ Storage::url($service->image) }}" alt="Service Image" class="w-20 h-20 rounded-lg">
                    </td>
                    <td class="px-6 py-4 text-gray-700 font-semibold">
                        {{ $service->name }}
                    </td>
                    <td class="px-6 py-4 text-gray-600">
                        {{ $service->description }}
                    </td>
                    <td class="px-6 py-4">
                        <a href="{{ route('services.edit', $service->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-3 rounded mr-2 inline-block">Modify</a>
                        <form action="{{ route('services.destroy', $service->id) }}" method="POST" class="inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-3 rounded mt-2">Delete</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="px-6 py-4 text-center text-gray-500">No services available</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    
    
    
</body>
</html>