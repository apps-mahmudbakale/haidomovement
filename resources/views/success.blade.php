<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Successful | Dr. Shamsuddeen Aliyu Haido Movement</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-50 min-h-screen flex items-center justify-center">
    <div class="bg-white p-8 rounded-lg shadow-lg max-w-md w-full text-center">
        <div class="text-green-500 text-6xl mb-4">
            <i class="fas fa-check-circle"></i>
        </div>
        <h1 class="text-2xl font-bold text-gray-800 mb-4">Registration Successful!</h1>
        <p class="text-gray-600 mb-6">Thank you for joining the movement. Your registration has been received successfully.</p>
        
        <div class="mt-8">
            <a href="{{ url('/') }}" class="inline-block bg-green-600 hover:bg-green-700 text-white font-semibold py-2 px-6 rounded-lg transition duration-200">
                <i class="fas fa-home mr-2"></i> Back to Home
            </a>
            
            <a href="{{ route('register') }}" class="ml-4 inline-block bg-gray-200 hover:bg-gray-300 text-gray-800 font-semibold py-2 px-6 rounded-lg transition duration-200">
                <i class="fas fa-user-plus mr-2"></i> Register Another
            </a>
        </div>
    </div>
</body>
</html>
